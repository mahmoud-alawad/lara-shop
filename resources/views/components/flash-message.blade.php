@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed z-30 top-1/4 left-1/2 transform -translate-x-1/2  px-48 py-12 bg-light-gray text-black rounded-md">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
