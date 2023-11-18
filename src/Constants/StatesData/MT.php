<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class MT implements ICitiesInfo
{
    public static int $numberCities = 141;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(MT::$numberCities);
        $map->putAll([
            "5100102" => new Map([
                "name" => "Acorizal",
                "zipCode" => [ 78485000, 78489999 ],
                "ibge" => 5100102
            ]),
            "5100201" => new Map([
                "name" => "Água Boa",
                "zipCode" => [ 78635000, 78637999 ],
                "ibge" => 5100201
            ]),
            "5100250" => new Map([
                "name" => "Alta Floresta",
                "zipCode" => [ 78580000, 78586999 ],
                "ibge" => 5100250
            ]),
            "5100300" => new Map([
                "name" => "Alto Araguaia",
                "zipCode" => [ 78780000, 78784999 ],
                "ibge" => 5100300
            ]),
            "5100359" => new Map([
                "name" => "Alto Boa Vista",
                "zipCode" => [ 78665000, 78667999 ],
                "ibge" => 5100359
            ]),
            "5100409" => new Map([
                "name" => "Alto Garças",
                "zipCode" => [ 78770000, 78772999 ],
                "ibge" => 5100409
            ]),
            "5100508" => new Map([
                "name" => "Alto Paraguai",
                "zipCode" => [ 78410000, 78414999 ],
                "ibge" => 5100508
            ]),
            "5100607" => new Map([
                "name" => "Alto Taquari",
                "zipCode" => [ 78785000, 78789999 ],
                "ibge" => 5100607
            ]),
            "5100805" => new Map([
                "name" => "Apiacás",
                "zipCode" => [ 78595000, 78599999 ],
                "ibge" => 5100805
            ]),
            "5101001" => new Map([
                "name" => "Araguaiana",
                "zipCode" => [ 78685000, 78689999 ],
                "ibge" => 5101001
            ]),
            "5101209" => new Map([
                "name" => "Araguainha",
                "zipCode" => [ 78615000, 78619999 ],
                "ibge" => 5101209
            ]),
            "5101258" => new Map([
                "name" => "Araputanga",
                "zipCode" => [ 78260000, 78264999 ],
                "ibge" => 5101258
            ]),
            "5101308" => new Map([
                "name" => "Arenápolis",
                "zipCode" => [ 78420000, 78424999 ],
                "ibge" => 5101308
            ]),
            "5101407" => new Map([
                "name" => "Aripuanã",
                "zipCode" => [ 78325000, 78329999 ],
                "ibge" => 5101407
            ]),
            "5101605" => new Map([
                "name" => "Barão de Melgaço",
                "zipCode" => [ 78190000, 78194999 ],
                "ibge" => 5101605
            ]),
            "5101704" => new Map([
                "name" => "Barra do Bugres",
                "zipCode" => [ 78390000, 78397999 ],
                "ibge" => 5101704
            ]),
            "5101803" => new Map([
                "name" => "Barra do Garças",
                "zipCode" => [ 78600001, 78609999 ],
                "ibge" => 5101803
            ]),
            "5101852" => new Map([
                "name" => "Bom Jesus do Araguaia",
                "zipCode" => [ 78678000, 78679999 ],
                "ibge" => 5101852
            ]),
            "5101902" => new Map([
                "name" => "Brasnorte",
                "zipCode" => [ 78350000, 78359999 ],
                "ibge" => 5101902
            ]),
            "5102504" => new Map([
                "name" => "Cáceres",
                "zipCode" => [ 78200001, 78236999 ],
                "ibge" => 5102504
            ]),
            "5102603" => new Map([
                "name" => "Campinápolis",
                "zipCode" => [ 78630000, 78634999 ],
                "ibge" => 5102603
            ]),
            "5102637" => new Map([
                "name" => "Campo Novo do Parecis",
                "zipCode" => [ 78360000, 78364999 ],
                "ibge" => 5102637
            ]),
            "5102678" => new Map([
                "name" => "Campo Verde",
                "zipCode" => [ 78840000, 78849999 ],
                "ibge" => 5102678
            ]),
            "5102686" => new Map([
                "name" => "Campos de Júlio",
                "zipCode" => [ 78319000, 78319999 ],
                "ibge" => 5102686
            ]),
            "5102694" => new Map([
                "name" => "Canabrava do Norte",
                "zipCode" => [ 78658000, 78659999 ],
                "ibge" => 5102694
            ]),
            "5102702" => new Map([
                "name" => "Canarana",
                "zipCode" => [ 78640000, 78642999 ],
                "ibge" => 5102702
            ]),
            "5102793" => new Map([
                "name" => "Carlinda",
                "zipCode" => [ 78587000, 78589999 ],
                "ibge" => 5102793
            ]),
            "5102850" => new Map([
                "name" => "Castanheira",
                "zipCode" => [ 78345000, 78349999 ],
                "ibge" => 5102850
            ]),
            "5103007" => new Map([
                "name" => "Chapada dos Guimarães",
                "zipCode" => [ 78195000, 78199999 ],
                "ibge" => 5103007
            ]),
            "5103056" => new Map([
                "name" => "Cláudia",
                "zipCode" => [ 78540000, 78542999 ],
                "ibge" => 5103056
            ]),
            "5103106" => new Map([
                "name" => "Cocalinho",
                "zipCode" => [ 78680000, 78684999 ],
                "ibge" => 5103106
            ]),
            "5103205" => new Map([
                "name" => "Colíder",
                "zipCode" => [ 78500000, 78504999 ],
                "ibge" => 5103205
            ]),
            "5103254" => new Map([
                "name" => "Colniza",
                "zipCode" => [ 78335000, 78337999 ],
                "ibge" => 5103254
            ]),
            "5103304" => new Map([
                "name" => "Comodoro",
                "zipCode" => [ 78310000, 78318999 ],
                "ibge" => 5103304
            ]),
            "5103353" => new Map([
                "name" => "Confresa",
                "zipCode" => [ 78652000, 78654999 ],
                "ibge" => 5103353
            ]),
            "5103361" => new Map([
                "name" => "Conquista D'Oeste",
                "zipCode" => [ 78254000, 78254999 ],
                "ibge" => 5103361
            ]),
            "5103379" => new Map([
                "name" => "Cotriguaçu",
                "zipCode" => [ 78330000, 78334999 ],
                "ibge" => 5103379
            ]),
            "5103403" => new Map([
                "name" => "Cuiabá",
                "zipCode" => [ 78000001, 78109999 ],
                "ibge" => 5103403
            ]),
            "5103437" => new Map([
                "name" => "Curvelândia",
                "zipCode" => [ 78237000, 78239999 ],
                "ibge" => 5103437
            ]),
            "5103452" => new Map([
                "name" => "Denise",
                "zipCode" => [ 78380000, 78389999 ],
                "ibge" => 5103452
            ]),
            "5103502" => new Map([
                "name" => "Diamantino",
                "zipCode" => [ 78400000, 78409999 ],
                "ibge" => 5103502
            ]),
            "5103601" => new Map([
                "name" => "Dom Aquino",
                "zipCode" => [ 78830000, 78834999 ],
                "ibge" => 5103601
            ]),
            "5103700" => new Map([
                "name" => "Feliz Natal",
                "zipCode" => [ 78885000, 78886999 ],
                "ibge" => 5103700
            ]),
            "5103809" => new Map([
                "name" => "Figueirópolis D'Oeste",
                "zipCode" => [ 78290000, 78292999 ],
                "ibge" => 5103809
            ]),
            "5103858" => new Map([
                "name" => "Gaúcha do Norte",
                "zipCode" => [ 78875000, 78879999 ],
                "ibge" => 5103858
            ]),
            "5103908" => new Map([
                "name" => "General Carneiro",
                "zipCode" => [ 78620000, 78624999 ],
                "ibge" => 5103908
            ]),
            "5103957" => new Map([
                "name" => "Glória D'Oeste",
                "zipCode" => [ 78293000, 78294999 ],
                "ibge" => 5103957
            ]),
            "5104104" => new Map([
                "name" => "Guarantã do Norte",
                "zipCode" => [ 78520000, 78524999 ],
                "ibge" => 5104104
            ]),
            "5104203" => new Map([
                "name" => "Guiratinga",
                "zipCode" => [ 78760000, 78769999 ],
                "ibge" => 5104203
            ]),
            "5104500" => new Map([
                "name" => "Indiavaí",
                "zipCode" => [ 78295000, 78299999 ],
                "ibge" => 5104500
            ]),
            "5104526" => new Map([
                "name" => "Ipiranga do Norte",
                "zipCode" => [ 78578000, 78578999 ],
                "ibge" => 5104526
            ]),
            "5104542" => new Map([
                "name" => "Itanhangá",
                "zipCode" => [ 78579000, 78579999 ],
                "ibge" => 5104542
            ]),
            "5104559" => new Map([
                "name" => "Itaúba",
                "zipCode" => [ 78510000, 78512999 ],
                "ibge" => 5104559
            ]),
            "5104609" => new Map([
                "name" => "Itiquira",
                "zipCode" => [ 78790000, 78794999 ],
                "ibge" => 5104609
            ]),
            "5104807" => new Map([
                "name" => "Jaciara",
                "zipCode" => [ 78820000, 78829999 ],
                "ibge" => 5104807
            ]),
            "5104906" => new Map([
                "name" => "Jangada",
                "zipCode" => [ 78490000, 78499999 ],
                "ibge" => 5104906
            ]),
            "5105002" => new Map([
                "name" => "Jauru",
                "zipCode" => [ 78255000, 78259999 ],
                "ibge" => 5105002
            ]),
            "5105101" => new Map([
                "name" => "Juara",
                "zipCode" => [ 78575000, 78577999 ],
                "ibge" => 5105101
            ]),
            "5105150" => new Map([
                "name" => "Juína",
                "zipCode" => [ 78320000, 78324999 ],
                "ibge" => 5105150
            ]),
            "5105176" => new Map([
                "name" => "Juruena",
                "zipCode" => [ 78340000, 78344999 ],
                "ibge" => 5105176
            ]),
            "5105200" => new Map([
                "name" => "Juscimeira",
                "zipCode" => [ 78810000, 78819999 ],
                "ibge" => 5105200
            ]),
            "5105234" => new Map([
                "name" => "Lambari D'Oeste",
                "zipCode" => [ 78278000, 78279999 ],
                "ibge" => 5105234
            ]),
            "5105259" => new Map([
                "name" => "Lucas do Rio Verde",
                "zipCode" => [ [     78455000,     78459999 ], [     78460000,     78469999 ] ],
                "ibge" => 5105259
            ]),
            "5105309" => new Map([
                "name" => "Luciara",
                "zipCode" => [ 78660000, 78662999 ],
                "ibge" => 5105309
            ]),
            "5105580" => new Map([
                "name" => "Marcelândia",
                "zipCode" => [ 78535000, 78539999 ],
                "ibge" => 5105580
            ]),
            "5105606" => new Map([
                "name" => "Matupá",
                "zipCode" => [ 78525000, 78527999 ],
                "ibge" => 5105606
            ]),
            "5105622" => new Map([
                "name" => "Mirassol D'Oeste",
                "zipCode" => [ 78280000, 78284999 ],
                "ibge" => 5105622
            ]),
            "5105903" => new Map([
                "name" => "Nobres",
                "zipCode" => [ 78470000, 78479999 ],
                "ibge" => 5105903
            ]),
            "5106000" => new Map([
                "name" => "Nortelândia",
                "zipCode" => [ 78430000, 78434999 ],
                "ibge" => 5106000
            ]),
            "5106109" => new Map([
                "name" => "Nossa Senhora do Livramento",
                "zipCode" => [ 78170000, 78174999 ],
                "ibge" => 5106109
            ]),
            "5106158" => new Map([
                "name" => "Nova Bandeirantes",
                "zipCode" => [ 78565000, 78569999 ],
                "ibge" => 5106158
            ]),
            "5106208" => new Map([
                "name" => "Nova Brasilândia",
                "zipCode" => [ 78860000, 78869999 ],
                "ibge" => 5106208
            ]),
            "5106216" => new Map([
                "name" => "Nova Canaã do Norte",
                "zipCode" => [ 78515000, 78519999 ],
                "ibge" => 5106216
            ]),
            "5108808" => new Map([
                "name" => "Nova Guarita",
                "zipCode" => [ 78508000, 78509999 ],
                "ibge" => 5108808
            ]),
            "5106182" => new Map([
                "name" => "Nova Lacerda",
                "zipCode" => [ 78243000, 78244999 ],
                "ibge" => 5106182
            ]),
            "5108857" => new Map([
                "name" => "Nova Marilândia",
                "zipCode" => [ 78415000, 78419999 ],
                "ibge" => 5108857
            ]),
            "5108907" => new Map([
                "name" => "Nova Maringá",
                "zipCode" => [ 78440000, 78444999 ],
                "ibge" => 5108907
            ]),
            "5108956" => new Map([
                "name" => "Nova Monte Verde",
                "zipCode" => [ 78593000, 78594999 ],
                "ibge" => 5108956
            ]),
            "5106224" => new Map([
                "name" => "Nova Mutum",
                "zipCode" => [ 78450000, 78452999 ],
                "ibge" => 5106224
            ]),
            "5106174" => new Map([
                "name" => "Nova Nazaré",
                "zipCode" => [ 78638000, 78639999 ],
                "ibge" => 5106174
            ]),
            "5106232" => new Map([
                "name" => "Nova Olímpia",
                "zipCode" => [ 78370000, 78379999 ],
                "ibge" => 5106232
            ]),
            "5106190" => new Map([
                "name" => "Nova Santa Helena",
                "zipCode" => [ 78513000, 78514999 ],
                "ibge" => 5106190
            ]),
            "5106240" => new Map([
                "name" => "Nova Ubiratã",
                "zipCode" => [ 78888000, 78889999 ],
                "ibge" => 5106240
            ]),
            "5106257" => new Map([
                "name" => "Nova Xavantina",
                "zipCode" => [ 78690000, 78694999 ],
                "ibge" => 5106257
            ]),
            "5106273" => new Map([
                "name" => "Novo Horizonte do Norte",
                "zipCode" => [ 78570000, 78572999 ],
                "ibge" => 5106273
            ]),
            "5106265" => new Map([
                "name" => "Novo Mundo",
                "zipCode" => [ 78528000, 78529999 ],
                "ibge" => 5106265
            ]),
            "5106315" => new Map([
                "name" => "Novo Santo Antônio",
                "zipCode" => [ 78674000, 78674999 ],
                "ibge" => 5106315
            ]),
            "5106281" => new Map([
                "name" => "Novo São Joaquim",
                "zipCode" => [ 78625000, 78627999 ],
                "ibge" => 5106281
            ]),
            "5106299" => new Map([
                "name" => "Paranaíta",
                "zipCode" => [ 78590000, 78592999 ],
                "ibge" => 5106299
            ]),
            "5106307" => new Map([
                "name" => "Paranatinga",
                "zipCode" => [ 78870000, 78874999 ],
                "ibge" => 5106307
            ]),
            "5106372" => new Map([
                "name" => "Pedra Preta",
                "zipCode" => [ 78795000, 78799999 ],
                "ibge" => 5106372
            ]),
            "5106422" => new Map([
                "name" => "Peixoto de Azevedo",
                "zipCode" => [ 78530000, 78534999 ],
                "ibge" => 5106422
            ]),
            "5106455" => new Map([
                "name" => "Planalto da Serra",
                "zipCode" => [ 78855000, 78859999 ],
                "ibge" => 5106455
            ]),
            "5106505" => new Map([
                "name" => "Poconé",
                "zipCode" => [ 78175000, 78179999 ],
                "ibge" => 5106505
            ]),
            "5106653" => new Map([
                "name" => "Pontal do Araguaia",
                "zipCode" => [ 78698000, 78699999 ],
                "ibge" => 5106653
            ]),
            "5106703" => new Map([
                "name" => "Ponte Branca",
                "zipCode" => [ 78610000, 78612999 ],
                "ibge" => 5106703
            ]),
            "5106752" => new Map([
                "name" => "Pontes e Lacerda",
                "zipCode" => [ 78250000, 78252999 ],
                "ibge" => 5106752
            ]),
            "5106778" => new Map([
                "name" => "Porto Alegre do Norte",
                "zipCode" => [ 78655000, 78657999 ],
                "ibge" => 5106778
            ]),
            "5106802" => new Map([
                "name" => "Porto dos Gaúchos",
                "zipCode" => [ 78560000, 78562999 ],
                "ibge" => 5106802
            ]),
            "5106828" => new Map([
                "name" => "Porto Esperidião",
                "zipCode" => [ 78240000, 78242999 ],
                "ibge" => 5106828
            ]),
            "5106851" => new Map([
                "name" => "Porto Estrela",
                "zipCode" => [ 78398000, 78399999 ],
                "ibge" => 5106851
            ]),
            "5107008" => new Map([
                "name" => "Poxoréu",
                "zipCode" => [ 78800000, 78809999 ],
                "ibge" => 5107008
            ]),
            "5107040" => new Map([
                "name" => "Primavera do Leste",
                "zipCode" => [ 78850000, 78854999 ],
                "ibge" => 5107040
            ]),
            "5107065" => new Map([
                "name" => "Querência",
                "zipCode" => [ 78643000, 78644999 ],
                "ibge" => 5107065
            ]),
            "5107156" => new Map([
                "name" => "Reserva do Cabaçal",
                "zipCode" => [ 78265000, 78269999 ],
                "ibge" => 5107156
            ]),
            "5107180" => new Map([
                "name" => "Ribeirão Cascalheira",
                "zipCode" => [ 78675000, 78677999 ],
                "ibge" => 5107180
            ]),
            "5107198" => new Map([
                "name" => "Ribeirãozinho",
                "zipCode" => [ 78613000, 78614999 ],
                "ibge" => 5107198
            ]),
            "5107206" => new Map([
                "name" => "Rio Branco",
                "zipCode" => [ 78275000, 78277999 ],
                "ibge" => 5107206
            ]),
            "5107578" => new Map([
                "name" => "Rondolândia",
                "zipCode" => [ 78338000, 78339999 ],
                "ibge" => 5107578
            ]),
            "5107602" => new Map([
                "name" => "Rondonópolis",
                "zipCode" => [ 78700001, 78759999 ],
                "ibge" => 5107602
            ]),
            "5107701" => new Map([
                "name" => "Rosário Oeste",
                "zipCode" => [ 78480000, 78484999 ],
                "ibge" => 5107701
            ]),
            "5107750" => new Map([
                "name" => "Salto do Céu",
                "zipCode" => [ 78270000, 78274999 ],
                "ibge" => 5107750
            ]),
            "5107248" => new Map([
                "name" => "Santa Carmem",
                "zipCode" => [ 78545000, 78547999 ],
                "ibge" => 5107248
            ]),
            "5107743" => new Map([
                "name" => "Santa Cruz do Xingu",
                "zipCode" => [ 78664000, 78664999 ],
                "ibge" => 5107743
            ]),
            "5107768" => new Map([
                "name" => "Santa Rita do Trivelato",
                "zipCode" => [ 78445000, 78449999 ],
                "ibge" => 5107768
            ]),
            "5107776" => new Map([
                "name" => "Santa Terezinha",
                "zipCode" => [ 78650000, 78651999 ],
                "ibge" => 5107776
            ]),
            "5107263" => new Map([
                "name" => "Santo Afonso",
                "zipCode" => [ 78425000, 78429999 ],
                "ibge" => 5107263
            ]),
            "5107800" => new Map([
                "name" => "Santo Antônio do Leverger",
                "zipCode" => [ 78180000, 78189999 ],
                "ibge" => 5107800
            ]),
            "5107792" => new Map([
                "name" => "Santo Antônio do Leste",
                "zipCode" => [ 78628000, 78629999 ],
                "ibge" => 5107792
            ]),
            "5107859" => new Map([
                "name" => "São Félix do Araguaia",
                "zipCode" => [ 78670000, 78673999 ],
                "ibge" => 5107859
            ]),
            "5107297" => new Map([
                "name" => "São José do Povo",
                "zipCode" => [ 78773000, 78774999 ],
                "ibge" => 5107297
            ]),
            "5107305" => new Map([
                "name" => "São José do Rio Claro",
                "zipCode" => [ 78435000, 78439999 ],
                "ibge" => 5107305
            ]),
            "5107354" => new Map([
                "name" => "São José do Xingu",
                "zipCode" => [ 78663000, 78663999 ],
                "ibge" => 5107354
            ]),
            "5107107" => new Map([
                "name" => "São José dos Quatro Marcos",
                "zipCode" => [ 78285000, 78289999 ],
                "ibge" => 5107107
            ]),
            "5107404" => new Map([
                "name" => "São Pedro da Cipa",
                "zipCode" => [ 78835000, 78839999 ],
                "ibge" => 5107404
            ]),
            "5107875" => new Map([
                "name" => "Sapezal",
                "zipCode" => [ 78365000, 78369999 ],
                "ibge" => 5107875
            ]),
            "5107883" => new Map([
                "name" => "Serra Nova Dourada",
                "zipCode" => [ 78668000, 78669999 ],
                "ibge" => 5107883
            ]),
            "5107909" => new Map([
                "name" => "Sinop",
                "zipCode" => [ 78548001, 78559999 ],
                "ibge" => 5107909
            ]),
            "5107925" => new Map([
                "name" => "Sorriso",
                "zipCode" => [ 78890001, 78899999 ],
                "ibge" => 5107925
            ]),
            "5107941" => new Map([
                "name" => "Tabaporã",
                "zipCode" => [ 78563000, 78564999 ],
                "ibge" => 5107941
            ]),
            "5107958" => new Map([
                "name" => "Tangará da Serra",
                "zipCode" => [ 78300001, 78309999 ],
                "ibge" => 5107958
            ]),
            "5108006" => new Map([
                "name" => "Tapurah",
                "zipCode" => [ 78573000, 78574999 ],
                "ibge" => 5108006
            ]),
            "5108055" => new Map([
                "name" => "Terra Nova do Norte",
                "zipCode" => [ 78505000, 78507999 ],
                "ibge" => 5108055
            ]),
            "5108105" => new Map([
                "name" => "Tesouro",
                "zipCode" => [ 78775000, 78779999 ],
                "ibge" => 5108105
            ]),
            "5108204" => new Map([
                "name" => "Torixoréu",
                "zipCode" => [ 78695000, 78697999 ],
                "ibge" => 5108204
            ]),
            "5108303" => new Map([
                "name" => "União do Sul",
                "zipCode" => [ 78543000, 78544999 ],
                "ibge" => 5108303
            ]),
            "5108352" => new Map([
                "name" => "Vale de São Domingos",
                "zipCode" => [ 78253000, 78253999 ],
                "ibge" => 5108352
            ]),
            "5108402" => new Map([
                "name" => "Várzea Grande",
                "zipCode" => [ 78110001, 78169999 ],
                "ibge" => 5108402
            ]),
            "5108501" => new Map([
                "name" => "Vera",
                "zipCode" => [ 78880000, 78884999 ],
                "ibge" => 5108501
            ]),
            "5105507" => new Map([
                "name" => "Vila Bela da Santíssima Trindade",
                "zipCode" => [ 78245000, 78249999 ],
                "ibge" => 5105507
            ]),
            "5108600" => new Map([
                "name" => "Vila Rica",
                "zipCode" => [ 78645000, 78649999 ],
                "ibge" => 5108600
            ])
        ]);

        return $map;
    }
}