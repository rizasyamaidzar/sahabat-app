<div
    class="fixed z-40 w-full h-16 max-w-sm -translate-x-1/2 bg-white border border-gray-200 rounded-full bottom-4 left-1/2">
    <div class="grid h-full max-w-sm grid-cols-5 mx-auto">
        <button data-tooltip-target="tooltip-home" type="button"
            class="inline-flex flex-col items-center justify-center px-5 rounded-full hover:bg-gray-50
            {{ Request::is('dashboard*') ? 'bg-blue-100 text-blue-600' : 'text-gray-500' }}">
            <a href="/dashboard">
                <i class="fa-solid fa-home w-5 h-5">
                </i>
                <span class="sr-only">Home</span>
            </a>
        </button>
        <button data-tooltip-target="tooltip-games" type="button"
            class="inline-flex flex-col items-center justify-center px-5 rounded-full hover:bg-gray-50
            {{ Request::is('games*') ? 'bg-blue-100 text-blue-600' : 'text-gray-500' }}">
            <a href="/games">
                <i class="fa-solid fa-basketball w-5 h-5">
                </i>
                <span class="sr-only">Games</span>
            </a>
        </button>
        <button data-tooltip-target="tooltip-leaderboard" type="button"
            class="inline-flex flex-col items-center justify-center px-5 rounded-full hover:bg-gray-50
            {{ Request::is('leaderboard*') ? 'bg-blue-100 text-blue-600' : 'text-gray-500' }}">
            <a href="/leaderboard">
                <i class="fa-solid fa-medal w-5 h-5">
                </i>
                <span class="sr-only">leaderboard</span>
            </a>
        </button>
        <button data-tooltip-target="tooltip-my-games" type="button"
            class="inline-flex flex-col items-center justify-center px-5 rounded-full hover:bg-gray-50
            {{ Request::is('my-games*') ? 'bg-blue-100 text-blue-600' : 'text-gray-500' }}">
            <a href="/my-games">
                <i class="fa-solid fa-chart-simple w-5 h-5">
                </i>
                <span class="sr-only">My-games</span>
            </a>
        </button>



        <button data-tooltip-target="tooltip-profile" type="button"
            class="inline-flex flex-col items-center justify-center px-5 rounded-full hover:bg-gray-50
            {{ Request::is('profile') ? 'bg-blue-100 text-blue-600' : 'text-gray-500' }}">
            <a href="/profile">
                <i class="fa-solid fa-user w-5 h-5">
                </i>
                <span class="sr-only">Profile</span>

            </a>
        </button>
    </div>
</div>
