<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CenterContact extends Model
{
    protected $table = 'tb_center_contact';
    public $timestamps = false;

    public function center()
    {
    	return $this->belongsTo('App\Models\Center');
    }
}
