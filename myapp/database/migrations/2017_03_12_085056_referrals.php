<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Referrals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referrals', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('relatedReferrerUserID');
            $table->integer('relatedReferralUserID');
            $table->integer('level')->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

Schema::create('help_transactions', function(Blueprint $table) {
    $table->increments('id');
    $table->integer('helpID');
    $table->string('recipientUserID');
    $table->string('payerUserID');
    $table->string('filename');
    $table->string('fileHash');
    $table->timestamps();
});
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referrals');
    }
}
