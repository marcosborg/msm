<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('call')->nullable();
            $table->string('google_maps')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
