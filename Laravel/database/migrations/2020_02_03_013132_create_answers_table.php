<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->unsignedBigInteger('question_id')->nullable(true);
            $table->text('answer');
            $table->boolean('correct')->default(false);
//            $table->text('que_desc')->nullable(false);
//            $table->string('ans1',100)->nullable(true);
//            $table->string('ans2',100)->nullable(true);
//            $table->string('ans3',100)->nullable(true);
//            $table->string('ans4',100)->nullable(true);
//            $table->unsignedInteger('true_ans')->nullable(true);
//            $table->unsignedInteger('your_ans')->nullable(true);
            $table->timestamps();

            $table->foreign('question_id')
                  ->references('id')
                  ->on('questions')
                    ->onUpdate('CASCADE')
                    ->onDelete('SET NULL');


//            $table->foreign('user_id')
//                ->references('id')
//                ->on('users')
//                ->onUpdate('CASCADE')
//                ->onDelete('SET NULL');
//
//            $table->foreign('test_id')
//                ->references('id')
//                ->on('tests')
//                ->onUpdate('CASCADE')
//                ->onDelete('SET NULL');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_ans');
    }
}
