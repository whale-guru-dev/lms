<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $table = 'tb_center';
    public $timestamps = false;

    public function accessibility()
    {
    	return $this->hasOne('App\Models\CenterAccessibility');
    }

    public function contact()
    {
    	return $this->hasOne('App\Models\CenterContact');
    }

    public function finance()
    {
    	return $this->hasOne('App\Models\CenterFinance');
    }

    public function summary()
    {
    	return $this->hasOne('App\Models\CenterSummary');
    }

    public function schedule()
    {
    	return $this->hasMany('App\Models\CenterSchedule');
    }

    public function student()
    {
        return $this->hasMany('App\Models\Student');
    }
}
