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
                Thanh Sen
            </h1>
        </div>

        <img src="{{ asset('images/bg-wedding-promotion.png') }}" class="position-absolute w-100"
            style="top: 0; left: 0; height: 500px; object-fit: cover; z-index: 0;" alt="Wedding Promotion Background">

        <div style="height: 40vh;"></div>

        <div class="container" style="margin-top: 60px;">
            <div class="text-center">
                <img src="{{ asset('images/sanh-thanh-sen-1.png') }}" class="img-fluid mb-4" alt="Wedding Offer">
            </div>
            <h5>Là sảnh đẹp nhất với không gian mở hướng ra hồ bán nguyệt của CVVH Đầm Sen. Với diện tích 862m2, sảnh Thanh
                Sen có thể tiếp 62 bàn (khoảng 750 khách).</h5>
            <p>Khác với các sảnh khác, sảnh Thanh Sen có hình cánh cung. Nếu như sảnh Ngân Sen được ví như đài sen, thì sảnh
                Thanh Sen lại xem như cánh sen hướng ra mặt hồ. Và điểm tô cho “cánh sen” là hai thuyền rồng tượng trưng
                những búp sen nhô lên lao. Với kiến trúc hình cong, nên không gian bên trong sảnh cũng được thiết kế theo
                hình cong từ cầu thang cho đến lối vào. Và cả sân khấu cũng được thiết kế hoành tráng bằng hình cong.</p>
            <div class="row mt-4 mb-4">
                <div class="col-md-8">
                    <img src="{{ asset('images/sanh-thanh-sen-2.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>

                <div class="col-md-4 d-flex flex-column gap-4">
                    <img src="{{ asset('images/sanh-thanh-sen-3.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                    <img src="{{ asset('images/sanh-thanh-sen-4.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 2">
                </div>
            </div>
            <div class="row mt-4 mb-4 text-center">
                <div class="col-md-12">
                    <img src="{{ asset('images/sanh-thanh-sen-5.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>
            </div>
            <h1 style="color: #ED7D31; text-transform: uppercase;" class="text-wrap">Rước dâu bằng thuyền hoa</h1>
            <p>
                Khác với các sảnh khác, sảnh Thanh Sen có hình cánh cung. Nếu như sảnh Ngân Sen được ví như đài sen, thì
                sảnh Thanh Sen lại xem như cánh sen hướng ra mặt hồ. Và điểm tô cho “cánh sen” là hai thuyền rồng tượng
                trưng những búp sen nhô lên lao. Với kiến trúc hình cong, nên không gian bên trong sảnh cũng được thiết kế
                theo hình cong từ cầu thang cho đến lối vào. Và cả sân khấu cũng được thiết kế hoành tráng bằng hình cong.
            </p>
            <div class="row mt-4 mb-4">
                <div class="col-md-8">
                    <img src="{{ asset('images/sanh-thanh-sen-6.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>

                <div class="col-md-4 d-flex flex-column gap-4">
                    <img src="{{ asset('images/sanh-thanh-sen-7.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                    <img src="{{ asset('images/sanh-thanh-sen-8.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 2">
                </div>
            </div>

            <div class="row mt-4 mb-4">
                <div class="col-md-6">
                    <img src="{{ asset('images/sanh-thanh-sen-9.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/sanh-thanh-sen-10.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                </div>
            </div>
            <h1 style="color: #ED7D31; text-transform: uppercase;" class="text-wrap">sân khâu rèm nước</h1>
            <p>
                Bên cạnh đó, sân khấu chính của sảnh cũng được thiết kế như sân khấu ca nhạc. Mục đích đáp ứng mọi nhu cầu
                tổ chức sự kiện. Đặc biệt sân khấu này còn có hệ thống “rèm nước”. Khi diễn ra nghi thức, chiếm rèm nước trở
                nên sống động và lung linh. Tạo nên sự huyền diệu cho các đôi trong lễ thành hôn của mình.
            </p>
            <div class="row mt-4 mb-4">
                <div class="col-md-8">
                    <img src="{{ asset('images/sanh-thanh-sen-11.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>

                <div class="col-md-4 d-flex flex-column gap-4">
                    <img src="{{ asset('images/sanh-thanh-sen-12.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                    <img src="{{ asset('images/sanh-thanh-sen-13.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 2">
                </div>
            </div>
            <div class="row mt-4 mb-4 text-center">
                <div class="col-md-12">
                    <img src="{{ asset('images/sanh-thanh-sen-14.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>
            </div>
            <h1 style="color: #ED7D31">Các sảnh tiệc khác</h1>
            <div class="row mt-2 mb-5">
                <div class="col-md-4 text-center">
                    <a href="{{ route('banquet-kim-hoang-long') }}">
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
                    <a href="{{ route('banquet-hoang-kim-sen') }}">
                        <img src="{{ asset('images/kim-long-hoang-long-9.png') }}" class="img-fluid w-100"
                            alt="Sảnh Hoàng Sen">
                    </a>

                    <div class="d-flex justify-content-between mt-2">
                        <h5 style="color: #C75D15">Sảnh Hoàng Sen - Kim Sen</h5>
                        <p class="text-muted">11/02/2020</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <a href="{{ route('banquet-ngan-sen') }}">
                        <img src="{{ asset('images/kim-long-hoang-long-8.png') }}" class="img-fluid w-100"
                            alt="Sảnh Ngân Sen">
                    </a>
                    <div class="d-flex justify-content-between mt-2">
                        <h5 style="color: #C75D15">Sảnh Ngân Sen</h5>
                        <p class="text-muted">11/02/2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
