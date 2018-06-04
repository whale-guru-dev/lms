<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CenterSummary extends Model
{
    protected $table = 'tb_center_summary';
    public $timestamps = false;

    public function center()
    {
    	return $this->belongsTo('App\Models\Center');
    }
}
