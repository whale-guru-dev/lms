<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CenterSchedule extends Model
{
    protected $table = 'tb_center_schedule';
    public $timestamps = false;

    protected $fillable = [
        'center_id','date_of_week_id','open_time','closed_time', 'day_closed','more_hours'
    ];

    public function center()
    {
    	return $this->belongsTo('App\Models\Center');
    }
}
