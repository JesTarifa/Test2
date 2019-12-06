<?php

use App\Enclosure;
use Illuminate\Database\Seeder;

class EnclosuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Enclosure;
        $a->name = 'Central enclosure';
        $a->save();

        $b = new Enclosure;
        $b->name = 'West enclosure';
        $b->save();

        $c = new Enclosure;
        $c->name = 'East enclosure';
        $c->save();

        $d = new Enclosure;
        $d->name = 'South enclosure';
        $d->save();
    }
}
