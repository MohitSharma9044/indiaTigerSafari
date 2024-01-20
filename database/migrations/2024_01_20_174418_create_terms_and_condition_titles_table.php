<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsAndConditionTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms_and_condition_titles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('terms_id')->constrained('terms_and_conditions')->onDelete('cascade');
            $table->string('terms_title')->nullable();
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
        Schema::dropIfExists('terms_and_condition_titles');
    }
}
