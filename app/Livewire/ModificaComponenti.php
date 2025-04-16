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

    public $component;

    public function mount($componentId){
        $component =ComponentModel::find($componentId);

        $this->name = $component->name;
        $this->category = $component->category;
        $this->upc = $component->upc;
        $this->price = $component->price;
        $this->brand = $component->brand;
        $this->description = $component->description;
        $this->img = $component->img;

        $this->component=$component;
    }

public function updateComponenti(){
$this->component->update(
    [
        'name' => $this->name,
        'category' => $this->category,
        'upc' => $this->upc,
        'price' => $this->price,
        'brand' => $this->brand,
        'description' => $this->description,
        'img' => $this->img
    ]
);
return redirect(route('component.indice'));
}

    public function render()
    {
        return view('livewire.modifica-componenti');
    }
}
