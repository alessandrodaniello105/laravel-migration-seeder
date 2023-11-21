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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 40);
            $table->string('departure_station', 40);
            $table->string('arrival_station', 40);
            $table->string('departure_time', 5);
            $table->string('arrival_time', 5);
            $table->unsignedSmallInteger('train_number');
            $table->unsignedTinyInteger('wagons_number');
            $table->boolean('is_ontime')->default(true);
            $table->boolean('is_deleted')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
