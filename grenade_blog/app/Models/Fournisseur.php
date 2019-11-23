<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    public function factures3()

    {
        return $this->hasMany('App\Facture', 'foreign_key');
    }
    public function produits()

    {
        return $this->hasMany('App\Produit');
    }

}
