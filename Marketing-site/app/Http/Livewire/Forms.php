<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Form;
use App\Models\Reason;

class Forms extends Component
{
    public $reasons, $name, $telephone, $email, $comment, $reason_id;

    public $checkbox = false;

    public function render()
    { // $his->reasons = alle models uit de database en geeft de view terug
        $this->reasons = Reason::all();
        return view('livewire.forms.index');
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'telephone' => 'nullable',
            'email' => 'required|email',
            'comment' => 'nullable',
            'reason_id' => 'required',
            'checkbox' => 'accepted'
        ]);

        Form::create($validatedData);

        return redirect()->to('/dashboard');
    }
}
