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
        Schema::create('reservepavillion', function (Blueprint $table) {
          $table->id();
              $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('pavillionhalls_id')->references('id')->on('pavillionhalls')->onDelete('cascade');
            $table->date('reserve_date')->nullable();
            $table->string('status');
            $table->string('amount')->nullable();
               $table->string('mobilenumber')->nullable();
            $table->string('address')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('reservepavillion');
    }
};
