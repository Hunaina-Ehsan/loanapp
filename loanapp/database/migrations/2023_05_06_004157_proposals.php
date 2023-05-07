<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proposals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("proposals");

        Schema::create("proposals", function(Blueprint $table) {
            $table->integer("id");
            $table->primary("id");
            $table->integer("user_id");
            $table->string("title");
            $table->string("description");
            $table->integer("amount");
            $table->string("status");
            $table->timestamp("created_at");

            $table->foreign("user_id")
                ->references("id")
                ->on("applicant")
                ->onDelete("cascade");
        });
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
