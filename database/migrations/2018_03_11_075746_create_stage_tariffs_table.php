<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStageTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_tariffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tariff_id');
            $table->string('stage_type', 255);
            $table->integer('price');
            $table->string('measure', 255);
            $table->json('params')->nullable();
            $table->boolean('is_enabled')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage_tariffs');
    }
}
