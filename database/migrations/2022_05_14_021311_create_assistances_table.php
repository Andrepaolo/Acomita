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
        Schema::create('assistances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('datetime');
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
        Schema::dropIfExists('assistances');
    }
};
