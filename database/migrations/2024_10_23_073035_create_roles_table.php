<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
        Schema::create('roles', function (Blueprint $table) {
            $table->timestamps();
            $table->string("name") ->primary();
            $table->string("subtitle");
            $table->text("description");
            $table->string("passive");
            $table->string("banner");
            $table->string("img");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
