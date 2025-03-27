<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable =[ 'name', 'category','upc','price' ,'brand', 'description','img'];
}
