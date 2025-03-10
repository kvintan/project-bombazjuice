<div class="h-[22vh] lg:h-[40vh] bg-FAFAE8-bg pl-[5vw] pt-[3.5vh]">
    <img class="w-auto h-[3vh] lg:h-[9vh]" src="{{ asset('images/footer-logo.svg') }}" alt="Footer Logo">
    <p
        class="font-afacad text-616060-text text-wrap text-[2vw] w-[40%] sm:text-[1.3vw] sm:w-[30vw] lg:w-[30vw] lg:ml-[1vw] lg:mt-[2vh] lg:text-[1vw]">
        Fresh
        ingredients, innovative
        features,
        and your
        personal
        preferences
        combined BomBaz-Juice is
        dedicated to
        crafting the perfect drink for every moment. From tailored blends to refreshing classics, we’re here to make
        every sip truly special and unforgettable!</p>
    <img class="invisible sm:invisible lg:mt-[4vh]" src="{{ asset('images/footer-line.svg') }}" alt="Footer Line">
    <p
        class="font-afacad text-616060-text mt-[3vh] ml-[20vw] text-[3vw] sm:ml-[22vw] sm:text-[2vw] lg:text-[1vw] lg:mt-[3.5vh] lg:ml-[35vw]">
        @
        2024 BombazJuice Inc. All rights reserved.
    </p>
    <div class="relative ml-[42vw] mt-[-15vh] lg:w-[12vw] lg:h-[18vh] lg:ml-[51vw] lg:mt-[-31.5vh] flex flex-col">
        <a wire:navigate href="/">
            <p class="font-arimo font-bold text-616060-text text-[3.5vw] sm:text-[2vw] lg:text-[1.3vw] hover:underline">
                Home</p>
        </a>
        <a wire:navigate href="/menu">
            <p class="font-arimo font-bold text-616060-text text-[3.5vw] sm:text-[2vw] lg:text-[1.3vw] hover:underline">
                Menu</p>
        </a>
        {{-- <a wire:navigate href="/juicelab">
            <p class="font-arimo font-bold text-616060-text lg:text-[1.3vw] hover:underline">JuiceLab</p>
        </a>
        <a wire:navigate href="/fruitstats">
            <p class="font-arimo font-bold text-616060-text lg:text-[1.3vw] hover:underline">FruitStats</p>
        </a> --}}
        <a wire:navigate href="/contact-us">
            <p class="font-arimo font-bold text-616060-text text-[3.5vw] sm:text-[2vw] lg:text-[1.3vw] hover:underline">
                Contact Us</p>
        </a>
        <a wire:navigate href="/store">
            <p class="font-arimo font-bold text-616060-text text-[3.5vw] sm:text-[2vw] lg:text-[1.3vw] hover:underline">
                Store</p>
        </a>
    </div>

    <div
        class="relative mt-[-10vh] ml-[63vw] sm:mt-[-8vh] lg:w-[15vw] lg:h-[18vh] lg:ml-[68vw] lg:mt-[-16vh] flex flex-col">
        <p class="font-arimo font-bold text-616060-text lg:text-[1.7vw] hover:underline">Follow Us</p>
        <p class="font-arimo mt-[0.5vh] text-[2vw] text-616060-text lg:text-[1vw] lg:mt-[0.7vh]">Yes, we are social</p>
        <div class="relative mt-[0.5vh] lg:w-[12vw] lg:h-[5vh] lg:mt-[1.8vh] gap-x-[1vw] flex flex-row">
            <a wire:navigate href="https://instagram.com">
                <img class="hover:opacity-[50%] h-[3vh] lg:h-[5vh]" src="{{ asset('images/footer-instagram.svg') }}"
                    alt="Footer Instagram">
            </a>
            <a wire:navigate href="https://facebook.com">
                <img class="hover:opacity-[50%] h-[3vh] lg:h-[5vh]" src="{{ asset('images/footer-facebook.svg') }}"
                    alt="Footer Facebook">
            </a>
            <a wire:navigate href="https://youtube.com">
                <img class="hover:opacity-[50%] h-[3vh] lg:h-[5vh]" src="{{ asset('images/footer-youtube.svg') }}"
                    alt="Footer Youtube">
            </a>
            <a wire:navigate href="https://gmail.com">
                <img class="hover:opacity-[50%] h-[3vh] lg:h-[5vh]" src="{{ asset('images/footer-gmail.svg') }}"
                    alt="Footer Gmail">
            </a>
        </div>
    </div>

    <img class="relative mt-[3.5vh] ml-[2.5vw] sm:visible sm:w-[90%] sm:mt-[3vh] lg:invisible"
        src="{{ asset('images/footer-mobile-line.svg') }}" alt="Footer Mobile Line">

</div>
