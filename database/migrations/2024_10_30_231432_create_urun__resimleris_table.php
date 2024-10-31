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
        Schema::create('urun_resimleris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('urun_id')
                  ->constrained('uruns')  
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
        Schema::dropIfExists('urun_resimleris');
    }
};
