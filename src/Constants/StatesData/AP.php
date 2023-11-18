<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class AP implements ICitiesInfo
{
    public static int $numberCities = 16;
    public static function citiesInfo() : Map
    {
        $map = new Map();
        $map->allocate(AP::$numberCities);
        $map->putAll([
            "1600105" => new Map([
                "name" => "Amapá",
                "zipCode" => [ 68950000, 68959999 ],
                "ibge" => 1600105
            ]),
            "1600204" => new Map([
                "name" => "Calçoene",
                "zipCode" => [ 68960000, 68972999 ],
                "ibge" => 1600204
            ]),
            "1600212" => new Map([
                "name" => "Cutias",
                "zipCode" => [ 68973000, 68975999 ],
                "ibge" => 1600212
            ]),
            "1600238" => new Map([
                "name" => "Ferreira Gomes",
                "zipCode" => [ 68915000, 68917999 ],
                "ibge" => 1600238
            ]),
            "1600253" => new Map([
                "name" => "Itaubal",
                "zipCode" => [ 68976000, 68979999 ],
                "ibge" => 1600253
            ]),
            "1600279" => new Map([
                "name" => "Laranjal do Jari",
                "zipCode" => [ 68920000, 68923999 ],
                "ibge" => 1600279
            ]),
            "1600303" => new Map([
                "name" => "Macapá",
                "zipCode" => [ 68900001, 68914999 ],
                "ibge" => 1600303
            ]),
            "1600402" => new Map([
                "name" => "Mazagão",
                "zipCode" => [ 68940000, 68944999 ],
                "ibge" => 1600402
            ]),
            "1600501" => new Map([
                "name" => "Oiapoque",
                "zipCode" => [ 68980000, 68989999 ],
                "ibge" => 1600501
            ]),
            "1600154" => new Map([
                "name" => "Pedra Branca do Amaparí",
                "zipCode" => [ 68945000, 68947999 ],
                "ibge" => 1600154
            ]),
            "1600535" => new Map([
                "name" => "Porto Grande",
                "zipCode" => [ 68997000, 68999999 ],
                "ibge" => 1600535
            ]),
            "1600550" => new Map([
                "name" => "Pracuúba",
                "zipCode" => [ 68918000, 68919999 ],
                "ibge" => 1600550
            ]),
            "1600600" => new Map([
                "name" => "Santana",
                "zipCode" => [ 68925001, 68939999 ],
                "ibge" => 1600600
            ]),
            "1600055" => new Map([
                "name" => "Serra do Navio",
                "zipCode" => [ 68948000, 68949999 ],
                "ibge" => 1600055
            ]),
            "1600709" => new Map([
                "name" => "Tartarugalzinho",
                "zipCode" => [ 68990000, 68996999 ],
                "ibge" => 1600709
            ]),
            "1600808" => new Map([
                "name" => "Vitória do Jari",
                "zipCode" => [ 68924000, 68924999 ],
                "ibge" => 1600808
            ])
        ]);

        return $map;
    }
}