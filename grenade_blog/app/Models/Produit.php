<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function commandes1()

    {
        return $this->hasMany('App\Commande', 'foreign_key');
    }

     public function fournisseur2()
    {
        return $this->belongsToMany('App\Fournisseur');
 
    }
}
