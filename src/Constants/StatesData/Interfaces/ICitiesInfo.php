<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData\Interfaces;

interface ICitiesInfo
{
    /** @return array<array<string | array<int | array<int>> | int>> */
    public static function citiesInfo(): array;
}