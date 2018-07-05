<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_phone')->nullable(true);

            $table->string('stat1_text')->nullable(true);
            $table->string('en_stat1_text')->nullable(true);
            $table->integer('stat1_number')->nullable(true);
            $table->string('stat2_text')->nullable(true);
            $table->string('en_stat2_text')->nullable(true);
            $table->integer('stat2_number')->nullable(true);
            $table->string('stat3_text')->nullable(true);
            $table->string('en_stat3_text')->nullable(true);
            $table->integer('stat3_number')->nullable(true);
            $table->string('stat4_text')->nullable(true);
            $table->string('en_stat4_text')->nullable(true);
            $table->integer('stat4_number')->nullable(true);
            $table->string('stat5_text')->nullable(true);
            $table->string('en_stat5_text')->nullable(true);
            $table->integer('stat5_number')->nullable(true);

            $table->string('stat_title')->nullable(true);
            $table->string('en_stat_title')->nullable(true);
            $table->integer('slider_id')->nullable(false);
            $table->integer('image_id')->nullable(true);
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
        Schema::dropIfExists('home_pages');
    }
}
