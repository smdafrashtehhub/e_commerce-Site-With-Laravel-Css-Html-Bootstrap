@extends('admin.layouts.admin')
@section('title','show brand')
@section('content')
    <div class="row bg-white p-5">
        <div class="col-12">
            <h5>برند :  <span>{{$brand->name}}</span></h5>
            <hr>
        </div>
        <div class="col-12 ">
            <div  class="row gy-5">
                <div class="col-lg mb-4">
                    <label  class="form-label">نام</label>
                    <input class="form-control" type="text" value="{{$brand->name}}" disabled>
                </div>
                <div class="col-lg mb-4">
                    <label  class="form-label">وضعیت</label>
                    <input class="form-control" type="text" value="{{$brand->is_active}}" disabled>
                </div>
                <div class="col-lg mb-4">
                    <label for="" class="form-label">تاریخ ایجاد</label>
                    <input class="form-control" type="text" value="{{verta($brand->created_at)}}" disabled>
                </div>
                <div class="col-12 ">
                    <a href="{{route('admin.brands.index')}}" class="btn btn-dark col-">بازگشت <i class="fa fa-rotate-back"></i> </a>
                </div>

            </div>
        </div>
    </div>
@endsection
