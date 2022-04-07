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
        Schema::table('products', function (Blueprint $table) {
            $table->string('strength');
            $table->boolean('enchant')->default(0)->change();
            $table->integer('life')->default(0)->change();
            $table->integer('speed')->default(0)->change();
            $table->integer('physical_protection')->default(0)->change();
            $table->integer('magic_protection')->default(0)->change();
            $table->integer('physical_attack')->default(0)->change();
            $table->integer('physical_magic')->default(0)->change();
            $table->integer('mana')->default(0)->change();
            $table->dropColumn('imagePosX');
            $table->dropColumn('imagePosY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('strength');
            $table->dropColumn('enchant');
            $table->dropColumn('life');
            $table->dropColumn('speed');
            $table->dropColumn('physical_protection');
            $table->dropColumn('magic_protection');
            $table->dropColumn('physical_attack');
            $table->dropColumn('physical_magic');
            $table->dropColumn('mana');
            $table->string('imagePosX');
            $table->string('imagePosY');
        });
    }
};
