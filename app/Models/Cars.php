<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/// importo il trait Searchable per rendere la tabella ricercabile
use Laravel\Scout\Searchable;

class Cars extends Model
{
   // importo il trait Searchable per rendere la tabella ricercabile
    use Searchable;
    // creo la tabella cars
    protected $fillable =['brand','name','year','img','price','seller','user_id'];

    // creo funnzione di relazione 1-N dove un solo venditore può avere più auto in vendita e quindi la funzione sarà al singolare
    public function user(){
        return $this->belongsTo(User::class); //? colleghiamo il venditore collegato al prodotto con belongsTo
    }



    // creo la funzione per la ricerca
    public function toSearchableArray(){
        return [
            'id' => $this->id,
            'brand' => $this->brand,
            'name' => $this->name,
            'year' => $this->year,
            'img' => $this->img,
            'price' => $this->price,
            'seller' => $this->user->name, //? collego il venditore all'auto
        ];
    }
}
