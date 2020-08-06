<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Complaint;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComplaintType extends Model

{
    use SoftDeletes;

    protected $table = 'complaint_types';

    protected $fillable = ['category'];
    protected $dates = ['deleted_at'];

    public function complaints(){
        return $this->hasMany(Complaint::class);
    }
}
