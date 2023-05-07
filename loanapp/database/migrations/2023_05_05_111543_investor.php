<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Investor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("investors");
        Schema::create("investors", function (Blueprint $table) {
            $table->integer("id");
            $table->primary("id");
            $table->integer("user_id");
            $table->string("name");
            $table->string("address");
            $table->string("phone");
            $table->string("email"); // maybe needed

            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
        });

        // comment out all of it while refreshing migrations
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
