<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Twitter Clone</title>
        <link rel = "icon" href = 
"https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png" 
        type = "image/x-icon">

        <img  class="rounded-full w-12" alt="">

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://kit.fontawesome.com/19ab508515.js" crossorigin="anonymous"></script>

        <style>
            .main-background {
                background-color: #15202B; 
            }
            .hover-background {
                background-color: #2d3741;
            }

            .main-font {
                font-family: 'Segoe UI';
            }

        </style>
    </head>

    <body class="main-background m-auto xl:w-[1265px] main-font">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Register
                </h2>
            </header>
        
            <form method="POST" action="/users">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2">
                        Name
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name"
                        value="{{old('name')}}"
                    />
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2"
                        >Email</label
                    >
                    <input
                        type="email"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email"
                        value="{{old('email')}}"
        
                    />
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <label
                        for="password"
                        class="inline-block text-lg mb-2"
                    >
                        Password
                    </label>
                    <input
                        type="password"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="password"
                        value="{{old('password')}}"
        
                    />
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <label
                        for="password2"
                        class="inline-block text-lg mb-2"
                    >
                        Confirm Password
                    </label>
                    <input
                        type="password"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="password_confirmation"
                        value="{{old('password_confirmation')}}"
        
                    />
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <button
                        type="submit"
                        class="text-white rounded py-2 px-4 bg-black"
                    >
                        Sign Up
                    </button>
                </div>
        
                <div class="mt-8">
                    <p>
                        Already have an account?
                        <a href="/login" class="text-laravel"
                            >Login</a
                        >
                    </p>
                </div>
            </form>
        </div>

    </body>
</html>



