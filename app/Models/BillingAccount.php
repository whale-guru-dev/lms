<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingAccount extends Model
{
    protected $table = 'tb_billing_account';
    public $timestamps = false;

    public function student()
    {
    	return $this->hasOne('App\Models\Student','student_billing_account_id');
    }

    public function parent()
    {
    	return $this->belongsTo('App\Models\Parents');
    }
}
