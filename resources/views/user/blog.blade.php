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


    {{-- Berita Terkini --}}
    <div class="container mx-auto mt-28">
        <div class="flex items-center">
            <p class="flex justify-center items-center align-middle bg-[#EE3729] aspect-square h-8 rounded-full  me-3">
                <span class="icon-[hugeicons--news-01] text-[21px] text-white"></span>
            </p>
            <p class="flex items-center text-xl font-semibold text-[#EE3729]">Berita Terkini</p>
        </div>

        <div class="grid grid-cols-2  gap-24 mt-8">
            <a href="{{ route('blogs.show',['blog'=>$headline->id]) }}">
                <div class="">
                    <img src="{{ asset('storage/blog/'.$headline->picture) }}" class=" rounded-lg" alt="">
                    <p class="mt-2 text-[#A2A2A2]">{{ $headline->created_at->format('F j, Y') }}</p>
                    <p class="mt-2 font-semibold text-2xl me-[8rem]">{{$headline->title}}</p>
                    <p class="mt-2  me-[8rem]">{{$headline->content}}</p>
                </div>

            </a>
            

            

            <div class="divide-y space-y-8">
                @foreach ($news as $newsitem)
                <a href="{{ route('blogs.show',['blog'=>$newsitem->id]) }}">
                <div class="grid grid-cols-5 gap-6">
                    <img src="{{ asset('storage/blog/'.$newsitem->picture) }}" class="rounded-lg col-span-2" alt="">
                    <div class="col-span-3">
                        <p class="mt-2 text-[#A2A2A2]">{{ $newsitem->created_at->format('F j, Y') }}</p>
                        <p class="mt-2 font-semibold text-xl me-[7rem]">{{ $newsitem->title }}</p>
                    </div>
                </div>
                </a>
                @endforeach
             
            </div>


        </div>
    </div>


    {{-- Panduan Property --}}
    <div class="container mx-auto mt-28">
        <div class="flex items-center">
            <p class="flex justify-center items-center align-middle bg-[#EE3729] aspect-square h-8 rounded-full  me-3">
                <span class="icon-[material-symbols--developer-guide] text-[21px] text-white"></span>
            </p>
            <p class="flex items-center text-xl font-semibold text-[#EE3729]">Panduan Properti</p>
        </div>

        <div class="grid grid-cols-4 gap-12 mt-8">
            @foreach ($panduan as $panduanitem)
                <a href="{{ route('blogs.show',['blog'=>$panduanitem->id]) }}">
                    <div class="">
                        <img src="{{ asset('storage/blog/'.$panduanitem->picture) }}" class=" rounded-lg" alt="">
                        <p class="mt-2 text-[#A2A2A2]">{{ $panduanitem->created_at->format('F j, Y') }}</p>
                        <p class="mt-2 font-semibold text-2xl ">{{ $panduanitem->title }}</p>
                        <p class="mt-2  ">{{ $panduanitem->content }}</p>
                    </div>
                </a>
            @endforeach


        </div>
    </div>


    {{-- Langkah jitu bg merah --}}
    <div class="container mx-auto bg-[#EE3729] h-96 mt-28 rounded-lg">
        <div class=" h-96 absolute -ms-40 -mt-24">
            <img src="{{ asset('images/blog_mascot.png') }}" alt="" class="">
        </div>

        <div class="ms-[39rem] pt-[5rem]">
            <p class="font-bold text-[2.25rem] w-[28rem] text-white">Langkah-Langkah Jitu: Ikuti dengan Teliti, Hindari
                Kesalahan!</p>
            <div class="flex space-x-5 mt-4">
                <p class="bg-white text-[#EE3729] font-semibold px-[2rem] py-[0.6rem] rounded-lg w-52 text-center">
                    Panduan beli property</p>
                <p class="bg-white text-[#EE3729] font-semibold px-[2rem] py-[0.6rem] rounded-lg w-52 text-center">
                    Panduan jual property</p>
                <p class="bg-white text-[#EE3729] font-semibold px-[2rem] py-[0.6rem] rounded-lg w-52 text-center">
                    Panduan sewa property</p>
            </div>
        </div>

    </div>


    {{-- Tips & Tricks --}}
    <div class="container mx-auto mt-28">
        <div class="flex items-center">
            <p class="flex justify-center items-center align-middle bg-[#EE3729] aspect-square h-8 rounded-full  me-3">
                <span class="icon-[material-symbols--developer-guide] text-[21px] text-white"></span>
            </p>
            <p class="flex items-center text-xl font-semibold text-[#EE3729]">Tips & Trick</p>
        </div>

        <div class="grid grid-cols-3 gap-12 mt-8">
            @foreach ($tips as $tipsitem)
                <div class="">
                    <a href="{{ route('blogs.show',['blog'=>$tipsitem->id]) }}">
                    <img src="{{ asset('storage/blog/'.$tipsitem->picture) }}" class=" rounded-lg" alt="">
                    <p class="mt-2 text-[#A2A2A2]">{{ $tipsitem->created_at->format('F j, Y') }}</p>
                    <p class="mt-2 font-semibold text-2xl ">{{ $tipsitem->title }}</p>
                    <p class="mt-2  ">{{ $tipsitem->content }}</p>
                </a>
                </div>
            @endforeach
        </div>
    </div>


    {{-- Lifestyle --}}
    <div class="container mx-auto mt-28 bg-black p-[3rem] rounded-xl">
        <p class="flex items-center text-xl font-semibold text-[#EE3729]">Lifestyle</p>
        <div class="flex mt-10 divide-x divide-gray-500 gap-12">
            @foreach ($lifestyle as $lifestyleitem)
            <div class="">
                <a href="{{ route('blogs.show',['blog'=>$lifestyleitem->id]) }}">
                <img src="{{ asset('storage/blog/'.$lifestyleitem->picture) }}" class=" rounded-lg" alt="">
                <p class="mt-2 text-[#A2A2A2]">{{ $lifestyleitem->created_at->format('F j, Y') }}</p>
                <p class="mt-2 font-semibold text-2xl text-white">{{$lifestyleitem->title}}</p>
                <p class="mt-2  text-[#A2A2A2]">{{$lifestyleitem->content}}</p>
                </a>
            </div>
                
            @endforeach
           

        </div>

    </div>

    {{-- Design --}}
    <div class="container mx-auto mt-28">
        <div class="flex items-center">
            <p class="flex justify-center items-center align-middle bg-[#EE3729] aspect-square h-8 rounded-full  me-3">
                <span class="icon-[mdi--pen] text-[21px] text-white"></span>
            </p>
            <p class="flex items-center text-xl font-semibold text-[#EE3729]">Design</p>
        </div>

        <div class="grid grid-cols-2 gap-24 mt-8">
            <div class="divide-y space-y-8">
                @foreach ($leftdesign as $item)
                <a href="{{ route('blogs.show',['blog'=>$item->id]) }}">
                <div class="grid grid-cols-5 gap-6 pt-8">
                    <img src="{{ asset('storage/blog/'.$item->picture) }}" class="rounded-lg col-span-2"
                        alt="">
                    <div class="col-span-3">
                        <p class="mt-2 text-[#A2A2A2]">{{ $item->created_at->format('F j, Y') }}</p>
                        <p class="mt-2 font-semibold text-xl me-[7rem]">{{$item->title}}</p>
                    </div>
                </div>
                </a>
                    
                @endforeach
             
            </div>

            <div class="divide-y space-y-8">
                @foreach ($rightdesign as $item)
                <a href="{{ route('blogs.show',['blog'=>$item->id]) }}">
                <div class="grid grid-cols-5 gap-6 pt-8">
                    <img src="{{ asset('storage/blog/'.$item->picture) }}" class="rounded-lg col-span-2"
                        alt="">
                    <div class="col-span-3">
                        <p class="mt-2 text-[#A2A2A2]">{{ $item->created_at->format('F j, Y') }}</p>
                        <p class="mt-2 font-semibold text-xl me-[7rem]">{{$item->title}}</p>
                    </div>
                </div>
                </a>
                    
                @endforeach
            </div>

        </div>
    </div>

    <div class="h-[5rem]"></div>

    {{-- Footer --}}
    @include('user.partials.footer')




</body>

</html>
