<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

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
                "cep" => [ 23900001, 23969999 ],
                "ibge" => 3300100
            ]),
            "3300159" => new Map([
                "name" => "Aperibé",
                "cep" => [ 28495000, 28499999 ],
                "ibge" => 3300159
            ]),
            "3300209" => new Map([
                "name" => "Araruama",
                "cep" => [ 28970001, 28989999 ],
                "ibge" => 3300209
            ]),
            "3300225" => new Map([
                "name" => "Areal",
                "cep" => [ 25845000, 25849999 ],
                "ibge" => 3300225
            ]),
            "3300233" => new Map([
                "name" => "Armação dos Búzios",
                "cep" => [ 28950001, 28959999 ],
                "ibge" => 3300233
            ]),
            "3300258" => new Map([
                "name" => "Arraial do Cabo",
                "cep" => [ 28930000, 28939999 ],
                "ibge" => 3300258
            ]),
            "3300308" => new Map([
                "name" => "Barra do Piraí",
                "cep" => [ 27000001, 27174999 ],
                "ibge" => 3300308
            ]),
            "3300407" => new Map([
                "name" => "Barra Mansa",
                "cep" => [ 27300001, 27399999 ],
                "ibge" => 3300407
            ]),
            "3300456" => new Map([
                "name" => "Belford Roxo",
                "cep" => [ 26100001, 26199999 ],
                "ibge" => 3300456
            ]),
            "3300506" => new Map([
                "name" => "Bom Jardim",
                "cep" => [ 28660000, 28679999 ],
                "ibge" => 3300506
            ]),
            "3300605" => new Map([
                "name" => "Bom Jesus do Itabapoana",
                "cep" => [ 28360000, 28374999 ],
                "ibge" => 3300605
            ]),
            "3300704" => new Map([
                "name" => "Cabo Frio",
                "cep" => [ 28900001, 28929999 ],
                "ibge" => 3300704
            ]),
            "3300803" => new Map([
                "name" => "Cachoeiras de Macacu",
                "cep" => [ 28680000, 28699999 ],
                "ibge" => 3300803
            ]),
            "3300902" => new Map([
                "name" => "Cambuci",
                "cep" => [ 28430000, 28454999 ],
                "ibge" => 3300902
            ]),
            "3301009" => new Map([
                "name" => "Campos dos Goytacazes",
                "cep" => [ 28000001, 28179999 ],
                "ibge" => 3301009
            ]),
            "3301108" => new Map([
                "name" => "Cantagalo",
                "cep" => [ 28500000, 28539999 ],
                "ibge" => 3301108
            ]),
            "3300936" => new Map([
                "name" => "Carapebus",
                "cep" => [ 27998000, 27999999 ],
                "ibge" => 3300936
            ]),
            "3301157" => new Map([
                "name" => "Cardoso Moreira",
                "cep" => [ 28180000, 28199999 ],
                "ibge" => 3301157
            ]),
            "3301207" => new Map([
                "name" => "Carmo",
                "cep" => [ 28640000, 28649999 ],
                "ibge" => 3301207
            ]),
            "3301306" => new Map([
                "name" => "Casimiro de Abreu",
                "cep" => [ 28860000, 28889999 ],
                "ibge" => 3301306
            ]),
            "3300951" => new Map([
                "name" => "Comendador Levy Gasparian",
                "cep" => [ 25870000, 25879999 ],
                "ibge" => 3300951
            ]),
            "3301405" => new Map([
                "name" => "Conceição de Macabu",
                "cep" => [ 28740000, 28749999 ],
                "ibge" => 3301405
            ]),
            "3301504" => new Map([
                "name" => "Cordeiro",
                "cep" => [ 28540000, 28544999 ],
                "ibge" => 3301504
            ]),
            "3301603" => new Map([
                "name" => "Duas Barras",
                "cep" => [ 28650000, 28659999 ],
                "ibge" => 3301603
            ]),
            "3301702" => new Map([
                "name" => "Duque de Caxias",
                "cep" => [ 25000001, 25499999 ],
                "ibge" => 3301702
            ]),
            "3301801" => new Map([
                "name" => "Engenheiro Paulo de Frontin",
                "cep" => [ 26650000, 26699999 ],
                "ibge" => 3301801
            ]),
            "3301850" => new Map([
                "name" => "Guapimirim",
                "cep" => [ 25940001, 25949999 ],
                "ibge" => 3301850
            ]),
            "3301876" => new Map([
                "name" => "Iguaba Grande",
                "cep" => [ 28960000, 28969999 ],
                "ibge" => 3301876
            ]),
            "3301900" => new Map([
                "name" => "Itaboraí",
                "cep" => [ 24800001, 24889999 ],
                "ibge" => 3301900
            ]),
            "3302007" => new Map([
                "name" => "Itaguaí",
                "cep" => [ 23800001, 23859999 ],
                "ibge" => 3302007
            ]),
            "3302056" => new Map([
                "name" => "Italva",
                "cep" => [ 28250000, 28299999 ],
                "ibge" => 3302056
            ]),
            "3302106" => new Map([
                "name" => "Itaocara",
                "cep" => [ 28570000, 28599999 ],
                "ibge" => 3302106
            ]),
            "3302205" => new Map([
                "name" => "Itaperuna",
                "cep" => [ 28300000, 28349999 ],
                "ibge" => 3302205
            ]),
            "3302254" => new Map([
                "name" => "Itatiaia",
                "cep" => [ 27580000, 27599999 ],
                "ibge" => 3302254
            ]),
            "3302270" => new Map([
                "name" => "Japeri",
                "cep" => [ 26400001, 26499999 ],
                "ibge" => 3302270
            ]),
            "3302304" => new Map([
                "name" => "Laje do Muriaé",
                "cep" => [ 28350000, 28359999 ],
                "ibge" => 3302304
            ]),
            "3302403" => new Map([
                "name" => "Macaé",
                "cep" => [ 27900001, 27997999 ],
                "ibge" => 3302403
            ]),
            "3302452" => new Map([
                "name" => "Macuco",
                "cep" => [ 28545000, 28549999 ],
                "ibge" => 3302452
            ]),
            "3302502" => new Map([
                "name" => "Magé",
                "cep" => [ 25900001, 25939999 ],
                "ibge" => 3302502
            ]),
            "3302601" => new Map([
                "name" => "Mangaratiba",
                "cep" => [ 23860000, 23889999 ],
                "ibge" => 3302601
            ]),
            "3302700" => new Map([
                "name" => "Maricá",
                "cep" => [ 24900001, 24999999 ],
                "ibge" => 3302700
            ]),
            "3302809" => new Map([
                "name" => "Mendes",
                "cep" => [ 26700000, 26899999 ],
                "ibge" => 3302809
            ]),
            "3302858" => new Map([
                "name" => "Mesquita",
                "cep" => [ 26550001, 26599999 ],
                "ibge" => 3302858
            ]),
            "3302908" => new Map([
                "name" => "Miguel Pereira",
                "cep" => [ 26900000, 26949999 ],
                "ibge" => 3302908
            ]),
            "3303005" => new Map([
                "name" => "Miracema",
                "cep" => [ 28460000, 28469999 ],
                "ibge" => 3303005
            ]),
            "3303104" => new Map([
                "name" => "Natividade",
                "cep" => [ 28380000, 28389999 ],
                "ibge" => 3303104
            ]),
            "3303203" => new Map([
                "name" => "Nilópolis",
                "cep" => [ 26500001, 26549999 ],
                "ibge" => 3303203
            ]),
            "3303302" => new Map([
                "name" => "Niterói",
                "cep" => [ 24000001, 24399999 ],
                "ibge" => 3303302
            ]),
            "3303401" => new Map([
                "name" => "Nova Friburgo",
                "cep" => [ 28600001, 28636999 ],
                "ibge" => 3303401
            ]),
            "3303500" => new Map([
                "name" => "Nova Iguaçu",
                "cep" => [ [     26000001,     26099999 ], [     26200000,     26299999 ] ],
                "ibge" => 3303500
            ]),
            "3303609" => new Map([
                "name" => "Paracambi",
                "cep" => [ 26600000, 26649999 ],
                "ibge" => 3303609
            ]),
            "3303708" => new Map([
                "name" => "Paraíba do Sul",
                "cep" => [ 25850000, 25869999 ],
                "ibge" => 3303708
            ]),
            "3303807" => new Map([
                "name" => "Paraty",
                "cep" => [ 23970000, 23999999 ],
                "ibge" => 3303807
            ]),
            "3303856" => new Map([
                "name" => "Paty do Alferes",
                "cep" => [ 26950000, 26999999 ],
                "ibge" => 3303856
            ]),
            "3303906" => new Map([
                "name" => "Petrópolis",
                "cep" => [ 25600001, 25779999 ],
                "ibge" => 3303906
            ]),
            "3303955" => new Map([
                "name" => "Pinheiral",
                "cep" => [ 27197000, 27199999 ],
                "ibge" => 3303955
            ]),
            "3304003" => new Map([
                "name" => "Piraí",
                "cep" => [ 27175000, 27196999 ],
                "ibge" => 3304003
            ]),
            "3304102" => new Map([
                "name" => "Porciúncula",
                "cep" => [ 28390000, 28399999 ],
                "ibge" => 3304102
            ]),
            "3304110" => new Map([
                "name" => "Porto Real",
                "cep" => [ 27570000, 27579999 ],
                "ibge" => 3304110
            ]),
            "3304128" => new Map([
                "name" => "Quatis",
                "cep" => [ 27400001, 27459999 ],
                "ibge" => 3304128
            ]),
            "3304144" => new Map([
                "name" => "Queimados",
                "cep" => [ 26300001, 26399999 ],
                "ibge" => 3304144
            ]),
            "3304151" => new Map([
                "name" => "Quissamã",
                "cep" => [ 28735000, 28739999 ],
                "ibge" => 3304151
            ]),
            "3304201" => new Map([
                "name" => "Resende",
                "cep" => [ 27500001, 27569999 ],
                "ibge" => 3304201
            ]),
            "3304300" => new Map([
                "name" => "Rio Bonito",
                "cep" => [ 28800000, 28819999 ],
                "ibge" => 3304300
            ]),
            "3304409" => new Map([
                "name" => "Rio Claro",
                "cep" => [ 27460000, 27499999 ],
                "ibge" => 3304409
            ]),
            "3304508" => new Map([
                "name" => "Rio das Flores",
                "cep" => [ 27660000, 27699999 ],
                "ibge" => 3304508
            ]),
            "3304524" => new Map([
                "name" => "Rio das Ostras",
                "cep" => [ 28890001, 28899999 ],
                "ibge" => 3304524
            ]),
            "3304557" => new Map([
                "name" => "Rio de Janeiro",
                "cep" => [ 20000001, 23799999 ],
                "ibge" => 3304557
            ]),
            "3304607" => new Map([
                "name" => "Santa Maria Madalena",
                "cep" => [ 28770000, 28799999 ],
                "ibge" => 3304607
            ]),
            "3304706" => new Map([
                "name" => "Santo Antônio de Pádua",
                "cep" => [ 28470000, 28494999 ],
                "ibge" => 3304706
            ]),
            "3304805" => new Map([
                "name" => "São Fidélis",
                "cep" => [ 28400000, 28429999 ],
                "ibge" => 3304805
            ]),
            "3304755" => new Map([
                "name" => "São Francisco de Itabapoana",
                "cep" => [ 28230000, 28249999 ],
                "ibge" => 3304755
            ]),
            "3304904" => new Map([
                "name" => "São Gonçalo",
                "cep" => [ 24400001, 24799999 ],
                "ibge" => 3304904
            ]),
            "3305000" => new Map([
                "name" => "São João da Barra",
                "cep" => [ 28200000, 28229999 ],
                "ibge" => 3305000
            ]),
            "3305109" => new Map([
                "name" => "São João de Meriti",
                "cep" => [ 25500001, 25599999 ],
                "ibge" => 3305109
            ]),
            "3305133" => new Map([
                "name" => "São José de Ubá",
                "cep" => [ 28455000, 28459999 ],
                "ibge" => 3305133
            ]),
            "3305158" => new Map([
                "name" => "São José do Vale do Rio Preto",
                "cep" => [ 25780000, 25799999 ],
                "ibge" => 3305158
            ]),
            "3305208" => new Map([
                "name" => "São Pedro da Aldeia",
                "cep" => [ 28940001, 28949999 ],
                "ibge" => 3305208
            ]),
            "3305307" => new Map([
                "name" => "São Sebastião do Alto",
                "cep" => [ 28550000, 28569999 ],
                "ibge" => 3305307
            ]),
            "3305406" => new Map([
                "name" => "Sapucaia",
                "cep" => [ 25880000, 25899999 ],
                "ibge" => 3305406
            ]),
            "3305505" => new Map([
                "name" => "Saquarema",
                "cep" => [ 28990001, 28999999 ],
                "ibge" => 3305505
            ]),
            "3305554" => new Map([
                "name" => "Seropédica",
                "cep" => [ 23890001, 23899999 ],
                "ibge" => 3305554
            ]),
            "3305604" => new Map([
                "name" => "Silva Jardim",
                "cep" => [ 28820000, 28859999 ],
                "ibge" => 3305604
            ]),
            "3305703" => new Map([
                "name" => "Sumidouro",
                "cep" => [ 28637000, 28639999 ],
                "ibge" => 3305703
            ]),
            "3305752" => new Map([
                "name" => "Tanguá",
                "cep" => [ 24890000, 24899999 ],
                "ibge" => 3305752
            ]),
            "3305802" => new Map([
                "name" => "Teresópolis",
                "cep" => [ 25950001, 25999999 ],
                "ibge" => 3305802
            ]),
            "3305901" => new Map([
                "name" => "Trajano de Moraes",
                "cep" => [ 28750000, 28769999 ],
                "ibge" => 3305901
            ]),
            "3306008" => new Map([
                "name" => "Três Rios",
                "cep" => [ 25800001, 25844999 ],
                "ibge" => 3306008
            ]),
            "3306107" => new Map([
                "name" => "Valença",
                "cep" => [ 27600000, 27659999 ],
                "ibge" => 3306107
            ]),
            "3306156" => new Map([
                "name" => "Varre-Sai",
                "cep" => [ 28375000, 28379999 ],
                "ibge" => 3306156
            ]),
            "3306206" => new Map([
                "name" => "Vassouras",
                "cep" => [ 27700000, 27899999 ],
                "ibge" => 3306206
            ]),
            "3306305" => new Map([
                "name" => "Volta Redonda",
                "cep" => [ 27200001, 27299999 ],
                "ibge" => 3306305
            ])
        ]);

        return $map;
    }
}