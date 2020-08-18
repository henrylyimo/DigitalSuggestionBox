<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resolver extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'professional', 'email', 'contact',];
    protected $date = ['deleted_at'];


    //relations

    public function resolver(){
        return $this->belongsTo(Resolver::class);
    }

}
