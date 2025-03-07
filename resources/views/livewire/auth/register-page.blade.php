<div>

    <div class="h-[90vh] sm:h-[120vh] lg:h-[105vh] pl-[5vw] relative overflow-hidden">

        <div class="flex h-full items-center relative z-[10] mt-[20vh] sm:ml-[-30vw] lg:mt-[0vh] ml-[0vw] lg:ml-[-60vw]">
            <main class="w-full max-w-md mx-auto p-6 relative">
                <div
                    class="lg:w-[40vw] lg:h-[95vh] sm:h-[100vh] w-[70vw] h-[70vh] bg-white ml-[4vw] lg:ml-[0vw] bg-opacity-[80%] mt-[-40vh] lg:mt-[0vh] relative pt-[5vh] pl-[5vw] pr-[5vw] rounded-[2vw] border-[0.3vw] shadow-inset-register">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1
                                class="block text-[6vw] lg:mt-[0vh] mt-[-2vh] lg:text-[3vw] font-bold text-black font-afacad">
                                Sign up</h1>
                            <p class="mt-2 text-[3vw] lg:text-[1vw] text-black font-afacad">
                                Already have an account?
                                <a wire:navigate
                                    class="text-blue-600 font-afacad text-[3vw] lg:text-[1vw] decoration-2 hover:underline font-medium"
                                    href="/login">
                                    Sign in here
                                </a>
                            </p>
                        </div>
                        <!-- Form -->


                        <form wire:submit.prevent='save'>
                            <div class="grid gap-y-4 lg:mt-[0vh] mt-[2vh]">
                                <!-- Form Group -->

                                <div>
                                    <label for="name"
                                        class="text-[4vw] lg:text-[1.8vw] mt-[5vh] text-black font-afacad font-bold">Name</label>
                                    <div class="relative">
                                        <input type="text" id="name" wire:model="name"
                                            class="py-[0.5vh] mt-[1vh] px-2 block w-full font-afacad border-black border-[0.2vw] rounded-lg text-[3vw] lg:text-[1vw]"
                                            aria-describedby="name-error">
                                        @error('name')
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('name')
                                        <p class="text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email"
                                        class="text-[4vw] lg:text-[1.8vw] mt-[5vh] text-black font-afacad font-bold">Email
                                        address</label>
                                    <div class="relative">
                                        <input type="email" id="email" wire:model="email"
                                            class="py-[0.5vh] mt-[1vh] px-2 block w-full font-afacad border-black border-[0.2vw] rounded-lg text-[3vw] lg:text-[1vw]"
                                            aria-describedby="email-error">
                                        @error('email')
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('email')
                                        <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div>
                                    <div class="flex justify-between items-center">
                                        <label for="phone_number"
                                            class="text-[4vw] lg:text-[1.8vw] text-black font-afacad font-bold">Phone
                                            Number</label>

                                    </div>
                                    <div class="relative">
                                        <input type="text" id="phone_number" wire:model="phone_number"
                                            class="py-[0.5vh] mt-[1vh] px-2 block w-full font-afacad border-black border-[0.2vw] rounded-lg text-[3vw] lg:text-[1vw]"
                                            aria-describedby="phone_number-error">
                                        @error('phone_number')
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('phone_number')
                                        <p class="text-xs text-red-600 mt-2" id="phone_number-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div>
                                    <div class="flex justify-between items-center">
                                        <label for="password"
                                            class="text-[4vw] lg:text-[1.8vw] text-black font-afacad font-bold">Password</label>

                                    </div>
                                    <div class="relative">
                                        <input type="password" id="password" wire:model="password"
                                            class="py-[0.5vh] mt-[1vh] px-2 block w-full font-afacad border-black border-[0.2vw] rounded-lg text-[3vw] lg:text-[1vw]"
                                            aria-describedby="password-error">
                                        @error('password')
                                            <div
                                                class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('password')
                                        <p class="text-xs text-red-600 mt-2" id="password-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->


                                <button type="submit"
                                    class="lg:ml-[3vw] sm:ml-[15vw] sm:mt-[1vh] relative mt-[4vh] lg:text-[1.5vw] font-bold text-white font-afacad h-[4vh] w-[25vw] ml-[27vw] text-[4vw] lg:h-[6vh] lg:w-[20vw] rounded-[2.1vw] hover:brightness-[60%] bg-[radial-gradient(223.16%_67.62%_at_50%_50%,_#698531_26.24%,_#90B042_100%)] disabled:opacity-50 disabled:pointer-events-none">Sign
                                    up</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
        </div>

        <img class="mt-[-110vh] ml-[35vw] relative z-[-10]" src="{{ asset('images/sign-up-hiasan.svg') }}"
            alt="Sign Up Hiasan">

    </div>

</div>
