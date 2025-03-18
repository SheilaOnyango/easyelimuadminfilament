<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmittedAnswer extends Model
{
    use HasFactory;
    
    protected $table = 'submitted_answers';

    protected $fillable = [
        'id', 'user_id', 'question_id', 'user_response', 'choice_id', 'is_user_correct_answer', 'marking_scheme_answer', 'chat_gpt_answer', 'created_at', 'updated_at'
    ];
}
