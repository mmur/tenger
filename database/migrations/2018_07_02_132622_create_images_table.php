<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('img_url')->nullable(false);
            $table->string('path')->nullable(true);
            $table->string('link_url')->nullable(true);
            $table->string('en_link_btn_text')->nullable(true);
            $table->string('en_link_btn_title')->nullable(true);
            $table->string('en_link_btn_description')->nullable(true);
            $table->string('link_btn_text')->nullable(true);
            $table->string('link_btn_title')->nullable(true);
            $table->string('link_btn_description')->nullable(true);
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
        Schema::dropIfExists('images');
    }
}
