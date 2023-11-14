<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class GO implements ICitiesInfo
{
    public static int $numberCities = 246;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(G0::$numberCities);
        $map->putAll([
            "5200050" => new Map([
                "name" => "Abadia de Goiás",
                "cep" => [ 75345000, 75349999 ],
                "ibge" => 5200050
            ]),
            "5200100" => new Map([
                "name" => "Abadiânia",
                "cep" => [ 72940000, 72959999 ],
                "ibge" => 5200100
            ]),
            "5200134" => new Map([
                "name" => "Acreúna",
                "cep" => [ 75960000, 75969999 ],
                "ibge" => 5200134
            ]),
            "5200159" => new Map([
                "name" => "Adelândia",
                "cep" => [ 76155000, 76159999 ],
                "ibge" => 5200159
            ]),
            "5200175" => new Map([
                "name" => "Água Fria de Goiás",
                "cep" => [ 73780000, 73789999 ],
                "ibge" => 5200175
            ]),
            "5200209" => new Map([
                "name" => "Água Limpa",
                "cep" => [ 75665000, 75666999 ],
                "ibge" => 5200209
            ]),
            "5200258" => new Map([
                "name" => "Águas Lindas de Goiás",
                "cep" => [ 72910001, 72929999 ],
                "ibge" => 5200258
            ]),
            "5200308" => new Map([
                "name" => "Alexânia",
                "cep" => [ 72930000, 72939999 ],
                "ibge" => 5200308
            ]),
            "5200506" => new Map([
                "name" => "Aloândia",
                "cep" => [ 75615000, 75619999 ],
                "ibge" => 5200506
            ]),
            "5200555" => new Map([
                "name" => "Alto Horizonte",
                "cep" => [ 76560000, 76579999 ],
                "ibge" => 5200555
            ]),
            "5200605" => new Map([
                "name" => "Alto Paraíso de Goiás",
                "cep" => [ 73770000, 73779999 ],
                "ibge" => 5200605
            ]),
            "5200803" => new Map([
                "name" => "Alvorada do Norte",
                "cep" => [ 73950000, 73969999 ],
                "ibge" => 5200803
            ]),
            "5200829" => new Map([
                "name" => "Amaralina",
                "cep" => [ 76493000, 76494999 ],
                "ibge" => 5200829
            ]),
            "5200852" => new Map([
                "name" => "Americano do Brasil",
                "cep" => [ 76165000, 76169999 ],
                "ibge" => 5200852
            ]),
            "5200902" => new Map([
                "name" => "Amorinópolis",
                "cep" => [ 76140000, 76144999 ],
                "ibge" => 5200902
            ]),
            "5201108" => new Map([
                "name" => "Anápolis",
                "cep" => [ 75000001, 75159999 ],
                "ibge" => 5201108
            ]),
            "5201207" => new Map([
                "name" => "Anhangüera",
                "cep" => [ 75770000, 75779999 ],
                "ibge" => 5201207
            ]),
            "5201306" => new Map([
                "name" => "Anicuns",
                "cep" => [ 76170000, 76179999 ],
                "ibge" => 5201306
            ]),
            "5201405" => new Map([
                "name" => "Aparecida de Goiânia",
                "cep" => [ 74900001, 74999999 ],
                "ibge" => 5201405
            ]),
            "5201454" => new Map([
                "name" => "Aparecida do Rio Doce",
                "cep" => [ 75827000, 75827999 ],
                "ibge" => 5201454
            ]),
            "5201504" => new Map([
                "name" => "Aporé",
                "cep" => [ 75825000, 75826999 ],
                "ibge" => 5201504
            ]),
            "5201603" => new Map([
                "name" => "Araçu",
                "cep" => [ 75410000, 75419999 ],
                "ibge" => 5201603
            ]),
            "5201702" => new Map([
                "name" => "Aragarças",
                "cep" => [ 76240000, 76244999 ],
                "ibge" => 5201702
            ]),
            "5201801" => new Map([
                "name" => "Aragoiânia",
                "cep" => [ 75330000, 75339999 ],
                "ibge" => 5201801
            ]),
            "5202155" => new Map([
                "name" => "Araguapaz",
                "cep" => [ 76720000, 76729999 ],
                "ibge" => 5202155
            ]),
            "5202353" => new Map([
                "name" => "Arenópolis",
                "cep" => [ 76235000, 76239999 ],
                "ibge" => 5202353
            ]),
            "5202502" => new Map([
                "name" => "Aruanã",
                "cep" => [ 76710000, 76719999 ],
                "ibge" => 5202502
            ]),
            "5202601" => new Map([
                "name" => "Aurilândia",
                "cep" => [ 76120000, 76124999 ],
                "ibge" => 5202601
            ]),
            "5202809" => new Map([
                "name" => "Avelinópolis",
                "cep" => [ 75395000, 75395999 ],
                "ibge" => 5202809
            ]),
            "5203104" => new Map([
                "name" => "Baliza",
                "cep" => [ 76250000, 76254999 ],
                "ibge" => 5203104
            ]),
            "5203203" => new Map([
                "name" => "Barro Alto",
                "cep" => [ 76390000, 76392999 ],
                "ibge" => 5203203
            ]),
            "5203302" => new Map([
                "name" => "Bela Vista de Goiás",
                "cep" => [ 75240000, 75244999 ],
                "ibge" => 5203302
            ]),
            "5203401" => new Map([
                "name" => "Bom Jardim de Goiás",
                "cep" => [ 76245000, 76249999 ],
                "ibge" => 5203401
            ]),
            "5203500" => new Map([
                "name" => "Bom Jesus de Goiás",
                "cep" => [ 75570000, 75579999 ],
                "ibge" => 5203500
            ]),
            "5203559" => new Map([
                "name" => "Bonfinópolis",
                "cep" => [ 75195000, 75199999 ],
                "ibge" => 5203559
            ]),
            "5203575" => new Map([
                "name" => "Bonópolis",
                "cep" => [ 76555000, 76559999 ],
                "ibge" => 5203575
            ]),
            "5203609" => new Map([
                "name" => "Brazabrantes",
                "cep" => [ 75440000, 75449999 ],
                "ibge" => 5203609
            ]),
            "5203807" => new Map([
                "name" => "Britânia",
                "cep" => [ 76280000, 76284999 ],
                "ibge" => 5203807
            ]),
            "5203906" => new Map([
                "name" => "Buriti Alegre",
                "cep" => [ 75660000, 75664999 ],
                "ibge" => 5203906
            ]),
            "5203939" => new Map([
                "name" => "Buriti de Goiás",
                "cep" => [ 76152000, 76154999 ],
                "ibge" => 5203939
            ]),
            "5203962" => new Map([
                "name" => "Buritinópolis",
                "cep" => [ 73975000, 73979999 ],
                "ibge" => 5203962
            ]),
            "5204003" => new Map([
                "name" => "Cabeceiras",
                "cep" => [ 73870000, 73889999 ],
                "ibge" => 5204003
            ]),
            "5204102" => new Map([
                "name" => "Cachoeira Alta",
                "cep" => [ 75870000, 75879999 ],
                "ibge" => 5204102
            ]),
            "5204201" => new Map([
                "name" => "Cachoeira de Goiás",
                "cep" => [ 76125000, 76129999 ],
                "ibge" => 5204201
            ]),
            "5204250" => new Map([
                "name" => "Cachoeira Dourada",
                "cep" => [ 75560000, 75569999 ],
                "ibge" => 5204250
            ]),
            "5204300" => new Map([
                "name" => "Caçu",
                "cep" => [ 75813000, 75814999 ],
                "ibge" => 5204300
            ]),
            "5204409" => new Map([
                "name" => "Caiapônia",
                "cep" => [ 75850000, 75854999 ],
                "ibge" => 5204409
            ]),
            "5204508" => new Map([
                "name" => "Caldas Novas",
                "cep" => [ 75680001, 75699999 ],
                "ibge" => 5204508
            ]),
            "5204557" => new Map([
                "name" => "Caldazinha",
                "cep" => [ 75245000, 75249999 ],
                "ibge" => 5204557
            ]),
            "5204607" => new Map([
                "name" => "Campestre de Goiás",
                "cep" => [ 75396000, 75397999 ],
                "ibge" => 5204607
            ]),
            "5204656" => new Map([
                "name" => "Campinaçu",
                "cep" => [ 76440000, 76449999 ],
                "ibge" => 5204656
            ]),
            "5204706" => new Map([
                "name" => "Campinorte",
                "cep" => [ 76410000, 76419999 ],
                "ibge" => 5204706
            ]),
            "5204805" => new Map([
                "name" => "Campo Alegre de Goiás",
                "cep" => [ 75795000, 75799999 ],
                "ibge" => 5204805
            ]),
            "5204854" => new Map([
                "name" => "Campo Limpo de Goiás",
                "cep" => [ 75160000, 75164999 ],
                "ibge" => 5204854
            ]),
            "5204904" => new Map([
                "name" => "Campos Belos",
                "cep" => [ 73840000, 73849999 ],
                "ibge" => 5204904
            ]),
            "5204953" => new Map([
                "name" => "Campos Verdes",
                "cep" => [ 76515000, 76519999 ],
                "ibge" => 5204953
            ]),
            "5205000" => new Map([
                "name" => "Carmo do Rio Verde",
                "cep" => [ 76340000, 76342999 ],
                "ibge" => 5205000
            ]),
            "5205059" => new Map([
                "name" => "Castelândia",
                "cep" => [ 75925000, 75929999 ],
                "ibge" => 5205059
            ]),
            "5205109" => new Map([
                "name" => "Catalão",
                "cep" => [ 75700001, 75714999 ],
                "ibge" => 5205109
            ]),
            "5205208" => new Map([
                "name" => "Caturaí",
                "cep" => [ 75430000, 75439999 ],
                "ibge" => 5205208
            ]),
            "5205307" => new Map([
                "name" => "Cavalcante",
                "cep" => [ 73790000, 73794999 ],
                "ibge" => 5205307
            ]),
            "5205406" => new Map([
                "name" => "Ceres",
                "cep" => [ 76300000, 76303999 ],
                "ibge" => 5205406
            ]),
            "5205455" => new Map([
                "name" => "Cezarina",
                "cep" => [ 76195000, 76199999 ],
                "ibge" => 5205455
            ]),
            "5205471" => new Map([
                "name" => "Chapadão do Céu",
                "cep" => [ 75828000, 75829999 ],
                "ibge" => 5205471
            ]),
            "5205497" => new Map([
                "name" => "Cidade Ocidental",
                "cep" => [ 72880001, 72899999 ],
                "ibge" => 5205497
            ]),
            "5205513" => new Map([
                "name" => "Cocalzinho de Goiás",
                "cep" => [ 72975000, 72979999 ],
                "ibge" => 5205513
            ]),
            "5205521" => new Map([
                "name" => "Colinas do Sul",
                "cep" => [ 73740000, 73749999 ],
                "ibge" => 5205521
            ]),
            "5205703" => new Map([
                "name" => "Córrego do Ouro",
                "cep" => [ 76145000, 76149999 ],
                "ibge" => 5205703
            ]),
            "5205802" => new Map([
                "name" => "Corumbá de Goiás",
                "cep" => [ 72960000, 72974999 ],
                "ibge" => 5205802
            ]),
            "5205901" => new Map([
                "name" => "Corumbaíba",
                "cep" => [ 75675000, 75679999 ],
                "ibge" => 5205901
            ]),
            "5206206" => new Map([
                "name" => "Cristalina",
                "cep" => [ 73850000, 73859999 ],
                "ibge" => 5206206
            ]),
            "5206305" => new Map([
                "name" => "Cristianópolis",
                "cep" => [ 75230000, 75239999 ],
                "ibge" => 5206305
            ]),
            "5206404" => new Map([
                "name" => "Crixás",
                "cep" => [ 76510000, 76514999 ],
                "ibge" => 5206404
            ]),
            "5206503" => new Map([
                "name" => "Cromínia",
                "cep" => [ 75635000, 75639999 ],
                "ibge" => 5206503
            ]),
            "5206602" => new Map([
                "name" => "Cumari",
                "cep" => [ 75760000, 75769999 ],
                "ibge" => 5206602
            ]),
            "5206701" => new Map([
                "name" => "Damianópolis",
                "cep" => [ 73980000, 73989999 ],
                "ibge" => 5206701
            ]),
            "5206800" => new Map([
                "name" => "Damolândia",
                "cep" => [ 75420000, 75429999 ],
                "ibge" => 5206800
            ]),
            "5206909" => new Map([
                "name" => "Davinópolis",
                "cep" => [ 75730000, 75739999 ],
                "ibge" => 5206909
            ]),
            "5207105" => new Map([
                "name" => "Diorama",
                "cep" => [ 76260000, 76264999 ],
                "ibge" => 5207105
            ]),
            "5208301" => new Map([
                "name" => "Divinópolis de Goiás",
                "cep" => [ 73865000, 73869999 ],
                "ibge" => 5208301
            ]),
            "5207253" => new Map([
                "name" => "Doverlândia",
                "cep" => [ 75855000, 75859999 ],
                "ibge" => 5207253
            ]),
            "5207352" => new Map([
                "name" => "Edealina",
                "cep" => [ 75945000, 75949999 ],
                "ibge" => 5207352
            ]),
            "5207402" => new Map([
                "name" => "Edéia",
                "cep" => [ 75940000, 75944999 ],
                "ibge" => 5207402
            ]),
            "5207501" => new Map([
                "name" => "Estrela do Norte",
                "cep" => [ 76485000, 76489999 ],
                "ibge" => 5207501
            ]),
            "5207535" => new Map([
                "name" => "Faina",
                "cep" => [ 76740000, 76759999 ],
                "ibge" => 5207535
            ]),
            "5207600" => new Map([
                "name" => "Fazenda Nova",
                "cep" => [ 76220000, 76229999 ],
                "ibge" => 5207600
            ]),
            "5207808" => new Map([
                "name" => "Firminópolis",
                "cep" => [ 76105000, 76109999 ],
                "ibge" => 5207808
            ]),
            "5207907" => new Map([
                "name" => "Flores de Goiás",
                "cep" => [ 73890000, 73899999 ],
                "ibge" => 5207907
            ]),
            "5208004" => new Map([
                "name" => "Formosa",
                "cep" => [ 73800001, 73819999 ],
                "ibge" => 5208004
            ]),
            "5208103" => new Map([
                "name" => "Formoso",
                "cep" => [ 76470000, 76479999 ],
                "ibge" => 5208103
            ]),
            "5208152" => new Map([
                "name" => "Gameleira de Goiás",
                "cep" => [ 75184000, 75184999 ],
                "ibge" => 5208152
            ]),
            "5208400" => new Map([
                "name" => "Goianápolis",
                "cep" => [ 75170000, 75174999 ],
                "ibge" => 5208400
            ]),
            "5208509" => new Map([
                "name" => "Goiandira",
                "cep" => [ 75740000, 75749999 ],
                "ibge" => 5208509
            ]),
            "5208608" => new Map([
                "name" => "Goianésia",
                "cep" => [ 76380001, 76389999 ],
                "ibge" => 5208608
            ]),
            "5208707" => new Map([
                "name" => "Goiânia",
                "cep" => [ 74000001, 74899999 ],
                "ibge" => 5208707
            ]),
            "5208806" => new Map([
                "name" => "Goianira",
                "cep" => [ 75360001, 75374999 ],
                "ibge" => 5208806
            ]),
            "5208905" => new Map([
                "name" => "Goiás",
                "cep" => [ 76600000, 76629999 ],
                "ibge" => 5208905
            ]),
            "5209101" => new Map([
                "name" => "Goiatuba",
                "cep" => [ 75600000, 75602999 ],
                "ibge" => 5209101
            ]),
            "5209150" => new Map([
                "name" => "Gouvelândia",
                "cep" => [ 75865000, 75869999 ],
                "ibge" => 5209150
            ]),
            "5209200" => new Map([
                "name" => "Guapó",
                "cep" => [ 75350000, 75354999 ],
                "ibge" => 5209200
            ]),
            "5209291" => new Map([
                "name" => "Guaraíta",
                "cep" => [ 76690000, 76699999 ],
                "ibge" => 5209291
            ]),
            "5209408" => new Map([
                "name" => "Guarani de Goiás",
                "cep" => [ 73910000, 73919999 ],
                "ibge" => 5209408
            ]),
            "5209457" => new Map([
                "name" => "Guarinos",
                "cep" => [ 76374000, 76374999 ],
                "ibge" => 5209457
            ]),
            "5209606" => new Map([
                "name" => "Heitoraí",
                "cep" => [ 76670000, 76679999 ],
                "ibge" => 5209606
            ]),
            "5209705" => new Map([
                "name" => "Hidrolândia",
                "cep" => [ 75340000, 75344999 ],
                "ibge" => 5209705
            ]),
            "5209804" => new Map([
                "name" => "Hidrolina",
                "cep" => [ 76375000, 76379999 ],
                "ibge" => 5209804
            ]),
            "5209903" => new Map([
                "name" => "Iaciara",
                "cep" => [ 73920000, 73929999 ],
                "ibge" => 5209903
            ]),
            "5209937" => new Map([
                "name" => "Inaciolândia",
                "cep" => [ 75550000, 75554999 ],
                "ibge" => 5209937
            ]),
            "5209952" => new Map([
                "name" => "Indiara",
                "cep" => [ 75955000, 75959999 ],
                "ibge" => 5209952
            ]),
            "5210000" => new Map([
                "name" => "Inhumas",
                "cep" => [ 75400001, 75409999 ],
                "ibge" => 5210000
            ]),
            "5210109" => new Map([
                "name" => "Ipameri",
                "cep" => [ 75780000, 75789999 ],
                "ibge" => 5210109
            ]),
            "5210158" => new Map([
                "name" => "Ipiranga de Goiás",
                "cep" => [ 76304000, 76304999 ],
                "ibge" => 5210158
            ]),
            "5210208" => new Map([
                "name" => "Iporá",
                "cep" => [ 76200000, 76204999 ],
                "ibge" => 5210208
            ]),
            "5210307" => new Map([
                "name" => "Israelândia",
                "cep" => [ 76205000, 76209999 ],
                "ibge" => 5210307
            ]),
            "5210406" => new Map([
                "name" => "Itaberaí",
                "cep" => [ 76630000, 76639999 ],
                "ibge" => 5210406
            ]),
            "5210562" => new Map([
                "name" => "Itaguari",
                "cep" => [ 76650000, 76659999 ],
                "ibge" => 5210562
            ]),
            "5210604" => new Map([
                "name" => "Itaguaru",
                "cep" => [ 76660000, 76669999 ],
                "ibge" => 5210604
            ]),
            "5210802" => new Map([
                "name" => "Itajá",
                "cep" => [ 75815000, 75818999 ],
                "ibge" => 5210802
            ]),
            "5210901" => new Map([
                "name" => "Itapaci",
                "cep" => [ 76360000, 76364999 ],
                "ibge" => 5210901
            ]),
            "5211008" => new Map([
                "name" => "Itapirapuã",
                "cep" => [ 76290000, 76299999 ],
                "ibge" => 5211008
            ]),
            "5211206" => new Map([
                "name" => "Itapuranga",
                "cep" => [ 76680000, 76689999 ],
                "ibge" => 5211206
            ]),
            "5211305" => new Map([
                "name" => "Itarumã",
                "cep" => [ 75810000, 75812999 ],
                "ibge" => 5211305
            ]),
            "5211404" => new Map([
                "name" => "Itauçu",
                "cep" => [ 75450000, 75454999 ],
                "ibge" => 5211404
            ]),
            "5211503" => new Map([
                "name" => "Itumbiara",
                "cep" => [ 75500001, 75549999 ],
                "ibge" => 5211503
            ]),
            "5211602" => new Map([
                "name" => "Ivolândia",
                "cep" => [ 76130000, 76134999 ],
                "ibge" => 5211602
            ]),
            "5211701" => new Map([
                "name" => "Jandaia",
                "cep" => [ 75950000, 75954999 ],
                "ibge" => 5211701
            ]),
            "5211800" => new Map([
                "name" => "Jaraguá",
                "cep" => [ 76330000, 76334999 ],
                "ibge" => 5211800
            ]),
            "5211909" => new Map([
                "name" => "Jataí",
                "cep" => [ 75800001, 75809999 ],
                "ibge" => 5211909
            ]),
            "5212006" => new Map([
                "name" => "Jaupaci",
                "cep" => [ 76210000, 76219999 ],
                "ibge" => 5212006
            ]),
            "5212055" => new Map([
                "name" => "Jesúpolis",
                "cep" => [ 75495000, 75499999 ],
                "ibge" => 5212055
            ]),
            "5212105" => new Map([
                "name" => "Joviânia",
                "cep" => [ 75610000, 75614999 ],
                "ibge" => 5212105
            ]),
            "5212204" => new Map([
                "name" => "Jussara",
                "cep" => [ 76270000, 76279999 ],
                "ibge" => 5212204
            ]),
            "5212253" => new Map([
                "name" => "Lagoa Santa",
                "cep" => [ 75819000, 75819999 ],
                "ibge" => 5212253
            ]),
            "5212303" => new Map([
                "name" => "Leopoldo de Bulhões",
                "cep" => [ 75190000, 75194999 ],
                "ibge" => 5212303
            ]),
            "5212501" => new Map([
                "name" => "Luziânia",
                "cep" => [ 72800001, 72859999 ],
                "ibge" => 5212501
            ]),
            "5212600" => new Map([
                "name" => "Mairipotaba",
                "cep" => [ 75630000, 75634999 ],
                "ibge" => 5212600
            ]),
            "5212709" => new Map([
                "name" => "Mambaí",
                "cep" => [ 73970000, 73974999 ],
                "ibge" => 5212709
            ]),
            "5212808" => new Map([
                "name" => "Mara Rosa",
                "cep" => [ 76490000, 76492999 ],
                "ibge" => 5212808
            ]),
            "5212907" => new Map([
                "name" => "Marzagão",
                "cep" => [ 75670000, 75674999 ],
                "ibge" => 5212907
            ]),
            "5212956" => new Map([
                "name" => "Matrinchã",
                "cep" => [ 76730000, 76739999 ],
                "ibge" => 5212956
            ]),
            "5213004" => new Map([
                "name" => "Maurilândia",
                "cep" => [ 75930000, 75934999 ],
                "ibge" => 5213004
            ]),
            "5213053" => new Map([
                "name" => "Mimoso de Goiás",
                "cep" => [ 73730000, 73739999 ],
                "ibge" => 5213053
            ]),
            "5213087" => new Map([
                "name" => "Minaçu",
                "cep" => [ 76450000, 76459999 ],
                "ibge" => 5213087
            ]),
            "5213103" => new Map([
                "name" => "Mineiros",
                "cep" => [ 75830001, 75839999 ],
                "ibge" => 5213103
            ]),
            "5213400" => new Map([
                "name" => "Moiporá",
                "cep" => [ 76135000, 76139999 ],
                "ibge" => 5213400
            ]),
            "5213509" => new Map([
                "name" => "Monte Alegre de Goiás",
                "cep" => [ 73830000, 73839999 ],
                "ibge" => 5213509
            ]),
            "5213707" => new Map([
                "name" => "Montes Claros de Goiás",
                "cep" => [ 76255000, 76259999 ],
                "ibge" => 5213707
            ]),
            "5213756" => new Map([
                "name" => "Montividiu",
                "cep" => [ 75915000, 75919999 ],
                "ibge" => 5213756
            ]),
            "5213772" => new Map([
                "name" => "Montividiu do Norte",
                "cep" => [ 76465000, 76469999 ],
                "ibge" => 5213772
            ]),
            "5213806" => new Map([
                "name" => "Morrinhos",
                "cep" => [ 75650000, 75659999 ],
                "ibge" => 5213806
            ]),
            "5213855" => new Map([
                "name" => "Morro Agudo de Goiás",
                "cep" => [ 76355000, 76359999 ],
                "ibge" => 5213855
            ]),
            "5213905" => new Map([
                "name" => "Mossâmedes",
                "cep" => [ 76150000, 76151999 ],
                "ibge" => 5213905
            ]),
            "5214002" => new Map([
                "name" => "Mozarlândia",
                "cep" => [ 76700000, 76709999 ],
                "ibge" => 5214002
            ]),
            "5214051" => new Map([
                "name" => "Mundo Novo",
                "cep" => [ 76530000, 76539999 ],
                "ibge" => 5214051
            ]),
            "5214101" => new Map([
                "name" => "Mutunópolis",
                "cep" => [ 76540000, 76549999 ],
                "ibge" => 5214101
            ]),
            "5214408" => new Map([
                "name" => "Nazário",
                "cep" => [ 76180000, 76189999 ],
                "ibge" => 5214408
            ]),
            "5214507" => new Map([
                "name" => "Nerópolis",
                "cep" => [ 75460000, 75469999 ],
                "ibge" => 5214507
            ]),
            "5214606" => new Map([
                "name" => "Niquelândia",
                "cep" => [ 76420000, 76439999 ],
                "ibge" => 5214606
            ]),
            "5214705" => new Map([
                "name" => "Nova América",
                "cep" => [ 76345000, 76349999 ],
                "ibge" => 5214705
            ]),
            "5214804" => new Map([
                "name" => "Nova Aurora",
                "cep" => [ 75750000, 75759999 ],
                "ibge" => 5214804
            ]),
            "5214838" => new Map([
                "name" => "Nova Crixás",
                "cep" => [ 76520000, 76524999 ],
                "ibge" => 5214838
            ]),
            "5214861" => new Map([
                "name" => "Nova Glória",
                "cep" => [ 76305000, 76309999 ],
                "ibge" => 5214861
            ]),
            "5214879" => new Map([
                "name" => "Nova Iguaçu de Goiás",
                "cep" => [ 76495000, 76499999 ],
                "ibge" => 5214879
            ]),
            "5214903" => new Map([
                "name" => "Nova Roma",
                "cep" => [ 73820000, 73824999 ],
                "ibge" => 5214903
            ]),
            "5215009" => new Map([
                "name" => "Nova Veneza",
                "cep" => [ 75470000, 75479999 ],
                "ibge" => 5215009
            ]),
            "5215207" => new Map([
                "name" => "Novo Brasil",
                "cep" => [ 76285000, 76289999 ],
                "ibge" => 5215207
            ]),
            "5215231" => new Map([
                "name" => "Novo Gama",
                "cep" => [ 72860001, 72869999 ],
                "ibge" => 5215231
            ]),
            "5215256" => new Map([
                "name" => "Novo Planalto",
                "cep" => [ 76580000, 76589999 ],
                "ibge" => 5215256
            ]),
            "5215306" => new Map([
                "name" => "Orizona",
                "cep" => [ 75280000, 75289999 ],
                "ibge" => 5215306
            ]),
            "5215405" => new Map([
                "name" => "Ouro Verde de Goiás",
                "cep" => [ 75165000, 75169999 ],
                "ibge" => 5215405
            ]),
            "5215504" => new Map([
                "name" => "Ouvidor",
                "cep" => [ 75715000, 75719999 ],
                "ibge" => 5215504
            ]),
            "5215603" => new Map([
                "name" => "Padre Bernardo",
                "cep" => [ 73700000, 73729999 ],
                "ibge" => 5215603
            ]),
            "5215652" => new Map([
                "name" => "Palestina de Goiás",
                "cep" => [ 75845000, 75849999 ],
                "ibge" => 5215652
            ]),
            "5215702" => new Map([
                "name" => "Palmeiras de Goiás",
                "cep" => [ 76190000, 76194999 ],
                "ibge" => 5215702
            ]),
            "5215801" => new Map([
                "name" => "Palmelo",
                "cep" => [ 75210000, 75219999 ],
                "ibge" => 5215801
            ]),
            "5215900" => new Map([
                "name" => "Palminópolis",
                "cep" => [ 75990000, 75999999 ],
                "ibge" => 5215900
            ]),
            "5216007" => new Map([
                "name" => "Panamá",
                "cep" => [ 75580000, 75599999 ],
                "ibge" => 5216007
            ]),
            "5216304" => new Map([
                "name" => "Paranaiguara",
                "cep" => [ 75880000, 75889999 ],
                "ibge" => 5216304
            ]),
            "5216403" => new Map([
                "name" => "Paraúna",
                "cep" => [ 75980000, 75984999 ],
                "ibge" => 5216403
            ]),
            "5216452" => new Map([
                "name" => "Perolândia",
                "cep" => [ 75823000, 75824999 ],
                "ibge" => 5216452
            ]),
            "5216809" => new Map([
                "name" => "Petrolina de Goiás",
                "cep" => [ 75480000, 75489999 ],
                "ibge" => 5216809
            ]),
            "5216908" => new Map([
                "name" => "Pilar de Goiás",
                "cep" => [ 76372000, 76372999 ],
                "ibge" => 5216908
            ]),
            "5217104" => new Map([
                "name" => "Piracanjuba",
                "cep" => [ 75640000, 75644999 ],
                "ibge" => 5217104
            ]),
            "5217203" => new Map([
                "name" => "Piranhas",
                "cep" => [ 76230000, 76234999 ],
                "ibge" => 5217203
            ]),
            "5217302" => new Map([
                "name" => "Pirenópolis",
                "cep" => [ 72980000, 72989999 ],
                "ibge" => 5217302
            ]),
            "5217401" => new Map([
                "name" => "Pires do Rio",
                "cep" => [ 75200000, 75209999 ],
                "ibge" => 5217401
            ]),
            "5217609" => new Map([
                "name" => "Planaltina",
                "cep" => [ 73750001, 73759999 ],
                "ibge" => 5217609
            ]),
            "5217708" => new Map([
                "name" => "Pontalina",
                "cep" => [ 75620000, 75629999 ],
                "ibge" => 5217708
            ]),
            "5218003" => new Map([
                "name" => "Porangatu",
                "cep" => [ 76550000, 76554999 ],
                "ibge" => 5218003
            ]),
            "5218052" => new Map([
                "name" => "Porteirão",
                "cep" => [ 75603000, 75609999 ],
                "ibge" => 5218052
            ]),
            "5218102" => new Map([
                "name" => "Portelândia",
                "cep" => [ 75843000, 75844999 ],
                "ibge" => 5218102
            ]),
            "5218300" => new Map([
                "name" => "Posse",
                "cep" => [ 73900000, 73909999 ],
                "ibge" => 5218300
            ]),
            "5218391" => new Map([
                "name" => "Professor Jamil",
                "cep" => [ 75645000, 75649999 ],
                "ibge" => 5218391
            ]),
            "5218508" => new Map([
                "name" => "Quirinópolis",
                "cep" => [ 75860000, 75864999 ],
                "ibge" => 5218508
            ]),
            "5218607" => new Map([
                "name" => "Rialma",
                "cep" => [ 76310000, 76314999 ],
                "ibge" => 5218607
            ]),
            "5218706" => new Map([
                "name" => "Rianápolis",
                "cep" => [ 76315000, 76319999 ],
                "ibge" => 5218706
            ]),
            "5218789" => new Map([
                "name" => "Rio Quente",
                "cep" => [ 75667000, 75669999 ],
                "ibge" => 5218789
            ]),
            "5218805" => new Map([
                "name" => "Rio Verde",
                "cep" => [ 75900001, 75914999 ],
                "ibge" => 5218805
            ]),
            "5218904" => new Map([
                "name" => "Rubiataba",
                "cep" => [ 76350000, 76354999 ],
                "ibge" => 5218904
            ]),
            "5219001" => new Map([
                "name" => "Sanclerlândia",
                "cep" => [ 76160000, 76164999 ],
                "ibge" => 5219001
            ]),
            "5219100" => new Map([
                "name" => "Santa Bárbara de Goiás",
                "cep" => [ 75398000, 75399999 ],
                "ibge" => 5219100
            ]),
            "5219209" => new Map([
                "name" => "Santa Cruz de Goiás",
                "cep" => [ 75220000, 75229999 ],
                "ibge" => 5219209
            ]),
            "5219258" => new Map([
                "name" => "Santa Fé de Goiás",
                "cep" => [ 76265000, 76269999 ],
                "ibge" => 5219258
            ]),
            "5219308" => new Map([
                "name" => "Santa Helena de Goiás",
                "cep" => [ 75920000, 75924999 ],
                "ibge" => 5219308
            ]),
            "5219357" => new Map([
                "name" => "Santa Isabel",
                "cep" => [ 76320000, 76329999 ],
                "ibge" => 5219357
            ]),
            "5219407" => new Map([
                "name" => "Santa Rita do Araguaia",
                "cep" => [ 75840000, 75842999 ],
                "ibge" => 5219407
            ]),
            "5219456" => new Map([
                "name" => "Santa Rita do Novo Destino",
                "cep" => [ 76395000, 76399999 ],
                "ibge" => 5219456
            ]),
            "5219506" => new Map([
                "name" => "Santa Rosa de Goiás",
                "cep" => [ 75455000, 75459999 ],
                "ibge" => 5219506
            ]),
            "5219605" => new Map([
                "name" => "Santa Tereza de Goiás",
                "cep" => [ 76480000, 76484999 ],
                "ibge" => 5219605
            ]),
            "5219704" => new Map([
                "name" => "Santa Terezinha de Goiás",
                "cep" => [ 76500000, 76509999 ],
                "ibge" => 5219704
            ]),
            "5219712" => new Map([
                "name" => "Santo Antônio da Barra",
                "cep" => [ 75935000, 75939999 ],
                "ibge" => 5219712
            ]),
            "5219738" => new Map([
                "name" => "Santo Antônio de Goiás",
                "cep" => [ 75375000, 75379999 ],
                "ibge" => 5219738
            ]),
            "5219753" => new Map([
                "name" => "Santo Antônio do Descoberto",
                "cep" => [ 72900001, 72909999 ],
                "ibge" => 5219753
            ]),
            "5219803" => new Map([
                "name" => "São Domingos",
                "cep" => [ 73860000, 73864999 ],
                "ibge" => 5219803
            ]),
            "5219902" => new Map([
                "name" => "São Francisco de Goiás",
                "cep" => [ 75490000, 75494999 ],
                "ibge" => 5219902
            ]),
            "5220058" => new Map([
                "name" => "São João da Paraúna",
                "cep" => [ 75985000, 75989999 ],
                "ibge" => 5220058
            ]),
            "5220009" => new Map([
                "name" => "São João D'Aliança",
                "cep" => [ 73760000, 73769999 ],
                "ibge" => 5220009
            ]),
            "5220108" => new Map([
                "name" => "São Luís de Montes Belos",
                "cep" => [ [     76050000,     76059999 ], [     76100000,     76104999 ] ],
                "ibge" => 5220108
            ]),
            "5220157" => new Map([
                "name" => "São Luiz do Norte",
                "cep" => [ 76365000, 76369999 ],
                "ibge" => 5220157
            ]),
            "5220207" => new Map([
                "name" => "São Miguel do Araguaia",
                "cep" => [ 76590000, 76599999 ],
                "ibge" => 5220207
            ]),
            "5220264" => new Map([
                "name" => "São Miguel do Passa Quatro",
                "cep" => [ 75185000, 75189999 ],
                "ibge" => 5220264
            ]),
            "5220280" => new Map([
                "name" => "São Patrício",
                "cep" => [ 76343000, 76344999 ],
                "ibge" => 5220280
            ]),
            "5220405" => new Map([
                "name" => "São Simão",
                "cep" => [ 75890000, 75899999 ],
                "ibge" => 5220405
            ]),
            "5220454" => new Map([
                "name" => "Senador Canedo",
                "cep" => [ 75250001, 75264999 ],
                "ibge" => 5220454
            ]),
            "5220504" => new Map([
                "name" => "Serranópolis",
                "cep" => [ 75820000, 75822999 ],
                "ibge" => 5220504
            ]),
            "5220603" => new Map([
                "name" => "Silvânia",
                "cep" => [ 75180000, 75183999 ],
                "ibge" => 5220603
            ]),
            "5220686" => new Map([
                "name" => "Simolândia",
                "cep" => [ 73930000, 73949999 ],
                "ibge" => 5220686
            ]),
            "5220702" => new Map([
                "name" => "Sítio D'Abadia",
                "cep" => [ 73990000, 73999999 ],
                "ibge" => 5220702
            ]),
            "5221007" => new Map([
                "name" => "Taquaral de Goiás",
                "cep" => [ 76640000, 76649999 ],
                "ibge" => 5221007
            ]),
            "5221080" => new Map([
                "name" => "Teresina de Goiás",
                "cep" => [ 73795000, 73799999 ],
                "ibge" => 5221080
            ]),
            "5221197" => new Map([
                "name" => "Terezópolis de Goiás",
                "cep" => [ 75175000, 75179999 ],
                "ibge" => 5221197
            ]),
            "5221304" => new Map([
                "name" => "Três Ranchos",
                "cep" => [ 75720000, 75729999 ],
                "ibge" => 5221304
            ]),
            "5221403" => new Map([
                "name" => "Trindade",
                "cep" => [ 75380001, 75394999 ],
                "ibge" => 5221403
            ]),
            "5221452" => new Map([
                "name" => "Trombas",
                "cep" => [ 76460000, 76464999 ],
                "ibge" => 5221452
            ]),
            "5221502" => new Map([
                "name" => "Turvânia",
                "cep" => [ 76110000, 76119999 ],
                "ibge" => 5221502
            ]),
            "5221551" => new Map([
                "name" => "Turvelândia",
                "cep" => [ 75970000, 75979999 ],
                "ibge" => 5221551
            ]),
            "5221577" => new Map([
                "name" => "Uirapuru",
                "cep" => [ 76525000, 76529999 ],
                "ibge" => 5221577
            ]),
            "5221601" => new Map([
                "name" => "Uruaçu",
                "cep" => [ 76400000, 76409999 ],
                "ibge" => 5221601
            ]),
            "5221700" => new Map([
                "name" => "Uruana",
                "cep" => [ 76335000, 76339999 ],
                "ibge" => 5221700
            ]),
            "5221809" => new Map([
                "name" => "Urutaí",
                "cep" => [ 75790000, 75794999 ],
                "ibge" => 5221809
            ]),
            "5221858" => new Map([
                "name" => "Valparaíso de Goiás",
                "cep" => [ 72870001, 72879999 ],
                "ibge" => 5221858
            ]),
            "5221908" => new Map([
                "name" => "Varjão",
                "cep" => [ 75355000, 75359999 ],
                "ibge" => 5221908
            ]),
            "5222005" => new Map([
                "name" => "Vianópolis",
                "cep" => [ 75265000, 75279999 ],
                "ibge" => 5222005
            ]),
            "5222054" => new Map([
                "name" => "Vicentinópolis",
                "cep" => [ 75555000, 75559999 ],
                "ibge" => 5222054
            ]),
            "5222203" => new Map([
                "name" => "Vila Boa",
                "cep" => [ 73825000, 73829999 ],
                "ibge" => 5222203
            ]),
            "5222302" => new Map([
                "name" => "Vila Propício",
                "cep" => [ 76393000, 76394999 ],
                "ibge" => 5222302
            ])
        ]);

        return $map;
    }
}