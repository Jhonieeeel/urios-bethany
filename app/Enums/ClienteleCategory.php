<?php

namespace App\ClienteleCategory;

enum ClienteleCategory: string {
    case Rape = 'Rape';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
