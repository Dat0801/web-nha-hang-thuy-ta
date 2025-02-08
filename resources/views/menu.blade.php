@extends('layouts.main')

@section('title', 'Thực đơn')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <div class="container-fluid">
        <img src="{{ asset('images/bg-menu-right.png') }}" class="position-absolute"
            style="top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="Right Background Image">
        <img src="{{ asset('images/bg-menu-left.png') }}" class="position-absolute"
            style="top: 0; left: 0; width: 40%; height: auto; object-fit: contain;" alt="Left Overlay Image">

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

                <div class="row">
                    <div class="col-md-10 mb-6 food-item" style="margin-left: 15px; ">
                        <div class="d-flex justify-content-center position-relative">
                            <button class="btn btn-sm position-absolute start-0 top-50 translate-middle-y"
                                onclick="scrollImages('left', 'imageContainer1'); return false;">
                                <i class="bi bi-chevron-left fs-4"></i>
                            </button>

                            <div id="imageContainer1" class="d-flex overflow-hidden">
                                <div class="text-center mx-2">
                                    <img src="{{ asset('images/bo-1.png') }}" class="rounded-circle food-img active"
                                        alt="Bò Argentina" data-description="A delicious beef steak cooked to perfection."
                                        data-subtitle = "Sốt Tiêu đen" data-tags="Thịt bò, Tiêu đen"
                                        data-price="150.000 VND - 300.000 VND" onclick="changeMainImage(this)"
                                        style="width: 112px; height: 112px;">
                                    <p class="food-name">Bò Argentina sốt tiêu đen</p>
                                </div>

                                <div class="text-center mx-2">
                                    <img src="{{ asset('images/bo-2.png') }}" class="rounded-circle food-img" alt="Bò"
                                        data-description="Beefsteak" data-tags="Khoai tây, Thịt bò"
                                        data-subtitle = "Beefsteak" data-price="150.000 VND - 300.000 VND"
                                        onclick="changeMainImage(this)" style="width: 112px; height: 112px;">
                                    <p class="food-name">Bò beefsteak</p>
                                </div>

                                <div class="text-center mx-2">
                                    <img src="{{ asset('images/bo-3.png') }}" class="rounded-circle food-img"
                                        alt="Bò Lúc Lắc" data-description="Beef dish seved with fried potato"
                                        data-subtitle = "Khoai tây" data-tags="Hành tây, Khoai tây, Ớt xanh"
                                        data-price="180.000 VND - 360.000 VND" onclick="changeMainImage(this)"
                                        style="width: 112px; height: 112px;">
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

            <div class="col-md-4" style="z-index: 1; margin-top: 50px;">
                <div class="menu-container position-relative">
                    <h2 class="menu-title">Menu</h2>
                    <div class="menu-list">

                        <div class="menu-item active">
                            <div class="menu-icon">
                                <img src="images/bo-1.png" alt="Bò">
                            </div>
                            <div class="menu-info">
                                <h3>Bò</h3>
                                <p>4 món</p>
                            </div>
                        </div>

                        <div class="menu-item">
                            <div class="menu-icon">
                                <img src="images/doi-truong-1.png" alt="Dồi trường">
                            </div>
                            <div class="menu-info">
                                <h3>Dồi trường</h3>
                                <p>3 món</p>
                            </div>
                        </div>

                        <div class="menu-item">
                            <div class="menu-icon">
                                <img src="images/cha-gio-1.png" alt="Chả giò">
                            </div>
                            <div class="menu-info">
                                <h3>Chả giò</h3>
                                <p>4 món</p>
                            </div>
                        </div>

                        <div class="menu-item">
                            <div class="menu-icon">
                                <img src="images/goi-1.png" alt="Gỏi">
                            </div>
                            <div class="menu-info">
                                <h3>Gỏi</h3>
                                <p>1 món</p>
                            </div>
                        </div>

                        <div class="menu-item">
                            <div class="menu-icon">
                                <img src="images/chim-bo-cau-1.png" alt="Chim bồ câu">
                            </div>
                            <div class="menu-info">
                                <h3>Chim bồ câu</h3>
                                <p>1 món</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('.menu-item');

            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    menuItems.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');

                    const categoryName = this.querySelector('h3').textContent.trim();
                    updateFoodItems(categoryName);
                });
            });

            function updateFoodItems(categoryName) {
                const foodItemsContainer = document.getElementById('imageContainer1');
                const foodData = {
                    'Bò': [{
                            image: 'bo-1.png',
                            title: 'Bò Argentina',
                            subtitle: 'sốt tiêu đen',
                            description: 'Dipped Argentina beef with black pepper sauce',
                            price: '150.000 - 300.000 VND',
                            tags: ['Thịt bò', 'Tiêu đen']
                        },
                        {
                            image: 'bo-2.png',
                            title: 'Bò',
                            subtitle: 'beefsteak',
                            description: 'Beefsteak',
                            price: '150.000 - 300.000 VND',
                            tags: ['Khoai tây', 'Thịt bò']
                        },
                        {
                            image: 'bo-3.png',
                            title: 'Bò lúc lắc',
                            subtitle: 'khoai tây',
                            description: 'Beef dish seved with fried potato',
                            price: '180.000 - 360.000 VND',
                            tags: ['Hành tây', 'Khoai tây', 'Ớt xanh']
                        },
                        {
                            image: 'bo-4.png',
                            title: 'Bò xào',
                            subtitle: 'cải rổ',
                            description: 'Sauted Beef with Chinese broccoli',
                            price: '180.000 - 360.000 VND',
                            tags: ['Cải rổ', 'Thịt bò']
                        }
                    ],
                    'Dồi trường': [{
                        image: 'doi-truong-1.png',
                        title: 'Dồi trường',
                        subtitle: 'hấp hành gừng',
                        description: 'Steamed pig’s uterine with ginger & scallions',
                        price: '150.000 - 300.000 VND',
                        tags: ['Dồi trường', 'Gừng', 'Hành lá']
                    }, {
                        image: 'doi-truong-2.png',
                        title: 'Dồi trường',
                        subtitle: 'chiên giòn',
                        description: 'Fried hog’s pudding',
                        price: '150.000 - 300.000 VND',
                        tags: ['Dồi trường']
                    }, {
                        image: 'doi-truong-3.png',
                        title: 'Dồi trường',
                        subtitle: 'rang muối',
                        description: 'Roasted pig’s uterine with salf',
                        price: '150.000 - 300.000 VND',
                        tags: ['Dồi trường', 'Muối']
                    }],
                    'Chả giò': [{
                            image: 'cha-gio-1.png',
                            title: 'Chả giò cá',
                            subtitle: 'thát lát thìa là',
                            description: 'Spring rolls Bronze featherback & dills',
                            price: '150.000 - 300.000 VND',
                            tags: ['Cá thát lát', 'Rau thìa là']
                        },
                        {
                            image: 'cha-gio-2.png',
                            title: 'Chả giò',
                            subtitle: 'cocktail',
                            description: 'Cocktail Spring rolls',
                            price: '150.000 - 300.000 VND',
                            tags: ['Chả giò', 'Cocktail']
                        },
                        {
                            image: 'cha-gio-3.png',
                            title: 'Chả giò rế',
                            subtitle: 'tôm cua',
                            description: 'Shrimp & crab spring rools trivet',
                            price: '150.000 - 300.000 VND',
                            tags: ['Cua', 'Tôm']
                        },
                        {
                            image: 'cha-gio-4.png',
                            title: 'Chả giò',
                            subtitle: 'tôm',
                            description: 'Sauted Beef with Chinese broccoli',
                            price: '150.000 - 300.000 VND',
                            tags: ['Tôm']
                        }
                    ]
                };

                foodItemsContainer.innerHTML = '';

                if (!foodData[categoryName] || foodData[categoryName].length === 0) {
                    foodItemsContainer.innerHTML = '<p class="text-center">Không có món ăn nào.</p>';
                    return;
                }

                foodData[categoryName].forEach(food => {
                    let foodItem = document.createElement('div');
                    foodItem.classList.add('text-center', 'mx-2');
                    foodItem.innerHTML = `
                <img src="images/${food.image}" class="rounded-circle food-img" 
                    alt="${food.title}" 
                    data-description="${food.description}"
                    data-subtitle="${food.subtitle}"
                    data-price="${food.price}"
                    data-tags="${food.tags.join(',')}"
                    onclick="window.changeMainImage(this)"
                    style="width: 112px; height: 112px;">
                <p class="food-name">${food.title}  ${food.subtitle}</p>
            `;
                    foodItemsContainer.appendChild(foodItem);
                });

                const firstItem = foodItemsContainer.querySelector('.food-img');
                if (firstItem) window.changeMainImage(firstItem);
            }

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

            window.changeMainImage = function(imgElement) {
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
            };
        });

        window.scrollImages = function(direction, containerId) {
            const container = document.getElementById(containerId);
            if (!container) return; 
            const images = container.getElementsByClassName('food-img');
            if (images.length === 0) return; 

            let currentIndex = Array.from(images).findIndex(img => img.classList.contains('active'));

            if (direction === 'left' && currentIndex > 0) {
                currentIndex--;
            } else if (direction === 'right' && currentIndex < images.length - 1) {
                currentIndex++;
            } else {
                return; 
            }

            Array.from(images).forEach(img => img.classList.remove('active'));

            images[currentIndex].classList.add('active');

            container.scrollTo({
                left: images[currentIndex].offsetLeft - container.offsetLeft,
                behavior: 'smooth'
            });

            changeMainImage(images[currentIndex]);
        };
    </script>
@endsection
