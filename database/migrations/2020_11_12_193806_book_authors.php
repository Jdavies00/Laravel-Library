<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//book authors table
class BookAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_authors', function (Blueprint $table) {
            //pk
            $table->id();
            //fk
            $table->unsignedbigInteger('ref_author_id');
            $table->unsignedbigInteger('ref_book_id');
            //fk from authors table
            $table->foreign('ref_author_id')
                ->references('id')
                ->on('authors')
                ->onDelete('cascade');
            //from books table
            $table->foreign('ref_book_id')
                ->references('id')
                ->on('books')
                ->onDelete('cascade');
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
        Schema::dropIfExists('authors');
    }
}
