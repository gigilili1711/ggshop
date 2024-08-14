@section('title','')
@extends('homelayout')
@section('content')

<h3> Sản Phẩm Bán Chạy</h3>
@if (session('error'))
<h5 class="alert alert-success">{{ session('error')}}</h5>
@endif
<div class="row">


@foreach ($products as $product)
<div class="col-6">
<div class="card my-3" style="max-width: 440px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('uploads/products/'.$product->anhsp)}}" class="img-fluid rounded-start" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$product->tensp}}</h5>
          <p class="card-text fw-semibold text-danger"> Giá KM : {{$product->giasale}} đ </p>
          <p class="card-text"><small class="text-body-secondary">{{$product->mota}}</small></p>
          <button class="btn btn-outline-success"> Mua ngay</button>
          <button class="btn btn-outline-warning"> <i class="bi bi-info-circle"></i> Chi tiết</button>
        </div>
      </div>
    </div>
  </div>

</div>
@endforeach

</div>

@endsection
