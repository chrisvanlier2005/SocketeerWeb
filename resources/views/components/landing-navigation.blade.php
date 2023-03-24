<nav class="flex justify-evenly  items-center p-5 fixed top-0 w-full z-[50] h-fit">
    <div class="text-xl font-semibold">
        Socketeer
    </div>
    <ul class="flex gap-4 [&>*]:font-semibold">
        <li><a href="#home">Home</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#sdk">SDK</a></li>
    </ul>
    <div>
        @auth
            <a href="{{route("dashboard")}}">
                <x-buttons.primary-button>
                    Dashboard
                </x-buttons.primary-button>
            </a>
        @else
            <a href="{{route('register')}}">
                <x-buttons.secondary-button>Register</x-buttons.secondary-button>
            </a>
            <a href="{{route('login')}}">
                <x-buttons.primary-button>Log in</x-buttons.primary-button>
            </a>
        @endauth
    </div>
</nav>
