<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('purchaseName');
            $table->text('purchaseInfo');
            $table->text('lcSender');
            $table->text('lcReceiver');
            $table->integer('lcOpen');
            $table->integer('lcClose');
            $table->integer('underInvoice');
            $table->integer('shippingCharge');
            $table->integer('nbrVat');
            $table->integer('cndfCost');
            $table->integer('transportCost');
            $table->integer('labourCost');
            $table->integer('purchaseQuantity');
            $table->bigInteger('TotalCost');
            $table->integer('CostPerUnit');
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
        Schema::dropIfExists('purchases');
    }
}
