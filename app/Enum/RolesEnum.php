<?php

namespace App\Enum;



enum RolesEnum: string
{
    case Admin = 'admin';
    case Commenter = 'commenter';
    case User = 'user';

    public static function labels(): array
    {
        return [
            self::Admin->value => 'admin',
            self::User->value => 'user',
            self::Commenter->value => 'commenter'
        ];
    }
    public function label()
    {
        return match ($this) {
            self::Admin => 'admin',
            self::User => 'user',
            self::Commenter => 'commenter'
        };
    }
}
