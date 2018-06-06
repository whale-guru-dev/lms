<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'tb_student';
    public $timestamps = false;

    protected $fillable = ['student_id','student_nickname','student_given_name','student_surname','student_gender','student_dob','student_profile_pic','student_enrolled_since','student_school','student_billing_account_id','student_status','center_id'];

    public function billingaccount()
    {
    	return $this->hasOne('App\Models\BillingAccount');
    }

    public function center()
    {
    	return $this->belongsTo('App\Models\Center');
    }
}
