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
        Schema::create('sayfas', function (Blueprint $table) {
            $table->id();
            $table->string('baslik');
            $table->tinyInteger('durum');
            $table->string('resim');
            $table->string('icerik');
            $table->string('description', 350);
            $table->string('keywords', 350);
            $table->string('slug');
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
        Schema::dropIfExists('sayfas');
    }
};
