<div>
    <div class="w-full h-[70vh] bg-[#FDF6E1] relative">
        <img class="relative ml-[15vw]" src="{{ asset('images/menu-tropical-sunny.svg') }}" alt="Menu Tropical Sunny">
        <img class="ml-[50vw] mt-[-53vh] relative" src="{{ asset('images/menu-best-seller.svg') }}" alt="Menu Best Seller">
        <img class="ml-[50vw] mt-[5vh] relative" src="{{ asset('images/menu-tropical-sunny-splash.svg') }}"
            alt="Menu Tropical Sunny Splash">
        <img class="ml-[50vw] mt-[5vh] relative" src="{{ asset('images/menu-tropical-desc.svg') }}"
            alt="Menu Tropical Description">
        <a wire:navigate href="/menu">
            <p
                class="bg-[#6FE20D] text-white font-afacad text-[1.2vw] w-[10vw] h-[7vh] relative mt-[3vh] flex items-center justify-center font-bold rounded-[0.5vw] ml-[50vw]">
                Order Now
            </p>
        </a>
    </div>
    
    <div class="w-full h-[3vh] bg-white relative">
    </div>

    <div class="w-full h-[70vh] bg-[#FFF1EB] relative">
        <img class="relative ml-[8vw]" src="{{ asset('images/menu-berry-banana.svg') }}" alt="Menu Berry Banana">
        <img class="relative ml-[60vw] mt-[-70vh]" src="{{ asset('images/menu-citrus-berry.svg') }}"
            alt="Menu Citrus Berry">
        <img class="relative ml-[37vw] mt-[-20vh]" src="{{ asset('images/menu-best-duo.svg') }}" alt="Menu Best Duo">
        <div class="w-[20vw] h-[8vh] relative ml-[39vw] mt-[15vh]">
            <img src="{{ asset('images/menu-berry-banana-bliss.svg') }}" alt="Menu Berry Banana Bliss">
            <p class="font-afacad text-[1.5vw] relative">Strawberry + Banana</p>
        </div>
        <div class="w-[20vw] h-[8vh] relative ml-[70vw] mt-[-10vh]">
            <img src="{{ asset('images/menu-citrus-berry-zing.svg') }}" alt="Menu Citrus Berry Zing">
            <p class="font-afacad text-[1.5vw] relative">Orange + Strawberry</p>
        </div>
    </div>

    <section class="py-8 antialiased md:py-12 mt-[-6vh]">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">

                @foreach ($first12 as $product)
                    <div class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 h-[55vh]">
                        <div class="h-[25vh] w-full relative mb-[2vh]">
                            <img class="relative ml-[2vw] mt-[-3vh]" src="{{ url('storage', $product->images[0]) }}"
                                alt="{{ $product->name }}">
                        </div>
                        <div class="pt-6">
                            <div class="mb-4 flex items-center justify-between gap-4">
                                <div class="flex items-center justify-end gap-1">
                                    <div id="tooltip-quick-look" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                        data-popper-placement="top">
                                        Quick look
                                        <div class="tooltip-arrow" data-popper-arrow=""></div>
                                    </div>


                                    <div id="tooltip-add-to-favorites" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                        data-popper-placement="top">
                                        Add to favorites
                                        <div class="tooltip-arrow" data-popper-arrow=""></div>
                                    </div>
                                </div>
                            </div>

                            <a wire:navigate href="#"
                                class="text-[1.5vw] font-semibold leading-tight text-black font-afacad hover:underline">{{ $product->name }}</a>

                            <div class="mt-2 flex items-center gap-2">
                                <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">
                                    {{ $product->description }}</p>
                            </div>

                            <div class="mt-4 flex items-center justify-between gap-4">
                                <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                                <p
                                    class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                    25.</p>
                                <p
                                    class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                    000</p>

                                <button wire:click.prevent='addToCart({{ $product->id }})' type="button"
                                    class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300 w-[10vw] h-[5vh]">
                                    <span wire:loading.remove wire:target='addToCart({{ $product->id }})'>
                                        Add Item
                                    </span>
                                    <span wire:loading wire:target='addToCart({{ $product->id }})'>
                                        Adding...
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div>
            <div class="bg-gradient-to-b from-transparent to-[#F9B401] min-screen h-[150vh] relative"></div>
            <div class="relative mt-[-150vh]">
                <img class="relative ml-[45vw] mt-[10vh]" src="{{ asset('images/menu-lets-try.svg') }}"
                    alt="Menu Lets Try">
                <img class="relative ml-[37vw] mt-[3vh]" src="{{ asset('images/menu-fresh-pair-juice.svg') }}"
                    alt="Menu Fresh Pair Juice">


                <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 relative mt-[5vh]">
                    <!-- Heading & Filters -->
                    <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">

                        @foreach ($next8 as $product)
                            <div
                                class="w-[19vw] rounded-[0.5vw] p-6 shadow-lg border-[0.05vw] border-gray-500 bg-white h-[55vh]">
                                <div class="h-[25vh] w-full relative mb-[2vh]">
                                    <a wire:navigate href="#">
                                        <img class="relative ml-[2vw] mt-[-3vh]"
                                            src="{{ url('storage', $product->images[0]) }}"
                                            alt="{{ $product->name }}">
                                    </a>
                                </div>
                                <div class="pt-6">
                                    <div class="mb-4 flex items-center justify-between gap-4">
                                        <div class="flex items-center justify-end gap-1">
                                            <div id="tooltip-quick-look" role="tooltip"
                                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                                data-popper-placement="top">
                                                Quick look
                                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                                            </div>


                                            <div id="tooltip-add-to-favorites" role="tooltip"
                                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                                data-popper-placement="top">
                                                Add to favorites
                                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                                            </div>
                                        </div>
                                    </div>

                                    <a wire:navigate href=""
                                        class="text-[1.5vw] font-semibold leading-tight text-black font-afacad">{{ $product->name }}</a>

                                    <div class="mt-2 flex items-center gap-2">
                                        <p class="font-afacad text-[1.2vw] text-[#565E6C] text-wrap w-[20vw]">
                                            {{ $product->description }}</p>
                                    </div>

                                    <div class="mt-4 flex items-center justify-between gap-4">
                                        <p class="text-2xl font-extrabold font-arimo leading-tight text-black">IDR</p>
                                        <p
                                            class="text-2xl font-arimo ml-[-0.5vw] relative font-extrabold leading-tight text-black">
                                            45.</p>
                                        <p
                                            class="text-xl font-arimo ml-[-1vw] mt-[0.5vh] font-extrabold leading-tight text-black">
                                            000</p>

                                        <button wire:click.prevent='addToCart({{ $product->id }})' type="button"
                                            class="inline-flex items-center rounded-[2vw] bg-[#1C4816] px-5 py-2.5 text-sm font-medium text-white hover:brightness-[80%] focus:outline-none focus:ring-4  focus:ring-primary-300">
                                            Add Item
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>