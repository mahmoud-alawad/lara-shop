<div class="w-1/5 min-h-screen h-full top-0 left-0 bg-slate-800 text-white">
    <a href="{{route('dashboard',app()->getLocale())}}"class="block w-full p-3 bg-slate-200  text-black text-md ">Main</a>
    <div class="mt-8 pl-6 flex flex-col">
        <a class="text-white" href="{{ route('dashboard', app()->getLocale()) }}"><i class="mr-2 fa-solid fa-store"></i>Products </a>
        <a class="text-white" href="{{ route('dashboard.createProduct', app()->getLocale()) }}"><i
                class="mr-2 fa-solid fa-store"></i>create products</a>
    </div>
</div>
