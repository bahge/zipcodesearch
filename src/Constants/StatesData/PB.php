<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class PB implements ICitiesInfo
{
    public static int $numberCities = 223;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(PB::$numberCities);
        $map->putAll([
            "2500106" => new Map([
                "name" => "Água Branca",
                "zipCode" => [ 58748000, 58749999 ],
                "ibge" => 2500106
            ]),
            "2500205" => new Map([
                "name" => "Aguiar",
                "zipCode" => [ 58778000, 58779999 ],
                "ibge" => 2500205
            ]),
            "2500304" => new Map([
                "name" => "Alagoa Grande",
                "zipCode" => [ 58388000, 58389999 ],
                "ibge" => 2500304
            ]),
            "2500403" => new Map([
                "name" => "Alagoa Nova",
                "zipCode" => [ 58125000, 58127999 ],
                "ibge" => 2500403
            ]),
            "2500502" => new Map([
                "name" => "Alagoinha",
                "zipCode" => [ 58390000, 58392999 ],
                "ibge" => 2500502
            ]),
            "2500536" => new Map([
                "name" => "Alcantil",
                "zipCode" => [ 58460000, 58462999 ],
                "ibge" => 2500536
            ]),
            "2500577" => new Map([
                "name" => "Algodão de Jandaíra",
                "zipCode" => [ 58399000, 58399999 ],
                "ibge" => 2500577
            ]),
            "2500601" => new Map([
                "name" => "Alhandra",
                "zipCode" => [ 58320000, 58321999 ],
                "ibge" => 2500601
            ]),
            "2500734" => new Map([
                "name" => "Amparo",
                "zipCode" => [ 58548000, 58549999 ],
                "ibge" => 2500734
            ]),
            "2500775" => new Map([
                "name" => "Aparecida",
                "zipCode" => [ 58823000, 58823999 ],
                "ibge" => 2500775
            ]),
            "2500809" => new Map([
                "name" => "Araçagi",
                "zipCode" => [ 58270000, 58272999 ],
                "ibge" => 2500809
            ]),
            "2500908" => new Map([
                "name" => "Arara",
                "zipCode" => [ 58396000, 58396999 ],
                "ibge" => 2500908
            ]),
            "2501005" => new Map([
                "name" => "Araruna",
                "zipCode" => [ 58233000, 58234999 ],
                "ibge" => 2501005
            ]),
            "2501104" => new Map([
                "name" => "Areia",
                "zipCode" => [ 58397000, 58397999 ],
                "ibge" => 2501104
            ]),
            "2501153" => new Map([
                "name" => "Areia de Baraúnas",
                "zipCode" => [ 58732000, 58732999 ],
                "ibge" => 2501153
            ]),
            "2501203" => new Map([
                "name" => "Areial",
                "zipCode" => [ 58140000, 58144999 ],
                "ibge" => 2501203
            ]),
            "2501302" => new Map([
                "name" => "Aroeiras",
                "zipCode" => [ 58489000, 58491999 ],
                "ibge" => 2501302
            ]),
            "2501351" => new Map([
                "name" => "Assunção",
                "zipCode" => [ 58685000, 58689999 ],
                "ibge" => 2501351
            ]),
            "2501401" => new Map([
                "name" => "Baía da Traição",
                "zipCode" => [ 58295000, 58296999 ],
                "ibge" => 2501401
            ]),
            "2501500" => new Map([
                "name" => "Bananeiras",
                "zipCode" => [ 58220000, 58224999 ],
                "ibge" => 2501500
            ]),
            "2501534" => new Map([
                "name" => "Baraúna",
                "zipCode" => [ 58188000, 58194999 ],
                "ibge" => 2501534
            ]),
            "2501609" => new Map([
                "name" => "Barra de Santa Rosa",
                "zipCode" => [ 58170000, 58172999 ],
                "ibge" => 2501609
            ]),
            "2501575" => new Map([
                "name" => "Barra de Santana",
                "zipCode" => [ 58458000, 58459999 ],
                "ibge" => 2501575
            ]),
            "2501708" => new Map([
                "name" => "Barra de São Miguel",
                "zipCode" => [ 58483000, 58484999 ],
                "ibge" => 2501708
            ]),
            "2501807" => new Map([
                "name" => "Bayeux",
                "zipCode" => [ 58110001, 58114999 ],
                "ibge" => 2501807
            ]),
            "2501906" => new Map([
                "name" => "Belém",
                "zipCode" => [ 58255000, 58259999 ],
                "ibge" => 2501906
            ]),
            "2502003" => new Map([
                "name" => "Belém do Brejo do Cruz",
                "zipCode" => [ 58895000, 58899999 ],
                "ibge" => 2502003
            ]),
            "2502052" => new Map([
                "name" => "Bernardino Batista",
                "zipCode" => [ 58922000, 58924999 ],
                "ibge" => 2502052
            ]),
            "2502102" => new Map([
                "name" => "Boa Ventura",
                "zipCode" => [ 58993000, 58993999 ],
                "ibge" => 2502102
            ]),
            "2502151" => new Map([
                "name" => "Boa Vista",
                "zipCode" => [ 58123000, 58124999 ],
                "ibge" => 2502151
            ]),
            "2502201" => new Map([
                "name" => "Bom Jesus",
                "zipCode" => [ 58930000, 58932999 ],
                "ibge" => 2502201
            ]),
            "2502300" => new Map([
                "name" => "Bom Sucesso",
                "zipCode" => [ 58887000, 58889999 ],
                "ibge" => 2502300
            ]),
            "2502409" => new Map([
                "name" => "Bonito de Santa Fé",
                "zipCode" => [ 58960000, 58969999 ],
                "ibge" => 2502409
            ]),
            "2502508" => new Map([
                "name" => "Boqueirão",
                "zipCode" => [ 58450000, 58454999 ],
                "ibge" => 2502508
            ]),
            "2502706" => new Map([
                "name" => "Borborema",
                "zipCode" => [ 58394000, 58394999 ],
                "ibge" => 2502706
            ]),
            "2502805" => new Map([
                "name" => "Brejo do Cruz",
                "zipCode" => [ 58890000, 58892999 ],
                "ibge" => 2502805
            ]),
            "2502904" => new Map([
                "name" => "Brejo dos Santos",
                "zipCode" => [ 58880000, 58883999 ],
                "ibge" => 2502904
            ]),
            "2503001" => new Map([
                "name" => "Caaporã",
                "zipCode" => [ 58326000, 58327999 ],
                "ibge" => 2503001
            ]),
            "2503100" => new Map([
                "name" => "Cabaceiras",
                "zipCode" => [ 58480000, 58482999 ],
                "ibge" => 2503100
            ]),
            "2503209" => new Map([
                "name" => "Cabedelo",
                "zipCode" => [ 58100001, 58109999 ],
                "ibge" => 2503209
            ]),
            "2503308" => new Map([
                "name" => "Cachoeira dos Índios",
                "zipCode" => [ 58935000, 58939999 ],
                "ibge" => 2503308
            ]),
            "2503407" => new Map([
                "name" => "Cacimba de Areia",
                "zipCode" => [ 58730000, 58731999 ],
                "ibge" => 2503407
            ]),
            "2503506" => new Map([
                "name" => "Cacimba de Dentro",
                "zipCode" => [ 58230000, 58232999 ],
                "ibge" => 2503506
            ]),
            "2503555" => new Map([
                "name" => "Cacimbas",
                "zipCode" => [ 58698000, 58699999 ],
                "ibge" => 2503555
            ]),
            "2503605" => new Map([
                "name" => "Caiçara",
                "zipCode" => [ 58253000, 58253999 ],
                "ibge" => 2503605
            ]),
            "2503704" => new Map([
                "name" => "Cajazeiras",
                "zipCode" => [ 58900000, 58907999 ],
                "ibge" => 2503704
            ]),
            "2503753" => new Map([
                "name" => "Cajazeirinhas",
                "zipCode" => [ 58855000, 58856999 ],
                "ibge" => 2503753
            ]),
            "2503803" => new Map([
                "name" => "Caldas Brandão",
                "zipCode" => [ 58350000, 58353999 ],
                "ibge" => 2503803
            ]),
            "2503902" => new Map([
                "name" => "Camalaú",
                "zipCode" => [ 58530000, 58534999 ],
                "ibge" => 2503902
            ]),
            "2504009" => new Map([
                "name" => "Campina Grande",
                "zipCode" => [ 58400001, 58449999 ],
                "ibge" => 2504009
            ]),
            "2504033" => new Map([
                "name" => "Capim",
                "zipCode" => [ 58287000, 58288999 ],
                "ibge" => 2504033
            ]),
            "2504074" => new Map([
                "name" => "Caraúbas",
                "zipCode" => [ 58595000, 58599999 ],
                "ibge" => 2504074
            ]),
            "2504108" => new Map([
                "name" => "Carrapateira",
                "zipCode" => [ 58945000, 58949999 ],
                "ibge" => 2504108
            ]),
            "2504157" => new Map([
                "name" => "Casserengue",
                "zipCode" => [ 58238000, 58239999 ],
                "ibge" => 2504157
            ]),
            "2504207" => new Map([
                "name" => "Catingueira",
                "zipCode" => [ 58715000, 58719999 ],
                "ibge" => 2504207
            ]),
            "2504306" => new Map([
                "name" => "Catolé do Rocha",
                "zipCode" => [ 58884000, 58886999 ],
                "ibge" => 2504306
            ]),
            "2504355" => new Map([
                "name" => "Caturité",
                "zipCode" => [ 58455000, 58457999 ],
                "ibge" => 2504355
            ]),
            "2504405" => new Map([
                "name" => "Conceição",
                "zipCode" => [ 58970000, 58977999 ],
                "ibge" => 2504405
            ]),
            "2504504" => new Map([
                "name" => "Condado",
                "zipCode" => [ 58714000, 58714999 ],
                "ibge" => 2504504
            ]),
            "2504603" => new Map([
                "name" => "Conde",
                "zipCode" => [ 58322000, 58323999 ],
                "ibge" => 2504603
            ]),
            "2504702" => new Map([
                "name" => "Congo",
                "zipCode" => [ 58535000, 58539999 ],
                "ibge" => 2504702
            ]),
            "2504801" => new Map([
                "name" => "Coremas",
                "zipCode" => [ 58770000, 58774999 ],
                "ibge" => 2504801
            ]),
            "2504850" => new Map([
                "name" => "Coxixola",
                "zipCode" => [ 58588000, 58589999 ],
                "ibge" => 2504850
            ]),
            "2504900" => new Map([
                "name" => "Cruz do Espírito Santo",
                "zipCode" => [ 58337000, 58337999 ],
                "ibge" => 2504900
            ]),
            "2505006" => new Map([
                "name" => "Cubati",
                "zipCode" => [ 58167000, 58169999 ],
                "ibge" => 2505006
            ]),
            "2505105" => new Map([
                "name" => "Cuité",
                "zipCode" => [ 58175000, 58176999 ],
                "ibge" => 2505105
            ]),
            "2505238" => new Map([
                "name" => "Cuité de Mamanguape",
                "zipCode" => [ 58289000, 58290999 ],
                "ibge" => 2505238
            ]),
            "2505204" => new Map([
                "name" => "Cuitegi",
                "zipCode" => [ 58208000, 58209999 ],
                "ibge" => 2505204
            ]),
            "2505279" => new Map([
                "name" => "Curral de Cima",
                "zipCode" => [ 58291000, 58291999 ],
                "ibge" => 2505279
            ]),
            "2505303" => new Map([
                "name" => "Curral Velho",
                "zipCode" => [ 58990000, 58992999 ],
                "ibge" => 2505303
            ]),
            "2505352" => new Map([
                "name" => "Damião",
                "zipCode" => [ 58173000, 58174999 ],
                "ibge" => 2505352
            ]),
            "2505402" => new Map([
                "name" => "Desterro",
                "zipCode" => [ 58695000, 58697999 ],
                "ibge" => 2505402
            ]),
            "2505600" => new Map([
                "name" => "Diamante",
                "zipCode" => [ 58994000, 58994999 ],
                "ibge" => 2505600
            ]),
            "2505709" => new Map([
                "name" => "Dona Inês",
                "zipCode" => [ 58228000, 58229999 ],
                "ibge" => 2505709
            ]),
            "2505808" => new Map([
                "name" => "Duas Estradas",
                "zipCode" => [ 58265000, 58267999 ],
                "ibge" => 2505808
            ]),
            "2505907" => new Map([
                "name" => "Emas",
                "zipCode" => [ 58763000, 58764999 ],
                "ibge" => 2505907
            ]),
            "2506004" => new Map([
                "name" => "Esperança",
                "zipCode" => [ 58135000, 58139999 ],
                "ibge" => 2506004
            ]),
            "2506103" => new Map([
                "name" => "Fagundes",
                "zipCode" => [ 58487000, 58488999 ],
                "ibge" => 2506103
            ]),
            "2506202" => new Map([
                "name" => "Frei Martinho",
                "zipCode" => [ 58195000, 58199999 ],
                "ibge" => 2506202
            ]),
            "2506251" => new Map([
                "name" => "Gado Bravo",
                "zipCode" => [ 58492000, 58493999 ],
                "ibge" => 2506251
            ]),
            "2506301" => new Map([
                "name" => "Guarabira",
                "zipCode" => [ 58200000, 58207999 ],
                "ibge" => 2506301
            ]),
            "2506400" => new Map([
                "name" => "Gurinhém",
                "zipCode" => [ 58356000, 58359999 ],
                "ibge" => 2506400
            ]),
            "2506509" => new Map([
                "name" => "Gurjão",
                "zipCode" => [ 58670000, 58674999 ],
                "ibge" => 2506509
            ]),
            "2506608" => new Map([
                "name" => "Ibiara",
                "zipCode" => [ 58980000, 58984999 ],
                "ibge" => 2506608
            ]),
            "2502607" => new Map([
                "name" => "Igaracy",
                "zipCode" => [ 58775000, 58777999 ],
                "ibge" => 2502607
            ]),
            "2506707" => new Map([
                "name" => "Imaculada",
                "zipCode" => [ 58745000, 58747999 ],
                "ibge" => 2506707
            ]),
            "2506806" => new Map([
                "name" => "Ingá",
                "zipCode" => [ 58380000, 58381999 ],
                "ibge" => 2506806
            ]),
            "2506905" => new Map([
                "name" => "Itabaiana",
                "zipCode" => [ 58360000, 58369999 ],
                "ibge" => 2506905
            ]),
            "2507002" => new Map([
                "name" => "Itaporanga",
                "zipCode" => [ 58780000, 58783999 ],
                "ibge" => 2507002
            ]),
            "2507101" => new Map([
                "name" => "Itapororoca",
                "zipCode" => [ 58275000, 58277999 ],
                "ibge" => 2507101
            ]),
            "2507200" => new Map([
                "name" => "Itatuba",
                "zipCode" => [ 58378000, 58379999 ],
                "ibge" => 2507200
            ]),
            "2507309" => new Map([
                "name" => "Jacaraú",
                "zipCode" => [ 58278000, 58279999 ],
                "ibge" => 2507309
            ]),
            "2507408" => new Map([
                "name" => "Jericó",
                "zipCode" => [ 58830000, 58831999 ],
                "ibge" => 2507408
            ]),
            "2507507" => new Map([
                "name" => "João Pessoa",
                "zipCode" => [ 58000001, 58099999 ],
                "ibge" => 2507507
            ]),
            "2513653" => new Map([
                "name" => "Joca Claudino",
                "zipCode" => [ 58928000, 58929999 ],
                "ibge" => 2513653
            ]),
            "2507606" => new Map([
                "name" => "Juarez Távora",
                "zipCode" => [ 58387000, 58387999 ],
                "ibge" => 2507606
            ]),
            "2507705" => new Map([
                "name" => "Juazeirinho",
                "zipCode" => [ 58660000, 58664999 ],
                "ibge" => 2507705
            ]),
            "2507804" => new Map([
                "name" => "Junco do Seridó",
                "zipCode" => [ 58640000, 58649999 ],
                "ibge" => 2507804
            ]),
            "2507903" => new Map([
                "name" => "Juripiranga",
                "zipCode" => [ 58330000, 58333999 ],
                "ibge" => 2507903
            ]),
            "2508000" => new Map([
                "name" => "Juru",
                "zipCode" => [ 58750000, 58752999 ],
                "ibge" => 2508000
            ]),
            "2508109" => new Map([
                "name" => "Lagoa",
                "zipCode" => [ 58835000, 58839999 ],
                "ibge" => 2508109
            ]),
            "2508208" => new Map([
                "name" => "Lagoa de Dentro",
                "zipCode" => [ 58250000, 58252999 ],
                "ibge" => 2508208
            ]),
            "2508307" => new Map([
                "name" => "Lagoa Seca",
                "zipCode" => [ 58117000, 58118999 ],
                "ibge" => 2508307
            ]),
            "2508406" => new Map([
                "name" => "Lastro",
                "zipCode" => [ 58820000, 58821999 ],
                "ibge" => 2508406
            ]),
            "2508505" => new Map([
                "name" => "Livramento",
                "zipCode" => [ 58690000, 58694999 ],
                "ibge" => 2508505
            ]),
            "2508554" => new Map([
                "name" => "Logradouro",
                "zipCode" => [ 58254000, 58254999 ],
                "ibge" => 2508554
            ]),
            "2508604" => new Map([
                "name" => "Lucena",
                "zipCode" => [ 58315000, 58319999 ],
                "ibge" => 2508604
            ]),
            "2508703" => new Map([
                "name" => "Mãe D'Água",
                "zipCode" => [ 58740000, 58744999 ],
                "ibge" => 2508703
            ]),
            "2508802" => new Map([
                "name" => "Malta",
                "zipCode" => [ 58713000, 58713999 ],
                "ibge" => 2508802
            ]),
            "2508901" => new Map([
                "name" => "Mamanguape",
                "zipCode" => [ 58280000, 58286999 ],
                "ibge" => 2508901
            ]),
            "2509008" => new Map([
                "name" => "Manaíra",
                "zipCode" => [ 58995000, 58996999 ],
                "ibge" => 2509008
            ]),
            "2509057" => new Map([
                "name" => "Marcação",
                "zipCode" => [ 58294000, 58294999 ],
                "ibge" => 2509057
            ]),
            "2509107" => new Map([
                "name" => "Mari",
                "zipCode" => [ 58345000, 58347999 ],
                "ibge" => 2509107
            ]),
            "2509156" => new Map([
                "name" => "Marizópolis",
                "zipCode" => [ 58819000, 58819999 ],
                "ibge" => 2509156
            ]),
            "2509206" => new Map([
                "name" => "Massaranduba",
                "zipCode" => [ 58120000, 58122999 ],
                "ibge" => 2509206
            ]),
            "2509305" => new Map([
                "name" => "Mataraca",
                "zipCode" => [ 58292000, 58293999 ],
                "ibge" => 2509305
            ]),
            "2509339" => new Map([
                "name" => "Matinhas",
                "zipCode" => [ 58128000, 58134999 ],
                "ibge" => 2509339
            ]),
            "2509370" => new Map([
                "name" => "Mato Grosso",
                "zipCode" => [ 58832000, 58834999 ],
                "ibge" => 2509370
            ]),
            "2509396" => new Map([
                "name" => "Maturéia",
                "zipCode" => [ 58737000, 58739999 ],
                "ibge" => 2509396
            ]),
            "2509404" => new Map([
                "name" => "Mogeiro",
                "zipCode" => [ 58375000, 58377999 ],
                "ibge" => 2509404
            ]),
            "2509503" => new Map([
                "name" => "Montadas",
                "zipCode" => [ 58145000, 58149999 ],
                "ibge" => 2509503
            ]),
            "2509602" => new Map([
                "name" => "Monte Horebe",
                "zipCode" => [ 58950000, 58954999 ],
                "ibge" => 2509602
            ]),
            "2509701" => new Map([
                "name" => "Monteiro",
                "zipCode" => [ 58500000, 58509999 ],
                "ibge" => 2509701
            ]),
            "2509800" => new Map([
                "name" => "Mulungu",
                "zipCode" => [ 58354000, 58355999 ],
                "ibge" => 2509800
            ]),
            "2509909" => new Map([
                "name" => "Natuba",
                "zipCode" => [ 58494000, 58496999 ],
                "ibge" => 2509909
            ]),
            "2510006" => new Map([
                "name" => "Nazarezinho",
                "zipCode" => [ 58817000, 58817999 ],
                "ibge" => 2510006
            ]),
            "2510105" => new Map([
                "name" => "Nova Floresta",
                "zipCode" => [ 58178000, 58179999 ],
                "ibge" => 2510105
            ]),
            "2510204" => new Map([
                "name" => "Nova Olinda",
                "zipCode" => [ 58798000, 58799999 ],
                "ibge" => 2510204
            ]),
            "2510303" => new Map([
                "name" => "Nova Palmeira",
                "zipCode" => [ 58184000, 58186999 ],
                "ibge" => 2510303
            ]),
            "2510402" => new Map([
                "name" => "Olho D'Água",
                "zipCode" => [ 58760000, 58762999 ],
                "ibge" => 2510402
            ]),
            "2510501" => new Map([
                "name" => "Olivedos",
                "zipCode" => [ 58160000, 58166999 ],
                "ibge" => 2510501
            ]),
            "2510600" => new Map([
                "name" => "Ouro Velho",
                "zipCode" => [ 58560000, 58569999 ],
                "ibge" => 2510600
            ]),
            "2510659" => new Map([
                "name" => "Parari",
                "zipCode" => [ 58575000, 58579999 ],
                "ibge" => 2510659
            ]),
            "2510709" => new Map([
                "name" => "Passagem",
                "zipCode" => [ 58734000, 58734999 ],
                "ibge" => 2510709
            ]),
            "2510808" => new Map([
                "name" => "Patos",
                "zipCode" => [ 58700001, 58709999 ],
                "ibge" => 2510808
            ]),
            "2510907" => new Map([
                "name" => "Paulista",
                "zipCode" => [ 58860000, 58864999 ],
                "ibge" => 2510907
            ]),
            "2511004" => new Map([
                "name" => "Pedra Branca",
                "zipCode" => [ 58790000, 58794999 ],
                "ibge" => 2511004
            ]),
            "2511103" => new Map([
                "name" => "Pedra Lavrada",
                "zipCode" => [ 58180000, 58183999 ],
                "ibge" => 2511103
            ]),
            "2511202" => new Map([
                "name" => "Pedras de Fogo",
                "zipCode" => [ 58328000, 58329999 ],
                "ibge" => 2511202
            ]),
            "2512721" => new Map([
                "name" => "Pedro Régis",
                "zipCode" => [ 58273000, 58274999 ],
                "ibge" => 2512721
            ]),
            "2511301" => new Map([
                "name" => "Piancó",
                "zipCode" => [ 58765000, 58769999 ],
                "ibge" => 2511301
            ]),
            "2511400" => new Map([
                "name" => "Picuí",
                "zipCode" => [ 58187000, 58187999 ],
                "ibge" => 2511400
            ]),
            "2511509" => new Map([
                "name" => "Pilar",
                "zipCode" => [ 58338000, 58338999 ],
                "ibge" => 2511509
            ]),
            "2511608" => new Map([
                "name" => "Pilões",
                "zipCode" => [ 58393000, 58393999 ],
                "ibge" => 2511608
            ]),
            "2511707" => new Map([
                "name" => "Pilõezinhos",
                "zipCode" => [ 58210000, 58212999 ],
                "ibge" => 2511707
            ]),
            "2511806" => new Map([
                "name" => "Pirpirituba",
                "zipCode" => [ 58213000, 58219999 ],
                "ibge" => 2511806
            ]),
            "2511905" => new Map([
                "name" => "Pitimbu",
                "zipCode" => [ 58324000, 58325999 ],
                "ibge" => 2511905
            ]),
            "2512002" => new Map([
                "name" => "Pocinhos",
                "zipCode" => [ 58150000, 58154999 ],
                "ibge" => 2512002
            ]),
            "2512036" => new Map([
                "name" => "Poço Dantas",
                "zipCode" => [ 58933000, 58934999 ],
                "ibge" => 2512036
            ]),
            "2512077" => new Map([
                "name" => "Poço de José de Moura",
                "zipCode" => [ 58908000, 58909999 ],
                "ibge" => 2512077
            ]),
            "2512101" => new Map([
                "name" => "Pombal",
                "zipCode" => [ 58840000, 58852999 ],
                "ibge" => 2512101
            ]),
            "2512200" => new Map([
                "name" => "Prata",
                "zipCode" => [ 58550000, 58559999 ],
                "ibge" => 2512200
            ]),
            "2512309" => new Map([
                "name" => "Princesa Isabel",
                "zipCode" => [ 58755000, 58757999 ],
                "ibge" => 2512309
            ]),
            "2512408" => new Map([
                "name" => "Puxinanã",
                "zipCode" => [ 58115000, 58116999 ],
                "ibge" => 2512408
            ]),
            "2512507" => new Map([
                "name" => "Queimadas",
                "zipCode" => [ 58470000, 58479999 ],
                "ibge" => 2512507
            ]),
            "2512606" => new Map([
                "name" => "Quixabá",
                "zipCode" => [ 58733000, 58733999 ],
                "ibge" => 2512606
            ]),
            "2512705" => new Map([
                "name" => "Remígio",
                "zipCode" => [ 58398000, 58398999 ],
                "ibge" => 2512705
            ]),
            "2512747" => new Map([
                "name" => "Riachão",
                "zipCode" => [ 58235000, 58237999 ],
                "ibge" => 2512747
            ]),
            "2512754" => new Map([
                "name" => "Riachão do Bacamarte",
                "zipCode" => [ 58382000, 58384999 ],
                "ibge" => 2512754
            ]),
            "2512762" => new Map([
                "name" => "Riachão do Poço",
                "zipCode" => [ 58348000, 58349999 ],
                "ibge" => 2512762
            ]),
            "2512788" => new Map([
                "name" => "Riacho de Santo Antônio",
                "zipCode" => [ 58465000, 58469999 ],
                "ibge" => 2512788
            ]),
            "2512804" => new Map([
                "name" => "Riacho dos Cavalos",
                "zipCode" => [ 58870000, 58879999 ],
                "ibge" => 2512804
            ]),
            "2512903" => new Map([
                "name" => "Rio Tinto",
                "zipCode" => [ 58297000, 58299999 ],
                "ibge" => 2512903
            ]),
            "2513000" => new Map([
                "name" => "Salgadinho",
                "zipCode" => [ 58650000, 58659999 ],
                "ibge" => 2513000
            ]),
            "2513109" => new Map([
                "name" => "Salgado de São Félix",
                "zipCode" => [ 58370000, 58373999 ],
                "ibge" => 2513109
            ]),
            "2513158" => new Map([
                "name" => "Santa Cecília",
                "zipCode" => [ 58463000, 58464999 ],
                "ibge" => 2513158
            ]),
            "2513208" => new Map([
                "name" => "Santa Cruz",
                "zipCode" => [ 58824000, 58829999 ],
                "ibge" => 2513208
            ]),
            "2513307" => new Map([
                "name" => "Santa Helena",
                "zipCode" => [ 58925000, 58927999 ],
                "ibge" => 2513307
            ]),
            "2513356" => new Map([
                "name" => "Santa Inês",
                "zipCode" => [ 58978000, 58979999 ],
                "ibge" => 2513356
            ]),
            "2513406" => new Map([
                "name" => "Santa Luzia",
                "zipCode" => [ 58600000, 58609999 ],
                "ibge" => 2513406
            ]),
            "2513703" => new Map([
                "name" => "Santa Rita",
                "zipCode" => [ 58300001, 58304999 ],
                "ibge" => 2513703
            ]),
            "2513802" => new Map([
                "name" => "Santa Teresinha",
                "zipCode" => [ 58720000, 58722999 ],
                "ibge" => 2513802
            ]),
            "2513505" => new Map([
                "name" => "Santana de Mangueira",
                "zipCode" => [ 58985000, 58989999 ],
                "ibge" => 2513505
            ]),
            "2513604" => new Map([
                "name" => "Santana dos Garrotes",
                "zipCode" => [ 58795000, 58797999 ],
                "ibge" => 2513604
            ]),
            "2513851" => new Map([
                "name" => "Santo André",
                "zipCode" => [ 58675000, 58679999 ],
                "ibge" => 2513851
            ]),
            "2513927" => new Map([
                "name" => "São Bentinho",
                "zipCode" => [ 58857000, 58859999 ],
                "ibge" => 2513927
            ]),
            "2513901" => new Map([
                "name" => "São Bento",
                "zipCode" => [ 58865000, 58869999 ],
                "ibge" => 2513901
            ]),
            "2513968" => new Map([
                "name" => "São Domingos",
                "zipCode" => [ 58853000, 58854999 ],
                "ibge" => 2513968
            ]),
            "2513943" => new Map([
                "name" => "São Domingos do Cariri",
                "zipCode" => [ 58485000, 58486999 ],
                "ibge" => 2513943
            ]),
            "2513984" => new Map([
                "name" => "São Francisco",
                "zipCode" => [ 58818000, 58818999 ],
                "ibge" => 2513984
            ]),
            "2514008" => new Map([
                "name" => "São João do Cariri",
                "zipCode" => [ 58590000, 58594999 ],
                "ibge" => 2514008
            ]),
            "2500700" => new Map([
                "name" => "São João do Rio do Peixe",
                "zipCode" => [ 58910000, 58914999 ],
                "ibge" => 2500700
            ]),
            "2514107" => new Map([
                "name" => "São João do Tigre",
                "zipCode" => [ 58520000, 58529999 ],
                "ibge" => 2514107
            ]),
            "2514206" => new Map([
                "name" => "São José da Lagoa Tapada",
                "zipCode" => [ 58815000, 58816999 ],
                "ibge" => 2514206
            ]),
            "2514305" => new Map([
                "name" => "São José de Caiana",
                "zipCode" => [ 58784000, 58789999 ],
                "ibge" => 2514305
            ]),
            "2514404" => new Map([
                "name" => "São José de Espinharas",
                "zipCode" => [ 58723000, 58724999 ],
                "ibge" => 2514404
            ]),
            "2514503" => new Map([
                "name" => "São José de Piranhas",
                "zipCode" => [ 58940000, 58944999 ],
                "ibge" => 2514503
            ]),
            "2514552" => new Map([
                "name" => "São José de Princesa",
                "zipCode" => [ 58758000, 58759999 ],
                "ibge" => 2514552
            ]),
            "2514602" => new Map([
                "name" => "São José do Bonfim",
                "zipCode" => [ 58725000, 58729999 ],
                "ibge" => 2514602
            ]),
            "2514651" => new Map([
                "name" => "São José do Brejo do Cruz",
                "zipCode" => [ 58893000, 58894999 ],
                "ibge" => 2514651
            ]),
            "2514701" => new Map([
                "name" => "São José do Sabugi",
                "zipCode" => [ 58610000, 58619999 ],
                "ibge" => 2514701
            ]),
            "2514800" => new Map([
                "name" => "São José dos Cordeiros",
                "zipCode" => [ 58570000, 58574999 ],
                "ibge" => 2514800
            ]),
            "2514453" => new Map([
                "name" => "São José dos Ramos",
                "zipCode" => [ 58339000, 58339999 ],
                "ibge" => 2514453
            ]),
            "2514909" => new Map([
                "name" => "São Mamede",
                "zipCode" => [ 58625000, 58639999 ],
                "ibge" => 2514909
            ]),
            "2515005" => new Map([
                "name" => "São Miguel de Taipu",
                "zipCode" => [ 58334000, 58336999 ],
                "ibge" => 2515005
            ]),
            "2515104" => new Map([
                "name" => "São Sebastião de Lagoa de Roça",
                "zipCode" => [ 58119000, 58119999 ],
                "ibge" => 2515104
            ]),
            "2515203" => new Map([
                "name" => "São Sebastião do Umbuzeiro",
                "zipCode" => [ 58510000, 58514999 ],
                "ibge" => 2515203
            ]),
            "2515401" => new Map([
                "name" => "São Vicente do Seridó",
                "zipCode" => [ 58158000, 58159999 ],
                "ibge" => 2515401
            ]),
            "2515302" => new Map([
                "name" => "Sapé",
                "zipCode" => [ 58340000, 58341999 ],
                "ibge" => 2515302
            ]),
            "2515500" => new Map([
                "name" => "Serra Branca",
                "zipCode" => [ 58580000, 58587999 ],
                "ibge" => 2515500
            ]),
            "2515609" => new Map([
                "name" => "Serra da Raiz",
                "zipCode" => [ 58260000, 58264999 ],
                "ibge" => 2515609
            ]),
            "2515708" => new Map([
                "name" => "Serra Grande",
                "zipCode" => [ 58955000, 58959999 ],
                "ibge" => 2515708
            ]),
            "2515807" => new Map([
                "name" => "Serra Redonda",
                "zipCode" => [ 58385000, 58386999 ],
                "ibge" => 2515807
            ]),
            "2515906" => new Map([
                "name" => "Serraria",
                "zipCode" => [ 58395000, 58395999 ],
                "ibge" => 2515906
            ]),
            "2515930" => new Map([
                "name" => "Sertãozinho",
                "zipCode" => [ 58268000, 58269999 ],
                "ibge" => 2515930
            ]),
            "2515971" => new Map([
                "name" => "Sobrado",
                "zipCode" => [ 58342000, 58344999 ],
                "ibge" => 2515971
            ]),
            "2516003" => new Map([
                "name" => "Solânea",
                "zipCode" => [ 58225000, 58227999 ],
                "ibge" => 2516003
            ]),
            "2516102" => new Map([
                "name" => "Soledade",
                "zipCode" => [ 58155000, 58157999 ],
                "ibge" => 2516102
            ]),
            "2516151" => new Map([
                "name" => "Sossego",
                "zipCode" => [ 58177000, 58177999 ],
                "ibge" => 2516151
            ]),
            "2516201" => new Map([
                "name" => "Sousa",
                "zipCode" => [ 58800001, 58814999 ],
                "ibge" => 2516201
            ]),
            "2516300" => new Map([
                "name" => "Sumé",
                "zipCode" => [ 58540000, 58547999 ],
                "ibge" => 2516300
            ]),
            "2516409" => new Map([
                "name" => "Tacima",
                "zipCode" => [ 58240000, 58249999 ],
                "ibge" => 2516409
            ]),
            "2516508" => new Map([
                "name" => "Taperoá",
                "zipCode" => [ 58680000, 58684999 ],
                "ibge" => 2516508
            ]),
            "2516607" => new Map([
                "name" => "Tavares",
                "zipCode" => [ 58753000, 58754999 ],
                "ibge" => 2516607
            ]),
            "2516706" => new Map([
                "name" => "Teixeira",
                "zipCode" => [ 58735000, 58736999 ],
                "ibge" => 2516706
            ]),
            "2516755" => new Map([
                "name" => "Tenório",
                "zipCode" => [ 58665000, 58669999 ],
                "ibge" => 2516755
            ]),
            "2516805" => new Map([
                "name" => "Triunfo",
                "zipCode" => [ 58920000, 58921999 ],
                "ibge" => 2516805
            ]),
            "2516904" => new Map([
                "name" => "Uiraúna",
                "zipCode" => [ 58915000, 58919999 ],
                "ibge" => 2516904
            ]),
            "2517001" => new Map([
                "name" => "Umbuzeiro",
                "zipCode" => [ 58497000, 58499999 ],
                "ibge" => 2517001
            ]),
            "2517100" => new Map([
                "name" => "Várzea",
                "zipCode" => [ 58620000, 58624999 ],
                "ibge" => 2517100
            ]),
            "2517209" => new Map([
                "name" => "Vieirópolis",
                "zipCode" => [ 58822000, 58822999 ],
                "ibge" => 2517209
            ]),
            "2505501" => new Map([
                "name" => "Vista Serrana",
                "zipCode" => [ 58710000, 58712999 ],
                "ibge" => 2505501
            ]),
            "2517407" => new Map([
                "name" => "Zabelê",
                "zipCode" => [ 58515000, 58519999 ],
                "ibge" => 2517407
            ])
        ]);

        return $map;
    }
}