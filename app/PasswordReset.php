<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{

	protected $connection = 'mysql';

	protected $table = 'password_resets';

	protected $fillable = [];

    public function users(){

    	return $this->belongsTo('\App\User','user_id','id');
    	
    }
}
