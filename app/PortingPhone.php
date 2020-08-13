<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortingPhone extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    protected $table = 'porting_phone_import';
}
