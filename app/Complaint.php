<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ComplaintType;
use Illuminate\Database\Eloquent\SoftDeletes;


class Complaint extends Model
{
    use SoftDeletes;

    protected $table = 'complaints';

    protected $fillable = ['complaint_type_id','contact_no','complaint' , 'solution'];
    protected $dates = ['deleted_at'];
  
    //relations...
  
    public function message(){
        return $this->hasOne(Message::class);
    }
  
    public function complaintType(){
        return $this->belongsTo(ComplaintType::class);
    }

    public function messages(){
        return $this->morphMany(Message::class, 'messagable');
    }
}
