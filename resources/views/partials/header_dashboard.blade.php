<div class="w-full bg-red-50">
    <div class="px-4 flex justify-end">
        <ul class="flex items-center">
            @auth
            <li>{{__('welcome')}}  <span class="underline">{{ auth()->user()->name }}</li>
                <li>
                    <form class="inline" method="POST" action="{{ route('logout.user', app()->getLocale()) }}">
                        @csrf
                        <button type="submit" class="px-2 bg-primary text-white ">
                            <i class="fa-solid fa-door-closed"></i> {{ __('logout') }}
                        </button>
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</div>