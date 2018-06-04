<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CenterFinance extends Model
{
    protected $table = 'tb_center_finance';
    public $timestamps = false;

    public function center()
    {
    	return $this->belongsTo('App\Models\Center');
    }
}
