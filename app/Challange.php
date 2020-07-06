<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challange extends Model
{
  use SoftDeletes;

  protected $table = 'challenges';

  protected $primarykey = 'id';

  protected $fillable = [
    'challange_type_id',
    'status',
    'name',
    'reg_no',
    'contact_no',
    'course',
    'complain',
    'c_solution',
    'evidence',
  ];
  protected $dates = ['deleted_at'];

  public function challangeType(){
      return $this->belongsTo(challangeType::class);
  }

}
