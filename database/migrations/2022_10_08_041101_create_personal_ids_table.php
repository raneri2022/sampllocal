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
        Schema::create('personal_ids', function (Blueprint $table) {
            $table->string('personal_id',255)->unique();
            $table->string('family_id',255);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->string('f_name_personal');
            $table->string('m_name_personal');
            $table->string('l_name_personal');
            $table->timestamps();
            $table->primary(['personal_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_ids');
    }
};
