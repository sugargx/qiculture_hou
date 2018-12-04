<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class NewType extends Model
{
    //
    protected $table = "new_type";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function news(){
        return $this->hasMany(News::class,'type_id','id');
    }
    public function index_column(){
        return $this->hasOne(IndexColumn::class,'news_type_id','id');
    }
}
