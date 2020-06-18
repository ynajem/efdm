<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToObjets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('objets', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('subobjets', function (Blueprint $table) {
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
        Schema::table('objets', function (Blueprint $table) {
            //
        });
        Schema::table('subobjets', function (Blueprint $table) {
            //
        });
    }
}
