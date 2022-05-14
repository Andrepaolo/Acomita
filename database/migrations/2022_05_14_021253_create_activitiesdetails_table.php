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
        Schema::create('activitiesdetails', function (Blueprint $table) {
            $table->id();
            $table->enum('collection',['Necesaria','No necesaria']);//1:si , 0:no
            $table->enum('publication',[1,0]);//1:si , 0:no
            $table->enum('type',['obligatorio','voluntario']);//1:si , 0:no
            $table->unsignedBigInteger('incharge_id');
            $table->foreign('incharge_id')->references('id')->on('incharges')->onDelete('cascade');
            $table->unsignedBigInteger('activitie_id');
            $table->foreign('activitie_id')->references('id')->on('activities')->onDelete('cascade');

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
        Schema::dropIfExists('activitiesdetails');
    }
};
