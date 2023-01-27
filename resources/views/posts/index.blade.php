<x-layout>
    <div class="container mx-auto md:w-[600px]">
        <div class=" border-x border-gray-700 text-white font-bold text-2xl p-5 sticky top-0 z-10 main-background opacity-90 backdrop-blur">
            <h1 class="opacity-100">Home</h1>
        </div>
        <div class="flex border-b border-x border-gray-700 px-2 py-1 text-white">
            @auth
                <div>
                    <div class="w-12 rounded-full img-background">
                        <img src="{{ auth()->user()->image ? asset('storage/images/'. auth()->user()->image) : asset('images/default_profile.png')}}" class="rounded-full w-12" alt="">
                    </div>
                </div>
                <div class="pl-2 pt-3 w-full">
                    <form action="/posts" method="POST">
                        @csrf
                        <div class="relative">
                            <input class="main-background text-xl text-white pb-6 focus:outline-none"
                                type="text"
                                name="content"
                                placeholder="What's happening?"
                            />
                        </div>
                        <div class="flex justify-between pt-4">
                            <div class="flex">
                                <div class="pr-4 text-sky-500">
                                    <x-svg.media class="w-6 h-6" />
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <x-svg.gif class="w-6 h-6" />
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <x-svg.stats class="w-6 h-6" />
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <x-svg.emoji class="w-6 h-6" />
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <x-svg.schedule class="w-6 h-6" />
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <x-svg.pin class="w-6 h-6" />
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
                                    <x-svg.media class="w-6 h-6" />
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <x-svg.gif class="w-6 h-6" />
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <x-svg.stats class="w-6 h-6" />
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <x-svg.emoji class="w-6 h-6" />
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <x-svg.schedule class="w-6 h-6" />
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <x-svg.pin class="w-6 h-6" />
                                </div>
                            </div>
                            <button type="submit" title="Sign in to send tweet" class="bg-gray-500 rounded-full text-white px-6 py-2 mr-4 mb-4" disabled>Tweet</button>
                        </div>
                    </form>
                </div>
            @endauth
        </div>
        @foreach ($posts as $post)
            <a href="/posts/{{$post->id}}">
                <article class="border-b border-x border-gray-700 px-3 py-3 text-white text-base hover:bg-slate-800">
                    <div class="flex">
                        <div>
                            <div class="w-12 rounded-full img-background">
                                @if ($post->user->image)
                                    <img src="{{asset('images/default_profile.png')}}" class="rounded-full w-12" alt="">
                                @else
                                    <img src="https://i.pravatar.cc/100?u={{ $post->user->id }}" class="rounded-full w-12 shrink-0" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="pl-4">
                            <div class="flex">
                                @if ($post->user->verified == 0) 
                                    <a href="/users/{{ $post->user->name }}" class="font-bold hover:underline">{{ $post->user->name }}</a> 
                                    <p class="ml-1 text-gray-400">@</p>
                                    <p class="text-gray-400">{{ $post->user->handle }} · {{ $post->created_at->diffForHumans() }}</p> 
                                @else 
                                    <a href="/users/{{ $post->user->name }}" class="font-bold hover:underline">{{ $post->user->name }}</a> 
                                    <x-svg.verified class="w-6 h-6" />
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
                        @if ($post->comments->contains('user_id', auth()->id()))
                            <div class="flex text-cyan-500">
                                <form action="/comments/{{ $post->comments->where('user_id', auth()->id())->first()->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <x-svg.comment class="w-6 h-6" />
                                    </button>
                                </form>
                                <p class="pl-3">{{ $post->comments->count() }}</p> 
                            </div>
                        @else
                            @auth 
                                <div class="flex hover:text-cyan-500">
                                    <a href="/posts/{{$post->id}}">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit">
                                            <x-svg.comment class="w-6 h-6" />       
                                        </button>
                                    </a>
                                    <p class="pl-3">{{ $post->comments->count() }}</p> 
                                </div>
                            @else
                                <div class="flex hover:text-cyan-500">
                                    <a href="/login">
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit">
                                            <x-svg.comment class="w-6 h-6" />
                                        </button>
                                    </a>
                                    <p class="pl-3">{{ $post->comments->count() }}</p> 
                                </div>
                            @endauth
                        @endif
                        
                        @if ($post->retweets->contains('user_id', auth()->id()))
                            <div class="flex text-green-500">
                                <form action="/retweets/{{ $post->retweets->where('user_id', auth()->id())->first()->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <x-svg.retweet class="w-6 h-6" />
                                    </button>
                                </form>
                                <p class="pl-3">{{ $post->retweets->count() }}</p> 
                            </div>
                        @else
                            @auth
                                <div class="flex hover:text-green-500">
                                    <form action="/retweets" method="POST">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit">
                                            <x-svg.retweet class="w-6 h-6" />          
                                        </button>
                                    </form>
                                    <p class="pl-3">{{ $post->retweets->count() }}</p> 
                                </div>
                            @else
                                <div class="flex hover:text-green-500">
                                    <a href="/login">
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit">
                                            <x-svg.retweet class="w-6 h-6" />         
                                        </button>
                                    </a>
                                    <p class="pl-3">{{ $post->retweets->count() }}</p> 
                                </div>
                            @endauth
                        @endif

                        @if ($post->likes->contains('user_id', auth()->id()))
                            <div class="flex heart-color">
                                <form action="/likes/{{ $post->likes->where('user_id', auth()->id())->first()->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#F91880" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>          
                                    </button>
                                </form>
                                <p class="pl-3">{{ $post->likes->count() }}</p> 
                            </div>
                        @else
                            @auth 
                                <div class="flex hover:text-[#F91880]">
                                    <form action="/likes" method="POST">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                            </svg>             
                                        </button>
                                    </form>
                                    <p class="pl-3">{{ $post->likes->count() }}</p> 
                                </div>
                            @else
                                <div class="flex hover:text-[#F91880]">
                                    <a href="/login">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                            </svg>             
                                        </button>
                                    </a>
                                    <p class="pl-3">{{ $post->likes->count() }}</p> 
                                </div>
                            @endauth
                        @endif
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
