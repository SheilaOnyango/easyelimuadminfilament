<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    
    protected $table = 'grades';

    protected $fillable = [
        'id', 'name', 'type', 'alias', 'level_id', 'created_at', 
        'updated_at', 'description', 'metadescription', 'status', 'created_by', 'modified_by'
    ];
}
