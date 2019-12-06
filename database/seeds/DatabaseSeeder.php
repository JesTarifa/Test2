<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(EnclosuresTableSeeder::class);
        $this->call(AnimalTableSeeder::class);
        $this->call(KeeperTableSeeder::class);
        $this->call(EmergencyContactSeeder::class);
    }
}
