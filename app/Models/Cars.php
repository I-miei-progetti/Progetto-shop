<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable =['brand','name','year','img','price','seller','user_id'];

    // creo funnzione di relazione 1-N dove un solo venditore può avere più auto in vendita e quindi la funzione sarà al singolare
    public function user(){
        return $this->belongsTo(User::class); //? colleghiamo il venditore collegato al prodotto con belongsTo
    }

}
