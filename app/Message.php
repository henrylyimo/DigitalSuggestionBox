<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Message extends Model
{
    use SoftDeletes;

    protected $fillable = ['body'];
    protected $dates = ['deleted_at'];


    //relations
    public function messages(){
        return $this->belongsTo(Suggestion::class);
    }
}
