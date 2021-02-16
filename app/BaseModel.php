<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaseModel extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function getTableFields(): array
    {
        $table = $this->getTable();

        return DB::getSchemaBuilder()->getColumnListing($table);
    }
}
