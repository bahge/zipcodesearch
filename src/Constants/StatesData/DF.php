<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class DF implements ICitiesInfo
{
    public static int $numberCities = 1;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(DF::$numberCities);
        $map->putAll([
            "5300108" => new Map([
                "name" => "Brasília",
                "zipCode" => [ [ 70000001, 72799999 ], [ 73000001, 73699999 ] ],
                "ibge" => 5300108
            ])
        ]);

        return $map;
    }
}