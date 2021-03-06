<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{

	protected $connection = 'mysql';

	protected $table = 'cargos';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function trabajador(){

    	return $this->hasMany('\App\Trabajador', 'cargo_id', 'id');

    }

    public function tipo(){

    	return $this->belongsTo('\App\TipoTrabajador', 'tipo_trabajador_id', 'id');
    	
    }

}
