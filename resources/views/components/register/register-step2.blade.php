<div class="pb-6">
    <button>
        <a href="/"><i class="fa fa-close pr-11"></i></a>
    </button>    
    <span>Step 2 of 4</span>
</div>

<div class="w-4/5 mx-auto flex flex-col justify-between h-[540px]">
    <div>
        <header class="">
            <h2 class="text-3xl font-semibold mb-6">
                Create your account
            </h2>
        </header>
    
    
        {{-- <div class="mb-6">
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="name"
                placeholder="Beefsupreme21"
                value="{{old('name')}}"
                disabled
            />
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div> --}}

        {{-- <div class="mb-6">
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="email"
                placeholder="beefsupreme21@hotmail.com"
                value="{{old('email')}}"
                disabled
            />
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div> --}}
    
        <div class="mb-2">
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="dob"
                placeholder="Jul 21, 1989"
            />
            @error('dob')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

    </div>

    <div>
        <div class="mb-6">
            <button             
                @click="registerStep = 'registerStep3'"
                @click.prevent
                class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold">
                    Sign up
            </button>
        </div>
    </div>

</div>

