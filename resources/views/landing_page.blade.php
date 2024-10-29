<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inspira.id</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/landingpage.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
                    <a href="#feature" class="text-[#1C1C1C] bg-[#CCCCCC] py-3 mx-2 text-[16px] px-5 rounded"
                        style="font-family: 'Instrument Sans'; ">Learn Now!</a>
                </div>
            </div>
        </section>
        <section id="feature">
            <div class="bg-[#1C1C1C] h-[550px]">
                <h2 class="service pt-[45px] justify-center text-white text-[25px] flex items-center gap-4"
                    style="font-family: 'Instrument Sans BI'; font-weight: bolder;">
                    <span class="h-px bg-white w-5"></span>
                    FEATURES
                    <span class="h-px bg-white w-5"></span>
                </h2>

                <div class="swiper-container my-10 w-full flex justify-center">
                    <div class="swiper-wrapper">
                        <div
                            class="swiper-slide flex  items-center justify-center bg-white rounded-lg w-[250px] h-[400px] transform transition-transform duration-300">
                        </div>
                        <div
                            class="swiper-slide flex items-center justify-center bg-white rounded-lg w-[250px] h-[400px] transform transition-transform duration-300">
                        </div>
                        <div
                            class="swiper-slide flex items-center justify-center bg-white rounded-lg w-[250px] h-[400px] transform transition-transform duration-300">
                        </div>
                        <div
                            class="swiper-slide flex items-center justify-center bg-white rounded-lg w-[250px] h-[400px] transform transition-transform duration-300">
                        </div>
                        <div
                            class="swiper-slide flex items-center justify-center bg-white rounded-lg w-[250px] h-[400px] transform transition-transform duration-300">
                        </div>
                        <div
                            class="swiper-slide flex items-center justify-center bg-white rounded-lg w-[250px] h-[400px] transform transition-transform duration-300">
                        </div>
                        <div
                            class="swiper-slide flex items-center justify-center bg-white rounded-lg w-[250px] h-[400px] transform transition-transform duration-300">
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <section id="aboutus">
            <h2 class="service pt-[45px] justify-center text-[#1C1C1C] text-[25px] flex items-center gap-4"
                style="font-family: 'Instrument Sans BI'; font-weight: bolder;">
                <span class="h-px bg-black w-5"></span>
                ABOUT US
                <span class="h-px bg-black w-5"></span>
            </h2>

            <div class="flex justify-center">
                <div
                    class="bg-white w-[50%] mb-[100px] rounded-lg flex justify-center items-center flex-col gap-3 mt-10">
                    <p class="text-[16px] text-center text-[#828282]"
                        style="font-family: 'Instrument Sans'; font-weight: 400;">
                        Inspira adalah platform website yang dirancang untuk memudahkan Anda dalam membuat portofolio
                        pribadi yang profesional dan menarik. Dengan tema-tema yang beragam dan dapat disesuaikan,
                        Inspira memungkinkan Anda untuk menampilkan karya dan prestasi Anda dengan cara yang unik dan
                        kreatif. Kami percaya bahwa setiap individu memiliki potensi luar biasa, dan kami berkomitmen
                        untuk membantu Anda merealisasikan potensi tersebut melalui portofolio yang elegan dan mudah
                        diakses. Bergabunglah dengan Inspira dan mulailah perjalanan Anda dalam membangun portofolio
                        impian Anda hari ini!
                    </p>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-[#1C1C1C] flex flex-col items-center text-white p-5">
    </footer>

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
                initialSlide: 3,
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
