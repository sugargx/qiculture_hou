<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class IndexColumn extends Model
{
    //
    protected $table = "index_clumn";
    protected $primaryKey = 'id';
    public function news_type(){
        return $this->hasOne(NewType::class,'id','news_type_id');
    }
}
