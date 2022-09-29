<x-layout>

    <div class="container mx-auto md:w-[600px]">
        <div class=" border-x border-gray-700 text-white font-bold text-2xl p-5 sticky top-0 z-10 main-background opacity-90 backdrop-blur">
            <h1 class="opacity-100">Home</h1>
        </div>

        <div class="flex border-b border-x border-gray-700 px-2 py-1 text-white">
            @auth

            <div>
                <div class="w-12 rounded-full img-background">
                    <img src="{{auth()->user()->image ? asset('storage/' . auth()->user()->image) : asset('images/profile-test.jpg')}}" class="rounded-full w-12" alt="">
                </div>
            </div>

            <div class="pl-2 pt-3 w-full">
                <form action="/" method="POST">
                    @csrf
                    <div class="relative">
                        <input
                            type="text"
                            name="content"
                            class="main-background text-xl text-white pb-6 focus:outline-none"
                            placeholder="What's happening?"
                        />
                    </div>
                    <div class="flex justify-between pt-4">
                        <div class="flex">
                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                            </div>

                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 8.25v7.5m6-7.5h-3V12m0 0v3.75m0-3.75H18M9.75 9.348c-1.03-1.464-2.698-1.464-3.728 0-1.03 1.465-1.03 3.84 0 5.304 1.03 1.464 2.699 1.464 3.728 0V12h-1.5M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                </svg>
                            </div>

                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                </svg>
                            </div>

                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                                </svg>
                            </div>

                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                            </div>

                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                        </div>
                        <button type="submit" class="bg-blue-500 rounded-full text-white px-6 py-2 mr-4 mb-4">Tweet</button>
                    </div>
                </form>
            </div>

            @else

            <div>
                <div class="w-12 rounded-full img-background">
                    <img src="{{asset('images/default_profile.png')}}" class="rounded-full w-12" alt="">
                </div>
            </div>

            <div class="pl-2 pt-3 w-full">
                <form action="/" method="POST">
                    @csrf
                    <div class="relative">
                        <input
                            type="text"
                            name="content"
                            class="main-background text-xl text-white pb-6 focus:outline-none"
                            placeholder="Sign in first to send tweet"
                        />
                    </div>
                    <div class="flex justify-between pt-4">
                        <div class="flex">
                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                            </div>

                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 8.25v7.5m6-7.5h-3V12m0 0v3.75m0-3.75H18M9.75 9.348c-1.03-1.464-2.698-1.464-3.728 0-1.03 1.465-1.03 3.84 0 5.304 1.03 1.464 2.699 1.464 3.728 0V12h-1.5M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                </svg>
                            </div>

                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                </svg>
                            </div>

                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                                </svg>
                            </div>

                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                            </div>

                            <div class="pr-4 text-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                        </div>
                        <button type="submit" title="Sign in to send tweet" class="bg-gray-500 rounded-full text-white px-6 py-2 mr-4 mb-4" disabled>Tweet</button>
                    </div>
                </form>
            </div>

            @endauth

        </div>

        {{-- <img src="{{ optional($post->user->image) }}" class="rounded-full w-12" alt=""> --}}

        @foreach ($posts as $post)
        <a href="/posts/{{$post->id}}">
            <article class="border-b border-x border-gray-700 px-3 py-3 text-white text-base hover:bg-slate-800">

                    <div class="flex">
                        <div>
                            <div class="w-12 rounded-full img-background">
                                @if ($post->user->image)
                                    <img src="{{$post->user->image ? asset('storage/' . $post->user->image) : asset('images/default_profile.png')}}" class="rounded-full w-12" alt="">
                                @else
                                    <img src="https://i.pravatar.cc/100?u={{ $post->user->id }}" class="rounded-full w-12 shrink-0" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="pl-4">
                            <div class="flex">
                                @if ($post->user->verified == 0) 

                                    <a href="/{{ $post->user->name }}" class="font-bold hover:underline">{{ $post->user->name }}</a> 
                                    <p class="ml-1 text-gray-400">@</p>
                                    <p class="text-gray-400">{{ $post->user->handle }} · {{ $post->created_at->diffForHumans() }}</p> 

                                @else 

                                    <a href="/{{ $post->user->name }}" class="font-bold hover:underline">{{ $post->user->name }}</a> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                    </svg>
                                    <p class="ml-1 text-gray-400">@</p>
                                    <p class="text-gray-400">{{ $post->user->handle }} · {{ $post->created_at->diffForHumans() }}</p> 
                                    
                                @endif

                            </div>
                         
                            <a href="/posts/{{$post->id}}">
                                <p class="text-md">{{ $post->content }}</p>
                            </a>
                        </div>
                    </div>
    
                    <div class="flex justify-around pt-4 px-6 text-slate-400">

                        <div x-data="{ reply: false, count: {{ $post->replies }} }" class="flex hover:text-cyan-500" x-cloak>
                            <div x-show="!reply" x-on:click="reply = ! reply, count++" x-cloak >
                                <input type="hidden" name="replies" >
                                <input class="custom-checkbox-input" name="alarm" type="checkbox">
                                <span class="custom-checkbox-text flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                    </svg>             
                                    <p class="pl-3" x-text="count"></p> 
                                </span>
                            </div>
                         
                            <div x-show="reply" x-on:click="reply = ! reply, count--" class="text-cyan-600" x-cloak >
                                <input class="custom-checkbox-input" name="replies" type="checkbox hidden">
                                <span class="custom-checkbox-text flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="cyan" viewBox="0 0 24 24" class="w-6 h-6 border-0 outline-none">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                    </svg>             
                                    <p class="pl-3" x-text="count"></p> 
                                </span>
                            </div>
                        </div>

                        <div x-data="{ retweet: false, count: {{ $post->retweets }} }" class="flex hover:text-green-500">
                            <div x-show="!retweet" x-on:click="retweet = ! retweet, count++" x-cloak >
                                <input type="hidden" name="replies" >
                                <input class="custom-checkbox-input" name="alarm" type="checkbox">
                                <span class="custom-checkbox-text flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                    </svg>          
                                    <p class="pl-3" x-text="count"></p> 
                                </span>
                            </div>
                         
                            <div x-show="retweet" x-on:click="retweet = ! retweet, count--" class="text-green-500" x-cloak >
                                <input class="custom-checkbox-input" name="retweets" type="checkbox hidden">
                                <span class="custom-checkbox-text flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                    </svg>          
                                    <p class="pl-3" x-text="count"></p> 
                                </span>
                            </div>
                        </div>

                        <div x-data="{ like: false, count: {{ $post->likes }} }" class="flex hover:text-pink-600">
                            <div x-show="!like" x-on:click="like = ! like, count++" x-cloak >
                                <input type="hidden" name="replies" >
                                <input class="custom-checkbox-input" name="alarm" type="checkbox">
                                <span class="custom-checkbox-text flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>       
                                    <p class="pl-3" x-text="count"></p> 
                                </span>
                            </div>
                         
                            <div x-show="like" x-on:click="like = ! like, count--" class="pink-color" x-cloak >
                                <input class="custom-checkbox-input" name="like" type="checkbox hidden">
                                <span class="custom-checkbox-text flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#F91880" viewBox="0 0 24 24" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>       
                                    <p class="pl-3" x-text="count"></p> 
                                </span>
                            </div>
                        </div>

                        <div x-data="{ share: false }" class="flex hover:text-cyan-500">
                            <div x-show="!share" x-on:click="share = ! share" x-cloak >
                                <input type="hidden" name="replies" >
                                <input class="custom-checkbox-input" name="alarm" type="checkbox">
                                <span class="custom-checkbox-text flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                    </svg>                
                                </span>
                            </div>
                         
                            <div x-show="share" x-on:click="share = ! share" class="text-cyan-600" x-cloak >
                                <input class="custom-checkbox-input" name="replies" type="checkbox hidden">
                                <span class="custom-checkbox-text flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="cyan" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                    </svg>                
                                </span>
                            </div>
                        </div>                           
                    </div>
            </article>
        </a>
        @endforeach
    </div>
    
</x-layout>