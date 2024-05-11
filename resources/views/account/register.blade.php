@extends('layouts.app')

@section('title', 'Đăng kí')
@section('content')
<div class="z-0 d-flex align-items-center" style="background-color: #535353; height: 932px;">
    <div class="container z-1 rounded-5" style="background-color: rgb(223, 221, 221);">
        <div class="row me-0">
            <div class="col-md-6 p-0">
                <img src="/img/topzone-login-page.png" class="img-fluid rounded-4" alt="">
            </div>
            <div class="col-md-6 align-items-center my-5">
                <h2 class="text-center">Đăng kí</h2>
                <div class="text-center my-5">
                    <div class="h5">Chào mừng đến với TopZone</div>
                </div>

                <div class="container login-page d-flex justify-content-center align-items-center">
                    <form class="w-75 needs-validation" novalidate action="{{ route('register.post') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                aria-describedby="emailHelp" required autofocus>
                            <div id="emailHelp" class="form-text">Đăng kí bằng Email</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                aria-describedby="emailHelp" required autofocus>
                            <div id="emailHelp" class="form-text">Họ và tên</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                required>
                        </div>
                        <button type="submit" class="btn btn-outline-dark">Đăng kí</button>
                        <br><br>
                        <a href="">Chưa có tài khoản?</a>
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
            </div>

        </div>
    </div>


</div>
@endsection
