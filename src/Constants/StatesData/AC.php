<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class AC implements ICitiesInfo
{
    public static int $numberCities = 22;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(AC::$numberCities);
        $map->putAll([
            "1200013" => new Map([
                "name" => "Acrelândia",
                "zipCode" => [ 69945000, 69949999 ],
                "ibge" => 1200013
            ]),
            "1200054" => new Map([
                "name" => "Assis Brasil",
                "zipCode" => [ 69935000, 69939999 ],
                "ibge" => 1200054
            ]),
            "1200104" => new Map([
                "name" => "Brasiléia",
                "zipCode" => [ 69932000, 69933999 ],
                "ibge" => 1200104
            ]),
            "1200138" => new Map([
                "name" => "Bujari",
                "zipCode" => [ 69926000, 69926999 ],
                "ibge" => 1200138
            ]),
            "1200179" => new Map([
                "name" => "Capixaba",
                "zipCode" => [ 69931000, 69931999 ],
                "ibge" => 1200179
            ]),
            "1200203" => new Map([
                "name" => "Cruzeiro do Sul",
                "zipCode" => [ 69980000, 69981999 ],
                "ibge" => 1200203
            ]),
            "1200252" => new Map([
                "name" => "Epitaciolândia",
                "zipCode" => [ 69934000, 69934999 ],
                "ibge" => 1200252
            ]),
            "1200302" => new Map([
                "name" => "Feijó",
                "zipCode" => [ 69960000, 69969999 ],
                "ibge" => 1200302
            ]),
            "1200328" => new Map([
                "name" => "Jordão",
                "zipCode" => [ 69975000, 69979999 ],
                "ibge" => 1200328
            ]),
            "1200336" => new Map([
                "name" => "Mâncio Lima",
                "zipCode" => [ 69990000, 69999999 ],
                "ibge" => 1200336
            ]),
            "1200344" => new Map([
                "name" => "Manoel Urbano",
                "zipCode" => [ 69950000, 69954999 ],
                "ibge" => 1200344
            ]),
            "1200351" => new Map([
                "name" => "Marechal Thaumaturgo",
                "zipCode" => [ 69983000, 69984999 ],
                "ibge" => 1200351
            ]),
            "1200385" => new Map([
                "name" => "Plácido de Castro",
                "zipCode" => [ 69928000, 69929999 ],
                "ibge" => 1200385
            ]),
            "1200807" => new Map([
                "name" => "Porto Acre",
                "zipCode" => [ 69927000, 69927999 ],
                "ibge" => 1200807
            ]),
            "1200393" => new Map([
                "name" => "Porto Walter",
                "zipCode" => [ 69982000, 69982999 ],
                "ibge" => 1200393
            ]),
            "1200401" => new Map([
                "name" => "Rio Branco",
                "zipCode" => [ 69900001, 69924999 ],
                "ibge" => 1200401
            ]),
            "1200427" => new Map([
                "name" => "Rodrigues Alves",
                "zipCode" => [ 69985000, 69989999 ],
                "ibge" => 1200427
            ]),
            "1200435" => new Map([
                "name" => "Santa Rosa do Purus",
                "zipCode" => [ 69955000, 69959999 ],
                "ibge" => 1200435
            ]),
            "1200500" => new Map([
                "name" => "Sena Madureira",
                "zipCode" => [ 69940000, 69944999 ],
                "ibge" => 1200500
            ]),
            "1200450" => new Map([
                "name" => "Senador Guiomard",
                "zipCode" => [ 69925000, 69925999 ],
                "ibge" => 1200450
            ]),
            "1200609" => new Map([
                "name" => "Tarauacá",
                "zipCode" => [ 69970000, 69974999 ],
                "ibge" => 1200609
            ]),
            "1200708" => new Map([
                "name" => "Xapuri",
                "zipCode" => [ 69930000, 69930999 ],
                "ibge" => 1200708
            ])
        ]);

        return $map;
    }
}