<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CenterContact extends Model
{
    protected $table = 'tb_center_contact';
    public $timestamps = false;

    protected $fillable = [
        'center_contact_manager','center_contact_senior_manager','center_contact_district_manager', 'center_contact_incident_manager'
    ];

    public function center()
    {
    	return $this->belongsTo('App\Models\Center');
    }
}
