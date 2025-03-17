<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectExam extends Model
{
    use HasFactory;
    
    protected $table = 'subject_exams';

    protected $fillable = [
        'id', 'set_id', 'time', 'exam_instructions', 'exam', 'alias', 'description', 'metadescription', 'status', 'created_by', 'modified_by', 'created_at', 'updated_at'
    ];
}
