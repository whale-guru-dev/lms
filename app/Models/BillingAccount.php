<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingAccount extends Model
{
    protected $table = 'tb_billing_account';
    public $timestamps = false;

    public function student()
    {
    	return $this->hasMany('App\Models\Student');
    }
}
