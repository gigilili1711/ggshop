@section('title','| Chỉnh sửa')
@extends('adminlayout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                <h5 class="alert alert-success">{{ session('status')}}</h5>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Update Sản phẩm <a href="{{ route('product.all')}}"
                                class="btn btn-danger float-end">BACK</a></h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.update', ['id'=>$product->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Tên sản phẩm:</label>
                                <input type="text" name="tensp" id="" value="{{ $product->tensp}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Giá:</label>
                                <input type="number" name="gia" id="" value="{{ $product->gia}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Giá sale:</label>
                                <input type="number" name="giasale" id="" value="{{ $product->giasale}}" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Ảnh sản phẩm:</label>
                                <input type="file" name="anhsp" id="" class="form-control">
                                <img src="{{ asset('uploads/products/'.$product->anhsp)}}" width="70px"
                                    height="70px" alt="Anh san pham" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mô tả:</label>
                                <input type="text" name="mota" id="" value="{{ $product->mota}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Chi tiết:</label>
                                <input type="text" name="chitiet" id="" value="{{ $product->chitiet}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
