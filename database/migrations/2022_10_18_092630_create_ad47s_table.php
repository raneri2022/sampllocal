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
        //ስድራቤትካ_ሕርሻዊ_ንጥፈታት_ዝተኣሳሰር_ትነጥፍዶ
        Schema::create('ad47s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->integer('ad47002');//እወ ወይ ኣይፋል
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
        Schema::dropIfExists('ad47s');
    }
};
