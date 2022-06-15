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
        Schema::table('reservetreehouses', function (Blueprint $table) {
            //
                 $table->string('mobilenumber')->after('status')->nullable();
            $table->string('address')->after('status')->nullable();
            $table->string('note')->after('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservetreehouses', function (Blueprint $table) {
            //
                $table->dropColumn('mobilenumber');

            $table->dropColumn('address');

            $table->dropColumn('note');
        });
    }
};
