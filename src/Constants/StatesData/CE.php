<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class CE implements ICitiesInfo
{
    public static int $numberCities = 184;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(CE::$numberCities);
        $map->putAll([
            "2300101" => new Map([
                "name" => "Abaiara",
                "cep" => [ 63240000, 63249999 ],
                "ibge" => 2300101
            ]),
            "2300150" => new Map([
                "name" => "Acarape",
                "cep" => [ 62785000, 62789999 ],
                "ibge" => 2300150
            ]),
            "2300200" => new Map([
                "name" => "Acaraú",
                "cep" => [ 62580000, 62589999 ],
                "ibge" => 2300200
            ]),
            "2300309" => new Map([
                "name" => "Acopiara",
                "cep" => [ 63560000, 63569999 ],
                "ibge" => 2300309
            ]),
            "2300408" => new Map([
                "name" => "Aiuaba",
                "cep" => [ 63575000, 63579999 ],
                "ibge" => 2300408
            ]),
            "2300507" => new Map([
                "name" => "Alcântaras",
                "cep" => [ 62120000, 62129999 ],
                "ibge" => 2300507
            ]),
            "2300606" => new Map([
                "name" => "Altaneira",
                "cep" => [ 63195000, 63199999 ],
                "ibge" => 2300606
            ]),
            "2300705" => new Map([
                "name" => "Alto Santo",
                "cep" => [ 62970000, 62979999 ],
                "ibge" => 2300705
            ]),
            "2300754" => new Map([
                "name" => "Amontada",
                "cep" => [ 62540000, 62549999 ],
                "ibge" => 2300754
            ]),
            "2300804" => new Map([
                "name" => "Antonina do Norte",
                "cep" => [ 63570000, 63574999 ],
                "ibge" => 2300804
            ]),
            "2300903" => new Map([
                "name" => "Apuiarés",
                "cep" => [ 62630000, 62639999 ],
                "ibge" => 2300903
            ]),
            "2301000" => new Map([
                "name" => "Aquiraz",
                "cep" => [ 61700000, 61759999 ],
                "ibge" => 2301000
            ]),
            "2301109" => new Map([
                "name" => "Aracati",
                "cep" => [ 62800000, 62809999 ],
                "ibge" => 2301109
            ]),
            "2301208" => new Map([
                "name" => "Aracoiaba",
                "cep" => [ 62750000, 62754999 ],
                "ibge" => 2301208
            ]),
            "2301257" => new Map([
                "name" => "Ararendá",
                "cep" => [ 62210000, 62214999 ],
                "ibge" => 2301257
            ]),
            "2301307" => new Map([
                "name" => "Araripe",
                "cep" => [ 63170000, 63179999 ],
                "ibge" => 2301307
            ]),
            "2301406" => new Map([
                "name" => "Aratuba",
                "cep" => [ 62762000, 62763999 ],
                "ibge" => 2301406
            ]),
            "2301505" => new Map([
                "name" => "Arneiroz",
                "cep" => [ 63670000, 63679999 ],
                "ibge" => 2301505
            ]),
            "2301604" => new Map([
                "name" => "Assaré",
                "cep" => [ 63140000, 63144999 ],
                "ibge" => 2301604
            ]),
            "2301703" => new Map([
                "name" => "Aurora",
                "cep" => [ 63360000, 63379999 ],
                "ibge" => 2301703
            ]),
            "2301802" => new Map([
                "name" => "Baixio",
                "cep" => [ 63320000, 63339999 ],
                "ibge" => 2301802
            ]),
            "2301851" => new Map([
                "name" => "Banabuiú",
                "cep" => [ 63960000, 63969999 ],
                "ibge" => 2301851
            ]),
            "2301901" => new Map([
                "name" => "Barbalha",
                "cep" => [ 63180000, 63184999 ],
                "ibge" => 2301901
            ]),
            "2301950" => new Map([
                "name" => "Barreira",
                "cep" => [ 62795000, 62799999 ],
                "ibge" => 2301950
            ]),
            "2302008" => new Map([
                "name" => "Barro",
                "cep" => [ 63380000, 63399999 ],
                "ibge" => 2302008
            ]),
            "2302057" => new Map([
                "name" => "Barroquinha",
                "cep" => [ 62410000, 62419999 ],
                "ibge" => 2302057
            ]),
            "2302107" => new Map([
                "name" => "Baturité",
                "cep" => [ 62760000, 62761999 ],
                "ibge" => 2302107
            ]),
            "2302206" => new Map([
                "name" => "Beberibe",
                "cep" => [ 62840000, 62849999 ],
                "ibge" => 2302206
            ]),
            "2302305" => new Map([
                "name" => "Bela Cruz",
                "cep" => [ 62570000, 62579999 ],
                "ibge" => 2302305
            ]),
            "2302404" => new Map([
                "name" => "Boa Viagem",
                "cep" => [ 63870000, 63899999 ],
                "ibge" => 2302404
            ]),
            "2302503" => new Map([
                "name" => "Brejo Santo",
                "cep" => [ 63260000, 63269999 ],
                "ibge" => 2302503
            ]),
            "2302602" => new Map([
                "name" => "Camocim",
                "cep" => [ 62400000, 62409999 ],
                "ibge" => 2302602
            ]),
            "2302701" => new Map([
                "name" => "Campos Sales",
                "cep" => [ 63150000, 63154999 ],
                "ibge" => 2302701
            ]),
            "2302800" => new Map([
                "name" => "Canindé",
                "cep" => [ 62700000, 62719999 ],
                "ibge" => 2302800
            ]),
            "2302909" => new Map([
                "name" => "Capistrano",
                "cep" => [ 62748000, 62749999 ],
                "ibge" => 2302909
            ]),
            "2303006" => new Map([
                "name" => "Caridade",
                "cep" => [ 62730000, 62735999 ],
                "ibge" => 2303006
            ]),
            "2303105" => new Map([
                "name" => "Cariré",
                "cep" => [ 62184000, 62189999 ],
                "ibge" => 2303105
            ]),
            "2303204" => new Map([
                "name" => "Caririaçu",
                "cep" => [ 63220000, 63229999 ],
                "ibge" => 2303204
            ]),
            "2303303" => new Map([
                "name" => "Cariús",
                "cep" => [ 63530000, 63539999 ],
                "ibge" => 2303303
            ]),
            "2303402" => new Map([
                "name" => "Carnaubal",
                "cep" => [ 62375000, 62379999 ],
                "ibge" => 2303402
            ]),
            "2303501" => new Map([
                "name" => "Cascavel",
                "cep" => [ 62850000, 62859999 ],
                "ibge" => 2303501
            ]),
            "2303600" => new Map([
                "name" => "Catarina",
                "cep" => [ 63595000, 63599999 ],
                "ibge" => 2303600
            ]),
            "2303659" => new Map([
                "name" => "Catunda",
                "cep" => [ 62297000, 62299999 ],
                "ibge" => 2303659
            ]),
            "2303709" => new Map([
                "name" => "Caucaia",
                "cep" => [ 61600001, 61699999 ],
                "ibge" => 2303709
            ]),
            "2303808" => new Map([
                "name" => "Cedro",
                "cep" => [ 63400000, 63429999 ],
                "ibge" => 2303808
            ]),
            "2303907" => new Map([
                "name" => "Chaval",
                "cep" => [ 62420000, 62429999 ],
                "ibge" => 2303907
            ]),
            "2303931" => new Map([
                "name" => "Choró",
                "cep" => [ 63950000, 63959999 ],
                "ibge" => 2303931
            ]),
            "2303956" => new Map([
                "name" => "Chorozinho",
                "cep" => [ 62875000, 62879999 ],
                "ibge" => 2303956
            ]),
            "2304004" => new Map([
                "name" => "Coreaú",
                "cep" => [ 62160000, 62169999 ],
                "ibge" => 2304004
            ]),
            "2304103" => new Map([
                "name" => "Crateús",
                "cep" => [ 63700001, 63739999 ],
                "ibge" => 2304103
            ]),
            "2304202" => new Map([
                "name" => "Crato",
                "cep" => [ 63100001, 63139999 ],
                "ibge" => 2304202
            ]),
            "2304236" => new Map([
                "name" => "Croatá",
                "cep" => [ 62390000, 62399999 ],
                "ibge" => 2304236
            ]),
            "2304251" => new Map([
                "name" => "Cruz",
                "cep" => [ 62595000, 62597999 ],
                "ibge" => 2304251
            ]),
            "2304269" => new Map([
                "name" => "Deputado Irapuan Pinheiro",
                "cep" => [ 63645000, 63649999 ],
                "ibge" => 2304269
            ]),
            "2304277" => new Map([
                "name" => "Ererê",
                "cep" => [ 63470000, 63474999 ],
                "ibge" => 2304277
            ]),
            "2304285" => new Map([
                "name" => "Eusébio",
                "cep" => [ 61760001, 61799999 ],
                "ibge" => 2304285
            ]),
            "2304301" => new Map([
                "name" => "Farias Brito",
                "cep" => [ 63185000, 63189999 ],
                "ibge" => 2304301
            ]),
            "2304350" => new Map([
                "name" => "Forquilha",
                "cep" => [ 62115000, 62119999 ],
                "ibge" => 2304350
            ]),
            "2304400" => new Map([
                "name" => "Fortaleza",
                "cep" => [ 60000001, 61599999 ],
                "ibge" => 2304400
            ]),
            "2304459" => new Map([
                "name" => "Fortim",
                "cep" => [ 62815000, 62819999 ],
                "ibge" => 2304459
            ]),
            "2304509" => new Map([
                "name" => "Frecheirinha",
                "cep" => [ 62340000, 62349999 ],
                "ibge" => 2304509
            ]),
            "2304608" => new Map([
                "name" => "General Sampaio",
                "cep" => [ 62738000, 62739999 ],
                "ibge" => 2304608
            ]),
            "2304657" => new Map([
                "name" => "Graça",
                "cep" => [ 62365000, 62369999 ],
                "ibge" => 2304657
            ]),
            "2304707" => new Map([
                "name" => "Granja",
                "cep" => [ 62430000, 62449999 ],
                "ibge" => 2304707
            ]),
            "2304806" => new Map([
                "name" => "Granjeiro",
                "cep" => [ 63230000, 63239999 ],
                "ibge" => 2304806
            ]),
            "2304905" => new Map([
                "name" => "Groairas",
                "cep" => [ 62190000, 62199999 ],
                "ibge" => 2304905
            ]),
            "2304954" => new Map([
                "name" => "Guaiúba",
                "cep" => [ 61890000, 61899999 ],
                "ibge" => 2304954
            ]),
            "2305001" => new Map([
                "name" => "Guaraciaba do Norte",
                "cep" => [ 62380000, 62389999 ],
                "ibge" => 2305001
            ]),
            "2305100" => new Map([
                "name" => "Guaramiranga",
                "cep" => [ 62766000, 62769999 ],
                "ibge" => 2305100
            ]),
            "2305209" => new Map([
                "name" => "Hidrolândia",
                "cep" => [ 62270000, 62279999 ],
                "ibge" => 2305209
            ]),
            "2305233" => new Map([
                "name" => "Horizonte",
                "cep" => [ 62880001, 62899999 ],
                "ibge" => 2305233
            ]),
            "2305266" => new Map([
                "name" => "Ibaretama",
                "cep" => [ 63970000, 63999999 ],
                "ibge" => 2305266
            ]),
            "2305308" => new Map([
                "name" => "Ibiapina",
                "cep" => [ 62360000, 62364999 ],
                "ibge" => 2305308
            ]),
            "2305332" => new Map([
                "name" => "Ibicuitinga",
                "cep" => [ 62955000, 62959999 ],
                "ibge" => 2305332
            ]),
            "2305357" => new Map([
                "name" => "Icapuí",
                "cep" => [ 62810000, 62814999 ],
                "ibge" => 2305357
            ]),
            "2305407" => new Map([
                "name" => "Icó",
                "cep" => [ 63430000, 63459999 ],
                "ibge" => 2305407
            ]),
            "2305506" => new Map([
                "name" => "Iguatu",
                "cep" => [ 63500001, 63514999 ],
                "ibge" => 2305506
            ]),
            "2305605" => new Map([
                "name" => "Independência",
                "cep" => [ 63640000, 63644999 ],
                "ibge" => 2305605
            ]),
            "2305654" => new Map([
                "name" => "Ipaporanga",
                "cep" => [ 62215000, 62219999 ],
                "ibge" => 2305654
            ]),
            "2305704" => new Map([
                "name" => "Ipaumirim",
                "cep" => [ 63340000, 63359999 ],
                "ibge" => 2305704
            ]),
            "2305803" => new Map([
                "name" => "Ipu",
                "cep" => [ 62250000, 62254999 ],
                "ibge" => 2305803
            ]),
            "2305902" => new Map([
                "name" => "Ipueiras",
                "cep" => [ 62230000, 62249999 ],
                "ibge" => 2305902
            ]),
            "2306009" => new Map([
                "name" => "Iracema",
                "cep" => [ 62980000, 62989999 ],
                "ibge" => 2306009
            ]),
            "2306108" => new Map([
                "name" => "Irauçuba",
                "cep" => [ 62620000, 62629999 ],
                "ibge" => 2306108
            ]),
            "2306207" => new Map([
                "name" => "Itaiçaba",
                "cep" => [ 62820000, 62822999 ],
                "ibge" => 2306207
            ]),
            "2306256" => new Map([
                "name" => "Itaitinga",
                "cep" => [ 61880000, 61889999 ],
                "ibge" => 2306256
            ]),
            "2306306" => new Map([
                "name" => "Itapajé",
                "cep" => [ 62600000, 62609999 ],
                "ibge" => 2306306
            ]),
            "2306405" => new Map([
                "name" => "Itapipoca",
                "cep" => [ 62500001, 62529999 ],
                "ibge" => 2306405
            ]),
            "2306504" => new Map([
                "name" => "Itapiúna",
                "cep" => [ 62740000, 62747999 ],
                "ibge" => 2306504
            ]),
            "2306553" => new Map([
                "name" => "Itarema",
                "cep" => [ 62590000, 62594999 ],
                "ibge" => 2306553
            ]),
            "2306603" => new Map([
                "name" => "Itatira",
                "cep" => [ 62720000, 62729999 ],
                "ibge" => 2306603
            ]),
            "2306702" => new Map([
                "name" => "Jaguaretama",
                "cep" => [ 63480000, 63489999 ],
                "ibge" => 2306702
            ]),
            "2306801" => new Map([
                "name" => "Jaguaribara",
                "cep" => [ 63490000, 63499999 ],
                "ibge" => 2306801
            ]),
            "2306900" => new Map([
                "name" => "Jaguaribe",
                "cep" => [ 63475000, 63479999 ],
                "ibge" => 2306900
            ]),
            "2307007" => new Map([
                "name" => "Jaguaruana",
                "cep" => [ 62823000, 62839999 ],
                "ibge" => 2307007
            ]),
            "2307106" => new Map([
                "name" => "Jardim",
                "cep" => [ 63290000, 63299999 ],
                "ibge" => 2307106
            ]),
            "2307205" => new Map([
                "name" => "Jati",
                "cep" => [ 63275000, 63279999 ],
                "ibge" => 2307205
            ]),
            "2307254" => new Map([
                "name" => "Jijoca de Jericoacoara",
                "cep" => [ 62598000, 62599999 ],
                "ibge" => 2307254
            ]),
            "2307304" => new Map([
                "name" => "Juazeiro do Norte",
                "cep" => [ 63000001, 63099999 ],
                "ibge" => 2307304
            ]),
            "2307403" => new Map([
                "name" => "Jucás",
                "cep" => [ 63580000, 63589999 ],
                "ibge" => 2307403
            ]),
            "2307502" => new Map([
                "name" => "Lavras da Mangabeira",
                "cep" => [ 63300000, 63309999 ],
                "ibge" => 2307502
            ]),
            "2307601" => new Map([
                "name" => "Limoeiro do Norte",
                "cep" => [ 62930000, 62939999 ],
                "ibge" => 2307601
            ]),
            "2307635" => new Map([
                "name" => "Madalena",
                "cep" => [ 63860000, 63869999 ],
                "ibge" => 2307635
            ]),
            "2307650" => new Map([
                "name" => "Maracanaú",
                "cep" => [ 61900001, 61939999 ],
                "ibge" => 2307650
            ]),
            "2307700" => new Map([
                "name" => "Maranguape",
                "cep" => [ 61940001, 61999999 ],
                "ibge" => 2307700
            ]),
            "2307809" => new Map([
                "name" => "Marco",
                "cep" => [ 62560000, 62569999 ],
                "ibge" => 2307809
            ]),
            "2307908" => new Map([
                "name" => "Martinópole",
                "cep" => [ 62450000, 62459999 ],
                "ibge" => 2307908
            ]),
            "2308005" => new Map([
                "name" => "Massapê",
                "cep" => [ 62140000, 62149999 ],
                "ibge" => 2308005
            ]),
            "2308104" => new Map([
                "name" => "Mauriti",
                "cep" => [ 63210000, 63219999 ],
                "ibge" => 2308104
            ]),
            "2308203" => new Map([
                "name" => "Meruoca",
                "cep" => [ 62130000, 62139999 ],
                "ibge" => 2308203
            ]),
            "2308302" => new Map([
                "name" => "Milagres",
                "cep" => [ 63250000, 63259999 ],
                "ibge" => 2308302
            ]),
            "2308351" => new Map([
                "name" => "Milhã",
                "cep" => [ 63635000, 63639999 ],
                "ibge" => 2308351
            ]),
            "2308377" => new Map([
                "name" => "Miraíma",
                "cep" => [ 62530000, 62539999 ],
                "ibge" => 2308377
            ]),
            "2308401" => new Map([
                "name" => "Missão Velha",
                "cep" => [ 63200000, 63209999 ],
                "ibge" => 2308401
            ]),
            "2308500" => new Map([
                "name" => "Mombaça",
                "cep" => [ 63610000, 63619999 ],
                "ibge" => 2308500
            ]),
            "2308609" => new Map([
                "name" => "Monsenhor Tabosa",
                "cep" => [ 63780000, 63799999 ],
                "ibge" => 2308609
            ]),
            "2308708" => new Map([
                "name" => "Morada Nova",
                "cep" => [ 62940000, 62954999 ],
                "ibge" => 2308708
            ]),
            "2308807" => new Map([
                "name" => "Moraújo",
                "cep" => [ 62480000, 62499999 ],
                "ibge" => 2308807
            ]),
            "2308906" => new Map([
                "name" => "Morrinhos",
                "cep" => [ 62550000, 62559999 ],
                "ibge" => 2308906
            ]),
            "2309003" => new Map([
                "name" => "Mucambo",
                "cep" => [ 62170000, 62179999 ],
                "ibge" => 2309003
            ]),
            "2309102" => new Map([
                "name" => "Mulungu",
                "cep" => [ 62764000, 62765999 ],
                "ibge" => 2309102
            ]),
            "2309201" => new Map([
                "name" => "Nova Olinda",
                "cep" => [ 63165000, 63169999 ],
                "ibge" => 2309201
            ]),
            "2309300" => new Map([
                "name" => "Nova Russas",
                "cep" => [ 62200000, 62209999 ],
                "ibge" => 2309300
            ]),
            "2309409" => new Map([
                "name" => "Novo Oriente",
                "cep" => [ 63740000, 63749999 ],
                "ibge" => 2309409
            ]),
            "2309458" => new Map([
                "name" => "Ocara",
                "cep" => [ 62755000, 62759999 ],
                "ibge" => 2309458
            ]),
            "2309508" => new Map([
                "name" => "Orós",
                "cep" => [ 63520000, 63529999 ],
                "ibge" => 2309508
            ]),
            "2309607" => new Map([
                "name" => "Pacajus",
                "cep" => [ 62870000, 62874999 ],
                "ibge" => 2309607
            ]),
            "2309706" => new Map([
                "name" => "Pacatuba",
                "cep" => [ 61800001, 61879999 ],
                "ibge" => 2309706
            ]),
            "2309805" => new Map([
                "name" => "Pacoti",
                "cep" => [ 62770000, 62779999 ],
                "ibge" => 2309805
            ]),
            "2309904" => new Map([
                "name" => "Pacujá",
                "cep" => [ 62180000, 62183999 ],
                "ibge" => 2309904
            ]),
            "2310001" => new Map([
                "name" => "Palhano",
                "cep" => [ 62910000, 62919999 ],
                "ibge" => 2310001
            ]),
            "2310100" => new Map([
                "name" => "Palmácia",
                "cep" => [ 62780000, 62784999 ],
                "ibge" => 2310100
            ]),
            "2310209" => new Map([
                "name" => "Paracuru",
                "cep" => [ 62680000, 62684999 ],
                "ibge" => 2310209
            ]),
            "2310258" => new Map([
                "name" => "Paraipaba",
                "cep" => [ 62685000, 62689999 ],
                "ibge" => 2310258
            ]),
            "2310308" => new Map([
                "name" => "Parambu",
                "cep" => [ 63680000, 63699999 ],
                "ibge" => 2310308
            ]),
            "2310407" => new Map([
                "name" => "Paramoti",
                "cep" => [ 62736000, 62737999 ],
                "ibge" => 2310407
            ]),
            "2310506" => new Map([
                "name" => "Pedra Branca",
                "cep" => [ 63630000, 63634999 ],
                "ibge" => 2310506
            ]),
            "2310605" => new Map([
                "name" => "Penaforte",
                "cep" => [ 63280000, 63289999 ],
                "ibge" => 2310605
            ]),
            "2310704" => new Map([
                "name" => "Pentecoste",
                "cep" => [ 62640000, 62649999 ],
                "ibge" => 2310704
            ]),
            "2310803" => new Map([
                "name" => "Pereiro",
                "cep" => [ 63460000, 63469999 ],
                "ibge" => 2310803
            ]),
            "2310852" => new Map([
                "name" => "Pindoretama",
                "cep" => [ 62860000, 62869999 ],
                "ibge" => 2310852
            ]),
            "2310902" => new Map([
                "name" => "Piquet Carneiro",
                "cep" => [ 63605000, 63609999 ],
                "ibge" => 2310902
            ]),
            "2310951" => new Map([
                "name" => "Pires Ferreira",
                "cep" => [ 62255000, 62259999 ],
                "ibge" => 2310951
            ]),
            "2311009" => new Map([
                "name" => "Poranga",
                "cep" => [ 62220000, 62229999 ],
                "ibge" => 2311009
            ]),
            "2311108" => new Map([
                "name" => "Porteiras",
                "cep" => [ 63270000, 63274999 ],
                "ibge" => 2311108
            ]),
            "2311207" => new Map([
                "name" => "Potengi",
                "cep" => [ 63160000, 63164999 ],
                "ibge" => 2311207
            ]),
            "2311231" => new Map([
                "name" => "Potiretama",
                "cep" => [ 62990000, 62999999 ],
                "ibge" => 2311231
            ]),
            "2311264" => new Map([
                "name" => "Quiterianópolis",
                "cep" => [ 63650000, 63659999 ],
                "ibge" => 2311264
            ]),
            "2311306" => new Map([
                "name" => "Quixadá",
                "cep" => [ 63900001, 63949999 ],
                "ibge" => 2311306
            ]),
            "2311355" => new Map([
                "name" => "Quixelô",
                "cep" => [ 63515000, 63519999 ],
                "ibge" => 2311355
            ]),
            "2311405" => new Map([
                "name" => "Quixeramobim",
                "cep" => [ 63800000, 63859999 ],
                "ibge" => 2311405
            ]),
            "2311504" => new Map([
                "name" => "Quixeré",
                "cep" => [ 62920000, 62929999 ],
                "ibge" => 2311504
            ]),
            "2311603" => new Map([
                "name" => "Redenção",
                "cep" => [ 62790000, 62794999 ],
                "ibge" => 2311603
            ]),
            "2311702" => new Map([
                "name" => "Reriutaba",
                "cep" => [ 62260000, 62264999 ],
                "ibge" => 2311702
            ]),
            "2311801" => new Map([
                "name" => "Russas",
                "cep" => [ 62900000, 62909999 ],
                "ibge" => 2311801
            ]),
            "2311900" => new Map([
                "name" => "Saboeiro",
                "cep" => [ 63590000, 63594999 ],
                "ibge" => 2311900
            ]),
            "2311959" => new Map([
                "name" => "Salitre",
                "cep" => [ 63155000, 63159999 ],
                "ibge" => 2311959
            ]),
            "2312205" => new Map([
                "name" => "Santa Quitéria",
                "cep" => [ 62280000, 62296999 ],
                "ibge" => 2312205
            ]),
            "2312007" => new Map([
                "name" => "Santana do Acaraú",
                "cep" => [ 62150000, 62159999 ],
                "ibge" => 2312007
            ]),
            "2312106" => new Map([
                "name" => "Santana do Cariri",
                "cep" => [ 63190000, 63194999 ],
                "ibge" => 2312106
            ]),
            "2312304" => new Map([
                "name" => "São Benedito",
                "cep" => [ 62370000, 62374999 ],
                "ibge" => 2312304
            ]),
            "2312403" => new Map([
                "name" => "São Gonçalo do Amarante",
                "cep" => [ 62670000, 62679999 ],
                "ibge" => 2312403
            ]),
            "2312502" => new Map([
                "name" => "São João do Jaguaribe",
                "cep" => [ 62965000, 62969999 ],
                "ibge" => 2312502
            ]),
            "2312601" => new Map([
                "name" => "São Luís do Curu",
                "cep" => [ 62665000, 62669999 ],
                "ibge" => 2312601
            ]),
            "2312700" => new Map([
                "name" => "Senador Pompeu",
                "cep" => [ 63600000, 63604999 ],
                "ibge" => 2312700
            ]),
            "2312809" => new Map([
                "name" => "Senador Sá",
                "cep" => [ 62470000, 62479999 ],
                "ibge" => 2312809
            ]),
            "2312908" => new Map([
                "name" => "Sobral",
                "cep" => [ 62000001, 62114999 ],
                "ibge" => 2312908
            ]),
            "2313005" => new Map([
                "name" => "Solonópole",
                "cep" => [ 63620000, 63629999 ],
                "ibge" => 2313005
            ]),
            "2313104" => new Map([
                "name" => "Tabuleiro do Norte",
                "cep" => [ 62960000, 62964999 ],
                "ibge" => 2313104
            ]),
            "2313203" => new Map([
                "name" => "Tamboril",
                "cep" => [ 63750000, 63779999 ],
                "ibge" => 2313203
            ]),
            "2313252" => new Map([
                "name" => "Tarrafas",
                "cep" => [ 63145000, 63149999 ],
                "ibge" => 2313252
            ]),
            "2313302" => new Map([
                "name" => "Tauá",
                "cep" => [ 63660000, 63669999 ],
                "ibge" => 2313302
            ]),
            "2313351" => new Map([
                "name" => "Tejuçuoca",
                "cep" => [ 62610000, 62619999 ],
                "ibge" => 2313351
            ]),
            "2313401" => new Map([
                "name" => "Tianguá",
                "cep" => [ 62320001, 62339999 ],
                "ibge" => 2313401
            ]),
            "2313500" => new Map([
                "name" => "Trairi",
                "cep" => [ 62690000, 62699999 ],
                "ibge" => 2313500
            ]),
            "2313559" => new Map([
                "name" => "Tururu",
                "cep" => [ 62655000, 62659999 ],
                "ibge" => 2313559
            ]),
            "2313609" => new Map([
                "name" => "Ubajara",
                "cep" => [ 62350000, 62359999 ],
                "ibge" => 2313609
            ]),
            "2313708" => new Map([
                "name" => "Umari",
                "cep" => [ 63310000, 63319999 ],
                "ibge" => 2313708
            ]),
            "2313757" => new Map([
                "name" => "Umirim",
                "cep" => [ 62660000, 62664999 ],
                "ibge" => 2313757
            ]),
            "2313807" => new Map([
                "name" => "Uruburetama",
                "cep" => [ 62650000, 62654999 ],
                "ibge" => 2313807
            ]),
            "2313906" => new Map([
                "name" => "Uruoca",
                "cep" => [ 62460000, 62469999 ],
                "ibge" => 2313906
            ]),
            "2313955" => new Map([
                "name" => "Varjota",
                "cep" => [ 62265000, 62269999 ],
                "ibge" => 2313955
            ]),
            "2314003" => new Map([
                "name" => "Várzea Alegre",
                "cep" => [ 63540000, 63559999 ],
                "ibge" => 2314003
            ]),
            "2314102" => new Map([
                "name" => "Viçosa do Ceará",
                "cep" => [ 62300000, 62319999 ],
                "ibge" => 2314102
            ])
        ]);

        return $map;
    }
}