<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{

	protected $connection = 'mysql';

	protected $table = 'especialidades';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function especialistas(){

    	return $this->hasMany('Especialista','especialidad_id','id');

    }

    public function centro(){

    	return $this->belongsTo('CentroAsistencial','centro_asistenacial_id','id');
    	
    }
}