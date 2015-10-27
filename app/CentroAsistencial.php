<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroAsistencial extends Model
{

	protected $connection = 'mysql';

	protected $table = 'centros_asistenciales';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function especialidades(){

    	return $this->hasMany('\App\Especialidad','centro_asistencial_id','id');

    }

    public function reposos(){

    	return $this->hasMany('\App\Reposo','centro_asistencial_id','id');
    	
    }
}
