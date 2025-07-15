<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrokerApplication extends Model
{
    protected $fillable = [
        'pid',
        'broker_id',
        'reviewer_id',
        'status',
        'document',
    ];

    public function broker()
    {
        return $this->belongsTo(User::class, 'broker_id');
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
