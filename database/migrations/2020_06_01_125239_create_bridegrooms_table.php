<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBridegroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bridegrooms', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('religion');
            $table->string('occupation');
            $table->string('current_address');
            $table->string('first_address');
            $table->boolean('ever_married');
            $table->string('ex-wife_name')->nullable();
            $table->string('child_to_be_legalized')->nullable();
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
        Schema::dropIfExists('bridegrooms');
    }
}
