<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJeepSafariTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeep_safari_titles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jeep_id')->constrained('jeep_safaris')->onDelete('cascade');
            $table->string('jeep_title')->nullable();
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
        Schema::dropIfExists('jeep_safari_titles');
    }
}
