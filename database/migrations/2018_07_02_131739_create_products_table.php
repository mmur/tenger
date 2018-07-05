<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 128);
            $table->string('description', 512);
            $table->string('logo', 512)->default("");
            $table->longText('body')->nullable(true);
            $table->string('en_title', 128);
            $table->string('en_description', 512)->default("");
            $table->longText('en_body')->nullable(true);
            $table->boolean('special')->default(false);
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
        Schema::dropIfExists('products');
    }
}
