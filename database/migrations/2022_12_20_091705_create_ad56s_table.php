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
        // ምንጪ_water
        Schema::create('ad56s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',255);//family_id
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ad56002');// ምንጪ_water
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
        Schema::dropIfExists('ad56s');
    }
};
