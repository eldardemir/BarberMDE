<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHaircutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haircuts', function (Blueprint $table) {

            $table->increments('id');
	        $table->string('name');
	        $table->string('email');
            $table->string('phone_number');
	        $table->text('message')->nullable();
            $table->date('haircut_date');

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
        Schema::dropIfExists('haircuts');
    }
}
