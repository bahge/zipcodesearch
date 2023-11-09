<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class DF implements ICitiesInfo
{
    /** @return array<array<string | array<int | array<int>> | int>> */
    public static function citiesInfo(): array
    {
        return [
            [
                "name" => "Brasília",
                "cep" => [ [ 70000001, 72799999 ], [ 73000001, 73699999 ] ],
                "ibge" => 5300108
            ]
        ];
    }
}