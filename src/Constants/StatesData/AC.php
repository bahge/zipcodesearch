<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

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
                "cep" => [ 69945000, 69949999 ],
                "ibge" => 1200013
            ]),
            "1200054" => new Map([
                "name" => "Assis Brasil",
                "cep" => [ 69935000, 69939999 ],
                "ibge" => 1200054
            ]),
            "1200104" => new Map([
                "name" => "Brasiléia",
                "cep" => [ 69932000, 69933999 ],
                "ibge" => 1200104
            ]),
            "1200138" => new Map([
                "name" => "Bujari",
                "cep" => [ 69926000, 69926999 ],
                "ibge" => 1200138
            ]),
            "1200179" => new Map([
                "name" => "Capixaba",
                "cep" => [ 69931000, 69931999 ],
                "ibge" => 1200179
            ]),
            "1200203" => new Map([
                "name" => "Cruzeiro do Sul",
                "cep" => [ 69980000, 69981999 ],
                "ibge" => 1200203
            ]),
            "1200252" => new Map([
                "name" => "Epitaciolândia",
                "cep" => [ 69934000, 69934999 ],
                "ibge" => 1200252
            ]),
            "1200302" => new Map([
                "name" => "Feijó",
                "cep" => [ 69960000, 69969999 ],
                "ibge" => 1200302
            ]),
            "1200328" => new Map([
                "name" => "Jordão",
                "cep" => [ 69975000, 69979999 ],
                "ibge" => 1200328
            ]),
            "1200336" => new Map([
                "name" => "Mâncio Lima",
                "cep" => [ 69990000, 69999999 ],
                "ibge" => 1200336
            ]),
            "1200344" => new Map([
                "name" => "Manoel Urbano",
                "cep" => [ 69950000, 69954999 ],
                "ibge" => 1200344
            ]),
            "1200351" => new Map([
                "name" => "Marechal Thaumaturgo",
                "cep" => [ 69983000, 69984999 ],
                "ibge" => 1200351
            ]),
            "1200385" => new Map([
                "name" => "Plácido de Castro",
                "cep" => [ 69928000, 69929999 ],
                "ibge" => 1200385
            ]),
            "1200807" => new Map([
                "name" => "Porto Acre",
                "cep" => [ 69927000, 69927999 ],
                "ibge" => 1200807
            ]),
            "1200393" => new Map([
                "name" => "Porto Walter",
                "cep" => [ 69982000, 69982999 ],
                "ibge" => 1200393
            ]),
            "1200401" => new Map([
                "name" => "Rio Branco",
                "cep" => [ 69900001, 69924999 ],
                "ibge" => 1200401
            ]),
            "1200427" => new Map([
                "name" => "Rodrigues Alves",
                "cep" => [ 69985000, 69989999 ],
                "ibge" => 1200427
            ]),
            "1200435" => new Map([
                "name" => "Santa Rosa do Purus",
                "cep" => [ 69955000, 69959999 ],
                "ibge" => 1200435
            ]),
            "1200500" => new Map([
                "name" => "Sena Madureira",
                "cep" => [ 69940000, 69944999 ],
                "ibge" => 1200500
            ]),
            "1200450" => new Map([
                "name" => "Senador Guiomard",
                "cep" => [ 69925000, 69925999 ],
                "ibge" => 1200450
            ]),
            "1200609" => new Map([
                "name" => "Tarauacá",
                "cep" => [ 69970000, 69974999 ],
                "ibge" => 1200609
            ]),
            "1200708" => new Map([
                "name" => "Xapuri",
                "cep" => [ 69930000, 69930999 ],
                "ibge" => 1200708
            ])
        ]);

        return $map;
    }
}