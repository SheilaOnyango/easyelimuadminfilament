<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    
    protected $table = 'terms';

    protected $fillable = [
        'id', 'year_id', 'term', 'alias', 'description', 'metadescription', 'status', 'created_by', 'modified_by', 'created_at', 'updated_at'
    ];
}
