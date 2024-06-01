<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['brands', '$categories'])->get();;
        return view("product.index", compact("products"));
    }
    public function add()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view("product.add", compact("brands","categories"));
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
        $request->validate([
            "prodName"=> "required",
            "prodPrice"=> "required",
            "categId"=> "required",
            "brandId"=> "required",
            "prodStock"=> "required",
            "rateId"=> "required",
        ]);
        $category = new Category();
        $category->prodCate = $request->prodCate;
        $category->save();
        return redirect("/category")->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
