<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CenterAccessibility extends Model
{
    protected $table = 'tb_center_accessibility';
    public $timestamps = false;

    public function center()
    {
    	return $this->belongsTo('App\Models\Center');
    }
}
