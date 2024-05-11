@extends('layouts.app')

@section('title', 'Đăng nhập')

@section('content')
    <div class="z-0 d-flex align-items-center" style="background-color: #535353; height: 932px;">
        <div class="container z-1 rounded-5" style="background-color: rgb(223, 221, 221);">
            <div class="row me-0">
                <div class="col-md-6 p-0">
                    <img src="/img/topzone-login-page.png" class="img-fluid rounded-4" alt="">
                </div>
                <div class="col-md-6 align-items-center my-5">
                    <h2 class="text-center">Đăng nhập</h2>
                    <div class="text-center my-5">
                        <div class="h5">Chào mừng đến với TopZone</div>
                    </div>

                    <div class="container login-page d-flex justify-content-center align-items-center">
                        <form class="w-75 needs-validation" novalidate action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address / ID</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                    aria-describedby="emailHelp" required autofocus>
                                <div id="emailHelp" class="form-text">Đăng nhập bằng Email / ID thành viên TopZone .</div>
                                <div class="invalid-feedback">Vui lòng nhập địa chỉ email hợp lệ.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                    required>
                                <div class="invalid-feedback">Vui lòng nhập mật khẩu.</div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
                            </div>
                            <button type="submit" class="btn btn-outline-dark">Đăng nhập</button>
                            <br><br>
                            <a href="/register">Chưa có tài khoản?</a>
                        </form>

                    </div>
                    <br>
                    <div class="container">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div>
                    <hr style="border-top: 1px solid rgb(0, 0, 0)">
                    <div class="container d-flex justify-content-center align-items-center">
                        <div class="mb-3 w-75">
                            <button class="btn btn-light btn-outline-danger btn-lg w-100 text-black"> <strong><i
                                        class="fa-solid fa-tag"></i> Đăng nhập bằng TopZone ID</strong> </button>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center align-items-center">
                        <div class="mb-3 w-75">
                            <button class="btn btn-light btn-outline-success btn-lg w-100 text-black"> <strong><i
                                        class="fab fa-google"></i> Đăng nhập bằng Google</strong> </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>
@endsection
