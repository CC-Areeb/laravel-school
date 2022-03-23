<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterStudent extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'register_id',
        'courses_id'
    ];

    protected $table = 'register_student';
    public $timestamps = false;
    
    // any student may have multiple courses
    // any course may be selected by many students

    public function register()
    {
        return $this->belongsToMany(Register::class);
    }
}
