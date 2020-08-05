<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChallangeType extends Model
{
    use SoftDeletes;

    protected $table = 'challange_types';

    protected $fillable = ['category'];
    protected $dates = ['deleted_at'];

    public function challanges(){
        return $this->hasMany(Challange::class);
    }
}
