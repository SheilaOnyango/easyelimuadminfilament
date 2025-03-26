<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAnalytics extends Model
{
    use HasFactory;
    
    protected $table = 'web_analytics';

    protected $fillable = [
        'id', 'date', 'nb_uniq_visitors', 'nb_users', 'nb_visits', 'nb_actions', 'nb_visits_converted', 'bounce_count', 'sum_visit_length', 'max_actions', 'bounce_rate', 'nb_actions_per_visit', 'avg_time_on_site', 'created_at', 'updated_at'
    ];
}