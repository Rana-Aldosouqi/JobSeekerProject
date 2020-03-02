<?php

use Illuminate\Database\Seeder;

class UserAnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Factory(\App\UserAns::class,20)->create();
    }
}
