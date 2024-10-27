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
    <style>
        @font-face {
            font-family: "Instrument Sans";
            src: url("/assets/fonts/Instrument_Sans/static/InstrumentSans-Regular.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: "Instrument Sans Bold";
            src: url("/assets/fonts/Instrument_Sans/static/InstrumentSans-Bold.ttf") format('truetype');
            font-weight: bold;
            font-style: normal;
        }
        @font-face {
            font-family: "Instrument Sans BI";
            src: url("/assets/fonts/Instrument_Sans/static/InstrumentSans-BoldItalic.ttf") format('truetype');
            font-weight: bolder;
            font-style: normal;
        }

        .swiper-slide {
            transition: transform 0.3s ease;
        }

        .swiper-slide-active {
            transform: scale(1.15);
        }




    </style>
</head>



<body>

    <header>
        @include('layouts.landingPage.navbar')
    </header>

    <main>
        <section id="home">
            <div class="container py-20 px-5 mx-auto my-40 text-center">
                <h2 class="heading text-[46px]">
                    Inspira: Simplify Your Portfolio Creation <br>& Unlock Potential
                </h2>
                <br>
                <p class="w-[50%] text-[16px] text-[#828282] mx-auto text-center" style="font-family: 'Instrument Sans'; font-weight: 400; text-align:center;">Inspira memudahkan pembuatan portofolio profesional dengan cepat dan praktis. Dilengkapi template menarik dan fitur fleksibel, Inspira membantu menampilkan karya terbaik Anda secara elegan dan mudah diakses. Bangun portofolio impian dan tunjukkan potensi Anda dengan percaya diri bersama <br>Inspira!</p>
                <div class="button flex justify-center mt-[30px]">
                    <button class="text-[#FFFFFF] bg-[#1C1C1C] py-3 mx-2 text-[16px] px-5 rounded" style="font-family: 'Instrument Sans Bold'; font-weight: bold;">Let's Join</button>
                    <a href="#service" class="text-[#1C1C1C] bg-[#CCCCCC] py-3 mx-2 text-[16px] px-5 rounded" style="font-family: 'Instrument Sans'; ">Learn Now!</a>
                </div>
            </div>
        </section>
        <section id="service">
            <div class="bg-[#1C1C1C] h-[450px] w-screen">
                <h2 class="service pt-[45px] justify-center text-white text-[25px] flex items-center gap-4" style="font-family: 'Instrument Sans BI'; font-weight: bolder;">
                    <span class="h-px bg-white w-5"></span>
                        SERVICE
                    <span class="h-px bg-white w-5"></span>
                </h2>

                <div class="swiper-container w-full max-w-xl">
                    <div class="swiper-wrapper">
                        <!-- Card 1 -->
                        <div class="swiper-slide bg-white w-40 h-52 rounded-lg shadow-md flex justify-center items-center text-black font-bold">Service 1</div>
                        <!-- Card 2 -->
                        <div class="swiper-slide bg-white w-40 h-52 rounded-lg shadow-md flex justify-center items-center text-black font-bold">Service 2</div>
                        <!-- Card 3 -->
                        <div class="swiper-slide bg-white w-40 h-52 rounded-lg shadow-md flex justify-center items-center text-black font-bold">Service 3</div>
                        <!-- Card 4 -->
                        <div class="swiper-slide bg-white w-40 h-52 rounded-lg shadow-md flex justify-center items-center text-black font-bold">Service 4</div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            // Mengatur tampilan card yang lebih besar di tengah
            on: {
                slideChange: function () {
                    // Menambahkan kelas khusus untuk slide aktif
                    swiper.slides.forEach(slide => slide.classList.remove('swiper-slide-active'));
                    swiper.slides[swiper.activeIndex].classList.add('swiper-slide-active');
                },
            },
        });
    </script>

</body>

</html>

