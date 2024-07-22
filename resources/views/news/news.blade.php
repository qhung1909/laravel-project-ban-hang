@extends('layouts.app')

@section('title', 'Tin tức')

@section('content')
<div class="p-3" style="background-color: #3E3E3F;">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/lg-17-1200x675.jpg" class="d-block w-100 rounded-3" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Messenger bị mất tin nhắn phải làm sao? Cùng xem nguyên nhân và 8 cách khắc phục
                                    hiệu quả</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 mb-3">
                <div class="carousel slide mb-3">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/fix-thumbs-1200x675.jpg" class="d-block w-100 rounded-3" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-black text-bg-light"> <strong>Tuần lễ Apple - Giảm đến 30%, trả góp
                                        0%</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/2-1200x675.jpg" class="d-block w-100 rounded-3" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-bg-light">4 cách ghép file PDF dễ dàng, tiết kiệm thời gian khi phải gửi
                                    file cho nhiều người cùng lúc</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="border-top: 1.2px solid rgb(255, 255, 255)">

        <div class="news my-5">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-white"> <i class="fa-solid fa-newspaper"></i> Mới nhất</h3>
                    <div class="row">
                        <div class="col-md-6 d-inline">
                            <img src="/img/lg-17-1200x675.jpg" class=" rounded-3 img-fluid d-inline">
                        </div>
                        <div class="col-md-6 d-inline text-white mt-2">
                            <h4 class="d-inline">Messenger bị mất tin nhắn phải làm sao? Cùng xem nguyên nhân và 8 cách
                                khắc phục hiệu quả</h4>
                            <br>
                            <small style="color: rgb(136, 136, 136)">3 giờ trước</small>
                        </div>
                    </div>
                    <hr style="border-top: 1.2px solid rgb(255, 255, 255)">

                    <div class="row">
                        <div class="col-md-6 d-inline">
                            <img src="/img/fix-thumbs-1200x675.jpg" class=" rounded-3 img-fluid d-inline">
                        </div>
                        <div class="col-md-6 d-inline text-white mt-2">
                            <h4 class="d-inline">Tuần lễ Apple - Giảm đến 30%, trả góp 0%</h4>
                            <br>
                            <small style="color: rgb(136, 136, 136)">15 giờ trước</small>
                        </div>
                    </div>
                    <hr style="border-top: 1.2px solid rgb(255, 255, 255)">

                    <div class="row">
                        <div class="col-md-6 d-inline">
                            <img src="/img/2-1200x675.jpg" class=" rounded-3 img-fluid d-inline">
                        </div>
                        <div class="col-md-6 d-inline text-white mt-2">
                            <h4 class="d-inline">4 cách ghép file PDF dễ dàng, tiết kiệm thời gian khi phải gửi file cho
                                nhiều người cùng lúc</h4>
                            <br>
                            <small style="color: rgb(136, 136, 136)">3 giờ trước</small>
                        </div>
                    </div>
                    <hr style="border-top: 1.2px solid rgb(255, 255, 255)">

                    <div class="row">
                        <div class="col-md-6 d-inline">
                            <img src="/img/lg1-3-1200x675.jpg" class=" rounded-3 img-fluid d-inline">
                        </div>
                        <div class="col-md-6 d-inline text-white mt-2">
                            <h4 class="d-inline">So sánh MacBook Air M3 với MacBook Pro M3: Chiếc MacBook nào là tốt
                                nhất dành cho bạn?</h4>
                            <br>
                            <small style="color: rgb(136, 136, 136)">20 giờ trước</small>
                        </div>
                    </div>
                    <hr style="border-top: 1.2px solid rgb(255, 255, 255)">

                    <div class="row">
                        <div class="col-md-6 d-inline">
                            <img src="/img/lg1-1200x688.jpg" class=" rounded-3 img-fluid d-inline">
                        </div>
                        <div class="col-md-6 d-inline text-white mt-2">
                            <h4 class="d-inline">Cách lấy lại Facebook cũ vô cùng đơn giản và hữu ích trong trường hợp
                                mất quyền truy cập</h4>
                            <br>
                            <small style="color: rgb(136, 136, 136)">3 giờ trước</small>
                        </div>
                    </div>
                    <hr style="border-top: 1.2px solid rgb(255, 255, 255)">
                </div>
            </div>
        </div>

        <hr style="border-top: 1.2px solid rgb(0, 0, 0)">

    </div>
</div>

<div class="p-3" style="background-color: #101010;">
    <div class="container">
        <h3 class="text-white"><i class="fa-solid fa-video"></i> Video</h3>
        <div class="row">
            <div class="col-8">
                <div class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/maxresdefault.jpg" class="d-block w-100 rounded-3" alt="...">
                            <h3 class="text-white my-3 text-center">Tổng hợp mẹo trên iPhone - TopZone</h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/img/mqdefault.jpg" class="rounded-3 img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h5 class="text-white">5 mẹo sử dụng iPhone thông minh</h5>
                    </div>
                </div>
                <hr style="border-top: 1.2px solid rgb(255, 255, 255)">

                <div class="row">
                    <div class="col-md-4">
                        <img src="/img/mq2.jpg" class="rounded-3 img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h5 class="text-white">Recap 2023: Một năm đầy biến động TopZone</h5>
                    </div>
                </div>
                <hr style="border-top: 1.2px solid rgb(255, 255, 255)">

                <div class="row">
                    <div class="col-md-4">
                        <img src="/img/mq3.jpg" class="rounded-3 img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h5 class="text-white">Tổng hợp tính năng iOS 17 - Top Review</h5>
                    </div>
                </div>
                <hr style="border-top: 1.2px solid rgb(255, 255, 255)">

                <div class="row">
                    <div class="col-md-4">
                        <img src="/img/mq4.jpg" class="rounded-3 img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h5 class="text-white">Top iPhone giảm sốc cuối năm 2023 - TopZone</h5>
                    </div>
                </div>
                <hr style="border-top: 1.2px solid rgb(255, 255, 255)">

                <div class="row">
                    <div class="col-md-4">
                        <img src="/img/21-1200x675.jpg" class="rounded-3 img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h5 class="text-white">So sánh chip Apple M3 và M2 chi tiết nhất - Top Review</h5>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>  

@endsection