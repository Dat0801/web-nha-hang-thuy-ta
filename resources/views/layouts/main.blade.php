<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body class="@yield('body-class')">
    <div class="position-relative">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-5">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo me-3">
                    <div class="text-wrap">
                        <span class="d-block" style="font-size: 1.2rem;">Nhà hàng</span>
                        <span class="d-block text-uppercase fw-bold" style="font-size: 1.5rem;">Thủy tạ đầm sen</span>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex gap-5 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ Request::routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}">Thực đơn</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sảnh tiệc
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Thuyền rồng Kim Long - Hoàng Long</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sảnh Ngân Sen</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sảnh Hoàng Sen - Kim Sen</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sảnh Thanh Sen</a></li>
                            </ul>
                        </li>
    
    
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#">Phòng hội nghị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#">Khuyến mãi tiệc cưới</a>
                        </li>
                    </ul>
                </div>
    
                <form class="d-flex">
                    <div class="input-group">
                        <input class="form-control border-start-0" type="search" placeholder="Tìm kiếm"
                            aria-label="Search">
                        <span class="input-group-text bg-white border-start-0">
                            <i class="bi bi-search"></i>
                        </span>
                    </div>
                </form>
            </div>
        </nav>
    
        <main style="min-height: 90vh; overflow: hidden;">
            @yield('content')
        </main>
    </div>

    <footer class="footer text-white pt-4" style="background-image: url('{{ asset('images/bg-footer.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mb-3">
                    <div class="footer-logo">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="footer-logo-img">
                    </div>
                </div>

                <div class="col-md-4 mb-3 me-3">
                    <h4 class="font-weight-bold text-wrap">Liên hệ</h4>
                    <p><i class="bi bi-geo-alt"></i> 03 Hòa Bình, Phường 3, Quận 11, TP.Hồ Chí Minh (Cổng số 2 Công viên
                        Văn hóa Đầm Sen)</p>
                    <p><i class="bi bi-telephone"></i> 028 3961 2082 - 028 3858 6763</p>
                    <p>Copyright &copy; Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Phuthotourist)</p>

                </div>

                <div class="col-md-4 mb-3">
                    <h4 class="font-weight-bold text-wrap" style="margin-left: 14px">Các đơn vị cùng hệ thống
                        Phuthotourist</h4>
                    <ul class="inline">
                        <li><a href="#" class="text-white">Công ty CP DVDL Phú Thọ</a></li>
                        <li><a href="#" class="text-white">Khu du lịch sinh thái Vàm Sát</a></li>
                        <li><a href="#" class="text-white">Khách sạn Ngọc Lan</a></li>
                        <li><a href="#" class="text-white">Khách sạn Phú Thọ</a></li>
                        <li><a href="#" class="text-white">Trung tâm Du lịch Đầm Sen</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
<script>
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.stopPropagation();

            let dropdownMenu = this.nextElementSibling;

            if (dropdownMenu.classList.contains('show')) {
                this.classList.add('active');
            } else {
                this.classList.remove('active');
            }
        });
    });

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown-toggle').forEach(toggle => toggle.classList.remove('active'));
        }
    });
</script>
