<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Applicant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("applicant");
        
        Schema::create("applicant", function (Blueprint $table) {
            $table->integer("id"); // id of user applicant
            $table->integer("user_id"); // id of user of website
            $table->string("name");
            $table->string("address");
            $table->string("phone");
            $table->integer("age");
            $table->primary("id");
            // foreign key:
            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
        });

        //comment out all of it while refreshing migrations
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
