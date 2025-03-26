<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    
    protected $table = 'years';

    protected $fillable = [
        'id', 'year', 'alias', 'grade_id', 'description', 'metadescription', 'status', 'created_by', 'modified_by', 'created_at', 'updated_at'
    ];
}
