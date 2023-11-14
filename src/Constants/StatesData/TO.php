<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class TO implements ICitiesInfo
{
    public static int $numberCities = 139;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(TO::$numberCities);
        $map->putAll([
            "1700251" => new Map([
                "name" => "Abreulândia",
                "cep" => [ 77693000, 77694999 ],
                "ibge" => 1700251
            ]),
            "1700301" => new Map([
                "name" => "Aguiarnópolis",
                "cep" => [ 77908000, 77909999 ],
                "ibge" => 1700301
            ]),
            "1700350" => new Map([
                "name" => "Aliança do Tocantins",
                "cep" => [ 77455000, 77457999 ],
                "ibge" => 1700350
            ]),
            "1700400" => new Map([
                "name" => "Almas",
                "cep" => [ 77310000, 77314999 ],
                "ibge" => 1700400
            ]),
            "1700707" => new Map([
                "name" => "Alvorada",
                "cep" => [ 77480000, 77482999 ],
                "ibge" => 1700707
            ]),
            "1701002" => new Map([
                "name" => "Ananás",
                "cep" => [ 77890000, 77892999 ],
                "ibge" => 1701002
            ]),
            "1701051" => new Map([
                "name" => "Angico",
                "cep" => [ 77905000, 77907999 ],
                "ibge" => 1701051
            ]),
            "1701101" => new Map([
                "name" => "Aparecida do Rio Negro",
                "cep" => [ 77620000, 77629999 ],
                "ibge" => 1701101
            ]),
            "1701309" => new Map([
                "name" => "Aragominas",
                "cep" => [ 77845000, 77847999 ],
                "ibge" => 1701309
            ]),
            "1701903" => new Map([
                "name" => "Araguacema",
                "cep" => [ 77690000, 77692999 ],
                "ibge" => 1701903
            ]),
            "1702000" => new Map([
                "name" => "Araguaçu",
                "cep" => [ 77475000, 77477999 ],
                "ibge" => 1702000
            ]),
            "1702109" => new Map([
                "name" => "Araguaína",
                "cep" => [ 77800001, 77839999 ],
                "ibge" => 1702109
            ]),
            "1702158" => new Map([
                "name" => "Araguanã",
                "cep" => [ 77855000, 77859999 ],
                "ibge" => 1702158
            ]),
            "1702208" => new Map([
                "name" => "Araguatins",
                "cep" => [ 77950000, 77957999 ],
                "ibge" => 1702208
            ]),
            "1702307" => new Map([
                "name" => "Arapoema",
                "cep" => [ 77780000, 77782999 ],
                "ibge" => 1702307
            ]),
            "1702406" => new Map([
                "name" => "Arraias",
                "cep" => [ 77330000, 77349999 ],
                "ibge" => 1702406
            ]),
            "1702554" => new Map([
                "name" => "Augustinópolis",
                "cep" => [ 77960000, 77969999 ],
                "ibge" => 1702554
            ]),
            "1702703" => new Map([
                "name" => "Aurora do Tocantins",
                "cep" => [ 77325000, 77327999 ],
                "ibge" => 1702703
            ]),
            "1702901" => new Map([
                "name" => "Axixá do Tocantins",
                "cep" => [ 77930000, 77939999 ],
                "ibge" => 1702901
            ]),
            "1703008" => new Map([
                "name" => "Babaçulândia",
                "cep" => [ 77870000, 77879999 ],
                "ibge" => 1703008
            ]),
            "1703057" => new Map([
                "name" => "Bandeirantes do Tocantins",
                "cep" => [ 77783000, 77784999 ],
                "ibge" => 1703057
            ]),
            "1703073" => new Map([
                "name" => "Barra do Ouro",
                "cep" => [ 77765000, 77769999 ],
                "ibge" => 1703073
            ]),
            "1703107" => new Map([
                "name" => "Barrolândia",
                "cep" => [ 77665000, 77669999 ],
                "ibge" => 1703107
            ]),
            "1703206" => new Map([
                "name" => "Bernardo Sayão",
                "cep" => [ 77755000, 77759999 ],
                "ibge" => 1703206
            ]),
            "1703305" => new Map([
                "name" => "Bom Jesus do Tocantins",
                "cep" => [ 77714000, 77715999 ],
                "ibge" => 1703305
            ]),
            "1703602" => new Map([
                "name" => "Brasilândia do Tocantins",
                "cep" => [ 77735000, 77739999 ],
                "ibge" => 1703602
            ]),
            "1703701" => new Map([
                "name" => "Brejinho de Nazaré",
                "cep" => [ 77560000, 77564999 ],
                "ibge" => 1703701
            ]),
            "1703800" => new Map([
                "name" => "Buriti do Tocantins",
                "cep" => [ 77995000, 77999999 ],
                "ibge" => 1703800
            ]),
            "1703826" => new Map([
                "name" => "Cachoeirinha",
                "cep" => [ 77915000, 77917999 ],
                "ibge" => 1703826
            ]),
            "1703842" => new Map([
                "name" => "Campos Lindos",
                "cep" => [ 77777000, 77779999 ],
                "ibge" => 1703842
            ]),
            "1703867" => new Map([
                "name" => "Cariri do Tocantins",
                "cep" => [ 77453000, 77454999 ],
                "ibge" => 1703867
            ]),
            "1703883" => new Map([
                "name" => "Carmolândia",
                "cep" => [ 77840000, 77844999 ],
                "ibge" => 1703883
            ]),
            "1703891" => new Map([
                "name" => "Carrasco Bonito",
                "cep" => [ 77985000, 77989999 ],
                "ibge" => 1703891
            ]),
            "1703909" => new Map([
                "name" => "Caseara",
                "cep" => [ 77680000, 77684999 ],
                "ibge" => 1703909
            ]),
            "1704105" => new Map([
                "name" => "Centenário",
                "cep" => [ 77723000, 77724999 ],
                "ibge" => 1704105
            ]),
            "1705102" => new Map([
                "name" => "Chapada da Natividade",
                "cep" => [ 77378000, 77379999 ],
                "ibge" => 1705102
            ]),
            "1704600" => new Map([
                "name" => "Chapada de Areia",
                "cep" => [ 77575000, 77579999 ],
                "ibge" => 1704600
            ]),
            "1705508" => new Map([
                "name" => "Colinas do Tocantins",
                "cep" => [ 77760000, 77764999 ],
                "ibge" => 1705508
            ]),
            "1716703" => new Map([
                "name" => "Colméia",
                "cep" => [ 77725000, 77729999 ],
                "ibge" => 1716703
            ]),
            "1705557" => new Map([
                "name" => "Combinado",
                "cep" => [ 77350000, 77352999 ],
                "ibge" => 1705557
            ]),
            "1705607" => new Map([
                "name" => "Conceição do Tocantins",
                "cep" => [ 77305000, 77307999 ],
                "ibge" => 1705607
            ]),
            "1706001" => new Map([
                "name" => "Couto de Magalhães",
                "cep" => [ 77750000, 77752999 ],
                "ibge" => 1706001
            ]),
            "1706100" => new Map([
                "name" => "Cristalândia",
                "cep" => [ 77490000, 77492999 ],
                "ibge" => 1706100
            ]),
            "1706258" => new Map([
                "name" => "Crixás do Tocantins",
                "cep" => [ 77463000, 77464999 ],
                "ibge" => 1706258
            ]),
            "1706506" => new Map([
                "name" => "Darcinópolis",
                "cep" => [ 77910000, 77912999 ],
                "ibge" => 1706506
            ]),
            "1707009" => new Map([
                "name" => "Dianópolis",
                "cep" => [ 77300000, 77302999 ],
                "ibge" => 1707009
            ]),
            "1707108" => new Map([
                "name" => "Divinópolis do Tocantins",
                "cep" => [ 77670000, 77672999 ],
                "ibge" => 1707108
            ]),
            "1707207" => new Map([
                "name" => "Dois Irmãos do Tocantins",
                "cep" => [ 77685000, 77689999 ],
                "ibge" => 1707207
            ]),
            "1707306" => new Map([
                "name" => "Duerê",
                "cep" => [ 77485000, 77489999 ],
                "ibge" => 1707306
            ]),
            "1707405" => new Map([
                "name" => "Esperantina",
                "cep" => [ 77993000, 77994999 ],
                "ibge" => 1707405
            ]),
            "1707553" => new Map([
                "name" => "Fátima",
                "cep" => [ 77555000, 77557999 ],
                "ibge" => 1707553
            ]),
            "1707652" => new Map([
                "name" => "Figueirópolis",
                "cep" => [ 77465000, 77469999 ],
                "ibge" => 1707652
            ]),
            "1707702" => new Map([
                "name" => "Filadélfia",
                "cep" => [ 77795000, 77797999 ],
                "ibge" => 1707702
            ]),
            "1708205" => new Map([
                "name" => "Formoso do Araguaia",
                "cep" => [ 77470000, 77474999 ],
                "ibge" => 1708205
            ]),
            "1708304" => new Map([
                "name" => "Goianorte",
                "cep" => [ 77695000, 77699999 ],
                "ibge" => 1708304
            ]),
            "1709005" => new Map([
                "name" => "Goiatins",
                "cep" => [ 77770000, 77776999 ],
                "ibge" => 1709005
            ]),
            "1709302" => new Map([
                "name" => "Guaraí",
                "cep" => [ 77700000, 77703999 ],
                "ibge" => 1709302
            ]),
            "1709500" => new Map([
                "name" => "Gurupi",
                "cep" => [ 77400001, 77449999 ],
                "ibge" => 1709500
            ]),
            "1709807" => new Map([
                "name" => "Ipueiras",
                "cep" => [ 77553000, 77554999 ],
                "ibge" => 1709807
            ]),
            "1710508" => new Map([
                "name" => "Itacajá",
                "cep" => [ 77720000, 77722999 ],
                "ibge" => 1710508
            ]),
            "1710706" => new Map([
                "name" => "Itaguatins",
                "cep" => [ 77920000, 77924999 ],
                "ibge" => 1710706
            ]),
            "1710904" => new Map([
                "name" => "Itapiratins",
                "cep" => [ 77718000, 77719999 ],
                "ibge" => 1710904
            ]),
            "1711100" => new Map([
                "name" => "Itaporã do Tocantins",
                "cep" => [ 77740000, 77742999 ],
                "ibge" => 1711100
            ]),
            "1711506" => new Map([
                "name" => "Jaú do Tocantins",
                "cep" => [ 77450000, 77452999 ],
                "ibge" => 1711506
            ]),
            "1711803" => new Map([
                "name" => "Juarina",
                "cep" => [ 77753000, 77754999 ],
                "ibge" => 1711803
            ]),
            "1711902" => new Map([
                "name" => "Lagoa da Confusão",
                "cep" => [ 77493000, 77494999 ],
                "ibge" => 1711902
            ]),
            "1711951" => new Map([
                "name" => "Lagoa do Tocantins",
                "cep" => [ 77613000, 77614999 ],
                "ibge" => 1711951
            ]),
            "1712009" => new Map([
                "name" => "Lajeado",
                "cep" => [ 77645000, 77649999 ],
                "ibge" => 1712009
            ]),
            "1712157" => new Map([
                "name" => "Lavandeira",
                "cep" => [ 77328000, 77329999 ],
                "ibge" => 1712157
            ]),
            "1712405" => new Map([
                "name" => "Lizarda",
                "cep" => [ 77630000, 77634999 ],
                "ibge" => 1712405
            ]),
            "1712454" => new Map([
                "name" => "Luzinópolis",
                "cep" => [ 77903000, 77904999 ],
                "ibge" => 1712454
            ]),
            "1712504" => new Map([
                "name" => "Marianópolis do Tocantins",
                "cep" => [ 77675000, 77679999 ],
                "ibge" => 1712504
            ]),
            "1712702" => new Map([
                "name" => "Mateiros",
                "cep" => [ 77593000, 77599999 ],
                "ibge" => 1712702
            ]),
            "1712801" => new Map([
                "name" => "Maurilândia do Tocantins",
                "cep" => [ 77918000, 77919999 ],
                "ibge" => 1712801
            ]),
            "1713205" => new Map([
                "name" => "Miracema do Tocantins",
                "cep" => [ 77650000, 77654999 ],
                "ibge" => 1713205
            ]),
            "1713304" => new Map([
                "name" => "Miranorte",
                "cep" => [ 77660000, 77664999 ],
                "ibge" => 1713304
            ]),
            "1713601" => new Map([
                "name" => "Monte do Carmo",
                "cep" => [ 77585000, 77589999 ],
                "ibge" => 1713601
            ]),
            "1713700" => new Map([
                "name" => "Monte Santo do Tocantins",
                "cep" => [ 77673000, 77674999 ],
                "ibge" => 1713700
            ]),
            "1713957" => new Map([
                "name" => "Muricilândia",
                "cep" => [ 77850000, 77854999 ],
                "ibge" => 1713957
            ]),
            "1714203" => new Map([
                "name" => "Natividade",
                "cep" => [ 77370000, 77374999 ],
                "ibge" => 1714203
            ]),
            "1714302" => new Map([
                "name" => "Nazaré",
                "cep" => [ 77895000, 77899999 ],
                "ibge" => 1714302
            ]),
            "1714880" => new Map([
                "name" => "Nova Olinda",
                "cep" => [ 77790000, 77794999 ],
                "ibge" => 1714880
            ]),
            "1715002" => new Map([
                "name" => "Nova Rosalândia",
                "cep" => [ 77495000, 77499999 ],
                "ibge" => 1715002
            ]),
            "1715101" => new Map([
                "name" => "Novo Acordo",
                "cep" => [ 77610000, 77612999 ],
                "ibge" => 1715101
            ]),
            "1715150" => new Map([
                "name" => "Novo Alegre",
                "cep" => [ 77353000, 77359999 ],
                "ibge" => 1715150
            ]),
            "1715259" => new Map([
                "name" => "Novo Jardim",
                "cep" => [ 77318000, 77319999 ],
                "ibge" => 1715259
            ]),
            "1715507" => new Map([
                "name" => "Oliveira de Fátima",
                "cep" => [ 77558000, 77559999 ],
                "ibge" => 1715507
            ]),
            "1721000" => new Map([
                "name" => "Palmas",
                "cep" => [ 77000001, 77299999 ],
                "ibge" => 1721000
            ]),
            "1715705" => new Map([
                "name" => "Palmeirante",
                "cep" => [ 77798000, 77799999 ],
                "ibge" => 1715705
            ]),
            "1713809" => new Map([
                "name" => "Palmeiras do Tocantins",
                "cep" => [ 77913000, 77914999 ],
                "ibge" => 1713809
            ]),
            "1715754" => new Map([
                "name" => "Palmeirópolis",
                "cep" => [ 77365000, 77367999 ],
                "ibge" => 1715754
            ]),
            "1716109" => new Map([
                "name" => "Paraíso do Tocantins",
                "cep" => [ 77600000, 77602999 ],
                "ibge" => 1716109
            ]),
            "1716208" => new Map([
                "name" => "Paranã",
                "cep" => [ 77360000, 77364999 ],
                "ibge" => 1716208
            ]),
            "1716307" => new Map([
                "name" => "Pau D'Arco",
                "cep" => [ 77785000, 77789999 ],
                "ibge" => 1716307
            ]),
            "1716505" => new Map([
                "name" => "Pedro Afonso",
                "cep" => [ 77710000, 77713999 ],
                "ibge" => 1716505
            ]),
            "1716604" => new Map([
                "name" => "Peixe",
                "cep" => [ 77460000, 77462999 ],
                "ibge" => 1716604
            ]),
            "1716653" => new Map([
                "name" => "Pequizeiro",
                "cep" => [ 77730000, 77732999 ],
                "ibge" => 1716653
            ]),
            "1717008" => new Map([
                "name" => "Pindorama do Tocantins",
                "cep" => [ 77380000, 77389999 ],
                "ibge" => 1717008
            ]),
            "1717206" => new Map([
                "name" => "Piraquê",
                "cep" => [ 77888000, 77889999 ],
                "ibge" => 1717206
            ]),
            "1717503" => new Map([
                "name" => "Pium",
                "cep" => [ 77570000, 77574999 ],
                "ibge" => 1717503
            ]),
            "1717800" => new Map([
                "name" => "Ponte Alta do Bom Jesus",
                "cep" => [ 77315000, 77317999 ],
                "ibge" => 1717800
            ]),
            "1717909" => new Map([
                "name" => "Ponte Alta do Tocantins",
                "cep" => [ 77590000, 77592999 ],
                "ibge" => 1717909
            ]),
            "1718006" => new Map([
                "name" => "Porto Alegre do Tocantins",
                "cep" => [ 77395000, 77399999 ],
                "ibge" => 1718006
            ]),
            "1718204" => new Map([
                "name" => "Porto Nacional",
                "cep" => [ 77500000, 77552999 ],
                "ibge" => 1718204
            ]),
            "1718303" => new Map([
                "name" => "Praia Norte",
                "cep" => [ 77970000, 77979999 ],
                "ibge" => 1718303
            ]),
            "1718402" => new Map([
                "name" => "Presidente Kennedy",
                "cep" => [ 77745000, 77749999 ],
                "ibge" => 1718402
            ]),
            "1718451" => new Map([
                "name" => "Pugmil",
                "cep" => [ 77603000, 77604999 ],
                "ibge" => 1718451
            ]),
            "1718501" => new Map([
                "name" => "Recursolândia",
                "cep" => [ 77733000, 77734999 ],
                "ibge" => 1718501
            ]),
            "1718550" => new Map([
                "name" => "Riachinho",
                "cep" => [ 77893000, 77894999 ],
                "ibge" => 1718550
            ]),
            "1718659" => new Map([
                "name" => "Rio da Conceição",
                "cep" => [ 77303000, 77304999 ],
                "ibge" => 1718659
            ]),
            "1718709" => new Map([
                "name" => "Rio dos Bois",
                "cep" => [ 77655000, 77659999 ],
                "ibge" => 1718709
            ]),
            "1718758" => new Map([
                "name" => "Rio Sono",
                "cep" => [ 77635000, 77639999 ],
                "ibge" => 1718758
            ]),
            "1718808" => new Map([
                "name" => "Sampaio",
                "cep" => [ 77980000, 77984999 ],
                "ibge" => 1718808
            ]),
            "1718840" => new Map([
                "name" => "Sandolândia",
                "cep" => [ 77478000, 77479999 ],
                "ibge" => 1718840
            ]),
            "1718865" => new Map([
                "name" => "Santa Fé do Araguaia",
                "cep" => [ 77848000, 77849999 ],
                "ibge" => 1718865
            ]),
            "1718881" => new Map([
                "name" => "Santa Maria do Tocantins",
                "cep" => [ 77716000, 77717999 ],
                "ibge" => 1718881
            ]),
            "1718899" => new Map([
                "name" => "Santa Rita do Tocantins",
                "cep" => [ 77565000, 77569999 ],
                "ibge" => 1718899
            ]),
            "1718907" => new Map([
                "name" => "Santa Rosa do Tocantins",
                "cep" => [ 77375000, 77377999 ],
                "ibge" => 1718907
            ]),
            "1719004" => new Map([
                "name" => "Santa Tereza do Tocantins",
                "cep" => [ 77615000, 77619999 ],
                "ibge" => 1719004
            ]),
            "1720002" => new Map([
                "name" => "Santa Terezinha do Tocantins",
                "cep" => [ 77885000, 77887999 ],
                "ibge" => 1720002
            ]),
            "1720101" => new Map([
                "name" => "São Bento do Tocantins",
                "cep" => [ 77958000, 77959999 ],
                "ibge" => 1720101
            ]),
            "1720150" => new Map([
                "name" => "São Félix do Tocantins",
                "cep" => [ 77605000, 77609999 ],
                "ibge" => 1720150
            ]),
            "1720200" => new Map([
                "name" => "São Miguel do Tocantins",
                "cep" => [ 77925000, 77929999 ],
                "ibge" => 1720200
            ]),
            "1720259" => new Map([
                "name" => "São Salvador do Tocantins",
                "cep" => [ 77368000, 77369999 ],
                "ibge" => 1720259
            ]),
            "1720309" => new Map([
                "name" => "São Sebastião do Tocantins",
                "cep" => [ 77990000, 77992999 ],
                "ibge" => 1720309
            ]),
            "1720499" => new Map([
                "name" => "São Valério da Natividade",
                "cep" => [ 77390000, 77394999 ],
                "ibge" => 1720499
            ]),
            "1720655" => new Map([
                "name" => "Silvanópolis",
                "cep" => [ 77580000, 77584999 ],
                "ibge" => 1720655
            ]),
            "1720804" => new Map([
                "name" => "Sítio Novo do Tocantins",
                "cep" => [ 77940000, 77949999 ],
                "ibge" => 1720804
            ]),
            "1720853" => new Map([
                "name" => "Sucupira",
                "cep" => [ 77458000, 77459999 ],
                "ibge" => 1720853
            ]),
            "1708254" => new Map([
                "name" => "Tabocão",
                "cep" => [ 77708000, 77709999 ],
                "ibge" => 1708254
            ]),
            "1720903" => new Map([
                "name" => "Taguatinga",
                "cep" => [ 77320000, 77324999 ],
                "ibge" => 1720903
            ]),
            "1720937" => new Map([
                "name" => "Taipas do Tocantins",
                "cep" => [ 77308000, 77309999 ],
                "ibge" => 1720937
            ]),
            "1720978" => new Map([
                "name" => "Talismã",
                "cep" => [ 77483000, 77484999 ],
                "ibge" => 1720978
            ]),
            "1721109" => new Map([
                "name" => "Tocantínia",
                "cep" => [ 77640000, 77644999 ],
                "ibge" => 1721109
            ]),
            "1721208" => new Map([
                "name" => "Tocantinópolis",
                "cep" => [ 77900000, 77902999 ],
                "ibge" => 1721208
            ]),
            "1721257" => new Map([
                "name" => "Tupirama",
                "cep" => [ 77704000, 77707999 ],
                "ibge" => 1721257
            ]),
            "1721307" => new Map([
                "name" => "Tupiratins",
                "cep" => [ 77743000, 77744999 ],
                "ibge" => 1721307
            ]),
            "1722081" => new Map([
                "name" => "Wanderlândia",
                "cep" => [ 77860000, 77869999 ],
                "ibge" => 1722081
            ]),
            "1722107" => new Map([
                "name" => "Xambioá",
                "cep" => [ 77880000, 77884999 ],
                "ibge" => 1722107
            ])
        ]);

        return $map;
    }
}