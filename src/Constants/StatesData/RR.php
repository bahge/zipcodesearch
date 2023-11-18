<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class RR implements ICitiesInfo
{
    public static int $numberCities = 15;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(RR::$numberCities);
        $map->putAll([
            "1400050" => new Map([
                "name" => "Alto Alegre",
                "zipCode" => [ 69350000, 69354999 ],
                "ibge" => 1400050
            ]),
            "1400027" => new Map([
                "name" => "Amajari",
                "zipCode" => [ 69343000, 69344999 ],
                "ibge" => 1400027
            ]),
            "1400100" => new Map([
                "name" => "Boa Vista",
                "zipCode" => [ 69300001, 69339999 ],
                "ibge" => 1400100
            ]),
            "1400159" => new Map([
                "name" => "Bonfim",
                "zipCode" => [ 69380000, 69389999 ],
                "ibge" => 1400159
            ]),
            "1400175" => new Map([
                "name" => "Cantá",
                "zipCode" => [ 69390000, 69399999 ],
                "ibge" => 1400175
            ]),
            "1400209" => new Map([
                "name" => "Caracaraí",
                "zipCode" => [ 69360000, 69369999 ],
                "ibge" => 1400209
            ]),
            "1400233" => new Map([
                "name" => "Caroebe",
                "zipCode" => [ 69378000, 69379999 ],
                "ibge" => 1400233
            ]),
            "1400282" => new Map([
                "name" => "Iracema",
                "zipCode" => [ 69348000, 69349999 ],
                "ibge" => 1400282
            ]),
            "1400308" => new Map([
                "name" => "Mucajaí",
                "zipCode" => [ 69340000, 69342999 ],
                "ibge" => 1400308
            ]),
            "1400407" => new Map([
                "name" => "Normandia",
                "zipCode" => [ 69355000, 69357999 ],
                "ibge" => 1400407
            ]),
            "1400456" => new Map([
                "name" => "Pacaraima",
                "zipCode" => [ 69345000, 69347999 ],
                "ibge" => 1400456
            ]),
            "1400472" => new Map([
                "name" => "Rorainópolis",
                "zipCode" => [ 69373000, 69374999 ],
                "ibge" => 1400472
            ]),
            "1400506" => new Map([
                "name" => "São João da Baliza",
                "zipCode" => [ 69375000, 69377999 ],
                "ibge" => 1400506
            ]),
            "1400605" => new Map([
                "name" => "São Luiz",
                "zipCode" => [ 69370000, 69372999 ],
                "ibge" => 1400605
            ]),
            "1400704" => new Map([
                "name" => "Uiramutã",
                "zipCode" => [ 69358000, 69359999 ],
                "ibge" => 1400704
            ])
        ]);

        return $map;
    }
}