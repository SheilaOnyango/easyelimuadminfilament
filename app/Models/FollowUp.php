<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{
    use HasFactory;
    
    protected $table = 'followups';

    protected $fillable = [
        'id', 'user_id', 'payment_id', 'phone_number', 'contact_date', 
        'followup_date', 'comments', 'created_by', 'modified_by', 'created_at', 'updated_at'
    ];
}

