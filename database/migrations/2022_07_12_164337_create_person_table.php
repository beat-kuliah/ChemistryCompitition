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
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->integer('competition_id');
            $table->integer('person_type_id');
            $table->integer('mahasiswa');
            $table->string('name');
            $table->string('no_identitas')->nullable();
            $table->integer('gender')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('id_line')->nullable();
            $table->text('scan_kartu_pelajar')->nullable();
            $table->text('foto')->nullable();
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
        Schema::dropIfExists('person');
    }
};
