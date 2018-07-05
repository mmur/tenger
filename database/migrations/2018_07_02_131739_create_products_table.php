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
            $table->string('title');
            $table->string('description');
            $table->longText('body');
            $table->string('en_title')->nullable(true);;
            $table->string('en_description')->nullable(true);
            $table->longText('en_body')->nullable(true);
            $table->boolean('special')->default(false);
            $table->integer('slider_id')->default(0);
            $table->integer('faq_id')->default(0);
            $table->enum('en_category', ['Individual Insurance', 'Corporate Insurance'])->default('Individual Insurance');
            $table->enum('category', ['Иргэдийн Даатгал', 'Байгууллагын Даатгал'])->default('Иргэдийн Даатгал');
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
