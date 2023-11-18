<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;

final class States
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
                "zipCodeRanges" => [ [ 76800000, 76999999 ] ]
            ]),
            "AC" => new Map([
                "numberOfCities" => 22,
                "zipCodeRanges" => [ [ 69900000, 69999999 ] ]
            ]),
            "AM" => new Map([
                "numberOfCities" => 62,
                "zipCodeRanges" => [ [ 69000000, 69299999 ], [ 69400000, 69899999 ] ]
            ]),
            "RR" => new Map([
                "numberOfCities" => 15,
                "zipCodeRanges" => [ [ 69300000, 69399999 ] ]
            ]),
            "PA" => new Map([
                "numberOfCities" => 144,
                "zipCodeRanges" => [ [ 66000000, 68899999 ] ]
            ]),
            "AP" => new Map([
                "numberOfCities" => 16,
                "zipCodeRanges" => [ [ 68900000, 68999999 ] ]
            ]),
            "TO" => new Map([
                "numberOfCities" => 139,
                "zipCodeRanges" => [ [ 77000000, 77999999 ] ]
            ]),
            "MA" => new Map([
                "numberOfCities" => 217,
                "zipCodeRanges" => [ [ 65000000, 65999999 ] ]
            ]),
            "PI" => new Map([
                "numberOfCities" => 224,
                "zipCodeRanges" => [ [ 64000000, 64999999 ] ]
            ]),
            "CE" => new Map([
                "numberOfCities" => 184,
                "zipCodeRanges" => [ [ 60000000, 63999999 ] ]
            ]),
            "RN" => new Map([
                "numberOfCities" => 167,
                "zipCodeRanges" => [ [ 59000000, 59999999 ] ]
            ]),
            "PB" => new Map([
                "numberOfCities" => 223,
                "zipCodeRanges" => [ [ 58000000, 58999999 ] ]
            ]),
            "PE" => new Map([
                "numberOfCities" => 185,
                "zipCodeRanges" => [ [ 50000000, 56999999 ] ]
            ]),
            "AL" => new Map([ 
                "numberOfCities" => 102,
                "zipCodeRanges" => [ [ 57000000, 57999999 ] ]
            ]),
            "SE" => new Map([
                "numberOfCities" => 75,
                "zipCodeRanges" => [ [ 49000000, 49999999 ] ]
            ]),
            "BA" => new Map([
                "numberOfCities" => 417,
                "zipCodeRanges" => [ [ 40000000, 48999999 ] ]
            ]),
            "MG" => new Map([ 
                "numberOfCities" => 853,
                "zipCodeRanges" => [ [ 30000000, 39999999 ] ]
            ]),
            "ES" => new Map([
                "numberOfCities" => 78,
                "zipCodeRanges" => [ [ 29000000, 29999999 ] ]
            ]),
            "RJ" => new Map([
                "numberOfCities" => 92,
                "zipCodeRanges" => [ [ 20000000, 28999999 ] ]
            ]),
            "SP" => new Map([
                "numberOfCities" => 645,
                "zipCodeRanges" => [ [ 1000000, 19999999 ] ]
            ]),
            "PR" => new Map([
                "numberOfCities" => 399,
                "zipCodeRanges" => [ [ 80000000, 87999999 ] ]
            ]),
            "SC" => new Map([
                "numberOfCities" => 295,
                "zipCodeRanges" => [ [ 88000000, 89999999 ] ]
            ]),
            "RS" => new Map([
                "numberOfCities" => 497,
                "zipCodeRanges" => [ [ 90000000, 99999999 ] ]
            ]),
            "MS" => new Map([
                "numberOfCities" => 79,
                "zipCodeRanges" => [ [ 79000000, 79999999 ] ]
            ]),
            "MT" => new Map([
                "numberOfCities" => 141,
                "zipCodeRanges" => [ [ 78000000, 78899999 ] ]
            ]),
            "GO" => new Map([
                "numberOfCities" => 246,
                "zipCodeRanges" => [ [ 72800000, 72999999 ], [ 73700000, 76799999 ] ]
            ]),
            "DF" => new Map([
                "numberOfCities" => 1,
                "zipCodeRanges" => [ [ 70000000, 72799999 ], [ 73000000, 73699999 ] ]
            ])
        ]);

        return $states;
    }
}