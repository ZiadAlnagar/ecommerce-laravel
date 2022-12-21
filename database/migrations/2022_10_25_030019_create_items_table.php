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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('brand_id')->constrained()->cascadeOnUpdate();
            $table->string('name')->unique();
            $table->string('specifications');
            $table->string('description');
            $table->unsignedSmallInteger('stock');
            $table->unsignedSmallInteger('sold')->default(0);
            $table->unsignedBigInteger('reviews_count')->default(0);
            $table->unsignedTinyInteger('avg_rating')->default(0);
            $table->float('price');
            $table->integer('views')->default(0);
            $table->tinyInteger('state');
            $table->tinyInteger('deal')->default(0);
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
        Schema::dropIfExists('items');
    }
};
