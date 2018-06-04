<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CenterSchedule extends Model
{
    protected $table = 'tb_center_schedule';
    public $timestamps = false;

    public function center()
    {
    	return $this->belongsTo('App\Models\Center');
    }
}
