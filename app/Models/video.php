<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $fillable=['name','path','duration'];
    public function course()
    {
        return $this->belongsTo(course::class,'course_id');
    }
}
