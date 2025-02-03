<!DOCTYPE html>
@extends('layouts.main')

@section('body-class', 'home')

@section('title', 'Trang chủ')

@section('content')
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel"
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner" style="height: 100%;">
            <div class="carousel-item active" style="height: 100%;">
                <img src="{{ asset('images/bg-home-1.png') }}" class="d-block w-100" alt="Slide 1" style="height: 100%;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mb-3" style="max-height:150px">
                    <h5 class="text-wrap">Chào mừng đến với</h5>
                    <h3 class="text-wrap">nhà hàng thủy tạ đầm sen</h3>
                    <p class="mb-0">
                        Nhà hàng Thủy Tạ Đầm Sen nằm trên hồ của công viên văn hóa Đầm Sen, với 6 sảnh tiệc. Có thể đáp ứng
                        nhu cầu lượng khách lớn từ 100 đến 700 khách/sảnh. Đặc biệt, nhà hàng Thủy Tạ còn có vị trí tổ chức
                        tiệc ngoài trời tại Quảng trường La Mã (CVVH Đầm Sen), đáp ứng lượng khách lên đến 2000. Đây là vị
                        trí lý tưởng để các quý công ty tổ chức đại tiệc cuối năm, hoặc sự kiện, tiệc cưới, sinh nhật...
                    </p>

                    <a href="#learn-more" class="btn btn-primary mt-3" style="width: 155px;">Tìm hiểu ngay</a>
                </div>
            </div>

            <div class="carousel-item" style="height: 100%;">
                <img src="{{ asset('images/bg-home-2.png') }}" class="d-block w-100" alt="Slide 2" style="height: 100%;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mb-3" style="max-height:150px">
                    <h5 class="text-wrap">Chào mừng đến với</h5>
                    <h3 class="text-wrap">nhà hàng thủy tạ đầm sen</h3>
                    <p class="mb-0">
                        Nhà hàng Thủy Tạ Đầm Sen nằm trên hồ của công viên văn hóa Đầm Sen, với 6 sảnh tiệc. Có thể đáp ứng
                        nhu cầu lượng khách lớn từ 100 đến 700 khách/sảnh. Đặc biệt, nhà hàng Thủy Tạ còn có vị trí tổ chức
                        tiệc ngoài trời tại Quảng trường La Mã (CVVH Đầm Sen), đáp ứng lượng khách lên đến 2000. Đây là vị
                        trí lý tưởng để các quý công ty tổ chức đại tiệc cuối năm, hoặc sự kiện, tiệc cưới, sinh nhật...
                    </p>

                    <a href="#learn-more" class="btn btn-primary mt-3">Tìm hiểu ngay</a>
                </div>
            </div>
            <div class="carousel-item" style="height: 100%;">
                <img src="{{ asset('images/bg-home-3.png') }}" class="d-block w-100" alt="Slide 3" style="height: 100%;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mb-3" style="max-height:150px">
                    <h5 class="text-wrap">Chào mừng đến với</h5>
                    <h3 class="text-wrap">nhà hàng thủy tạ đầm sen</h3>
                    <p class="mb-0">
                        Nhà hàng Thủy Tạ Đầm Sen nằm trên hồ của công viên văn hóa Đầm Sen, với 6 sảnh tiệc. Có thể đáp ứng
                        nhu cầu lượng khách lớn từ 100 đến 700 khách/sảnh. Đặc biệt, nhà hàng Thủy Tạ còn có vị trí tổ chức
                        tiệc ngoài trời tại Quảng trường La Mã (CVVH Đầm Sen), đáp ứng lượng khách lên đến 2000. Đây là vị
                        trí lý tưởng để các quý công ty tổ chức đại tiệc cuối năm, hoặc sự kiện, tiệc cưới, sinh nhật...
                    </p>

                    <a href="#learn-more" class="btn btn-primary mt-3">Tìm hiểu ngay</a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection
