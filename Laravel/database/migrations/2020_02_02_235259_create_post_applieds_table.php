<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostAppliedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_applieds', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->unsignedBigInteger('post_id')->nullable(true);

            
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')
                ->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign('post_id')->references('id')
                ->on('posts')->onUpdate('CASCADE')->onDelete('SET NULL');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_applieds');
    }
}
