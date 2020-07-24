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

            $table->string('career_level')->nullable(true);


            $table->unsignedInteger('jobtype')->nullable(true);

            $table->string('type')->nullable(true);
            $table->string('company')->nullable(true);

            //$table->unsignedBigInteger('language_id')->nullable(true);
            $table->float('min_salary')->nullable(true);
            $table->float('max_salary')->nullable(true);
            $table->unsignedInteger('vacancies')->nullable(true);
            $table->unsignedInteger('min_age')->nullable(true);
            $table->unsignedInteger('max_age')->nullable(true);
            $table->text('age')->nullable(true);
            $table->text('other')->nullable(true);
            $table->date('expiration_date')->nullable(true);
            $table->text('city')->nullable(true);
            $table->date('date_start_at')->nullable(true);
            $table->date('date_end_at')->nullable(true);
            $table->unsignedInteger('hastest')->nullable(true);
            $table->unsignedInteger('time_start_at')->nullable(true);
            $table->unsignedInteger('time_end_at')->nullable(true);
            $table->boolean('published')->default(false);
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

        //   $table->foreign('language_id')->references('id')
          //     ->on('languages')->onUpdate('CASCADE')->onDelete('SET NULL');

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
        Schema::dropIfExists('posts');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');



    }
}
