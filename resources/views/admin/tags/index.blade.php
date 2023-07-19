@extends('admin.layouts.admin')
@section('title','tags index')
@section('content')
    <div class="row p-5 bg-white">
        <div class="col-12">
            <div class="d-flex justify-content-between mb-4">
                <div class="">
                    <h5 class="">لیست تگ ها ({{$tags->total()}})</h5>
                </div>
                <a href="{{route('admin.tags.create')}}" class="btn btn-primary"><i class="fa fa-plus ml-2"></i><span>ایجاد تگ</span></a>
            </div>
        </div>

        <div class="col-12">
            <table class="table table-striped table-hover text-center table-bordered ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>عملیات</th>
                </tr>
                </thead>

                <tbody>
                @foreach($tags as $key => $tag)
                    <tr>
                        <td>{{$tags->firstItem() + $key}}</td>
                        <td>{{$tag->name}}</td>
                        <td>
                            <a href="{{route('admin.tags.show',['tag'=>$tag->id])}}" class="btn btn-sm btn-outline-primary ml-3">نمایش
                            </a>
                            <a href="{{route('admin.tags.edit',['tag'=>$tag->id])}}" class="btn btn-sm btn-outline-success">ویرایش
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="width: 200px">{{$tags->links()}}</div>
        </div>

    </div>

@endsection
