<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->integer('product_qty');
            $table->decimal('price', 10, 2)->unsigned();
            $table->decimal('reduced_price', 10, 2)->unsigned()->nullable();
            $table->integer('cat_id')->unsigned();
            $table->mediumText('save_time');
            $table->mediumText('savalgaa');
            $table->longText('zaavar');
            $table->longText('description');
            $table->longText('uilchilgee');
            $table->mediumText('orts');
            $table->longText('danger');
            $table->mediumText('image');
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
        Schema::dropIfExists('products');
    }
}
