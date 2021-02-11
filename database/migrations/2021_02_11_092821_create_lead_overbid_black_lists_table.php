<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadOverbidBlackListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_overbid_black_list', function (Blueprint $table) {
            $table->id();
            $table->timestamp('creationDatetime')->default(now());
            $table->integer('leadId');
            $table->integer('partnerId');
            $table->integer('campaignId');
            $table->integer('oldBid'); // USD
            $table->integer('newBid'); // USD
            $table->integer('overBid'); // USD
            $table->integer('status')->default(0);
            $table->integer('auctionId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_overbid_black_list');
    }
}
