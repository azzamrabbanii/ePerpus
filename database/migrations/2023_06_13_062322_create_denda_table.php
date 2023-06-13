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
        Schema::create('denda', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_customers')->unsigned();
            //definisikan column id_customers
            $table->foreign('id_customers')
            //referesi column dari table indukan / master
            ->references('id')
            //referensi table yang akan di relasikan
            ->on('customers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('harga_denda');
            $table->string('status_buku');
            $table->string('status_denda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denda');
    }
};
