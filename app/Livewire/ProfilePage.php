<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProfilePage extends Component
{
    use LivewireAlert;

    public $name;
    public $phone_number;
    public $email;
    public $old_password;
    public $new_password;
    public $confirm_password;

    // Variable to handle account deletion
    public $delete_password;

    public function mount() {
        $profile = Auth::user();

        if ($profile) {
            $this->name = $profile->name;
            $this->phone_number = $profile->phone_number;
            $this->email = $profile->email;
        }
    }
    

    // Update Password
    public function updatePassword() {
        // Validate the passwords
        $this->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8',
        ]);
    
        // Get the current authenticated user
        $user = Auth::user();
    
        // Check if the old password is correct
        if (!Hash::check($this->old_password, $user->password)) {
            session()->flash('error', 'The old password is incorrect.');
            return;
        }
    
        // Update the password with the new one, hashed
        $user->password = Hash::make($this->new_password);
        $user->save();
    
        // Flash success message
        $this->alert('success', 'Password updated successfully!');
    }
    
    
    public function render() {
        return view('livewire.profile-page');
    }
}