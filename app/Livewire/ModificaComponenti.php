<?php

namespace App\Livewire;
use App\Models\Component as ComponentModel;
use Livewire\Component;

class ModificaComponenti extends Component
{

    public $name;
    public $category;
    public $upc;
    public $price;
    public $brand;
    public $description;
    public $img;

    public function mount($componentId){
        $component =ComponentModel::find($componentId);

        $this->name = $component->name;
        $this->category = $component->category;
        $this->upc = $component->upc;
        $this->price = $component->price;
        $this->brand = $component->brand;
        $this->description = $component->description;
        $this->img = $component->img;
    }

    public function render()
    {
        return view('livewire.modifica-componenti');
    }
}
