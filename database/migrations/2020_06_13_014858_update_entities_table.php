<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEntitiesTable extends Migration
{
    public function up()
    {
        Schema::table('entities', function (Blueprint $table) {
            $table->timestamps();
        });
    }
}
