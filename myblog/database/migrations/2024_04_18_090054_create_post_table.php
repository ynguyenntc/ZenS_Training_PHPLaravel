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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->integer('authorId')->unsigned();
            $table->integer('parentId')->unsigned()->default(null);
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('summary')->nullable();
            $table->tinyInteger('published')->default(0);
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt')->nullable()->default(null);
            $table->dateTime('publishedAt')->nullable()->default(null);
            $table->text('content')->nullable();
            $table->string('picture')->nullable();
            $table->string('tagSearch')->nullable();
            $table->string('categoryType')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
};
