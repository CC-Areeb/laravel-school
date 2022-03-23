<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignationRegister extends Model
{
    use HasFactory;

    public function registers()
    {
        return $this->belongsToMany(Register::class);
    }
}