<?php

namespace App\Livewire;

use App\Models\Codigoiva;

use Livewire\WithPagination;
use Livewire\Component;
/*
class Codigosiva extends Component
{
  

    public $search;
    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
 
    $codigosiva=Codigoiva::where('nombre','LIKE','%' . $this->search . '%')->latest('id')->get();
     return view('livewire.codigosiva',compact('codigosiva'));
     
      //$codigosiva=Codigoiva::where('nombre','LIKE', "%{$this->search}%")->get();
     //   Post::where(‘body’, 'LIKE', "%{$this->search}%")->get()
      
  /* return view('livewire.codigosiva',[
    'codigosiva' =>Codigoiva::where(
        'nombre',
        'LIKE',
        '%'.$this->search.'%'
        )->get()
    ]);
   
    }

}

*/