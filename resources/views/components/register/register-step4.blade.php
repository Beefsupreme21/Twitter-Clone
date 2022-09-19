<div class="pb-6">
    <button>
        <a href="/"><i class="fa fa-close pr-11"></i></a>
    </button>    
    <span>Step 4 of 4</span>
</div>

<div class="w-4/5 mx-auto flex flex-col justify-between h-[540px]">
    <div>

        <header class="mb-6">
            <h2 class="text-3xl font-semibold">
                Pick a profile picture
            </h2>
            <p>Have a favorite selfie? Upload it now.</p>
        </header>
    
        <div class="mb-6">
            <label for="image" class="inline-block text-lg mb-1">Image</label>
            <input
                type="file"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="image"
            />
    
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>
    </div>

    <div>
        <div class="mb-6">
            <button
                class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold"
                type="submit"
            >
                Submit
            </button>
        </div>

    </div>

</div>

