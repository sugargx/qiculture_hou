<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = "news";
    protected $primaryKey = "id";
    protected $guarded = [];
    public function type(){
        return $this->belongsTo(NewType::class,'type_id','id');
    }
}
