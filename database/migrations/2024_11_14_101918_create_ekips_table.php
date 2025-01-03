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
        Schema::create('ekips', function (Blueprint $table) {
            $table->id();
            $table->string('adsoyad');
            $table->string('gorev');
            $table->string('resim');
            $table->tinyInteger('durum');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
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
        Schema::dropIfExists('ekips');
    }
};
