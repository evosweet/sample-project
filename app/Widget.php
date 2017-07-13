<?php

namespace App;

use App\Traits\HasModelTrait;
//use Illuminate\Database\Eloquent\Model;
//use Carbon\Carbon;

class Widget extends SuperModel
{
    //
    //use HasModelTrait;

    protected $fillable = ['name','slug','user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    // public function getCreatedAtAttribute($value){
    //     return Carbon::parse($value)->format('m-d-Y');
    // }
}

