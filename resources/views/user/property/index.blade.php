<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>


<body class="bg-white">
    @include('user.partials.navbar')
    <div class="relative">
        <img src="{{ asset('images/'. $banner ) }}" class="w-full pt-[4rem] z-0">
        <div class="container absolute inset-x-[36rem] top-[16rem] z-10 w-[40rem] ">
            <p class="text-4xl font-semibold ">Temui {{ $title }} Idamanmu Sekarang!</p>
            <p class="text-lg mt-4">{{$description}}</p>
        </div>

        {{-- Floating search --}}
        <div class="container absolute inset-x-0 p-[1.4rem] bg-white rounded-xl mx-auto -mt-20 z-10">
            <div class="flex">
                <div class="bg-red-500 p-2 rounded-full h-10 items-center"><span
                        class="icon-[fa6-solid--house] text-xl text-white"></span> </div>
                <div class="block ms-4">
                    <p class="font-semibold text-2xl">Cari {{ $title }} yang anda inginkan</p>
                    <p class="text-gray-400">Filter daerah {{ $title }} dan harga {{ $title }} akan memudahkan Anda untuk mendapatkan {{ $title }} spesifik Anda.</p>
                </div>
            </div>
            <div class="grid grid-cols-4 mt-4 space-x-6">
                <select class="text-sm text-gray-700 bg-transparent rounded-lg border-gray-200 focus:outline-none focus:ring-0 form-control"
                        id="propertyTypeSelect">
                    <option value="">Tipe Properti</option>
                    <option value="apartment">Apartment</option>
                    <option value="ruko">Ruko</option>
                    <option value="gudang">Gudang</option>
                    <option value="kavling">Kavling</option>
                    <option value="home">Rumah</option>
                    <option value="office">Office</option>
                </select>
                
                <select class="text-sm text-gray-700 bg-transparent rounded-lg border-gray-200 focus:outline-none focus:ring-0 form-control"
                        id="regencySelect">
                        
                    <option value="">Semua Area</option>
                </select>
        

                <select class="text-sm text-gray-700 bg-transparent rounded-lg border-gray-200 focus:outline-none focus:ring-0"
                    id="sortSelect">
                    <option value="">Urutkan Berdasarkan</option>
                    <option value="price">Harga</option>
                    <option value="instalment">Cicilan</option>
                    <option value="created_at">Tanggal Upload</option>
                </select>

                <button class="px-3 py-2 bg-red-600 text-white font-semibold rounded-lg" id="searchButton">Cari {{ $title }}</button>
            </div>
        </div>
    </div>

    {{-- Path --}}
    <div class="container flex items-center space-x-2 mt-28 mx-auto bg-[#F4BDB9] p-4 rounded-lg text-gray-600">
        @php
            $breadcrumbs = [
                ['name' => 'Home', 'url' => '/'],
                ['name' => $title, 'url' => "/$title"]
            ];
        @endphp
    
        @foreach ($breadcrumbs as $link)
            @if ($loop->last)
                <span>{{ $link['name'] }}</span>
            @else
                <a href="{{ $link['url'] }}" class="text-red-600 hover:underline">{{ $link['name'] }}</a>
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
    <div class="grid grid-cols-4 gap-10 container mx-auto mt-8 property-container">
        @foreach ($property as $prop)
            <a href="{{ route('userproperty.show', ['userproperty' => $prop->id]) }}" style="text-decoration: none;">
                <div class="min-w-[300px] items-center shadow-md rounded-lg inline-block relative property-item"
                    data-property-type="{{ $prop->type }}" data-regency="{{ $prop->regency }}" data-price="{{ $prop->price }}"
                    data-instalment="{{ $prop->instalment }}" data-created_at="{{ $prop->created_at }}">
                    <img src="{{ asset('images/dummy_property.png') }}" class="rounded-t-lg aspect-[18/13]">
                    <div class="p-4 me-3">
                        <p class="inline-flex rounded-lg items-center px-2 py-1 bg-red-300"><span
                                class="icon-[bx--home] me-2"></span>{{ $title }}</p>
                        <p class="text-gray-900 leading-none text-2xl font-semibold me-8 mt-4">{{$prop->name}}</p>
                        <p class="text-gray-400 font-light flex items-center mt-3">
                            <span class="icon-[ph--map-pin-light] me-2"></span>{{ $prop->regency }}, Indonesia
                        </p>
                        <p class="text-gray-600 mt-3 font-light ">{{ $prop->cluster_type }}, Cicilan {{ $prop->instalment }} Juta/Bulan</p>
                        <p class="text-red-600 text-2xl mt-3 font-semibold mb-1"><span
                                class="text-black font-normal text-lg to-inherit me-3">Mulai</span>IDR 3 miliar*</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    

    <script type="text/javascript">
  
  $(document).ready(function () {
    console.log('Document is ready');
    
    $('#propertyTypeSelect').on('change', function () {
        var category = this.value;
        console.log('Property type selected:', category);

        // Clear and update the regency dropdown
        $('#regencySelect').html('<option value="">Semua Area</option>');

        if (category) {
            $.ajax({
                url: '/getRegenciesByCategory/' + category,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log('AJAX success:', data);
                    if (Array.isArray(data)) {
                        $('#regencySelect').html('<option value="">Semua Area</option>'); // Clear existing options
                        $.each(data, function (key, value) {
                            $('#regencySelect').append('<option value="' + value + '">' + value + '</option>');
                        });
                    } else {
                        console.log('Expected an array of regencies.');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX error:', status, error);
                }
            });
        }
    });
});

  
  
      </script>
    
    @include('user.partials.footer')
    
    

    <script>
        // document.getElementById('propertyTypeSelect').addEventListener('change', function() {
        //     const propertyType = this.value;
    
        //     if (propertyType) {
        //         fetch(`/api/getRegencies/${propertyType}`)
        //             .then(response => response.json())
        //             .then(data => {
        //                 const regencySelect = document.getElementById('regencySelect');
        //                 regencySelect.innerHTML = '<option value="">Semua Area</option>'; // Reset options
    
        //                 if (data.length > 0) {
        //                     data.forEach(regency => {
        //                         const option = document.createElement('option');
        //                         option.value = regency;
        //                         option.textContent = regency;
        //                         regencySelect.appendChild(option);
        //                     });
        //                 } else {
        //                     console.log('No regencies returned for this property type');
        //                 }
        //             })
        //             .catch(error => {
        //                 console.error('Error fetching regencies:', error);
        //             });
        //     } else {
        //         // Handle case when no property type is selected
        //         const regencySelect = document.getElementById('regencySelect');
        //         regencySelect.innerHTML = '<option value="">Semua Area</option>';
        //     }
        // });
    
        document.getElementById('searchButton').addEventListener('click', function() {
            const propertyType = document.getElementById('propertyTypeSelect').value;
            const regency = document.getElementById('regencySelect').value;
            const sortBy = document.getElementById('sortSelect').value;

            let query = `/properties/${propertyType}?`;

            if (regency) {
                query += `regency=${regency}&`;
            }
            if (sortBy) {
                query += `sortBy=${sortBy}&`;
            }

            window.location.href = query.slice(0, -1); // Remove trailing '&'
        });

    </script>
 
</body>

</html>
