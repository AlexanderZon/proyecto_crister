<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{

	protected $connection = 'mysql';

	protected $table = 'motivos';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function permiso(){

    	return $this->hasMany('Permiso','motivo_id','id');

    }
    
}
