<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class BA implements ICitiesInfo
{
    public static int $numberCities = 417;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(BA::$numberCities);
        $map->putAll([
            "2900108" => new Map([
                "name" => "Abaíra",
                "zipCode" => [ 46690000, 46699999 ],
                "ibge" => 2900108
            ]),
            "2900207" => new Map([
                "name" => "Abaré",
                "zipCode" => [ 48680000, 48699999 ],
                "ibge" => 2900207
            ]),
            "2900306" => new Map([
                "name" => "Acajutiba",
                "zipCode" => [ 48360000, 48369999 ],
                "ibge" => 2900306
            ]),
            "2900355" => new Map([
                "name" => "Adustina",
                "zipCode" => [ 48435000, 48439999 ],
                "ibge" => 2900355
            ]),
            "2900405" => new Map([
                "name" => "Água Fria",
                "zipCode" => [ 48170000, 48179999 ],
                "ibge" => 2900405
            ]),
            "2900603" => new Map([
                "name" => "Aiquara",
                "zipCode" => [ 45220000, 45224999 ],
                "ibge" => 2900603
            ]),
            "2900702" => new Map([
                "name" => "Alagoinhas",
                "zipCode" => [ 48000001, 48107999 ],
                "ibge" => 2900702
            ]),
            "2900801" => new Map([
                "name" => "Alcobaça",
                "zipCode" => [ 45910000, 45919999 ],
                "ibge" => 2900801
            ]),
            "2900900" => new Map([
                "name" => "Almadina",
                "zipCode" => [ 45640000, 45644999 ],
                "ibge" => 2900900
            ]),
            "2901007" => new Map([
                "name" => "Amargosa",
                "zipCode" => [ 45300000, 45304999 ],
                "ibge" => 2901007
            ]),
            "2901106" => new Map([
                "name" => "Amélia Rodrigues",
                "zipCode" => [ 44230000, 44244999 ],
                "ibge" => 2901106
            ]),
            "2901155" => new Map([
                "name" => "América Dourada",
                "zipCode" => [ 44910000, 44914999 ],
                "ibge" => 2901155
            ]),
            "2901205" => new Map([
                "name" => "Anagé",
                "zipCode" => [ 45180000, 45189999 ],
                "ibge" => 2901205
            ]),
            "2901304" => new Map([
                "name" => "Andaraí",
                "zipCode" => [ 46830000, 46834999 ],
                "ibge" => 2901304
            ]),
            "2901353" => new Map([
                "name" => "Andorinha",
                "zipCode" => [ 48990000, 48999999 ],
                "ibge" => 2901353
            ]),
            "2901403" => new Map([
                "name" => "Angical",
                "zipCode" => [ 47960000, 47969999 ],
                "ibge" => 2901403
            ]),
            "2901502" => new Map([
                "name" => "Anguera",
                "zipCode" => [ 44670001, 44679999 ],
                "ibge" => 2901502
            ]),
            "2901601" => new Map([
                "name" => "Antas",
                "zipCode" => [ 48420000, 48429999 ],
                "ibge" => 2901601
            ]),
            "2901700" => new Map([
                "name" => "Antônio Cardoso",
                "zipCode" => [ 44180000, 44189999 ],
                "ibge" => 2901700
            ]),
            "2901809" => new Map([
                "name" => "Antônio Gonçalves",
                "zipCode" => [ 44780000, 44789999 ],
                "ibge" => 2901809
            ]),
            "2901908" => new Map([
                "name" => "Aporá",
                "zipCode" => [ 48350000, 48359999 ],
                "ibge" => 2901908
            ]),
            "2901957" => new Map([
                "name" => "Apuarema",
                "zipCode" => [ 45355000, 45359999 ],
                "ibge" => 2901957
            ]),
            "2902054" => new Map([
                "name" => "Araçás",
                "zipCode" => [ 48108000, 48109999 ],
                "ibge" => 2902054
            ]),
            "2902005" => new Map([
                "name" => "Aracatu",
                "zipCode" => [ 46130000, 46139999 ],
                "ibge" => 2902005
            ]),
            "2902104" => new Map([
                "name" => "Araci",
                "zipCode" => [ 48760000, 48769999 ],
                "ibge" => 2902104
            ]),
            "2902203" => new Map([
                "name" => "Aramari",
                "zipCode" => [ 48130000, 48139999 ],
                "ibge" => 2902203
            ]),
            "2902252" => new Map([
                "name" => "Arataca",
                "zipCode" => [ 45695000, 45699999 ],
                "ibge" => 2902252
            ]),
            "2902302" => new Map([
                "name" => "Aratuípe",
                "zipCode" => [ 44490000, 44499999 ],
                "ibge" => 2902302
            ]),
            "2902401" => new Map([
                "name" => "Aurelino Leal",
                "zipCode" => [ 45675000, 45679999 ],
                "ibge" => 2902401
            ]),
            "2902500" => new Map([
                "name" => "Baianópolis",
                "zipCode" => [ 47830000, 47844999 ],
                "ibge" => 2902500
            ]),
            "2902609" => new Map([
                "name" => "Baixa Grande",
                "zipCode" => [ 44620000, 44629999 ],
                "ibge" => 2902609
            ]),
            "2902658" => new Map([
                "name" => "Banzaê",
                "zipCode" => [ 48405000, 48409999 ],
                "ibge" => 2902658
            ]),
            "2902708" => new Map([
                "name" => "Barra",
                "zipCode" => [ 47100000, 47114999 ],
                "ibge" => 2902708
            ]),
            "2902807" => new Map([
                "name" => "Barra da Estiva",
                "zipCode" => [ 46650000, 46669999 ],
                "ibge" => 2902807
            ]),
            "2902906" => new Map([
                "name" => "Barra do Choça",
                "zipCode" => [ 45120000, 45129999 ],
                "ibge" => 2902906
            ]),
            "2903003" => new Map([
                "name" => "Barra do Mendes",
                "zipCode" => [ 44990000, 44999999 ],
                "ibge" => 2903003
            ]),
            "2903102" => new Map([
                "name" => "Barra do Rocha",
                "zipCode" => [ 45560000, 45569999 ],
                "ibge" => 2903102
            ]),
            "2903201" => new Map([
                "name" => "Barreiras",
                "zipCode" => [ 47800001, 47819999 ],
                "ibge" => 2903201
            ]),
            "2903235" => new Map([
                "name" => "Barro Alto",
                "zipCode" => [ 44895000, 44899999 ],
                "ibge" => 2903235
            ]),
            "2903300" => new Map([
                "name" => "Barro Preto",
                "zipCode" => [ 45625000, 45629999 ],
                "ibge" => 2903300
            ]),
            "2903276" => new Map([
                "name" => "Barrocas",
                "zipCode" => [ 48705000, 48709999 ],
                "ibge" => 2903276
            ]),
            "2903409" => new Map([
                "name" => "Belmonte",
                "zipCode" => [ 45800000, 45806999 ],
                "ibge" => 2903409
            ]),
            "2903508" => new Map([
                "name" => "Belo Campo",
                "zipCode" => [ 45160000, 45169999 ],
                "ibge" => 2903508
            ]),
            "2903607" => new Map([
                "name" => "Biritinga",
                "zipCode" => [ 48780000, 48789999 ],
                "ibge" => 2903607
            ]),
            "2903706" => new Map([
                "name" => "Boa Nova",
                "zipCode" => [ 45250000, 45254999 ],
                "ibge" => 2903706
            ]),
            "2903805" => new Map([
                "name" => "Boa Vista do Tupim",
                "zipCode" => [ 46850000, 46859999 ],
                "ibge" => 2903805
            ]),
            "2903904" => new Map([
                "name" => "Bom Jesus da Lapa",
                "zipCode" => [ 47600000, 47609999 ],
                "ibge" => 2903904
            ]),
            "2903953" => new Map([
                "name" => "Bom Jesus da Serra",
                "zipCode" => [ 45258000, 45259999 ],
                "ibge" => 2903953
            ]),
            "2904001" => new Map([
                "name" => "Boninal",
                "zipCode" => [ 46740000, 46749999 ],
                "ibge" => 2904001
            ]),
            "2904050" => new Map([
                "name" => "Bonito",
                "zipCode" => [ 46820000, 46824999 ],
                "ibge" => 2904050
            ]),
            "2904100" => new Map([
                "name" => "Boquira",
                "zipCode" => [ 46530000, 46539999 ],
                "ibge" => 2904100
            ]),
            "2904209" => new Map([
                "name" => "Botuporã",
                "zipCode" => [ 46570000, 46574999 ],
                "ibge" => 2904209
            ]),
            "2904308" => new Map([
                "name" => "Brejões",
                "zipCode" => [ 45325000, 45329999 ],
                "ibge" => 2904308
            ]),
            "2904407" => new Map([
                "name" => "Brejolândia",
                "zipCode" => [ 47750000, 47759999 ],
                "ibge" => 2904407
            ]),
            "2904506" => new Map([
                "name" => "Brotas de Macaúbas",
                "zipCode" => [ 47560000, 47579999 ],
                "ibge" => 2904506
            ]),
            "2904605" => new Map([
                "name" => "Brumado",
                "zipCode" => [ 46100001, 46126999 ],
                "ibge" => 2904605
            ]),
            "2904704" => new Map([
                "name" => "Buerarema",
                "zipCode" => [ 45615000, 45619999 ],
                "ibge" => 2904704
            ]),
            "2904753" => new Map([
                "name" => "Buritirama",
                "zipCode" => [ 47120000, 47149999 ],
                "ibge" => 2904753
            ]),
            "2904803" => new Map([
                "name" => "Caatiba",
                "zipCode" => [ 45130000, 45139999 ],
                "ibge" => 2904803
            ]),
            "2904852" => new Map([
                "name" => "Cabaceiras do Paraguaçu",
                "zipCode" => [ 44345000, 44349999 ],
                "ibge" => 2904852
            ]),
            "2904902" => new Map([
                "name" => "Cachoeira",
                "zipCode" => [ 44300000, 44319999 ],
                "ibge" => 2904902
            ]),
            "2905008" => new Map([
                "name" => "Caculé",
                "zipCode" => [ 46300000, 46309999 ],
                "ibge" => 2905008
            ]),
            "2905107" => new Map([
                "name" => "Caém",
                "zipCode" => [ 44730000, 44739999 ],
                "ibge" => 2905107
            ]),
            "2905156" => new Map([
                "name" => "Caetanos",
                "zipCode" => [ 45256000, 45257999 ],
                "ibge" => 2905156
            ]),
            "2905206" => new Map([
                "name" => "Caetité",
                "zipCode" => [ 46400000, 46424999 ],
                "ibge" => 2905206
            ]),
            "2905305" => new Map([
                "name" => "Cafarnaum",
                "zipCode" => [ 44880000, 44884999 ],
                "ibge" => 2905305
            ]),
            "2905404" => new Map([
                "name" => "Cairu",
                "zipCode" => [ 45420000, 45429999 ],
                "ibge" => 2905404
            ]),
            "2905503" => new Map([
                "name" => "Caldeirão Grande",
                "zipCode" => [ 44750000, 44754999 ],
                "ibge" => 2905503
            ]),
            "2905602" => new Map([
                "name" => "Camacan",
                "zipCode" => [ 45880000, 45889999 ],
                "ibge" => 2905602
            ]),
            "2905701" => new Map([
                "name" => "Camaçari",
                "zipCode" => [ 42800001, 42849999 ],
                "ibge" => 2905701
            ]),
            "2905800" => new Map([
                "name" => "Camamu",
                "zipCode" => [ 45445000, 45449999 ],
                "ibge" => 2905800
            ]),
            "2905909" => new Map([
                "name" => "Campo Alegre de Lourdes",
                "zipCode" => [ 47220000, 47239999 ],
                "ibge" => 2905909
            ]),
            "2906006" => new Map([
                "name" => "Campo Formoso",
                "zipCode" => [ 44790000, 44797999 ],
                "ibge" => 2906006
            ]),
            "2906105" => new Map([
                "name" => "Canápolis",
                "zipCode" => [ 47730000, 47739999 ],
                "ibge" => 2906105
            ]),
            "2906204" => new Map([
                "name" => "Canarana",
                "zipCode" => [ 44890000, 44894999 ],
                "ibge" => 2906204
            ]),
            "2906303" => new Map([
                "name" => "Canavieiras",
                "zipCode" => [ 45860000, 45864999 ],
                "ibge" => 2906303
            ]),
            "2906402" => new Map([
                "name" => "Candeal",
                "zipCode" => [ 48710000, 48719999 ],
                "ibge" => 2906402
            ]),
            "2906501" => new Map([
                "name" => "Candeias",
                "zipCode" => [ 43800001, 43849999 ],
                "ibge" => 2906501
            ]),
            "2906600" => new Map([
                "name" => "Candiba",
                "zipCode" => [ 46380000, 46389999 ],
                "ibge" => 2906600
            ]),
            "2906709" => new Map([
                "name" => "Cândido Sales",
                "zipCode" => [ 45157000, 45159999 ],
                "ibge" => 2906709
            ]),
            "2906808" => new Map([
                "name" => "Cansanção",
                "zipCode" => [ 48840000, 48849999 ],
                "ibge" => 2906808
            ]),
            "2906824" => new Map([
                "name" => "Canudos",
                "zipCode" => [ 48520000, 48539999 ],
                "ibge" => 2906824
            ]),
            "2906857" => new Map([
                "name" => "Capela do Alto Alegre",
                "zipCode" => [ 44645000, 44649999 ],
                "ibge" => 2906857
            ]),
            "2906873" => new Map([
                "name" => "Capim Grosso",
                "zipCode" => [ 44695000, 44697999 ],
                "ibge" => 2906873
            ]),
            "2906899" => new Map([
                "name" => "Caraíbas",
                "zipCode" => [ 45177000, 45179999 ],
                "ibge" => 2906899
            ]),
            "2906907" => new Map([
                "name" => "Caravelas",
                "zipCode" => [ 45900000, 45909999 ],
                "ibge" => 2906907
            ]),
            "2907004" => new Map([
                "name" => "Cardeal da Silva",
                "zipCode" => [ 48390000, 48399999 ],
                "ibge" => 2907004
            ]),
            "2907103" => new Map([
                "name" => "Carinhanha",
                "zipCode" => [ 46445000, 46445999 ],
                "ibge" => 2907103
            ]),
            "2907202" => new Map([
                "name" => "Casa Nova",
                "zipCode" => [ 47300000, 47349999 ],
                "ibge" => 2907202
            ]),
            "2907301" => new Map([
                "name" => "Castro Alves",
                "zipCode" => [ 44500000, 44519999 ],
                "ibge" => 2907301
            ]),
            "2907400" => new Map([
                "name" => "Catolândia",
                "zipCode" => [ 47845000, 47849999 ],
                "ibge" => 2907400
            ]),
            "2907509" => new Map([
                "name" => "Catu",
                "zipCode" => [ 48110000, 48119999 ],
                "ibge" => 2907509
            ]),
            "2907558" => new Map([
                "name" => "Caturama",
                "zipCode" => [ 46575000, 46579999 ],
                "ibge" => 2907558
            ]),
            "2907608" => new Map([
                "name" => "Central",
                "zipCode" => [ 44940000, 44949999 ],
                "ibge" => 2907608
            ]),
            "2907707" => new Map([
                "name" => "Chorrochó",
                "zipCode" => [ 48660000, 48679999 ],
                "ibge" => 2907707
            ]),
            "2907806" => new Map([
                "name" => "Cícero Dantas",
                "zipCode" => [ 48410000, 48414999 ],
                "ibge" => 2907806
            ]),
            "2907905" => new Map([
                "name" => "Cipó",
                "zipCode" => [ 48450000, 48454999 ],
                "ibge" => 2907905
            ]),
            "2908002" => new Map([
                "name" => "Coaraci",
                "zipCode" => [ 45638000, 45639999 ],
                "ibge" => 2908002
            ]),
            "2908101" => new Map([
                "name" => "Cocos",
                "zipCode" => [ 47680000, 47689999 ],
                "ibge" => 2908101
            ]),
            "2908200" => new Map([
                "name" => "Conceição da Feira",
                "zipCode" => [ 44320000, 44329999 ],
                "ibge" => 2908200
            ]),
            "2908309" => new Map([
                "name" => "Conceição do Almeida",
                "zipCode" => [ 44540000, 44549999 ],
                "ibge" => 2908309
            ]),
            "2908408" => new Map([
                "name" => "Conceição do Coité",
                "zipCode" => [ 48730000, 48749999 ],
                "ibge" => 2908408
            ]),
            "2908507" => new Map([
                "name" => "Conceição do Jacuípe",
                "zipCode" => [ 44245000, 44249999 ],
                "ibge" => 2908507
            ]),
            "2908606" => new Map([
                "name" => "Conde",
                "zipCode" => [ 48300000, 48309999 ],
                "ibge" => 2908606
            ]),
            "2908705" => new Map([
                "name" => "Condeúba",
                "zipCode" => [ 46200000, 46204999 ],
                "ibge" => 2908705
            ]),
            "2908804" => new Map([
                "name" => "Contendas do Sincorá",
                "zipCode" => [ 46620000, 46639999 ],
                "ibge" => 2908804
            ]),
            "2908903" => new Map([
                "name" => "Coração de Maria",
                "zipCode" => [ 44250000, 44254999 ],
                "ibge" => 2908903
            ]),
            "2909000" => new Map([
                "name" => "Cordeiros",
                "zipCode" => [ 46280000, 46289999 ],
                "ibge" => 2909000
            ]),
            "2909109" => new Map([
                "name" => "Coribe",
                "zipCode" => [ 47690000, 47699999 ],
                "ibge" => 2909109
            ]),
            "2909208" => new Map([
                "name" => "Coronel João Sá",
                "zipCode" => [ 48590000, 48599999 ],
                "ibge" => 2909208
            ]),
            "2909307" => new Map([
                "name" => "Correntina",
                "zipCode" => [ 47650000, 47654999 ],
                "ibge" => 2909307
            ]),
            "2909406" => new Map([
                "name" => "Cotegipe",
                "zipCode" => [ 47900000, 47939999 ],
                "ibge" => 2909406
            ]),
            "2909505" => new Map([
                "name" => "Cravolândia",
                "zipCode" => [ 45330000, 45339999 ],
                "ibge" => 2909505
            ]),
            "2909604" => new Map([
                "name" => "Crisópolis",
                "zipCode" => [ 48480000, 48484999 ],
                "ibge" => 2909604
            ]),
            "2909703" => new Map([
                "name" => "Cristópolis",
                "zipCode" => [ 47950000, 47959999 ],
                "ibge" => 2909703
            ]),
            "2909802" => new Map([
                "name" => "Cruz das Almas",
                "zipCode" => [ 44380000, 44399999 ],
                "ibge" => 2909802
            ]),
            "2909901" => new Map([
                "name" => "Curaçá",
                "zipCode" => [ 48930000, 48949999 ],
                "ibge" => 2909901
            ]),
            "2910008" => new Map([
                "name" => "Dário Meira",
                "zipCode" => [ 45590000, 45599999 ],
                "ibge" => 2910008
            ]),
            "2910057" => new Map([
                "name" => "Dias D'Ávila",
                "zipCode" => [ 42850000, 43699999 ],
                "ibge" => 2910057
            ]),
            "2910107" => new Map([
                "name" => "Dom Basílio",
                "zipCode" => [ 46165000, 46169999 ],
                "ibge" => 2910107
            ]),
            "2910206" => new Map([
                "name" => "Dom Macedo Costa",
                "zipCode" => [ 44560000, 44564999 ],
                "ibge" => 2910206
            ]),
            "2910305" => new Map([
                "name" => "Elísio Medrado",
                "zipCode" => [ 45305000, 45309999 ],
                "ibge" => 2910305
            ]),
            "2910404" => new Map([
                "name" => "Encruzilhada",
                "zipCode" => [ 45150000, 45154999 ],
                "ibge" => 2910404
            ]),
            "2910503" => new Map([
                "name" => "Entre Rios",
                "zipCode" => [ 48180000, 48279999 ],
                "ibge" => 2910503
            ]),
            "2900504" => new Map([
                "name" => "Érico Cardoso",
                "zipCode" => [ 46180000, 46189999 ],
                "ibge" => 2900504
            ]),
            "2910602" => new Map([
                "name" => "Esplanada",
                "zipCode" => [ 48370000, 48389999 ],
                "ibge" => 2910602
            ]),
            "2910701" => new Map([
                "name" => "Euclides da Cunha",
                "zipCode" => [ 48500000, 48519999 ],
                "ibge" => 2910701
            ]),
            "2910727" => new Map([
                "name" => "Eunápolis",
                "zipCode" => [ 45820001, 45833999 ],
                "ibge" => 2910727
            ]),
            "2910750" => new Map([
                "name" => "Fátima",
                "zipCode" => [ 48415000, 48419999 ],
                "ibge" => 2910750
            ]),
            "2910776" => new Map([
                "name" => "Feira da Mata",
                "zipCode" => [ 46446000, 46449999 ],
                "ibge" => 2910776
            ]),
            "2910800" => new Map([
                "name" => "Feira de Santana",
                "zipCode" => [ 44000001, 44149999 ],
                "ibge" => 2910800
            ]),
            "2910859" => new Map([
                "name" => "Filadélfia",
                "zipCode" => [ 44775000, 44779999 ],
                "ibge" => 2910859
            ]),
            "2910909" => new Map([
                "name" => "Firmino Alves",
                "zipCode" => [ 45720000, 45724999 ],
                "ibge" => 2910909
            ]),
            "2911006" => new Map([
                "name" => "Floresta Azul",
                "zipCode" => [ 45740000, 45744999 ],
                "ibge" => 2911006
            ]),
            "2911105" => new Map([
                "name" => "Formosa do Rio Preto",
                "zipCode" => [ 47990000, 47999999 ],
                "ibge" => 2911105
            ]),
            "2911204" => new Map([
                "name" => "Gandu",
                "zipCode" => [ 45450000, 45451999 ],
                "ibge" => 2911204
            ]),
            "2911253" => new Map([
                "name" => "Gavião",
                "zipCode" => [ 44650000, 44654999 ],
                "ibge" => 2911253
            ]),
            "2911303" => new Map([
                "name" => "Gentio do Ouro",
                "zipCode" => [ 47450000, 47499999 ],
                "ibge" => 2911303
            ]),
            "2911402" => new Map([
                "name" => "Glória",
                "zipCode" => [ 48620000, 48629999 ],
                "ibge" => 2911402
            ]),
            "2911501" => new Map([
                "name" => "Gongogi",
                "zipCode" => [ 45540000, 45544999 ],
                "ibge" => 2911501
            ]),
            "2911600" => new Map([
                "name" => "Governador Mangabeira",
                "zipCode" => [ 44350000, 44359999 ],
                "ibge" => 2911600
            ]),
            "2911659" => new Map([
                "name" => "Guajeru",
                "zipCode" => [ 46205000, 46219999 ],
                "ibge" => 2911659
            ]),
            "2911709" => new Map([
                "name" => "Guanambi",
                "zipCode" => [ 46430000, 46437999 ],
                "ibge" => 2911709
            ]),
            "2911808" => new Map([
                "name" => "Guaratinga",
                "zipCode" => [ 45840000, 45847999 ],
                "ibge" => 2911808
            ]),
            "2911857" => new Map([
                "name" => "Heliópolis",
                "zipCode" => [ 48445000, 48449999 ],
                "ibge" => 2911857
            ]),
            "2911907" => new Map([
                "name" => "Iaçu",
                "zipCode" => [ 46860000, 46874999 ],
                "ibge" => 2911907
            ]),
            "2912004" => new Map([
                "name" => "Ibiassucê",
                "zipCode" => [ 46390000, 46399999 ],
                "ibge" => 2912004
            ]),
            "2912103" => new Map([
                "name" => "Ibicaraí",
                "zipCode" => [ 45745000, 45749999 ],
                "ibge" => 2912103
            ]),
            "2912202" => new Map([
                "name" => "Ibicoara",
                "zipCode" => [ 46760000, 46764999 ],
                "ibge" => 2912202
            ]),
            "2912301" => new Map([
                "name" => "Ibicuí",
                "zipCode" => [ 45290000, 45299999 ],
                "ibge" => 2912301
            ]),
            "2912400" => new Map([
                "name" => "Ibipeba",
                "zipCode" => [ 44970000, 44989999 ],
                "ibge" => 2912400
            ]),
            "2912509" => new Map([
                "name" => "Ibipitanga",
                "zipCode" => [ 46540000, 46549999 ],
                "ibge" => 2912509
            ]),
            "2912608" => new Map([
                "name" => "Ibiquera",
                "zipCode" => [ 46840000, 46849999 ],
                "ibge" => 2912608
            ]),
            "2912707" => new Map([
                "name" => "Ibirapitanga",
                "zipCode" => [ 45500000, 45519999 ],
                "ibge" => 2912707
            ]),
            "2912806" => new Map([
                "name" => "Ibirapuã",
                "zipCode" => [ 45940000, 45949999 ],
                "ibge" => 2912806
            ]),
            "2912905" => new Map([
                "name" => "Ibirataia",
                "zipCode" => [ 45580000, 45584999 ],
                "ibge" => 2912905
            ]),
            "2913002" => new Map([
                "name" => "Ibitiara",
                "zipCode" => [ 46700000, 46729999 ],
                "ibge" => 2913002
            ]),
            "2913101" => new Map([
                "name" => "Ibititá",
                "zipCode" => [ 44960000, 44969999 ],
                "ibge" => 2913101
            ]),
            "2913200" => new Map([
                "name" => "Ibotirama",
                "zipCode" => [ 47520000, 47529999 ],
                "ibge" => 2913200
            ]),
            "2913309" => new Map([
                "name" => "Ichu",
                "zipCode" => [ 48725000, 48729999 ],
                "ibge" => 2913309
            ]),
            "2913408" => new Map([
                "name" => "Igaporã",
                "zipCode" => [ 46490000, 46499999 ],
                "ibge" => 2913408
            ]),
            "2913457" => new Map([
                "name" => "Igrapiúna",
                "zipCode" => [ 45443000, 45444999 ],
                "ibge" => 2913457
            ]),
            "2913507" => new Map([
                "name" => "Iguaí",
                "zipCode" => [ 45280000, 45289999 ],
                "ibge" => 2913507
            ]),
            "2913606" => new Map([
                "name" => "Ilhéus",
                "zipCode" => [ 45650001, 45674999 ],
                "ibge" => 2913606
            ]),
            "2913705" => new Map([
                "name" => "Inhambupe",
                "zipCode" => [ 48490000, 48499999 ],
                "ibge" => 2913705
            ]),
            "2913804" => new Map([
                "name" => "Ipecaetá",
                "zipCode" => [ 44680000, 44689999 ],
                "ibge" => 2913804
            ]),
            "2913903" => new Map([
                "name" => "Ipiaú",
                "zipCode" => [ 45570000, 45579999 ],
                "ibge" => 2913903
            ]),
            "2914000" => new Map([
                "name" => "Ipirá",
                "zipCode" => [ 44600000, 44609999 ],
                "ibge" => 2914000
            ]),
            "2914109" => new Map([
                "name" => "Ipupiara",
                "zipCode" => [ 47590000, 47599999 ],
                "ibge" => 2914109
            ]),
            "2914208" => new Map([
                "name" => "Irajuba",
                "zipCode" => [ 45370000, 45374999 ],
                "ibge" => 2914208
            ]),
            "2914307" => new Map([
                "name" => "Iramaia",
                "zipCode" => [ 46770000, 46779999 ],
                "ibge" => 2914307
            ]),
            "2914406" => new Map([
                "name" => "Iraquara",
                "zipCode" => [ 46980000, 46989999 ],
                "ibge" => 2914406
            ]),
            "2914505" => new Map([
                "name" => "Irará",
                "zipCode" => [ 44255000, 44259999 ],
                "ibge" => 2914505
            ]),
            "2914604" => new Map([
                "name" => "Irecê",
                "zipCode" => [ [     44860000,     44879999 ], [     44900000,     44904999 ] ],
                "ibge" => 2914604
            ]),
            "2914653" => new Map([
                "name" => "Itabela",
                "zipCode" => [ 45848000, 45849999 ],
                "ibge" => 2914653
            ]),
            "2914703" => new Map([
                "name" => "Itaberaba",
                "zipCode" => [ 46880000, 46899999 ],
                "ibge" => 2914703
            ]),
            "2914802" => new Map([
                "name" => "Itabuna",
                "zipCode" => [ 45600001, 45614999 ],
                "ibge" => 2914802
            ]),
            "2914901" => new Map([
                "name" => "Itacaré",
                "zipCode" => [ 45530000, 45539999 ],
                "ibge" => 2914901
            ]),
            "2915007" => new Map([
                "name" => "Itaeté",
                "zipCode" => [ 46790000, 46799999 ],
                "ibge" => 2915007
            ]),
            "2915106" => new Map([
                "name" => "Itagi",
                "zipCode" => [ 45230000, 45239999 ],
                "ibge" => 2915106
            ]),
            "2915205" => new Map([
                "name" => "Itagibá",
                "zipCode" => [ 45585000, 45589999 ],
                "ibge" => 2915205
            ]),
            "2915304" => new Map([
                "name" => "Itagimirim",
                "zipCode" => [ 45850000, 45854999 ],
                "ibge" => 2915304
            ]),
            "2915353" => new Map([
                "name" => "Itaguaçu da Bahia",
                "zipCode" => [ 47440000, 47449999 ],
                "ibge" => 2915353
            ]),
            "2915403" => new Map([
                "name" => "Itaju do Colônia",
                "zipCode" => [ 45730000, 45739999 ],
                "ibge" => 2915403
            ]),
            "2915502" => new Map([
                "name" => "Itajuípe",
                "zipCode" => [ 45630000, 45637999 ],
                "ibge" => 2915502
            ]),
            "2915601" => new Map([
                "name" => "Itamaraju",
                "zipCode" => [ 45836000, 45839999 ],
                "ibge" => 2915601
            ]),
            "2915700" => new Map([
                "name" => "Itamari",
                "zipCode" => [ 45455000, 45459999 ],
                "ibge" => 2915700
            ]),
            "2915809" => new Map([
                "name" => "Itambé",
                "zipCode" => [ 45140000, 45149999 ],
                "ibge" => 2915809
            ]),
            "2915908" => new Map([
                "name" => "Itanagra",
                "zipCode" => [ 48290000, 48299999 ],
                "ibge" => 2915908
            ]),
            "2916005" => new Map([
                "name" => "Itanhém",
                "zipCode" => [ 45970000, 45979999 ],
                "ibge" => 2916005
            ]),
            "2916104" => new Map([
                "name" => "Itaparica",
                "zipCode" => [ 44460000, 44469999 ],
                "ibge" => 2916104
            ]),
            "2916203" => new Map([
                "name" => "Itapé",
                "zipCode" => [ 45750000, 45759999 ],
                "ibge" => 2916203
            ]),
            "2916302" => new Map([
                "name" => "Itapebi",
                "zipCode" => [ 45855000, 45859999 ],
                "ibge" => 2916302
            ]),
            "2916401" => new Map([
                "name" => "Itapetinga",
                "zipCode" => [ 45700000, 45709999 ],
                "ibge" => 2916401
            ]),
            "2916500" => new Map([
                "name" => "Itapicuru",
                "zipCode" => [ 48475000, 48479999 ],
                "ibge" => 2916500
            ]),
            "2916609" => new Map([
                "name" => "Itapitanga",
                "zipCode" => [ 45645000, 45649999 ],
                "ibge" => 2916609
            ]),
            "2916708" => new Map([
                "name" => "Itaquara",
                "zipCode" => [ 45340000, 45344999 ],
                "ibge" => 2916708
            ]),
            "2916807" => new Map([
                "name" => "Itarantim",
                "zipCode" => [ 45780000, 45789999 ],
                "ibge" => 2916807
            ]),
            "2916856" => new Map([
                "name" => "Itatim",
                "zipCode" => [ 46875000, 46879999 ],
                "ibge" => 2916856
            ]),
            "2916906" => new Map([
                "name" => "Itiruçu",
                "zipCode" => [ 45350000, 45354999 ],
                "ibge" => 2916906
            ]),
            "2917003" => new Map([
                "name" => "Itiúba",
                "zipCode" => [ 48850000, 48859999 ],
                "ibge" => 2917003
            ]),
            "2917102" => new Map([
                "name" => "Itororó",
                "zipCode" => [ 45710000, 45719999 ],
                "ibge" => 2917102
            ]),
            "2917201" => new Map([
                "name" => "Ituaçu",
                "zipCode" => [ 46640000, 46649999 ],
                "ibge" => 2917201
            ]),
            "2917300" => new Map([
                "name" => "Ituberá",
                "zipCode" => [ 45435000, 45435999 ],
                "ibge" => 2917300
            ]),
            "2917334" => new Map([
                "name" => "Iuiu",
                "zipCode" => [ 46438001, 46439999 ],
                "ibge" => 2917334
            ]),
            "2917359" => new Map([
                "name" => "Jaborandi",
                "zipCode" => [ 47655000, 47664999 ],
                "ibge" => 2917359
            ]),
            "2917409" => new Map([
                "name" => "Jacaraci",
                "zipCode" => [ 46310000, 46329999 ],
                "ibge" => 2917409
            ]),
            "2917508" => new Map([
                "name" => "Jacobina",
                "zipCode" => [ 44700000, 44709999 ],
                "ibge" => 2917508
            ]),
            "2917607" => new Map([
                "name" => "Jaguaquara",
                "zipCode" => [ 45345000, 45349999 ],
                "ibge" => 2917607
            ]),
            "2917706" => new Map([
                "name" => "Jaguarari",
                "zipCode" => [ 48960000, 48969999 ],
                "ibge" => 2917706
            ]),
            "2917805" => new Map([
                "name" => "Jaguaripe",
                "zipCode" => [ 44480000, 44489999 ],
                "ibge" => 2917805
            ]),
            "2917904" => new Map([
                "name" => "Jandaíra",
                "zipCode" => [ 48310000, 48329999 ],
                "ibge" => 2917904
            ]),
            "2918001" => new Map([
                "name" => "Jequié",
                "zipCode" => [ 45200001, 45214999 ],
                "ibge" => 2918001
            ]),
            "2918100" => new Map([
                "name" => "Jeremoabo",
                "zipCode" => [ 48540000, 48564999 ],
                "ibge" => 2918100
            ]),
            "2918209" => new Map([
                "name" => "Jiquiriçá",
                "zipCode" => [ 45470000, 45479999 ],
                "ibge" => 2918209
            ]),
            "2918308" => new Map([
                "name" => "Jitaúna",
                "zipCode" => [ 45225000, 45229999 ],
                "ibge" => 2918308
            ]),
            "2918357" => new Map([
                "name" => "João Dourado",
                "zipCode" => [ 44920000, 44924999 ],
                "ibge" => 2918357
            ]),
            "2918407" => new Map([
                "name" => "Juazeiro",
                "zipCode" => [ 48900001, 48924999 ],
                "ibge" => 2918407
            ]),
            "2918456" => new Map([
                "name" => "Jucuruçu",
                "zipCode" => [ 45834000, 45835999 ],
                "ibge" => 2918456
            ]),
            "2918506" => new Map([
                "name" => "Jussara",
                "zipCode" => [ 44925000, 44929999 ],
                "ibge" => 2918506
            ]),
            "2918555" => new Map([
                "name" => "Jussari",
                "zipCode" => [ 45622000, 45624999 ],
                "ibge" => 2918555
            ]),
            "2918605" => new Map([
                "name" => "Jussiape",
                "zipCode" => [ 46670000, 46689999 ],
                "ibge" => 2918605
            ]),
            "2918704" => new Map([
                "name" => "Lafaiete Coutinho",
                "zipCode" => [ 45215000, 45219999 ],
                "ibge" => 2918704
            ]),
            "2918753" => new Map([
                "name" => "Lagoa Real",
                "zipCode" => [ 46425000, 46429999 ],
                "ibge" => 2918753
            ]),
            "2918803" => new Map([
                "name" => "Laje",
                "zipCode" => [ 45490000, 45499999 ],
                "ibge" => 2918803
            ]),
            "2918902" => new Map([
                "name" => "Lajedão",
                "zipCode" => [ 45950000, 45954999 ],
                "ibge" => 2918902
            ]),
            "2919009" => new Map([
                "name" => "Lajedinho",
                "zipCode" => [ 46825000, 46829999 ],
                "ibge" => 2919009
            ]),
            "2919058" => new Map([
                "name" => "Lajedo do Tabocal",
                "zipCode" => [ 45365000, 45369999 ],
                "ibge" => 2919058
            ]),
            "2919108" => new Map([
                "name" => "Lamarão",
                "zipCode" => [ 48720000, 48724999 ],
                "ibge" => 2919108
            ]),
            "2919157" => new Map([
                "name" => "Lapão",
                "zipCode" => [ 44905000, 44909999 ],
                "ibge" => 2919157
            ]),
            "2919207" => new Map([
                "name" => "Lauro de Freitas",
                "zipCode" => [ 42700001, 42799999 ],
                "ibge" => 2919207
            ]),
            "2919306" => new Map([
                "name" => "Lençóis",
                "zipCode" => [ 46960000, 46969999 ],
                "ibge" => 2919306
            ]),
            "2919405" => new Map([
                "name" => "Licínio de Almeida",
                "zipCode" => [ 46330000, 46349999 ],
                "ibge" => 2919405
            ]),
            "2919504" => new Map([
                "name" => "Livramento de Nossa Senhora",
                "zipCode" => [ 46140000, 46164999 ],
                "ibge" => 2919504
            ]),
            "2919553" => new Map([
                "name" => "Luís Eduardo Magalhães",
                "zipCode" => [ 47850001, 47869999 ],
                "ibge" => 2919553
            ]),
            "2919603" => new Map([
                "name" => "Macajuba",
                "zipCode" => [ 46805000, 46809999 ],
                "ibge" => 2919603
            ]),
            "2919702" => new Map([
                "name" => "Macarani",
                "zipCode" => [ 45760000, 45769999 ],
                "ibge" => 2919702
            ]),
            "2919801" => new Map([
                "name" => "Macaúbas",
                "zipCode" => [ 46500000, 46529999 ],
                "ibge" => 2919801
            ]),
            "2919900" => new Map([
                "name" => "Macururé",
                "zipCode" => [ 48650000, 48659999 ],
                "ibge" => 2919900
            ]),
            "2919926" => new Map([
                "name" => "Madre de Deus",
                "zipCode" => [ 42600000, 42699999 ],
                "ibge" => 2919926
            ]),
            "2919959" => new Map([
                "name" => "Maetinga",
                "zipCode" => [ 46255000, 46269999 ],
                "ibge" => 2919959
            ]),
            "2920007" => new Map([
                "name" => "Maiquinique",
                "zipCode" => [ 45770000, 45779999 ],
                "ibge" => 2920007
            ]),
            "2920106" => new Map([
                "name" => "Mairi",
                "zipCode" => [ 44630000, 44634999 ],
                "ibge" => 2920106
            ]),
            "2920205" => new Map([
                "name" => "Malhada",
                "zipCode" => [ 46440000, 46444999 ],
                "ibge" => 2920205
            ]),
            "2920304" => new Map([
                "name" => "Malhada de Pedras",
                "zipCode" => [ 46127000, 46129999 ],
                "ibge" => 2920304
            ]),
            "2920403" => new Map([
                "name" => "Manoel Vitorino",
                "zipCode" => [ 45240000, 45249999 ],
                "ibge" => 2920403
            ]),
            "2920452" => new Map([
                "name" => "Mansidão",
                "zipCode" => [ 47160000, 47199999 ],
                "ibge" => 2920452
            ]),
            "2920502" => new Map([
                "name" => "Maracás",
                "zipCode" => [ 45360000, 45364999 ],
                "ibge" => 2920502
            ]),
            "2920601" => new Map([
                "name" => "Maragogipe",
                "zipCode" => [ 44420000, 44429999 ],
                "ibge" => 2920601
            ]),
            "2920700" => new Map([
                "name" => "Maraú",
                "zipCode" => [ 45520000, 45529999 ],
                "ibge" => 2920700
            ]),
            "2920809" => new Map([
                "name" => "Marcionílio Souza",
                "zipCode" => [ 46780000, 46789999 ],
                "ibge" => 2920809
            ]),
            "2920908" => new Map([
                "name" => "Mascote",
                "zipCode" => [ 45870000, 45879999 ],
                "ibge" => 2920908
            ]),
            "2921005" => new Map([
                "name" => "Mata de São João",
                "zipCode" => [ 48280000, 48289999 ],
                "ibge" => 2921005
            ]),
            "2921054" => new Map([
                "name" => "Matina",
                "zipCode" => [ 46480000, 46489999 ],
                "ibge" => 2921054
            ]),
            "2921104" => new Map([
                "name" => "Medeiros Neto",
                "zipCode" => [ 45960000, 45969999 ],
                "ibge" => 2921104
            ]),
            "2921203" => new Map([
                "name" => "Miguel Calmon",
                "zipCode" => [ 44720000, 44729999 ],
                "ibge" => 2921203
            ]),
            "2921302" => new Map([
                "name" => "Milagres",
                "zipCode" => [ 45315000, 45319999 ],
                "ibge" => 2921302
            ]),
            "2921401" => new Map([
                "name" => "Mirangaba",
                "zipCode" => [ 44745000, 44749999 ],
                "ibge" => 2921401
            ]),
            "2921450" => new Map([
                "name" => "Mirante",
                "zipCode" => [ 45255000, 45255999 ],
                "ibge" => 2921450
            ]),
            "2921500" => new Map([
                "name" => "Monte Santo",
                "zipCode" => [ 48800000, 48829999 ],
                "ibge" => 2921500
            ]),
            "2921609" => new Map([
                "name" => "Morpará",
                "zipCode" => [ 47580000, 47589999 ],
                "ibge" => 2921609
            ]),
            "2921708" => new Map([
                "name" => "Morro do Chapéu",
                "zipCode" => [ 44850000, 44859999 ],
                "ibge" => 2921708
            ]),
            "2921807" => new Map([
                "name" => "Mortugaba",
                "zipCode" => [ 46290000, 46299999 ],
                "ibge" => 2921807
            ]),
            "2921906" => new Map([
                "name" => "Mucugê",
                "zipCode" => [ 46750000, 46759999 ],
                "ibge" => 2921906
            ]),
            "2922003" => new Map([
                "name" => "Mucuri",
                "zipCode" => [ 45930000, 45939999 ],
                "ibge" => 2922003
            ]),
            "2922052" => new Map([
                "name" => "Mulungu do Morro",
                "zipCode" => [ 44885000, 44889999 ],
                "ibge" => 2922052
            ]),
            "2922102" => new Map([
                "name" => "Mundo Novo",
                "zipCode" => [ 44800000, 44829999 ],
                "ibge" => 2922102
            ]),
            "2922201" => new Map([
                "name" => "Muniz Ferreira",
                "zipCode" => [ 44575000, 44579999 ],
                "ibge" => 2922201
            ]),
            "2922250" => new Map([
                "name" => "Muquém de São Francisco",
                "zipCode" => [ 47115000, 47119999 ],
                "ibge" => 2922250
            ]),
            "2922300" => new Map([
                "name" => "Muritiba",
                "zipCode" => [ 44340000, 44344999 ],
                "ibge" => 2922300
            ]),
            "2922409" => new Map([
                "name" => "Mutuípe",
                "zipCode" => [ 45480000, 45489999 ],
                "ibge" => 2922409
            ]),
            "2922508" => new Map([
                "name" => "Nazaré",
                "zipCode" => [ 44400000, 44419999 ],
                "ibge" => 2922508
            ]),
            "2922607" => new Map([
                "name" => "Nilo Peçanha",
                "zipCode" => [ 45440000, 45442999 ],
                "ibge" => 2922607
            ]),
            "2922656" => new Map([
                "name" => "Nordestina",
                "zipCode" => [ 48870000, 48879999 ],
                "ibge" => 2922656
            ]),
            "2922706" => new Map([
                "name" => "Nova Canaã",
                "zipCode" => [ 45270000, 45279999 ],
                "ibge" => 2922706
            ]),
            "2922730" => new Map([
                "name" => "Nova Fátima",
                "zipCode" => [ 44642000, 44644999 ],
                "ibge" => 2922730
            ]),
            "2922755" => new Map([
                "name" => "Nova Ibiá",
                "zipCode" => [ 45452000, 45454999 ],
                "ibge" => 2922755
            ]),
            "2922805" => new Map([
                "name" => "Nova Itarana",
                "zipCode" => [ 45390000, 45399999 ],
                "ibge" => 2922805
            ]),
            "2922854" => new Map([
                "name" => "Nova Redenção",
                "zipCode" => [ 46835000, 46839999 ],
                "ibge" => 2922854
            ]),
            "2922904" => new Map([
                "name" => "Nova Soure",
                "zipCode" => [ 48460000, 48469999 ],
                "ibge" => 2922904
            ]),
            "2923001" => new Map([
                "name" => "Nova Viçosa",
                "zipCode" => [ 45920000, 45929999 ],
                "ibge" => 2923001
            ]),
            "2923035" => new Map([
                "name" => "Novo Horizonte",
                "zipCode" => [ 46730000, 46739999 ],
                "ibge" => 2923035
            ]),
            "2923050" => new Map([
                "name" => "Novo Triunfo",
                "zipCode" => [ 48455000, 48459999 ],
                "ibge" => 2923050
            ]),
            "2923100" => new Map([
                "name" => "Olindina",
                "zipCode" => [ 48470000, 48474999 ],
                "ibge" => 2923100
            ]),
            "2923209" => new Map([
                "name" => "Oliveira dos Brejinhos",
                "zipCode" => [ 47530000, 47559999 ],
                "ibge" => 2923209
            ]),
            "2923308" => new Map([
                "name" => "Ouriçangas",
                "zipCode" => [ 48150000, 48169999 ],
                "ibge" => 2923308
            ]),
            "2923357" => new Map([
                "name" => "Ourolândia",
                "zipCode" => [ 44718000, 44719999 ],
                "ibge" => 2923357
            ]),
            "2923407" => new Map([
                "name" => "Palmas de Monte Alto",
                "zipCode" => [ 46460000, 46469999 ],
                "ibge" => 2923407
            ]),
            "2923506" => new Map([
                "name" => "Palmeiras",
                "zipCode" => [ 46930000, 46959999 ],
                "ibge" => 2923506
            ]),
            "2923605" => new Map([
                "name" => "Paramirim",
                "zipCode" => [ 46190000, 46199999 ],
                "ibge" => 2923605
            ]),
            "2923704" => new Map([
                "name" => "Paratinga",
                "zipCode" => [ 47500000, 47519999 ],
                "ibge" => 2923704
            ]),
            "2923803" => new Map([
                "name" => "Paripiranga",
                "zipCode" => [ 48430000, 48434999 ],
                "ibge" => 2923803
            ]),
            "2923902" => new Map([
                "name" => "Pau Brasil",
                "zipCode" => [ 45890000, 45899999 ],
                "ibge" => 2923902
            ]),
            "2924009" => new Map([
                "name" => "Paulo Afonso",
                "zipCode" => [ 48600001, 48619999 ],
                "ibge" => 2924009
            ]),
            "2924058" => new Map([
                "name" => "Pé de Serra",
                "zipCode" => [ 44655000, 44659999 ],
                "ibge" => 2924058
            ]),
            "2924108" => new Map([
                "name" => "Pedrão",
                "zipCode" => [ 48140000, 48149999 ],
                "ibge" => 2924108
            ]),
            "2924207" => new Map([
                "name" => "Pedro Alexandre",
                "zipCode" => [ 48580000, 48589999 ],
                "ibge" => 2924207
            ]),
            "2924306" => new Map([
                "name" => "Piatã",
                "zipCode" => [ 46765000, 46769999 ],
                "ibge" => 2924306
            ]),
            "2924405" => new Map([
                "name" => "Pilão Arcado",
                "zipCode" => [ 47240000, 47299999 ],
                "ibge" => 2924405
            ]),
            "2924504" => new Map([
                "name" => "Pindaí",
                "zipCode" => [ 46360000, 46379999 ],
                "ibge" => 2924504
            ]),
            "2924603" => new Map([
                "name" => "Pindobaçu",
                "zipCode" => [ 44770000, 44774999 ],
                "ibge" => 2924603
            ]),
            "2924652" => new Map([
                "name" => "Pintadas",
                "zipCode" => [ 44610000, 44619999 ],
                "ibge" => 2924652
            ]),
            "2924678" => new Map([
                "name" => "Piraí do Norte",
                "zipCode" => [ 45436000, 45439999 ],
                "ibge" => 2924678
            ]),
            "2924702" => new Map([
                "name" => "Piripá",
                "zipCode" => [ 46270000, 46279999 ],
                "ibge" => 2924702
            ]),
            "2924801" => new Map([
                "name" => "Piritiba",
                "zipCode" => [ 44830000, 44839999 ],
                "ibge" => 2924801
            ]),
            "2924900" => new Map([
                "name" => "Planaltino",
                "zipCode" => [ 45375000, 45389999 ],
                "ibge" => 2924900
            ]),
            "2925006" => new Map([
                "name" => "Planalto",
                "zipCode" => [ 45190000, 45199999 ],
                "ibge" => 2925006
            ]),
            "2925105" => new Map([
                "name" => "Poções",
                "zipCode" => [ 45260000, 45269999 ],
                "ibge" => 2925105
            ]),
            "2925204" => new Map([
                "name" => "Pojuca",
                "zipCode" => [ 48120000, 48129999 ],
                "ibge" => 2925204
            ]),
            "2925253" => new Map([
                "name" => "Ponto Novo",
                "zipCode" => [ 44755000, 44769999 ],
                "ibge" => 2925253
            ]),
            "2925303" => new Map([
                "name" => "Porto Seguro",
                "zipCode" => [ 45810000, 45819999 ],
                "ibge" => 2925303
            ]),
            "2925402" => new Map([
                "name" => "Potiraguá",
                "zipCode" => [ 45790000, 45799999 ],
                "ibge" => 2925402
            ]),
            "2925501" => new Map([
                "name" => "Prado",
                "zipCode" => [ 45980000, 45984999 ],
                "ibge" => 2925501
            ]),
            "2925600" => new Map([
                "name" => "Presidente Dutra",
                "zipCode" => [ 44930000, 44939999 ],
                "ibge" => 2925600
            ]),
            "2925709" => new Map([
                "name" => "Presidente Jânio Quadros",
                "zipCode" => [ 46250000, 46254999 ],
                "ibge" => 2925709
            ]),
            "2925758" => new Map([
                "name" => "Presidente Tancredo Neves",
                "zipCode" => [ 45416000, 45419999 ],
                "ibge" => 2925758
            ]),
            "2925808" => new Map([
                "name" => "Queimadas",
                "zipCode" => [ 48860000, 48869999 ],
                "ibge" => 2925808
            ]),
            "2925907" => new Map([
                "name" => "Quijingue",
                "zipCode" => [ 48830000, 48839999 ],
                "ibge" => 2925907
            ]),
            "2925931" => new Map([
                "name" => "Quixabeira",
                "zipCode" => [ 44713000, 44714999 ],
                "ibge" => 2925931
            ]),
            "2925956" => new Map([
                "name" => "Rafael Jambeiro",
                "zipCode" => [ 44520000, 44529999 ],
                "ibge" => 2925956
            ]),
            "2926004" => new Map([
                "name" => "Remanso",
                "zipCode" => [ 47200000, 47219999 ],
                "ibge" => 2926004
            ]),
            "2926103" => new Map([
                "name" => "Retirolândia",
                "zipCode" => [ 48750000, 48759999 ],
                "ibge" => 2926103
            ]),
            "2926202" => new Map([
                "name" => "Riachão das Neves",
                "zipCode" => [ 47970000, 47989999 ],
                "ibge" => 2926202
            ]),
            "2926301" => new Map([
                "name" => "Riachão do Jacuípe",
                "zipCode" => [ 44640000, 44641999 ],
                "ibge" => 2926301
            ]),
            "2926400" => new Map([
                "name" => "Riacho de Santana",
                "zipCode" => [ 46470000, 46479999 ],
                "ibge" => 2926400
            ]),
            "2926509" => new Map([
                "name" => "Ribeira do Amparo",
                "zipCode" => [ 48440000, 48444999 ],
                "ibge" => 2926509
            ]),
            "2926608" => new Map([
                "name" => "Ribeira do Pombal",
                "zipCode" => [ 48400000, 48404999 ],
                "ibge" => 2926608
            ]),
            "2926657" => new Map([
                "name" => "Ribeirão do Largo",
                "zipCode" => [ 45155000, 45156999 ],
                "ibge" => 2926657
            ]),
            "2926707" => new Map([
                "name" => "Rio de Contas",
                "zipCode" => [ 46170000, 46179999 ],
                "ibge" => 2926707
            ]),
            "2926806" => new Map([
                "name" => "Rio do Antônio",
                "zipCode" => [ 46220000, 46249999 ],
                "ibge" => 2926806
            ]),
            "2926905" => new Map([
                "name" => "Rio do Pires",
                "zipCode" => [ 46550000, 46569999 ],
                "ibge" => 2926905
            ]),
            "2927002" => new Map([
                "name" => "Rio Real",
                "zipCode" => [ 48330000, 48349999 ],
                "ibge" => 2927002
            ]),
            "2927101" => new Map([
                "name" => "Rodelas",
                "zipCode" => [ 48630000, 48649999 ],
                "ibge" => 2927101
            ]),
            "2927200" => new Map([
                "name" => "Ruy Barbosa",
                "zipCode" => [ 46800000, 46804999 ],
                "ibge" => 2927200
            ]),
            "2927309" => new Map([
                "name" => "Salinas da Margarida",
                "zipCode" => [ 44450000, 44459999 ],
                "ibge" => 2927309
            ]),
            "2927408" => new Map([
                "name" => "Salvador",
                "zipCode" => [ 40000001, 42599999 ],
                "ibge" => 2927408
            ]),
            "2927507" => new Map([
                "name" => "Santa Bárbara",
                "zipCode" => [ 44150000, 44159999 ],
                "ibge" => 2927507
            ]),
            "2927606" => new Map([
                "name" => "Santa Brígida",
                "zipCode" => [ 48570000, 48579999 ],
                "ibge" => 2927606
            ]),
            "2927705" => new Map([
                "name" => "Santa Cruz Cabrália",
                "zipCode" => [ 45807000, 45809999 ],
                "ibge" => 2927705
            ]),
            "2927804" => new Map([
                "name" => "Santa Cruz da Vitória",
                "zipCode" => [ 45725000, 45729999 ],
                "ibge" => 2927804
            ]),
            "2927903" => new Map([
                "name" => "Santa Inês",
                "zipCode" => [ 45320000, 45324999 ],
                "ibge" => 2927903
            ]),
            "2928059" => new Map([
                "name" => "Santa Luzia",
                "zipCode" => [ 45865000, 45869999 ],
                "ibge" => 2928059
            ]),
            "2928109" => new Map([
                "name" => "Santa Maria da Vitória",
                "zipCode" => [ 47640000, 47649999 ],
                "ibge" => 2928109
            ]),
            "2928406" => new Map([
                "name" => "Santa Rita de Cássia",
                "zipCode" => [ 47150000, 47159999 ],
                "ibge" => 2928406
            ]),
            "2928505" => new Map([
                "name" => "Santa Teresinha",
                "zipCode" => [ 44590000, 44599999 ],
                "ibge" => 2928505
            ]),
            "2928000" => new Map([
                "name" => "Santaluz",
                "zipCode" => [ 48880000, 48889999 ],
                "ibge" => 2928000
            ]),
            "2928208" => new Map([
                "name" => "Santana",
                "zipCode" => [ 47700000, 47729999 ],
                "ibge" => 2928208
            ]),
            "2928307" => new Map([
                "name" => "Santanópolis",
                "zipCode" => [ 44260000, 44269999 ],
                "ibge" => 2928307
            ]),
            "2928604" => new Map([
                "name" => "Santo Amaro",
                "zipCode" => [ 44200000, 44219999 ],
                "ibge" => 2928604
            ]),
            "2928703" => new Map([
                "name" => "Santo Antônio de Jesus",
                "zipCode" => [ 44430001, 44449999 ],
                "ibge" => 2928703
            ]),
            "2928802" => new Map([
                "name" => "Santo Estêvão",
                "zipCode" => [ 44190000, 44199999 ],
                "ibge" => 2928802
            ]),
            "2928901" => new Map([
                "name" => "São Desidério",
                "zipCode" => [ 47820000, 47829999 ],
                "ibge" => 2928901
            ]),
            "2928950" => new Map([
                "name" => "São Domingos",
                "zipCode" => [ 48895000, 48899999 ],
                "ibge" => 2928950
            ]),
            "2929107" => new Map([
                "name" => "São Felipe",
                "zipCode" => [ 44550000, 44559999 ],
                "ibge" => 2929107
            ]),
            "2929008" => new Map([
                "name" => "São Félix",
                "zipCode" => [ 44360000, 44379999 ],
                "ibge" => 2929008
            ]),
            "2929057" => new Map([
                "name" => "São Félix do Coribe",
                "zipCode" => [ 47665000, 47679999 ],
                "ibge" => 2929057
            ]),
            "2929206" => new Map([
                "name" => "São Francisco do Conde",
                "zipCode" => [ 43900000, 43999999 ],
                "ibge" => 2929206
            ]),
            "2929255" => new Map([
                "name" => "São Gabriel",
                "zipCode" => [ 44915000, 44919999 ],
                "ibge" => 2929255
            ]),
            "2929305" => new Map([
                "name" => "São Gonçalo dos Campos",
                "zipCode" => [ 44330000, 44339999 ],
                "ibge" => 2929305
            ]),
            "2929354" => new Map([
                "name" => "São José da Vitória",
                "zipCode" => [ 45620000, 45621999 ],
                "ibge" => 2929354
            ]),
            "2929370" => new Map([
                "name" => "São José do Jacuípe",
                "zipCode" => [ 44698000, 44699999 ],
                "ibge" => 2929370
            ]),
            "2929404" => new Map([
                "name" => "São Miguel das Matas",
                "zipCode" => [ 44580000, 44589999 ],
                "ibge" => 2929404
            ]),
            "2929503" => new Map([
                "name" => "São Sebastião do Passé",
                "zipCode" => [ 43850000, 43899999 ],
                "ibge" => 2929503
            ]),
            "2929602" => new Map([
                "name" => "Sapeaçu",
                "zipCode" => [ 44530000, 44539999 ],
                "ibge" => 2929602
            ]),
            "2929701" => new Map([
                "name" => "Sátiro Dias",
                "zipCode" => [ 48485000, 48489999 ],
                "ibge" => 2929701
            ]),
            "2929750" => new Map([
                "name" => "Saubara",
                "zipCode" => [ 44220000, 44229999 ],
                "ibge" => 2929750
            ]),
            "2929800" => new Map([
                "name" => "Saúde",
                "zipCode" => [ 44740000, 44744999 ],
                "ibge" => 2929800
            ]),
            "2929909" => new Map([
                "name" => "Seabra",
                "zipCode" => [ 46900000, 46929999 ],
                "ibge" => 2929909
            ]),
            "2930006" => new Map([
                "name" => "Sebastião Laranjeiras",
                "zipCode" => [ 46450000, 46459999 ],
                "ibge" => 2930006
            ]),
            "2930105" => new Map([
                "name" => "Senhor do Bonfim",
                "zipCode" => [ 48970000, 48989999 ],
                "ibge" => 2930105
            ]),
            "2930204" => new Map([
                "name" => "Sento Sé",
                "zipCode" => [ 47350000, 47399999 ],
                "ibge" => 2930204
            ]),
            "2930154" => new Map([
                "name" => "Serra do Ramalho",
                "zipCode" => [ 47630000, 47639999 ],
                "ibge" => 2930154
            ]),
            "2930303" => new Map([
                "name" => "Serra Dourada",
                "zipCode" => [ 47740000, 47749999 ],
                "ibge" => 2930303
            ]),
            "2930402" => new Map([
                "name" => "Serra Preta",
                "zipCode" => [ 44660000, 44669999 ],
                "ibge" => 2930402
            ]),
            "2930501" => new Map([
                "name" => "Serrinha",
                "zipCode" => [ 48700000, 48704999 ],
                "ibge" => 2930501
            ]),
            "2930600" => new Map([
                "name" => "Serrolândia",
                "zipCode" => [ 44710000, 44712999 ],
                "ibge" => 2930600
            ]),
            "2930709" => new Map([
                "name" => "Simões Filho",
                "zipCode" => [ 43700000, 43799999 ],
                "ibge" => 2930709
            ]),
            "2930758" => new Map([
                "name" => "Sítio do Mato",
                "zipCode" => [ 47610000, 47629999 ],
                "ibge" => 2930758
            ]),
            "2930766" => new Map([
                "name" => "Sítio do Quinto",
                "zipCode" => [ 48565000, 48569999 ],
                "ibge" => 2930766
            ]),
            "2930774" => new Map([
                "name" => "Sobradinho",
                "zipCode" => [ 48925000, 48929999 ],
                "ibge" => 2930774
            ]),
            "2930808" => new Map([
                "name" => "Souto Soares",
                "zipCode" => [ 46990000, 47099999 ],
                "ibge" => 2930808
            ]),
            "2930907" => new Map([
                "name" => "Tabocas do Brejo Velho",
                "zipCode" => [ 47760000, 47799999 ],
                "ibge" => 2930907
            ]),
            "2931004" => new Map([
                "name" => "Tanhaçu",
                "zipCode" => [ 46600000, 46619999 ],
                "ibge" => 2931004
            ]),
            "2931053" => new Map([
                "name" => "Tanque Novo",
                "zipCode" => [ 46580000, 46599999 ],
                "ibge" => 2931053
            ]),
            "2931103" => new Map([
                "name" => "Tanquinho",
                "zipCode" => [ 44160000, 44179999 ],
                "ibge" => 2931103
            ]),
            "2931202" => new Map([
                "name" => "Taperoá",
                "zipCode" => [ 45430000, 45434999 ],
                "ibge" => 2931202
            ]),
            "2931301" => new Map([
                "name" => "Tapiramutá",
                "zipCode" => [ 44840000, 44849999 ],
                "ibge" => 2931301
            ]),
            "2931350" => new Map([
                "name" => "Teixeira de Freitas",
                "zipCode" => [ 45985001, 45999999 ],
                "ibge" => 2931350
            ]),
            "2931400" => new Map([
                "name" => "Teodoro Sampaio",
                "zipCode" => [ 44280000, 44299999 ],
                "ibge" => 2931400
            ]),
            "2931509" => new Map([
                "name" => "Teofilândia",
                "zipCode" => [ 48770000, 48779999 ],
                "ibge" => 2931509
            ]),
            "2931608" => new Map([
                "name" => "Teolândia",
                "zipCode" => [ 45465000, 45469999 ],
                "ibge" => 2931608
            ]),
            "2931707" => new Map([
                "name" => "Terra Nova",
                "zipCode" => [ 44270000, 44279999 ],
                "ibge" => 2931707
            ]),
            "2931806" => new Map([
                "name" => "Tremedal",
                "zipCode" => [ 45170000, 45176999 ],
                "ibge" => 2931806
            ]),
            "2931905" => new Map([
                "name" => "Tucano",
                "zipCode" => [ 48790000, 48799999 ],
                "ibge" => 2931905
            ]),
            "2932002" => new Map([
                "name" => "Uauá",
                "zipCode" => [ 48950000, 48959999 ],
                "ibge" => 2932002
            ]),
            "2932101" => new Map([
                "name" => "Ubaíra",
                "zipCode" => [ 45310000, 45314999 ],
                "ibge" => 2932101
            ]),
            "2932200" => new Map([
                "name" => "Ubaitaba",
                "zipCode" => [ 45545000, 45549999 ],
                "ibge" => 2932200
            ]),
            "2932309" => new Map([
                "name" => "Ubatã",
                "zipCode" => [ 45550000, 45559999 ],
                "ibge" => 2932309
            ]),
            "2932408" => new Map([
                "name" => "Uibaí",
                "zipCode" => [ 44950000, 44959999 ],
                "ibge" => 2932408
            ]),
            "2932457" => new Map([
                "name" => "Umburanas",
                "zipCode" => [ 44798000, 44799999 ],
                "ibge" => 2932457
            ]),
            "2932507" => new Map([
                "name" => "Una",
                "zipCode" => [ 45690000, 45694999 ],
                "ibge" => 2932507
            ]),
            "2932606" => new Map([
                "name" => "Urandi",
                "zipCode" => [ 46350000, 46359999 ],
                "ibge" => 2932606
            ]),
            "2932705" => new Map([
                "name" => "Uruçuca",
                "zipCode" => [ 45680000, 45689999 ],
                "ibge" => 2932705
            ]),
            "2932804" => new Map([
                "name" => "Utinga",
                "zipCode" => [ 46810000, 46819999 ],
                "ibge" => 2932804
            ]),
            "2932903" => new Map([
                "name" => "Valença",
                "zipCode" => [ 45400000, 45415999 ],
                "ibge" => 2932903
            ]),
            "2933000" => new Map([
                "name" => "Valente",
                "zipCode" => [ 48890000, 48894999 ],
                "ibge" => 2933000
            ]),
            "2933059" => new Map([
                "name" => "Várzea da Roça",
                "zipCode" => [ 44635000, 44639999 ],
                "ibge" => 2933059
            ]),
            "2933109" => new Map([
                "name" => "Várzea do Poço",
                "zipCode" => [ 44715000, 44717999 ],
                "ibge" => 2933109
            ]),
            "2933158" => new Map([
                "name" => "Várzea Nova",
                "zipCode" => [ 44690000, 44694999 ],
                "ibge" => 2933158
            ]),
            "2933174" => new Map([
                "name" => "Varzedo",
                "zipCode" => [ 44565000, 44569999 ],
                "ibge" => 2933174
            ]),
            "2933208" => new Map([
                "name" => "Vera Cruz",
                "zipCode" => [ 44470000, 44479999 ],
                "ibge" => 2933208
            ]),
            "2933257" => new Map([
                "name" => "Vereda",
                "zipCode" => [ 45955000, 45959999 ],
                "ibge" => 2933257
            ]),
            "2933307" => new Map([
                "name" => "Vitória da Conquista",
                "zipCode" => [ 45000001, 45119999 ],
                "ibge" => 2933307
            ]),
            "2933406" => new Map([
                "name" => "Wagner",
                "zipCode" => [ 46970000, 46979999 ],
                "ibge" => 2933406
            ]),
            "2933455" => new Map([
                "name" => "Wanderley",
                "zipCode" => [ 47940000, 47949999 ],
                "ibge" => 2933455
            ]),
            "2933505" => new Map([
                "name" => "Wenceslau Guimarães",
                "zipCode" => [ 45460000, 45464999 ],
                "ibge" => 2933505
            ]),
            "2933604" => new Map([
                "name" => "Xique-Xique",
                "zipCode" => [ 47400000, 47439999 ],
                "ibge" => 2933604
            ])
        ]);

        return $map;
    }
}