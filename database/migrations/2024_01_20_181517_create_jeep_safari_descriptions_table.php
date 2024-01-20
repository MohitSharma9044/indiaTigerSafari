<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJeepSafariDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeep_safari_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jeep_title_id')->constrained('jeep_safari_titles')->onDelete('cascade');
            $table->longText('jeep_description')->nullable();
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
        Schema::dropIfExists('jeep_safari_descriptions');
    }
}
