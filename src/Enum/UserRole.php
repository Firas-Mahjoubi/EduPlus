<?php

namespace App\Enum;

enum UserRole: string
{
    case ROLE_USER = 'ROLE_USER';
    case ROLE_ADMIN = 'ROLE_ADMIN';
    case ROLE_RESPONSABLE_CLUB = 'ROLE_RESPONSABLE_CLUB';

    public function getLabel(): string
    {
        return match ($this) {
            self::ROLE_USER => 'User',
            self::ROLE_ADMIN => 'Admin',
        };
    }
}
