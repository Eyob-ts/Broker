<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'pid',
        'transaction_id',
        'listing_id',
        'broker_id',
        'user_id',
        'amount',
        'currency',
        'status',
        'tx_ref',
        'payload',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

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
