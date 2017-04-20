<?php

use Illuminate\Database\Seeder;

class ServiceOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_order')->truncate();
        Factory(\mecanica\ServiceOrder::class,20)->create();
    }
}
