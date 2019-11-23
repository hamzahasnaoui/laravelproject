<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
     public function fournisseurs()
    {
        return $this->belongsToMany('App\Fournisseur');
    }


     public function Clients()
    {
        return $this->belongsToMany('App\Client');
 
    }


    
}
