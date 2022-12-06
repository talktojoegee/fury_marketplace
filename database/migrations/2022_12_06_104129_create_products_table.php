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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id');
            $table->integer('brand_id')->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('quantity_alert')->default(1)->comment('notify vendor when products...');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('tags')->nullable();
            $table->double('normal_price')->default(0);
            $table->double('active_price')->default(0);
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
        Schema::dropIfExists('products');
    }
};
