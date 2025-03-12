<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldcontentSubscription extends Model
{
    use HasFactory;
    
    protected $table = 'oldcontent_subscriptions';

    protected $fillable = [
        'id', 'hstopic_id', 'jsstopic_id', 'upritopic_id', 'lpritopic_id', 'payment_id', 'user_id', 'start_date', 'end_date', 'created_at', 'updated_at'
    ];
}