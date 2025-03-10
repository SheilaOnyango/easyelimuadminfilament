<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JssCategory extends Model
{
    use HasFactory;
    
    protected $table = 'jsscategories';

    protected $fillable = [
        'id', 'name', 'alias', 'description', 'parent_id', 'published', 'created_at', 'updated_at'
    ];
}