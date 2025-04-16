<?php

namespace App\Livewire;
use App\Models\Component as ComponentModel;
use Livewire\Component;

class ComponentiTable extends Component
{
public function deleteComponenti($id){
    ComponentModel::find($id)->delete();
}


    public function render()
    {
        return view('livewire.componenti-table',[  'components' => ComponentModel::all()]);
    }
}
