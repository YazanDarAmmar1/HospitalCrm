<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_ar')->nullable();
            $table->string('contract_date')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('cr_no')->nullable();
            $table->longText('place')->nullable();
            $table->longText('place_ar')->nullable();
            $table->string('contact1')->nullable();
            $table->string('contact2')->nullable();
            $table->string('email')->nullable();
            $table->longText('address')->nullable();
            $table->longText('address_ar')->nullable();
            $table->string('website')->nullable();
            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->bigInteger('provider_type')->unsigned();
            $table->foreign('provider_type')->references('id')->on('providers')->cascadeOnDelete();
            $table->bigInteger('card_type')->unsigned();
            $table->foreign('card_type')->references('id')->on('card_types')->cascadeOnDelete();
            $table->longText('description')->nullable();
            $table->longText('description_ar')->nullable();
            $table->longText('comment')->nullable();
            $table->string('status');
            $table->string('on_off');
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
        Schema::dropIfExists('hospitals');
    }
}
