<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.kategori.view', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
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
                'cat_name'  => 'required|unique:categories|max:30',
            ],
            [
                'cat_name.required' => 'Kolom harus diisi',
                'cat_name.unique'   => 'Kategori sudah ada, silahkan membuat kategori lain',
                'cat_name.max'      => 'Kategori maksimal 30 karakter',
            ]
        );

        $request['slug'] = Str::slug($request->cat_name);
        Category::create($request->all());

        return redirect(url('admin/categories'))->with('success', 'Data Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return redirect(url('admin/categories'))->with('warning', 'Mohon maaf halaman yang anda cari tidak ada');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.kategori.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if ($request->cat_name == $category->cat_name) {
            $valid_name = 'required|max:30';
        } else {
            $valid_name = 'required|unique:categories|max:30';
        };
        $request->validate(
            [
                'cat_name'  => $valid_name,
            ],
            [
                'cat_name.required' => 'Kolom harus diisi',
                'cat_name.unique'   => 'Kategori sudah ada, silahkan membuat kategori lain',
                'cat_name.max'      => 'Kategori maksimal 30 karakter',
            ]
        );

        $request['slug'] = Str::slug($request->cat_name);
        Category::where('id', $category->id)
            ->update($request->except(['_method', '_token']));

        return redirect(url('admin/categories'))->with('success', 'Data Kategori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect(url('admin/categories'))->with('success', 'Data Kategori berhasil dihapus');
    }
}
