<div class="w-screen bg-white">
    <div class="container flex justify-between items-center p-3">
        <ul class="flex items-center justify-start">
            <li class="px-2 capitalize"><a href="/"> {{ __('home') }}</a></li>
            <li class="px-2 capitalize"><a href="/about"> {{ __('about') }}</a></li>
            <li class="px-2 capitalize"><a href="/contact"> {{ __('contact') }}
                </a></li>
            <li class="px-2 capitalize"><a href="{{ route('products', app()->getLocale()) }}"> {{ __('products') }}
                </a></li>
        </ul>
        <div class="flex list-none">
            @auth
                <li>
                    <span class="font-medium uppercase tracking-widest">
                        __('welcome') {{ auth()->user()->name }}
                    </span>
                </li>
            @else
                <li class="ml-2 capitalize bg-primary px-4 py-2 text-white rounded-sm">
                    <a href="{{ route('register', app()->getLocale()) }}" class=""><i
                            class="fa-solid fa-user-plus"></i> {{ __('registration') }}</a>
                </li>
                <li class="ml-2 capitalize bg-primary px-4 py-2 text-white rounded-sm">
                    <a href="{{ route('login', app()->getLocale()) }}" class=""><i
                            class="fa-solid fa-arrow-right-to-bracket"></i>
                        {{ __('login') }}</a>
                </li>
            @endauth
        </div>
        @auth
            <div>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-primary text-white rounded-md">
                        <i class="fa-solid fa-door-closed"></i> {{ __('logout') }}
                    </button>
                </form>
            </div>
        @endauth
    </div>
</div>
