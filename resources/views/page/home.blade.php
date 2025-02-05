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
    <section id="home-third-section"
        class="home-third-section min-h-[100vh] max-h-full w-full pt-[6%] pb-[6%] flex items-center relative">
        {{-- for progress --}}
        <div class="ml-6 flex flex-col justify-center items-center w-[fit-content] gap-5">
            <h1 class="vertical-text">Step-by-step guide</h1>
            <div class="vertical-line">
                <div id="progress" class="progress"></div>
            </div>
        </div>

        <!-- Scrollable Content -->
        <div class="scrollable-content w-[90%] h-[auto] grid grid-cols-2 ml-20 mr-20">
            {{-- text wrapper --}}
            <div class="content-container pt-[130px] overflow-hidden">
                {{-- text content --}}
                <div class="content active grid grid-cols-2 w-[fit-content] mt-[100px]">
                    <div class="col-span-2">
                        <h1 class="text-[#F0F0F0] font-semibold text-[1.6rem] inline">01</h1>
                        <h1 class="third-section-title active text-[2rem] font-semibold inline">Title 1</h1>
                    </div>
                    <div class="col-span-2 pl-[38px]">
                        <p class="content-para active text-[#FFFFFF] w-[80%]">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit.
                            Facere
                            vero perferendis vel deleniti numquam amet officia consectetur rerum, ex magni!
                        </p>
                    </div>
                </div>

                <div class="content grid grid-cols-2 w-[fit-content] mt-[22px]">
                    <div class="col-span-2">
                        <h1 class="text-[#F0F0F0] font-semibold text-[1.6rem] inline">02</h1>
                        <h1 class="third-section-title text-[2rem] font-semibold inline">Title 2
                        </h1>
                    </div>
                    <div class="col-span-2 pl-[38px]">
                        <p class="content-para text-[#FFFFFF] w-[80%]">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit.
                            Facere
                            vero perferendis vel deleniti numquam amet officia consectetur rerum, ex magni!
                        </p>
                    </div>
                </div>

                <div class="content grid grid-cols-2 w-[fit-content] mt-[22px]">
                    <div class="col-span-2">
                        <h1 class="text-[#F0F0F0] font-semibold text-[1.6rem] inline">03</h1>
                        <h1 class="third-section-title text-[2rem] font-semibold inline">Title 3
                        </h1>
                    </div>
                    <div class="col-span-2 pl-[38px]">
                        <p class="content-para text-[#FFFFFF] w-[80%]">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit.
                            Facere
                            vero perferendis vel deleniti numquam amet officia consectetur rerum, ex magni!
                        </p>
                    </div>
                </div>
            </div>


            {{-- image content --}}
            <div class="place-self-end">
                <img src="https://picsum.photos/200" alt="" class="h-[500px] w-[600px] object-cover">
            </div>
        </div>
    </section>

    {{-- home 4th section --}}
    <section class="home-fourth-section min-h-[100vh] max-h-full w-full"></section>
</x-layout>
