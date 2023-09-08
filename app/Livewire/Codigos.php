<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Codigoiva;



class Codigos extends Component
{
    
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
