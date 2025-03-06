<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    
    protected $table = 'feedbacks'; 

    protected $fillable = [
        'id', 'user_id', 'lesson_id', 'parent_id', 'rating', 
        'message', 'status', 'edited', 'reported', 'created_at', 'updated_at'
    ];
} 