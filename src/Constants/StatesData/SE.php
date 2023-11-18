<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class SE implements ICitiesInfo
{
    public static int $numberCities = 75;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(SE::$numberCities);
        $map->putAll([
            "2800100" => new Map([
                "name" => "Amparo de São Francisco",
                "zipCode" => [ 49920000, 49929999 ],
                "ibge" => 2800100
            ]),
            "2800209" => new Map([
                "name" => "Aquidabã",
                "zipCode" => [ 49790000, 49799999 ],
                "ibge" => 2800209
            ]),
            "2800308" => new Map([
                "name" => "Aracaju",
                "zipCode" => [ 49000001, 49099999 ],
                "ibge" => 2800308
            ]),
            "2800407" => new Map([
                "name" => "Arauá",
                "zipCode" => [ 49220000, 49229999 ],
                "ibge" => 2800407
            ]),
            "2800506" => new Map([
                "name" => "Areia Branca",
                "zipCode" => [ 49580000, 49599999 ],
                "ibge" => 2800506
            ]),
            "2800605" => new Map([
                "name" => "Barra dos Coqueiros",
                "zipCode" => [ 49140000, 49149999 ],
                "ibge" => 2800605
            ]),
            "2800670" => new Map([
                "name" => "Boquim",
                "zipCode" => [ 49360000, 49389999 ],
                "ibge" => 2800670
            ]),
            "2800704" => new Map([
                "name" => "Brejo Grande",
                "zipCode" => [ 49995000, 49999999 ],
                "ibge" => 2800704
            ]),
            "2801009" => new Map([
                "name" => "Campo do Brito",
                "zipCode" => [ 49520000, 49524999 ],
                "ibge" => 2801009
            ]),
            "2801108" => new Map([
                "name" => "Canhoba",
                "zipCode" => [ 49880000, 49889999 ],
                "ibge" => 2801108
            ]),
            "2801207" => new Map([
                "name" => "Canindé de São Francisco",
                "zipCode" => [ 49820000, 49829999 ],
                "ibge" => 2801207
            ]),
            "2801306" => new Map([
                "name" => "Capela",
                "zipCode" => [ 49700000, 49739999 ],
                "ibge" => 2801306
            ]),
            "2801405" => new Map([
                "name" => "Carira",
                "zipCode" => [ 49550000, 49559999 ],
                "ibge" => 2801405
            ]),
            "2801504" => new Map([
                "name" => "Carmópolis",
                "zipCode" => [ 49740000, 49749999 ],
                "ibge" => 2801504
            ]),
            "2801603" => new Map([
                "name" => "Cedro de São João",
                "zipCode" => [ 49930000, 49939999 ],
                "ibge" => 2801603
            ]),
            "2801702" => new Map([
                "name" => "Cristinápolis",
                "zipCode" => [ 49270000, 49279999 ],
                "ibge" => 2801702
            ]),
            "2801900" => new Map([
                "name" => "Cumbe",
                "zipCode" => [ 49660000, 49669999 ],
                "ibge" => 2801900
            ]),
            "2802007" => new Map([
                "name" => "Divina Pastora",
                "zipCode" => [ 49650000, 49659999 ],
                "ibge" => 2802007
            ]),
            "2802106" => new Map([
                "name" => "Estância",
                "zipCode" => [ 49200000, 49219999 ],
                "ibge" => 2802106
            ]),
            "2802205" => new Map([
                "name" => "Feira Nova",
                "zipCode" => [ 49670000, 49679999 ],
                "ibge" => 2802205
            ]),
            "2802304" => new Map([
                "name" => "Frei Paulo",
                "zipCode" => [ 49514000, 49516999 ],
                "ibge" => 2802304
            ]),
            "2802403" => new Map([
                "name" => "Gararu",
                "zipCode" => [ 49830000, 49859999 ],
                "ibge" => 2802403
            ]),
            "2802502" => new Map([
                "name" => "General Maynard",
                "zipCode" => [ 49750000, 49759999 ],
                "ibge" => 2802502
            ]),
            "2802601" => new Map([
                "name" => "Graccho Cardoso",
                "zipCode" => [ 49860000, 49869999 ],
                "ibge" => 2802601
            ]),
            "2802700" => new Map([
                "name" => "Ilha das Flores",
                "zipCode" => [ 49990000, 49994999 ],
                "ibge" => 2802700
            ]),
            "2802809" => new Map([
                "name" => "Indiaroba",
                "zipCode" => [ 49250000, 49259999 ],
                "ibge" => 2802809
            ]),
            "2802908" => new Map([
                "name" => "Itabaiana",
                "zipCode" => [ 49500001, 49511999 ],
                "ibge" => 2802908
            ]),
            "2803005" => new Map([
                "name" => "Itabaianinha",
                "zipCode" => [ 49290000, 49299999 ],
                "ibge" => 2803005
            ]),
            "2803104" => new Map([
                "name" => "Itabi",
                "zipCode" => [ 49870000, 49879999 ],
                "ibge" => 2803104
            ]),
            "2803203" => new Map([
                "name" => "Itaporanga D'Ajuda",
                "zipCode" => [ 49120000, 49129999 ],
                "ibge" => 2803203
            ]),
            "2803302" => new Map([
                "name" => "Japaratuba",
                "zipCode" => [ 49960000, 49969999 ],
                "ibge" => 2803302
            ]),
            "2803401" => new Map([
                "name" => "Japoatã",
                "zipCode" => [ 49950000, 49959999 ],
                "ibge" => 2803401
            ]),
            "2803500" => new Map([
                "name" => "Lagarto",
                "zipCode" => [ 49400000, 49479999 ],
                "ibge" => 2803500
            ]),
            "2803609" => new Map([
                "name" => "Laranjeiras",
                "zipCode" => [ 49170000, 49179999 ],
                "ibge" => 2803609
            ]),
            "2803708" => new Map([
                "name" => "Macambira",
                "zipCode" => [ 49565000, 49569999 ],
                "ibge" => 2803708
            ]),
            "2803807" => new Map([
                "name" => "Malhada dos Bois",
                "zipCode" => [ 49940000, 49944999 ],
                "ibge" => 2803807
            ]),
            "2803906" => new Map([
                "name" => "Malhador",
                "zipCode" => [ 49570000, 49579999 ],
                "ibge" => 2803906
            ]),
            "2804003" => new Map([
                "name" => "Maruim",
                "zipCode" => [ 49770000, 49779999 ],
                "ibge" => 2804003
            ]),
            "2804102" => new Map([
                "name" => "Moita Bonita",
                "zipCode" => [ 49560000, 49564999 ],
                "ibge" => 2804102
            ]),
            "2804201" => new Map([
                "name" => "Monte Alegre de Sergipe",
                "zipCode" => [ 49690000, 49699999 ],
                "ibge" => 2804201
            ]),
            "2804300" => new Map([
                "name" => "Muribeca",
                "zipCode" => [ 49780000, 49789999 ],
                "ibge" => 2804300
            ]),
            "2804409" => new Map([
                "name" => "Neópolis",
                "zipCode" => [ 49980000, 49984999 ],
                "ibge" => 2804409
            ]),
            "2804458" => new Map([
                "name" => "Nossa Senhora Aparecida",
                "zipCode" => [ 49540000, 49549999 ],
                "ibge" => 2804458
            ]),
            "2804508" => new Map([
                "name" => "Nossa Senhora da Glória",
                "zipCode" => [ 49680000, 49689999 ],
                "ibge" => 2804508
            ]),
            "2804607" => new Map([
                "name" => "Nossa Senhora das Dores",
                "zipCode" => [ 49600000, 49629999 ],
                "ibge" => 2804607
            ]),
            "2804706" => new Map([
                "name" => "Nossa Senhora de Lourdes",
                "zipCode" => [ 49890000, 49899999 ],
                "ibge" => 2804706
            ]),
            "2804805" => new Map([
                "name" => "Nossa Senhora do Socorro",
                "zipCode" => [ 49150000, 49169999 ],
                "ibge" => 2804805
            ]),
            "2804904" => new Map([
                "name" => "Pacatuba",
                "zipCode" => [ 49970000, 49979999 ],
                "ibge" => 2804904
            ]),
            "2805000" => new Map([
                "name" => "Pedra Mole",
                "zipCode" => [ 49512000, 49513999 ],
                "ibge" => 2805000
            ]),
            "2805109" => new Map([
                "name" => "Pedrinhas",
                "zipCode" => [ 49350000, 49359999 ],
                "ibge" => 2805109
            ]),
            "2805208" => new Map([
                "name" => "Pinhão",
                "zipCode" => [ 49517000, 49519999 ],
                "ibge" => 2805208
            ]),
            "2805307" => new Map([
                "name" => "Pirambu",
                "zipCode" => [ 49190000, 49199999 ],
                "ibge" => 2805307
            ]),
            "2805406" => new Map([
                "name" => "Poço Redondo",
                "zipCode" => [ 49810000, 49819999 ],
                "ibge" => 2805406
            ]),
            "2805505" => new Map([
                "name" => "Poço Verde",
                "zipCode" => [ 49490000, 49499999 ],
                "ibge" => 2805505
            ]),
            "2805604" => new Map([
                "name" => "Porto da Folha",
                "zipCode" => [ 49800000, 49809999 ],
                "ibge" => 2805604
            ]),
            "2805703" => new Map([
                "name" => "Propriá",
                "zipCode" => [ 49900000, 49909999 ],
                "ibge" => 2805703
            ]),
            "2805802" => new Map([
                "name" => "Riachão do Dantas",
                "zipCode" => [ 49320000, 49349999 ],
                "ibge" => 2805802
            ]),
            "2805901" => new Map([
                "name" => "Riachuelo",
                "zipCode" => [ 49130000, 49139999 ],
                "ibge" => 2805901
            ]),
            "2806008" => new Map([
                "name" => "Ribeirópolis",
                "zipCode" => [ 49530000, 49534999 ],
                "ibge" => 2806008
            ]),
            "2806107" => new Map([
                "name" => "Rosário do Catete",
                "zipCode" => [ 49760000, 49769999 ],
                "ibge" => 2806107
            ]),
            "2806206" => new Map([
                "name" => "Salgado",
                "zipCode" => [ 49390000, 49399999 ],
                "ibge" => 2806206
            ]),
            "2806305" => new Map([
                "name" => "Santa Luzia do Itanhy",
                "zipCode" => [ 49230000, 49249999 ],
                "ibge" => 2806305
            ]),
            "2806503" => new Map([
                "name" => "Santa Rosa de Lima",
                "zipCode" => [ 49640000, 49649999 ],
                "ibge" => 2806503
            ]),
            "2806404" => new Map([
                "name" => "Santana do São Francisco",
                "zipCode" => [ 49985000, 49989999 ],
                "ibge" => 2806404
            ]),
            "2806602" => new Map([
                "name" => "Santo Amaro das Brotas",
                "zipCode" => [ 49180000, 49189999 ],
                "ibge" => 2806602
            ]),
            "2806701" => new Map([
                "name" => "São Cristóvão",
                "zipCode" => [ 49100000, 49119999 ],
                "ibge" => 2806701
            ]),
            "2806800" => new Map([
                "name" => "São Domingos",
                "zipCode" => [ 49525000, 49529999 ],
                "ibge" => 2806800
            ]),
            "2806909" => new Map([
                "name" => "São Francisco",
                "zipCode" => [ 49945000, 49949999 ],
                "ibge" => 2806909
            ]),
            "2807006" => new Map([
                "name" => "São Miguel do Aleixo",
                "zipCode" => [ 49535000, 49539999 ],
                "ibge" => 2807006
            ]),
            "2807105" => new Map([
                "name" => "Simão Dias",
                "zipCode" => [ 49480000, 49489999 ],
                "ibge" => 2807105
            ]),
            "2807204" => new Map([
                "name" => "Siriri",
                "zipCode" => [ 49630000, 49639999 ],
                "ibge" => 2807204
            ]),
            "2807303" => new Map([
                "name" => "Telha",
                "zipCode" => [ 49910000, 49919999 ],
                "ibge" => 2807303
            ]),
            "2807402" => new Map([
                "name" => "Tobias Barreto",
                "zipCode" => [ 49300000, 49319999 ],
                "ibge" => 2807402
            ]),
            "2807501" => new Map([
                "name" => "Tomar do Geru",
                "zipCode" => [ 49280000, 49289999 ],
                "ibge" => 2807501
            ]),
            "2807600" => new Map([
                "name" => "Umbaúba",
                "zipCode" => [ 49260000, 49269999 ],
                "ibge" => 2807600
            ])
        ]);

        return $map;
    }
}