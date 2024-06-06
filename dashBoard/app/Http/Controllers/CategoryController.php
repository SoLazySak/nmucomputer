<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            $category->prodCate;
            $category->created_at_formatted = Carbon::parse($category->created_at)->format('d/m/Y');
            $category->updated_at_formatted = Carbon::parse($category->updated_at)->format('d/m/Y');
        }

        return view("product.category",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "prodCate"=> "required",
        ]);
        $category = new Category();
        $category->prodCate = $request->prodCate;
        $category->save();
        return redirect("/category")->with("success","");

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category,$id)
    {
        $category = Category::find($id);
        return view('category.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category,$id)
    {
        $request->validate([
            'prodCate'=>'required'
        ]);

        $category = Category::findOrFail($id);
        $category->prodCate = $request->prodCate;
        $category->update();
        return redirect('/category')->with('message','update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category,$id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category')->with('message','delete successfully');
    }
}
