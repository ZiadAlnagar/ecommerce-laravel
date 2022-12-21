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
        Schema::create('coupon_applicables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coupon_id');
            $table->unsignedBigInteger('applicable_id');
            $table->string('applicable_type'); // Brand, Category, item, Any
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
        Schema::dropIfExists('coupon_applicables');
    }
};
