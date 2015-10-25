<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{

	protected $connection = 'mysql';

	protected $table = 'password_resets';

	protected $fillable = [];

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function users(){

    	return $this->belongsTo('User','user_id','id');
    	
    }
}
