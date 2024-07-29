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

</head>

<body class="bg-white">
    @include('partials.navbar')
    <div class="relative">
        <img src="{{ asset('images/gudang_banner.png') }}" class="w-full pt-[4rem] z-0">
        <div class="container absolute inset-x-[6rem]  top-[16rem] z-10  w-[40rem] ">
            <p class="text-4xl font-semibold ">Gudang Terbaik Untukmu!</p>
            <p class="text-lg mt-4">Mitra Property Bogor memiliki banyak pilihan gudang yang dapat menjadi pilihan
                terbaik untuk lahan menyimpan barang!.</p>
        </div>


        {{-- Floating search --}}
        <div class="container absolute inset-x-0 p-[1.4rem] bg-white rounded-xl mx-auto -mt-20 z-10">
            <div class="flex">
                <div class="bg-red-500 p-2 rounded-full h-10 items-center"><span
                        class="icon-[fa6-solid--house] text-xl text-white"></span> </div>
                <div class="block ms-4">
                    <p class="font-semibold text-2xl">Cari Gudang yang anda inginkan</p>
                    <p class="text-gray-400">Filter daerah Rumah dan harga Rumah akan memudahkan Anda untuk mendapatkan
                        Rumah spesifik Anda.</p>
                </div>
            </div>
            <div class="grid grid-cols-4 mt-4 space-x-6">
                <select
                    class="text-sm text-gray-700 bg-transparent rounded-lg border-gray-200 focus:outline-none focus:ring-0"
                    st>
                    <option value="">Tipe Properti</option>
                    <option value="apartment">Apartment</option>
                    <option value="ruko">Ruko</option>
                    <option value="gudang">Gudang</option>
                </select>

                <select
                    class="text-sm text-gray-700 bg-transparent rounded-lg border-gray-200 focus:outline-none focus:ring-0"
                    st>
                    <option value="">Semua Area</option>
                    <option value="apartment">Apartment</option>
                    <option value="ruko">Ruko</option>
                    <option value="gudang">Gudang</option>
                </select>

                <select
                    class="text-sm text-gray-700 bg-transparent rounded-lg border-gray-200 focus:outline-none focus:ring-0"
                    st>
                    <option value="">Urutkan Berdasarkan</option>
                    <option value="apartment">Apartment</option>
                    <option value="ruko">Ruko</option>
                    <option value="gudang">Gudang</option>
                </select>

                <button class="px-3 py-2 bg-red-600 text-white font-semibold rounded-lg">
                    Cari rumah

                </button>
            </div>
        </div>
    </div>

    {{-- Path --}}
    <div class="container flex items-center space-x-2 mt-28 mx-auto bg-[#F4BDB9] p-4 rounded-lg text-gray-600">
        @foreach ([['name' => 'Home', 'url' => '/'], ['name' => 'Kavling', 'url' => '/kavling']] as $link)
            @if ($loop->last)
                <span>{{ $link['name'] }}</span>
            @else
                <a href="" class="text-red-600 hover:underline">{{ $link['name'] }}</a>
                <span class="icon-[ep--arrow-right-bold] text-bold text-red-600"></span>
            @endif
        @endforeach
    </div>

    {{-- Title --}}
    <div class="container mx-auto mt-8 grid grid-cols-2 ">
        <div class="">
            <p class="font-semibold text-2xl">Rekomendasi Mitra Property Bogor</p>
            <p class="text-gray-400">Temukan hunian idaman di daerahmu</p>
        </div>
        <div class="flex justify-end items-start my-auto">
            <button class="bg-red-600 text-white font-semibold rounded-lg px-3 py-2">Semua Produk</button>
        </div>
    </div>

    {{-- Cards Grid --}}
    <div class="grid grid-cols-4 gap-10 container mx-auto mt-8">
        {{-- Items --}}
        @for ($i = 0; $i < 16; $i++)
            <div class="min-w-[300px] items-center shadow-md rounded-lg inline-block relative">
                <img src="{{ asset('images/dummy_property.png') }}" class="rounded-t-lg aspect-[18/13]">

                <div class="p-4 me-3">
                    <p class="inline-flex rounded-lg items-center px-2 py-1 bg-red-300"><span
                            class="icon-[bx--home] me-2"></span>Rumah</p>
                    <p class="text-gray-900 leading-none text-2xl font-semibold me-8 mt-4">Spring Residence at Sentul
                        City</p>
                    <p class="text-gray-400 font-light flex items-center mt-3">
                        <span class="icon-[ph--map-pin-light] me-2"></span>Bekasi, Indonesia
                    </p>
                    <p class="text-gray-600 mt-3 font-light ">Premium Cluster, Cicilan 7 Juta/Bulan</p>

                    <p class="text-red-600 text-2xl mt-3 font-semibold mb-1"><span
                            class="text-black font-normal text-lg to-inherit me-3">Mulai</span>IDR 3 miliar*</p>
                </div>
            </div>
        @endfor
    </div>
    @include('partials.footer')



</body>

</html>
