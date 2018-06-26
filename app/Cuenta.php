<?php

namespace Bank;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cuenta.
 *
 * @author  The scaffold-interface created at 2018-06-15 12:37:44am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Cuenta extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'cuentas';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

	
}
