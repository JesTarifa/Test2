<?php

use App\Animal;
use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Animal;
        $a->name = 'Leo';
        $a->weight=350;
        $a->enclosure_id = 1;
        $a->save();
        factory(App\Animal::class,20)->create();
    }
}
