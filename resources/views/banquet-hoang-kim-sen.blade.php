<!DOCTYPE html>
@extends('layouts.main')

@section('body-class', 'home')

@section('title', 'Thuyền rồng kim long - hoàng long')

@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column justify-content-center align-items-center position-absolute w-100"
            style="top: 0; height: 500px; z-index: 1;">

            <h2 class="text-white text-wrap fw-bold text-center"
                style="text-transform: uppercase; font-size: 2rem; text-shadow: 2px 2px 5px rgba(0,0,0,0.5);">
                Sảnh
            </h2>

            <h1 class="text-white text-wrap fw-bold text-center"
                style="text-transform: uppercase; font-size: 3rem; text-shadow: 2px 2px 5px rgba(0,0,0,0.5);">
                Hoàng Sen - Kim Sen
            </h1>
        </div>

        <img src="{{ asset('images/bg-wedding-promotion.png') }}" class="position-absolute w-100"
            style="top: 0; left: 0; height: 500px; object-fit: cover; z-index: 0;" alt="Wedding Promotion Background">

        <div style="height: 40vh;"></div>

        <div class="container" style="margin-top: 60px;">
            <div class="text-center">
                <img src="{{ asset('images/hoang-kim-sen-1.png') }}" class="img-fluid mb-4" alt="Wedding Offer">
            </div>
            <h5>Là sảnh kết hợp của 2 sảnh nhỏ là Hoàng Sen và Kim Sen. Với sảnh Kim Sen có thể tổ chức 28 bàn (trên dưới
                250 khách). Còn với sảnh Hoàng Sen có thể đáp ứng 50 bàn (trên dưới 500 người).</h5>
            <div class="row mt-4 mb-4">
                <div class="col-md-6">
                    <img src="{{ asset('images/hoang-kim-sen-2.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/hoang-kim-sen-3.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                </div>
            </div>
            <p>Sảnh nằm ngay lối vào của cổng số 2 Đầm Sen, có thiết kế Châu Âu sang trọng đẳng cấp. Khi gộp cả Hoàng Sen
                và Kim Sen để thành Hoàng Kim sen, có thể đáp ứng lượng khách trên dưới 750 người. tương đương 78 bàn.</p>
            <p style="color: #C75D15;">Nếu bạn cần tiếp khoảng 78 bàn (750), hãy chọn sảnh Hoàng Kim Sen nhà hàng Thủy Tạ
                Đầm Sen. Đồng thời có thể chia thành 2 sảnh nhỏ là Hoàng Sen và Kim Sen.</p>
            <p>Mặc dù diện tích lớn, nhưng thiết kế của sảnh Hoàng Kim Sen hoàn toàn không có cột nhà giữa sảnh. (Điều mà
                nhiều kiến trúc khác thường mắc phải, hạn chế quan sát, chụp ảnh và ghi hình sự kiện). Đồng thời các kỹ sư
                của Phuthotourist đã khéo léo thiết kế khung trần sang trọng. Đèn trang trí màu vàng, khiến thực khách luôn
                cảm thấy không gian ấm cúng. Đồng thời, sân khấu được thiết kế phong cách La Mã, lung linh với đèn led hiện
                đại phù hợp cho những đôi uyên ương ra mắt hai họ.</p>
            <div class="row mt-4 mb-4">
                <div class="col-md-8">
                    <img src="{{ asset('images/hoang-kim-sen-4.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>

                <div class="col-md-4 d-flex flex-column gap-4">
                    <img src="{{ asset('images/hoang-kim-sen-5.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                    <img src="{{ asset('images/hoang-kim-sen-6.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 2">
                </div>
            </div>

            <div class="row mt-4 mb-4 text-center">
                <div class="col-md-12">
                    <img src="{{ asset('images/hoang-kim-sen-7.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>
                <h3 style="color: #ED7D31" class="mt-2">Sảnh Hoàng Sen</h3>

            </div>

            <div class="row mt-4 mb-4">
                <div class="col-md-8">
                    <img src="{{ asset('images/hoang-kim-sen-8.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>

                <div class="col-md-4 d-flex flex-column gap-4">
                    <img src="{{ asset('images/hoang-kim-sen-9.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                    <img src="{{ asset('images/hoang-kim-sen-10.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 2">
                </div>
            </div>

            <div class="row mt-4 mb-4 text-center">
                <div class="col-md-12">
                    <img src="{{ asset('images/hoang-kim-sen-11.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>
                <h3 style="color: #ED7D31" class="mt-2">Sảnh Kim Sen</h3>
            </div>

            <h1 style="color: #ED7D31">Các sảnh tiệc khác</h1>
            <div class="row mt-2 mb-5">
                <div class="col-md-4 text-center">
                    <a href="">
                        <img src="{{ asset('images/sanh-ngan-sen-11.png') }}" class="img-fluid w-100" alt="Sảnh Ngân Sen">
                    </a>
                    <div class="d-flex justify-content-between mt-2">
                        <h5 style="color: #C75D15; white-space: normal; word-wrap: break-word; max-width: 60%;">
                            Thuyền rồng Kim Long - Hoàng Long
                        </h5>
                        <p class="text-muted">11/02/2020</p>
                    </div>

                </div>

                <div class="col-md-4 text-center">
                    <a href="">
                        <img src="{{ asset('images/kim-long-hoang-long-9.png') }}" class="img-fluid w-100"
                            alt="Sảnh Hoàng Sen">
                    </a>

                    <div class="d-flex justify-content-between mt-2">
                        <h5 style="color: #C75D15">Sảnh Hoàng Sen - Kim Sen</h5>
                        <p class="text-muted">11/02/2020</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <a href="">
                        <img src="{{ asset('images/kim-long-hoang-long-10.png') }}" class="img-fluid w-100"
                            alt="Sảnh Thanh Sen">
                    </a>
                    <div class="d-flex justify-content-between mt-2">
                        <h5 style="color: #C75D15">Sảnh Thanh Sen</h5>
                        <p class="text-muted">11/02/2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
