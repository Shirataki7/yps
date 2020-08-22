<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Throwble;

class Player extends Model
{
    protected $table = "players";
    protected $dates = ["expired_at", "deleted_at", "updated_at", "created_at"];

    public static function getWithContoryBySimplePaginate($paginate_limit){
       try{
	return self::from('players as p')
	->select('p.*','c.name as c_name','t.goals as t_goals')
        ->leftjoin('c_names as c','p.id','=','c.id')
	->leftjoin('total_goals as t','p.id','=','t.id')
	->orderBy('t.goals','desc')
	->orderBy('p.club','asc')
	->orderBy('p.uniform_num','asc')
	->Paginate($paginate_limit);
       } catch(Throwble $e){
	throw $e;
       }
    }

}
