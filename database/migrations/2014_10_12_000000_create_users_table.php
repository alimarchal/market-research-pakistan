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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->integer('country');
            $table->integer('type');
            $table->string('company_name')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('otp')->nullable();
            $table->string('password');
            $table->tinyInteger('is_admin')->default(0);
            $table->tinyInteger('mobile_user')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'first_name' => 'Admin',
            'email' => 'admin@marketresearchpakistan.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'country' => 1,
            'type' => 1,
            'password' => Hash::make('marketresearchpakistan98765'),
            'is_admin' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
