<?php
    require_once("c://laragon/www/VanessaPeña_24-06-24/view/head/header.php");
?>

    <main class="mt-5">
        <div class="banner d-flex align-items-center justify-content-center">
            <div class="titleBanner text-center">
                <h1>Lo mejor en videojuegos lo encuentras aqui</h1>
            </div>
            <img src="asset/img/banner.jpg" alt="BANNERS" class="w-100 d-md-flex d-none">
            <img src="asset/img/mando.jpg" alt="BANNERS" class="w-100 d-md-none d-flex">
        </div>

        <div class="d-flex justify-content-center my-5">
            <h2 class="titleCar text-center mx-3 mx-md-0">Lo mas actualizado sobre tus videojuegos favoritos</h2>
        </div>

        <div class="d-flex justify-content-center">
            <div class="swiper mx-3 mx-md-0">
                <div class="swiper-wrapper">
                <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="asset/img/gta.jpeg" alt="GTA" class="w-100 h-auto">
                    </div>
                    <div class="swiper-slide">
                        <img src="asset/img/creed.jpg" alt="CREED" class="w-100 h-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="asset/img/gow.jpeg" alt="GOW" class="w-100 h-auto">
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <div class="d-flex justify-content-center py-5">
        <a href="view/pages/subscribe.php" class="btn10">
        <span>¡Suscribete a nuestro boletin!</span>
        </a>
        </div>




    </main>
<?php
    require_once("c://laragon/www/VanessaPeña_24-06-24/view/head/footer.php");
?>