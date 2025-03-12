<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    
    protected $table = 'packages';

    protected $fillable = [
        'id', 'package_name', 'amount', 'package_description', 'status', 'time_value', 'duration', 'items_limit', 'PDF_downloads_limit', 'pages_downloads_limit', 'questions_limit', 'videos_limit', 'created_at', 'updated_at'
    ];
}