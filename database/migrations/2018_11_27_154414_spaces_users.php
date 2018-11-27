<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SpacesUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('spaces_users', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('space_id');
        $table->foreign('space_id')->references('id')->on('spaces');
        $table->unsignedInteger('user_posts_id');
        $table->foreign('user_posts_id')->references('id')->on('user_posts');
        $table->unsignedInteger('users_id');
        $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('spaces_users');
    }
}
