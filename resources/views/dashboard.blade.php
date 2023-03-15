<x-app-layout>
    <x-slot name="header">
        <nav class="flex items-center justify-between flex-wrap bg-white p-6">
            <div class="flex items-center flex-shrink-0 text-gray-900 mr-6">
                <span class="font-semibold text-xl tracking-tight">My Blog</span>
            </div>
            <div class="block lg:hidden">
                <button
                    class="navbar-burger flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-gray-900">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path
                            d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="navbar-menu hidden lg:flex lg:items-center lg:w-auto">
                <a href="{{ route('blog.index') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-gray-900 hover:text-gray-900 mr-10">
                    Home
                </a>
                @guest
                <a href="{{ route('login') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-gray-900 hover:text-gray-900">
                    Login
                </a>
               
                @endguest
            </div>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
