<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    protected $table = 'payments';

    protected $fillable = [
        'id', 'CheckoutRequestID', 'MerchantRequestID', 'user_id', 'referrer_id', 'commission_percentage', 'cron_update', 'package_id', 'topic_id', 'subject_id', 'exam_id', 'lpritopic_id', 'upritopic_id', 'jsstopic_id', 'hstopic_id', 'online_class_id', 'phone_number', 'amount', 'mpesa_receipt_number', 'transaction_date', 'purchase_description', 'comments', 'transaction_completed', 'mpesa_first_name', 'created_by', 'modified_by', 'created_at', 'updated_at'
    ];
}