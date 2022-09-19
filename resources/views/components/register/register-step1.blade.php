<div class="pb-6">
    <button>
        <a href="/"><i class="fa fa-close pr-11"></i></a>
    </button>
    <span>Step 1 of 4</span>
</div>

<div class="w-4/5 mx-auto flex flex-col justify-between h-[540px]">
    <div>
        <header class="">
            <h2 class="text-3xl font-semibold mb-6">
                Create your account
            </h2>
        </header>
    
        <div class="mb-6">
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="name"
                placeholder="Name"
                value="{{old('email')}}"
            />
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-2">
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="email"
                placeholder="Email"
            />
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

        <div>
            <p>Date of birth</p>
            <p>This will not be shown publicly. Confirm your own age, even if this account is for a business, a pet, or something else.</p>
        </div>
    </div>

    <div>
        <div class="mb-6">
            <button             
                @click="registerStep = 'registerStep2'"
                @click.prevent
                class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold">
                    Next
            </button>
        </div>
    </div>

</div>

