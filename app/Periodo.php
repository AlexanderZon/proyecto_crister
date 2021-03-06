<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{

	protected $connection = 'mysql';

	protected $table = 'periodos';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function permisos(){

    	return $this->hasMany('\App\Permiso','periodo_id','id');

    }

    public function vacaciones(){

    	return $this->hasMany('\App\Vacacion','periodo_id','id');

    }

    public function reposo(){

    	return $this->hasMany('\App\Reposo','periodo_id','id');
    	
    }
}
