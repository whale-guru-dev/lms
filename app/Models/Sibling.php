<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Sibling extends Pivot
{
    protected $table = 'tb_sibiling';
    public $timestamps = false;

    protected $fillable = ['sibling_type','student_id','self_student_id'];

}
