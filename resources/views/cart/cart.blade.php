@extends('layouts.app')
@section('title', 'Giỏ hàng')
@section('heading')
<div class="container">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>

    <div class="p-3" style="background-color: #ffffff;">
        <div class="container" ng-if="cart.length > 0">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <strong>Giỏ hàng</strong>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th style="width: 100px;">Ảnh SP</th>
                                        <th>Sản Phẩm</th>
                                        <th>Gía bán</th>
                                        <th>Số Lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Hành Động</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr ng-repeat = "item in cart">
                                        <td>1</td>
                                        <td>
                                            <img src="@{{ item.img }}" alt="" class="img-fluid">
                                        </td>
                                        <td>@{{ item.tensp }}</td>
                                        <td>@{{ item.price | number }} VNĐ</td>
                                        <td>
                                            <input type="number" class="form-control" ng-model = "item.quantity" min=1
                                                ng-change="updateQuantity(item.id, item.quantity)">
                                        </td>
                                        <td>@{{ item.price * item.quantity | number }} VNĐ</td>
                                        <td><a href="javascript:void(0)" class="btn btn-outline-danger btn-sm"
                                                ng-click="removeCart($index)">Xóa</a></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-end" colspan="5">Tổng thành tiền</th>
                                        <th class="text-end">@{{ totalPrice() | number }}đ</th>
                                        <th>
                                            <button href="" class="btn btn-outline-danger btn-sm">Xóa hết</button>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="cart-footer">
                                Tổng: sản phẩm
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Hóa đơn</strong>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-4">Tạm tính</div>
                                <div class="col-8 text-end"><strong></strong></div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">Mã giảm giá</div>
                                <div class="col-6 text-end">
                                    <strong>- </strong>
                                </div>
                                <div class="col-12 text-end">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="voucher">
                                            <button type="button" class="btn btn-outline-danger btn-sm">SUBMIT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">Tổng tiền</div>
                                <div class="col-6 text-end"><strong></strong></div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary mt-2 d-block w-100" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Đặt Hàng
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <div ng-if="cart.length == 0" class="min-vh-100">
                <div class="alert alert-success" role="alert">
                    Giỏ hàng đang trống
                </div>
            </div>
        </div>


        <!-- Modal -->
        <form method="POST" action="/cart">
            @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin giao hàng</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="HoTen" class="form-label">Họ Tên</label>
                                <input type="text" class="form-control" id="fullname" name="fullname"
                                    value="{{ Auth::check() ? Auth::user()->name : '' }}" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="DienThoai" class="form-label">Điện thoại</label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    value="{{ Auth::check() ? Auth::user()->phone : '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="DienThoai" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ Auth::check() ? Auth::user()->email : '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="DiaChi" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ Auth::check() ? Auth::user()->address : '' }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary">Xác nhận & Đặt
                                hàng</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('viewFunction')
    <script>
        viewFunction = function($scope, $http, $timeout) {
            let debounceTimeout;

            $scope.updateQuantity = function(id, quantity) {
                if (debounceTimeout) {
                    $timeout.cancel(debounceTimeout);
                }
                debounceTimeout = $timeout(function() {
                    $http.patch('api/cart/' + id, {
                        quantity: quantity
                    }).then(function(res) {
                        $scope.$parent.cart = res.data.data;
                    });
                }, 350);
            }
        }
    </script>
@endsection
