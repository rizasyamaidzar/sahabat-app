@extends('players.index')
@include('players.components.splash')
<div class="section max-w-md mx-auto">
    {{-- header  --}}
    <div class="relative bg-gradient-to-b from-fe-secondary via-blue-700 to-blue-950">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center opacity-30"
            style="background-image: url('{{ asset('img-fe/badges_blur.png') }}');"></div>

        <!-- Header -->
        <div class="relative flex justify-between items-center p-4 pt-10 text-white">
            <a href="/leaderboard">
                <i class="fa-solid fa-arrow-left text-xl"></i>
            </a>
            <h1 class="font-semibold text-lg">Elite</h1>
        </div>
        <!-- Profile Section -->
        <div class="relative flex flex-col items-center z-10">
            <!-- Background Blur for Profile -->
            {{-- <div class="absolute inset-0 bg-black bg-opacity-30 backdrop-blur-md rounded-lg w-11/12 h-36 mx-auto"></div> --}}

            <!-- Profile Images -->
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg border-2 border-fe-accent"
                src="{{ asset('img-fe/dasa.jpg') }}" alt="Profile" />

            <!-- Profile Info -->
            <h5 class="text-lg font-bold text-fe-accent text-center">Dasa March Lairlaku</h5>
            <a href="/instagram.com" class="text-white"> <i
                    class="fa-brands fa-instagram text-white mx-1"></i>rizaafifs_</a>

            <div class="grid grid-cols-2 mb-10 text-white font-semibold place-items-center">
                <div class="border-r-2 border-white text-center w-full mx-2">
                    <p>Level 3</p>
                </div>
                <div class="text-center w-full mx-2">
                    <p>1200 P</p>
                </div>
            </div>

        </div>
    </div>
    {{-- end header  --}}

    <section class="mx-4">


        <div class="my-5">
            <div class="mb-5">
                <label class="block mb-2 text-md text-fe-secondary">Asal Sekolah</label>
                <input
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="SMA 2 Ponorogo" readonly />
                <label class="block mb-2 text-md text-fe-secondary">Jenis Kelamin</label>
                <input
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Laki-laki" readonly />
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label class="block mb-2 text-md text-fe-secondary">Tinggi Badan</label>
                        <input
                            class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="180 CM" readonly />
                    </div>
                    <div>
                        <label class="block mb-2 text-md text-fe-secondary">Berat Badan</label>
                        <input
                            class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="56 KG" readonly />
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5">
            <h1 class="font-bold text-xl text-fe-secondary">Badges</h1>
            <div class="grid grid-cols-3 bg-white p-5 rounded-lg shadow-md shadow-gray-600">
                {{-- looping badges yang didapat  --}}
                <div class="mx-2">
                    <img class="w-xl h-xl mb-1  rounded-full shadow-lg" src="{{ asset('img-fe/badges.png') }}"
                        alt="Bonnie image" />
                </div>
                <div class="mx-2">
                    <img class="w-xl h-xl mb-1  rounded-full shadow-lg" src="{{ asset('img-fe/badges.png') }}"
                        alt="Bonnie image" />
                </div>
                <div class="mx-2">
                    <img class="w-xl h-xl mb-1  rounded-full shadow-lg" src="{{ asset('img-fe/badges.png') }}"
                        alt="Bonnie image" />
                </div>
                {{-- end looping  --}}
            </div>
        </div>
        {{-- man of the match  --}}
        <div class="my-5 mb-40">
            <h1 class="font-bold text-xl text-fe-secondary mb-2">Man of the Match</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-white uppercase bg-fe-accent  ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Competition
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Game
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Eff+
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                            <td class="px-6 py-4">
                                1
                            </td>
                            <td class="px-6 py-4">
                                Kejurprov
                            </td>
                            <td class="px-6 py-4">
                                Sahabat vs Tri Darma
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                50
                            </th>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
        {{-- end man of the match  --}}
    </section>
</div>
