<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_Center extends Model
{
    use HasFactory;

    protected $table = 'training__centers';

    protected $fillable = ['name', 'location'];

    public function teachers()
    {
        return $this->hasMany(Teacher::class, 'training_center_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'training_center_id');
    }
}
