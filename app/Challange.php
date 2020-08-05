<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challange extends Model
{
    use SoftDeletes;

    protected $fillable = ['challange_type_id','contact_no','complaint', 'solution', 'evidence'];
    protected $dates = ['deleted_at'];
  
    //relations...
  
    public function challangeType(){
        return $this->belongsTo(ChallangeType::class);
    }
}
