<div>
    <section class="py-8 antialiased md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 mt-[-7vh]">
            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex-col lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl mb-[5vh]">
                    <div class="space-y-6">
                        <div class="text-black bg-transparent p-4 shadow-sm md:p-6 w-[70vw] ml-[-10vw]">
                            @forelse ($cart_items as $item)
                                <div wire:key='{{ $item['product_id'] }}'
                                    class="space-y-4 w-[77vw] md:flex md:items-center md:justify-between md:gap-6 md:space-y-0 border-t-[0.2vh] border-b-[0.2vh] border-black pt-[2vh] pb-[2vh] h-[15vh]">
                                    <!-- Image Section -->
                                    <a wire:navigate href="#" class="shrink-0 md:order-1">
                                        <img class="h-[12vh] w-[6vw] border-[0.2vw] border-[#698531] rounded-[0.7vw]"
                                            src="{{ url('storage', $item['image']) }}" alt="{{ $item['name'] }}">
                                    </a>

                                    <!-- Product Info Section -->
                                    <div class="flex-1 space-y-1 md:order-2 md:max-w-md">
                                        <a wire:navigate href=""
                                            class="font-bold text-2xl text-black ml-[-10vw]">{{ $item['name'] }}</a>
                                        {{-- <p class="text-lg text-black ml-[-10vw] font-afacad">{{ $item['note'] }}</p> --}}
                                    </div>

                                    <!-- Quantity and Price Section -->
                                    <div class="flex items-center gap-4 md:order-3">
                                        <p class="text-base font-bold text-black ml-[-30vw]">
                                            {{ Number::currency($item['unit_amount'], 'IDR') }}</p>
                                        <!-- Quantity Control -->
                                        <div
                                            class="flex items-center w-[7.3vw] h-[4vh] pl-[1vw] rounded-[0.7vw] border border-black ml-[5vw]">
                                            <button type="button" wire:click='decreaseQty({{ $item['product_id'] }})'
                                                id="decrement-button" data-input-counter-decrement="counter-input"
                                                class="inline-flex h-5 w-5 items-center justify-center rounded-full border border-black bg-slate-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                                <svg class="h-2.5 w-2.5 text-black" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 18 2">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                </svg>
                                            </button>
                                            <input type="text" id="counter-input" data-input-counter
                                                class="w-10 border-0 bg-transparent text-center text-sm font-medium text-black focus:outline-none focus:ring-0"
                                                value="{{ $item['quantity'] }}" required />
                                            <button type="button" wire:click='increaseQty({{ $item['product_id'] }})'
                                                id="increment-button" data-input-counter-increment="counter-input"
                                                class="inline-flex h-5 w-5 items-center justify-center rounded-full border border-black bg-slate-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                                <svg class="h-2.5 w-2.5 text-black" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 18 18">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Price -->
                                        <p class="text-base font-bold text-black ml-[5vw] mr-[-5vw]">
                                            {{ Number::currency($item['total_amount'], 'IDR') }}</p>
                                    </div>

                                    <!-- Remove Button Section -->
                                    <div class="flex justify-end md:order-4">
                                        <button wire:click='removeItem({{ $item['product_id'] }})' type="button"
                                            class="inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                                            <img class="w-6 h-auto" src="{{ asset('images/cart-trashcan.svg') }}"
                                                alt="Cart Trashcan">
                                        </button>
                                    </div>
                                </div>
                            @empty
                                <div class="py-4 text-[3vw] ml-[25vw] relative font-afacad font-bold text-slate-500">
                                    No items available in cart!
                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
