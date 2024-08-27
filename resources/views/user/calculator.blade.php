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
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type='number'] {
            -moz-appearance: textfield;
        }
    </style>

</head>

<body class="bg-white">
    @include('user.partials.navbar')
    <div class="relative">
        <img src="{{ asset('images/background_calculator.png') }}" class="w-full  z-0">
        <div class="container absolute inset-x-[17rem]  top-[13rem] z-10  w-[40rem] ">
            <p class="text-4xl font-bold text-right">Rencanakan Rumah Impian dari Sekarang</p>
            <p class="text-lg mt-4 text-right">Makin mudah punya rumah dengan pengajuan KPR di Mitra Property Bogor.
                Coba simulasi perhitungan kredit dan rencanakan sendiri angsuran yang kamu inginkan.</p>
        </div>

        {{-- Path --}}
        <div class="container flex items-center space-x-2 mt-12 mx-auto bg-[#F4BDB9] p-4 rounded-lg text-gray-600">
            @foreach ([['name' => 'Home', 'url' => '/'], ['name' => 'Kredit KPR', 'url' => '/calculator']] as $link)
                @if ($loop->last)
                    <span>{{ $link['name'] }}</span>
                @else
                    <a href="" class="text-red-600 hover:underline">{{ $link['name'] }}</a>
                    <span class="icon-[ep--arrow-right-bold] text-bold text-red-600"></span>
                @endif
            @endforeach
        </div>

    </div>

    {{-- Calculator --}}
    <div class="container mx-auto">
        <p class="text-4xl font-bold pt-8">Perhitungan Kredit Mitra Property Bogor</p>
        <p class="text-2xl mt-4 text-[#434343]">Masukan Simulasi</p>

        <form action="" class="mb-8">
            <div class="flex flex-col text-[#6C6C6C]">
                <label for="property-details" class="mt-8 mb-2  font-medium text-gray-700">Harga Rumah</label>
                <div class="flex space-x-8">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 font-bold">
                            Rp
                        </div>
                        <input type="number" step="10000"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500" />
                    </div>


                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 font-bold">
                            Rp
                        </div>
                        <input type="number" step="10000"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div class="relative flex-2">
                        <input type="number"
                            class="block w-full p-4  text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500" />
                        <div class="absolute inset-y-0 end-0 flex items-center pe-3 font-bold">
                            %
                        </div>
                    </div>

                </div>


                <label for="property-details" class="mt-8 mb-2  font-medium text-gray-700">Jangka Waktu</label>
                <div class="flex space-x-8">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 end-0 flex items-center pe-3 font-bold">
                            Tahun
                        </div>
                        <input type="number" step="10000"
                            class="block w-full p-4  text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div class="relative flex-1">
                        <input type="number"
                            class="block w-full p-4  text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500" />
                        <div class="absolute inset-y-0 end-0 flex items-center pe-3 font-bold">
                            %
                        </div>
                    </div>
                </div>

                <button
                    class="mt-8 px-3 py-4 bg-red-600 text-white font-semibold rounded-lg flex items-center justify-center">
                    <span class="icon-[solar--calculator-line-duotone] mr-2"></span>Hitung
                </button>
            </div>
        </form>
    </div>

    @include('user.partials.footer')



</body>

</html>
