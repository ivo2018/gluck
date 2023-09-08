<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Codigoiva;
use Livewire\WithPagination;

use function Laravel\Prompts\search;


class Codigos extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $codigosiva=Codigoiva::where('nombre','LIKE','%' . $this->search. '%')->latest('id')->get();
       
        return view('livewire.codigos',compact('codigosiva'));
    } 
}
