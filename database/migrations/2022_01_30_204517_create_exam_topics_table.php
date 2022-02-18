<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_topics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->dateTime('publish_date')->nullable();
            $table->integer('time');
            $table->boolean('status')->default(false);
            $table->boolean('publish_status')->default(false); 
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
        Schema::dropIfExists('exam_topics');
    }
}
