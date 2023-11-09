<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class RR implements ICitiesInfo
{
    /** @return array<array<string | array<int | array<int>> | int>> */
    public static function citiesInfo(): array
    {
        return [
            [
                "name" => "Alto Alegre",
                "cep" => [ 69350000, 69354999 ],
                "ibge" => 1400050
            ],
            [
                "name" => "Amajari",
                "cep" => [ 69343000, 69344999 ],
                "ibge" => 1400027
            ],
            [
                "name" => "Boa Vista",
                "cep" => [ 69300001, 69339999 ],
                "ibge" => 1400100
            ],
            [
                "name" => "Bonfim",
                "cep" => [ 69380000, 69389999 ],
                "ibge" => 1400159
            ],
            [
                "name" => "Cantá",
                "cep" => [ 69390000, 69399999 ],
                "ibge" => 1400175
            ],
            [
                "name" => "Caracaraí",
                "cep" => [ 69360000, 69369999 ],
                "ibge" => 1400209
            ],
            [
                "name" => "Caroebe",
                "cep" => [ 69378000, 69379999 ],
                "ibge" => 1400233
            ],
            [
                "name" => "Iracema",
                "cep" => [ 69348000, 69349999 ],
                "ibge" => 1400282
            ],
            [
                "name" => "Mucajaí",
                "cep" => [ 69340000, 69342999 ],
                "ibge" => 1400308
            ],
            [
                "name" => "Normandia",
                "cep" => [ 69355000, 69357999 ],
                "ibge" => 1400407
            ],
            [
                "name" => "Pacaraima",
                "cep" => [ 69345000, 69347999 ],
                "ibge" => 1400456
            ],
            [
                "name" => "Rorainópolis",
                "cep" => [ 69373000, 69374999 ],
                "ibge" => 1400472
            ],
            [
                "name" => "São João da Baliza",
                "cep" => [ 69375000, 69377999 ],
                "ibge" => 1400506
            ],
            [
                "name" => "São Luiz",
                "cep" => [ 69370000, 69372999 ],
                "ibge" => 1400605
            ],
            [
                "name" => "Uiramutã",
                "cep" => [ 69358000, 69359999 ],
                "ibge" => 1400704
            ]
        ];
    }
}