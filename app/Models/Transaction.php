<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'pid',
        'listing_id',
        'broker_id',
        'user_id',
        'amount',
        'currency',
        'status',
        'payment_method',
        'payment_reference',
    ];

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    public function broker()
    {
        return $this->belongsTo(User::class, 'broker_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
