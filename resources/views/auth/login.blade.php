<div id="login-modal"
    class="login-form-container w-[22%] h-fit fixed top-0 bottom-0 right-0 left-0 flex items-center justify-items-center flex-col p-4 {{ session('form') === 'login' ? 'active' : '' }}">
    <h1 class="font-extrabold text-2xl mb-4">Welcome Back!</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="field-container">
            <label for="email">Email</label>
            <input type="text" name="register-email" placeholder="Enter your email"
                class="border {{ $errors->has('email') ? 'border-red-500' : 'border-[#d5cfcb]' }}"
                value="{{ old('email') }}">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="field-container">
            <label for="password">Password</label>
            <input type="password" name="password"
                class="border {{ $errors->has('password') ? 'border-red-500' : 'border-[#d5cfcb]' }}"
                placeholder="Create password">
            <span class="underline decoration-solid text-[#324673] text-[0.6rem] cursor-pointer">Forgot Password?</span>
            @error('password')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col items-center mt-6 gap-y-3">
            <button class="form-btn bg-[#1a1919] text-[#f0f0f0] w-[100%] p-[10px] rounded-[5px]">Log in</button>
            <span class="text-[0.6rem] text-[#8b8785a8]">or</span>
            <a href="{{ route('auth.google') }}"
                class="form-btn flex flex-row items-center gap-x-12 p-[10px] border-solid border-[#d5cfcb] border-[1px] rounded-[5px]"><img
                    class="w-[6%]" src="{{ Vite::asset('resources/assets/images/search.png') }}" alt="">
                Continue with google
            </a>
        </div>

        <p class="auth-link mt-4 text-[0.8rem] text-center">New to SPCC Landas? <span id="gotoSignup-btn"
                class="text-[#324673] underline decoration-solid cursor-pointer">Sign up</p>

        <p class="terms-text text-[0.6rem] text-center text-[#8b8785a8]">This site is protected by reCAPTCHA Enterprise
            and the
            Google <span class=" underline decoration-solid">Privacy Policy
            </span> and <span class="underline decoration-solid">Terms of Service</span>apply.</p>
    </form>
</div>
