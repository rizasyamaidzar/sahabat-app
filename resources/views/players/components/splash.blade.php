@section('style')
    <style>
        .fade-out {
            opacity: 0;
            transition: opacity 1s ease-out;
        }
    </style>
@endsection
<!-- Splash Screen -->
<div id="splash-screen" class="fixed inset-0 flex z-50 items-center justify-center bg-fe-secondary">
    <div class="relative w-full h-full">
        <!-- Background Image -->
        {{-- <img src="{{ asset('img-fe/splash-bg.jpg') }}" alt="Splash Background"
            class="absolute inset-0 w-full h-full object-cover opacity-50"> --}}

        <!-- Logo & Text -->
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <img src="{{ asset('img-fe/maskot.png') }}" alt="Logo" class="w-40 h-40 animate-bounce">
            <p class="text-white text-lg font-semibold mt-2">Loading...</p>
        </div>
    </div>
</div>
@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                let splash = document.getElementById("splash-screen");
                splash.classList.add("fade-out");
                setTimeout(() => splash.classList.add("hidden"), 100);
                document.getElementById("main-content").classList.remove("hidden");
            }, 1000);
        });
    </script>
@endsection
