<?php


class Speedometer
{
    const CONVERSION = 0.62137119223733;

    public static function kmMiles(int $km): ?float
    {
        return $km * self::CONVERSION;
    }

    public static function milesKm(int $miles): ?float
    {
        return $miles / self::CONVERSION;
    }
}