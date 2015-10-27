<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabajador extends Model
{

	protected $connection = 'mysql';

	protected $table = 'trabajadores';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function dependencia(){

    	return $this->belongsTo('\App\Dependencia','dependencia_id','id');

    }

    public function status(){

    	return $this->belongsTo('\App\Status','status_id','id');

    }

    public function laboral(){

    	return $this->belongsTo('\App\DatoLaboral','dato_laboral_id','id');

    }

    public function carga(){

    	return $this->hasMany('\App\CargaLaboral','trabajador_id','id');

    }

    public function cargo(){

    	return $this->belongsTo('\App\Cargo','cargo_id','id');

    }

    public function permisos(){

    	return $this->hasMany('\App\Permiso','trabajador_id','id');

    }

    public function reposos(){

    	return $this->hasMany('\App\Reposo','trabajador_id','id');

    }

    public function vacaciones(){

    	return $this->hasMany('\App\Vacacion','trabajador_id','id');

    }

    public function formaciones(){

    	return $this->hasMany('\App\Formacion','trabajador_id','id');
    	
    }

}
