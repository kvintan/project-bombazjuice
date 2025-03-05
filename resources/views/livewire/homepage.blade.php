<div>


    @if (session('status') && !session('has_logged_in'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold font-afacad">Success!</strong>
            <span class="block sm:inline">{{ session('status') }}</span>
            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                onclick="this.parentElement.remove();">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 5.652a1 1 0 10-1.414-1.414L10 7.586 7.066 4.652a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 001.414 1.414L10 12.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934z" />
                </svg>
            </button>
        </div>
        @php
            session(['has_logged_in' => true]);
        @endphp
    @endif

    <div class="relative mt-[-13vh] max-w-full w-[320vw] overflow-x-hidden h-[420vh] sm:h-[190vh] lg:h-[365vh] z-[-10]">
        <div class="lg:h-[110vh]">
            <img class="relative z-[-10] scale-[250%] lg:mt-[-10vh] lg:scale-y-125 lg:scale-x-110 sm:scale-x-[105%] sm:scale-y-[150%]"
                src="{{ asset('images/homepage-background.svg') }}" alt="Background Homepage Green">
            <img class="mt-[-26vh] scale-[50%] lg:mt-[-74vh] lg:scale-[100%] sm:ml-[-6vw] sm:mt-[-35vh] sm:scale-[60%]  ml-[-15vw]  relative"
                src="{{ asset('images/homepage-avocado.svg') }}" alt="Avocado Homepage">
            <img class="mt-[-35vh] lg:mt-[5vh] lg:ml-[15vw] w-auto lg:h-[55vh] lg:scale-[100%] ml-[50vw] scale-[60%] sm:ml-[-5vw] sm:mt-[-12vh]  relative"
                src="{{ asset('images/homepage-orange.svg') }}" alt="Orange Homepage">
            <img class="invisible lg:visible lg:mt-[-102vh] lg:ml-[90vw] lg:scale-[100%] w-auto lg:h-[40vh] sm:visible sm:ml-[85vw] mt-[-55vh] sm:scale-[80%] "
                src="{{ asset('images/homepage-avocado-2.svg') }}" alt="Avocado Homepage 2">
            <img class="h-auto invisible lg:visible lg:w-[38vw] lg:ml-[15vw] lg:mt-[-22vh] lg:scale-[100%] sm:visible sm:scale-[60%] sm:mt-[-15vh] sm:ml-[-1vw]  relative"
                src="{{ asset('images/homepage-tagline.svg') }}" alt="Homepage Tagline">
            <img class="mt-[-37vh] ml-[-7vw] scale-[90%] sm:scale-[60%] sm:mt-[-29vh] sm:ml-[19vw] relative w-auto lg:scale-[100%] lg:h-[80vh] lg:mt-[-37vh] lg:ml-[40vw]"
                src="{{ asset('images/homepage-bottle.svg') }}" alt="Homepage Bottle">
            <p
                class="text-white text-wrap invisible sm:visible sm:mt-[-31vh] sm:w-[40%] sm:ml-[12vw] sm:text-[1.3vw] lg:visible lg:w-[30vw] lg:ml-[15.6vw] lg:mt-[-43vh] font-afacad">
                Discover
                refreshing
                flavors,
                tailor-made for
                your taste. Mix your favorite fruits and fuel your day with BomBaz-Juice!</p>
            <a href="/menu" wire:navigate class="relative z-[50]">
                <div
                    class= "justify-items-center invisible lg:visible lg:w-[10vw] lg:h-[6vh] lg:ml-[15.5vw] lg:mt-[2.5vh] lg:rounded-3xl bg-gradient-to-r from-[rgba(47,126,36,0.5)] via-[rgba(28,72,22,0.5)] to-[rgba(47,126,36,0.5)] border-[0.06vw] border-black">
                    <p class="text-white font-afacad lg:mt-[1.4vh] lg:ml-[-1.5vw]">Order Now</p>
                    <img class= "lg:ml-[5.6vw] lg:mt-[-2.8vh]" src="{{ asset('images/homepage-panah-kanan.svg') }}"
                        alt="Homepage Panah Kanan">
                </div>
            </a>
            <img class="ml-[14.5vw] mt-[-10vh] relative sm:invisible lg:invisible"
                src="{{ asset('images/homepage-mobile-tagline.svg') }}" alt="Homepage Mobile Tagline">
            <img class="relative mt-[0.5vh] ml-[13vw] sm:invisible lg:invisible"
                src="{{ asset('images/homepage-mobile-tagline-description.svg') }}"
                alt="Homepage Mobile Tagline Description">
            <img class="relative ml-[28vw] mt-[0.5vh] sm:invisible lg:invisible"
                src="{{ asset('images/homepage-mobile-order-now-button.svg') }}"
                alt="Homepage Mobile Order Now Button">
            <img class="relative invisible sm:visible sm:ml-[12vw] mt-[-14vh] lg:invisible"
                src="{{ asset('images/homepage-tablet-order-now.svg') }}" alt="Homepage Tablet Order Now Button">
        </div>

        <div class="lg:h-[90vh] justify-items-center">
            <img class="mt-[15vh] sm:mt-[20vh] lg:mt-[0vh]" src="{{ asset('images/homepage-most-favorable.svg') }}"
                alt="Homepage Most Favorable">
            <div
                class="mt-[2vh] gap-y-[5vh] lg:w-[70vw] lg:h-[62vh] lg:mt-[4vh] flex flex-col sm:flex-row sm:gap-x-[3vw] lg:flex-row lg:gap-x-[3vw]">
                <div
                    class="rounded-[5vw] h-[55vh] sm:w-[25vw] sm:h-[30vh] sm:mt-[2vh] sm:rounded-[1.5vw] lg:w-[22vw] lg:h-[57vh] lg:rounded-[1vw] lg:mt-[5vh] bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] justify-items-center">
                    <img class="lg:ml-[-1vw]" src="{{ asset('images/homepage-botol-kiri.svg') }}"
                        alt="Homepage Botol Kiri">
                    <img class="mt-[-3vh] ml-[1vw] lg:mt-[-4vh]" src="{{ asset('images/homepage-tulisan-kiri.svg') }}"
                        alt="Homepage Tulisan Botol Kiri">
                    <p class="ml-[1vw] text-white font-afacad font-semibold w-auto lg:text-[1.3vw]">Orange & Strawberry
                    </p>
                    <p class="ml-[1vw] text-white font-afacad w-auto lg:text-[1vw]">Rp 40.000 / bottle</p>
                </div>
                <div
                    class="rounded-[5vw] h-[55vh] sm:w-[25vw] sm:h-[32vh] sm:rounded-[1.5vw] lg:w-[22vw] lg:h-[62vh] lg:rounded-[1vw] bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] justify-items-center">
                    <img class="lg:ml-[-1.2vw] lg:mt-[0.2vh] w-auto lg:h-[47vh]"
                        src="{{ asset('images/homepage-botol-tengah.svg') }}" alt="Homepage Botol Tengah">
                    <img class="mt-[-3vh] ml-[1vw] sm:mt-[-1vh] lg:mt-[-4vh]"
                        src="{{ asset('images/homepage-tulisan-tengah.svg') }}" alt="Homepage Tulisan Botol Tengah">
                    <p class="ml-[1vw] text-white font-afacad font-semibold w-auto lg:text-[1.3vw]">Mango & Pineapple
                    </p>
                    <p class="ml-[1vw] text-white font-afacad w-auto lg:text-[1vw]">Rp 40.000 / bottle</p>
                </div>
                <div
                    class="rounded-[5vw] h-[55vh] sm:w-[25vw] sm:h-[30vh] sm:mt-[2vh] sm:rounded-[1.5vw] lg:w-[22vw] lg:h-[57vh] lg:rounded-[1vw] lg:mt-[5vh] bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] justify-items-center">
                    <img class="lg:ml-[-1.2vw] lg:mt-[0.2vh]" src="{{ asset('images/homepage-botol-kanan.svg') }}"
                        alt="Homepage Botol Kanan">
                    <img class="mt-[-3vh] ml-[1vw] lg:mt-[-4vh]" src="{{ asset('images/homepage-tulisan-kanan.svg') }}"
                        alt="Homepage Tulisan Botol Kanan">
                    <p class="ml-[1vw] text-white font-afacad font-semibold w-auto lg:text-[1.3vw]">Strawberry & Banana
                    </p>
                    <p class="ml-[1vw] text-white font-afacad w-auto lg:text-[1vw]">Rp 40.000 / bottle</p>
                </div>
            </div>
            <img class="invisible sm:invisible lg:visible lg:mt-[-83vh] lg:ml-[-78.5vw]"
                src="{{ asset('images/homepage-nanas-kiri.svg') }}" alt="Homepage Hiasan Nanas Kiri">
            <img class="invisible sm:invisible lg:visible lg:mt-[-3vh] lg:ml-[85vw]"
                src="{{ asset('images/homepage-semangka-kanan.svg') }}" alt="">
        </div>

        <div class="lg:h-[90vh]">
            <div
                class="mt-[-70vh] w-[300vw] h-[45vh] ml-[-30vw] relative z-[-10] sm:mt-[-70vh] sm:ml-[-5vw] sm:w-[300vw] sm:h-[35vh] lg:mt-[-12vh] lg:ml-[-5vw] lg:w-[300vw] lg:h-[70vh] -rotate-6 bg-[radial-gradient(circle,_rgba(177,_217,_58,_1)_0%,_rgba(134,_178,_21,_1)_65%)]">
            </div>
            <img class="mt-[-73vh] scale-[80%] sm:mt-[-45vh] sm:scale-[70%] sm:ml-[-15vw] relative lg:scale-[100%] lg:mt-[-66vh] lg:ml-[3vw]"
                src="{{ asset('images/homepage-benefit.svg') }}" alt="Homepage Benefit Perempuan">
            <img class="scale-[45%] mt-[-28vh] ml-[-10vw] lg:mt-[-40vh] lg:ml-[5vw] relative"
                src="{{ asset('images/homepage-benefit-hiasan.svg') }}" alt="Homepage Anggur Hiasan Benefit">
            <img class="invisible sm:visible sm:ml-[41vw] sm:mt-[-43vh] sm:scale-[60%] lg:scale-[100%] lg:visible lg:ml-[50vw] lg:mt-[-70vh]"
                src="{{ asset('images/homepage-benefit-why-choose.svg') }}" alt="Homepage Tulisan Benefit">
            <img class="mt-[-12vh] sm:ml-[31vw] sm:mt-[-4vh] sm:scale-[55%] lg:scale-[100%] lg:ml-[48vw] lg:mt-[3vh]"
                src="{{ asset('images/homepage-benefit-point.svg') }}" alt="Homepage Tulisan Point Benefit">
            <img class="relative mt-[-25vh] scale-[110%] ml-[7vw] sm:invisible lg:invisible"
                src="{{ asset('images/homepage-mobile-why-choose-bombazjuice.svg') }}"
                alt="Homepage Mobile Why Choose BombazJuice">
        </div>

        <div class="mt-[35vh] h-[100vh] sm:h-[50vh] lg:h-[70vh] lg:mt-[27vh] justify-items-center">
            <div
                class="w-[80vw] h-[45vh] sm:h-[30vh] lg:w-[70vw] lg:h-[50vh] rounded-[3.5vw] bg-[radial-gradient(37%47.65%_at_22.5%_41.58%,#B1D93A_0%,_#86B215_81%)]">
            </div>
            <img class="h-[7vh] mt-[-48vh] ml-[-40vw] relative w-auto sm:mt-[-33vh] lg:h-[13vh] lg:mt-[-54vh] lg:ml-[-45vw]"
                src="{{ asset('images/homepage-petik.svg') }}" alt="Homepage Petik">
            <img class="invisible sm:invisible lg:visible lg:ml-[-37vw] lg:mt-[-1vh] w-auto lg:h-[35vh]"
                src="{{ asset('images/homepage-shanella.svg') }}" alt="Homepage Shanella">
            <img class="relative mt-[-35vh] scale-[120%] sm:visible sm:scale-[150%] sm:ml-[-45vw] sm:mt-[-23vh] lg:invisible"
                src="{{ asset('images/homepage-mobile-cecep.svg') }}" alt="Homepage Cecep">
            <p
                class="font-afacad font-bold invisible sm:invisible lg:visible lg:text-[5vw] lg:mt-[-30vh] relative lg:ml-[5vw] text-white">
                Shanella</p>
            <p
                class="font-afacad font-bold sm:visible sm:text-[8vw] sm:mt-[-19vh] sm:ml-[5vw] lg:invisible text-[10vw] mt-[-3vh] text-white">
                Cecep</p>
            <p
                class="font-afacad font-bold text-[4vw] mt-[0.5vh] sm:text-[3vw] sm:mt-[-0.5vh] sm:ml-[17vw] lg:text-[2vw] lg:mt-[-3vh] lg:ml-[9vw] text-white">
                Juice, Just
                the Way I Like
                It
            </p>
            <p
                class="font-afacad mt-[0.5vh] text-white text-wrap w-[55vw] text-[3vw] text-center sm:w-[32vw] sm:ml-[17vw] sm:mt-[1vh] sm:text-[2vw] sm:text-left lg:w-[32vw] lg:ml-[20vw] lg:mt-[1vh] lg:text-[1.5vw]">
                I
                love the
                JuiceLab
                feature! It's
                so fun
                to
                mix and
                match
                fruits
                to
                create a juice that's uniquely mine.
            </p>
            <div
                class="w-[20vw] gap-x-[2vw] mt-[3vh] lg:w-[12vw] lg:h-[2vh] lg:mt-[2vh] lg:ml-[3vw] lg:gap-x-[1.2vw] flex flex-row">
                <div class="w-[8vw] h-[1.2vh] lg:w-[3.5vw] lg:h-[2vh] rounded-[2vw] bg-DDE4DC-bg"></div>
                <div class="w-[3vw] h-[1.2vh] rounded-[4vw] bg-475C16-bg lg:rounded-[1vw] lg:w-[1.2vw] lg:h-[2vh]">
                </div>
                <div class="w-[3vw] h-[1.2vh] rounded-[4vw] bg-475C16-bg lg:rounded-[1vw] lg:w-[1.2vw] lg:h-[2vh]">
                </div>
                <div class="w-[3vw] h-[1.2vh] rounded-[4vw] bg-475C16-bg lg:rounded-[1vw] lg:w-[1.2vw] lg:h-[2vh]">
                </div>
            </div>
            <img class="w-auto mt-[-47vh] ml-[70vw] sm:mt-[-35vh] lg:h-[40vh] lg:mt-[-58vh] lg:ml-[65vw]"
                src="{{ asset('images/homepage-hiasan-kiwi-2.svg') }}" alt="Hiasan Kiwi Testimoni">
            <img class="w-auto mt-[10vh] ml-[-70vw] sm:mt-[6vh] lg:h-[40vh] lg:ml-[-64vw] lg:mt-[4vh]"
                src="{{ asset('images/homepage-hiasan-strawberry-potong.svg') }}" alt="Hiasan Strawberry Testimoni">
        </div>
    </div>
</div>