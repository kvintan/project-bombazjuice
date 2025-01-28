<div>
    @if (session('status'))
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
    @endif

    <div class="h-[100vh] pl-[5vw] mt-[5vh] relative">

        <div class="relative z-[-50]">
            <img class="ml-[-7vw] mt-[-7vh]" src="{{ asset('images/login-hiasan.svg') }}" alt="Hiasan Login">
        </div>

        <div
            class="z-[10] relative w-[45vw] h-[65vh] pt-[5vh] ml-[40vw] mt-[-120vh] pl-[5vw] pr-[5vw] rounded-[2vw] border-[0.3vw] shadow-inset-register">
            <div class="p-4 sm:p-7">
                <!-- Form -->
                <form wire:submit.prevent='save'>
                    @if (session('error'))
                        <div class="bg-red-500 text-sm text-white rounded-lg p-4 mb-4" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="grid gap-y-4 mt-[2vh]">
                        <!-- Form Group -->
                        <div>
                            <label class="text-[1.8vw] mt-[5vh] text-black font-afacad font-bold" for="email"
                                class="block ">Email
                                address</label>
                            <div class="relative">
                                <input type="email" id="email" wire:model="email"
                                    class="py-[0.5vh] mt-[1vh] px-2 block w-full font-afacad border-black border-[0.2vw] rounded-lg text-[1vw]"
                                    aria-describedby="email-error">
                                @error('email')
                                    <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" aria-hidden="true">
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

                        <!-- Form Group -->
                        <div>
                            <div class="flex justify-between items-center relative">
                                <label for="password"
                                    class="text-[1.8vw] mt-[5vh] text-black font-afacad font-bold">Password</label>
                                <a wire:navigate
                                    class="text-[vw] mt-[6vh] font-afacad text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="/forgot">Forgot password?</a>
                            </div>
                            <div class="relative">
                                <input type="password" id="password" wire:model="password"
                                    class="py-[0.5vh] mt-[1vh] px-2 block w-full font-afacad border-black border-[0.2vw] rounded-lg text-[1vw]"
                                    aria-describedby="password-error">
                                @error('password')
                                    <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" aria-hidden="true">
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
                            class="ml-[5vw] mt-[5vh] text-[1.5vw] font-bold text-white font-afacad h-[6vh] w-[20vw] rounded-[2.1vw] hover:brightness-[60%] bg-[radial-gradient(223.16%67.62%_at_50%_50%,#698531_26.24%,_#90B042_100%)] disabled:opacity-50 disabled:pointer-events-none">Log
                            in</button>
                    </div>
                </form>
                <!-- End Form -->

                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                    <p class="mt-[-2vh] ml-[-0.5vw] relative text-sm font-afacad text-[1vw] text-black">
                        Don't have an account yet?
                        <a wire:navigate
                            class="text-blue-600 font-afacad text-[1vw] decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="/register">
                            Sign up here
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>