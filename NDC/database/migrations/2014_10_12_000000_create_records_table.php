<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataservice', function (Blueprint $table) {
            $table->bigInteger('id', 20)->unsigned();
            $table->string('DNI',15);
            $table->string('name',50);
            $table->string('lastname',50);
            $table->string('birthday',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataservice');
    }
}
