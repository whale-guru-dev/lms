<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;


class Relationship extends Pivot
{
    protected $table = 'tb_relationship';
    public $timestamps = false;

    protected $fillable = ['student_id','classification','relation_id'];

}
