@extends('layouts.app')

@section('title')
    TopZone 
@endsection

@section('heading')

<div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2500">
            <img src="/img/banner1.webp" class="d-block w-100">
        </div>
        <div class="carousel-item" data-bs-interval="2500">
            <img src="/img/banner2.webp" class="d-block w-100">
        </div>
        <div class="carousel-item" data-bs-interval="2500">
            <img src="/img/banner3.webp" class="d-block w-100">
        </div>
        <div class="carousel-item" data-bs-interval="2500">
            <img src="/img/banner4.webp" class="d-block w-100">
        </div>
        <div class="carousel-item" data-bs-interval="2500">
            <img src="/img/banner5.webp" class="d-block w-100">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection

@section('categories')
    
@endsection

@section('content')
<div class="p-3" style="background-color: #3E3E3F;">
    <div class="container">
        <div class="card text-bg-dark mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <img src="/img/icon-fs.png" width="500px">
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center"
                        style="flex-direction: column;">
                        <div>
                            <h4>Đang diễn ra</h4>
                        </div>
                        <div>
                            <h4>08:30 - 23:59</h4>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center"
                        style="flex-direction: column;"">
                        <div>
                            <h4>Kết thúc trong</h4>
                        </div>
                            <h4><span class=" badge text-bg-dark">
                        <h4 id="hours"></h4></span>08:
                        <span class="badge text-bg-dark">
                            <h4 id="minutes">15</h4>
                        </span>:
                        <span class="badge text-bg-dark">
                            <h4 id="seconds">43</h4>
                        </span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container" style="max-width: 1150px">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card text-bg-dark">
                                            <a href="" class="text-white text-decoration-none">
                                                <div class="card-body">
                                                    <img src="/img/adapter-sac-apple-2-cong-usb-c-35w.webp"
                                                        class="card-img-top" alt="">
                                                    <h5 class="card-title text-center">Adapter sạc Apple 35W</h5>
                                                    <p class="card-text text-center text-warning">
                                                        <strong>790.000đ</strong>
                                                    </p>
                                                    <p class="card-text text-center"><del>1.350.000đ</del></p>
                                                    <div class="progress" role="progressbar"
                                                        aria-label="Animated striped example" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                            style="width: 50%">Còn 5/10 Sản Phẩm </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card text-bg-dark">
                                            <a href="" class="text-white text-decoration-none">
                                                <div class="card-body">
                                                    <img src="/img/mac-air-m1-xam.webp" class="card-img-top"
                                                        alt="">
                                                    <h5 class="card-title text-center">Macbook Air 13 Inch M1</h5>
                                                    <p class="card-text text-center text-warning">
                                                        <strong>17.800.000đ</strong>
                                                    </p>
                                                    <p class="card-text text-center"><del>21.350.000đ</del></p>
                                                    <div class="progress" role="progressbar"
                                                        aria-label="Animated striped example" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                            style="width: 50%">Còn 5/10 Sản Phẩm </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card text-bg-dark">
                                            <a href="" class="text-white text-decoration-none">
                                                <div class="card-body">
                                                    <img src="/img/apple-watch-se-2022-gps-40mm-trang.webp"
                                                        class="card-img-top" alt="">
                                                    <h5 class="card-title text-center">Apple Watch SE 40mm</h5>
                                                    <p class="card-text text-center text-warning">
                                                        <strong>5.800.000đ</strong>
                                                    </p>
                                                    <p class="card-text text-center"><del>7.100.000đ</del></p>
                                                    <div class="progress" role="progressbar"
                                                        aria-label="Animated striped example" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                            style="width: 50%">Còn 5/10 Sản Phẩm </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card text-bg-dark">
                                            <a href="" class="text-white text-decoration-none">
                                                <div class="card-body">
                                                    <img src="/img/ipad-9-grey-thumb.webp" class="card-img-top"
                                                        alt="">
                                                    <h5 class="card-title text-center">iPad 9 Wifi 64gb</h5>
                                                    <p class="card-text text-center text-warning">
                                                        <strong>7.290.000đ</strong>
                                                    </p>
                                                    <p class="card-text text-center"><del>8.400.000đ</del></p>
                                                    <div class="progress" role="progressbar"
                                                        aria-label="Animated striped example" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                            style="width: 50%">Còn 5/10 Sản Phẩm </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container" style="max-width: 1150px">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card text-bg-dark">
                                            <a href="" class="text-white text-decoration-none">
                                                <div class="card-body">
                                                    <img src="/img/but-cam-ung-apple-pencil-1.webp"
                                                        class="card-img-top" alt="">
                                                    <h5 class="card-title text-center">Apple Pencil 1</h5>
                                                    <p class="card-text text-center text-warning">
                                                        <strong>1.490.000đ</strong>
                                                    </p>
                                                    <p class="card-text text-center"><del>2.400.000đ</del></p>
                                                    <div class="progress" role="progressbar"
                                                        aria-label="Animated striped example" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                            style="width: 50%">Còn 5/10 Sản Phẩm </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card text-bg-dark">
                                            <a href="" class="text-white text-decoration-none">
                                                <div class="card-body">
                                                    <img src="/img/tai-nghe-bluetooth-airpods-pro-gen-2.webp"
                                                        class="card-img-top" alt="">
                                                    <h5 class="card-title text-center">AirPods Pro (2nd Gen)</h5>
                                                    <p class="card-text text-center text-warning">
                                                        <strong>5.790.000đ</strong>
                                                    </p>
                                                    <p class="card-text text-center"><del>6.200.000đ</del></p>
                                                    <div class="progress" role="progressbar"
                                                        aria-label="Animated striped example" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                            style="width: 50%">Còn 5/10 Sản Phẩm </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card text-bg-dark">
                                            <a href="" class="text-white text-decoration-none">
                                                <div class="card-body">
                                                    <img src="/img/tai-nghe-bluetooth-airpods-2.webp"
                                                        class="card-img-top" alt="">
                                                    <h5 class="card-title text-center">AirPods 2</h5>
                                                    <p class="card-text text-center text-warning">
                                                        <strong>3.890.000đ</strong>
                                                    </p>
                                                    <p class="card-text text-center"><del>4.580.000đ</del></p>
                                                    <div class="progress" role="progressbar"
                                                        aria-label="Animated striped example" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                            style="width: 50%">Còn 5/10 Sản Phẩm </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card text-bg-dark">
                                            <a href="" class="text-white text-decoration-none">
                                                <div class="card-body">
                                                    <img src="/img/imac-topzone-blue.webp" class="card-img-top"
                                                        alt="">
                                                    <h5 class="card-title text-center">iMac 24 inch M3 2023</h5>
                                                    <p class="card-text text-center text-warning"><strong>
                                                            35.400.000đ</strong></p>
                                                    <p class="card-text text-center"><del>36.990.000đ</del></p>
                                                    <div class="progress" role="progressbar"
                                                        aria-label="Animated striped example" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                            style="width: 50%">Còn 5/10 Sản Phẩm </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>

        <hr>
        <!-- Nav  -->
        <div class="row mt-5">
            <div class="col-md-2">
                <a href="/products/1" style="text-decoration: none">
                <div class="card text-bg-dark mb-3">
                    <img src="/img/iphone.webp" class="card-img-top">
                    <div class="card-footer">
                        <h5 class="card-title text-center">iPhone</h5>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="/products/2" style="text-decoration: none">
                <div class="card text-bg-dark mb-3">
                    <img src="/img/ipad.webp" class="card-img-top">
                    <div class="card-footer">
                        <h5 class="card-title text-center">iPad</h5>
                    </div>
                </div>
                </a>
            </div>


            <div class="col-md-2">
                <a href="/products/3" style="text-decoration: none">
                <div class="card text-bg-dark mb-3">
                    <img src="/img/mac.webp" class="card-img-top">
                    <div class="card-footer">
                        <h5 class="card-title text-center">Mac</h5>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="/products/4" style="text-decoration: none">
                <div class="card text-bg-dark mb-3">
                    <img src="/img/watch.webp" class="card-img-top">
                    <div class="card-footer">
                        <h5 class="card-title text-center">Watch</h5>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="/products/5" style="text-decoration: none">
                <div class="card text-bg-dark mb-3">
                    <img src="/img/sound.webp" class="card-img-top">
                    <div class="card-footer">
                        <h5 class="card-title text-center">Tai nghe, Loa</h5>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="/products/6" style="text-decoration: none">
                <div class="card text-bg-dark mb-3">
                    <img src="/img/pk.webp" class="card-img-top">
                    <div class="card-footer">
                        <h5 class="card-title text-center">Phụ kiện</h5>
                    </div>
                </div>
                </a>
            </div>

        </div>

        @foreach($categories as $category)
        <div class="h-50 my-5 text-white d-flex justify-content-center align-items-center">
            <h1><i class="fa-brands fa-apple"></i> {{ $category->ten_dm }}</h1>
        </div>
        <div class="row mt-3">
            @php
                $products = DB::table('products')
                            ->where('categories', $category->id)
                            ->limit(4)
                            ->get();
            @endphp
            @foreach($products as $product)
                <div class="col-4 col-md-3 col-sm-6 my-3">
                    <a href="/products/detail/{{$product->id}}" style="text-decoration: none;">
                        <div class="card text-bg-dark">
                            <div class="card-header">
                                <img src="{{ $product->img }}" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center">{{ $product->tensp }}</p>
                                <h5 class="text-center">{{ number_format($product->price, 0, ',', '.') }} VNĐ <del
                                        class="text-sm-center">{{ number_format($product->price_discount, 0, ',', '.') }} VNĐ</del></h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach
    


        <div class="h-50 my-5 text-white d-flex justify-content-center align-items-center">
            <h1><i class="fa-brands fa-apple"></i> TekZone</h1>
        </div>

        <!-- Tekzone -->

    </div>
</div>
@endsection

@section('recommend')

@endsection

