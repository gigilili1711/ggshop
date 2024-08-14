<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang chủ @yield('title')</title>
    <link rel="stylesheet" href=" {{asset('frontend/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">G-Shoe</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold text-danger" href="#">HOT</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Sản phẩm
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Đồng hồ nam</a></li>
                      <li><a class="dropdown-item" href="#">Đồng hồ nữ</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Phụ kiện</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Bài viết</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                @if (Route::has('login'))

                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="btn btn-outline-success"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn btn-outline-success mx-3"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn btn-outline-success"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth

                        @endif
              </div>
            </div>
          </nav>
      </header>

      <div class="container-fluid">
        <div class="row">
            <div class="col-3 ">
                {{-- side bar  --}}

                 <!--sidebar banner-->
                 <div class="sidebar_banner ">
                    <div class="banner_img">
                        <a href="#"><img src="{{asset('frontend/sbbn1.jpg')}}" width="250px" alt=""></a>
                    </div>
                </div>
                <!--sidebar banner end-->

                <!--categorie menu start-->
                <div class="sidebar_widget catrgorie mb-35">
                    <h3>Danh Mục</h3>
                    <ul>
                        <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i>Đồng hồ Nữ</a>

                        </li>
                        <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i>Đồng hồ Nam</a>

                        </li>
                        <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> Phụ kiện</a>

                        </li>
                        <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> Chính sách của shop</a>

                        </li>
                    </ul>
                </div>
                <!--categorie menu end-->
                <!--popular tags area-->
                <div class="sidebar_widget tags mb-35">
                    <div class="block_title">
                        <h3>tags phổ biến</h3>
                    </div>
                    <div class="block_tags">
                        <a href="#">rolex</a>
                        <a href="#">orient</a>
                        <a href="#">hublot</a>
                        <a href="#">casio</a>
                        <a href="#">classic</a>
                        <a href="#">daydate</a>
                        <a href="#">donghonam</a>
                        <a href="#">donghonu</a>
                        <a href="#">dayda</a>
                    </div>
                </div>
                <!--popular tags end-->

            </div>
            <div class="col-9 ">
                {{-- content  --}}

                @yield('content')
            </div>

        </div>
      </div>
      <footer class="bg-dark text-white pt-4 my-3">
        <div class="container">
          <div class="row">
            <!-- Cột thông tin liên hệ -->
            <div class="col-md-4">
              <h5>Liên hệ</h5>
              <ul class="list-unstyled">
                <li><i class="bi bi-geo-alt-fill"></i> 123 Đường ABC, Quận 1, TP. HCM</li>
                <li><i class="bi bi-telephone-fill"></i> (84) 123 456 789</li>
                <li><i class="bi bi-envelope-fill"></i> email@example.com</li>
              </ul>
            </div>

            <!-- Cột thông tin công ty -->
            <div class="col-md-4">
              <h5>Về chúng tôi</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Giới thiệu</a></li>
                <li><a href="#" class="text-white">Tuyển dụng</a></li>
                <li><a href="#" class="text-white">Chính sách bảo mật</a></li>
              </ul>
            </div>

            <!-- Cột liên kết hữu ích -->
            <div class="col-md-4">
              <h5>Liên kết hữu ích</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Hướng dẫn mua hàng</a></li>
                <li><a href="#" class="text-white">Hướng dẫn thanh toán</a></li>
                <li><a href="#" class="text-white">Chính sách đổi trả</a></li>
              </ul>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col text-center">
              <p class="mb-0">&copy; 2024 Trường Giang WD18301.</p>
            </div>
          </div>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
