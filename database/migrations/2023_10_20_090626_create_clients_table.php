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
            $table->text('companyname');
            $table->string('email')->unique();
            $table->text('address1');
            $table->text('address2');
            $table->text('city');
            $table->text('state');
            $table->text('postcode');
            $table->text('country');
            $table->string('phonenumber')->unique();
            $table->text('password');
            $table->date('datecreated');
            $table->text('notes');
            $table->dateTime('lastlogin')->nullable();
            $table->text('ip');
            $table->text('status')->default('Active');
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