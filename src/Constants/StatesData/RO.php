<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class RO implements ICitiesInfo
{
    public static int $numberCities = 52;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(RO::$numberCities);
        $map->putAll([
            "1100015" => new Map([
                "name" => "Alta Floresta D'Oeste",
                "cep" => [ 76954000, 76955999 ],
                "ibge" => 1100015
            ]),
            "1100379" => new Map([
                "name" => "Alto Alegre dos Parecis",
                "cep" => [ 76952000, 76953999 ],
                "ibge" => 1100379
            ]),
            "1100403" => new Map([
                "name" => "Alto Paraíso",
                "cep" => [ 76862000, 76862999 ],
                "ibge" => 1100403
            ]),
            "1100346" => new Map([
                "name" => "Alvorada D'Oeste",
                "cep" => [ 76930000, 76931999 ],
                "ibge" => 1100346
            ]),
            "1100023" => new Map([
                "name" => "Ariquemes",
                "cep" => [ 76870001, 76879999 ],
                "ibge" => 1100023
            ]),
            "1100452" => new Map([
                "name" => "Buritis",
                "cep" => [ 76880000, 76886999 ],
                "ibge" => 1100452
            ]),
            "1100031" => new Map([
                "name" => "Cabixi",
                "cep" => [ 76994000, 76994999 ],
                "ibge" => 1100031
            ]),
            "1100601" => new Map([
                "name" => "Cacaulândia",
                "cep" => [ 76889000, 76889999 ],
                "ibge" => 1100601
            ]),
            "1100049" => new Map([
                "name" => "Cacoal",
                "cep" => [ 76960001, 76969999 ],
                "ibge" => 1100049
            ]),
            "1100700" => new Map([
                "name" => "Campo Novo de Rondônia",
                "cep" => [ 76887000, 76887999 ],
                "ibge" => 1100700
            ]),
            "1100809" => new Map([
                "name" => "Candeias do Jamari",
                "cep" => [ 76860000, 76860999 ],
                "ibge" => 1100809
            ]),
            "1100908" => new Map([
                "name" => "Castanheiras",
                "cep" => [ 76948000, 76949999 ],
                "ibge" => 1100908
            ]),
            "1100056" => new Map([
                "name" => "Cerejeiras",
                "cep" => [ 76997000, 76998999 ],
                "ibge" => 1100056
            ]),
            "1100924" => new Map([
                "name" => "Chupinguaia",
                "cep" => [ 76990000, 76992999 ],
                "ibge" => 1100924
            ]),
            "1100064" => new Map([
                "name" => "Colorado do Oeste",
                "cep" => [ 76993000, 76993999 ],
                "ibge" => 1100064
            ]),
            "1100072" => new Map([
                "name" => "Corumbiara",
                "cep" => [ 76995000, 76996999 ],
                "ibge" => 1100072
            ]),
            "1100080" => new Map([
                "name" => "Costa Marques",
                "cep" => [ 76937000, 76939999 ],
                "ibge" => 1100080
            ]),
            "1100940" => new Map([
                "name" => "Cujubim",
                "cep" => [ 76864000, 76865999 ],
                "ibge" => 1100940
            ]),
            "1100098" => new Map([
                "name" => "Espigão D'Oeste",
                "cep" => [ 76974000, 76975999 ],
                "ibge" => 1100098
            ]),
            "1101005" => new Map([
                "name" => "Governador Jorge Teixeira",
                "cep" => [ 76898000, 76899999 ],
                "ibge" => 1101005
            ]),
            "1100106" => new Map([
                "name" => "Guajará-Mirim",
                "cep" => [ 76850000, 76856999 ],
                "ibge" => 1100106
            ]),
            "1101104" => new Map([
                "name" => "Itapuã do Oeste",
                "cep" => [ 76861000, 76861999 ],
                "ibge" => 1101104
            ]),
            "1100114" => new Map([
                "name" => "Jaru",
                "cep" => [ 76890000, 76897999 ],
                "ibge" => 1100114
            ]),
            "1100122" => new Map([
                "name" => "Ji-Paraná",
                "cep" => [ 76900001, 76915999 ],
                "ibge" => 1100122
            ]),
            "1100130" => new Map([
                "name" => "Machadinho D'Oeste",
                "cep" => [ 76868000, 76869999 ],
                "ibge" => 1100130
            ]),
            "1101203" => new Map([
                "name" => "Ministro Andreazza",
                "cep" => [ 76919000, 76919999 ],
                "ibge" => 1101203
            ]),
            "1101302" => new Map([
                "name" => "Mirante da Serra",
                "cep" => [ 76926000, 76927999 ],
                "ibge" => 1101302
            ]),
            "1101401" => new Map([
                "name" => "Monte Negro",
                "cep" => [ 76888000, 76888999 ],
                "ibge" => 1101401
            ]),
            "1100148" => new Map([
                "name" => "Nova Brasilândia D'Oeste",
                "cep" => [ 76958000, 76959999 ],
                "ibge" => 1100148
            ]),
            "1100338" => new Map([
                "name" => "Nova Mamoré",
                "cep" => [ 76857000, 76859999 ],
                "ibge" => 1100338
            ]),
            "1101435" => new Map([
                "name" => "Nova União",
                "cep" => [ 76924000, 76925999 ],
                "ibge" => 1101435
            ]),
            "1100502" => new Map([
                "name" => "Novo Horizonte do Oeste",
                "cep" => [ 76956000, 76957999 ],
                "ibge" => 1100502
            ]),
            "1100155" => new Map([
                "name" => "Ouro Preto do Oeste",
                "cep" => [ 76920000, 76922999 ],
                "ibge" => 1100155
            ]),
            "1101450" => new Map([
                "name" => "Parecis",
                "cep" => [ 76979000, 76979999 ],
                "ibge" => 1101450
            ]),
            "1100189" => new Map([
                "name" => "Pimenta Bueno",
                "cep" => [ 76970000, 76973999 ],
                "ibge" => 1100189
            ]),
            "1101468" => new Map([
                "name" => "Pimenteiras do Oeste",
                "cep" => [ 76999000, 76999999 ],
                "ibge" => 1101468
            ]),
            "1100205" => new Map([
                "name" => "Porto Velho",
                "cep" => [ 76800001, 76849999 ],
                "ibge" => 1100205
            ]),
            "1100254" => new Map([
                "name" => "Presidente Médici",
                "cep" => [ 76916000, 76918999 ],
                "ibge" => 1100254
            ]),
            "1101476" => new Map([
                "name" => "Primavera de Rondônia",
                "cep" => [ 76976000, 76976999 ],
                "ibge" => 1101476
            ]),
            "1100262" => new Map([
                "name" => "Rio Crespo",
                "cep" => [ 76863000, 76863999 ],
                "ibge" => 1100262
            ]),
            "1100288" => new Map([
                "name" => "Rolim de Moura",
                "cep" => [ 76940000, 76947999 ],
                "ibge" => 1100288
            ]),
            "1100296" => new Map([
                "name" => "Santa Luzia D'Oeste",
                "cep" => [ 76950000, 76951999 ],
                "ibge" => 1100296
            ]),
            "1101484" => new Map([
                "name" => "São Felipe D'Oeste",
                "cep" => [ 76977000, 76978999 ],
                "ibge" => 1101484
            ]),
            "1101492" => new Map([
                "name" => "São Francisco do Guaporé",
                "cep" => [ 76935000, 76936999 ],
                "ibge" => 1101492
            ]),
            "1100320" => new Map([
                "name" => "São Miguel do Guaporé",
                "cep" => [ 76932000, 76933999 ],
                "ibge" => 1100320
            ]),
            "1101500" => new Map([
                "name" => "Seringueiras",
                "cep" => [ 76934000, 76934999 ],
                "ibge" => 1101500
            ]),
            "1101559" => new Map([
                "name" => "Teixeirópolis",
                "cep" => [ 76928000, 76928999 ],
                "ibge" => 1101559
            ]),
            "1101609" => new Map([
                "name" => "Theobroma",
                "cep" => [ 76866000, 76866999 ],
                "ibge" => 1101609
            ]),
            "1101708" => new Map([
                "name" => "Urupá",
                "cep" => [ 76929000, 76929999 ],
                "ibge" => 1101708
            ]),
            "1101757" => new Map([
                "name" => "Vale do Anari",
                "cep" => [ 76867000, 76867999 ],
                "ibge" => 1101757
            ]),
            "1101807" => new Map([
                "name" => "Vale do Paraíso",
                "cep" => [ 76923000, 76923999 ],
                "ibge" => 1101807
            ]),
            "1100304" => new Map([
                "name" => "Vilhena",
                "cep" => [ 76980001, 76989999 ],
                "ibge" => 1100304
            ])
        ]);

        return $map;
    }
}