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
            $table->string('name');                    // User name
            $table->string('email')->unique();         // User email
            $table->string('password');                // User password
            $table->unsignedBigInteger('role_id');     // Role ID from roles table
            $table->foreign('role_id')->references('id')->on('roles');
            $table->timestamp('register_date')->nullable(); // Date when the user registered
            $table->string('status')->default('active');    // User status (active/inactive)
            $table->rememberToken();                  // Laravel's remember token for authentication
            $table->timestamps();                     // Created at and Updated at timestamps
        });
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
