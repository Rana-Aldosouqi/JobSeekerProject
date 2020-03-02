<?php

use Illuminate\Database\Seeder;

class TestResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Factory(\App\TestResult::class,20)->create();
    }
}
