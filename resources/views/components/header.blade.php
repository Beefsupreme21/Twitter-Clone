<header class="sticky top-0 h-screen">
    <div class="text-white flex flex-col px-3 justify-between m-auto" style="height:100vh">
        <div class="text-xl pt-4 xl:items-start">
            <div class="fa-brands fa-twitter fa-xl mb-6 pl-2 hover:text-gray-500"></div>
            <a href="/">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <x-svg.home class="w-8 h-8" />
                    <p class="pl-4 hidden xl:block">Home</p>
                </div>
            </a>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <x-svg.explore class="w-8 h-8" />
                    <p class="pl-4 hidden xl:block">Explore</p>
                </div>
            </a>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <x-svg.notifications class="w-8 h-8" />
                    <p class="pl-4 hidden xl:block">Notifications</p>
                </div>
            </a>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <x-svg.messages class="w-8 h-8" />
                    <p class="pl-4 hidden xl:block">Messages</p>
                </div>
            </a>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <x-svg.bookmarks class="w-8 h-8" />
                    <p class="pl-4 hidden xl:block">Bookmarks</p>
                </div>
            </a>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <x-svg.lists class="w-8 h-8" />
                    <p class="pl-4 hidden xl:block">Lists</p>
                </div>
            </a>
            @auth
                <a href="/users/{{ auth()->user()->id }}/edit">
                    <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                        <x-svg.profile class="w-8 h-8" />
                        <p class="pl-4 hidden xl:block">Profile</p>
                    </div>
                </a>
            @else
                <a href="/login">
                    <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                        <x-svg.profile class="w-8 h-8" />
                        <p class="pl-4 hidden xl:block">Profile</p>
                    </div>
                </a>
            @endauth
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <x-svg.more class="w-8 h-8" />
                    <p class="pl-4 hidden xl:block">More</p>
                </div>
            </a>
            <a href="#">
                <div>
                    <button class="hidden bg-blue-400 text-xl text-white font-bold mt-4 mr-12 py-3 px-20 rounded-full xl:block hover:bg-blue-500">
                        Tweet
                    </button>
    
                    <button class="bg-blue-400 mt-4 p-2 rounded-full xl:hidden hover:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>              
                    </button>
                </div>
            </a>
        </div>
        @auth
            <div>
                <a href="/">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="hidden bg-black text-white font-bold mt-4 py-3 px-12 rounded-full xl:block hover:bg-blue-500">
                            Sign Out
                        </button>
                        <button class="bg-black mt-4 p-2 rounded-full xl:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>              
                        </button>
                    </form>
                </a>
                <div class="text-white p-2 my-3 flex justify-between items-center rounded-full hover:bg-slate-700">
                    <div class="flex">
                        <div class="w-12 rounded-full img-background">
                            <img src="{{ auth()->user()->image ? asset('storage/images/'. auth()->user()->image) : asset('images/default_profile.png') }}" class="rounded-full w-12" alt="">
                        </div>
                        <div class="pl-3 hidden xl:block">
                            <p class="font-bold">{{ auth()->user()->name }}</p>
                            <div class="flex text-slate-400">
                                <p>@</p>
                                <p>{{ auth()->user()->handle }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden xl:block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>                  
                    </div>
                </div>
            </div>
        @else
            <a href="/login">
                <div class="mb-6">
                    <button class="hidden bg-black text-xl font-bold py-3 px-10 rounded-full xl:block hover:bg-blue-500">
                        Login/Register
                    </button>
                    <button class="bg-black mt-4 p-2 rounded-full xl:hidden hover:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>              
                    </button>
                </div>
            </a>
        @endauth
    </div>
</header>
