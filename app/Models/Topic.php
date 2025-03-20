<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    
    protected $table = 'topics';

    protected $fillable = [
        'id', 'year_id', 'term', 'alias', 'description', 'metadescription', 'status', 'created_by', 'modified_by', 'created_at', 'updated_at'
    ];
}
