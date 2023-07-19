@extends('admin.layouts.admin')
@section('title','index brand')
@section('content')
    <div class="row p-5 bg-white">
        <div class="col-12">
            <div class="d-flex justify-content-between mb-4">
                <div class="">
                    <h5 class="">لیست برندها ({{$brands->total()}})</h5>
                </div>
                <a href="{{route('admin.brands.create')}}" class="btn btn-primary"><i class="fa fa-plus ml-2"></i><span>ایجاد برند</span></a>
            </div>
        </div>

        <div class="col-12">
            <table class="table table-striped table-hover text-center table-bordered ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>

                <tbody>
                @foreach($brands as $key => $brand)
                    <tr>
                        <td>{{$brands->firstItem() + $key}}</td>
                        <td>{{$brand->name}}</td>
                        <td>
                            <span class="{{$brand->getRawOriginal('is_active') ? 'text-primary':'text-danger'}}">{{$brand->is_active}}</span>
                        </td>
                        <td>
                            <a href="{{route('admin.brands.show',['brand'=>$brand])}}" class="btn btn-sm btn-outline-primary ml-3">نمایش
                            </a>
                            <a href="{{route('admin.brands.edit',['brand'=>$brand])}}" class="btn btn-sm btn-outline-success">ویرایش
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
<div style="width: 200px">{{$brands->links()}}</div>
        </div>

    </div>


@endsection
