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
        Schema::table('books', function (Blueprint $table) {
            $table->bigInteger('id_kategori')->after('tanggal_rilis')->unsigned();
            //definisikan column id_kategori
            $table->foreign('id_kategori')
            //referesi column dari table indukan / master
            ->references('id')
            //referensi table yang akan di relasikan
            ->on('category')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropColumn('id_kategori');
    }
};
