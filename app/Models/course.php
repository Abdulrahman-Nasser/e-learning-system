<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function track()
    {
        return $this->belongsToMany(track::class,'traccourse_pivot');
    }
    public function diploma()
    {
        return $this->belongsToMany(diploma::class,'diolmaccourse_pivot');
    }
    public function video()
    {
        return $this->hasMany(video::class,'course_id');
    }
    public function exam()
    {
        return $this->hasOne(exam::class,'course_id');
    }
    use HasFactory;
}
