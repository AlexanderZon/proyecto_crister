<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{

	protected $connection = 'mysql';

	protected $table = 'profesiones';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function formaciones(){

    	return $this->hasMany('Formacion','profesion_id','id');

    }

}
