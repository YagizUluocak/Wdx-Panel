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
        Schema::create('projes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('resim');
            $table->tinyInteger('durum');
            $table->string('spot_metni');
            $table->text('icerik');
            $table->string('description');
            $table->string('keywords');
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
        Schema::dropIfExists('projes');
    }
};
