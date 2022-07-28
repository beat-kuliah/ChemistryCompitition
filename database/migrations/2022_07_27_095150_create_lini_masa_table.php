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
        Schema::create('lini_masa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('gel_1_1')->nullable();
            $table->date('gel_1_2')->nullable();
            $table->date('gel_2_1')->nullable();
            $table->date('gel_2_2')->nullable();
            $table->date('tm_1')->nullable();
            $table->date('pre')->nullable();
            $table->date('p_1')->nullable();
            $table->date('tm_2')->nullable();
            $table->date('qf')->nullable();
            $table->date('p_2')->nullable();
            $table->date('sgf')->nullable();
            $table->date('p_3')->nullable();
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
        Schema::dropIfExists('lini_masa');
    }
};
