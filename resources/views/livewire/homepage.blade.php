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

    <div class="relative mt-[-13vh] max-w-full w-[320vw] overflow-x-hidden h-[365vh] z-[-10]">
        <div class="h-[110vh]">
            <img class=" relative z-[-10] mt-[-10vh] scale-y-125 scale-x-110"
                src="{{ asset('images/homepage-background.svg') }}" alt="Background Homepage Green">
            <img class="mt-[-74vh] relative" src="{{ asset('images/homepage-avocado.svg') }}" alt="Avocado Homepage">
            <img class="mt-[5vh] ml-[15vw] w-auto h-[55vh] relative" src="{{ asset('images/homepage-orange.svg') }}"
                alt="Orange Homepage">
            <img class="mt-[-102vh] ml-[90vw] w-auto h-[40vh]" src="{{ asset('images/homepage-avocado-2.svg') }}"
                alt="Avocado Homepage 2">
            <img class="h-auto w-[38vw] ml-[15vw] mt-[-22vh] relative" src="{{ asset('images/homepage-tagline.svg') }}"
                alt="Homepage Tagline">
            <img class="relative w-auto h-[80vh] mt-[-37vh] ml-[40vw]" src="{{ asset('images/homepage-bottle.svg') }}"
                alt="Homepage Bottle">
            <p class="text-white text-wrap w-[30vw] ml-[15.6vw] mt-[-43vh] font-afacad">Discover refreshing flavors,
                tailor-made for
                your taste. Mix your favorite fruits and fuel your day with BomBaz-Juice!</p>
            <a href="/menu" wire:navigate class="relative z-[50]">
                <div
                    class= "justify-items-center w-[10vw] h-[6vh] ml-[15.5vw] mt-[2.5vh] rounded-3xl bg-gradient-to-r from-[rgba(47,126,36,0.5)] via-[rgba(28,72,22,0.5)] to-[rgba(47,126,36,0.5)] border-[0.06vw] border-black">
                    <p class="text-white font-afacad mt-[1.4vh] ml-[-1.5vw]">Order Now</p>
                    <img class= "ml-[5.6vw] mt-[-2.8vh]" src="{{ asset('images/homepage-panah-kanan.svg') }}"
                        alt="Homepage Panah Kanan">
                </div>
            </a>
        </div>

        <div class="h-[90vh] justify-items-center">
            <img src="{{ asset('images/homepage-most-favorable.svg') }}" alt="Homepage Most Favorable">
            <div class="w-[70vw] h-[62vh] mt-[4vh] flex flex-row gap-x-[3vw]">
                <div
                    class="w-[22vw] h-[57vh] rounded-[1vw] mt-[5vh] bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] justify-items-center">
                    <img class="ml-[-1vw]" src="{{ asset('images/homepage-botol-kiri.svg') }}"
                        alt="Homepage Botol Kiri">
                    <img class="mt-[-4vh]" src="{{ asset('images/homepage-tulisan-kiri.svg') }}"
                        alt="Homepage Tulisan Botol Kiri">
                    <p class="text-white font-afacad font-semibold w-auto text-[1.3vw]">Orange & Strawberry</p>
                    <p class="text-white font-afacad w-auto text-[1vw]">Rp 40.000 / bottle</p>
                </div>
                <div
                    class="w-[22vw] h-[62vh] rounded-[1vw] bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] justify-items-center">
                    <img class="ml-[-1.2vw] mt-[0.2vh] w-auto h-[47vh]"
                        src="{{ asset('images/homepage-botol-tengah.svg') }}" alt="Homepage Botol Tengah">
                    <img class="mt-[-4vh]" src="{{ asset('images/homepage-tulisan-tengah.svg') }}"
                        alt="Homepage Tulisan Botol Tengah">
                    <p class="text-white font-afacad font-semibold w-auto text-[1.3vw]">Mango & Pineapple</p>
                    <p class="text-white font-afacad w-auto text-[1vw]">Rp 40.000 / bottle</p>
                </div>
                <div
                    class="w-[22vw] h-[57vh] rounded-[1vw] mt-[5vh] bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] justify-items-center">
                    <img class="ml-[-1.2vw] mt-[0.2vh]" src="{{ asset('images/homepage-botol-kanan.svg') }}"
                        alt="Homepage Botol Kanan">
                    <img class="mt-[-4vh]" src="{{ asset('images/homepage-tulisan-kanan.svg') }}"
                        alt="Homepage Tulisan Botol Kanan">
                    <p class="text-white font-afacad font-semibold w-auto text-[1.3vw]">Strawberry & Banana</p>
                    <p class="text-white font-afacad w-auto text-[1vw]">Rp 40.000 / bottle</p>
                </div>
            </div>
            <img class="mt-[-83vh] ml-[-78.5vw]" src="{{ asset('images/homepage-nanas-kiri.svg') }}"
                alt="Homepage Hiasan Nanas Kiri">
            <img class="mt-[-3vh] ml-[85vw]" src="{{ asset('images/homepage-semangka-kanan.svg') }}" alt="">
        </div>

        <div class="h-[90vh]">
            <div
                class="relative z-[-10] mt-[-12vh] ml-[-5vw] w-[300vw] h-[70vh] -rotate-6 bg-[radial-gradient(circle,_rgba(177,_217,_58,_1)_0%,_rgba(134,_178,_21,_1)_65%)]">
            </div>
            <img class="mt-[-66vh] ml-[3vw]" src="{{ asset('images/homepage-benefit.svg') }}"
                alt="Homepage Benefit Perempuan">
            <img class="mt-[-27vh] ml-[1vw]" src="{{ asset('images/homepage-benefit-hiasan.svg') }}"
                alt="Homepage Anggur Hiasan Benefit">
            <img class="ml-[50vw] mt-[-84vh]" src="{{ asset('images/homepage-benefit-why-choose.svg') }}"
                alt="Homepage Tulisan Benefit">
            <img class="ml-[48vw] mt-[5vh]" src="{{ asset('images/homepage-benefit-point.svg') }}"
                alt="Homepage Tulisan Point Benefit">
        </div>

        <div class="h-[70vh] mt-[27vh] justify-items-center">
            <div
                class="w-[70vw] h-[50vh] rounded-[3.5vw] bg-[radial-gradient(37%47.65%_at_22.5%_41.58%,#B1D93A_0%,_#86B215_81%)]">
            </div>
            <img class="w-auto h-[13vh] mt-[-54vh] ml-[-45vw]" src="{{ asset('images/homepage-petik.svg') }}"
                alt="Homepage Petik">
            <img class="ml-[-37vw] mt-[-1vh] w-auto h-[35vh]" src="{{ asset('images/homepage-shanella.svg') }}"
                alt="Homepage Shanella">
            <p class="font-afacad font-bold text-[5vw] mt-[-38vh] ml-[5vw] text-white">Shanella</p>
            <p class="font-afacad font-bold text-[2vw] mt-[-2vh] ml-[9vw] text-white">Juice, Just the Way I Like It
            </p>
            <p class="font-afacad text-white text-wrap w-[32vw] ml-[20vw] mt-[1vh] text-[1.5vw]">I love the JuiceLab
                feature! It's
                so fun
                to
                mix and
                match
                fruits
                to
                create a juice that's uniquely mine.
                Whether I want something bold or sweet, BomBaz-Juice always gets it right!
            </p>
            <div class="w-[12vw] h-[2vh] mt-[2vh] ml-[3vw] gap-x-[1.2vw] flex flex-row">
                <div class="w-[3.5vw] h-[2vh] rounded-[2vw] bg-DDE4DC-bg"></div>
                <div class="bg-475C16-bg rounded-[1vw] w-[1.2vw] h-[2vh]"></div>
                <div class="bg-475C16-bg rounded-[1vw] w-[1.2vw] h-[2vh]"></div>
                <div class="bg-475C16-bg rounded-[1vw] w-[1.2vw] h-[2vh]"></div>
            </div>
            <img class="w-auto h-[40vh] mt-[-58vh] ml-[65vw]" src="{{ asset('images/homepage-hiasan-kiwi-2.svg') }}"
                alt="Hiasan Kiwi Testimoni">
            <img class="w-auto h-[40vh] ml-[-64vw] mt-[4vh]"
                src="{{ asset('images/homepage-hiasan-strawberry-potong.svg') }}" alt="Hiasan Strawberry Testimoni">
        </div>
    </div>
</div>