<?php

namespace App\Models;

use App\Enums\ListingStatus;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'pid',
        'title',
        'description',
        'price',
        'status',
        'category_id',
        'broker_id',
    ];

    protected $casts = [
        'status' => ListingStatus::class,
        'price' => 'decimal:2',
    ];

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }
    public function broker()
    {
        return $this->belongsTo(User::class, 'broker_id');
    }
}
