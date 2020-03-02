<?php

use Illuminate\Database\Seeder;

class TestQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Factory(\App\TestQuestion::class,20)->create();
    }
}
