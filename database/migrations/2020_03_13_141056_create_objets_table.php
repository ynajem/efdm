<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objets', function (Blueprint $table) {
            $table->id();
            $table->string('entity');
            $table->enum('type',['line','event','equipment']);
            $table->string('name');
            $table->timestamps();
            $table->string('status')->default('ready');
            $table->unique(['entity','type','name']);
        });
        
        Schema::create('sub_objets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('objet_id');
            $table->string('description')->nullable();
            $table->timestamps();
            $table->string('status')->default('ready');
            $table->unique(['name','objet_id']);

            $table->foreign('objet_id')->references('id')->on('objets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objets');
        Schema::dropIfExists('sub_objets');
    }
}
