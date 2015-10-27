<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTrabajador extends Model
{

	protected $connection = 'mysql';

	protected $table = 'tipo_trabajadores';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function cargos(){

    	return $this->hasMany('\App\Cargo','tipo_trabajador_id','id');
    	
    }
}
