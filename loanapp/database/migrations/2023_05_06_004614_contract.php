<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contract extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("contract");

        Schema::create("contract", function(Blueprint $table) {
            $table->integer("id");
            $table->primary("id");
            $table->integer("proposal_id");
            $table->integer("applicant_id");
            $table->integer("investor_id");

            $table->foreign("proposal_id")
                ->references("id")
                ->on("proposals")
                ->onDelete("cascade");
            
            $table->foreign("applicant_id")
                ->references("id")
                ->on("applicant")
                ->onDelete("cascade");

            $table->foreign("investor_id")
                ->references("id")
                ->on("investors")
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
