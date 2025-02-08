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
                Ngân sen
            </h1>
        </div>

        <img src="{{ asset('images/bg-wedding-promotion.png') }}" class="position-absolute w-100"
            style="top: 0; left: 0; height: 500px; object-fit: cover; z-index: 0;" alt="Wedding Promotion Background">

        <div style="height: 40vh;"></div>

        <div class="container" style="margin-top: 60px;">
            <div class="text-center">
                <img src="{{ asset('images/sanh-ngan-sen-1.png') }}" class="img-fluid mb-4" alt="Wedding Offer">
            </div>
            <h5>Nếu bạn có nhu cầu tiếp 500 khách, thì sảnh Ngân Sen là lựa chọn hợp lý. Sức chứa của sảnh có thể xếp 37 bàn
                cho một sự kiện.</h5>
            <p>Ngân Sen là một khu tiệc của nhà hàng Thủy Tạ thuộc Công viên văn hóa Đầm Sen (do Phuthotourist quản lý). Đa
                số thực khách bước vào nhà hàng đều cho rằng đây là sảnh chính. Bởi vị trí của nó nằm trực diện cổng số 2
                CVVH Đầm Sen. Điều này không sai, bởi theo kiến trúc, thì sảnh này là vị trí của đài sen nếu nhìn từ trên
                cao. Còn sảnh Thanh Sen sẽ là cánh hoa tỏa ra trên mặt hồ.
            </p>
            <p>Với kiến trúc hình tròn, rộng 402m2, sảnh được trang trí theo phong cách cung đình. Sảnh có một tầng lửng,
                giúp cho việc ghi hình sự kiện có thêm nhiều góc cạnh khác nhau.</p>
            <div class="row mt-4">
                <div class="col-md-8">
                    <img src="{{ asset('images/sanh-ngan-sen-2.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>
                <div class="col-md-4 d-flex flex-column gap-4">
                    <img src="{{ asset('images/sanh-ngan-sen-3.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                    <img src="{{ asset('images/sanh-ngan-sen-4.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 2">
                </div>
            </div>

            <div class="row mt-4 mb-4">
                <div class="col-md-4 d-flex flex-column gap-4">
                    <img src="{{ asset('images/sanh-ngan-sen-6.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 1">
                    <img src="{{ asset('images/sanh-ngan-sen-7.png') }}" class="img-fluid w-100 h-50 object-fit-cover"
                        alt="Ảnh nhỏ 2">
                </div>

                <div class="col-md-8">
                    <img src="{{ asset('images/sanh-ngan-sen-5.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                        alt="Ảnh lớn">
                </div>
            </div>

            <div class="row mt-2 mb-5 d-flex align-items-stretch">
                <div class="col-md-5">
                    <div class="h-100">
                        <img src="{{ asset('images/sanh-ngan-sen-8.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                            alt="Sảnh Ngân Sen">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="h-100">
                        <img src="{{ asset('images/sanh-ngan-sen-9.png') }}" class="img-fluid w-100 h-100 object-fit-cover"
                            alt="Sảnh Hoàng Sen">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="h-100">
                        <img src="{{ asset('images/sanh-ngan-sen-10.png') }}"
                            class="img-fluid w-100 h-100 object-fit-cover" alt="Sảnh Thanh Sen">
                    </div>
                </div>
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
