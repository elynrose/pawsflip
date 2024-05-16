<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCreditsTable extends Migration
{
    public function up()
    {
        Schema::table('credits', function (Blueprint $table) {
            $table->unsignedBigInteger('service_request_id')->nullable();
            $table->foreign('service_request_id', 'service_request_fk_9784795')->references('id')->on('service_requests');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_9784755')->references('id')->on('users');
        });
    }
}
