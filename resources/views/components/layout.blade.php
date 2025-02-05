<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')
    @vite('resources/js/modal.js')
    @vite('resources/js/scrollEffect.js')
</head>

<body class="relative">
    {{-- overlay --}}
    <div id="overlay" class="overlay {{ $errors->any() ? 'active' : '' }}"></div>

    {{-- Navbar --}}
    <header
        class="flex justify-between items-center pt-4 pb-4 fixed top-0 left-0 right-0 z-40 w-[100%] duration-300 ease-in-out">
        <div class="flex justify-center items-center ml-6 gap-x-3">
            {{-- logo --}}
            <img src="{{ Vite::asset('resources/assets/images/spcclogo.jpg') }}" class="rounded-full h-16"
                alt="spcc logo">
            <h4 class="text-4xl font-bold text-[#F0F0F0] tracking-wide">LANDAS</h4>
        </div>

        {{-- nav links --}}
        <nav class="nav-container mr-6">
            <ul class="flex justify-center items-center gap-8">
                <li><a href="#">About us</a></li>
                <li><a href="#">Careers</a></li>

                {{-- for guest user --}}
                @guest
                    <div class="flex flex-row items-center justify-center gap-8">
                        <li><button id="login-btn" class="login-btn">Log In</button></li>
                        <li><button id="signup-btn" class="signup-btn ">Sign up</button></li>
                    </div>
                @endguest

                {{-- for authorize user --}}
                @auth
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="login-btn ">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>
    </header>

    {{-- Main content --}}
    <main class="h-full">
        {{ $slot }}
    </main>

    {{-- Form Modal --}}
    @include('auth.register')
    @include('auth.login')

    {{-- footer --}}
</body>

</html>
