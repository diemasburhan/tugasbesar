<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['code','name','gender','birth_date','birth_place','faculty_id'];

    public function faculty(){
        return $this->belongsTo('App\Faculty','faculty_id','id');
    }
}
