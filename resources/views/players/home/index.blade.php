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
    <div class="w-full max-w-4xl mx-auto">
        <div id="slider" class="flex overflow-x-scroll space-x-4  shadow-lg no-scrollbar">
            <div class="flex-shrink-0 w-full  scroll-ml-6">
                <img src="{{ asset('img-fe/slider2.png') }}" alt="Slider Image 1" class="w-full  object-cover ">
            </div>
            <div class="flex-shrink-0 w-full  scroll-ml-6">
                <img src="{{ asset('img-fe/slider1.png') }}" alt="Slider Image 2" class="w-full  object-cover ">
            </div>
            <div class="flex-shrink-0 w-full  scroll-ml-6">
                <img src="{{ asset('img-fe/slider3.png') }}" alt="Slider Image 3" class="w-full  object-cover ">
            </div>
        </div>

    </div>


    <div data-popover id="popover-default" role="tooltip"
        class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
            <h3 class="font-semibold text-gray-900 dark:text-white">Popover title</h3>
        </div>
        <div class="px-3 py-2">
            <p>And here's some amazing content. It's very engaging. Right?</p>
        </div>
        <div data-popper-arrow></div>
    </div>

</div>
@section('script')
@endsection
