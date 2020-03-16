<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('test_id')->nullable(true);
            $table->text('que_desc')->nullable(true);
            $table->string('ans1',100)->nullable(true);
            $table->string('ans2',100)->nullable(true);
            $table->string('ans3',100)->nullable(true);
            $table->string('ans4',100)->nullable(true);
            $table->unsignedInteger('true_ans')->nullable(true);
            $table->timestamps();
         
            $table->foreign('test_id')
                ->references('id')
                ->on('tests')
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
        Schema::dropIfExists('test_questions');
    }
}
