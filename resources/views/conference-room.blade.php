<!DOCTYPE html>
@extends('layouts.main')

@section('body-class', 'home')

@section('title', 'Phòng hội nghị')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center position-absolute w-100"
            style="top: 0; height: 500px; z-index: 1;">
            <h1 class="text-white text-wrap fw-bold text-center"
                style="text-transform: uppercase; font-size: 3rem; text-shadow: 2px 2px 5px rgba(0,0,0,0.5);">
                Phòng hội nghị
            </h1>
        </div>

        <img src="{{ asset('images/bg-wedding-promotion.png') }}" class="position-absolute w-100"
            style="top: 0; left: 0; height: 500px; object-fit: cover; z-index: 0;" alt="Wedding Promotion Background">

        <div style="height: 40vh;"></div>

        <div class="container" style="margin-top: 60px;">

            <div class="text-center">
                <img src="{{ asset('images/bg-conference-room-1.png') }}" class="img-fluid mb-4" alt="Wedding Offer">
            </div>
            <h1 style="color: #ED7D31">Giá cho thuê phòng hội nghị</h1>
            <h4 style="color: #666666">(Đã bao gồm 10% thuế VAT)</h4>
            <div class="table-responsive mt-4 mb-4">
                <table class="table table-bordered">
                    <thead class="table-light text-center">
                        <tr>
                            <th rowspan="2"
                                style="vertical-align: middle; text-align: center; background-color: #FFEED8; color: #ED7D31;">
                                Vị trí</th>
                            <th rowspan="2"
                                style="vertical-align: middle; text-align: center; background-color: #FFEED8; color: #ED7D31;">
                                Diện tích</th>
                            <th rowspan="2"
                                style="vertical-align: middle; text-align: center; background-color: #FFEED8; color: #ED7D31;">
                                Xếp theo kiểu rạp hát</th>
                            <th colspan="2" style="background-color: #FFDAA7; color: #C75D15;">Công suất phòng</th>
                            <th rowspan="2"
                                style="vertical-align: middle; text-align: center; background-color: #FFEED8; color: #ED7D31;">
                                Nửa ngày (VNĐ)</th>
                            <th rowspan="2"
                                style="vertical-align: middle; text-align: center; background-color: #FFEED8; color: #ED7D31;">
                                Nguyên ngày (VNĐ)</th>
                            <th rowspan="2"
                                style="vertical-align: middle; text-align: center; background-color: #FFEED8; color: #ED7D31;">
                                Ghi chú</th>
                        </tr>
                        <tr>
                            <th style="background-color: #FFEED8; color: #ED7D31;">Xếp theo kiểu bàn tròn (10 khách/bàn)
                            </th>
                            <th style="background-color: #FFEED8; color: #ED7D31;">Xếp theo kiểu bàn tròn (10 khách/bàn)
                            </th>

                        </tr>
                    </thead>
                    <tbody id="promotionTableBody">

                    </tbody>
                    <thead class="table-light text-center">
                        <tr>
                            <th colspan="8" style="background-color: #FFDAA7; color: #C75D15;">Khuyến mãi</th>
                        </tr>
                        <tr>
                            <th colspan= "2" style="background-color: #FFEED8; color: #ED7D31;">Màn hình LED
                            </th>
                            <th colspan= "2" style="background-color: #FFEED8; color: #ED7D31;">Bàn lễ tân
                            </th>
                            <th colspan= "2" style="background-color: #FFEED8; color: #ED7D31;">Bục phát biểu
                            </th>
                            <th colspan= "2" style="background-color: #FFEED8; color: #ED7D31;">Âm thanh, 2 micro
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tableData = [
                ["Hoàng Kim Sen", "1.035m2", "1.000 khách", "85", "85", "40.000.000", "70.000.000",
                    "Có đặt ăn menu tiệc được giảm 50% giá mặt bằng (Nếu lượng khách đặt tiệc tương đương khách tham gia hội nghị)"
                ],
                ["Hoàng sen", "667m2", "500 khách", "50", "50", "25.000.000", "45.000.000"],
                ["Kim sen", "368m2", "250 khách", "28", "28", "15.000.000", "30.000.000"],
                ["Thanh sen", "860m2", "750 khách", "62", "62", "30.000.000", "60.000.000"],
                ["Ngàn sen", "402m2", "500 khách", "37", "37", "20.000.000", "40.000.000"],
                ["Thuyền Kim Long", "162m2", "", "14", "14", "Chỉ phục vụ set menu"],
                ["Thuyền Hoàng Long", "179m2", "", "16", "16"]
            ];

            const tableBody = document.getElementById("promotionTableBody");

            tableData.forEach((rowData, index) => {
                let row = document.createElement("tr");

                rowData.forEach((cellData, cellIndex) => {
                    let cell = document.createElement("td");

                    if (cellIndex === 7 && index === 0) {
                        cell.setAttribute("rowspan", 5);
                        cell.style.verticalAlign = "middle";
                    }

                    if (index === 5 && cellIndex === 5) {
                        cell.setAttribute("colspan",
                            3);
                        cell.setAttribute("rowspan", 2);
                        cell.style.verticalAlign = "middle";
                    }

                    if (index === 5 && cellIndex === 5) {
                        cell.textContent = "Chỉ phục vụ set menu";
                        cell.style.verticalAlign = "middle";
                        cell.style.fontWeight = "bold";
                    } else {
                        cell.textContent = cellData;
                    }

                    row.appendChild(cell);
                });

                tableBody.appendChild(row);
            });
        });
    </script>

@endsection
