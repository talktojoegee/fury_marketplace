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
        Schema::create('bulk_sms_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->double('debit')->default(0)->comment('amount in #');
            $table->double('credit')->default(0)->comment('amount in #');
            $table->double('no_units')->default(0)->comment('# of units');
            $table->double('unit_debit')->default(0)->comment('unit debit side');
            $table->double('unit_credit')->default(0)->comment('unit credit side');
            $table->string('narration')->nullable();
            $table->string('ref_no')->nullable();
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
        Schema::dropIfExists('bulk_sms_accounts');
    }
};
