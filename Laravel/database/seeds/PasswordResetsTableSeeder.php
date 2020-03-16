<?php

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(\App\PasswordReset::class,20)->create();
    }
}
