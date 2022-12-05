<header class="fondo sticky top-0">
    <div class="py-0.5 borde">

    </div>
    <div class="container flex items-center h-20">
        <a href="/dashboard">
        <x-jet-application-mark class="block h-9 w-auto" />
        </a>
        <!-- Settings Dropdown -->
        <div class="ml-auto">
            @auth
            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">

                    <button
                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover borde py-0.5 px-0.5 colortext" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </button>

                </x-slot>

                <x-slot name="content" class="colortext">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>

                    
                    <x-jet-dropdown-link href="{{ route('admin.index') }}">
                        {{ __('Administrator') }}
                    </x-jet-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                    </form>
                </x-slot>
            </x-jet-dropdown>

            @else
            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <i class="fas fa-user-circle text-3xl colortext cursor-pointer"></i>
                </x-slot>

                <x-slot name="content">

                    <x-jet-dropdown-link href="{{ route('login') }}">
                        {{ __('Login') }}
                    </x-jet-dropdown-link>

                    
                    <x-jet-dropdown-link href="{{ route('register') }}">
                        {{ __('Register') }}
                    </x-jet-dropdown-link>
                </x-slot>

            </x-jet-dropdown>
            @endauth
            
        </div>
    </div>

    <div class="py-0.5 borde">

    </div>
</header>
