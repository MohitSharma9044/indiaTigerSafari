<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->longText('main_content')->nullable();
            $table->string('address')->nullable();
            $table->string('address_content')->nullable();
            $table->string('call_title')->nullable();
            $table->string('call_number')->nullable();
            $table->string('email_title')->nullable();
            $table->string('email_address')->nullable();
            $table->string('banner_image')->nullable();
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
        Schema::dropIfExists('contact_us');
    }
}
