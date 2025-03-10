<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Contact Us - BomBazJuice')]
class ContactUsPage extends Component
{
    public function render()
    {
        return view('livewire.contact-us-page');
    }
}
