<header class="bg-transparent">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">BomBazJuice</span>
                <img class="h-[3.5vw] w-auto" src="{{ asset('images/logo-navbar.svg') }}" alt="Logo Navbar">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
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
            <div class="relative group mr-[-4vw]">
                <button type="button"
                    class="flex items-center w-full text-black hover:text-underline font-medium font-afacad">
                    {{ auth()->user()->name }}
                    <svg class="ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div
                    class="hidden w-[8vw] group-hover:flex flex-col gap-2 hs-dropdown-menu transition-opacity duration-150 opacity-0 group-hover:opacity-100 absolute top-full mt-0 bg-white shadow-md rounded-lg p-2 pointer-events-auto">
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
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div
            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <div class="-mx-3">
                            <button type="button"
                                class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50"
                                aria-controls="disclosure-1" aria-expanded="false">
                                Product
                                <!--
                    Expand/collapse icon, toggle classes based on menu open state.
  
                    Open: "rotate-180", Closed: ""
                  -->
                                <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                    data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- 'Product' sub-menu, show/hide based on menu state. -->
                            <div class="mt-2 space-y-2" id="disclosure-1">
                                <a href="#"
                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Analytics</a>
                                <a href="#"
                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Engagement</a>
                                <a href="#"
                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Security</a>
                                <a href="#"
                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Integrations</a>
                                <a href="#"
                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Automations</a>
                                <a href="#"
                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Watch
                                    demo</a>
                                <a href="#"
                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Contact
                                    sales</a>
                            </div>
                        </div>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                    </div>
                    <div class="py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                            in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
