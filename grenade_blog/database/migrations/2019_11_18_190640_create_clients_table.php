<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('firstName');
            $table->string('address');
            $table->string('email');
           // $table->integer('password');
            $table->timestamps();
        });


       // Schema::table('clients', function (Blueprint $table) {
   // $table->renameColumn('prenom', 'firstName');
//});

   // Schema::table('clients', function (Blueprint $table) {
   // $table->renameColumn('adresse', 'address');
//});

   // Schema::table('clients', function (Blueprint $table) {
    //$table->renameColumn('mdp', 'password');
   //});
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
