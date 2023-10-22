<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->text('firstname');
            $table->text('lastname');           
            $table->string('mobilenumber')->unique();            
            $table->string('email')->unique();
            $table->text('password');
            $table->text('companyname')->nullable();
            $table->text('address1');
            $table->text('address2')->nullable();
            $table->text('city');
            $table->text('state');
            $table->text('postcode');
            $table->text('country');
            $table->date('datecreated');
            $table->text('notes')->nullable();
            $table->dateTime('lastlogin')->nullable();
            $table->text('ip')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0: banned, 1: active');
            $table->tinyInteger('email_verified')->default(0)->comment('0: email unverified, 1: email verified');
            $table->tinyInteger('mobile_verified')->default(0)->comment('0: mobile unverified, 1: mobile verified');            
            $table->unsignedInteger('referred_by')->default(0);
            $table->decimal('balance', 9, 2)->default(0.00);
            $table->rememberToken(); // Adding remember_token
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

// Path: database/migrations/2023_10_20_090626_create_clients_table.php