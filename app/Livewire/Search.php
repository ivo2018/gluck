<?php

namespace App\Livewire;

use App\Models\Codigoiva;
use Livewire\Component;

class Search extends Component
{
    public $searchTerm;
    public function render()
    {
   
         return view('livewire.search');

    }
}
