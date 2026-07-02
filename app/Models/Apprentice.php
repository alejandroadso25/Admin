<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Computer;

class Apprentice extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'cell_number', 'course_id', 'computer_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}
