<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleChoice extends Model
{
    use HasFactory;
    
    protected $table = 'multiple_choices';

    protected $fillable = [
        'id', 'question_id', 'value', 'is_correct', 'status', 'created_by', 'modified_by', 'created_at', 'updated_at'
    ];
}