@extends('admin.layouts.admin')
@section('title','tags show')
@section('content')
    <div class="row bg-white p-5">
        <div class="col-12">
            <h5>ویژگی : {{$tag->name}}</h5>
            <hr>
        </div>
        <div class="col-12 row ">
            <div class="col-sm-9 col-md col-lg-4 col-xl-3 ">
                <label class="form-label">نام</label>
                <input class="form-control" type="text" value="{{$tag->name}}" disabled>
            </div>
            <div class="col-sm-9 col-md col-lg-4 col-xl-3 my-4 my-md-0">
                <label class="form-label">تاریخ ایجاد</label>
                <input class="form-control" type="text" value="{{verta($tag->created_at)}}" disabled>
            </div>
            <div class="col-12  mt-md-4">
                <a class="btn btn-dark" href="{{route('admin.tags.index')}}">بازگشت</a>
            </div>
        </div>
    </div>
@endsection
