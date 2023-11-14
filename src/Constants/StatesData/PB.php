<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

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
                "cep" => [ 58748000, 58749999 ],
                "ibge" => 2500106
            ]),
            "2500205" => new Map([
                "name" => "Aguiar",
                "cep" => [ 58778000, 58779999 ],
                "ibge" => 2500205
            ]),
            "2500304" => new Map([
                "name" => "Alagoa Grande",
                "cep" => [ 58388000, 58389999 ],
                "ibge" => 2500304
            ]),
            "2500403" => new Map([
                "name" => "Alagoa Nova",
                "cep" => [ 58125000, 58127999 ],
                "ibge" => 2500403
            ]),
            "2500502" => new Map([
                "name" => "Alagoinha",
                "cep" => [ 58390000, 58392999 ],
                "ibge" => 2500502
            ]),
            "2500536" => new Map([
                "name" => "Alcantil",
                "cep" => [ 58460000, 58462999 ],
                "ibge" => 2500536
            ]),
            "2500577" => new Map([
                "name" => "Algodão de Jandaíra",
                "cep" => [ 58399000, 58399999 ],
                "ibge" => 2500577
            ]),
            "2500601" => new Map([
                "name" => "Alhandra",
                "cep" => [ 58320000, 58321999 ],
                "ibge" => 2500601
            ]),
            "2500734" => new Map([
                "name" => "Amparo",
                "cep" => [ 58548000, 58549999 ],
                "ibge" => 2500734
            ]),
            "2500775" => new Map([
                "name" => "Aparecida",
                "cep" => [ 58823000, 58823999 ],
                "ibge" => 2500775
            ]),
            "2500809" => new Map([
                "name" => "Araçagi",
                "cep" => [ 58270000, 58272999 ],
                "ibge" => 2500809
            ]),
            "2500908" => new Map([
                "name" => "Arara",
                "cep" => [ 58396000, 58396999 ],
                "ibge" => 2500908
            ]),
            "2501005" => new Map([
                "name" => "Araruna",
                "cep" => [ 58233000, 58234999 ],
                "ibge" => 2501005
            ]),
            "2501104" => new Map([
                "name" => "Areia",
                "cep" => [ 58397000, 58397999 ],
                "ibge" => 2501104
            ]),
            "2501153" => new Map([
                "name" => "Areia de Baraúnas",
                "cep" => [ 58732000, 58732999 ],
                "ibge" => 2501153
            ]),
            "2501203" => new Map([
                "name" => "Areial",
                "cep" => [ 58140000, 58144999 ],
                "ibge" => 2501203
            ]),
            "2501302" => new Map([
                "name" => "Aroeiras",
                "cep" => [ 58489000, 58491999 ],
                "ibge" => 2501302
            ]),
            "2501351" => new Map([
                "name" => "Assunção",
                "cep" => [ 58685000, 58689999 ],
                "ibge" => 2501351
            ]),
            "2501401" => new Map([
                "name" => "Baía da Traição",
                "cep" => [ 58295000, 58296999 ],
                "ibge" => 2501401
            ]),
            "2501500" => new Map([
                "name" => "Bananeiras",
                "cep" => [ 58220000, 58224999 ],
                "ibge" => 2501500
            ]),
            "2501534" => new Map([
                "name" => "Baraúna",
                "cep" => [ 58188000, 58194999 ],
                "ibge" => 2501534
            ]),
            "2501609" => new Map([
                "name" => "Barra de Santa Rosa",
                "cep" => [ 58170000, 58172999 ],
                "ibge" => 2501609
            ]),
            "2501575" => new Map([
                "name" => "Barra de Santana",
                "cep" => [ 58458000, 58459999 ],
                "ibge" => 2501575
            ]),
            "2501708" => new Map([
                "name" => "Barra de São Miguel",
                "cep" => [ 58483000, 58484999 ],
                "ibge" => 2501708
            ]),
            "2501807" => new Map([
                "name" => "Bayeux",
                "cep" => [ 58110001, 58114999 ],
                "ibge" => 2501807
            ]),
            "2501906" => new Map([
                "name" => "Belém",
                "cep" => [ 58255000, 58259999 ],
                "ibge" => 2501906
            ]),
            "2502003" => new Map([
                "name" => "Belém do Brejo do Cruz",
                "cep" => [ 58895000, 58899999 ],
                "ibge" => 2502003
            ]),
            "2502052" => new Map([
                "name" => "Bernardino Batista",
                "cep" => [ 58922000, 58924999 ],
                "ibge" => 2502052
            ]),
            "2502102" => new Map([
                "name" => "Boa Ventura",
                "cep" => [ 58993000, 58993999 ],
                "ibge" => 2502102
            ]),
            "2502151" => new Map([
                "name" => "Boa Vista",
                "cep" => [ 58123000, 58124999 ],
                "ibge" => 2502151
            ]),
            "2502201" => new Map([
                "name" => "Bom Jesus",
                "cep" => [ 58930000, 58932999 ],
                "ibge" => 2502201
            ]),
            "2502300" => new Map([
                "name" => "Bom Sucesso",
                "cep" => [ 58887000, 58889999 ],
                "ibge" => 2502300
            ]),
            "2502409" => new Map([
                "name" => "Bonito de Santa Fé",
                "cep" => [ 58960000, 58969999 ],
                "ibge" => 2502409
            ]),
            "2502508" => new Map([
                "name" => "Boqueirão",
                "cep" => [ 58450000, 58454999 ],
                "ibge" => 2502508
            ]),
            "2502706" => new Map([
                "name" => "Borborema",
                "cep" => [ 58394000, 58394999 ],
                "ibge" => 2502706
            ]),
            "2502805" => new Map([
                "name" => "Brejo do Cruz",
                "cep" => [ 58890000, 58892999 ],
                "ibge" => 2502805
            ]),
            "2502904" => new Map([
                "name" => "Brejo dos Santos",
                "cep" => [ 58880000, 58883999 ],
                "ibge" => 2502904
            ]),
            "2503001" => new Map([
                "name" => "Caaporã",
                "cep" => [ 58326000, 58327999 ],
                "ibge" => 2503001
            ]),
            "2503100" => new Map([
                "name" => "Cabaceiras",
                "cep" => [ 58480000, 58482999 ],
                "ibge" => 2503100
            ]),
            "2503209" => new Map([
                "name" => "Cabedelo",
                "cep" => [ 58100001, 58109999 ],
                "ibge" => 2503209
            ]),
            "2503308" => new Map([
                "name" => "Cachoeira dos Índios",
                "cep" => [ 58935000, 58939999 ],
                "ibge" => 2503308
            ]),
            "2503407" => new Map([
                "name" => "Cacimba de Areia",
                "cep" => [ 58730000, 58731999 ],
                "ibge" => 2503407
            ]),
            "2503506" => new Map([
                "name" => "Cacimba de Dentro",
                "cep" => [ 58230000, 58232999 ],
                "ibge" => 2503506
            ]),
            "2503555" => new Map([
                "name" => "Cacimbas",
                "cep" => [ 58698000, 58699999 ],
                "ibge" => 2503555
            ]),
            "2503605" => new Map([
                "name" => "Caiçara",
                "cep" => [ 58253000, 58253999 ],
                "ibge" => 2503605
            ]),
            "2503704" => new Map([
                "name" => "Cajazeiras",
                "cep" => [ 58900000, 58907999 ],
                "ibge" => 2503704
            ]),
            "2503753" => new Map([
                "name" => "Cajazeirinhas",
                "cep" => [ 58855000, 58856999 ],
                "ibge" => 2503753
            ]),
            "2503803" => new Map([
                "name" => "Caldas Brandão",
                "cep" => [ 58350000, 58353999 ],
                "ibge" => 2503803
            ]),
            "2503902" => new Map([
                "name" => "Camalaú",
                "cep" => [ 58530000, 58534999 ],
                "ibge" => 2503902
            ]),
            "2504009" => new Map([
                "name" => "Campina Grande",
                "cep" => [ 58400001, 58449999 ],
                "ibge" => 2504009
            ]),
            "2504033" => new Map([
                "name" => "Capim",
                "cep" => [ 58287000, 58288999 ],
                "ibge" => 2504033
            ]),
            "2504074" => new Map([
                "name" => "Caraúbas",
                "cep" => [ 58595000, 58599999 ],
                "ibge" => 2504074
            ]),
            "2504108" => new Map([
                "name" => "Carrapateira",
                "cep" => [ 58945000, 58949999 ],
                "ibge" => 2504108
            ]),
            "2504157" => new Map([
                "name" => "Casserengue",
                "cep" => [ 58238000, 58239999 ],
                "ibge" => 2504157
            ]),
            "2504207" => new Map([
                "name" => "Catingueira",
                "cep" => [ 58715000, 58719999 ],
                "ibge" => 2504207
            ]),
            "2504306" => new Map([
                "name" => "Catolé do Rocha",
                "cep" => [ 58884000, 58886999 ],
                "ibge" => 2504306
            ]),
            "2504355" => new Map([
                "name" => "Caturité",
                "cep" => [ 58455000, 58457999 ],
                "ibge" => 2504355
            ]),
            "2504405" => new Map([
                "name" => "Conceição",
                "cep" => [ 58970000, 58977999 ],
                "ibge" => 2504405
            ]),
            "2504504" => new Map([
                "name" => "Condado",
                "cep" => [ 58714000, 58714999 ],
                "ibge" => 2504504
            ]),
            "2504603" => new Map([
                "name" => "Conde",
                "cep" => [ 58322000, 58323999 ],
                "ibge" => 2504603
            ]),
            "2504702" => new Map([
                "name" => "Congo",
                "cep" => [ 58535000, 58539999 ],
                "ibge" => 2504702
            ]),
            "2504801" => new Map([
                "name" => "Coremas",
                "cep" => [ 58770000, 58774999 ],
                "ibge" => 2504801
            ]),
            "2504850" => new Map([
                "name" => "Coxixola",
                "cep" => [ 58588000, 58589999 ],
                "ibge" => 2504850
            ]),
            "2504900" => new Map([
                "name" => "Cruz do Espírito Santo",
                "cep" => [ 58337000, 58337999 ],
                "ibge" => 2504900
            ]),
            "2505006" => new Map([
                "name" => "Cubati",
                "cep" => [ 58167000, 58169999 ],
                "ibge" => 2505006
            ]),
            "2505105" => new Map([
                "name" => "Cuité",
                "cep" => [ 58175000, 58176999 ],
                "ibge" => 2505105
            ]),
            "2505238" => new Map([
                "name" => "Cuité de Mamanguape",
                "cep" => [ 58289000, 58290999 ],
                "ibge" => 2505238
            ]),
            "2505204" => new Map([
                "name" => "Cuitegi",
                "cep" => [ 58208000, 58209999 ],
                "ibge" => 2505204
            ]),
            "2505279" => new Map([
                "name" => "Curral de Cima",
                "cep" => [ 58291000, 58291999 ],
                "ibge" => 2505279
            ]),
            "2505303" => new Map([
                "name" => "Curral Velho",
                "cep" => [ 58990000, 58992999 ],
                "ibge" => 2505303
            ]),
            "2505352" => new Map([
                "name" => "Damião",
                "cep" => [ 58173000, 58174999 ],
                "ibge" => 2505352
            ]),
            "2505402" => new Map([
                "name" => "Desterro",
                "cep" => [ 58695000, 58697999 ],
                "ibge" => 2505402
            ]),
            "2505600" => new Map([
                "name" => "Diamante",
                "cep" => [ 58994000, 58994999 ],
                "ibge" => 2505600
            ]),
            "2505709" => new Map([
                "name" => "Dona Inês",
                "cep" => [ 58228000, 58229999 ],
                "ibge" => 2505709
            ]),
            "2505808" => new Map([
                "name" => "Duas Estradas",
                "cep" => [ 58265000, 58267999 ],
                "ibge" => 2505808
            ]),
            "2505907" => new Map([
                "name" => "Emas",
                "cep" => [ 58763000, 58764999 ],
                "ibge" => 2505907
            ]),
            "2506004" => new Map([
                "name" => "Esperança",
                "cep" => [ 58135000, 58139999 ],
                "ibge" => 2506004
            ]),
            "2506103" => new Map([
                "name" => "Fagundes",
                "cep" => [ 58487000, 58488999 ],
                "ibge" => 2506103
            ]),
            "2506202" => new Map([
                "name" => "Frei Martinho",
                "cep" => [ 58195000, 58199999 ],
                "ibge" => 2506202
            ]),
            "2506251" => new Map([
                "name" => "Gado Bravo",
                "cep" => [ 58492000, 58493999 ],
                "ibge" => 2506251
            ]),
            "2506301" => new Map([
                "name" => "Guarabira",
                "cep" => [ 58200000, 58207999 ],
                "ibge" => 2506301
            ]),
            "2506400" => new Map([
                "name" => "Gurinhém",
                "cep" => [ 58356000, 58359999 ],
                "ibge" => 2506400
            ]),
            "2506509" => new Map([
                "name" => "Gurjão",
                "cep" => [ 58670000, 58674999 ],
                "ibge" => 2506509
            ]),
            "2506608" => new Map([
                "name" => "Ibiara",
                "cep" => [ 58980000, 58984999 ],
                "ibge" => 2506608
            ]),
            "2502607" => new Map([
                "name" => "Igaracy",
                "cep" => [ 58775000, 58777999 ],
                "ibge" => 2502607
            ]),
            "2506707" => new Map([
                "name" => "Imaculada",
                "cep" => [ 58745000, 58747999 ],
                "ibge" => 2506707
            ]),
            "2506806" => new Map([
                "name" => "Ingá",
                "cep" => [ 58380000, 58381999 ],
                "ibge" => 2506806
            ]),
            "2506905" => new Map([
                "name" => "Itabaiana",
                "cep" => [ 58360000, 58369999 ],
                "ibge" => 2506905
            ]),
            "2507002" => new Map([
                "name" => "Itaporanga",
                "cep" => [ 58780000, 58783999 ],
                "ibge" => 2507002
            ]),
            "2507101" => new Map([
                "name" => "Itapororoca",
                "cep" => [ 58275000, 58277999 ],
                "ibge" => 2507101
            ]),
            "2507200" => new Map([
                "name" => "Itatuba",
                "cep" => [ 58378000, 58379999 ],
                "ibge" => 2507200
            ]),
            "2507309" => new Map([
                "name" => "Jacaraú",
                "cep" => [ 58278000, 58279999 ],
                "ibge" => 2507309
            ]),
            "2507408" => new Map([
                "name" => "Jericó",
                "cep" => [ 58830000, 58831999 ],
                "ibge" => 2507408
            ]),
            "2507507" => new Map([
                "name" => "João Pessoa",
                "cep" => [ 58000001, 58099999 ],
                "ibge" => 2507507
            ]),
            "2513653" => new Map([
                "name" => "Joca Claudino",
                "cep" => [ 58928000, 58929999 ],
                "ibge" => 2513653
            ]),
            "2507606" => new Map([
                "name" => "Juarez Távora",
                "cep" => [ 58387000, 58387999 ],
                "ibge" => 2507606
            ]),
            "2507705" => new Map([
                "name" => "Juazeirinho",
                "cep" => [ 58660000, 58664999 ],
                "ibge" => 2507705
            ]),
            "2507804" => new Map([
                "name" => "Junco do Seridó",
                "cep" => [ 58640000, 58649999 ],
                "ibge" => 2507804
            ]),
            "2507903" => new Map([
                "name" => "Juripiranga",
                "cep" => [ 58330000, 58333999 ],
                "ibge" => 2507903
            ]),
            "2508000" => new Map([
                "name" => "Juru",
                "cep" => [ 58750000, 58752999 ],
                "ibge" => 2508000
            ]),
            "2508109" => new Map([
                "name" => "Lagoa",
                "cep" => [ 58835000, 58839999 ],
                "ibge" => 2508109
            ]),
            "2508208" => new Map([
                "name" => "Lagoa de Dentro",
                "cep" => [ 58250000, 58252999 ],
                "ibge" => 2508208
            ]),
            "2508307" => new Map([
                "name" => "Lagoa Seca",
                "cep" => [ 58117000, 58118999 ],
                "ibge" => 2508307
            ]),
            "2508406" => new Map([
                "name" => "Lastro",
                "cep" => [ 58820000, 58821999 ],
                "ibge" => 2508406
            ]),
            "2508505" => new Map([
                "name" => "Livramento",
                "cep" => [ 58690000, 58694999 ],
                "ibge" => 2508505
            ]),
            "2508554" => new Map([
                "name" => "Logradouro",
                "cep" => [ 58254000, 58254999 ],
                "ibge" => 2508554
            ]),
            "2508604" => new Map([
                "name" => "Lucena",
                "cep" => [ 58315000, 58319999 ],
                "ibge" => 2508604
            ]),
            "2508703" => new Map([
                "name" => "Mãe D'Água",
                "cep" => [ 58740000, 58744999 ],
                "ibge" => 2508703
            ]),
            "2508802" => new Map([
                "name" => "Malta",
                "cep" => [ 58713000, 58713999 ],
                "ibge" => 2508802
            ]),
            "2508901" => new Map([
                "name" => "Mamanguape",
                "cep" => [ 58280000, 58286999 ],
                "ibge" => 2508901
            ]),
            "2509008" => new Map([
                "name" => "Manaíra",
                "cep" => [ 58995000, 58996999 ],
                "ibge" => 2509008
            ]),
            "2509057" => new Map([
                "name" => "Marcação",
                "cep" => [ 58294000, 58294999 ],
                "ibge" => 2509057
            ]),
            "2509107" => new Map([
                "name" => "Mari",
                "cep" => [ 58345000, 58347999 ],
                "ibge" => 2509107
            ]),
            "2509156" => new Map([
                "name" => "Marizópolis",
                "cep" => [ 58819000, 58819999 ],
                "ibge" => 2509156
            ]),
            "2509206" => new Map([
                "name" => "Massaranduba",
                "cep" => [ 58120000, 58122999 ],
                "ibge" => 2509206
            ]),
            "2509305" => new Map([
                "name" => "Mataraca",
                "cep" => [ 58292000, 58293999 ],
                "ibge" => 2509305
            ]),
            "2509339" => new Map([
                "name" => "Matinhas",
                "cep" => [ 58128000, 58134999 ],
                "ibge" => 2509339
            ]),
            "2509370" => new Map([
                "name" => "Mato Grosso",
                "cep" => [ 58832000, 58834999 ],
                "ibge" => 2509370
            ]),
            "2509396" => new Map([
                "name" => "Maturéia",
                "cep" => [ 58737000, 58739999 ],
                "ibge" => 2509396
            ]),
            "2509404" => new Map([
                "name" => "Mogeiro",
                "cep" => [ 58375000, 58377999 ],
                "ibge" => 2509404
            ]),
            "2509503" => new Map([
                "name" => "Montadas",
                "cep" => [ 58145000, 58149999 ],
                "ibge" => 2509503
            ]),
            "2509602" => new Map([
                "name" => "Monte Horebe",
                "cep" => [ 58950000, 58954999 ],
                "ibge" => 2509602
            ]),
            "2509701" => new Map([
                "name" => "Monteiro",
                "cep" => [ 58500000, 58509999 ],
                "ibge" => 2509701
            ]),
            "2509800" => new Map([
                "name" => "Mulungu",
                "cep" => [ 58354000, 58355999 ],
                "ibge" => 2509800
            ]),
            "2509909" => new Map([
                "name" => "Natuba",
                "cep" => [ 58494000, 58496999 ],
                "ibge" => 2509909
            ]),
            "2510006" => new Map([
                "name" => "Nazarezinho",
                "cep" => [ 58817000, 58817999 ],
                "ibge" => 2510006
            ]),
            "2510105" => new Map([
                "name" => "Nova Floresta",
                "cep" => [ 58178000, 58179999 ],
                "ibge" => 2510105
            ]),
            "2510204" => new Map([
                "name" => "Nova Olinda",
                "cep" => [ 58798000, 58799999 ],
                "ibge" => 2510204
            ]),
            "2510303" => new Map([
                "name" => "Nova Palmeira",
                "cep" => [ 58184000, 58186999 ],
                "ibge" => 2510303
            ]),
            "2510402" => new Map([
                "name" => "Olho D'Água",
                "cep" => [ 58760000, 58762999 ],
                "ibge" => 2510402
            ]),
            "2510501" => new Map([
                "name" => "Olivedos",
                "cep" => [ 58160000, 58166999 ],
                "ibge" => 2510501
            ]),
            "2510600" => new Map([
                "name" => "Ouro Velho",
                "cep" => [ 58560000, 58569999 ],
                "ibge" => 2510600
            ]),
            "2510659" => new Map([
                "name" => "Parari",
                "cep" => [ 58575000, 58579999 ],
                "ibge" => 2510659
            ]),
            "2510709" => new Map([
                "name" => "Passagem",
                "cep" => [ 58734000, 58734999 ],
                "ibge" => 2510709
            ]),
            "2510808" => new Map([
                "name" => "Patos",
                "cep" => [ 58700001, 58709999 ],
                "ibge" => 2510808
            ]),
            "2510907" => new Map([
                "name" => "Paulista",
                "cep" => [ 58860000, 58864999 ],
                "ibge" => 2510907
            ]),
            "2511004" => new Map([
                "name" => "Pedra Branca",
                "cep" => [ 58790000, 58794999 ],
                "ibge" => 2511004
            ]),
            "2511103" => new Map([
                "name" => "Pedra Lavrada",
                "cep" => [ 58180000, 58183999 ],
                "ibge" => 2511103
            ]),
            "2511202" => new Map([
                "name" => "Pedras de Fogo",
                "cep" => [ 58328000, 58329999 ],
                "ibge" => 2511202
            ]),
            "2512721" => new Map([
                "name" => "Pedro Régis",
                "cep" => [ 58273000, 58274999 ],
                "ibge" => 2512721
            ]),
            "2511301" => new Map([
                "name" => "Piancó",
                "cep" => [ 58765000, 58769999 ],
                "ibge" => 2511301
            ]),
            "2511400" => new Map([
                "name" => "Picuí",
                "cep" => [ 58187000, 58187999 ],
                "ibge" => 2511400
            ]),
            "2511509" => new Map([
                "name" => "Pilar",
                "cep" => [ 58338000, 58338999 ],
                "ibge" => 2511509
            ]),
            "2511608" => new Map([
                "name" => "Pilões",
                "cep" => [ 58393000, 58393999 ],
                "ibge" => 2511608
            ]),
            "2511707" => new Map([
                "name" => "Pilõezinhos",
                "cep" => [ 58210000, 58212999 ],
                "ibge" => 2511707
            ]),
            "2511806" => new Map([
                "name" => "Pirpirituba",
                "cep" => [ 58213000, 58219999 ],
                "ibge" => 2511806
            ]),
            "2511905" => new Map([
                "name" => "Pitimbu",
                "cep" => [ 58324000, 58325999 ],
                "ibge" => 2511905
            ]),
            "2512002" => new Map([
                "name" => "Pocinhos",
                "cep" => [ 58150000, 58154999 ],
                "ibge" => 2512002
            ]),
            "2512036" => new Map([
                "name" => "Poço Dantas",
                "cep" => [ 58933000, 58934999 ],
                "ibge" => 2512036
            ]),
            "2512077" => new Map([
                "name" => "Poço de José de Moura",
                "cep" => [ 58908000, 58909999 ],
                "ibge" => 2512077
            ]),
            "2512101" => new Map([
                "name" => "Pombal",
                "cep" => [ 58840000, 58852999 ],
                "ibge" => 2512101
            ]),
            "2512200" => new Map([
                "name" => "Prata",
                "cep" => [ 58550000, 58559999 ],
                "ibge" => 2512200
            ]),
            "2512309" => new Map([
                "name" => "Princesa Isabel",
                "cep" => [ 58755000, 58757999 ],
                "ibge" => 2512309
            ]),
            "2512408" => new Map([
                "name" => "Puxinanã",
                "cep" => [ 58115000, 58116999 ],
                "ibge" => 2512408
            ]),
            "2512507" => new Map([
                "name" => "Queimadas",
                "cep" => [ 58470000, 58479999 ],
                "ibge" => 2512507
            ]),
            "2512606" => new Map([
                "name" => "Quixabá",
                "cep" => [ 58733000, 58733999 ],
                "ibge" => 2512606
            ]),
            "2512705" => new Map([
                "name" => "Remígio",
                "cep" => [ 58398000, 58398999 ],
                "ibge" => 2512705
            ]),
            "2512747" => new Map([
                "name" => "Riachão",
                "cep" => [ 58235000, 58237999 ],
                "ibge" => 2512747
            ]),
            "2512754" => new Map([
                "name" => "Riachão do Bacamarte",
                "cep" => [ 58382000, 58384999 ],
                "ibge" => 2512754
            ]),
            "2512762" => new Map([
                "name" => "Riachão do Poço",
                "cep" => [ 58348000, 58349999 ],
                "ibge" => 2512762
            ]),
            "2512788" => new Map([
                "name" => "Riacho de Santo Antônio",
                "cep" => [ 58465000, 58469999 ],
                "ibge" => 2512788
            ]),
            "2512804" => new Map([
                "name" => "Riacho dos Cavalos",
                "cep" => [ 58870000, 58879999 ],
                "ibge" => 2512804
            ]),
            "2512903" => new Map([
                "name" => "Rio Tinto",
                "cep" => [ 58297000, 58299999 ],
                "ibge" => 2512903
            ]),
            "2513000" => new Map([
                "name" => "Salgadinho",
                "cep" => [ 58650000, 58659999 ],
                "ibge" => 2513000
            ]),
            "2513109" => new Map([
                "name" => "Salgado de São Félix",
                "cep" => [ 58370000, 58373999 ],
                "ibge" => 2513109
            ]),
            "2513158" => new Map([
                "name" => "Santa Cecília",
                "cep" => [ 58463000, 58464999 ],
                "ibge" => 2513158
            ]),
            "2513208" => new Map([
                "name" => "Santa Cruz",
                "cep" => [ 58824000, 58829999 ],
                "ibge" => 2513208
            ]),
            "2513307" => new Map([
                "name" => "Santa Helena",
                "cep" => [ 58925000, 58927999 ],
                "ibge" => 2513307
            ]),
            "2513356" => new Map([
                "name" => "Santa Inês",
                "cep" => [ 58978000, 58979999 ],
                "ibge" => 2513356
            ]),
            "2513406" => new Map([
                "name" => "Santa Luzia",
                "cep" => [ 58600000, 58609999 ],
                "ibge" => 2513406
            ]),
            "2513703" => new Map([
                "name" => "Santa Rita",
                "cep" => [ 58300001, 58304999 ],
                "ibge" => 2513703
            ]),
            "2513802" => new Map([
                "name" => "Santa Teresinha",
                "cep" => [ 58720000, 58722999 ],
                "ibge" => 2513802
            ]),
            "2513505" => new Map([
                "name" => "Santana de Mangueira",
                "cep" => [ 58985000, 58989999 ],
                "ibge" => 2513505
            ]),
            "2513604" => new Map([
                "name" => "Santana dos Garrotes",
                "cep" => [ 58795000, 58797999 ],
                "ibge" => 2513604
            ]),
            "2513851" => new Map([
                "name" => "Santo André",
                "cep" => [ 58675000, 58679999 ],
                "ibge" => 2513851
            ]),
            "2513927" => new Map([
                "name" => "São Bentinho",
                "cep" => [ 58857000, 58859999 ],
                "ibge" => 2513927
            ]),
            "2513901" => new Map([
                "name" => "São Bento",
                "cep" => [ 58865000, 58869999 ],
                "ibge" => 2513901
            ]),
            "2513968" => new Map([
                "name" => "São Domingos",
                "cep" => [ 58853000, 58854999 ],
                "ibge" => 2513968
            ]),
            "2513943" => new Map([
                "name" => "São Domingos do Cariri",
                "cep" => [ 58485000, 58486999 ],
                "ibge" => 2513943
            ]),
            "2513984" => new Map([
                "name" => "São Francisco",
                "cep" => [ 58818000, 58818999 ],
                "ibge" => 2513984
            ]),
            "2514008" => new Map([
                "name" => "São João do Cariri",
                "cep" => [ 58590000, 58594999 ],
                "ibge" => 2514008
            ]),
            "2500700" => new Map([
                "name" => "São João do Rio do Peixe",
                "cep" => [ 58910000, 58914999 ],
                "ibge" => 2500700
            ]),
            "2514107" => new Map([
                "name" => "São João do Tigre",
                "cep" => [ 58520000, 58529999 ],
                "ibge" => 2514107
            ]),
            "2514206" => new Map([
                "name" => "São José da Lagoa Tapada",
                "cep" => [ 58815000, 58816999 ],
                "ibge" => 2514206
            ]),
            "2514305" => new Map([
                "name" => "São José de Caiana",
                "cep" => [ 58784000, 58789999 ],
                "ibge" => 2514305
            ]),
            "2514404" => new Map([
                "name" => "São José de Espinharas",
                "cep" => [ 58723000, 58724999 ],
                "ibge" => 2514404
            ]),
            "2514503" => new Map([
                "name" => "São José de Piranhas",
                "cep" => [ 58940000, 58944999 ],
                "ibge" => 2514503
            ]),
            "2514552" => new Map([
                "name" => "São José de Princesa",
                "cep" => [ 58758000, 58759999 ],
                "ibge" => 2514552
            ]),
            "2514602" => new Map([
                "name" => "São José do Bonfim",
                "cep" => [ 58725000, 58729999 ],
                "ibge" => 2514602
            ]),
            "2514651" => new Map([
                "name" => "São José do Brejo do Cruz",
                "cep" => [ 58893000, 58894999 ],
                "ibge" => 2514651
            ]),
            "2514701" => new Map([
                "name" => "São José do Sabugi",
                "cep" => [ 58610000, 58619999 ],
                "ibge" => 2514701
            ]),
            "2514800" => new Map([
                "name" => "São José dos Cordeiros",
                "cep" => [ 58570000, 58574999 ],
                "ibge" => 2514800
            ]),
            "2514453" => new Map([
                "name" => "São José dos Ramos",
                "cep" => [ 58339000, 58339999 ],
                "ibge" => 2514453
            ]),
            "2514909" => new Map([
                "name" => "São Mamede",
                "cep" => [ 58625000, 58639999 ],
                "ibge" => 2514909
            ]),
            "2515005" => new Map([
                "name" => "São Miguel de Taipu",
                "cep" => [ 58334000, 58336999 ],
                "ibge" => 2515005
            ]),
            "2515104" => new Map([
                "name" => "São Sebastião de Lagoa de Roça",
                "cep" => [ 58119000, 58119999 ],
                "ibge" => 2515104
            ]),
            "2515203" => new Map([
                "name" => "São Sebastião do Umbuzeiro",
                "cep" => [ 58510000, 58514999 ],
                "ibge" => 2515203
            ]),
            "2515401" => new Map([
                "name" => "São Vicente do Seridó",
                "cep" => [ 58158000, 58159999 ],
                "ibge" => 2515401
            ]),
            "2515302" => new Map([
                "name" => "Sapé",
                "cep" => [ 58340000, 58341999 ],
                "ibge" => 2515302
            ]),
            "2515500" => new Map([
                "name" => "Serra Branca",
                "cep" => [ 58580000, 58587999 ],
                "ibge" => 2515500
            ]),
            "2515609" => new Map([
                "name" => "Serra da Raiz",
                "cep" => [ 58260000, 58264999 ],
                "ibge" => 2515609
            ]),
            "2515708" => new Map([
                "name" => "Serra Grande",
                "cep" => [ 58955000, 58959999 ],
                "ibge" => 2515708
            ]),
            "2515807" => new Map([
                "name" => "Serra Redonda",
                "cep" => [ 58385000, 58386999 ],
                "ibge" => 2515807
            ]),
            "2515906" => new Map([
                "name" => "Serraria",
                "cep" => [ 58395000, 58395999 ],
                "ibge" => 2515906
            ]),
            "2515930" => new Map([
                "name" => "Sertãozinho",
                "cep" => [ 58268000, 58269999 ],
                "ibge" => 2515930
            ]),
            "2515971" => new Map([
                "name" => "Sobrado",
                "cep" => [ 58342000, 58344999 ],
                "ibge" => 2515971
            ]),
            "2516003" => new Map([
                "name" => "Solânea",
                "cep" => [ 58225000, 58227999 ],
                "ibge" => 2516003
            ]),
            "2516102" => new Map([
                "name" => "Soledade",
                "cep" => [ 58155000, 58157999 ],
                "ibge" => 2516102
            ]),
            "2516151" => new Map([
                "name" => "Sossego",
                "cep" => [ 58177000, 58177999 ],
                "ibge" => 2516151
            ]),
            "2516201" => new Map([
                "name" => "Sousa",
                "cep" => [ 58800001, 58814999 ],
                "ibge" => 2516201
            ]),
            "2516300" => new Map([
                "name" => "Sumé",
                "cep" => [ 58540000, 58547999 ],
                "ibge" => 2516300
            ]),
            "2516409" => new Map([
                "name" => "Tacima",
                "cep" => [ 58240000, 58249999 ],
                "ibge" => 2516409
            ]),
            "2516508" => new Map([
                "name" => "Taperoá",
                "cep" => [ 58680000, 58684999 ],
                "ibge" => 2516508
            ]),
            "2516607" => new Map([
                "name" => "Tavares",
                "cep" => [ 58753000, 58754999 ],
                "ibge" => 2516607
            ]),
            "2516706" => new Map([
                "name" => "Teixeira",
                "cep" => [ 58735000, 58736999 ],
                "ibge" => 2516706
            ]),
            "2516755" => new Map([
                "name" => "Tenório",
                "cep" => [ 58665000, 58669999 ],
                "ibge" => 2516755
            ]),
            "2516805" => new Map([
                "name" => "Triunfo",
                "cep" => [ 58920000, 58921999 ],
                "ibge" => 2516805
            ]),
            "2516904" => new Map([
                "name" => "Uiraúna",
                "cep" => [ 58915000, 58919999 ],
                "ibge" => 2516904
            ]),
            "2517001" => new Map([
                "name" => "Umbuzeiro",
                "cep" => [ 58497000, 58499999 ],
                "ibge" => 2517001
            ]),
            "2517100" => new Map([
                "name" => "Várzea",
                "cep" => [ 58620000, 58624999 ],
                "ibge" => 2517100
            ]),
            "2517209" => new Map([
                "name" => "Vieirópolis",
                "cep" => [ 58822000, 58822999 ],
                "ibge" => 2517209
            ]),
            "2505501" => new Map([
                "name" => "Vista Serrana",
                "cep" => [ 58710000, 58712999 ],
                "ibge" => 2505501
            ]),
            "2517407" => new Map([
                "name" => "Zabelê",
                "cep" => [ 58515000, 58519999 ],
                "ibge" => 2517407
            ])
        ]);

        return $map;
    }
}