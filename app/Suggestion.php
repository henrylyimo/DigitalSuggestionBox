<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Suggestion extends Model
{
    use SoftDeletes;

  protected $fillable = ['description','suggestion_type_id','user_id','status'];
  protected $dates = ['deleted_at'];

  //relations...

  public function message(){
      return $this->hasOne(Message::class);
  }

  public function suggestionType(){
      return $this->belongsTo(SuggestionType::class);
  }
}
