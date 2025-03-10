<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Jantinnerezo\LivewireAlert\LivewireAlert;

#[Title('Profile - BomBazJuice')]
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

    // Update Full Name
    public function updateFullName() {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);
    
        // Get the current authenticated user
        $user = Auth::user();
    
        // Update only the 'name' field and retain the 'email' and 'password' from the existing user
        $user->update([
            'name' => $this->name,  // Only update the name
        ]);
    
        $this->alert('success', 'Name updated successfully!');
    }
    

    // Update Phone Number
    public function updatePhoneNumber() {
        $this->validate([
            'phone_number' => 'required|string|max:15',
        ]);

        $user = Auth::user();
    
        // Update only the 'name' field and retain the 'email' and 'password' from the existing user
        $user->update([
            'phone_number' => $this->phone_number,  // Only update the name
        ]);

        $this->alert('success', 'Phone number updated successfully!');
    }

    // Update Email
    public function updateEmail() {
        $this->validate([
            'email' => 'required|string|max:255',
        ]);

        $user = Auth::user();
    
        // Update only the 'name' field and retain the 'email' and 'password' from the existing user
        $user->update([
            'email' => $this->email,  // Only update the name
        ]);

        $this->alert('success', 'Email updated successfully!');
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
    


    // Handle Account Deletion
    public function deleteAccount() {
        // Validate the password field
        $this->validate([
            'delete_password' => 'required|string',
        ]);
    
        // Check if the user is authenticated
        $user = Auth::user();
    
        // If the user is not authenticated (null), show an error message
        if (!$user) {
            session()->flash('error', 'User is not authenticated.');
            return;
        }
    
        // Check if the provided password matches the stored password
        if (!Hash::check($this->delete_password, $user->password)) {
            session()->flash('error', 'The password is incorrect.');
            return;
        }
    
        // Delete the user account
        $user->delete();
    
        // Log the user out after deletion
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
    
        // Show success message and redirect to the home page
        $this->alert('success', 'Your account has been deleted successfully.');
        return redirect()->route('homepage');
    }
    
    public function render() {
        return view('livewire.profile-page');
    }
}
