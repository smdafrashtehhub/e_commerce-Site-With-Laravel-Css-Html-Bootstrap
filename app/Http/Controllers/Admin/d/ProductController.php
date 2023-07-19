<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tags=Tag::all();
        $brands=Brand::where('is_active',1)->get();
        $categories=Category::where('is_active',1)->where('parent_id','!=',0)->get();
        $attributes=Attribute::all();
        return view('admin.products.create',compact('brands','categories','tags','attributes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'is_active'=>'required',
            'brands'=>'required',
            'tags'=>'required',
            'description'=>'required',
//            'picture'=>'required|mimes:jpg,jpeg,png,svg',
            'pictures'=>'required ',
//            'pictures.*'=>'mimes:jpg,jpeg,png,svg',
            'categories' => 'required',
            //     'attribute_ids' => 'required',
            //     'attribute_ids.*' => 'required',
            //     'variation_values' => 'required',
            //     'variation_values.*.*' => 'required',
//                 'variation_values.price.*' => 'integer',
//                 'variation_values.quantity.*' => 'integer',
                 'delivery_amount' => 'required|integer',
                 'delivery_amount_per_product' => 'nullable|integer',

        ]);

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
