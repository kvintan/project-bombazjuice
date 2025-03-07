<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 w-[60vw] h-[150vh] overflow-y-hidden overflow-x-hidden">

    <img src="{{ asset('images/profile-background.svg') }}"
        class="absolute z-[-20] h-[150vh] ml-[-21.5vw] w-full object-cover" alt="Profile Background">
    <!-- Full Name Section -->
    <div class="p-4 sm:p-8 shadow-xl border-black border-[0.2vw] rounded-[1.5vw] bg-white">
        <form wire:submit.prevent="updateFullName" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="name" wire:model="name"
                    class="mt-1 block w-full shadow-sm sm:text-sm border-b border-[0.3vh] h-[4vh] rounded-md pl-[0.5vw]"
                    placeholder="Enter your full name">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Update Full Name
                </button>
            </div>
        </form>
    </div>

    <!-- Phone Number Section -->
    <div class="p-4 sm:p-8 shadow-xl border-black border-[0.2vw] rounded-[1.5vw] bg-white">
        <form wire:submit.prevent="updatePhoneNumber" class="space-y-6">
            <div>
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" id="phone_number" wire:model="phone_number"
                    class="mt-1 block w-full shadow-sm sm:text-sm border-b border-[0.3vh] h-[4vh] rounded-md pl-[0.5vw]"
                    placeholder="Enter your phone number">
                @error('phone_number')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Update Phone Number
                </button>
            </div>
        </form>
    </div>

    <!-- Email Section -->
    <div class="p-4 sm:p-8 shadow-xl border-black border-[0.2vw] rounded-[1.5vw] bg-white">
        <form wire:submit.prevent="updateEmail" class="space-y-6">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="tel" id="email" wire:model="email"
                    class="mt-1 block w-full shadow-sm sm:text-sm border-b border-[0.3vh] h-[4vh] rounded-md pl-[0.5vw]"
                    placeholder="Enter your email">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Update Email
                </button>
            </div>
        </form>
    </div>

    <!-- Password Section -->
    <div class="p-4 sm:p-8 shadow-xl border-black border-[0.2vw] rounded-[1.5vw] bg-white">
        <form wire:submit.prevent="updatePassword" class="space-y-6">
            <div>
                <label for="old_password" class="block text-sm font-medium text-gray-700">Old Password</label>
                <input type="password" id="old_password" wire:model="old_password"
                    class="mt-1 block w-full shadow-sm sm:text-sm border-b border-[0.3vh] h-[4vh] rounded-md pl-[0.5vw]"
                    placeholder="Enter your old password" required>
                @error('old_password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" id="new_password" wire:model="new_password"
                    class="mt-1 block w-full shadow-sm sm:text-sm border-b border-[0.3vh] h-[4vh] rounded-md pl-[0.5vw]"
                    placeholder="Enter a new password" required>
                @error('new_password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Update Password
                </button>
            </div>
        </form>
    </div>

    <div class="p-4 sm:p-8 shadow-xl border-black border-[0.2vw] rounded-[1.5vw] bg-white">
        <form wire:submit.prevent="deleteAccount" class="space-y-6">
            <div>
                <label for="delete_password" class="block text-sm font-medium text-gray-700">Confirm Password to Delete
                    Account</label>
                <input type="password" id="delete_password" wire:model="delete_password"
                    class="mt-1 block w-full shadow-sm sm:text-sm border-b border-[0.3vh] h-[4vh] rounded-md pl-[0.5vw]"
                    placeholder="Enter your password to confirm" required>
                @error('delete_password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Delete Account
                </button>
            </div>
        </form>
    </div>


    <!-- Success and Error Messages -->
    @if (session()->has('message'))
        <div class="text-green-500 text-sm mt-4">
            {{ session('message') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="text-red-500 text-sm mt-4">
            {{ session('error') }}
        </div>
    @endif
</div>
