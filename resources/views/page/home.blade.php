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

    {{-- home second Section --}}
    <section class="relative bg-[#F0F0F0] min-h-[100vh] max-h-full w-full pt-[6%] pb-[6%]">
        {{-- wireframe --}}
        <div class="second-section-wireframe z-0"></div>

        {{-- about section content --}}
        <div>
            <h1 class="text-center font-bold text-[6rem]">Title Section</h1>
        </div>

        <div class="second-section-content-container  flex items-center justify-center">
            <div class="p-2 mt-16 grid grid-cols-4 gap-10 w-[80%] h-[auto]">
                <div class="col-span-2 flex gap-x-3 w-[90%]">
                    <div>
                        <h1 class="text-[#8b8785a8] font-bold text-[6rem]">1</h1>
                    </div>
                    <div class="mt-7">
                        <h1 class="text-[3rem] font-medium">Lorem Ipsum</h1>
                        <p class="text-[1rem]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi,
                            sapiente dolore.
                            Architecto soluta explicabo dolorem molestias optio fuga recusandae autem dolorum, voluptate
                            suscipit id voluptates eum maxime cupiditate, quia sed.</p>
                    </div>
                </div>
                <div class="font-bold text-[3rem] col-span-2 flex gap-x-3 w-[90%] place-self-end">
                    <div>
                        <h1 class="text-[#8b8785a8] font-bold text-[6rem] ]">2</h1>
                    </div>
                    <div class="mt-7">
                        <h1 class="text-[3rem] font-medium">Lorem Ipsum</h1>
                        <p class="text-[1rem] font-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Commodi,
                            sapiente dolore.
                            Architecto soluta explicabo dolorem molestias optio fuga recusandae autem dolorum, voluptate
                            suscipit id voluptates eum maxime cupiditate, quia sed.</p>
                    </div>
                </div>
                <div></div>
                <div class="font-bold text-[3rem col-span-2 flex gap-x-3 w-[90%]">
                    <div>
                        <h1 class="text-[#8b8785a8] font-bold text-[6rem] ]">3</h1>
                    </div>
                    <div class="mt-7">
                        <h1 class="text-[3rem] font-medium">Lorem Ipsum</h1>
                        <p class="text-[1rem] font-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Commodi,
                            sapiente dolore.
                            Architecto soluta explicabo dolorem molestias optio fuga recusandae autem dolorum, voluptate
                            suscipit id voluptates eum maxime cupiditate, quia sed.</p>
                    </div>
                </div>
                <div></div>
            </div>
        </div>

    </section>

    {{-- home 3rd section --}}
    <section class="home-third-section min-h-[100vh] max-h-full w-full pt-[6%] pb-[6%]">
        <h1>home 3rd section</h1>
    </section>
</x-layout>
