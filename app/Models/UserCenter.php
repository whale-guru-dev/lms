<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCenter extends Model
{
    protected $table = 'tb_user_center';
    public $timestamps = false;

    protected $fillable = [];

    public function center()
    {
    	return $this->hasMany('App\Models\Center','center_id');
    }

    public function user()
    {
    	return $this->hasMany('App\Models\User','user_id');
    }
}
