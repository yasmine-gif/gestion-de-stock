<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produits', function (Blueprint $table) {
            $table->unsignedInteger('stock_id');
            $table->unsignedInteger('vente_id');
            $table->foreign('stock_id')->references('id')->on('stock')->onDelete('cascade');
            $table->foreign('vente_id')->references('id')->on('vente')->onDelete('cascade');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produits', function (Blueprint $table) {
           Schema::disableForeignKeyConstraints();
           $table->dropForeign('stock_id');
           $table->dropForeign('vente');

        });
    }
}
