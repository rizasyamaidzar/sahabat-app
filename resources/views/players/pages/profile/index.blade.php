@extends('players.index')
@include('players.components.splash')
<div class="section max-w-md mx-auto">
    {{-- header  --}}
    {{-- success  --}}
    <div id="marketing-banner" tabindex="-1"
        class="fixed z-50 flex flex-col justify-between w-[calc(100%-2rem)] p-10 -translate-x-1/2 bg-white border border-gray-100 rounded-lg shadow-xs left-1/2 top-6">
        <div class="flex flex-col mb-3 me-4 items-center md:mb-0">
            <li class="fa-solid fa-check text-4xl text-fe-secondary font-bold"></li>
            <p class="flex items-center text-lg font-normal text-fe-secondary ">Successfully Updated Data</p>
        </div>
        <div class="text-center w-full">
            <button data-dismiss-target="#marketing-banner" type="button">
                <p class="bg-fe-accent p-1 mx-auto text-white rounded-md">Close</p>
            </button>
        </div>

    </div>
    {{-- end succes alert  --}}
    <form action="/1" class="mb-5">
        <div class="relative bg-gradient-to-b from-fe-secondary via-blue-700 to-blue-950 py-16">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 bg-cover bg-center opacity-30"
                style="background-image: url('{{ asset('img-fe/badges_blur.png') }}');"></div>
            <div class="pt-10 pb-10 mx-auto flex flex-col items-center">
                <img class="w-[150px] h-[150px] mb-5 rounded-full shadow-lg border-2 border-fe-accent"
                    src="{{ asset('img-fe/dasa.jpg') }}" alt="Profile" />
                <label
                    class="cursor-pointer bg-fe-accent text-center text-white px-4 py-2 rounded-md text-sm font-medium transition mx-auto">
                    Ganti Foto
                    <input type="file" class="hidden" accept="image/*" />
                </label>
            </div>

        </div>
        {{-- end header  --}}
        <section class="mx-4">
            <div class="my-5">
                <label class="block mb-2 text-md text-fe-secondary">Nama</label>
                <input
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Dasa March Lairlaku" readonly />
                <label class="block mb-2 text-md text-fe-secondary">Asal Sekolah</label>
                <input
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="SMA 2 Ponorogo" readonly />
                <label class="block mb-2 text-md text-fe-secondary">No Telepon</label>
                <input
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="08123283823" readonly />
                <label class="block mb-2 text-md text-fe-secondary">Instagram</label>
                <input
                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="rizaafifs_" readonly />
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
                <button class="bg-fe-accent p-2 rounded-lg w-full my-2 text-white">Update</button>
            </div>
    </form>

    <button
        class="border-2 border-fe-secondary hover:border-fe-accent hover:bg-fe-secondary hover:text-white p-2 rounded-lg w-full my-2 mb-40 text-fe-accent">
        <i class="fa-solid fa-sign-out mx-2"></i>Log
        Out</button>
    </section>
</div>
