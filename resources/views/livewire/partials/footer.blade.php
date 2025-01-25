<div class="h-[40vh] bg-FAFAE8-bg pl-[5vw] pt-[3.5vh]">
    <img class="w-auto h-[9vh]" src="{{ asset('images/footer-logo.svg') }}" alt="Footer Logo">
    <p class="font-afacad text-616060-text text-wrap w-[30vw] ml-[1vw] mt-[2vh] text-[1vw]">Fresh ingredients, innovative
        features,
        and your
        personal
        preferences
        combined BomBaz-Juice is
        dedicated to
        crafting the perfect drink for every moment. From tailored blends to refreshing classics, we’re here to make
        every sip truly special and unforgettable!</p>
    <img class="mt-[4vh]" src="{{ asset('images/footer-line.svg') }}" alt="Footer Line">
    <p class="font-afacad text-616060-text text-[1vw] mt-[3.5vh] ml-[35vw]">@ 2024 BombazJuice Inc. All rights reserved.
    </p>
    <div class="w-[12vw] h-[18vh] ml-[51vw] mt-[-31.5vh] flex flex-col">
        <a wire:navigate href="/">
            <p class="font-arimo font-bold text-616060-text text-[1.3vw] hover:underline">Home</p>
        </a>
        <a wire:navigate href="/menu">
            <p class="font-arimo font-bold text-616060-text text-[1.3vw] hover:underline">Menu</p>
        </a>
        <a wire:navigate href="/juicelab">
            <p class="font-arimo font-bold text-616060-text text-[1.3vw] hover:underline">JuiceLab</p>
        </a>
        <a wire:navigate href="/fruitstats">
            <p class="font-arimo font-bold text-616060-text text-[1.3vw] hover:underline">FruitStats</p>
        </a>
        <a wire:navigate href="/contact-us">
            <p class="font-arimo font-bold text-616060-text text-[1.3vw] hover:underline">Contact Us</p>
        </a>
        <a wire:navigate href="/store">
            <p class="font-arimo font-bold text-616060-text text-[1.3vw] hover:underline">Store</p>
        </a>
    </div>

    <div class="w-[15vw] h-[18vh] ml-[68vw] mt-[-16vh] flex flex-col">
        <p class="font-arimo font-bold text-616060-text text-[1.7vw] hover:underline">Follow Us</p>
        <p class="font-arimo text-616060-text text-[1vw] mt-[0.7vh]">Yes, we are social</p>
        <div class="w-[12vw] h-[5vh] mt-[1.8vh] gap-x-[1vw] flex flex-row">
            <a wire:navigate href="https://instagram.com">
                <img class="hover:opacity-[50%]" src="{{ asset('images/footer-instagram.svg') }}"
                    alt="Footer Instagram">
            </a>
            <a wire:navigate href="https://facebook.com">
                <img class="hover:opacity-[50%]" src="{{ asset('images/footer-facebook.svg') }}" alt="Footer Facebook">
            </a>
            <a wire:navigate href="https://youtube.com">
                <img class="hover:opacity-[50%]" src="{{ asset('images/footer-youtube.svg') }}" alt="Footer Youtube">
            </a>
            <a wire:navigate href="https://gmail.com">
                <img class="hover:opacity-[50%]" src="{{ asset('images/footer-gmail.svg') }}" alt="Footer Gmail">
            </a>
        </div>
    </div>
</div>
