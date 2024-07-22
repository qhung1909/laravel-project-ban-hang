@extends('admin.layouts.app')

@section('title', 'Thêm sản phẩm')

@section('content')
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
            <div class="col-md-10 p-0 mt-5">
                <div class="container">
                    <h1>Thêm sản phẩm</h1>
                    <form class="was-validated" method="post" action="{{ route('products.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Tên sản phẩm</label>
                            <input value="{{ old('tensp') }}" class="form-control" name="tensp" id="validationTextarea"
                                placeholder="Tên sản phẩm" required autofocus></input>
                            <div class="invalid-feedback">
                                Vui lòng nhập tên sản phẩm.
                            </div>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Gía sản phẩm</label>
                            <input value="{{ old('price') }}" type="number" min="0" name="price"
                                class="form-control" id="validationTextarea" placeholder="Gía sản phẩm" required
                                autofocus></input>
                            <div class="invalid-feedback">
                                Vui lòng nhập giá sản phẩm.
                            </div>
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Gía khuyến mãi sản phẩm</label>
                            <input value="{{ old('price_discount') }}" type="number" min="0" name="price_discount"
                                class="form-control" id="validationTextarea" placeholder="Gía khuyến mãi sản phẩm" required
                                autofocus></input>
                            <div class="invalid-feedback">
                                Vui lòng nhập giá khuyến mãi sản phẩm.
                            </div>
                            @error('price_discount')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Sản phẩm hot</label>
                            <select value="{{ old('hot') }}" class="form-select" required aria-label="select example"
                                name="hot">
                                <option value="0">Bình thường</option>
                                <option value="1" selected>Hot</option>
                            </select>
                            <div class="invalid-feedback">Vui lòng chọn.</div>
                            @error('hot')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Ẩn hiện sản phẩm</label>
                            <select value="{{ old('an_hien') }}" class="form-select" required aria-label="select example"
                                name="an_hien">
                                <option value="0">Ẩn</option>
                                <option value="1" selected>Hiện</option>
                            </select>
                            <div class="invalid-feedback">Vui lòng chọn.</div>
                            @error('an_hien')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select value="{{ old('categories') }}" class="form-select" required
                                aria-label="select example" name="categories">
                                <option value="">Danh mục sản phẩm</option>
                                <option value="1">iPhone</option>
                                <option value="2">iPad</option>
                                <option value="3">MacBook</option>
                                <option value="4">Watch</option>
                                <option value="5">Headphone</option>
                                <option value="6">Accesories</option>
                            </select>
                            <div class="invalid-feedback">Vui lòng chọn danh mục. Hãy chọn danh mục phù hợp với tên sản
                                phẩm!</div>
                            @error('categories')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="file" name="img" class="form-control" aria-label="file example" required>
                            <div class="invalid-feedback">Upload hình ảnh, chỉ được định dạng .png, .jpg</div>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Thêm sản phẩm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    @endsection
