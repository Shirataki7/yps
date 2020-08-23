<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Throwble;

class P_list extends Model
{
    protected $table = "p_lists";
    protected $dates =  ["expired_at", "deleted_at", "updated_at", "created_at"];

    public static function getWithContoryBySimplePaginate($paginate_limit){
        try{
            return self::Paginate($paginate_limit);
        } catch(Throwble $e){
            throw $e;
        }
     }
}
