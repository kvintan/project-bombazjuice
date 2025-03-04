<div>

    <div>
        <div class="relative w-full h-[30vh] lg:h-[60vh]">
            <img class="w-full scale-[200%] ml-[-15vw] mt-[-1vh] invisible sm:invisible sm:w-full lg:visible lg:w-full lg:ml-[0vw] lg:scale-[100%] lg:mt-[-13vh]"
                src="{{ asset('images/juicelab-bg.svg') }}" alt="JuiceLab Background">
            <img class="relative scale-[60%] mt-[-13vh] sm:mt-[-25vh] sm:ml-[10vw] lg:scale-[100%] lg:mt-[-43vh] lg:ml-[24vw]"
                src="{{ asset('images/juicelab-hiasan-jeruk.svg') }}" alt="JuiceLab Hiasan Jeruk">
            <img class="relative scale-[60%] mt-[-62vh] ml-[25vw] invisible sm:invisible lg:visible lg:scale-[100%] lg:mt-[-95vh] lg:ml-[56vw]"
                src="{{ asset('images/juicelab-hiasan-botol.svg') }}" alt="JuiceLab Hiasan Botol">
            <img class="relative scale-[50%] ml-[-18vw] mt-[-31vh] sm:scale-[70%] sm:ml-[0vw] sm:mt-[-43vh] lg:scale-[100%] lg:mt-[-56vh] lg:ml-[9vw]"
                src="{{ asset('images/juicelab-title.svg') }}" alt="JuiceLab Title">
            <img class="relative invisible lg:visible lg:ml-[9vw] lg:mt-[3vh]"
                src="{{ asset('images/juicelab-description.svg') }}" alt="JuiceLab Description">
            <img class="relative ml-[8vw] mt-[-12vh] sm:invisible lg:invisible"
                src="{{ asset('images/juicelab-mobile-description.svg') }}" alt="JuiceLab Mobile Description">
            <img class="realtive invisible sm:visible sm:ml-[10vw] mt-[-2vh] lg:invisible"
                src="{{ asset('images/juicelab-tablet-description.svg') }}" alt="JuiceLab Tablet Description">
            <img class="relative scale-[60%] mt-[-7vh] sm:scale-[80%] sm:ml-[7.8vw] sm:mt-[2vh] lg:invisible lg:scale-[100%] lg:ml-[9vw] lg:mt-[5vh]"
                src="{{ asset('images/juicelab-try-it.svg') }}" alt="JuiceLab Try It">
            <img class="relative ml-[39vw] mt-[-34vh] scale-[90%] sm:scale-[130%] sm:ml-[59vw] sm:mt-[-29vh] lg:invisible"
                src="{{ asset('images/juicelab-mobile-background-and-bottle.svg') }}"
                alt="JuiceLab Mobile Background and Bottle">
        </div>


        <div class="bg-[#FDF6E1] relative w-full h-[70vh] sm:h-[40vh] lg:h-[80vh] z-[-10] lg:mt-[20vh] pt-[15vh]">
            <div
                class="relative scale-[150%] ml-[45vw] mt-[-5vh] lg:scale-[100%] lg:w-[30vw] lg:h-[10vh] lg:ml-[38vw] flex flex-row">
                <p class="font-afacad text-[5vw] font-bold text-[#000000]">How It </p>
                <p class="font-afacad text-[5vw] font-bold text-[#FD7034] ml-[0.5vw]">Works</p>
            </div>

            <div
                class="relative invisible sm:visible sm:mt-[2vh] lg:visible lg:w-[80vw] lg:h-[40vh] flex flex-row lg:gap-[5vw] lg:mt-[5vh] lg:ml-[10vw]">
                <img src="{{ asset('images/juicelab-howitworks-3-tips.svg') }}" alt="JuiceLab How It Works 3 Steps">
            </div>

            <div class="relative visible ml-[30vw] mt-[-6vh] sm:invisible lg:invisible">
                <img src="{{ asset('images/juicelab-mobile-how-it-works.svg') }}"
                    alt="JuiceLab How It Works 3 Steps Mobile">
            </div>

        </div>


        <div class="relative lg:h-[50vh]">
            <img class="relative w-full" src="{{ asset('images/juicelab-60k.svg') }}" alt="JuiceLab 60k">
        </div>


        <div class="relative w-full h-[50vh] lg:h-[120vh]">
            <div
                class="relative scale-[200%] ml-[57vw] sm:scale-[300%] sm:ml-[67vw] lg:scale-[100%] lg:w-[30vw] lg:h-[10vh] lg:ml-[40vw] mt-[5vh] flex flex-row">
                <p class="font-afacad lg:text-[5vw] font-bold text-[#000000]">Let's</p>
                <p class="font-afacad lg:text-[5vw] font-bold text-[#F9B401] ml-[1vw]">Start</p>
            </div>

            <p
                class="relative text-black text-[7vw] mt-[1vh] ml-[20vw] sm:mt-[3vh] lg:text-[5vw] lg:ml-[30vw] lg:mt-[10vh] font-afacad font-bold">
                Choose 3 kind
                of fruit
            </p>

            <div
                class="relative mt-[3vh] sm:mt-[3vh] lg:w-[76vw] lg:h-[60vh] lg:mt-[10vh] lg:ml-[12vw] flex flex-col lg:flex-col lg:gap-[5vh]">
                <form wire:submit.prevent="saveOrder">
                    <div class="relative flex flex-wrap gap-[4vw] sm:gap-[2vw] lg:gap-[2.5vw] justify-center">
                        @foreach (['Banana', 'Watermelon', 'Melon', 'Apple', 'Pineapple', 'Grape', 'Orange', 'Guava', 'Avocado', 'Mango', 'Kiwi', 'Strawberry'] as $index => $fruit)
                            <div wire:click="selectFruit('{{ $fruit }}')" class="cursor-pointer">
                                <img src="{{ asset('images/juicelab-buah-' . ($index + 1) . '.svg') }}"
                                    alt="{{ $fruit }}"
                                    class="w-[17vw] h-[17vw] sm:w-[13vw] sm:h-[13vw] lg:w-[150px] lg:h-[150px] transition-all duration-25ms ease-custom
                                        {{ in_array($fruit, [$fruit1, $fruit2, $fruit3]) ? 'border-4 border-green-500 rounded-lg' : '' }}">

                                <!-- Hidden Input -->
                                <input type="hidden" wire:model="selectedFruits.{{ $index }}">
                            </div>
                        @endforeach
                    </div>

                    <!-- Hidden Inputs to store selected fruits -->
                    <input type="hidden" wire:model="fruit1">
                    <input type="hidden" wire:model="fruit2">
                    <input type="hidden" wire:model="fruit3">

                    <div class="relative flex flex-row text-center mt-5">
                        <button type="button" wire:click="clearSelection">
                            <div
                                class="font-bold font-afacad text-white text-[4vw] w-[15vw] rounded-[3vw] h-auto ml-[9vw] sm:ml-[7vw] sm:mt-[3vh] lg:text-[2vw] lg:rounded-[2vw] lg:h-[5vh] lg:w-[10vw] lg:ml-[1.5vw] lg:mt-[4vh] bg-[#FF7676]">
                                Clear
                            </div>
                        </button>

                        <button type="submit">
                            <div
                                class="font-bold lg:ml-[53vw] font-afacad text-white text-[4vw] rounded-[3vw] w-[15vw] h-auto ml-[54vw] sm:mt-[3vh] lg:text-[2vw] lg:rounded-[2vw] lg:h-[5vh] lg:w-[10vw] bg-[#9DD071]">
                                Done
                            </div>
                        </button>
                    </div>
                </form>
            </div>



        </div>

    </div>
</div>