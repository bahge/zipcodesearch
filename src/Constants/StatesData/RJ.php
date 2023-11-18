<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class RJ implements ICitiesInfo
{
    public static int $numberCities = 92;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(RJ::$numberCities);
        $map->putAll([
            "3300100" => new Map([
                "name" => "Angra dos Reis",
                "zipCode" => [ 23900001, 23969999 ],
                "ibge" => 3300100
            ]),
            "3300159" => new Map([
                "name" => "Aperibé",
                "zipCode" => [ 28495000, 28499999 ],
                "ibge" => 3300159
            ]),
            "3300209" => new Map([
                "name" => "Araruama",
                "zipCode" => [ 28970001, 28989999 ],
                "ibge" => 3300209
            ]),
            "3300225" => new Map([
                "name" => "Areal",
                "zipCode" => [ 25845000, 25849999 ],
                "ibge" => 3300225
            ]),
            "3300233" => new Map([
                "name" => "Armação dos Búzios",
                "zipCode" => [ 28950001, 28959999 ],
                "ibge" => 3300233
            ]),
            "3300258" => new Map([
                "name" => "Arraial do Cabo",
                "zipCode" => [ 28930000, 28939999 ],
                "ibge" => 3300258
            ]),
            "3300308" => new Map([
                "name" => "Barra do Piraí",
                "zipCode" => [ 27000001, 27174999 ],
                "ibge" => 3300308
            ]),
            "3300407" => new Map([
                "name" => "Barra Mansa",
                "zipCode" => [ 27300001, 27399999 ],
                "ibge" => 3300407
            ]),
            "3300456" => new Map([
                "name" => "Belford Roxo",
                "zipCode" => [ 26100001, 26199999 ],
                "ibge" => 3300456
            ]),
            "3300506" => new Map([
                "name" => "Bom Jardim",
                "zipCode" => [ 28660000, 28679999 ],
                "ibge" => 3300506
            ]),
            "3300605" => new Map([
                "name" => "Bom Jesus do Itabapoana",
                "zipCode" => [ 28360000, 28374999 ],
                "ibge" => 3300605
            ]),
            "3300704" => new Map([
                "name" => "Cabo Frio",
                "zipCode" => [ 28900001, 28929999 ],
                "ibge" => 3300704
            ]),
            "3300803" => new Map([
                "name" => "Cachoeiras de Macacu",
                "zipCode" => [ 28680000, 28699999 ],
                "ibge" => 3300803
            ]),
            "3300902" => new Map([
                "name" => "Cambuci",
                "zipCode" => [ 28430000, 28454999 ],
                "ibge" => 3300902
            ]),
            "3301009" => new Map([
                "name" => "Campos dos Goytacazes",
                "zipCode" => [ 28000001, 28179999 ],
                "ibge" => 3301009
            ]),
            "3301108" => new Map([
                "name" => "Cantagalo",
                "zipCode" => [ 28500000, 28539999 ],
                "ibge" => 3301108
            ]),
            "3300936" => new Map([
                "name" => "Carapebus",
                "zipCode" => [ 27998000, 27999999 ],
                "ibge" => 3300936
            ]),
            "3301157" => new Map([
                "name" => "Cardoso Moreira",
                "zipCode" => [ 28180000, 28199999 ],
                "ibge" => 3301157
            ]),
            "3301207" => new Map([
                "name" => "Carmo",
                "zipCode" => [ 28640000, 28649999 ],
                "ibge" => 3301207
            ]),
            "3301306" => new Map([
                "name" => "Casimiro de Abreu",
                "zipCode" => [ 28860000, 28889999 ],
                "ibge" => 3301306
            ]),
            "3300951" => new Map([
                "name" => "Comendador Levy Gasparian",
                "zipCode" => [ 25870000, 25879999 ],
                "ibge" => 3300951
            ]),
            "3301405" => new Map([
                "name" => "Conceição de Macabu",
                "zipCode" => [ 28740000, 28749999 ],
                "ibge" => 3301405
            ]),
            "3301504" => new Map([
                "name" => "Cordeiro",
                "zipCode" => [ 28540000, 28544999 ],
                "ibge" => 3301504
            ]),
            "3301603" => new Map([
                "name" => "Duas Barras",
                "zipCode" => [ 28650000, 28659999 ],
                "ibge" => 3301603
            ]),
            "3301702" => new Map([
                "name" => "Duque de Caxias",
                "zipCode" => [ 25000001, 25499999 ],
                "ibge" => 3301702
            ]),
            "3301801" => new Map([
                "name" => "Engenheiro Paulo de Frontin",
                "zipCode" => [ 26650000, 26699999 ],
                "ibge" => 3301801
            ]),
            "3301850" => new Map([
                "name" => "Guapimirim",
                "zipCode" => [ 25940001, 25949999 ],
                "ibge" => 3301850
            ]),
            "3301876" => new Map([
                "name" => "Iguaba Grande",
                "zipCode" => [ 28960000, 28969999 ],
                "ibge" => 3301876
            ]),
            "3301900" => new Map([
                "name" => "Itaboraí",
                "zipCode" => [ 24800001, 24889999 ],
                "ibge" => 3301900
            ]),
            "3302007" => new Map([
                "name" => "Itaguaí",
                "zipCode" => [ 23800001, 23859999 ],
                "ibge" => 3302007
            ]),
            "3302056" => new Map([
                "name" => "Italva",
                "zipCode" => [ 28250000, 28299999 ],
                "ibge" => 3302056
            ]),
            "3302106" => new Map([
                "name" => "Itaocara",
                "zipCode" => [ 28570000, 28599999 ],
                "ibge" => 3302106
            ]),
            "3302205" => new Map([
                "name" => "Itaperuna",
                "zipCode" => [ 28300000, 28349999 ],
                "ibge" => 3302205
            ]),
            "3302254" => new Map([
                "name" => "Itatiaia",
                "zipCode" => [ 27580000, 27599999 ],
                "ibge" => 3302254
            ]),
            "3302270" => new Map([
                "name" => "Japeri",
                "zipCode" => [ 26400001, 26499999 ],
                "ibge" => 3302270
            ]),
            "3302304" => new Map([
                "name" => "Laje do Muriaé",
                "zipCode" => [ 28350000, 28359999 ],
                "ibge" => 3302304
            ]),
            "3302403" => new Map([
                "name" => "Macaé",
                "zipCode" => [ 27900001, 27997999 ],
                "ibge" => 3302403
            ]),
            "3302452" => new Map([
                "name" => "Macuco",
                "zipCode" => [ 28545000, 28549999 ],
                "ibge" => 3302452
            ]),
            "3302502" => new Map([
                "name" => "Magé",
                "zipCode" => [ 25900001, 25939999 ],
                "ibge" => 3302502
            ]),
            "3302601" => new Map([
                "name" => "Mangaratiba",
                "zipCode" => [ 23860000, 23889999 ],
                "ibge" => 3302601
            ]),
            "3302700" => new Map([
                "name" => "Maricá",
                "zipCode" => [ 24900001, 24999999 ],
                "ibge" => 3302700
            ]),
            "3302809" => new Map([
                "name" => "Mendes",
                "zipCode" => [ 26700000, 26899999 ],
                "ibge" => 3302809
            ]),
            "3302858" => new Map([
                "name" => "Mesquita",
                "zipCode" => [ 26550001, 26599999 ],
                "ibge" => 3302858
            ]),
            "3302908" => new Map([
                "name" => "Miguel Pereira",
                "zipCode" => [ 26900000, 26949999 ],
                "ibge" => 3302908
            ]),
            "3303005" => new Map([
                "name" => "Miracema",
                "zipCode" => [ 28460000, 28469999 ],
                "ibge" => 3303005
            ]),
            "3303104" => new Map([
                "name" => "Natividade",
                "zipCode" => [ 28380000, 28389999 ],
                "ibge" => 3303104
            ]),
            "3303203" => new Map([
                "name" => "Nilópolis",
                "zipCode" => [ 26500001, 26549999 ],
                "ibge" => 3303203
            ]),
            "3303302" => new Map([
                "name" => "Niterói",
                "zipCode" => [ 24000001, 24399999 ],
                "ibge" => 3303302
            ]),
            "3303401" => new Map([
                "name" => "Nova Friburgo",
                "zipCode" => [ 28600001, 28636999 ],
                "ibge" => 3303401
            ]),
            "3303500" => new Map([
                "name" => "Nova Iguaçu",
                "zipCode" => [ [     26000001,     26099999 ], [     26200000,     26299999 ] ],
                "ibge" => 3303500
            ]),
            "3303609" => new Map([
                "name" => "Paracambi",
                "zipCode" => [ 26600000, 26649999 ],
                "ibge" => 3303609
            ]),
            "3303708" => new Map([
                "name" => "Paraíba do Sul",
                "zipCode" => [ 25850000, 25869999 ],
                "ibge" => 3303708
            ]),
            "3303807" => new Map([
                "name" => "Paraty",
                "zipCode" => [ 23970000, 23999999 ],
                "ibge" => 3303807
            ]),
            "3303856" => new Map([
                "name" => "Paty do Alferes",
                "zipCode" => [ 26950000, 26999999 ],
                "ibge" => 3303856
            ]),
            "3303906" => new Map([
                "name" => "Petrópolis",
                "zipCode" => [ 25600001, 25779999 ],
                "ibge" => 3303906
            ]),
            "3303955" => new Map([
                "name" => "Pinheiral",
                "zipCode" => [ 27197000, 27199999 ],
                "ibge" => 3303955
            ]),
            "3304003" => new Map([
                "name" => "Piraí",
                "zipCode" => [ 27175000, 27196999 ],
                "ibge" => 3304003
            ]),
            "3304102" => new Map([
                "name" => "Porciúncula",
                "zipCode" => [ 28390000, 28399999 ],
                "ibge" => 3304102
            ]),
            "3304110" => new Map([
                "name" => "Porto Real",
                "zipCode" => [ 27570000, 27579999 ],
                "ibge" => 3304110
            ]),
            "3304128" => new Map([
                "name" => "Quatis",
                "zipCode" => [ 27400001, 27459999 ],
                "ibge" => 3304128
            ]),
            "3304144" => new Map([
                "name" => "Queimados",
                "zipCode" => [ 26300001, 26399999 ],
                "ibge" => 3304144
            ]),
            "3304151" => new Map([
                "name" => "Quissamã",
                "zipCode" => [ 28735000, 28739999 ],
                "ibge" => 3304151
            ]),
            "3304201" => new Map([
                "name" => "Resende",
                "zipCode" => [ 27500001, 27569999 ],
                "ibge" => 3304201
            ]),
            "3304300" => new Map([
                "name" => "Rio Bonito",
                "zipCode" => [ 28800000, 28819999 ],
                "ibge" => 3304300
            ]),
            "3304409" => new Map([
                "name" => "Rio Claro",
                "zipCode" => [ 27460000, 27499999 ],
                "ibge" => 3304409
            ]),
            "3304508" => new Map([
                "name" => "Rio das Flores",
                "zipCode" => [ 27660000, 27699999 ],
                "ibge" => 3304508
            ]),
            "3304524" => new Map([
                "name" => "Rio das Ostras",
                "zipCode" => [ 28890001, 28899999 ],
                "ibge" => 3304524
            ]),
            "3304557" => new Map([
                "name" => "Rio de Janeiro",
                "zipCode" => [ 20000001, 23799999 ],
                "ibge" => 3304557
            ]),
            "3304607" => new Map([
                "name" => "Santa Maria Madalena",
                "zipCode" => [ 28770000, 28799999 ],
                "ibge" => 3304607
            ]),
            "3304706" => new Map([
                "name" => "Santo Antônio de Pádua",
                "zipCode" => [ 28470000, 28494999 ],
                "ibge" => 3304706
            ]),
            "3304805" => new Map([
                "name" => "São Fidélis",
                "zipCode" => [ 28400000, 28429999 ],
                "ibge" => 3304805
            ]),
            "3304755" => new Map([
                "name" => "São Francisco de Itabapoana",
                "zipCode" => [ 28230000, 28249999 ],
                "ibge" => 3304755
            ]),
            "3304904" => new Map([
                "name" => "São Gonçalo",
                "zipCode" => [ 24400001, 24799999 ],
                "ibge" => 3304904
            ]),
            "3305000" => new Map([
                "name" => "São João da Barra",
                "zipCode" => [ 28200000, 28229999 ],
                "ibge" => 3305000
            ]),
            "3305109" => new Map([
                "name" => "São João de Meriti",
                "zipCode" => [ 25500001, 25599999 ],
                "ibge" => 3305109
            ]),
            "3305133" => new Map([
                "name" => "São José de Ubá",
                "zipCode" => [ 28455000, 28459999 ],
                "ibge" => 3305133
            ]),
            "3305158" => new Map([
                "name" => "São José do Vale do Rio Preto",
                "zipCode" => [ 25780000, 25799999 ],
                "ibge" => 3305158
            ]),
            "3305208" => new Map([
                "name" => "São Pedro da Aldeia",
                "zipCode" => [ 28940001, 28949999 ],
                "ibge" => 3305208
            ]),
            "3305307" => new Map([
                "name" => "São Sebastião do Alto",
                "zipCode" => [ 28550000, 28569999 ],
                "ibge" => 3305307
            ]),
            "3305406" => new Map([
                "name" => "Sapucaia",
                "zipCode" => [ 25880000, 25899999 ],
                "ibge" => 3305406
            ]),
            "3305505" => new Map([
                "name" => "Saquarema",
                "zipCode" => [ 28990001, 28999999 ],
                "ibge" => 3305505
            ]),
            "3305554" => new Map([
                "name" => "Seropédica",
                "zipCode" => [ 23890001, 23899999 ],
                "ibge" => 3305554
            ]),
            "3305604" => new Map([
                "name" => "Silva Jardim",
                "zipCode" => [ 28820000, 28859999 ],
                "ibge" => 3305604
            ]),
            "3305703" => new Map([
                "name" => "Sumidouro",
                "zipCode" => [ 28637000, 28639999 ],
                "ibge" => 3305703
            ]),
            "3305752" => new Map([
                "name" => "Tanguá",
                "zipCode" => [ 24890000, 24899999 ],
                "ibge" => 3305752
            ]),
            "3305802" => new Map([
                "name" => "Teresópolis",
                "zipCode" => [ 25950001, 25999999 ],
                "ibge" => 3305802
            ]),
            "3305901" => new Map([
                "name" => "Trajano de Moraes",
                "zipCode" => [ 28750000, 28769999 ],
                "ibge" => 3305901
            ]),
            "3306008" => new Map([
                "name" => "Três Rios",
                "zipCode" => [ 25800001, 25844999 ],
                "ibge" => 3306008
            ]),
            "3306107" => new Map([
                "name" => "Valença",
                "zipCode" => [ 27600000, 27659999 ],
                "ibge" => 3306107
            ]),
            "3306156" => new Map([
                "name" => "Varre-Sai",
                "zipCode" => [ 28375000, 28379999 ],
                "ibge" => 3306156
            ]),
            "3306206" => new Map([
                "name" => "Vassouras",
                "zipCode" => [ 27700000, 27899999 ],
                "ibge" => 3306206
            ]),
            "3306305" => new Map([
                "name" => "Volta Redonda",
                "zipCode" => [ 27200001, 27299999 ],
                "ibge" => 3306305
            ])
        ]);

        return $map;
    }
}