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
        Schema::table('post', function (Blueprint $table) {
            $table->foreign('authorId')->references('accountId')->on('account');
            $table->foreign('parentId')->references('postId')->on('post')
            ->onUpdate('cascade')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post', function ($table)
            {
                $table->dropForeign('post_authorid_foreign');
                $table->dropForeign('post_parentid_foreign');
            });
    }
};
