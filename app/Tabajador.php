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

    	return $this->belongsTo('Dependencia','dependencia_id','id');

    }

    public function status(){

    	return $this->belongsTo('Status','status_id','id');

    }

    public function laboral(){

    	return $this->belongsTo('DatoLaboral','dato_laboral_id','id');

    }

    public function carga(){

    	return $this->hasMany('CargaLaboral','trabajador_id','id');

    }

    public function cargo(){

    	return $this->belongsTo('Cargo','cargo_id','id');

    }

    public function permisos(){

    	return $this->hasMany('Permiso','trabajador_id','id');

    }

    public function reposos(){

    	return $this->hasMany('Reposo','trabajador_id','id');

    }

    public function vacaciones(){

    	return $this->hasMany('Vacacion','trabajador_id','id');

    }

    public function formaciones(){

    	return $this->hasMany('Formacion','trabajador_id','id');
    	
    }

}
