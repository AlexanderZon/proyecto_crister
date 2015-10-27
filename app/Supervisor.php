<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{

	protected $connection = 'mysql';

	protected $table = 'supervisores';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function trabajadores(){

    	return $this->hasMany('\App\Trabajador','supervisor_id','id');
    	
    }
}
