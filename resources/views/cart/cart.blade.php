@extends('layouts.app')

@section('heading')
<div class="p-3" style="background-color: #ffffff;">
    <div class="container" >
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
                                <tr >
                                    <td>1</td>
                                    <td>
                                        <img src="" alt="" class="img-fluid">
                                    </td>
                                    <td></td>
                                    
                                        <td></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-danger" >-</button>

                                            <button class="btn btn-sm btn-outline-danger" >+</button>
                                        </td>
                                        <td></td>
                                    <td><button class="btn btn-outline-danger btn-sm" >Xóa</button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-end" colspan="5">Tổng thành tiền</th>
                                    <th class="text-end"></th>
                                    <th>
                                        <button href="" class="btn btn-outline-danger btn-sm">Xóa hết</button>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="cart-footer">
                            Tổng: 5 sản phẩm
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
                            <div class="col-6">Tạm tính</div>
                            <div class="col-6 text-end"><strong></strong></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">Mã giảm giá</div>
                            <div class="col-6 text-end">
                                <strong>- </strong>
                            </div>
                            <div class="col-12 text-end">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="voucher" >
                                        <button type="button" class="btn btn-outline-danger btn-sm" >SUBMIT</button>
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


    <!-- Modal -->
    <form>
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
                            <input type="text" class="form-control" id="HoTen" autofocus  >
                        </div>
                        <div class="mb-3">
                            <label for="DienThoai" class="form-label">Điện thoại</label>
                            <input type="number" class="form-control" id="DienThoai" >
                        </div>
                        <div class="mb-3">
                            <label for="DiaChi" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="DiaChi" >
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Xác nhận & Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
    
@endsection