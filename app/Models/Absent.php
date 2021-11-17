<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absent extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'arrival_time',
        'go_home_time',        
        'proof',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
