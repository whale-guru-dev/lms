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
    	return $this->hasOne('App\Models\BillingAccount','student_billing_account_id');
    }

    public function center()
    {
    	return $this->hasOne('App\Models\Center','center_id');
    }


    public function parents()
    {
    	return $this->belongsToMany('App\Models\Parents','tb_relationship','student_id','relation_id');
    }

    public function sibling()
    {
    	return $this->belongsToMany('App\Models\Student','tb_sibiling','student_id','self_student_id')->withPivot('sibling_type');
    }

    public function silbing_student()
    {
    	return $this->belongsTo('App\Models\Sibling');
    }
}
