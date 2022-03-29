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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('image');
            $table->string('author_name');
            $table->longText('author_link');
            $table->string('source_website_link');
            $table->integer('lvlMin');
            $table->integer('lvlMax');
            $table->boolean('enchant');
            $table->integer('life');
            $table->integer('speed');
            $table->integer('physical_protection');
            $table->integer('magic_protection');
            $table->integer('physical_attack');
            $table->integer('physical_magic');
            $table->integer('mana');
            $table->boolean('sale');
            $table->int('price');
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
        Schema::dropIfExists('product');
    }
};
