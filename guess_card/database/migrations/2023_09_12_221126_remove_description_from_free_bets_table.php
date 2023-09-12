<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('free_bets', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
    
    public function down()
    {
        Schema::table('free_bets', function (Blueprint $table) {
            $table->string('description')->nullable();
        });
    }
    
};
