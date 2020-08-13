<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalUnsubscribe extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    protected $table = 'global_unsubscribe';
}
