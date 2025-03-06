<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;
    
    protected $table = 'attachments'; 

    protected $fillable = [
        'original_name', 'mime', 'extension', 'size', 
        'sort', 'path', 'description', 'alt', 'hash', 
        'disk', 'user_id', 'group', 'created_at', 'updated_at'
    ];
}
