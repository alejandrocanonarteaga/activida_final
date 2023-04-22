<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'credits',
        'teacher_name',
        'prerequisite_id',
        'autonomous_work_hours',
        'directed_work_hours',
        'semester',
    ];

    public function prerequisite()
    {
        return $this->belongsTo(Subject::class, 'prerequisite_id');
    }
}

