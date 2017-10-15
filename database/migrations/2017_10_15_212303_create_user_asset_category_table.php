<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAssetCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_asset_category', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('asset_category_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('asset_category_id')->references('id')->on('asset_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_asset_category');
    }
}
