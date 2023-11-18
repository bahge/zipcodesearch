<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class PA implements ICitiesInfo
{
    public static int $numberCities = 144;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(144);
        $map->putAll([
            "1500107" => new Map([
                "name" => "Abaetetuba",
                "zipCode" => [ 68440000, 68444999 ],
                "ibge" => 1500107
            ]),
            "1500131" => new Map([
                "name" => "Abel Figueiredo",
                "zipCode" => [ 68527000, 68529999 ],
                "ibge" => 1500131
            ]),
            "1500206" => new Map([
                "name" => "Acará",
                "zipCode" => [ 68690000, 68694999 ],
                "ibge" => 1500206
            ]),
            "1500305" => new Map([
                "name" => "Afuá",
                "zipCode" => [ 68890000, 68899999 ],
                "ibge" => 1500305
            ]),
            "1500347" => new Map([
                "name" => "Água Azul do Norte",
                "zipCode" => [ 68533000, 68534999 ],
                "ibge" => 1500347
            ]),
            "1500404" => new Map([
                "name" => "Alenquer",
                "zipCode" => [ 68200000, 68209999 ],
                "ibge" => 1500404
            ]),
            "1500503" => new Map([
                "name" => "Almeirim",
                "zipCode" => [ 68230000, 68249999 ],
                "ibge" => 1500503
            ]),
            "1500602" => new Map([
                "name" => "Altamira",
                "zipCode" => [ 68370001, 68379999 ],
                "ibge" => 1500602
            ]),
            "1500701" => new Map([
                "name" => "Anajás",
                "zipCode" => [ 68810000, 68814999 ],
                "ibge" => 1500701
            ]),
            "1500800" => new Map([
                "name" => "Ananindeua",
                "zipCode" => [ 67000001, 67199999 ],
                "ibge" => 1500800
            ]),
            "1500859" => new Map([
                "name" => "Anapu",
                "zipCode" => [ 68365000, 68369999 ],
                "ibge" => 1500859
            ]),
            "1500909" => new Map([
                "name" => "Augusto Corrêa",
                "zipCode" => [ 68610000, 68616999 ],
                "ibge" => 1500909
            ]),
            "1500958" => new Map([
                "name" => "Aurora do Pará",
                "zipCode" => [ 68658000, 68659999 ],
                "ibge" => 1500958
            ]),
            "1501006" => new Map([
                "name" => "Aveiro",
                "zipCode" => [ 68150000, 68164999 ],
                "ibge" => 1501006
            ]),
            "1501105" => new Map([
                "name" => "Bagre",
                "zipCode" => [ 68475000, 68479999 ],
                "ibge" => 1501105
            ]),
            "1501204" => new Map([
                "name" => "Baião",
                "zipCode" => [ 68465000, 68469999 ],
                "ibge" => 1501204
            ]),
            "1501253" => new Map([
                "name" => "Bannach",
                "zipCode" => [ 68388000, 68389999 ],
                "ibge" => 1501253
            ]),
            "1501303" => new Map([
                "name" => "Barcarena",
                "zipCode" => [ 68445000, 68449999 ],
                "ibge" => 1501303
            ]),
            "1501402" => new Map([
                "name" => "Belém",
                "zipCode" => [ 66000001, 66999999 ],
                "ibge" => 1501402
            ]),
            "1501451" => new Map([
                "name" => "Belterra",
                "zipCode" => [ 68143000, 68144999 ],
                "ibge" => 1501451
            ]),
            "1501501" => new Map([
                "name" => "Benevides",
                "zipCode" => [ 68795000, 68797999 ],
                "ibge" => 1501501
            ]),
            "1501576" => new Map([
                "name" => "Bom Jesus do Tocantins",
                "zipCode" => [ 68525000, 68526999 ],
                "ibge" => 1501576
            ]),
            "1501600" => new Map([
                "name" => "Bonito",
                "zipCode" => [ 68645000, 68646999 ],
                "ibge" => 1501600
            ]),
            "1501709" => new Map([
                "name" => "Bragança",
                "zipCode" => [ 68600000, 68609999 ],
                "ibge" => 1501709
            ]),
            "1501725" => new Map([
                "name" => "Brasil Novo",
                "zipCode" => [ 68148000, 68149999 ],
                "ibge" => 1501725
            ]),
            "1501758" => new Map([
                "name" => "Brejo Grande do Araguaia",
                "zipCode" => [ 68521000, 68522999 ],
                "ibge" => 1501758
            ]),
            "1501782" => new Map([
                "name" => "Breu Branco",
                "zipCode" => [ 68488000, 68489999 ],
                "ibge" => 1501782
            ]),
            "1501808" => new Map([
                "name" => "Breves",
                "zipCode" => [ 68800000, 68809999 ],
                "ibge" => 1501808
            ]),
            "1501907" => new Map([
                "name" => "Bujaru",
                "zipCode" => [ 68670000, 68674999 ],
                "ibge" => 1501907
            ]),
            "1502004" => new Map([
                "name" => "Cachoeira do Arari",
                "zipCode" => [ 68840000, 68849999 ],
                "ibge" => 1502004
            ]),
            "1501956" => new Map([
                "name" => "Cachoeira do Piriá",
                "zipCode" => [ 68617000, 68617999 ],
                "ibge" => 1501956
            ]),
            "1502103" => new Map([
                "name" => "Cametá",
                "zipCode" => [ 68400000, 68414999 ],
                "ibge" => 1502103
            ]),
            "1502152" => new Map([
                "name" => "Canaã dos Carajás",
                "zipCode" => [ [ 68350000, 68359999 ], [ 68537000, 68539999 ] ],
                "ibge" => 1502152
            ]),
            "1502202" => new Map([
                "name" => "Capanema",
                "zipCode" => [ 68700001, 68706999 ],
                "ibge" => 1502202
            ]),
            "1502301" => new Map([
                "name" => "Capitão Poço",
                "zipCode" => [ 68650000, 68654999 ],
                "ibge" => 1502301
            ]),
            "1502400" => new Map([
                "name" => "Castanhal",
                "zipCode" => [ 68740001, 68747999 ],
                "ibge" => 1502400
            ]),
            "1502509" => new Map([
                "name" => "Chaves",
                "zipCode" => [ 68880000, 68889999 ],
                "ibge" => 1502509
            ]),
            "1502608" => new Map([
                "name" => "Colares",
                "zipCode" => [ 68785000, 68785999 ],
                "ibge" => 1502608
            ]),
            "1502707" => new Map([
                "name" => "Conceição do Araguaia",
                "zipCode" => [ 68540000, 68542999 ],
                "ibge" => 1502707
            ]),
            "1502756" => new Map([
                "name" => "Concórdia do Pará",
                "zipCode" => [ 68685000, 68689999 ],
                "ibge" => 1502756
            ]),
            "1502764" => new Map([
                "name" => "Cumaru do Norte",
                "zipCode" => [ 68398000, 68399999 ],
                "ibge" => 1502764
            ]),
            "1502772" => new Map([
                "name" => "Curionópolis",
                "zipCode" => [ 68523000, 68523999 ],
                "ibge" => 1502772
            ]),
            "1502806" => new Map([
                "name" => "Curralinho",
                "zipCode" => [ 68815000, 68819999 ],
                "ibge" => 1502806
            ]),
            "1502855" => new Map([
                "name" => "Curuá",
                "zipCode" => [ 68210000, 68219999 ],
                "ibge" => 1502855
            ]),
            "1502905" => new Map([
                "name" => "Curuçá",
                "zipCode" => [ 68750000, 68759999 ],
                "ibge" => 1502905
            ]),
            "1502939" => new Map([
                "name" => "Dom Eliseu",
                "zipCode" => [ 68633000, 68634999 ],
                "ibge" => 1502939
            ]),
            "1502954" => new Map([
                "name" => "Eldorado do Carajás",
                "zipCode" => [ 68524000, 68524999 ],
                "ibge" => 1502954
            ]),
            "1503002" => new Map([
                "name" => "Faro",
                "zipCode" => [ 68280000, 68284999 ],
                "ibge" => 1503002
            ]),
            "1503044" => new Map([
                "name" => "Floresta do Araguaia",
                "zipCode" => [ 68543000, 68544999 ],
                "ibge" => 1503044
            ]),
            "1503077" => new Map([
                "name" => "Garrafão do Norte",
                "zipCode" => [ 68665000, 68669999 ],
                "ibge" => 1503077
            ]),
            "1503093" => new Map([
                "name" => "Goianésia do Pará",
                "zipCode" => [ 68639000, 68639999 ],
                "ibge" => 1503093
            ]),
            "1503101" => new Map([
                "name" => "Gurupá",
                "zipCode" => [ 68300000, 68329999 ],
                "ibge" => 1503101
            ]),
            "1503200" => new Map([
                "name" => "Igarapé-Açu",
                "zipCode" => [ 68725000, 68729999 ],
                "ibge" => 1503200
            ]),
            "1503309" => new Map([
                "name" => "Igarapé-Miri",
                "zipCode" => [ 68430000, 68439999 ],
                "ibge" => 1503309
            ]),
            "1503408" => new Map([
                "name" => "Inhangapi",
                "zipCode" => [ 68770000, 68772999 ],
                "ibge" => 1503408
            ]),
            "1503457" => new Map([
                "name" => "Ipixuna do Pará",
                "zipCode" => [ 68637000, 68637999 ],
                "ibge" => 1503457
            ]),
            "1503507" => new Map([
                "name" => "Irituia",
                "zipCode" => [ 68655000, 68657999 ],
                "ibge" => 1503507
            ]),
            "1503606" => new Map([
                "name" => "Itaituba",
                "zipCode" => [ 68180001, 68192999 ],
                "ibge" => 1503606
            ]),
            "1503705" => new Map([
                "name" => "Itupiranga",
                "zipCode" => [ 68580000, 68584999 ],
                "ibge" => 1503705
            ]),
            "1503754" => new Map([
                "name" => "Jacareacanga",
                "zipCode" => [ 68195000, 68197999 ],
                "ibge" => 1503754
            ]),
            "1503804" => new Map([
                "name" => "Jacundá",
                "zipCode" => [ 68590000, 68599999 ],
                "ibge" => 1503804
            ]),
            "1503903" => new Map([
                "name" => "Juruti",
                "zipCode" => [ 68170000, 68179999 ],
                "ibge" => 1503903
            ]),
            "1504000" => new Map([
                "name" => "Limoeiro do Ajuru",
                "zipCode" => [ 68415000, 68419999 ],
                "ibge" => 1504000
            ]),
            "1504059" => new Map([
                "name" => "Mãe do Rio",
                "zipCode" => [ 68675000, 68679999 ],
                "ibge" => 1504059
            ]),
            "1504109" => new Map([
                "name" => "Magalhães Barata",
                "zipCode" => [ 68722000, 68724999 ],
                "ibge" => 1504109
            ]),
            "1504208" => new Map([
                "name" => "Marabá",
                "zipCode" => [ 68500001, 68514999 ],
                "ibge" => 1504208
            ]),
            "1504307" => new Map([
                "name" => "Maracanã",
                "zipCode" => [ 68710000, 68718999 ],
                "ibge" => 1504307
            ]),
            "1504406" => new Map([
                "name" => "Marapanim",
                "zipCode" => [ 68760000, 68769999 ],
                "ibge" => 1504406
            ]),
            "1504422" => new Map([
                "name" => "Marituba",
                "zipCode" => [ 67200000, 67999999 ],
                "ibge" => 1504422
            ]),
            "1504455" => new Map([
                "name" => "Medicilândia",
                "zipCode" => [ 68145000, 68147999 ],
                "ibge" => 1504455
            ]),
            "1504505" => new Map([
                "name" => "Melgaço",
                "zipCode" => [ 68490000, 68499999 ],
                "ibge" => 1504505
            ]),
            "1504604" => new Map([
                "name" => "Mocajuba",
                "zipCode" => [ 68420000, 68429999 ],
                "ibge" => 1504604
            ]),
            "1504703" => new Map([
                "name" => "Moju",
                "zipCode" => [ 68450000, 68454999 ],
                "ibge" => 1504703
            ]),
            "1504752" => new Map([
                "name" => "Mojuí dos Campos",
                "zipCode" => [ 68129000, 68129999 ],
                "ibge" => 1504752
            ]),
            "1504802" => new Map([
                "name" => "Monte Alegre",
                "zipCode" => [ 68220000, 68229999 ],
                "ibge" => 1504802
            ]),
            "1504901" => new Map([
                "name" => "Muaná",
                "zipCode" => [ 68825000, 68829999 ],
                "ibge" => 1504901
            ]),
            "1504950" => new Map([
                "name" => "Nova Esperança do Piriá",
                "zipCode" => [ 68618000, 68619999 ],
                "ibge" => 1504950
            ]),
            "1504976" => new Map([
                "name" => "Nova Ipixuna",
                "zipCode" => [ 68585000, 68589999 ],
                "ibge" => 1504976
            ]),
            "1505007" => new Map([
                "name" => "Nova Timboteua",
                "zipCode" => [ 68730000, 68733999 ],
                "ibge" => 1505007
            ]),
            "1505031" => new Map([
                "name" => "Novo Progresso",
                "zipCode" => [ 68193000, 68194999 ],
                "ibge" => 1505031
            ]),
            "1505064" => new Map([
                "name" => "Novo Repartimento",
                "zipCode" => [ 68473000, 68474999 ],
                "ibge" => 1505064
            ]),
            "1505106" => new Map([
                "name" => "Óbidos",
                "zipCode" => [ 68250000, 68269999 ],
                "ibge" => 1505106
            ]),
            "1505205" => new Map([
                "name" => "Oeiras do Pará",
                "zipCode" => [ 68470000, 68472999 ],
                "ibge" => 1505205
            ]),
            "1505304" => new Map([
                "name" => "Oriximiná",
                "zipCode" => [ 68270000, 68279999 ],
                "ibge" => 1505304
            ]),
            "1505403" => new Map([
                "name" => "Ourém",
                "zipCode" => [ 68640000, 68643999 ],
                "ibge" => 1505403
            ]),
            "1505437" => new Map([
                "name" => "Ourilândia do Norte",
                "zipCode" => [ 68390000, 68397999 ],
                "ibge" => 1505437
            ]),
            "1505486" => new Map([
                "name" => "Pacajá",
                "zipCode" => [ 68485000, 68487999 ],
                "ibge" => 1505486
            ]),
            "1505494" => new Map([
                "name" => "Palestina do Pará",
                "zipCode" => [ 68535000, 68536999 ],
                "ibge" => 1505494
            ]),
            "1505502" => new Map([
                "name" => "Paragominas",
                "zipCode" => [ 68625001, 68631999 ],
                "ibge" => 1505502
            ]),
            "1505536" => new Map([
                "name" => "Parauapebas",
                "zipCode" => [ 68515000, 68517999 ],
                "ibge" => 1505536
            ]),
            "1505551" => new Map([
                "name" => "Pau D'Arco",
                "zipCode" => [ 68545000, 68547999 ],
                "ibge" => 1505551
            ]),
            "1505601" => new Map([
                "name" => "Peixe-Boi",
                "zipCode" => [ 68734000, 68737999 ],
                "ibge" => 1505601
            ]),
            "1505635" => new Map([
                "name" => "Piçarra",
                "zipCode" => [ 68575000, 68579999 ],
                "ibge" => 1505635
            ]),
            "1505650" => new Map([
                "name" => "Placas",
                "zipCode" => [ 68138000, 68139999 ],
                "ibge" => 1505650
            ]),
            "1505700" => new Map([
                "name" => "Ponta de Pedras",
                "zipCode" => [ 68830000, 68839999 ],
                "ibge" => 1505700
            ]),
            "1505809" => new Map([
                "name" => "Portel",
                "zipCode" => [ 68480000, 68484999 ],
                "ibge" => 1505809
            ]),
            "1505908" => new Map([
                "name" => "Porto de Moz",
                "zipCode" => [ 68330000, 68349999 ],
                "ibge" => 1505908
            ]),
            "1506005" => new Map([
                "name" => "Prainha",
                "zipCode" => [ 68130000, 68137999 ],
                "ibge" => 1506005
            ]),
            "1506104" => new Map([
                "name" => "Primavera",
                "zipCode" => [ 68707000, 68708999 ],
                "ibge" => 1506104
            ]),
            "1506112" => new Map([
                "name" => "Quatipuru",
                "zipCode" => [ 68709000, 68709999 ],
                "ibge" => 1506112
            ]),
            "1506138" => new Map([
                "name" => "Redenção",
                "zipCode" => [ 68549000, 68554999 ],
                "ibge" => 1506138
            ]),
            "1506161" => new Map([
                "name" => "Rio Maria",
                "zipCode" => [ 68530000, 68532999 ],
                "ibge" => 1506161
            ]),
            "1506187" => new Map([
                "name" => "Rondon do Pará",
                "zipCode" => [ 68638000, 68638999 ],
                "ibge" => 1506187
            ]),
            "1506195" => new Map([
                "name" => "Rurópolis",
                "zipCode" => [ 68165000, 68169999 ],
                "ibge" => 1506195
            ]),
            "1506203" => new Map([
                "name" => "Salinópolis",
                "zipCode" => [ 68721000, 68721999 ],
                "ibge" => 1506203
            ]),
            "1506302" => new Map([
                "name" => "Salvaterra",
                "zipCode" => [ 68860000, 68869999 ],
                "ibge" => 1506302
            ]),
            "1506351" => new Map([
                "name" => "Santa Bárbara do Pará",
                "zipCode" => [ 68798000, 68799999 ],
                "ibge" => 1506351
            ]),
            "1506401" => new Map([
                "name" => "Santa Cruz do Arari",
                "zipCode" => [ 68850000, 68859999 ],
                "ibge" => 1506401
            ]),
            "1506500" => new Map([
                "name" => "Santa Izabel do Pará",
                "zipCode" => [ 68790000, 68794999 ],
                "ibge" => 1506500
            ]),
            "1506559" => new Map([
                "name" => "Santa Luzia do Pará",
                "zipCode" => [ 68644000, 68644999 ],
                "ibge" => 1506559
            ]),
            "1506583" => new Map([
                "name" => "Santa Maria das Barreiras",
                "zipCode" => [ 68565000, 68569999 ],
                "ibge" => 1506583
            ]),
            "1506609" => new Map([
                "name" => "Santa Maria do Pará",
                "zipCode" => [ 68738000, 68739999 ],
                "ibge" => 1506609
            ]),
            "1506708" => new Map([
                "name" => "Santana do Araguaia",
                "zipCode" => [ 68560000, 68564999 ],
                "ibge" => 1506708
            ]),
            "1506807" => new Map([
                "name" => "Santarém",
                "zipCode" => [ 68000001, 68128999 ],
                "ibge" => 1506807
            ]),
            "1506906" => new Map([
                "name" => "Santarém Novo",
                "zipCode" => [ 68720000, 68720999 ],
                "ibge" => 1506906
            ]),
            "1507003" => new Map([
                "name" => "Santo Antônio do Tauá",
                "zipCode" => [ 68786000, 68789999 ],
                "ibge" => 1507003
            ]),
            "1507102" => new Map([
                "name" => "São Caetano de Odivelas",
                "zipCode" => [ 68775000, 68779999 ],
                "ibge" => 1507102
            ]),
            "1507151" => new Map([
                "name" => "São Domingos do Araguaia",
                "zipCode" => [ 68520000, 68520999 ],
                "ibge" => 1507151
            ]),
            "1507201" => new Map([
                "name" => "São Domingos do Capim",
                "zipCode" => [ 68635000, 68636999 ],
                "ibge" => 1507201
            ]),
            "1507300" => new Map([
                "name" => "São Félix do Xingu",
                "zipCode" => [ 68380000, 68382999 ],
                "ibge" => 1507300
            ]),
            "1507409" => new Map([
                "name" => "São Francisco do Pará",
                "zipCode" => [ 68748000, 68749999 ],
                "ibge" => 1507409
            ]),
            "1507458" => new Map([
                "name" => "São Geraldo do Araguaia",
                "zipCode" => [ 68570000, 68574999 ],
                "ibge" => 1507458
            ]),
            "1507466" => new Map([
                "name" => "São João da Ponta",
                "zipCode" => [ 68774000, 68774999 ],
                "ibge" => 1507466
            ]),
            "1507474" => new Map([
                "name" => "São João de Pirabas",
                "zipCode" => [ 68719000, 68719999 ],
                "ibge" => 1507474
            ]),
            "1507508" => new Map([
                "name" => "São João do Araguaia",
                "zipCode" => [ 68518000, 68519999 ],
                "ibge" => 1507508
            ]),
            "1507607" => new Map([
                "name" => "São Miguel do Guamá",
                "zipCode" => [ 68660000, 68664999 ],
                "ibge" => 1507607
            ]),
            "1507706" => new Map([
                "name" => "São Sebastião da Boa Vista",
                "zipCode" => [ 68820000, 68824999 ],
                "ibge" => 1507706
            ]),
            "1507755" => new Map([
                "name" => "Sapucaia",
                "zipCode" => [ 68548000, 68548999 ],
                "ibge" => 1507755
            ]),
            "1507805" => new Map([
                "name" => "Senador José Porfírio",
                "zipCode" => [ 68360000, 68364999 ],
                "ibge" => 1507805
            ]),
            "1507904" => new Map([
                "name" => "Soure",
                "zipCode" => [ 68870000, 68879999 ],
                "ibge" => 1507904
            ]),
            "1507953" => new Map([
                "name" => "Tailândia",
                "zipCode" => [ 68695000, 68699999 ],
                "ibge" => 1507953
            ]),
            "1507961" => new Map([
                "name" => "Terra Alta",
                "zipCode" => [ 68773000, 68773999 ],
                "ibge" => 1507961
            ]),
            "1507979" => new Map([
                "name" => "Terra Santa",
                "zipCode" => [ 68285000, 68299999 ],
                "ibge" => 1507979
            ]),
            "1508001" => new Map([
                "name" => "Tomé-Açu",
                "zipCode" => [ 68680000, 68684999 ],
                "ibge" => 1508001
            ]),
            "1508035" => new Map([
                "name" => "Tracuateua",
                "zipCode" => [ 68647000, 68649999 ],
                "ibge" => 1508035
            ]),
            "1508050" => new Map([
                "name" => "Trairão",
                "zipCode" => [ 68198000, 68199999 ],
                "ibge" => 1508050
            ]),
            "1508084" => new Map([
                "name" => "Tucumã",
                "zipCode" => [ 68385000, 68387999 ],
                "ibge" => 1508084
            ]),
            "1508100" => new Map([
                "name" => "Tucuruí",
                "zipCode" => [ 68455001, 68464999 ],
                "ibge" => 1508100
            ]),
            "1508126" => new Map([
                "name" => "Ulianópolis",
                "zipCode" => [ 68632000, 68632999 ],
                "ibge" => 1508126
            ]),
            "1508159" => new Map([
                "name" => "Uruará",
                "zipCode" => [ 68140000, 68142999 ],
                "ibge" => 1508159
            ]),
            "1508209" => new Map([
                "name" => "Vigia",
                "zipCode" => [ 68780000, 68784999 ],
                "ibge" => 1508209
            ]),
            "1508308" => new Map([
                "name" => "Viseu",
                "zipCode" => [ 68620000, 68624999 ],
                "ibge" => 1508308
            ]),
            "1508357" => new Map([
                "name" => "Vitória do Xingu",
                "zipCode" => [ 68383000, 68384999 ],
                "ibge" => 1508357
            ]),
            "1508407" => new Map([
                "name" => "Xinguara",
                "zipCode" => [ 68555001, 68559999 ],
                "ibge" => 1508407
            ])
        ]);

        return $map;
    }
}