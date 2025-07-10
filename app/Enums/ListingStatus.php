<?php

namespace App\Enums;

enum ListingStatus : string
{
    case ACTIVE = 'active';
    case PENDING = 'pending';
    case SOLD = 'sold';
}
