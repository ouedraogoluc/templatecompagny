<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhychooseusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whychooseusers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtile')->nullable();
            $table->string('subtile1')->nullable();
            $table->string('subtile2')->nullable();
            $table->string('subtile3')->nullable();
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
        Schema::dropIfExists('whychooseusers');
    }
}
