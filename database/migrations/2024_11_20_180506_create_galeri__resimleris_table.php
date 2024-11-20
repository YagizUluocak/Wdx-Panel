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
        Schema::create('galeri_resimleris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('galeri_id')
                  ->constrained('foto_galeris')
                  ->onDelete('cascade');
            $table->string('resim_adi');
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
        Schema::dropIfExists('galeri_resimleris');
    }
};
