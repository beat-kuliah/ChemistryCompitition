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
        Schema::create('competition', function (Blueprint $table) {
            $table->id();
            $table->integer('chemistry_id');
            $table->integer('chempaign_type_id')->nullable();
            $table->text('address')->nullable();
            $table->text('school')->nullable();
            $table->integer('regional_id')->nullable();
            $table->integer('status')->default(1);
            $table->text('payment')->nullable();
            $table->text('abstrak')->nullable();
            $table->text('alasan')->nullable();
            $table->text('lolos')->nullable();
            $table->integer('created_by');
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
        Schema::dropIfExists('competition');
    }
};
