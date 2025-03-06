<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSubscription extends Model
{
    use HasFactory;
    
    protected $table = 'exam_subscriptions'; 

    protected $fillable = [
        'id', 'subject_exam_id', 'payment_id', 'user_id', 
        'start_date', 'end_date', 'created_at', 'updated_at'
    ];
}
