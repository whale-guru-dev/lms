<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCenterAccessibility extends Model
{
    protected $table = 'tb_user_center_accessibility';
    public $timestamps = false;

    public function user()
    {
    	return $this->hasOne('App\Models\User','user_id');
    }

    public function center()
    {
    	return $this->hasOne('App\Models\Center','center_id');
    }

    public function centeraccessibility()
    {
    	return $this->hasOne('App\Models\CenterAccessibility','center_accessibility_id');
    }
}
