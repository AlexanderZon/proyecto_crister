<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{

	protected $connection = 'mysql';

	protected $table = 'formaciones';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function profesion(){

    	return $this->belongsTo('\App\Profesion','profesion_id','id');

    }

    public function trabajador(){

    	return $this->belongsTo('\App\Trabajador','trabajador_id','id');

    }

    public function nivel(){

    	return $this->belongsTo('\App\NivelEducativo','nivel_educativo_id','id');
    	
    }
}
