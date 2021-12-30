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
            $table->id();
            $table->string('title');
<<<<<<< HEAD
            $table->string('short_desc');
            $table->string('cover_image')->nullable();
            $table->text('text');
            $table->string('slug');
=======
            $table->string('slug')->unique();
            $table->string('cover_image')->nullable();
            $table->text('text');
>>>>>>> 150aa9e46c940d2035e30a74cc3718acf72f2ef5
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
        Schema::dropIfExists('posts');
    }
}
