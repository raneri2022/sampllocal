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
        Schema::create('data_tests', function (Blueprint $table) {
            $table->id();
            $table->string('family_id');
            $table->string('ad01002');
            $table->string('ad01003');
            $table->string('ad01004');
            $table->string('ad01005');
            $table->string('ad01006');
            $table->string('ad01007');
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
        Schema::dropIfExists('data_tests');
    }
};
