<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class ActionLog extends Model
{
    protected $fillable = [
        'action_time',
        'user_id',
        'operation_name',
        'modified_table',
        'modified_record_id',
        'page_section',
        'ip_address',
        'action_status',
        'error_message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}