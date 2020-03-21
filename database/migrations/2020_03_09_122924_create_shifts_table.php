<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('shift',2);
            $table->string('equipe',1);
            $table->string('chefSalle',20)->nullable();
            $table->string('supervisor',20)->nullable();
            $table->string('chef',20)->nullable();
            $table->string('esa1',50)->nullable();
            $table->string('esa2',50)->nullable();
            $table->string('esa3',50)->nullable();
            $table->string('renfort1',20)->nullable();
            $table->string('renfort2',20)->nullable();
            $table->unsignedBigInteger('entity_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->string('status',20)->default('ready');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shifts');
    }
}
