<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Checkout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('checkout', function (Blueprint $table) {
            //pk
            $table->id();
            //fk
            $table->unsignedBigInteger('ref_book_id');
            $table->unsignedBigInteger('ref_user_id');


            $table->unsignedBigInteger('ref_bookstatus_id');
            $table->unsignedBigInteger('condition_id');

            //other
            $table->datetime('checkout_date');
            $table->datetime('return_date');
            $table->timestamps();

            //fk  from books ref_book_id
            $table->foreign('ref_book_id')
                ->references('id')
                ->on('books')
                ->onDelete('cascade');

            //fk from user ref_user_id
            $table->foreign('ref_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


                // I dont know why but these FK hate me 
                //I can pull the numbers but making them into FK is not working
                //prob a name is wrogn somewheer need to return to this later
            //fk from books
            // $table->foreign('ref_bookstatus_id')
            //     ->references('in/out')
            //     ->on('bookstatus')
            //     ->onDelete('cascade');

            // //fk to the book condtion
            // $table->foreign('condtion')
            //     ->references('id')
            //     ->on('condition')
            //     ->onDelete('cascade');

                //FK problem contd in checkout factory 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkout');
    }
}
