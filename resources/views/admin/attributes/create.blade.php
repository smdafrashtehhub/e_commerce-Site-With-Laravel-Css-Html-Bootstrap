@extends('admin.layouts.admin')
@section('title','create attributes')
@section('content')
    <div class="row p-5 bg-white">
        <div class="col-12">
            <h5>ایجاد ویژگی</h5>
            <hr>
            @include('admin.sections.errors')
            <form action="{{route('admin.attributes.store')}}" method="post">
                @csrf
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <label class="form-label" for="name">نام</label>
                    <input class="form-control" id="name" name="name" type="text" value="{{old('name')}}">
                </div>
                <div class="col-12 mt-4">
                    <button class="btn btn-outline-primary ml-3" type="submit">ثبت</button>
                    <a class="btn btn-dark" href="{{route('admin.attributes.index')}}">بازگشت</a>
                </div>
            </form>
        </div>
    </div>
@endsection
