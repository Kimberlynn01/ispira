<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inspira</title>
    <link rel="stylesheet" href="{{ asset('assets/css/landingpage.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

</head>



<body>

    <header>
        @include('layouts.landingPage.navbar')
    </header>

    <main class="py-20 px-5">
        <section id="home">
            <div class="container mx-auto my-20 text-center">
                <h2 class="heading font-bold text-[46px] " style="font-family: 'Instrument Sans'; font-weight: bold;">
                    Inspira: Simplify Your Portfolio Creation <br>& Unlock Potential
                </h2>
                <br>
                <p class="w-[50%] text-[16px] text-[#828282] mx-auto text-center" style="font-family: 'Instrument Sans'; font-weight: 400; text-align:center;">Inspira memudahkan pembuatan portofolio profesional dengan cepat dan praktis. Dilengkapi template menarik dan fitur fleksibel, Inspira membantu menampilkan karya terbaik Anda secara elegan dan mudah diakses. Bangun portofolio impian dan tunjukkan potensi Anda dengan percaya diri bersama <br>Inspira!</p>
                <div class="button flex justify-center mt-[30px]">
                    <button class="text-[#FFFFFF] bg-[#1C1C1C] py-3 mx-2 text-[16px] px-5 rounded" style="font-family: 'Instrument Sans'; font-weight: bold;">Let's Join</button>
                    <button class="text-[#1C1C1C] bg-[#CCCCCC] py-3 mx-2 text-[16px] px-5 rounded" style="font-family: 'Instrument Sans'; font-weight: bold;">Learn Now!</button>
                </div>
            </div>
        </section>
    </main>

</body>

</html>
