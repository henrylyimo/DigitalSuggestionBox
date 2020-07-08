<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challenge extends Model
{
  use SoftDeletes;

  protected $table = 'challanges';

  protected $primarykey = 'id';

  protected $fillable = [
    'challange_type_id',
    'status',
    'college',
    'email',
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
