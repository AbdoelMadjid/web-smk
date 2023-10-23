<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alias');
            $table->string('quotes');
            $table->string('brand')->nullable();
            $table->text('address');
            $table->text('maps');
            $table->string('nohp');
            $table->string('telp');
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('youtube');
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
        Schema::dropIfExists('identities');
    }
}
