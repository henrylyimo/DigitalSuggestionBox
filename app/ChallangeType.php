<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChallangeType extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];
    protected $dates = ['deleted_at'];



    //relations

    public function challanges(){
        return $this->hasMany(Challange::class);
    }
}
