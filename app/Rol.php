<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{

	protected $connection = 'mysql';

	protected $table = 'roles';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function usuarios(){

    	return $this->hasMany('User','rol_id','id');
    	
    }
}
