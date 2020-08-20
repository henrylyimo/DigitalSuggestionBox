<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class create_news extends Model
{
    use SoftDeletes;

    protected $fillable = ['tittle', 'news',];
    protected $date = ['deleted_at'];


    //relations

    public function postCreateNews(){
        return $this->belongsToMany(create_news::class);
    }

    
}
