@extends('layouts.app')

@section('title')
    Chi tiết sản phẩm
@endsection

@section('categories')
  
@endsection

@section('content')
<div class="p-3" style="background-color: #3E3E3F;">
  <div class="container" >
      <div class="row text-white">
          <div class="col-md-6">
              <img src="{{$product->img}}" width="80%">
          </div>
          <div class="col-md-6">
              <h2 class="text-white"><strong>{{$product->tensp}}</strong></h2>
              <p>Gía và khuyến mãi tại: Hồ Chí Minh </p>
              @{{hello}}
              <div class="text-white">
                  <h3 class="d-inline">Giá: {{ number_format($product->price, 0, ',', '.') }} VNĐ  </h3><del class="d-inline"></del>
                  <span class="badge text-bg-warning d-inline">%</span>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" value="1" min ="1" ng-model = "quantity">
              </div>
              <p class="my-3">Dung lượng</p>
              <div class="row my-3">
                  <div class="col-10 d-inline-flex">
                      <button class="btn btn-dark text-white me-2"></button>
                  </div>
              </div>                
              
              <p class="my-2">Màu</p>
              <div class="row my-2">
                  <div class="col-md-4">
                      <div class="row">
                          <div class="col-md-4">
                              <div class="rounded-circle"
                                  style="width: 40px; height: 40px; background-color: #4F5765;"></div>
                          </div>
                          <div class="col-md-4">
                              <div class="rounded-circle"
                                  style="width: 40px; height: 40px; background-color: #BAB4A9;"></div>
                          </div>
                          <div class="col-md-4">
                              <div class="rounded-circle"
                                  style="width: 40px; height: 40px; background-color: #F2F1EC;"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card text-bg-dark ">
                  <div class="card-header text-white align-items-center ">
                      <h5>Khuyến mãi
                          <span
                              class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              Chỉ còn 2 ngày!
                          </span>
                      </h5>
                      <p>Giá và khuyến mãi dự kiến áp dụng đến <span class="badge text-bg-info">23:00 |
                              31/03</span> </p>
                  </div>
                  <div class="card-body">
                      <ul style="list-style-type:disc">

                          <li>Thu cũ Đổi mới: Giảm đến <span class="badge text-bg-success">2 triệu</span> (Tuỳ
                              model máy cũ, Không kèm thanh toán qua cổng online, mua kèm) <a href=""
                                  style="text-decoration: none;" data-bs-toggle="tooltip"
                                  data-bs-title="Cách thức thu cũ & đổi mới cho quý khách" id="tooltips1">Xem chi
                                  tiết</a></li>
                          <li>Hoàn tiền nếu ở đâu rẻ hơn (Trong vòng 7 ngày; chỉ áp dụng tại siêu thị) <a href=""
                                  style="text-decoration: none;" data-bs-toggle="tooltip"
                                  data-bs-title="Cách thức hoàn tiền" id="tooltips2">Xem chi tiết</a></li>
                      </ul>
                  </div>
              </div>

              <button class="btn btn-primary text-center text-white my-3 w-100" ng-click="addToCart({{$product->id}}, quantity)">
                  <h4>Mua ngay</h4>
              </button>
              <div class="row">
                  <div class="col-md-6">
                      <button class="btn btn-light w-100 text-black" style="height: 80%;"> <strong>Mua trả góp
                              0%</strong>
                          <p>Qua công ty tài chính</p>
                      </button>
                  </div>
                  <div class="col-md-6">
                      <button class="btn btn-light w-100 text-black" style="height: 80%;"> <strong>Trả góp 0% qua
                              thẻ</strong>
                          <p>Visa, Mastercard, JCB, Amex</p>
                      </button>
                  </div>
              </div>
              <div class="mb-4">

                  <p><i class="fa-solid fa-box fa-xl"></i> : Bộ sản phẩm gồm: Hộp, Sách hướng dẫn, Cây lấy sim,
                      Cáp Type C</p>
                  <p><i class="fa-solid fa-arrow-right-arrow-left fa-xl"></i> : Hư gì đổi nấy 12 tháng tại 3261
                      siêu thị trên toàn quốc <a href="" style="text-decoration: none;"> Xem chi tiết chính sách
                          bảo hành, đổi trả</a></p>
                  <p><i class="fa-solid fa-shield-halved fa-xl"></i>: Bảo hành chính hãng 1 năm</p>
                  <p><i class="fa-solid fa-circle-info fa-xl"></i> : Giao hàng nhanh toàn quốc <a href=""
                          style="text-decoration: none;"> Xem chi tiết</a></p>
                  <p><i class="fa-solid fa-phone fa-xl"></i> : Tổng đài: <a href="" style="text-decoration: none;">
                          1900.9696.42</a> (7:30 - 22:30) </p>
              </div>


          </div>

      </div>

  </div>

</div>

<div style="background-color: white;">
  <div class="container">
      <div class="text-black my-5 d-flex align-items-center">
          <h2 class="mb-0">Phụ kiện nên có cho </h2>
          <a href="#" class="ms-2" data-bs-toggle="tooltip"
              data-bs-title="Điện thoại này trong hộp chưa có một số phụ kiện. Để trải nghiệm máy tốt hơn, bạn có thể cân nhắc mua thêm một số phụ kiện gợi ý bên dưới"><i
                  class="fa-solid fa-question"></i></a>
      </div>

      <div class="row mt-3">
          <div class="col-4 col-md-3 col-sm-6 my-3">
              <div class="card text-bg-white">
                  <div class="card-header">
                      <img src="/img/adapter-sac-type-c-20w.webp" class="card-img-top">
                  </div>
                  <div class="card-body">
                      <p class="card-text text-center">Adapter sạc Apple USB-C 20W</p>
                      <h5 class="text-center">550.000đ</h5>
                  </div>
              </div>
          </div>

          <div class="col-4 col-md-3 col-sm-6 my-3">
              <div class="card text-bg-white">
                  <div class="card-header">
                      <img src="/img/tai-nghe-bluetooth-airpods-pro-gen-2.webp" class="card-img-top">
                  </div>
                  <div class="card-body">
                      <p class="card-text text-center">AirPods Pro (2nd Gen) USB-C</p>
                      <h5 class="text-center">5.690.000đ <del class="text-sm-center">6.200.000đ</del></h5>
                  </div>
              </div>
          </div>

          <div class="col-4 col-md-3 col-sm-6 my-3">
              <div class="card text-bg-white">
                  <div class="card-header">
                      <img src="/img/mieng-dan-kinh-cuong-luc-iphone-15-pro-max.webp" class="card-img-top">
                  </div>
                  <div class="card-body">
                      <p class="card-text text-center">Miếng dán kính cường lực iPhone 15 Pro Max JCPAL</p>
                      <h5 class="text-center">400.000đ</h5>
                  </div>
              </div>
          </div>

          <div class="col-4 col-md-3 col-sm-6 my-3">
              <div class="card text-bg-white">
                  <div class="card-header">
                      <img src="/img/op-lung-magsafe-iphone-15-pro-max.webp" class="card-img-top">
                  </div>
                  <div class="card-body">
                      <p class="card-text text-center">Ốp lưng MagSafe cho iPhone 15 Pro Max Nhựa trong Apple</p>
                      <h5 class="text-center">1.100.000đ <del class="text-sm-center">1.430.000đ</del></h5>
                  </div>
              </div>
          </div>
      </div>

      <hr style="border-top: 1px solid rgb(48, 47, 47)">
  </div>


</div>


@endsection

@section('viewFunction')
    <script>
        viewFunction = function($scope){
            $scope.quantity = 1;

        }
    </script>
@endsection