<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="flex items-center justify-center relative">
        <img class="w-[20vw]" src="{{ asset('images/footer-logo.svg') }}" alt="Forgot Password Logo">
    </div>


    <div class="flex h-full items-center relative mt[-10vh]">
        <main class="w-full max-w-md mx-auto p-6">
            <div class="mt-7 border-[0.3vw] shadow-inset-register">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <h1 class="block text-[2vw] font-bold text-gray-800 font-afacad">Forgot password?</h1>
                        <p class="mt-2 text-sm text-gray-600">
                            Remember your password?
                            <a wire:navigate
                                class="text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="/login">
                                Sign in here
                            </a>
                        </p>
                    </div>

                    <div class="mt-5">
                        <!-- Form -->
                        <form wire:submit.prevent='save'>
                            @if (session('success'))
                                <div class="bg-green-500 text-sm text-white rounded-lg p-4 mb-4" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="grid gap-y-4">
                                <!-- Form Group -->
                                <div>
                                    <label for="email"
                                        class="block mb-2 font-afacad text-[1.2vw] font-bold text-gray-800">Email
                                        address</label>
                                    <div class="relative">
                                        <input type="email" id="email" wire:model="email"
                                            class="py-3 px-4 block w-full border border-gray-600 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
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
                                <button type="submit"
                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 font-semibold rounded-lg hover:brightness-[80%] font-afacad text-[1.2vw] border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events bg-[radial-gradient(223.16%67.62%_at_50%_50%,#698531_26.24%,_#90B042_100%)]">Reset
                                    password</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>