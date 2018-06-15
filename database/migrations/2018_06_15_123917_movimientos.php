<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Movimientos.
 *
 * @author  The scaffold-interface created at 2018-06-15 12:39:17am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Movimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('movimientos',function (Blueprint $table){

        $table->increments('id');
        
        $table->integer('user_id');
        
        $table->integer('cuenta_id');
        
        $table->integer('tipo_operacion');
        
        $table->integer('estatus');
        
        $table->String('detalles');
        
        $table->String('descripcion');
        
        $table->String('observaciones');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
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
        Schema::drop('movimientos');
    }
}
