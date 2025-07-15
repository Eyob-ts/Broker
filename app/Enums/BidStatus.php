<?php

namespace App\Enums;

enum BidStatus : string
{
    case PENDING = 'pending';
    case ACCEPTED = 'accepted';
    case REJECTED = 'rejected';
    case WITHDRAWN = 'withdrawn';
    case EXPIRED = 'expired';
}
