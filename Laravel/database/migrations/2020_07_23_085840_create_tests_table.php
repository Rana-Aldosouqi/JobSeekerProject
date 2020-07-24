<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('post_id')->nullable(true);
            $table->timestamps();
        });

            Schema::table('tests', function (Blueprint $table)
            {
                $table->foreign('post_id')
                    ->references('id')
                    ->on('posts')
                    ->onUpdate('CASCADE')
                    ->onDelete('SET NULL');
            });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('tests');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


//        Schema::dropIfExists('tests');
    }
}
