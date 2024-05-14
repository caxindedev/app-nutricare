<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mensagem;

class Chat extends Component
{
    public $mensagens;
    public $sms = "";
    public function mount(){
        $this->mensagens = Mensagem::all();
    }
    public function render()
    {
        return view('livewire.chat')->layout("templates.auth");
    }
}
