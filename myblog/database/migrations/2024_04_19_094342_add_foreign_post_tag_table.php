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
        Schema::table('post_tag', function (Blueprint $table) {
            $table->foreign('postId')->references('postId')->on('post')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('tagId')->references('tagId')->on('tag')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_tag', function (Blueprint $table) {
            $table->dropForeign('post_tag_postid_foreign');
            $table->dropForeign('post_tag_tagid_foreign');
        });
    }
};
