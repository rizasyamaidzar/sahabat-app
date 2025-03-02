@include('coach.partials.navbar')

<aside id="logo-sidebar"
    class="fixed top-0 mt-16 ml-2 rounded-xl pt-2 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-gradient-to-b from-blue-500 via-blue-700 to-fe-secondary border-r border-gray-200 sm:translate-x-0     "
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-gradient-to-b from-blue-500 via-blue-700 to-fe-secondary pt-10 ">
        <h1 class="text-gray-200 mx-2 font-medium">General</h1>
        <ul class="space-y-2 font-medium mx-2">
            <li class="my-2">
                <a href="#"
                    class="flex items-center py-2 px-4 text-white rounded-lg hover:bg-blue-900 group  {{ Request::is('coach.dashboard*') ? 'bg-blue-700 text-blue-600' : 'text-gray-500' }}">
                    <i class="fa-solid fa-house text-fe-accent text-lg"></i>
                    <span class="ms-2">Dashboard</span>
                </a>
            </li>
            <li class="my-2">
                <a href="coach.leaderboard"
                    class="flex items-center py-2 px-4 text-white rounded-lg hover:bg-blue-900 group  {{ Request::is('coach.leaderboard*') ? 'bg-blue-700 text-blue-600' : 'text-gray-500' }}">
                    <i class="fa-solid fa-ranking-star text-fe-accent text-lg"></i>
                    <span class="ms-2">Leaderboard</span>
                </a>
            </li>
        </ul>
        <h1 class="text-gray-200 mx-2 font-medium">Master Data</h1>
        <ul class="space-y-2 font-medium mx-2">
            <li class="my-2">
                <a href="#"
                    class="flex items-center py-2 px-4 text-white rounded-lg hover:bg-blue-900 group  {{ Request::is('coach.dashboard*') ? 'bg-blue-700 text-blue-600' : 'text-gray-500' }}">
                    <i class="fa-solid fa-award text-fe-accent text-lg"></i>
                    <span class="ms-2">Badges</span>
                </a>
            </li>
            <li class="my-2">
                <a href="/coach.programs"
                    class="flex items-center py-2 px-4 text-white rounded-lg hover:bg-blue-900 group  {{ Request::is('coach.programs*') ? 'bg-blue-700 text-blue-600' : 'text-gray-500' }}">
                    <i class="fa-solid fa-tags text-fe-accent text-lg"></i>
                    <span class="ms-2">Program</span>
                </a>
            </li>
            <li class="my-2">
                <a href="#"
                    class="flex items-center py-2 px-4 text-white rounded-lg hover:bg-blue-900 group  {{ Request::is('leaderboard*') ? 'bg-blue-700 text-blue-600' : 'text-gray-500' }}">
                    <i class="fa-solid fa-users-gear text-fe-accent text-lg"></i>
                    <span class="ms-2">Player</span>
                </a>
            </li>
        </ul>
        <h1 class="text-gray-200 mx-2 font-medium">Game</h1>
        <ul class="space-y-2 font-medium mx-2">
            <li class="my-2">
                <a href="#"
                    class="flex items-center py-2 px-4 text-white rounded-lg hover:bg-blue-900 group  {{ Request::is('coach.dashboard*') ? 'bg-blue-700 text-blue-600' : 'text-gray-500' }}">
                    <i class="fa-solid fa-users-between-lines text-fe-accent text-lg"></i>
                    <span class="ms-2">Competition</span>
                </a>
            </li>
            <li class="my-2">
                <a href="#"
                    class="flex items-center py-2 px-4 text-white rounded-lg hover:bg-blue-900 group  {{ Request::is('leaderboard*') ? 'bg-blue-700 text-blue-600' : 'text-gray-500' }}">
                    <i class="fa-solid fa-house text-fe-accent text-lg"></i>
                    <span class="ms-2">Game</span>
                </a>
            </li>
            <li class="my-2">
                <a href="#"
                    class="flex items-center py-2 px-4 text-white rounded-lg hover:bg-blue-900 group  {{ Request::is('leaderboard*') ? 'bg-blue-700 text-blue-600' : 'text-gray-500' }}">
                    <i class="fa-solid fa-comments text-fe-accent text-lg"></i>
                    <span class="ms-2">Evaluation</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        @include('coach.partials.breadcumb')
        <div class="border-2 border-gray-200 border-dashed rounded-lg p-2 mt-2">

            @yield('content')
        </div>
    </div>
</div>
