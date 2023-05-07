<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("users");

        Schema::create("users", function (Blueprint $table) {
            $table->integer("id");
            $table->string("username");
            $table->string("password");
            $table->char("type");
            $table->primary("id");
        });
        //comment all of it out when refreshing migration
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
