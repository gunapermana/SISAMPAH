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

            // $table->foreign('name_user')->references('name')->on('users');
            $table->foreign('name_user')->references('name')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->foreign('address_user')->references('address')->on('users');
            $table->foreign('address_user')->references('address')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->foreign('id_employes')->references('id')->on('employes');
            $table->foreign('id_employes')->references('id')->on('employes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->foreign('name_employes')->references('name')->on('employes');
            $table->foreign('name_employes')->references('name')->on('employes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->enum('type_of_trash', ['organik', 'anorganik']);
            $table->integer('trash_weight');
            $table->bigInteger('poin');
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
        Schema::dropIfExists('pick-up-trashes');
    }
};