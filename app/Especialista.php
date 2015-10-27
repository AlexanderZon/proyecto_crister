<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{

	protected $connection = 'mysql';

	protected $table = 'especialistas';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function especialidad(){

    	return $this->belongsTo('\App\Especialidad','especialidad_id','id');
    	
    }
}
