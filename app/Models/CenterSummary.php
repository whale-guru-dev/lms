<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CenterSummary extends Model
{
    protected $table = 'tb_center_summary';
    public $timestamps = false;

    protected $fillable = [
        'center_general_info_phone','center_general_info_fax','center_general_info_email', 'center_location_from_date', 'center_location_to_date', 'center_location_addr','center_location_country','center_location_state','center_location_city','center_location_region'
    ];

    public function center()
    {
    	return $this->belongsTo('App\Models\Center');
    }
}
