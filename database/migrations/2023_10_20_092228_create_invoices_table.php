<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->date('duedate')->nullable();
            $table->dateTime('datepaid')->useCurrent();
            $table->unsignedInteger('user_id');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('credit', 10, 2);
            $table->decimal('tax', 10, 2);
            $table->decimal('total', 10, 2)->default(0);
            $table->decimal('taxrate', 10, 2);
            $table->text('status');
            $table->text('randomstring');
            $table->text('paymentmethod');
            $table->text('notes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}

// Path: database/migrations/2023_10_20_092228_create_invoices_table.php
