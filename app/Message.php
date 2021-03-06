<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Message extends Model
{
    use SoftDeletes;

    protected $table = 'messages';
    protected $fillable = ['body'];
    protected $dates = ['deleted_at'];


    //relations
    public function opinion(){
        return $this->belongsTo(Opinion::class);
    }

    public function messagable(){
        return $this->morpho();
    }

}
