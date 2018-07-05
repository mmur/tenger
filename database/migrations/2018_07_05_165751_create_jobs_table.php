<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable(false);
            $table->string('en_title')->nullable(false);
            $table->string('duty')->nullable(false);
            $table->string('en_duty')->nullable(false);
            $table->string('requirements')->nullable(false);
            $table->string('en_requirements')->nullable(false);
            $table->string('contact')->nullable(false);
            $table->string('en_contact')->nullable(false);
            $table->string('ends_on')->nullable(true);
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
        Schema::dropIfExists('jobs');
    }
}
