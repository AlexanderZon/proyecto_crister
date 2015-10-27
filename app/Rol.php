<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{

	protected $connection = 'mysql';

	protected $table = 'roles';

	protected $fillable = [];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function usuarios(){

    	return $this->hasMany('\App\User','rol_id','id');
    	
    }
}
