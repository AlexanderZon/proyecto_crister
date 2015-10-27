<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{

	protected $connection = 'mysql';

	protected $table = 'semestres';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function periodo(){

    	return $this->belongsTo('\App\Periodo','periodo_id','id');

    }
}
