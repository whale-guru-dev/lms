<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $table = 'tb_relationship';
    public $timestamps = false;

    protected $fillable = ['student_id','classification','relation_id'];

    public function parent()
    {
    	return $this->hasMany('App\Models\Parent');
    }

    public function sibling()
    {
    	return $this->hasMany('App\Models\Sibling');
    }

    public function student()
    {
    	return $this->belongsTo('App\Models\Student');
    }
}
