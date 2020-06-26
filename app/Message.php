<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Message extends Model
{
    use SoftDeletes;

    protected $fillable = ['description','suggestion_id'];
    protected $dates = ['deleted_at'];


    //relations
    public function messages(){
        return $this->belongsTo(Suggestion::class);
    }
}
