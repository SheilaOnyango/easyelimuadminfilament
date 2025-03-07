<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighschoolCategory extends Model
{
    use HasFactory;
    
    protected $table = 'highschoolcategories';

    protected $fillable = [
        'id', 'name', 'alias', 'description', 'parent_id', 'published', 'created_at', 'updated_at'
    ];
}
