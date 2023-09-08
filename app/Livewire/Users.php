<?php

namespace App\Livewire;

use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;

use function Laravel\Prompts\search;

class Users extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme="bootstrap";
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $users = User::where('name','LIKE','%'.$this->search . '%')
        ->orWhere('email','LIKE','%'.$this->search . '%')->paginate();
        return view('livewire.users',compact('users'));
    }
}
