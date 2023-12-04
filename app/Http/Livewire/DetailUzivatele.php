<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class DetailUzivatele extends Component
{
    public $userId;
    public $userName;
    public $userEmail;
    public $userVerified;

    public function mount(int $userId){
        $user = User::find($userId);

        $this->userId=$userId;
        $this->userName = $user->name;
        $this->userEmail = $user->email;
        $this->userVerified = $user->email_verifed_at;
    }

    public function rename(){
        $user= User::find($this->userId);

        $user->name = $this->userName;
        $user->save();

        $this->mount($this->userId);
    }




    public function render()
    {
        return view('livewire.detail-uzivatele');
    }
}
