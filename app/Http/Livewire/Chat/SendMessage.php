<?php

namespace App\Http\Livewire\Chat;

use App\Events\MessageSent;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class SendMessage extends Component
{
    use WithFileUploads;
    public $selectedConversation;
    public $receiverInstance;
    public $body;

    public $arquivo;
    public $createdMessage;
    protected $listeners = ['updateSendMessage', 'dispatchMessageSent', 'resetComponent'];


    public function resetComponent()
    {

        $this->selectedConversation = null;
        $this->receiverInstance = null;

        # code...
    }



    function updateSendMessage(Conversation $conversation, User $receiver)
    {
        //  dd($conversation,$receiver);
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;
        # code...
    }




    public function sendMessage()
    {
        if ($this->body == null) {
            return null;
        }
        if ($this->arquivo != null) {
            $this->arquivo = $this->arquivo->store('arquivo');
        }
        $this->createdMessage = Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'sender_id' => auth()->id(),
            'receiver_id' => $this->receiverInstance->id,
            'body' => $this->body,
            'arquivo' => $this->arquivo,
        ]);


        $this->selectedConversation->last_time_message = $this->createdMessage->created_at;
        $this->selectedConversation->save();
        $this->emitTo('chat.chatbox', 'pushMessage', $this->createdMessage->id);

        //reshresh coversation list 
        $this->emitTo('chat.chat-list', 'refresh');
        $this->reset('body');
        $this->reset('arquivo');

        $this->emitSelf('dispatchMessageSent');
        // dd($this->body);
        # code..
    }



    public function dispatchMessageSent()
    {

        broadcast(new MessageSent(Auth()->user(), $this->createdMessage, $this->selectedConversation, $this->receiverInstance));
        # code...
    }
    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
