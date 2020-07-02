<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('image_id')->nullable(true);
            $table->unsignedBigInteger('gender_id')->nullable(true);
            $table->string('first_name')->nullable(true);
            $table->string('last_name')->nullable(true);
            $table->string('email',100)->nullable(true)->unique();
            $table->string('password',100)->nullable(true);
            $table->string('username',100)->nullable(true);
            $table->date('birth_date')->nullable(true);
            $table->integer('age')->nullable(true);
            $table->string('address')->nullable(true);
            $table->boolean('is_admin')->default(false);
            $table->string('user_type',7)->nullable(true);
            $table->string('color')->nullable(true)->default('lightblue');
            $table->string('phone_number',20)->nullable(true);
            $table->timestamp('last_activity')->nullable(true);
            $table->boolean('is_active')->default(false);
            $table->string('military_service',8)->nullable(true);
            $table->date('serve_time')->nullable(true);
            $table->string('facebook_url')->nullable(true);
            $table->string('twitter_url')->nullable(true);
            $table->string('ask_url')->nullable(true);
            $table->string('linkedin_url')->nullable(true);
            $table->float('Latitude')->nullable(true)->default(38.685516);
            $table->float('longitude')->nullable(true)->default(-101.073324);
            $table->text('description')->nullable(true);
            $table->integer('rating')->nullable(true)->default(0);
            $table->string('work_field',100)->nullable(true);
            $table->string('work_times',100)->nullable(true);
            $table->string('Total_Projects',100)->nullable(true);
            $table->string('Hourly_Rate',100)->nullable(true);
            $table->string('Availability',100)->nullable(true);
            $table->date('foundation_date')->nullable(true);
            $table->string('profession',100)->nullable(true);
            $table->string('education',100)->nullable(true);
            $table->boolean('is_banned')->default(false);
            $table->timestamps();


            $table->foreign('image_id')
                ->references('id')
                ->on('images')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');

            $table->foreign('gender_id')
                ->references('id')
                ->on('genders')
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
        Schema::dropIfExists('users');

    }
}
