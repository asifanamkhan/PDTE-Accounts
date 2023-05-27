<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEconomicAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economic_accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('acc_code');
            $table->string('acc_name');
            $table->integer('parent_code')->default(0);
            $table->double('initial_amount')->nullable();
            $table->string('initial_amount_date')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('economic_accounts');
    }
}
