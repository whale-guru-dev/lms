<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    protected $table = 'tb_parent';
    public $timestamps = false;

    protected $fillable = ['parent_type','student_id','fName','lName','mobile','email','address'];

    public function relationship()
    {
    	return $this->belongsTo('App\Models\Relationship');
    }

    public function billingaccount()
    {
    	return $this->hasOne('App\Models\BillingAccount');
    }

    public function student()
    {
    	return $this->hasMany('App\Models\Student');
    }
}
