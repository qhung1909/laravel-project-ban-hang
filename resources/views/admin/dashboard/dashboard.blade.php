@extends('admin.layouts.app')

@section('title', 'Trang quản lí')

@section('content')

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 p-0 bg-primary collapse collapse-horizontal show" style="min-height:100vh" id="openmenu">
                    <strong class="text-center d-block p-3 text-white">
                        <h3>Trang quản lí</h3>
                    </strong>
                    <div class="list-group list-group-item-success m-3">
                        <a href="#!admin" class="list-group-item list-group-item-action  active" aria-current="true">
                            Quản lí sản phẩm
                        </a>
                        <a href="" class="list-group-item list-group-item-action">Tài khoản</a>
                        <a href="#" class="list-group-item list-group-item-action">Chủ đề</a>
                        <a href="#" class="list-group-item list-group-item-action">Đơn hàng</a>
                    </div>
                </div>
                <div class="col-md p-0">
                    <div class="container">
                        <h2 class="my-3">Thống kê & Sản phẩm</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card border-primary mb-3">
                                    <div class="card-body text-primary">
                                        <h5 class="card-title">Tổng sản phẩm</h5>
                                        <p class="card-text fs-1 text-center">{{ $productCount }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card border-success mb-3">
                                    <div class="card-body text-success">
                                        <h5 class="card-title">Đơn hàng</h5>
                                        <p class="card-text fs-1 text-center">10</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card border-danger mb-3">
                                    <div class="card-body text-danger">
                                        <h5 class="card-title">Số lượng mua</h5>
                                        <p class="card-text fs-1 text-center">10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-warning mb-3">
                                    <div class="card-body text-black">
                                        <h5 class="card-title">Tổng Danh mục</h5>
                                        <p class="card-text fs-1 text-center">{{ $categoriesCount }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="border-top: 1px solid rgb(0, 0, 0)">
                        <div class="container">
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <h2>Biểu đồ lượt mua hàng</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="border-top: 1px solid rgb(0, 0, 0)">
                    <div class="container">
                        <h1>Quản lí sản phẩm</h1>
                        
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                          </div>
                        @endif

                        <br>
                        <a href="" style="text-decoration: none;"><button class="btn btn-md btn-success">Thêm sản
                                phẩm</button></a>
                                
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th style="width: 100px;">Ảnh SP</th>
                                    <th>Sản Phẩm</th>
                                    <th>Gía bán</th>
                                    <th>Gía khuyến mãi</th>
                                    <th>Danh mục</th>
                                    <th>Lượt xem</th>
                                    <th>SP Hot</th>
                                    <th>Ẩn hiện</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td><img src="{{ asset('upload/products') . '/' . $product->img }}" alt=""
                                                style="max-width: 100px;"></td>
                                        <td>{{ $product->tensp }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->price_discount }}</td>
                                        <td><span class="badge text-bg-success"></span>{{ $product->category_name }} </td>
                                        <td>{{ $product->xem }}</td>
                                        <td>
                                            @if ($product->hot == 1)
                                                Sản phẩm <span class="badge text-bg-danger"> Hot </span>
                                            @else
                                                Sản phẩm
                                            @endif
                                        </td>
                                        <td>
                                            @if ($product->an_hien == 1)
                                                Đang hiện ra trang chủ
                                            @else
                                                Đang bị ẩn
                                            @endif
                                        </td>
                                        <td><button class="btn btn-sm btn-warning">Sửa</button>
                                            <button class="btn btn-sm btn-danger">Xóa</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
