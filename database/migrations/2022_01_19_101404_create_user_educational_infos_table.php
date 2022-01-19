<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEducationalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_educational_infos', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('work_place')->nullable();
            $table->date('start_working')->nullable();
            $table->date('end_working')->nullable();
            $table->string('past_work')->nullable();
            $table->string('educational_institute')->nullable();
            $table->date('start_reading')->nullable();
            $table->date('end_reading')->nullable();
            $table->string('graduate_institute')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_educational_infos');
    }
}
