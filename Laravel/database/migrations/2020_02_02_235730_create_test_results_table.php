<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_results', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->unsignedBigInteger('test_id')->nullable(true);
            $table->float('score')->nullable(true);

            $table->timestamps();

           $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign('test_id')->references('id')->on('tests')->onUpdate('CASCADE')->onDelete('SET NULL');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_results');
    }
}
