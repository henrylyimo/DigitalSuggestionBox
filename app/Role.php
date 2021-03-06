<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = ['description','name'];
    protected $dates = ['deleted_at'];

    //relation
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
