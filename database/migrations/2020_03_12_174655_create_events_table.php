<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('type',50);
            $table->date('date');
            $table->time('time');
            $table->enum('entity',['detection','telecom','ti','traitemt']);
            $table->unsignedBigInteger('sub_objet_id');
            $table->string('extra')->nullable();
            $table->text('event')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->string('status')->default('ready');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
