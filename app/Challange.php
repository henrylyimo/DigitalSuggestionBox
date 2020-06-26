<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challange extends Model
{
  use SoftDeletes;

  protected $fillable = ['description','challange_type_id','status'];
  protected $dates = ['deleted_at'];

  public function challangeType(){
      return $this->belongsTo(challangeType::class);
  }

}
