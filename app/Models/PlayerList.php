<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Throwble;

class PlayerList extends Model
{

    protected $table = "PlayerLists";
    protected $dates = ["expired_at", "deleted_at", "updated_at", "created_at"];

    public static function getWithContoryBySimplePaginate($paginate_limit){
        try{
            return self::Paginate($paginate_limit);
        } catch(Throwble $e){
            throw $e;
        }
     }
}
