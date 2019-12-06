<?php

use App\Keeper;
use Illuminate\Database\Seeder;

class KeeperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Keeper;
        $a->name = 'Jose';
        $a->save();
        $a->animals()->attach(1);
        $a->animals()->attach(4);
    }
}
