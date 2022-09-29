<x-layout>

    <div class="container mx-auto md:w-[600px]  ">
        <div class="flex border-x border-gray-700 items-center text-white font-bold text-xl p-2 sticky top-0 z-10 main-background opacity-90 backdrop-blur">
            <a href="/">
                <i class="fa-solid fa-arrow-left p-2 rounded-full hover:bg-slate-700"></i>
            </a>
            <h1 class="ml-6 opacity-100">Thread</h1>
        </div>

        <div class="flex justify-between w-full border-x border-gray-700 px-2 py-1 text-white">
            <div class="flex">
                <div class="w-12 rounded-full img-background">
                    <img src="https://i.pravatar.cc/100?u={{ $post->user->id }}" class="rounded-full w-12 shrink-0" alt="">
                </div>
                <div class="ml-2">
                    <div class="flex">
                        <a href="/{{ $post->user->name }}" class="font-bold hover:underline">{{ $post->user->name }}</a> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                        </svg>
                    </div>
                    <div class="flex text-gray-400">
                        <p>@</p>
                        <p>{{ $post->user->handle }}</p>
                    </div>
                </div>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>    
            </div>
        </div>

        <article class="border-b border-x border-gray-700 px-3 py-3 text-white text-base">

            <div class="px-2">
                <a href="/posts/{{$post->id}}">
                    <p class="text-2xl">{{ $post->content }}</p>
                </a>
                <p class="text-gray-400 py-4"> {{ $post->created_at }} · Twitter for iPhone</p> 
            </div>

            <div class="border-y border-gray-700">
                <p class="py-3">{{ $post->likes }}<span> Likes</span></p>
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

            <div class="border-y border-gray-700">
                <p class="py-3">Tweet your reply</p>
            </div>

            <section>
                @foreach ($post->comments as $comment)
                    <article class="flex m-4">
                        <div class="mr-3 flex-shrink-0">
                            <img src="https://i.pravatar.cc/100?u={{ $comment->id }}" class="rounded-full w-12 shrink-0" alt="">
                        </div>

                        <div>
                            <header>
                                <h3>{{ $comment->user->name }}</h3>

                                <p class="text-xs">
                                    Posted
                                    <time>{{ $comment->created_at }}</time>
                                </p>
                            </header>

                            <p>
                                {{ $comment->body }}
                            </p>
                        </div>
                    </article>
                @endforeach

            </section>
            
        </article>
    </div>
    
</x-layout>