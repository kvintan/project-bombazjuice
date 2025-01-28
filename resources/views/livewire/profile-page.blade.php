<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 w-[60vw]">
    <!-- Full Name Section -->
    <div class="p-4 sm:p-8 shadow rounded-[1.5vw] bg-white">
        <form wire:submit.prevent="updateFullName" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="name" wire:model="name"
                    class="mt-1 block w-full shadow-sm sm:text-sm border-gray-500 rounded-md"
                    placeholder="Enter your full name">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-black bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Update Full Name
                </button>
            </div>
        </form>
    </div>

    <!-- Phone Number Section -->
    <div class="p-4 sm:p-8 shadow rounded-[1.5vw] bg-white">
        <form wire:submit.prevent="updatePhoneNumber" class="space-y-6">
            <div>
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" id="phone_number" wire:model="phone_number"
                    class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
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

    <!-- Password Section -->
    <div class="p-4 sm:p-8 shadow rounded-[1.5vw] bg-white">
        <form wire:submit.prevent="updatePassword" class="space-y-6">
            <div>
                <label for="old_password" class="block text-sm font-medium text-gray-700">Old Password</label>
                <input type="password" id="old_password" wire:model="old_password"
                    class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    placeholder="Enter your old password" required>
                @error('old_password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" id="new_password" wire:model="new_password"
                    class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
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
