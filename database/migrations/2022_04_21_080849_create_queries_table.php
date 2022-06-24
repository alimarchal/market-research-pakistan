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
        Schema::create('queries', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id');
            $table->string('provinces');
            $table->mediumText('cities');
            $table->string('industry')->nullable();
            $table->string('type')->nullable();
            $table->mediumText('details');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('mobile_query')->default(0);
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
        Schema::dropIfExists('queries');
    }
};
