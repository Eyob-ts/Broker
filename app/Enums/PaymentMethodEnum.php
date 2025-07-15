<?php

namespace App\Enums;

enum PaymentMethodEnum : string
{
    case CHAPA = 'chapa';
    case CASH = 'cash';
    case BANK_TRANSFER = 'bank_transfer';
    case MOBILE_MONEY = 'mobile_money';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
