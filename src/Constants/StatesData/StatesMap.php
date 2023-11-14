<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;

final class StatesMap
{
    public static function statesRanges(): Map
    {
        $states = new Map();
        $states->allocate(3);

        $states->putAll([
            "InferiorLimit" => 1000000,
            "SuperiorLimit" => 99999999,
            "numberOfCities" => 5570
        ]);

        return $states;
    }
    public static function statesInfo(): Map
    {
        $states = new Map();
        $states->allocate(27);
        
        $states->putAll([
            "RO" => new Map([
                "numberOfCities" => 52,
                "cepRanges" => [ [ 76800000, 76999999 ] ]
            ]),
            "AC" => new Map([
                "numberOfCities" => 22,
                "cepRanges" => [ [ 69900000, 69999999 ] ]
            ]),
            "AM" => new Map([
                "numberOfCities" => 62,
                "cepRanges" => [ [ 69000000, 69299999 ], [ 69400000, 69899999 ] ]
            ]),
            "RR" => new Map([
                "numberOfCities" => 15,
                "cepRanges" => [ [ 69300000, 69399999 ] ]
            ]),
            "PA" => new Map([
                "numberOfCities" => 144,
                "cepRanges" => [ [ 66000000, 68899999 ] ]
            ]),
            "AP" => new Map([
                "numberOfCities" => 16,
                "cepRanges" => [ [ 68900000, 68999999 ] ]
            ]),
            "TO" => new Map([
                "numberOfCities" => 139,
                "cepRanges" => [ [ 77000000, 77999999 ] ]
            ]),
            "MA" => new Map([
                "numberOfCities" => 217,
                "cepRanges" => [ [ 65000000, 65999999 ] ]
            ]),
            "PI" => new Map([
                "numberOfCities" => 224,
                "cepRanges" => [ [ 64000000, 64999999 ] ]
            ]),
            "CE" => new Map([
                "numberOfCities" => 184,
                "cepRanges" => [ [ 60000000, 63999999 ] ]
            ]),
            "RN" => new Map([
                "numberOfCities" => 167,
                "cepRanges" => [ [ 59000000, 59999999 ] ]
            ]),
            "PB" => new Map([
                "numberOfCities" => 223,
                "cepRanges" => [ [ 58000000, 58999999 ] ]
            ]),
            "PE" => new Map([
                "numberOfCities" => 185,
                "cepRanges" => [ [ 50000000, 56999999 ] ]
            ]),
            "AL" => new Map([ 
                "numberOfCities" => 102,
                "cepRanges" => [ [ 57000000, 57999999 ] ]
            ]),
            "SE" => new Map([
                "numberOfCities" => 75,
                "cepRanges" => [ [ 49000000, 49999999 ] ]
            ]),
            "BA" => new Map([
                "numberOfCities" => 417,
                "cepRanges" => [ [ 40000000, 48999999 ] ]
            ]),
            "MG" => new Map([ 
                "numberOfCities" => 853,
                "cepRanges" => [ [ 30000000, 39999999 ] ]
            ]),
            "ES" => new Map([
                "numberOfCities" => 78,
                "cepRanges" => [ [ 29000000, 29999999 ] ]
            ]),
            "RJ" => new Map([
                "numberOfCities" => 92,
                "cepRanges" => [ [ 20000000, 28999999 ] ]
            ]),
            "SP" => new Map([
                "numberOfCities" => 645,
                "cepRanges" => [ [ 1000000, 19999999 ] ]
            ]),
            "PR" => new Map([
                "numberOfCities" => 399,
                "cepRanges" => [ [ 80000000, 87999999 ] ]
            ]),
            "SC" => new Map([
                "numberOfCities" => 295,
                "cepRanges" => [ [ 88000000, 89999999 ] ]
            ]),
            "RS" => new Map([
                "numberOfCities" => 497,
                "cepRanges" => [ [ 90000000, 99999999 ] ]
            ]),
            "MS" => new Map([
                "numberOfCities" => 79,
                "cepRanges" => [ [ 79000000, 79999999 ] ]
            ]),
            "MT" => new Map([
                "numberOfCities" => 141,
                "cepRanges" => [ [ 78000000, 78899999 ] ]
            ]),
            "GO" => new Map([
                "numberOfCities" => 246,
                "cepRanges" => [ [ 72800000, 72999999 ], [ 73700000, 76799999 ] ]
            ]),
            "DF" => new Map([
                "numberOfCities" => 1,
                "cepRanges" => [ [ 70000000, 72799999 ], [ 73000000, 73699999 ] ]
            ])
        ]);

        return $states;
    }
}