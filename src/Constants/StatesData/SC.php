<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class SC implements ICitiesInfo
{
    public static int $numberCities = 295;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(SC::$numberCities);
        $map->putAll([
            "4200051" => new Map([
                "name" => "Abdon Batista",
                "cep" => [ 89636000, 89637999 ],
                "ibge" => 4200051
            ]),
            "4200101" => new Map([
                "name" => "Abelardo Luz",
                "cep" => [ 89830000, 89831999 ],
                "ibge" => 4200101
            ]),
            "4200200" => new Map([
                "name" => "Agrolândia",
                "cep" => [ 88420000, 88429999 ],
                "ibge" => 4200200
            ]),
            "4200309" => new Map([
                "name" => "Agronômica",
                "cep" => [ 89188000, 89189999 ],
                "ibge" => 4200309
            ]),
            "4200408" => new Map([
                "name" => "Água Doce",
                "cep" => [ 89654000, 89659999 ],
                "ibge" => 4200408
            ]),
            "4200507" => new Map([
                "name" => "Águas de Chapecó",
                "cep" => [ 89883000, 89884999 ],
                "ibge" => 4200507
            ]),
            "4200556" => new Map([
                "name" => "Águas Frias",
                "cep" => [ 89843000, 89844999 ],
                "ibge" => 4200556
            ]),
            "4200606" => new Map([
                "name" => "Águas Mornas",
                "cep" => [ 88150000, 88159999 ],
                "ibge" => 4200606
            ]),
            "4200705" => new Map([
                "name" => "Alfredo Wagner",
                "cep" => [ 88450000, 88459999 ],
                "ibge" => 4200705
            ]),
            "4200754" => new Map([
                "name" => "Alto Bela Vista",
                "cep" => [ 89730000, 89734999 ],
                "ibge" => 4200754
            ]),
            "4200804" => new Map([
                "name" => "Anchieta",
                "cep" => [ 89970000, 89979999 ],
                "ibge" => 4200804
            ]),
            "4200903" => new Map([
                "name" => "Angelina",
                "cep" => [ 88460000, 88469999 ],
                "ibge" => 4200903
            ]),
            "4201000" => new Map([
                "name" => "Anita Garibaldi",
                "cep" => [ 88590000, 88597999 ],
                "ibge" => 4201000
            ]),
            "4201109" => new Map([
                "name" => "Anitápolis",
                "cep" => [ 88475000, 88484999 ],
                "ibge" => 4201109
            ]),
            "4201208" => new Map([
                "name" => "Antônio Carlos",
                "cep" => [ 88180000, 88189999 ],
                "ibge" => 4201208
            ]),
            "4201257" => new Map([
                "name" => "Apiúna",
                "cep" => [ 89135000, 89135999 ],
                "ibge" => 4201257
            ]),
            "4201273" => new Map([
                "name" => "Arabutã",
                "cep" => [ 89740000, 89744999 ],
                "ibge" => 4201273
            ]),
            "4201307" => new Map([
                "name" => "Araquari",
                "cep" => [ 89245000, 89246999 ],
                "ibge" => 4201307
            ]),
            "4201406" => new Map([
                "name" => "Araranguá",
                "cep" => [ 88900001, 88913999 ],
                "ibge" => 4201406
            ]),
            "4201505" => new Map([
                "name" => "Armazém",
                "cep" => [ 88740000, 88744999 ],
                "ibge" => 4201505
            ]),
            "4201604" => new Map([
                "name" => "Arroio Trinta",
                "cep" => [ 89590000, 89594999 ],
                "ibge" => 4201604
            ]),
            "4201653" => new Map([
                "name" => "Arvoredo",
                "cep" => [ 89778000, 89779999 ],
                "ibge" => 4201653
            ]),
            "4201703" => new Map([
                "name" => "Ascurra",
                "cep" => [ 89138000, 89139999 ],
                "ibge" => 4201703
            ]),
            "4201802" => new Map([
                "name" => "Atalanta",
                "cep" => [ 88410000, 88419999 ],
                "ibge" => 4201802
            ]),
            "4201901" => new Map([
                "name" => "Aurora",
                "cep" => [ 89186000, 89187999 ],
                "ibge" => 4201901
            ]),
            "4201950" => new Map([
                "name" => "Balneário Arroio do Silva",
                "cep" => [ 88914000, 88914999 ],
                "ibge" => 4201950
            ]),
            "4202057" => new Map([
                "name" => "Balneário Barra do Sul",
                "cep" => [ 89247000, 89247999 ],
                "ibge" => 4202057
            ]),
            "4202008" => new Map([
                "name" => "Balneário Camboriú",
                "cep" => [ 88330001, 88339999 ],
                "ibge" => 4202008
            ]),
            "4202073" => new Map([
                "name" => "Balneário Gaivota",
                "cep" => [ 88955000, 88959999 ],
                "ibge" => 4202073
            ]),
            "4212809" => new Map([
                "name" => "Balneário Piçarras",
                "cep" => [ 88380000, 88384999 ],
                "ibge" => 4212809
            ]),
            "4220000" => new Map([
                "name" => "Balneário Rincão",
                "cep" => [ 88828000, 88829999 ],
                "ibge" => 4220000
            ]),
            "4202081" => new Map([
                "name" => "Bandeirante",
                "cep" => [ 89905000, 89905999 ],
                "ibge" => 4202081
            ]),
            "4202099" => new Map([
                "name" => "Barra Bonita",
                "cep" => [ 89909000, 89909999 ],
                "ibge" => 4202099
            ]),
            "4202107" => new Map([
                "name" => "Barra Velha",
                "cep" => [ 88390000, 88394999 ],
                "ibge" => 4202107
            ]),
            "4202131" => new Map([
                "name" => "Bela Vista do Toldo",
                "cep" => [ 89478000, 89479999 ],
                "ibge" => 4202131
            ]),
            "4202156" => new Map([
                "name" => "Belmonte",
                "cep" => [ 89925000, 89929999 ],
                "ibge" => 4202156
            ]),
            "4202206" => new Map([
                "name" => "Benedito Novo",
                "cep" => [ 89124000, 89125999 ],
                "ibge" => 4202206
            ]),
            "4202305" => new Map([
                "name" => "Biguaçu",
                "cep" => [ 88160001, 88179999 ],
                "ibge" => 4202305
            ]),
            "4202404" => new Map([
                "name" => "Blumenau",
                "cep" => [ 89000001, 89079999 ],
                "ibge" => 4202404
            ]),
            "4202438" => new Map([
                "name" => "Bocaina do Sul",
                "cep" => [ 88538000, 88539999 ],
                "ibge" => 4202438
            ]),
            "4202503" => new Map([
                "name" => "Bom Jardim da Serra",
                "cep" => [ 88640000, 88649999 ],
                "ibge" => 4202503
            ]),
            "4202537" => new Map([
                "name" => "Bom Jesus",
                "cep" => [ 89824000, 89824999 ],
                "ibge" => 4202537
            ]),
            "4202578" => new Map([
                "name" => "Bom Jesus do Oeste",
                "cep" => [ 89873000, 89873999 ],
                "ibge" => 4202578
            ]),
            "4202602" => new Map([
                "name" => "Bom Retiro",
                "cep" => [ 88680000, 88699999 ],
                "ibge" => 4202602
            ]),
            "4202453" => new Map([
                "name" => "Bombinhas",
                "cep" => [ 88215000, 88219999 ],
                "ibge" => 4202453
            ]),
            "4202701" => new Map([
                "name" => "Botuverá",
                "cep" => [ 88295000, 88299999 ],
                "ibge" => 4202701
            ]),
            "4202800" => new Map([
                "name" => "Braço do Norte",
                "cep" => [ 88750000, 88759999 ],
                "ibge" => 4202800
            ]),
            "4202859" => new Map([
                "name" => "Braço do Trombudo",
                "cep" => [ 89178000, 89179999 ],
                "ibge" => 4202859
            ]),
            "4202875" => new Map([
                "name" => "Brunópolis",
                "cep" => [ 89634000, 89635999 ],
                "ibge" => 4202875
            ]),
            "4202909" => new Map([
                "name" => "Brusque",
                "cep" => [ 88350001, 88359999 ],
                "ibge" => 4202909
            ]),
            "4203006" => new Map([
                "name" => "Caçador",
                "cep" => [ 89500001, 89514999 ],
                "ibge" => 4203006
            ]),
            "4203105" => new Map([
                "name" => "Caibi",
                "cep" => [ 89888000, 89889999 ],
                "ibge" => 4203105
            ]),
            "4203154" => new Map([
                "name" => "Calmon",
                "cep" => [ 89430000, 89439999 ],
                "ibge" => 4203154
            ]),
            "4203204" => new Map([
                "name" => "Camboriú",
                "cep" => [ 88340001, 88349999 ],
                "ibge" => 4203204
            ]),
            "4203303" => new Map([
                "name" => "Campo Alegre",
                "cep" => [ 89294000, 89294999 ],
                "ibge" => 4203303
            ]),
            "4203402" => new Map([
                "name" => "Campo Belo do Sul",
                "cep" => [ 88580000, 88584999 ],
                "ibge" => 4203402
            ]),
            "4203501" => new Map([
                "name" => "Campo Erê",
                "cep" => [ 89980000, 89980999 ],
                "ibge" => 4203501
            ]),
            "4203600" => new Map([
                "name" => "Campos Novos",
                "cep" => [ 89620000, 89632999 ],
                "ibge" => 4203600
            ]),
            "4203709" => new Map([
                "name" => "Canelinha",
                "cep" => [ 88230000, 88239999 ],
                "ibge" => 4203709
            ]),
            "4203808" => new Map([
                "name" => "Canoinhas",
                "cep" => [ 89460001, 89477999 ],
                "ibge" => 4203808
            ]),
            "4203253" => new Map([
                "name" => "Capão Alto",
                "cep" => [ 88548000, 88549999 ],
                "ibge" => 4203253
            ]),
            "4203907" => new Map([
                "name" => "Capinzal",
                "cep" => [ 89665000, 89666999 ],
                "ibge" => 4203907
            ]),
            "4203956" => new Map([
                "name" => "Capivari de Baixo",
                "cep" => [ 88745000, 88749999 ],
                "ibge" => 4203956
            ]),
            "4204004" => new Map([
                "name" => "Catanduvas",
                "cep" => [ 89670000, 89674999 ],
                "ibge" => 4204004
            ]),
            "4204103" => new Map([
                "name" => "Caxambu do Sul",
                "cep" => [ 89880000, 89881999 ],
                "ibge" => 4204103
            ]),
            "4204152" => new Map([
                "name" => "Celso Ramos",
                "cep" => [ 88598000, 88599999 ],
                "ibge" => 4204152
            ]),
            "4204178" => new Map([
                "name" => "Cerro Negro",
                "cep" => [ 88585000, 88589999 ],
                "ibge" => 4204178
            ]),
            "4204194" => new Map([
                "name" => "Chapadão do Lageado",
                "cep" => [ 88407000, 88409999 ],
                "ibge" => 4204194
            ]),
            "4204202" => new Map([
                "name" => "Chapecó",
                "cep" => [ 89800001, 89816999 ],
                "ibge" => 4204202
            ]),
            "4204251" => new Map([
                "name" => "Cocal do Sul",
                "cep" => [ 88845000, 88849999 ],
                "ibge" => 4204251
            ]),
            "4204301" => new Map([
                "name" => "Concórdia",
                "cep" => [ 89700001, 89729999 ],
                "ibge" => 4204301
            ]),
            "4204350" => new Map([
                "name" => "Cordilheira Alta",
                "cep" => [ 89819000, 89819999 ],
                "ibge" => 4204350
            ]),
            "4204400" => new Map([
                "name" => "Coronel Freitas",
                "cep" => [ 89840000, 89842999 ],
                "ibge" => 4204400
            ]),
            "4204459" => new Map([
                "name" => "Coronel Martins",
                "cep" => [ 89837000, 89837999 ],
                "ibge" => 4204459
            ]),
            "4204558" => new Map([
                "name" => "Correia Pinto",
                "cep" => [ 88535000, 88537999 ],
                "ibge" => 4204558
            ]),
            "4204509" => new Map([
                "name" => "Corupá",
                "cep" => [ 89278000, 89279999 ],
                "ibge" => 4204509
            ]),
            "4204608" => new Map([
                "name" => "Criciúma",
                "cep" => [ 88800001, 88819999 ],
                "ibge" => 4204608
            ]),
            "4204707" => new Map([
                "name" => "Cunha Porã",
                "cep" => [ 89890000, 89890999 ],
                "ibge" => 4204707
            ]),
            "4204756" => new Map([
                "name" => "Cunhataí",
                "cep" => [ 89886000, 89886999 ],
                "ibge" => 4204756
            ]),
            "4204806" => new Map([
                "name" => "Curitibanos",
                "cep" => [ 89520000, 89529999 ],
                "ibge" => 4204806
            ]),
            "4204905" => new Map([
                "name" => "Descanso",
                "cep" => [ 89910000, 89914999 ],
                "ibge" => 4204905
            ]),
            "4205001" => new Map([
                "name" => "Dionísio Cerqueira",
                "cep" => [ 89950000, 89969999 ],
                "ibge" => 4205001
            ]),
            "4205100" => new Map([
                "name" => "Dona Emma",
                "cep" => [ 89155000, 89156999 ],
                "ibge" => 4205100
            ]),
            "4205159" => new Map([
                "name" => "Doutor Pedrinho",
                "cep" => [ 89126000, 89127999 ],
                "ibge" => 4205159
            ]),
            "4205175" => new Map([
                "name" => "Entre Rios",
                "cep" => [ 89862000, 89864999 ],
                "ibge" => 4205175
            ]),
            "4205191" => new Map([
                "name" => "Ermo",
                "cep" => [ 88935000, 88939999 ],
                "ibge" => 4205191
            ]),
            "4205209" => new Map([
                "name" => "Erval Velho",
                "cep" => [ 89613000, 89617999 ],
                "ibge" => 4205209
            ]),
            "4205308" => new Map([
                "name" => "Faxinal dos Guedes",
                "cep" => [ 89694000, 89699999 ],
                "ibge" => 4205308
            ]),
            "4205357" => new Map([
                "name" => "Flor do Sertão",
                "cep" => [ 89878000, 89878999 ],
                "ibge" => 4205357
            ]),
            "4205407" => new Map([
                "name" => "Florianópolis",
                "cep" => [ 88000001, 88099999 ],
                "ibge" => 4205407
            ]),
            "4205431" => new Map([
                "name" => "Formosa do Sul",
                "cep" => [ 89859000, 89859999 ],
                "ibge" => 4205431
            ]),
            "4205456" => new Map([
                "name" => "Forquilhinha",
                "cep" => [ 88850000, 88859999 ],
                "ibge" => 4205456
            ]),
            "4205506" => new Map([
                "name" => "Fraiburgo",
                "cep" => [ 89580000, 89589999 ],
                "ibge" => 4205506
            ]),
            "4205555" => new Map([
                "name" => "Frei Rogério",
                "cep" => [ 89530000, 89532999 ],
                "ibge" => 4205555
            ]),
            "4205605" => new Map([
                "name" => "Galvão",
                "cep" => [ 89838000, 89838999 ],
                "ibge" => 4205605
            ]),
            "4205704" => new Map([
                "name" => "Garopaba",
                "cep" => [ 88495000, 88499999 ],
                "ibge" => 4205704
            ]),
            "4205803" => new Map([
                "name" => "Garuva",
                "cep" => [ 89248000, 89248999 ],
                "ibge" => 4205803
            ]),
            "4205902" => new Map([
                "name" => "Gaspar",
                "cep" => [ 89110001, 89119999 ],
                "ibge" => 4205902
            ]),
            "4206009" => new Map([
                "name" => "Governador Celso Ramos",
                "cep" => [ 88190000, 88199999 ],
                "ibge" => 4206009
            ]),
            "4206108" => new Map([
                "name" => "Grão Pará",
                "cep" => [ 88890000, 88899999 ],
                "ibge" => 4206108
            ]),
            "4206207" => new Map([
                "name" => "Gravatal",
                "cep" => [ 88735000, 88739999 ],
                "ibge" => 4206207
            ]),
            "4206306" => new Map([
                "name" => "Guabiruba",
                "cep" => [ 88360000, 88369999 ],
                "ibge" => 4206306
            ]),
            "4206405" => new Map([
                "name" => "Guaraciaba",
                "cep" => [ 89920000, 89924999 ],
                "ibge" => 4206405
            ]),
            "4206504" => new Map([
                "name" => "Guaramirim",
                "cep" => [ 89270000, 89274999 ],
                "ibge" => 4206504
            ]),
            "4206603" => new Map([
                "name" => "Guarujá do Sul",
                "cep" => [ 89940000, 89949999 ],
                "ibge" => 4206603
            ]),
            "4206652" => new Map([
                "name" => "Guatambú",
                "cep" => [ 89817000, 89817999 ],
                "ibge" => 4206652
            ]),
            "4206702" => new Map([
                "name" => "Herval D'Oeste",
                "cep" => [ 89610000, 89612999 ],
                "ibge" => 4206702
            ]),
            "4206751" => new Map([
                "name" => "Ibiam",
                "cep" => [ 89652000, 89653999 ],
                "ibge" => 4206751
            ]),
            "4206801" => new Map([
                "name" => "Ibicaré",
                "cep" => [ 89640000, 89641999 ],
                "ibge" => 4206801
            ]),
            "4206900" => new Map([
                "name" => "Ibirama",
                "cep" => [ 89140000, 89144999 ],
                "ibge" => 4206900
            ]),
            "4207007" => new Map([
                "name" => "Içara",
                "cep" => [ 88820000, 88827999 ],
                "ibge" => 4207007
            ]),
            "4207106" => new Map([
                "name" => "Ilhota",
                "cep" => [ 88320000, 88329999 ],
                "ibge" => 4207106
            ]),
            "4207205" => new Map([
                "name" => "Imaruí",
                "cep" => [ 88770000, 88779999 ],
                "ibge" => 4207205
            ]),
            "4207304" => new Map([
                "name" => "Imbituba",
                "cep" => [ 88780000, 88789999 ],
                "ibge" => 4207304
            ]),
            "4207403" => new Map([
                "name" => "Imbuia",
                "cep" => [ 88440000, 88442999 ],
                "ibge" => 4207403
            ]),
            "4207502" => new Map([
                "name" => "Indaial",
                "cep" => [ 89080001, 89099999 ],
                "ibge" => 4207502
            ]),
            "4207577" => new Map([
                "name" => "Iomerê",
                "cep" => [ 89558000, 89559999 ],
                "ibge" => 4207577
            ]),
            "4207601" => new Map([
                "name" => "Ipira",
                "cep" => [ 89669000, 89669999 ],
                "ibge" => 4207601
            ]),
            "4207650" => new Map([
                "name" => "Iporã do Oeste",
                "cep" => [ 89899000, 89899999 ],
                "ibge" => 4207650
            ]),
            "4207684" => new Map([
                "name" => "Ipuaçu",
                "cep" => [ 89832000, 89833999 ],
                "ibge" => 4207684
            ]),
            "4207700" => new Map([
                "name" => "Ipumirim",
                "cep" => [ 89790000, 89799999 ],
                "ibge" => 4207700
            ]),
            "4207759" => new Map([
                "name" => "Iraceminha",
                "cep" => [ 89891000, 89892999 ],
                "ibge" => 4207759
            ]),
            "4207809" => new Map([
                "name" => "Irani",
                "cep" => [ 89680000, 89682999 ],
                "ibge" => 4207809
            ]),
            "4207858" => new Map([
                "name" => "Irati",
                "cep" => [ 89856000, 89858999 ],
                "ibge" => 4207858
            ]),
            "4207908" => new Map([
                "name" => "Irineópolis",
                "cep" => [ 89440000, 89459999 ],
                "ibge" => 4207908
            ]),
            "4208005" => new Map([
                "name" => "Itá",
                "cep" => [ 89760000, 89764999 ],
                "ibge" => 4208005
            ]),
            "4208104" => new Map([
                "name" => "Itaiópolis",
                "cep" => [ 89340000, 89369999 ],
                "ibge" => 4208104
            ]),
            "4208203" => new Map([
                "name" => "Itajaí",
                "cep" => [ 88300001, 88319999 ],
                "ibge" => 4208203
            ]),
            "4208302" => new Map([
                "name" => "Itapema",
                "cep" => [ 88220000, 88229999 ],
                "ibge" => 4208302
            ]),
            "4208401" => new Map([
                "name" => "Itapiranga",
                "cep" => [ 89896000, 89896999 ],
                "ibge" => 4208401
            ]),
            "4208450" => new Map([
                "name" => "Itapoá",
                "cep" => [ 89249000, 89249999 ],
                "ibge" => 4208450
            ]),
            "4208500" => new Map([
                "name" => "Ituporanga",
                "cep" => [ 88400000, 88406999 ],
                "ibge" => 4208500
            ]),
            "4208609" => new Map([
                "name" => "Jaborá",
                "cep" => [ 89677000, 89679999 ],
                "ibge" => 4208609
            ]),
            "4208708" => new Map([
                "name" => "Jacinto Machado",
                "cep" => [ 88950000, 88954999 ],
                "ibge" => 4208708
            ]),
            "4208807" => new Map([
                "name" => "Jaguaruna",
                "cep" => [ 88715000, 88716999 ],
                "ibge" => 4208807
            ]),
            "4208906" => new Map([
                "name" => "Jaraguá do Sul",
                "cep" => [ 89250001, 89269999 ],
                "ibge" => 4208906
            ]),
            "4208955" => new Map([
                "name" => "Jardinópolis",
                "cep" => [ 89848000, 89849999 ],
                "ibge" => 4208955
            ]),
            "4209003" => new Map([
                "name" => "Joaçaba",
                "cep" => [ 89600000, 89608999 ],
                "ibge" => 4209003
            ]),
            "4209102" => new Map([
                "name" => "Joinville",
                "cep" => [ 89200001, 89239999 ],
                "ibge" => 4209102
            ]),
            "4209151" => new Map([
                "name" => "José Boiteux",
                "cep" => [ 89145000, 89147999 ],
                "ibge" => 4209151
            ]),
            "4209177" => new Map([
                "name" => "Jupiá",
                "cep" => [ 89839000, 89839999 ],
                "ibge" => 4209177
            ]),
            "4209201" => new Map([
                "name" => "Lacerdópolis",
                "cep" => [ 89660000, 89662999 ],
                "ibge" => 4209201
            ]),
            "4209300" => new Map([
                "name" => "Lages",
                "cep" => [ 88500001, 88534999 ],
                "ibge" => 4209300
            ]),
            "4209409" => new Map([
                "name" => "Laguna",
                "cep" => [ 88790000, 88797999 ],
                "ibge" => 4209409
            ]),
            "4209458" => new Map([
                "name" => "Lajeado Grande",
                "cep" => [ 89828000, 89829999 ],
                "ibge" => 4209458
            ]),
            "4209508" => new Map([
                "name" => "Laurentino",
                "cep" => [ 89170000, 89171999 ],
                "ibge" => 4209508
            ]),
            "4209607" => new Map([
                "name" => "Lauro Müller",
                "cep" => [ 88880000, 88889999 ],
                "ibge" => 4209607
            ]),
            "4209706" => new Map([
                "name" => "Lebon Régis",
                "cep" => [ 89515000, 89517999 ],
                "ibge" => 4209706
            ]),
            "4209805" => new Map([
                "name" => "Leoberto Leal",
                "cep" => [ 88445000, 88449999 ],
                "ibge" => 4209805
            ]),
            "4209854" => new Map([
                "name" => "Lindóia do Sul",
                "cep" => [ 89735000, 89739999 ],
                "ibge" => 4209854
            ]),
            "4209904" => new Map([
                "name" => "Lontras",
                "cep" => [ 89182000, 89183999 ],
                "ibge" => 4209904
            ]),
            "4210001" => new Map([
                "name" => "Luiz Alves",
                "cep" => [ 89128000, 89129999 ],
                "ibge" => 4210001
            ]),
            "4210035" => new Map([
                "name" => "Luzerna",
                "cep" => [ 89609000, 89609999 ],
                "ibge" => 4210035
            ]),
            "4210050" => new Map([
                "name" => "Macieira",
                "cep" => [ 89518000, 89519999 ],
                "ibge" => 4210050
            ]),
            "4210100" => new Map([
                "name" => "Mafra",
                "cep" => [ 89300001, 89339999 ],
                "ibge" => 4210100
            ]),
            "4210209" => new Map([
                "name" => "Major Gercino",
                "cep" => [ 88260000, 88269999 ],
                "ibge" => 4210209
            ]),
            "4210308" => new Map([
                "name" => "Major Vieira",
                "cep" => [ 89480000, 89489999 ],
                "ibge" => 4210308
            ]),
            "4210407" => new Map([
                "name" => "Maracajá",
                "cep" => [ 88915000, 88919999 ],
                "ibge" => 4210407
            ]),
            "4210506" => new Map([
                "name" => "Maravilha",
                "cep" => [ 89874000, 89874999 ],
                "ibge" => 4210506
            ]),
            "4210555" => new Map([
                "name" => "Marema",
                "cep" => [ 89860000, 89861999 ],
                "ibge" => 4210555
            ]),
            "4210605" => new Map([
                "name" => "Massaranduba",
                "cep" => [ 89108000, 89109999 ],
                "ibge" => 4210605
            ]),
            "4210704" => new Map([
                "name" => "Matos Costa",
                "cep" => [ 89420000, 89429999 ],
                "ibge" => 4210704
            ]),
            "4210803" => new Map([
                "name" => "Meleiro",
                "cep" => [ 88920000, 88924999 ],
                "ibge" => 4210803
            ]),
            "4210852" => new Map([
                "name" => "Mirim Doce",
                "cep" => [ 89194000, 89195999 ],
                "ibge" => 4210852
            ]),
            "4210902" => new Map([
                "name" => "Modelo",
                "cep" => [ 89872000, 89872999 ],
                "ibge" => 4210902
            ]),
            "4211009" => new Map([
                "name" => "Mondaí",
                "cep" => [ 89893000, 89894999 ],
                "ibge" => 4211009
            ]),
            "4211058" => new Map([
                "name" => "Monte Carlo",
                "cep" => [ 89618000, 89619999 ],
                "ibge" => 4211058
            ]),
            "4211108" => new Map([
                "name" => "Monte Castelo",
                "cep" => [ 89380000, 89399999 ],
                "ibge" => 4211108
            ]),
            "4211207" => new Map([
                "name" => "Morro da Fumaça",
                "cep" => [ 88830000, 88839999 ],
                "ibge" => 4211207
            ]),
            "4211256" => new Map([
                "name" => "Morro Grande",
                "cep" => [ 88925000, 88929999 ],
                "ibge" => 4211256
            ]),
            "4211306" => new Map([
                "name" => "Navegantes",
                "cep" => [ 88370001, 88379999 ],
                "ibge" => 4211306
            ]),
            "4211405" => new Map([
                "name" => "Nova Erechim",
                "cep" => [ 89865000, 89867999 ],
                "ibge" => 4211405
            ]),
            "4211454" => new Map([
                "name" => "Nova Itaberaba",
                "cep" => [ 89818000, 89818999 ],
                "ibge" => 4211454
            ]),
            "4211504" => new Map([
                "name" => "Nova Trento",
                "cep" => [ 88270000, 88294999 ],
                "ibge" => 4211504
            ]),
            "4211603" => new Map([
                "name" => "Nova Veneza",
                "cep" => [ 88865000, 88869999 ],
                "ibge" => 4211603
            ]),
            "4211652" => new Map([
                "name" => "Novo Horizonte",
                "cep" => [ 89998000, 89999999 ],
                "ibge" => 4211652
            ]),
            "4211702" => new Map([
                "name" => "Orleans",
                "cep" => [ 88870000, 88879999 ],
                "ibge" => 4211702
            ]),
            "4211751" => new Map([
                "name" => "Otacílio Costa",
                "cep" => [ 88540000, 88542999 ],
                "ibge" => 4211751
            ]),
            "4211801" => new Map([
                "name" => "Ouro",
                "cep" => [ 89663000, 89664999 ],
                "ibge" => 4211801
            ]),
            "4211850" => new Map([
                "name" => "Ouro Verde",
                "cep" => [ 89834000, 89834999 ],
                "ibge" => 4211850
            ]),
            "4211876" => new Map([
                "name" => "Paial",
                "cep" => [ 89765000, 89769999 ],
                "ibge" => 4211876
            ]),
            "4211892" => new Map([
                "name" => "Painel",
                "cep" => [ 88543000, 88544999 ],
                "ibge" => 4211892
            ]),
            "4211900" => new Map([
                "name" => "Palhoça",
                "cep" => [ 88130001, 88139999 ],
                "ibge" => 4211900
            ]),
            "4212007" => new Map([
                "name" => "Palma Sola",
                "cep" => [ 89985000, 89989999 ],
                "ibge" => 4212007
            ]),
            "4212056" => new Map([
                "name" => "Palmeira",
                "cep" => [ 88545000, 88547999 ],
                "ibge" => 4212056
            ]),
            "4212106" => new Map([
                "name" => "Palmitos",
                "cep" => [ 89887000, 89887999 ],
                "ibge" => 4212106
            ]),
            "4212205" => new Map([
                "name" => "Papanduva",
                "cep" => [ 89370000, 89379999 ],
                "ibge" => 4212205
            ]),
            "4212239" => new Map([
                "name" => "Paraíso",
                "cep" => [ 89906000, 89907999 ],
                "ibge" => 4212239
            ]),
            "4212254" => new Map([
                "name" => "Passo de Torres",
                "cep" => [ 88980000, 88989999 ],
                "ibge" => 4212254
            ]),
            "4212270" => new Map([
                "name" => "Passos Maia",
                "cep" => [ 89687000, 89689999 ],
                "ibge" => 4212270
            ]),
            "4212304" => new Map([
                "name" => "Paulo Lopes",
                "cep" => [ 88490000, 88494999 ],
                "ibge" => 4212304
            ]),
            "4212403" => new Map([
                "name" => "Pedras Grandes",
                "cep" => [ 88720000, 88729999 ],
                "ibge" => 4212403
            ]),
            "4212502" => new Map([
                "name" => "Penha",
                "cep" => [ 88385000, 88389999 ],
                "ibge" => 4212502
            ]),
            "4212601" => new Map([
                "name" => "Peritiba",
                "cep" => [ 89750000, 89759999 ],
                "ibge" => 4212601
            ]),
            "4212650" => new Map([
                "name" => "Pescaria Brava",
                "cep" => [ 88798000, 88799999 ],
                "ibge" => 4212650
            ]),
            "4212700" => new Map([
                "name" => "Petrolândia",
                "cep" => [ 88430000, 88439999 ],
                "ibge" => 4212700
            ]),
            "4212908" => new Map([
                "name" => "Pinhalzinho",
                "cep" => [ 89870000, 89870999 ],
                "ibge" => 4212908
            ]),
            "4213005" => new Map([
                "name" => "Pinheiro Preto",
                "cep" => [ 89570000, 89579999 ],
                "ibge" => 4213005
            ]),
            "4213104" => new Map([
                "name" => "Piratuba",
                "cep" => [ 89667000, 89668999 ],
                "ibge" => 4213104
            ]),
            "4213153" => new Map([
                "name" => "Planalto Alegre",
                "cep" => [ 89882000, 89882999 ],
                "ibge" => 4213153
            ]),
            "4213203" => new Map([
                "name" => "Pomerode",
                "cep" => [ 89107000, 89107999 ],
                "ibge" => 4213203
            ]),
            "4213302" => new Map([
                "name" => "Ponte Alta",
                "cep" => [ 88550000, 88569999 ],
                "ibge" => 4213302
            ]),
            "4213351" => new Map([
                "name" => "Ponte Alta do Norte",
                "cep" => [ 89535000, 89539999 ],
                "ibge" => 4213351
            ]),
            "4213401" => new Map([
                "name" => "Ponte Serrada",
                "cep" => [ 89683000, 89686999 ],
                "ibge" => 4213401
            ]),
            "4213500" => new Map([
                "name" => "Porto Belo",
                "cep" => [ 88210000, 88214999 ],
                "ibge" => 4213500
            ]),
            "4213609" => new Map([
                "name" => "Porto União",
                "cep" => [ 89400000, 89419999 ],
                "ibge" => 4213609
            ]),
            "4213708" => new Map([
                "name" => "Pouso Redondo",
                "cep" => [ 89172000, 89175999 ],
                "ibge" => 4213708
            ]),
            "4213807" => new Map([
                "name" => "Praia Grande",
                "cep" => [ 88990000, 88999999 ],
                "ibge" => 4213807
            ]),
            "4213906" => new Map([
                "name" => "Presidente Castello Branco",
                "cep" => [ 89745000, 89749999 ],
                "ibge" => 4213906
            ]),
            "4214003" => new Map([
                "name" => "Presidente Getúlio",
                "cep" => [ 89150000, 89154999 ],
                "ibge" => 4214003
            ]),
            "4214102" => new Map([
                "name" => "Presidente Nereu",
                "cep" => [ 89184000, 89185999 ],
                "ibge" => 4214102
            ]),
            "4214151" => new Map([
                "name" => "Princesa",
                "cep" => [ 89935000, 89939999 ],
                "ibge" => 4214151
            ]),
            "4214201" => new Map([
                "name" => "Quilombo",
                "cep" => [ 89850000, 89853999 ],
                "ibge" => 4214201
            ]),
            "4214300" => new Map([
                "name" => "Rancho Queimado",
                "cep" => [ 88470000, 88474999 ],
                "ibge" => 4214300
            ]),
            "4214409" => new Map([
                "name" => "Rio das Antas",
                "cep" => [ 89550000, 89557999 ],
                "ibge" => 4214409
            ]),
            "4214508" => new Map([
                "name" => "Rio do Campo",
                "cep" => [ 89198000, 89198999 ],
                "ibge" => 4214508
            ]),
            "4214607" => new Map([
                "name" => "Rio do Oeste",
                "cep" => [ 89180000, 89181999 ],
                "ibge" => 4214607
            ]),
            "4214805" => new Map([
                "name" => "Rio do Sul",
                "cep" => [ 89160001, 89169999 ],
                "ibge" => 4214805
            ]),
            "4214706" => new Map([
                "name" => "Rio dos Cedros",
                "cep" => [ 89121000, 89123999 ],
                "ibge" => 4214706
            ]),
            "4214904" => new Map([
                "name" => "Rio Fortuna",
                "cep" => [ 88760000, 88762999 ],
                "ibge" => 4214904
            ]),
            "4215000" => new Map([
                "name" => "Rio Negrinho",
                "cep" => [ 89295000, 89299999 ],
                "ibge" => 4215000
            ]),
            "4215059" => new Map([
                "name" => "Rio Rufino",
                "cep" => [ 88658000, 88679999 ],
                "ibge" => 4215059
            ]),
            "4215075" => new Map([
                "name" => "Riqueza",
                "cep" => [ 89895000, 89895999 ],
                "ibge" => 4215075
            ]),
            "4215109" => new Map([
                "name" => "Rodeio",
                "cep" => [ 89136000, 89137999 ],
                "ibge" => 4215109
            ]),
            "4215208" => new Map([
                "name" => "Romelândia",
                "cep" => [ 89908000, 89908999 ],
                "ibge" => 4215208
            ]),
            "4215307" => new Map([
                "name" => "Salete",
                "cep" => [ 89196000, 89197999 ],
                "ibge" => 4215307
            ]),
            "4215356" => new Map([
                "name" => "Saltinho",
                "cep" => [ 89981000, 89981999 ],
                "ibge" => 4215356
            ]),
            "4215406" => new Map([
                "name" => "Salto Veloso",
                "cep" => [ 89595000, 89599999 ],
                "ibge" => 4215406
            ]),
            "4215455" => new Map([
                "name" => "Sangão",
                "cep" => [ 88717000, 88719999 ],
                "ibge" => 4215455
            ]),
            "4215505" => new Map([
                "name" => "Santa Cecília",
                "cep" => [ 89540000, 89544999 ],
                "ibge" => 4215505
            ]),
            "4215554" => new Map([
                "name" => "Santa Helena",
                "cep" => [ 89915000, 89919999 ],
                "ibge" => 4215554
            ]),
            "4215604" => new Map([
                "name" => "Santa Rosa de Lima",
                "cep" => [ 88763000, 88764999 ],
                "ibge" => 4215604
            ]),
            "4215653" => new Map([
                "name" => "Santa Rosa do Sul",
                "cep" => [ 88965000, 88969999 ],
                "ibge" => 4215653
            ]),
            "4215679" => new Map([
                "name" => "Santa Terezinha",
                "cep" => [ 89199000, 89199999 ],
                "ibge" => 4215679
            ]),
            "4215687" => new Map([
                "name" => "Santa Terezinha do Progresso",
                "cep" => [ 89983000, 89984999 ],
                "ibge" => 4215687
            ]),
            "4215695" => new Map([
                "name" => "Santiago do Sul",
                "cep" => [ 89854000, 89854999 ],
                "ibge" => 4215695
            ]),
            "4215703" => new Map([
                "name" => "Santo Amaro da Imperatriz",
                "cep" => [ 88140000, 88149999 ],
                "ibge" => 4215703
            ]),
            "4215802" => new Map([
                "name" => "São Bento do Sul",
                "cep" => [ 89280001, 89293999 ],
                "ibge" => 4215802
            ]),
            "4215752" => new Map([
                "name" => "São Bernardino",
                "cep" => [ 89982000, 89982999 ],
                "ibge" => 4215752
            ]),
            "4215901" => new Map([
                "name" => "São Bonifácio",
                "cep" => [ 88485000, 88489999 ],
                "ibge" => 4215901
            ]),
            "4216008" => new Map([
                "name" => "São Carlos",
                "cep" => [ 89885000, 89885999 ],
                "ibge" => 4216008
            ]),
            "4216057" => new Map([
                "name" => "São Cristóvão do Sul",
                "cep" => [ 89533000, 89534999 ],
                "ibge" => 4216057
            ]),
            "4216107" => new Map([
                "name" => "São Domingos",
                "cep" => [ 89835000, 89836999 ],
                "ibge" => 4216107
            ]),
            "4216206" => new Map([
                "name" => "São Francisco do Sul",
                "cep" => [ 89240000, 89244999 ],
                "ibge" => 4216206
            ]),
            "4216305" => new Map([
                "name" => "São João Batista",
                "cep" => [ 88240000, 88259999 ],
                "ibge" => 4216305
            ]),
            "4216354" => new Map([
                "name" => "São João do Itaperiú",
                "cep" => [ 88395000, 88399999 ],
                "ibge" => 4216354
            ]),
            "4216255" => new Map([
                "name" => "São João do Oeste",
                "cep" => [ 89897000, 89897999 ],
                "ibge" => 4216255
            ]),
            "4216404" => new Map([
                "name" => "São João do Sul",
                "cep" => [ 88970000, 88979999 ],
                "ibge" => 4216404
            ]),
            "4216503" => new Map([
                "name" => "São Joaquim",
                "cep" => [ 88600000, 88624999 ],
                "ibge" => 4216503
            ]),
            "4216602" => new Map([
                "name" => "São José",
                "cep" => [ 88100001, 88124999 ],
                "ibge" => 4216602
            ]),
            "4216701" => new Map([
                "name" => "São José do Cedro",
                "cep" => [ 89930000, 89934999 ],
                "ibge" => 4216701
            ]),
            "4216800" => new Map([
                "name" => "São José do Cerrito",
                "cep" => [ 88570000, 88579999 ],
                "ibge" => 4216800
            ]),
            "4216909" => new Map([
                "name" => "São Lourenço do Oeste",
                "cep" => [ 89990000, 89997999 ],
                "ibge" => 4216909
            ]),
            "4217006" => new Map([
                "name" => "São Ludgero",
                "cep" => [ 88730000, 88734999 ],
                "ibge" => 4217006
            ]),
            "4217105" => new Map([
                "name" => "São Martinho",
                "cep" => [ 88765000, 88769999 ],
                "ibge" => 4217105
            ]),
            "4217154" => new Map([
                "name" => "São Miguel da Boa Vista",
                "cep" => [ 89879000, 89879999 ],
                "ibge" => 4217154
            ]),
            "4217204" => new Map([
                "name" => "São Miguel do Oeste",
                "cep" => [ 89900000, 89904999 ],
                "ibge" => 4217204
            ]),
            "4217253" => new Map([
                "name" => "São Pedro de Alcântara",
                "cep" => [ 88125000, 88129999 ],
                "ibge" => 4217253
            ]),
            "4217303" => new Map([
                "name" => "Saudades",
                "cep" => [ 89868000, 89869999 ],
                "ibge" => 4217303
            ]),
            "4217402" => new Map([
                "name" => "Schroeder",
                "cep" => [ 89275000, 89277999 ],
                "ibge" => 4217402
            ]),
            "4217501" => new Map([
                "name" => "Seara",
                "cep" => [ 89770000, 89777999 ],
                "ibge" => 4217501
            ]),
            "4217550" => new Map([
                "name" => "Serra Alta",
                "cep" => [ 89871000, 89871999 ],
                "ibge" => 4217550
            ]),
            "4217600" => new Map([
                "name" => "Siderópolis",
                "cep" => [ 88860000, 88861999 ],
                "ibge" => 4217600
            ]),
            "4217709" => new Map([
                "name" => "Sombrio",
                "cep" => [ 88960000, 88964999 ],
                "ibge" => 4217709
            ]),
            "4217758" => new Map([
                "name" => "Sul Brasil",
                "cep" => [ 89855000, 89855999 ],
                "ibge" => 4217758
            ]),
            "4217808" => new Map([
                "name" => "Taió",
                "cep" => [ 89190000, 89193999 ],
                "ibge" => 4217808
            ]),
            "4217907" => new Map([
                "name" => "Tangará",
                "cep" => [ 89642000, 89649999 ],
                "ibge" => 4217907
            ]),
            "4217956" => new Map([
                "name" => "Tigrinhos",
                "cep" => [ 89875000, 89877999 ],
                "ibge" => 4217956
            ]),
            "4218004" => new Map([
                "name" => "Tijucas",
                "cep" => [ 88200000, 88209999 ],
                "ibge" => 4218004
            ]),
            "4218103" => new Map([
                "name" => "Timbé do Sul",
                "cep" => [ 88940000, 88949999 ],
                "ibge" => 4218103
            ]),
            "4218202" => new Map([
                "name" => "Timbó",
                "cep" => [ 89120000, 89120999 ],
                "ibge" => 4218202
            ]),
            "4218251" => new Map([
                "name" => "Timbó Grande",
                "cep" => [ 89545000, 89549999 ],
                "ibge" => 4218251
            ]),
            "4218301" => new Map([
                "name" => "Três Barras",
                "cep" => [ 89490000, 89499999 ],
                "ibge" => 4218301
            ]),
            "4218350" => new Map([
                "name" => "Treviso",
                "cep" => [ 88862000, 88864999 ],
                "ibge" => 4218350
            ]),
            "4218400" => new Map([
                "name" => "Treze de Maio",
                "cep" => [ 88710000, 88714999 ],
                "ibge" => 4218400
            ]),
            "4218509" => new Map([
                "name" => "Treze Tílias",
                "cep" => [ 89650000, 89651999 ],
                "ibge" => 4218509
            ]),
            "4218608" => new Map([
                "name" => "Trombudo Central",
                "cep" => [ 89176000, 89177999 ],
                "ibge" => 4218608
            ]),
            "4218707" => new Map([
                "name" => "Tubarão",
                "cep" => [ 88700001, 88709999 ],
                "ibge" => 4218707
            ]),
            "4218756" => new Map([
                "name" => "Tunápolis",
                "cep" => [ 89898000, 89898999 ],
                "ibge" => 4218756
            ]),
            "4218806" => new Map([
                "name" => "Turvo",
                "cep" => [ 88930000, 88934999 ],
                "ibge" => 4218806
            ]),
            "4218855" => new Map([
                "name" => "União do Oeste",
                "cep" => [ 89845000, 89847999 ],
                "ibge" => 4218855
            ]),
            "4218905" => new Map([
                "name" => "Urubici",
                "cep" => [ 88650000, 88657999 ],
                "ibge" => 4218905
            ]),
            "4218954" => new Map([
                "name" => "Urupema",
                "cep" => [ 88625000, 88639999 ],
                "ibge" => 4218954
            ]),
            "4219002" => new Map([
                "name" => "Urussanga",
                "cep" => [ 88840000, 88844999 ],
                "ibge" => 4219002
            ]),
            "4219101" => new Map([
                "name" => "Vargeão",
                "cep" => [ 89690000, 89693999 ],
                "ibge" => 4219101
            ]),
            "4219150" => new Map([
                "name" => "Vargem",
                "cep" => [ 89638000, 89639999 ],
                "ibge" => 4219150
            ]),
            "4219176" => new Map([
                "name" => "Vargem Bonita",
                "cep" => [ 89675000, 89676999 ],
                "ibge" => 4219176
            ]),
            "4219200" => new Map([
                "name" => "Vidal Ramos",
                "cep" => [ 88443000, 88444999 ],
                "ibge" => 4219200
            ]),
            "4219309" => new Map([
                "name" => "Videira",
                "cep" => [ 89560001, 89569999 ],
                "ibge" => 4219309
            ]),
            "4219358" => new Map([
                "name" => "Vitor Meireles",
                "cep" => [ 89148000, 89149999 ],
                "ibge" => 4219358
            ]),
            "4219408" => new Map([
                "name" => "Witmarsum",
                "cep" => [ 89157000, 89159999 ],
                "ibge" => 4219408
            ]),
            "4219507" => new Map([
                "name" => "Xanxerê",
                "cep" => [ 89820000, 89823999 ],
                "ibge" => 4219507
            ]),
            "4219606" => new Map([
                "name" => "Xavantina",
                "cep" => [ 89780000, 89789999 ],
                "ibge" => 4219606
            ]),
            "4219705" => new Map([
                "name" => "Xaxim",
                "cep" => [ 89825000, 89827999 ],
                "ibge" => 4219705
            ]),
            "4219853" => new Map([
                "name" => "Zortéa",
                "cep" => [ 89633000, 89633999 ],
                "ibge" => 4219853
            ])
        ]);

        return $map;
    }
}