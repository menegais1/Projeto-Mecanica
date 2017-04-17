<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ServiceOrderSeeder::class);
        $this->call(VehicleSeeder::class);
    }
}
