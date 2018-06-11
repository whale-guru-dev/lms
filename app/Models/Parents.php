<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'tb_parent';
    public $timestamps = false;

    protected $fillable = ['parent_type','student_id','fName','lName','mobile','email','address'];

    public function students()
    {
    	return $this->belongsToMany('App\Models\Parents','tb_relationship','student_id','relation_id');
    }

    public function billingaccount()
    {
    	return $this->hasOne('App\Models\BillingAccount','billingaccount_id');
    }


}
