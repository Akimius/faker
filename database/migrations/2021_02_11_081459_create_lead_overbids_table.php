<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadOverbidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
//        Schema::create('lead_overbid', function (Blueprint $table) {
//            $table->id();
//            $table->timestamp('creationDatetime')->default(now());
//            $table->integer('leadId');
//            //$table->string('email');
//            $table->integer('partnerId');
//            $table->integer('campaignId');
//            $table->integer('oldBid'); // USD
//            $table->integer('newBid'); // USD
//            $table->integer('overBid'); // USD
//            $table->integer('status')->default(0);
//            $table->integer('overBidPartnerId');
//            $table->integer('overBidCampaignId');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        //Schema::dropIfExists('lead_overbid');
    }
}
