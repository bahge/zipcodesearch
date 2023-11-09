<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class AC implements ICitiesInfo
{
    /** @return array<array<string | array<int | array<int>> | int>> */
    public static function citiesInfo(): array
    {
        return [
            [
                "name" => "Acrelândia",
                "cep" => [ 69945000, 69949999 ],
                "ibge" => 1200013
            ],
            [
                "name" => "Assis Brasil",
                "cep" => [ 69935000, 69939999 ],
                "ibge" => 1200054
            ],
            [
                "name" => "Brasiléia",
                "cep" => [ 69932000, 69933999 ],
                "ibge" => 1200104
            ],
            [
                "name" => "Bujari",
                "cep" => [ 69926000, 69926999 ],
                "ibge" => 1200138
            ],
            [
                "name" => "Capixaba",
                "cep" => [ 69931000, 69931999 ],
                "ibge" => 1200179
            ],
            [
                "name" => "Cruzeiro do Sul",
                "cep" => [ 69980000, 69981999 ],
                "ibge" => 1200203
            ],
            [
                "name" => "Epitaciolândia",
                "cep" => [ 69934000, 69934999 ],
                "ibge" => 1200252
            ],
            [
                "name" => "Feijó",
                "cep" => [ 69960000, 69969999 ],
                "ibge" => 1200302
            ],
            [
                "name" => "Jordão",
                "cep" => [ 69975000, 69979999 ],
                "ibge" => 1200328
            ],
            [
                "name" => "Mâncio Lima",
                "cep" => [ 69990000, 69999999 ],
                "ibge" => 1200336
            ],
            [
                "name" => "Manoel Urbano",
                "cep" => [ 69950000, 69954999 ],
                "ibge" => 1200344
            ],
            [
                "name" => "Marechal Thaumaturgo",
                "cep" => [ 69983000, 69984999 ],
                "ibge" => 1200351
            ],
            [
                "name" => "Plácido de Castro",
                "cep" => [ 69928000, 69929999 ],
                "ibge" => 1200385
            ],
            [
                "name" => "Porto Acre",
                "cep" => [ 69927000, 69927999 ],
                "ibge" => 1200807
            ],
            [
                "name" => "Porto Walter",
                "cep" => [ 69982000, 69982999 ],
                "ibge" => 1200393
            ],
            [
                "name" => "Rio Branco",
                "cep" => [ 69900001, 69924999 ],
                "ibge" => 1200401
            ],
            [
                "name" => "Rodrigues Alves",
                "cep" => [ 69985000, 69989999 ],
                "ibge" => 1200427
            ],
            [
                "name" => "Santa Rosa do Purus",
                "cep" => [ 69955000, 69959999 ],
                "ibge" => 1200435
            ],
            [
                "name" => "Sena Madureira",
                "cep" => [ 69940000, 69944999 ],
                "ibge" => 1200500
            ],
            [
                "name" => "Senador Guiomard",
                "cep" => [ 69925000, 69925999 ],
                "ibge" => 1200450
            ],
            [
                "name" => "Tarauacá",
                "cep" => [ 69970000, 69974999 ],
                "ibge" => 1200609
            ],
            [
                "name" => "Xapuri",
                "cep" => [ 69930000, 69930999 ],
                "ibge" => 1200708
            ]
        ];
    }
}