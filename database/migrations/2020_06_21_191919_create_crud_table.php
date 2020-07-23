<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('icon')->default('folder');
            $table->foreignId('parent_id')->references('id')->on('cruds');
            $table->boolean('is_create')->default(0);
            $table->boolean('is_index')->default(0);
            $table->boolean('is_edit')->default(0);
            $table->boolean('is_show')->default(0);
            $table->boolean('is_delete')->default(0);
            $table->string('description')->nullable();
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
        Schema::dropIfExists('cruds');
    }
}
