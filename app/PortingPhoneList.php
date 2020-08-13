<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortingPhoneList extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'porting_phone_import_list';
}
