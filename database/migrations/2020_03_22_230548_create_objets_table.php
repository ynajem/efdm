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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('label');
        });

        Schema::create('objets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('entity_id')->constrained();
            $table->foreignId('type_id')->constrained();
            $table->string('status')->default('active');
        });

        Schema::create('subobjets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->foreignId('objet_id')->constrained();
            $table->string('status')->default('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subobjets');
        Schema::dropIfExists('objets');
        Schema::dropIfExists('types');
    }
}
