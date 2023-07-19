@extends('admin.layouts.admin')
@section('title','create brand')
@section('content')
    <div class="row bg-white">

        <div class="col-xl-12 col-md-6 mb-4 p-md-5 ">
            <div class="my-2 mx-3">
                <h2 class="fw-bold  ">ایجاد برند</h2>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{route('admin.brands.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3 ">
                        <label for="name" class="form-label">نام</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="col-md-3">
                        <label for="is_active" class="form-label">وضعیت</label>
                        <select name="is_active" id="is_active" class="form-control">
                            <option value="1" selected>فعال</option>
                            <option value="0">غیرفعال</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-outline-primary ">ثبت</button>
                    {{--                <input type="submit" class="btn btn-outline-primary" value="ثبت">--}}
                    <a  href="{{route('admin.brands.index')}}" class="btn btn-dark mr-3">بازگشت</a>
                </div>
            </form>
        </div>



    </div>
@endsection
