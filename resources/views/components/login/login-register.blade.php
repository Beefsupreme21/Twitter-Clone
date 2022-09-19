<div class="pb-6">
    <button>
        <a href="/"><i class="fa fa-close pr-11"></i></a>
    </button>
</div>

<div class="w-3/5 mx-auto ">
    <div class="text-center">
        <div class="fa-brands fa-twitter fa-2x mb-6"></div>
    </div>

    <header class="">
        <h2 class="text-3xl font-semibold mb-6">
            Sign in to Twitter
        </h2>
    </header>

    <div class="mb-6">
        <button
            class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold"
        >
            Sign in with Google
        </button>
    </div>

    <div class="mb-6">
        <button
            class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold"
        >
            Sign in with Apple
        </button>
    </div>


    <div class="mb-6">
        <input
            type="text"
            class="bg-black border border-gray-800 rounded p-4 w-full"
            name="email"
            placeholder="Phone, email, or username"
            value="{{old('name')}}"
        />
        @error('email')
            <p class="text-red-500 text-sm mt-1">{{$message}}</p>
        @enderror
    </div>

    
    <div class="mb-6">
        <button
            class="bg-white rounded py-1.5 text-black w-full rounded-3xl font-bold"
            @click="currentStep = 'password'"
            @click.prevent
        >
            Next
        </button>
    </div>

    <div class="mb-6">
        <button class="bg-black border border-gray-800 rounded py-1.5 text-white w-full rounded-3xl font-bold">
            Forgot password?
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


