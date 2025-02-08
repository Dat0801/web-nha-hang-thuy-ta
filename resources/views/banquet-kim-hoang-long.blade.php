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
                Thuyền rồng
            </h2>

            <h1 class="text-white text-wrap fw-bold text-center"
                style="text-transform: uppercase; font-size: 3rem; text-shadow: 2px 2px 5px rgba(0,0,0,0.5);">
                kim long - hoàng long
            </h1>
        </div>

        <img src="{{ asset('images/bg-wedding-promotion.png') }}" class="position-absolute w-100"
            style="top: 0; left: 0; height: 500px; object-fit: cover; z-index: 0;" alt="Wedding Promotion Background">

        <div style="height: 40vh;"></div>

        <div class="container" style="margin-top: 60px;">
            <div class="text-center">
                <img src="{{ asset('images/kim-long-hoang-long-1.png') }}" class="img-fluid mb-4" alt="Wedding Offer">
            </div>
            <h5>Điểm đập vào mắt du khách khi đến tham công viên văn hóa Đầm Sen, là hai chiếc thuyền rồng ngạo nghễ rướn
                thân mình hướng ra giữa lòng hồ. Đây là hai sảnh của nhà hàng Thủy Tạ Đầm Sen có tên gọi Kim Long và Hoàng
                Long.</h5>
            <p style="color: #C75D15;">Nếu bạn có nhu cầu tiếp từ 140 đến 180 khách, thì hai sảnh thuyền rồng (Kim Long và
                Hoàng Long) là lựa chọn số 1 dành cho bạn.</p>
            <p>Ngoài ra, 2 chiếc thuyền rồng cũng tượng trưng cho 2 búp sen điểm tô bên cánh hoa Thanh Sen, hướng ra hồ.
                Thông thường, các thực khách riêng lẻ và gia đình thường chọn hai sảnh thuyền rồng này làm tiệc sinh nhật
                gia đình, gặp gỡ bạn bè, hoặc tiếp khách ngoại giao. Đây cũng là vị trí đẹp để du khách có thể xem bắn pháo
                hoa tại Công viên văn hóa Đầm Sen vào những dịp lễ lớn.</p>
            <div class="row mt-4">
                <div class="col-md-8">
                    <img src="{{ asset('images/kim-long-hoang-long-2.png') }}"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="Ảnh lớn">
                </div>
                <div class="col-md-4 d-flex flex-column gap-4">
                    <img src="{{ asset('images/kim-long-hoang-long-3.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                    <img src="{{ asset('images/kim-long-hoang-long-4.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 2">
                </div>
            </div>

            <div class="row mt-4 mb-4">
                <div class="col-md-4 d-flex flex-column gap-4">
                    <img src="{{ asset('images/kim-long-hoang-long-5.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                    <img src="{{ asset('images/kim-long-hoang-long-7.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 2">
                </div>

                <div class="col-md-8">
                    <img src="{{ asset('images/kim-long-hoang-long-6.png') }}"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="Ảnh lớn">
                </div>
            </div>

            <h1 style="color: #ED7D31">Các sảnh tiệc khác</h1>
            <div class="row mt-2 mb-5">
                <div class="col-md-4 text-center">
                    <a href="">
                        <img src="{{ asset('images/kim-long-hoang-long-8.png') }}" class="img-fluid w-100"
                            alt="Sảnh Ngân Sen">
                    </a>
                    <div class="d-flex justify-content-between mt-2">
                        <h5 style="color: #C75D15">Sảnh Ngân Sen</h5>
                        <p class="text-muted">11/02/2020</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <a href="">
                        <img src="{{ asset('images/kim-long-hoang-long-9.png') }}" class="img-fluid w-100"
                        alt="Sảnh Hoàng Sen">
                    </a>
                    
                    <div class="d-flex justify-content-between mt-2">
                        <h5 style="color: #C75D15">Sảnh Hoàng Sen</h5>
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
