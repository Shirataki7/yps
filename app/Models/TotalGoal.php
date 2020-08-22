<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Throwable;

class TotalGoal extends Model
{
    protected $table = "total_goals";
    protected $dates = ["expired_at", "deleted_at", "updated_at", "created_at"];
}
