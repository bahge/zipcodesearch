<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

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
                "cep" => [ 38540000, 38549999 ],
                "ibge" => 3100104
            ]),
            "3100203" => new Map([
                "name" => "Abaeté",
                "cep" => [ 35620000, 35620999 ],
                "ibge" => 3100203
            ]),
            "3100302" => new Map([
                "name" => "Abre Campo",
                "cep" => [ 35365000, 35366999 ],
                "ibge" => 3100302
            ]),
            "3100401" => new Map([
                "name" => "Acaiaca",
                "cep" => [ 35438000, 35438999 ],
                "ibge" => 3100401
            ]),
            "3100500" => new Map([
                "name" => "Açucena",
                "cep" => [ 35147000, 35147999 ],
                "ibge" => 3100500
            ]),
            "3100609" => new Map([
                "name" => "Água Boa",
                "cep" => [ 39790000, 39794999 ],
                "ibge" => 3100609
            ]),
            "3100708" => new Map([
                "name" => "Água Comprida",
                "cep" => [ 38110000, 38119999 ],
                "ibge" => 3100708
            ]),
            "3100807" => new Map([
                "name" => "Aguanil",
                "cep" => [ 37273000, 37274999 ],
                "ibge" => 3100807
            ]),
            "3100906" => new Map([
                "name" => "Águas Formosas",
                "cep" => [ 39880000, 39884999 ],
                "ibge" => 3100906
            ]),
            "3101003" => new Map([
                "name" => "Águas Vermelhas",
                "cep" => [ 39990000, 39994999 ],
                "ibge" => 3101003
            ]),
            "3101102" => new Map([
                "name" => "Aimorés",
                "cep" => [ 35200000, 35219999 ],
                "ibge" => 3101102
            ]),
            "3101201" => new Map([
                "name" => "Aiuruoca",
                "cep" => [ 37450000, 37451999 ],
                "ibge" => 3101201
            ]),
            "3101300" => new Map([
                "name" => "Alagoa",
                "cep" => [ 37458000, 37459999 ],
                "ibge" => 3101300
            ]),
            "3101409" => new Map([
                "name" => "Albertina",
                "cep" => [ 37596000, 37599999 ],
                "ibge" => 3101409
            ]),
            "3101508" => new Map([
                "name" => "Além Paraíba",
                "cep" => [ 36660000, 36669999 ],
                "ibge" => 3101508
            ]),
            "3101607" => new Map([
                "name" => "Alfenas",
                "cep" => [ 37130001, 37139999 ],
                "ibge" => 3101607
            ]),
            "3101631" => new Map([
                "name" => "Alfredo Vasconcelos",
                "cep" => [ 36272000, 36274999 ],
                "ibge" => 3101631
            ]),
            "3101706" => new Map([
                "name" => "Almenara",
                "cep" => [ 39900000, 39911999 ],
                "ibge" => 3101706
            ]),
            "3101805" => new Map([
                "name" => "Alpercata",
                "cep" => [ 35138000, 35139999 ],
                "ibge" => 3101805
            ]),
            "3101904" => new Map([
                "name" => "Alpinópolis",
                "cep" => [ 37940000, 37944999 ],
                "ibge" => 3101904
            ]),
            "3102001" => new Map([
                "name" => "Alterosa",
                "cep" => [ 37145000, 37147999 ],
                "ibge" => 3102001
            ]),
            "3102050" => new Map([
                "name" => "Alto Caparaó",
                "cep" => [ 36979000, 36979999 ],
                "ibge" => 3102050
            ]),
            "3153509" => new Map([
                "name" => "Alto Jequitibá",
                "cep" => [ 36976000, 36978999 ],
                "ibge" => 3153509
            ]),
            "3102100" => new Map([
                "name" => "Alto Rio Doce",
                "cep" => [ 36260000, 36264999 ],
                "ibge" => 3102100
            ]),
            "3102209" => new Map([
                "name" => "Alvarenga",
                "cep" => [ 35249000, 35249999 ],
                "ibge" => 3102209
            ]),
            "3102308" => new Map([
                "name" => "Alvinópolis",
                "cep" => [ 35950000, 35959999 ],
                "ibge" => 3102308
            ]),
            "3102407" => new Map([
                "name" => "Alvorada de Minas",
                "cep" => [ 39140000, 39149999 ],
                "ibge" => 3102407
            ]),
            "3102506" => new Map([
                "name" => "Amparo da Serra",
                "cep" => [ 35444000, 35446999 ],
                "ibge" => 3102506
            ]),
            "3102605" => new Map([
                "name" => "Andradas",
                "cep" => [ [     37795000,     37799999 ], [     37838000,     37844999 ] ],
                "ibge" => 3102605
            ]),
            "3102803" => new Map([
                "name" => "Andrelândia",
                "cep" => [ 37300000, 37304999 ],
                "ibge" => 3102803
            ]),
            "3102852" => new Map([
                "name" => "Angelândia",
                "cep" => [ 39685000, 39687999 ],
                "ibge" => 3102852
            ]),
            "3102902" => new Map([
                "name" => "Antônio Carlos",
                "cep" => [ 36220000, 36224999 ],
                "ibge" => 3102902
            ]),
            "3103009" => new Map([
                "name" => "Antônio Dias",
                "cep" => [ 35177000, 35178999 ],
                "ibge" => 3103009
            ]),
            "3103108" => new Map([
                "name" => "Antônio Prado de Minas",
                "cep" => [ 36850000, 36854999 ],
                "ibge" => 3103108
            ]),
            "3103207" => new Map([
                "name" => "Araçaí",
                "cep" => [ 35777000, 35779999 ],
                "ibge" => 3103207
            ]),
            "3103306" => new Map([
                "name" => "Aracitaba",
                "cep" => [ 36255000, 36259999 ],
                "ibge" => 3103306
            ]),
            "3103405" => new Map([
                "name" => "Araçuaí",
                "cep" => [ 39600000, 39609999 ],
                "ibge" => 3103405
            ]),
            "3103504" => new Map([
                "name" => "Araguari",
                "cep" => [ 38440001, 38459999 ],
                "ibge" => 3103504
            ]),
            "3103603" => new Map([
                "name" => "Arantina",
                "cep" => [ 37360000, 37369999 ],
                "ibge" => 3103603
            ]),
            "3103702" => new Map([
                "name" => "Araponga",
                "cep" => [ 36594000, 36599999 ],
                "ibge" => 3103702
            ]),
            "3103751" => new Map([
                "name" => "Araporã",
                "cep" => [ 38465000, 38469999 ],
                "ibge" => 3103751
            ]),
            "3103801" => new Map([
                "name" => "Arapuá",
                "cep" => [ 38860000, 38869999 ],
                "ibge" => 3103801
            ]),
            "3103900" => new Map([
                "name" => "Araújos",
                "cep" => [ 35603000, 35603999 ],
                "ibge" => 3103900
            ]),
            "3104007" => new Map([
                "name" => "Araxá",
                "cep" => [ 38180001, 38184999 ],
                "ibge" => 3104007
            ]),
            "3104106" => new Map([
                "name" => "Arceburgo",
                "cep" => [ 37820000, 37824999 ],
                "ibge" => 3104106
            ]),
            "3104205" => new Map([
                "name" => "Arcos",
                "cep" => [ [     35588000,     35589999 ], [     35598000,     35602999 ] ],
                "ibge" => 3104205
            ]),
            "3104304" => new Map([
                "name" => "Areado",
                "cep" => [ 37140000, 37141999 ],
                "ibge" => 3104304
            ]),
            "3104403" => new Map([
                "name" => "Argirita",
                "cep" => [ 36710000, 36719999 ],
                "ibge" => 3104403
            ]),
            "3104452" => new Map([
                "name" => "Aricanduva",
                "cep" => [ 39678000, 39679999 ],
                "ibge" => 3104452
            ]),
            "3104502" => new Map([
                "name" => "Arinos",
                "cep" => [ 38680000, 38688999 ],
                "ibge" => 3104502
            ]),
            "3104601" => new Map([
                "name" => "Astolfo Dutra",
                "cep" => [ 36780000, 36783999 ],
                "ibge" => 3104601
            ]),
            "3104700" => new Map([
                "name" => "Ataléia",
                "cep" => [ 39850000, 39854999 ],
                "ibge" => 3104700
            ]),
            "3104809" => new Map([
                "name" => "Augusto de Lima",
                "cep" => [ 39219000, 39219999 ],
                "ibge" => 3104809
            ]),
            "3104908" => new Map([
                "name" => "Baependi",
                "cep" => [ 37443000, 37444999 ],
                "ibge" => 3104908
            ]),
            "3105004" => new Map([
                "name" => "Baldim",
                "cep" => [ 35732000, 35735999 ],
                "ibge" => 3105004
            ]),
            "3105103" => new Map([
                "name" => "Bambuí",
                "cep" => [ 38900000, 38909999 ],
                "ibge" => 3105103
            ]),
            "3105202" => new Map([
                "name" => "Bandeira",
                "cep" => [ 39917000, 39919999 ],
                "ibge" => 3105202
            ]),
            "3105301" => new Map([
                "name" => "Bandeira do Sul",
                "cep" => [ 37740000, 37749999 ],
                "ibge" => 3105301
            ]),
            "3105400" => new Map([
                "name" => "Barão de Cocais",
                "cep" => [ 35970000, 35983999 ],
                "ibge" => 3105400
            ]),
            "3105509" => new Map([
                "name" => "Barão de Monte Alto",
                "cep" => [ 36870000, 36877999 ],
                "ibge" => 3105509
            ]),
            "3105608" => new Map([
                "name" => "Barbacena",
                "cep" => [ 36200001, 36209999 ],
                "ibge" => 3105608
            ]),
            "3105707" => new Map([
                "name" => "Barra Longa",
                "cep" => [ 35447000, 35449999 ],
                "ibge" => 3105707
            ]),
            "3105905" => new Map([
                "name" => "Barroso",
                "cep" => [ [     36212000,     36212999 ], [     36295000,     36299999 ] ],
                "ibge" => 3105905
            ]),
            "3106002" => new Map([
                "name" => "Bela Vista de Minas",
                "cep" => [ 35938000, 35939999 ],
                "ibge" => 3106002
            ]),
            "3106101" => new Map([
                "name" => "Belmiro Braga",
                "cep" => [ 36126000, 36129999 ],
                "ibge" => 3106101
            ]),
            "3106200" => new Map([
                "name" => "Belo Horizonte",
                "cep" => [ 30000001, 31999999 ],
                "ibge" => 3106200
            ]),
            "3106309" => new Map([
                "name" => "Belo Oriente",
                "cep" => [ 35195000, 35197999 ],
                "ibge" => 3106309
            ]),
            "3106408" => new Map([
                "name" => "Belo Vale",
                "cep" => [ 35473000, 35475999 ],
                "ibge" => 3106408
            ]),
            "3106507" => new Map([
                "name" => "Berilo",
                "cep" => [ 39640000, 39641999 ],
                "ibge" => 3106507
            ]),
            "3106655" => new Map([
                "name" => "Berizal",
                "cep" => [ 39555000, 39557999 ],
                "ibge" => 3106655
            ]),
            "3106606" => new Map([
                "name" => "Bertópolis",
                "cep" => [ 39875000, 39877999 ],
                "ibge" => 3106606
            ]),
            "3106705" => new Map([
                "name" => "Betim",
                "cep" => [ 32600001, 32699999 ],
                "ibge" => 3106705
            ]),
            "3106804" => new Map([
                "name" => "Bias Fortes",
                "cep" => [ 36230000, 36234999 ],
                "ibge" => 3106804
            ]),
            "3106903" => new Map([
                "name" => "Bicas",
                "cep" => [ 36600000, 36603999 ],
                "ibge" => 3106903
            ]),
            "3107000" => new Map([
                "name" => "Biquinhas",
                "cep" => [ 35621000, 35621999 ],
                "ibge" => 3107000
            ]),
            "3107109" => new Map([
                "name" => "Boa Esperança",
                "cep" => [ 37170000, 37174999 ],
                "ibge" => 3107109
            ]),
            "3107208" => new Map([
                "name" => "Bocaina de Minas",
                "cep" => [ 37340000, 37349999 ],
                "ibge" => 3107208
            ]),
            "3107307" => new Map([
                "name" => "Bocaiúva",
                "cep" => [ 39390000, 39396999 ],
                "ibge" => 3107307
            ]),
            "3107406" => new Map([
                "name" => "Bom Despacho",
                "cep" => [ 35630001, 35639999 ],
                "ibge" => 3107406
            ]),
            "3107505" => new Map([
                "name" => "Bom Jardim de Minas",
                "cep" => [ 37310000, 37329999 ],
                "ibge" => 3107505
            ]),
            "3107604" => new Map([
                "name" => "Bom Jesus da Penha",
                "cep" => [ 37948000, 37949999 ],
                "ibge" => 3107604
            ]),
            "3107703" => new Map([
                "name" => "Bom Jesus do Amparo",
                "cep" => [ 35908000, 35909999 ],
                "ibge" => 3107703
            ]),
            "3107802" => new Map([
                "name" => "Bom Jesus do Galho",
                "cep" => [ 35340000, 35344999 ],
                "ibge" => 3107802
            ]),
            "3107901" => new Map([
                "name" => "Bom Repouso",
                "cep" => [ 37610000, 37614999 ],
                "ibge" => 3107901
            ]),
            "3108008" => new Map([
                "name" => "Bom Sucesso",
                "cep" => [ 37220000, 37222999 ],
                "ibge" => 3108008
            ]),
            "3108107" => new Map([
                "name" => "Bonfim",
                "cep" => [ 35480000, 35484999 ],
                "ibge" => 3108107
            ]),
            "3108206" => new Map([
                "name" => "Bonfinópolis de Minas",
                "cep" => [ 38650000, 38653999 ],
                "ibge" => 3108206
            ]),
            "3108255" => new Map([
                "name" => "Bonito de Minas",
                "cep" => [ 39490000, 39491999 ],
                "ibge" => 3108255
            ]),
            "3108305" => new Map([
                "name" => "Borda da Mata",
                "cep" => [ 37564000, 37565999 ],
                "ibge" => 3108305
            ]),
            "3108404" => new Map([
                "name" => "Botelhos",
                "cep" => [ 37720000, 37729999 ],
                "ibge" => 3108404
            ]),
            "3108503" => new Map([
                "name" => "Botumirim",
                "cep" => [ 39595000, 39597999 ],
                "ibge" => 3108503
            ]),
            "3108701" => new Map([
                "name" => "Brás Pires",
                "cep" => [ 36542000, 36543999 ],
                "ibge" => 3108701
            ]),
            "3108552" => new Map([
                "name" => "Brasilândia de Minas",
                "cep" => [ 38779000, 38779999 ],
                "ibge" => 3108552
            ]),
            "3108602" => new Map([
                "name" => "Brasília de Minas",
                "cep" => [ 39330000, 39334999 ],
                "ibge" => 3108602
            ]),
            "3108800" => new Map([
                "name" => "Braúnas",
                "cep" => [ 35189000, 35189999 ],
                "ibge" => 3108800
            ]),
            "3108909" => new Map([
                "name" => "Brazópolis",
                "cep" => [ 37530000, 37535999 ],
                "ibge" => 3108909
            ]),
            "3109006" => new Map([
                "name" => "Brumadinho",
                "cep" => [ [     32480000,     32499999 ], [     35460000,     35469999 ] ],
                "ibge" => 3109006
            ]),
            "3109105" => new Map([
                "name" => "Bueno Brandão",
                "cep" => [ 37578000, 37579999 ],
                "ibge" => 3109105
            ]),
            "3109204" => new Map([
                "name" => "Buenópolis",
                "cep" => [ 39230000, 39236999 ],
                "ibge" => 3109204
            ]),
            "3109253" => new Map([
                "name" => "Bugre",
                "cep" => [ 35193000, 35193999 ],
                "ibge" => 3109253
            ]),
            "3109303" => new Map([
                "name" => "Buritis",
                "cep" => [ 38660000, 38679999 ],
                "ibge" => 3109303
            ]),
            "3109402" => new Map([
                "name" => "Buritizeiro",
                "cep" => [ 39280000, 39289999 ],
                "ibge" => 3109402
            ]),
            "3109451" => new Map([
                "name" => "Cabeceira Grande",
                "cep" => [ 38625000, 38629999 ],
                "ibge" => 3109451
            ]),
            "3109501" => new Map([
                "name" => "Cabo Verde",
                "cep" => [ 37880000, 37889999 ],
                "ibge" => 3109501
            ]),
            "3109600" => new Map([
                "name" => "Cachoeira da Prata",
                "cep" => [ 35765000, 35766999 ],
                "ibge" => 3109600
            ]),
            "3109709" => new Map([
                "name" => "Cachoeira de Minas",
                "cep" => [ 37545000, 37547999 ],
                "ibge" => 3109709
            ]),
            "3102704" => new Map([
                "name" => "Cachoeira de Pajeú",
                "cep" => [ 39980000, 39989999 ],
                "ibge" => 3102704
            ]),
            "3109808" => new Map([
                "name" => "Cachoeira Dourada",
                "cep" => [ 38370000, 38379999 ],
                "ibge" => 3109808
            ]),
            "3109907" => new Map([
                "name" => "Caetanópolis",
                "cep" => [ 35770000, 35773999 ],
                "ibge" => 3109907
            ]),
            "3110004" => new Map([
                "name" => "Caeté",
                "cep" => [ 34800000, 34989999 ],
                "ibge" => 3110004
            ]),
            "3110103" => new Map([
                "name" => "Caiana",
                "cep" => [ 36832000, 36833999 ],
                "ibge" => 3110103
            ]),
            "3110202" => new Map([
                "name" => "Cajuri",
                "cep" => [ 36560000, 36567999 ],
                "ibge" => 3110202
            ]),
            "3110301" => new Map([
                "name" => "Caldas",
                "cep" => [ 37780000, 37789999 ],
                "ibge" => 3110301
            ]),
            "3110400" => new Map([
                "name" => "Camacho",
                "cep" => [ 35555000, 35556999 ],
                "ibge" => 3110400
            ]),
            "3110509" => new Map([
                "name" => "Camanducaia",
                "cep" => [ 37650000, 37654999 ],
                "ibge" => 3110509
            ]),
            "3110608" => new Map([
                "name" => "Cambuí",
                "cep" => [ 37600000, 37604999 ],
                "ibge" => 3110608
            ]),
            "3110707" => new Map([
                "name" => "Cambuquira",
                "cep" => [ 37420000, 37429999 ],
                "ibge" => 3110707
            ]),
            "3110806" => new Map([
                "name" => "Campanário",
                "cep" => [ 39835000, 39836999 ],
                "ibge" => 3110806
            ]),
            "3110905" => new Map([
                "name" => "Campanha",
                "cep" => [ 37400000, 37404999 ],
                "ibge" => 3110905
            ]),
            "3111002" => new Map([
                "name" => "Campestre",
                "cep" => [ 37730000, 37739999 ],
                "ibge" => 3111002
            ]),
            "3111101" => new Map([
                "name" => "Campina Verde",
                "cep" => [ 38270000, 38279999 ],
                "ibge" => 3111101
            ]),
            "3111150" => new Map([
                "name" => "Campo Azul",
                "cep" => [ 39338000, 39339999 ],
                "ibge" => 3111150
            ]),
            "3111200" => new Map([
                "name" => "Campo Belo",
                "cep" => [ 37270000, 37272999 ],
                "ibge" => 3111200
            ]),
            "3111309" => new Map([
                "name" => "Campo do Meio",
                "cep" => [ 37165000, 37169999 ],
                "ibge" => 3111309
            ]),
            "3111408" => new Map([
                "name" => "Campo Florido",
                "cep" => [ 38130000, 38139999 ],
                "ibge" => 3111408
            ]),
            "3111507" => new Map([
                "name" => "Campos Altos",
                "cep" => [ 38970000, 38979999 ],
                "ibge" => 3111507
            ]),
            "3111606" => new Map([
                "name" => "Campos Gerais",
                "cep" => [ 37160000, 37164999 ],
                "ibge" => 3111606
            ]),
            "3111903" => new Map([
                "name" => "Cana Verde",
                "cep" => [ 37267000, 37269999 ],
                "ibge" => 3111903
            ]),
            "3111705" => new Map([
                "name" => "Canaã",
                "cep" => [ 36592000, 36593999 ],
                "ibge" => 3111705
            ]),
            "3111804" => new Map([
                "name" => "Canápolis",
                "cep" => [ 38380000, 38389999 ],
                "ibge" => 3111804
            ]),
            "3112000" => new Map([
                "name" => "Candeias",
                "cep" => [ 37280000, 37299999 ],
                "ibge" => 3112000
            ]),
            "3112059" => new Map([
                "name" => "Cantagalo",
                "cep" => [ 39703000, 39703999 ],
                "ibge" => 3112059
            ]),
            "3112109" => new Map([
                "name" => "Caparaó",
                "cep" => [ 36834000, 36835999 ],
                "ibge" => 3112109
            ]),
            "3112208" => new Map([
                "name" => "Capela Nova",
                "cep" => [ 36290000, 36294999 ],
                "ibge" => 3112208
            ]),
            "3112307" => new Map([
                "name" => "Capelinha",
                "cep" => [ 39680000, 39684999 ],
                "ibge" => 3112307
            ]),
            "3112406" => new Map([
                "name" => "Capetinga",
                "cep" => [ 37993000, 37996999 ],
                "ibge" => 3112406
            ]),
            "3112505" => new Map([
                "name" => "Capim Branco",
                "cep" => [ 35730000, 35731999 ],
                "ibge" => 3112505
            ]),
            "3112604" => new Map([
                "name" => "Capinópolis",
                "cep" => [ 38360000, 38369999 ],
                "ibge" => 3112604
            ]),
            "3112653" => new Map([
                "name" => "Capitão Andrade",
                "cep" => [ 35123000, 35124999 ],
                "ibge" => 3112653
            ]),
            "3112703" => new Map([
                "name" => "Capitão Enéas",
                "cep" => [ 39472000, 39474999 ],
                "ibge" => 3112703
            ]),
            "3112802" => new Map([
                "name" => "Capitólio",
                "cep" => [ 37930000, 37939999 ],
                "ibge" => 3112802
            ]),
            "3112901" => new Map([
                "name" => "Caputira",
                "cep" => [ 36925000, 36929999 ],
                "ibge" => 3112901
            ]),
            "3113008" => new Map([
                "name" => "Caraí",
                "cep" => [ 39810000, 39813999 ],
                "ibge" => 3113008
            ]),
            "3113107" => new Map([
                "name" => "Caranaíba",
                "cep" => [ 36428000, 36429999 ],
                "ibge" => 3113107
            ]),
            "3113206" => new Map([
                "name" => "Carandaí",
                "cep" => [ 36280001, 36289999 ],
                "ibge" => 3113206
            ]),
            "3113305" => new Map([
                "name" => "Carangola",
                "cep" => [ 36800000, 36809999 ],
                "ibge" => 3113305
            ]),
            "3113404" => new Map([
                "name" => "Caratinga",
                "cep" => [ 35300001, 35322999 ],
                "ibge" => 3113404
            ]),
            "3113503" => new Map([
                "name" => "Carbonita",
                "cep" => [ 39665000, 39669999 ],
                "ibge" => 3113503
            ]),
            "3113602" => new Map([
                "name" => "Careaçu",
                "cep" => [ 37582000, 37583999 ],
                "ibge" => 3113602
            ]),
            "3113701" => new Map([
                "name" => "Carlos Chagas",
                "cep" => [ 39864000, 39867999 ],
                "ibge" => 3113701
            ]),
            "3113800" => new Map([
                "name" => "Carmésia",
                "cep" => [ 35878000, 35879999 ],
                "ibge" => 3113800
            ]),
            "3113909" => new Map([
                "name" => "Carmo da Cachoeira",
                "cep" => [ 37225000, 37234999 ],
                "ibge" => 3113909
            ]),
            "3114006" => new Map([
                "name" => "Carmo da Mata",
                "cep" => [ 35547000, 35549999 ],
                "ibge" => 3114006
            ]),
            "3114105" => new Map([
                "name" => "Carmo de Minas",
                "cep" => [ 37472000, 37473999 ],
                "ibge" => 3114105
            ]),
            "3114204" => new Map([
                "name" => "Carmo do Cajuru",
                "cep" => [ 35557000, 35559999 ],
                "ibge" => 3114204
            ]),
            "3114303" => new Map([
                "name" => "Carmo do Paranaíba",
                "cep" => [ 38840001, 38849999 ],
                "ibge" => 3114303
            ]),
            "3114402" => new Map([
                "name" => "Carmo do Rio Claro",
                "cep" => [ 37150000, 37159999 ],
                "ibge" => 3114402
            ]),
            "3114501" => new Map([
                "name" => "Carmópolis de Minas",
                "cep" => [ 35534000, 35535999 ],
                "ibge" => 3114501
            ]),
            "3114550" => new Map([
                "name" => "Carneirinho",
                "cep" => [ 38290000, 38294999 ],
                "ibge" => 3114550
            ]),
            "3114600" => new Map([
                "name" => "Carrancas",
                "cep" => [ 37245000, 37249999 ],
                "ibge" => 3114600
            ]),
            "3114709" => new Map([
                "name" => "Carvalhópolis",
                "cep" => [ 37760000, 37774999 ],
                "ibge" => 3114709
            ]),
            "3114808" => new Map([
                "name" => "Carvalhos",
                "cep" => [ 37456000, 37457999 ],
                "ibge" => 3114808
            ]),
            "3114907" => new Map([
                "name" => "Casa Grande",
                "cep" => [ 36422000, 36423999 ],
                "ibge" => 3114907
            ]),
            "3115003" => new Map([
                "name" => "Cascalho Rico",
                "cep" => [ 38460000, 38464999 ],
                "ibge" => 3115003
            ]),
            "3115102" => new Map([
                "name" => "Cássia",
                "cep" => [ 37980000, 37989999 ],
                "ibge" => 3115102
            ]),
            "3115300" => new Map([
                "name" => "Cataguases",
                "cep" => [ 36770001, 36779999 ],
                "ibge" => 3115300
            ]),
            "3115359" => new Map([
                "name" => "Catas Altas",
                "cep" => [ 35969000, 35969999 ],
                "ibge" => 3115359
            ]),
            "3115409" => new Map([
                "name" => "Catas Altas da Noruega",
                "cep" => [ 36450000, 36454999 ],
                "ibge" => 3115409
            ]),
            "3115458" => new Map([
                "name" => "Catuji",
                "cep" => [ 39816000, 39816999 ],
                "ibge" => 3115458
            ]),
            "3115474" => new Map([
                "name" => "Catuti",
                "cep" => [ 39526000, 39526999 ],
                "ibge" => 3115474
            ]),
            "3115508" => new Map([
                "name" => "Caxambu",
                "cep" => [ 37440000, 37442999 ],
                "ibge" => 3115508
            ]),
            "3115607" => new Map([
                "name" => "Cedro do Abaeté",
                "cep" => [ 35624000, 35624999 ],
                "ibge" => 3115607
            ]),
            "3115706" => new Map([
                "name" => "Central de Minas",
                "cep" => [ 35260000, 35264999 ],
                "ibge" => 3115706
            ]),
            "3115805" => new Map([
                "name" => "Centralina",
                "cep" => [ 38390000, 38399999 ],
                "ibge" => 3115805
            ]),
            "3115904" => new Map([
                "name" => "Chácara",
                "cep" => [ 36110000, 36119999 ],
                "ibge" => 3115904
            ]),
            "3116001" => new Map([
                "name" => "Chalé",
                "cep" => [ 36985000, 36989999 ],
                "ibge" => 3116001
            ]),
            "3116100" => new Map([
                "name" => "Chapada do Norte",
                "cep" => [ 39648000, 39649999 ],
                "ibge" => 3116100
            ]),
            "3116159" => new Map([
                "name" => "Chapada Gaúcha",
                "cep" => [ 38689000, 38689999 ],
                "ibge" => 3116159
            ]),
            "3116209" => new Map([
                "name" => "Chiador",
                "cep" => [ 36630000, 36639999 ],
                "ibge" => 3116209
            ]),
            "3116308" => new Map([
                "name" => "Cipotânea",
                "cep" => [ 36265000, 36269999 ],
                "ibge" => 3116308
            ]),
            "3116407" => new Map([
                "name" => "Claraval",
                "cep" => [ 37997000, 37999999 ],
                "ibge" => 3116407
            ]),
            "3116506" => new Map([
                "name" => "Claro dos Poções",
                "cep" => [ 39380000, 39386999 ],
                "ibge" => 3116506
            ]),
            "3116605" => new Map([
                "name" => "Cláudio",
                "cep" => [ 35530000, 35533999 ],
                "ibge" => 3116605
            ]),
            "3116704" => new Map([
                "name" => "Coimbra",
                "cep" => [ 36550000, 36554999 ],
                "ibge" => 3116704
            ]),
            "3116803" => new Map([
                "name" => "Coluna",
                "cep" => [ 39770000, 39774999 ],
                "ibge" => 3116803
            ]),
            "3116902" => new Map([
                "name" => "Comendador Gomes",
                "cep" => [ 38250000, 38259999 ],
                "ibge" => 3116902
            ]),
            "3117009" => new Map([
                "name" => "Comercinho",
                "cep" => [ 39628000, 39629999 ],
                "ibge" => 3117009
            ]),
            "3117108" => new Map([
                "name" => "Conceição da Aparecida",
                "cep" => [ 37148000, 37149999 ],
                "ibge" => 3117108
            ]),
            "3115201" => new Map([
                "name" => "Conceição da Barra de Minas",
                "cep" => [ 36360000, 36369999 ],
                "ibge" => 3115201
            ]),
            "3117306" => new Map([
                "name" => "Conceição das Alagoas",
                "cep" => [ 38120000, 38129999 ],
                "ibge" => 3117306
            ]),
            "3117207" => new Map([
                "name" => "Conceição das Pedras",
                "cep" => [ 37527000, 37529999 ],
                "ibge" => 3117207
            ]),
            "3117405" => new Map([
                "name" => "Conceição de Ipanema",
                "cep" => [ 36947000, 36949999 ],
                "ibge" => 3117405
            ]),
            "3117504" => new Map([
                "name" => "Conceição do Mato Dentro",
                "cep" => [ 35858000, 35864999 ],
                "ibge" => 3117504
            ]),
            "3117603" => new Map([
                "name" => "Conceição do Pará",
                "cep" => [ 35668000, 35668999 ],
                "ibge" => 3117603
            ]),
            "3117702" => new Map([
                "name" => "Conceição do Rio Verde",
                "cep" => [ 37430000, 37439999 ],
                "ibge" => 3117702
            ]),
            "3117801" => new Map([
                "name" => "Conceição dos Ouros",
                "cep" => [ 37548000, 37548999 ],
                "ibge" => 3117801
            ]),
            "3117836" => new Map([
                "name" => "Cônego Marinho",
                "cep" => [ 39489000, 39489999 ],
                "ibge" => 3117836
            ]),
            "3117876" => new Map([
                "name" => "Confins",
                "cep" => [ 33500000, 33599999 ],
                "ibge" => 3117876
            ]),
            "3117900" => new Map([
                "name" => "Congonhal",
                "cep" => [ [     37584000,     37585999 ], [     37845000,     37849999 ] ],
                "ibge" => 3117900
            ]),
            "3118007" => new Map([
                "name" => "Congonhas",
                "cep" => [ 36410001, 36419999 ],
                "ibge" => 3118007
            ]),
            "3118106" => new Map([
                "name" => "Congonhas do Norte",
                "cep" => [ 35850000, 35857999 ],
                "ibge" => 3118106
            ]),
            "3118205" => new Map([
                "name" => "Conquista",
                "cep" => [ 38195000, 38199999 ],
                "ibge" => 3118205
            ]),
            "3118304" => new Map([
                "name" => "Conselheiro Lafaiete",
                "cep" => [ 36400001, 36409999 ],
                "ibge" => 3118304
            ]),
            "3118403" => new Map([
                "name" => "Conselheiro Pena",
                "cep" => [ 35240000, 35245999 ],
                "ibge" => 3118403
            ]),
            "3118502" => new Map([
                "name" => "Consolação",
                "cep" => [ 37670000, 37679999 ],
                "ibge" => 3118502
            ]),
            "3118601" => new Map([
                "name" => "Contagem",
                "cep" => [ 32000001, 32399999 ],
                "ibge" => 3118601
            ]),
            "3118700" => new Map([
                "name" => "Coqueiral",
                "cep" => [ 37235000, 37239999 ],
                "ibge" => 3118700
            ]),
            "3118809" => new Map([
                "name" => "Coração de Jesus",
                "cep" => [ 39340000, 39349999 ],
                "ibge" => 3118809
            ]),
            "3118908" => new Map([
                "name" => "Cordisburgo",
                "cep" => [ 35780000, 35784999 ],
                "ibge" => 3118908
            ]),
            "3119005" => new Map([
                "name" => "Cordislândia",
                "cep" => [ 37498000, 37499999 ],
                "ibge" => 3119005
            ]),
            "3119104" => new Map([
                "name" => "Corinto",
                "cep" => [ 39200000, 39204999 ],
                "ibge" => 3119104
            ]),
            "3119203" => new Map([
                "name" => "Coroaci",
                "cep" => [ 39710000, 39714999 ],
                "ibge" => 3119203
            ]),
            "3119302" => new Map([
                "name" => "Coromandel",
                "cep" => [ 38550000, 38569999 ],
                "ibge" => 3119302
            ]),
            "3119401" => new Map([
                "name" => "Coronel Fabriciano",
                "cep" => [ 35170001, 35176999 ],
                "ibge" => 3119401
            ]),
            "3119500" => new Map([
                "name" => "Coronel Murta",
                "cep" => [ 39635000, 39639999 ],
                "ibge" => 3119500
            ]),
            "3119609" => new Map([
                "name" => "Coronel Pacheco",
                "cep" => [ 36155000, 36156999 ],
                "ibge" => 3119609
            ]),
            "3119708" => new Map([
                "name" => "Coronel Xavier Chaves",
                "cep" => [ 36330000, 36334999 ],
                "ibge" => 3119708
            ]),
            "3119807" => new Map([
                "name" => "Córrego Danta",
                "cep" => [ 38990000, 39099999 ],
                "ibge" => 3119807
            ]),
            "3119906" => new Map([
                "name" => "Córrego do Bom Jesus",
                "cep" => [ 37605000, 37609999 ],
                "ibge" => 3119906
            ]),
            "3119955" => new Map([
                "name" => "Córrego Fundo",
                "cep" => [ 35568000, 35568999 ],
                "ibge" => 3119955
            ]),
            "3120003" => new Map([
                "name" => "Córrego Novo",
                "cep" => [ 35345000, 35347999 ],
                "ibge" => 3120003
            ]),
            "3120102" => new Map([
                "name" => "Couto de Magalhães de Minas",
                "cep" => [ 39188000, 39189999 ],
                "ibge" => 3120102
            ]),
            "3120151" => new Map([
                "name" => "Crisólita",
                "cep" => [ 39885000, 39889999 ],
                "ibge" => 3120151
            ]),
            "3120201" => new Map([
                "name" => "Cristais",
                "cep" => [ 37275000, 37277999 ],
                "ibge" => 3120201
            ]),
            "3120300" => new Map([
                "name" => "Cristália",
                "cep" => [ 39598000, 39599999 ],
                "ibge" => 3120300
            ]),
            "3120409" => new Map([
                "name" => "Cristiano Otoni",
                "cep" => [ 36426000, 36427999 ],
                "ibge" => 3120409
            ]),
            "3120508" => new Map([
                "name" => "Cristina",
                "cep" => [ 37476000, 37477999 ],
                "ibge" => 3120508
            ]),
            "3120607" => new Map([
                "name" => "Crucilândia",
                "cep" => [ 35478000, 35479999 ],
                "ibge" => 3120607
            ]),
            "3120706" => new Map([
                "name" => "Cruzeiro da Fortaleza",
                "cep" => [ 38735000, 38739999 ],
                "ibge" => 3120706
            ]),
            "3120805" => new Map([
                "name" => "Cruzília",
                "cep" => [ 37445000, 37446999 ],
                "ibge" => 3120805
            ]),
            "3120839" => new Map([
                "name" => "Cuparaque",
                "cep" => [ 35246000, 35247999 ],
                "ibge" => 3120839
            ]),
            "3120870" => new Map([
                "name" => "Curral de Dentro",
                "cep" => [ 39569000, 39569999 ],
                "ibge" => 3120870
            ]),
            "3120904" => new Map([
                "name" => "Curvelo",
                "cep" => [ 35789001, 35799999 ],
                "ibge" => 3120904
            ]),
            "3121001" => new Map([
                "name" => "Datas",
                "cep" => [ 39130000, 39134999 ],
                "ibge" => 3121001
            ]),
            "3121100" => new Map([
                "name" => "Delfim Moreira",
                "cep" => [ 37514000, 37515999 ],
                "ibge" => 3121100
            ]),
            "3121209" => new Map([
                "name" => "Delfinópolis",
                "cep" => [ 37910000, 37919999 ],
                "ibge" => 3121209
            ]),
            "3121258" => new Map([
                "name" => "Delta",
                "cep" => [ 38108000, 38109999 ],
                "ibge" => 3121258
            ]),
            "3121308" => new Map([
                "name" => "Descoberto",
                "cep" => [ 36690000, 36699999 ],
                "ibge" => 3121308
            ]),
            "3121407" => new Map([
                "name" => "Desterro de Entre Rios",
                "cep" => [ 35492000, 35494999 ],
                "ibge" => 3121407
            ]),
            "3121506" => new Map([
                "name" => "Desterro do Melo",
                "cep" => [ 36210000, 36211999 ],
                "ibge" => 3121506
            ]),
            "3121605" => new Map([
                "name" => "Diamantina",
                "cep" => [ 39100000, 39119999 ],
                "ibge" => 3121605
            ]),
            "3121704" => new Map([
                "name" => "Diogo de Vasconcelos",
                "cep" => [ 35437000, 35437999 ],
                "ibge" => 3121704
            ]),
            "3121803" => new Map([
                "name" => "Dionísio",
                "cep" => [ 35984000, 35985999 ],
                "ibge" => 3121803
            ]),
            "3121902" => new Map([
                "name" => "Divinésia",
                "cep" => [ 36546000, 36549999 ],
                "ibge" => 3121902
            ]),
            "3122009" => new Map([
                "name" => "Divino",
                "cep" => [ 36820000, 36827999 ],
                "ibge" => 3122009
            ]),
            "3122108" => new Map([
                "name" => "Divino das Laranjeiras",
                "cep" => [ 35265000, 35269999 ],
                "ibge" => 3122108
            ]),
            "3122207" => new Map([
                "name" => "Divinolândia de Minas",
                "cep" => [ 39735000, 39739999 ],
                "ibge" => 3122207
            ]),
            "3122306" => new Map([
                "name" => "Divinópolis",
                "cep" => [ 35500001, 35516999 ],
                "ibge" => 3122306
            ]),
            "3122355" => new Map([
                "name" => "Divisa Alegre",
                "cep" => [ 39995000, 39997999 ],
                "ibge" => 3122355
            ]),
            "3122405" => new Map([
                "name" => "Divisa Nova",
                "cep" => [ 37142000, 37142999 ],
                "ibge" => 3122405
            ]),
            "3122454" => new Map([
                "name" => "Divisópolis",
                "cep" => [ 39912000, 39914999 ],
                "ibge" => 3122454
            ]),
            "3122470" => new Map([
                "name" => "Dom Bosco",
                "cep" => [ 38654000, 38657999 ],
                "ibge" => 3122470
            ]),
            "3122504" => new Map([
                "name" => "Dom Cavati",
                "cep" => [ 35148000, 35149999 ],
                "ibge" => 3122504
            ]),
            "3122603" => new Map([
                "name" => "Dom Joaquim",
                "cep" => [ 35865000, 35874999 ],
                "ibge" => 3122603
            ]),
            "3122702" => new Map([
                "name" => "Dom Silvério",
                "cep" => [ 35440000, 35440999 ],
                "ibge" => 3122702
            ]),
            "3122801" => new Map([
                "name" => "Dom Viçoso",
                "cep" => [ 37474000, 37475999 ],
                "ibge" => 3122801
            ]),
            "3122900" => new Map([
                "name" => "Dona Euzébia",
                "cep" => [ 36784000, 36787999 ],
                "ibge" => 3122900
            ]),
            "3123007" => new Map([
                "name" => "Dores de Campos",
                "cep" => [ 36213000, 36214999 ],
                "ibge" => 3123007
            ]),
            "3123106" => new Map([
                "name" => "Dores de Guanhães",
                "cep" => [ 35894000, 35899999 ],
                "ibge" => 3123106
            ]),
            "3123205" => new Map([
                "name" => "Dores do Indaiá",
                "cep" => [ 35610000, 35612999 ],
                "ibge" => 3123205
            ]),
            "3123304" => new Map([
                "name" => "Dores do Turvo",
                "cep" => [ 36513000, 36514999 ],
                "ibge" => 3123304
            ]),
            "3123403" => new Map([
                "name" => "Doresópolis",
                "cep" => [ 37926000, 37926999 ],
                "ibge" => 3123403
            ]),
            "3123502" => new Map([
                "name" => "Douradoquara",
                "cep" => [ 38530000, 38539999 ],
                "ibge" => 3123502
            ]),
            "3123528" => new Map([
                "name" => "Durandé",
                "cep" => [ 36974000, 36975799 ],
                "ibge" => 3123528
            ]),
            "3123601" => new Map([
                "name" => "Elói Mendes",
                "cep" => [ 37110000, 37114999 ],
                "ibge" => 3123601
            ]),
            "3123700" => new Map([
                "name" => "Engenheiro Caldas",
                "cep" => [ 35130000, 35134999 ],
                "ibge" => 3123700
            ]),
            "3123809" => new Map([
                "name" => "Engenheiro Navarro",
                "cep" => [ 39363000, 39364999 ],
                "ibge" => 3123809
            ]),
            "3123858" => new Map([
                "name" => "Entre Folhas",
                "cep" => [ 35324000, 35324999 ],
                "ibge" => 3123858
            ]),
            "3123908" => new Map([
                "name" => "Entre Rios de Minas",
                "cep" => [ 35490000, 35491999 ],
                "ibge" => 3123908
            ]),
            "3124005" => new Map([
                "name" => "Ervália",
                "cep" => [ 36555000, 36559999 ],
                "ibge" => 3124005
            ]),
            "3124104" => new Map([
                "name" => "Esmeraldas",
                "cep" => [ 32800000, 32824999 ],
                "ibge" => 3124104
            ]),
            "3124203" => new Map([
                "name" => "Espera Feliz",
                "cep" => [ 36830000, 36831999 ],
                "ibge" => 3124203
            ]),
            "3124302" => new Map([
                "name" => "Espinosa",
                "cep" => [ 39510000, 39515999 ],
                "ibge" => 3124302
            ]),
            "3124401" => new Map([
                "name" => "Espírito Santo do Dourado",
                "cep" => [ 37566000, 37566999 ],
                "ibge" => 3124401
            ]),
            "3124500" => new Map([
                "name" => "Estiva",
                "cep" => [ 37542000, 37544999 ],
                "ibge" => 3124500
            ]),
            "3124609" => new Map([
                "name" => "Estrela Dalva",
                "cep" => [ 36725000, 36729999 ],
                "ibge" => 3124609
            ]),
            "3124708" => new Map([
                "name" => "Estrela do Indaiá",
                "cep" => [ 35613000, 35616999 ],
                "ibge" => 3124708
            ]),
            "3124807" => new Map([
                "name" => "Estrela do Sul",
                "cep" => [ 38525000, 38529999 ],
                "ibge" => 3124807
            ]),
            "3124906" => new Map([
                "name" => "Eugenópolis",
                "cep" => [ 36855000, 36859999 ],
                "ibge" => 3124906
            ]),
            "3125002" => new Map([
                "name" => "Ewbank da Câmara",
                "cep" => [ 36108000, 36109999 ],
                "ibge" => 3125002
            ]),
            "3125101" => new Map([
                "name" => "Extrema",
                "cep" => [ 37640000, 37649999 ],
                "ibge" => 3125101
            ]),
            "3125200" => new Map([
                "name" => "Fama",
                "cep" => [ 37144000, 37144999 ],
                "ibge" => 3125200
            ]),
            "3125309" => new Map([
                "name" => "Faria Lemos",
                "cep" => [ 36840000, 36843999 ],
                "ibge" => 3125309
            ]),
            "3125408" => new Map([
                "name" => "Felício dos Santos",
                "cep" => [ 39180000, 39184999 ],
                "ibge" => 3125408
            ]),
            "3125606" => new Map([
                "name" => "Felisburgo",
                "cep" => [ 39895000, 39899999 ],
                "ibge" => 3125606
            ]),
            "3125705" => new Map([
                "name" => "Felixlândia",
                "cep" => [ 39237000, 39239999 ],
                "ibge" => 3125705
            ]),
            "3125804" => new Map([
                "name" => "Fernandes Tourinho",
                "cep" => [ 35135000, 35137999 ],
                "ibge" => 3125804
            ]),
            "3125903" => new Map([
                "name" => "Ferros",
                "cep" => [ 35800000, 35809999 ],
                "ibge" => 3125903
            ]),
            "3125952" => new Map([
                "name" => "Fervedouro",
                "cep" => [ 36815000, 36819999 ],
                "ibge" => 3125952
            ]),
            "3126000" => new Map([
                "name" => "Florestal",
                "cep" => [ 35690000, 35693999 ],
                "ibge" => 3126000
            ]),
            "3126109" => new Map([
                "name" => "Formiga",
                "cep" => [ 35570001, 35579999 ],
                "ibge" => 3126109
            ]),
            "3126208" => new Map([
                "name" => "Formoso",
                "cep" => [ 38690000, 38699999 ],
                "ibge" => 3126208
            ]),
            "3126307" => new Map([
                "name" => "Fortaleza de Minas",
                "cep" => [ 37905000, 37909999 ],
                "ibge" => 3126307
            ]),
            "3126406" => new Map([
                "name" => "Fortuna de Minas",
                "cep" => [ 35760000, 35762999 ],
                "ibge" => 3126406
            ]),
            "3126505" => new Map([
                "name" => "Francisco Badaró",
                "cep" => [ 39644000, 39644999 ],
                "ibge" => 3126505
            ]),
            "3126604" => new Map([
                "name" => "Francisco Dumont",
                "cep" => [ 39387000, 39389999 ],
                "ibge" => 3126604
            ]),
            "3126703" => new Map([
                "name" => "Francisco Sá",
                "cep" => [ 39580000, 39589999 ],
                "ibge" => 3126703
            ]),
            "3126752" => new Map([
                "name" => "Franciscópolis",
                "cep" => [ 39695000, 39699999 ],
                "ibge" => 3126752
            ]),
            "3126802" => new Map([
                "name" => "Frei Gaspar",
                "cep" => [ 39840000, 39847999 ],
                "ibge" => 3126802
            ]),
            "3126901" => new Map([
                "name" => "Frei Inocêncio",
                "cep" => [ 35112000, 35112999 ],
                "ibge" => 3126901
            ]),
            "3126950" => new Map([
                "name" => "Frei Lagonegro",
                "cep" => [ 39708000, 39709999 ],
                "ibge" => 3126950
            ]),
            "3127008" => new Map([
                "name" => "Fronteira",
                "cep" => [ 38230000, 38239999 ],
                "ibge" => 3127008
            ]),
            "3127057" => new Map([
                "name" => "Fronteira dos Vales",
                "cep" => [ 39870000, 39872999 ],
                "ibge" => 3127057
            ]),
            "3127073" => new Map([
                "name" => "Fruta de Leite",
                "cep" => [ 39558000, 39559999 ],
                "ibge" => 3127073
            ]),
            "3127107" => new Map([
                "name" => "Frutal",
                "cep" => [ 38200001, 38209999 ],
                "ibge" => 3127107
            ]),
            "3127206" => new Map([
                "name" => "Funilândia",
                "cep" => [ 35736000, 35737999 ],
                "ibge" => 3127206
            ]),
            "3127305" => new Map([
                "name" => "Galiléia",
                "cep" => [ 35250000, 35257999 ],
                "ibge" => 3127305
            ]),
            "3127339" => new Map([
                "name" => "Gameleiras",
                "cep" => [ 39505000, 39507999 ],
                "ibge" => 3127339
            ]),
            "3127354" => new Map([
                "name" => "Glaucilândia",
                "cep" => [ 39592000, 39593999 ],
                "ibge" => 3127354
            ]),
            "3127370" => new Map([
                "name" => "Goiabeira",
                "cep" => [ 35248000, 35248999 ],
                "ibge" => 3127370
            ]),
            "3127388" => new Map([
                "name" => "Goianá",
                "cep" => [ 36152000, 36154999 ],
                "ibge" => 3127388
            ]),
            "3127404" => new Map([
                "name" => "Gonçalves",
                "cep" => [ 37680000, 37689999 ],
                "ibge" => 3127404
            ]),
            "3127503" => new Map([
                "name" => "Gonzaga",
                "cep" => [ 39720000, 39722999 ],
                "ibge" => 3127503
            ]),
            "3127602" => new Map([
                "name" => "Gouveia",
                "cep" => [ 39120000, 39129999 ],
                "ibge" => 3127602
            ]),
            "3127701" => new Map([
                "name" => "Governador Valadares",
                "cep" => [ 35000001, 35109999 ],
                "ibge" => 3127701
            ]),
            "3127800" => new Map([
                "name" => "Grão Mogol",
                "cep" => [ 39570000, 39572999 ],
                "ibge" => 3127800
            ]),
            "3127909" => new Map([
                "name" => "Grupiara",
                "cep" => [ 38470000, 38474999 ],
                "ibge" => 3127909
            ]),
            "3128006" => new Map([
                "name" => "Guanhães",
                "cep" => [ 39740000, 39744999 ],
                "ibge" => 3128006
            ]),
            "3128105" => new Map([
                "name" => "Guapé",
                "cep" => [ 37177000, 37189999 ],
                "ibge" => 3128105
            ]),
            "3128204" => new Map([
                "name" => "Guaraciaba",
                "cep" => [ 35436000, 35436999 ],
                "ibge" => 3128204
            ]),
            "3128253" => new Map([
                "name" => "Guaraciama",
                "cep" => [ 39397000, 39397999 ],
                "ibge" => 3128253
            ]),
            "3128303" => new Map([
                "name" => "Guaranésia",
                "cep" => [ 37810000, 37819999 ],
                "ibge" => 3128303
            ]),
            "3128402" => new Map([
                "name" => "Guarani",
                "cep" => [ 36160000, 36164999 ],
                "ibge" => 3128402
            ]),
            "3128501" => new Map([
                "name" => "Guarará",
                "cep" => [ 36606000, 36607999 ],
                "ibge" => 3128501
            ]),
            "3128600" => new Map([
                "name" => "Guarda-Mor",
                "cep" => [ 38570000, 38599999 ],
                "ibge" => 3128600
            ]),
            "3128709" => new Map([
                "name" => "Guaxupé",
                "cep" => [ [     37800000,     37804999 ], [     37830000,     37837999 ] ],
                "ibge" => 3128709
            ]),
            "3128808" => new Map([
                "name" => "Guidoval",
                "cep" => [ 36515000, 36519999 ],
                "ibge" => 3128808
            ]),
            "3128907" => new Map([
                "name" => "Guimarânia",
                "cep" => [ 38730000, 38734999 ],
                "ibge" => 3128907
            ]),
            "3129004" => new Map([
                "name" => "Guiricema",
                "cep" => [ 36525000, 36529999 ],
                "ibge" => 3129004
            ]),
            "3129103" => new Map([
                "name" => "Gurinhatã",
                "cep" => [ 38310000, 38319999 ],
                "ibge" => 3129103
            ]),
            "3129202" => new Map([
                "name" => "Heliodora",
                "cep" => [ 37484000, 37484999 ],
                "ibge" => 3129202
            ]),
            "3129301" => new Map([
                "name" => "Iapu",
                "cep" => [ 35190000, 35192999 ],
                "ibge" => 3129301
            ]),
            "3129400" => new Map([
                "name" => "Ibertioga",
                "cep" => [ 36225000, 36226999 ],
                "ibge" => 3129400
            ]),
            "3129509" => new Map([
                "name" => "Ibiá",
                "cep" => [ 38950000, 38959999 ],
                "ibge" => 3129509
            ]),
            "3129608" => new Map([
                "name" => "Ibiaí",
                "cep" => [ 39350000, 39354999 ],
                "ibge" => 3129608
            ]),
            "3129657" => new Map([
                "name" => "Ibiracatu",
                "cep" => [ 39455000, 39457999 ],
                "ibge" => 3129657
            ]),
            "3129707" => new Map([
                "name" => "Ibiraci",
                "cep" => [ 37990000, 37992999 ],
                "ibge" => 3129707
            ]),
            "3129806" => new Map([
                "name" => "Ibirité",
                "cep" => [ 32400001, 32449999 ],
                "ibge" => 3129806
            ]),
            "3129905" => new Map([
                "name" => "Ibitiúra de Minas",
                "cep" => [ 37790000, 37794999 ],
                "ibge" => 3129905
            ]),
            "3130002" => new Map([
                "name" => "Ibituruna",
                "cep" => [ 37223000, 37224999 ],
                "ibge" => 3130002
            ]),
            "3130051" => new Map([
                "name" => "Icaraí de Minas",
                "cep" => [ 39318000, 39319999 ],
                "ibge" => 3130051
            ]),
            "3130101" => new Map([
                "name" => "Igarapé",
                "cep" => [ 32900000, 32919999 ],
                "ibge" => 3130101
            ]),
            "3130200" => new Map([
                "name" => "Igaratinga",
                "cep" => [ 35695000, 35699999 ],
                "ibge" => 3130200
            ]),
            "3130309" => new Map([
                "name" => "Iguatama",
                "cep" => [ 38910000, 38929999 ],
                "ibge" => 3130309
            ]),
            "3130408" => new Map([
                "name" => "Ijaci",
                "cep" => [ 37218000, 37219999 ],
                "ibge" => 3130408
            ]),
            "3130507" => new Map([
                "name" => "Ilicínea",
                "cep" => [ 37175000, 37176999 ],
                "ibge" => 3130507
            ]),
            "3130556" => new Map([
                "name" => "Imbé de Minas",
                "cep" => [ 35323000, 35323999 ],
                "ibge" => 3130556
            ]),
            "3130606" => new Map([
                "name" => "Inconfidentes",
                "cep" => [ 37576000, 37577999 ],
                "ibge" => 3130606
            ]),
            "3130655" => new Map([
                "name" => "Indaiabira",
                "cep" => [ 39536000, 39537999 ],
                "ibge" => 3130655
            ]),
            "3130705" => new Map([
                "name" => "Indianópolis",
                "cep" => [ 38490000, 38499999 ],
                "ibge" => 3130705
            ]),
            "3130804" => new Map([
                "name" => "Ingaí",
                "cep" => [ 37215000, 37217999 ],
                "ibge" => 3130804
            ]),
            "3130903" => new Map([
                "name" => "Inhapim",
                "cep" => [ 35330000, 35333999 ],
                "ibge" => 3130903
            ]),
            "3131000" => new Map([
                "name" => "Inhaúma",
                "cep" => [ 35763000, 35764999 ],
                "ibge" => 3131000
            ]),
            "3131109" => new Map([
                "name" => "Inimutaba",
                "cep" => [ 39243000, 39244999 ],
                "ibge" => 3131109
            ]),
            "3131158" => new Map([
                "name" => "Ipaba",
                "cep" => [ 35198000, 35198999 ],
                "ibge" => 3131158
            ]),
            "3131208" => new Map([
                "name" => "Ipanema",
                "cep" => [ 36950000, 36952999 ],
                "ibge" => 3131208
            ]),
            "3131307" => new Map([
                "name" => "Ipatinga",
                "cep" => [ 35150001, 35169999 ],
                "ibge" => 3131307
            ]),
            "3131406" => new Map([
                "name" => "Ipiaçu",
                "cep" => [ 38350000, 38359999 ],
                "ibge" => 3131406
            ]),
            "3131505" => new Map([
                "name" => "Ipuiúna",
                "cep" => [ [     37588000,     37588999 ], [     37825000,     37829999 ] ],
                "ibge" => 3131505
            ]),
            "3131604" => new Map([
                "name" => "Iraí de Minas",
                "cep" => [ 38510000, 38519999 ],
                "ibge" => 3131604
            ]),
            "3131703" => new Map([
                "name" => "Itabira",
                "cep" => [ 35900001, 35907999 ],
                "ibge" => 3131703
            ]),
            "3131802" => new Map([
                "name" => "Itabirinha",
                "cep" => [ 35280000, 35289999 ],
                "ibge" => 3131802
            ]),
            "3131901" => new Map([
                "name" => "Itabirito",
                "cep" => [ 35450001, 35459999 ],
                "ibge" => 3131901
            ]),
            "3132008" => new Map([
                "name" => "Itacambira",
                "cep" => [ 39594000, 39594999 ],
                "ibge" => 3132008
            ]),
            "3132107" => new Map([
                "name" => "Itacarambi",
                "cep" => [ 39470000, 39471999 ],
                "ibge" => 3132107
            ]),
            "3132206" => new Map([
                "name" => "Itaguara",
                "cep" => [ 35488000, 35489999 ],
                "ibge" => 3132206
            ]),
            "3132305" => new Map([
                "name" => "Itaipé",
                "cep" => [ 39815000, 39815999 ],
                "ibge" => 3132305
            ]),
            "3132404" => new Map([
                "name" => "Itajubá",
                "cep" => [ 37500001, 37507999 ],
                "ibge" => 3132404
            ]),
            "3132503" => new Map([
                "name" => "Itamarandiba",
                "cep" => [ 39670000, 39677999 ],
                "ibge" => 3132503
            ]),
            "3132602" => new Map([
                "name" => "Itamarati de Minas",
                "cep" => [ 36788000, 36789999 ],
                "ibge" => 3132602
            ]),
            "3132701" => new Map([
                "name" => "Itambacuri",
                "cep" => [ 39830000, 39834999 ],
                "ibge" => 3132701
            ]),
            "3132800" => new Map([
                "name" => "Itambé do Mato Dentro",
                "cep" => [ 35820000, 35829999 ],
                "ibge" => 3132800
            ]),
            "3132909" => new Map([
                "name" => "Itamogi",
                "cep" => [ 37973000, 37974999 ],
                "ibge" => 3132909
            ]),
            "3133006" => new Map([
                "name" => "Itamonte",
                "cep" => [ 37466000, 37466999 ],
                "ibge" => 3133006
            ]),
            "3133105" => new Map([
                "name" => "Itanhandu",
                "cep" => [ 37464000, 37464999 ],
                "ibge" => 3133105
            ]),
            "3133204" => new Map([
                "name" => "Itanhomi",
                "cep" => [ 35120000, 35122999 ],
                "ibge" => 3133204
            ]),
            "3133303" => new Map([
                "name" => "Itaobim",
                "cep" => [ 39625000, 39627999 ],
                "ibge" => 3133303
            ]),
            "3133402" => new Map([
                "name" => "Itapagipe",
                "cep" => [ 38240000, 38249999 ],
                "ibge" => 3133402
            ]),
            "3133501" => new Map([
                "name" => "Itapecerica",
                "cep" => [ 35550000, 35554999 ],
                "ibge" => 3133501
            ]),
            "3133600" => new Map([
                "name" => "Itapeva",
                "cep" => [ 37655000, 37659999 ],
                "ibge" => 3133600
            ]),
            "3133709" => new Map([
                "name" => "Itatiaiuçu",
                "cep" => [ 35685000, 35689999 ],
                "ibge" => 3133709
            ]),
            "3133758" => new Map([
                "name" => "Itaú de Minas",
                "cep" => [ 37975000, 37979999 ],
                "ibge" => 3133758
            ]),
            "3133808" => new Map([
                "name" => "Itaúna",
                "cep" => [ 35680001, 35684999 ],
                "ibge" => 3133808
            ]),
            "3133907" => new Map([
                "name" => "Itaverava",
                "cep" => [ 36440000, 36449999 ],
                "ibge" => 3133907
            ]),
            "3134004" => new Map([
                "name" => "Itinga",
                "cep" => [ 39610000, 39614999 ],
                "ibge" => 3134004
            ]),
            "3134103" => new Map([
                "name" => "Itueta",
                "cep" => [ 35220000, 35224999 ],
                "ibge" => 3134103
            ]),
            "3134202" => new Map([
                "name" => "Ituiutaba",
                "cep" => [ 38300001, 38309999 ],
                "ibge" => 3134202
            ]),
            "3134301" => new Map([
                "name" => "Itumirim",
                "cep" => [ 37210000, 37214999 ],
                "ibge" => 3134301
            ]),
            "3134400" => new Map([
                "name" => "Iturama",
                "cep" => [ 38280000, 38287999 ],
                "ibge" => 3134400
            ]),
            "3134509" => new Map([
                "name" => "Itutinga",
                "cep" => [ 36390000, 36399999 ],
                "ibge" => 3134509
            ]),
            "3134608" => new Map([
                "name" => "Jaboticatubas",
                "cep" => [ 35830000, 35844999 ],
                "ibge" => 3134608
            ]),
            "3134707" => new Map([
                "name" => "Jacinto",
                "cep" => [ 39930000, 39934999 ],
                "ibge" => 3134707
            ]),
            "3134806" => new Map([
                "name" => "Jacuí",
                "cep" => [ 37965000, 37967999 ],
                "ibge" => 3134806
            ]),
            "3134905" => new Map([
                "name" => "Jacutinga",
                "cep" => [ 37590000, 37595999 ],
                "ibge" => 3134905
            ]),
            "3135001" => new Map([
                "name" => "Jaguaraçu",
                "cep" => [ 35188000, 35188999 ],
                "ibge" => 3135001
            ]),
            "3135050" => new Map([
                "name" => "Jaíba",
                "cep" => [ 39508000, 39509999 ],
                "ibge" => 3135050
            ]),
            "3135076" => new Map([
                "name" => "Jampruca",
                "cep" => [ 39837000, 39839999 ],
                "ibge" => 3135076
            ]),
            "3135100" => new Map([
                "name" => "Janaúba",
                "cep" => [ 39440001, 39449999 ],
                "ibge" => 3135100
            ]),
            "3135209" => new Map([
                "name" => "Januária",
                "cep" => [ 39480000, 39488999 ],
                "ibge" => 3135209
            ]),
            "3135308" => new Map([
                "name" => "Japaraíba",
                "cep" => [ 35580000, 35581999 ],
                "ibge" => 3135308
            ]),
            "3135357" => new Map([
                "name" => "Japonvar",
                "cep" => [ 39335000, 39335999 ],
                "ibge" => 3135357
            ]),
            "3135407" => new Map([
                "name" => "Jeceaba",
                "cep" => [ 35497000, 35499999 ],
                "ibge" => 3135407
            ]),
            "3135456" => new Map([
                "name" => "Jenipapo de Minas",
                "cep" => [ 39645000, 39647999 ],
                "ibge" => 3135456
            ]),
            "3135506" => new Map([
                "name" => "Jequeri",
                "cep" => [ 35390000, 35399999 ],
                "ibge" => 3135506
            ]),
            "3135605" => new Map([
                "name" => "Jequitaí",
                "cep" => [ 39370000, 39372999 ],
                "ibge" => 3135605
            ]),
            "3135704" => new Map([
                "name" => "Jequitibá",
                "cep" => [ 35767000, 35769999 ],
                "ibge" => 3135704
            ]),
            "3135803" => new Map([
                "name" => "Jequitinhonha",
                "cep" => [ 39960000, 39969999 ],
                "ibge" => 3135803
            ]),
            "3135902" => new Map([
                "name" => "Jesuânia",
                "cep" => [ 37485000, 37487999 ],
                "ibge" => 3135902
            ]),
            "3136009" => new Map([
                "name" => "Joaíma",
                "cep" => [ 39890000, 39892999 ],
                "ibge" => 3136009
            ]),
            "3136108" => new Map([
                "name" => "Joanésia",
                "cep" => [ 35194000, 35194999 ],
                "ibge" => 3136108
            ]),
            "3136207" => new Map([
                "name" => "João Monlevade",
                "cep" => [ 35930001, 35934999 ],
                "ibge" => 3136207
            ]),
            "3136306" => new Map([
                "name" => "João Pinheiro",
                "cep" => [ 38770000, 38778999 ],
                "ibge" => 3136306
            ]),
            "3136405" => new Map([
                "name" => "Joaquim Felício",
                "cep" => [ 39240000, 39242999 ],
                "ibge" => 3136405
            ]),
            "3136504" => new Map([
                "name" => "Jordânia",
                "cep" => [ 39920000, 39924999 ],
                "ibge" => 3136504
            ]),
            "3136520" => new Map([
                "name" => "José Gonçalves de Minas",
                "cep" => [ 39642000, 39643999 ],
                "ibge" => 3136520
            ]),
            "3136553" => new Map([
                "name" => "José Raydan",
                "cep" => [ 39775000, 39779999 ],
                "ibge" => 3136553
            ]),
            "3136579" => new Map([
                "name" => "Josenópolis",
                "cep" => [ 39575000, 39579999 ],
                "ibge" => 3136579
            ]),
            "3136652" => new Map([
                "name" => "Juatuba",
                "cep" => [ 35675000, 35679999 ],
                "ibge" => 3136652
            ]),
            "3136702" => new Map([
                "name" => "Juiz de Fora",
                "cep" => [ 36000001, 36107999 ],
                "ibge" => 3136702
            ]),
            "3136801" => new Map([
                "name" => "Juramento",
                "cep" => [ 39590000, 39591999 ],
                "ibge" => 3136801
            ]),
            "3136900" => new Map([
                "name" => "Juruaia",
                "cep" => [ 37805000, 37809999 ],
                "ibge" => 3136900
            ]),
            "3136959" => new Map([
                "name" => "Juvenília",
                "cep" => [ 39467000, 39469999 ],
                "ibge" => 3136959
            ]),
            "3137007" => new Map([
                "name" => "Ladainha",
                "cep" => [ 39825000, 39826999 ],
                "ibge" => 3137007
            ]),
            "3137106" => new Map([
                "name" => "Lagamar",
                "cep" => [ 38785000, 38789999 ],
                "ibge" => 3137106
            ]),
            "3137205" => new Map([
                "name" => "Lagoa da Prata",
                "cep" => [ 35590001, 35594999 ],
                "ibge" => 3137205
            ]),
            "3137304" => new Map([
                "name" => "Lagoa dos Patos",
                "cep" => [ 39360000, 39362999 ],
                "ibge" => 3137304
            ]),
            "3137403" => new Map([
                "name" => "Lagoa Dourada",
                "cep" => [ 36345000, 36349999 ],
                "ibge" => 3137403
            ]),
            "3137502" => new Map([
                "name" => "Lagoa Formosa",
                "cep" => [ 38720000, 38729999 ],
                "ibge" => 3137502
            ]),
            "3137536" => new Map([
                "name" => "Lagoa Grande",
                "cep" => [ 38755000, 38759999 ],
                "ibge" => 3137536
            ]),
            "3137601" => new Map([
                "name" => "Lagoa Santa",
                "cep" => [ 33230001, 33249999 ],
                "ibge" => 3137601
            ]),
            "3137700" => new Map([
                "name" => "Lajinha",
                "cep" => [ 36980000, 36984999 ],
                "ibge" => 3137700
            ]),
            "3137809" => new Map([
                "name" => "Lambari",
                "cep" => [ 37480000, 37483999 ],
                "ibge" => 3137809
            ]),
            "3137908" => new Map([
                "name" => "Lamim",
                "cep" => [ 36455000, 36459999 ],
                "ibge" => 3137908
            ]),
            "3138005" => new Map([
                "name" => "Laranjal",
                "cep" => [ 36760000, 36769999 ],
                "ibge" => 3138005
            ]),
            "3138104" => new Map([
                "name" => "Lassance",
                "cep" => [ 39250000, 39259999 ],
                "ibge" => 3138104
            ]),
            "3138203" => new Map([
                "name" => "Lavras",
                "cep" => [ 37200001, 37209999 ],
                "ibge" => 3138203
            ]),
            "3138302" => new Map([
                "name" => "Leandro Ferreira",
                "cep" => [ 35657000, 35659999 ],
                "ibge" => 3138302
            ]),
            "3138351" => new Map([
                "name" => "Leme do Prado",
                "cep" => [ 39655000, 39659999 ],
                "ibge" => 3138351
            ]),
            "3138401" => new Map([
                "name" => "Leopoldina",
                "cep" => [ 36700001, 36709999 ],
                "ibge" => 3138401
            ]),
            "3138500" => new Map([
                "name" => "Liberdade",
                "cep" => [ 37350000, 37359999 ],
                "ibge" => 3138500
            ]),
            "3138609" => new Map([
                "name" => "Lima Duarte",
                "cep" => [ 36140000, 36144999 ],
                "ibge" => 3138609
            ]),
            "3138625" => new Map([
                "name" => "Limeira do Oeste",
                "cep" => [ 38295000, 38299999 ],
                "ibge" => 3138625
            ]),
            "3138658" => new Map([
                "name" => "Lontra",
                "cep" => [ 39437000, 39439999 ],
                "ibge" => 3138658
            ]),
            "3138674" => new Map([
                "name" => "Luisburgo",
                "cep" => [ 36923000, 36924999 ],
                "ibge" => 3138674
            ]),
            "3138682" => new Map([
                "name" => "Luislândia",
                "cep" => [ 39336000, 39337999 ],
                "ibge" => 3138682
            ]),
            "3138708" => new Map([
                "name" => "Luminárias",
                "cep" => [ 37240000, 37244999 ],
                "ibge" => 3138708
            ]),
            "3138807" => new Map([
                "name" => "Luz",
                "cep" => [ 35595000, 35597999 ],
                "ibge" => 3138807
            ]),
            "3138906" => new Map([
                "name" => "Machacalis",
                "cep" => [ 39873000, 39873999 ],
                "ibge" => 3138906
            ]),
            "3139003" => new Map([
                "name" => "Machado",
                "cep" => [ 37750000, 37756999 ],
                "ibge" => 3139003
            ]),
            "3139102" => new Map([
                "name" => "Madre de Deus de Minas",
                "cep" => [ 37305000, 37309999 ],
                "ibge" => 3139102
            ]),
            "3139201" => new Map([
                "name" => "Malacacheta",
                "cep" => [ 39690000, 39694999 ],
                "ibge" => 3139201
            ]),
            "3139250" => new Map([
                "name" => "Mamonas",
                "cep" => [ 39516000, 39516999 ],
                "ibge" => 3139250
            ]),
            "3139300" => new Map([
                "name" => "Manga",
                "cep" => [ 39460000, 39464999 ],
                "ibge" => 3139300
            ]),
            "3139409" => new Map([
                "name" => "Manhuaçu",
                "cep" => [ 36900001, 36912999 ],
                "ibge" => 3139409
            ]),
            "3139508" => new Map([
                "name" => "Manhumirim",
                "cep" => [ 36970000, 36971999 ],
                "ibge" => 3139508
            ]),
            "3139607" => new Map([
                "name" => "Mantena",
                "cep" => [ 35290000, 35297999 ],
                "ibge" => 3139607
            ]),
            "3139805" => new Map([
                "name" => "Mar de Espanha",
                "cep" => [ 36640000, 36649999 ],
                "ibge" => 3139805
            ]),
            "3139706" => new Map([
                "name" => "Maravilhas",
                "cep" => [ 35666000, 35666999 ],
                "ibge" => 3139706
            ]),
            "3139904" => new Map([
                "name" => "Maria da Fé",
                "cep" => [ 37517000, 37519999 ],
                "ibge" => 3139904
            ]),
            "3140001" => new Map([
                "name" => "Mariana",
                "cep" => [ 35420001, 35429999 ],
                "ibge" => 3140001
            ]),
            "3140100" => new Map([
                "name" => "Marilac",
                "cep" => [ 35115000, 35115999 ],
                "ibge" => 3140100
            ]),
            "3140159" => new Map([
                "name" => "Mário Campos",
                "cep" => [ 32470000, 32479999 ],
                "ibge" => 3140159
            ]),
            "3140209" => new Map([
                "name" => "Maripá de Minas",
                "cep" => [ 36608000, 36609999 ],
                "ibge" => 3140209
            ]),
            "3140308" => new Map([
                "name" => "Marliéria",
                "cep" => [ 35185000, 35187999 ],
                "ibge" => 3140308
            ]),
            "3140407" => new Map([
                "name" => "Marmelópolis",
                "cep" => [ 37516000, 37516999 ],
                "ibge" => 3140407
            ]),
            "3140506" => new Map([
                "name" => "Martinho Campos",
                "cep" => [ 35606000, 35609999 ],
                "ibge" => 3140506
            ]),
            "3140530" => new Map([
                "name" => "Martins Soares",
                "cep" => [ 36972000, 36973999 ],
                "ibge" => 3140530
            ]),
            "3140555" => new Map([
                "name" => "Mata Verde",
                "cep" => [ 39915000, 39916999 ],
                "ibge" => 3140555
            ]),
            "3140605" => new Map([
                "name" => "Materlândia",
                "cep" => [ 39755000, 39764999 ],
                "ibge" => 3140605
            ]),
            "3140704" => new Map([
                "name" => "Mateus Leme",
                "cep" => [ 35670000, 35674999 ],
                "ibge" => 3140704
            ]),
            "3171501" => new Map([
                "name" => "Mathias Lobato",
                "cep" => [ 35110000, 35111999 ],
                "ibge" => 3171501
            ]),
            "3140803" => new Map([
                "name" => "Matias Barbosa",
                "cep" => [ 36120000, 36122999 ],
                "ibge" => 3140803
            ]),
            "3140852" => new Map([
                "name" => "Matias Cardoso",
                "cep" => [ 39478000, 39479999 ],
                "ibge" => 3140852
            ]),
            "3140902" => new Map([
                "name" => "Matipó",
                "cep" => [ 35367000, 35367999 ],
                "ibge" => 3140902
            ]),
            "3141009" => new Map([
                "name" => "Mato Verde",
                "cep" => [ 39527000, 39528999 ],
                "ibge" => 3141009
            ]),
            "3141108" => new Map([
                "name" => "Matozinhos",
                "cep" => [ 35720000, 35729999 ],
                "ibge" => 3141108
            ]),
            "3141207" => new Map([
                "name" => "Matutina",
                "cep" => [ 38870000, 38879999 ],
                "ibge" => 3141207
            ]),
            "3141306" => new Map([
                "name" => "Medeiros",
                "cep" => [ 38930000, 38949999 ],
                "ibge" => 3141306
            ]),
            "3141405" => new Map([
                "name" => "Medina",
                "cep" => [ 39620000, 39624999 ],
                "ibge" => 3141405
            ]),
            "3141504" => new Map([
                "name" => "Mendes Pimentel",
                "cep" => [ 35270000, 35274999 ],
                "ibge" => 3141504
            ]),
            "3141603" => new Map([
                "name" => "Mercês",
                "cep" => [ 36190000, 36194999 ],
                "ibge" => 3141603
            ]),
            "3141702" => new Map([
                "name" => "Mesquita",
                "cep" => [ 35116000, 35116999 ],
                "ibge" => 3141702
            ]),
            "3141801" => new Map([
                "name" => "Minas Novas",
                "cep" => [ 39650000, 39654999 ],
                "ibge" => 3141801
            ]),
            "3141900" => new Map([
                "name" => "Minduri",
                "cep" => [ 37447000, 37449999 ],
                "ibge" => 3141900
            ]),
            "3142007" => new Map([
                "name" => "Mirabela",
                "cep" => [ 39373000, 39377999 ],
                "ibge" => 3142007
            ]),
            "3142106" => new Map([
                "name" => "Miradouro",
                "cep" => [ 36893000, 36894999 ],
                "ibge" => 3142106
            ]),
            "3142205" => new Map([
                "name" => "Miraí",
                "cep" => [ 36790000, 36792999 ],
                "ibge" => 3142205
            ]),
            "3142254" => new Map([
                "name" => "Miravânia",
                "cep" => [ 39465000, 39466999 ],
                "ibge" => 3142254
            ]),
            "3142304" => new Map([
                "name" => "Moeda",
                "cep" => [ 35470000, 35472999 ],
                "ibge" => 3142304
            ]),
            "3142403" => new Map([
                "name" => "Moema",
                "cep" => [ 35604000, 35605999 ],
                "ibge" => 3142403
            ]),
            "3142502" => new Map([
                "name" => "Monjolos",
                "cep" => [ 39215000, 39218999 ],
                "ibge" => 3142502
            ]),
            "3142601" => new Map([
                "name" => "Monsenhor Paulo",
                "cep" => [ 37405000, 37406999 ],
                "ibge" => 3142601
            ]),
            "3142700" => new Map([
                "name" => "Montalvânia",
                "cep" => [ 39495000, 39499999 ],
                "ibge" => 3142700
            ]),
            "3142809" => new Map([
                "name" => "Monte Alegre de Minas",
                "cep" => [ 38475000, 38479999 ],
                "ibge" => 3142809
            ]),
            "3142908" => new Map([
                "name" => "Monte Azul",
                "cep" => [ 39500000, 39504999 ],
                "ibge" => 3142908
            ]),
            "3143005" => new Map([
                "name" => "Monte Belo",
                "cep" => [ 37115000, 37119999 ],
                "ibge" => 3143005
            ]),
            "3143104" => new Map([
                "name" => "Monte Carmelo",
                "cep" => [ 38500000, 38509999 ],
                "ibge" => 3143104
            ]),
            "3143153" => new Map([
                "name" => "Monte Formoso",
                "cep" => [ 39893000, 39894999 ],
                "ibge" => 3143153
            ]),
            "3143203" => new Map([
                "name" => "Monte Santo de Minas",
                "cep" => [ 37968000, 37969999 ],
                "ibge" => 3143203
            ]),
            "3143401" => new Map([
                "name" => "Monte Sião",
                "cep" => [ 37580000, 37581999 ],
                "ibge" => 3143401
            ]),
            "3143302" => new Map([
                "name" => "Montes Claros",
                "cep" => [ 39400001, 39429999 ],
                "ibge" => 3143302
            ]),
            "3143450" => new Map([
                "name" => "Montezuma",
                "cep" => [ 39547000, 39549999 ],
                "ibge" => 3143450
            ]),
            "3143500" => new Map([
                "name" => "Morada Nova de Minas",
                "cep" => [ 35628000, 35629999 ],
                "ibge" => 3143500
            ]),
            "3143609" => new Map([
                "name" => "Morro da Garça",
                "cep" => [ 39248000, 39249999 ],
                "ibge" => 3143609
            ]),
            "3143708" => new Map([
                "name" => "Morro do Pilar",
                "cep" => [ 35875000, 35877999 ],
                "ibge" => 3143708
            ]),
            "3143807" => new Map([
                "name" => "Munhoz",
                "cep" => [ 37620000, 37629999 ],
                "ibge" => 3143807
            ]),
            "3143906" => new Map([
                "name" => "Muriaé",
                "cep" => [ 36880001, 36892999 ],
                "ibge" => 3143906
            ]),
            "3144003" => new Map([
                "name" => "Mutum",
                "cep" => [ 36955000, 36959999 ],
                "ibge" => 3144003
            ]),
            "3144102" => new Map([
                "name" => "Muzambinho",
                "cep" => [ 37890000, 37899999 ],
                "ibge" => 3144102
            ]),
            "3144201" => new Map([
                "name" => "Nacip Raydan",
                "cep" => [ 39718000, 39719999 ],
                "ibge" => 3144201
            ]),
            "3144300" => new Map([
                "name" => "Nanuque",
                "cep" => [ 39860000, 39863999 ],
                "ibge" => 3144300
            ]),
            "3144359" => new Map([
                "name" => "Naque",
                "cep" => [ 35117000, 35117999 ],
                "ibge" => 3144359
            ]),
            "3144375" => new Map([
                "name" => "Natalândia",
                "cep" => [ 38658000, 38659999 ],
                "ibge" => 3144375
            ]),
            "3144409" => new Map([
                "name" => "Natércia",
                "cep" => [ 37524000, 37526999 ],
                "ibge" => 3144409
            ]),
            "3144508" => new Map([
                "name" => "Nazareno",
                "cep" => [ 36370000, 36389999 ],
                "ibge" => 3144508
            ]),
            "3144607" => new Map([
                "name" => "Nepomuceno",
                "cep" => [ 37250000, 37259999 ],
                "ibge" => 3144607
            ]),
            "3144656" => new Map([
                "name" => "Ninheira",
                "cep" => [ 39553000, 39554999 ],
                "ibge" => 3144656
            ]),
            "3144672" => new Map([
                "name" => "Nova Belém",
                "cep" => [ 35298000, 35299999 ],
                "ibge" => 3144672
            ]),
            "3144706" => new Map([
                "name" => "Nova Era",
                "cep" => [ 35920000, 35929999 ],
                "ibge" => 3144706
            ]),
            "3144805" => new Map([
                "name" => "Nova Lima",
                "cep" => [ 34000001, 34019999 ],
                "ibge" => 3144805
            ]),
            "3144904" => new Map([
                "name" => "Nova Módica",
                "cep" => [ 35113000, 35113999 ],
                "ibge" => 3144904
            ]),
            "3145000" => new Map([
                "name" => "Nova Ponte",
                "cep" => [ 38160000, 38169999 ],
                "ibge" => 3145000
            ]),
            "3145059" => new Map([
                "name" => "Nova Porteirinha",
                "cep" => [ 39525000, 39525999 ],
                "ibge" => 3145059
            ]),
            "3145109" => new Map([
                "name" => "Nova Resende",
                "cep" => [ 37860000, 37879999 ],
                "ibge" => 3145109
            ]),
            "3145208" => new Map([
                "name" => "Nova Serrana",
                "cep" => [ 35520001, 35529999 ],
                "ibge" => 3145208
            ]),
            "3136603" => new Map([
                "name" => "Nova União",
                "cep" => [ 34990000, 34999999 ],
                "ibge" => 3136603
            ]),
            "3145307" => new Map([
                "name" => "Novo Cruzeiro",
                "cep" => [ 39820000, 39824999 ],
                "ibge" => 3145307
            ]),
            "3145356" => new Map([
                "name" => "Novo Oriente de Minas",
                "cep" => [ 39817000, 39817999 ],
                "ibge" => 3145356
            ]),
            "3145372" => new Map([
                "name" => "Novorizonte",
                "cep" => [ 39568000, 39568999 ],
                "ibge" => 3145372
            ]),
            "3145406" => new Map([
                "name" => "Olaria",
                "cep" => [ 36145000, 36145999 ],
                "ibge" => 3145406
            ]),
            "3145455" => new Map([
                "name" => "Olhos D'Água",
                "cep" => [ 39398000, 39399999 ],
                "ibge" => 3145455
            ]),
            "3145505" => new Map([
                "name" => "Olímpio Noronha",
                "cep" => [ 37488000, 37489999 ],
                "ibge" => 3145505
            ]),
            "3145604" => new Map([
                "name" => "Oliveira",
                "cep" => [ 35540000, 35542999 ],
                "ibge" => 3145604
            ]),
            "3145703" => new Map([
                "name" => "Oliveira Fortes",
                "cep" => [ 36250000, 36254999 ],
                "ibge" => 3145703
            ]),
            "3145802" => new Map([
                "name" => "Onça de Pitangui",
                "cep" => [ 35655000, 35656999 ],
                "ibge" => 3145802
            ]),
            "3145851" => new Map([
                "name" => "Oratórios",
                "cep" => [ 35439000, 35439999 ],
                "ibge" => 3145851
            ]),
            "3145877" => new Map([
                "name" => "Orizânia",
                "cep" => [ 36828000, 36829999 ],
                "ibge" => 3145877
            ]),
            "3145901" => new Map([
                "name" => "Ouro Branco",
                "cep" => [ 36490001, 36499999 ],
                "ibge" => 3145901
            ]),
            "3146008" => new Map([
                "name" => "Ouro Fino",
                "cep" => [ 37570000, 37575999 ],
                "ibge" => 3146008
            ]),
            "3146107" => new Map([
                "name" => "Ouro Preto",
                "cep" => [ 35400000, 35419999 ],
                "ibge" => 3146107
            ]),
            "3146206" => new Map([
                "name" => "Ouro Verde de Minas",
                "cep" => [ 39855000, 39859999 ],
                "ibge" => 3146206
            ]),
            "3146255" => new Map([
                "name" => "Padre Carvalho",
                "cep" => [ 39573000, 39574999 ],
                "ibge" => 3146255
            ]),
            "3146305" => new Map([
                "name" => "Padre Paraíso",
                "cep" => [ 39818000, 39819999 ],
                "ibge" => 3146305
            ]),
            "3146552" => new Map([
                "name" => "Pai Pedro",
                "cep" => [ 39517000, 39517999 ],
                "ibge" => 3146552
            ]),
            "3146404" => new Map([
                "name" => "Paineiras",
                "cep" => [ 35622000, 35623999 ],
                "ibge" => 3146404
            ]),
            "3146503" => new Map([
                "name" => "Pains",
                "cep" => [ 35582000, 35584999 ],
                "ibge" => 3146503
            ]),
            "3146602" => new Map([
                "name" => "Paiva",
                "cep" => [ 36195000, 36199999 ],
                "ibge" => 3146602
            ]),
            "3146701" => new Map([
                "name" => "Palma",
                "cep" => [ 36750000, 36759999 ],
                "ibge" => 3146701
            ]),
            "3146750" => new Map([
                "name" => "Palmópolis",
                "cep" => [ 39945000, 39949999 ],
                "ibge" => 3146750
            ]),
            "3146909" => new Map([
                "name" => "Papagaios",
                "cep" => [ 35669000, 35669999 ],
                "ibge" => 3146909
            ]),
            "3147105" => new Map([
                "name" => "Pará de Minas",
                "cep" => [ 35660001, 35665999 ],
                "ibge" => 3147105
            ]),
            "3147006" => new Map([
                "name" => "Paracatu",
                "cep" => [ 38600001, 38609999 ],
                "ibge" => 3147006
            ]),
            "3147204" => new Map([
                "name" => "Paraguaçu",
                "cep" => [ 37120000, 37129999 ],
                "ibge" => 3147204
            ]),
            "3147303" => new Map([
                "name" => "Paraisópolis",
                "cep" => [ 37660000, 37669999 ],
                "ibge" => 3147303
            ]),
            "3147402" => new Map([
                "name" => "Paraopeba",
                "cep" => [ 35774000, 35776999 ],
                "ibge" => 3147402
            ]),
            "3147600" => new Map([
                "name" => "Passa Quatro",
                "cep" => [ 37460000, 37463999 ],
                "ibge" => 3147600
            ]),
            "3147709" => new Map([
                "name" => "Passa Tempo",
                "cep" => [ 35537000, 35539999 ],
                "ibge" => 3147709
            ]),
            "3147808" => new Map([
                "name" => "Passa Vinte",
                "cep" => [ 37330000, 37339999 ],
                "ibge" => 3147808
            ]),
            "3147501" => new Map([
                "name" => "Passabém",
                "cep" => [ 35810000, 35814999 ],
                "ibge" => 3147501
            ]),
            "3147907" => new Map([
                "name" => "Passos",
                "cep" => [ 37900001, 37904999 ],
                "ibge" => 3147907
            ]),
            "3147956" => new Map([
                "name" => "Patis",
                "cep" => [ 39378000, 39379999 ],
                "ibge" => 3147956
            ]),
            "3148004" => new Map([
                "name" => "Patos de Minas",
                "cep" => [ 38700001, 38719999 ],
                "ibge" => 3148004
            ]),
            "3148103" => new Map([
                "name" => "Patrocínio",
                "cep" => [ 38740001, 38749999 ],
                "ibge" => 3148103
            ]),
            "3148202" => new Map([
                "name" => "Patrocínio do Muriaé",
                "cep" => [ 36860000, 36869999 ],
                "ibge" => 3148202
            ]),
            "3148301" => new Map([
                "name" => "Paula Cândido",
                "cep" => [ 36544000, 36545999 ],
                "ibge" => 3148301
            ]),
            "3148400" => new Map([
                "name" => "Paulistas",
                "cep" => [ 39765000, 39769999 ],
                "ibge" => 3148400
            ]),
            "3148509" => new Map([
                "name" => "Pavão",
                "cep" => [ 39814000, 39814999 ],
                "ibge" => 3148509
            ]),
            "3148608" => new Map([
                "name" => "Peçanha",
                "cep" => [ 39700000, 39702999 ],
                "ibge" => 3148608
            ]),
            "3148707" => new Map([
                "name" => "Pedra Azul",
                "cep" => [ 39970000, 39979999 ],
                "ibge" => 3148707
            ]),
            "3148756" => new Map([
                "name" => "Pedra Bonita",
                "cep" => [ 35364000, 35364999 ],
                "ibge" => 3148756
            ]),
            "3148806" => new Map([
                "name" => "Pedra do Anta",
                "cep" => [ 36585000, 36589999 ],
                "ibge" => 3148806
            ]),
            "3148905" => new Map([
                "name" => "Pedra do Indaiá",
                "cep" => [ 35565000, 35566999 ],
                "ibge" => 3148905
            ]),
            "3149002" => new Map([
                "name" => "Pedra Dourada",
                "cep" => [ 36847000, 36849999 ],
                "ibge" => 3149002
            ]),
            "3149101" => new Map([
                "name" => "Pedralva",
                "cep" => [ 37520000, 37523999 ],
                "ibge" => 3149101
            ]),
            "3149150" => new Map([
                "name" => "Pedras de Maria da Cruz",
                "cep" => [ 39492000, 39494999 ],
                "ibge" => 3149150
            ]),
            "3149200" => new Map([
                "name" => "Pedrinópolis",
                "cep" => [ 38178000, 38179999 ],
                "ibge" => 3149200
            ]),
            "3149309" => new Map([
                "name" => "Pedro Leopoldo",
                "cep" => [ 33250001, 33259999 ],
                "ibge" => 3149309
            ]),
            "3149408" => new Map([
                "name" => "Pedro Teixeira",
                "cep" => [ 36148000, 36149999 ],
                "ibge" => 3149408
            ]),
            "3149507" => new Map([
                "name" => "Pequeri",
                "cep" => [ 36610000, 36619999 ],
                "ibge" => 3149507
            ]),
            "3149606" => new Map([
                "name" => "Pequi",
                "cep" => [ 35667000, 35667999 ],
                "ibge" => 3149606
            ]),
            "3149705" => new Map([
                "name" => "Perdigão",
                "cep" => [ 35545000, 35546999 ],
                "ibge" => 3149705
            ]),
            "3149804" => new Map([
                "name" => "Perdizes",
                "cep" => [ 38170000, 38174999 ],
                "ibge" => 3149804
            ]),
            "3149903" => new Map([
                "name" => "Perdões",
                "cep" => [ 37260000, 37261999 ],
                "ibge" => 3149903
            ]),
            "3149952" => new Map([
                "name" => "Periquito",
                "cep" => [ 35118000, 35119999 ],
                "ibge" => 3149952
            ]),
            "3150000" => new Map([
                "name" => "Pescador",
                "cep" => [ 35114000, 35114999 ],
                "ibge" => 3150000
            ]),
            "3150109" => new Map([
                "name" => "Piau",
                "cep" => [ 36157000, 36159999 ],
                "ibge" => 3150109
            ]),
            "3150158" => new Map([
                "name" => "Piedade de Caratinga",
                "cep" => [ 35325000, 35325999 ],
                "ibge" => 3150158
            ]),
            "3150208" => new Map([
                "name" => "Piedade de Ponte Nova",
                "cep" => [ 35382000, 35382999 ],
                "ibge" => 3150208
            ]),
            "3150307" => new Map([
                "name" => "Piedade do Rio Grande",
                "cep" => [ 36227000, 36229999 ],
                "ibge" => 3150307
            ]),
            "3150406" => new Map([
                "name" => "Piedade dos Gerais",
                "cep" => [ 35476000, 35477999 ],
                "ibge" => 3150406
            ]),
            "3150505" => new Map([
                "name" => "Pimenta",
                "cep" => [ 35585000, 35587999 ],
                "ibge" => 3150505
            ]),
            "3150539" => new Map([
                "name" => "Pingo-D'Água",
                "cep" => [ 35348000, 35349999 ],
                "ibge" => 3150539
            ]),
            "3150570" => new Map([
                "name" => "Pintópolis",
                "cep" => [ 39317000, 39317999 ],
                "ibge" => 3150570
            ]),
            "3150604" => new Map([
                "name" => "Piracema",
                "cep" => [ 35536000, 35536999 ],
                "ibge" => 3150604
            ]),
            "3150703" => new Map([
                "name" => "Pirajuba",
                "cep" => [ 38210000, 38219999 ],
                "ibge" => 3150703
            ]),
            "3150802" => new Map([
                "name" => "Piranga",
                "cep" => [ 36480000, 36489999 ],
                "ibge" => 3150802
            ]),
            "3150901" => new Map([
                "name" => "Piranguçu",
                "cep" => [ 37511000, 37511999 ],
                "ibge" => 3150901
            ]),
            "3151008" => new Map([
                "name" => "Piranguinho",
                "cep" => [ 37508000, 37509999 ],
                "ibge" => 3151008
            ]),
            "3151107" => new Map([
                "name" => "Pirapetinga",
                "cep" => [ 36730000, 36739999 ],
                "ibge" => 3151107
            ]),
            "3151206" => new Map([
                "name" => "Pirapora",
                "cep" => [ 39270001, 39279999 ],
                "ibge" => 3151206
            ]),
            "3151305" => new Map([
                "name" => "Piraúba",
                "cep" => [ 36170000, 36179999 ],
                "ibge" => 3151305
            ]),
            "3151404" => new Map([
                "name" => "Pitangui",
                "cep" => [ 35650000, 35654999 ],
                "ibge" => 3151404
            ]),
            "3151503" => new Map([
                "name" => "Piumhi",
                "cep" => [ 37925000, 37925999 ],
                "ibge" => 3151503
            ]),
            "3151602" => new Map([
                "name" => "Planura",
                "cep" => [ 38220000, 38229999 ],
                "ibge" => 3151602
            ]),
            "3151701" => new Map([
                "name" => "Poço Fundo",
                "cep" => [ 37757000, 37759999 ],
                "ibge" => 3151701
            ]),
            "3151800" => new Map([
                "name" => "Poços de Caldas",
                "cep" => [ 37700001, 37719999 ],
                "ibge" => 3151800
            ]),
            "3151909" => new Map([
                "name" => "Pocrane",
                "cep" => [ 36960000, 36969999 ],
                "ibge" => 3151909
            ]),
            "3152006" => new Map([
                "name" => "Pompéu",
                "cep" => [ 35640000, 35649999 ],
                "ibge" => 3152006
            ]),
            "3152105" => new Map([
                "name" => "Ponte Nova",
                "cep" => [ 35430001, 35435999 ],
                "ibge" => 3152105
            ]),
            "3152131" => new Map([
                "name" => "Ponto Chique",
                "cep" => [ 39328000, 39329999 ],
                "ibge" => 3152131
            ]),
            "3152170" => new Map([
                "name" => "Ponto dos Volantes",
                "cep" => [ 39615000, 39619999 ],
                "ibge" => 3152170
            ]),
            "3152204" => new Map([
                "name" => "Porteirinha",
                "cep" => [ 39520000, 39524999 ],
                "ibge" => 3152204
            ]),
            "3152303" => new Map([
                "name" => "Porto Firme",
                "cep" => [ 36568000, 36569999 ],
                "ibge" => 3152303
            ]),
            "3152402" => new Map([
                "name" => "Poté",
                "cep" => [ 39827000, 39829999 ],
                "ibge" => 3152402
            ]),
            "3152501" => new Map([
                "name" => "Pouso Alegre",
                "cep" => [ 37550001, 37562999 ],
                "ibge" => 3152501
            ]),
            "3152600" => new Map([
                "name" => "Pouso Alto",
                "cep" => [ 37468000, 37469999 ],
                "ibge" => 3152600
            ]),
            "3152709" => new Map([
                "name" => "Prados",
                "cep" => [ 36320000, 36324999 ],
                "ibge" => 3152709
            ]),
            "3152808" => new Map([
                "name" => "Prata",
                "cep" => [ 38140000, 38149999 ],
                "ibge" => 3152808
            ]),
            "3152907" => new Map([
                "name" => "Pratápolis",
                "cep" => [ 37970000, 37972999 ],
                "ibge" => 3152907
            ]),
            "3153004" => new Map([
                "name" => "Pratinha",
                "cep" => [ 38960000, 38969999 ],
                "ibge" => 3153004
            ]),
            "3153103" => new Map([
                "name" => "Presidente Bernardes",
                "cep" => [ 36475000, 36479999 ],
                "ibge" => 3153103
            ]),
            "3153202" => new Map([
                "name" => "Presidente Juscelino",
                "cep" => [ 39245000, 39247999 ],
                "ibge" => 3153202
            ]),
            "3153301" => new Map([
                "name" => "Presidente Kubitschek",
                "cep" => [ 39135000, 39139999 ],
                "ibge" => 3153301
            ]),
            "3153400" => new Map([
                "name" => "Presidente Olegário",
                "cep" => [ 38750000, 38754999 ],
                "ibge" => 3153400
            ]),
            "3153608" => new Map([
                "name" => "Prudente de Morais",
                "cep" => [ 35738000, 35739999 ],
                "ibge" => 3153608
            ]),
            "3153707" => new Map([
                "name" => "Quartel Geral",
                "cep" => [ 35625000, 35627999 ],
                "ibge" => 3153707
            ]),
            "3153806" => new Map([
                "name" => "Queluzito",
                "cep" => [ 36424000, 36425999 ],
                "ibge" => 3153806
            ]),
            "3153905" => new Map([
                "name" => "Raposos",
                "cep" => [ 34400000, 34499999 ],
                "ibge" => 3153905
            ]),
            "3154002" => new Map([
                "name" => "Raul Soares",
                "cep" => [ 35350000, 35358999 ],
                "ibge" => 3154002
            ]),
            "3154101" => new Map([
                "name" => "Recreio",
                "cep" => [ 36740000, 36749999 ],
                "ibge" => 3154101
            ]),
            "3154150" => new Map([
                "name" => "Reduto",
                "cep" => [ 36920000, 36922999 ],
                "ibge" => 3154150
            ]),
            "3154200" => new Map([
                "name" => "Resende Costa",
                "cep" => [ 36340000, 36344999 ],
                "ibge" => 3154200
            ]),
            "3154309" => new Map([
                "name" => "Resplendor",
                "cep" => [ 35230000, 35239999 ],
                "ibge" => 3154309
            ]),
            "3154408" => new Map([
                "name" => "Ressaquinha",
                "cep" => [ 36270000, 36271999 ],
                "ibge" => 3154408
            ]),
            "3154457" => new Map([
                "name" => "Riachinho",
                "cep" => [ 38640000, 38648999 ],
                "ibge" => 3154457
            ]),
            "3154507" => new Map([
                "name" => "Riacho dos Machados",
                "cep" => [ 39529000, 39529999 ],
                "ibge" => 3154507
            ]),
            "3154606" => new Map([
                "name" => "Ribeirão das Neves",
                "cep" => [ 33800001, 33979999 ],
                "ibge" => 3154606
            ]),
            "3154705" => new Map([
                "name" => "Ribeirão Vermelho",
                "cep" => [ 37264000, 37266999 ],
                "ibge" => 3154705
            ]),
            "3154804" => new Map([
                "name" => "Rio Acima",
                "cep" => [ 34300000, 34399999 ],
                "ibge" => 3154804
            ]),
            "3154903" => new Map([
                "name" => "Rio Casca",
                "cep" => [ 35370000, 35379999 ],
                "ibge" => 3154903
            ]),
            "3155108" => new Map([
                "name" => "Rio do Prado",
                "cep" => [ 39940000, 39944999 ],
                "ibge" => 3155108
            ]),
            "3155009" => new Map([
                "name" => "Rio Doce",
                "cep" => [ 35442000, 35443999 ],
                "ibge" => 3155009
            ]),
            "3155207" => new Map([
                "name" => "Rio Espera",
                "cep" => [ 36460000, 36469999 ],
                "ibge" => 3155207
            ]),
            "3155306" => new Map([
                "name" => "Rio Manso",
                "cep" => [ 35485000, 35487999 ],
                "ibge" => 3155306
            ]),
            "3155405" => new Map([
                "name" => "Rio Novo",
                "cep" => [ 36150000, 36151999 ],
                "ibge" => 3155405
            ]),
            "3155504" => new Map([
                "name" => "Rio Paranaíba",
                "cep" => [ 38810000, 38819999 ],
                "ibge" => 3155504
            ]),
            "3155603" => new Map([
                "name" => "Rio Pardo de Minas",
                "cep" => [ 39530000, 39534999 ],
                "ibge" => 3155603
            ]),
            "3155702" => new Map([
                "name" => "Rio Piracicaba",
                "cep" => [ 35940000, 35949999 ],
                "ibge" => 3155702
            ]),
            "3155801" => new Map([
                "name" => "Rio Pomba",
                "cep" => [ 36180000, 36184999 ],
                "ibge" => 3155801
            ]),
            "3155900" => new Map([
                "name" => "Rio Preto",
                "cep" => [ 36130000, 36131999 ],
                "ibge" => 3155900
            ]),
            "3156007" => new Map([
                "name" => "Rio Vermelho",
                "cep" => [ 39170000, 39179999 ],
                "ibge" => 3156007
            ]),
            "3156106" => new Map([
                "name" => "Ritápolis",
                "cep" => [ 36335000, 36339999 ],
                "ibge" => 3156106
            ]),
            "3156205" => new Map([
                "name" => "Rochedo de Minas",
                "cep" => [ 36604000, 36605999 ],
                "ibge" => 3156205
            ]),
            "3156304" => new Map([
                "name" => "Rodeiro",
                "cep" => [ 36510000, 36511999 ],
                "ibge" => 3156304
            ]),
            "3156403" => new Map([
                "name" => "Romaria",
                "cep" => [ 38520000, 38524999 ],
                "ibge" => 3156403
            ]),
            "3156452" => new Map([
                "name" => "Rosário da Limeira",
                "cep" => [ 36878000, 36879999 ],
                "ibge" => 3156452
            ]),
            "3156502" => new Map([
                "name" => "Rubelita",
                "cep" => [ 39565000, 39567999 ],
                "ibge" => 3156502
            ]),
            "3156601" => new Map([
                "name" => "Rubim",
                "cep" => [ 39950000, 39959999 ],
                "ibge" => 3156601
            ]),
            "3156700" => new Map([
                "name" => "Sabará",
                "cep" => [ 34500001, 34799999 ],
                "ibge" => 3156700
            ]),
            "3156809" => new Map([
                "name" => "Sabinópolis",
                "cep" => [ 39750000, 39754999 ],
                "ibge" => 3156809
            ]),
            "3156908" => new Map([
                "name" => "Sacramento",
                "cep" => [ 38190000, 38194999 ],
                "ibge" => 3156908
            ]),
            "3157005" => new Map([
                "name" => "Salinas",
                "cep" => [ 39560000, 39562999 ],
                "ibge" => 3157005
            ]),
            "3157104" => new Map([
                "name" => "Salto da Divisa",
                "cep" => [ 39925000, 39927999 ],
                "ibge" => 3157104
            ]),
            "3157203" => new Map([
                "name" => "Santa Bárbara",
                "cep" => [ 35960000, 35968999 ],
                "ibge" => 3157203
            ]),
            "3157252" => new Map([
                "name" => "Santa Bárbara do Leste",
                "cep" => [ 35328000, 35329999 ],
                "ibge" => 3157252
            ]),
            "3157278" => new Map([
                "name" => "Santa Bárbara do Monte Verde",
                "cep" => [ 36132000, 36134999 ],
                "ibge" => 3157278
            ]),
            "3157302" => new Map([
                "name" => "Santa Bárbara do Tugúrio",
                "cep" => [ 36215000, 36219999 ],
                "ibge" => 3157302
            ]),
            "3157336" => new Map([
                "name" => "Santa Cruz de Minas",
                "cep" => [ 36328000, 36329999 ],
                "ibge" => 3157336
            ]),
            "3157377" => new Map([
                "name" => "Santa Cruz de Salinas",
                "cep" => [ 39563000, 39564999 ],
                "ibge" => 3157377
            ]),
            "3157401" => new Map([
                "name" => "Santa Cruz do Escalvado",
                "cep" => [ 35383000, 35387999 ],
                "ibge" => 3157401
            ]),
            "3157500" => new Map([
                "name" => "Santa Efigênia de Minas",
                "cep" => [ 39725000, 39727999 ],
                "ibge" => 3157500
            ]),
            "3157609" => new Map([
                "name" => "Santa Fé de Minas",
                "cep" => [ 39295000, 39299999 ],
                "ibge" => 3157609
            ]),
            "3157658" => new Map([
                "name" => "Santa Helena de Minas",
                "cep" => [ 39874000, 39874999 ],
                "ibge" => 3157658
            ]),
            "3157708" => new Map([
                "name" => "Santa Juliana",
                "cep" => [ 38175000, 38177999 ],
                "ibge" => 3157708
            ]),
            "3157807" => new Map([
                "name" => "Santa Luzia",
                "cep" => [ 33000001, 33199999 ],
                "ibge" => 3157807
            ]),
            "3157906" => new Map([
                "name" => "Santa Margarida",
                "cep" => [ 36913000, 36917999 ],
                "ibge" => 3157906
            ]),
            "3158003" => new Map([
                "name" => "Santa Maria de Itabira",
                "cep" => [ 35910000, 35919999 ],
                "ibge" => 3158003
            ]),
            "3158102" => new Map([
                "name" => "Santa Maria do Salto",
                "cep" => [ 39928000, 39929999 ],
                "ibge" => 3158102
            ]),
            "3158201" => new Map([
                "name" => "Santa Maria do Suaçuí",
                "cep" => [ 39780000, 39783999 ],
                "ibge" => 3158201
            ]),
            "3159209" => new Map([
                "name" => "Santa Rita de Caldas",
                "cep" => [ 37775000, 37779999 ],
                "ibge" => 3159209
            ]),
            "3159407" => new Map([
                "name" => "Santa Rita de Ibitipoca",
                "cep" => [ 36235000, 36239999 ],
                "ibge" => 3159407
            ]),
            "3159308" => new Map([
                "name" => "Santa Rita de Jacutinga",
                "cep" => [ 36135000, 36139999 ],
                "ibge" => 3159308
            ]),
            "3159357" => new Map([
                "name" => "Santa Rita de Minas",
                "cep" => [ 35326000, 35327999 ],
                "ibge" => 3159357
            ]),
            "3159506" => new Map([
                "name" => "Santa Rita do Itueto",
                "cep" => [ 35225000, 35229999 ],
                "ibge" => 3159506
            ]),
            "3159605" => new Map([
                "name" => "Santa Rita do Sapucaí",
                "cep" => [ 37536000, 37541999 ],
                "ibge" => 3159605
            ]),
            "3159704" => new Map([
                "name" => "Santa Rosa da Serra",
                "cep" => [ 38805000, 38809999 ],
                "ibge" => 3159704
            ]),
            "3159803" => new Map([
                "name" => "Santa Vitória",
                "cep" => [ 38320000, 38349999 ],
                "ibge" => 3159803
            ]),
            "3158300" => new Map([
                "name" => "Santana da Vargem",
                "cep" => [ 37195000, 37199999 ],
                "ibge" => 3158300
            ]),
            "3158409" => new Map([
                "name" => "Santana de Cataguases",
                "cep" => [ 36795000, 36799999 ],
                "ibge" => 3158409
            ]),
            "3158508" => new Map([
                "name" => "Santana de Pirapama",
                "cep" => [ 35785000, 35788999 ],
                "ibge" => 3158508
            ]),
            "3158607" => new Map([
                "name" => "Santana do Deserto",
                "cep" => [ 36620000, 36629999 ],
                "ibge" => 3158607
            ]),
            "3158706" => new Map([
                "name" => "Santana do Garambéu",
                "cep" => [ 36146000, 36147999 ],
                "ibge" => 3158706
            ]),
            "3158805" => new Map([
                "name" => "Santana do Jacaré",
                "cep" => [ 37278000, 37279999 ],
                "ibge" => 3158805
            ]),
            "3158904" => new Map([
                "name" => "Santana do Manhuaçu",
                "cep" => [ 36940000, 36946999 ],
                "ibge" => 3158904
            ]),
            "3158953" => new Map([
                "name" => "Santana do Paraíso",
                "cep" => [ 35179000, 35179999 ],
                "ibge" => 3158953
            ]),
            "3159001" => new Map([
                "name" => "Santana do Riacho",
                "cep" => [ 35845000, 35849999 ],
                "ibge" => 3159001
            ]),
            "3159100" => new Map([
                "name" => "Santana dos Montes",
                "cep" => [ 36430000, 36439999 ],
                "ibge" => 3159100
            ]),
            "3159902" => new Map([
                "name" => "Santo Antônio do Amparo",
                "cep" => [ 37262000, 37263999 ],
                "ibge" => 3159902
            ]),
            "3160009" => new Map([
                "name" => "Santo Antônio do Aventureiro",
                "cep" => [ 36670000, 36679999 ],
                "ibge" => 3160009
            ]),
            "3160108" => new Map([
                "name" => "Santo Antônio do Grama",
                "cep" => [ 35388000, 35389999 ],
                "ibge" => 3160108
            ]),
            "3160207" => new Map([
                "name" => "Santo Antônio do Itambé",
                "cep" => [ 39160000, 39164999 ],
                "ibge" => 3160207
            ]),
            "3160306" => new Map([
                "name" => "Santo Antônio do Jacinto",
                "cep" => [ 39935000, 39939999 ],
                "ibge" => 3160306
            ]),
            "3160405" => new Map([
                "name" => "Santo Antônio do Monte",
                "cep" => [ 35560000, 35564999 ],
                "ibge" => 3160405
            ]),
            "3160454" => new Map([
                "name" => "Santo Antônio do Retiro",
                "cep" => [ 39538000, 39539999 ],
                "ibge" => 3160454
            ]),
            "3160504" => new Map([
                "name" => "Santo Antônio do Rio Abaixo",
                "cep" => [ 35880000, 35893999 ],
                "ibge" => 3160504
            ]),
            "3160603" => new Map([
                "name" => "Santo Hipólito",
                "cep" => [ 39210000, 39214999 ],
                "ibge" => 3160603
            ]),
            "3160702" => new Map([
                "name" => "Santos Dumont",
                "cep" => [ 36240001, 36249999 ],
                "ibge" => 3160702
            ]),
            "3160801" => new Map([
                "name" => "São Bento Abade",
                "cep" => [ 37407000, 37407999 ],
                "ibge" => 3160801
            ]),
            "3160900" => new Map([
                "name" => "São Brás do Suaçuí",
                "cep" => [ 35495000, 35496999 ],
                "ibge" => 3160900
            ]),
            "3160959" => new Map([
                "name" => "São Domingos das Dores",
                "cep" => [ 35335000, 35337999 ],
                "ibge" => 3160959
            ]),
            "3161007" => new Map([
                "name" => "São Domingos do Prata",
                "cep" => [ 35993000, 35999999 ],
                "ibge" => 3161007
            ]),
            "3161056" => new Map([
                "name" => "São Félix de Minas",
                "cep" => [ 35275000, 35276999 ],
                "ibge" => 3161056
            ]),
            "3161106" => new Map([
                "name" => "São Francisco",
                "cep" => [ 39300000, 39316999 ],
                "ibge" => 3161106
            ]),
            "3161205" => new Map([
                "name" => "São Francisco de Paula",
                "cep" => [ 35543000, 35543999 ],
                "ibge" => 3161205
            ]),
            "3161304" => new Map([
                "name" => "São Francisco de Sales",
                "cep" => [ 38260000, 38269999 ],
                "ibge" => 3161304
            ]),
            "3161403" => new Map([
                "name" => "São Francisco do Glória",
                "cep" => [ 36810000, 36814999 ],
                "ibge" => 3161403
            ]),
            "3161502" => new Map([
                "name" => "São Geraldo",
                "cep" => [ 36530000, 36539999 ],
                "ibge" => 3161502
            ]),
            "3161601" => new Map([
                "name" => "São Geraldo da Piedade",
                "cep" => [ 39723000, 39724999 ],
                "ibge" => 3161601
            ]),
            "3161650" => new Map([
                "name" => "São Geraldo do Baixio",
                "cep" => [ 35258000, 35259999 ],
                "ibge" => 3161650
            ]),
            "3161700" => new Map([
                "name" => "São Gonçalo do Abaeté",
                "cep" => [ 38790000, 38793999 ],
                "ibge" => 3161700
            ]),
            "3161809" => new Map([
                "name" => "São Gonçalo do Pará",
                "cep" => [ 35544000, 35544999 ],
                "ibge" => 3161809
            ]),
            "3161908" => new Map([
                "name" => "São Gonçalo do Rio Abaixo",
                "cep" => [ 35935000, 35937999 ],
                "ibge" => 3161908
            ]),
            "3125507" => new Map([
                "name" => "São Gonçalo do Rio Preto",
                "cep" => [ 39185000, 39187999 ],
                "ibge" => 3125507
            ]),
            "3162005" => new Map([
                "name" => "São Gonçalo do Sapucaí",
                "cep" => [ 37490000, 37495999 ],
                "ibge" => 3162005
            ]),
            "3162104" => new Map([
                "name" => "São Gotardo",
                "cep" => [ 38800000, 38804999 ],
                "ibge" => 3162104
            ]),
            "3162203" => new Map([
                "name" => "São João Batista do Glória",
                "cep" => [ 37920000, 37921999 ],
                "ibge" => 3162203
            ]),
            "3162252" => new Map([
                "name" => "São João da Lagoa",
                "cep" => [ 39355000, 39359999 ],
                "ibge" => 3162252
            ]),
            "3162302" => new Map([
                "name" => "São João da Mata",
                "cep" => [ 37568000, 37569999 ],
                "ibge" => 3162302
            ]),
            "3162401" => new Map([
                "name" => "São João da Ponte",
                "cep" => [ 39430000, 39436999 ],
                "ibge" => 3162401
            ]),
            "3162450" => new Map([
                "name" => "São João das Missões",
                "cep" => [ 39475000, 39477999 ],
                "ibge" => 3162450
            ]),
            "3162500" => new Map([
                "name" => "São João Del Rei",
                "cep" => [ 36300001, 36319999 ],
                "ibge" => 3162500
            ]),
            "3162559" => new Map([
                "name" => "São João do Manhuaçu",
                "cep" => [ 36918000, 36919999 ],
                "ibge" => 3162559
            ]),
            "3162575" => new Map([
                "name" => "São João do Manteninha",
                "cep" => [ 35277000, 35279999 ],
                "ibge" => 3162575
            ]),
            "3162609" => new Map([
                "name" => "São João do Oriente",
                "cep" => [ 35146000, 35146999 ],
                "ibge" => 3162609
            ]),
            "3162658" => new Map([
                "name" => "São João do Pacuí",
                "cep" => [ 39365000, 39369999 ],
                "ibge" => 3162658
            ]),
            "3162708" => new Map([
                "name" => "São João do Paraíso",
                "cep" => [ 39540000, 39546999 ],
                "ibge" => 3162708
            ]),
            "3162807" => new Map([
                "name" => "São João Evangelista",
                "cep" => [ 39704000, 39706999 ],
                "ibge" => 3162807
            ]),
            "3162906" => new Map([
                "name" => "São João Nepomuceno",
                "cep" => [ 36680001, 36689999 ],
                "ibge" => 3162906
            ]),
            "3162922" => new Map([
                "name" => "São Joaquim de Bicas",
                "cep" => [ 32920000, 32999999 ],
                "ibge" => 3162922
            ]),
            "3162948" => new Map([
                "name" => "São José da Barra",
                "cep" => [ 37945000, 37947999 ],
                "ibge" => 3162948
            ]),
            "3162955" => new Map([
                "name" => "São José da Lapa",
                "cep" => [ 33350000, 33399999 ],
                "ibge" => 3162955
            ]),
            "3163003" => new Map([
                "name" => "São José da Safira",
                "cep" => [ 39785000, 39789999 ],
                "ibge" => 3163003
            ]),
            "3163102" => new Map([
                "name" => "São José da Varginha",
                "cep" => [ 35694000, 35694999 ],
                "ibge" => 3163102
            ]),
            "3163201" => new Map([
                "name" => "São José do Alegre",
                "cep" => [ 37510000, 37510999 ],
                "ibge" => 3163201
            ]),
            "3163300" => new Map([
                "name" => "São José do Divino",
                "cep" => [ 39848000, 39849999 ],
                "ibge" => 3163300
            ]),
            "3163409" => new Map([
                "name" => "São José do Goiabal",
                "cep" => [ 35986000, 35992999 ],
                "ibge" => 3163409
            ]),
            "3163508" => new Map([
                "name" => "São José do Jacuri",
                "cep" => [ 39707000, 39707999 ],
                "ibge" => 3163508
            ]),
            "3163607" => new Map([
                "name" => "São José do Mantimento",
                "cep" => [ 36990000, 36999999 ],
                "ibge" => 3163607
            ]),
            "3163706" => new Map([
                "name" => "São Lourenço",
                "cep" => [ 37470000, 37471999 ],
                "ibge" => 3163706
            ]),
            "3163805" => new Map([
                "name" => "São Miguel do Anta",
                "cep" => [ 36590000, 36591999 ],
                "ibge" => 3163805
            ]),
            "3163904" => new Map([
                "name" => "São Pedro da União",
                "cep" => [ 37855000, 37859999 ],
                "ibge" => 3163904
            ]),
            "3164100" => new Map([
                "name" => "São Pedro do Suaçuí",
                "cep" => [ 39784000, 39784999 ],
                "ibge" => 3164100
            ]),
            "3164001" => new Map([
                "name" => "São Pedro dos Ferros",
                "cep" => [ 35360000, 35363999 ],
                "ibge" => 3164001
            ]),
            "3164209" => new Map([
                "name" => "São Romão",
                "cep" => [ 39290000, 39294999 ],
                "ibge" => 3164209
            ]),
            "3164308" => new Map([
                "name" => "São Roque de Minas",
                "cep" => [ 37927000, 37929999 ],
                "ibge" => 3164308
            ]),
            "3164407" => new Map([
                "name" => "São Sebastião da Bela Vista",
                "cep" => [ 37567000, 37567999 ],
                "ibge" => 3164407
            ]),
            "3164431" => new Map([
                "name" => "São Sebastião da Vargem Alegre",
                "cep" => [ 36793000, 36794999 ],
                "ibge" => 3164431
            ]),
            "3164472" => new Map([
                "name" => "São Sebastião do Anta",
                "cep" => [ 35334000, 35334999 ],
                "ibge" => 3164472
            ]),
            "3164506" => new Map([
                "name" => "São Sebastião do Maranhão",
                "cep" => [ 39795000, 39799999 ],
                "ibge" => 3164506
            ]),
            "3164605" => new Map([
                "name" => "São Sebastião do Oeste",
                "cep" => [ 35567000, 35567999 ],
                "ibge" => 3164605
            ]),
            "3164704" => new Map([
                "name" => "São Sebastião do Paraíso",
                "cep" => [ 37950000, 37959999 ],
                "ibge" => 3164704
            ]),
            "3164803" => new Map([
                "name" => "São Sebastião do Rio Preto",
                "cep" => [ 35815000, 35819999 ],
                "ibge" => 3164803
            ]),
            "3164902" => new Map([
                "name" => "São Sebastião do Rio Verde",
                "cep" => [ 37467000, 37467999 ],
                "ibge" => 3164902
            ]),
            "3165008" => new Map([
                "name" => "São Tiago",
                "cep" => [ 36350000, 36359999 ],
                "ibge" => 3165008
            ]),
            "3165107" => new Map([
                "name" => "São Tomás de Aquino",
                "cep" => [ 37960000, 37964999 ],
                "ibge" => 3165107
            ]),
            "3165206" => new Map([
                "name" => "São Thomé das Letras",
                "cep" => [ 37408000, 37409999 ],
                "ibge" => 3165206
            ]),
            "3165305" => new Map([
                "name" => "São Vicente de Minas",
                "cep" => [ 37370000, 37399999 ],
                "ibge" => 3165305
            ]),
            "3165404" => new Map([
                "name" => "Sapucaí-Mirim",
                "cep" => [ 37690000, 37699999 ],
                "ibge" => 3165404
            ]),
            "3165503" => new Map([
                "name" => "Sardoá",
                "cep" => [ 39728000, 39729999 ],
                "ibge" => 3165503
            ]),
            "3165537" => new Map([
                "name" => "Sarzedo",
                "cep" => [ 32450000, 32469999 ],
                "ibge" => 3165537
            ]),
            "3165560" => new Map([
                "name" => "Sem Peixe",
                "cep" => [ 35441000, 35441999 ],
                "ibge" => 3165560
            ]),
            "3165578" => new Map([
                "name" => "Senador Amaral",
                "cep" => [ 37615000, 37619999 ],
                "ibge" => 3165578
            ]),
            "3165602" => new Map([
                "name" => "Senador Cortes",
                "cep" => [ 36650000, 36659999 ],
                "ibge" => 3165602
            ]),
            "3165701" => new Map([
                "name" => "Senador Firmino",
                "cep" => [ 36540000, 36541999 ],
                "ibge" => 3165701
            ]),
            "3165800" => new Map([
                "name" => "Senador José Bento",
                "cep" => [ 37586000, 37587999 ],
                "ibge" => 3165800
            ]),
            "3165909" => new Map([
                "name" => "Senador Modestino Gonçalves",
                "cep" => [ 39190000, 39199999 ],
                "ibge" => 3165909
            ]),
            "3166006" => new Map([
                "name" => "Senhora de Oliveira",
                "cep" => [ 36470000, 36474999 ],
                "ibge" => 3166006
            ]),
            "3166105" => new Map([
                "name" => "Senhora do Porto",
                "cep" => [ 39745000, 39749999 ],
                "ibge" => 3166105
            ]),
            "3166204" => new Map([
                "name" => "Senhora dos Remédios",
                "cep" => [ 36275000, 36279999 ],
                "ibge" => 3166204
            ]),
            "3166303" => new Map([
                "name" => "Sericita",
                "cep" => [ 35368000, 35369999 ],
                "ibge" => 3166303
            ]),
            "3166402" => new Map([
                "name" => "Seritinga",
                "cep" => [ 37454000, 37455999 ],
                "ibge" => 3166402
            ]),
            "3166501" => new Map([
                "name" => "Serra Azul de Minas",
                "cep" => [ 39165000, 39169999 ],
                "ibge" => 3166501
            ]),
            "3166600" => new Map([
                "name" => "Serra da Saudade",
                "cep" => [ 35617000, 35619999 ],
                "ibge" => 3166600
            ]),
            "3166808" => new Map([
                "name" => "Serra do Salitre",
                "cep" => [ 38760000, 38769999 ],
                "ibge" => 3166808
            ]),
            "3166709" => new Map([
                "name" => "Serra dos Aimorés",
                "cep" => [ 39868000, 39869999 ],
                "ibge" => 3166709
            ]),
            "3166907" => new Map([
                "name" => "Serrania",
                "cep" => [ 37143000, 37143999 ],
                "ibge" => 3166907
            ]),
            "3166956" => new Map([
                "name" => "Serranópolis de Minas",
                "cep" => [ 39518000, 39519999 ],
                "ibge" => 3166956
            ]),
            "3167004" => new Map([
                "name" => "Serranos",
                "cep" => [ 37452000, 37453999 ],
                "ibge" => 3167004
            ]),
            "3167103" => new Map([
                "name" => "Serro",
                "cep" => [ 39150000, 39159999 ],
                "ibge" => 3167103
            ]),
            "3167202" => new Map([
                "name" => "Sete Lagoas",
                "cep" => [ 35700001, 35719999 ],
                "ibge" => 3167202
            ]),
            "3165552" => new Map([
                "name" => "Setubinha",
                "cep" => [ 39688000, 39689999 ],
                "ibge" => 3165552
            ]),
            "3167301" => new Map([
                "name" => "Silveirânia",
                "cep" => [ 36185000, 36189999 ],
                "ibge" => 3167301
            ]),
            "3167400" => new Map([
                "name" => "Silvianópolis",
                "cep" => [ 37589000, 37589999 ],
                "ibge" => 3167400
            ]),
            "3167509" => new Map([
                "name" => "Simão Pereira",
                "cep" => [ 36123000, 36125999 ],
                "ibge" => 3167509
            ]),
            "3167608" => new Map([
                "name" => "Simonésia",
                "cep" => [ 36930000, 36939999 ],
                "ibge" => 3167608
            ]),
            "3167707" => new Map([
                "name" => "Sobrália",
                "cep" => [ 35144000, 35145999 ],
                "ibge" => 3167707
            ]),
            "3167806" => new Map([
                "name" => "Soledade de Minas",
                "cep" => [ 37478000, 37479999 ],
                "ibge" => 3167806
            ]),
            "3167905" => new Map([
                "name" => "Tabuleiro",
                "cep" => [ 36165000, 36169999 ],
                "ibge" => 3167905
            ]),
            "3168002" => new Map([
                "name" => "Taiobeiras",
                "cep" => [ 39550000, 39552999 ],
                "ibge" => 3168002
            ]),
            "3168051" => new Map([
                "name" => "Taparuba",
                "cep" => [ 36953000, 36954999 ],
                "ibge" => 3168051
            ]),
            "3168101" => new Map([
                "name" => "Tapira",
                "cep" => [ 38185000, 38189999 ],
                "ibge" => 3168101
            ]),
            "3168200" => new Map([
                "name" => "Tapiraí",
                "cep" => [ 38980000, 38989999 ],
                "ibge" => 3168200
            ]),
            "3168309" => new Map([
                "name" => "Taquaraçu de Minas",
                "cep" => [ 33980000, 33999999 ],
                "ibge" => 3168309
            ]),
            "3168408" => new Map([
                "name" => "Tarumirim",
                "cep" => [ 35140000, 35143999 ],
                "ibge" => 3168408
            ]),
            "3168507" => new Map([
                "name" => "Teixeiras",
                "cep" => [ 36580000, 36584999 ],
                "ibge" => 3168507
            ]),
            "3168606" => new Map([
                "name" => "Teófilo Otoni",
                "cep" => [ 39800001, 39809999 ],
                "ibge" => 3168606
            ]),
            "3168705" => new Map([
                "name" => "Timóteo",
                "cep" => [ 35180001, 35184999 ],
                "ibge" => 3168705
            ]),
            "3168804" => new Map([
                "name" => "Tiradentes",
                "cep" => [ 36325000, 36327999 ],
                "ibge" => 3168804
            ]),
            "3168903" => new Map([
                "name" => "Tiros",
                "cep" => [ 38880000, 38899999 ],
                "ibge" => 3168903
            ]),
            "3169000" => new Map([
                "name" => "Tocantins",
                "cep" => [ 36512000, 36512999 ],
                "ibge" => 3169000
            ]),
            "3169059" => new Map([
                "name" => "Tocos do Moji",
                "cep" => [ 37563000, 37563999 ],
                "ibge" => 3169059
            ]),
            "3169109" => new Map([
                "name" => "Toledo",
                "cep" => [ 37630000, 37639999 ],
                "ibge" => 3169109
            ]),
            "3169208" => new Map([
                "name" => "Tombos",
                "cep" => [ 36844000, 36846999 ],
                "ibge" => 3169208
            ]),
            "3169307" => new Map([
                "name" => "Três Corações",
                "cep" => [ 37410001, 37419999 ],
                "ibge" => 3169307
            ]),
            "3169356" => new Map([
                "name" => "Três Marias",
                "cep" => [ 39205000, 39209999 ],
                "ibge" => 3169356
            ]),
            "3169406" => new Map([
                "name" => "Três Pontas",
                "cep" => [ 37190000, 37194999 ],
                "ibge" => 3169406
            ]),
            "3169505" => new Map([
                "name" => "Tumiritinga",
                "cep" => [ 35125000, 35129999 ],
                "ibge" => 3169505
            ]),
            "3169604" => new Map([
                "name" => "Tupaciguara",
                "cep" => [ 38480000, 38489999 ],
                "ibge" => 3169604
            ]),
            "3169703" => new Map([
                "name" => "Turmalina",
                "cep" => [ 39660000, 39662999 ],
                "ibge" => 3169703
            ]),
            "3169802" => new Map([
                "name" => "Turvolândia",
                "cep" => [ 37496000, 37497999 ],
                "ibge" => 3169802
            ]),
            "3169901" => new Map([
                "name" => "Ubá",
                "cep" => [ 36500001, 36509999 ],
                "ibge" => 3169901
            ]),
            "3170008" => new Map([
                "name" => "Ubaí",
                "cep" => [ 39320000, 39327999 ],
                "ibge" => 3170008
            ]),
            "3170057" => new Map([
                "name" => "Ubaporanga",
                "cep" => [ 35338000, 35339999 ],
                "ibge" => 3170057
            ]),
            "3170107" => new Map([
                "name" => "Uberaba",
                "cep" => [ 38000001, 38107999 ],
                "ibge" => 3170107
            ]),
            "3170206" => new Map([
                "name" => "Uberlândia",
                "cep" => [ 38400001, 38439999 ],
                "ibge" => 3170206
            ]),
            "3170305" => new Map([
                "name" => "Umburatiba",
                "cep" => [ 39878000, 39879999 ],
                "ibge" => 3170305
            ]),
            "3170404" => new Map([
                "name" => "Unaí",
                "cep" => [ 38610001, 38624999 ],
                "ibge" => 3170404
            ]),
            "3170438" => new Map([
                "name" => "União de Minas",
                "cep" => [ 38288000, 38289999 ],
                "ibge" => 3170438
            ]),
            "3170479" => new Map([
                "name" => "Uruana de Minas",
                "cep" => [ 38630000, 38639999 ],
                "ibge" => 3170479
            ]),
            "3170503" => new Map([
                "name" => "Urucânia",
                "cep" => [ 35380000, 35381999 ],
                "ibge" => 3170503
            ]),
            "3170529" => new Map([
                "name" => "Urucuia",
                "cep" => [ 38649000, 38649999 ],
                "ibge" => 3170529
            ]),
            "3170578" => new Map([
                "name" => "Vargem Alegre",
                "cep" => [ 35199000, 35199999 ],
                "ibge" => 3170578
            ]),
            "3170602" => new Map([
                "name" => "Vargem Bonita",
                "cep" => [ 37922000, 37924999 ],
                "ibge" => 3170602
            ]),
            "3170651" => new Map([
                "name" => "Vargem Grande do Rio Pardo",
                "cep" => [ 39535000, 39535999 ],
                "ibge" => 3170651
            ]),
            "3170701" => new Map([
                "name" => "Varginha",
                "cep" => [ 37000001, 37109999 ],
                "ibge" => 3170701
            ]),
            "3170750" => new Map([
                "name" => "Varjão de Minas",
                "cep" => [ 38794000, 38799999 ],
                "ibge" => 3170750
            ]),
            "3170800" => new Map([
                "name" => "Várzea da Palma",
                "cep" => [ 39260000, 39269999 ],
                "ibge" => 3170800
            ]),
            "3170909" => new Map([
                "name" => "Varzelândia",
                "cep" => [ 39450000, 39454999 ],
                "ibge" => 3170909
            ]),
            "3171006" => new Map([
                "name" => "Vazante",
                "cep" => [ 38780000, 38784999 ],
                "ibge" => 3171006
            ]),
            "3171030" => new Map([
                "name" => "Verdelândia",
                "cep" => [ 39458000, 39459999 ],
                "ibge" => 3171030
            ]),
            "3171071" => new Map([
                "name" => "Veredinha",
                "cep" => [ 39663000, 39664999 ],
                "ibge" => 3171071
            ]),
            "3171105" => new Map([
                "name" => "Veríssimo",
                "cep" => [ 38150000, 38159999 ],
                "ibge" => 3171105
            ]),
            "3171154" => new Map([
                "name" => "Vermelho Novo",
                "cep" => [ 35359000, 35359999 ],
                "ibge" => 3171154
            ]),
            "3171204" => new Map([
                "name" => "Vespasiano",
                "cep" => [ 33200001, 33229999 ],
                "ibge" => 3171204
            ]),
            "3171303" => new Map([
                "name" => "Viçosa",
                "cep" => [ 36570001, 36579999 ],
                "ibge" => 3171303
            ]),
            "3171402" => new Map([
                "name" => "Vieiras",
                "cep" => [ 36895000, 36899999 ],
                "ibge" => 3171402
            ]),
            "3171600" => new Map([
                "name" => "Virgem da Lapa",
                "cep" => [ 39630000, 39634999 ],
                "ibge" => 3171600
            ]),
            "3171709" => new Map([
                "name" => "Virgínia",
                "cep" => [ 37465000, 37465999 ],
                "ibge" => 3171709
            ]),
            "3171808" => new Map([
                "name" => "Virginópolis",
                "cep" => [ 39730000, 39734999 ],
                "ibge" => 3171808
            ]),
            "3171907" => new Map([
                "name" => "Virgolândia",
                "cep" => [ 39715000, 39717999 ],
                "ibge" => 3171907
            ]),
            "3172004" => new Map([
                "name" => "Visconde do Rio Branco",
                "cep" => [ 36520000, 36524999 ],
                "ibge" => 3172004
            ]),
            "3172103" => new Map([
                "name" => "Volta Grande",
                "cep" => [ 36720000, 36724999 ],
                "ibge" => 3172103
            ]),
            "3172202" => new Map([
                "name" => "Wenceslau Braz",
                "cep" => [ 37512000, 37513999 ],
                "ibge" => 3172202
            ])
        ]);

        return $map;
    }
}