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
    <div class="bg-center bg-cover" style="background-image: url('{{ asset('images/backgroundhero.png') }}');">
        <div class="flex items-center justify-center  pt-24 ">
            <div class="text-center">
                <div class="container mx-auto mt-[6.5rem]">
                    <div class="max-w-2xl mx-auto text-center">
                        <h2 class=" mb-6 text-4xl lg:text-5xl font-bold text-gray-100">Hunian Impian di Depan Mata</h2>
                        <p class="max-w-3xl mx-auto mb-10 text-lg text-gray-300">
                            Mulai wujudkan impian Anda dengan hunian yang nyaman untuk menunjang segala aktivitas Anda.
                        </p>
                        {{-- Search Form --}}
                        <div class="mb-96 items-center bg-white flex rounded-xl">
                            <select
                                class="text-sm text-gray-700 bg-transparent border-none focus:outline-none focus:ring-0"
                                st>
                                <option value="">Rumah</option>
                                <option value="apartment">Apartment</option>
                                <option value="ruko">Ruko</option>
                                <option value="gudang">Gudang</option>
                            </select>
                            <div class="border-l border-gray-300 h-12"></div>
                            <input type="search"
                                class=" placeholder-slate-400 border-none w-full focus:outline-none  focus:ring-0 active:outline-none"
                                placeholder="Mau cari rumah dimana?" />
                            <button class="bg-red-600 flex items-center justify-center p-3 rounded-e-xl">
                                <span class="icon-[material-symbols--search] text-2xl text-white"></span>
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- 4 Card bar --}}
    <div class="container mx-auto py-6">
        <p class="font-semibold text-xl mb-5">Tawaran Kemudahan dari Mitra Property Bogor</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-10">
            <div class="flex items-center p-[1.81rem] shadow-md rounded-lg">
                <span class="icon-[fa6-solid--house] text-5xl text-red-600"></span>
                <div class="text-sm ms-[2rem]">
                    <p class="text-gray-900 leading-none text-lg font-semibold mb-2">Cari Rumah?</p>
                    <p class="text-gray-600">Temukan berbagai tipe rumah dengan desain modern, lokasi strategis,
                        lingkungan aman dan nyaman, serta harga yang layak.</p>
                </div>
            </div>

            <div class="flex items-center p-[1.81rem] shadow-md rounded-lg">
                <span class="icon-[f7--creditcard-fill] text-6xl text-red-600"></span>
                <div class="text-sm ms-[2rem]">
                    <p class="text-gray-900 leading-none text-lg font-semibold mb-2">Bantuan Kredit?</p>
                    <p class="text-gray-600">Kesulitan KPR atau pengajuan pinjaman? Anda bisa konsultasi dan memperoleh
                        bantuan pinjaman kredit hunian dari Mitra Property Bogor.</p>
                </div>
            </div>

            <div class="flex items-center p-[1.81rem] shadow-md rounded-lg">
                <span class="icon-[ph--building-apartment-fill] text-5xl text-red-600"></span>
                <div class="text-sm ms-[2rem]">
                    <p class="text-gray-900 leading-none text-lg font-semibold mb-2">Kerjasama Developer</p>
                    <p class="text-gray-600">Temukan berbagai pilihan apartemen langsung dari agen terpercaya, baik sewa
                        harian, bulanan, maupun tahunan.</p>
                </div>
            </div>

            <div class="flex items-center p-[1.81rem] shadow-md rounded-lg">
                <span class="icon-[ri--shake-hands-fill] text-6xl text-red-600"></span>
                <div class="text-sm ms-[2rem]">
                    <p class="text-gray-900 leading-none text-lg font-semibold mb-2">Kerjasama Developer</p>
                    <p class="text-gray-600">Ajukan kerjasama dengan developer terpercaya untuk memperoleh hasil yang
                        lebih menguntungkan dengan skema win-win solution.</p>
                </div>
            </div>
        </div>
    </div>


    {{-- Cities --}}
    <div class="container mx-auto py-6">
        <p class="font-semibold text-xl mb-5">Cari Hunian Favoritmu</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-20 gap-y-10">
            {{-- Items --}}
            @foreach ($topproperties as $topproperty)
                <div class="flex items-center p-[1.81rem] shadow-md rounded-lg bg-[#f2f2f2]">
                    @php
                        $imagePath = !empty($topproperty->picture) ? 'images/' . $topproperty->picture : null;
                        $defaultImagePath = 'images/dummy_property.png';

                        if ($imagePath && file_exists(public_path($imagePath))) {
                            $imageUrl = asset($imagePath);
                        } else {
                            $imageUrl = asset($defaultImagePath);
                        }
                    @endphp

                    
                    <img src="{{ asset($imageUrl) }}" class="w-28 rounded-full aspect-square">
                    <div class="text-sm ms-[2rem]">
                        <p class="text-gray-900 leading-none text-lg font-semibold mb-2">{{ $topproperty->name }}</p>
                        <p class="text-gray-600">Start Cicilan</p>
                        @php
                            $instalment = $topproperty->instalment / 1000000;
                        @endphp
                        <p class="text-lg text-red-600 font-light">{{ $instalment}} Juta</p>
                    </div>
                </div>
                
            @endforeach
      
        </div>
    </div>


    {{-- Mitra Property Bogor of the month --}}
    <div class="container mx-auto py-6">

        <p class="font-semibold text-xl mb-10 flex items-center"> <span
                class="icon-[ic--sharp-diamond] text-3xl mr-2 text-red-600"></span>Mitra Property Bogor of the Month
        </p>

        <div class="swiper mySwiper">
     
                
            
            <div class="swiper-wrapper pb-10">
                <div class="swiper-slide">
                    <div class="flex space-x-10 mx-auto">
                        {{-- Items --}}
                        @foreach ($firstPart as $property)
                        <a href="{{ route('userproperty.show', ['userproperty' => $property->id]) }}" style="text-decoration: none;">
                            <div href class="min-w-[300px] items-center shadow-md rounded-lg inline-block relative">
                                <div
                                    class="absolute bg-red-600 text-white -right-3 rounded-e-full rounded-t-full h-14 px-2 top-1 z-[-1]">
                                </div>
                                <div
                                    class="absolute bg-red-600 text-white right-0 px-4 py-2 rounded-s-md top-5 shadow-md flex items-center">
                                    <span class="icon-[solar--medal-ribbons-star-line-duotone] mr-2 text-lg"></span>New
                                    Launching
                                </div>
                                @php
                                    $imagePath = !empty($property->picture) ? 'images/' . $property->picture : null;
                                    $defaultImagePath = 'images/dummy_property.png';

                                    if ($imagePath && file_exists(public_path($imagePath))) {
                                        $imageUrl = asset($imagePath);
                                    } else {
                                        $imageUrl = asset($defaultImagePath);
                                    }
                                @endphp
                                <img src="{{ asset($imageUrl) }}"
                                    class="rounded-t-lg mb-4 aspect-[18/13]">

                                <div class="p-4 me-16">
   
                                    <p class="text-red-600 text-2xl font-semibold mb-1">IDR {{ number_format($property->price) }}*</p>
                                    <p class="text-gray-900 leading-none text-2xl font-semibold mb-4">{{ $property->name }}
                                        at
                                        {{$property->regency}}</p>
                                        @php
                                            $instalments = $property->instalment / 1000000;
                                        @endphp
                                    <p class="text-gray-600 mb-1 text-lg font-light me-5">Tanda DP, cicilan 
                                    </p>
                                    <p class="text-gray-600 mb-1 text-lg font-light me-5">{{ $instalments }}
                                        Juta/Bulan
                                    </p>
                                    <p class="text-lg text-gray-400 font-light flex items-center">
                                        <span class="icon-[ph--map-pin-light] me-2"></span>{{ $property->regency }}, {{ $property->province }}
                                    </p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex space-x-10 container mx-auto">
                        {{-- Items --}}
                        @foreach ($secondPart as $property)
                            <a href="{{ route('userproperty.show', ['userproperty' => $property->id]) }}" style="text-decoration: none;">
                                <div class="min-w-[300px] items-center shadow-md rounded-lg inline-block relative">
                                    <div
                                        class="absolute bg-red-600 text-white -right-3 rounded-e-full rounded-t-full h-14 px-2 top-1 z-[-1]">
                                    </div>
                                    <div
                                        class="absolute bg-red-600 text-white right-0 px-4 py-2 rounded-s-md top-5 shadow-md flex items-center">
                                        <span class="icon-[solar--medal-ribbons-star-line-duotone] mr-2 text-lg"></span>New
                                        Launching
                                    </div>
                                    @php
                                        $imagePath = !empty($property->picture) ? 'images/' . $property->picture : null;
                                        $defaultImagePath = 'images/dummy_property.png';

                                        if ($imagePath && file_exists(public_path($imagePath))) {
                                            $imageUrl = asset($imagePath);
                                        } else {
                                            $imageUrl = asset($defaultImagePath);
                                        }
                                    @endphp
                                    <img src="{{ asset($imageUrl) }}"
                                        class="rounded-t-lg mb-4 aspect-[18/13]">

                                    <div class="p-4 me-16">
                                        <p class="text-red-600 text-2xl font-semibold mb-1">IDR {{ number_format($property->price) }}*</p>
                                        <p class="text-gray-900 leading-none text-2xl font-semibold mb-4">{{ $property->name }}
                                            at
                                            {{$property->regency}}</p>
                                            @php
                                            $instalments = $property->instalment / 1000000;
                                        @endphp
                                    <p class="text-gray-600 mb-1 text-lg font-light me-5">Tanda DP, cicilan 
                                    </p>
                                    <p class="text-gray-600 mb-1 text-lg font-light me-5">{{ $instalments }}
                                        Juta/Bulan
                                    </p>
                                        <p class="text-lg text-gray-400 font-light flex items-center">
                                            <span class="icon-[ph--map-pin-light] me-2"></span>{{ $property->regency }}, {{ $property->province }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex space-x-10 container mx-auto">
                        {{-- Items --}}
                        @foreach ($thirdPart as $property)
                        <a href="{{ route('userproperty.show', ['userproperty' => $property->id]) }}" style="text-decoration: none;">
                            <div class="min-w-[300px] items-center shadow-md rounded-lg inline-block relative">
                                <div
                                    class="absolute bg-red-600 text-white -right-3 rounded-e-full rounded-t-full h-14 px-2 top-1 z-[-1]">
                                </div>
                                <div
                                    class="absolute bg-red-600 text-white right-0 px-4 py-2 rounded-s-md top-5 shadow-md flex items-center">
                                    <span class="icon-[solar--medal-ribbons-star-line-duotone] mr-2 text-lg"></span>New
                                    Launching
                                </div>
                                @php
                                    $imagePath = !empty($property->picture) ? 'images/' . $property->picture : null;
                                    $defaultImagePath = 'images/dummy_property.png';

                                    if ($imagePath && file_exists(public_path($imagePath))) {
                                        $imageUrl = asset($imagePath);
                                    } else {
                                        $imageUrl = asset($defaultImagePath);
                                    }
                                @endphp
                                <img src="{{ asset($imageUrl) }}"
                                    class="rounded-t-lg mb-4 aspect-[18/13]">

                                    <div class="p-4 me-16">
                                        <p class="text-red-600 text-2xl font-semibold mb-1">IDR {{ number_format($property->price) }}*</p>
                                        <p class="text-gray-900 leading-none text-2xl font-semibold mb-4">{{ $property->name }}
                                            at
                                            {{$property->regency}}</p>
                                            @php
                                            $instalments = $property->instalment / 1000000;
                                        @endphp
                                    <p class="text-gray-600 mb-1 text-lg font-light me-5">Tanda DP, cicilan 
                                    </p>
                                    <p class="text-gray-600 mb-1 text-lg font-light me-5">{{ $instalments }}
                                        Juta/Bulan
                                    </p>
                                        <p class="text-lg text-gray-400 font-light flex items-center">
                                            <span class="icon-[ph--map-pin-light] me-2"></span>{{ $property->regency }}, {{ $property->province }}
                                        </p>
                                    </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

    {{-- Main Content --}}
    <div class="container mx-auto py-6">

        <p class="font-semibold text-xl mb-10 flex items-center"> <span
                class="icon-[mdi--thumb-up] text-3xl mr-2 text-red-600"></span>Rekomendasi Mitra Property Bogor</p>

        {{-- Chip --}}
        <div class="space-x-8 mb-10">
            <button class="py-2 px-4 bg-red-600 text-white rounded-md" onclick="setActive(this, 'all')">
                Untuk Kamu
            </button>
            @foreach ($regencies as $regency)
                <button class="py-2 px-4 text-black rounded-md" onclick="setActive(this, '{{ $regency }}')">
                    {{ $regency }}
                </button>
            @endforeach
        </div>
        
        {{-- Cards Grid --}}
        <div class="grid grid-cols-4 gap-10 container mx-auto" id="property-grid">
            {{-- Items --}}
            @foreach ($bottomproperties as $property)
            <a href="{{ route('userproperty.show', ['userproperty' => $property->id]) }}" style="text-decoration: none;">
                <div class="min-w-[300px] items-center shadow-md rounded-lg inline-block relative property-card"
                     data-regency="{{ $property->regency }}">
                     @php
                                    $imagePath = !empty($property->picture) ? 'images/' . $property->picture : null;
                                    $defaultImagePath = 'images/dummy_property.png';

                                    if ($imagePath && file_exists(public_path($imagePath))) {
                                        $imageUrl = asset($imagePath);
                                    } else {
                                        $imageUrl = asset($defaultImagePath);
                                    }
                                @endphp
        
                    <img src="{{ asset($imageUrl) }}" class="rounded-t-lg mb-4 aspect-[18/13]">
        
                    <div class="p-4 me-16">
                        <p class="text-red-600 text-2xl font-semibold mb-1">IDR {{ number_format($property->price) }}*</p>
                        <p class="text-gray-900 leading-none text-2xl font-semibold mb-4">{{ $property->name }} at
                            {{$property->regency}}</p>
                            @php
                                            $instalment = $property->instalment / 1000000;
                                        @endphp
                        <p class="text-gray-600 mb-1 text-lg font-light me-5">Tanda DP, cicilan {{ $instalment }}
                            Juta/Bulan
                        </p>
                        <p class="text-lg text-gray-400 font-light flex items-center">
                            <span class="icon-[ph--map-pin-light] me-2"></span>{{ $property->regency }}, {{ $property->province }}
                        </p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        
        
        
    </div>

    {{-- Footer --}}
    @include('user.partials.footer')




    {{-- Swiper JS  --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Initialize Swiper --}}
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            freeMode: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    
    <script>
        function setActive(button, regency) {
            // Remove active class from all buttons
            document.querySelectorAll('button').forEach(btn => {
                btn.classList.remove('bg-red-600', 'text-white');
                btn.classList.add('text-black');
            });

            // Add active class to the clicked button
            button.classList.add('bg-red-600', 'text-white');

            // Show/Hide property cards based on the selected regency
            document.querySelectorAll('.property-card').forEach(card => {
                if (regency === 'all' || card.dataset.regency === regency) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>
