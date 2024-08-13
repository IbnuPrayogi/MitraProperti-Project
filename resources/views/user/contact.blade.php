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

    {{-- Hero Image --}}
    <div class="bg-center bg-cover h-[47rem] pt-[20rem]"
        style="background-image: url('{{ asset('images/backgroundhero.png') }}');">
        <div class="mx-auto text-center">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-100">Kontak kami langsung</h2>
            <p class=" mt-6 max-w-3xl mx-auto mb-10 text-lg text-gray-300">
                Hubungi kami untuk informasi detail, kami siap melayani anda kapanpun anda butuhkan
            </p>
        </div>
    </div>

    {{-- Path --}}
    <div class="container flex items-center space-x-2 mt-8 mx-auto bg-[#F4BDB9] p-4 rounded-lg text-gray-600">
        @foreach ([['name' => 'Home', 'url' => '/'], ['name' => 'Contact Us', 'url' => '/contact']] as $link)
            @if ($loop->last)
                <span>{{ $link['name'] }}</span>
            @else
                <a href="" class="text-red-600 hover:underline">{{ $link['name'] }}</a>
                <span class="icon-[ep--arrow-right-bold] text-bold text-red-600"></span>
            @endif
        @endforeach
    </div>

    {{-- Contact --}}
    <div class="container mx-auto mt-[3.8rem] grid grid-cols-6 ">
        <div class="col-span-3 ">
            <p class="font-semibold text-3xl">Kontak kami langsung</p>
            <p class="mt-[1.63rem] text-gray-400 ">Hubungi kami via whatsapp.</p>
            <p class="mt-[1.63rem] font-lg pe-[15rem]">Kami siap membantu kamu dengan senang hati atas pertanyaan atau
                masukan
                Anda. Tanyakan apapun kepada kami untuk masalah rumah idaman yang ingin Anda miliki. Telepon atau email
                kami, Kami akan segera menghubungi Anda kembali secepat mungkin.</p>

            <div class="mt-[2.31rem] ">
                <p><span class="icon-[mi--location] text-3xl text-red-500"></span></p>
                <p class="font-semibold text-lg">MITRA PROPERTY BOGOR CENTER</p>
                <p>Perumahan Parahyangan Regency 3 No 17 Kota Bogor - 16144</p>
            </div>

            <div class="mt-[1.6rem] space-y-2">
                <p class="flex items-center"><span
                        class="icon-[fluent--mail-32-regular] me-2 text-2xl text-red-500"></span>admin@mitrapropertybogor.co.id
                </p>
                <p class="flex items-center"><span
                        class="icon-[bi--telephone] me-2 text-2xl text-red-500"></span>+6281277770890</p>
            </div>
        </div>

        <div class="col-span-3 col-end-7">
            <p class="text-3xl font-semibold">Hubungi Kami</p>
            <p class="mt-3 text-gray-400">Isi formulir di bawah ini. Kamu langsung terhubung ke Email Linktown.</p>
            <form action="" class="space-y-5 mt-5">
                <input class="w-full rounded-lg border-2 border-slate-300 placeholder-[#A2A2A2]" type="text"
                    placeholder="Nama Lengkap">
                <input class="w-full rounded-lg border-2 border-slate-300 placeholder-[#A2A2A2]" type="text"
                    placeholder="Email">
                
                <textarea rows="5" class="w-full rounded-lg border-2 border-slate-300 placeholder-[#A2A2A2]" placeholder="Masukkan pertanyaan anda"></textarea>
                <button class=" py-3 bg-red-500 rounded-lg px-8 text-white">Kirim</button>

            </form>
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
