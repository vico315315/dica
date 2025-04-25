<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

       Schema::create('users', function (Blueprint $table) {
           
        $table->engine="InnoDB";
        $table->bigIncrements('id');
        
        $table->bigInterger('instalador_id')->unsigned();

        $table->string('nombre');
        $table->string('codigo');
        $table->bigInterger('cantidad');
        $table->bigInterger('preciounit');
        $table->bigInterger('preciototal');
        $table->string('estado');
        $table->string('obs');

        $table->timestamps();

        $table->foreign('instalador_id')->references('id')->on('instaladores')->onDelete("cascade");
       });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
