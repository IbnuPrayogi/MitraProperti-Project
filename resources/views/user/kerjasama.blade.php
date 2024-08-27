<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kerjasama Bisnis</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

</head>

<body class="bg-white">
    @include('user.partials.navbar')
    <div class="relative">
        <img src="{{ asset('images/background_kerjasama.png') }}" class="w-full  z-0">
        <div class=" absolute inset-x-[5rem]  top-[13rem] z-10  w-[47rem] ">
            <p class="text-[3rem] font-bold text-left">One Stop Solution Membantu Penjualan Developer</p>
            <p class="text-lg mt-4 text-left">Percayakan penjualan properti bersama Mitra Property Bogor. Service
                terbaik dari kami akan membantu penjualan properti anda meningkat pesat dari sebelumnya.</p>
            <button class="mt-3 py-3 bg-red-500 rounded-lg px-8 text-white flex items-center font-semibold"><span
                    class="me-2 text-lg item-center icon-[ic--outline-whatsapp]"></span>Hubungi Kami</button>
        </div>
    </div>

    <div class="mt-8 container mx-auto">
        <p class="text-center text-[2.25rem] font-bold">Mitra Property Bogor Dedicated</p>
        <p class="text-center px-[20rem] mt-4 text-[#1D1B1B]">Kami berkomitmen untuk menciptakan sales terbaik di era
            proptech digital dan mendedikasikan tim kami ke developer anda melalui konten yang efektif dan produktif.
            Sehingga menciptakan jumlah data yang lebih banyak dan mempunyai kualitas lebih baik. Dengan meningkatkan
            penjualan yang signifikan, developer rekanan Linktown dapat mengoptimalkan budget promosi.</p>
    </div>

    <div class="flex container mx-auto">
        <div class="w-[613px] h-[347px] relative ms-[5rem]">
            <div
                class="w-[138px] h-[60px] left-[280px] top-[219px] absolute text-center text-[#ee3729] text-xl font-extrabold font-['Plus Jakarta Sans']">
                100%</div>
            <div
                class="w-[291px] h-[98px] left-[322px] top-[249px] absolute text-[#1d1b1b] text-xl font-extrabold font-['Plus Jakarta Sans']">
                Dedikasi Mitra Property Bogor Untuk Anda</div>
            <div class="w-[330px] h-[307px] left-0 top-[20px] absolute bg-[#ee3729]/25 rounded-full blur-[100px]"></div>
            <img class="w-[248px] h-[347px] left-[52px] top-0 absolute"
                src=" {{ asset('images/mascot-kerjasama.png') }}" />
            <div class="w-[75px] h-[0px] left-[274px] top-[149px] absolute border border-[#cfbcbc]"></div>
            <div
                class="w-[71px] h-[0px] left-[349px] top-[148px] absolute origin-top-left rotate-90 border border-[#ee3729]">
            </div>
        </div>

        <div class="w-[415px] h-[209px] relative mt-[57px] mx-[8rem]">
            <div class="w-[415px] h-[206px] left-0 top-0 absolute bg-[#ee3729] rounded-[10px]"></div>
            <div class="w-[415px] h-[206px] left-0 top-[3px] absolute">
                <div class="w-[415px] h-[206px] left-0 top-0 absolute bg-white rounded-[10px] shadow"></div>
                <div
                    class="w-[323px] h-11 left-[24px] top-[21px] absolute text-[#1d1b1b] text-base font-extrabold font-['Plus Jakarta Sans']">
                    Mitra Property Bogor Support</div>
                <div
                    class="w-[323px] h-[132px] left-[16px] top-[56px] absolute text-[#1d1b1b] text-sm font-normal font-['Plus Jakarta Sans']">
                    Mitra Property Bogor Agency/ Master Leads<br />Market Research<br />Content Creator & Social
                    Media<br />SEO & SEM<br />Leads Generator<br />Digital Sales Training<br />Efisiensi Budget Promosi
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto bg-[#FFF4F4] mt-[3rem] rounded-lg p-8">
        <p class="font-semibold text-3xl text-center">Layanan Kerja Sama Mitra Property Bogor</p>
        <p class="text-center text-xl mt-4 px-12 font-light">Mitra Property Bogor menyediakan apa yang Anda butuhkan.
            Proses kerja sama dapat dipastikan mudah karena kami mendampingi Anda dari awal hingga akhir.</p>

        <div class="">
            <div class="grid grid-cols-5 gap-6 mt-8 px-8 items-center">
                <img src="{{ asset('images/agency.png') }}" class="rounded-lg col-span-2" alt="">
                <div class="col-span-3">
                    <p class="mt-2 font-semibold text-2xl me-[7rem]">Mitra Property Bogor Agency</p>
                    <p class="mt-2 font-light text-md me-[7rem] text-[#A2A2A2]">Kami memiliki lebih dari 250 tenaga
                        penjual terbaik
                        yang berhasil menjual lebih dari 5000 properti di berbagai daerah di Indonesia. Kami fokus dalam
                        strategi pemasaran melalui promosi media digital sehingga terjalin kerja sama khusus dengan Meta
                        Facebook, Google Ads, dan TikTok. Kami memiliki komitmen untuk berintegritas terhadap rekan
                        developer dan berorientasi terhadap kepuasan konsumen dengan memberikan pelayanan yang terbaik.
                    </p>
                    <button
                        class="mt-3 py-3 bg-red-500 rounded-lg px-8 text-white flex items-center font-semibold"><span
                            class="me-2 text-lg item-center icon-[ic--outline-whatsapp]"></span>Hubungi Kami</button>
                </div>
            </div>

            <div class="grid grid-cols-5 gap-6 mt-8 px-8 items-center">
                <div class="col-span-3">
                    <p class="mt-2 font-semibold text-2xl me-[7rem]">Mitra Property Bogor Leads Generator</p>
                    <p class="mt-2 font-light text-md me-[7rem] text-[#A2A2A2]">
                        Dalam menghasilkan penjualan yang diinginkan tidak cukup dengan hanya menghasilkan kuantitas dan
                        kualitas data. Berdasarkan pengalaman kami membantu developer, kami menemukan banyak developer
                        yang tidak melihat adanya perubahan gaya follow up di era digital saat ini yang menyebabkan
                        konversi leads terhadap closing tidak maksimal. Dengan cara follow up efektif yang kami temukan,
                        kami berkomitmen membantu developer dalam mencapai target penjualan yang lebih optimal.
                    </p>
                    <button
                        class="mt-3 py-3 bg-red-500 rounded-lg px-8 text-white flex items-center font-semibold"><span
                            class="me-2 text-lg item-center icon-[ic--outline-whatsapp]"></span>Hubungi Kami</button>
                </div>
                <img src="{{ asset('images/leads_generator.png') }}" class="rounded-lg col-span-2" alt="">
            </div>


            <div class="grid grid-cols-5 gap-6 mt-8 px-8 items-center">
                <img src="{{ asset('images/development_consultant.png') }}" class="rounded-lg col-span-2" alt="">
                <div class="col-span-3">
                    <p class="mt-2 font-semibold text-2xl me-[7rem]">Development Consultant</p>
                    <p class="mt-2 font-light text-md me-[7rem] text-[#A2A2A2]">
                        Mitra Property Bogor membuka layanan bagi partner developer membuka pangsa pasar untuk lahan milik developer guna dikembangkan menjadi produk properti yang menarik. Layanan tersebut mencakup konsep pengembangan, desain arsitektural, strategi pemasaran, strategi penetapan harga, hingga eksekusi penjualan oleh tim sales Mitra Property Bogor.
                    </p>
                    <button
                        class="mt-3 py-3 bg-red-500 rounded-lg px-8 text-white flex items-center font-semibold"><span
                            class="me-2 text-lg item-center icon-[ic--outline-whatsapp]"></span>Hubungi Kami</button>
                </div>
            </div>

            <div class="grid grid-cols-5 gap-6 mt-8 px-8 items-center">
                <div class="col-span-3">
                    <p class="mt-2 font-semibold text-2xl me-[7rem]">Content Creator & Social Media</p>
                    <p class="mt-2 font-light text-md me-[7rem] text-[#A2A2A2]">
                        Ruang lingkup dari program ini termasuk tapi tidak terbatas pada; UMKM, F&B, Otomotif,
                        Salon/Barbershop, Kecantikan, Furnitur & Interior, Barang & Jasa, dan lain-lain. Dengan program
                        ini Linktown membantu dalam konsep dan proses konten, penyediaan talent, dan jasa iklan media
                        sosial. Sehingga memudahkan pemilik dalam memperkenalkan/memasarkan produknya secara masif di
                        dunia digital.
                    </p>
                    <button
                        class="mt-3 py-3 bg-red-500 rounded-lg px-8 text-white flex items-center font-semibold"><span
                            class="me-2 text-lg item-center icon-[ic--outline-whatsapp]"></span>Hubungi Kami</button>
                </div>
                <img src="{{ asset('images/content_creator.png') }}" class="rounded-lg col-span-2" alt="">
            </div>


        </div>
    </div>
    @include('user.partials.footer')



</body>

</html>
