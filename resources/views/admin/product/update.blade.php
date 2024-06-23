@extends('admin.app')
@section('link','../../')
@section('content')
    <div class="main-panel" style="margin-top: 30px;">
        <form action="{{route('products.update',['products'=>$product->id])}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('admin.product.form')
        </form>
    </div>
@endsection

