<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //protected $table= 'clients ';
   // protected $primaryKey = 'client_id';

	  
	  public function commandes()

    {
        return $this->hasMany('App\Commande', 'foreign_key');
    }

    public function factures()

    {

        return $this->hasMany('App\Facture');
    }





	 }
