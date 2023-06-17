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
            $table->id();
            $table->string('img')->nullable();
            $table->string('name')->nullable();
            $table->string('author_name');
            $table->string('book_types');
            $table->string('email');
            $table->string('mailing_address');
            $table->string('city');
            $table->string('state_or_province');
            $table->string('postalcode');
            $table->longText('product_description');
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
        Schema::dropIfExists('books');
    }
}
