<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('dni');
            $table->string('business_name');
            $table->string('cuit');
            $table->string('email')->unique();
            $table->string('occupation');
            $table->boolean('currently_working');
            $table->boolean('apply_for_motorbike');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('neighborhood');
            $table->string('between_streets')->nullable();
            $table->string('coordinates')->nullable();
            $table->string('previous_address')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
