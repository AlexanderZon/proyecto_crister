<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{

	protected $connection = 'mysql';

	protected $table = 'dependencias';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function trabajadores(){

    	return $this->hasMany('\App\Trabajador','dependencia_id','id');
    	
    }
}
