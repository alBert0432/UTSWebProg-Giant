<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('book_id')->unique();
            $table->string('pub_id_book');
            $table->foreign('pub_id_book')->references('pub_id')->on('publishers')->onDelete('cascade');
            $table->string('title');
            $table->string('author');
            $table->string('year');
            $table->text('synopsis');
            $table->string('book_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
