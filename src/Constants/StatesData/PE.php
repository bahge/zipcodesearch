<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class PE implements ICitiesInfo
{
    public static int $numberCities = 185;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(PE::$numberCities);
        $map->putAll([
            "2600054" => new Map([
                "name" => "Abreu e Lima",
                "zipCode" => [ 53500001, 53599999 ],
                "ibge" => 2600054
            ]),
            "2600104" => new Map([
                "name" => "Afogados da Ingazeira",
                "zipCode" => [ 56800000, 56819999 ],
                "ibge" => 2600104
            ]),
            "2600203" => new Map([
                "name" => "Afrânio",
                "zipCode" => [ 56360000, 56379999 ],
                "ibge" => 2600203
            ]),
            "2600302" => new Map([
                "name" => "Agrestina",
                "zipCode" => [ 55495000, 55499999 ],
                "ibge" => 2600302
            ]),
            "2600401" => new Map([
                "name" => "Água Preta",
                "zipCode" => [ 55550000, 55554999 ],
                "ibge" => 2600401
            ]),
            "2600500" => new Map([
                "name" => "Águas Belas",
                "zipCode" => [ 55340000, 55344999 ],
                "ibge" => 2600500
            ]),
            "2600609" => new Map([
                "name" => "Alagoinha",
                "zipCode" => [ 55260000, 55269999 ],
                "ibge" => 2600609
            ]),
            "2600708" => new Map([
                "name" => "Aliança",
                "zipCode" => [ 55890000, 55899999 ],
                "ibge" => 2600708
            ]),
            "2600807" => new Map([
                "name" => "Altinho",
                "zipCode" => [ 55490000, 55494999 ],
                "ibge" => 2600807
            ]),
            "2600906" => new Map([
                "name" => "Amaraji",
                "zipCode" => [ 55515000, 55519999 ],
                "ibge" => 2600906
            ]),
            "2601003" => new Map([
                "name" => "Angelim",
                "zipCode" => [ 55430000, 55434999 ],
                "ibge" => 2601003
            ]),
            "2601052" => new Map([
                "name" => "Araçoiaba",
                "zipCode" => [ 53690000, 53699999 ],
                "ibge" => 2601052
            ]),
            "2601102" => new Map([
                "name" => "Araripina",
                "zipCode" => [ 56280000, 56299999 ],
                "ibge" => 2601102
            ]),
            "2601201" => new Map([
                "name" => "Arcoverde",
                "zipCode" => [ 56500001, 56519999 ],
                "ibge" => 2601201
            ]),
            "2601300" => new Map([
                "name" => "Barra de Guabiraba",
                "zipCode" => [ 55690000, 55694999 ],
                "ibge" => 2601300
            ]),
            "2601409" => new Map([
                "name" => "Barreiros",
                "zipCode" => [ 55560000, 55564999 ],
                "ibge" => 2601409
            ]),
            "2601508" => new Map([
                "name" => "Belém de Maria",
                "zipCode" => [ 55440000, 55449999 ],
                "ibge" => 2601508
            ]),
            "2601607" => new Map([
                "name" => "Belém do São Francisco",
                "zipCode" => [ 56440000, 56459999 ],
                "ibge" => 2601607
            ]),
            "2601706" => new Map([
                "name" => "Belo Jardim",
                "zipCode" => [ 55150001, 55169999 ],
                "ibge" => 2601706
            ]),
            "2601805" => new Map([
                "name" => "Betânia",
                "zipCode" => [ 56670000, 56699999 ],
                "ibge" => 2601805
            ]),
            "2601904" => new Map([
                "name" => "Bezerros",
                "zipCode" => [ 55660000, 55664999 ],
                "ibge" => 2601904
            ]),
            "2602001" => new Map([
                "name" => "Bodocó",
                "zipCode" => [ 56220000, 56229999 ],
                "ibge" => 2602001
            ]),
            "2602100" => new Map([
                "name" => "Bom Conselho",
                "zipCode" => [ 55330000, 55339999 ],
                "ibge" => 2602100
            ]),
            "2602209" => new Map([
                "name" => "Bom Jardim",
                "zipCode" => [ 55730000, 55739999 ],
                "ibge" => 2602209
            ]),
            "2602308" => new Map([
                "name" => "Bonito",
                "zipCode" => [ 55680000, 55689999 ],
                "ibge" => 2602308
            ]),
            "2602407" => new Map([
                "name" => "Brejão",
                "zipCode" => [ 55325000, 55329999 ],
                "ibge" => 2602407
            ]),
            "2602506" => new Map([
                "name" => "Brejinho",
                "zipCode" => [ 56740000, 56749999 ],
                "ibge" => 2602506
            ]),
            "2602605" => new Map([
                "name" => "Brejo da Madre de Deus",
                "zipCode" => [ 55170000, 55179999 ],
                "ibge" => 2602605
            ]),
            "2602704" => new Map([
                "name" => "Buenos Aires",
                "zipCode" => [ 55845000, 55849999 ],
                "ibge" => 2602704
            ]),
            "2602803" => new Map([
                "name" => "Buíque",
                "zipCode" => [ 56520000, 56539999 ],
                "ibge" => 2602803
            ]),
            "2602902" => new Map([
                "name" => "Cabo de Santo Agostinho",
                "zipCode" => [ 54500001, 54599999 ],
                "ibge" => 2602902
            ]),
            "2603009" => new Map([
                "name" => "Cabrobó",
                "zipCode" => [ 56180000, 56189999 ],
                "ibge" => 2603009
            ]),
            "2603108" => new Map([
                "name" => "Cachoeirinha",
                "zipCode" => [ 55380000, 55384999 ],
                "ibge" => 2603108
            ]),
            "2603207" => new Map([
                "name" => "Caetés",
                "zipCode" => [ 55360000, 55364999 ],
                "ibge" => 2603207
            ]),
            "2603306" => new Map([
                "name" => "Calçado",
                "zipCode" => [ 55375000, 55379999 ],
                "ibge" => 2603306
            ]),
            "2603405" => new Map([
                "name" => "Calumbi",
                "zipCode" => [ 56930000, 56949999 ],
                "ibge" => 2603405
            ]),
            "2603454" => new Map([
                "name" => "Camaragibe",
                "zipCode" => [ 54750001, 54799999 ],
                "ibge" => 2603454
            ]),
            "2603504" => new Map([
                "name" => "Camocim de São Félix",
                "zipCode" => [ 55665000, 55669999 ],
                "ibge" => 2603504
            ]),
            "2603603" => new Map([
                "name" => "Camutanga",
                "zipCode" => [ 55930000, 55939999 ],
                "ibge" => 2603603
            ]),
            "2603702" => new Map([
                "name" => "Canhotinho",
                "zipCode" => [ 55420000, 55429999 ],
                "ibge" => 2603702
            ]),
            "2603801" => new Map([
                "name" => "Capoeiras",
                "zipCode" => [ 55365000, 55369999 ],
                "ibge" => 2603801
            ]),
            "2603900" => new Map([
                "name" => "Carnaíba",
                "zipCode" => [ 56820000, 56827999 ],
                "ibge" => 2603900
            ]),
            "2603926" => new Map([
                "name" => "Carnaubeira da Penha",
                "zipCode" => [ 56420000, 56429999 ],
                "ibge" => 2603926
            ]),
            "2604007" => new Map([
                "name" => "Carpina",
                "zipCode" => [ 55810001, 55819999 ],
                "ibge" => 2604007
            ]),
            "2604106" => new Map([
                "name" => "Caruaru",
                "zipCode" => [ 55000001, 55119999 ],
                "ibge" => 2604106
            ]),
            "2604155" => new Map([
                "name" => "Casinhas",
                "zipCode" => [ 55755000, 55759999 ],
                "ibge" => 2604155
            ]),
            "2604205" => new Map([
                "name" => "Catende",
                "zipCode" => [ 55400000, 55404999 ],
                "ibge" => 2604205
            ]),
            "2604304" => new Map([
                "name" => "Cedro",
                "zipCode" => [ 56130000, 56139999 ],
                "ibge" => 2604304
            ]),
            "2604403" => new Map([
                "name" => "Chã de Alegria",
                "zipCode" => [ 55835000, 55839999 ],
                "ibge" => 2604403
            ]),
            "2604502" => new Map([
                "name" => "Chã Grande",
                "zipCode" => [ 55636000, 55639999 ],
                "ibge" => 2604502
            ]),
            "2604601" => new Map([
                "name" => "Condado",
                "zipCode" => [ 55940000, 55949999 ],
                "ibge" => 2604601
            ]),
            "2604700" => new Map([
                "name" => "Correntes",
                "zipCode" => [ 55315000, 55319999 ],
                "ibge" => 2604700
            ]),
            "2604809" => new Map([
                "name" => "Cortês",
                "zipCode" => [ 55525000, 55529999 ],
                "ibge" => 2604809
            ]),
            "2604908" => new Map([
                "name" => "Cumaru",
                "zipCode" => [ 55655000, 55659999 ],
                "ibge" => 2604908
            ]),
            "2605004" => new Map([
                "name" => "Cupira",
                "zipCode" => [ 55460000, 55469999 ],
                "ibge" => 2605004
            ]),
            "2605103" => new Map([
                "name" => "Custódia",
                "zipCode" => [ 56640000, 56669999 ],
                "ibge" => 2605103
            ]),
            "2605152" => new Map([
                "name" => "Dormentes",
                "zipCode" => [ 56355000, 56359999 ],
                "ibge" => 2605152
            ]),
            "2605202" => new Map([
                "name" => "Escada",
                "zipCode" => [ 55500000, 55509999 ],
                "ibge" => 2605202
            ]),
            "2605301" => new Map([
                "name" => "Exu",
                "zipCode" => [ 56230000, 56249999 ],
                "ibge" => 2605301
            ]),
            "2605400" => new Map([
                "name" => "Feira Nova",
                "zipCode" => [ 55715000, 55719999 ],
                "ibge" => 2605400
            ]),
            "2605459" => new Map([
                "name" => "Fernando de Noronha",
                "zipCode" => [ 53990000, 53999999 ],
                "ibge" => 2605459
            ]),
            "2605509" => new Map([
                "name" => "Ferreiros",
                "zipCode" => [ 55880000, 55889999 ],
                "ibge" => 2605509
            ]),
            "2605608" => new Map([
                "name" => "Flores",
                "zipCode" => [ 56850000, 56869999 ],
                "ibge" => 2605608
            ]),
            "2605707" => new Map([
                "name" => "Floresta",
                "zipCode" => [ 56400000, 56419999 ],
                "ibge" => 2605707
            ]),
            "2605806" => new Map([
                "name" => "Frei Miguelinho",
                "zipCode" => [ 55780000, 55789999 ],
                "ibge" => 2605806
            ]),
            "2605905" => new Map([
                "name" => "Gameleira",
                "zipCode" => [ 55530000, 55534999 ],
                "ibge" => 2605905
            ]),
            "2606002" => new Map([
                "name" => "Garanhuns",
                "zipCode" => [ 55290001, 55304999 ],
                "ibge" => 2606002
            ]),
            "2606101" => new Map([
                "name" => "Glória do Goitá",
                "zipCode" => [ 55620000, 55629999 ],
                "ibge" => 2606101
            ]),
            "2606200" => new Map([
                "name" => "Goiana",
                "zipCode" => [ 55900000, 55919999 ],
                "ibge" => 2606200
            ]),
            "2606309" => new Map([
                "name" => "Granito",
                "zipCode" => [ 56160000, 56162999 ],
                "ibge" => 2606309
            ]),
            "2606408" => new Map([
                "name" => "Gravatá",
                "zipCode" => [ 55640001, 55649999 ],
                "ibge" => 2606408
            ]),
            "2606507" => new Map([
                "name" => "Iati",
                "zipCode" => [ 55345000, 55349999 ],
                "ibge" => 2606507
            ]),
            "2606606" => new Map([
                "name" => "Ibimirim",
                "zipCode" => [ 56580000, 56599999 ],
                "ibge" => 2606606
            ]),
            "2606705" => new Map([
                "name" => "Ibirajuba",
                "zipCode" => [ 55390000, 55394999 ],
                "ibge" => 2606705
            ]),
            "2606804" => new Map([
                "name" => "Igarassu",
                "zipCode" => [ 53600001, 53689999 ],
                "ibge" => 2606804
            ]),
            "2606903" => new Map([
                "name" => "Iguaracy",
                "zipCode" => [ 56840000, 56849999 ],
                "ibge" => 2606903
            ]),
            "2607604" => new Map([
                "name" => "Ilha de Itamaracá",
                "zipCode" => [ 53900000, 53989999 ],
                "ibge" => 2607604
            ]),
            "2607000" => new Map([
                "name" => "Inajá",
                "zipCode" => [ 56560000, 56564999 ],
                "ibge" => 2607000
            ]),
            "2607109" => new Map([
                "name" => "Ingazeira",
                "zipCode" => [ 56830000, 56839999 ],
                "ibge" => 2607109
            ]),
            "2607208" => new Map([
                "name" => "Ipojuca",
                "zipCode" => [ 55590000, 55599999 ],
                "ibge" => 2607208
            ]),
            "2607307" => new Map([
                "name" => "Ipubi",
                "zipCode" => [ 56260000, 56279999 ],
                "ibge" => 2607307
            ]),
            "2607406" => new Map([
                "name" => "Itacuruba",
                "zipCode" => [ 56430000, 56439999 ],
                "ibge" => 2607406
            ]),
            "2607505" => new Map([
                "name" => "Itaíba",
                "zipCode" => [ 56550000, 56559999 ],
                "ibge" => 2607505
            ]),
            "2607653" => new Map([
                "name" => "Itambé",
                "zipCode" => [ 55920000, 55929999 ],
                "ibge" => 2607653
            ]),
            "2607703" => new Map([
                "name" => "Itapetim",
                "zipCode" => [ 56720000, 56739999 ],
                "ibge" => 2607703
            ]),
            "2607752" => new Map([
                "name" => "Itapissuma",
                "zipCode" => [ 53700000, 53899999 ],
                "ibge" => 2607752
            ]),
            "2607802" => new Map([
                "name" => "Itaquitinga",
                "zipCode" => [ 55950000, 55999999 ],
                "ibge" => 2607802
            ]),
            "2607901" => new Map([
                "name" => "Jaboatão dos Guararapes",
                "zipCode" => [ 54000001, 54499999 ],
                "ibge" => 2607901
            ]),
            "2607950" => new Map([
                "name" => "Jaqueira",
                "zipCode" => [ 55409000, 55409999 ],
                "ibge" => 2607950
            ]),
            "2608008" => new Map([
                "name" => "Jataúba",
                "zipCode" => [ 55180000, 55189999 ],
                "ibge" => 2608008
            ]),
            "2608057" => new Map([
                "name" => "Jatobá",
                "zipCode" => [ 56470000, 56479999 ],
                "ibge" => 2608057
            ]),
            "2608107" => new Map([
                "name" => "João Alfredo",
                "zipCode" => [ 55720000, 55729999 ],
                "ibge" => 2608107
            ]),
            "2608206" => new Map([
                "name" => "Joaquim Nabuco",
                "zipCode" => [ 55535000, 55539999 ],
                "ibge" => 2608206
            ]),
            "2608255" => new Map([
                "name" => "Jucati",
                "zipCode" => [ 55398000, 55399999 ],
                "ibge" => 2608255
            ]),
            "2608305" => new Map([
                "name" => "Jupi",
                "zipCode" => [ 55395000, 55397999 ],
                "ibge" => 2608305
            ]),
            "2608404" => new Map([
                "name" => "Jurema",
                "zipCode" => [ 55480000, 55489999 ],
                "ibge" => 2608404
            ]),
            "2608503" => new Map([
                "name" => "Lagoa do Itaenga",
                "zipCode" => [ 55840000, 55844999 ],
                "ibge" => 2608503
            ]),
            "2608453" => new Map([
                "name" => "Lagoa do Carro",
                "zipCode" => [ 55820000, 55824999 ],
                "ibge" => 2608453
            ]),
            "2608602" => new Map([
                "name" => "Lagoa do Ouro",
                "zipCode" => [ 55320000, 55324999 ],
                "ibge" => 2608602
            ]),
            "2608701" => new Map([
                "name" => "Lagoa dos Gatos",
                "zipCode" => [ 55450000, 55459999 ],
                "ibge" => 2608701
            ]),
            "2608750" => new Map([
                "name" => "Lagoa Grande",
                "zipCode" => [ 56395000, 56399999 ],
                "ibge" => 2608750
            ]),
            "2608800" => new Map([
                "name" => "Lajedo",
                "zipCode" => [ 55385000, 55389999 ],
                "ibge" => 2608800
            ]),
            "2608909" => new Map([
                "name" => "Limoeiro",
                "zipCode" => [ 55700000, 55714999 ],
                "ibge" => 2608909
            ]),
            "2609006" => new Map([
                "name" => "Macaparana",
                "zipCode" => [ 55865000, 55869999 ],
                "ibge" => 2609006
            ]),
            "2609105" => new Map([
                "name" => "Machados",
                "zipCode" => [ 55740000, 55744999 ],
                "ibge" => 2609105
            ]),
            "2609154" => new Map([
                "name" => "Manari",
                "zipCode" => [ 56565000, 56579999 ],
                "ibge" => 2609154
            ]),
            "2609204" => new Map([
                "name" => "Maraial",
                "zipCode" => [ 55405000, 55408999 ],
                "ibge" => 2609204
            ]),
            "2609303" => new Map([
                "name" => "Mirandiba",
                "zipCode" => [ 56980000, 56999999 ],
                "ibge" => 2609303
            ]),
            "2614303" => new Map([
                "name" => "Moreilândia",
                "zipCode" => [ 56150000, 56159999 ],
                "ibge" => 2614303
            ]),
            "2609402" => new Map([
                "name" => "Moreno",
                "zipCode" => [ 54800000, 54999999 ],
                "ibge" => 2609402
            ]),
            "2609501" => new Map([
                "name" => "Nazaré da Mata",
                "zipCode" => [ 55800000, 55804999 ],
                "ibge" => 2609501
            ]),
            "2609600" => new Map([
                "name" => "Olinda",
                "zipCode" => [ 53000001, 53399999 ],
                "ibge" => 2609600
            ]),
            "2609709" => new Map([
                "name" => "Orobó",
                "zipCode" => [ 55745000, 55749999 ],
                "ibge" => 2609709
            ]),
            "2609808" => new Map([
                "name" => "Orocó",
                "zipCode" => [ 56170000, 56179999 ],
                "ibge" => 2609808
            ]),
            "2609907" => new Map([
                "name" => "Ouricuri",
                "zipCode" => [ 56200000, 56209999 ],
                "ibge" => 2609907
            ]),
            "2610004" => new Map([
                "name" => "Palmares",
                "zipCode" => [ 55540000, 55549999 ],
                "ibge" => 2610004
            ]),
            "2610103" => new Map([
                "name" => "Palmeirina",
                "zipCode" => [ 55310000, 55314999 ],
                "ibge" => 2610103
            ]),
            "2610202" => new Map([
                "name" => "Panelas",
                "zipCode" => [ 55470000, 55479999 ],
                "ibge" => 2610202
            ]),
            "2610301" => new Map([
                "name" => "Paranatama",
                "zipCode" => [ 55355000, 55359999 ],
                "ibge" => 2610301
            ]),
            "2610400" => new Map([
                "name" => "Parnamirim",
                "zipCode" => [ 56163000, 56169999 ],
                "ibge" => 2610400
            ]),
            "2610509" => new Map([
                "name" => "Passira",
                "zipCode" => [ 55650000, 55654999 ],
                "ibge" => 2610509
            ]),
            "2610608" => new Map([
                "name" => "Paudalho",
                "zipCode" => [ 55825000, 55834999 ],
                "ibge" => 2610608
            ]),
            "2610707" => new Map([
                "name" => "Paulista",
                "zipCode" => [ 53400001, 53499999 ],
                "ibge" => 2610707
            ]),
            "2610806" => new Map([
                "name" => "Pedra",
                "zipCode" => [ 55280000, 55289999 ],
                "ibge" => 2610806
            ]),
            "2610905" => new Map([
                "name" => "Pesqueira",
                "zipCode" => [ 55200000, 55239999 ],
                "ibge" => 2610905
            ]),
            "2611002" => new Map([
                "name" => "Petrolândia",
                "zipCode" => [ 56460000, 56469999 ],
                "ibge" => 2611002
            ]),
            "2611101" => new Map([
                "name" => "Petrolina",
                "zipCode" => [ 56300001, 56354999 ],
                "ibge" => 2611101
            ]),
            "2611200" => new Map([
                "name" => "Poção",
                "zipCode" => [ 55240000, 55249999 ],
                "ibge" => 2611200
            ]),
            "2611309" => new Map([
                "name" => "Pombos",
                "zipCode" => [ 55630000, 55635999 ],
                "ibge" => 2611309
            ]),
            "2611408" => new Map([
                "name" => "Primavera",
                "zipCode" => [ 55510000, 55514999 ],
                "ibge" => 2611408
            ]),
            "2611507" => new Map([
                "name" => "Quipapá",
                "zipCode" => [ 55415000, 55419999 ],
                "ibge" => 2611507
            ]),
            "2611533" => new Map([
                "name" => "Quixabá",
                "zipCode" => [ 56828000, 56829999 ],
                "ibge" => 2611533
            ]),
            "2611606" => new Map([
                "name" => "Recife",
                "zipCode" => [ 50000001, 52999999 ],
                "ibge" => 2611606
            ]),
            "2611705" => new Map([
                "name" => "Riacho das Almas",
                "zipCode" => [ 55120000, 55124999 ],
                "ibge" => 2611705
            ]),
            "2611804" => new Map([
                "name" => "Ribeirão",
                "zipCode" => [ 55520000, 55524999 ],
                "ibge" => 2611804
            ]),
            "2611903" => new Map([
                "name" => "Rio Formoso",
                "zipCode" => [ 55570000, 55577999 ],
                "ibge" => 2611903
            ]),
            "2612000" => new Map([
                "name" => "Sairé",
                "zipCode" => [ 55695000, 55699999 ],
                "ibge" => 2612000
            ]),
            "2612109" => new Map([
                "name" => "Salgadinho",
                "zipCode" => [ 55675000, 55679999 ],
                "ibge" => 2612109
            ]),
            "2612208" => new Map([
                "name" => "Salgueiro",
                "zipCode" => [ 56000000, 56119999 ],
                "ibge" => 2612208
            ]),
            "2612307" => new Map([
                "name" => "Saloá",
                "zipCode" => [ 55350000, 55354999 ],
                "ibge" => 2612307
            ]),
            "2612406" => new Map([
                "name" => "Sanharó",
                "zipCode" => [ 55250000, 55259999 ],
                "ibge" => 2612406
            ]),
            "2612455" => new Map([
                "name" => "Santa Cruz",
                "zipCode" => [ 56215000, 56219999 ],
                "ibge" => 2612455
            ]),
            "2612471" => new Map([
                "name" => "Santa Cruz da Baixa Verde",
                "zipCode" => [ 56895000, 56899999 ],
                "ibge" => 2612471
            ]),
            "2612505" => new Map([
                "name" => "Santa Cruz do Capibaribe",
                "zipCode" => [ 55190001, 55199999 ],
                "ibge" => 2612505
            ]),
            "2612554" => new Map([
                "name" => "Santa Filomena",
                "zipCode" => [ 56210000, 56214999 ],
                "ibge" => 2612554
            ]),
            "2612604" => new Map([
                "name" => "Santa Maria da Boa Vista",
                "zipCode" => [ 56380000, 56394999 ],
                "ibge" => 2612604
            ]),
            "2612703" => new Map([
                "name" => "Santa Maria do Cambucá",
                "zipCode" => [ 55765000, 55769999 ],
                "ibge" => 2612703
            ]),
            "2612802" => new Map([
                "name" => "Santa Terezinha",
                "zipCode" => [ 56750000, 56759999 ],
                "ibge" => 2612802
            ]),
            "2612901" => new Map([
                "name" => "São Benedito do Sul",
                "zipCode" => [ 55410000, 55414999 ],
                "ibge" => 2612901
            ]),
            "2613008" => new Map([
                "name" => "São Bento do Una",
                "zipCode" => [ 55370000, 55374999 ],
                "ibge" => 2613008
            ]),
            "2613107" => new Map([
                "name" => "São Caitano",
                "zipCode" => [ 55130000, 55139999 ],
                "ibge" => 2613107
            ]),
            "2613206" => new Map([
                "name" => "São João",
                "zipCode" => [ 55435000, 55439999 ],
                "ibge" => 2613206
            ]),
            "2613305" => new Map([
                "name" => "São Joaquim do Monte",
                "zipCode" => [ 55670000, 55674999 ],
                "ibge" => 2613305
            ]),
            "2613404" => new Map([
                "name" => "São José da Coroa Grande",
                "zipCode" => [ 55565000, 55569999 ],
                "ibge" => 2613404
            ]),
            "2613503" => new Map([
                "name" => "São José do Belmonte",
                "zipCode" => [ 56950000, 56979999 ],
                "ibge" => 2613503
            ]),
            "2613602" => new Map([
                "name" => "São José do Egito",
                "zipCode" => [ 56700000, 56719999 ],
                "ibge" => 2613602
            ]),
            "2613701" => new Map([
                "name" => "São Lourenço da Mata",
                "zipCode" => [ 54700001, 54749999 ],
                "ibge" => 2613701
            ]),
            "2613800" => new Map([
                "name" => "São Vicente Ferrer",
                "zipCode" => [ 55860000, 55864999 ],
                "ibge" => 2613800
            ]),
            "2613909" => new Map([
                "name" => "Serra Talhada",
                "zipCode" => [ 56900001, 56929999 ],
                "ibge" => 2613909
            ]),
            "2614006" => new Map([
                "name" => "Serrita",
                "zipCode" => [ 56140000, 56149999 ],
                "ibge" => 2614006
            ]),
            "2614105" => new Map([
                "name" => "Sertânia",
                "zipCode" => [ 56600000, 56639999 ],
                "ibge" => 2614105
            ]),
            "2614204" => new Map([
                "name" => "Sirinhaém",
                "zipCode" => [ 55580000, 55589999 ],
                "ibge" => 2614204
            ]),
            "2614402" => new Map([
                "name" => "Solidão",
                "zipCode" => [ 56795000, 56799999 ],
                "ibge" => 2614402
            ]),
            "2614501" => new Map([
                "name" => "Surubim",
                "zipCode" => [ 55750000, 55754999 ],
                "ibge" => 2614501
            ]),
            "2614600" => new Map([
                "name" => "Tabira",
                "zipCode" => [ 56780000, 56794999 ],
                "ibge" => 2614600
            ]),
            "2614709" => new Map([
                "name" => "Tacaimbó",
                "zipCode" => [ 55140000, 55149999 ],
                "ibge" => 2614709
            ]),
            "2614808" => new Map([
                "name" => "Tacaratu",
                "zipCode" => [ 56480000, 56499999 ],
                "ibge" => 2614808
            ]),
            "2614857" => new Map([
                "name" => "Tamandaré",
                "zipCode" => [ 55578000, 55579999 ],
                "ibge" => 2614857
            ]),
            "2615003" => new Map([
                "name" => "Taquaritinga do Norte",
                "zipCode" => [ 55790000, 55799999 ],
                "ibge" => 2615003
            ]),
            "2615102" => new Map([
                "name" => "Terezinha",
                "zipCode" => [ 55305000, 55309999 ],
                "ibge" => 2615102
            ]),
            "2615201" => new Map([
                "name" => "Terra Nova",
                "zipCode" => [ 56190000, 56199999 ],
                "ibge" => 2615201
            ]),
            "2615300" => new Map([
                "name" => "Timbaúba",
                "zipCode" => [ 55870000, 55879999 ],
                "ibge" => 2615300
            ]),
            "2615409" => new Map([
                "name" => "Toritama",
                "zipCode" => [ 55125000, 55129999 ],
                "ibge" => 2615409
            ]),
            "2615508" => new Map([
                "name" => "Tracunhaém",
                "zipCode" => [ 55805000, 55809999 ],
                "ibge" => 2615508
            ]),
            "2615607" => new Map([
                "name" => "Trindade",
                "zipCode" => [ 56250000, 56259999 ],
                "ibge" => 2615607
            ]),
            "2615706" => new Map([
                "name" => "Triunfo",
                "zipCode" => [ 56870000, 56894999 ],
                "ibge" => 2615706
            ]),
            "2615805" => new Map([
                "name" => "Tupanatinga",
                "zipCode" => [ 56540000, 56549999 ],
                "ibge" => 2615805
            ]),
            "2615904" => new Map([
                "name" => "Tuparetama",
                "zipCode" => [ 56760000, 56779999 ],
                "ibge" => 2615904
            ]),
            "2616001" => new Map([
                "name" => "Venturosa",
                "zipCode" => [ 55270000, 55279999 ],
                "ibge" => 2616001
            ]),
            "2616100" => new Map([
                "name" => "Verdejante",
                "zipCode" => [ 56120000, 56129999 ],
                "ibge" => 2616100
            ]),
            "2616183" => new Map([
                "name" => "Vertente do Lério",
                "zipCode" => [ 55760000, 55764999 ],
                "ibge" => 2616183
            ]),
            "2616209" => new Map([
                "name" => "Vertentes",
                "zipCode" => [ 55770000, 55779999 ],
                "ibge" => 2616209
            ]),
            "2616308" => new Map([
                "name" => "Vicência",
                "zipCode" => [ 55850000, 55859999 ],
                "ibge" => 2616308
            ]),
            "2616407" => new Map([
                "name" => "Vitória de Santo Antão",
                "zipCode" => [ 55600001, 55619999 ],
                "ibge" => 2616407
            ]),
            "2616506" => new Map([
                "name" => "Xexéu",
                "zipCode" => [ 55555000, 55559999 ],
                "ibge" => 2616506
            ])
        ]);

        return $map;
    }
}