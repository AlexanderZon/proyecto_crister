<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelEducativo extends Model
{

	protected $connection = 'mysql';

	protected $table = 'niveles_educativos';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function formaciones(){

    	return $this->hasMany('\App\Formacion','nivel_educativo_id','id');
    	
    }
}
