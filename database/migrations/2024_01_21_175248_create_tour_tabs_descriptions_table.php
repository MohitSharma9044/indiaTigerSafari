<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourTabsDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_tabs_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_tab_id')->constrained('tour_tabs')->onDelete('cascade');
            $table->longText('tour_tabs_desc')->nullable();
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
        Schema::dropIfExists('tour_tabs_descriptions');
    }
}
