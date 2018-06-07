<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingAccount extends Model
{
    protected $table = 'tb_billing_account';
    public $timestamps = false;

    public function student()
    {
    	return $this->belongsTo('App\Models\Student');
    }

    public function parent()
    {
    	return $this->hasOne('App\Models\Parents','billing_account_parent_id');
    }
}
