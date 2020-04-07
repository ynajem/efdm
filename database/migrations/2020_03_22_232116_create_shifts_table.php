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
        // Schema::create('comshifts', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        //     $table->string('status', 20)->default('ready');
        // });

        Schema::create('shifts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('shift', [1, 2, 3]);
            $table->foreignId('entity_id')->constrained();
            $table->enum('equipe', ['A', 'B', 'C', 'D', 'E']);
            $table->foreignId('chefSalle')->constrained('users')->nullable();
            $table->foreignId('supervisor')->constrained('users')->nullable();
            $table->foreignId('addedby')->constrained('users');
            $table->timestamps();
            $table->unique(['date', 'shift', 'entity']);
        });

        Schema::create('shift_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('shift_id')->constrained();
            $table->string('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shift_user');
        Schema::dropIfExists('shifts');
        // Schema::dropIfExists('comshifts');
    }
}
