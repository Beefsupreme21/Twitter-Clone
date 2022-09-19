<div class="pb-6">
    <button>
        <a href="/"><i class="fa fa-close pr-11"></i></a>
    </button>
</div>

<div class="w-4/5 mx-auto flex flex-col justify-between h-[540px]">
    <div>
        <div class="text-center">
            <div class="fa-brands fa-twitter fa-2x mb-6"></div>
        </div>
    
        <header class="">
            <h2 class="text-3xl font-semibold mb-6">
                Enter your password
            </h2>
        </header>
    
        <div class="mb-2">
            <input
                type="password"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="password"
                placeholder="Password"
            />
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>
        <div>
            <a href="/login" class="text-cyan-600">
                Forgot password?
            </a>
        </div>
    </div>

    <div>
        <div class="mb-6">
            <button
                class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold"
                type="submit"
            >
                Log in
            </button>
        </div>
    
        <div class="mt-8">
            <p class="text-gray-500">
                Don't have an account?
                <a href="/register" class="text-cyan-600">
                    Sign up
                </a>
            </p>
        </div>
    </div>

</div>

