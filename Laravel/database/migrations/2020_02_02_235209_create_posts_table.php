<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->string('job_title')->nullable(true);
            $table->unsignedBigInteger('category_id')->nullable(true);
            $table->string('experience')->nullable(true);
            $table->unsignedInteger('career_level')->nullable(true);
            $table->unsignedInteger('type')->nullable(false);

            //$table->unsignedBigInteger('language_id')->nullable(true);
            $table->float('min_salary')->nullable(true);
            $table->float('max_salary')->nullable(true);
            $table->unsignedInteger('vacancies')->nullable(true);
            $table->unsignedInteger('min_age')->nullable(true);
            $table->unsignedInteger('max_age')->nullable(true);
            $table->text('other')->nullable(true);
            $table->date('expiration_date')->nullable(true);

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');

           // $table->foreign('language_id')->references('id')
            //   ->on('languages')->onUpdate('CASCADE')->onDelete('SET NULL');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
