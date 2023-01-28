<x-layout>
    <div class="container mx-auto md:w-[600px]  ">
        <div class="flex border-x border-gray-700 items-center text-white font-bold text-xl p-2 sticky top-0 z-10 main-background opacity-90 backdrop-blur">
            <a href="/">
                <i class="fa-solid fa-arrow-left p-2 rounded-full hover:bg-slate-700"></i>
            </a>
            <h1 class="ml-6 opacity-100">Thread</h1>
        </div>
        <div class="flex justify-between w-full border-x border-gray-700 px-4 py-1 text-white">
            <div class="flex">
                <a href="/users/{{ $comment->user->name }}" class="flex">
                    <div class="w-12 rounded-full img-background">
                        <img src="{{ $comment->user->image ? asset('storage/images/'. $comment->user->image) : 'https://i.pravatar.cc/100?u=' . $comment->user_id }}" class="rounded-full w-12 shrink-0" alt="">
                    </div>
                    <div class="ml-2">
                        <div class="flex">
                            <div class="font-bold hover:underline">{{ $comment->user->name }}</div> 
                            @if ($comment->user->verified == 1) 
                                <x-svg.verified class="w-6 h-6" />
                            @endif
                        </div>
                        <div class="flex text-gray-400">
                            <p>@</p>
                            <p>{{ $comment->user->handle }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>    
            </div>
        </div>

        <article class="border-b border-x border-gray-700 py-3 text-white text-base">
            <div class="px-4">
                <div class="px-2">
                    <p class="text-2xl">{{ $comment->body }}</p>
                    <p class="text-gray-400 py-4"> {{ $comment->created_at }} · Twitter Web App</p> 
                </div>
                <div class="border-y border-gray-700">
                    <p class="py-3">0 Likes</span></p>
                </div>
                <div class="flex justify-around py-3 px-6 text-slate-400">
                    <div class="flex hover:text-cyan-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                        </svg>             
                    </div>
                    <div class="flex hover:text-cyan-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                        </svg>          
                    </div>
                    <div class="flex hover:text-cyan-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>       
                    </div>
                    <div class="flex hover:text-cyan-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                        </svg>       
                    </div>                              
                </div>
                <div class="flex pl-2 pt-3 w-full border-t border-gray-700">
                    <div>
                        <div class="w-12 rounded-full img-background mr-6">
                            <img src="{{asset('images/default_profile.png')}}" class="rounded-full w-12" alt="default profile picture">
                        </div>
                    </div>
                    <form action="/comments/replies/{{ $comment->id }}" method="POST">
                        @csrf
                        <div class="relative">
                            <input
                                type="text"
                                name="body"
                                class="main-background text-xl text-white pb-6 focus:outline-none"
                                placeholder="Tweet your reply"
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
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                                    </svg>
                                </div>
                                <div class="pr-4 text-sky-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="bg-blue-500 rounded-full text-white px-6 py-2 mr-4 mb-4">Reply</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <section>
                @foreach ($comment->replyComments as $replyComment)
                <article class="flex p-4 border-t border-gray-700" >
                    <div class="mr-3 flex-shrink-0">
                        <img src="https://i.pravatar.cc/100?u={{ $replyComment->user_id }}" class="rounded-full w-12 shrink-0" alt="">
                    </div>
                    <div>
                        <div class="pl-4">
                            <div class="flex">
                                @if ($replyComment->user->verified == 0) 
                                    <a href="/users/{{ $replyComment->user->name }}" class="font-bold hover:underline">{{ $replyComment->user->name }}</a> 
                                    <p class="ml-1 text-gray-400">@</p>
                                    <p class="text-gray-400">{{ $replyComment->user->handle }} · {{ $replyComment->created_at->diffForHumans() }}</p> 
                                @else 
                                    <a href="/users/{{ $replyComment->user->name }}" class="font-bold hover:underline">{{ $replyComment->user->name  }}</a> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                    </svg>
                                    <p class="ml-1 text-gray-400">@</p>
                                    <p class="text-gray-400">{{ $replyComment->user->handle }} · 2 hours</p> 
                                @endif
                            </div>
                            <a href="/comments/{{ $replyComment->id }}">
                                <p class="text-md">{{ $replyComment->body }}</p>
                            </a>
                        </div>
                        <div class="flex justify-between pt-3 px-4 text-slate-400 w-full mr-12 border border-red-500">
                            <div class="flex hover:text-cyan-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                </svg>             
                            </div>
                            <div class="flex hover:text-cyan-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                </svg>          
                            </div>
                            <div class="flex hover:text-cyan-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>       
                            </div>
            
                            <div class="flex hover:text-cyan-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                </svg>       
                            </div>                              
                        </div>

                    </div>
                </article>
                @endforeach

            </section>

            
        </article>
    </div>
    
</x-layout>