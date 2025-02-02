<div id="register-modal"
    class="register-form-container w-[22%] h-fit fixed top-0 bottom-0 right-0 left-0 flex items-center justify-items-center flex-col p-4 {{ session('form') === 'register' ? 'active' : '' }}">
    <h1 class="font-extrabold text-2xl mb-4">Sign up for Free</h1>

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div class="field-container">
            <label for="name">Full Name</label>
            <input type="text" name="name" placeholder="Enter your full name" value="{{ old('name') }}"
                class="border {{ $errors->has('name') ? 'border-red-500' : 'border-[#d5cfcb]' }}">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="field-container">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter your email" value="{{ old('email') }}"
                class="border {{ $errors->has('name') ? 'border-red-500' : 'border-[#d5cfcb]' }}">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="field-container">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Create password"
                class="border {{ $errors->has('name') ? 'border-red-500' : 'border-[#d5cfcb]' }}">
            @error('password')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col items-center mt-6 gap-y-3">
            <button type="submit" class="form-btn bg-[#000000] text-[#f0f0f0] w-[100%] p-[10px] rounded-[5px]">Sign up
                now</button>
            <span class="text-[0.6rem] text-[#8b8785a8]">or</span>
            <a href="{{ route('auth.google') }}"
                class="form-btn flex flex-row items-center gap-x-12 p-[10px] border-solid border-[#000000] border-[1px] rounded-[5px]"><img
                    class="w-[6%]" src="{{ Vite::asset('resources/assets/images/search.png') }}" alt="">
                Continue with google
            </a>
        </div>

        <p class="auth-link mt-4 text-[0.8rem] text-center">Registered already? <span
                class="text-[#324673] underline decoration-solid cursor-pointer" id="gotoLoginup-btn">Log in</span></p>

        <p class="terms-text text-[#8b8785a8] text-[0.6rem] text-center">I accept SPCC Landas <span
                class="underline decoration-solid">Terms of
                use</span> and <span class=" underline decoration-solid">Privacy
                Notice</span></p>
    </form>
</div>
