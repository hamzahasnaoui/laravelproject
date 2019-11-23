<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

    public function produits()
    {
        return $this->belongsToMany('App\Produit');
    }



     public function clients2()
    {
        return $this->belongsToMany('App\Client');
    }





}

