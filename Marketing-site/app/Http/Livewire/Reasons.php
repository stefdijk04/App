<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reason;

class Reasons extends Component
{
    public $reasons, $name, $reason_id;
    public $updateMode = false;

    public function render()
    {
        $this->reasons = Reason::all();
        return view('livewire.reasons.index');
    }

    
    private function resetInputFields(){
        $this->name = '';
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required'
        ]);
  
        Reason::create($validatedDate);
  
        session()->flash('message', 'Gelukt, veld aangemaakt!');
  
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $reason = Reason::findOrFail($id);
        $this->reason_id = $id;
        $this->name = $reason->name;
  
        $this->updateMode = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);
  
        $reason = Reason::find($this->reason_id);
        $reason->update([
            'name' => $this->name
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Gelukt, veld aangepast!');
        $this->resetInputFields();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Reason::find($id)->delete();
        session()->flash('message', 'Gelukt, veld verwijderd!');
    }
}
