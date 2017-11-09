<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserAttr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table){
            $table->string('role')->default('lecteur');
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('exp')->nullable();
            $table->string('lastMag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('role');
            $table->dropColumn('category_id');
            $table->dropColumn('exp');
            $table->dropColumn('lastMag');
        });

    }
}
