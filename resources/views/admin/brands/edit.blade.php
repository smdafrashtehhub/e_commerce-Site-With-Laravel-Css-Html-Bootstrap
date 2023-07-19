@extends('admin.layouts.admin')
@section('title','edit brand')
@section('content')
    <div class="row bg-white p-5">
        <div class="col-12">
            <h5>ویرایش برند
                <i class="fa fa-anchor"></i>
                <span class="text-primary">{{$brand->name}}</span>
            </h5>
            <hr>
        </div>
        <div class="col-12">
            @include('admin.sections.errors')
            <form action="{{route('admin.brands.update',['brand'=>$brand->id])}}" class="row" method="post">
                @csrf
                @method('put')
                <div class="col-md-4">
                    <label class="form-label" for="name">نام</label>
                    <input class="form-control" id="name" name="name" type="text" value="{{$brand->name}}">
                </div>

                <div class="col-md-4">
                    <label class="form-label" for="is_active">وضعیت</label>
                    <select class="form-control" name="is_active" id="is_active">
                        <option value="1"
                                @if($brand->getRawOriginal('is_active'))
                                selected
                            @endif>فعال</option>
                        <option value="0"
                                @if($brand->getRawOriginal('is_active') == 0)
                                selected
                            @endif>غیرفعال</option>
                    </select>
                </div>

                <div class="col-12 mt-4">
                    <button class="btn btn-outline-success ml-3" type="submit">ویرایش</button>
                    <a href="{{route('admin.brands.index')}}" class="btn btn-dark">بازگشت</a>
                </div>

            </form>
        </div>
        </div>
@endsection
