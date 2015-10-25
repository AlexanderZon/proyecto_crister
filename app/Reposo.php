<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reposo extends Model
{

	protected $connection = 'mysql';

	protected $table = 'reposos';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function trabajador(){

    	return $this->belongsTo('Trabajador','trabajador_id','id');

    }

    public function centro(){

    	return $this->belongsTo('CentroAsistencial','centro_asistencial_id','id');

    }

    public function periodo(){

    	return $this->belongsTo('Periodo','periodo_id','id');
    	
    }
}
