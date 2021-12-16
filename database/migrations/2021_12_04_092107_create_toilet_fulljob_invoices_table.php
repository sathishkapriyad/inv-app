<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToiletFulljobInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toilet_fulljob_invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('invoice_id');
            $table->integer('product_id');
            $table->string('extra_item');
            $table->double('length',8,2)->nullable();
            $table->double('width',8,2)->nullable();
            $table->double('height',8,2)->nullable();
            $table->double('quantity',8,2)->nullable();
            $table->double('unit_price',8,2)->nullable();
            $table->double('total',8,2)->nullable();
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
        Schema::dropIfExists('toilet_fulljob_invoices');
    }
}
