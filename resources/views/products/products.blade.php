@extends('layouts.app')

@section('title')
    Products
@endsection

@section('categories')
@endsection

@section('content')
    <div class="p-3" style="background-color: #3E3E3F;">
        <div class="container">
            <div class="h-50 my-5 text-white d-flex justify-content-center align-items-center">
                <h1><i class="fa-brands fa-apple"></i>{{ $category->ten_dm }}</h1>
            </div>

            <div id="carouselExampleInterval" class="carousel slide rounded-5" data-bs-ride="carousel" data-bs-theme="dark">
                <div class="carousel-inner rounded-5">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="/img/banner6.webp" class="d-block w-100 rounded-5" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="/img/banner7.webp" class="d-block w-100 rounded-5" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="my-3">
                <div class="row">
                    <div class="col-8">

                    </div>

                    <div class="col-4">
                        <div class="row">
                            <div class="col-7">
                                <div class="input-group flex-nowrap" data-bs-theme="dark">

                                    <form action="{{ route('product', ['id' => $category->id]) }}"
                                        class="input-group flex-nowrap" method="GET">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Find"
                                            aria-describedby="addon-wrapping" name="search" id="search">
                                        <button type="submit" class="btn btn-success"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>

                                </div>

                            </div>
                            <div class="col-5">
                                <div class="btn-group d-flex ">
                                    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-filter"></i> Sắp xếp
                                    </button>
        
                                    <ul class="dropdown-menu">
                                        <li>
                                        <li><button class="dropdown-item disabled" href="#"><i
                                                    class="fa-solid fa-square-plus"></i>
                                                Sắp xếp</button></li>
                                        <hr class="dropdown-divider">
                                        </li>
                                        <li><a href="{{ route('product', ['id' => $category->id, 'price_desc' => true]) }}" style="text-decoration: none"><button class="dropdown-item" href="#"><i
                                            class="fa-solid fa-arrow-down-short-wide"></i> Giá từ cao xuống
                                        thấp</button></li></a>
                                        <li><a href="{{ route('product', ['id' => $category->id, 'price_asc' => true]) }}" style="text-decoration: none"><button class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-arrow-up-short-wide"></i> Giá từ thấp đến
                                                cao</button></li></a>
                                        <li><a href="{{ route('product', ['id' => $category->id, 'name_asc' => true]) }}" style="text-decoration: none"><button class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-arrow-down-a-z"></i> Sắp xếp từ A -> Z </button></li></a>
                                        <li><a href="{{ route('product', ['id' => $category->id, 'name_desc' => true]) }}" style="text-decoration: none"><button class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-arrow-up-z-a"></i>
                                                Sắp xếp từ Z -> A</button></li></a>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="my-3">
                <div class="row mt-3 w-auto">
                    @if ($message)
                        <div class="alert alert-danger">{{ $message }}</div>
                    @endif
                    @foreach ($products as $products)
                        <div class="col-4 col-md-3 col-sm-6 my-3">
                            <a href="/products/detail/{{ $products->id }}" style="text-decoration: none;">
                                <div class="card text-bg-dark rounded-5">
                                    <div class="card-header">
                                        <img src="{{ $products->img }}" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text text-center">{{ $products->tensp }}</p>
                                        <h5 class="text-center">{{ number_format($products->price, 0, ',', '.') }} VNĐ <del
                                                class="text-sm-center">{{ number_format($products->price_discount, 0, ',', '.') }} VNĐ</del></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <nav aria-label="Page navigation example" data-bs-theme="dark">
                    <ul class="pagination">
                        <li class="page-item>
                        <a class="page-link" href=""></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    @endsection
