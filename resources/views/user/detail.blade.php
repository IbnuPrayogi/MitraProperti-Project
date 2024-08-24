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

<body class="bg-white font-sans">
    @include('user.partials.navbar')
    <div class="bg-[#F7F7F7] pt-24 pb-12" style="height:600;" >
        {{-- Path --}}
        <div class="container flex items-center space-x-2 mx-auto bg-[#F4BDB9] p-4 rounded-lg text-gray-600">
            @foreach ([['name' => 'Home', 'url' => '/'], ['name' => $property->category, 'url' => '/about'], ['name' => $property->regency, 'url' => '/contact'], ['name' => $property->name, 'url' => '/contact']] as $link)
                @if ($loop->last)
                    <span>{{ $link['name'] }}</span>
                @else
                    <a href="" class="text-red-600 hover:underline">{{ $link['name'] }}</a>
                    <span class="icon-[ep--arrow-right-bold] text-bold text-red-600"></span>
                @endif
            @endforeach
        </div>

        {{-- Gallery --}}

        <div class="mx-auto container grid grid-cols-1 gap-4 mt-10" style=" width: 100%;">
            <div style="display: flex; flex-direction: row; gap: 20px; align-items: flex-start; width: 100%;">
                <!-- Main property image covering half of the width -->
                <div style="flex-basis: 50%; max-width: 50%;">
                    <img src="{{ Storage::url('public/pictures/'.$property->picture) }}" 
                         style="width: 100%; height: 320px; object-fit: cover;" 
                         class="rounded-xl" alt="" loading="lazy">
                </div>
                
                <!-- Container for other images covering the other half -->
                <div class="grid grid-cols-2 gap-4" style="flex-basis: 50%; max-width: 50%;">
                    @foreach($images as $image)
                        <div>
                            <img src="{{ Storage::url($image) }}" 
                                 style="width: 100%; height: 150px; object-fit: cover;" 
                                 class="rounded-xl" alt="" loading="lazy">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        
    </div>

    <div class="container mx-auto grid grid-cols-5 mt-8 gap-5">
        {{-- Main Content --}}
        <div class="col-span-3 ">
            {{-- Card --}}
            <div class="shadow-lg rounded-lg p-8 space-y-2">
                <p class="text-red-500 text-xl font-bold">IDR {{ number_format($property->price) }}</p>
                <p class="text-[#A7A7A7]">Tanpa DP, Cicilan {{ $property->instalment/1000000 }} Juta/ Bulan</p>
                <p class="text-lg ">{{ $property->name }} at {{ $property->regency }}</p>
                <div class="inline-flex gap-2 text-[#A7A7A7]">
                    <p>Tipe 8 x 17</p>
                    <div class="border-l h-6 border-gray-300"></div>
                    <p>LT {{ $property->surface_area }}</p>
                    <div class="border-l h-6 border-gray-300"></div>
                    <p>LB {{ $property->building_area}}</p>
                    <div class="border-l h-6 border-gray-300"></div>
                    <p class="flex items-center"><span class="icon-[mdi--bed]"></span>{{ $property->bedroom }}</p>
                    <div class="border-l h-6 border-gray-300"></div>
                    <p class="flex items-center"><span class="icon-[majesticons--bath-shower]"></span>{{ $property->toilet }}</p>
                </div>
                <div class="border-b border-[#DEDEDE] py-3"></div>
                <div class="grid grid-cols-6 items-center">
                    <p class="col-start-1 col-span-4">Mitra Property Bogor
                        Hans</p>

                    <div class="col-end-7  col-span-2 flex justify-end">
                        <button class="rounded-lg bg-red-500 text-white flex items-center py-3 px-4">
                            <span class="icon-[ic--baseline-whatsapp] me-2"></span>Whatsapp Sekarang
                        </button>
                    </div>
                </div>

            </div>

            {{-- Property Information --}}
            <div class="p-8 space-y-2">
                <p class="font-semibold text-xl ">{{ $property->name }} at {{ $property->regency }}</p>
                <div class="inline-flex gap-2 text-lg text-[#A7A7A7]">
                    <p class="flex items-center  me-3"> <span class="icon-[mdi--house-outline] text-xl me-2"></span>
                        {{ $property->category }}</p>

                    <p class="flex items-center  me-3"> <span class="icon-[mdi--location] text-xl me-2"></span>
                        {{ $property->name }}, {{ $property->village }}, {{ $property->district }}, {{ $property->regency }}, {{ $property->province }}, Indonesia</p>
                </div>

                <p id="description-content" class="pt-10 line-clamp-2">
                    {{ $property->description }}
                   
                </p>
                <button id="toggle-button" class="text-red-500 mt-2">Read more</button>

                {{-- Spesifikasi Unit --}}
                <p class="font-semibold text-xl pt-2">Spesifikasi Unit</p>
                <div class="grid grid-cols-2">
                    <div class="grid grid-cols-2">
                        <p class="flex items-center"><span class="icon-[streamline--arrow-move-solid] me-2"></span>Luas
                            Tanah</p>
                        <p>{{ $property->surface_area }} <span>m <sup>2</sup> </span></p>
                    </div>

                    <div class="grid grid-cols-2">
                        <p class="flex items-center"><span class="icon-[ic--baseline-house] me-2"></span>Luas Bangunan
                        </p>
                        <p> {{ $property->building_area }} <span>m <sup>2</sup> </span></p>
                    </div>

                    <div class="grid grid-cols-2">
                        <p class="flex items-center"><span class="icon-[mdi--bed] me-2"></span>Bedroom</p>
                        <p>{{ $property->bedroom }}</p>
                    </div>

                    <div class="grid grid-cols-2">
                        <p class="flex items-center"><span class="icon-[majesticons--bath-shower] me-2"></span>Bathroom
                        </p>
                        <p>{{ $property->toilet }}</p>
                    </div>

                    <div class="grid grid-cols-2">
                        <p class="flex items-center"><span class="icon-[ph--garage-fill] me-2"></span>Carport</p>
                        <p>{{ $property->carport }}</span></p>
                    </div>
                </div>

                {{-- Fasilitas Umum --}}

                <p class="font-semibold text-xl pt-2">Fasilitas Umum</p>
                <div class="grid grid-cols-2">
                    @if ($property->jogging)
                    <p class="flex items-center"><span class="icon-[fluent--run-16-filled] me-2"></span>Jogging Track
                    </p>
                    @endif
                    @if ($property->sports)
                    <p class="flex items-center"><span class="icon-[icon-park-solid--sport] me-2"></span>Sports Club</p>
                    @endif
                    @if ($property->mosque)
                    <p class="flex items-center"><span class="icon-[material-symbols--mosque] me-2"></span>Mosque</p>
                    @endif
                    @if ($property->child)
                    <p class="flex items-center"><span class="icon-[tabler--mood-kid-filled] me-2"></span>Children
                        Playground</p>
                    @endif
                
                    
                    
                </div>


                {{-- Di sekitar Unit --}}

                <p class="font-semibold text-xl pt-2">Di Sekitar Unit</p>
                <div class="">
                    <p class="flex items-center"><span class="icon-[grommet-icons--location-pin] me-2"></span>
                        1 Menit ke Aeon Mall & IKEA
                    </p>
                    <p class="flex items-center"><span class="icon-[grommet-icons--location-pin] me-2"></span>
                        5 Menit ke Akses Pintu Tol
                    </p>


                </div>

            </div>

        </div>

        {{-- Sidebar Content --}}
        <div class="col-span-2 ">
            <div class="h-auto p-8 space-y-3 rounded-lg shadow-lg">
                <p class="text-lg">Mulai dari</p>
                <p class="text-red-500 font-semibold text-2xl">IDR {{ number_format($property->price) }} 
                <p class="text-lg">Tanpa DP, Cicilan {{ number_format($property->instalment/1000000) }} Juta/ Bulan</p>
                <p class="text-[#A7A7A7]">Dapatkan Update Promo & Harga Terbaru</p>
                <input class="w-full rounded-lg bg-[#F9F9F9] border-2 border-slate-300" type="text"
                    placeholder="Nama Lengkap">
                <input class="w-full rounded-lg bg-[#F9F9F9] border-2 border-slate-300" type="text"
                    placeholder="Email">
                <input class="w-full rounded-lg bg-[#F9F9F9] border-2 border-slate-300" type="text"
                    placeholder="No Whatsapp">
                <button class="w-full py-3 px-3 bg-red-500 rounded-lg text-white">Hubungi Kami</button>

            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('user.partials.footer')


    {{-- Swiper JS  --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Initialize Swiper --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const content = document.getElementById('description-content');
            const button = document.getElementById('toggle-button');

            let isExpanded = false;

            button.addEventListener('click', function() {
                if (isExpanded) {
                    content.classList.remove('line-clamp-2');
                    button.textContent = 'Read less';
                } else {
                    content.classList.add('line-clamp-2');
                    button.textContent = 'Read more';
                }
                isExpanded = !isExpanded;
            });
        });
    </script>

</body>

</html>
