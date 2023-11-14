<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData\Interfaces;

use DS\Map;

interface ICitiesInfo
{
    public static function citiesInfo(): Map;
}