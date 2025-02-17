@extends('players.index')
@include('players.components.splash')
@section('style')
    <style>
        #slider {
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        #slider>div {
            scroll-snap-align: center;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
            /* Untuk Chrome, Safari */
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            /* Untuk IE & Edge */
            scrollbar-width: none;
            /* Untuk Firefox */
        }
    </style>
@endsection

<div class="section max-w-md mx-auto bg-fe-primary">
    {{-- slider   --}}
    <div class="w-full max-w-4xl mx-auto relative">
        <div id="slider" class="flex overflow-x-scroll space-x-4 shadow-lg no-scrollbar">
            <div class="flex-shrink-0 w-full scroll-ml-6">
                <img src="{{ asset('img-fe/slider2.png') }}" alt="Slider Image 1" class="w-full object-cover">
            </div>
            <div class="flex-shrink-0 w-full scroll-ml-6">
                <img src="{{ asset('img-fe/slider1.png') }}" alt="Slider Image 2" class="w-full object-cover">
            </div>
            <div class="flex-shrink-0 w-full scroll-ml-6">
                <img src="{{ asset('img-fe/slider3.png') }}" alt="Slider Image 3" class="w-full object-cover">
            </div>
        </div>
    </div>
    {{-- end slider  --}}
    {{-- Card info --}}
    <div class="bg-fe-secondary mx-4 rounded-lg relative -mt-20 z-10 shadow-lg">
        <div class="grid grid-cols-2 gap-4 p-5">
            <div class="">
                <div class="grid grid-cols-4">
                    <div class="my-auto">
                        <img src="{{ asset('img-fe/maskot.png') }}"
                            class="w-10 h-auto mx-auto rounded-full bg-fe-accent" alt="">
                    </div>
                    <div class="col-span-3 text-sm">
                        <h1 class="font-semibold text-white">Hi, Welcome Back🙌</h1>
                        <h1 class="font-semibold text-white">Riza Afif Syamaidzar</h1>
                    </div>
                </div>
            </div>
            <div class="my-auto">
                <h1 class="text-end font-bold text-2xl text-white my-auto">ELITE</h1>
            </div>
            <div class="col-span-2">
                <h1 class="border-b-2 border-fe-primary"></h1>
            </div>
            <div class="border-r-2 border-white">
                <h1 class="text-start font-bold text-sm text-white my-auto">Jadwal Latihan</h1>
                <h1 class="text-start font-bold text-xs text-white my-auto">Senin | Selasa | Sabtu</h1>
            </div>
            <div class="my-auto">
                <div class="grid grid-cols-4">
                    <div class="my-auto">
                        <div class="flex">
                            <i class="fa-solid fa-medal text-fe-accent text-2xl my-auto"></i>
                            <div class="text-sm text-white font-medium mx-2">
                                <p>108</p>
                                <p>point</p>
                            </div>
                            <i class="fa-solid fa-ranking-star text-fe-accent text-2xl my-auto"></i>
                            <div class="text-sm text-white font-medium mx-2">
                                <p>108</p>
                                <p>point</p>
                            </div>
                            <div class="text-sm text-white font-medium">
                                <p>3</p>
                                <p>Level</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end card info --}}

    {{-- Menu --}}
    <div class="grid grid-cols-4 gap-4 my-8 mx-4">
        <a href="/games">
            <div class="flex flex-col items-center">
                <i
                    class="fa-solid fa-basketball text-fe-accent text-4xl bg-white p-5 rounded-full shadow-sm shadow-gray-600 w-14 h-14 flex items-center justify-center">
                </i>
                <h2 class="text-center text-fe-secondary font-bold text-lg">All Game</h2>
            </div>
        </a>
        <a href="/my-games">
            <div class="flex flex-col items-center">
                <i
                    class="fa-solid fa-chart-simple text-fe-accent text-4xl bg-white p-5 rounded-full shadow-sm shadow-gray-600 w-14 h-14 flex items-center justify-center"></i>
                <h2 class="text-center text-fe-secondary font-bold text-lg">My Game</h2>
            </div>
        </a>
        <a href="/info">
            <div class="flex flex-col items-center">
                <i
                    class="fa-solid fa-info text-fe-accent text-4xl bg-white p-5 rounded-full shadow-sm shadow-gray-600 w-14 h-14 flex items-center justify-center"></i>
                <h2 class="text-center text-fe-secondary font-bold text-lg">Info</h2>
            </div>
        </a>
        <a href="/leaderboard">
            <div class="flex flex-col items-center">
                <i
                    class="fa-solid fa-ranking-star text-fe-accent text-4xl bg-white p-5 rounded-full shadow-sm shadow-gray-600 w-14 h-14 flex items-center justify-center"></i>
                <h2 class="text-center text-fe-secondary font-bold text-lg">Leaderboard</h2>
            </div>
        </a>

    </div>
    {{-- end menu  --}}

</div>
@section('script')
@endsection
