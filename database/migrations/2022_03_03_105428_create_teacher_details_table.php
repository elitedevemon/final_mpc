<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_details', function (Blueprint $table) {
            $table->id();
            $table->string('teacherName');
            $table->string('channelCode')->nullable();
            $table->string('selfie');
            $table->string('studioScreenShot')->nullable();
            $table->string('frontDocument');
            $table->string('backDocument');
            $table->text('professionDetails');
            $table->string('action')->default('in-process');
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
        Schema::dropIfExists('teacher_details');
    }
}
