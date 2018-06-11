<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $table = 'tb_center';
    public $timestamps = false;

    public function user()
    {
    	return $this->belongsToMany('App\Models\User','tb_user_center_accessibility','user_id','center_id')->withPivot('center_accessibility_id');
    }

    public function contact()
    {
    	return $this->hasOne('App\Models\CenterContact','center_contact_id');
    }

    public function finance()
    {
    	return $this->hasOne('App\Models\CenterFinance','center_finance_id');
    }

    public function summary()
    {
    	return $this->hasOne('App\Models\CenterSummary','center_summary_id');
    }

    public function schedule()
    {
    	return $this->hasMany('App\Models\CenterSchedule');
    }

    public function student()
    {
        return $this->hasMany('App\Models\Student','center_id');
    }
}
