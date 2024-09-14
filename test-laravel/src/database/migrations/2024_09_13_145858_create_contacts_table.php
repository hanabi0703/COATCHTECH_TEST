<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->unsigned()->nullable('false');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('first_name')->nullable('false');
            $table->string('last_name')->nullable('false');
            $table->tinyInteger('gender')->unsigned()->nullable('false');
            $table->string('email')->nullable('false');
            $table->string('tell')->nullable('false');
            $table->string('address')->nullable('false');
            $table->string('building');
            $table->text('detail')->nullable('false');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
