<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

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
                "cep" => [ 69350000, 69354999 ],
                "ibge" => 1400050
            ]),
            "1400027" => new Map([
                "name" => "Amajari",
                "cep" => [ 69343000, 69344999 ],
                "ibge" => 1400027
            ]),
            "1400100" => new Map([
                "name" => "Boa Vista",
                "cep" => [ 69300001, 69339999 ],
                "ibge" => 1400100
            ]),
            "1400159" => new Map([
                "name" => "Bonfim",
                "cep" => [ 69380000, 69389999 ],
                "ibge" => 1400159
            ]),
            "1400175" => new Map([
                "name" => "Cantá",
                "cep" => [ 69390000, 69399999 ],
                "ibge" => 1400175
            ]),
            "1400209" => new Map([
                "name" => "Caracaraí",
                "cep" => [ 69360000, 69369999 ],
                "ibge" => 1400209
            ]),
            "1400233" => new Map([
                "name" => "Caroebe",
                "cep" => [ 69378000, 69379999 ],
                "ibge" => 1400233
            ]),
            "1400282" => new Map([
                "name" => "Iracema",
                "cep" => [ 69348000, 69349999 ],
                "ibge" => 1400282
            ]),
            "1400308" => new Map([
                "name" => "Mucajaí",
                "cep" => [ 69340000, 69342999 ],
                "ibge" => 1400308
            ]),
            "1400407" => new Map([
                "name" => "Normandia",
                "cep" => [ 69355000, 69357999 ],
                "ibge" => 1400407
            ]),
            "1400456" => new Map([
                "name" => "Pacaraima",
                "cep" => [ 69345000, 69347999 ],
                "ibge" => 1400456
            ]),
            "1400472" => new Map([
                "name" => "Rorainópolis",
                "cep" => [ 69373000, 69374999 ],
                "ibge" => 1400472
            ]),
            "1400506" => new Map([
                "name" => "São João da Baliza",
                "cep" => [ 69375000, 69377999 ],
                "ibge" => 1400506
            ]),
            "1400605" => new Map([
                "name" => "São Luiz",
                "cep" => [ 69370000, 69372999 ],
                "ibge" => 1400605
            ]),
            "1400704" => new Map([
                "name" => "Uiramutã",
                "cep" => [ 69358000, 69359999 ],
                "ibge" => 1400704
            ])
        ]);

        return $map;
    }
}