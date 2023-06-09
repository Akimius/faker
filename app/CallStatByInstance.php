<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallStatByInstance extends BaseModel
{
    use HasFactory;

    protected $table = 'call_stat_by_instance';
}
