<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Component as ComponentModel;

class Utility extends Component
{
    use WithFileUploads;

    public $name;
    public $category;
    public $upc;
    public $price;
    public $brand;
    public $description;
    public $img;

    public function saveData()
    {
        ComponentModel::create([
            'name'=>$this-> name,
            'category'=>$this->category,
            'upc'=>$this->upc,
            'price' => (float) $this->price,
            'brand'=>$this->brand,
            'description'=>$this->description,
            'img' => $this->img->store('cover', 'public') 
        ]);

        $this->reset();
        session()->flash('message', 'Componente salvato con successo!');


        
    }
    public function render()
    {
        return view('livewire.utility');
    }
}
