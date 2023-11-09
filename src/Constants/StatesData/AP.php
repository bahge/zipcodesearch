<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class AP implements ICitiesInfo
{
    /** @return array<array<string | array<int | array<int>> | int>> */
    public static function citiesInfo() : array
    {
        return [
            [
                "name" => "Amapá",
                "cep" => [ 68950000, 68959999 ],
                "ibge" => 1600105
            ],
            [
                "name" => "Calçoene",
                "cep" => [ 68960000, 68972999 ],
                "ibge" => 1600204
            ],
            [
                "name" => "Cutias",
                "cep" => [ 68973000, 68975999 ],
                "ibge" => 1600212
            ],
            [
                "name" => "Ferreira Gomes",
                "cep" => [ 68915000, 68917999 ],
                "ibge" => 1600238
            ],
            [
                "name" => "Itaubal",
                "cep" => [ 68976000, 68979999 ],
                "ibge" => 1600253
            ],
            [
                "name" => "Laranjal do Jari",
                "cep" => [ 68920000, 68923999 ],
                "ibge" => 1600279
            ],
            [
                "name" => "Macapá",
                "cep" => [ 68900001, 68914999 ],
                "ibge" => 1600303
            ],
            [
                "name" => "Mazagão",
                "cep" => [ 68940000, 68944999 ],
                "ibge" => 1600402
            ],
            [
                "name" => "Oiapoque",
                "cep" => [ 68980000, 68989999 ],
                "ibge" => 1600501
            ],
            [
                "name" => "Pedra Branca do Amaparí",
                "cep" => [ 68945000, 68947999 ],
                "ibge" => 1600154
            ],
            [
                "name" => "Porto Grande",
                "cep" => [ 68997000, 68999999 ],
                "ibge" => 1600535
            ],
            [
                "name" => "Pracuúba",
                "cep" => [ 68918000, 68919999 ],
                "ibge" => 1600550
            ],
            [
                "name" => "Santana",
                "cep" => [ 68925001, 68939999 ],
                "ibge" => 1600600
            ],
            [
                "name" => "Serra do Navio",
                "cep" => [ 68948000, 68949999 ],
                "ibge" => 1600055
            ],
            [
                "name" => "Tartarugalzinho",
                "cep" => [ 68990000, 68996999 ],
                "ibge" => 1600709
            ],
            [
                "name" => "Vitória do Jari",
                "cep" => [ 68924000, 68924999 ],
                "ibge" => 1600808
            ]
        ];
    }
}