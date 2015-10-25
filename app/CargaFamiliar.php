<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargaFamiliar extends Model
{

	protected $connection = 'mysql';

	protected $table = 'cargas_familiares';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function trabajador(){

    	return $this->belongsTo('Trabajador', 'trabajador_id', 'id');

    }

    public function parentesco(){

    	return $this->belongsTo('Parentesco', 'parentesco_id', 'id');
    	
    }

}