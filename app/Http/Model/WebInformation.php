<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class WebInformation extends Model
{
    //
    protected $table = 'information';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
