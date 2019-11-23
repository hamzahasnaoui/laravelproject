<?php

use Illuminate\Database\Seeder;
use App\Models\Commande;
class CommandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count=10;
         factory(Commande::class, $count)->create();
    }
}
