<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class MG implements ICitiesInfo
{
    public static int $numberCities = 853;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(MG::$numberCities);
        $map->putAll([
            "3100104" => new Map([
                "name" => "Abadia dos Dourados",
                "zipCode" => [ 38540000, 38549999 ],
                "ibge" => 3100104
            ]),
            "3100203" => new Map([
                "name" => "Abaeté",
                "zipCode" => [ 35620000, 35620999 ],
                "ibge" => 3100203
            ]),
            "3100302" => new Map([
                "name" => "Abre Campo",
                "zipCode" => [ 35365000, 35366999 ],
                "ibge" => 3100302
            ]),
            "3100401" => new Map([
                "name" => "Acaiaca",
                "zipCode" => [ 35438000, 35438999 ],
                "ibge" => 3100401
            ]),
            "3100500" => new Map([
                "name" => "Açucena",
                "zipCode" => [ 35147000, 35147999 ],
                "ibge" => 3100500
            ]),
            "3100609" => new Map([
                "name" => "Água Boa",
                "zipCode" => [ 39790000, 39794999 ],
                "ibge" => 3100609
            ]),
            "3100708" => new Map([
                "name" => "Água Comprida",
                "zipCode" => [ 38110000, 38119999 ],
                "ibge" => 3100708
            ]),
            "3100807" => new Map([
                "name" => "Aguanil",
                "zipCode" => [ 37273000, 37274999 ],
                "ibge" => 3100807
            ]),
            "3100906" => new Map([
                "name" => "Águas Formosas",
                "zipCode" => [ 39880000, 39884999 ],
                "ibge" => 3100906
            ]),
            "3101003" => new Map([
                "name" => "Águas Vermelhas",
                "zipCode" => [ 39990000, 39994999 ],
                "ibge" => 3101003
            ]),
            "3101102" => new Map([
                "name" => "Aimorés",
                "zipCode" => [ 35200000, 35219999 ],
                "ibge" => 3101102
            ]),
            "3101201" => new Map([
                "name" => "Aiuruoca",
                "zipCode" => [ 37450000, 37451999 ],
                "ibge" => 3101201
            ]),
            "3101300" => new Map([
                "name" => "Alagoa",
                "zipCode" => [ 37458000, 37459999 ],
                "ibge" => 3101300
            ]),
            "3101409" => new Map([
                "name" => "Albertina",
                "zipCode" => [ 37596000, 37599999 ],
                "ibge" => 3101409
            ]),
            "3101508" => new Map([
                "name" => "Além Paraíba",
                "zipCode" => [ 36660000, 36669999 ],
                "ibge" => 3101508
            ]),
            "3101607" => new Map([
                "name" => "Alfenas",
                "zipCode" => [ 37130001, 37139999 ],
                "ibge" => 3101607
            ]),
            "3101631" => new Map([
                "name" => "Alfredo Vasconcelos",
                "zipCode" => [ 36272000, 36274999 ],
                "ibge" => 3101631
            ]),
            "3101706" => new Map([
                "name" => "Almenara",
                "zipCode" => [ 39900000, 39911999 ],
                "ibge" => 3101706
            ]),
            "3101805" => new Map([
                "name" => "Alpercata",
                "zipCode" => [ 35138000, 35139999 ],
                "ibge" => 3101805
            ]),
            "3101904" => new Map([
                "name" => "Alpinópolis",
                "zipCode" => [ 37940000, 37944999 ],
                "ibge" => 3101904
            ]),
            "3102001" => new Map([
                "name" => "Alterosa",
                "zipCode" => [ 37145000, 37147999 ],
                "ibge" => 3102001
            ]),
            "3102050" => new Map([
                "name" => "Alto Caparaó",
                "zipCode" => [ 36979000, 36979999 ],
                "ibge" => 3102050
            ]),
            "3153509" => new Map([
                "name" => "Alto Jequitibá",
                "zipCode" => [ 36976000, 36978999 ],
                "ibge" => 3153509
            ]),
            "3102100" => new Map([
                "name" => "Alto Rio Doce",
                "zipCode" => [ 36260000, 36264999 ],
                "ibge" => 3102100
            ]),
            "3102209" => new Map([
                "name" => "Alvarenga",
                "zipCode" => [ 35249000, 35249999 ],
                "ibge" => 3102209
            ]),
            "3102308" => new Map([
                "name" => "Alvinópolis",
                "zipCode" => [ 35950000, 35959999 ],
                "ibge" => 3102308
            ]),
            "3102407" => new Map([
                "name" => "Alvorada de Minas",
                "zipCode" => [ 39140000, 39149999 ],
                "ibge" => 3102407
            ]),
            "3102506" => new Map([
                "name" => "Amparo da Serra",
                "zipCode" => [ 35444000, 35446999 ],
                "ibge" => 3102506
            ]),
            "3102605" => new Map([
                "name" => "Andradas",
                "zipCode" => [ [     37795000,     37799999 ], [     37838000,     37844999 ] ],
                "ibge" => 3102605
            ]),
            "3102803" => new Map([
                "name" => "Andrelândia",
                "zipCode" => [ 37300000, 37304999 ],
                "ibge" => 3102803
            ]),
            "3102852" => new Map([
                "name" => "Angelândia",
                "zipCode" => [ 39685000, 39687999 ],
                "ibge" => 3102852
            ]),
            "3102902" => new Map([
                "name" => "Antônio Carlos",
                "zipCode" => [ 36220000, 36224999 ],
                "ibge" => 3102902
            ]),
            "3103009" => new Map([
                "name" => "Antônio Dias",
                "zipCode" => [ 35177000, 35178999 ],
                "ibge" => 3103009
            ]),
            "3103108" => new Map([
                "name" => "Antônio Prado de Minas",
                "zipCode" => [ 36850000, 36854999 ],
                "ibge" => 3103108
            ]),
            "3103207" => new Map([
                "name" => "Araçaí",
                "zipCode" => [ 35777000, 35779999 ],
                "ibge" => 3103207
            ]),
            "3103306" => new Map([
                "name" => "Aracitaba",
                "zipCode" => [ 36255000, 36259999 ],
                "ibge" => 3103306
            ]),
            "3103405" => new Map([
                "name" => "Araçuaí",
                "zipCode" => [ 39600000, 39609999 ],
                "ibge" => 3103405
            ]),
            "3103504" => new Map([
                "name" => "Araguari",
                "zipCode" => [ 38440001, 38459999 ],
                "ibge" => 3103504
            ]),
            "3103603" => new Map([
                "name" => "Arantina",
                "zipCode" => [ 37360000, 37369999 ],
                "ibge" => 3103603
            ]),
            "3103702" => new Map([
                "name" => "Araponga",
                "zipCode" => [ 36594000, 36599999 ],
                "ibge" => 3103702
            ]),
            "3103751" => new Map([
                "name" => "Araporã",
                "zipCode" => [ 38465000, 38469999 ],
                "ibge" => 3103751
            ]),
            "3103801" => new Map([
                "name" => "Arapuá",
                "zipCode" => [ 38860000, 38869999 ],
                "ibge" => 3103801
            ]),
            "3103900" => new Map([
                "name" => "Araújos",
                "zipCode" => [ 35603000, 35603999 ],
                "ibge" => 3103900
            ]),
            "3104007" => new Map([
                "name" => "Araxá",
                "zipCode" => [ 38180001, 38184999 ],
                "ibge" => 3104007
            ]),
            "3104106" => new Map([
                "name" => "Arceburgo",
                "zipCode" => [ 37820000, 37824999 ],
                "ibge" => 3104106
            ]),
            "3104205" => new Map([
                "name" => "Arcos",
                "zipCode" => [ [     35588000,     35589999 ], [     35598000,     35602999 ] ],
                "ibge" => 3104205
            ]),
            "3104304" => new Map([
                "name" => "Areado",
                "zipCode" => [ 37140000, 37141999 ],
                "ibge" => 3104304
            ]),
            "3104403" => new Map([
                "name" => "Argirita",
                "zipCode" => [ 36710000, 36719999 ],
                "ibge" => 3104403
            ]),
            "3104452" => new Map([
                "name" => "Aricanduva",
                "zipCode" => [ 39678000, 39679999 ],
                "ibge" => 3104452
            ]),
            "3104502" => new Map([
                "name" => "Arinos",
                "zipCode" => [ 38680000, 38688999 ],
                "ibge" => 3104502
            ]),
            "3104601" => new Map([
                "name" => "Astolfo Dutra",
                "zipCode" => [ 36780000, 36783999 ],
                "ibge" => 3104601
            ]),
            "3104700" => new Map([
                "name" => "Ataléia",
                "zipCode" => [ 39850000, 39854999 ],
                "ibge" => 3104700
            ]),
            "3104809" => new Map([
                "name" => "Augusto de Lima",
                "zipCode" => [ 39219000, 39219999 ],
                "ibge" => 3104809
            ]),
            "3104908" => new Map([
                "name" => "Baependi",
                "zipCode" => [ 37443000, 37444999 ],
                "ibge" => 3104908
            ]),
            "3105004" => new Map([
                "name" => "Baldim",
                "zipCode" => [ 35732000, 35735999 ],
                "ibge" => 3105004
            ]),
            "3105103" => new Map([
                "name" => "Bambuí",
                "zipCode" => [ 38900000, 38909999 ],
                "ibge" => 3105103
            ]),
            "3105202" => new Map([
                "name" => "Bandeira",
                "zipCode" => [ 39917000, 39919999 ],
                "ibge" => 3105202
            ]),
            "3105301" => new Map([
                "name" => "Bandeira do Sul",
                "zipCode" => [ 37740000, 37749999 ],
                "ibge" => 3105301
            ]),
            "3105400" => new Map([
                "name" => "Barão de Cocais",
                "zipCode" => [ 35970000, 35983999 ],
                "ibge" => 3105400
            ]),
            "3105509" => new Map([
                "name" => "Barão de Monte Alto",
                "zipCode" => [ 36870000, 36877999 ],
                "ibge" => 3105509
            ]),
            "3105608" => new Map([
                "name" => "Barbacena",
                "zipCode" => [ 36200001, 36209999 ],
                "ibge" => 3105608
            ]),
            "3105707" => new Map([
                "name" => "Barra Longa",
                "zipCode" => [ 35447000, 35449999 ],
                "ibge" => 3105707
            ]),
            "3105905" => new Map([
                "name" => "Barroso",
                "zipCode" => [ [     36212000,     36212999 ], [     36295000,     36299999 ] ],
                "ibge" => 3105905
            ]),
            "3106002" => new Map([
                "name" => "Bela Vista de Minas",
                "zipCode" => [ 35938000, 35939999 ],
                "ibge" => 3106002
            ]),
            "3106101" => new Map([
                "name" => "Belmiro Braga",
                "zipCode" => [ 36126000, 36129999 ],
                "ibge" => 3106101
            ]),
            "3106200" => new Map([
                "name" => "Belo Horizonte",
                "zipCode" => [ 30000001, 31999999 ],
                "ibge" => 3106200
            ]),
            "3106309" => new Map([
                "name" => "Belo Oriente",
                "zipCode" => [ 35195000, 35197999 ],
                "ibge" => 3106309
            ]),
            "3106408" => new Map([
                "name" => "Belo Vale",
                "zipCode" => [ 35473000, 35475999 ],
                "ibge" => 3106408
            ]),
            "3106507" => new Map([
                "name" => "Berilo",
                "zipCode" => [ 39640000, 39641999 ],
                "ibge" => 3106507
            ]),
            "3106655" => new Map([
                "name" => "Berizal",
                "zipCode" => [ 39555000, 39557999 ],
                "ibge" => 3106655
            ]),
            "3106606" => new Map([
                "name" => "Bertópolis",
                "zipCode" => [ 39875000, 39877999 ],
                "ibge" => 3106606
            ]),
            "3106705" => new Map([
                "name" => "Betim",
                "zipCode" => [ 32600001, 32699999 ],
                "ibge" => 3106705
            ]),
            "3106804" => new Map([
                "name" => "Bias Fortes",
                "zipCode" => [ 36230000, 36234999 ],
                "ibge" => 3106804
            ]),
            "3106903" => new Map([
                "name" => "Bicas",
                "zipCode" => [ 36600000, 36603999 ],
                "ibge" => 3106903
            ]),
            "3107000" => new Map([
                "name" => "Biquinhas",
                "zipCode" => [ 35621000, 35621999 ],
                "ibge" => 3107000
            ]),
            "3107109" => new Map([
                "name" => "Boa Esperança",
                "zipCode" => [ 37170000, 37174999 ],
                "ibge" => 3107109
            ]),
            "3107208" => new Map([
                "name" => "Bocaina de Minas",
                "zipCode" => [ 37340000, 37349999 ],
                "ibge" => 3107208
            ]),
            "3107307" => new Map([
                "name" => "Bocaiúva",
                "zipCode" => [ 39390000, 39396999 ],
                "ibge" => 3107307
            ]),
            "3107406" => new Map([
                "name" => "Bom Despacho",
                "zipCode" => [ 35630001, 35639999 ],
                "ibge" => 3107406
            ]),
            "3107505" => new Map([
                "name" => "Bom Jardim de Minas",
                "zipCode" => [ 37310000, 37329999 ],
                "ibge" => 3107505
            ]),
            "3107604" => new Map([
                "name" => "Bom Jesus da Penha",
                "zipCode" => [ 37948000, 37949999 ],
                "ibge" => 3107604
            ]),
            "3107703" => new Map([
                "name" => "Bom Jesus do Amparo",
                "zipCode" => [ 35908000, 35909999 ],
                "ibge" => 3107703
            ]),
            "3107802" => new Map([
                "name" => "Bom Jesus do Galho",
                "zipCode" => [ 35340000, 35344999 ],
                "ibge" => 3107802
            ]),
            "3107901" => new Map([
                "name" => "Bom Repouso",
                "zipCode" => [ 37610000, 37614999 ],
                "ibge" => 3107901
            ]),
            "3108008" => new Map([
                "name" => "Bom Sucesso",
                "zipCode" => [ 37220000, 37222999 ],
                "ibge" => 3108008
            ]),
            "3108107" => new Map([
                "name" => "Bonfim",
                "zipCode" => [ 35480000, 35484999 ],
                "ibge" => 3108107
            ]),
            "3108206" => new Map([
                "name" => "Bonfinópolis de Minas",
                "zipCode" => [ 38650000, 38653999 ],
                "ibge" => 3108206
            ]),
            "3108255" => new Map([
                "name" => "Bonito de Minas",
                "zipCode" => [ 39490000, 39491999 ],
                "ibge" => 3108255
            ]),
            "3108305" => new Map([
                "name" => "Borda da Mata",
                "zipCode" => [ 37564000, 37565999 ],
                "ibge" => 3108305
            ]),
            "3108404" => new Map([
                "name" => "Botelhos",
                "zipCode" => [ 37720000, 37729999 ],
                "ibge" => 3108404
            ]),
            "3108503" => new Map([
                "name" => "Botumirim",
                "zipCode" => [ 39595000, 39597999 ],
                "ibge" => 3108503
            ]),
            "3108701" => new Map([
                "name" => "Brás Pires",
                "zipCode" => [ 36542000, 36543999 ],
                "ibge" => 3108701
            ]),
            "3108552" => new Map([
                "name" => "Brasilândia de Minas",
                "zipCode" => [ 38779000, 38779999 ],
                "ibge" => 3108552
            ]),
            "3108602" => new Map([
                "name" => "Brasília de Minas",
                "zipCode" => [ 39330000, 39334999 ],
                "ibge" => 3108602
            ]),
            "3108800" => new Map([
                "name" => "Braúnas",
                "zipCode" => [ 35189000, 35189999 ],
                "ibge" => 3108800
            ]),
            "3108909" => new Map([
                "name" => "Brazópolis",
                "zipCode" => [ 37530000, 37535999 ],
                "ibge" => 3108909
            ]),
            "3109006" => new Map([
                "name" => "Brumadinho",
                "zipCode" => [ [     32480000,     32499999 ], [     35460000,     35469999 ] ],
                "ibge" => 3109006
            ]),
            "3109105" => new Map([
                "name" => "Bueno Brandão",
                "zipCode" => [ 37578000, 37579999 ],
                "ibge" => 3109105
            ]),
            "3109204" => new Map([
                "name" => "Buenópolis",
                "zipCode" => [ 39230000, 39236999 ],
                "ibge" => 3109204
            ]),
            "3109253" => new Map([
                "name" => "Bugre",
                "zipCode" => [ 35193000, 35193999 ],
                "ibge" => 3109253
            ]),
            "3109303" => new Map([
                "name" => "Buritis",
                "zipCode" => [ 38660000, 38679999 ],
                "ibge" => 3109303
            ]),
            "3109402" => new Map([
                "name" => "Buritizeiro",
                "zipCode" => [ 39280000, 39289999 ],
                "ibge" => 3109402
            ]),
            "3109451" => new Map([
                "name" => "Cabeceira Grande",
                "zipCode" => [ 38625000, 38629999 ],
                "ibge" => 3109451
            ]),
            "3109501" => new Map([
                "name" => "Cabo Verde",
                "zipCode" => [ 37880000, 37889999 ],
                "ibge" => 3109501
            ]),
            "3109600" => new Map([
                "name" => "Cachoeira da Prata",
                "zipCode" => [ 35765000, 35766999 ],
                "ibge" => 3109600
            ]),
            "3109709" => new Map([
                "name" => "Cachoeira de Minas",
                "zipCode" => [ 37545000, 37547999 ],
                "ibge" => 3109709
            ]),
            "3102704" => new Map([
                "name" => "Cachoeira de Pajeú",
                "zipCode" => [ 39980000, 39989999 ],
                "ibge" => 3102704
            ]),
            "3109808" => new Map([
                "name" => "Cachoeira Dourada",
                "zipCode" => [ 38370000, 38379999 ],
                "ibge" => 3109808
            ]),
            "3109907" => new Map([
                "name" => "Caetanópolis",
                "zipCode" => [ 35770000, 35773999 ],
                "ibge" => 3109907
            ]),
            "3110004" => new Map([
                "name" => "Caeté",
                "zipCode" => [ 34800000, 34989999 ],
                "ibge" => 3110004
            ]),
            "3110103" => new Map([
                "name" => "Caiana",
                "zipCode" => [ 36832000, 36833999 ],
                "ibge" => 3110103
            ]),
            "3110202" => new Map([
                "name" => "Cajuri",
                "zipCode" => [ 36560000, 36567999 ],
                "ibge" => 3110202
            ]),
            "3110301" => new Map([
                "name" => "Caldas",
                "zipCode" => [ 37780000, 37789999 ],
                "ibge" => 3110301
            ]),
            "3110400" => new Map([
                "name" => "Camacho",
                "zipCode" => [ 35555000, 35556999 ],
                "ibge" => 3110400
            ]),
            "3110509" => new Map([
                "name" => "Camanducaia",
                "zipCode" => [ 37650000, 37654999 ],
                "ibge" => 3110509
            ]),
            "3110608" => new Map([
                "name" => "Cambuí",
                "zipCode" => [ 37600000, 37604999 ],
                "ibge" => 3110608
            ]),
            "3110707" => new Map([
                "name" => "Cambuquira",
                "zipCode" => [ 37420000, 37429999 ],
                "ibge" => 3110707
            ]),
            "3110806" => new Map([
                "name" => "Campanário",
                "zipCode" => [ 39835000, 39836999 ],
                "ibge" => 3110806
            ]),
            "3110905" => new Map([
                "name" => "Campanha",
                "zipCode" => [ 37400000, 37404999 ],
                "ibge" => 3110905
            ]),
            "3111002" => new Map([
                "name" => "Campestre",
                "zipCode" => [ 37730000, 37739999 ],
                "ibge" => 3111002
            ]),
            "3111101" => new Map([
                "name" => "Campina Verde",
                "zipCode" => [ 38270000, 38279999 ],
                "ibge" => 3111101
            ]),
            "3111150" => new Map([
                "name" => "Campo Azul",
                "zipCode" => [ 39338000, 39339999 ],
                "ibge" => 3111150
            ]),
            "3111200" => new Map([
                "name" => "Campo Belo",
                "zipCode" => [ 37270000, 37272999 ],
                "ibge" => 3111200
            ]),
            "3111309" => new Map([
                "name" => "Campo do Meio",
                "zipCode" => [ 37165000, 37169999 ],
                "ibge" => 3111309
            ]),
            "3111408" => new Map([
                "name" => "Campo Florido",
                "zipCode" => [ 38130000, 38139999 ],
                "ibge" => 3111408
            ]),
            "3111507" => new Map([
                "name" => "Campos Altos",
                "zipCode" => [ 38970000, 38979999 ],
                "ibge" => 3111507
            ]),
            "3111606" => new Map([
                "name" => "Campos Gerais",
                "zipCode" => [ 37160000, 37164999 ],
                "ibge" => 3111606
            ]),
            "3111903" => new Map([
                "name" => "Cana Verde",
                "zipCode" => [ 37267000, 37269999 ],
                "ibge" => 3111903
            ]),
            "3111705" => new Map([
                "name" => "Canaã",
                "zipCode" => [ 36592000, 36593999 ],
                "ibge" => 3111705
            ]),
            "3111804" => new Map([
                "name" => "Canápolis",
                "zipCode" => [ 38380000, 38389999 ],
                "ibge" => 3111804
            ]),
            "3112000" => new Map([
                "name" => "Candeias",
                "zipCode" => [ 37280000, 37299999 ],
                "ibge" => 3112000
            ]),
            "3112059" => new Map([
                "name" => "Cantagalo",
                "zipCode" => [ 39703000, 39703999 ],
                "ibge" => 3112059
            ]),
            "3112109" => new Map([
                "name" => "Caparaó",
                "zipCode" => [ 36834000, 36835999 ],
                "ibge" => 3112109
            ]),
            "3112208" => new Map([
                "name" => "Capela Nova",
                "zipCode" => [ 36290000, 36294999 ],
                "ibge" => 3112208
            ]),
            "3112307" => new Map([
                "name" => "Capelinha",
                "zipCode" => [ 39680000, 39684999 ],
                "ibge" => 3112307
            ]),
            "3112406" => new Map([
                "name" => "Capetinga",
                "zipCode" => [ 37993000, 37996999 ],
                "ibge" => 3112406
            ]),
            "3112505" => new Map([
                "name" => "Capim Branco",
                "zipCode" => [ 35730000, 35731999 ],
                "ibge" => 3112505
            ]),
            "3112604" => new Map([
                "name" => "Capinópolis",
                "zipCode" => [ 38360000, 38369999 ],
                "ibge" => 3112604
            ]),
            "3112653" => new Map([
                "name" => "Capitão Andrade",
                "zipCode" => [ 35123000, 35124999 ],
                "ibge" => 3112653
            ]),
            "3112703" => new Map([
                "name" => "Capitão Enéas",
                "zipCode" => [ 39472000, 39474999 ],
                "ibge" => 3112703
            ]),
            "3112802" => new Map([
                "name" => "Capitólio",
                "zipCode" => [ 37930000, 37939999 ],
                "ibge" => 3112802
            ]),
            "3112901" => new Map([
                "name" => "Caputira",
                "zipCode" => [ 36925000, 36929999 ],
                "ibge" => 3112901
            ]),
            "3113008" => new Map([
                "name" => "Caraí",
                "zipCode" => [ 39810000, 39813999 ],
                "ibge" => 3113008
            ]),
            "3113107" => new Map([
                "name" => "Caranaíba",
                "zipCode" => [ 36428000, 36429999 ],
                "ibge" => 3113107
            ]),
            "3113206" => new Map([
                "name" => "Carandaí",
                "zipCode" => [ 36280001, 36289999 ],
                "ibge" => 3113206
            ]),
            "3113305" => new Map([
                "name" => "Carangola",
                "zipCode" => [ 36800000, 36809999 ],
                "ibge" => 3113305
            ]),
            "3113404" => new Map([
                "name" => "Caratinga",
                "zipCode" => [ 35300001, 35322999 ],
                "ibge" => 3113404
            ]),
            "3113503" => new Map([
                "name" => "Carbonita",
                "zipCode" => [ 39665000, 39669999 ],
                "ibge" => 3113503
            ]),
            "3113602" => new Map([
                "name" => "Careaçu",
                "zipCode" => [ 37582000, 37583999 ],
                "ibge" => 3113602
            ]),
            "3113701" => new Map([
                "name" => "Carlos Chagas",
                "zipCode" => [ 39864000, 39867999 ],
                "ibge" => 3113701
            ]),
            "3113800" => new Map([
                "name" => "Carmésia",
                "zipCode" => [ 35878000, 35879999 ],
                "ibge" => 3113800
            ]),
            "3113909" => new Map([
                "name" => "Carmo da Cachoeira",
                "zipCode" => [ 37225000, 37234999 ],
                "ibge" => 3113909
            ]),
            "3114006" => new Map([
                "name" => "Carmo da Mata",
                "zipCode" => [ 35547000, 35549999 ],
                "ibge" => 3114006
            ]),
            "3114105" => new Map([
                "name" => "Carmo de Minas",
                "zipCode" => [ 37472000, 37473999 ],
                "ibge" => 3114105
            ]),
            "3114204" => new Map([
                "name" => "Carmo do Cajuru",
                "zipCode" => [ 35557000, 35559999 ],
                "ibge" => 3114204
            ]),
            "3114303" => new Map([
                "name" => "Carmo do Paranaíba",
                "zipCode" => [ 38840001, 38849999 ],
                "ibge" => 3114303
            ]),
            "3114402" => new Map([
                "name" => "Carmo do Rio Claro",
                "zipCode" => [ 37150000, 37159999 ],
                "ibge" => 3114402
            ]),
            "3114501" => new Map([
                "name" => "Carmópolis de Minas",
                "zipCode" => [ 35534000, 35535999 ],
                "ibge" => 3114501
            ]),
            "3114550" => new Map([
                "name" => "Carneirinho",
                "zipCode" => [ 38290000, 38294999 ],
                "ibge" => 3114550
            ]),
            "3114600" => new Map([
                "name" => "Carrancas",
                "zipCode" => [ 37245000, 37249999 ],
                "ibge" => 3114600
            ]),
            "3114709" => new Map([
                "name" => "Carvalhópolis",
                "zipCode" => [ 37760000, 37774999 ],
                "ibge" => 3114709
            ]),
            "3114808" => new Map([
                "name" => "Carvalhos",
                "zipCode" => [ 37456000, 37457999 ],
                "ibge" => 3114808
            ]),
            "3114907" => new Map([
                "name" => "Casa Grande",
                "zipCode" => [ 36422000, 36423999 ],
                "ibge" => 3114907
            ]),
            "3115003" => new Map([
                "name" => "Cascalho Rico",
                "zipCode" => [ 38460000, 38464999 ],
                "ibge" => 3115003
            ]),
            "3115102" => new Map([
                "name" => "Cássia",
                "zipCode" => [ 37980000, 37989999 ],
                "ibge" => 3115102
            ]),
            "3115300" => new Map([
                "name" => "Cataguases",
                "zipCode" => [ 36770001, 36779999 ],
                "ibge" => 3115300
            ]),
            "3115359" => new Map([
                "name" => "Catas Altas",
                "zipCode" => [ 35969000, 35969999 ],
                "ibge" => 3115359
            ]),
            "3115409" => new Map([
                "name" => "Catas Altas da Noruega",
                "zipCode" => [ 36450000, 36454999 ],
                "ibge" => 3115409
            ]),
            "3115458" => new Map([
                "name" => "Catuji",
                "zipCode" => [ 39816000, 39816999 ],
                "ibge" => 3115458
            ]),
            "3115474" => new Map([
                "name" => "Catuti",
                "zipCode" => [ 39526000, 39526999 ],
                "ibge" => 3115474
            ]),
            "3115508" => new Map([
                "name" => "Caxambu",
                "zipCode" => [ 37440000, 37442999 ],
                "ibge" => 3115508
            ]),
            "3115607" => new Map([
                "name" => "Cedro do Abaeté",
                "zipCode" => [ 35624000, 35624999 ],
                "ibge" => 3115607
            ]),
            "3115706" => new Map([
                "name" => "Central de Minas",
                "zipCode" => [ 35260000, 35264999 ],
                "ibge" => 3115706
            ]),
            "3115805" => new Map([
                "name" => "Centralina",
                "zipCode" => [ 38390000, 38399999 ],
                "ibge" => 3115805
            ]),
            "3115904" => new Map([
                "name" => "Chácara",
                "zipCode" => [ 36110000, 36119999 ],
                "ibge" => 3115904
            ]),
            "3116001" => new Map([
                "name" => "Chalé",
                "zipCode" => [ 36985000, 36989999 ],
                "ibge" => 3116001
            ]),
            "3116100" => new Map([
                "name" => "Chapada do Norte",
                "zipCode" => [ 39648000, 39649999 ],
                "ibge" => 3116100
            ]),
            "3116159" => new Map([
                "name" => "Chapada Gaúcha",
                "zipCode" => [ 38689000, 38689999 ],
                "ibge" => 3116159
            ]),
            "3116209" => new Map([
                "name" => "Chiador",
                "zipCode" => [ 36630000, 36639999 ],
                "ibge" => 3116209
            ]),
            "3116308" => new Map([
                "name" => "Cipotânea",
                "zipCode" => [ 36265000, 36269999 ],
                "ibge" => 3116308
            ]),
            "3116407" => new Map([
                "name" => "Claraval",
                "zipCode" => [ 37997000, 37999999 ],
                "ibge" => 3116407
            ]),
            "3116506" => new Map([
                "name" => "Claro dos Poções",
                "zipCode" => [ 39380000, 39386999 ],
                "ibge" => 3116506
            ]),
            "3116605" => new Map([
                "name" => "Cláudio",
                "zipCode" => [ 35530000, 35533999 ],
                "ibge" => 3116605
            ]),
            "3116704" => new Map([
                "name" => "Coimbra",
                "zipCode" => [ 36550000, 36554999 ],
                "ibge" => 3116704
            ]),
            "3116803" => new Map([
                "name" => "Coluna",
                "zipCode" => [ 39770000, 39774999 ],
                "ibge" => 3116803
            ]),
            "3116902" => new Map([
                "name" => "Comendador Gomes",
                "zipCode" => [ 38250000, 38259999 ],
                "ibge" => 3116902
            ]),
            "3117009" => new Map([
                "name" => "Comercinho",
                "zipCode" => [ 39628000, 39629999 ],
                "ibge" => 3117009
            ]),
            "3117108" => new Map([
                "name" => "Conceição da Aparecida",
                "zipCode" => [ 37148000, 37149999 ],
                "ibge" => 3117108
            ]),
            "3115201" => new Map([
                "name" => "Conceição da Barra de Minas",
                "zipCode" => [ 36360000, 36369999 ],
                "ibge" => 3115201
            ]),
            "3117306" => new Map([
                "name" => "Conceição das Alagoas",
                "zipCode" => [ 38120000, 38129999 ],
                "ibge" => 3117306
            ]),
            "3117207" => new Map([
                "name" => "Conceição das Pedras",
                "zipCode" => [ 37527000, 37529999 ],
                "ibge" => 3117207
            ]),
            "3117405" => new Map([
                "name" => "Conceição de Ipanema",
                "zipCode" => [ 36947000, 36949999 ],
                "ibge" => 3117405
            ]),
            "3117504" => new Map([
                "name" => "Conceição do Mato Dentro",
                "zipCode" => [ 35858000, 35864999 ],
                "ibge" => 3117504
            ]),
            "3117603" => new Map([
                "name" => "Conceição do Pará",
                "zipCode" => [ 35668000, 35668999 ],
                "ibge" => 3117603
            ]),
            "3117702" => new Map([
                "name" => "Conceição do Rio Verde",
                "zipCode" => [ 37430000, 37439999 ],
                "ibge" => 3117702
            ]),
            "3117801" => new Map([
                "name" => "Conceição dos Ouros",
                "zipCode" => [ 37548000, 37548999 ],
                "ibge" => 3117801
            ]),
            "3117836" => new Map([
                "name" => "Cônego Marinho",
                "zipCode" => [ 39489000, 39489999 ],
                "ibge" => 3117836
            ]),
            "3117876" => new Map([
                "name" => "Confins",
                "zipCode" => [ 33500000, 33599999 ],
                "ibge" => 3117876
            ]),
            "3117900" => new Map([
                "name" => "Congonhal",
                "zipCode" => [ [     37584000,     37585999 ], [     37845000,     37849999 ] ],
                "ibge" => 3117900
            ]),
            "3118007" => new Map([
                "name" => "Congonhas",
                "zipCode" => [ 36410001, 36419999 ],
                "ibge" => 3118007
            ]),
            "3118106" => new Map([
                "name" => "Congonhas do Norte",
                "zipCode" => [ 35850000, 35857999 ],
                "ibge" => 3118106
            ]),
            "3118205" => new Map([
                "name" => "Conquista",
                "zipCode" => [ 38195000, 38199999 ],
                "ibge" => 3118205
            ]),
            "3118304" => new Map([
                "name" => "Conselheiro Lafaiete",
                "zipCode" => [ 36400001, 36409999 ],
                "ibge" => 3118304
            ]),
            "3118403" => new Map([
                "name" => "Conselheiro Pena",
                "zipCode" => [ 35240000, 35245999 ],
                "ibge" => 3118403
            ]),
            "3118502" => new Map([
                "name" => "Consolação",
                "zipCode" => [ 37670000, 37679999 ],
                "ibge" => 3118502
            ]),
            "3118601" => new Map([
                "name" => "Contagem",
                "zipCode" => [ 32000001, 32399999 ],
                "ibge" => 3118601
            ]),
            "3118700" => new Map([
                "name" => "Coqueiral",
                "zipCode" => [ 37235000, 37239999 ],
                "ibge" => 3118700
            ]),
            "3118809" => new Map([
                "name" => "Coração de Jesus",
                "zipCode" => [ 39340000, 39349999 ],
                "ibge" => 3118809
            ]),
            "3118908" => new Map([
                "name" => "Cordisburgo",
                "zipCode" => [ 35780000, 35784999 ],
                "ibge" => 3118908
            ]),
            "3119005" => new Map([
                "name" => "Cordislândia",
                "zipCode" => [ 37498000, 37499999 ],
                "ibge" => 3119005
            ]),
            "3119104" => new Map([
                "name" => "Corinto",
                "zipCode" => [ 39200000, 39204999 ],
                "ibge" => 3119104
            ]),
            "3119203" => new Map([
                "name" => "Coroaci",
                "zipCode" => [ 39710000, 39714999 ],
                "ibge" => 3119203
            ]),
            "3119302" => new Map([
                "name" => "Coromandel",
                "zipCode" => [ 38550000, 38569999 ],
                "ibge" => 3119302
            ]),
            "3119401" => new Map([
                "name" => "Coronel Fabriciano",
                "zipCode" => [ 35170001, 35176999 ],
                "ibge" => 3119401
            ]),
            "3119500" => new Map([
                "name" => "Coronel Murta",
                "zipCode" => [ 39635000, 39639999 ],
                "ibge" => 3119500
            ]),
            "3119609" => new Map([
                "name" => "Coronel Pacheco",
                "zipCode" => [ 36155000, 36156999 ],
                "ibge" => 3119609
            ]),
            "3119708" => new Map([
                "name" => "Coronel Xavier Chaves",
                "zipCode" => [ 36330000, 36334999 ],
                "ibge" => 3119708
            ]),
            "3119807" => new Map([
                "name" => "Córrego Danta",
                "zipCode" => [ 38990000, 39099999 ],
                "ibge" => 3119807
            ]),
            "3119906" => new Map([
                "name" => "Córrego do Bom Jesus",
                "zipCode" => [ 37605000, 37609999 ],
                "ibge" => 3119906
            ]),
            "3119955" => new Map([
                "name" => "Córrego Fundo",
                "zipCode" => [ 35568000, 35568999 ],
                "ibge" => 3119955
            ]),
            "3120003" => new Map([
                "name" => "Córrego Novo",
                "zipCode" => [ 35345000, 35347999 ],
                "ibge" => 3120003
            ]),
            "3120102" => new Map([
                "name" => "Couto de Magalhães de Minas",
                "zipCode" => [ 39188000, 39189999 ],
                "ibge" => 3120102
            ]),
            "3120151" => new Map([
                "name" => "Crisólita",
                "zipCode" => [ 39885000, 39889999 ],
                "ibge" => 3120151
            ]),
            "3120201" => new Map([
                "name" => "Cristais",
                "zipCode" => [ 37275000, 37277999 ],
                "ibge" => 3120201
            ]),
            "3120300" => new Map([
                "name" => "Cristália",
                "zipCode" => [ 39598000, 39599999 ],
                "ibge" => 3120300
            ]),
            "3120409" => new Map([
                "name" => "Cristiano Otoni",
                "zipCode" => [ 36426000, 36427999 ],
                "ibge" => 3120409
            ]),
            "3120508" => new Map([
                "name" => "Cristina",
                "zipCode" => [ 37476000, 37477999 ],
                "ibge" => 3120508
            ]),
            "3120607" => new Map([
                "name" => "Crucilândia",
                "zipCode" => [ 35478000, 35479999 ],
                "ibge" => 3120607
            ]),
            "3120706" => new Map([
                "name" => "Cruzeiro da Fortaleza",
                "zipCode" => [ 38735000, 38739999 ],
                "ibge" => 3120706
            ]),
            "3120805" => new Map([
                "name" => "Cruzília",
                "zipCode" => [ 37445000, 37446999 ],
                "ibge" => 3120805
            ]),
            "3120839" => new Map([
                "name" => "Cuparaque",
                "zipCode" => [ 35246000, 35247999 ],
                "ibge" => 3120839
            ]),
            "3120870" => new Map([
                "name" => "Curral de Dentro",
                "zipCode" => [ 39569000, 39569999 ],
                "ibge" => 3120870
            ]),
            "3120904" => new Map([
                "name" => "Curvelo",
                "zipCode" => [ 35789001, 35799999 ],
                "ibge" => 3120904
            ]),
            "3121001" => new Map([
                "name" => "Datas",
                "zipCode" => [ 39130000, 39134999 ],
                "ibge" => 3121001
            ]),
            "3121100" => new Map([
                "name" => "Delfim Moreira",
                "zipCode" => [ 37514000, 37515999 ],
                "ibge" => 3121100
            ]),
            "3121209" => new Map([
                "name" => "Delfinópolis",
                "zipCode" => [ 37910000, 37919999 ],
                "ibge" => 3121209
            ]),
            "3121258" => new Map([
                "name" => "Delta",
                "zipCode" => [ 38108000, 38109999 ],
                "ibge" => 3121258
            ]),
            "3121308" => new Map([
                "name" => "Descoberto",
                "zipCode" => [ 36690000, 36699999 ],
                "ibge" => 3121308
            ]),
            "3121407" => new Map([
                "name" => "Desterro de Entre Rios",
                "zipCode" => [ 35492000, 35494999 ],
                "ibge" => 3121407
            ]),
            "3121506" => new Map([
                "name" => "Desterro do Melo",
                "zipCode" => [ 36210000, 36211999 ],
                "ibge" => 3121506
            ]),
            "3121605" => new Map([
                "name" => "Diamantina",
                "zipCode" => [ 39100000, 39119999 ],
                "ibge" => 3121605
            ]),
            "3121704" => new Map([
                "name" => "Diogo de Vasconcelos",
                "zipCode" => [ 35437000, 35437999 ],
                "ibge" => 3121704
            ]),
            "3121803" => new Map([
                "name" => "Dionísio",
                "zipCode" => [ 35984000, 35985999 ],
                "ibge" => 3121803
            ]),
            "3121902" => new Map([
                "name" => "Divinésia",
                "zipCode" => [ 36546000, 36549999 ],
                "ibge" => 3121902
            ]),
            "3122009" => new Map([
                "name" => "Divino",
                "zipCode" => [ 36820000, 36827999 ],
                "ibge" => 3122009
            ]),
            "3122108" => new Map([
                "name" => "Divino das Laranjeiras",
                "zipCode" => [ 35265000, 35269999 ],
                "ibge" => 3122108
            ]),
            "3122207" => new Map([
                "name" => "Divinolândia de Minas",
                "zipCode" => [ 39735000, 39739999 ],
                "ibge" => 3122207
            ]),
            "3122306" => new Map([
                "name" => "Divinópolis",
                "zipCode" => [ 35500001, 35516999 ],
                "ibge" => 3122306
            ]),
            "3122355" => new Map([
                "name" => "Divisa Alegre",
                "zipCode" => [ 39995000, 39997999 ],
                "ibge" => 3122355
            ]),
            "3122405" => new Map([
                "name" => "Divisa Nova",
                "zipCode" => [ 37142000, 37142999 ],
                "ibge" => 3122405
            ]),
            "3122454" => new Map([
                "name" => "Divisópolis",
                "zipCode" => [ 39912000, 39914999 ],
                "ibge" => 3122454
            ]),
            "3122470" => new Map([
                "name" => "Dom Bosco",
                "zipCode" => [ 38654000, 38657999 ],
                "ibge" => 3122470
            ]),
            "3122504" => new Map([
                "name" => "Dom Cavati",
                "zipCode" => [ 35148000, 35149999 ],
                "ibge" => 3122504
            ]),
            "3122603" => new Map([
                "name" => "Dom Joaquim",
                "zipCode" => [ 35865000, 35874999 ],
                "ibge" => 3122603
            ]),
            "3122702" => new Map([
                "name" => "Dom Silvério",
                "zipCode" => [ 35440000, 35440999 ],
                "ibge" => 3122702
            ]),
            "3122801" => new Map([
                "name" => "Dom Viçoso",
                "zipCode" => [ 37474000, 37475999 ],
                "ibge" => 3122801
            ]),
            "3122900" => new Map([
                "name" => "Dona Euzébia",
                "zipCode" => [ 36784000, 36787999 ],
                "ibge" => 3122900
            ]),
            "3123007" => new Map([
                "name" => "Dores de Campos",
                "zipCode" => [ 36213000, 36214999 ],
                "ibge" => 3123007
            ]),
            "3123106" => new Map([
                "name" => "Dores de Guanhães",
                "zipCode" => [ 35894000, 35899999 ],
                "ibge" => 3123106
            ]),
            "3123205" => new Map([
                "name" => "Dores do Indaiá",
                "zipCode" => [ 35610000, 35612999 ],
                "ibge" => 3123205
            ]),
            "3123304" => new Map([
                "name" => "Dores do Turvo",
                "zipCode" => [ 36513000, 36514999 ],
                "ibge" => 3123304
            ]),
            "3123403" => new Map([
                "name" => "Doresópolis",
                "zipCode" => [ 37926000, 37926999 ],
                "ibge" => 3123403
            ]),
            "3123502" => new Map([
                "name" => "Douradoquara",
                "zipCode" => [ 38530000, 38539999 ],
                "ibge" => 3123502
            ]),
            "3123528" => new Map([
                "name" => "Durandé",
                "zipCode" => [ 36974000, 36975799 ],
                "ibge" => 3123528
            ]),
            "3123601" => new Map([
                "name" => "Elói Mendes",
                "zipCode" => [ 37110000, 37114999 ],
                "ibge" => 3123601
            ]),
            "3123700" => new Map([
                "name" => "Engenheiro Caldas",
                "zipCode" => [ 35130000, 35134999 ],
                "ibge" => 3123700
            ]),
            "3123809" => new Map([
                "name" => "Engenheiro Navarro",
                "zipCode" => [ 39363000, 39364999 ],
                "ibge" => 3123809
            ]),
            "3123858" => new Map([
                "name" => "Entre Folhas",
                "zipCode" => [ 35324000, 35324999 ],
                "ibge" => 3123858
            ]),
            "3123908" => new Map([
                "name" => "Entre Rios de Minas",
                "zipCode" => [ 35490000, 35491999 ],
                "ibge" => 3123908
            ]),
            "3124005" => new Map([
                "name" => "Ervália",
                "zipCode" => [ 36555000, 36559999 ],
                "ibge" => 3124005
            ]),
            "3124104" => new Map([
                "name" => "Esmeraldas",
                "zipCode" => [ 32800000, 32824999 ],
                "ibge" => 3124104
            ]),
            "3124203" => new Map([
                "name" => "Espera Feliz",
                "zipCode" => [ 36830000, 36831999 ],
                "ibge" => 3124203
            ]),
            "3124302" => new Map([
                "name" => "Espinosa",
                "zipCode" => [ 39510000, 39515999 ],
                "ibge" => 3124302
            ]),
            "3124401" => new Map([
                "name" => "Espírito Santo do Dourado",
                "zipCode" => [ 37566000, 37566999 ],
                "ibge" => 3124401
            ]),
            "3124500" => new Map([
                "name" => "Estiva",
                "zipCode" => [ 37542000, 37544999 ],
                "ibge" => 3124500
            ]),
            "3124609" => new Map([
                "name" => "Estrela Dalva",
                "zipCode" => [ 36725000, 36729999 ],
                "ibge" => 3124609
            ]),
            "3124708" => new Map([
                "name" => "Estrela do Indaiá",
                "zipCode" => [ 35613000, 35616999 ],
                "ibge" => 3124708
            ]),
            "3124807" => new Map([
                "name" => "Estrela do Sul",
                "zipCode" => [ 38525000, 38529999 ],
                "ibge" => 3124807
            ]),
            "3124906" => new Map([
                "name" => "Eugenópolis",
                "zipCode" => [ 36855000, 36859999 ],
                "ibge" => 3124906
            ]),
            "3125002" => new Map([
                "name" => "Ewbank da Câmara",
                "zipCode" => [ 36108000, 36109999 ],
                "ibge" => 3125002
            ]),
            "3125101" => new Map([
                "name" => "Extrema",
                "zipCode" => [ 37640000, 37649999 ],
                "ibge" => 3125101
            ]),
            "3125200" => new Map([
                "name" => "Fama",
                "zipCode" => [ 37144000, 37144999 ],
                "ibge" => 3125200
            ]),
            "3125309" => new Map([
                "name" => "Faria Lemos",
                "zipCode" => [ 36840000, 36843999 ],
                "ibge" => 3125309
            ]),
            "3125408" => new Map([
                "name" => "Felício dos Santos",
                "zipCode" => [ 39180000, 39184999 ],
                "ibge" => 3125408
            ]),
            "3125606" => new Map([
                "name" => "Felisburgo",
                "zipCode" => [ 39895000, 39899999 ],
                "ibge" => 3125606
            ]),
            "3125705" => new Map([
                "name" => "Felixlândia",
                "zipCode" => [ 39237000, 39239999 ],
                "ibge" => 3125705
            ]),
            "3125804" => new Map([
                "name" => "Fernandes Tourinho",
                "zipCode" => [ 35135000, 35137999 ],
                "ibge" => 3125804
            ]),
            "3125903" => new Map([
                "name" => "Ferros",
                "zipCode" => [ 35800000, 35809999 ],
                "ibge" => 3125903
            ]),
            "3125952" => new Map([
                "name" => "Fervedouro",
                "zipCode" => [ 36815000, 36819999 ],
                "ibge" => 3125952
            ]),
            "3126000" => new Map([
                "name" => "Florestal",
                "zipCode" => [ 35690000, 35693999 ],
                "ibge" => 3126000
            ]),
            "3126109" => new Map([
                "name" => "Formiga",
                "zipCode" => [ 35570001, 35579999 ],
                "ibge" => 3126109
            ]),
            "3126208" => new Map([
                "name" => "Formoso",
                "zipCode" => [ 38690000, 38699999 ],
                "ibge" => 3126208
            ]),
            "3126307" => new Map([
                "name" => "Fortaleza de Minas",
                "zipCode" => [ 37905000, 37909999 ],
                "ibge" => 3126307
            ]),
            "3126406" => new Map([
                "name" => "Fortuna de Minas",
                "zipCode" => [ 35760000, 35762999 ],
                "ibge" => 3126406
            ]),
            "3126505" => new Map([
                "name" => "Francisco Badaró",
                "zipCode" => [ 39644000, 39644999 ],
                "ibge" => 3126505
            ]),
            "3126604" => new Map([
                "name" => "Francisco Dumont",
                "zipCode" => [ 39387000, 39389999 ],
                "ibge" => 3126604
            ]),
            "3126703" => new Map([
                "name" => "Francisco Sá",
                "zipCode" => [ 39580000, 39589999 ],
                "ibge" => 3126703
            ]),
            "3126752" => new Map([
                "name" => "Franciscópolis",
                "zipCode" => [ 39695000, 39699999 ],
                "ibge" => 3126752
            ]),
            "3126802" => new Map([
                "name" => "Frei Gaspar",
                "zipCode" => [ 39840000, 39847999 ],
                "ibge" => 3126802
            ]),
            "3126901" => new Map([
                "name" => "Frei Inocêncio",
                "zipCode" => [ 35112000, 35112999 ],
                "ibge" => 3126901
            ]),
            "3126950" => new Map([
                "name" => "Frei Lagonegro",
                "zipCode" => [ 39708000, 39709999 ],
                "ibge" => 3126950
            ]),
            "3127008" => new Map([
                "name" => "Fronteira",
                "zipCode" => [ 38230000, 38239999 ],
                "ibge" => 3127008
            ]),
            "3127057" => new Map([
                "name" => "Fronteira dos Vales",
                "zipCode" => [ 39870000, 39872999 ],
                "ibge" => 3127057
            ]),
            "3127073" => new Map([
                "name" => "Fruta de Leite",
                "zipCode" => [ 39558000, 39559999 ],
                "ibge" => 3127073
            ]),
            "3127107" => new Map([
                "name" => "Frutal",
                "zipCode" => [ 38200001, 38209999 ],
                "ibge" => 3127107
            ]),
            "3127206" => new Map([
                "name" => "Funilândia",
                "zipCode" => [ 35736000, 35737999 ],
                "ibge" => 3127206
            ]),
            "3127305" => new Map([
                "name" => "Galiléia",
                "zipCode" => [ 35250000, 35257999 ],
                "ibge" => 3127305
            ]),
            "3127339" => new Map([
                "name" => "Gameleiras",
                "zipCode" => [ 39505000, 39507999 ],
                "ibge" => 3127339
            ]),
            "3127354" => new Map([
                "name" => "Glaucilândia",
                "zipCode" => [ 39592000, 39593999 ],
                "ibge" => 3127354
            ]),
            "3127370" => new Map([
                "name" => "Goiabeira",
                "zipCode" => [ 35248000, 35248999 ],
                "ibge" => 3127370
            ]),
            "3127388" => new Map([
                "name" => "Goianá",
                "zipCode" => [ 36152000, 36154999 ],
                "ibge" => 3127388
            ]),
            "3127404" => new Map([
                "name" => "Gonçalves",
                "zipCode" => [ 37680000, 37689999 ],
                "ibge" => 3127404
            ]),
            "3127503" => new Map([
                "name" => "Gonzaga",
                "zipCode" => [ 39720000, 39722999 ],
                "ibge" => 3127503
            ]),
            "3127602" => new Map([
                "name" => "Gouveia",
                "zipCode" => [ 39120000, 39129999 ],
                "ibge" => 3127602
            ]),
            "3127701" => new Map([
                "name" => "Governador Valadares",
                "zipCode" => [ 35000001, 35109999 ],
                "ibge" => 3127701
            ]),
            "3127800" => new Map([
                "name" => "Grão Mogol",
                "zipCode" => [ 39570000, 39572999 ],
                "ibge" => 3127800
            ]),
            "3127909" => new Map([
                "name" => "Grupiara",
                "zipCode" => [ 38470000, 38474999 ],
                "ibge" => 3127909
            ]),
            "3128006" => new Map([
                "name" => "Guanhães",
                "zipCode" => [ 39740000, 39744999 ],
                "ibge" => 3128006
            ]),
            "3128105" => new Map([
                "name" => "Guapé",
                "zipCode" => [ 37177000, 37189999 ],
                "ibge" => 3128105
            ]),
            "3128204" => new Map([
                "name" => "Guaraciaba",
                "zipCode" => [ 35436000, 35436999 ],
                "ibge" => 3128204
            ]),
            "3128253" => new Map([
                "name" => "Guaraciama",
                "zipCode" => [ 39397000, 39397999 ],
                "ibge" => 3128253
            ]),
            "3128303" => new Map([
                "name" => "Guaranésia",
                "zipCode" => [ 37810000, 37819999 ],
                "ibge" => 3128303
            ]),
            "3128402" => new Map([
                "name" => "Guarani",
                "zipCode" => [ 36160000, 36164999 ],
                "ibge" => 3128402
            ]),
            "3128501" => new Map([
                "name" => "Guarará",
                "zipCode" => [ 36606000, 36607999 ],
                "ibge" => 3128501
            ]),
            "3128600" => new Map([
                "name" => "Guarda-Mor",
                "zipCode" => [ 38570000, 38599999 ],
                "ibge" => 3128600
            ]),
            "3128709" => new Map([
                "name" => "Guaxupé",
                "zipCode" => [ [     37800000,     37804999 ], [     37830000,     37837999 ] ],
                "ibge" => 3128709
            ]),
            "3128808" => new Map([
                "name" => "Guidoval",
                "zipCode" => [ 36515000, 36519999 ],
                "ibge" => 3128808
            ]),
            "3128907" => new Map([
                "name" => "Guimarânia",
                "zipCode" => [ 38730000, 38734999 ],
                "ibge" => 3128907
            ]),
            "3129004" => new Map([
                "name" => "Guiricema",
                "zipCode" => [ 36525000, 36529999 ],
                "ibge" => 3129004
            ]),
            "3129103" => new Map([
                "name" => "Gurinhatã",
                "zipCode" => [ 38310000, 38319999 ],
                "ibge" => 3129103
            ]),
            "3129202" => new Map([
                "name" => "Heliodora",
                "zipCode" => [ 37484000, 37484999 ],
                "ibge" => 3129202
            ]),
            "3129301" => new Map([
                "name" => "Iapu",
                "zipCode" => [ 35190000, 35192999 ],
                "ibge" => 3129301
            ]),
            "3129400" => new Map([
                "name" => "Ibertioga",
                "zipCode" => [ 36225000, 36226999 ],
                "ibge" => 3129400
            ]),
            "3129509" => new Map([
                "name" => "Ibiá",
                "zipCode" => [ 38950000, 38959999 ],
                "ibge" => 3129509
            ]),
            "3129608" => new Map([
                "name" => "Ibiaí",
                "zipCode" => [ 39350000, 39354999 ],
                "ibge" => 3129608
            ]),
            "3129657" => new Map([
                "name" => "Ibiracatu",
                "zipCode" => [ 39455000, 39457999 ],
                "ibge" => 3129657
            ]),
            "3129707" => new Map([
                "name" => "Ibiraci",
                "zipCode" => [ 37990000, 37992999 ],
                "ibge" => 3129707
            ]),
            "3129806" => new Map([
                "name" => "Ibirité",
                "zipCode" => [ 32400001, 32449999 ],
                "ibge" => 3129806
            ]),
            "3129905" => new Map([
                "name" => "Ibitiúra de Minas",
                "zipCode" => [ 37790000, 37794999 ],
                "ibge" => 3129905
            ]),
            "3130002" => new Map([
                "name" => "Ibituruna",
                "zipCode" => [ 37223000, 37224999 ],
                "ibge" => 3130002
            ]),
            "3130051" => new Map([
                "name" => "Icaraí de Minas",
                "zipCode" => [ 39318000, 39319999 ],
                "ibge" => 3130051
            ]),
            "3130101" => new Map([
                "name" => "Igarapé",
                "zipCode" => [ 32900000, 32919999 ],
                "ibge" => 3130101
            ]),
            "3130200" => new Map([
                "name" => "Igaratinga",
                "zipCode" => [ 35695000, 35699999 ],
                "ibge" => 3130200
            ]),
            "3130309" => new Map([
                "name" => "Iguatama",
                "zipCode" => [ 38910000, 38929999 ],
                "ibge" => 3130309
            ]),
            "3130408" => new Map([
                "name" => "Ijaci",
                "zipCode" => [ 37218000, 37219999 ],
                "ibge" => 3130408
            ]),
            "3130507" => new Map([
                "name" => "Ilicínea",
                "zipCode" => [ 37175000, 37176999 ],
                "ibge" => 3130507
            ]),
            "3130556" => new Map([
                "name" => "Imbé de Minas",
                "zipCode" => [ 35323000, 35323999 ],
                "ibge" => 3130556
            ]),
            "3130606" => new Map([
                "name" => "Inconfidentes",
                "zipCode" => [ 37576000, 37577999 ],
                "ibge" => 3130606
            ]),
            "3130655" => new Map([
                "name" => "Indaiabira",
                "zipCode" => [ 39536000, 39537999 ],
                "ibge" => 3130655
            ]),
            "3130705" => new Map([
                "name" => "Indianópolis",
                "zipCode" => [ 38490000, 38499999 ],
                "ibge" => 3130705
            ]),
            "3130804" => new Map([
                "name" => "Ingaí",
                "zipCode" => [ 37215000, 37217999 ],
                "ibge" => 3130804
            ]),
            "3130903" => new Map([
                "name" => "Inhapim",
                "zipCode" => [ 35330000, 35333999 ],
                "ibge" => 3130903
            ]),
            "3131000" => new Map([
                "name" => "Inhaúma",
                "zipCode" => [ 35763000, 35764999 ],
                "ibge" => 3131000
            ]),
            "3131109" => new Map([
                "name" => "Inimutaba",
                "zipCode" => [ 39243000, 39244999 ],
                "ibge" => 3131109
            ]),
            "3131158" => new Map([
                "name" => "Ipaba",
                "zipCode" => [ 35198000, 35198999 ],
                "ibge" => 3131158
            ]),
            "3131208" => new Map([
                "name" => "Ipanema",
                "zipCode" => [ 36950000, 36952999 ],
                "ibge" => 3131208
            ]),
            "3131307" => new Map([
                "name" => "Ipatinga",
                "zipCode" => [ 35150001, 35169999 ],
                "ibge" => 3131307
            ]),
            "3131406" => new Map([
                "name" => "Ipiaçu",
                "zipCode" => [ 38350000, 38359999 ],
                "ibge" => 3131406
            ]),
            "3131505" => new Map([
                "name" => "Ipuiúna",
                "zipCode" => [ [     37588000,     37588999 ], [     37825000,     37829999 ] ],
                "ibge" => 3131505
            ]),
            "3131604" => new Map([
                "name" => "Iraí de Minas",
                "zipCode" => [ 38510000, 38519999 ],
                "ibge" => 3131604
            ]),
            "3131703" => new Map([
                "name" => "Itabira",
                "zipCode" => [ 35900001, 35907999 ],
                "ibge" => 3131703
            ]),
            "3131802" => new Map([
                "name" => "Itabirinha",
                "zipCode" => [ 35280000, 35289999 ],
                "ibge" => 3131802
            ]),
            "3131901" => new Map([
                "name" => "Itabirito",
                "zipCode" => [ 35450001, 35459999 ],
                "ibge" => 3131901
            ]),
            "3132008" => new Map([
                "name" => "Itacambira",
                "zipCode" => [ 39594000, 39594999 ],
                "ibge" => 3132008
            ]),
            "3132107" => new Map([
                "name" => "Itacarambi",
                "zipCode" => [ 39470000, 39471999 ],
                "ibge" => 3132107
            ]),
            "3132206" => new Map([
                "name" => "Itaguara",
                "zipCode" => [ 35488000, 35489999 ],
                "ibge" => 3132206
            ]),
            "3132305" => new Map([
                "name" => "Itaipé",
                "zipCode" => [ 39815000, 39815999 ],
                "ibge" => 3132305
            ]),
            "3132404" => new Map([
                "name" => "Itajubá",
                "zipCode" => [ 37500001, 37507999 ],
                "ibge" => 3132404
            ]),
            "3132503" => new Map([
                "name" => "Itamarandiba",
                "zipCode" => [ 39670000, 39677999 ],
                "ibge" => 3132503
            ]),
            "3132602" => new Map([
                "name" => "Itamarati de Minas",
                "zipCode" => [ 36788000, 36789999 ],
                "ibge" => 3132602
            ]),
            "3132701" => new Map([
                "name" => "Itambacuri",
                "zipCode" => [ 39830000, 39834999 ],
                "ibge" => 3132701
            ]),
            "3132800" => new Map([
                "name" => "Itambé do Mato Dentro",
                "zipCode" => [ 35820000, 35829999 ],
                "ibge" => 3132800
            ]),
            "3132909" => new Map([
                "name" => "Itamogi",
                "zipCode" => [ 37973000, 37974999 ],
                "ibge" => 3132909
            ]),
            "3133006" => new Map([
                "name" => "Itamonte",
                "zipCode" => [ 37466000, 37466999 ],
                "ibge" => 3133006
            ]),
            "3133105" => new Map([
                "name" => "Itanhandu",
                "zipCode" => [ 37464000, 37464999 ],
                "ibge" => 3133105
            ]),
            "3133204" => new Map([
                "name" => "Itanhomi",
                "zipCode" => [ 35120000, 35122999 ],
                "ibge" => 3133204
            ]),
            "3133303" => new Map([
                "name" => "Itaobim",
                "zipCode" => [ 39625000, 39627999 ],
                "ibge" => 3133303
            ]),
            "3133402" => new Map([
                "name" => "Itapagipe",
                "zipCode" => [ 38240000, 38249999 ],
                "ibge" => 3133402
            ]),
            "3133501" => new Map([
                "name" => "Itapecerica",
                "zipCode" => [ 35550000, 35554999 ],
                "ibge" => 3133501
            ]),
            "3133600" => new Map([
                "name" => "Itapeva",
                "zipCode" => [ 37655000, 37659999 ],
                "ibge" => 3133600
            ]),
            "3133709" => new Map([
                "name" => "Itatiaiuçu",
                "zipCode" => [ 35685000, 35689999 ],
                "ibge" => 3133709
            ]),
            "3133758" => new Map([
                "name" => "Itaú de Minas",
                "zipCode" => [ 37975000, 37979999 ],
                "ibge" => 3133758
            ]),
            "3133808" => new Map([
                "name" => "Itaúna",
                "zipCode" => [ 35680001, 35684999 ],
                "ibge" => 3133808
            ]),
            "3133907" => new Map([
                "name" => "Itaverava",
                "zipCode" => [ 36440000, 36449999 ],
                "ibge" => 3133907
            ]),
            "3134004" => new Map([
                "name" => "Itinga",
                "zipCode" => [ 39610000, 39614999 ],
                "ibge" => 3134004
            ]),
            "3134103" => new Map([
                "name" => "Itueta",
                "zipCode" => [ 35220000, 35224999 ],
                "ibge" => 3134103
            ]),
            "3134202" => new Map([
                "name" => "Ituiutaba",
                "zipCode" => [ 38300001, 38309999 ],
                "ibge" => 3134202
            ]),
            "3134301" => new Map([
                "name" => "Itumirim",
                "zipCode" => [ 37210000, 37214999 ],
                "ibge" => 3134301
            ]),
            "3134400" => new Map([
                "name" => "Iturama",
                "zipCode" => [ 38280000, 38287999 ],
                "ibge" => 3134400
            ]),
            "3134509" => new Map([
                "name" => "Itutinga",
                "zipCode" => [ 36390000, 36399999 ],
                "ibge" => 3134509
            ]),
            "3134608" => new Map([
                "name" => "Jaboticatubas",
                "zipCode" => [ 35830000, 35844999 ],
                "ibge" => 3134608
            ]),
            "3134707" => new Map([
                "name" => "Jacinto",
                "zipCode" => [ 39930000, 39934999 ],
                "ibge" => 3134707
            ]),
            "3134806" => new Map([
                "name" => "Jacuí",
                "zipCode" => [ 37965000, 37967999 ],
                "ibge" => 3134806
            ]),
            "3134905" => new Map([
                "name" => "Jacutinga",
                "zipCode" => [ 37590000, 37595999 ],
                "ibge" => 3134905
            ]),
            "3135001" => new Map([
                "name" => "Jaguaraçu",
                "zipCode" => [ 35188000, 35188999 ],
                "ibge" => 3135001
            ]),
            "3135050" => new Map([
                "name" => "Jaíba",
                "zipCode" => [ 39508000, 39509999 ],
                "ibge" => 3135050
            ]),
            "3135076" => new Map([
                "name" => "Jampruca",
                "zipCode" => [ 39837000, 39839999 ],
                "ibge" => 3135076
            ]),
            "3135100" => new Map([
                "name" => "Janaúba",
                "zipCode" => [ 39440001, 39449999 ],
                "ibge" => 3135100
            ]),
            "3135209" => new Map([
                "name" => "Januária",
                "zipCode" => [ 39480000, 39488999 ],
                "ibge" => 3135209
            ]),
            "3135308" => new Map([
                "name" => "Japaraíba",
                "zipCode" => [ 35580000, 35581999 ],
                "ibge" => 3135308
            ]),
            "3135357" => new Map([
                "name" => "Japonvar",
                "zipCode" => [ 39335000, 39335999 ],
                "ibge" => 3135357
            ]),
            "3135407" => new Map([
                "name" => "Jeceaba",
                "zipCode" => [ 35497000, 35499999 ],
                "ibge" => 3135407
            ]),
            "3135456" => new Map([
                "name" => "Jenipapo de Minas",
                "zipCode" => [ 39645000, 39647999 ],
                "ibge" => 3135456
            ]),
            "3135506" => new Map([
                "name" => "Jequeri",
                "zipCode" => [ 35390000, 35399999 ],
                "ibge" => 3135506
            ]),
            "3135605" => new Map([
                "name" => "Jequitaí",
                "zipCode" => [ 39370000, 39372999 ],
                "ibge" => 3135605
            ]),
            "3135704" => new Map([
                "name" => "Jequitibá",
                "zipCode" => [ 35767000, 35769999 ],
                "ibge" => 3135704
            ]),
            "3135803" => new Map([
                "name" => "Jequitinhonha",
                "zipCode" => [ 39960000, 39969999 ],
                "ibge" => 3135803
            ]),
            "3135902" => new Map([
                "name" => "Jesuânia",
                "zipCode" => [ 37485000, 37487999 ],
                "ibge" => 3135902
            ]),
            "3136009" => new Map([
                "name" => "Joaíma",
                "zipCode" => [ 39890000, 39892999 ],
                "ibge" => 3136009
            ]),
            "3136108" => new Map([
                "name" => "Joanésia",
                "zipCode" => [ 35194000, 35194999 ],
                "ibge" => 3136108
            ]),
            "3136207" => new Map([
                "name" => "João Monlevade",
                "zipCode" => [ 35930001, 35934999 ],
                "ibge" => 3136207
            ]),
            "3136306" => new Map([
                "name" => "João Pinheiro",
                "zipCode" => [ 38770000, 38778999 ],
                "ibge" => 3136306
            ]),
            "3136405" => new Map([
                "name" => "Joaquim Felício",
                "zipCode" => [ 39240000, 39242999 ],
                "ibge" => 3136405
            ]),
            "3136504" => new Map([
                "name" => "Jordânia",
                "zipCode" => [ 39920000, 39924999 ],
                "ibge" => 3136504
            ]),
            "3136520" => new Map([
                "name" => "José Gonçalves de Minas",
                "zipCode" => [ 39642000, 39643999 ],
                "ibge" => 3136520
            ]),
            "3136553" => new Map([
                "name" => "José Raydan",
                "zipCode" => [ 39775000, 39779999 ],
                "ibge" => 3136553
            ]),
            "3136579" => new Map([
                "name" => "Josenópolis",
                "zipCode" => [ 39575000, 39579999 ],
                "ibge" => 3136579
            ]),
            "3136652" => new Map([
                "name" => "Juatuba",
                "zipCode" => [ 35675000, 35679999 ],
                "ibge" => 3136652
            ]),
            "3136702" => new Map([
                "name" => "Juiz de Fora",
                "zipCode" => [ 36000001, 36107999 ],
                "ibge" => 3136702
            ]),
            "3136801" => new Map([
                "name" => "Juramento",
                "zipCode" => [ 39590000, 39591999 ],
                "ibge" => 3136801
            ]),
            "3136900" => new Map([
                "name" => "Juruaia",
                "zipCode" => [ 37805000, 37809999 ],
                "ibge" => 3136900
            ]),
            "3136959" => new Map([
                "name" => "Juvenília",
                "zipCode" => [ 39467000, 39469999 ],
                "ibge" => 3136959
            ]),
            "3137007" => new Map([
                "name" => "Ladainha",
                "zipCode" => [ 39825000, 39826999 ],
                "ibge" => 3137007
            ]),
            "3137106" => new Map([
                "name" => "Lagamar",
                "zipCode" => [ 38785000, 38789999 ],
                "ibge" => 3137106
            ]),
            "3137205" => new Map([
                "name" => "Lagoa da Prata",
                "zipCode" => [ 35590001, 35594999 ],
                "ibge" => 3137205
            ]),
            "3137304" => new Map([
                "name" => "Lagoa dos Patos",
                "zipCode" => [ 39360000, 39362999 ],
                "ibge" => 3137304
            ]),
            "3137403" => new Map([
                "name" => "Lagoa Dourada",
                "zipCode" => [ 36345000, 36349999 ],
                "ibge" => 3137403
            ]),
            "3137502" => new Map([
                "name" => "Lagoa Formosa",
                "zipCode" => [ 38720000, 38729999 ],
                "ibge" => 3137502
            ]),
            "3137536" => new Map([
                "name" => "Lagoa Grande",
                "zipCode" => [ 38755000, 38759999 ],
                "ibge" => 3137536
            ]),
            "3137601" => new Map([
                "name" => "Lagoa Santa",
                "zipCode" => [ 33230001, 33249999 ],
                "ibge" => 3137601
            ]),
            "3137700" => new Map([
                "name" => "Lajinha",
                "zipCode" => [ 36980000, 36984999 ],
                "ibge" => 3137700
            ]),
            "3137809" => new Map([
                "name" => "Lambari",
                "zipCode" => [ 37480000, 37483999 ],
                "ibge" => 3137809
            ]),
            "3137908" => new Map([
                "name" => "Lamim",
                "zipCode" => [ 36455000, 36459999 ],
                "ibge" => 3137908
            ]),
            "3138005" => new Map([
                "name" => "Laranjal",
                "zipCode" => [ 36760000, 36769999 ],
                "ibge" => 3138005
            ]),
            "3138104" => new Map([
                "name" => "Lassance",
                "zipCode" => [ 39250000, 39259999 ],
                "ibge" => 3138104
            ]),
            "3138203" => new Map([
                "name" => "Lavras",
                "zipCode" => [ 37200001, 37209999 ],
                "ibge" => 3138203
            ]),
            "3138302" => new Map([
                "name" => "Leandro Ferreira",
                "zipCode" => [ 35657000, 35659999 ],
                "ibge" => 3138302
            ]),
            "3138351" => new Map([
                "name" => "Leme do Prado",
                "zipCode" => [ 39655000, 39659999 ],
                "ibge" => 3138351
            ]),
            "3138401" => new Map([
                "name" => "Leopoldina",
                "zipCode" => [ 36700001, 36709999 ],
                "ibge" => 3138401
            ]),
            "3138500" => new Map([
                "name" => "Liberdade",
                "zipCode" => [ 37350000, 37359999 ],
                "ibge" => 3138500
            ]),
            "3138609" => new Map([
                "name" => "Lima Duarte",
                "zipCode" => [ 36140000, 36144999 ],
                "ibge" => 3138609
            ]),
            "3138625" => new Map([
                "name" => "Limeira do Oeste",
                "zipCode" => [ 38295000, 38299999 ],
                "ibge" => 3138625
            ]),
            "3138658" => new Map([
                "name" => "Lontra",
                "zipCode" => [ 39437000, 39439999 ],
                "ibge" => 3138658
            ]),
            "3138674" => new Map([
                "name" => "Luisburgo",
                "zipCode" => [ 36923000, 36924999 ],
                "ibge" => 3138674
            ]),
            "3138682" => new Map([
                "name" => "Luislândia",
                "zipCode" => [ 39336000, 39337999 ],
                "ibge" => 3138682
            ]),
            "3138708" => new Map([
                "name" => "Luminárias",
                "zipCode" => [ 37240000, 37244999 ],
                "ibge" => 3138708
            ]),
            "3138807" => new Map([
                "name" => "Luz",
                "zipCode" => [ 35595000, 35597999 ],
                "ibge" => 3138807
            ]),
            "3138906" => new Map([
                "name" => "Machacalis",
                "zipCode" => [ 39873000, 39873999 ],
                "ibge" => 3138906
            ]),
            "3139003" => new Map([
                "name" => "Machado",
                "zipCode" => [ 37750000, 37756999 ],
                "ibge" => 3139003
            ]),
            "3139102" => new Map([
                "name" => "Madre de Deus de Minas",
                "zipCode" => [ 37305000, 37309999 ],
                "ibge" => 3139102
            ]),
            "3139201" => new Map([
                "name" => "Malacacheta",
                "zipCode" => [ 39690000, 39694999 ],
                "ibge" => 3139201
            ]),
            "3139250" => new Map([
                "name" => "Mamonas",
                "zipCode" => [ 39516000, 39516999 ],
                "ibge" => 3139250
            ]),
            "3139300" => new Map([
                "name" => "Manga",
                "zipCode" => [ 39460000, 39464999 ],
                "ibge" => 3139300
            ]),
            "3139409" => new Map([
                "name" => "Manhuaçu",
                "zipCode" => [ 36900001, 36912999 ],
                "ibge" => 3139409
            ]),
            "3139508" => new Map([
                "name" => "Manhumirim",
                "zipCode" => [ 36970000, 36971999 ],
                "ibge" => 3139508
            ]),
            "3139607" => new Map([
                "name" => "Mantena",
                "zipCode" => [ 35290000, 35297999 ],
                "ibge" => 3139607
            ]),
            "3139805" => new Map([
                "name" => "Mar de Espanha",
                "zipCode" => [ 36640000, 36649999 ],
                "ibge" => 3139805
            ]),
            "3139706" => new Map([
                "name" => "Maravilhas",
                "zipCode" => [ 35666000, 35666999 ],
                "ibge" => 3139706
            ]),
            "3139904" => new Map([
                "name" => "Maria da Fé",
                "zipCode" => [ 37517000, 37519999 ],
                "ibge" => 3139904
            ]),
            "3140001" => new Map([
                "name" => "Mariana",
                "zipCode" => [ 35420001, 35429999 ],
                "ibge" => 3140001
            ]),
            "3140100" => new Map([
                "name" => "Marilac",
                "zipCode" => [ 35115000, 35115999 ],
                "ibge" => 3140100
            ]),
            "3140159" => new Map([
                "name" => "Mário Campos",
                "zipCode" => [ 32470000, 32479999 ],
                "ibge" => 3140159
            ]),
            "3140209" => new Map([
                "name" => "Maripá de Minas",
                "zipCode" => [ 36608000, 36609999 ],
                "ibge" => 3140209
            ]),
            "3140308" => new Map([
                "name" => "Marliéria",
                "zipCode" => [ 35185000, 35187999 ],
                "ibge" => 3140308
            ]),
            "3140407" => new Map([
                "name" => "Marmelópolis",
                "zipCode" => [ 37516000, 37516999 ],
                "ibge" => 3140407
            ]),
            "3140506" => new Map([
                "name" => "Martinho Campos",
                "zipCode" => [ 35606000, 35609999 ],
                "ibge" => 3140506
            ]),
            "3140530" => new Map([
                "name" => "Martins Soares",
                "zipCode" => [ 36972000, 36973999 ],
                "ibge" => 3140530
            ]),
            "3140555" => new Map([
                "name" => "Mata Verde",
                "zipCode" => [ 39915000, 39916999 ],
                "ibge" => 3140555
            ]),
            "3140605" => new Map([
                "name" => "Materlândia",
                "zipCode" => [ 39755000, 39764999 ],
                "ibge" => 3140605
            ]),
            "3140704" => new Map([
                "name" => "Mateus Leme",
                "zipCode" => [ 35670000, 35674999 ],
                "ibge" => 3140704
            ]),
            "3171501" => new Map([
                "name" => "Mathias Lobato",
                "zipCode" => [ 35110000, 35111999 ],
                "ibge" => 3171501
            ]),
            "3140803" => new Map([
                "name" => "Matias Barbosa",
                "zipCode" => [ 36120000, 36122999 ],
                "ibge" => 3140803
            ]),
            "3140852" => new Map([
                "name" => "Matias Cardoso",
                "zipCode" => [ 39478000, 39479999 ],
                "ibge" => 3140852
            ]),
            "3140902" => new Map([
                "name" => "Matipó",
                "zipCode" => [ 35367000, 35367999 ],
                "ibge" => 3140902
            ]),
            "3141009" => new Map([
                "name" => "Mato Verde",
                "zipCode" => [ 39527000, 39528999 ],
                "ibge" => 3141009
            ]),
            "3141108" => new Map([
                "name" => "Matozinhos",
                "zipCode" => [ 35720000, 35729999 ],
                "ibge" => 3141108
            ]),
            "3141207" => new Map([
                "name" => "Matutina",
                "zipCode" => [ 38870000, 38879999 ],
                "ibge" => 3141207
            ]),
            "3141306" => new Map([
                "name" => "Medeiros",
                "zipCode" => [ 38930000, 38949999 ],
                "ibge" => 3141306
            ]),
            "3141405" => new Map([
                "name" => "Medina",
                "zipCode" => [ 39620000, 39624999 ],
                "ibge" => 3141405
            ]),
            "3141504" => new Map([
                "name" => "Mendes Pimentel",
                "zipCode" => [ 35270000, 35274999 ],
                "ibge" => 3141504
            ]),
            "3141603" => new Map([
                "name" => "Mercês",
                "zipCode" => [ 36190000, 36194999 ],
                "ibge" => 3141603
            ]),
            "3141702" => new Map([
                "name" => "Mesquita",
                "zipCode" => [ 35116000, 35116999 ],
                "ibge" => 3141702
            ]),
            "3141801" => new Map([
                "name" => "Minas Novas",
                "zipCode" => [ 39650000, 39654999 ],
                "ibge" => 3141801
            ]),
            "3141900" => new Map([
                "name" => "Minduri",
                "zipCode" => [ 37447000, 37449999 ],
                "ibge" => 3141900
            ]),
            "3142007" => new Map([
                "name" => "Mirabela",
                "zipCode" => [ 39373000, 39377999 ],
                "ibge" => 3142007
            ]),
            "3142106" => new Map([
                "name" => "Miradouro",
                "zipCode" => [ 36893000, 36894999 ],
                "ibge" => 3142106
            ]),
            "3142205" => new Map([
                "name" => "Miraí",
                "zipCode" => [ 36790000, 36792999 ],
                "ibge" => 3142205
            ]),
            "3142254" => new Map([
                "name" => "Miravânia",
                "zipCode" => [ 39465000, 39466999 ],
                "ibge" => 3142254
            ]),
            "3142304" => new Map([
                "name" => "Moeda",
                "zipCode" => [ 35470000, 35472999 ],
                "ibge" => 3142304
            ]),
            "3142403" => new Map([
                "name" => "Moema",
                "zipCode" => [ 35604000, 35605999 ],
                "ibge" => 3142403
            ]),
            "3142502" => new Map([
                "name" => "Monjolos",
                "zipCode" => [ 39215000, 39218999 ],
                "ibge" => 3142502
            ]),
            "3142601" => new Map([
                "name" => "Monsenhor Paulo",
                "zipCode" => [ 37405000, 37406999 ],
                "ibge" => 3142601
            ]),
            "3142700" => new Map([
                "name" => "Montalvânia",
                "zipCode" => [ 39495000, 39499999 ],
                "ibge" => 3142700
            ]),
            "3142809" => new Map([
                "name" => "Monte Alegre de Minas",
                "zipCode" => [ 38475000, 38479999 ],
                "ibge" => 3142809
            ]),
            "3142908" => new Map([
                "name" => "Monte Azul",
                "zipCode" => [ 39500000, 39504999 ],
                "ibge" => 3142908
            ]),
            "3143005" => new Map([
                "name" => "Monte Belo",
                "zipCode" => [ 37115000, 37119999 ],
                "ibge" => 3143005
            ]),
            "3143104" => new Map([
                "name" => "Monte Carmelo",
                "zipCode" => [ 38500000, 38509999 ],
                "ibge" => 3143104
            ]),
            "3143153" => new Map([
                "name" => "Monte Formoso",
                "zipCode" => [ 39893000, 39894999 ],
                "ibge" => 3143153
            ]),
            "3143203" => new Map([
                "name" => "Monte Santo de Minas",
                "zipCode" => [ 37968000, 37969999 ],
                "ibge" => 3143203
            ]),
            "3143401" => new Map([
                "name" => "Monte Sião",
                "zipCode" => [ 37580000, 37581999 ],
                "ibge" => 3143401
            ]),
            "3143302" => new Map([
                "name" => "Montes Claros",
                "zipCode" => [ 39400001, 39429999 ],
                "ibge" => 3143302
            ]),
            "3143450" => new Map([
                "name" => "Montezuma",
                "zipCode" => [ 39547000, 39549999 ],
                "ibge" => 3143450
            ]),
            "3143500" => new Map([
                "name" => "Morada Nova de Minas",
                "zipCode" => [ 35628000, 35629999 ],
                "ibge" => 3143500
            ]),
            "3143609" => new Map([
                "name" => "Morro da Garça",
                "zipCode" => [ 39248000, 39249999 ],
                "ibge" => 3143609
            ]),
            "3143708" => new Map([
                "name" => "Morro do Pilar",
                "zipCode" => [ 35875000, 35877999 ],
                "ibge" => 3143708
            ]),
            "3143807" => new Map([
                "name" => "Munhoz",
                "zipCode" => [ 37620000, 37629999 ],
                "ibge" => 3143807
            ]),
            "3143906" => new Map([
                "name" => "Muriaé",
                "zipCode" => [ 36880001, 36892999 ],
                "ibge" => 3143906
            ]),
            "3144003" => new Map([
                "name" => "Mutum",
                "zipCode" => [ 36955000, 36959999 ],
                "ibge" => 3144003
            ]),
            "3144102" => new Map([
                "name" => "Muzambinho",
                "zipCode" => [ 37890000, 37899999 ],
                "ibge" => 3144102
            ]),
            "3144201" => new Map([
                "name" => "Nacip Raydan",
                "zipCode" => [ 39718000, 39719999 ],
                "ibge" => 3144201
            ]),
            "3144300" => new Map([
                "name" => "Nanuque",
                "zipCode" => [ 39860000, 39863999 ],
                "ibge" => 3144300
            ]),
            "3144359" => new Map([
                "name" => "Naque",
                "zipCode" => [ 35117000, 35117999 ],
                "ibge" => 3144359
            ]),
            "3144375" => new Map([
                "name" => "Natalândia",
                "zipCode" => [ 38658000, 38659999 ],
                "ibge" => 3144375
            ]),
            "3144409" => new Map([
                "name" => "Natércia",
                "zipCode" => [ 37524000, 37526999 ],
                "ibge" => 3144409
            ]),
            "3144508" => new Map([
                "name" => "Nazareno",
                "zipCode" => [ 36370000, 36389999 ],
                "ibge" => 3144508
            ]),
            "3144607" => new Map([
                "name" => "Nepomuceno",
                "zipCode" => [ 37250000, 37259999 ],
                "ibge" => 3144607
            ]),
            "3144656" => new Map([
                "name" => "Ninheira",
                "zipCode" => [ 39553000, 39554999 ],
                "ibge" => 3144656
            ]),
            "3144672" => new Map([
                "name" => "Nova Belém",
                "zipCode" => [ 35298000, 35299999 ],
                "ibge" => 3144672
            ]),
            "3144706" => new Map([
                "name" => "Nova Era",
                "zipCode" => [ 35920000, 35929999 ],
                "ibge" => 3144706
            ]),
            "3144805" => new Map([
                "name" => "Nova Lima",
                "zipCode" => [ 34000001, 34019999 ],
                "ibge" => 3144805
            ]),
            "3144904" => new Map([
                "name" => "Nova Módica",
                "zipCode" => [ 35113000, 35113999 ],
                "ibge" => 3144904
            ]),
            "3145000" => new Map([
                "name" => "Nova Ponte",
                "zipCode" => [ 38160000, 38169999 ],
                "ibge" => 3145000
            ]),
            "3145059" => new Map([
                "name" => "Nova Porteirinha",
                "zipCode" => [ 39525000, 39525999 ],
                "ibge" => 3145059
            ]),
            "3145109" => new Map([
                "name" => "Nova Resende",
                "zipCode" => [ 37860000, 37879999 ],
                "ibge" => 3145109
            ]),
            "3145208" => new Map([
                "name" => "Nova Serrana",
                "zipCode" => [ 35520001, 35529999 ],
                "ibge" => 3145208
            ]),
            "3136603" => new Map([
                "name" => "Nova União",
                "zipCode" => [ 34990000, 34999999 ],
                "ibge" => 3136603
            ]),
            "3145307" => new Map([
                "name" => "Novo Cruzeiro",
                "zipCode" => [ 39820000, 39824999 ],
                "ibge" => 3145307
            ]),
            "3145356" => new Map([
                "name" => "Novo Oriente de Minas",
                "zipCode" => [ 39817000, 39817999 ],
                "ibge" => 3145356
            ]),
            "3145372" => new Map([
                "name" => "Novorizonte",
                "zipCode" => [ 39568000, 39568999 ],
                "ibge" => 3145372
            ]),
            "3145406" => new Map([
                "name" => "Olaria",
                "zipCode" => [ 36145000, 36145999 ],
                "ibge" => 3145406
            ]),
            "3145455" => new Map([
                "name" => "Olhos D'Água",
                "zipCode" => [ 39398000, 39399999 ],
                "ibge" => 3145455
            ]),
            "3145505" => new Map([
                "name" => "Olímpio Noronha",
                "zipCode" => [ 37488000, 37489999 ],
                "ibge" => 3145505
            ]),
            "3145604" => new Map([
                "name" => "Oliveira",
                "zipCode" => [ 35540000, 35542999 ],
                "ibge" => 3145604
            ]),
            "3145703" => new Map([
                "name" => "Oliveira Fortes",
                "zipCode" => [ 36250000, 36254999 ],
                "ibge" => 3145703
            ]),
            "3145802" => new Map([
                "name" => "Onça de Pitangui",
                "zipCode" => [ 35655000, 35656999 ],
                "ibge" => 3145802
            ]),
            "3145851" => new Map([
                "name" => "Oratórios",
                "zipCode" => [ 35439000, 35439999 ],
                "ibge" => 3145851
            ]),
            "3145877" => new Map([
                "name" => "Orizânia",
                "zipCode" => [ 36828000, 36829999 ],
                "ibge" => 3145877
            ]),
            "3145901" => new Map([
                "name" => "Ouro Branco",
                "zipCode" => [ 36490001, 36499999 ],
                "ibge" => 3145901
            ]),
            "3146008" => new Map([
                "name" => "Ouro Fino",
                "zipCode" => [ 37570000, 37575999 ],
                "ibge" => 3146008
            ]),
            "3146107" => new Map([
                "name" => "Ouro Preto",
                "zipCode" => [ 35400000, 35419999 ],
                "ibge" => 3146107
            ]),
            "3146206" => new Map([
                "name" => "Ouro Verde de Minas",
                "zipCode" => [ 39855000, 39859999 ],
                "ibge" => 3146206
            ]),
            "3146255" => new Map([
                "name" => "Padre Carvalho",
                "zipCode" => [ 39573000, 39574999 ],
                "ibge" => 3146255
            ]),
            "3146305" => new Map([
                "name" => "Padre Paraíso",
                "zipCode" => [ 39818000, 39819999 ],
                "ibge" => 3146305
            ]),
            "3146552" => new Map([
                "name" => "Pai Pedro",
                "zipCode" => [ 39517000, 39517999 ],
                "ibge" => 3146552
            ]),
            "3146404" => new Map([
                "name" => "Paineiras",
                "zipCode" => [ 35622000, 35623999 ],
                "ibge" => 3146404
            ]),
            "3146503" => new Map([
                "name" => "Pains",
                "zipCode" => [ 35582000, 35584999 ],
                "ibge" => 3146503
            ]),
            "3146602" => new Map([
                "name" => "Paiva",
                "zipCode" => [ 36195000, 36199999 ],
                "ibge" => 3146602
            ]),
            "3146701" => new Map([
                "name" => "Palma",
                "zipCode" => [ 36750000, 36759999 ],
                "ibge" => 3146701
            ]),
            "3146750" => new Map([
                "name" => "Palmópolis",
                "zipCode" => [ 39945000, 39949999 ],
                "ibge" => 3146750
            ]),
            "3146909" => new Map([
                "name" => "Papagaios",
                "zipCode" => [ 35669000, 35669999 ],
                "ibge" => 3146909
            ]),
            "3147105" => new Map([
                "name" => "Pará de Minas",
                "zipCode" => [ 35660001, 35665999 ],
                "ibge" => 3147105
            ]),
            "3147006" => new Map([
                "name" => "Paracatu",
                "zipCode" => [ 38600001, 38609999 ],
                "ibge" => 3147006
            ]),
            "3147204" => new Map([
                "name" => "Paraguaçu",
                "zipCode" => [ 37120000, 37129999 ],
                "ibge" => 3147204
            ]),
            "3147303" => new Map([
                "name" => "Paraisópolis",
                "zipCode" => [ 37660000, 37669999 ],
                "ibge" => 3147303
            ]),
            "3147402" => new Map([
                "name" => "Paraopeba",
                "zipCode" => [ 35774000, 35776999 ],
                "ibge" => 3147402
            ]),
            "3147600" => new Map([
                "name" => "Passa Quatro",
                "zipCode" => [ 37460000, 37463999 ],
                "ibge" => 3147600
            ]),
            "3147709" => new Map([
                "name" => "Passa Tempo",
                "zipCode" => [ 35537000, 35539999 ],
                "ibge" => 3147709
            ]),
            "3147808" => new Map([
                "name" => "Passa Vinte",
                "zipCode" => [ 37330000, 37339999 ],
                "ibge" => 3147808
            ]),
            "3147501" => new Map([
                "name" => "Passabém",
                "zipCode" => [ 35810000, 35814999 ],
                "ibge" => 3147501
            ]),
            "3147907" => new Map([
                "name" => "Passos",
                "zipCode" => [ 37900001, 37904999 ],
                "ibge" => 3147907
            ]),
            "3147956" => new Map([
                "name" => "Patis",
                "zipCode" => [ 39378000, 39379999 ],
                "ibge" => 3147956
            ]),
            "3148004" => new Map([
                "name" => "Patos de Minas",
                "zipCode" => [ 38700001, 38719999 ],
                "ibge" => 3148004
            ]),
            "3148103" => new Map([
                "name" => "Patrocínio",
                "zipCode" => [ 38740001, 38749999 ],
                "ibge" => 3148103
            ]),
            "3148202" => new Map([
                "name" => "Patrocínio do Muriaé",
                "zipCode" => [ 36860000, 36869999 ],
                "ibge" => 3148202
            ]),
            "3148301" => new Map([
                "name" => "Paula Cândido",
                "zipCode" => [ 36544000, 36545999 ],
                "ibge" => 3148301
            ]),
            "3148400" => new Map([
                "name" => "Paulistas",
                "zipCode" => [ 39765000, 39769999 ],
                "ibge" => 3148400
            ]),
            "3148509" => new Map([
                "name" => "Pavão",
                "zipCode" => [ 39814000, 39814999 ],
                "ibge" => 3148509
            ]),
            "3148608" => new Map([
                "name" => "Peçanha",
                "zipCode" => [ 39700000, 39702999 ],
                "ibge" => 3148608
            ]),
            "3148707" => new Map([
                "name" => "Pedra Azul",
                "zipCode" => [ 39970000, 39979999 ],
                "ibge" => 3148707
            ]),
            "3148756" => new Map([
                "name" => "Pedra Bonita",
                "zipCode" => [ 35364000, 35364999 ],
                "ibge" => 3148756
            ]),
            "3148806" => new Map([
                "name" => "Pedra do Anta",
                "zipCode" => [ 36585000, 36589999 ],
                "ibge" => 3148806
            ]),
            "3148905" => new Map([
                "name" => "Pedra do Indaiá",
                "zipCode" => [ 35565000, 35566999 ],
                "ibge" => 3148905
            ]),
            "3149002" => new Map([
                "name" => "Pedra Dourada",
                "zipCode" => [ 36847000, 36849999 ],
                "ibge" => 3149002
            ]),
            "3149101" => new Map([
                "name" => "Pedralva",
                "zipCode" => [ 37520000, 37523999 ],
                "ibge" => 3149101
            ]),
            "3149150" => new Map([
                "name" => "Pedras de Maria da Cruz",
                "zipCode" => [ 39492000, 39494999 ],
                "ibge" => 3149150
            ]),
            "3149200" => new Map([
                "name" => "Pedrinópolis",
                "zipCode" => [ 38178000, 38179999 ],
                "ibge" => 3149200
            ]),
            "3149309" => new Map([
                "name" => "Pedro Leopoldo",
                "zipCode" => [ 33250001, 33259999 ],
                "ibge" => 3149309
            ]),
            "3149408" => new Map([
                "name" => "Pedro Teixeira",
                "zipCode" => [ 36148000, 36149999 ],
                "ibge" => 3149408
            ]),
            "3149507" => new Map([
                "name" => "Pequeri",
                "zipCode" => [ 36610000, 36619999 ],
                "ibge" => 3149507
            ]),
            "3149606" => new Map([
                "name" => "Pequi",
                "zipCode" => [ 35667000, 35667999 ],
                "ibge" => 3149606
            ]),
            "3149705" => new Map([
                "name" => "Perdigão",
                "zipCode" => [ 35545000, 35546999 ],
                "ibge" => 3149705
            ]),
            "3149804" => new Map([
                "name" => "Perdizes",
                "zipCode" => [ 38170000, 38174999 ],
                "ibge" => 3149804
            ]),
            "3149903" => new Map([
                "name" => "Perdões",
                "zipCode" => [ 37260000, 37261999 ],
                "ibge" => 3149903
            ]),
            "3149952" => new Map([
                "name" => "Periquito",
                "zipCode" => [ 35118000, 35119999 ],
                "ibge" => 3149952
            ]),
            "3150000" => new Map([
                "name" => "Pescador",
                "zipCode" => [ 35114000, 35114999 ],
                "ibge" => 3150000
            ]),
            "3150109" => new Map([
                "name" => "Piau",
                "zipCode" => [ 36157000, 36159999 ],
                "ibge" => 3150109
            ]),
            "3150158" => new Map([
                "name" => "Piedade de Caratinga",
                "zipCode" => [ 35325000, 35325999 ],
                "ibge" => 3150158
            ]),
            "3150208" => new Map([
                "name" => "Piedade de Ponte Nova",
                "zipCode" => [ 35382000, 35382999 ],
                "ibge" => 3150208
            ]),
            "3150307" => new Map([
                "name" => "Piedade do Rio Grande",
                "zipCode" => [ 36227000, 36229999 ],
                "ibge" => 3150307
            ]),
            "3150406" => new Map([
                "name" => "Piedade dos Gerais",
                "zipCode" => [ 35476000, 35477999 ],
                "ibge" => 3150406
            ]),
            "3150505" => new Map([
                "name" => "Pimenta",
                "zipCode" => [ 35585000, 35587999 ],
                "ibge" => 3150505
            ]),
            "3150539" => new Map([
                "name" => "Pingo-D'Água",
                "zipCode" => [ 35348000, 35349999 ],
                "ibge" => 3150539
            ]),
            "3150570" => new Map([
                "name" => "Pintópolis",
                "zipCode" => [ 39317000, 39317999 ],
                "ibge" => 3150570
            ]),
            "3150604" => new Map([
                "name" => "Piracema",
                "zipCode" => [ 35536000, 35536999 ],
                "ibge" => 3150604
            ]),
            "3150703" => new Map([
                "name" => "Pirajuba",
                "zipCode" => [ 38210000, 38219999 ],
                "ibge" => 3150703
            ]),
            "3150802" => new Map([
                "name" => "Piranga",
                "zipCode" => [ 36480000, 36489999 ],
                "ibge" => 3150802
            ]),
            "3150901" => new Map([
                "name" => "Piranguçu",
                "zipCode" => [ 37511000, 37511999 ],
                "ibge" => 3150901
            ]),
            "3151008" => new Map([
                "name" => "Piranguinho",
                "zipCode" => [ 37508000, 37509999 ],
                "ibge" => 3151008
            ]),
            "3151107" => new Map([
                "name" => "Pirapetinga",
                "zipCode" => [ 36730000, 36739999 ],
                "ibge" => 3151107
            ]),
            "3151206" => new Map([
                "name" => "Pirapora",
                "zipCode" => [ 39270001, 39279999 ],
                "ibge" => 3151206
            ]),
            "3151305" => new Map([
                "name" => "Piraúba",
                "zipCode" => [ 36170000, 36179999 ],
                "ibge" => 3151305
            ]),
            "3151404" => new Map([
                "name" => "Pitangui",
                "zipCode" => [ 35650000, 35654999 ],
                "ibge" => 3151404
            ]),
            "3151503" => new Map([
                "name" => "Piumhi",
                "zipCode" => [ 37925000, 37925999 ],
                "ibge" => 3151503
            ]),
            "3151602" => new Map([
                "name" => "Planura",
                "zipCode" => [ 38220000, 38229999 ],
                "ibge" => 3151602
            ]),
            "3151701" => new Map([
                "name" => "Poço Fundo",
                "zipCode" => [ 37757000, 37759999 ],
                "ibge" => 3151701
            ]),
            "3151800" => new Map([
                "name" => "Poços de Caldas",
                "zipCode" => [ 37700001, 37719999 ],
                "ibge" => 3151800
            ]),
            "3151909" => new Map([
                "name" => "Pocrane",
                "zipCode" => [ 36960000, 36969999 ],
                "ibge" => 3151909
            ]),
            "3152006" => new Map([
                "name" => "Pompéu",
                "zipCode" => [ 35640000, 35649999 ],
                "ibge" => 3152006
            ]),
            "3152105" => new Map([
                "name" => "Ponte Nova",
                "zipCode" => [ 35430001, 35435999 ],
                "ibge" => 3152105
            ]),
            "3152131" => new Map([
                "name" => "Ponto Chique",
                "zipCode" => [ 39328000, 39329999 ],
                "ibge" => 3152131
            ]),
            "3152170" => new Map([
                "name" => "Ponto dos Volantes",
                "zipCode" => [ 39615000, 39619999 ],
                "ibge" => 3152170
            ]),
            "3152204" => new Map([
                "name" => "Porteirinha",
                "zipCode" => [ 39520000, 39524999 ],
                "ibge" => 3152204
            ]),
            "3152303" => new Map([
                "name" => "Porto Firme",
                "zipCode" => [ 36568000, 36569999 ],
                "ibge" => 3152303
            ]),
            "3152402" => new Map([
                "name" => "Poté",
                "zipCode" => [ 39827000, 39829999 ],
                "ibge" => 3152402
            ]),
            "3152501" => new Map([
                "name" => "Pouso Alegre",
                "zipCode" => [ 37550001, 37562999 ],
                "ibge" => 3152501
            ]),
            "3152600" => new Map([
                "name" => "Pouso Alto",
                "zipCode" => [ 37468000, 37469999 ],
                "ibge" => 3152600
            ]),
            "3152709" => new Map([
                "name" => "Prados",
                "zipCode" => [ 36320000, 36324999 ],
                "ibge" => 3152709
            ]),
            "3152808" => new Map([
                "name" => "Prata",
                "zipCode" => [ 38140000, 38149999 ],
                "ibge" => 3152808
            ]),
            "3152907" => new Map([
                "name" => "Pratápolis",
                "zipCode" => [ 37970000, 37972999 ],
                "ibge" => 3152907
            ]),
            "3153004" => new Map([
                "name" => "Pratinha",
                "zipCode" => [ 38960000, 38969999 ],
                "ibge" => 3153004
            ]),
            "3153103" => new Map([
                "name" => "Presidente Bernardes",
                "zipCode" => [ 36475000, 36479999 ],
                "ibge" => 3153103
            ]),
            "3153202" => new Map([
                "name" => "Presidente Juscelino",
                "zipCode" => [ 39245000, 39247999 ],
                "ibge" => 3153202
            ]),
            "3153301" => new Map([
                "name" => "Presidente Kubitschek",
                "zipCode" => [ 39135000, 39139999 ],
                "ibge" => 3153301
            ]),
            "3153400" => new Map([
                "name" => "Presidente Olegário",
                "zipCode" => [ 38750000, 38754999 ],
                "ibge" => 3153400
            ]),
            "3153608" => new Map([
                "name" => "Prudente de Morais",
                "zipCode" => [ 35738000, 35739999 ],
                "ibge" => 3153608
            ]),
            "3153707" => new Map([
                "name" => "Quartel Geral",
                "zipCode" => [ 35625000, 35627999 ],
                "ibge" => 3153707
            ]),
            "3153806" => new Map([
                "name" => "Queluzito",
                "zipCode" => [ 36424000, 36425999 ],
                "ibge" => 3153806
            ]),
            "3153905" => new Map([
                "name" => "Raposos",
                "zipCode" => [ 34400000, 34499999 ],
                "ibge" => 3153905
            ]),
            "3154002" => new Map([
                "name" => "Raul Soares",
                "zipCode" => [ 35350000, 35358999 ],
                "ibge" => 3154002
            ]),
            "3154101" => new Map([
                "name" => "Recreio",
                "zipCode" => [ 36740000, 36749999 ],
                "ibge" => 3154101
            ]),
            "3154150" => new Map([
                "name" => "Reduto",
                "zipCode" => [ 36920000, 36922999 ],
                "ibge" => 3154150
            ]),
            "3154200" => new Map([
                "name" => "Resende Costa",
                "zipCode" => [ 36340000, 36344999 ],
                "ibge" => 3154200
            ]),
            "3154309" => new Map([
                "name" => "Resplendor",
                "zipCode" => [ 35230000, 35239999 ],
                "ibge" => 3154309
            ]),
            "3154408" => new Map([
                "name" => "Ressaquinha",
                "zipCode" => [ 36270000, 36271999 ],
                "ibge" => 3154408
            ]),
            "3154457" => new Map([
                "name" => "Riachinho",
                "zipCode" => [ 38640000, 38648999 ],
                "ibge" => 3154457
            ]),
            "3154507" => new Map([
                "name" => "Riacho dos Machados",
                "zipCode" => [ 39529000, 39529999 ],
                "ibge" => 3154507
            ]),
            "3154606" => new Map([
                "name" => "Ribeirão das Neves",
                "zipCode" => [ 33800001, 33979999 ],
                "ibge" => 3154606
            ]),
            "3154705" => new Map([
                "name" => "Ribeirão Vermelho",
                "zipCode" => [ 37264000, 37266999 ],
                "ibge" => 3154705
            ]),
            "3154804" => new Map([
                "name" => "Rio Acima",
                "zipCode" => [ 34300000, 34399999 ],
                "ibge" => 3154804
            ]),
            "3154903" => new Map([
                "name" => "Rio Casca",
                "zipCode" => [ 35370000, 35379999 ],
                "ibge" => 3154903
            ]),
            "3155108" => new Map([
                "name" => "Rio do Prado",
                "zipCode" => [ 39940000, 39944999 ],
                "ibge" => 3155108
            ]),
            "3155009" => new Map([
                "name" => "Rio Doce",
                "zipCode" => [ 35442000, 35443999 ],
                "ibge" => 3155009
            ]),
            "3155207" => new Map([
                "name" => "Rio Espera",
                "zipCode" => [ 36460000, 36469999 ],
                "ibge" => 3155207
            ]),
            "3155306" => new Map([
                "name" => "Rio Manso",
                "zipCode" => [ 35485000, 35487999 ],
                "ibge" => 3155306
            ]),
            "3155405" => new Map([
                "name" => "Rio Novo",
                "zipCode" => [ 36150000, 36151999 ],
                "ibge" => 3155405
            ]),
            "3155504" => new Map([
                "name" => "Rio Paranaíba",
                "zipCode" => [ 38810000, 38819999 ],
                "ibge" => 3155504
            ]),
            "3155603" => new Map([
                "name" => "Rio Pardo de Minas",
                "zipCode" => [ 39530000, 39534999 ],
                "ibge" => 3155603
            ]),
            "3155702" => new Map([
                "name" => "Rio Piracicaba",
                "zipCode" => [ 35940000, 35949999 ],
                "ibge" => 3155702
            ]),
            "3155801" => new Map([
                "name" => "Rio Pomba",
                "zipCode" => [ 36180000, 36184999 ],
                "ibge" => 3155801
            ]),
            "3155900" => new Map([
                "name" => "Rio Preto",
                "zipCode" => [ 36130000, 36131999 ],
                "ibge" => 3155900
            ]),
            "3156007" => new Map([
                "name" => "Rio Vermelho",
                "zipCode" => [ 39170000, 39179999 ],
                "ibge" => 3156007
            ]),
            "3156106" => new Map([
                "name" => "Ritápolis",
                "zipCode" => [ 36335000, 36339999 ],
                "ibge" => 3156106
            ]),
            "3156205" => new Map([
                "name" => "Rochedo de Minas",
                "zipCode" => [ 36604000, 36605999 ],
                "ibge" => 3156205
            ]),
            "3156304" => new Map([
                "name" => "Rodeiro",
                "zipCode" => [ 36510000, 36511999 ],
                "ibge" => 3156304
            ]),
            "3156403" => new Map([
                "name" => "Romaria",
                "zipCode" => [ 38520000, 38524999 ],
                "ibge" => 3156403
            ]),
            "3156452" => new Map([
                "name" => "Rosário da Limeira",
                "zipCode" => [ 36878000, 36879999 ],
                "ibge" => 3156452
            ]),
            "3156502" => new Map([
                "name" => "Rubelita",
                "zipCode" => [ 39565000, 39567999 ],
                "ibge" => 3156502
            ]),
            "3156601" => new Map([
                "name" => "Rubim",
                "zipCode" => [ 39950000, 39959999 ],
                "ibge" => 3156601
            ]),
            "3156700" => new Map([
                "name" => "Sabará",
                "zipCode" => [ 34500001, 34799999 ],
                "ibge" => 3156700
            ]),
            "3156809" => new Map([
                "name" => "Sabinópolis",
                "zipCode" => [ 39750000, 39754999 ],
                "ibge" => 3156809
            ]),
            "3156908" => new Map([
                "name" => "Sacramento",
                "zipCode" => [ 38190000, 38194999 ],
                "ibge" => 3156908
            ]),
            "3157005" => new Map([
                "name" => "Salinas",
                "zipCode" => [ 39560000, 39562999 ],
                "ibge" => 3157005
            ]),
            "3157104" => new Map([
                "name" => "Salto da Divisa",
                "zipCode" => [ 39925000, 39927999 ],
                "ibge" => 3157104
            ]),
            "3157203" => new Map([
                "name" => "Santa Bárbara",
                "zipCode" => [ 35960000, 35968999 ],
                "ibge" => 3157203
            ]),
            "3157252" => new Map([
                "name" => "Santa Bárbara do Leste",
                "zipCode" => [ 35328000, 35329999 ],
                "ibge" => 3157252
            ]),
            "3157278" => new Map([
                "name" => "Santa Bárbara do Monte Verde",
                "zipCode" => [ 36132000, 36134999 ],
                "ibge" => 3157278
            ]),
            "3157302" => new Map([
                "name" => "Santa Bárbara do Tugúrio",
                "zipCode" => [ 36215000, 36219999 ],
                "ibge" => 3157302
            ]),
            "3157336" => new Map([
                "name" => "Santa Cruz de Minas",
                "zipCode" => [ 36328000, 36329999 ],
                "ibge" => 3157336
            ]),
            "3157377" => new Map([
                "name" => "Santa Cruz de Salinas",
                "zipCode" => [ 39563000, 39564999 ],
                "ibge" => 3157377
            ]),
            "3157401" => new Map([
                "name" => "Santa Cruz do Escalvado",
                "zipCode" => [ 35383000, 35387999 ],
                "ibge" => 3157401
            ]),
            "3157500" => new Map([
                "name" => "Santa Efigênia de Minas",
                "zipCode" => [ 39725000, 39727999 ],
                "ibge" => 3157500
            ]),
            "3157609" => new Map([
                "name" => "Santa Fé de Minas",
                "zipCode" => [ 39295000, 39299999 ],
                "ibge" => 3157609
            ]),
            "3157658" => new Map([
                "name" => "Santa Helena de Minas",
                "zipCode" => [ 39874000, 39874999 ],
                "ibge" => 3157658
            ]),
            "3157708" => new Map([
                "name" => "Santa Juliana",
                "zipCode" => [ 38175000, 38177999 ],
                "ibge" => 3157708
            ]),
            "3157807" => new Map([
                "name" => "Santa Luzia",
                "zipCode" => [ 33000001, 33199999 ],
                "ibge" => 3157807
            ]),
            "3157906" => new Map([
                "name" => "Santa Margarida",
                "zipCode" => [ 36913000, 36917999 ],
                "ibge" => 3157906
            ]),
            "3158003" => new Map([
                "name" => "Santa Maria de Itabira",
                "zipCode" => [ 35910000, 35919999 ],
                "ibge" => 3158003
            ]),
            "3158102" => new Map([
                "name" => "Santa Maria do Salto",
                "zipCode" => [ 39928000, 39929999 ],
                "ibge" => 3158102
            ]),
            "3158201" => new Map([
                "name" => "Santa Maria do Suaçuí",
                "zipCode" => [ 39780000, 39783999 ],
                "ibge" => 3158201
            ]),
            "3159209" => new Map([
                "name" => "Santa Rita de Caldas",
                "zipCode" => [ 37775000, 37779999 ],
                "ibge" => 3159209
            ]),
            "3159407" => new Map([
                "name" => "Santa Rita de Ibitipoca",
                "zipCode" => [ 36235000, 36239999 ],
                "ibge" => 3159407
            ]),
            "3159308" => new Map([
                "name" => "Santa Rita de Jacutinga",
                "zipCode" => [ 36135000, 36139999 ],
                "ibge" => 3159308
            ]),
            "3159357" => new Map([
                "name" => "Santa Rita de Minas",
                "zipCode" => [ 35326000, 35327999 ],
                "ibge" => 3159357
            ]),
            "3159506" => new Map([
                "name" => "Santa Rita do Itueto",
                "zipCode" => [ 35225000, 35229999 ],
                "ibge" => 3159506
            ]),
            "3159605" => new Map([
                "name" => "Santa Rita do Sapucaí",
                "zipCode" => [ 37536000, 37541999 ],
                "ibge" => 3159605
            ]),
            "3159704" => new Map([
                "name" => "Santa Rosa da Serra",
                "zipCode" => [ 38805000, 38809999 ],
                "ibge" => 3159704
            ]),
            "3159803" => new Map([
                "name" => "Santa Vitória",
                "zipCode" => [ 38320000, 38349999 ],
                "ibge" => 3159803
            ]),
            "3158300" => new Map([
                "name" => "Santana da Vargem",
                "zipCode" => [ 37195000, 37199999 ],
                "ibge" => 3158300
            ]),
            "3158409" => new Map([
                "name" => "Santana de Cataguases",
                "zipCode" => [ 36795000, 36799999 ],
                "ibge" => 3158409
            ]),
            "3158508" => new Map([
                "name" => "Santana de Pirapama",
                "zipCode" => [ 35785000, 35788999 ],
                "ibge" => 3158508
            ]),
            "3158607" => new Map([
                "name" => "Santana do Deserto",
                "zipCode" => [ 36620000, 36629999 ],
                "ibge" => 3158607
            ]),
            "3158706" => new Map([
                "name" => "Santana do Garambéu",
                "zipCode" => [ 36146000, 36147999 ],
                "ibge" => 3158706
            ]),
            "3158805" => new Map([
                "name" => "Santana do Jacaré",
                "zipCode" => [ 37278000, 37279999 ],
                "ibge" => 3158805
            ]),
            "3158904" => new Map([
                "name" => "Santana do Manhuaçu",
                "zipCode" => [ 36940000, 36946999 ],
                "ibge" => 3158904
            ]),
            "3158953" => new Map([
                "name" => "Santana do Paraíso",
                "zipCode" => [ 35179000, 35179999 ],
                "ibge" => 3158953
            ]),
            "3159001" => new Map([
                "name" => "Santana do Riacho",
                "zipCode" => [ 35845000, 35849999 ],
                "ibge" => 3159001
            ]),
            "3159100" => new Map([
                "name" => "Santana dos Montes",
                "zipCode" => [ 36430000, 36439999 ],
                "ibge" => 3159100
            ]),
            "3159902" => new Map([
                "name" => "Santo Antônio do Amparo",
                "zipCode" => [ 37262000, 37263999 ],
                "ibge" => 3159902
            ]),
            "3160009" => new Map([
                "name" => "Santo Antônio do Aventureiro",
                "zipCode" => [ 36670000, 36679999 ],
                "ibge" => 3160009
            ]),
            "3160108" => new Map([
                "name" => "Santo Antônio do Grama",
                "zipCode" => [ 35388000, 35389999 ],
                "ibge" => 3160108
            ]),
            "3160207" => new Map([
                "name" => "Santo Antônio do Itambé",
                "zipCode" => [ 39160000, 39164999 ],
                "ibge" => 3160207
            ]),
            "3160306" => new Map([
                "name" => "Santo Antônio do Jacinto",
                "zipCode" => [ 39935000, 39939999 ],
                "ibge" => 3160306
            ]),
            "3160405" => new Map([
                "name" => "Santo Antônio do Monte",
                "zipCode" => [ 35560000, 35564999 ],
                "ibge" => 3160405
            ]),
            "3160454" => new Map([
                "name" => "Santo Antônio do Retiro",
                "zipCode" => [ 39538000, 39539999 ],
                "ibge" => 3160454
            ]),
            "3160504" => new Map([
                "name" => "Santo Antônio do Rio Abaixo",
                "zipCode" => [ 35880000, 35893999 ],
                "ibge" => 3160504
            ]),
            "3160603" => new Map([
                "name" => "Santo Hipólito",
                "zipCode" => [ 39210000, 39214999 ],
                "ibge" => 3160603
            ]),
            "3160702" => new Map([
                "name" => "Santos Dumont",
                "zipCode" => [ 36240001, 36249999 ],
                "ibge" => 3160702
            ]),
            "3160801" => new Map([
                "name" => "São Bento Abade",
                "zipCode" => [ 37407000, 37407999 ],
                "ibge" => 3160801
            ]),
            "3160900" => new Map([
                "name" => "São Brás do Suaçuí",
                "zipCode" => [ 35495000, 35496999 ],
                "ibge" => 3160900
            ]),
            "3160959" => new Map([
                "name" => "São Domingos das Dores",
                "zipCode" => [ 35335000, 35337999 ],
                "ibge" => 3160959
            ]),
            "3161007" => new Map([
                "name" => "São Domingos do Prata",
                "zipCode" => [ 35993000, 35999999 ],
                "ibge" => 3161007
            ]),
            "3161056" => new Map([
                "name" => "São Félix de Minas",
                "zipCode" => [ 35275000, 35276999 ],
                "ibge" => 3161056
            ]),
            "3161106" => new Map([
                "name" => "São Francisco",
                "zipCode" => [ 39300000, 39316999 ],
                "ibge" => 3161106
            ]),
            "3161205" => new Map([
                "name" => "São Francisco de Paula",
                "zipCode" => [ 35543000, 35543999 ],
                "ibge" => 3161205
            ]),
            "3161304" => new Map([
                "name" => "São Francisco de Sales",
                "zipCode" => [ 38260000, 38269999 ],
                "ibge" => 3161304
            ]),
            "3161403" => new Map([
                "name" => "São Francisco do Glória",
                "zipCode" => [ 36810000, 36814999 ],
                "ibge" => 3161403
            ]),
            "3161502" => new Map([
                "name" => "São Geraldo",
                "zipCode" => [ 36530000, 36539999 ],
                "ibge" => 3161502
            ]),
            "3161601" => new Map([
                "name" => "São Geraldo da Piedade",
                "zipCode" => [ 39723000, 39724999 ],
                "ibge" => 3161601
            ]),
            "3161650" => new Map([
                "name" => "São Geraldo do Baixio",
                "zipCode" => [ 35258000, 35259999 ],
                "ibge" => 3161650
            ]),
            "3161700" => new Map([
                "name" => "São Gonçalo do Abaeté",
                "zipCode" => [ 38790000, 38793999 ],
                "ibge" => 3161700
            ]),
            "3161809" => new Map([
                "name" => "São Gonçalo do Pará",
                "zipCode" => [ 35544000, 35544999 ],
                "ibge" => 3161809
            ]),
            "3161908" => new Map([
                "name" => "São Gonçalo do Rio Abaixo",
                "zipCode" => [ 35935000, 35937999 ],
                "ibge" => 3161908
            ]),
            "3125507" => new Map([
                "name" => "São Gonçalo do Rio Preto",
                "zipCode" => [ 39185000, 39187999 ],
                "ibge" => 3125507
            ]),
            "3162005" => new Map([
                "name" => "São Gonçalo do Sapucaí",
                "zipCode" => [ 37490000, 37495999 ],
                "ibge" => 3162005
            ]),
            "3162104" => new Map([
                "name" => "São Gotardo",
                "zipCode" => [ 38800000, 38804999 ],
                "ibge" => 3162104
            ]),
            "3162203" => new Map([
                "name" => "São João Batista do Glória",
                "zipCode" => [ 37920000, 37921999 ],
                "ibge" => 3162203
            ]),
            "3162252" => new Map([
                "name" => "São João da Lagoa",
                "zipCode" => [ 39355000, 39359999 ],
                "ibge" => 3162252
            ]),
            "3162302" => new Map([
                "name" => "São João da Mata",
                "zipCode" => [ 37568000, 37569999 ],
                "ibge" => 3162302
            ]),
            "3162401" => new Map([
                "name" => "São João da Ponte",
                "zipCode" => [ 39430000, 39436999 ],
                "ibge" => 3162401
            ]),
            "3162450" => new Map([
                "name" => "São João das Missões",
                "zipCode" => [ 39475000, 39477999 ],
                "ibge" => 3162450
            ]),
            "3162500" => new Map([
                "name" => "São João Del Rei",
                "zipCode" => [ 36300001, 36319999 ],
                "ibge" => 3162500
            ]),
            "3162559" => new Map([
                "name" => "São João do Manhuaçu",
                "zipCode" => [ 36918000, 36919999 ],
                "ibge" => 3162559
            ]),
            "3162575" => new Map([
                "name" => "São João do Manteninha",
                "zipCode" => [ 35277000, 35279999 ],
                "ibge" => 3162575
            ]),
            "3162609" => new Map([
                "name" => "São João do Oriente",
                "zipCode" => [ 35146000, 35146999 ],
                "ibge" => 3162609
            ]),
            "3162658" => new Map([
                "name" => "São João do Pacuí",
                "zipCode" => [ 39365000, 39369999 ],
                "ibge" => 3162658
            ]),
            "3162708" => new Map([
                "name" => "São João do Paraíso",
                "zipCode" => [ 39540000, 39546999 ],
                "ibge" => 3162708
            ]),
            "3162807" => new Map([
                "name" => "São João Evangelista",
                "zipCode" => [ 39704000, 39706999 ],
                "ibge" => 3162807
            ]),
            "3162906" => new Map([
                "name" => "São João Nepomuceno",
                "zipCode" => [ 36680001, 36689999 ],
                "ibge" => 3162906
            ]),
            "3162922" => new Map([
                "name" => "São Joaquim de Bicas",
                "zipCode" => [ 32920000, 32999999 ],
                "ibge" => 3162922
            ]),
            "3162948" => new Map([
                "name" => "São José da Barra",
                "zipCode" => [ 37945000, 37947999 ],
                "ibge" => 3162948
            ]),
            "3162955" => new Map([
                "name" => "São José da Lapa",
                "zipCode" => [ 33350000, 33399999 ],
                "ibge" => 3162955
            ]),
            "3163003" => new Map([
                "name" => "São José da Safira",
                "zipCode" => [ 39785000, 39789999 ],
                "ibge" => 3163003
            ]),
            "3163102" => new Map([
                "name" => "São José da Varginha",
                "zipCode" => [ 35694000, 35694999 ],
                "ibge" => 3163102
            ]),
            "3163201" => new Map([
                "name" => "São José do Alegre",
                "zipCode" => [ 37510000, 37510999 ],
                "ibge" => 3163201
            ]),
            "3163300" => new Map([
                "name" => "São José do Divino",
                "zipCode" => [ 39848000, 39849999 ],
                "ibge" => 3163300
            ]),
            "3163409" => new Map([
                "name" => "São José do Goiabal",
                "zipCode" => [ 35986000, 35992999 ],
                "ibge" => 3163409
            ]),
            "3163508" => new Map([
                "name" => "São José do Jacuri",
                "zipCode" => [ 39707000, 39707999 ],
                "ibge" => 3163508
            ]),
            "3163607" => new Map([
                "name" => "São José do Mantimento",
                "zipCode" => [ 36990000, 36999999 ],
                "ibge" => 3163607
            ]),
            "3163706" => new Map([
                "name" => "São Lourenço",
                "zipCode" => [ 37470000, 37471999 ],
                "ibge" => 3163706
            ]),
            "3163805" => new Map([
                "name" => "São Miguel do Anta",
                "zipCode" => [ 36590000, 36591999 ],
                "ibge" => 3163805
            ]),
            "3163904" => new Map([
                "name" => "São Pedro da União",
                "zipCode" => [ 37855000, 37859999 ],
                "ibge" => 3163904
            ]),
            "3164100" => new Map([
                "name" => "São Pedro do Suaçuí",
                "zipCode" => [ 39784000, 39784999 ],
                "ibge" => 3164100
            ]),
            "3164001" => new Map([
                "name" => "São Pedro dos Ferros",
                "zipCode" => [ 35360000, 35363999 ],
                "ibge" => 3164001
            ]),
            "3164209" => new Map([
                "name" => "São Romão",
                "zipCode" => [ 39290000, 39294999 ],
                "ibge" => 3164209
            ]),
            "3164308" => new Map([
                "name" => "São Roque de Minas",
                "zipCode" => [ 37927000, 37929999 ],
                "ibge" => 3164308
            ]),
            "3164407" => new Map([
                "name" => "São Sebastião da Bela Vista",
                "zipCode" => [ 37567000, 37567999 ],
                "ibge" => 3164407
            ]),
            "3164431" => new Map([
                "name" => "São Sebastião da Vargem Alegre",
                "zipCode" => [ 36793000, 36794999 ],
                "ibge" => 3164431
            ]),
            "3164472" => new Map([
                "name" => "São Sebastião do Anta",
                "zipCode" => [ 35334000, 35334999 ],
                "ibge" => 3164472
            ]),
            "3164506" => new Map([
                "name" => "São Sebastião do Maranhão",
                "zipCode" => [ 39795000, 39799999 ],
                "ibge" => 3164506
            ]),
            "3164605" => new Map([
                "name" => "São Sebastião do Oeste",
                "zipCode" => [ 35567000, 35567999 ],
                "ibge" => 3164605
            ]),
            "3164704" => new Map([
                "name" => "São Sebastião do Paraíso",
                "zipCode" => [ 37950000, 37959999 ],
                "ibge" => 3164704
            ]),
            "3164803" => new Map([
                "name" => "São Sebastião do Rio Preto",
                "zipCode" => [ 35815000, 35819999 ],
                "ibge" => 3164803
            ]),
            "3164902" => new Map([
                "name" => "São Sebastião do Rio Verde",
                "zipCode" => [ 37467000, 37467999 ],
                "ibge" => 3164902
            ]),
            "3165008" => new Map([
                "name" => "São Tiago",
                "zipCode" => [ 36350000, 36359999 ],
                "ibge" => 3165008
            ]),
            "3165107" => new Map([
                "name" => "São Tomás de Aquino",
                "zipCode" => [ 37960000, 37964999 ],
                "ibge" => 3165107
            ]),
            "3165206" => new Map([
                "name" => "São Thomé das Letras",
                "zipCode" => [ 37408000, 37409999 ],
                "ibge" => 3165206
            ]),
            "3165305" => new Map([
                "name" => "São Vicente de Minas",
                "zipCode" => [ 37370000, 37399999 ],
                "ibge" => 3165305
            ]),
            "3165404" => new Map([
                "name" => "Sapucaí-Mirim",
                "zipCode" => [ 37690000, 37699999 ],
                "ibge" => 3165404
            ]),
            "3165503" => new Map([
                "name" => "Sardoá",
                "zipCode" => [ 39728000, 39729999 ],
                "ibge" => 3165503
            ]),
            "3165537" => new Map([
                "name" => "Sarzedo",
                "zipCode" => [ 32450000, 32469999 ],
                "ibge" => 3165537
            ]),
            "3165560" => new Map([
                "name" => "Sem Peixe",
                "zipCode" => [ 35441000, 35441999 ],
                "ibge" => 3165560
            ]),
            "3165578" => new Map([
                "name" => "Senador Amaral",
                "zipCode" => [ 37615000, 37619999 ],
                "ibge" => 3165578
            ]),
            "3165602" => new Map([
                "name" => "Senador Cortes",
                "zipCode" => [ 36650000, 36659999 ],
                "ibge" => 3165602
            ]),
            "3165701" => new Map([
                "name" => "Senador Firmino",
                "zipCode" => [ 36540000, 36541999 ],
                "ibge" => 3165701
            ]),
            "3165800" => new Map([
                "name" => "Senador José Bento",
                "zipCode" => [ 37586000, 37587999 ],
                "ibge" => 3165800
            ]),
            "3165909" => new Map([
                "name" => "Senador Modestino Gonçalves",
                "zipCode" => [ 39190000, 39199999 ],
                "ibge" => 3165909
            ]),
            "3166006" => new Map([
                "name" => "Senhora de Oliveira",
                "zipCode" => [ 36470000, 36474999 ],
                "ibge" => 3166006
            ]),
            "3166105" => new Map([
                "name" => "Senhora do Porto",
                "zipCode" => [ 39745000, 39749999 ],
                "ibge" => 3166105
            ]),
            "3166204" => new Map([
                "name" => "Senhora dos Remédios",
                "zipCode" => [ 36275000, 36279999 ],
                "ibge" => 3166204
            ]),
            "3166303" => new Map([
                "name" => "Sericita",
                "zipCode" => [ 35368000, 35369999 ],
                "ibge" => 3166303
            ]),
            "3166402" => new Map([
                "name" => "Seritinga",
                "zipCode" => [ 37454000, 37455999 ],
                "ibge" => 3166402
            ]),
            "3166501" => new Map([
                "name" => "Serra Azul de Minas",
                "zipCode" => [ 39165000, 39169999 ],
                "ibge" => 3166501
            ]),
            "3166600" => new Map([
                "name" => "Serra da Saudade",
                "zipCode" => [ 35617000, 35619999 ],
                "ibge" => 3166600
            ]),
            "3166808" => new Map([
                "name" => "Serra do Salitre",
                "zipCode" => [ 38760000, 38769999 ],
                "ibge" => 3166808
            ]),
            "3166709" => new Map([
                "name" => "Serra dos Aimorés",
                "zipCode" => [ 39868000, 39869999 ],
                "ibge" => 3166709
            ]),
            "3166907" => new Map([
                "name" => "Serrania",
                "zipCode" => [ 37143000, 37143999 ],
                "ibge" => 3166907
            ]),
            "3166956" => new Map([
                "name" => "Serranópolis de Minas",
                "zipCode" => [ 39518000, 39519999 ],
                "ibge" => 3166956
            ]),
            "3167004" => new Map([
                "name" => "Serranos",
                "zipCode" => [ 37452000, 37453999 ],
                "ibge" => 3167004
            ]),
            "3167103" => new Map([
                "name" => "Serro",
                "zipCode" => [ 39150000, 39159999 ],
                "ibge" => 3167103
            ]),
            "3167202" => new Map([
                "name" => "Sete Lagoas",
                "zipCode" => [ 35700001, 35719999 ],
                "ibge" => 3167202
            ]),
            "3165552" => new Map([
                "name" => "Setubinha",
                "zipCode" => [ 39688000, 39689999 ],
                "ibge" => 3165552
            ]),
            "3167301" => new Map([
                "name" => "Silveirânia",
                "zipCode" => [ 36185000, 36189999 ],
                "ibge" => 3167301
            ]),
            "3167400" => new Map([
                "name" => "Silvianópolis",
                "zipCode" => [ 37589000, 37589999 ],
                "ibge" => 3167400
            ]),
            "3167509" => new Map([
                "name" => "Simão Pereira",
                "zipCode" => [ 36123000, 36125999 ],
                "ibge" => 3167509
            ]),
            "3167608" => new Map([
                "name" => "Simonésia",
                "zipCode" => [ 36930000, 36939999 ],
                "ibge" => 3167608
            ]),
            "3167707" => new Map([
                "name" => "Sobrália",
                "zipCode" => [ 35144000, 35145999 ],
                "ibge" => 3167707
            ]),
            "3167806" => new Map([
                "name" => "Soledade de Minas",
                "zipCode" => [ 37478000, 37479999 ],
                "ibge" => 3167806
            ]),
            "3167905" => new Map([
                "name" => "Tabuleiro",
                "zipCode" => [ 36165000, 36169999 ],
                "ibge" => 3167905
            ]),
            "3168002" => new Map([
                "name" => "Taiobeiras",
                "zipCode" => [ 39550000, 39552999 ],
                "ibge" => 3168002
            ]),
            "3168051" => new Map([
                "name" => "Taparuba",
                "zipCode" => [ 36953000, 36954999 ],
                "ibge" => 3168051
            ]),
            "3168101" => new Map([
                "name" => "Tapira",
                "zipCode" => [ 38185000, 38189999 ],
                "ibge" => 3168101
            ]),
            "3168200" => new Map([
                "name" => "Tapiraí",
                "zipCode" => [ 38980000, 38989999 ],
                "ibge" => 3168200
            ]),
            "3168309" => new Map([
                "name" => "Taquaraçu de Minas",
                "zipCode" => [ 33980000, 33999999 ],
                "ibge" => 3168309
            ]),
            "3168408" => new Map([
                "name" => "Tarumirim",
                "zipCode" => [ 35140000, 35143999 ],
                "ibge" => 3168408
            ]),
            "3168507" => new Map([
                "name" => "Teixeiras",
                "zipCode" => [ 36580000, 36584999 ],
                "ibge" => 3168507
            ]),
            "3168606" => new Map([
                "name" => "Teófilo Otoni",
                "zipCode" => [ 39800001, 39809999 ],
                "ibge" => 3168606
            ]),
            "3168705" => new Map([
                "name" => "Timóteo",
                "zipCode" => [ 35180001, 35184999 ],
                "ibge" => 3168705
            ]),
            "3168804" => new Map([
                "name" => "Tiradentes",
                "zipCode" => [ 36325000, 36327999 ],
                "ibge" => 3168804
            ]),
            "3168903" => new Map([
                "name" => "Tiros",
                "zipCode" => [ 38880000, 38899999 ],
                "ibge" => 3168903
            ]),
            "3169000" => new Map([
                "name" => "Tocantins",
                "zipCode" => [ 36512000, 36512999 ],
                "ibge" => 3169000
            ]),
            "3169059" => new Map([
                "name" => "Tocos do Moji",
                "zipCode" => [ 37563000, 37563999 ],
                "ibge" => 3169059
            ]),
            "3169109" => new Map([
                "name" => "Toledo",
                "zipCode" => [ 37630000, 37639999 ],
                "ibge" => 3169109
            ]),
            "3169208" => new Map([
                "name" => "Tombos",
                "zipCode" => [ 36844000, 36846999 ],
                "ibge" => 3169208
            ]),
            "3169307" => new Map([
                "name" => "Três Corações",
                "zipCode" => [ 37410001, 37419999 ],
                "ibge" => 3169307
            ]),
            "3169356" => new Map([
                "name" => "Três Marias",
                "zipCode" => [ 39205000, 39209999 ],
                "ibge" => 3169356
            ]),
            "3169406" => new Map([
                "name" => "Três Pontas",
                "zipCode" => [ 37190000, 37194999 ],
                "ibge" => 3169406
            ]),
            "3169505" => new Map([
                "name" => "Tumiritinga",
                "zipCode" => [ 35125000, 35129999 ],
                "ibge" => 3169505
            ]),
            "3169604" => new Map([
                "name" => "Tupaciguara",
                "zipCode" => [ 38480000, 38489999 ],
                "ibge" => 3169604
            ]),
            "3169703" => new Map([
                "name" => "Turmalina",
                "zipCode" => [ 39660000, 39662999 ],
                "ibge" => 3169703
            ]),
            "3169802" => new Map([
                "name" => "Turvolândia",
                "zipCode" => [ 37496000, 37497999 ],
                "ibge" => 3169802
            ]),
            "3169901" => new Map([
                "name" => "Ubá",
                "zipCode" => [ 36500001, 36509999 ],
                "ibge" => 3169901
            ]),
            "3170008" => new Map([
                "name" => "Ubaí",
                "zipCode" => [ 39320000, 39327999 ],
                "ibge" => 3170008
            ]),
            "3170057" => new Map([
                "name" => "Ubaporanga",
                "zipCode" => [ 35338000, 35339999 ],
                "ibge" => 3170057
            ]),
            "3170107" => new Map([
                "name" => "Uberaba",
                "zipCode" => [ 38000001, 38107999 ],
                "ibge" => 3170107
            ]),
            "3170206" => new Map([
                "name" => "Uberlândia",
                "zipCode" => [ 38400001, 38439999 ],
                "ibge" => 3170206
            ]),
            "3170305" => new Map([
                "name" => "Umburatiba",
                "zipCode" => [ 39878000, 39879999 ],
                "ibge" => 3170305
            ]),
            "3170404" => new Map([
                "name" => "Unaí",
                "zipCode" => [ 38610001, 38624999 ],
                "ibge" => 3170404
            ]),
            "3170438" => new Map([
                "name" => "União de Minas",
                "zipCode" => [ 38288000, 38289999 ],
                "ibge" => 3170438
            ]),
            "3170479" => new Map([
                "name" => "Uruana de Minas",
                "zipCode" => [ 38630000, 38639999 ],
                "ibge" => 3170479
            ]),
            "3170503" => new Map([
                "name" => "Urucânia",
                "zipCode" => [ 35380000, 35381999 ],
                "ibge" => 3170503
            ]),
            "3170529" => new Map([
                "name" => "Urucuia",
                "zipCode" => [ 38649000, 38649999 ],
                "ibge" => 3170529
            ]),
            "3170578" => new Map([
                "name" => "Vargem Alegre",
                "zipCode" => [ 35199000, 35199999 ],
                "ibge" => 3170578
            ]),
            "3170602" => new Map([
                "name" => "Vargem Bonita",
                "zipCode" => [ 37922000, 37924999 ],
                "ibge" => 3170602
            ]),
            "3170651" => new Map([
                "name" => "Vargem Grande do Rio Pardo",
                "zipCode" => [ 39535000, 39535999 ],
                "ibge" => 3170651
            ]),
            "3170701" => new Map([
                "name" => "Varginha",
                "zipCode" => [ 37000001, 37109999 ],
                "ibge" => 3170701
            ]),
            "3170750" => new Map([
                "name" => "Varjão de Minas",
                "zipCode" => [ 38794000, 38799999 ],
                "ibge" => 3170750
            ]),
            "3170800" => new Map([
                "name" => "Várzea da Palma",
                "zipCode" => [ 39260000, 39269999 ],
                "ibge" => 3170800
            ]),
            "3170909" => new Map([
                "name" => "Varzelândia",
                "zipCode" => [ 39450000, 39454999 ],
                "ibge" => 3170909
            ]),
            "3171006" => new Map([
                "name" => "Vazante",
                "zipCode" => [ 38780000, 38784999 ],
                "ibge" => 3171006
            ]),
            "3171030" => new Map([
                "name" => "Verdelândia",
                "zipCode" => [ 39458000, 39459999 ],
                "ibge" => 3171030
            ]),
            "3171071" => new Map([
                "name" => "Veredinha",
                "zipCode" => [ 39663000, 39664999 ],
                "ibge" => 3171071
            ]),
            "3171105" => new Map([
                "name" => "Veríssimo",
                "zipCode" => [ 38150000, 38159999 ],
                "ibge" => 3171105
            ]),
            "3171154" => new Map([
                "name" => "Vermelho Novo",
                "zipCode" => [ 35359000, 35359999 ],
                "ibge" => 3171154
            ]),
            "3171204" => new Map([
                "name" => "Vespasiano",
                "zipCode" => [ 33200001, 33229999 ],
                "ibge" => 3171204
            ]),
            "3171303" => new Map([
                "name" => "Viçosa",
                "zipCode" => [ 36570001, 36579999 ],
                "ibge" => 3171303
            ]),
            "3171402" => new Map([
                "name" => "Vieiras",
                "zipCode" => [ 36895000, 36899999 ],
                "ibge" => 3171402
            ]),
            "3171600" => new Map([
                "name" => "Virgem da Lapa",
                "zipCode" => [ 39630000, 39634999 ],
                "ibge" => 3171600
            ]),
            "3171709" => new Map([
                "name" => "Virgínia",
                "zipCode" => [ 37465000, 37465999 ],
                "ibge" => 3171709
            ]),
            "3171808" => new Map([
                "name" => "Virginópolis",
                "zipCode" => [ 39730000, 39734999 ],
                "ibge" => 3171808
            ]),
            "3171907" => new Map([
                "name" => "Virgolândia",
                "zipCode" => [ 39715000, 39717999 ],
                "ibge" => 3171907
            ]),
            "3172004" => new Map([
                "name" => "Visconde do Rio Branco",
                "zipCode" => [ 36520000, 36524999 ],
                "ibge" => 3172004
            ]),
            "3172103" => new Map([
                "name" => "Volta Grande",
                "zipCode" => [ 36720000, 36724999 ],
                "ibge" => 3172103
            ]),
            "3172202" => new Map([
                "name" => "Wenceslau Braz",
                "zipCode" => [ 37512000, 37513999 ],
                "ibge" => 3172202
            ])
        ]);

        return $map;
    }
}