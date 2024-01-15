<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('subject')->nullable();
            $table->longText('message');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
