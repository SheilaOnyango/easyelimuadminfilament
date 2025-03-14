<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;
    
    protected $table = 'sets';

    protected $fillable = [
        'id', 'term_id', 'sets', 'alias', 'set_price', 'price_per_exam', 'description', 'metadescription', 'status', 'created_by', 'modified_by', 'created_at', 'updated_at'
    ];
}