<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('tour_name')->unique();
            $table->string('tour_slug')->unique();
            $table->string('tour_online_title')->nullable();
            $table->string('tour_online_short_desc')->nullable();
            $table->string('tour_package_title')->nullable();
            $table->string('tour_package_short_desc')->nullable();
            $table->string('tour_service_title')->nullable();
            $table->string('tour_service_short_desc')->nullable();
            $table->string('tour_overview_title1')->nullable();
            $table->string('tour_overview_title2')->nullable();
            $table->string('tour_online_icon_image')->nullable();
            $table->string('tour_package_icon_image')->nullable();
            $table->string('tour_service_icon_image')->nullable();
            $table->string('tour_overview_image1')->nullable();
            $table->string('tour_overview_image2')->nullable();
            $table->string('tour_status')->default('Enabled');
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
        Schema::dropIfExists('tours');
    }
}
