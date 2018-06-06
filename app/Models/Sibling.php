<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sibling extends Model
{
    protected $table = 'tb_sibling';
    public $timestamps = false;

    protected $fillable = ['sibling_type','student_id','self_student_id'];


    public function student()
    {
    	return $this->hasMany('App\Models\Student');
    }
}
