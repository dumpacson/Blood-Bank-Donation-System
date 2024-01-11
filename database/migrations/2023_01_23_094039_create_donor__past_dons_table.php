<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor__past_dons', function (Blueprint $table) {
            $table->string('donor_id', 8);
            $table->string('no_donation', 3);
            $table->string('blood_amount', 3);
            $table->date('date_Donation');
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
        Schema::dropIfExists('donor__past_dons');
    }
};
