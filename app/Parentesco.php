<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{

	protected $connection = 'mysql';

	protected $table = 'parentescos';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function cargas(){

    	return $this->hasMany('\App\CargaFamiliar','parentesco_id','id');
    	
    }
}
