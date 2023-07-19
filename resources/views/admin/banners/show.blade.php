@extends('admin.layouts.admin')
@section('title','banners show')
@section('content')
    <div class="row bg-white p-5">

        <div class="col-12">
            <h5>ویژگی : {{$banner->name}}</h5>
            <hr>
        </div>

        <div class="col-12 row ">
            <div class="col-sm-9 col-md col-lg-4 col-xl-3 ">
                <label class="form-label">عنوان</label>
                <input class="form-control" type="text" value="{{$banner->title}}" disabled>
            </div>

            <div class="col-sm-9 col-md col-lg-4 col-xl-3 ">
                <label class="form-label">متن</label>
                <input class="form-control" type="text" value="{{$banner->text}}" disabled>
            </div>

            <div class="col-sm-9 col-md col-lg-4 col-xl-3 ">
                <label class="form-label">نوع</label>
                <input class="form-control" type="text" value="{{$banner->type}}" disabled>
            </div>

            <div class="col-sm-9 col-md col-lg-4 col-xl-3 ">
                <label class="form-label">عکس</label>
                <img class="img-fluid" src="{{asset('upload/files/banners/images/'.$banner->image)}}" alt="">


                    </div>
                </div>

    </div>


@endsection


