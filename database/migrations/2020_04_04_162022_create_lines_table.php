<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lines', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->date('startdate');
            $table->time('starttime');
            $table->enum('shift', [1, 2, 3]);
            $table->date('enddate')->nullable();
            $table->time('endtime')->nullable();
            $table->text('comment')->nullable();
            $table->integer('duration')->nullable();
            $table->foreignId('entity_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('subobjet_id')->constrained();
            $table->string('status')->default('live');
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
        Schema::dropIfExists('lines');
    }
}
