{{-- <header class="bg-slate-50 shadow-lg sticky top-0 z-50">
    <div class="container mx-auto w-full lg:px-12 py-4 px-4 flex items-center justify-between">
        <div class="title-search flex items-center w-full bg-red-500">
            <div class="icon pr-4">
                <a href="/" class="header-title flex items-center gap-2 w-full h-full">
                    <img src="{{ asset('images/static/tenizenmart.png') }}" alt="connexmart" class="h-12">
                    <p class="font-semibold text-lg text-[#303fe2] lg:block hidden">Tenizen Mart</p>
                </a>
            </div>

            <div class="search relative ml-3 bg-orange-500">
                <div class="flex items-center w-full">
                    <svg class="absolute left-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="#9196a3" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                    <input
                        class="py-2 pl-9 pr-4 lg:w-72 w-full bg-transparent focus:bg-white focus:outline-none focus:border-[1.5px] focus:border-[#003034] border-gray-300 border-[1.5px] rounded-lg"
                        type="text" placeholder="Find In TenizenMart">

                </div>
            </div>
        </div>
        <div class="header-charts flex items-center gap-6 bg-blue-500">
            @if (Auth::user())
                <a href="{{ Auth::user() ? route('cart.index') : '/' }}" class="carts relative lg:block hidden">
                    @if (Auth::user() && count(Auth::user()->transcations) >= 1)
                        <div class="pulse w-3 h-3 animate-pulse bg-blue-500 rounded-full absolute right-0 top-0">
                        </div>
                    @endif
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#303fe2"
                        class="bi bi-cart" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                </a>
            @endif
            @if (!Auth::user())
                <div class="header-menu lg:flex hidden items-center gap-4 font-semibold">
                    <button id="login-btn"
                        class="border-[1.8px] border-slate-600 py-2 px-4 rounded-lg hover:opacity-80">Login</button>
                    <button class="bg-[#303fe2] text-white py-2 px-4 rounded-lg hover:opacity-80">Sign Up</button>
                </div>
            @else
                <div class="if-logined  lg:block hidden">
                    <div class="wrapper flex items-center gap-5">
                        <a href="{{ route('profile') }}" class="user  flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#303fe2"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <h1 class="text-slate-600">{{ Auth::user()->name }}</h1>
                        </a>
                        <form action="{{ route('logout') }}" method="post" class="logout flex items-center">
                            @csrf
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#003034"
                                    class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endif
        </div>

    </div>
</header> --}}
<header class="bg-slate-50 shadow-lg sticky top-0 z-50">
    <div class="container mx-auto w-full lg:px-12 py-4 px-4 flex items-center justify-between">
        <div class="titleiconsearch flex items-center">
            <div class="icon pr-4 flex-none">
                <a href="/" class="header-title flex items-center gap-2 w-full h-full">
                    <img src="{{ asset('images/static/tenizenmart.png') }}" alt="connexmart" class="h-12">
                    <p class="font-semibold text-lg text-[#303fe2] lg:block hidden">Tenizen Mart</p>
                </a>
            </div>
            <div class="search relative ml-3 basis-full">
                <div class="flex items-center w-full">
                    <svg class="absolute left-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="#9196a3" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                    <input
                        class="py-2 pl-9 pr-4 lg:w-72 w-full bg-transparent focus:bg-zinc-200 bg-zinc-100 focus:outline-none focus:border-[1.5px]border-gray-300 border-[1.5px] rounded-lg"
                        type="text" placeholder="Find In TenizenMart">

                </div>
            </div>
            <span class="material-symbols-rounded text-[#303fe2] ml-4 text-[32px] lg:hidden block">
                notifications
            </span>
        </div>

        <div class="header-charts flex items-center gap-6">
            @if (Auth::user())
                <a href="{{ Auth::user() ? route('cart.index') : '/' }}" class="carts relative lg:block hidden">
                    @if (Auth::user() && count(Auth::user()->transcations) >= 1)
                        <div class="pulse w-3 h-3 animate-pulse bg-blue-500 rounded-full absolute right-0 top-0">
                        </div>
                    @endif
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#303fe2"
                        class="bi bi-cart" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                </a>
            @endif
            @if (!Auth::user())
                <div class="header-menu lg:flex hidden items-center gap-4 font-semibold">
                    <button id="login-btn"
                        class="border-[1.8px] border-slate-600 py-2 px-4 rounded-lg hover:opacity-80">Login</button>
                    <button class="bg-[#303fe2] text-white py-2 px-4 rounded-lg hover:opacity-80">Sign Up</button>
                </div>
            @else
                <div class="if-logined  lg:block hidden">
                    <div class="wrapper flex items-center gap-5">
                        <a href="{{ route('profile') }}" class="user  flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#303fe2"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <h1 class="text-slate-600">{{ Auth::user()->name }}</h1>
                        </a>
                        <form action="{{ route('logout') }}" method="post" class="logout flex items-center">
                            @csrf
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#303fe2"
                                    class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>


</header>
