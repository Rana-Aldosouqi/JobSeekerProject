<?php

use Illuminate\Database\Seeder;

class PostAppliedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\PostApplied::class,20)->create();
    }
}
