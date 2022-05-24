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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('units');
            $table->integer('level');
            $table->integer('product_lvl_price');
            $table->integer('durability');
            $table->boolean('enchant')->default(0);
            $table->integer('product_enchant_price');
            $table->integer('enchant_life')->default(0);
            $table->integer('enchant_mana')->default(0);
            $table->integer('enchant_speed')->default(0);
            $table->integer('enchant_strength')->default(0);
            $table->integer('enchant_physical_protection')->default(0);
            $table->integer('enchant_magic_protection')->default(0);
            $table->integer('enchant_physical_attack')->default(0);
            $table->integer('enchant_magic_attack')->default(0);
            $table->boolean('breakage_guarantee')->default(0);
            $table->integer('breakage_guarantee_months')->default(0);
            $table->boolean('theft_guarantee')->default(0);
            $table->integer('theft_guarantee_months')->default(0);
            $table->integer('product_total_price');
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
        Schema::dropIfExists('carts');
    }
};
