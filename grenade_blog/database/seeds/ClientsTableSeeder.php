<?php

use Illuminate\Database\Seeder;
use App\Models\Client;
class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count=10;
         factory(Client::class, $count)->create();
    }
}
