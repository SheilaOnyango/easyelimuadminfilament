<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighschoolK2Item extends Model
{
    use HasFactory;
    
    protected $table = 'highschoolk2items';

    protected $fillable = [
        'id', 'title', 'alias', 'catid', 'published', 'introtext', 'metadesc', 'created_at', 'updated_at', 'trash'
    ];
}