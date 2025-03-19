<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTopic extends Model
{
    use HasFactory;
    
    protected $table = 'sub_topics';

    protected $fillable = [
        'id', 'name', 'topic_id', 'description', 'metadescription', 'alias', 'created_by', 'status', 'created_at', 'updated_at', 'modified_by'
    ];
}