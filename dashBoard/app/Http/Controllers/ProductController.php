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
        // $products = Product::with(['brands', '$categories'])->get();;
        $products = Product::with(['brand', 'category'])->get();;
        // dd($products);
        return view("product.index", compact("products"));
    }
    public function add()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view("product.add", compact("brands", "categories"));
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
            "image"=> "required",
        ]);
        $product = new Product();
        $product->prod_name = $request->prodName;
        $product->prod_price = $request->prodPrice;
        $product->stock = $request->prodStock;
        $product->description = 'test';
        $product->rate = 5;
        $product->categId = $request->categId;
        $product->brandId = $request->brandId;
        // dd($product);
        if ($request->hasFile('prodImage')) {
            $prodImage = $request->file('prodImage');
            $extention = $prodImage->getClientOriginalExtension();
            $fileName = time() . '.' . $extention;
            $prodImage->move(public_path('prodIamge'), $fileName);
            $product->image = $fileName;
        }
        $product->save();
        return redirect("/product")->with("success", "");

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
