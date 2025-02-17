@extends('players.index')
@include('players.components.splash')
<div class="section max-w-md mx-auto">
    <section class="mx-4">
        <h1 class="mt-10 text-fe-secondary font-bold text-xl">Leaderboard Sahabat Ponorogo</h1>
        {{-- search  --}}
        <form class="max-w-sm mx-auto my-2">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Select Program</label>
            <div class="flex justify-between">
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Choose a program</option>
                    <option value="US">Elite</option>
                    <option value="FR">Starter</option>
                    <option value="CA">Rookie</option>
                    <option value="DE">Hoops</option>
                    <option value="DE">Pre-Hoops</option>
                </select>

                <button class="mx-4 bg-fe-secondary p-4 rounded-md" type="submit">
                    <i class="fa-solid fa-magnifying-glass text-white text-xl"></i>
                </button>
            </div>
        </form>
        {{-- end search  --}}

        {{-- card --}}
        <a href="">
            <div class="grid grid-cols-12 mx-2 p-4 bg-white shadow-sm shadow-gray-600 rounded-lg">
                <div class="col-span-2">
                    <img src="{{ asset('img-fe/dasa.png') }}" class="w-10 h-auto mx-auto rounded-full bg-fe-accent"
                        alt="">
                </div>
                <div class="col-span-6 my-auto">
                    <p class="text-sm text-start">Dasa March Lairlaku</p>
                </div>
                <div class="col-span-4 my-auto">
                    <p class="text-sm text-end text-fe-accent font-semibold">106 Point</p>
                </div>

            </div>
        </a>
        {{-- end card --}}

    </section>
</div>
