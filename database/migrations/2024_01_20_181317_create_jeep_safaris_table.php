<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJeepSafarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeep_safaris', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();
            $table->string('jeep_image_1')->nullable();
            $table->string('jeep_image_2')->nullable();
            $table->string('jeep_button_text_1')->nullable();
            $table->string('jeep_button_text_2')->nullable();
            $table->string('jeep_button_link_1')->nullable();
            $table->string('jeep_button_link_2')->nullable();
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
        Schema::dropIfExists('jeep_safaris');
    }
}
