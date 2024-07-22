@extends('layouts.app')
@section('title', 'Theo dõi đơn hàng')

@section('content')
    <div class="container-fluid">
        <div class="container my-5">
            <!-- Title -->
            <div class="d-flex justify-content-between align-items-center py-3">
                <h1 class="h2 mb-0"><a href="#" class="text-muted"></a> Theo dõi & tra cứu đơn hàng</h1>
            </div>
            <form action="" method="GET">
                <div class="form-group">
                    <label for="random_order_id">Mã đơn hàng </label>
                    <input type="text" class="form-control" id="random_order_id" name="order_id"
                        placeholder="Nhập mã đơn hàng">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Tra cứu</button>
            </form>

            <!-- Main content -->
            @if (isset($orderDetails))
                @php
                    $firstOrderDetail = $orderDetails->first();
                @endphp
                <div class="container-fluid">
                    <div class="container">
                        <!-- Title -->
                        <div class="d-flex justify-content-between align-items-center py-3">
                            <h2 class="h5 mb-0"><a href="#" class="text-muted"></a> Hóa đơn số
                                #{{ $firstOrderDetail->random_order_id }}</h2>
                        </div>

                        <!-- Main content -->
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Details -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="mb-3 d-flex justify-content-between">
                                            <div>
                                                <span class="me-3">{{ $firstOrderDetail->quantity }}</span>
                                                <span class="me-3">#{{ $firstOrderDetail->random_order_id }}</span>
                                                <span class="me-3">Visa -1234</span>
                                                <span
                                                    class="badge rounded-pill bg-info">{{ strtoupper($firstOrderDetail->status) }}</span>
                                            </div>
                                            <div class="d-flex">
                                                <button class="btn btn-link p-0 me-3 d-none d-lg-block btn-icon-text"><i
                                                        class="bi bi-download"></i> <span class="text">Hóa
                                                        đơn</span></button>
                                                <div class="dropdown">
                                                    <button class="btn btn-link p-0 text-muted" type="button"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-pencil"></i> Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="bi bi-p   rinter"></i> Print</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-borderless">
                                            @foreach ($orderDetails as $orderDetail)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex mb-2">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ $orderDetail->img }}" alt=""
                                                                    width="35" class="img-fluid">
                                                            </div>
                                                            <div class="flex-lg-grow-1 ms-3">
                                                                <h6 class="font-medium mb-0"><a href="#"
                                                                        class="text-reset">{{ $orderDetail->tensp }}</a>
                                                                </h6>
                                                                <span class="small">Color: </span>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                    <td>{{ $orderDetail->quantity }}</td>
                                                    <td class="text-end">
                                                        {{ number_format($orderDetail->price, 0, ',', '.') }} VNĐ</td>
                                                </tr>
                                            @endforeach
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2">Tổng giá tiền</td>
                                                    <td class="text-end">
                                                        {{ number_format($orderDetails->sum('price') * $orderDetails->sum('quantity'), 0, ',', '.') }} VNĐ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Phí ship</td>
                                                    <td class="text-end">ERROR</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Giảm giá: </td>
                                                    <td class="text-danger text-end">-ERROR</td>
                                                </tr>
                                                <tr class="fw-bold">
                                                    <td colspan="2">TOTAL</td>
                                                    <td class="text-end">
                                                        {{ number_format($orderDetails->sum('price') * $orderDetails->sum('quantity'), 0, ',', '.') }} 
 VNĐ
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- Payment -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h3 class="h6">Phương thức thanh toán</h3>
                                                <p>Visa -1234 <br>
                                                    Total: {{ number_format($orderDetails->sum('price'), 0, ',', '.') }}
                                                    VNĐ<span class="badge bg-danger rounded-pill">Chưa thanh toán</span></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3 class="h6">Thông tin hóa đơn</h3>
                                                <address>
                                                    <strong>Tên người nhận:
                                                        {{ $firstOrderDetail->user_fullname }}</strong><br>
                                                    Địa chỉ: {{ $firstOrderDetail->user_address }}<br>
                                                    <abbr title="Phone">Số điện thoại:</abbr>
                                                    {{ $firstOrderDetail->user_phone }}
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <!-- Customer Notes -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h3 class="h6">Customer Notes</h3>
                                        <p>Sed enim, faucibus litora velit vestibulum habitasse. Cras lobortis cum sem
                                            aliquet mauris rutrum. Sollicitudin. Morbi, sem tellus vestibulum porttitor.</p>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <!-- Shipping information -->
                                    <div class="card-body">
                                        <h3 class="h6">Shipping Information</h3>
                                        <strong>FedEx</strong>
                                        <span><a href="#" class="text-decoration-underline"
                                                target="_blank">FF1234567890</a> <i class="bi bi-box-arrow-up-right"></i>
                                        </span>
                                        <hr>
                                        <h3 class="h6">Address</h3>
                                        <address>
                                            <strong>John Doe</strong><br>
                                            1355 Market St, Suite 900<br>
                                            San Francisco, CA 94103<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    {{ $message ?? 'Vui lòng nhập mã đơn hàng để tra cứu.' }}
                </div>
            @endif
        </div>
    </div>
@endsection
