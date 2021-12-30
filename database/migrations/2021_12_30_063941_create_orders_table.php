<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer("client_id");
            $table->integer("product_id");
            $table->date("order_date")->nullable();
            $table->date("done_by")->nullable();
            $table->text("payment_type")->nullable();
            $table->text("payment")->nullable();
            $table->text("delivery_type")->nullable();
            $table->text("delivery_adding")->nullable();
            $table->text("status")->nullable();
            $table->text("comment")->nullable();
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
        Schema::dropIfExists('orders');
    }
}
