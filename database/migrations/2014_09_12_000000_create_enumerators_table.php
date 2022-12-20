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
        Schema::create('enumerators', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('user_name');
            $table->string('enum_area')->default(1);
            $table->string('phone')->default(07303156);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('enumerators');
    }
};
