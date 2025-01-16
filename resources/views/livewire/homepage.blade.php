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
    </div>
</div>
