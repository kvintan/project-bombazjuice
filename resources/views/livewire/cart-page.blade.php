<div>
    <img class="ml-[25vw] w-[50vw]" src="{{ asset('images/cart-tagline.svg') }}" alt="Cart Tagline">
    <p
        class="ml-[20vw] rounded-[0.7vw] bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] w-[60vw] h-[5vh] font-afacad text-white font-bold text-[1.5vw] flex items-center justify-center">
        Order</p>

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

                    <div class="mx-auto relative max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                        <div class="space-y-4 ml-[40vw] mt-[2vh] mr-[-9vw] p-4 shadow-sm sm:p-6">
                            <div
                                class="flex justify-center bg-black relative bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] rounded-[0.5vw] h-[6vh] pt-[1vh]">
                                <p class="text-2xl font-semibold text-white font-afacad">
                                    Cart total</p>
                            </div>

                            <div class="space-y-4">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-[2vw] font-bold text-black font-afacad ml-[3vw]">Subtotal:
                                    </dt>
                                    <dd class="text-[2vw] font-bold text-black font-afacad mr-[3vw]">
                                        {{ Number::currency($grand_total, 'IDR') }}</dd>
                                </dl>
                            </div>

                            <form wire:submit.prevent='placeOrder'
                                class="w-[26vw] h-[5vh] gap-[2.3vw] flex flex-row items-center relative" method="POST">
                                @csrf
                                <a wire:navigate href="/checkout" type="submit"
                                    class="flex w-[26vw] h-[6vh] ml-[3vw] mt-[5vh] font-afacad  items-center justify-center rounded-lg bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] px-5 py-2.5 font-bold text-[1.5vw] text-white focus:outline-none focus:ring-4 focus:ring-primary-300">Checkout</a>

                                <div class="flex items-center justify-center gap-2">
                                    <a wire:navigate href="/menu" title=""
                                        class="flex w-[20vw] h-[6vh] ml-[-130vw] mt-[5vh] font-afacad  items-center justify-center rounded-lg bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] px-5 py-2.5 font-bold text-[1.5vw] text-white focus:outline-none focus:ring-4 focus:ring-primary-300">
                                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M12 19l-7-7 7-7M5 12h14" />
                                        </svg>
                                        Continue Shopping
                                    </a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>