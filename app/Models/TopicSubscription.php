<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicSubscription extends Model
{
    use HasFactory;
    
    protected $table = 'topic_subscriptions';

    protected $fillable = [
        'id', 'topic_id', 'payment_id', 'user_id', 'start_date', 'end_date', 'created_at', 'updated_at'
    ];
}
