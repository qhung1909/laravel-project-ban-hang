<nav class="navbar navbar-expand-lg bg-black" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand ms-5 me-auto" href="/"><img src="/img/icon-topzone.png" width="110px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ">
                @foreach ($categories as $category)
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page"
                            href="/products/{{ $category->id }}">{{ $category->ten_dm }}</a>
                    </li>
                @endforeach
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="/news">TekZone</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <a href="/cart" class="mx-2">
                <button type="button" class="btn btn-outline-light position-relative" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" data-bs-title="Giỏ hàng">
                    <i class="fa-solid fa-cart-shopping"></i> 
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger z-50">
                        12
                    </span>
                </button>
            </a>
            @if (auth()->check())
            <li class="nav-item dropdown">
                <button class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i> Xin chào,{{ auth()->user()->name }}
                    @if(auth()->user()->role === 'admin')
                        <i class="fa-solid fa-crown" style="color: gold;"></i>
                    @endif
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-truck"></i> Theo dõi đơn hàng</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-regular fa-heart"></i> Đã thích</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fa-solid fa-right-to-bracket"></i> Đăng xuất</a></li>
                    @if(auth()->user()->role === 'admin')
                    <hr>
                        <li><a class="dropdown-item" href="/admin"><i class="fa-solid fa-bars-progress"></i> Trang quản lí</a></li>
                    @endif
                </ul>
            </li>
            @else
            <a href="/tracking" class="btn btn-outline-light mx-2"><i
                    class="fa-solid fa-search"></i></a>
            <a href="{{ route('login') }}" class="btn btn-outline-light mx-2"><i
                        class="fa-solid fa-unlock-keyhole"></i></a>
            @endif
</nav>
