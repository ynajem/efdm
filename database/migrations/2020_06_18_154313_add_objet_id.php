<?php

use App\Subobjet;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddObjetId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->foreignId('objet_id')->after('user_id')->default(1)->constrained()->onDelete('cascade');
        });
        Schema::table('lines', function (Blueprint $table) {
            $table->foreignId('objet_id')->after('user_id')->default(1)->constrained()->onDelete('cascade');
        });
        Schema::table('equipements', function (Blueprint $table) {
            $table->foreignId('objet_id')->after('user_id')->default(1)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            //
        });
    }
}
