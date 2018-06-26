<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Cuentas.
 *
 * @author  The scaffold-interface created at 2018-06-15 12:37:45am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Cuentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('cuentas',function (Blueprint $table){

        $table->increments('id');
        
        $table->integer('user_id');
        
        $table->String('tipo');
        
        $table->String('descripcion');
        
        $table->String('detalles');
        
        $table->integer('estatus')->default(0);
        
        $table->float('disponible');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('cuentas');
    }
}
