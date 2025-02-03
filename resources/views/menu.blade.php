@extends('layouts.main')

@section('title', 'Menu')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <div class="container-fluid py-5">
        <img src="{{ asset('images/bg-menu-right.png') }}" class="position-absolute"
            style="top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="Right Background Image">
        <img src="{{ asset('images/bg-menu-left.png') }}" class="position-absolute"
            style="top: 0; left: 0; width: 45%; height: auto; object-fit: contain;" alt="Left Overlay Image">

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5 text-center" style="z-index: 1;">
                        <img id="largeImage" src="{{ asset('images/bo-1-lg.png') }}" class="img-fluid rounded"
                            style="width: 465px; height: 465px; object-fit: cover;">
                    </div>
                    <div class="col-md-7 d-flex align-items-center" style="z-index: 1">
                        <div>
                            <h2 id="foodTitle" class="mb-4">Bò Argentina</h2>
                            <h1 id="foodSubtitle" class="text-wrap">Sốt tiêu đen</h1>
                            <p id="foodDescription">Dipped Argentina beef with black pepper sauce</p>

                            <div id="foodTags">
                                <span class="food-tag">Thịt bò</span>
                                <span class="food-tag">Tiêu đen</span>
                            </div>

                            <p id="foodPrice" class="food-price">150.000 - 300.000 VND</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 food-item" style="margin-left: 15px; ">
                    <div class="d-flex justify-content-center position-relative">
                        <button class="btn btn-sm position-absolute start-0 top-50 translate-middle-y"
                            onclick="scrollImages('left', 'imageContainer1'); return false;">
                            <i class="bi bi-chevron-left fs-4"></i>
                        </button>

                        <div id="imageContainer1" class="d-flex overflow-hidden" style="width: 700px;">
                            <div class="text-center mx-2">
                                <img src="{{ asset('images/bo-1.png') }}" class="rounded-circle food-img active"
                                    alt="Bò Argentina" data-description="A delicious beef steak cooked to perfection."
                                    data-subtitle = "Sốt Tiêu đen" data-tags="Thịt bò, Tiêu đen"
                                    data-price="150.000 VND - 300.000 VND" onclick="changeMainImage(this)"
                                    style="width: 112px; height: 112px;">
                                <p class="food-name">Bò Argentina sốt tiêu đen</p>
                            </div>

                            <div class="text-center mx-2">
                                <img src="{{ asset('images/bo-2.png') }}" class="rounded-circle food-img" alt="Thịt Bò"
                                    data-description="Beefsteak" data-tags="Khoai tây, Thịt bò" data-subtitle = "Beefsteak"
                                    data-price="150.000 VND - 300.000 VND" onclick="changeMainImage(this)"
                                    style="width: 112px; height: 112px;">
                                <p class="food-name">Bò beefsteak</p>
                            </div>

                            <div class="text-center mx-2">
                                <img src="{{ asset('images/bo-3.png') }}" class="rounded-circle food-img" alt="Bò Lúc Lắc"
                                    data-description="Beef dish seved with fried potato" data-subtitle = "Khoai tây"
                                    data-tags="Hành tây, Khoai tây, Ớt xanh" data-price="180.000 VND - 360.000 VND"
                                    onclick="changeMainImage(this)" style="width: 112px; height: 112px;">
                                <p class="food-name">Bò lúc lắc khoai tây</p>
                            </div>

                            <div class="text-center mx-2">
                                <img src="{{ asset('images/bo-4.png') }}" class="rounded-circle food-img" alt="Bò Xào"
                                    data-description="Sauted Beef with Chinese broccoli" data-subtitle = "Cải Rổ"
                                    data-tags="Cải rổ, Thịt bò" data-price="180.000 VND - 360.000 VND"
                                    onclick="changeMainImage(this)" style="width: 112px; height: 112px;">
                                <p class="food-name">Bò xào cải rổ</p>
                            </div>
                        </div>

                        <button class="btn btn-sm position-absolute end-0 top-50 translate-middle-y"
                            onclick="scrollImages('right', 'imageContainer1'); return false;">
                            <i class="bi bi-chevron-right fs-4"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function scrollImages(direction, containerId) {
            if (event) event.preventDefault();

            const container = document.getElementById(containerId);
            const images = container.getElementsByClassName('food-img');
            let currentIndex = Array.from(images).findIndex(img => img.classList.contains('active'));

            if (direction === 'left' && currentIndex > 0) {
                currentIndex--;
            } else if (direction === 'right' && currentIndex < images.length - 1) {
                currentIndex++;
            }

            Array.from(images).forEach(img => img.classList.remove('active'));
            images[currentIndex].classList.add('active');

            container.scrollTo({
                left: images[currentIndex].offsetLeft - container.offsetLeft,
                behavior: 'smooth'
            });

            changeMainImage(images[currentIndex]);
        }

        function changeMainImage(imgElement) {
            let smallImageSrc = imgElement.src;
            let largeImageSrc = smallImageSrc.replace('.png', '-lg.png');

            document.getElementById('largeImage').src = largeImageSrc;
            document.getElementById('foodTitle').innerText = imgElement.alt;
            document.getElementById('foodSubtitle').innerText = imgElement.dataset.subtitle;
            document.getElementById('foodDescription').innerText = imgElement.dataset.description;
            document.getElementById('foodPrice').innerText = imgElement.dataset.price;

            let tagsContainer = document.getElementById('foodTags');
            tagsContainer.innerHTML = '';
            let tags = imgElement.dataset.tags.split(',');
            tags.forEach(tag => {
                let tagElement = document.createElement('span');
                tagElement.className = 'food-tag';
                tagElement.innerText = tag.trim();
                tagsContainer.appendChild(tagElement);
            });

            document.querySelectorAll('.food-img').forEach(img => img.classList.remove('active'));
            imgElement.classList.add('active');
        }
    </script>
@endsection
