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
        Schema::create('change-poins', function (Blueprint $table) {
            $table->id();

            // $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_user')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->foreign('nik_user')->references('nik')->on('users');
            $table->foreign('nik_user')->references('nik')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->foreign('name_user')->references('name')->on('users');
            $table->foreign('name_user')->references('name')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('poin_sampah');
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
        Schema::dropIfExists('change-poins');
    }
};