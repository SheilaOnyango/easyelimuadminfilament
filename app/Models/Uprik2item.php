<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uprik2item extends Model
{
    use HasFactory;
    
    protected $table = 'uprik2items';

    protected $fillable = [
        'id', 'title', 'alias', 'catid', 'published', 'introtext', 'metadesc', 'trash', 'created_at', 'updated_at'
    ];
}
