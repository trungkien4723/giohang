<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->string("User_Email");
            $table->string("User_Name");
            $table->string("Product_ID");
            $table->string("Product_Image");
            $table->string("Product_Name");
            $table->integer("Product_Price");
            $table->integer("Product_Quantity");
            $table->integer("Total_Price");
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
        Schema::dropIfExists('carts');
    }
}
