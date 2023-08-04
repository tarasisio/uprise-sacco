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
        Schema::create('loan_request_approvals', function (Blueprint $table) {
            $table->integer('application_no')->primary();
            $table->integer('member_number')->unique();
            $table->decimal('amount', 10, 2)->default(0.00);
            $table->integer('repayment_period');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_request_approvals');
    }
};
