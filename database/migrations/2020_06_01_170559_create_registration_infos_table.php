<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_infos', function (Blueprint $table) {
            $table->id();
            $table->string('nationality');
            $table->date('marriage_date');
            $table->time('marriage_time');
            $table->foreignId('bridegroom_id')->constrained('bridegrooms');
            $table->foreignId('bride_id')->constrained('brides');
            $table->foreignId('bridegroom_father_id')->constrained('bridegroom_fathers');
            $table->foreignId('bride_father_id')->constrained('bride_fathers');
            $table->foreignId('bridegroom_mother_id')->constrained('bridegroom_mothers');
            $table->foreignId('bride_mother_id')->constrained('bride_mothers');
            $table->foreignId('bridegroom_witness_id')->constrained('bridegroom_witnesses');
            $table->foreignId('bride_witness_id')->constrained('bride_witnesses');
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
        Schema::dropIfExists('registration_infos');
    }
}
