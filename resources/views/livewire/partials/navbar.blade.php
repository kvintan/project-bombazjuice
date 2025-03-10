<header class="bg-transparent">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">BomBazJuice</span>
                <!-- Adjust image size for different screen sizes -->
                <img class="w-[40vw] sm:w-[30vw] lg:w-[10vw]" src="{{ asset('images/logo-navbar-final.svg') }}"
                    alt="Logo Navbar">
            </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-7 relative z-[50]">
            @component('livewire.partials.nav-link', [
                'href' => '/',
                'active' => request()->is('/'),
            ])
                Home
            @endcomponent

            @component('livewire.partials.nav-link', [
                'href' => '/menu',
                'active' => request()->is('menu'),
            ])
                Menu
            @endcomponent

            @component('livewire.partials.nav-link', [
                'href' => '/juicelab',
                'active' => request()->is('juicelab'),
            ])
                JuiceLab
            @endcomponent

            @component('livewire.partials.nav-link', [
                'href' => '/fruitstats',
                'active' => request()->is('fruitstats'),
            ])
                FruitStats
            @endcomponent

            @component('livewire.partials.nav-link', [
                'href' => '/contact-us',
                'active' => request()->is('contact-us'),
            ])
                Contact Us
            @endcomponent

            @component('livewire.partials.nav-link', [
                'href' => '/store',
                'active' => request()->is('store'),
            ])
                Store
            @endcomponent
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end z-[30] relative">
            <a wire:navigate href="/cart">
                <img class="pr-6 
                   hover:brightness-[50%] relative filter invert"
                    src="{{ asset('images/cart-navbar.svg') }}" alt="Logo Cart Navbar">
            </a>
            <span id="cart-count" wire:navigate
                class="{{ Request::is('') ? 'filter' : '' }} px-1 rounded-full w-[1.5vw] ml-[-2vw] mr-[1vw] text-center text-lg font-medium text-black flex items-center justify-center">
                {{ $total_count }}
            </span>
            {{-- <a wire:navigate href="{{ route('profile.redirect') }}"> --}}
            @guest
                <a wire:navigate href="/login">
                    <img class="filter invert
                   hover:brightness-[50%] relative"
                        src="{{ asset('images/account-navbar.svg') }}" alt="Logo Account Navbar">
                </a>
            @endguest
        </div>

        @auth
            <div class="relative group mr-[-4vw] z-[30]">
                <button type="button"
                    class="flex items-center sm:ml-[-17vw] lg:ml-[0vw] ml-[-25vw] w-full text-black hover:text-underline font-medium font-afacad">
                    {{ auth()->user()->name }}
                    <svg class="ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div
                    class="hidden w-[20vw] sm:ml-[-20vw] lg:w-auto sm:w-[15vw] lg:ml-[0vw] ml-[-20vw] group-hover:flex flex-col gap-2 hs-dropdown-menu transition-opacity duration-150 opacity-0 group-hover:opacity-100 absolute top-full mt-0 bg-white shadow-md rounded-lg p-2 pointer-events-auto">
                    <a wire:navigate
                        class="text-black font-afacad flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm hover:bg-gray-300 text-[1vw]"
                        href="/history">
                        My Orders
                    </a>
                    <a wire:navigate
                        class="text-black flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm font-afacad hover:bg-gray-300 text-[1vw]"
                        href="/profile">
                        My Account
                    </a>
                    <a wire:navigate
                        class="text-black flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm font-afacad hover:bg-gray-300 text-[1vw]"
                        href="/logout">
                        Logout
                    </a>
                </div>
            </div>

        @endauth

    </nav>


    <!-- Mobile menu, show/hide based on menu open state. -->
    <div x-data="{ open: false }" class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Hamburger Menu Button (Only One Hamburger Button) -->
        <div class="flex lg:hidden absolute right-[5vw] top-[4vh] z-50" x-show="!open">
            <button @click="open = !open" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <svg class="size-6 scale-[150%] sm:scale-[150%]" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <!-- Background backdrop, show/hide based on menu state -->
        <div x-show="open" class="fixed inset-0 z-10 bg-gray-500 opacity-50"
            x-transition:enter="transition-opacity ease-in-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-50" x-transition:leave="transition-opacity ease-in-out duration-300"
            x-transition:leave-start="opacity-50" x-transition:leave-end="opacity-0"></div>

        <!-- Mobile Menu -->
        <div x-show="open"
            class="fixed inset-y-0 right-0 z-[100] w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
            x-transition:enter="transition transform ease-in-out duration-300"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform ease-in-out duration-300" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full">

            <!-- Header with logo and close button -->
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">BomBazJuice</span>
                    <img src="{{ asset('images/logo-navbar-final.svg') }}" alt="Logo">
                </a>
                <!-- Close Button -->
                <button @click="open = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Menu Items -->
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a wire:navigate href="/"
                            class="block rounded-lg py-2 pl-[2vw] font-arimo pr-3 text-base font-bold text-gray-900 hover:bg-gray-50">Home</a>
                        <a wire:navigate href="/menu"
                            class="block rounded-lg py-2 pl-[2vw] font-arimo pr-3 text-base font-bold text-gray-900 hover:bg-gray-50">Menu</a>
                        <a wire:navigate href="/juicelab"
                            class="block rounded-lg py-2 pl-[2vw] font-arimo pr-3 text-base font-bold text-gray-900 hover:bg-gray-50">JuiceLab</a>
                        <a wire:navigate href="/fruitstats"
                            class="block rounded-lg py-2 pl-[2vw] font-arimo pr-3 text-base font-bold text-gray-900 hover:bg-gray-50">FruitStats</a>
                        <a wire:navigate href="/contact-us"
                            class="block rounded-lg py-2 pl-[2vw] font-arimo pr-3 text-base font-bold text-gray-900 hover:bg-gray-50">Contact
                            Us</a>
                        <a wire:navigate href="/store"
                            class="block rounded-lg py-2 pl-[2vw] font-arimo pr-3 text-base font-bold text-gray-900 hover:bg-gray-50">Store</a>
                    </div>

                    <!-- Login Link -->
                    <div class="py-6">
                        <a wire:navigate href="/cart"
                            class="-mx-3 block rounded-lg px-3 font-arimo py-2.5 pl-[5vw] text-base font-bold text-gray-900 sm:pl-[3.5vw] hover:bg-gray-50">Cart</a>
                        <a wire:navigate href="/login"
                            class="-mx-3 block rounded-lg px-3 font-arimo py-2.5 pl-[5vw] text-base font-bold text-gray-900 sm:pl-[3.5vw] hover:bg-gray-50">Log
                            in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</header>
