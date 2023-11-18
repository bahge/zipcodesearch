<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class GO implements ICitiesInfo
{
    public static int $numberCities = 246;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(GO::$numberCities);
        $map->putAll([
            "5200050" => new Map([
                "name" => "Abadia de Goiás",
                "zipCode" => [ 75345000, 75349999 ],
                "ibge" => 5200050
            ]),
            "5200100" => new Map([
                "name" => "Abadiânia",
                "zipCode" => [ 72940000, 72959999 ],
                "ibge" => 5200100
            ]),
            "5200134" => new Map([
                "name" => "Acreúna",
                "zipCode" => [ 75960000, 75969999 ],
                "ibge" => 5200134
            ]),
            "5200159" => new Map([
                "name" => "Adelândia",
                "zipCode" => [ 76155000, 76159999 ],
                "ibge" => 5200159
            ]),
            "5200175" => new Map([
                "name" => "Água Fria de Goiás",
                "zipCode" => [ 73780000, 73789999 ],
                "ibge" => 5200175
            ]),
            "5200209" => new Map([
                "name" => "Água Limpa",
                "zipCode" => [ 75665000, 75666999 ],
                "ibge" => 5200209
            ]),
            "5200258" => new Map([
                "name" => "Águas Lindas de Goiás",
                "zipCode" => [ 72910001, 72929999 ],
                "ibge" => 5200258
            ]),
            "5200308" => new Map([
                "name" => "Alexânia",
                "zipCode" => [ 72930000, 72939999 ],
                "ibge" => 5200308
            ]),
            "5200506" => new Map([
                "name" => "Aloândia",
                "zipCode" => [ 75615000, 75619999 ],
                "ibge" => 5200506
            ]),
            "5200555" => new Map([
                "name" => "Alto Horizonte",
                "zipCode" => [ 76560000, 76579999 ],
                "ibge" => 5200555
            ]),
            "5200605" => new Map([
                "name" => "Alto Paraíso de Goiás",
                "zipCode" => [ 73770000, 73779999 ],
                "ibge" => 5200605
            ]),
            "5200803" => new Map([
                "name" => "Alvorada do Norte",
                "zipCode" => [ 73950000, 73969999 ],
                "ibge" => 5200803
            ]),
            "5200829" => new Map([
                "name" => "Amaralina",
                "zipCode" => [ 76493000, 76494999 ],
                "ibge" => 5200829
            ]),
            "5200852" => new Map([
                "name" => "Americano do Brasil",
                "zipCode" => [ 76165000, 76169999 ],
                "ibge" => 5200852
            ]),
            "5200902" => new Map([
                "name" => "Amorinópolis",
                "zipCode" => [ 76140000, 76144999 ],
                "ibge" => 5200902
            ]),
            "5201108" => new Map([
                "name" => "Anápolis",
                "zipCode" => [ 75000001, 75159999 ],
                "ibge" => 5201108
            ]),
            "5201207" => new Map([
                "name" => "Anhangüera",
                "zipCode" => [ 75770000, 75779999 ],
                "ibge" => 5201207
            ]),
            "5201306" => new Map([
                "name" => "Anicuns",
                "zipCode" => [ 76170000, 76179999 ],
                "ibge" => 5201306
            ]),
            "5201405" => new Map([
                "name" => "Aparecida de Goiânia",
                "zipCode" => [ 74900001, 74999999 ],
                "ibge" => 5201405
            ]),
            "5201454" => new Map([
                "name" => "Aparecida do Rio Doce",
                "zipCode" => [ 75827000, 75827999 ],
                "ibge" => 5201454
            ]),
            "5201504" => new Map([
                "name" => "Aporé",
                "zipCode" => [ 75825000, 75826999 ],
                "ibge" => 5201504
            ]),
            "5201603" => new Map([
                "name" => "Araçu",
                "zipCode" => [ 75410000, 75419999 ],
                "ibge" => 5201603
            ]),
            "5201702" => new Map([
                "name" => "Aragarças",
                "zipCode" => [ 76240000, 76244999 ],
                "ibge" => 5201702
            ]),
            "5201801" => new Map([
                "name" => "Aragoiânia",
                "zipCode" => [ 75330000, 75339999 ],
                "ibge" => 5201801
            ]),
            "5202155" => new Map([
                "name" => "Araguapaz",
                "zipCode" => [ 76720000, 76729999 ],
                "ibge" => 5202155
            ]),
            "5202353" => new Map([
                "name" => "Arenópolis",
                "zipCode" => [ 76235000, 76239999 ],
                "ibge" => 5202353
            ]),
            "5202502" => new Map([
                "name" => "Aruanã",
                "zipCode" => [ 76710000, 76719999 ],
                "ibge" => 5202502
            ]),
            "5202601" => new Map([
                "name" => "Aurilândia",
                "zipCode" => [ 76120000, 76124999 ],
                "ibge" => 5202601
            ]),
            "5202809" => new Map([
                "name" => "Avelinópolis",
                "zipCode" => [ 75395000, 75395999 ],
                "ibge" => 5202809
            ]),
            "5203104" => new Map([
                "name" => "Baliza",
                "zipCode" => [ 76250000, 76254999 ],
                "ibge" => 5203104
            ]),
            "5203203" => new Map([
                "name" => "Barro Alto",
                "zipCode" => [ 76390000, 76392999 ],
                "ibge" => 5203203
            ]),
            "5203302" => new Map([
                "name" => "Bela Vista de Goiás",
                "zipCode" => [ 75240000, 75244999 ],
                "ibge" => 5203302
            ]),
            "5203401" => new Map([
                "name" => "Bom Jardim de Goiás",
                "zipCode" => [ 76245000, 76249999 ],
                "ibge" => 5203401
            ]),
            "5203500" => new Map([
                "name" => "Bom Jesus de Goiás",
                "zipCode" => [ 75570000, 75579999 ],
                "ibge" => 5203500
            ]),
            "5203559" => new Map([
                "name" => "Bonfinópolis",
                "zipCode" => [ 75195000, 75199999 ],
                "ibge" => 5203559
            ]),
            "5203575" => new Map([
                "name" => "Bonópolis",
                "zipCode" => [ 76555000, 76559999 ],
                "ibge" => 5203575
            ]),
            "5203609" => new Map([
                "name" => "Brazabrantes",
                "zipCode" => [ 75440000, 75449999 ],
                "ibge" => 5203609
            ]),
            "5203807" => new Map([
                "name" => "Britânia",
                "zipCode" => [ 76280000, 76284999 ],
                "ibge" => 5203807
            ]),
            "5203906" => new Map([
                "name" => "Buriti Alegre",
                "zipCode" => [ 75660000, 75664999 ],
                "ibge" => 5203906
            ]),
            "5203939" => new Map([
                "name" => "Buriti de Goiás",
                "zipCode" => [ 76152000, 76154999 ],
                "ibge" => 5203939
            ]),
            "5203962" => new Map([
                "name" => "Buritinópolis",
                "zipCode" => [ 73975000, 73979999 ],
                "ibge" => 5203962
            ]),
            "5204003" => new Map([
                "name" => "Cabeceiras",
                "zipCode" => [ 73870000, 73889999 ],
                "ibge" => 5204003
            ]),
            "5204102" => new Map([
                "name" => "Cachoeira Alta",
                "zipCode" => [ 75870000, 75879999 ],
                "ibge" => 5204102
            ]),
            "5204201" => new Map([
                "name" => "Cachoeira de Goiás",
                "zipCode" => [ 76125000, 76129999 ],
                "ibge" => 5204201
            ]),
            "5204250" => new Map([
                "name" => "Cachoeira Dourada",
                "zipCode" => [ 75560000, 75569999 ],
                "ibge" => 5204250
            ]),
            "5204300" => new Map([
                "name" => "Caçu",
                "zipCode" => [ 75813000, 75814999 ],
                "ibge" => 5204300
            ]),
            "5204409" => new Map([
                "name" => "Caiapônia",
                "zipCode" => [ 75850000, 75854999 ],
                "ibge" => 5204409
            ]),
            "5204508" => new Map([
                "name" => "Caldas Novas",
                "zipCode" => [ 75680001, 75699999 ],
                "ibge" => 5204508
            ]),
            "5204557" => new Map([
                "name" => "Caldazinha",
                "zipCode" => [ 75245000, 75249999 ],
                "ibge" => 5204557
            ]),
            "5204607" => new Map([
                "name" => "Campestre de Goiás",
                "zipCode" => [ 75396000, 75397999 ],
                "ibge" => 5204607
            ]),
            "5204656" => new Map([
                "name" => "Campinaçu",
                "zipCode" => [ 76440000, 76449999 ],
                "ibge" => 5204656
            ]),
            "5204706" => new Map([
                "name" => "Campinorte",
                "zipCode" => [ 76410000, 76419999 ],
                "ibge" => 5204706
            ]),
            "5204805" => new Map([
                "name" => "Campo Alegre de Goiás",
                "zipCode" => [ 75795000, 75799999 ],
                "ibge" => 5204805
            ]),
            "5204854" => new Map([
                "name" => "Campo Limpo de Goiás",
                "zipCode" => [ 75160000, 75164999 ],
                "ibge" => 5204854
            ]),
            "5204904" => new Map([
                "name" => "Campos Belos",
                "zipCode" => [ 73840000, 73849999 ],
                "ibge" => 5204904
            ]),
            "5204953" => new Map([
                "name" => "Campos Verdes",
                "zipCode" => [ 76515000, 76519999 ],
                "ibge" => 5204953
            ]),
            "5205000" => new Map([
                "name" => "Carmo do Rio Verde",
                "zipCode" => [ 76340000, 76342999 ],
                "ibge" => 5205000
            ]),
            "5205059" => new Map([
                "name" => "Castelândia",
                "zipCode" => [ 75925000, 75929999 ],
                "ibge" => 5205059
            ]),
            "5205109" => new Map([
                "name" => "Catalão",
                "zipCode" => [ 75700001, 75714999 ],
                "ibge" => 5205109
            ]),
            "5205208" => new Map([
                "name" => "Caturaí",
                "zipCode" => [ 75430000, 75439999 ],
                "ibge" => 5205208
            ]),
            "5205307" => new Map([
                "name" => "Cavalcante",
                "zipCode" => [ 73790000, 73794999 ],
                "ibge" => 5205307
            ]),
            "5205406" => new Map([
                "name" => "Ceres",
                "zipCode" => [ 76300000, 76303999 ],
                "ibge" => 5205406
            ]),
            "5205455" => new Map([
                "name" => "Cezarina",
                "zipCode" => [ 76195000, 76199999 ],
                "ibge" => 5205455
            ]),
            "5205471" => new Map([
                "name" => "Chapadão do Céu",
                "zipCode" => [ 75828000, 75829999 ],
                "ibge" => 5205471
            ]),
            "5205497" => new Map([
                "name" => "Cidade Ocidental",
                "zipCode" => [ 72880001, 72899999 ],
                "ibge" => 5205497
            ]),
            "5205513" => new Map([
                "name" => "Cocalzinho de Goiás",
                "zipCode" => [ 72975000, 72979999 ],
                "ibge" => 5205513
            ]),
            "5205521" => new Map([
                "name" => "Colinas do Sul",
                "zipCode" => [ 73740000, 73749999 ],
                "ibge" => 5205521
            ]),
            "5205703" => new Map([
                "name" => "Córrego do Ouro",
                "zipCode" => [ 76145000, 76149999 ],
                "ibge" => 5205703
            ]),
            "5205802" => new Map([
                "name" => "Corumbá de Goiás",
                "zipCode" => [ 72960000, 72974999 ],
                "ibge" => 5205802
            ]),
            "5205901" => new Map([
                "name" => "Corumbaíba",
                "zipCode" => [ 75675000, 75679999 ],
                "ibge" => 5205901
            ]),
            "5206206" => new Map([
                "name" => "Cristalina",
                "zipCode" => [ 73850000, 73859999 ],
                "ibge" => 5206206
            ]),
            "5206305" => new Map([
                "name" => "Cristianópolis",
                "zipCode" => [ 75230000, 75239999 ],
                "ibge" => 5206305
            ]),
            "5206404" => new Map([
                "name" => "Crixás",
                "zipCode" => [ 76510000, 76514999 ],
                "ibge" => 5206404
            ]),
            "5206503" => new Map([
                "name" => "Cromínia",
                "zipCode" => [ 75635000, 75639999 ],
                "ibge" => 5206503
            ]),
            "5206602" => new Map([
                "name" => "Cumari",
                "zipCode" => [ 75760000, 75769999 ],
                "ibge" => 5206602
            ]),
            "5206701" => new Map([
                "name" => "Damianópolis",
                "zipCode" => [ 73980000, 73989999 ],
                "ibge" => 5206701
            ]),
            "5206800" => new Map([
                "name" => "Damolândia",
                "zipCode" => [ 75420000, 75429999 ],
                "ibge" => 5206800
            ]),
            "5206909" => new Map([
                "name" => "Davinópolis",
                "zipCode" => [ 75730000, 75739999 ],
                "ibge" => 5206909
            ]),
            "5207105" => new Map([
                "name" => "Diorama",
                "zipCode" => [ 76260000, 76264999 ],
                "ibge" => 5207105
            ]),
            "5208301" => new Map([
                "name" => "Divinópolis de Goiás",
                "zipCode" => [ 73865000, 73869999 ],
                "ibge" => 5208301
            ]),
            "5207253" => new Map([
                "name" => "Doverlândia",
                "zipCode" => [ 75855000, 75859999 ],
                "ibge" => 5207253
            ]),
            "5207352" => new Map([
                "name" => "Edealina",
                "zipCode" => [ 75945000, 75949999 ],
                "ibge" => 5207352
            ]),
            "5207402" => new Map([
                "name" => "Edéia",
                "zipCode" => [ 75940000, 75944999 ],
                "ibge" => 5207402
            ]),
            "5207501" => new Map([
                "name" => "Estrela do Norte",
                "zipCode" => [ 76485000, 76489999 ],
                "ibge" => 5207501
            ]),
            "5207535" => new Map([
                "name" => "Faina",
                "zipCode" => [ 76740000, 76759999 ],
                "ibge" => 5207535
            ]),
            "5207600" => new Map([
                "name" => "Fazenda Nova",
                "zipCode" => [ 76220000, 76229999 ],
                "ibge" => 5207600
            ]),
            "5207808" => new Map([
                "name" => "Firminópolis",
                "zipCode" => [ 76105000, 76109999 ],
                "ibge" => 5207808
            ]),
            "5207907" => new Map([
                "name" => "Flores de Goiás",
                "zipCode" => [ 73890000, 73899999 ],
                "ibge" => 5207907
            ]),
            "5208004" => new Map([
                "name" => "Formosa",
                "zipCode" => [ 73800001, 73819999 ],
                "ibge" => 5208004
            ]),
            "5208103" => new Map([
                "name" => "Formoso",
                "zipCode" => [ 76470000, 76479999 ],
                "ibge" => 5208103
            ]),
            "5208152" => new Map([
                "name" => "Gameleira de Goiás",
                "zipCode" => [ 75184000, 75184999 ],
                "ibge" => 5208152
            ]),
            "5208400" => new Map([
                "name" => "Goianápolis",
                "zipCode" => [ 75170000, 75174999 ],
                "ibge" => 5208400
            ]),
            "5208509" => new Map([
                "name" => "Goiandira",
                "zipCode" => [ 75740000, 75749999 ],
                "ibge" => 5208509
            ]),
            "5208608" => new Map([
                "name" => "Goianésia",
                "zipCode" => [ 76380001, 76389999 ],
                "ibge" => 5208608
            ]),
            "5208707" => new Map([
                "name" => "Goiânia",
                "zipCode" => [ 74000001, 74899999 ],
                "ibge" => 5208707
            ]),
            "5208806" => new Map([
                "name" => "Goianira",
                "zipCode" => [ 75360001, 75374999 ],
                "ibge" => 5208806
            ]),
            "5208905" => new Map([
                "name" => "Goiás",
                "zipCode" => [ 76600000, 76629999 ],
                "ibge" => 5208905
            ]),
            "5209101" => new Map([
                "name" => "Goiatuba",
                "zipCode" => [ 75600000, 75602999 ],
                "ibge" => 5209101
            ]),
            "5209150" => new Map([
                "name" => "Gouvelândia",
                "zipCode" => [ 75865000, 75869999 ],
                "ibge" => 5209150
            ]),
            "5209200" => new Map([
                "name" => "Guapó",
                "zipCode" => [ 75350000, 75354999 ],
                "ibge" => 5209200
            ]),
            "5209291" => new Map([
                "name" => "Guaraíta",
                "zipCode" => [ 76690000, 76699999 ],
                "ibge" => 5209291
            ]),
            "5209408" => new Map([
                "name" => "Guarani de Goiás",
                "zipCode" => [ 73910000, 73919999 ],
                "ibge" => 5209408
            ]),
            "5209457" => new Map([
                "name" => "Guarinos",
                "zipCode" => [ 76374000, 76374999 ],
                "ibge" => 5209457
            ]),
            "5209606" => new Map([
                "name" => "Heitoraí",
                "zipCode" => [ 76670000, 76679999 ],
                "ibge" => 5209606
            ]),
            "5209705" => new Map([
                "name" => "Hidrolândia",
                "zipCode" => [ 75340000, 75344999 ],
                "ibge" => 5209705
            ]),
            "5209804" => new Map([
                "name" => "Hidrolina",
                "zipCode" => [ 76375000, 76379999 ],
                "ibge" => 5209804
            ]),
            "5209903" => new Map([
                "name" => "Iaciara",
                "zipCode" => [ 73920000, 73929999 ],
                "ibge" => 5209903
            ]),
            "5209937" => new Map([
                "name" => "Inaciolândia",
                "zipCode" => [ 75550000, 75554999 ],
                "ibge" => 5209937
            ]),
            "5209952" => new Map([
                "name" => "Indiara",
                "zipCode" => [ 75955000, 75959999 ],
                "ibge" => 5209952
            ]),
            "5210000" => new Map([
                "name" => "Inhumas",
                "zipCode" => [ 75400001, 75409999 ],
                "ibge" => 5210000
            ]),
            "5210109" => new Map([
                "name" => "Ipameri",
                "zipCode" => [ 75780000, 75789999 ],
                "ibge" => 5210109
            ]),
            "5210158" => new Map([
                "name" => "Ipiranga de Goiás",
                "zipCode" => [ 76304000, 76304999 ],
                "ibge" => 5210158
            ]),
            "5210208" => new Map([
                "name" => "Iporá",
                "zipCode" => [ 76200000, 76204999 ],
                "ibge" => 5210208
            ]),
            "5210307" => new Map([
                "name" => "Israelândia",
                "zipCode" => [ 76205000, 76209999 ],
                "ibge" => 5210307
            ]),
            "5210406" => new Map([
                "name" => "Itaberaí",
                "zipCode" => [ 76630000, 76639999 ],
                "ibge" => 5210406
            ]),
            "5210562" => new Map([
                "name" => "Itaguari",
                "zipCode" => [ 76650000, 76659999 ],
                "ibge" => 5210562
            ]),
            "5210604" => new Map([
                "name" => "Itaguaru",
                "zipCode" => [ 76660000, 76669999 ],
                "ibge" => 5210604
            ]),
            "5210802" => new Map([
                "name" => "Itajá",
                "zipCode" => [ 75815000, 75818999 ],
                "ibge" => 5210802
            ]),
            "5210901" => new Map([
                "name" => "Itapaci",
                "zipCode" => [ 76360000, 76364999 ],
                "ibge" => 5210901
            ]),
            "5211008" => new Map([
                "name" => "Itapirapuã",
                "zipCode" => [ 76290000, 76299999 ],
                "ibge" => 5211008
            ]),
            "5211206" => new Map([
                "name" => "Itapuranga",
                "zipCode" => [ 76680000, 76689999 ],
                "ibge" => 5211206
            ]),
            "5211305" => new Map([
                "name" => "Itarumã",
                "zipCode" => [ 75810000, 75812999 ],
                "ibge" => 5211305
            ]),
            "5211404" => new Map([
                "name" => "Itauçu",
                "zipCode" => [ 75450000, 75454999 ],
                "ibge" => 5211404
            ]),
            "5211503" => new Map([
                "name" => "Itumbiara",
                "zipCode" => [ 75500001, 75549999 ],
                "ibge" => 5211503
            ]),
            "5211602" => new Map([
                "name" => "Ivolândia",
                "zipCode" => [ 76130000, 76134999 ],
                "ibge" => 5211602
            ]),
            "5211701" => new Map([
                "name" => "Jandaia",
                "zipCode" => [ 75950000, 75954999 ],
                "ibge" => 5211701
            ]),
            "5211800" => new Map([
                "name" => "Jaraguá",
                "zipCode" => [ 76330000, 76334999 ],
                "ibge" => 5211800
            ]),
            "5211909" => new Map([
                "name" => "Jataí",
                "zipCode" => [ 75800001, 75809999 ],
                "ibge" => 5211909
            ]),
            "5212006" => new Map([
                "name" => "Jaupaci",
                "zipCode" => [ 76210000, 76219999 ],
                "ibge" => 5212006
            ]),
            "5212055" => new Map([
                "name" => "Jesúpolis",
                "zipCode" => [ 75495000, 75499999 ],
                "ibge" => 5212055
            ]),
            "5212105" => new Map([
                "name" => "Joviânia",
                "zipCode" => [ 75610000, 75614999 ],
                "ibge" => 5212105
            ]),
            "5212204" => new Map([
                "name" => "Jussara",
                "zipCode" => [ 76270000, 76279999 ],
                "ibge" => 5212204
            ]),
            "5212253" => new Map([
                "name" => "Lagoa Santa",
                "zipCode" => [ 75819000, 75819999 ],
                "ibge" => 5212253
            ]),
            "5212303" => new Map([
                "name" => "Leopoldo de Bulhões",
                "zipCode" => [ 75190000, 75194999 ],
                "ibge" => 5212303
            ]),
            "5212501" => new Map([
                "name" => "Luziânia",
                "zipCode" => [ 72800001, 72859999 ],
                "ibge" => 5212501
            ]),
            "5212600" => new Map([
                "name" => "Mairipotaba",
                "zipCode" => [ 75630000, 75634999 ],
                "ibge" => 5212600
            ]),
            "5212709" => new Map([
                "name" => "Mambaí",
                "zipCode" => [ 73970000, 73974999 ],
                "ibge" => 5212709
            ]),
            "5212808" => new Map([
                "name" => "Mara Rosa",
                "zipCode" => [ 76490000, 76492999 ],
                "ibge" => 5212808
            ]),
            "5212907" => new Map([
                "name" => "Marzagão",
                "zipCode" => [ 75670000, 75674999 ],
                "ibge" => 5212907
            ]),
            "5212956" => new Map([
                "name" => "Matrinchã",
                "zipCode" => [ 76730000, 76739999 ],
                "ibge" => 5212956
            ]),
            "5213004" => new Map([
                "name" => "Maurilândia",
                "zipCode" => [ 75930000, 75934999 ],
                "ibge" => 5213004
            ]),
            "5213053" => new Map([
                "name" => "Mimoso de Goiás",
                "zipCode" => [ 73730000, 73739999 ],
                "ibge" => 5213053
            ]),
            "5213087" => new Map([
                "name" => "Minaçu",
                "zipCode" => [ 76450000, 76459999 ],
                "ibge" => 5213087
            ]),
            "5213103" => new Map([
                "name" => "Mineiros",
                "zipCode" => [ 75830001, 75839999 ],
                "ibge" => 5213103
            ]),
            "5213400" => new Map([
                "name" => "Moiporá",
                "zipCode" => [ 76135000, 76139999 ],
                "ibge" => 5213400
            ]),
            "5213509" => new Map([
                "name" => "Monte Alegre de Goiás",
                "zipCode" => [ 73830000, 73839999 ],
                "ibge" => 5213509
            ]),
            "5213707" => new Map([
                "name" => "Montes Claros de Goiás",
                "zipCode" => [ 76255000, 76259999 ],
                "ibge" => 5213707
            ]),
            "5213756" => new Map([
                "name" => "Montividiu",
                "zipCode" => [ 75915000, 75919999 ],
                "ibge" => 5213756
            ]),
            "5213772" => new Map([
                "name" => "Montividiu do Norte",
                "zipCode" => [ 76465000, 76469999 ],
                "ibge" => 5213772
            ]),
            "5213806" => new Map([
                "name" => "Morrinhos",
                "zipCode" => [ 75650000, 75659999 ],
                "ibge" => 5213806
            ]),
            "5213855" => new Map([
                "name" => "Morro Agudo de Goiás",
                "zipCode" => [ 76355000, 76359999 ],
                "ibge" => 5213855
            ]),
            "5213905" => new Map([
                "name" => "Mossâmedes",
                "zipCode" => [ 76150000, 76151999 ],
                "ibge" => 5213905
            ]),
            "5214002" => new Map([
                "name" => "Mozarlândia",
                "zipCode" => [ 76700000, 76709999 ],
                "ibge" => 5214002
            ]),
            "5214051" => new Map([
                "name" => "Mundo Novo",
                "zipCode" => [ 76530000, 76539999 ],
                "ibge" => 5214051
            ]),
            "5214101" => new Map([
                "name" => "Mutunópolis",
                "zipCode" => [ 76540000, 76549999 ],
                "ibge" => 5214101
            ]),
            "5214408" => new Map([
                "name" => "Nazário",
                "zipCode" => [ 76180000, 76189999 ],
                "ibge" => 5214408
            ]),
            "5214507" => new Map([
                "name" => "Nerópolis",
                "zipCode" => [ 75460000, 75469999 ],
                "ibge" => 5214507
            ]),
            "5214606" => new Map([
                "name" => "Niquelândia",
                "zipCode" => [ 76420000, 76439999 ],
                "ibge" => 5214606
            ]),
            "5214705" => new Map([
                "name" => "Nova América",
                "zipCode" => [ 76345000, 76349999 ],
                "ibge" => 5214705
            ]),
            "5214804" => new Map([
                "name" => "Nova Aurora",
                "zipCode" => [ 75750000, 75759999 ],
                "ibge" => 5214804
            ]),
            "5214838" => new Map([
                "name" => "Nova Crixás",
                "zipCode" => [ 76520000, 76524999 ],
                "ibge" => 5214838
            ]),
            "5214861" => new Map([
                "name" => "Nova Glória",
                "zipCode" => [ 76305000, 76309999 ],
                "ibge" => 5214861
            ]),
            "5214879" => new Map([
                "name" => "Nova Iguaçu de Goiás",
                "zipCode" => [ 76495000, 76499999 ],
                "ibge" => 5214879
            ]),
            "5214903" => new Map([
                "name" => "Nova Roma",
                "zipCode" => [ 73820000, 73824999 ],
                "ibge" => 5214903
            ]),
            "5215009" => new Map([
                "name" => "Nova Veneza",
                "zipCode" => [ 75470000, 75479999 ],
                "ibge" => 5215009
            ]),
            "5215207" => new Map([
                "name" => "Novo Brasil",
                "zipCode" => [ 76285000, 76289999 ],
                "ibge" => 5215207
            ]),
            "5215231" => new Map([
                "name" => "Novo Gama",
                "zipCode" => [ 72860001, 72869999 ],
                "ibge" => 5215231
            ]),
            "5215256" => new Map([
                "name" => "Novo Planalto",
                "zipCode" => [ 76580000, 76589999 ],
                "ibge" => 5215256
            ]),
            "5215306" => new Map([
                "name" => "Orizona",
                "zipCode" => [ 75280000, 75289999 ],
                "ibge" => 5215306
            ]),
            "5215405" => new Map([
                "name" => "Ouro Verde de Goiás",
                "zipCode" => [ 75165000, 75169999 ],
                "ibge" => 5215405
            ]),
            "5215504" => new Map([
                "name" => "Ouvidor",
                "zipCode" => [ 75715000, 75719999 ],
                "ibge" => 5215504
            ]),
            "5215603" => new Map([
                "name" => "Padre Bernardo",
                "zipCode" => [ 73700000, 73729999 ],
                "ibge" => 5215603
            ]),
            "5215652" => new Map([
                "name" => "Palestina de Goiás",
                "zipCode" => [ 75845000, 75849999 ],
                "ibge" => 5215652
            ]),
            "5215702" => new Map([
                "name" => "Palmeiras de Goiás",
                "zipCode" => [ 76190000, 76194999 ],
                "ibge" => 5215702
            ]),
            "5215801" => new Map([
                "name" => "Palmelo",
                "zipCode" => [ 75210000, 75219999 ],
                "ibge" => 5215801
            ]),
            "5215900" => new Map([
                "name" => "Palminópolis",
                "zipCode" => [ 75990000, 75999999 ],
                "ibge" => 5215900
            ]),
            "5216007" => new Map([
                "name" => "Panamá",
                "zipCode" => [ 75580000, 75599999 ],
                "ibge" => 5216007
            ]),
            "5216304" => new Map([
                "name" => "Paranaiguara",
                "zipCode" => [ 75880000, 75889999 ],
                "ibge" => 5216304
            ]),
            "5216403" => new Map([
                "name" => "Paraúna",
                "zipCode" => [ 75980000, 75984999 ],
                "ibge" => 5216403
            ]),
            "5216452" => new Map([
                "name" => "Perolândia",
                "zipCode" => [ 75823000, 75824999 ],
                "ibge" => 5216452
            ]),
            "5216809" => new Map([
                "name" => "Petrolina de Goiás",
                "zipCode" => [ 75480000, 75489999 ],
                "ibge" => 5216809
            ]),
            "5216908" => new Map([
                "name" => "Pilar de Goiás",
                "zipCode" => [ 76372000, 76372999 ],
                "ibge" => 5216908
            ]),
            "5217104" => new Map([
                "name" => "Piracanjuba",
                "zipCode" => [ 75640000, 75644999 ],
                "ibge" => 5217104
            ]),
            "5217203" => new Map([
                "name" => "Piranhas",
                "zipCode" => [ 76230000, 76234999 ],
                "ibge" => 5217203
            ]),
            "5217302" => new Map([
                "name" => "Pirenópolis",
                "zipCode" => [ 72980000, 72989999 ],
                "ibge" => 5217302
            ]),
            "5217401" => new Map([
                "name" => "Pires do Rio",
                "zipCode" => [ 75200000, 75209999 ],
                "ibge" => 5217401
            ]),
            "5217609" => new Map([
                "name" => "Planaltina",
                "zipCode" => [ 73750001, 73759999 ],
                "ibge" => 5217609
            ]),
            "5217708" => new Map([
                "name" => "Pontalina",
                "zipCode" => [ 75620000, 75629999 ],
                "ibge" => 5217708
            ]),
            "5218003" => new Map([
                "name" => "Porangatu",
                "zipCode" => [ 76550000, 76554999 ],
                "ibge" => 5218003
            ]),
            "5218052" => new Map([
                "name" => "Porteirão",
                "zipCode" => [ 75603000, 75609999 ],
                "ibge" => 5218052
            ]),
            "5218102" => new Map([
                "name" => "Portelândia",
                "zipCode" => [ 75843000, 75844999 ],
                "ibge" => 5218102
            ]),
            "5218300" => new Map([
                "name" => "Posse",
                "zipCode" => [ 73900000, 73909999 ],
                "ibge" => 5218300
            ]),
            "5218391" => new Map([
                "name" => "Professor Jamil",
                "zipCode" => [ 75645000, 75649999 ],
                "ibge" => 5218391
            ]),
            "5218508" => new Map([
                "name" => "Quirinópolis",
                "zipCode" => [ 75860000, 75864999 ],
                "ibge" => 5218508
            ]),
            "5218607" => new Map([
                "name" => "Rialma",
                "zipCode" => [ 76310000, 76314999 ],
                "ibge" => 5218607
            ]),
            "5218706" => new Map([
                "name" => "Rianápolis",
                "zipCode" => [ 76315000, 76319999 ],
                "ibge" => 5218706
            ]),
            "5218789" => new Map([
                "name" => "Rio Quente",
                "zipCode" => [ 75667000, 75669999 ],
                "ibge" => 5218789
            ]),
            "5218805" => new Map([
                "name" => "Rio Verde",
                "zipCode" => [ 75900001, 75914999 ],
                "ibge" => 5218805
            ]),
            "5218904" => new Map([
                "name" => "Rubiataba",
                "zipCode" => [ 76350000, 76354999 ],
                "ibge" => 5218904
            ]),
            "5219001" => new Map([
                "name" => "Sanclerlândia",
                "zipCode" => [ 76160000, 76164999 ],
                "ibge" => 5219001
            ]),
            "5219100" => new Map([
                "name" => "Santa Bárbara de Goiás",
                "zipCode" => [ 75398000, 75399999 ],
                "ibge" => 5219100
            ]),
            "5219209" => new Map([
                "name" => "Santa Cruz de Goiás",
                "zipCode" => [ 75220000, 75229999 ],
                "ibge" => 5219209
            ]),
            "5219258" => new Map([
                "name" => "Santa Fé de Goiás",
                "zipCode" => [ 76265000, 76269999 ],
                "ibge" => 5219258
            ]),
            "5219308" => new Map([
                "name" => "Santa Helena de Goiás",
                "zipCode" => [ 75920000, 75924999 ],
                "ibge" => 5219308
            ]),
            "5219357" => new Map([
                "name" => "Santa Isabel",
                "zipCode" => [ 76320000, 76329999 ],
                "ibge" => 5219357
            ]),
            "5219407" => new Map([
                "name" => "Santa Rita do Araguaia",
                "zipCode" => [ 75840000, 75842999 ],
                "ibge" => 5219407
            ]),
            "5219456" => new Map([
                "name" => "Santa Rita do Novo Destino",
                "zipCode" => [ 76395000, 76399999 ],
                "ibge" => 5219456
            ]),
            "5219506" => new Map([
                "name" => "Santa Rosa de Goiás",
                "zipCode" => [ 75455000, 75459999 ],
                "ibge" => 5219506
            ]),
            "5219605" => new Map([
                "name" => "Santa Tereza de Goiás",
                "zipCode" => [ 76480000, 76484999 ],
                "ibge" => 5219605
            ]),
            "5219704" => new Map([
                "name" => "Santa Terezinha de Goiás",
                "zipCode" => [ 76500000, 76509999 ],
                "ibge" => 5219704
            ]),
            "5219712" => new Map([
                "name" => "Santo Antônio da Barra",
                "zipCode" => [ 75935000, 75939999 ],
                "ibge" => 5219712
            ]),
            "5219738" => new Map([
                "name" => "Santo Antônio de Goiás",
                "zipCode" => [ 75375000, 75379999 ],
                "ibge" => 5219738
            ]),
            "5219753" => new Map([
                "name" => "Santo Antônio do Descoberto",
                "zipCode" => [ 72900001, 72909999 ],
                "ibge" => 5219753
            ]),
            "5219803" => new Map([
                "name" => "São Domingos",
                "zipCode" => [ 73860000, 73864999 ],
                "ibge" => 5219803
            ]),
            "5219902" => new Map([
                "name" => "São Francisco de Goiás",
                "zipCode" => [ 75490000, 75494999 ],
                "ibge" => 5219902
            ]),
            "5220058" => new Map([
                "name" => "São João da Paraúna",
                "zipCode" => [ 75985000, 75989999 ],
                "ibge" => 5220058
            ]),
            "5220009" => new Map([
                "name" => "São João D'Aliança",
                "zipCode" => [ 73760000, 73769999 ],
                "ibge" => 5220009
            ]),
            "5220108" => new Map([
                "name" => "São Luís de Montes Belos",
                "zipCode" => [ [     76050000,     76059999 ], [     76100000,     76104999 ] ],
                "ibge" => 5220108
            ]),
            "5220157" => new Map([
                "name" => "São Luiz do Norte",
                "zipCode" => [ 76365000, 76369999 ],
                "ibge" => 5220157
            ]),
            "5220207" => new Map([
                "name" => "São Miguel do Araguaia",
                "zipCode" => [ 76590000, 76599999 ],
                "ibge" => 5220207
            ]),
            "5220264" => new Map([
                "name" => "São Miguel do Passa Quatro",
                "zipCode" => [ 75185000, 75189999 ],
                "ibge" => 5220264
            ]),
            "5220280" => new Map([
                "name" => "São Patrício",
                "zipCode" => [ 76343000, 76344999 ],
                "ibge" => 5220280
            ]),
            "5220405" => new Map([
                "name" => "São Simão",
                "zipCode" => [ 75890000, 75899999 ],
                "ibge" => 5220405
            ]),
            "5220454" => new Map([
                "name" => "Senador Canedo",
                "zipCode" => [ 75250001, 75264999 ],
                "ibge" => 5220454
            ]),
            "5220504" => new Map([
                "name" => "Serranópolis",
                "zipCode" => [ 75820000, 75822999 ],
                "ibge" => 5220504
            ]),
            "5220603" => new Map([
                "name" => "Silvânia",
                "zipCode" => [ 75180000, 75183999 ],
                "ibge" => 5220603
            ]),
            "5220686" => new Map([
                "name" => "Simolândia",
                "zipCode" => [ 73930000, 73949999 ],
                "ibge" => 5220686
            ]),
            "5220702" => new Map([
                "name" => "Sítio D'Abadia",
                "zipCode" => [ 73990000, 73999999 ],
                "ibge" => 5220702
            ]),
            "5221007" => new Map([
                "name" => "Taquaral de Goiás",
                "zipCode" => [ 76640000, 76649999 ],
                "ibge" => 5221007
            ]),
            "5221080" => new Map([
                "name" => "Teresina de Goiás",
                "zipCode" => [ 73795000, 73799999 ],
                "ibge" => 5221080
            ]),
            "5221197" => new Map([
                "name" => "Terezópolis de Goiás",
                "zipCode" => [ 75175000, 75179999 ],
                "ibge" => 5221197
            ]),
            "5221304" => new Map([
                "name" => "Três Ranchos",
                "zipCode" => [ 75720000, 75729999 ],
                "ibge" => 5221304
            ]),
            "5221403" => new Map([
                "name" => "Trindade",
                "zipCode" => [ 75380001, 75394999 ],
                "ibge" => 5221403
            ]),
            "5221452" => new Map([
                "name" => "Trombas",
                "zipCode" => [ 76460000, 76464999 ],
                "ibge" => 5221452
            ]),
            "5221502" => new Map([
                "name" => "Turvânia",
                "zipCode" => [ 76110000, 76119999 ],
                "ibge" => 5221502
            ]),
            "5221551" => new Map([
                "name" => "Turvelândia",
                "zipCode" => [ 75970000, 75979999 ],
                "ibge" => 5221551
            ]),
            "5221577" => new Map([
                "name" => "Uirapuru",
                "zipCode" => [ 76525000, 76529999 ],
                "ibge" => 5221577
            ]),
            "5221601" => new Map([
                "name" => "Uruaçu",
                "zipCode" => [ 76400000, 76409999 ],
                "ibge" => 5221601
            ]),
            "5221700" => new Map([
                "name" => "Uruana",
                "zipCode" => [ 76335000, 76339999 ],
                "ibge" => 5221700
            ]),
            "5221809" => new Map([
                "name" => "Urutaí",
                "zipCode" => [ 75790000, 75794999 ],
                "ibge" => 5221809
            ]),
            "5221858" => new Map([
                "name" => "Valparaíso de Goiás",
                "zipCode" => [ 72870001, 72879999 ],
                "ibge" => 5221858
            ]),
            "5221908" => new Map([
                "name" => "Varjão",
                "zipCode" => [ 75355000, 75359999 ],
                "ibge" => 5221908
            ]),
            "5222005" => new Map([
                "name" => "Vianópolis",
                "zipCode" => [ 75265000, 75279999 ],
                "ibge" => 5222005
            ]),
            "5222054" => new Map([
                "name" => "Vicentinópolis",
                "zipCode" => [ 75555000, 75559999 ],
                "ibge" => 5222054
            ]),
            "5222203" => new Map([
                "name" => "Vila Boa",
                "zipCode" => [ 73825000, 73829999 ],
                "ibge" => 5222203
            ]),
            "5222302" => new Map([
                "name" => "Vila Propício",
                "zipCode" => [ 76393000, 76394999 ],
                "ibge" => 5222302
            ])
        ]);

        return $map;
    }
}