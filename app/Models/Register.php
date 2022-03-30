<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Register extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function course()
    {
        return $this->belongsToMany(RegisterStudent::class);
    }

    public function status()
    {
        return $this->hasMany(AttendanceRegister::class);
    }
}
