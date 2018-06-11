<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserCenterAccessibility extends Pivot
{
    protected $table = 'tb_user_center_accessibility';
    public $timestamps = false;

}
