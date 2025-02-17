@extends('players.index')
@include('players.components.splash')
<div class="section max-w-md mx-auto">
    {{-- header  --}}
    <div class="relative mx-auto">
        <img class="h-32 w-full object-cover " src="{{ asset('img-fe/bg-games.png') }}" alt="Random image">
        <div class="absolute inset-0 bg-fe-secondary opacity-80 rounded-md"></div>
        <div class="absolute inset-0 flex items-end justify-start">
            <h2 class="text-white text-xl font-bold mx-4 my-2">All Games</h2>
        </div>
    </div>
    {{-- end header  --}}
    <section class="mx-4">
        {{-- search  --}}
        <form class="max-w-sm mx-auto my-2">
            <div class="flex justify-between">
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5">
                    <option selected>Gender</option>
                    <option value="boys">Boys</option>
                    <option value="girls">Girls</option>
                </select>
                <select id="countries"
                    class="bg-gray-50 border mx-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5">
                    <option selected>Competition</option>
                    <option value="boys">Kejurprov</option>
                    <option value="girls">GCBS 2024</option>
                </select>

                <button class="bg-fe-secondary p-2 rounded-md" type="submit">
                    <i class="fa-solid fa-magnifying-glass text-white text-xl"></i>
                </button>
            </div>
        </form>

        {{-- end search  --}}
        {{-- Game  --}}
        <div class="grid grid-cols-12 mx-2 my-5 bg-white rounded-md shadow-sm shadow-gray-300">
            <div class="col-span-12 bg-fe-secondary p-2">
                <h1 class="text-white text-xs font-bold text-center">Januari 22, 2025 | Kejurprov Jatim 2025 | KU-18
                    Putra</h1>
            </div>
            <div class="col-span-3 mx-auto my-auto px-2 py-2 ">
                <p class="text-fe-secondary text-xs text-center">Sahabat Ponorogo</p>
            </div>

            <div class="col-span-2 px-2 py-2 mx-auto my-auto p-2 border-fe-accent border-2 mt-2 mb-5">
                <p class="text-fe-secondary text-sm text-center">64</p>
            </div>
            <div class="col-span-2 px-2 py-2 mx-auto my-auto">
                <a href="/my-games/1">
                    <p class="text-fe-accent text-sm text-center">Detail</p>
                </a>
            </div>
            <div class="col-span-2 px-2 py-2 mx-auto my-auto p-2 border-fe-accent border-2 mt-2">
                <p class="text-fe-secondary text-sm text-center">64</p>
            </div>

            <div class="col-span-3 mx-auto my-auto px-2 py-2">
                <p class="text-fe-secondary text-xs text-center">Sahabat Ponorogo</p>
            </div>
        </div>
        {{-- End Game  --}}
    </section>
</div>
