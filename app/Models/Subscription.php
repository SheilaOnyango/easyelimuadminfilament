<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    
    protected $table = 'subscriptions';

    protected $fillable = [
        'id', 'subject_id', 'payment_id', 'user_id', 'package_id', 'reminder_sent', 'start_date', 'end_date', 'created_at', 'updated_at'
    ];
}
