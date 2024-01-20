<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsAndConditionDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms_and_condition_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('terms_title_id')->constrained('terms_and_condition_titles')->onDelete('cascade');
            $table->longText('terms_description')->nullable();
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
        Schema::dropIfExists('terms_and_condition_descriptions');
    }
}
