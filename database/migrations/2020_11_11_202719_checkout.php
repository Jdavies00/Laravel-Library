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
            //other
            $table->datetime('checkout_date');
            $table->datetime('return_date');
            //due_dat need to be fleshed out more
            // $table->datetime('due_date');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
