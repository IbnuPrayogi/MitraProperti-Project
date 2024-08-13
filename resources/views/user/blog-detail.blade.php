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

    <div class="container mx-auto mt-28 ">
        <p class="text-center font-semibold text-2xl">Penjualan Properti Menggeliat Lagi, Rumah di Bawah Rp 500 Juta
            Paling Dicari</p>
        <p class="text-center text-[#A2A2A2A2] mt-3">Mar 24, 2024</p>

        <img src="{{ asset('images/blog_thumbnail.png') }}" alt="" class="mx-auto rounded-lg mt-5 ">



        <div class="w-3/4 mx-auto mt-8">
            <p class="" style="text-align: justify">
                Jakarta - Pasar properti hunian menunjukkan tren positif di kuartal pertama tahun 2024 dengan permintaan yang masih terus meningkat. Minat masyarakat untuk memperoleh tempat tinggal ternyata tetap tinggi pada masa pilpres hingga sekarang ini. "Sejauh dari kita lihat di kuartal pertama mungkin memang masih positif trennya permintaannya memang
                masih meningkat terutama memang untuk rumah yang terjangkau, yaitu di angkanya mungkin harganya sekitar di
                bawah
                Rp 500 juta," ujar Chief Marketing Pinhome Officer Fibriyani Elastria kepada detikcom, Minggu
                (24/3/2024).

                Sedangkan peningkatan permintaan juga terlihat di Bali yang dipengaruhi oleh sektor pariwisata yang
                semakin
                pulih semenjak pandemi. Lalu, permintaan untuk sewa properti juga menunjukkan tren positif.

                "Secara financing kita juga melihat takeover. Jadi KPR takeover itu ternyata tinggi juga masih minatnya
                tetap meningkat jadi memang cukup menjanjikan secara (di tahun) 2024," katanya.

                Ia pun berharap dengan setelah usainya Pemilu 2024, diharapkan minat pasar semakin tinggi dan
                berkelanjutan.
                Selain hunian terjangkau, rumah dengan harga di atas Rp 500 juta juga menunjukkan peningkatan.

                Selain itu, Fibri menyampaikan permintaan rumah yang meningkat terutama pada wilayah-wilayah sekitar
                Jabodetabek yang didorong oleh pembangunan infrastrukturnya yang juga cukup signifikan seperti di
                Tangerang
                atau di Bogor.

                Beberapa daerah di kuartal pertama 2024 menunjukkan peningkatan yang cukup signifikan sebesar 30%,
                bahkan
                sampai dengan dua kali lipatnya. Fibri menyebutkan permintaan hunian di Bogor masih meningkat 34% dan
                Tangerang 74%.

                "Tapi buat yang misalnya sebetulnya tidak terlalu besar areanya seperti Sidoarjo itu peningkatannya
                lebih
                tinggi lagi sampai dengan dua kali lipat. Jadi di kuarter satu meskipun justru waktu itu benar-benar ada
                pemilu terlihatnya ternyata Peminat masyarakat masih cukup tinggi," katanya.

                Lebih lanjut, Fibri mengatakan kawasan yang menjadi primadona saat ini ada di Kabupaten Bogor yang
                tengah
                didorong oleh pengembangan infrastruktur jalan tol Serpong-Bogor yang lewat Parung. Sedangkan Tangerang,
                lebih banyak permintaan di kawasan Setu dan Cisauk dengan adanya pembangunan tol Serpong-Balaraja.

                Adapun soal pembayaran rumah kebanyakan pembeli di Indonesia masih menggunakan KPR. Misalkan untuk rumah
                di
                bawah Rp 500 juta biasanya membayar cicilan sekitar Rp 5 juta per bulan untuk pendapatan kisaran Rp 15
                juta
                per bulan.

                Sementara untuk sewa atau kontrak rumah biasanya penyewa paling banyak memburu di sekitar Jakarta
                Selatan
                dan Jakarta Pusat, kemudian diikuti dengan Jakarta Utara. Fibri menyebut sewa rumah paling mahal di
                kawasan
                Jakarta Utara sekitar Rp 60 juta per tahun. Lalu, Jakarta Selatan dan Jakarta Barat sebesar Rp 40 juta
                serta
                Jakarta Barat sebesar Rp 20 juta.

                "Kita memproyeksikan kedepannya sepertinya kos-kosan akan juga meningkat karena sekarang banyak juga
                pusat-pusat sudah mulai menerapkan hybrid working yang akan semakin meningkatkan kebutuhan itu untuk
                lebih
                dekat dengan tempat kerja," pungkas Febri.

            </p>
        </div>

    </div>


    <div class="h-[5rem]"></div>

    {{-- Footer --}}
    @include('user.partials.footer')




</body>

</html>
