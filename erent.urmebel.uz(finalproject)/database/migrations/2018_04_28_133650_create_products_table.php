<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('address')->nullable();
            $table->integer('price')->nullable();
            $table->string('price_type')->nullable();
            $table->integer('rooms')->default(0);
            $table->integer('area')->default(0);
            $table->integer('views')->default(0);
            $table->integer('rating')->default(0);
            $table->integer('votes')->default(0);
            $table->integer('checked')->default(0);
            $table->integer('user_id')->default(0);

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
}
