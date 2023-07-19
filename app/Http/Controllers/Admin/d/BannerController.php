<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners=Banner::orderByDesc('id')->paginate(8);
        return view('admin.banners.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required | mimes:jpg,jpeg,png,svg',
            'type' => 'required',
            'priority' => 'required | integer'
        ]);

        $fileNameImage=generateFileName($request->image->getClientOriginalName());
//        dd(public_path(env('BANNER_IMAGES_UPLOAD_PATH')));
        $request->image->move(public_path(env('BANNER_IMAGES_UPLOAD_PATH')),$fileNameImage);

        Banner::create([

            'image'=>$fileNameImage,
            'title'=>$request->title,
            'text'=>$request->text,
            'priority'=>$request->priority ,
            'is_active'=>$request->is_active ,
            'type'=>$request->type,
            'button_text'=>$request->button_text,
            'button_link'=>$request->button_link,
            'button_icon'=>$request->button_icon,

        ]);
        return redirect()->route('admin.banners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        return view('admin.banners.show',compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edite',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'image' => 'nullable | mimes:jpg,jpeg,png,svg',
            'type' => 'required',
            'priority' => 'required | integer'
        ]);

        if($request->has('image'))
        {
            $fileNameImage=generateFileName($request->image->getClientOriginalName());
//        dd(public_path(env('BANNER_IMAGES_UPLOAD_PATH')));
            $request->image->move(public_path(env('BANNER_IMAGES_UPLOAD_PATH')),$fileNameImage);
        }

        $banner->update([

            'image'=>$request->has('image')?$fileNameImage:$banner->image,
            'title'=>$request->title,
            'text'=>$request->text,
            'priority'=>$request->priority ,
            'is_active'=>$request->is_active ,
            'type'=>$request->type,
            'button_text'=>$request->button_text,
            'button_link'=>$request->button_link,
            'button_icon'=>$request->button_icon,

        ]);
        return redirect()->route('admin.banners.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return back();
    }
}
