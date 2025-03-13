<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResponse extends Model
{
    use HasFactory;
    
    protected $table = 'quizreponses';

    protected $fillable = [
        'id', 'question_id', 'choice_id', 'is_user_correct_answer', 'user_id', 'lesson_id', 'created_at', 'updated_at'
    ];
}

