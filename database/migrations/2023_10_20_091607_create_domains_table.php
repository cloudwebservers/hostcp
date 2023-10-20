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
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->integer('order_id');
            $table->date('registrationdate');
            $table->text('domain');
            $table->decimal('firstpaymentamount', 10, 2);
            $table->decimal('recurringamount', 10, 2);
            $table->text('registrar');
            $table->integer('registrationperiod');
            $table->date('expirydate')->nullable();
            $table->text('subscriptionid');
            $table->text('status');
            $table->date('nextduedate');
            $table->date('nextinvoicedate');
            $table->text('additionalnotes');
            $table->text('paymentmethod');
            $table->text('urlforwarding');
            $table->text('emailforwarding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};

// Path: database/migrations/2023_10_20_091607_create_domains_table.php