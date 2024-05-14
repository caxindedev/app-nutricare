<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;
use App\Models\Message;
use App\Models\Turma;

class ChatList extends Component
{


    public $auth_id;
    public $users, $turmas;
    public $conversations;
    public $receiverInstance;
    public $name;
    public $selectedConversation;


    public $message = 'Cordiais Saudações';


    public function checkconversation($receiverId)
    {

        $checkedConversation = Conversation::where('receiver_id', auth()->user()->id)->where('sender_id', $receiverId)->orWhere('receiver_id', $receiverId)->where('sender_id', auth()->user()->id)->get();


        if (count($checkedConversation) == 0) {

            // dd(no conversation);

            $createdConversation = Conversation::create(['receiver_id' => $receiverId, 'sender_id' => auth()->user()->id, 'last_time_message' => today()]);
            /// conversation created 

            $createdMessage = Message::create(['conversation_id' => $createdConversation->id, 'sender_id' => auth()->user()->id, 'receiver_id' => $receiverId, 'body' => $this->message]);


            $createdConversation->last_time_message = $createdMessage->created_at;
            $createdConversation->save();

            /* dd($createdMessage);
            dd('saved');
     */


        } else if (count($checkedConversation) >= 1) {

            dd(
                'conversation exists'
            );
        }
        # code...
    }
    protected $listeners = ['chatUserSelected', 'refresh' => '$refresh', 'resetComponent'];




    public function resetComponent()
    {

        $this->selectedConversation = null;
        $this->receiverInstance = null;

        # code...
    }


    public function chatUserSelected(Conversation $conversation, $receiverId)
    {

        //  dd($conversation,$receiverId);
        $this->selectedConversation = $conversation;
        $receiverInstance = User::find($receiverId);
        $this->emitTo('chat.chatbox', 'loadConversation', $this->selectedConversation, $receiverInstance);
        $this->emitTo('chat.send-message', 'updateSendMessage', $this->selectedConversation, $receiverInstance);

        # code...
    }
    public function getChatUserInstance(Conversation $conversation, $request)
    {
        # code...
        $this->auth_id = auth()->id();
        //get selected conversation 

        if ($conversation->sender_id == $this->auth_id) {
            $this->receiverInstance = User::firstWhere('id', $conversation->receiver_id);
            # code...
        } else {
            $this->receiverInstance = User::firstWhere('id', $conversation->sender_id);
        }

        if (isset($request)) {

            return $this->receiverInstance->$request;
            # code...
        }
    }
    public function mount()
    {
        $this->turmas = Turma::all();
        $this->users = User::with('role')->get();
        #dd($this->user->role[0]->name);
        $this->auth_id = auth()->id();
        $this->conversations = Conversation::where('sender_id', $this->auth_id)
            ->orWhere('receiver_id', $this->auth_id)->orderBy('last_time_message', 'DESC')->get();

        # code...
    }

    public function render()
    {

        return view('livewire.chat.chat-list');
    }
}
