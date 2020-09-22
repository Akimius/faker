<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerFilterWebmasterBlocks extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    protected $table = 'partner_filter_webmaster_block';
}
