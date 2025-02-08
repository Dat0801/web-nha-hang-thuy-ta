<!DOCTYPE html>
@extends('layouts.main')

@section('body-class', 'home')

@section('title', 'Khuyến mãi tiệc cưới')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center position-absolute w-100"
            style="top: 0; height: 500px; z-index: 1;">
            <h1 class="text-white text-wrap fw-bold text-center"
                style="text-transform: uppercase; font-size: 3rem; text-shadow: 2px 2px 5px rgba(0,0,0,0.5);">
                Khuyến mãi tiệc cưới
            </h1>
        </div>

        <img src="{{ asset('images/bg-wedding-promotion.png') }}" class="position-absolute w-100"
            style="top: 0; left: 0; height: 500px; object-fit: cover; z-index: 0;" alt="Wedding Promotion Background">

        <div style="height: 40vh;"></div>

        <div class="container" style="margin-top: 60px;">

            <div class="text-center">
                <img src="{{ asset('images/bg-wedding-promotion-2.png') }}" class="img-fluid mb-4" alt="Wedding Offer">
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light text-center">
                        <tr>
                            <th rowspan="2"
                                style="vertical-align: middle; text-align: center; background-color: #FFEED8; color: #ED7D31;">
                                Quà tặng</th>
                            <th colspan="6" style="background-color: #FFDAA7; color: #C75D15;">Số bàn đặt chính thức</th>
                        </tr>
                        <tr>
                            <th style="background-color: #FFEED8; color: #ED7D31;">15-20</th>
                            <th style="background-color: #FFEED8; color: #ED7D31;">21-26</th>
                            <th style="background-color: #FFEED8; color: #ED7D31;">27-32</th>
                            <th style="background-color: #FFEED8; color: #ED7D31;">33-42</th>
                            <th style="background-color: #FFEED8; color: #ED7D31;">43-50</th>
                            <th style="background-color: #FFEED8; color: #ED7D31;">51-65</th>
                        </tr>
                    </thead>
                    <tbody id="promotionTableBody">

                    </tbody>
                </table>
            </div>
            <ul>
                <li>Quý khách vào dự tiệc tại nhà Thuỷ Tạ Đầm Sen được tham quan Công Viên Đầm Sen Miễn Phí trong ngày.</li>
                <li>Chương trình khuyến mãi chỉ áp dụng trên số bàn tiệc chinh thức đã thoả thuận trong hợp đồng (không áp dụng cho bàn dự phòng và bàn phát sinh trong buổi tiệc).</li>
                <li>Chương trình khuyến mãi không quy đổi thành tiền hoặc chương trình khác.</li>
            </ul>

        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tableData = [
                ["Liễn hồng, bút ký tên, kệ ảnh, thúng hỷ", "", "", "", "", "", ""],
                ["Tháp ly, 2 chai Champagne, đá khói", "", "", "", "", "", ""],
                ["Khăn ăn, hoa tươi để bàn, khăn lạnh", "", "", "", "", "", ""],
                ["Thức ăn nhẹ đầu giờ Cô Dâu Chú Rể", "", "", "", "", "", ""],
                ["Đậu phộng đầu giờ", "", "", "", "", "", ""],
                ["Nước ngọt, nước suối suốt tiệc(phục vụ rót bình)", "", "", "", "", "", ""],
                ["MC tiếng Việt đầu giờ", "", "", "", "", "", ""],
                ["Thiệp cưới theo mẫu (chưa in nội dung)", "", "", "", "", "", ""],
                ["Pháo kim tuyến (4 viên)", "", "", "", "", "", ""],
                ["Bánh cưới 4 giả 1 thật", "", "", "", "", "", ""],
                ["Thiệp cưới theo mẫu (có in nội dung)", "", "", "", "", "", ""],
                ["Saxo + 2 Ca sĩ", "", "", "", "", "", ""],
                ["Máy chiếu Album hoặc màn hình Led", "", "", "", "", "", ""],
                ["Đội múa khai tiệc", "", "", "", "", "", ""],
                ["Máy quay trực tiếp", "", "", "", "", "", ""],
                ["Bàn ăn gia đình", "", "", "", "", "", ""],
                ["Giảm giá chương trình nghi lễ đặc biệt", "", "", "", "", "", ""]

            ];

            const tableBody = document.getElementById("promotionTableBody");

            tableData.forEach(rowData => {
                let row = document.createElement("tr"); 

                rowData.forEach(cellData => {
                    let cell = document.createElement("td"); 
                    cell.textContent = cellData; 
                    row.appendChild(cell); 
                });

                tableBody.appendChild(row); 
            });
        });
    </script>

@endsection
