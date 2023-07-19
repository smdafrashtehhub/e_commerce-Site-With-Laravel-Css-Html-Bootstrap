@extends('admin.layouts.admin')
@section('title','tags edit')
@section('content')
    <div class="row bg-white p-5">
        <div class="col-12">
            <h5>ویرایش  ویژگی : {{$tag->name}}</h5>
            <hr>
        </div>
        @include('admin.sections.errors')
        <div class="col-12">
            <form action="{{route('admin.tags.update',['tag'=>$tag->id])}}" method="post">
                @csrf
                @method('put')
                <div class="col-md-6">
                    <label class="form-label" for="name">نام</label>
                    <input class="form-control" id="name" name="name" type="text" value="{{$tag->name}}">
                </div>
                <div class="col-12 mt-4">
                    <button class="btn btn-primary ml-3" type="submit">ویرایش</button>
                    <a class="btn btn-dark" href="{{route('admin.tags.index')}}" >بازگشت</a>
                </div>
            </form>
        </div>
    </div>
@endsection
