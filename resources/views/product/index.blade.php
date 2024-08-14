
@section('title','| Sản phẩm')
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
                        <h3> Sản phẩm <a href="{{ route('product.add')}}"
                                class="btn btn-primary float-end">Thêm sản phẩm </a></h3>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Tên sản phẩm </th>
                                <th>Giá</th>
                                <th>Giá sale</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Mô tả</th>
                                <th>Chi tiết</th>
                                <th>Thao tác</th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->tensp}}</td>
                                    <td>{{$product->gia}}</td>
                                    <td>{{$product->giasale}}</td>
                                    <td><img src="{{ asset('uploads/products/'.$product->anhsp)}}" width="70px"
                                            height="70px" alt="Anh san pham" /></td>

                                    <td>{{$product->mota}}</td>
                                    <td>{{$product->chitiet}}</td>
                                    <td>
                                        <a href="{{ route('product.edit', ['id' => $product->id]) }}"
                                            class="btn btn-primary">Edit</a>
                                        <!-- <a href="{{ route('product.delete', ['id' => $product->id]) }}"
                                            class="btn btn-danger">Delete</a> -->
                                    </td>
                                    <td>
                                        <form action="{{ route('product.delete', ['id'=>$product->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
