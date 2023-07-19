@extends('admin.layouts.admin')
@section('title','tags create')
@section('content')
<div class="row p-5 bg-white">
    <div class="col-12">
        <h5>ایجاد تگ</h5>
        <hr>
    </div>
    @include('admin.sections.errors')
    <div class="col-12">
        <form class="row" action="{{route('admin.tags.store')}}" method="post">
            @csrf
            <div class="col-lg-4 col-sm-6">
                <label for="name" class="form-label">نام</label>
                <input class="form-control" id="name" name="name" type="text" value="{{old('name')}}">
            </div>
            <div class="col-12 mt-sm-4">
                <button type="submit" class="btn btn-success ms-3 my-sm-0 my-4">ثبت</button>
                <a href="{{route('admin.tags.index')}}" class="btn btn-primary">بازگشت</a>
            </div>
        </form>
    </div>
</div>
@endsection
