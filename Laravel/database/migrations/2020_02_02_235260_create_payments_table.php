<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->unsignedBigInteger('post_applied_id')->nullable(true);
            $table->string('method')->nullable(false);
            $table->float('amount')->nullable(false);
            $table->date('payment_date')->nullable(false);
            
            
            $table->timestamps();
            
        $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
        $table->foreign('post_applied_id')->references('id')->on('post_applieds')->onUpdate('CASCADE')->onDelete('SET NULL');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
