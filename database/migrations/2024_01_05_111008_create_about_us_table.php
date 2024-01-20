<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->longText('main_content')->nullable();
            $table->string('main_image')->nullable();
            $table->string('sub_heading_tag')->nullable();
            $table->string('sub_heading')->nullable();
            $table->longText('sub_content')->nullable();
            $table->string('heading1')->nullable();
            $table->longText('content1')->nullable();
            $table->string('heading2')->nullable();
            $table->longText('content2')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('about_us_id')->unique();
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
        Schema::dropIfExists('about_us');
    }
}
