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
            $table->text('prefix')->nullable();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->longText('address')->nullable();
            $table->longText('apt')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('zip')->nullable();
            $table->text('country')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('date')->nullable();
            $table->text('spouce_prefix')->nullable();
            $table->text('spouce_first_name')->nullable();
            $table->text('spouce_last_name')->nullable();
            $table->text('status')->nullable();
            $table->bigInteger('user_id')->nullable()->unsigned();
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
        Schema::dropIfExists('contacts');
    }
}
