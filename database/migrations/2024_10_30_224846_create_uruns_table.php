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
        Schema::create('uruns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('urun_kodu');
            $table->text('icerik');
            $table->decimal('fiyat',8 , 2);
            $table->tinyInteger('stok');
            $table->text('spot_metni');
            $table->foreignId('kategori_id')
                  ->references('id')
                  ->on('kategoris')
                  ->onDelete('cascade');
            $table->tinyInteger('durum');
            $table->string('keywords');
            $table->string('description');
            $table->string('resim');

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
        Schema::dropIfExists('uruns');
    }
};
