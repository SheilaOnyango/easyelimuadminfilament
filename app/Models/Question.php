<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    
    protected $table = 'questions';

    protected $fillable = [
        'id', 'full_question', 'is_multiple', 'alias', 'is_free', 'answer', 'marks', 'created_by', 'modified_by', 'status', 'created_at', 'updated_at', 'lesson_id', 'ai_enabled', 'ai_before_prompt', 'ai_after_prompt', 'exam_subject_id'
    ];
}
