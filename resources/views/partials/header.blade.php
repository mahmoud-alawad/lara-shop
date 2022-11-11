{{-- <div class="header bg-white" x-data="{ lan: 'EN', openSelect: false }">
    <div class="container">
        <div class="relative w-full pt-2 flex items-center justify-end ">
            <div class="flex pt-4 items-center h-full "><a class="mx-2" href=""><i
                        class="fa-brands fa-facebook-f"></i></a>
                <a class="mx-2" href=""><i class="fa-brands fa-youtube"></i></a>
                <a class="mx-2" href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="ml-2">
                <form action="/">
                    <div class="relative flex items-center border-b-2 border-gray-100 ">
                        <input type="text" name="search"
                            class="w-full rounded-lg z-0 focus:shadow-none focus:outline-none"
                            placeholder="{{ __('search') }}..." />
                        <div class="">
                            <button type="submit" class="p-2 text-black">
                                <i class="fa fa-search text-gray-400 hover:text-gray-500"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="relative" data-trigger-class="btn btn--subtle js-tab-focus">
                <form action="" class="language-picker__form ">
                    <div @click="openSelect = !openSelect" class="px-2 cursor-pointer"for="language-picker-select">
                        <i class="fa-solid fa-earth-europe"></i>
                    </div>
                </form>
            </div>
            <div x-show="openSelect"
                class="absolute -bottom-full -right-4 flex flex-col items-center bg-white border border-gray">
                @if (Route::currentRouteName() ?? false)
                    <a class="w-full px-3 hover:bg-dark-gray hover:text-white text-center"
                        href="{{ route(Route::currentRouteName(), 'en') }}">EN</a>
                    <a class="w-full px-3 hover:bg-dark-gray hover:text-white text-center"
                        href="{{ route(Route::currentRouteName(), 'it') }}">IT</a>
                @endif
            </div>
        </div>
        <div class="w-full py-2 flex justify-between">
            <div><a href="{{ route('home', app()->getLocale()) }}">logo</a></div>
            <ul class="flex items-center justify-start ">
                <li class="px-2 capitalize"><a href="{{ route('home', app()->getLocale()) }}"> {{ __('home') }}</a>
                </li>
                <li class="px-2 capitalize"><a href="/about"> {{ __('about') }}</a></li>
                <li class="px-2 capitalize"><a href="/contact"> {{ __('contact') }}
                    </a></li>
                <li class="px-2 capitalize"><a href="{{ route('products', app()->getLocale()) }}">
                        {{ __('products') }}
                    </a></li>
            </ul>
            <ul class="self-end flex items-center justify-start ">
                @auth
                    <li>
                        <div class="capitalize px-2">
                            {{ auth()->user()->name }}
                        </div>
                    </li>
                    <li>
                        <form class="inline" method="POST" action="{{ route('logout.user', app()->getLocale()) }}">
                            @csrf
                            <button type="submit" class="px-2 bg-primary text-white ">
                                <i class="fa-solid fa-door-closed"></i> {{ __('logout') }}
                            </button>
                        </form>
                    </li>
                @else
                    <li class="ml-2 capitalize bg-primary px-2 py-1 text-white rounded-sm">
                        <a href="{{ route('register', app()->getLocale()) }}" class=""><i
                                class="fa-solid fa-user-plus"></i> {{ __('registration') }}</a>
                    </li>
                    <li class="ml-2 capitalize bg-primary px-2 py-1 text-white rounded-sm">
                        <a href="{{ route('login', app()->getLocale()) }}" class=""><i
                                class="fa-solid fa-arrow-right-to-bracket"></i>
                            {{ __('login') }}</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</div> --}}
<header class="relative p-2 bg-white" x-data="{ lan: 'EN', openSelect: false, openMenu: false }">
    <div class="container flex items-center justify-between">
        <a @click.prevent="openMenu = !openMenu" href="" class="lg:hidden"><i
                :class="openMenu ? 'fa-solid fa-x':'fa-solid fa-bars-staggered'"></i></a>
        <div @click="openMenu = false" class="absolute top-full left-0 w-full h-screen -z-10"></div>
        <div class="-translate-x-full absolute top-full left-0 z-30 w-8/12 h-[calc(100vh-5rem)] p-6 flex flex-col items-start justify-between bg-white border-0.5 border-gray shadow-sm transition-all"
            :class="openMenu ? 'translate-x-0' : ''">
            <div class="flex flex-wrap">
                <a class="w-full p-1"href="{{ route('products', app()->getLocale()) }}">Shop <i class="ml-2 fa-solid fa-arrow-right"></i></a>
                <a class="w-full p-1"href="">our world <i class="ml-2 fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="mb-4">
                <div class="w-full p-1">
                    @auth
                    <form class="inline" method="POST" action="{{ route('logout.user', app()->getLocale()) }}">
                        @csrf
                        <button type="submit" class=" ">
                            <i class="fa-solid fa-door-closed"></i> {{ __('logout') }}
                        </button>
                    </form>
                    @else
                    <a class=""href="{{ route('login', app()->getLocale()) }}"><i class="mr-2 fa-regular fa-user"></i>Log in</a>
                    @endauth
                </div>
                <div class="w-full p-1">
                    <a class=""href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a class="ml-2"href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="hidden lg:block">
            <a class="w-full p-1"href="{{ route('products', app()->getLocale()) }}">Shop</a>
            <a class="w-full p-1"href="">our world</a>
        </div>
        <a href="{{ route('home', app()->getLocale()) }}"class="font-bold text-3xl">
            LOGO
        </a>
        <div class="flex items-center">
            <a class="mx-2"href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            <a class="mx-2"href="{{ route('account', app()->getLocale()) }}"><i class="fa-regular fa-user"></i></a>
            <a class="mx-2"href=""><i class="fa-solid fa-bag-shopping"></i></a>
            <div class="relative" data-trigger-class="btn btn--subtle js-tab-focus">
                <form action="" class="language-picker__form ">
                    <div @click="openSelect = !openSelect" class="px-2 cursor-pointer"for="language-picker-select">
                        <i class="fa-solid fa-earth-europe"></i>
                    </div>
                </form>
            </div>
            <div x-show="openSelect"
                class="absolute top-full right-0 w-1/3 z-30 flex flex-col items-center bg-white border-0.5 border-gray">
                @if (Route::currentRouteName() ?? false)
                    <a class="w-full px-3 hover:bg-dark-gray hover:text-white text-center"
                        href="{{ route(Route::currentRouteName(), 'en') }}">EN</a>
                    <a class="w-full px-3 hover:bg-dark-gray hover:text-white text-center"
                        href="{{ route(Route::currentRouteName(), 'it') }}">IT</a>
                @endif
            </div>
        </div>
    </div>
</header>
