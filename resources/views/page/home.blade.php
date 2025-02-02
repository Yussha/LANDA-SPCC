<x-layout>
    {{-- Hero Section --}}
    <section class="hero-section flex min-h-[100vh] max-h-full w-full">

        {{-- Text --}}
        <div class="hero-section-container pl-28 pt-[200px] pb-[200px] w-[100%]">
            <h2>Find Your Path,</h2>
            <h1 class="mb-4">Achieve Your Dreams</h1>
            <p class="text w-[65%] text-justify mb-10">Say hello to <span class="text-[#fabd02]">SPCC Landas</span>, a
                web-based
                career assessment tool
                design to
                guide students
                towards career advancements</p>
            <div class="hero-btn-container flex gap-x-8">
                <button class="get-started-btn">Get Started</button>
                <a href="#" class="text-[1.2rem]  underline decoration-solid flex justify-center items-center">Learn
                    more About
                    SPCC Landas</a>
            </div>
        </div>

        {{-- Image --}}
        <div class="hero-image-container w-[90%] relative">
            <img class="w-full h-full object-cover" src="{{ Vite::asset('resources/assets/images/LANDING_PAGE.png') }}"
                alt="">
            <div class="img-overlay z-0"></div>
        </div>

    </section>

    {{-- About Section --}}
    {{-- <section>
        This is about page
    </section> --}}
</x-layout>
