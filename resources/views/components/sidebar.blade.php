<div class="mx-6 mt-2 lg:max-w-[350px] xl:w-[350px] sticky top-2">
    <form action="/posts/">
        @csrf
        <div class="relative">
            <div class="absolute top-4 left-3">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input
                type="text"
                name="search"
                class="search-background text-xl text-white py-3 pl-12 rounded-full w-full"
                placeholder="Search Twitter"
            />
        </div>
    </form>

    <div class="whats-happening-background rounded-lg mt-4">
        <div>
            <p class="text-xl text-white font-bold p-4">What's happening</p>
            <div class="hover:bg-slate-700 p-4 cursor-pointer">
                <p class="text-slate-400 text-sm">Television · LIVE</p>
                <p class="font-bold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, harum.</p>
            </div>
            <div class="hover:bg-slate-700 p-4 cursor-pointer">
                <div class="flex">
                    <p class="font-bold text-white text-sm">Queen Elizabeth II</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>
                    <p class="text-slate-400 text-sm"> · 2 hours ago</p>
                </div>
                <p class="font-bold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus reiciendis tenetur ut?</p>
            </div>
            <div class="hover:bg-slate-700 p-4 cursor-pointer">
                <div class="flex text-sm items-center">
                    <img src="{{asset('images/wsj.jpg')}}" class="rounded-full w-5 h-5" alt="">
                    <p class="font-bold text-white">&nbsp;The Wall Street Journal</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>
                    <p class="text-slate-400"> · Last night</p>
                </div>
                <p class="font-bold text-white">Investigation finds that chess grandmaster 'likely cheated' more than 100 times</p>
            </div>
        </div>
        <div class="hover:bg-slate-700 p-4">
            <a href="#" class="text-cyan-600 ">Show more</a>
        </div>
    </div>

    <div class="whats-happening-background rounded-lg mt-4">
        <div class="text-white font-bold p-4">
            <p class="text-xl">Who to follow</p>
        </div>

        <div class="text-white py-3 px-2 flex justify-between hover:bg-slate-700">
            <a href="#" class="flex">
                <div>
                    <div class="w-12 rounded-full img-background">
                        <img src="{{asset('images/rihanna.jpg')}}" class="rounded-full w-12" alt="">
                    </div>
                </div>
                <div class="pl-3">
                    <div class="flex">
                        <p class="font-bold">Rihanna</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                        </svg>
                    </div>

                    <div class="flex text-slate-400 leading-none">
                        <p>@</p>
                        <p>Rihanna</p>
                    </div>
                </div>
            </a>

            <div>
                <button class="bg-slate-300 text-sm text-black font-bold rounded-full px-4 py-2">
                    Follow
                </button>
            </div>
        </div>

        <div class="text-white py-3 px-2 flex justify-between hover:bg-slate-700">
            <a href="#" class="flex">
                <div>
                    <div class="w-12 rounded-full img-background">
                        <img src="{{asset('images/obama.jpg')}}" class="rounded-full w-12" alt="">
                    </div>
                </div>
                <div class="pl-3">
                    <p class="font-bold">Barack Obama</p>
                    <div class="flex text-slate-400 leading-none">
                        <p>@</p>
                        <p>BarackObama</p>
                    </div>
                </div>
            </a>

            <div>
                <button class="bg-slate-300 text-sm text-black font-bold rounded-full px-4 py-2">
                    Follow
                </button>
            </div>
        </div>

        <div class="text-white py-3 px-2 flex justify-between hover:bg-slate-700">
            <a href="#" class="flex">
                <div>
                    <div class="w-12 rounded-full img-background">
                        <img src="{{asset('images/snoop.jpg')}}" class="rounded-full w-12" alt="">
                    </div>
                </div>
                <div class="pl-3">
                    <p class="font-bold">Snoop Dogg</p>
                    <div class="flex text-slate-400 leading-none">
                        <p>@</p>
                        <p>SnoopDogg</p>
                    </div>
                </div>
            </a>

            <div>
                <button class="bg-slate-300 text-sm text-black font-bold rounded-full px-4 py-2">
                    Follow
                </button>
            </div>
        </div>
        <div class="hover:bg-slate-700 p-4">
            <a href="#" class="text-cyan-600">Show more</a>
        </div>
    </div>

    <div class="text-slate-400 text-sm mt-4 pb-24 px-2">
        <a href="#" class="pr-2 hover:underline">Terms of Service</a>
        <a href="#" class="pr-2 hover:underline">Privacy Policy</a>
        <a href="#" class="pr-2 hover:underline">Cookie Policy</a>
        <a href="#" class="pr-2 hover:underline">Accessibility</a>
        <a href="#" class="pr-2 hover:underline">Ads info</a>
        <a href="#" class="hover:underline">More</a>
        <div>© 2022 Twitter, Inc.</div>
    </div>


</div>


