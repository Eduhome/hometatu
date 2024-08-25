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
        Schema::create('things_iots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('key_url', 64)->unique();

            //Responsable del credito
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('campo_personalizado1')->nullable();
            $table->string('campo_personalizado2')->nullable();
            $table->string('campo_personalizado3')->nullable();

            $table->index('created_by');
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
        Schema::dropIfExists('things_iots');
    }
};
