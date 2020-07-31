<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OpinionType extends Model
{
    
    use SoftDeletes;

    protected $table = 'opinion_types';

    protected $fillable = ['category'];
    protected $dates = ['deleted_at'];

    public function opinions(){
        return $this->hasMany(Opinion::class);
    }
}
