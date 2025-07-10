<?php

namespace App\Data;

enum Role: string
{
    case ADMIN ='admin';
    case EDITOR = 'editor';
    case USER = 'user';
}
