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
        Schema::create('payment_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->constrained('payments');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->string('bank_name')->nullable();
            $table->integer('payment_detail_value');
            $table->enum('payment_detail_status', ['Lunas', 'DP Langsung Lunas', 'DP', 'DP 2', 'Lunas + DP 1', 'Lunas + DP 2', 'DP Tidak Dilunasi', 'DP Tidak Dilunasi + Refund', 'DP Tidak Dilunasi + Reschedule'])->nullable();
            $table->integer('change')->nullable();
            $table->string('card_number')->nullable();
            $table->string('reference_number')->nullable();
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
        Schema::dropIfExists('payment_details');
    }
};
