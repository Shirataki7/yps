<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class C_name extends Model
{
    protected $table = "c_names";
    protected $dates =  ["expired_at", "deleted_at", "updated_at", "created_at"];
}
