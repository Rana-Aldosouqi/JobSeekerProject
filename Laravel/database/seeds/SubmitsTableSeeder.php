<?php

use Illuminate\Database\Seeder;

class SubmitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(\App\Submit::class,20)->create();
    }
}
