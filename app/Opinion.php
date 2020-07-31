<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Opinion extends Model
{
    use SoftDeletes;

    protected $fillable = ['opinion_type_id','contact_no','body'];
    protected $dates = ['deleted_at'];
  
    //relations...
  
    public function message(){
        return $this->hasOne(Message::class);
    }
  
    public function opinionType(){
        return $this->belongsTo(OpinionType::class);
    }
}
