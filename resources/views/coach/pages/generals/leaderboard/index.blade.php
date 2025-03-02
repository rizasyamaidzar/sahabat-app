@extends('coach.index')
@section('content')
    <div class="bg-white rounded-lg p-5">
        <h1 class="text-fe-secondary text-xl font-semibold">Leaderboard</h1>

        <form class="mx-auto my-2">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select Program</label>
            <div class="flex justify-between">
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5">
                    <option selected>Choose a program</option>
                    <option value="US">Elite</option>
                    <option value="FR">Starter</option>
                    <option value="CA">Rookie</option>
                    <option value="DE">Hoops</option>
                    <option value="DE">Pre-Hoops</option>
                </select>

                <button class="mx-4 bg-fe-secondary p-2 rounded-md" type="submit">
                    <i class="fa-solid fa-magnifying-glass text-white text-xl"></i>
                </button>
            </div>
        </form>

        {{-- end search  --}}

        {{-- Top 3 Rank  --}}
        <div class="bg-white">
            <h1 class="bg-fe-secondary text-white text-center font-bold p-2">Leaderboard Elite Putra</h1>
            <div class="grid grid-cols-3 max-w-4xl mx-auto">
                <div class="mt-10">
                    <a href="/leaderboard/1">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-10 h-10 mb-1 rounded-full shadow-lg" src="{{ asset('img-fe/badges.png') }}"
                                alt="Bonnie image" />
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img-fe/dasa.jpg') }}"
                                alt="Bonnie image" />
                            <h5 class="text-xl font-bold text-fe-secondary line-clamp-1">Dasa March Lairlaku</h5>
                            <span class="text-xl font-bold  text-fe-accent ">106 Point</span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-10 h-10 mb-1 rounded-full shadow-lg" src="{{ asset('img-fe/badges.png') }}"
                                alt="Bonnie image" />
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img-fe/dasa.jpg') }}"
                                alt="Bonnie image" />
                            <h5 class="text-xl font-bold text-fe-secondary line-clamp-1">Dasa March Lairlaku</h5>
                            <span class="text-xl font-bold  text-fe-accent ">106 Point</span>
                        </div>
                    </a>
                </div>
                <div class="mt-10">
                    <a href="">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-10 h-10 mb-1 rounded-full shadow-lg" src="{{ asset('img-fe/badges.png') }}"
                                alt="Bonnie image" />
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img-fe/dasa.jpg') }}"
                                alt="Bonnie image" />
                            <h5 class="text-xl font-bold text-fe-secondary line-clamp-1">Dasa March Lairlaku</h5>
                            <span class="text-xl font-bold  text-fe-accent ">106 Point</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{-- End Top 3 Rank  --}}
        {{-- card --}}
        <a href="">
            <div class="grid grid-cols-12 gap-4 max-w-4xl mx-auto p-4 bg-white shadow-sm shadow-gray-600 rounded-lg">
                <div class="col-span-2">
                    <img src="{{ asset('img-fe/dasa.jpg') }}" class="w-24 h-24 mx-auto rounded-full bg-fe-accent"
                        alt="">
                </div>
                <div class="col-span-6 my-auto">
                    <p class="text-xl text-start text-fe-secondary font-semibold">Dasa March Lairlaku</p>
                </div>
                <div class="col-span-4 my-auto mx-auto">
                    <p class="text-xl text-end text-fe-accent font-semibold">106 Point</p>
                </div>

            </div>
        </a>
        {{-- end card --}}

    </div>
@endsection
@section('script')
@endsection
