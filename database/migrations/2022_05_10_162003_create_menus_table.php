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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('lauk');
            $table->string('sayur')->nullable();
            $table->string('minuman');
            $table->string('alternatif_1');
            $table->string('alternatif_2')->nullable();;
            $table->integer('harga');
            $table->unsignedBigInteger('menu_type_id');
            $table->foreign('menu_type_id')->references('id')->on('menu_types');
            $table->unsignedBigInteger('day_id');
            $table->foreign('day_id')->references('id')->on('days');
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
        Schema::dropIfExists('menus');
    }
};
