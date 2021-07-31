<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankaccounts', function (Blueprint $table) {
            $table->id();
            $table->uuid('model_id');
            $table->string('model_type');
            $table->index(['model_id', 'model_type']);
            $table->string('card_holder');
            $table->string('card_type');
            $table->integer('card_balance')->default(0);
            $table->string('card_number');
            $table->string('card_branch');
            $table->string('card_city');
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
        Schema::dropIfExists('bankaccounts');
    }
}
