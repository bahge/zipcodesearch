<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class SP implements ICitiesInfo
{
    public static int $numberCities = 645;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(SP::$numberCities);
        $map->putAll([
            "3500105" => new Map([
                "name" => "Adamantina",
                "cep" => [ 17800000, 17809999 ],
                "ibge" => 3500105
            ]),
            "3500204" => new Map([
                "name" => "Adolfo",
                "cep" => [ 15230000, 15239999 ],
                "ibge" => 3500204
            ]),
            "3500303" => new Map([
                "name" => "Aguaí",
                "cep" => [ 13860001, 13869999 ],
                "ibge" => 3500303
            ]),
            "3500402" => new Map([
                "name" => "Águas da Prata",
                "cep" => [ 13890000, 13899999 ],
                "ibge" => 3500402
            ]),
            "3500501" => new Map([
                "name" => "Águas de Lindóia",
                "cep" => [ 13940000, 13949999 ],
                "ibge" => 3500501
            ]),
            "3500550" => new Map([
                "name" => "Águas de Santa Bárbara",
                "cep" => [ 18770000, 18774999 ],
                "ibge" => 3500550
            ]),
            "3500600" => new Map([
                "name" => "Águas de São Pedro",
                "cep" => [ 13525001, 13529999 ],
                "ibge" => 3500600
            ]),
            "3500709" => new Map([
                "name" => "Agudos",
                "cep" => [ 17120001, 17149999 ],
                "ibge" => 3500709
            ]),
            "3500758" => new Map([
                "name" => "Alambari",
                "cep" => [ 18220000, 18224999 ],
                "ibge" => 3500758
            ]),
            "3500808" => new Map([
                "name" => "Alfredo Marcondes",
                "cep" => [ 19180000, 19189999 ],
                "ibge" => 3500808
            ]),
            "3500907" => new Map([
                "name" => "Altair",
                "cep" => [ 15430000, 15439999 ],
                "ibge" => 3500907
            ]),
            "3501004" => new Map([
                "name" => "Altinópolis",
                "cep" => [ 14350000, 14389999 ],
                "ibge" => 3501004
            ]),
            "3501103" => new Map([
                "name" => "Alto Alegre",
                "cep" => [ 16310000, 16339999 ],
                "ibge" => 3501103
            ]),
            "3501152" => new Map([
                "name" => "Alumínio",
                "cep" => [ 18125000, 18129999 ],
                "ibge" => 3501152
            ]),
            "3501202" => new Map([
                "name" => "Álvares Florence",
                "cep" => [ 15540000, 15549999 ],
                "ibge" => 3501202
            ]),
            "3501301" => new Map([
                "name" => "Álvares Machado",
                "cep" => [ 19160000, 19179999 ],
                "ibge" => 3501301
            ]),
            "3501400" => new Map([
                "name" => "Álvaro de Carvalho",
                "cep" => [ 17410001, 17419999 ],
                "ibge" => 3501400
            ]),
            "3501509" => new Map([
                "name" => "Alvinlândia",
                "cep" => [ 17430001, 17439999 ],
                "ibge" => 3501509
            ]),
            "3501608" => new Map([
                "name" => "Americana",
                "cep" => [ 13465001, 13479999 ],
                "ibge" => 3501608
            ]),
            "3501707" => new Map([
                "name" => "Américo Brasiliense",
                "cep" => [ 14820001, 14824999 ],
                "ibge" => 3501707
            ]),
            "3501806" => new Map([
                "name" => "Américo de Campos",
                "cep" => [ 15550000, 15559999 ],
                "ibge" => 3501806
            ]),
            "3501905" => new Map([
                "name" => "Amparo",
                "cep" => [ 13900001, 13909999 ],
                "ibge" => 3501905
            ]),
            "3502002" => new Map([
                "name" => "Analândia",
                "cep" => [ 13550000, 13559999 ],
                "ibge" => 3502002
            ]),
            "3502101" => new Map([
                "name" => "Andradina",
                "cep" => [ 16900001, 16919999 ],
                "ibge" => 3502101
            ]),
            "3502200" => new Map([
                "name" => "Angatuba",
                "cep" => [ 18240000, 18244999 ],
                "ibge" => 3502200
            ]),
            "3502309" => new Map([
                "name" => "Anhembi",
                "cep" => [ 18620001, 18639999 ],
                "ibge" => 3502309
            ]),
            "3502408" => new Map([
                "name" => "Anhumas",
                "cep" => [ 19580000, 19589999 ],
                "ibge" => 3502408
            ]),
            "3502507" => new Map([
                "name" => "Aparecida",
                "cep" => [ 12570001, 12579999 ],
                "ibge" => 3502507
            ]),
            "3502606" => new Map([
                "name" => "Aparecida D'Oeste",
                "cep" => [ 15735000, 15739999 ],
                "ibge" => 3502606
            ]),
            "3502705" => new Map([
                "name" => "Apiaí",
                "cep" => [ 18320000, 18324999 ],
                "ibge" => 3502705
            ]),
            "3502754" => new Map([
                "name" => "Araçariguama",
                "cep" => [ 18147000, 18149999 ],
                "ibge" => 3502754
            ]),
            "3502804" => new Map([
                "name" => "Araçatuba",
                "cep" => [ 16000001, 16129999 ],
                "ibge" => 3502804
            ]),
            "3502903" => new Map([
                "name" => "Araçoiaba da Serra",
                "cep" => [ 18190000, 18194999 ],
                "ibge" => 3502903
            ]),
            "3503000" => new Map([
                "name" => "Aramina",
                "cep" => [ 14550000, 14569999 ],
                "ibge" => 3503000
            ]),
            "3503109" => new Map([
                "name" => "Arandu",
                "cep" => [ 18710001, 18719999 ],
                "ibge" => 3503109
            ]),
            "3503158" => new Map([
                "name" => "Arapeí",
                "cep" => [ 12870000, 12899999 ],
                "ibge" => 3503158
            ]),
            "3503208" => new Map([
                "name" => "Araraquara",
                "cep" => [ 14800001, 14812999 ],
                "ibge" => 3503208
            ]),
            "3503307" => new Map([
                "name" => "Araras",
                "cep" => [ 13600001, 13609999 ],
                "ibge" => 3503307
            ]),
            "3503356" => new Map([
                "name" => "Arco-Íris",
                "cep" => [ 17630000, 17649999 ],
                "ibge" => 3503356
            ]),
            "3503406" => new Map([
                "name" => "Arealva",
                "cep" => [ 17160001, 17179999 ],
                "ibge" => 3503406
            ]),
            "3503505" => new Map([
                "name" => "Areias",
                "cep" => [ 12820000, 12829999 ],
                "ibge" => 3503505
            ]),
            "3503604" => new Map([
                "name" => "Areiópolis",
                "cep" => [ 18670001, 18674999 ],
                "ibge" => 3503604
            ]),
            "3503703" => new Map([
                "name" => "Ariranha",
                "cep" => [ 15960000, 15969999 ],
                "ibge" => 3503703
            ]),
            "3503802" => new Map([
                "name" => "Artur Nogueira",
                "cep" => [ 13160001, 13169999 ],
                "ibge" => 3503802
            ]),
            "3503901" => new Map([
                "name" => "Arujá",
                "cep" => [ 7400001, 7499999 ],
                "ibge" => 3503901
            ]),
            "3503950" => new Map([
                "name" => "Aspásia",
                "cep" => [ 15763000, 15764999 ],
                "ibge" => 3503950
            ]),
            "3504008" => new Map([
                "name" => "Assis",
                "cep" => [ 19800001, 19819999 ],
                "ibge" => 3504008
            ]),
            "3504107" => new Map([
                "name" => "Atibaia",
                "cep" => [ 12940001, 12954999 ],
                "ibge" => 3504107
            ]),
            "3504206" => new Map([
                "name" => "Auriflama",
                "cep" => [ 15350000, 15354999 ],
                "ibge" => 3504206
            ]),
            "3504305" => new Map([
                "name" => "Avaí",
                "cep" => [ 16680000, 16699999 ],
                "ibge" => 3504305
            ]),
            "3504404" => new Map([
                "name" => "Avanhandava",
                "cep" => [ 16360000, 16369999 ],
                "ibge" => 3504404
            ]),
            "3504503" => new Map([
                "name" => "Avaré",
                "cep" => [ 18700001, 18709999 ],
                "ibge" => 3504503
            ]),
            "3504602" => new Map([
                "name" => "Bady Bassitt",
                "cep" => [ 15115000, 15119999 ],
                "ibge" => 3504602
            ]),
            "3504701" => new Map([
                "name" => "Balbinos",
                "cep" => [ 16640001, 16649999 ],
                "ibge" => 3504701
            ]),
            "3504800" => new Map([
                "name" => "Bálsamo",
                "cep" => [ 15140000, 15144999 ],
                "ibge" => 3504800
            ]),
            "3504909" => new Map([
                "name" => "Bananal",
                "cep" => [ 12850000, 12869999 ],
                "ibge" => 3504909
            ]),
            "3505005" => new Map([
                "name" => "Barão de Antonina",
                "cep" => [ 18490000, 18499999 ],
                "ibge" => 3505005
            ]),
            "3505104" => new Map([
                "name" => "Barbosa",
                "cep" => [ 16350000, 16359999 ],
                "ibge" => 3505104
            ]),
            "3505203" => new Map([
                "name" => "Bariri",
                "cep" => [ 17250001, 17259999 ],
                "ibge" => 3505203
            ]),
            "3505302" => new Map([
                "name" => "Barra Bonita",
                "cep" => [ 17340000, 17349999 ],
                "ibge" => 3505302
            ]),
            "3505351" => new Map([
                "name" => "Barra do Chapéu",
                "cep" => [ 18325000, 18329999 ],
                "ibge" => 3505351
            ]),
            "3505401" => new Map([
                "name" => "Barra do Turvo",
                "cep" => [ 11955000, 11959999 ],
                "ibge" => 3505401
            ]),
            "3505500" => new Map([
                "name" => "Barretos",
                "cep" => [ 14780001, 14789999 ],
                "ibge" => 3505500
            ]),
            "3505609" => new Map([
                "name" => "Barrinha",
                "cep" => [ 14860000, 14869999 ],
                "ibge" => 3505609
            ]),
            "3505708" => new Map([
                "name" => "Barueri",
                "cep" => [ 6400001, 6499999 ],
                "ibge" => 3505708
            ]),
            "3505807" => new Map([
                "name" => "Bastos",
                "cep" => [ 17690000, 17699999 ],
                "ibge" => 3505807
            ]),
            "3505906" => new Map([
                "name" => "Batatais",
                "cep" => [ 14300001, 14339999 ],
                "ibge" => 3505906
            ]),
            "3506003" => new Map([
                "name" => "Bauru",
                "cep" => [ 17000001, 17119999 ],
                "ibge" => 3506003
            ]),
            "3506102" => new Map([
                "name" => "Bebedouro",
                "cep" => [ 14700001, 14719999 ],
                "ibge" => 3506102
            ]),
            "3506201" => new Map([
                "name" => "Bento de Abreu",
                "cep" => [ 16790000, 16799999 ],
                "ibge" => 3506201
            ]),
            "3506300" => new Map([
                "name" => "Bernardino de Campos",
                "cep" => [ 18960001, 18969999 ],
                "ibge" => 3506300
            ]),
            "3506359" => new Map([
                "name" => "Bertioga",
                "cep" => [ 11250001, 11299999 ],
                "ibge" => 3506359
            ]),
            "3506409" => new Map([
                "name" => "Bilac",
                "cep" => [ 16210000, 16219999 ],
                "ibge" => 3506409
            ]),
            "3506508" => new Map([
                "name" => "Birigui",
                "cep" => [ 16200001, 16209999 ],
                "ibge" => 3506508
            ]),
            "3506607" => new Map([
                "name" => "Biritiba Mirim",
                "cep" => [ 8940000, 8969999 ],
                "ibge" => 3506607
            ]),
            "3506706" => new Map([
                "name" => "Boa Esperança do Sul",
                "cep" => [ 14930000, 14934999 ],
                "ibge" => 3506706
            ]),
            "3506805" => new Map([
                "name" => "Bocaina",
                "cep" => [ 17240001, 17249999 ],
                "ibge" => 3506805
            ]),
            "3506904" => new Map([
                "name" => "Bofete",
                "cep" => [ 18590000, 18599999 ],
                "ibge" => 3506904
            ]),
            "3507001" => new Map([
                "name" => "Boituva",
                "cep" => [ 18550001, 18559999 ],
                "ibge" => 3507001
            ]),
            "3507100" => new Map([
                "name" => "Bom Jesus dos Perdões",
                "cep" => [ 12955000, 12959999 ],
                "ibge" => 3507100
            ]),
            "3507159" => new Map([
                "name" => "Bom Sucesso de Itararé",
                "cep" => [ 18475000, 18479999 ],
                "ibge" => 3507159
            ]),
            "3507209" => new Map([
                "name" => "Borá",
                "cep" => [ 19740000, 19749999 ],
                "ibge" => 3507209
            ]),
            "3507308" => new Map([
                "name" => "Boracéia",
                "cep" => [ 17270001, 17279999 ],
                "ibge" => 3507308
            ]),
            "3507407" => new Map([
                "name" => "Borborema",
                "cep" => [ 14955000, 14959999 ],
                "ibge" => 3507407
            ]),
            "3507456" => new Map([
                "name" => "Borebi",
                "cep" => [ 18675000, 18679999 ],
                "ibge" => 3507456
            ]),
            "3507506" => new Map([
                "name" => "Botucatu",
                "cep" => [ 18600001, 18619999 ],
                "ibge" => 3507506
            ]),
            "3507605" => new Map([
                "name" => "Bragança Paulista",
                "cep" => [ 12900001, 12929999 ],
                "ibge" => 3507605
            ]),
            "3507704" => new Map([
                "name" => "Braúna",
                "cep" => [ 16290000, 16299999 ],
                "ibge" => 3507704
            ]),
            "3507753" => new Map([
                "name" => "Brejo Alegre",
                "cep" => [ 16265000, 16269999 ],
                "ibge" => 3507753
            ]),
            "3507803" => new Map([
                "name" => "Brodowski",
                "cep" => [ 14340000, 14349999 ],
                "ibge" => 3507803
            ]),
            "3507902" => new Map([
                "name" => "Brotas",
                "cep" => [ 17380000, 17399999 ],
                "ibge" => 3507902
            ]),
            "3508009" => new Map([
                "name" => "Buri",
                "cep" => [ 18290000, 18299999 ],
                "ibge" => 3508009
            ]),
            "3508108" => new Map([
                "name" => "Buritama",
                "cep" => [ 15290000, 15299999 ],
                "ibge" => 3508108
            ]),
            "3508207" => new Map([
                "name" => "Buritizal",
                "cep" => [ 14570000, 14579999 ],
                "ibge" => 3508207
            ]),
            "3508306" => new Map([
                "name" => "Cabrália Paulista",
                "cep" => [ 17480001, 17489999 ],
                "ibge" => 3508306
            ]),
            "3508405" => new Map([
                "name" => "Cabreúva",
                "cep" => [ 13315001, 13319999 ],
                "ibge" => 3508405
            ]),
            "3508504" => new Map([
                "name" => "Caçapava",
                "cep" => [ 12280001, 12299999 ],
                "ibge" => 3508504
            ]),
            "3508603" => new Map([
                "name" => "Cachoeira Paulista",
                "cep" => [ 12630000, 12689999 ],
                "ibge" => 3508603
            ]),
            "3508702" => new Map([
                "name" => "Caconde",
                "cep" => [ 13770000, 13779999 ],
                "ibge" => 3508702
            ]),
            "3508801" => new Map([
                "name" => "Cafelândia",
                "cep" => [ 16500001, 16569999 ],
                "ibge" => 3508801
            ]),
            "3508900" => new Map([
                "name" => "Caiabu",
                "cep" => [ 19530000, 19559999 ],
                "ibge" => 3508900
            ]),
            "3509007" => new Map([
                "name" => "Caieiras",
                "cep" => [ 7700001, 7749999 ],
                "ibge" => 3509007
            ]),
            "3509106" => new Map([
                "name" => "Caiuá",
                "cep" => [ 19450000, 19469999 ],
                "ibge" => 3509106
            ]),
            "3509205" => new Map([
                "name" => "Cajamar",
                "cep" => [ 7750001, 7799999 ],
                "ibge" => 3509205
            ]),
            "3509254" => new Map([
                "name" => "Cajati",
                "cep" => [ 11950000, 11954999 ],
                "ibge" => 3509254
            ]),
            "3509304" => new Map([
                "name" => "Cajobi",
                "cep" => [ 15410000, 15419999 ],
                "ibge" => 3509304
            ]),
            "3509403" => new Map([
                "name" => "Cajuru",
                "cep" => [ 14240000, 14249999 ],
                "ibge" => 3509403
            ]),
            "3509452" => new Map([
                "name" => "Campina do Monte Alegre",
                "cep" => [ 18245000, 18249999 ],
                "ibge" => 3509452
            ]),
            "3509502" => new Map([
                "name" => "Campinas",
                "cep" => [ 13000001, 13139999 ],
                "ibge" => 3509502
            ]),
            "3509601" => new Map([
                "name" => "Campo Limpo Paulista",
                "cep" => [ 13230001, 13239999 ],
                "ibge" => 3509601
            ]),
            "3509700" => new Map([
                "name" => "Campos do Jordão",
                "cep" => [ 12460000, 12489999 ],
                "ibge" => 3509700
            ]),
            "3509809" => new Map([
                "name" => "Campos Novos Paulista",
                "cep" => [ 19960001, 19969999 ],
                "ibge" => 3509809
            ]),
            "3509908" => new Map([
                "name" => "Cananéia",
                "cep" => [ 11990000, 11999999 ],
                "ibge" => 3509908
            ]),
            "3509957" => new Map([
                "name" => "Canas",
                "cep" => [ 12615000, 12619999 ],
                "ibge" => 3509957
            ]),
            "3510005" => new Map([
                "name" => "Cândido Mota",
                "cep" => [ 19880001, 19899999 ],
                "ibge" => 3510005
            ]),
            "3510104" => new Map([
                "name" => "Cândido Rodrigues",
                "cep" => [ 15930000, 15939999 ],
                "ibge" => 3510104
            ]),
            "3510153" => new Map([
                "name" => "Canitar",
                "cep" => [ 18990001, 18999999 ],
                "ibge" => 3510153
            ]),
            "3510203" => new Map([
                "name" => "Capão Bonito",
                "cep" => [ 18300001, 18309999 ],
                "ibge" => 3510203
            ]),
            "3510302" => new Map([
                "name" => "Capela do Alto",
                "cep" => [ 18195000, 18199999 ],
                "ibge" => 3510302
            ]),
            "3510401" => new Map([
                "name" => "Capivari",
                "cep" => [ 13360001, 13369999 ],
                "ibge" => 3510401
            ]),
            "3510500" => new Map([
                "name" => "Caraguatatuba",
                "cep" => [ 11660001, 11679999 ],
                "ibge" => 3510500
            ]),
            "3510609" => new Map([
                "name" => "Carapicuíba",
                "cep" => [ 6300001, 6399999 ],
                "ibge" => 3510609
            ]),
            "3510708" => new Map([
                "name" => "Cardoso",
                "cep" => [ 15570000, 15579999 ],
                "ibge" => 3510708
            ]),
            "3510807" => new Map([
                "name" => "Casa Branca",
                "cep" => [ 13700000, 13709999 ],
                "ibge" => 3510807
            ]),
            "3510906" => new Map([
                "name" => "Cássia dos Coqueiros",
                "cep" => [ 14260000, 14269999 ],
                "ibge" => 3510906
            ]),
            "3511003" => new Map([
                "name" => "Castilho",
                "cep" => [ 16920000, 16939999 ],
                "ibge" => 3511003
            ]),
            "3511102" => new Map([
                "name" => "Catanduva",
                "cep" => [ 15800001, 15819999 ],
                "ibge" => 3511102
            ]),
            "3511201" => new Map([
                "name" => "Catiguá",
                "cep" => [ 15870000, 15879999 ],
                "ibge" => 3511201
            ]),
            "3511300" => new Map([
                "name" => "Cedral",
                "cep" => [ 15895000, 15899999 ],
                "ibge" => 3511300
            ]),
            "3511409" => new Map([
                "name" => "Cerqueira César",
                "cep" => [ 18760001, 18769999 ],
                "ibge" => 3511409
            ]),
            "3511508" => new Map([
                "name" => "Cerquilho",
                "cep" => [ 18520001, 18529999 ],
                "ibge" => 3511508
            ]),
            "3511607" => new Map([
                "name" => "Cesário Lange",
                "cep" => [ 18285000, 18289999 ],
                "ibge" => 3511607
            ]),
            "3511706" => new Map([
                "name" => "Charqueada",
                "cep" => [ 13515001, 13519999 ],
                "ibge" => 3511706
            ]),
            "3557204" => new Map([
                "name" => "Chavantes",
                "cep" => [ 18970001, 18989999 ],
                "ibge" => 3557204
            ]),
            "3511904" => new Map([
                "name" => "Clementina",
                "cep" => [ 16250000, 16259999 ],
                "ibge" => 3511904
            ]),
            "3512001" => new Map([
                "name" => "Colina",
                "cep" => [ 14770000, 14774999 ],
                "ibge" => 3512001
            ]),
            "3512100" => new Map([
                "name" => "Colômbia",
                "cep" => [ 14795000, 14799999 ],
                "ibge" => 3512100
            ]),
            "3512209" => new Map([
                "name" => "Conchal",
                "cep" => [ 13835000, 13839999 ],
                "ibge" => 3512209
            ]),
            "3512308" => new Map([
                "name" => "Conchas",
                "cep" => [ 18570000, 18579999 ],
                "ibge" => 3512308
            ]),
            "3512407" => new Map([
                "name" => "Cordeirópolis",
                "cep" => [ 13490000, 13494999 ],
                "ibge" => 3512407
            ]),
            "3512506" => new Map([
                "name" => "Coroados",
                "cep" => [ 16260000, 16264999 ],
                "ibge" => 3512506
            ]),
            "3512605" => new Map([
                "name" => "Coronel Macedo",
                "cep" => [ 18745000, 18759999 ],
                "ibge" => 3512605
            ]),
            "3512704" => new Map([
                "name" => "Corumbataí",
                "cep" => [ 13540000, 13549999 ],
                "ibge" => 3512704
            ]),
            "3512803" => new Map([
                "name" => "Cosmópolis",
                "cep" => [ 13150001, 13159999 ],
                "ibge" => 3512803
            ]),
            "3512902" => new Map([
                "name" => "Cosmorama",
                "cep" => [ 15530000, 15539999 ],
                "ibge" => 3512902
            ]),
            "3513009" => new Map([
                "name" => "Cotia",
                "cep" => [ 6700001, 6729999 ],
                "ibge" => 3513009
            ]),
            "3513108" => new Map([
                "name" => "Cravinhos",
                "cep" => [ 14140000, 14149999 ],
                "ibge" => 3513108
            ]),
            "3513207" => new Map([
                "name" => "Cristais Paulista",
                "cep" => [ 14460000, 14469999 ],
                "ibge" => 3513207
            ]),
            "3513306" => new Map([
                "name" => "Cruzália",
                "cep" => [ 19860001, 19864999 ],
                "ibge" => 3513306
            ]),
            "3513405" => new Map([
                "name" => "Cruzeiro",
                "cep" => [ 12700001, 12759999 ],
                "ibge" => 3513405
            ]),
            "3513504" => new Map([
                "name" => "Cubatão",
                "cep" => [ 11500001, 11599999 ],
                "ibge" => 3513504
            ]),
            "3513603" => new Map([
                "name" => "Cunha",
                "cep" => [ 12530000, 12569999 ],
                "ibge" => 3513603
            ]),
            "3513702" => new Map([
                "name" => "Descalvado",
                "cep" => [ 13690000, 13699999 ],
                "ibge" => 3513702
            ]),
            "3513801" => new Map([
                "name" => "Diadema",
                "cep" => [ 9900001, 9999999 ],
                "ibge" => 3513801
            ]),
            "3513850" => new Map([
                "name" => "Dirce Reis",
                "cep" => [ 15715000, 15717999 ],
                "ibge" => 3513850
            ]),
            "3513900" => new Map([
                "name" => "Divinolândia",
                "cep" => [ 13780000, 13789999 ],
                "ibge" => 3513900
            ]),
            "3514007" => new Map([
                "name" => "Dobrada",
                "cep" => [ 15980000, 15989999 ],
                "ibge" => 3514007
            ]),
            "3514106" => new Map([
                "name" => "Dois Córregos",
                "cep" => [ 17300001, 17319999 ],
                "ibge" => 3514106
            ]),
            "3514205" => new Map([
                "name" => "Dolcinópolis",
                "cep" => [ 15740000, 15744999 ],
                "ibge" => 3514205
            ]),
            "3514304" => new Map([
                "name" => "Dourado",
                "cep" => [ 13590000, 13599999 ],
                "ibge" => 3514304
            ]),
            "3514403" => new Map([
                "name" => "Dracena",
                "cep" => [ 17900000, 17919999 ],
                "ibge" => 3514403
            ]),
            "3514502" => new Map([
                "name" => "Duartina",
                "cep" => [ 17470000, 17474999 ],
                "ibge" => 3514502
            ]),
            "3514601" => new Map([
                "name" => "Dumont",
                "cep" => [ 14120000, 14139999 ],
                "ibge" => 3514601
            ]),
            "3514700" => new Map([
                "name" => "Echaporã",
                "cep" => [ 19830001, 19839999 ],
                "ibge" => 3514700
            ]),
            "3514809" => new Map([
                "name" => "Eldorado",
                "cep" => [ 11960000, 11989999 ],
                "ibge" => 3514809
            ]),
            "3514908" => new Map([
                "name" => "Elias Fausto",
                "cep" => [ 13350000, 13359999 ],
                "ibge" => 3514908
            ]),
            "3514924" => new Map([
                "name" => "Elisiário",
                "cep" => [ 15823000, 15824999 ],
                "ibge" => 3514924
            ]),
            "3514957" => new Map([
                "name" => "Embaúba",
                "cep" => [ 15425000, 15429999 ],
                "ibge" => 3514957
            ]),
            "3515004" => new Map([
                "name" => "Embu das Artes",
                "cep" => [ 6800001, 6849999 ],
                "ibge" => 3515004
            ]),
            "3515103" => new Map([
                "name" => "Embu-Guaçu",
                "cep" => [ 6900001, 6949999 ],
                "ibge" => 3515103
            ]),
            "3515129" => new Map([
                "name" => "Emilianópolis",
                "cep" => [ 19350000, 19359999 ],
                "ibge" => 3515129
            ]),
            "3515152" => new Map([
                "name" => "Engenheiro Coelho",
                "cep" => [ 13445001, 13449999 ],
                "ibge" => 3515152
            ]),
            "3515186" => new Map([
                "name" => "Espírito Santo do Pinhal",
                "cep" => [ 13990000, 13994999 ],
                "ibge" => 3515186
            ]),
            "3515194" => new Map([
                "name" => "Espírito Santo do Turvo",
                "cep" => [ 18935001, 18939999 ],
                "ibge" => 3515194
            ]),
            "3557303" => new Map([
                "name" => "Estiva Gerbi",
                "cep" => [ 13857000, 13859999 ],
                "ibge" => 3557303
            ]),
            "3515301" => new Map([
                "name" => "Estrela do Norte",
                "cep" => [ 19230000, 19249999 ],
                "ibge" => 3515301
            ]),
            "3515202" => new Map([
                "name" => "Estrela D'Oeste",
                "cep" => [ 15650000, 15669999 ],
                "ibge" => 3515202
            ]),
            "3515350" => new Map([
                "name" => "Euclides da Cunha Paulista",
                "cep" => [ 19275000, 19279999 ],
                "ibge" => 3515350
            ]),
            "3515400" => new Map([
                "name" => "Fartura",
                "cep" => [ 18870001, 18889999 ],
                "ibge" => 3515400
            ]),
            "3515608" => new Map([
                "name" => "Fernando Prestes",
                "cep" => [ 15940000, 15949999 ],
                "ibge" => 3515608
            ]),
            "3515509" => new Map([
                "name" => "Fernandópolis",
                "cep" => [ 15600001, 15619999 ],
                "ibge" => 3515509
            ]),
            "3515657" => new Map([
                "name" => "Fernão",
                "cep" => [ 17460001, 17469999 ],
                "ibge" => 3515657
            ]),
            "3515707" => new Map([
                "name" => "Ferraz de Vasconcelos",
                "cep" => [ 8500001, 8549999 ],
                "ibge" => 3515707
            ]),
            "3515806" => new Map([
                "name" => "Flora Rica",
                "cep" => [ 17870000, 17879999 ],
                "ibge" => 3515806
            ]),
            "3515905" => new Map([
                "name" => "Floreal",
                "cep" => [ 15320000, 15329999 ],
                "ibge" => 3515905
            ]),
            "3516002" => new Map([
                "name" => "Flórida Paulista",
                "cep" => [ 17830000, 17859999 ],
                "ibge" => 3516002
            ]),
            "3516101" => new Map([
                "name" => "Florínea",
                "cep" => [ 19870001, 19879999 ],
                "ibge" => 3516101
            ]),
            "3516200" => new Map([
                "name" => "Franca",
                "cep" => [ 14400001, 14414999 ],
                "ibge" => 3516200
            ]),
            "3516309" => new Map([
                "name" => "Francisco Morato",
                "cep" => [ 7900001, 7999999 ],
                "ibge" => 3516309
            ]),
            "3516408" => new Map([
                "name" => "Franco da Rocha",
                "cep" => [ 7800001, 7899999 ],
                "ibge" => 3516408
            ]),
            "3516507" => new Map([
                "name" => "Gabriel Monteiro",
                "cep" => [ 16220000, 16229999 ],
                "ibge" => 3516507
            ]),
            "3516606" => new Map([
                "name" => "Gália",
                "cep" => [ 17450001, 17459999 ],
                "ibge" => 3516606
            ]),
            "3516705" => new Map([
                "name" => "Garça",
                "cep" => [ 17400000, 17409999 ],
                "ibge" => 3516705
            ]),
            "3516804" => new Map([
                "name" => "Gastão Vidigal",
                "cep" => [ 15330000, 15339999 ],
                "ibge" => 3516804
            ]),
            "3516853" => new Map([
                "name" => "Gavião Peixoto",
                "cep" => [ 14813000, 14814999 ],
                "ibge" => 3516853
            ]),
            "3516903" => new Map([
                "name" => "General Salgado",
                "cep" => [ 15300000, 15309999 ],
                "ibge" => 3516903
            ]),
            "3517000" => new Map([
                "name" => "Getulina",
                "cep" => [ 16450000, 16479999 ],
                "ibge" => 3517000
            ]),
            "3517109" => new Map([
                "name" => "Glicério",
                "cep" => [ 16270000, 16289999 ],
                "ibge" => 3517109
            ]),
            "3517208" => new Map([
                "name" => "Guaiçara",
                "cep" => [ 16430000, 16439999 ],
                "ibge" => 3517208
            ]),
            "3517307" => new Map([
                "name" => "Guaimbê",
                "cep" => [ 16480001, 16499999 ],
                "ibge" => 3517307
            ]),
            "3517406" => new Map([
                "name" => "Guaíra",
                "cep" => [ 14790000, 14794999 ],
                "ibge" => 3517406
            ]),
            "3517505" => new Map([
                "name" => "Guapiaçu",
                "cep" => [ 15110000, 15114999 ],
                "ibge" => 3517505
            ]),
            "3517604" => new Map([
                "name" => "Guapiara",
                "cep" => [ 18310000, 18314999 ],
                "ibge" => 3517604
            ]),
            "3517703" => new Map([
                "name" => "Guará",
                "cep" => [ 14580000, 14599999 ],
                "ibge" => 3517703
            ]),
            "3517802" => new Map([
                "name" => "Guaraçaí",
                "cep" => [ 16980000, 16999999 ],
                "ibge" => 3517802
            ]),
            "3517901" => new Map([
                "name" => "Guaraci",
                "cep" => [ 15420000, 15424999 ],
                "ibge" => 3517901
            ]),
            "3518008" => new Map([
                "name" => "Guarani D'Oeste",
                "cep" => [ 15680000, 15684999 ],
                "ibge" => 3518008
            ]),
            "3518107" => new Map([
                "name" => "Guarantã",
                "cep" => [ 16570000, 16599999 ],
                "ibge" => 3518107
            ]),
            "3518206" => new Map([
                "name" => "Guararapes",
                "cep" => [ 16700000, 16749999 ],
                "ibge" => 3518206
            ]),
            "3518305" => new Map([
                "name" => "Guararema",
                "cep" => [ 8900000, 8939999 ],
                "ibge" => 3518305
            ]),
            "3518404" => new Map([
                "name" => "Guaratinguetá",
                "cep" => [ 12500001, 12524999 ],
                "ibge" => 3518404
            ]),
            "3518503" => new Map([
                "name" => "Guareí",
                "cep" => [ 18250000, 18254999 ],
                "ibge" => 3518503
            ]),
            "3518602" => new Map([
                "name" => "Guariba",
                "cep" => [ 14840000, 14849999 ],
                "ibge" => 3518602
            ]),
            "3518701" => new Map([
                "name" => "Guarujá",
                "cep" => [ 11400001, 11499999 ],
                "ibge" => 3518701
            ]),
            "3518800" => new Map([
                "name" => "Guarulhos",
                "cep" => [ 7000001, 7399999 ],
                "ibge" => 3518800
            ]),
            "3518859" => new Map([
                "name" => "Guatapará",
                "cep" => [ 14115000, 14119999 ],
                "ibge" => 3518859
            ]),
            "3518909" => new Map([
                "name" => "Guzolândia",
                "cep" => [ 15355000, 15359999 ],
                "ibge" => 3518909
            ]),
            "3519006" => new Map([
                "name" => "Herculândia",
                "cep" => [ 17650000, 17669999 ],
                "ibge" => 3519006
            ]),
            "3519055" => new Map([
                "name" => "Holambra",
                "cep" => [ 13825000, 13829999 ],
                "ibge" => 3519055
            ]),
            "3519071" => new Map([
                "name" => "Hortolândia",
                "cep" => [ 13183001, 13189999 ],
                "ibge" => 3519071
            ]),
            "3519105" => new Map([
                "name" => "Iacanga",
                "cep" => [ 17180001, 17189999 ],
                "ibge" => 3519105
            ]),
            "3519204" => new Map([
                "name" => "Iacri",
                "cep" => [ 17680000, 17689999 ],
                "ibge" => 3519204
            ]),
            "3519253" => new Map([
                "name" => "Iaras",
                "cep" => [ 18775001, 18779999 ],
                "ibge" => 3519253
            ]),
            "3519303" => new Map([
                "name" => "Ibaté",
                "cep" => [ 14815000, 14819999 ],
                "ibge" => 3519303
            ]),
            "3519402" => new Map([
                "name" => "Ibirá",
                "cep" => [ 15860000, 15869999 ],
                "ibge" => 3519402
            ]),
            "3519501" => new Map([
                "name" => "Ibirarema",
                "cep" => [ 19940000, 19959999 ],
                "ibge" => 3519501
            ]),
            "3519600" => new Map([
                "name" => "Ibitinga",
                "cep" => [ 14940001, 14954999 ],
                "ibge" => 3519600
            ]),
            "3519709" => new Map([
                "name" => "Ibiúna",
                "cep" => [ 18150000, 18159999 ],
                "ibge" => 3519709
            ]),
            "3519808" => new Map([
                "name" => "Icém",
                "cep" => [ 15460000, 15469999 ],
                "ibge" => 3519808
            ]),
            "3519907" => new Map([
                "name" => "Iepê",
                "cep" => [ 19640001, 19649999 ],
                "ibge" => 3519907
            ]),
            "3520004" => new Map([
                "name" => "Igaraçu do Tietê",
                "cep" => [ 17350000, 17359999 ],
                "ibge" => 3520004
            ]),
            "3520103" => new Map([
                "name" => "Igarapava",
                "cep" => [ 14540000, 14549999 ],
                "ibge" => 3520103
            ]),
            "3520202" => new Map([
                "name" => "Igaratá",
                "cep" => [ 12350000, 12379999 ],
                "ibge" => 3520202
            ]),
            "3520301" => new Map([
                "name" => "Iguape",
                "cep" => [ 11920000, 11924999 ],
                "ibge" => 3520301
            ]),
            "3520426" => new Map([
                "name" => "Ilha Comprida",
                "cep" => [ 11925000, 11929999 ],
                "ibge" => 3520426
            ]),
            "3520442" => new Map([
                "name" => "Ilha Solteira",
                "cep" => [ 15385000, 15389999 ],
                "ibge" => 3520442
            ]),
            "3520400" => new Map([
                "name" => "Ilhabela",
                "cep" => [ 11630000, 11659999 ],
                "ibge" => 3520400
            ]),
            "3520509" => new Map([
                "name" => "Indaiatuba",
                "cep" => [ 13330001, 13349999 ],
                "ibge" => 3520509
            ]),
            "3520608" => new Map([
                "name" => "Indiana",
                "cep" => [ 19560000, 19569999 ],
                "ibge" => 3520608
            ]),
            "3520707" => new Map([
                "name" => "Indiaporã",
                "cep" => [ 15690000, 15699999 ],
                "ibge" => 3520707
            ]),
            "3520806" => new Map([
                "name" => "Inúbia Paulista",
                "cep" => [ 17760000, 17779999 ],
                "ibge" => 3520806
            ]),
            "3520905" => new Map([
                "name" => "Ipaussu",
                "cep" => [ 18950001, 18959999 ],
                "ibge" => 3520905
            ]),
            "3521002" => new Map([
                "name" => "Iperó",
                "cep" => [ 18560000, 18569999 ],
                "ibge" => 3521002
            ]),
            "3521101" => new Map([
                "name" => "Ipeúna",
                "cep" => [ 13537000, 13539999 ],
                "ibge" => 3521101
            ]),
            "3521150" => new Map([
                "name" => "Ipiguá",
                "cep" => [ 15108000, 15109999 ],
                "ibge" => 3521150
            ]),
            "3521200" => new Map([
                "name" => "Iporanga",
                "cep" => [ 18330000, 18359999 ],
                "ibge" => 3521200
            ]),
            "3521309" => new Map([
                "name" => "Ipuã",
                "cep" => [ 14610000, 14619999 ],
                "ibge" => 3521309
            ]),
            "3521408" => new Map([
                "name" => "Iracemápolis",
                "cep" => [ 13495001, 13499999 ],
                "ibge" => 3521408
            ]),
            "3521507" => new Map([
                "name" => "Irapuã",
                "cep" => [ 14990000, 14999999 ],
                "ibge" => 3521507
            ]),
            "3521606" => new Map([
                "name" => "Irapuru",
                "cep" => [ 17880000, 17889999 ],
                "ibge" => 3521606
            ]),
            "3521705" => new Map([
                "name" => "Itaberá",
                "cep" => [ 18440000, 18459999 ],
                "ibge" => 3521705
            ]),
            "3521804" => new Map([
                "name" => "Itaí",
                "cep" => [ 18730001, 18739999 ],
                "ibge" => 3521804
            ]),
            "3521903" => new Map([
                "name" => "Itajobi",
                "cep" => [ 15840000, 15844999 ],
                "ibge" => 3521903
            ]),
            "3522000" => new Map([
                "name" => "Itaju",
                "cep" => [ 17260001, 17269999 ],
                "ibge" => 3522000
            ]),
            "3522109" => new Map([
                "name" => "Itanhaém",
                "cep" => [ 11740000, 11749999 ],
                "ibge" => 3522109
            ]),
            "3522158" => new Map([
                "name" => "Itaóca",
                "cep" => [ 18360000, 18379999 ],
                "ibge" => 3522158
            ]),
            "3522208" => new Map([
                "name" => "Itapecerica da Serra",
                "cep" => [ 6850001, 6889999 ],
                "ibge" => 3522208
            ]),
            "3522307" => new Map([
                "name" => "Itapetininga",
                "cep" => [ 18200001, 18219999 ],
                "ibge" => 3522307
            ]),
            "3522406" => new Map([
                "name" => "Itapeva",
                "cep" => [ 18400001, 18424999 ],
                "ibge" => 3522406
            ]),
            "3522505" => new Map([
                "name" => "Itapevi",
                "cep" => [ 6650001, 6699999 ],
                "ibge" => 3522505
            ]),
            "3522604" => new Map([
                "name" => "Itapira",
                "cep" => [ 13970001, 13989999 ],
                "ibge" => 3522604
            ]),
            "3522653" => new Map([
                "name" => "Itapirapuã Paulista",
                "cep" => [ 18385000, 18399999 ],
                "ibge" => 3522653
            ]),
            "3522703" => new Map([
                "name" => "Itápolis",
                "cep" => [ 14900000, 14909999 ],
                "ibge" => 3522703
            ]),
            "3522802" => new Map([
                "name" => "Itaporanga",
                "cep" => [ 18480000, 18489999 ],
                "ibge" => 3522802
            ]),
            "3522901" => new Map([
                "name" => "Itapuí",
                "cep" => [ 17230001, 17239999 ],
                "ibge" => 3522901
            ]),
            "3523008" => new Map([
                "name" => "Itapura",
                "cep" => [ 15390000, 15399999 ],
                "ibge" => 3523008
            ]),
            "3523107" => new Map([
                "name" => "Itaquaquecetuba",
                "cep" => [ 8570001, 8599999 ],
                "ibge" => 3523107
            ]),
            "3523206" => new Map([
                "name" => "Itararé",
                "cep" => [ 18460001, 18469999 ],
                "ibge" => 3523206
            ]),
            "3523305" => new Map([
                "name" => "Itariri",
                "cep" => [ 11760000, 11769999 ],
                "ibge" => 3523305
            ]),
            "3523404" => new Map([
                "name" => "Itatiba",
                "cep" => [ 13250001, 13259999 ],
                "ibge" => 3523404
            ]),
            "3523503" => new Map([
                "name" => "Itatinga",
                "cep" => [ 18690000, 18699999 ],
                "ibge" => 3523503
            ]),
            "3523602" => new Map([
                "name" => "Itirapina",
                "cep" => [ 13530000, 13536999 ],
                "ibge" => 3523602
            ]),
            "3523701" => new Map([
                "name" => "Itirapuã",
                "cep" => [ 14420000, 14429999 ],
                "ibge" => 3523701
            ]),
            "3523800" => new Map([
                "name" => "Itobi",
                "cep" => [ 13715000, 13719999 ],
                "ibge" => 3523800
            ]),
            "3523909" => new Map([
                "name" => "Itu",
                "cep" => [ 13300001, 13314999 ],
                "ibge" => 3523909
            ]),
            "3524006" => new Map([
                "name" => "Itupeva",
                "cep" => [ 13295001, 13299999 ],
                "ibge" => 3524006
            ]),
            "3524105" => new Map([
                "name" => "Ituverava",
                "cep" => [ 14500000, 14529999 ],
                "ibge" => 3524105
            ]),
            "3524204" => new Map([
                "name" => "Jaborandi",
                "cep" => [ 14775000, 14779999 ],
                "ibge" => 3524204
            ]),
            "3524303" => new Map([
                "name" => "Jaboticabal",
                "cep" => [ 14870001, 14899999 ],
                "ibge" => 3524303
            ]),
            "3524402" => new Map([
                "name" => "Jacareí",
                "cep" => [ 12300001, 12349999 ],
                "ibge" => 3524402
            ]),
            "3524501" => new Map([
                "name" => "Jaci",
                "cep" => [ 15155000, 15159999 ],
                "ibge" => 3524501
            ]),
            "3524600" => new Map([
                "name" => "Jacupiranga",
                "cep" => [ 11940000, 11949999 ],
                "ibge" => 3524600
            ]),
            "3524709" => new Map([
                "name" => "Jaguariúna",
                "cep" => [ 13910001, 13919999 ],
                "ibge" => 3524709
            ]),
            "3524808" => new Map([
                "name" => "Jales",
                "cep" => [ 15700001, 15709999 ],
                "ibge" => 3524808
            ]),
            "3524907" => new Map([
                "name" => "Jambeiro",
                "cep" => [ 12270000, 12279999 ],
                "ibge" => 3524907
            ]),
            "3525003" => new Map([
                "name" => "Jandira",
                "cep" => [ 6600001, 6649999 ],
                "ibge" => 3525003
            ]),
            "3525102" => new Map([
                "name" => "Jardinópolis",
                "cep" => [ 14680000, 14699999 ],
                "ibge" => 3525102
            ]),
            "3525201" => new Map([
                "name" => "Jarinu",
                "cep" => [ 13240000, 13249999 ],
                "ibge" => 3525201
            ]),
            "3525300" => new Map([
                "name" => "Jaú",
                "cep" => [ 17200001, 17229999 ],
                "ibge" => 3525300
            ]),
            "3525409" => new Map([
                "name" => "Jeriquara",
                "cep" => [ 14450000, 14459999 ],
                "ibge" => 3525409
            ]),
            "3525508" => new Map([
                "name" => "Joanópolis",
                "cep" => [ 12980000, 12989999 ],
                "ibge" => 3525508
            ]),
            "3525607" => new Map([
                "name" => "João Ramalho",
                "cep" => [ 19680001, 19699999 ],
                "ibge" => 3525607
            ]),
            "3525706" => new Map([
                "name" => "José Bonifácio",
                "cep" => [ 15200000, 15209999 ],
                "ibge" => 3525706
            ]),
            "3525805" => new Map([
                "name" => "Júlio Mesquita",
                "cep" => [ 17550000, 17559999 ],
                "ibge" => 3525805
            ]),
            "3525854" => new Map([
                "name" => "Jumirim",
                "cep" => [ 18535000, 18539999 ],
                "ibge" => 3525854
            ]),
            "3525904" => new Map([
                "name" => "Jundiaí",
                "cep" => [ 13200001, 13219999 ],
                "ibge" => 3525904
            ]),
            "3526001" => new Map([
                "name" => "Junqueirópolis",
                "cep" => [ 17890000, 17899999 ],
                "ibge" => 3526001
            ]),
            "3526100" => new Map([
                "name" => "Juquiá",
                "cep" => [ 11800000, 11849999 ],
                "ibge" => 3526100
            ]),
            "3526209" => new Map([
                "name" => "Juquitiba",
                "cep" => [ 6950000, 6999999 ],
                "ibge" => 3526209
            ]),
            "3526308" => new Map([
                "name" => "Lagoinha",
                "cep" => [ 12130000, 12139999 ],
                "ibge" => 3526308
            ]),
            "3526407" => new Map([
                "name" => "Laranjal Paulista",
                "cep" => [ 18500000, 18519999 ],
                "ibge" => 3526407
            ]),
            "3526506" => new Map([
                "name" => "Lavínia",
                "cep" => [ 16850000, 16879999 ],
                "ibge" => 3526506
            ]),
            "3526605" => new Map([
                "name" => "Lavrinhas",
                "cep" => [ 12760000, 12799999 ],
                "ibge" => 3526605
            ]),
            "3526704" => new Map([
                "name" => "Leme",
                "cep" => [ 13610001, 13624999 ],
                "ibge" => 3526704
            ]),
            "3526803" => new Map([
                "name" => "Lençóis Paulista",
                "cep" => [ 18680001, 18689999 ],
                "ibge" => 3526803
            ]),
            "3526902" => new Map([
                "name" => "Limeira",
                "cep" => [ 13480001, 13489999 ],
                "ibge" => 3526902
            ]),
            "3527009" => new Map([
                "name" => "Lindóia",
                "cep" => [ 13950000, 13959999 ],
                "ibge" => 3527009
            ]),
            "3527108" => new Map([
                "name" => "Lins",
                "cep" => [ 16400001, 16429999 ],
                "ibge" => 3527108
            ]),
            "3527207" => new Map([
                "name" => "Lorena",
                "cep" => [ 12600001, 12614999 ],
                "ibge" => 3527207
            ]),
            "3527256" => new Map([
                "name" => "Lourdes",
                "cep" => [ 15285000, 15289999 ],
                "ibge" => 3527256
            ]),
            "3527306" => new Map([
                "name" => "Louveira",
                "cep" => [ 13290001, 13294999 ],
                "ibge" => 3527306
            ]),
            "3527405" => new Map([
                "name" => "Lucélia",
                "cep" => [ 17780000, 17789999 ],
                "ibge" => 3527405
            ]),
            "3527504" => new Map([
                "name" => "Lucianópolis",
                "cep" => [ 17475001, 17479999 ],
                "ibge" => 3527504
            ]),
            "3527603" => new Map([
                "name" => "Luís Antônio",
                "cep" => [ 14210000, 14229999 ],
                "ibge" => 3527603
            ]),
            "3527702" => new Map([
                "name" => "Luiziânia",
                "cep" => [ 16340000, 16349999 ],
                "ibge" => 3527702
            ]),
            "3527801" => new Map([
                "name" => "Lupércio",
                "cep" => [ 17420001, 17429999 ],
                "ibge" => 3527801
            ]),
            "3527900" => new Map([
                "name" => "Lutécia",
                "cep" => [ 19750000, 19769999 ],
                "ibge" => 3527900
            ]),
            "3528007" => new Map([
                "name" => "Macatuba",
                "cep" => [ 17290001, 17299999 ],
                "ibge" => 3528007
            ]),
            "3528106" => new Map([
                "name" => "Macaubal",
                "cep" => [ 15270000, 15274999 ],
                "ibge" => 3528106
            ]),
            "3528205" => new Map([
                "name" => "Macedônia",
                "cep" => [ 15620000, 15624999 ],
                "ibge" => 3528205
            ]),
            "3528304" => new Map([
                "name" => "Magda",
                "cep" => [ 15310000, 15312999 ],
                "ibge" => 3528304
            ]),
            "3528403" => new Map([
                "name" => "Mairinque",
                "cep" => [ 18120000, 18124999 ],
                "ibge" => 3528403
            ]),
            "3528502" => new Map([
                "name" => "Mairiporã",
                "cep" => [ 7600001, 7699999 ],
                "ibge" => 3528502
            ]),
            "3528601" => new Map([
                "name" => "Manduri",
                "cep" => [ 18780000, 18789999 ],
                "ibge" => 3528601
            ]),
            "3528700" => new Map([
                "name" => "Marabá Paulista",
                "cep" => [ 19430000, 19449999 ],
                "ibge" => 3528700
            ]),
            "3528809" => new Map([
                "name" => "Maracaí",
                "cep" => [ 19840000, 19859999 ],
                "ibge" => 3528809
            ]),
            "3528858" => new Map([
                "name" => "Marapoama",
                "cep" => [ 15845000, 15849999 ],
                "ibge" => 3528858
            ]),
            "3528908" => new Map([
                "name" => "Mariápolis",
                "cep" => [ 17810000, 17829999 ],
                "ibge" => 3528908
            ]),
            "3529005" => new Map([
                "name" => "Marília",
                "cep" => [ 17500001, 17539999 ],
                "ibge" => 3529005
            ]),
            "3529104" => new Map([
                "name" => "Marinópolis",
                "cep" => [ 15730000, 15734999 ],
                "ibge" => 3529104
            ]),
            "3529203" => new Map([
                "name" => "Martinópolis",
                "cep" => [ 19500000, 19529999 ],
                "ibge" => 3529203
            ]),
            "3529302" => new Map([
                "name" => "Matão",
                "cep" => [ 15990001, 15999999 ],
                "ibge" => 3529302
            ]),
            "3529401" => new Map([
                "name" => "Mauá",
                "cep" => [ 9300001, 9399999 ],
                "ibge" => 3529401
            ]),
            "3529500" => new Map([
                "name" => "Mendonça",
                "cep" => [ 15220000, 15224999 ],
                "ibge" => 3529500
            ]),
            "3529609" => new Map([
                "name" => "Meridiano",
                "cep" => [ 15625000, 15629999 ],
                "ibge" => 3529609
            ]),
            "3529658" => new Map([
                "name" => "Mesópolis",
                "cep" => [ 15748000, 15749999 ],
                "ibge" => 3529658
            ]),
            "3529708" => new Map([
                "name" => "Miguelópolis",
                "cep" => [ 14530000, 14539999 ],
                "ibge" => 3529708
            ]),
            "3529807" => new Map([
                "name" => "Mineiros do Tietê",
                "cep" => [ 17320001, 17339999 ],
                "ibge" => 3529807
            ]),
            "3530003" => new Map([
                "name" => "Mira Estrela",
                "cep" => [ 15580000, 15599999 ],
                "ibge" => 3530003
            ]),
            "3529906" => new Map([
                "name" => "Miracatu",
                "cep" => [ 11850000, 11899999 ],
                "ibge" => 3529906
            ]),
            "3530102" => new Map([
                "name" => "Mirandópolis",
                "cep" => [ 16800000, 16849999 ],
                "ibge" => 3530102
            ]),
            "3530201" => new Map([
                "name" => "Mirante do Paranapanema",
                "cep" => [ 19260000, 19272999 ],
                "ibge" => 3530201
            ]),
            "3530300" => new Map([
                "name" => "Mirassol",
                "cep" => [ 15130001, 15139999 ],
                "ibge" => 3530300
            ]),
            "3530409" => new Map([
                "name" => "Mirassolândia",
                "cep" => [ 15145000, 15149999 ],
                "ibge" => 3530409
            ]),
            "3530508" => new Map([
                "name" => "Mococa",
                "cep" => [ 13730001, 13759999 ],
                "ibge" => 3530508
            ]),
            "3530607" => new Map([
                "name" => "Mogi das Cruzes",
                "cep" => [ 8700001, 8899999 ],
                "ibge" => 3530607
            ]),
            "3530706" => new Map([
                "name" => "Mogi Guaçu",
                "cep" => [ 13840001, 13856999 ],
                "ibge" => 3530706
            ]),
            "3530805" => new Map([
                "name" => "Mogi Mirim",
                "cep" => [ 13800001, 13819999 ],
                "ibge" => 3530805
            ]),
            "3530904" => new Map([
                "name" => "Mombuca",
                "cep" => [ 13375000, 13379999 ],
                "ibge" => 3530904
            ]),
            "3531001" => new Map([
                "name" => "Monções",
                "cep" => [ 15275000, 15279999 ],
                "ibge" => 3531001
            ]),
            "3531100" => new Map([
                "name" => "Mongaguá",
                "cep" => [ 11730000, 11739999 ],
                "ibge" => 3531100
            ]),
            "3531209" => new Map([
                "name" => "Monte Alegre do Sul",
                "cep" => [ 13820000, 13824999 ],
                "ibge" => 3531209
            ]),
            "3531308" => new Map([
                "name" => "Monte Alto",
                "cep" => [ 15910000, 15919999 ],
                "ibge" => 3531308
            ]),
            "3531407" => new Map([
                "name" => "Monte Aprazível",
                "cep" => [ 15150000, 15154999 ],
                "ibge" => 3531407
            ]),
            "3531506" => new Map([
                "name" => "Monte Azul Paulista",
                "cep" => [ 14730000, 14734999 ],
                "ibge" => 3531506
            ]),
            "3531605" => new Map([
                "name" => "Monte Castelo",
                "cep" => [ 17960000, 17969999 ],
                "ibge" => 3531605
            ]),
            "3531803" => new Map([
                "name" => "Monte Mor",
                "cep" => [ 13190001, 13199999 ],
                "ibge" => 3531803
            ]),
            "3531704" => new Map([
                "name" => "Monteiro Lobato",
                "cep" => [ 12250000, 12259999 ],
                "ibge" => 3531704
            ]),
            "3531902" => new Map([
                "name" => "Morro Agudo",
                "cep" => [ 14640000, 14659999 ],
                "ibge" => 3531902
            ]),
            "3532009" => new Map([
                "name" => "Morungaba",
                "cep" => [ 13260000, 13269999 ],
                "ibge" => 3532009
            ]),
            "3532058" => new Map([
                "name" => "Motuca",
                "cep" => [ 14835000, 14839999 ],
                "ibge" => 3532058
            ]),
            "3532108" => new Map([
                "name" => "Murutinga do Sul",
                "cep" => [ 16950000, 16979999 ],
                "ibge" => 3532108
            ]),
            "3532157" => new Map([
                "name" => "Nantes",
                "cep" => [ 19650001, 19679999 ],
                "ibge" => 3532157
            ]),
            "3532207" => new Map([
                "name" => "Narandiba",
                "cep" => [ 19220000, 19229999 ],
                "ibge" => 3532207
            ]),
            "3532306" => new Map([
                "name" => "Natividade da Serra",
                "cep" => [ 12180000, 12199999 ],
                "ibge" => 3532306
            ]),
            "3532405" => new Map([
                "name" => "Nazaré Paulista",
                "cep" => [ 12960000, 12969999 ],
                "ibge" => 3532405
            ]),
            "3532504" => new Map([
                "name" => "Neves Paulista",
                "cep" => [ 15120000, 15129999 ],
                "ibge" => 3532504
            ]),
            "3532603" => new Map([
                "name" => "Nhandeara",
                "cep" => [ 15190000, 15199999 ],
                "ibge" => 3532603
            ]),
            "3532702" => new Map([
                "name" => "Nipoã",
                "cep" => [ 15240000, 15249999 ],
                "ibge" => 3532702
            ]),
            "3532801" => new Map([
                "name" => "Nova Aliança",
                "cep" => [ 15210000, 15219999 ],
                "ibge" => 3532801
            ]),
            "3532827" => new Map([
                "name" => "Nova Campina",
                "cep" => [ 18435000, 18439999 ],
                "ibge" => 3532827
            ]),
            "3532843" => new Map([
                "name" => "Nova Canaã Paulista",
                "cep" => [ 15773000, 15774999 ],
                "ibge" => 3532843
            ]),
            "3532868" => new Map([
                "name" => "Nova Castilho",
                "cep" => [ 15313000, 15314999 ],
                "ibge" => 3532868
            ]),
            "3532900" => new Map([
                "name" => "Nova Europa",
                "cep" => [ 14920000, 14929999 ],
                "ibge" => 3532900
            ]),
            "3533007" => new Map([
                "name" => "Nova Granada",
                "cep" => [ 15440000, 15449999 ],
                "ibge" => 3533007
            ]),
            "3533106" => new Map([
                "name" => "Nova Guataporanga",
                "cep" => [ 17950000, 17959999 ],
                "ibge" => 3533106
            ]),
            "3533205" => new Map([
                "name" => "Nova Independência",
                "cep" => [ 16940000, 16949999 ],
                "ibge" => 3533205
            ]),
            "3533304" => new Map([
                "name" => "Nova Luzitânia",
                "cep" => [ 15340000, 15349999 ],
                "ibge" => 3533304
            ]),
            "3533403" => new Map([
                "name" => "Nova Odessa",
                "cep" => [ 13380001, 13389999 ],
                "ibge" => 3533403
            ]),
            "3533254" => new Map([
                "name" => "Novais",
                "cep" => [ 15885000, 15889999 ],
                "ibge" => 3533254
            ]),
            "3533502" => new Map([
                "name" => "Novo Horizonte",
                "cep" => [ 14960001, 14979999 ],
                "ibge" => 3533502
            ]),
            "3533601" => new Map([
                "name" => "Nuporanga",
                "cep" => [ 14670000, 14679999 ],
                "ibge" => 3533601
            ]),
            "3533700" => new Map([
                "name" => "Ocauçu",
                "cep" => [ 17540001, 17549999 ],
                "ibge" => 3533700
            ]),
            "3533809" => new Map([
                "name" => "Óleo",
                "cep" => [ 18790001, 18799999 ],
                "ibge" => 3533809
            ]),
            "3533908" => new Map([
                "name" => "Olímpia",
                "cep" => [ 15400001, 15409999 ],
                "ibge" => 3533908
            ]),
            "3534005" => new Map([
                "name" => "Onda Verde",
                "cep" => [ 15450000, 15459999 ],
                "ibge" => 3534005
            ]),
            "3534104" => new Map([
                "name" => "Oriente",
                "cep" => [ 17570000, 17579999 ],
                "ibge" => 3534104
            ]),
            "3534203" => new Map([
                "name" => "Orindiúva",
                "cep" => [ 15480000, 15489999 ],
                "ibge" => 3534203
            ]),
            "3534302" => new Map([
                "name" => "Orlândia",
                "cep" => [ 14620000, 14639999 ],
                "ibge" => 3534302
            ]),
            "3534401" => new Map([
                "name" => "Osasco",
                "cep" => [ 6000001, 6299999 ],
                "ibge" => 3534401
            ]),
            "3534500" => new Map([
                "name" => "Oscar Bressane",
                "cep" => [ 19770001, 19779999 ],
                "ibge" => 3534500
            ]),
            "3534609" => new Map([
                "name" => "Osvaldo Cruz",
                "cep" => [ 17700000, 17709999 ],
                "ibge" => 3534609
            ]),
            "3534708" => new Map([
                "name" => "Ourinhos",
                "cep" => [ 19900001, 19919999 ],
                "ibge" => 3534708
            ]),
            "3534807" => new Map([
                "name" => "Ouro Verde",
                "cep" => [ 17920000, 17929999 ],
                "ibge" => 3534807
            ]),
            "3534757" => new Map([
                "name" => "Ouroeste",
                "cep" => [ 15685000, 15689999 ],
                "ibge" => 3534757
            ]),
            "3534906" => new Map([
                "name" => "Pacaembu",
                "cep" => [ 17860000, 17869999 ],
                "ibge" => 3534906
            ]),
            "3535002" => new Map([
                "name" => "Palestina",
                "cep" => [ 15470000, 15479999 ],
                "ibge" => 3535002
            ]),
            "3535101" => new Map([
                "name" => "Palmares Paulista",
                "cep" => [ 15828000, 15829999 ],
                "ibge" => 3535101
            ]),
            "3535200" => new Map([
                "name" => "Palmeira D'Oeste",
                "cep" => [ 15720000, 15729999 ],
                "ibge" => 3535200
            ]),
            "3535309" => new Map([
                "name" => "Palmital",
                "cep" => [ 19970001, 19989999 ],
                "ibge" => 3535309
            ]),
            "3535408" => new Map([
                "name" => "Panorama",
                "cep" => [ 17980000, 17989999 ],
                "ibge" => 3535408
            ]),
            "3535507" => new Map([
                "name" => "Paraguaçu Paulista",
                "cep" => [ 19700001, 19739999 ],
                "ibge" => 3535507
            ]),
            "3535606" => new Map([
                "name" => "Paraibuna",
                "cep" => [ 12260000, 12269999 ],
                "ibge" => 3535606
            ]),
            "3535705" => new Map([
                "name" => "Paraíso",
                "cep" => [ 15825000, 15827999 ],
                "ibge" => 3535705
            ]),
            "3535804" => new Map([
                "name" => "Paranapanema",
                "cep" => [ 18720000, 18729999 ],
                "ibge" => 3535804
            ]),
            "3535903" => new Map([
                "name" => "Paranapuã",
                "cep" => [ 15745000, 15747999 ],
                "ibge" => 3535903
            ]),
            "3536000" => new Map([
                "name" => "Parapuã",
                "cep" => [ 17730000, 17739999 ],
                "ibge" => 3536000
            ]),
            "3536109" => new Map([
                "name" => "Pardinho",
                "cep" => [ 18640000, 18649999 ],
                "ibge" => 3536109
            ]),
            "3536208" => new Map([
                "name" => "Pariquera-Açu",
                "cep" => [ 11930000, 11939999 ],
                "ibge" => 3536208
            ]),
            "3536257" => new Map([
                "name" => "Parisi",
                "cep" => [ 15525000, 15529999 ],
                "ibge" => 3536257
            ]),
            "3536307" => new Map([
                "name" => "Patrocínio Paulista",
                "cep" => [ 14415000, 14419999 ],
                "ibge" => 3536307
            ]),
            "3536406" => new Map([
                "name" => "Paulicéia",
                "cep" => [ 17990000, 17999999 ],
                "ibge" => 3536406
            ]),
            "3536505" => new Map([
                "name" => "Paulínia",
                "cep" => [ 13140001, 13149999 ],
                "ibge" => 3536505
            ]),
            "3536570" => new Map([
                "name" => "Paulistânia",
                "cep" => [ 17150001, 17159999 ],
                "ibge" => 3536570
            ]),
            "3536604" => new Map([
                "name" => "Paulo de Faria",
                "cep" => [ 15490000, 15494999 ],
                "ibge" => 3536604
            ]),
            "3536703" => new Map([
                "name" => "Pederneiras",
                "cep" => [ 17280000, 17289999 ],
                "ibge" => 3536703
            ]),
            "3536802" => new Map([
                "name" => "Pedra Bela",
                "cep" => [ 12990000, 12994999 ],
                "ibge" => 3536802
            ]),
            "3536901" => new Map([
                "name" => "Pedranópolis",
                "cep" => [ 15630000, 15639999 ],
                "ibge" => 3536901
            ]),
            "3537008" => new Map([
                "name" => "Pedregulho",
                "cep" => [ 14470000, 14489999 ],
                "ibge" => 3537008
            ]),
            "3537107" => new Map([
                "name" => "Pedreira",
                "cep" => [ 13920000, 13929999 ],
                "ibge" => 3537107
            ]),
            "3537156" => new Map([
                "name" => "Pedrinhas Paulista",
                "cep" => [ 19865000, 19869999 ],
                "ibge" => 3537156
            ]),
            "3537206" => new Map([
                "name" => "Pedro de Toledo",
                "cep" => [ 11790000, 11799999 ],
                "ibge" => 3537206
            ]),
            "3537305" => new Map([
                "name" => "Penápolis",
                "cep" => [ 16300001, 16309999 ],
                "ibge" => 3537305
            ]),
            "3537404" => new Map([
                "name" => "Pereira Barreto",
                "cep" => [ 15370001, 15379999 ],
                "ibge" => 3537404
            ]),
            "3537503" => new Map([
                "name" => "Pereiras",
                "cep" => [ 18580000, 18589999 ],
                "ibge" => 3537503
            ]),
            "3537602" => new Map([
                "name" => "Peruíbe",
                "cep" => [ 11770000, 11789999 ],
                "ibge" => 3537602
            ]),
            "3537701" => new Map([
                "name" => "Piacatu",
                "cep" => [ 16230000, 16239999 ],
                "ibge" => 3537701
            ]),
            "3537800" => new Map([
                "name" => "Piedade",
                "cep" => [ 18170000, 18179999 ],
                "ibge" => 3537800
            ]),
            "3537909" => new Map([
                "name" => "Pilar do Sul",
                "cep" => [ 18185000, 18189999 ],
                "ibge" => 3537909
            ]),
            "3538006" => new Map([
                "name" => "Pindamonhangaba",
                "cep" => [ 12400001, 12449999 ],
                "ibge" => 3538006
            ]),
            "3538105" => new Map([
                "name" => "Pindorama",
                "cep" => [ 15830000, 15839999 ],
                "ibge" => 3538105
            ]),
            "3538204" => new Map([
                "name" => "Pinhalzinho",
                "cep" => [ 12995000, 12999999 ],
                "ibge" => 3538204
            ]),
            "3538303" => new Map([
                "name" => "Piquerobi",
                "cep" => [ 19410000, 19429999 ],
                "ibge" => 3538303
            ]),
            "3538501" => new Map([
                "name" => "Piquete",
                "cep" => [ 12620000, 12629999 ],
                "ibge" => 3538501
            ]),
            "3538600" => new Map([
                "name" => "Piracaia",
                "cep" => [ 12970000, 12979999 ],
                "ibge" => 3538600
            ]),
            "3538709" => new Map([
                "name" => "Piracicaba",
                "cep" => [ 13400001, 13439999 ],
                "ibge" => 3538709
            ]),
            "3538808" => new Map([
                "name" => "Piraju",
                "cep" => [ 18800001, 18829999 ],
                "ibge" => 3538808
            ]),
            "3538907" => new Map([
                "name" => "Pirajuí",
                "cep" => [ 16600001, 16639999 ],
                "ibge" => 3538907
            ]),
            "3539004" => new Map([
                "name" => "Pirangi",
                "cep" => [ 15820000, 15822999 ],
                "ibge" => 3539004
            ]),
            "3539103" => new Map([
                "name" => "Pirapora do Bom Jesus",
                "cep" => [ 6550000, 6599999 ],
                "ibge" => 3539103
            ]),
            "3539202" => new Map([
                "name" => "Pirapozinho",
                "cep" => [ 19200000, 19209999 ],
                "ibge" => 3539202
            ]),
            "3539301" => new Map([
                "name" => "Pirassununga",
                "cep" => [ 13630001, 13649999 ],
                "ibge" => 3539301
            ]),
            "3539400" => new Map([
                "name" => "Piratininga",
                "cep" => [ 17490001, 17499999 ],
                "ibge" => 3539400
            ]),
            "3539509" => new Map([
                "name" => "Pitangueiras",
                "cep" => [ 14750000, 14764999 ],
                "ibge" => 3539509
            ]),
            "3539608" => new Map([
                "name" => "Planalto",
                "cep" => [ 15260000, 15264999 ],
                "ibge" => 3539608
            ]),
            "3539707" => new Map([
                "name" => "Platina",
                "cep" => [ 19990000, 19999999 ],
                "ibge" => 3539707
            ]),
            "3539806" => new Map([
                "name" => "Poá",
                "cep" => [ 8550001, 8569999 ],
                "ibge" => 3539806
            ]),
            "3539905" => new Map([
                "name" => "Poloni",
                "cep" => [ 15160000, 15169999 ],
                "ibge" => 3539905
            ]),
            "3540002" => new Map([
                "name" => "Pompéia",
                "cep" => [ 17580001, 17589999 ],
                "ibge" => 3540002
            ]),
            "3540101" => new Map([
                "name" => "Pongaí",
                "cep" => [ 16660001, 16669999 ],
                "ibge" => 3540101
            ]),
            "3540200" => new Map([
                "name" => "Pontal",
                "cep" => [ 14180000, 14199999 ],
                "ibge" => 3540200
            ]),
            "3540259" => new Map([
                "name" => "Pontalinda",
                "cep" => [ 15718000, 15719999 ],
                "ibge" => 3540259
            ]),
            "3540309" => new Map([
                "name" => "Pontes Gestal",
                "cep" => [ 15560000, 15569999 ],
                "ibge" => 3540309
            ]),
            "3540408" => new Map([
                "name" => "Populina",
                "cep" => [ 15670000, 15679999 ],
                "ibge" => 3540408
            ]),
            "3540507" => new Map([
                "name" => "Porangaba",
                "cep" => [ 18260000, 18264999 ],
                "ibge" => 3540507
            ]),
            "3540606" => new Map([
                "name" => "Porto Feliz",
                "cep" => [ 18540001, 18549999 ],
                "ibge" => 3540606
            ]),
            "3540705" => new Map([
                "name" => "Porto Ferreira",
                "cep" => [ 13660001, 13669999 ],
                "ibge" => 3540705
            ]),
            "3540754" => new Map([
                "name" => "Potim",
                "cep" => [ 12525001, 12529999 ],
                "ibge" => 3540754
            ]),
            "3540804" => new Map([
                "name" => "Potirendaba",
                "cep" => [ 15105000, 15107999 ],
                "ibge" => 3540804
            ]),
            "3540853" => new Map([
                "name" => "Pracinha",
                "cep" => [ 17790000, 17799999 ],
                "ibge" => 3540853
            ]),
            "3540903" => new Map([
                "name" => "Pradópolis",
                "cep" => [ 14850000, 14859999 ],
                "ibge" => 3540903
            ]),
            "3541000" => new Map([
                "name" => "Praia Grande",
                "cep" => [ 11700001, 11729999 ],
                "ibge" => 3541000
            ]),
            "3541059" => new Map([
                "name" => "Pratânia",
                "cep" => [ 18660001, 18669999 ],
                "ibge" => 3541059
            ]),
            "3541109" => new Map([
                "name" => "Presidente Alves",
                "cep" => [ 16670000, 16679999 ],
                "ibge" => 3541109
            ]),
            "3541208" => new Map([
                "name" => "Presidente Bernardes",
                "cep" => [ 19300000, 19349999 ],
                "ibge" => 3541208
            ]),
            "3541307" => new Map([
                "name" => "Presidente Epitácio",
                "cep" => [ 19470000, 19499999 ],
                "ibge" => 3541307
            ]),
            "3541406" => new Map([
                "name" => "Presidente Prudente",
                "cep" => [ 19000001, 19159999 ],
                "ibge" => 3541406
            ]),
            "3541505" => new Map([
                "name" => "Presidente Venceslau",
                "cep" => [ 19400001, 19409999 ],
                "ibge" => 3541505
            ]),
            "3541604" => new Map([
                "name" => "Promissão",
                "cep" => [ 16370000, 16399999 ],
                "ibge" => 3541604
            ]),
            "3541653" => new Map([
                "name" => "Quadra",
                "cep" => [ 18255000, 18259999 ],
                "ibge" => 3541653
            ]),
            "3541703" => new Map([
                "name" => "Quatá",
                "cep" => [ 19780001, 19799999 ],
                "ibge" => 3541703
            ]),
            "3541802" => new Map([
                "name" => "Queiroz",
                "cep" => [ 17590000, 17599999 ],
                "ibge" => 3541802
            ]),
            "3541901" => new Map([
                "name" => "Queluz",
                "cep" => [ 12800000, 12819999 ],
                "ibge" => 3541901
            ]),
            "3542008" => new Map([
                "name" => "Quintana",
                "cep" => [ 17670000, 17679999 ],
                "ibge" => 3542008
            ]),
            "3542107" => new Map([
                "name" => "Rafard",
                "cep" => [ 13370000, 13374999 ],
                "ibge" => 3542107
            ]),
            "3542206" => new Map([
                "name" => "Rancharia",
                "cep" => [ 19600000, 19639999 ],
                "ibge" => 3542206
            ]),
            "3542305" => new Map([
                "name" => "Redenção da Serra",
                "cep" => [ 12170000, 12179999 ],
                "ibge" => 3542305
            ]),
            "3542404" => new Map([
                "name" => "Regente Feijó",
                "cep" => [ 19570000, 19579999 ],
                "ibge" => 3542404
            ]),
            "3542503" => new Map([
                "name" => "Reginópolis",
                "cep" => [ 17190001, 17199999 ],
                "ibge" => 3542503
            ]),
            "3542602" => new Map([
                "name" => "Registro",
                "cep" => [ 11900000, 11909999 ],
                "ibge" => 3542602
            ]),
            "3542701" => new Map([
                "name" => "Restinga",
                "cep" => [ 14430000, 14439999 ],
                "ibge" => 3542701
            ]),
            "3542800" => new Map([
                "name" => "Ribeira",
                "cep" => [ 18380000, 18384999 ],
                "ibge" => 3542800
            ]),
            "3542909" => new Map([
                "name" => "Ribeirão Bonito",
                "cep" => [ 13580000, 13589999 ],
                "ibge" => 3542909
            ]),
            "3543006" => new Map([
                "name" => "Ribeirão Branco",
                "cep" => [ 18430000, 18434999 ],
                "ibge" => 3543006
            ]),
            "3543105" => new Map([
                "name" => "Ribeirão Corrente",
                "cep" => [ 14445000, 14449999 ],
                "ibge" => 3543105
            ]),
            "3543204" => new Map([
                "name" => "Ribeirão do Sul",
                "cep" => [ 19930000, 19939999 ],
                "ibge" => 3543204
            ]),
            "3543238" => new Map([
                "name" => "Ribeirão dos Índios",
                "cep" => [ 19380000, 19399999 ],
                "ibge" => 3543238
            ]),
            "3543253" => new Map([
                "name" => "Ribeirão Grande",
                "cep" => [ 18315000, 18319999 ],
                "ibge" => 3543253
            ]),
            "3543303" => new Map([
                "name" => "Ribeirão Pires",
                "cep" => [ 9400001, 9449999 ],
                "ibge" => 3543303
            ]),
            "3543402" => new Map([
                "name" => "Ribeirão Preto",
                "cep" => [ 14000001, 14114999 ],
                "ibge" => 3543402
            ]),
            "3543600" => new Map([
                "name" => "Rifaina",
                "cep" => [ 14490000, 14499999 ],
                "ibge" => 3543600
            ]),
            "3543709" => new Map([
                "name" => "Rincão",
                "cep" => [ 14830000, 14834999 ],
                "ibge" => 3543709
            ]),
            "3543808" => new Map([
                "name" => "Rinópolis",
                "cep" => [ 17740000, 17759999 ],
                "ibge" => 3543808
            ]),
            "3543907" => new Map([
                "name" => "Rio Claro",
                "cep" => [ 13500001, 13509999 ],
                "ibge" => 3543907
            ]),
            "3544004" => new Map([
                "name" => "Rio das Pedras",
                "cep" => [ 13390001, 13399999 ],
                "ibge" => 3544004
            ]),
            "3544103" => new Map([
                "name" => "Rio Grande da Serra",
                "cep" => [ 9450000, 9499999 ],
                "ibge" => 3544103
            ]),
            "3544202" => new Map([
                "name" => "Riolândia",
                "cep" => [ 15495000, 15499999 ],
                "ibge" => 3544202
            ]),
            "3543501" => new Map([
                "name" => "Riversul",
                "cep" => [ 18470000, 18474999 ],
                "ibge" => 3543501
            ]),
            "3544251" => new Map([
                "name" => "Rosana",
                "cep" => [ 19273000, 19274999 ],
                "ibge" => 3544251
            ]),
            "3544301" => new Map([
                "name" => "Roseira",
                "cep" => [ 12580001, 12599999 ],
                "ibge" => 3544301
            ]),
            "3544400" => new Map([
                "name" => "Rubiácea",
                "cep" => [ 16750000, 16789999 ],
                "ibge" => 3544400
            ]),
            "3544509" => new Map([
                "name" => "Rubinéia",
                "cep" => [ 15790000, 15799999 ],
                "ibge" => 3544509
            ]),
            "3544608" => new Map([
                "name" => "Sabino",
                "cep" => [ 16440000, 16449999 ],
                "ibge" => 3544608
            ]),
            "3544707" => new Map([
                "name" => "Sagres",
                "cep" => [ 17710000, 17719999 ],
                "ibge" => 3544707
            ]),
            "3544806" => new Map([
                "name" => "Sales",
                "cep" => [ 14980000, 14989999 ],
                "ibge" => 3544806
            ]),
            "3544905" => new Map([
                "name" => "Sales Oliveira",
                "cep" => [ 14660000, 14669999 ],
                "ibge" => 3544905
            ]),
            "3545001" => new Map([
                "name" => "Salesópolis",
                "cep" => [ 8970000, 8999999 ],
                "ibge" => 3545001
            ]),
            "3545100" => new Map([
                "name" => "Salmourão",
                "cep" => [ 17720000, 17729999 ],
                "ibge" => 3545100
            ]),
            "3545159" => new Map([
                "name" => "Saltinho",
                "cep" => [ 13440001, 13444999 ],
                "ibge" => 3545159
            ]),
            "3545209" => new Map([
                "name" => "Salto",
                "cep" => [ 13320001, 13329999 ],
                "ibge" => 3545209
            ]),
            "3545308" => new Map([
                "name" => "Salto de Pirapora",
                "cep" => [ 18160000, 18169999 ],
                "ibge" => 3545308
            ]),
            "3545407" => new Map([
                "name" => "Salto Grande",
                "cep" => [ 19920001, 19929999 ],
                "ibge" => 3545407
            ]),
            "3545506" => new Map([
                "name" => "Sandovalina",
                "cep" => [ 19250000, 19259999 ],
                "ibge" => 3545506
            ]),
            "3545605" => new Map([
                "name" => "Santa Adélia",
                "cep" => [ 15950000, 15959999 ],
                "ibge" => 3545605
            ]),
            "3545704" => new Map([
                "name" => "Santa Albertina",
                "cep" => [ 15750000, 15754999 ],
                "ibge" => 3545704
            ]),
            "3545803" => new Map([
                "name" => "Santa Bárbara D'Oeste",
                "cep" => [ 13450001, 13464999 ],
                "ibge" => 3545803
            ]),
            "3546009" => new Map([
                "name" => "Santa Branca",
                "cep" => [ 12380000, 12399999 ],
                "ibge" => 3546009
            ]),
            "3546108" => new Map([
                "name" => "Santa Clara D'Oeste",
                "cep" => [ 15785000, 15789999 ],
                "ibge" => 3546108
            ]),
            "3546207" => new Map([
                "name" => "Santa Cruz da Conceição",
                "cep" => [ 13625001, 13629999 ],
                "ibge" => 3546207
            ]),
            "3546256" => new Map([
                "name" => "Santa Cruz da Esperança",
                "cep" => [ 14250000, 14259999 ],
                "ibge" => 3546256
            ]),
            "3546306" => new Map([
                "name" => "Santa Cruz das Palmeiras",
                "cep" => [ 13650001, 13659999 ],
                "ibge" => 3546306
            ]),
            "3546405" => new Map([
                "name" => "Santa Cruz do Rio Pardo",
                "cep" => [ 18900001, 18934999 ],
                "ibge" => 3546405
            ]),
            "3546504" => new Map([
                "name" => "Santa Ernestina",
                "cep" => [ 15970000, 15979999 ],
                "ibge" => 3546504
            ]),
            "3546603" => new Map([
                "name" => "Santa Fé do Sul",
                "cep" => [ 15775000, 15779999 ],
                "ibge" => 3546603
            ]),
            "3546702" => new Map([
                "name" => "Santa Gertrudes",
                "cep" => [ 13510001, 13514999 ],
                "ibge" => 3546702
            ]),
            "3546801" => new Map([
                "name" => "Santa Isabel",
                "cep" => [ 7500000, 7599999 ],
                "ibge" => 3546801
            ]),
            "3546900" => new Map([
                "name" => "Santa Lúcia",
                "cep" => [ 14825000, 14829999 ],
                "ibge" => 3546900
            ]),
            "3547007" => new Map([
                "name" => "Santa Maria da Serra",
                "cep" => [ 17370001, 17379999 ],
                "ibge" => 3547007
            ]),
            "3547106" => new Map([
                "name" => "Santa Mercedes",
                "cep" => [ 17940000, 17949999 ],
                "ibge" => 3547106
            ]),
            "3547502" => new Map([
                "name" => "Santa Rita do Passa Quatro",
                "cep" => [ 13670000, 13689999 ],
                "ibge" => 3547502
            ]),
            "3547403" => new Map([
                "name" => "Santa Rita D'Oeste",
                "cep" => [ 15780000, 15784999 ],
                "ibge" => 3547403
            ]),
            "3547601" => new Map([
                "name" => "Santa Rosa de Viterbo",
                "cep" => [ 14270000, 14299999 ],
                "ibge" => 3547601
            ]),
            "3547650" => new Map([
                "name" => "Santa Salete",
                "cep" => [ 15768000, 15769999 ],
                "ibge" => 3547650
            ]),
            "3547205" => new Map([
                "name" => "Santana da Ponte Pensa",
                "cep" => [ 15765000, 15767999 ],
                "ibge" => 3547205
            ]),
            "3547304" => new Map([
                "name" => "Santana de Parnaíba",
                "cep" => [ 6500001, 6549999 ],
                "ibge" => 3547304
            ]),
            "3547700" => new Map([
                "name" => "Santo Anastácio",
                "cep" => [ 19360000, 19379999 ],
                "ibge" => 3547700
            ]),
            "3547809" => new Map([
                "name" => "Santo André",
                "cep" => [ 9000001, 9299999 ],
                "ibge" => 3547809
            ]),
            "3547908" => new Map([
                "name" => "Santo Antônio da Alegria",
                "cep" => [ 14390000, 14399999 ],
                "ibge" => 3547908
            ]),
            "3548005" => new Map([
                "name" => "Santo Antônio de Posse",
                "cep" => [ 13830001, 13834999 ],
                "ibge" => 3548005
            ]),
            "3548054" => new Map([
                "name" => "Santo Antônio do Aracanguá",
                "cep" => [ 16130000, 16199999 ],
                "ibge" => 3548054
            ]),
            "3548104" => new Map([
                "name" => "Santo Antônio do Jardim",
                "cep" => [ 13995000, 13999999 ],
                "ibge" => 3548104
            ]),
            "3548203" => new Map([
                "name" => "Santo Antônio do Pinhal",
                "cep" => [ 12450000, 12459999 ],
                "ibge" => 3548203
            ]),
            "3548302" => new Map([
                "name" => "Santo Expedito",
                "cep" => [ 19190000, 19199999 ],
                "ibge" => 3548302
            ]),
            "3548401" => new Map([
                "name" => "Santópolis do Aguapeí",
                "cep" => [ 16240000, 16249999 ],
                "ibge" => 3548401
            ]),
            "3548500" => new Map([
                "name" => "Santos",
                "cep" => [ 11000001, 11249999 ],
                "ibge" => 3548500
            ]),
            "3548609" => new Map([
                "name" => "São Bento do Sapucaí",
                "cep" => [ 12490000, 12499999 ],
                "ibge" => 3548609
            ]),
            "3548708" => new Map([
                "name" => "São Bernardo do Campo",
                "cep" => [ 9600001, 9899999 ],
                "ibge" => 3548708
            ]),
            "3548807" => new Map([
                "name" => "São Caetano do Sul",
                "cep" => [ 9500001, 9599999 ],
                "ibge" => 3548807
            ]),
            "3548906" => new Map([
                "name" => "São Carlos",
                "cep" => [ 13560001, 13579999 ],
                "ibge" => 3548906
            ]),
            "3549003" => new Map([
                "name" => "São Francisco",
                "cep" => [ 15710000, 15712999 ],
                "ibge" => 3549003
            ]),
            "3549102" => new Map([
                "name" => "São João da Boa Vista",
                "cep" => [ 13870001, 13879999 ],
                "ibge" => 3549102
            ]),
            "3549201" => new Map([
                "name" => "São João das Duas Pontes",
                "cep" => [ 15640000, 15649999 ],
                "ibge" => 3549201
            ]),
            "3549250" => new Map([
                "name" => "São João de Iracema",
                "cep" => [ 15315000, 15319999 ],
                "ibge" => 3549250
            ]),
            "3549300" => new Map([
                "name" => "São João do Pau D'Alho",
                "cep" => [ 17970000, 17979999 ],
                "ibge" => 3549300
            ]),
            "3549409" => new Map([
                "name" => "São Joaquim da Barra",
                "cep" => [ 14600000, 14609999 ],
                "ibge" => 3549409
            ]),
            "3549508" => new Map([
                "name" => "São José da Bela Vista",
                "cep" => [ 14440000, 14444999 ],
                "ibge" => 3549508
            ]),
            "3549607" => new Map([
                "name" => "São José do Barreiro",
                "cep" => [ 12830000, 12849999 ],
                "ibge" => 3549607
            ]),
            "3549706" => new Map([
                "name" => "São José do Rio Pardo",
                "cep" => [ 13720000, 13729999 ],
                "ibge" => 3549706
            ]),
            "3549805" => new Map([
                "name" => "São José do Rio Preto",
                "cep" => [ 15000001, 15104999 ],
                "ibge" => 3549805
            ]),
            "3549904" => new Map([
                "name" => "São José dos Campos",
                "cep" => [ 12200001, 12249999 ],
                "ibge" => 3549904
            ]),
            "3549953" => new Map([
                "name" => "São Lourenço da Serra",
                "cep" => [ 6890000, 6899999 ],
                "ibge" => 3549953
            ]),
            "3550001" => new Map([
                "name" => "São Luiz do Paraitinga",
                "cep" => [ 12140000, 12169999 ],
                "ibge" => 3550001
            ]),
            "3550100" => new Map([
                "name" => "São Manuel",
                "cep" => [ 18650001, 18659999 ],
                "ibge" => 3550100
            ]),
            "3550209" => new Map([
                "name" => "São Miguel Arcanjo",
                "cep" => [ 18230000, 18239999 ],
                "ibge" => 3550209
            ]),
            "3550308" => new Map([
                "name" => "São Paulo",
                "cep" => [ [ 1000001, 5999999 ], [ 8000000, 8499999 ] ],
                "ibge" => 3550308
            ]),
            "3550407" => new Map([
                "name" => "São Pedro",
                "cep" => [ 13520000, 13524999 ],
                "ibge" => 3550407
            ]),
            "3550506" => new Map([
                "name" => "São Pedro do Turvo",
                "cep" => [ 18940001, 18949999 ],
                "ibge" => 3550506
            ]),
            "3550605" => new Map([
                "name" => "São Roque",
                "cep" => [ 18130001, 18146999 ],
                "ibge" => 3550605
            ]),
            "3550704" => new Map([
                "name" => "São Sebastião",
                "cep" => [ 11600001, 11629999 ],
                "ibge" => 3550704
            ]),
            "3550803" => new Map([
                "name" => "São Sebastião da Grama",
                "cep" => [ 13790000, 13799999 ],
                "ibge" => 3550803
            ]),
            "3550902" => new Map([
                "name" => "São Simão",
                "cep" => [ 14200000, 14209999 ],
                "ibge" => 3550902
            ]),
            "3551009" => new Map([
                "name" => "São Vicente",
                "cep" => [ 11300001, 11399999 ],
                "ibge" => 3551009
            ]),
            "3551108" => new Map([
                "name" => "Sarapuí",
                "cep" => [ 18225000, 18229999 ],
                "ibge" => 3551108
            ]),
            "3551207" => new Map([
                "name" => "Sarutaiá",
                "cep" => [ 18840001, 18859999 ],
                "ibge" => 3551207
            ]),
            "3551306" => new Map([
                "name" => "Sebastianópolis do Sul",
                "cep" => [ 15180000, 15189999 ],
                "ibge" => 3551306
            ]),
            "3551405" => new Map([
                "name" => "Serra Azul",
                "cep" => [ 14230000, 14239999 ],
                "ibge" => 3551405
            ]),
            "3551603" => new Map([
                "name" => "Serra Negra",
                "cep" => [ 13930000, 13939999 ],
                "ibge" => 3551603
            ]),
            "3551504" => new Map([
                "name" => "Serrana",
                "cep" => [ 14150000, 14159999 ],
                "ibge" => 3551504
            ]),
            "3551702" => new Map([
                "name" => "Sertãozinho",
                "cep" => [ 14160001, 14179999 ],
                "ibge" => 3551702
            ]),
            "3551801" => new Map([
                "name" => "Sete Barras",
                "cep" => [ 11910000, 11919999 ],
                "ibge" => 3551801
            ]),
            "3551900" => new Map([
                "name" => "Severínia",
                "cep" => [ 14735000, 14739999 ],
                "ibge" => 3551900
            ]),
            "3552007" => new Map([
                "name" => "Silveiras",
                "cep" => [ 12690000, 12699999 ],
                "ibge" => 3552007
            ]),
            "3552106" => new Map([
                "name" => "Socorro",
                "cep" => [ 13960000, 13969999 ],
                "ibge" => 3552106
            ]),
            "3552205" => new Map([
                "name" => "Sorocaba",
                "cep" => [ 18000001, 18109999 ],
                "ibge" => 3552205
            ]),
            "3552304" => new Map([
                "name" => "Sud Mennucci",
                "cep" => [ 15360000, 15369999 ],
                "ibge" => 3552304
            ]),
            "3552403" => new Map([
                "name" => "Sumaré",
                "cep" => [ 13170001, 13182999 ],
                "ibge" => 3552403
            ]),
            "3552551" => new Map([
                "name" => "Suzanápolis",
                "cep" => [ 15380000, 15384999 ],
                "ibge" => 3552551
            ]),
            "3552502" => new Map([
                "name" => "Suzano",
                "cep" => [ 8600001, 8699999 ],
                "ibge" => 3552502
            ]),
            "3552601" => new Map([
                "name" => "Tabapuã",
                "cep" => [ 15880000, 15884999 ],
                "ibge" => 3552601
            ]),
            "3552700" => new Map([
                "name" => "Tabatinga",
                "cep" => [ 14910000, 14919999 ],
                "ibge" => 3552700
            ]),
            "3552809" => new Map([
                "name" => "Taboão da Serra",
                "cep" => [ 6750001, 6799999 ],
                "ibge" => 3552809
            ]),
            "3552908" => new Map([
                "name" => "Taciba",
                "cep" => [ 19590000, 19599999 ],
                "ibge" => 3552908
            ]),
            "3553005" => new Map([
                "name" => "Taguaí",
                "cep" => [ 18890001, 18899999 ],
                "ibge" => 3553005
            ]),
            "3553104" => new Map([
                "name" => "Taiaçu",
                "cep" => [ 14725000, 14729999 ],
                "ibge" => 3553104
            ]),
            "3553203" => new Map([
                "name" => "Taiúva",
                "cep" => [ 14720000, 14724999 ],
                "ibge" => 3553203
            ]),
            "3553302" => new Map([
                "name" => "Tambaú",
                "cep" => [ 13710000, 13714999 ],
                "ibge" => 3553302
            ]),
            "3553401" => new Map([
                "name" => "Tanabi",
                "cep" => [ 15170000, 15179999 ],
                "ibge" => 3553401
            ]),
            "3553500" => new Map([
                "name" => "Tapiraí",
                "cep" => [ 18180000, 18184999 ],
                "ibge" => 3553500
            ]),
            "3553609" => new Map([
                "name" => "Tapiratiba",
                "cep" => [ 13760000, 13769999 ],
                "ibge" => 3553609
            ]),
            "3553658" => new Map([
                "name" => "Taquaral",
                "cep" => [ 14765000, 14769999 ],
                "ibge" => 3553658
            ]),
            "3553708" => new Map([
                "name" => "Taquaritinga",
                "cep" => [ 15900001, 15909999 ],
                "ibge" => 3553708
            ]),
            "3553807" => new Map([
                "name" => "Taquarituba",
                "cep" => [ 18740000, 18744999 ],
                "ibge" => 3553807
            ]),
            "3553856" => new Map([
                "name" => "Taquarivaí",
                "cep" => [ 18425000, 18429999 ],
                "ibge" => 3553856
            ]),
            "3553906" => new Map([
                "name" => "Tarabai",
                "cep" => [ 19210000, 19219999 ],
                "ibge" => 3553906
            ]),
            "3553955" => new Map([
                "name" => "Tarumã",
                "cep" => [ 19820000, 19829999 ],
                "ibge" => 3553955
            ]),
            "3554003" => new Map([
                "name" => "Tatuí",
                "cep" => [ 18270001, 18284999 ],
                "ibge" => 3554003
            ]),
            "3554102" => new Map([
                "name" => "Taubaté",
                "cep" => [ 12000001, 12119999 ],
                "ibge" => 3554102
            ]),
            "3554201" => new Map([
                "name" => "Tejupá",
                "cep" => [ 18830001, 18839999 ],
                "ibge" => 3554201
            ]),
            "3554300" => new Map([
                "name" => "Teodoro Sampaio",
                "cep" => [ 19280000, 19299999 ],
                "ibge" => 3554300
            ]),
            "3554409" => new Map([
                "name" => "Terra Roxa",
                "cep" => [ 14745000, 14749999 ],
                "ibge" => 3554409
            ]),
            "3554508" => new Map([
                "name" => "Tietê",
                "cep" => [ 18530000, 18534999 ],
                "ibge" => 3554508
            ]),
            "3554607" => new Map([
                "name" => "Timburi",
                "cep" => [ 18860000, 18869999 ],
                "ibge" => 3554607
            ]),
            "3554656" => new Map([
                "name" => "Torre de Pedra",
                "cep" => [ 18265000, 18269999 ],
                "ibge" => 3554656
            ]),
            "3554706" => new Map([
                "name" => "Torrinha",
                "cep" => [ 17360000, 17369999 ],
                "ibge" => 3554706
            ]),
            "3554755" => new Map([
                "name" => "Trabiju",
                "cep" => [ 14935000, 14939999 ],
                "ibge" => 3554755
            ]),
            "3554805" => new Map([
                "name" => "Tremembé",
                "cep" => [ 12120001, 12129999 ],
                "ibge" => 3554805
            ]),
            "3554904" => new Map([
                "name" => "Três Fronteiras",
                "cep" => [ 15770000, 15772999 ],
                "ibge" => 3554904
            ]),
            "3554953" => new Map([
                "name" => "Tuiuti",
                "cep" => [ 12930000, 12934999 ],
                "ibge" => 3554953
            ]),
            "3555000" => new Map([
                "name" => "Tupã",
                "cep" => [ 17600001, 17629999 ],
                "ibge" => 3555000
            ]),
            "3555109" => new Map([
                "name" => "Tupi Paulista",
                "cep" => [ 17930000, 17939999 ],
                "ibge" => 3555109
            ]),
            "3555208" => new Map([
                "name" => "Turiúba",
                "cep" => [ 15280000, 15284999 ],
                "ibge" => 3555208
            ]),
            "3555307" => new Map([
                "name" => "Turmalina",
                "cep" => [ 15755000, 15759999 ],
                "ibge" => 3555307
            ]),
            "3555356" => new Map([
                "name" => "Ubarana",
                "cep" => [ 15225000, 15229999 ],
                "ibge" => 3555356
            ]),
            "3555406" => new Map([
                "name" => "Ubatuba",
                "cep" => [ 11680001, 11699999 ],
                "ibge" => 3555406
            ]),
            "3555505" => new Map([
                "name" => "Ubirajara",
                "cep" => [ 17440001, 17449999 ],
                "ibge" => 3555505
            ]),
            "3555604" => new Map([
                "name" => "Uchoa",
                "cep" => [ 15890000, 15894999 ],
                "ibge" => 3555604
            ]),
            "3555703" => new Map([
                "name" => "União Paulista",
                "cep" => [ 15250000, 15259999 ],
                "ibge" => 3555703
            ]),
            "3555802" => new Map([
                "name" => "Urânia",
                "cep" => [ 15760000, 15762999 ],
                "ibge" => 3555802
            ]),
            "3555901" => new Map([
                "name" => "Uru",
                "cep" => [ 16650001, 16659999 ],
                "ibge" => 3555901
            ]),
            "3556008" => new Map([
                "name" => "Urupês",
                "cep" => [ 15850000, 15859999 ],
                "ibge" => 3556008
            ]),
            "3556107" => new Map([
                "name" => "Valentim Gentil",
                "cep" => [ 15520000, 15524999 ],
                "ibge" => 3556107
            ]),
            "3556206" => new Map([
                "name" => "Valinhos",
                "cep" => [ 13270001, 13279999 ],
                "ibge" => 3556206
            ]),
            "3556305" => new Map([
                "name" => "Valparaíso",
                "cep" => [ 16880000, 16899999 ],
                "ibge" => 3556305
            ]),
            "3556354" => new Map([
                "name" => "Vargem",
                "cep" => [ 12935000, 12939999 ],
                "ibge" => 3556354
            ]),
            "3556404" => new Map([
                "name" => "Vargem Grande do Sul",
                "cep" => [ 13880000, 13889999 ],
                "ibge" => 3556404
            ]),
            "3556453" => new Map([
                "name" => "Vargem Grande Paulista",
                "cep" => [ 6730000, 6749999 ],
                "ibge" => 3556453
            ]),
            "3556503" => new Map([
                "name" => "Várzea Paulista",
                "cep" => [ 13220001, 13229999 ],
                "ibge" => 3556503
            ]),
            "3556602" => new Map([
                "name" => "Vera Cruz",
                "cep" => [ 17560001, 17569999 ],
                "ibge" => 3556602
            ]),
            "3556701" => new Map([
                "name" => "Vinhedo",
                "cep" => [ 13280001, 13289999 ],
                "ibge" => 3556701
            ]),
            "3556800" => new Map([
                "name" => "Viradouro",
                "cep" => [ 14740000, 14744999 ],
                "ibge" => 3556800
            ]),
            "3556909" => new Map([
                "name" => "Vista Alegre do Alto",
                "cep" => [ 15920000, 15929999 ],
                "ibge" => 3556909
            ]),
            "3556958" => new Map([
                "name" => "Vitória Brasil",
                "cep" => [ 15713000, 15714999 ],
                "ibge" => 3556958
            ]),
            "3557006" => new Map([
                "name" => "Votorantim",
                "cep" => [ 18110001, 18119999 ],
                "ibge" => 3557006
            ]),
            "3557105" => new Map([
                "name" => "Votuporanga",
                "cep" => [ 15500001, 15519999 ],
                "ibge" => 3557105
            ]),
            "3557154" => new Map([
                "name" => "Zacarias",
                "cep" => [ 15265000, 15269999 ],
                "ibge" => 3557154
            ])
        ]);

        return $map;
    }
}