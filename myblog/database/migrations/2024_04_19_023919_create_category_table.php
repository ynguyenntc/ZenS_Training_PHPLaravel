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
        Schema::create('category', function (Blueprint $table) {
            $table->id('categoryId');
            $table->unsignedBigInteger('parentId')->nullable()->default(null);
            $table->string('title')->unique();
            $table->string('metaTitle')->nullable();
            $table->string('slug')->unique();

            // $table->foreign('parentId')->references('categoryId')->on('category')
            // ->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('category');
    }
};
