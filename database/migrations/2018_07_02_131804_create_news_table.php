<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 128);
            $table->string('description', 512);
            //$table->string('image', 512)->nullable(true);
            //$table->string('logo', 512)->nullable(true);
            $table->longText('body')->nullable(true);
            $table->string('category')->nullable(true);
            $table->enum('language', ['en', 'mn'])->default('mn');
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
        Schema::dropIfExists('news');
    }
}
