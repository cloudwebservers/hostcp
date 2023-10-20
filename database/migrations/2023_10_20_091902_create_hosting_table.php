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
        Schema::create('hosting', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->integer('order_id');
            $table->date('regdate');
            $table->text('domain');
            $table->text('server');
            $table->text('paymentmethod');
            $table->decimal('firstpaymentamount', 10, 2);
            $table->decimal('amount', 10, 2);
            $table->text('billingcycle');
            $table->date('nextduedate')->nullable();
            $table->date('nextinvoicedate');
            $table->text('domainstatus');
            $table->text('username');
            $table->text('password');
            $table->text('notes');
            $table->text('subscriptionid');
            $table->unsignedInteger('packageid');
            $table->text('overideautosuspend');
            $table->text('dedicatedip');
            $table->text('assignedips');
            $table->text('rootpassword');
            $table->text('ns1');
            $table->text('ns2');
            $table->integer('diskusage')->default(0);
            $table->integer('disklimit')->default(0);
            $table->integer('bwusage')->default(0);
            $table->integer('bwlimit')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hosting');
    }
};


// Path: database/migrations/2023_10_20_091902_create_hosting_table.php