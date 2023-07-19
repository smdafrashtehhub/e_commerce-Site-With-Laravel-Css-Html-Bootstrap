@extends('home.layouts.home')

@section('title')
محصصول
@endsection

@section('content')
    @foreach($products as $product)
        {{$product->name}}
    @endforeach
@endsection
