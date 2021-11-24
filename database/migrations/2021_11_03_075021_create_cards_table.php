<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpr_no',13);
            $table->string('email')->nullable();
            $table->string('date')->nullable();
            $table->string('expiry')->nullable();
            $table->string('online')->nullable();
            $table->string('first_issue_date')->nullable();
            $table->bigInteger('agent_id')->nullable()->unsigned();
            $table->foreign('agent_id')->references('id')->on('users')->nullOnDelete();
            $table->string('gender')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('house')->nullable();
            $table->string('road')->nullable();
            $table->string('block')->nullable();
            $table->string('place')->nullable();
            $table->string('country')->nullable();
            $table->bigInteger('card_type_id')->nullable()->unsigned();
            $table->foreign('card_type_id')->references('id')->on('card_types')->nullOnDelete();
            $table->string('payment_method')->nullable();
            $table->string('contact_method')->nullable();
            $table->bigInteger('package_type')->nullable()->unsigned();
            $table->foreign('package_type')->references('id')->on('package_types')->nullOnDelete();
            $table->string('period')->nullable();
            $table->string('status')->nullable();
            $table->string('img')->nullable();
            $table->string('price')->nullable();
            $table->string('father_id')->nullable()->default('No Father');
            $table->string('delivery')->nullable();
            $table->string('total')->nullable();
            $table->string('balance')->nullable();
            $table->longText('comment')->nullable();
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
        Schema::dropIfExists('cards');
    }
}
