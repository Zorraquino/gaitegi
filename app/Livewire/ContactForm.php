<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\EmailController;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $selection;
    public $privacyPolicy;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
        'phone' => 'required',
        'selection' => 'required',
        'privacyPolicy' => 'accepted'
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        try {
            app(EmailController::class)->sendEmail([
                'name' => $this->name,
                'email' => $this->email,
                'message' => $this->message,
                'phone' => $this->phone
            ]);

            session()->flash('message', 'Form submitted successfully!');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to send email.');
        }

        return $this->redirect('/es/localizacion');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}