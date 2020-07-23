<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CombineTimeAndDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lines', function (Blueprint $table) {
            $table->timestamp('start_time')->after('id')->nullable();
            $table->timestamp('end_time')->after('start_time')->nullable();
        });

        Schema::table('equipements', function (Blueprint $table) {
            $table->timestamp('start_time')->after('id')->nullable();
            $table->timestamp('end_time')->after('start_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lines', function (Blueprint $table) {
            //
        });
    }
}
