<?php

namespace Bank;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Movimiento.
 *
 * @author  The scaffold-interface created at 2018-06-15 12:39:17am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Movimiento extends Model
{
	
	
    protected $table = 'movimientos';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function origen()
    {
        return $this->belongsTo(Cuenta::class , 'cuenta_id');
    }

    public function destino()
    {
        return $this->belongsTo(Cuenta::class , 'cuenta_destino_id');
    }

	
}
