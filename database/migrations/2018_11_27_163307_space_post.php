<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SpacePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('space_post', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('space_id');
        $table->foreign('space_id')->references('id')->on('spaces');
        $table->unsignedInteger('post_id');
        $table->foreign('post_id')->references('id')->on('user_posts');
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
      Schema::dropIfExists('space_post');
    }
  }
