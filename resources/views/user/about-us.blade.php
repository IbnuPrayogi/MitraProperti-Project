<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <style>
        .swiper-pagination-bullet {
            background: red;
        }
    </style>
</head>

<body class="bg-white">
    {{-- Navbar --}}
    @include('user.partials.navbar')

    {{-- Path --}}
    <div class="container flex items-center space-x-2 mt-24 mx-auto bg-[#F4BDB9] p-4 rounded-lg text-gray-600">
        @foreach ([['name' => 'Home', 'url' => '/'], ['name' => 'About Us', 'url' => '/about']] as $link)
            @if ($loop->last)
                <span>{{ $link['name'] }}</span>
            @else
                <a href="" class="text-red-600 hover:underline">{{ $link['name'] }}</a>
                <span class="icon-[ep--arrow-right-bold] text-bold text-red-600"></span>
            @endif
        @endforeach
    </div>

    {{-- About Us --}}
    <div class="container mx-auto mt-[3.8rem] grid grid-cols-6 ">
        <div class="col-span-3 ">
            <p class="font-semibold text-3xl">Mitra Property Bogor tuh apa sih?</p>

            <div class="font-light">
                <p class="mt-[1.63rem] font-lg">CV Mitra Property Bogor didirikan pada tahun 2021 untuk memenuhi
                    kebutuhan akan layanan properti di wilayah Bogor. Perusahaan ini menyediakan berbagai layanan,
                    termasuk penjualan, penyewaan, dan manajemen properti, serta konsultasi investasi properti.

                </p>

                <p class="mt-[1.63rem] font-lg">Dengan tim profesional dan berpengalaman, CV Mitra Property Bogor
                    berkomitmen untuk memberikan pelayanan terbaik kepada pelanggan. Visi perusahaan adalah menjadi
                    penyedia layanan properti terkemuka di Bogor, dengan misi memberikan layanan yang berkualitas dan
                    terpercaya.
                </p>

                <p class="mt-[1.63rem] font-lg">CV Mitra Property Bogor selalu mengedepankan prinsip keberlanjutan dan
                    ramah lingkungan dalam setiap proyeknya. Melalui pemahaman mendalam tentang pasar properti lokal,
                    perusahaan ini terus berkem dan beradaptasi dengan perubahan pasar, siap menghadapi tantangan masa
                    depan, dan memberikan nilai tambah bagi para pelanggan dan mitranya.
                </p>
            </div>


        </div>

        <div class="col-span-1 h-10 bg-red-400 col-end-6">

        </div>

        <div class="col-span-1 h-10 bg-red-200 col-end-7">

        </div>
    </div>

    <div class="container mx-auto py-[2.5rem] bg-[#EFEEEE] mt-10 rounded-xl">
        <p class="text-center text-4xl text-[#1D1B1B] font-bold mx-auto">Our Dreams & Goals</p>
        <p class="text-center text-red-500 mx-auto pt-3">“Menjadi Perusahaan Media Advertising & Digital Marketing
            Property terbesar di Indonesia”</p>
        <img src="{{ asset('images/medals.png') }}" class="absolute h-[14rem] end-[5rem] -my-20" alt="">
    </div>

    {{-- Our Prinsip --}}
    <div class="mx-auto mt-[4.75rem]">
        <p class="text-center font-bold text-3xl">Prinsip Kami</p>
        <div class="grid grid-cols-3 mt-[2.75rem] justify-items-center">
            <div class=" w-[26rem]">
                <img src="{{ asset('images/about-1.png') }}" class="w-full" alt="">
                <p class="font-light text-2xl mt-2">Pemasaran Kreatif</p>
                <p class="font-light mt-2">Menciptakan gagasan dan ide yang berkualitas untuk menciptakan konten
                    yang menarik dan persuasif.</p>
            </div>

            <div class=" w-[26rem]">
                <img src="{{ asset('images/about-2.png') }}" class="w-full" alt="">
                <p class="font-light text-2xl mt-2">Review Jujur</p>
                <p class="font-light mt-2">Mitra Property Bogor memberikan review paling jujur & aman untuk
                    dibeli.</p>
            </div>

            <div class=" w-[26rem]">
                <img src="{{ asset('images/about-3.png') }}" class="w-full" alt="">
                <p class="font-light text-2xl mt-2">Stop Selling! Start Helping!</p>
                <p class="font-light mt-2">Jualan itu bonus! bantu kamu punya rumah lebih bernilai dari sekedar jualan
                </p>
            </div>
        </div>
    </div>

    {{-- Kenapa harus ? --}}
    <div class="container mx-auto mt-20">
        <p class="font-bold text-4xl">Kenapa Harus Mitra Property Bogor?</p>
        <p class="text-xl mt-2 font-light text-[#9A9A9A]">Terlalu banyak developer yang menawarkan produk yang di klaim
            terbaik menurut versi mereka. </p>
        <p class="text-xl font-light text-[#9A9A9A]">Mitra Property Bogor memberikan review paling jujur & aman untuk
            dibeli.</p>

        <div class="grid grid-cols-3 mt-8">
            <img src="{{ asset('images/about-5.png') }}" alt="" class="-ms-28 ">
            <div class="col-span-2 space-y-8 text-[#B70E0E] mt-5">
                <div class="flex items-center">
                    <p class="p-3 pb-2 bg-[#D9D9D9] rounded-full me-3"><span
                            class="icon-[fe--check] text-4xl"></span></p>
                    <p class="flex items-center text-xl">Menyesuaikan kebutuhan kamu</p>
                </div>

                <div class="flex items-center">
                    <p class="p-3 pb-2 bg-[#D9D9D9] rounded-full me-3"><span
                            class="icon-[fe--check] text-4xl"></span></p>
                    <p class="flex items-center text-xl">Kredit Approval Bank Rate 99%</p>
                </div>

                <div class="flex items-center">
                    <p class="p-3 pb-2 bg-[#D9D9D9] rounded-full me-3"><span
                            class="icon-[fe--check] text-4xl"></span></p>
                    <p class="flex items-center text-xl">100% Harga paling murah</p>
                </div>

                <div class="flex items-center">
                    <p class="p-3 pb-2 bg-[#D9D9D9] rounded-full me-3"><span
                            class="icon-[fe--check] text-4xl"></span></p>
                    <p class="flex items-center text-xl">Area pelayanan luas</p>
                </div>

                <div class="flex items-center">
                    <p class="p-3 pb-2 bg-[#D9D9D9] rounded-full me-3"><span
                            class="icon-[fe--check] text-4xl"></span></p>
                    <p class="flex items-center text-xl">Tersedia layanan darurat</p>
                </div>

            </div>
        </div>
    </div>


    {{-- Footer --}}
    @include('user.partials.footer')




    {{-- Swiper JS  --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Initialize Swiper --}}
    <script>
        var swiper = new Swipercc(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            freeMode: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
