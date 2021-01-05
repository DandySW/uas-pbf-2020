<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.produk.view', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.produk.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'prod_name'     => 'required|unique:products|max:100',
                'category_id'   => 'required',
                'stock'         => 'required|numeric',
                'price'         => 'required|numeric',
                'weight'        => 'required|numeric',
                'description'   => 'required',
                'image'         => 'required|mimetypes:image/*|max:1000',
            ],
            [
                'prod_name.required'     => 'Kolom harus diisi',
                'prod_name.unique'       => 'Nama produk sudah ada, silahkan menggunakan nama lain',
                'prod_name.max'          => 'Nama produk maksimal 100 karakter',
                'category_id.required'   => 'Kategori harus dipilih',
                'stock.required'         => 'Kolom harus diisi',
                'stock.numeric'          => 'Hanya dapat diisi dengan angka',
                'price.required'         => 'Kolom harus diisi',
                'price.numeric'          => 'Hanya dapat diisi dengan angka',
                'weight.required'        => 'Kolom harus diisi',
                'weight.numeric'         => 'Hanya dapat diisi dengan angka',
                'description.required'   => 'Kolom harus diisi',
                'image.required'         => 'Harus ada gambar yang dipilih',
                'image.mimetypes'        => 'Hanya dapat memilih gambar',
                'image.max'              => 'Ukuran gambar maksimal 1MB',
            ]
        );

        $image = $request->file('image');
        $prod_name = Str::slug($request->prod_name);
        $extension = $image->getClientOriginalExtension();

        $slug = 'product' . '-' . date('Ymd') . '_' . $prod_name;
        $imagename = $slug . '.' . strtolower($extension);
        $imagepath = 'products/' . $imagename;
        $image->storeAs('public/products', $imagename);

        $request['slug'] = $prod_name;
        $request['image_path'] = $imagepath;

        Product::create($request->all());

        return redirect(url('admin/products'))->with('success', 'Data Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.produk.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.produk.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request->prod_name == $product->prod_name) {
            $valid_name = 'required|max:100';
        } else {
            $valid_name = 'required|unique:products|max:100';
        };
        $request->validate(
            [
                'prod_name'     => $valid_name,
                'category_id'   => 'required',
                'stock'         => 'required|numeric',
                'price'         => 'required|numeric',
                'weight'        => 'required|numeric',
                'description'   => 'required',
                'image'         => 'mimetypes:image/*|max:1000',
            ],
            [
                'prod_name.required'     => 'Kolom harus diisi',
                'prod_name.unique'       => 'Nama produk sudah ada, silahkan menggunakan nama lain',
                'prod_name.max'          => 'Nama produk maksimal 100 karakter',
                'category_id.required'   => 'Kategori harus dipilih',
                'stock.required'         => 'Kolom harus diisi',
                'stock.numeric'          => 'Hanya dapat diisi dengan angka',
                'price.required'         => 'Kolom harus diisi',
                'price.numeric'          => 'Hanya dapat diisi dengan angka',
                'weight.required'        => 'Kolom harus diisi',
                'weight.numeric'         => 'Hanya dapat diisi dengan angka',
                'description.required'   => 'Kolom harus diisi',
                'image.mimetypes'        => 'Hanya dapat memilih gambar',
                'image.max'              => 'Ukuran gambar maksimal 1MB',
            ]
        );


        $prod_name = Str::slug($request->prod_name);
        $slug = 'product' . '-' . date('Ymd') . '_' . $prod_name;
        $old_image = $product->image_path;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagename = $slug . '.' . strtolower($extension);
            $imagepath = 'products/' . $imagename;

            Storage::delete('public/' . $old_image);
            $image->storeAs('public/products', $imagename);
        } else {
            $image = pathinfo($old_image);
            $extension = $image['extension'];
            $imagename = $slug . '.' . $extension;
            $imagepath = 'products/' . $imagename;

            if ($old_image != $imagepath) {
                Storage::move('public/' . $old_image, 'public/' . $imagepath);
            }
        };

        $request['slug'] = $prod_name;
        $request['image_path'] = $imagepath;

        Product::where('id', $product->id)
            ->update($request->except(['_method', '_token', 'image']));

        return redirect(url('admin/products'))->with('success', 'Data Produk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        Storage::delete('public/' . $product->image_path);
        return redirect(url('admin/products'))->with('success', 'Data Produk berhasil dihapus');
    }
}
