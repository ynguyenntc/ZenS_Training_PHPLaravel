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
        Schema::create('post_like', function (Blueprint $table) {
            $table->id('postLikeId');
            $table->unsignedBigInteger('postId');
            $table->unsignedBigInteger('userId');
            
            // $table->foreign('postId')->references('postId')->on('post')
            // ->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('userId')->references('accountId')->on('account')
            // ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });

        // Schema::table('postlike', function (Blueprint $table) {
              
        //     $table->foreign('postId')->references('postId')->on('post')
        //     ->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('userId')->references('accountId')->on('account')
        //     ->onUpdate('cascade')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_like');
    }
};
