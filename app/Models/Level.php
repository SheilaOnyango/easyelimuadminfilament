<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    
    protected $table = 'levels';

    protected $fillable = [
        'id', 'name', 'type', 'description', 'metadescription', 'alias', 'created_at', 'updated_at', 'image_name', 'created_by', 'modified_by', 'status'
    ];
}