<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtile');
            $table->string('subtile1')->nullable();
            $table->string('years');
            $table->string('description');
            $table->string('img_propos');
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
        Schema::dropIfExists('propos');
    }
}
