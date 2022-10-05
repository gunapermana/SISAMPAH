<?php

use App\Models\User;
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
        Schema::create('poins', function (Blueprint $table) {
            $table->id();

            // // Buat kolom dengan foreign key mengambil data dari id user di tabel user
            // $table->foreign('id_user')->references('id')->on('users');

            // Membuat agar ketika foreign key selalu bergantung dari primary key, bila update ikut, bila delete juga ikut
            $table->foreign('id_user')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->foreign('name_user')->references('name')->on('users');
            $table->foreign('name_user')->references('name')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('total_poin');
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
        Schema::dropIfExists('poins');
    }
};