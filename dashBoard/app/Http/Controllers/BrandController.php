<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $brands = Brand::all();
        foreach ($brands as $brand) {
            $brand->prodBrand;
            $brand->created_at_formatted = Carbon::parse($brand->created_at)->format('d/m/Y');
            $brand->updated_at_formatted = Carbon::parse($brand->updated_at)->format('d/m/Y');
        }
        return view("product.brand.brand", compact("brands"));
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
        // dd('test');
        $request->validate([
            "prodBrand"=> "required",
        ]);
        $brand = new Brand();
        $brand->prodBrand = $request->prodBrand;

        $brand->save();
        return redirect("/brand")->with("success","");
    }
    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('product.brand.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
