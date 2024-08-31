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
    <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
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

    {{-- 'penghasilanBulanan' => 'required|numeric',
            'sukuBungaTahunan' => 'required|numeric',
            'jangkaWaktuTahun' => 'required|integer', --}}
    <div class="container mx-auto">
        <p class="text-4xl font-bold pt-8">Perhitungan Kredit Mitra Property Bogor</p>
        <p class="text-2xl mt-4 text-[#434343]">Masukan Simulasi</p>

        <form id="creditForm">
            @csrf
            <div class="flex flex-col text-[#6C6C6C]">
                <!-- Penghasilan -->
                <label for="penghasilanBulanan" class="mt-8 mb-2 font-medium text-gray-700">Penghasilan</label>
                <div class="flex space-x-8">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 font-bold">Rp</div>
                        <input type="number" step="1" name="penghasilanBulanan" id="penghasilanBulanan"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>
        
                <!-- Jangka Waktu Kredit -->
                <label for="jangkaWaktuTahun" class="mt-8 mb-2 font-medium text-gray-700">Jangka Waktu Kredit</label>
                <div class="flex space-x-8">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 end-0 flex items-center pe-3 font-bold">Tahun</div>
                        <input type="number" step="1" name="jangkaWaktuTahun" id="jangkaWaktuTahun"
                            class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>
        
                <!-- Suku Bunga -->
                <label for="sukuBungaTahunan" class="mt-8 mb-2 font-medium text-gray-700">Suku Bunga</label>
                <div class="flex space-x-8">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 end-0 flex items-center pe-3 font-bold">%</div>
                        <input type="number" step="1" name="sukuBungaTahunan" id="sukuBungaTahunan"
                            class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>
        
                <!-- Cicilan Lainnya -->
                <label for="cicilanLainnya" class="mt-8 mb-2 font-medium text-gray-700">Cicilan Lainnya</label>
                <div class="flex space-x-8">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 font-bold">Rp</div>
                        <input type="number" step="1" name="cicilanLainnya" id="cicilanLainnya"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>
        
                <!-- Result Section -->
                <div class="mt-8">
                    <label class="mb-2 font-medium text-gray-700">Limit Kredit Maks</label>
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 font-bold">Rp</div>
                        <input type="text" id="limitKredit" readonly
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                    <label class="mt-8 mb-2 font-medium text-gray-700">Angsuran</label>
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 font-bold">Rp</div>
                        <input type="text" id="angsuran" readonly
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>
        
                <!-- Submit button is optional if only for client-side -->
                <button type="submit" id="calculateButton"
                    class="mt-8 px-3 py-4 bg-red-600 text-white font-semibold rounded-lg flex items-center justify-center">
                    <span class="icon-[solar--calculator-line-duotone] mr-2"></span>Hitung
                </button>
            </div>
        </form>

    </div>

    <script>
        document.getElementById('creditForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission

            // Get values from input fields
            var penghasilanBulanan = parseFloat(document.getElementById('penghasilanBulanan').value) || 0;
            var jangkaWaktuTahun = parseFloat(document.getElementById('jangkaWaktuTahun').value) || 0;
            var sukuBungaTahunan = parseFloat(document.getElementById('sukuBungaTahunan').value) || 0;
            var cicilanLainnya = parseFloat(document.getElementById('cicilanLainnya').value) || 0;

            // Convert annual interest rate to monthly and percentage to decimal
            var sukuBungaBulanan = (sukuBungaTahunan / 100) / 12;
            var jangkaWaktuBulan = jangkaWaktuTahun * 12;

            // Calculate kemampuanCicilan
            var kemampuanCicilan = (penghasilanBulanan * 0.55) - cicilanLainnya;

            // Calculate limitKredit using the provided formula
            var limitKredit = kemampuanCicilan * ((Math.pow(1 + sukuBungaBulanan, jangkaWaktuBulan) - 1) / (sukuBungaBulanan * Math.pow(1 + sukuBungaBulanan, jangkaWaktuBulan)));

            // Format the numbers to include commas as thousand separators
            var formattedLimitKredit = new Intl.NumberFormat('id-ID').format(limitKredit);
            var formattedKemampuanCicilan = new Intl.NumberFormat('id-ID').format(kemampuanCicilan);

            // Update the results
            document.getElementById('limitKredit').value = formattedLimitKredit;
            document.getElementById('angsuran').value = formattedKemampuanCicilan;
        });

    </script>


    @include('user.partials.footer')





</body>

</html>
