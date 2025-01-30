<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

#[Title('Register - BomBazJuice')]
class RegisterPage extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $password;

    // Register User
    public function save() {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone_number' => 'required|min:11|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'password' => Hash::make($this->password),
        ]);

        return redirect()->intended();
    }
    
    public function render()
    {
        return view('livewire.auth.register-page');
    }
}