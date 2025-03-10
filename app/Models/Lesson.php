<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    
    protected $table = 'lessons';

    protected $fillable = [
        'id', 'title', 'lesson_objectives', 'lesson_notes', 'video_url', 'animation_ur', 'alias', 'is_free', 'status', 'created_by', 'modified_by', 'sub_topic_id', 'created_at', 'updated_at'
    ];
}