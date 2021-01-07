<?php

namespace App\Http\Controllers;

use App\Product;
use App\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.blog.view', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
                'title'     => 'required|unique:blogs|max:100',
                'content'   => 'required',
                'image'     => 'required|mimetypes:image/*|max:1000',
            ],
            [
                'title.required'     => 'Kolom harus diisi',
                'title.unique'       => 'Nama produk sudah ada, silahkan menggunakan nama lain',
                'title.max'          => 'Nama produk maksimal 100 karakter',
                'content.required'   => 'Kolom harus diisi',
                'image.required'         => 'Harus ada gambar yang dipilih',
                'image.mimetypes'        => 'Hanya dapat memilih gambar',
                'image.max'              => 'Ukuran gambar maksimal 1MB',
            ]
        );
        $request['user_id'] = Auth::id();
        $image = $request->file('image');
        $title = Str::slug($request->title);
        $extension = $image->getClientOriginalExtension();

        $slug = 'blog' . '-' . date('Ymd') . '_' . $title;
        $imagename = $slug . '.' . strtolower($extension);
        $imagepath = 'blogs/' . $imagename;
        $image->storeAs('public/blogs', $imagename);

        $request['slug'] = $title;
        $request['image_path'] = $imagepath;

        Blog::create($request->all());

        return redirect(url('admin/blogs'))->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('customer.blog-list', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if ($request->title == $product->title) {
            $valid_name = 'required|max:100';
        } else {
            $valid_name = 'required|unique:products|max:100';
        };
        $request->validate(
            [
                'title'     => $valid_name,
                'content'   => 'required',
                'image'         => 'mimetypes:image/*|max:1000',
            ],
            [
                'title.required'     => 'Kolom harus diisi',
                'title.unique'       => 'Judul Artikel sudah ada, silahkan menggunakan nama lain',
                'title.max'          => 'Judul maksimal 100 karakter',
                'description.required'   => 'Kolom harus diisi',
                'image.mimetypes'        => 'Hanya dapat memilih gambar',
                'image.max'              => 'Ukuran gambar maksimal 1MB',
            ]
        );


        $title = Str::slug($request->title);
        $slug = 'product' . '-' . date('Ymd') . '_' . $title;
        $old_image = $blog->image_path;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagename = $slug . '.' . strtolower($extension);
            $imagepath = 'blogs/' . $imagename;

            Storage::delete('public/' . $old_image);
            $image->storeAs('public/blogs', $imagename);
        } else {
            $image = pathinfo($old_image);
            $extension = $image['extension'];
            $imagename = $slug . '.' . $extension;
            $imagepath = 'blogs/' . $imagename;

            if ($old_image != $imagepath) {
                Storage::move('public/' . $old_image, 'public/' . $imagepath);
            }
        };

        $request['slug'] = $title;
        $request['image_path'] = $imagepath;

        Blog::where('id', $blog->id)
            ->update($request->except(['_method', '_token', 'image']));

        return redirect(url('admin/blogs'))->with('success', 'Artikel berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        Blog::destroy($blog->id);
        Storage::delete('public/' . $blog->image_path);
        return redirect(url('admin/blogs'))->with('success', 'Artikel berhasil dihapus');
    }

}
