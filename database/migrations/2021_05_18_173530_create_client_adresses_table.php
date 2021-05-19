<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_adresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('client_id')->constrained('clients')->onUpdate('cascade')->onDelete('cascade');           
            $table->string('cep');
            $table->string('state');
            $table->string('city');
            $table->string('street');
            $table->string('district');
            $table->string('number');
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
        Schema::dropIfExists('client_adresses');
    }
}
