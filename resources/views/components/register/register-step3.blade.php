<div class="pl-6 pt-4 pb-6 flex">
    <button>
        <a href="/"><i class="fa fa-close fa-lg"></i></a>
    </button>
    <span class="pl-8 font-bold text-lg">Step 3 of 4</span>
</div>

<div class="w-4/5 mx-auto flex flex-col justify-between h-[500px]">
    <div>

        <header class="mb-6">
            <h2 class="text-3xl font-semibold">
                You'll need a password
            </h2>
            <p>Make sure it's 8 characters or more.</p>
        </header>
    
        <div class="mb-2">
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="password"
                placeholder="Password"
            />
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-2">
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="handle"
                placeholder="handle"
            />
            @error('handle')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>
    </div>

    <div>
        <div class="mb-6">
            <button
                class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold"
                @click="registerStep = 'registerStep4'"
                @click.prevent
            >
                Log in
            </button>
        </div>
    
        <div class="mt-8">
            <p class="text-gray-500">
                Don't have an account?
                <a href="/login" class="text-cyan-600">
                    Sign up
                </a>
            </p>
        </div>

    </div>

</div>
