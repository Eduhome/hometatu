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
        Schema::create('device_controls', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('device_id');
          $table->string('name');
          $table->enum('control_type', ['float', 'boolean', 'character']);
          // $table->string('value');
          $table->enum('permissions', ['read-write', 'read-only']);
          $table->enum('update_policy', ['on-change', 'periodically']);
          $table->string('campo_personalizado1')->nullable();
          $table->string('campo_personalizado2')->nullable();
          $table->string('campo_personalizado3')->nullable();
          $table->integer('status');
          $table->timestamps();
          $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_controls');
    }
};
