<?php

namespace App\Http\Livewire;

use App\Mail\SendMail;
use App\Mail\SendMail2;
use App\Mail\SendMail3;
use App\Mail\SendMail4;
use Livewire\Component;
use App\Models\Form;
use App\Models\Reason;
use Illuminate\Support\Facades\Mail;

class Forms extends Component
{
    public $reasons, $name, $telephone, $email, $comment, $reason_id;

    public $checkbox = false;

    public function render()
    { // $his->reasons = alle models uit de database en geeft de view terug
        $this->reasons = Reason::all();
        return view('livewire.forms.index');
    }

    public function mail()
    {
        $data = 'Mail1 is succesvol verstuurd';
        Mail::to($this->email)->send(new SendMail($data));

        return '';
    }

    public function mail2()
    {
        $data = 'Mail2 is succesvol verstuurd';
        Mail::to($this->email)->send(new SendMail2($data));

        return '';
    }

    public function mail3()
    {
        $data = 'Mail3 is succesvol verstuurd';
        Mail::to($this->email)->send(new SendMail3($data));

        return '';
    }

    public function mail4()
    {
        $data = 'Mail4 is succesvol verstuurd';
        Mail::to($this->email)->send(new SendMail4($data));

        return '';
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'telephone' => 'nullable',
            'email' => 'required|email:rfc,dns',
            'comment' => 'nullable',
            'reason_id' => 'required',
            'checkbox' => 'accepted'
        ]);

        Form::create($validatedData);
        
        if ($this->reason_id == 1) {
            $this->mail();
        } elseif ($this->reason_id == 2) {
            $this->mail2();
        } elseif ($this->reason_id == 3) {
            $this->mail3();
        } else {
            $this->mail4();
        }
        
        return redirect()->to('/dashboard');
    }
}
