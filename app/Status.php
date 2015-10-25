<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

	protected $connection = 'mysql';

	protected $table = 'status';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function trabajadores(){

    	return $this->hasMany('Trabajador','status_id','id');

    }
}
