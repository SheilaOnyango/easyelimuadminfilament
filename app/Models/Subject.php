<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    
    protected $table = 'subjects';

    protected $fillable = [
        'id', 'name', 'alias', 'subject_code', 'description', 'metadescription', 'grade_id', 'icon_name', 'amount', 'created_at', 'updated_at', 'status', 'created_by', 'modified_by'
    ];
}
