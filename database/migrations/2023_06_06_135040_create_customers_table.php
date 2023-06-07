<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_status')->unsigned();
            //definisikan column id_status
            $table->foreign('id_status')
            //referesi column dari table indukan / master
            ->references('id')
            //referensi table yang akan di relasikan
            ->on('status')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->String('nama_peminjam');
            $table->String('nama_buku');
            $table->dateTime('tanggal_pinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
