<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class AM implements ICitiesInfo
{
    public static int $numberCities = 62;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(AM::$numberCities);
        $map->putAll([
            "1300029" => new Map([
                "name" => "Alvarães",
                "cep" => [69540000, 69549999 ],
                "ibge" => 1300029
            ]),
            "1300060" => new Map([
                "name" => "Amaturá",
                "cep" => [69620000, 69629999 ],
                "ibge" => 1300060
            ]),
            "1300086" => new Map([
                "name" => "Anamã",
                "cep" => [69445000, 69449999 ],
                "ibge" => 1300086
            ]),
            "1300102" => new Map([
                "name" => "Anori",
                "cep" => [69440000, 69444999 ],
                "ibge" => 1300102
            ]),
            "1300144" => new Map([
                "name" => "Apuí",
                "cep" => [69265000, 69279999 ],
                "ibge" => 1300144
            ]),
            "1300201" => new Map([
                "name" => "Atalaia do Norte",
                "cep" => [69650000, 69659999 ],
                "ibge" => 1300201
            ]),
            "1300300" => new Map([
                "name" => "Autazes",
                "cep" => [69240000, 69249999 ],
                "ibge" => 1300300
            ]),
            "1300409" => new Map([
                "name" => "Barcelos",
                "cep" => [69700000, 69729999 ],
                "ibge" => 1300409
            ]),
            "1300508" => new Map([
                "name" => "Barreirinha",
                "cep" => [69160000, 69179999 ],
                "ibge" => 1300508
            ]),
            "1300607" => new Map([
                "name" => "Benjamin Constant",
                "cep" => [69630000, 69639999 ],
                "ibge" => 1300607
            ]),
            "1300631" => new Map([
                "name" => "Beruri",
                "cep" => [69430000, 69434999 ],
                "ibge" => 1300631
            ]),
            "1300680" => new Map([
                "name" => "Boa Vista do Ramos",
                "cep" => [69195000, 69199999 ],
                "ibge" => 1300680
            ]),
            "1300706" => new Map([
                "name" => "Boca do Acre",
                "cep" => [69850000, 69859999 ],
                "ibge" => 1300706
            ]),
            "1300805" => new Map([
                "name" => "Borba",
                "cep" => [69200000, 69229999 ],
                "ibge" => 1300805
            ]),
            "1300839" => new Map([
                "name" => "Caapiranga",
                "cep" => [69425000, 69429999 ],
                "ibge" => 1300839
            ]),
            "1300904" => new Map([
                "name" => "Canutama",
                "cep" => [69820000, 69829999 ],
                "ibge" => 1300904
            ]),
            "1301001" => new Map([
                "name" => "Carauari",
                "cep" => [69500000, 69509999 ],
                "ibge" => 1301001
            ]),
            "1301100" => new Map([
                "name" => "Careiro",
                "cep" => [69250000, 69254999 ],
                "ibge" => 1301100
            ]),
            "1301159" => new Map([
                "name" => "Careiro da Várzea",
                "cep" => [69255000, 69259999 ],
                "ibge" => 1301159
            ]),
            "1301209" => new Map([
                "name" => "Coari",
                "cep" => [69460000, 69469999 ],
                "ibge" => 1301209
            ]),
            "1301308" => new Map([
                "name" => "Codajás",
                "cep" => [69450000, 69459999 ],
                "ibge" => 1301308
            ]),
            "1301407" => new Map([
                "name" => "Eirunepé",
                "cep" => [69880000, 69889999 ],
                "ibge" => 1301407
            ]),
            "1301506" => new Map([
                "name" => "Envira",
                "cep" => [69870000, 69879999 ],
                "ibge" => 1301506
            ]),
            "1301605" => new Map([
                "name" => "Fonte Boa",
                "cep" => [69670000, 69679999 ],
                "ibge" => 1301605
            ]),
            "1301654" => new Map([
                "name" => "Guajará",
                "cep" => [69895000, 69899999 ],
                "ibge" => 1301654
            ]),
            "1301704" => new Map([
                "name" => "Humaitá",
                "cep" => [69800000, 69819999 ],
                "ibge" => 1301704
            ]),
            "1301803" => new Map([
                "name" => "Ipixuna",
                "cep" => [69890000, 69894999 ],
                "ibge" => 1301803
            ]),
            "1301852" => new Map([
                "name" => "Iranduba",
                "cep" => [69415000, 69424999 ],
                "ibge" => 1301852
            ]),
            "1301902" => new Map([
                "name" => "Itacoatiara",
                "cep" => [69100001, 69113999 ],
                "ibge" => 1301902
            ]),
            "1301951" => new Map([
                "name" => "Itamarati",
                "cep" => [69510000, 69519999 ],
                "ibge" => 1301951
            ]),
            "1302009" => new Map([
                "name" => "Itapiranga",
                "cep" => [69120000, 69129999 ],
                "ibge" => 1302009
            ]),
            "1302108" => new Map([
                "name" => "Japurá",
                "cep" => [69495000, 69499999 ],
                "ibge" => 1302108
            ]),
            "1302207" => new Map([
                "name" => "Juruá",
                "cep" => [69520000, 69529999 ],
                "ibge" => 1302207
            ]),
            "1302306" => new Map([
                "name" => "Jutaí",
                "cep" => [69660000, 69669999 ],
                "ibge" => 1302306
            ]),
            "1302405" => new Map([
                "name" => "Lábrea",
                "cep" => [69830000, 69849999 ],
                "ibge" => 1302405
            ]),
            "1302504" => new Map([
                "name" => "Manacapuru",
                "cep" => [69400001, 69414999 ],
                "ibge" => 1302504
            ]),
            "1302553" => new Map([
                "name" => "Manaquiri",
                "cep" => [69435000, 69439999 ],
                "ibge" => 1302553
            ]),
            "1302603" => new Map([
                "name" => "Manaus",
                "cep" => [69000001, 69099999 ],
                "ibge" => 1302603
            ]),
            "1302702" => new Map([
                "name" => "Manicoré",
                "cep" => [69280000, 69299999 ],
                "ibge" => 1302702
            ]),
            "1302801" => new Map([
                "name" => "Maraã",
                "cep" => [69490000, 69494999 ],
                "ibge" => 1302801
            ]),
            "1302900" => new Map([
                "name" => "Maués",
                "cep" => [69190000, 69194999 ],
                "ibge" => 1302900
            ]),
            "1303007" => new Map([
                "name" => "Nhamundá",
                "cep" => [69140000, 69149999 ],
                "ibge" => 1303007
            ]),
            "1303106" => new Map([
                "name" => "Nova Olinda do Norte",
                "cep" => [69230000, 69239999 ],
                "ibge" => 1303106
            ]),
            "1303205" => new Map([
                "name" => "Novo Airão",
                "cep" => [69730000, 69734999 ],
                "ibge" => 1303205
            ]),
            "1303304" => new Map([
                "name" => "Novo Aripuanã",
                "cep" => [69260000, 69264999 ],
                "ibge" => 1303304
            ]),
            "1303403" => new Map([
                "name" => "Parintins",
                "cep" => [69150001, 69159999 ],
                "ibge" => 1303403
            ]),
            "1303502" => new Map([
                "name" => "Pauini",
                "cep" => [69860000, 69869999 ],
                "ibge" => 1303502
            ]),
            "1303536" => new Map([
                "name" => "Presidente Figueiredo",
                "cep" => [69735000, 69739999 ],
                "ibge" => 1303536
            ]),
            "1303569" => new Map([
                "name" => "Rio Preto da Eva",
                "cep" => [69117000, 69119999 ],
                "ibge" => 1303569
            ]),
            "1303601" => new Map([
                "name" => "Santa Isabel do Rio Negro",
                "cep" => [69740000, 69749999 ],
                "ibge" => 1303601
            ]),
            "1303700" => new Map([
                "name" => "Santo Antônio do Içá",
                "cep" => [69680000, 69684999 ],
                "ibge" => 1303700
            ]),
            "1303809" => new Map([
                "name" => "São Gabriel da Cachoeira",
                "cep" => [69750000, 69799999 ],
                "ibge" => 1303809
            ]),
            "1303908" => new Map([
                "name" => "São Paulo de Olivença",
                "cep" => [69600000, 69619999 ],
                "ibge" => 1303908
            ]),
            "1303957" => new Map([
                "name" => "São Sebastião do Uatumã",
                "cep" => [69135000, 69139999 ],
                "ibge" => 1303957
            ]),
            "1304005" => new Map([
                "name" => "Silves",
                "cep" => [69114000, 69116999 ],
                "ibge" => 1304005
            ]),
            "1304062" => new Map([
                "name" => "Tabatinga",
                "cep" => [69640000, 69649999 ],
                "ibge" => 1304062
            ]),
            "1304104" => new Map([
                "name" => "Tapauá",
                "cep" => [69480000, 69484999 ],
                "ibge" => 1304104
            ]),
            "1304203" => new Map([
                "name" => "Tefé",
                "cep" => [69550001, 69559999 ],
                "ibge" => 1304203
            ]),
            "1304237" => new Map([
                "name" => "Tonantins",
                "cep" => [69685000, 69699999 ],
                "ibge" => 1304237
            ]),
            "1304260" => new Map([
                "name" => "Uarini",
                "cep" => [69530000, 69539999 ],
                "ibge" => 1304260
            ]),
            "1304302" => new Map([
                "name" => "Urucará",
                "cep" => [69130000, 69134999 ],
                "ibge" => 1304302
            ]),
            "1304401" => new Map([
                "name" => "Urucurituba",
                "cep" => [69180000, 69189999 ],
                "ibge" => 1304401
            ])
        ]);

        return $map;
    }
}