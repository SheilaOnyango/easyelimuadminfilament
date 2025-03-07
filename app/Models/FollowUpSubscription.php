<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUpSubscription extends Model
{
    use HasFactory;
    
    protected $table = 'followup_subscriptions';

    protected $fillable = [
        'id', 'followup_id', 'payment_id', 'subscription_id', 'created_by', 
        'modified_by', 'phone_number', 'created_at', 'updated_at'
    ];
}
