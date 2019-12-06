<?php

use App\EmergencyContact;
use Illuminate\Database\Seeder;

class EmergencyContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new EmergencyContact;
        $a->name = 'Jose';
        $a->phone_number = '686199554';
        $a->animal_id = 1;
        $a->save();
    }
}
