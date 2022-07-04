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
            $table->string('name', 37);
            $table->string('description');
            $table->string('recommendation');
            $table->string('image');
            $table->string('author_name');
            $table->string('author_link');
            $table->string('source_website_link');
            $table->integer('lvlMin');
            $table->integer('lvlMax');
            $table->integer('enchant')->default(0);
            $table->integer('life')->default(0);
            $table->integer('speed')->default(0);
            $table->string('strength')->default(0);
            $table->integer('physical_protection')->default(0);
            $table->integer('magic_protection')->default(0);
            $table->integer('physical_attack')->default(0);
            $table->integer('physical_magic')->default(0);
            $table->integer('mana')->default(0);
            $table->integer('sale');
            $table->integer('new');
            $table->double('price', 10, 2);
            $table->double('discount_price', 10, 2)->default(0);
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('itemClass_id')->unsigned();
            $table->foreign('itemClass_id')
                ->references('id')
                ->on('item_classes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('sourceWebsite_id')->unsigned();
            $table->foreign('sourceWebsite_id')
                ->references('id')
                ->on('source_websites')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->softDeletes();
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
