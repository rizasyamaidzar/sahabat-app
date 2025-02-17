@extends('players.index')
@include('players.components.splash')
<div class="section max-w-md mx-auto">

    <section class="mx-4">
        {{-- hero section  --}}
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
            </div>
            <div class="col-span-2 px-2 py-2 mx-auto my-auto p-2 border-fe-accent border-2 mt-2">
                <p class="text-fe-secondary text-sm text-center">64</p>
            </div>

            <div class="col-span-3 mx-auto my-auto px-2 py-2">
                <p class="text-fe-secondary text-xs text-center">Sahabat Ponorogo</p>
            </div>
            {{-- Man of the match --}}
            <div class="col-span-12 mx-auto my-auto">
                <div class="relative flex flex-col items-center z-10">
                    <h5 class="text-lg font-bold text-fe-accent text-center">Man Of The Match</h5>
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg border-2 border-fe-accent"
                        src="{{ asset('img-fe/dasa.jpg') }}" alt="Profile" />

                    <!-- Profile Info -->
                    <h5 class="text-lg font-bold text-fe-secondary text-center">Dasa March Lairlaku</h5>
                    <h5 class="text-lg font-bold text-fe-secondary text-center mb-5">Total +Eff 50</h5>
                </div>
            </div>
            {{-- Top Point  --}}
            <div class="col-span-12 my-2">
                <a href="">
                    <div class="grid grid-cols-12 p-4 bg-white shadow-sm shadow-gray-600 ">
                        <div class="col-span-2">
                            <img src="{{ asset('img-fe/dasa.jpg') }}"
                                class="w-10 h-10 mx-auto rounded-full bg-fe-accent" alt="">
                        </div>
                        <div class="col-span-5 my-auto">
                            <p class="text-sm text-start text-fe-secondary font-semibold">Dasa March Lairlaku</p>
                        </div>
                        <div class="col-span-3 my-auto">
                            <p class="text-sm text-center text-fe-accent font-semibold">Top Point</p>
                        </div>
                        <div class="col-span-2 my-auto">
                            <p class="text-sm text-end text-fe-secondary font-semibold">20</p>
                        </div>

                    </div>
                </a>
            </div>
            {{-- Top Assist  --}}
            <div class="col-span-12">
                <a href="">
                    <div class="grid grid-cols-12 p-4 bg-white shadow-sm shadow-gray-600 ">
                        <div class="col-span-2">
                            <img src="{{ asset('img-fe/dasa.jpg') }}"
                                class="w-10 h-10 mx-auto rounded-full bg-fe-accent" alt="">
                        </div>
                        <div class="col-span-5 my-auto">
                            <p class="text-sm text-start text-fe-secondary font-semibold">Dasa March Lairlaku</p>
                        </div>
                        <div class="col-span-3 my-auto">
                            <p class="text-sm text-center text-fe-accent font-semibold">Top Assist</p>
                        </div>
                        <div class="col-span-2 my-auto">
                            <p class="text-sm text-end text-fe-secondary font-semibold">5</p>
                        </div>

                    </div>
                </a>
            </div>
            {{-- Top Steals  --}}
            <div class="col-span-12 my-2">
                <a href="">
                    <div class="grid grid-cols-12 p-4 bg-white shadow-sm shadow-gray-600 ">
                        <div class="col-span-2">
                            <img src="{{ asset('img-fe/dasa.jpg') }}"
                                class="w-10 h-10 mx-auto rounded-full bg-fe-accent" alt="">
                        </div>
                        <div class="col-span-5 my-auto">
                            <p class="text-sm text-start text-fe-secondary font-semibold">Dasa March Lairlaku</p>
                        </div>
                        <div class="col-span-3 my-auto">
                            <p class="text-sm text-center text-fe-accent font-semibold">Top Steals</p>
                        </div>
                        <div class="col-span-2 my-auto">
                            <p class="text-sm text-end text-fe-secondary font-semibold">5</p>
                        </div>

                    </div>
                </a>
            </div>
            {{-- Top Block  --}}
            <div class="col-span-12">
                <a href="">
                    <div class="grid grid-cols-12 p-4 bg-white shadow-sm shadow-gray-600 ">
                        <div class="col-span-2">
                            <img src="{{ asset('img-fe/dasa.jpg') }}"
                                class="w-10 h-10 mx-auto rounded-full bg-fe-accent" alt="">
                        </div>
                        <div class="col-span-5 my-auto">
                            <p class="text-sm text-start text-fe-secondary font-semibold">Dasa March Lairlaku</p>
                        </div>
                        <div class="col-span-3 my-auto">
                            <p class="text-sm text-center text-fe-accent font-semibold">Top Block</p>
                        </div>
                        <div class="col-span-2 my-auto">
                            <p class="text-sm text-end text-fe-secondary font-semibold">106</p>
                        </div>

                    </div>
                </a>
            </div>
            {{-- Top Rebound  --}}
            <div class="col-span-12 my-2">
                <a href="">
                    <div class="grid grid-cols-12 p-4 bg-white shadow-sm shadow-gray-600 ">
                        <div class="col-span-2">
                            <img src="{{ asset('img-fe/dasa.jpg') }}"
                                class="w-10 h-10 mx-auto rounded-full bg-fe-accent" alt="">
                        </div>
                        <div class="col-span-5 my-auto">
                            <p class="text-sm text-start text-fe-secondary font-semibold">Dasa March Lairlaku</p>
                        </div>
                        <div class="col-span-3 my-auto">
                            <p class="text-sm text-center text-fe-accent font-semibold">Top Rebounds</p>
                        </div>
                        <div class="col-span-2 my-auto">
                            <p class="text-sm text-end text-fe-secondary font-semibold">106</p>
                        </div>

                    </div>
                </a>
            </div>
            {{-- end man of the match  --}}
        </div>
        {{-- end hero section  --}}

        {{-- detail statistik  --}}
        <div class="my-5">
            <h1 class="font-bold text-xl text-fe-secondary mb-2">Perform Player</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-white uppercase bg-fe-accent  ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                F
                            </th>
                            <th scope="col" class="px-6 py-3">
                                2fg
                            </th>
                            <th scope="col" class="px-6 py-3">
                                2p
                            </th>
                            <th scope="col" class="px-6 py-3">
                                3fg
                            </th>
                            <th scope="col" class="px-6 py-3">
                                3p
                            </th>
                            <th scope="col" class="px-6 py-3">
                                FT fg
                            </th>
                            <th scope="col" class="px-6 py-3">
                                FT p
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ast
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Reb
                            </th>
                            <th scope="col" class="px-6 py-3">
                                TO
                            </th>
                            <th scope="col" class="px-6 py-3">
                                S
                            </th>
                            <th scope="col" class="px-6 py-3">
                                B
                            </th>
                            <th scope="col" class="px-6 py-3">
                                +Eff
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                            <td class="px-6 py-4">
                                1
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Jojo
                            </th>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                3
                            </td>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                3
                            </td>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                3
                            </td>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                3
                            </td>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                3
                            </td>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                3
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                20
                            </th>


                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
        {{-- End detail statisti  --}}

        {{-- button ulasan   --}}
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="mb-40 block w-full text-white bg-fe-accent hover:bg-fe-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            type="button">
            Beri Ulasan Game
        </button>

        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Sign in to our platform
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="#">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Apakah
                                    kamu
                                    merasa sudah memberikan usaha 100% di lapangan?</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    required />
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Bagaimana
                                    kondisi fisikmu selama pertandingan tadi?</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    required />
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Apa satu
                                    hal yang ingin kamu tingkatkan sebelum pertandingan berikutnya?</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    required />
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-fe-accent hover:bg-fe-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end button ulasan  --}}
    </section>
</div>
