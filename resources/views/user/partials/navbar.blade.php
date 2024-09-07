<style>
    .mega-menu {
        display: none;
        left: 0;
        position: absolute;
        text-align: left;
        width: 100%;
    }

    .normal-menu {
        display: none;
        position: absolute;
        text-align: left;
    }

    .hoverable {
        position: static;
    }



    .hoverable:hover .mega-menu {
        display: block;
    }

    .hoverable:hover .normal-menu {
        display: inline-block;
    }


    .toggleable>label:after {
        content: "\25BC";
        font-size: 10px;
        padding-left: 6px;
        position: relative;
        top: -1px;
    }

    .toggle-input {
        display: none;
    }

    .toggle-input:not(checked)~.mega-menu {
        display: none;
    }

    .toggle-input:checked~.mega-menu {
        display: block;
    }

    .toggle-input:checked~label:after {
        content: "\25B2";
        font-size: 10px;
        padding-left: 6px;
        position: relative;
        top: -1px;
    }
</style>
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <nav class="fixed top-0 left-0 w-full bg-white border-b-2 border-gray-300 text-gray-900 z-50">
        <div class="container mx-auto flex justify-between">
            <a href="{{ route('userdashboard.index') }}">
                <img class="h-16 my-auto" src="{{ asset('images/logo.png') }}" alt="Logo" srcset="">
            </a>
            <ul class="flex">
                {{-- Tipe Properti --}}
                <li class="hoverable">
                    <a href="#" class="relative flex py-6 px-4 lg:p-6 text-sm lg:text-base font-light ">Tipe
                        Properti <span class="icon-[ep--arrow-down] ms-1 my-auto"></span></a>
                    <div class="p-6 mega-menu mb-16 bg-white sm:mb-0 shadow-md">
                        <div class="container mx-auto w-full flex flex-wrap justify-start ">
                            {{-- Right Text --}}
                            <div class="sm:w-max lg:w-1/6 me-8 lg:me-14 mb-8">
                                <h2 class="font-bold text-xl">Tipe Properti</h2>
                                <p class="font-light text-md">Cari properti baru dan Secondary di Mitra Property Bogor.
                                </p>
                            </div>

                            <div class="mb-8 inline-block">
                                <h2 class="font-light text-red-600 text-lg mb-2">Tipe</h2>
                                <div class="sm:grid sm:grid-cols-2 sm:gap-3 lg:flex lg:space-x-5">
                                    {{-- Type Card --}}
                                    <a href="{{ route('userproperty.fetchrumah') }}">
                                        <div class="inline-block p-3 ring-2 ring-slate-300 rounded-md">
                                            <p class="px-4 py-1 rounded-full bg-slate-300 mb-2">Properti Baru</p>
                                            <div class="flex space-x-3">
                                                <span
                                                    class="icon-[teenyicons--house-solid] text-xl ms-1 text-red-600"></span>
                                                <p class="inline font-semibold">Rumah</p>
                                            </div>
                                        </div>
                                    </a>

                                    {{-- Apartment --}}
                                    <a href="{{ route('userproperty.fetchapartment') }}">
                                        <div class="inline-block p-3 ring-2 ring-slate-300 rounded-md">
                                            <p class="px-4 py-1 rounded-full bg-slate-300 mb-2">Properti Baru</p>
                                            <div class="flex space-x-3">
                                                <span
                                                    class="icon-[ph--building-apartment-fill] text-2xl ms-1 text-red-600"></span>
                                                <p class="inline font-semibold">Apartment</p>
                                            </div>
                                        </div>
                                    </a>

                                    {{-- Ruko --}}
                                    <a href="{{ route('userproperty.fetchruko') }}">
                                        <div class="inline-block p-3 ring-2 ring-slate-300 rounded-md">
                                            <p class="px-4 py-1 rounded-full bg-slate-300 mb-2">Properti Baru</p>
                                            <div class="flex space-x-3">
                                                <span class="icon-[fa6-solid--shop] text-xl ms-1 text-red-600"></span>
                                                <p class="inline font-semibold">Ruko</p>
                                            </div>
                                        </div>
                                    </a>

                                    {{-- Kavling --}}
                                    <a href="{{ route('userproperty.fetchkavling') }}">
                                        <div class="inline-block p-3 ring-2 ring-slate-300 rounded-md">
                                            <p class="px-4 py-1 rounded-full bg-slate-300 mb-2">Properti Baru</p>
                                            <div class="flex space-x-3">
                                                <span class="icon-[lucide--land-plot] text-xl ms-1 text-red-600"></span>
                                                <p class="inline font-semibold">Kavling</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="{{ route('userproperty.fetchgudang') }}">
                                        <div class="inline-block p-3 ring-2 ring-slate-300 rounded-md">
                                            <p class="px-4 py-1 rounded-full bg-slate-300 mb-2">Properti Baru</p>
                                            <div class="flex space-x-3">
                                                <span
                                                    class="icon-[streamline--warehouse-1-solid] text-xl ms-1 text-red-600"></span>
                                                <p class="inline font-semibold">Gudang</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="{{ route('userproperty.fetchoffice') }}">
                                        <div class="inline-block p-3 ring-2 ring-slate-300 rounded-md">
                                            <p class="px-4 py-1 rounded-full bg-slate-300 mb-2">Properti Baru</p>
                                            <div class="flex space-x-3">
                                                <span class="icon-[vaadin--office] text-xl ms-1 text-red-600"></span>
                                                <p class="inline font-semibold">Office</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </li>

                {{-- Layanan --}}
                <li class="hoverable">
                    <a href="#" class="relative flex py-6 px-4 lg:p-6 text-sm lg:text-base font-light ">Layanan
                        <span class="icon-[ep--arrow-down] ms-1 my-auto"></span></a>
                    <div class="normal-menu mb-16 bg-white shadow-md p-3 mx-auto rounded-md">
                        {{-- Upper Text --}}

                        <ul class="space-y-2">
                            <a href="/kerjasama"><li>
                                Kerjasama Bisnis
                            </li></a>
                           <a href="/kerjasama"><li>Kalkulator KPR</li></a>
                        </ul>

                    </div>
                </li>

                <li class="hoverable">
                    <a href="/about" class="relative flex py-6 px-4 lg:p-6 text-sm lg:text-base font-light ">About Us</a>
                </li>

                <li class="hoverable">
                    <a href="/blogs" class="relative flex py-6 px-4 lg:p-6 text-sm lg:text-base font-light ">Blog</a>
                </li>





            </ul>

            <a href="/contact" class="flex">
                <ul class="flex">
                    <li class="bg-red-500 cursor-pointer my-auto rounded-lg px-4 py-2 font-semibold text-white">
                        Contact Us
                    </li>
                </ul>
            </a>
        </div>
    </nav>
