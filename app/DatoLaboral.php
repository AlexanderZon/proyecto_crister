<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoLaboral extends Model
{

	protected $connection = 'mysql';

	protected $table = 'datos_laborales';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function trabajador(){

    	return $this->hasOne('Trabajador','dato_laboral_id','id');

    }
    
}
