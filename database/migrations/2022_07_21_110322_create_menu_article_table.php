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
        Schema::create('menu_article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('menu_id')->nullable()->constrained('menus')->onDelete('set null');
            $table->foreignId('article_id')->nullable()->constrained('articles')->onDelete('set null');
            $table->string('name');
            $table->integer('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_article');
    }
};
