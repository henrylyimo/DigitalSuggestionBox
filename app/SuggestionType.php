<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuggestionType extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];
    protected $dates = ['deleted_at'];

    public function suggestions(){
        return $this->hasMany(Suggestion::class);
    }
}
