<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayNowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_nows', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name');
            $table->string('account_no');
            $table->string('ifsc_code');
            $table->string('bank_branch');
            $table->string('gstin');
            $table->string('pan');
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
        Schema::dropIfExists('pay_nows');
    }
}
