<?php
namespace App\Livewire;

use App\Models\Component as ComponentModel;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Utility extends Component
{
    use WithFileUploads;
    #[Validate('required', message: 'E\' necessario inserire un nome')]
    #[Validate('min:3', message: 'il nome dell\'articolo deve avere una lunghezza minima di 5 caratteri')]
    public $name;
    #[Validate('required', message: 'E\' necessario inserire una categoria')]
    public $category;
    #[Validate('required', message: 'E\' necessario inserire un UPC')]
    #[Validate('min:5', message: 'l\'UPC deve avere una lunghezza minima di 5 caratteri')]
    public $upc;
    #[Validate('required', message: 'E\' necessario inserire un prezzo')]
    public $price;
    #[Validate('required', message: 'E\' necessario inserire la marca dell\'articolo')]
    public $brand;
    #[Validate('required', message: 'E\' necessario inserire una descrizione')]
    #[Validate('min:5', message: 'la descrizione deve avere una lunghezza minima di 5 caratteri')]
    public $description;
    public $img;

    public function saveData()
    {
        $this->validate();
        
        ComponentModel::create([
            'name'        => $this->name,
            'category'    => $this->category,
            'upc'         => $this->upc,
            'price'       => (float) $this->price,
            'brand'       => $this->brand,
            'description' => $this->description,
            'img'         => $this->img->store('cover', 'public'),
        ]);

        $this->reset();
        session()->flash('message', 'Componente salvato con successo!');

    }
    public function render()
    {
        return view('livewire.utility');
    }
}
