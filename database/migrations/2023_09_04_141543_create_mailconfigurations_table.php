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
        Schema::create('mailconfigurations', function (Blueprint $table) {
            $table->id();
            $table->string('language',100);
            $table->string('separator',100);
            $table->integer('dayPosition');
            $table->integer('monthPosition');
            $table->integer('yearPosition');
            $table->integer('subtractOneDay');
         
            $table->string('headerTextDate',255);
            $table->string('headerTextIncome',255);
            $table->string('headerTextExpenses',255);
            $table->string('headerTextSalePerItem',255);
       
            $table->integer('expensesConceptLength');
            $table->integer('expensesDetailLength');
            $table->integer('expensesTotalLength');

            $table->integer('incomeConceptLength');
            $table->integer('incomeDetailLength');
            $table->integer('incomeTotalLength');

            $table->integer('itemCodeLength');
            $table->integer('itemDescriptionLength');
            $table->integer('itemQuantityLength');
            $table->integer('itemTotalLength');
            
            $table->string('cron',255);
            $table->string('headerTextSalesSummary',255);

            $table->integer('salesSummaryDetailLenght');
            $table->integer('salesSummaryTotalLenght');
            $table->integer('salesSummaryQuantityLenght');

            $table->string('headerTextSalesByPayment',255);

            $table->integer('salesByPaymentFormOfPaymentLenght');
            $table->integer('salesByPaymentTotalLenght');
            $table->integer('salesByPaymentQuantityLenght');
            
            $table->integer('quantityRead');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mailconfigurations');
    }
};
