<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inspira</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/landingpage.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</head>



<body>

    <header>
        @include('layouts.landingPage.navbar')
    </header>

    <main>
        <section id="home">
            <div class="container py-20 px-5 mx-auto my-40 text-center">
                <h2 class="heading text-[46px]" style="font-family: 'Instrument Sans BI'; ">
                    Inspira: Simplify Your Portfolio Creation <br>& Unlock Potential
                </h2>
                <br>
                <p class="w-[50%] text-[16px] text-[#828282] mx-auto text-center"
                    style="font-family: 'Instrument Sans'; font-weight: 400; text-align:center;">Inspira memudahkan
                    pembuatan portofolio profesional dengan cepat dan praktis. Dilengkapi template menarik dan fitur
                    fleksibel, Inspira membantu menampilkan karya terbaik Anda secara elegan dan mudah diakses. Bangun
                    portofolio impian dan tunjukkan potensi Anda dengan percaya diri bersama <br>Inspira!</p>
                <div class="button flex justify-center mt-[30px]">
                    <button class="text-[#FFFFFF] bg-[#1C1C1C] py-3 mx-2 text-[16px] px-5 rounded"
                        style="font-family: 'Instrument Sans Bold'; font-weight: bold;">Let's Join</button>
                    <a href="#service" class="text-[#1C1C1C] bg-[#CCCCCC] py-3 mx-2 text-[16px] px-5 rounded"
                        style="font-family: 'Instrument Sans'; ">Learn Now!</a>
                </div>
            </div>
        </section>
        <section id="service">
            <div class="bg-[#1C1C1C] h-[550px] w-screen">
                <h2 class="service pt-[45px] justify-center text-white text-[25px] flex items-center gap-4"
                    style="font-family: 'Instrument Sans BI'; font-weight: bolder;">
                    <span class="h-px bg-white w-5"></span>
                    SERVICE
                    <span class="h-px bg-white w-5"></span>
                </h2>

                <div class="swiper-container my-10 w-full flex justify-center">
                    <div class="swiper-wrapper">
                        <div
                            class="swiper-slide flex items-center justify-center bg-white rounded-lg w-[250px] h-[400px] transform transition-transform duration-300">
                            <p class="text-center">Content 1</p>
                        </div>
                        <div
                            class="swiper-slide flex items-center justify-center bg-white rounded-lg w-[250px] h-[400px] transform transition-transform duration-300">
                            <p class="text-center">Content 2</p>
                        </div>
                        <div
                            class="swiper-slide flex items-center justify-center bg-white rounded-lg w-[250px] h-[400px] transform transition-transform duration-300">
                            <p class="text-center">Content 3</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>


    </main>


    <script>
        document.getElementById("hamburger").addEventListener("click", function() {
            const navMenu = document.getElementById("navMenu");
            navMenu.classList.toggle("show");
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                initialSlide: 1,
                centeredSlides: true,
                slidesPerView: 'auto',
                spaceBetween: 40,
                coverflowEffect: {
                    rotate: 1,
                    stretch: 0,
                    depth: 100,
                    modifier: 2,
                    slideShadows: true
                },

                loop: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                slideToClickedSlide: true,

            });
        });
    </script>




</body>

</html>
