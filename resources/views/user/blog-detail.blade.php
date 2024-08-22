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
        <p class="text-center font-semibold text-2xl">{{$blog->title}}</p>
        <p class="text-center text-[#A2A2A2A2] mt-3"> {{ $blog->created_at->format('F j, Y') }}</p>

        <img src="{{ asset('storage/blog/'.$blog->picture) }}" alt="" class="mx-auto rounded-lg mt-5 ">



        <div class="w-3/4 mx-auto mt-8">
            <p class="" style="text-align: justify">
                {{$blog->content}}

            </p>
        </div>

    </div>


    <div class="h-[5rem]"></div>

    {{-- Footer --}}
    @include('user.partials.footer')




</body>

</html>
