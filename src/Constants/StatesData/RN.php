<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class RN implements ICitiesInfo
{
    public static int $numberCities = 167;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(RN::$numberCities);
        $map->putAll([
            "2400109" => new Map([
                "name" => "Acari",
                "cep" => [ 59370000, 59373999 ],
                "ibge" => 2400109
            ]),
            "2400208" => new Map([
                "name" => "Açu",
                "cep" => [ 59650000, 59654999 ],
                "ibge" => 2400208
            ]),
            "2400307" => new Map([
                "name" => "Afonso Bezerra",
                "cep" => [ 59510000, 59512999 ],
                "ibge" => 2400307
            ]),
            "2400406" => new Map([
                "name" => "Água Nova",
                "cep" => [ 59995000, 59999999 ],
                "ibge" => 2400406
            ]),
            "2400505" => new Map([
                "name" => "Alexandria",
                "cep" => [ 59965000, 59969999 ],
                "ibge" => 2400505
            ]),
            "2400604" => new Map([
                "name" => "Almino Afonso",
                "cep" => [ 59760000, 59769999 ],
                "ibge" => 2400604
            ]),
            "2400703" => new Map([
                "name" => "Alto do Rodrigues",
                "cep" => [ 59507000, 59507999 ],
                "ibge" => 2400703
            ]),
            "2400802" => new Map([
                "name" => "Angicos",
                "cep" => [ 59515000, 59516999 ],
                "ibge" => 2400802
            ]),
            "2400901" => new Map([
                "name" => "Antônio Martins",
                "cep" => [ 59870000, 59879999 ],
                "ibge" => 2400901
            ]),
            "2401008" => new Map([
                "name" => "Apodi",
                "cep" => [ 59700000, 59729999 ],
                "ibge" => 2401008
            ]),
            "2401107" => new Map([
                "name" => "Areia Branca",
                "cep" => [ 59655000, 59659999 ],
                "ibge" => 2401107
            ]),
            "2401206" => new Map([
                "name" => "Arez",
                "cep" => [ 59170000, 59172999 ],
                "ibge" => 2401206
            ]),
            "2401404" => new Map([
                "name" => "Baía Formosa",
                "cep" => [ 59194000, 59195999 ],
                "ibge" => 2401404
            ]),
            "2401453" => new Map([
                "name" => "Baraúna",
                "cep" => [ 59695000, 59699999 ],
                "ibge" => 2401453
            ]),
            "2401503" => new Map([
                "name" => "Barcelona",
                "cep" => [ 59410000, 59419999 ],
                "ibge" => 2401503
            ]),
            "2401602" => new Map([
                "name" => "Bento Fernandes",
                "cep" => [ 59555000, 59559999 ],
                "ibge" => 2401602
            ]),
            "2401651" => new Map([
                "name" => "Bodó",
                "cep" => [ 59528000, 59529999 ],
                "ibge" => 2401651
            ]),
            "2401701" => new Map([
                "name" => "Bom Jesus",
                "cep" => [ 59270000, 59274999 ],
                "ibge" => 2401701
            ]),
            "2401800" => new Map([
                "name" => "Brejinho",
                "cep" => [ 59219000, 59219999 ],
                "ibge" => 2401800
            ]),
            "2401859" => new Map([
                "name" => "Caiçara do Norte",
                "cep" => [ 59592000, 59593999 ],
                "ibge" => 2401859
            ]),
            "2401909" => new Map([
                "name" => "Caiçara do Rio do Vento",
                "cep" => [ 59540000, 59543999 ],
                "ibge" => 2401909
            ]),
            "2402006" => new Map([
                "name" => "Caicó",
                "cep" => [ 59300000, 59309999 ],
                "ibge" => 2402006
            ]),
            "2401305" => new Map([
                "name" => "Campo Grande",
                "cep" => [ 59680000, 59684999 ],
                "ibge" => 2401305
            ]),
            "2402105" => new Map([
                "name" => "Campo Redondo",
                "cep" => [ 59230000, 59234999 ],
                "ibge" => 2402105
            ]),
            "2402204" => new Map([
                "name" => "Canguaretama",
                "cep" => [ 59190000, 59191999 ],
                "ibge" => 2402204
            ]),
            "2402303" => new Map([
                "name" => "Caraúbas",
                "cep" => [ 59780000, 59789999 ],
                "ibge" => 2402303
            ]),
            "2402402" => new Map([
                "name" => "Carnaúba dos Dantas",
                "cep" => [ 59374000, 59374999 ],
                "ibge" => 2402402
            ]),
            "2402501" => new Map([
                "name" => "Carnaubais",
                "cep" => [ 59665000, 59667999 ],
                "ibge" => 2402501
            ]),
            "2402600" => new Map([
                "name" => "Ceará-Mirim",
                "cep" => [ 59570000, 59574999 ],
                "ibge" => 2402600
            ]),
            "2402709" => new Map([
                "name" => "Cerro Corá",
                "cep" => [ 59395000, 59399999 ],
                "ibge" => 2402709
            ]),
            "2402808" => new Map([
                "name" => "Coronel Ezequiel",
                "cep" => [ 59220000, 59224999 ],
                "ibge" => 2402808
            ]),
            "2402907" => new Map([
                "name" => "Coronel João Pessoa",
                "cep" => [ 59930000, 59939999 ],
                "ibge" => 2402907
            ]),
            "2403004" => new Map([
                "name" => "Cruzeta",
                "cep" => [ 59375000, 59377999 ],
                "ibge" => 2403004
            ]),
            "2403103" => new Map([
                "name" => "Currais Novos",
                "cep" => [ 59380000, 59389999 ],
                "ibge" => 2403103
            ]),
            "2403202" => new Map([
                "name" => "Doutor Severiano",
                "cep" => [ 59910000, 59919999 ],
                "ibge" => 2403202
            ]),
            "2403301" => new Map([
                "name" => "Encanto",
                "cep" => [ 59905000, 59907999 ],
                "ibge" => 2403301
            ]),
            "2403400" => new Map([
                "name" => "Equador",
                "cep" => [ 59355000, 59359999 ],
                "ibge" => 2403400
            ]),
            "2403509" => new Map([
                "name" => "Espírito Santo",
                "cep" => [ 59180000, 59181999 ],
                "ibge" => 2403509
            ]),
            "2403608" => new Map([
                "name" => "Extremoz",
                "cep" => [ 59575000, 59577999 ],
                "ibge" => 2403608
            ]),
            "2403707" => new Map([
                "name" => "Felipe Guerra",
                "cep" => [ 59795000, 59799999 ],
                "ibge" => 2403707
            ]),
            "2403756" => new Map([
                "name" => "Fernando Pedroza",
                "cep" => [ 59517000, 59517999 ],
                "ibge" => 2403756
            ]),
            "2403806" => new Map([
                "name" => "Florânia",
                "cep" => [ 59335000, 59337999 ],
                "ibge" => 2403806
            ]),
            "2403905" => new Map([
                "name" => "Francisco Dantas",
                "cep" => [ 59902000, 59904999 ],
                "ibge" => 2403905
            ]),
            "2404002" => new Map([
                "name" => "Frutuoso Gomes",
                "cep" => [ 59890000, 59899999 ],
                "ibge" => 2404002
            ]),
            "2404101" => new Map([
                "name" => "Galinhos",
                "cep" => [ 59596000, 59597999 ],
                "ibge" => 2404101
            ]),
            "2404200" => new Map([
                "name" => "Goianinha",
                "cep" => [ 59173000, 59177999 ],
                "ibge" => 2404200
            ]),
            "2404309" => new Map([
                "name" => "Governador Dix-Sept Rosado",
                "cep" => [ 59790000, 59794999 ],
                "ibge" => 2404309
            ]),
            "2404408" => new Map([
                "name" => "Grossos",
                "cep" => [ 59675000, 59677999 ],
                "ibge" => 2404408
            ]),
            "2404507" => new Map([
                "name" => "Guamaré",
                "cep" => [ 59598000, 59599999 ],
                "ibge" => 2404507
            ]),
            "2404606" => new Map([
                "name" => "Ielmo Marinho",
                "cep" => [ 59490000, 59499999 ],
                "ibge" => 2404606
            ]),
            "2404705" => new Map([
                "name" => "Ipanguaçu",
                "cep" => [ 59508000, 59509999 ],
                "ibge" => 2404705
            ]),
            "2404804" => new Map([
                "name" => "Ipueira",
                "cep" => [ 59315000, 59317999 ],
                "ibge" => 2404804
            ]),
            "2404853" => new Map([
                "name" => "Itajá",
                "cep" => [ 59513000, 59514999 ],
                "ibge" => 2404853
            ]),
            "2404903" => new Map([
                "name" => "Itaú",
                "cep" => [ 59855000, 59855999 ],
                "ibge" => 2404903
            ]),
            "2405009" => new Map([
                "name" => "Jaçanã",
                "cep" => [ 59225000, 59226999 ],
                "ibge" => 2405009
            ]),
            "2405108" => new Map([
                "name" => "Jandaíra",
                "cep" => [ 59594000, 59595999 ],
                "ibge" => 2405108
            ]),
            "2405207" => new Map([
                "name" => "Janduís",
                "cep" => [ 59690000, 59694999 ],
                "ibge" => 2405207
            ]),
            "2405306" => new Map([
                "name" => "Boa Saúde",
                "cep" => [ 59260000, 59269999 ],
                "ibge" => 2405306
            ]),
            "2405405" => new Map([
                "name" => "Japi",
                "cep" => [ 59213000, 59213999 ],
                "ibge" => 2405405
            ]),
            "2405504" => new Map([
                "name" => "Jardim de Angicos",
                "cep" => [ 59544000, 59546999 ],
                "ibge" => 2405504
            ]),
            "2405603" => new Map([
                "name" => "Jardim de Piranhas",
                "cep" => [ 59324000, 59326999 ],
                "ibge" => 2405603
            ]),
            "2405702" => new Map([
                "name" => "Jardim do Seridó",
                "cep" => [ 59343000, 59346999 ],
                "ibge" => 2405702
            ]),
            "2405801" => new Map([
                "name" => "João Câmara",
                "cep" => [ 59550000, 59554999 ],
                "ibge" => 2405801
            ]),
            "2405900" => new Map([
                "name" => "João Dias",
                "cep" => [ 59880000, 59889999 ],
                "ibge" => 2405900
            ]),
            "2406007" => new Map([
                "name" => "José da Penha",
                "cep" => [ 59980000, 59986999 ],
                "ibge" => 2406007
            ]),
            "2406106" => new Map([
                "name" => "Jucurutu",
                "cep" => [ 59330000, 59334999 ],
                "ibge" => 2406106
            ]),
            "2406155" => new Map([
                "name" => "Jundiá",
                "cep" => [ 59188000, 59189999 ],
                "ibge" => 2406155
            ]),
            "2406205" => new Map([
                "name" => "Lagoa D'Anta",
                "cep" => [ 59227000, 59229999 ],
                "ibge" => 2406205
            ]),
            "2406304" => new Map([
                "name" => "Lagoa de Pedras",
                "cep" => [ 59244000, 59244999 ],
                "ibge" => 2406304
            ]),
            "2406403" => new Map([
                "name" => "Lagoa de Velhos",
                "cep" => [ 59430000, 59439999 ],
                "ibge" => 2406403
            ]),
            "2406502" => new Map([
                "name" => "Lagoa Nova",
                "cep" => [ 59390000, 59394999 ],
                "ibge" => 2406502
            ]),
            "2406601" => new Map([
                "name" => "Lagoa Salgada",
                "cep" => [ 59247000, 59249999 ],
                "ibge" => 2406601
            ]),
            "2406700" => new Map([
                "name" => "Lajes",
                "cep" => [ 59535000, 59539999 ],
                "ibge" => 2406700
            ]),
            "2406809" => new Map([
                "name" => "Lajes Pintadas",
                "cep" => [ 59235000, 59239999 ],
                "ibge" => 2406809
            ]),
            "2406908" => new Map([
                "name" => "Lucrécia",
                "cep" => [ 59805000, 59807999 ],
                "ibge" => 2406908
            ]),
            "2407005" => new Map([
                "name" => "Luís Gomes",
                "cep" => [ 59940000, 59944999 ],
                "ibge" => 2407005
            ]),
            "2407104" => new Map([
                "name" => "Macaíba",
                "cep" => [ 59280001, 59289999 ],
                "ibge" => 2407104
            ]),
            "2407203" => new Map([
                "name" => "Macau",
                "cep" => [ 59500000, 59503999 ],
                "ibge" => 2407203
            ]),
            "2407252" => new Map([
                "name" => "Major Sales",
                "cep" => [ 59945000, 59949999 ],
                "ibge" => 2407252
            ]),
            "2407302" => new Map([
                "name" => "Marcelino Vieira",
                "cep" => [ 59970000, 59979999 ],
                "ibge" => 2407302
            ]),
            "2407401" => new Map([
                "name" => "Martins",
                "cep" => [ 59800000, 59804999 ],
                "ibge" => 2407401
            ]),
            "2407500" => new Map([
                "name" => "Maxaranguape",
                "cep" => [ 59580000, 59581999 ],
                "ibge" => 2407500
            ]),
            "2407609" => new Map([
                "name" => "Messias Targino",
                "cep" => [ 59775000, 59779999 ],
                "ibge" => 2407609
            ]),
            "2407708" => new Map([
                "name" => "Montanhas",
                "cep" => [ 59198000, 59199999 ],
                "ibge" => 2407708
            ]),
            "2407807" => new Map([
                "name" => "Monte Alegre",
                "cep" => [ 59182000, 59183999 ],
                "ibge" => 2407807
            ]),
            "2407906" => new Map([
                "name" => "Monte das Gameleiras",
                "cep" => [ 59217000, 59217999 ],
                "ibge" => 2407906
            ]),
            "2408003" => new Map([
                "name" => "Mossoró",
                "cep" => [ 59600001, 59649999 ],
                "ibge" => 2408003
            ]),
            "2408102" => new Map([
                "name" => "Natal",
                "cep" => [ 59000001, 59139999 ],
                "ibge" => 2408102
            ]),
            "2408201" => new Map([
                "name" => "Nísia Floresta",
                "cep" => [ 59164000, 59167999 ],
                "ibge" => 2408201
            ]),
            "2408300" => new Map([
                "name" => "Nova Cruz",
                "cep" => [ 59215000, 59216999 ],
                "ibge" => 2408300
            ]),
            "2408409" => new Map([
                "name" => "Olho-D'Água do Borges",
                "cep" => [ 59730000, 59739999 ],
                "ibge" => 2408409
            ]),
            "2408508" => new Map([
                "name" => "Ouro Branco",
                "cep" => [ 59347000, 59349999 ],
                "ibge" => 2408508
            ]),
            "2408607" => new Map([
                "name" => "Paraná",
                "cep" => [ 59950000, 59954999 ],
                "ibge" => 2408607
            ]),
            "2408706" => new Map([
                "name" => "Paraú",
                "cep" => [ 59660000, 59662999 ],
                "ibge" => 2408706
            ]),
            "2408805" => new Map([
                "name" => "Parazinho",
                "cep" => [ 59586000, 59587999 ],
                "ibge" => 2408805
            ]),
            "2408904" => new Map([
                "name" => "Parelhas",
                "cep" => [ 59360000, 59369999 ],
                "ibge" => 2408904
            ]),
            "2403251" => new Map([
                "name" => "Parnamirim",
                "cep" => [ 59140001, 59161999 ],
                "ibge" => 2403251
            ]),
            "2409100" => new Map([
                "name" => "Passa e Fica",
                "cep" => [ 59218000, 59218999 ],
                "ibge" => 2409100
            ]),
            "2409209" => new Map([
                "name" => "Passagem",
                "cep" => [ 59259000, 59259999 ],
                "ibge" => 2409209
            ]),
            "2409308" => new Map([
                "name" => "Patu",
                "cep" => [ 59770000, 59774999 ],
                "ibge" => 2409308
            ]),
            "2409407" => new Map([
                "name" => "Pau dos Ferros",
                "cep" => [ 59900000, 59901999 ],
                "ibge" => 2409407
            ]),
            "2409506" => new Map([
                "name" => "Pedra Grande",
                "cep" => [ 59588000, 59589999 ],
                "ibge" => 2409506
            ]),
            "2409605" => new Map([
                "name" => "Pedra Preta",
                "cep" => [ 59547000, 59549999 ],
                "ibge" => 2409605
            ]),
            "2409704" => new Map([
                "name" => "Pedro Avelino",
                "cep" => [ 59530000, 59534999 ],
                "ibge" => 2409704
            ]),
            "2409803" => new Map([
                "name" => "Pedro Velho",
                "cep" => [ 59196000, 59197999 ],
                "ibge" => 2409803
            ]),
            "2409902" => new Map([
                "name" => "Pendências",
                "cep" => [ 59504000, 59506999 ],
                "ibge" => 2409902
            ]),
            "2410009" => new Map([
                "name" => "Pilões",
                "cep" => [ 59960000, 59964999 ],
                "ibge" => 2410009
            ]),
            "2410108" => new Map([
                "name" => "Poço Branco",
                "cep" => [ 59560000, 59564999 ],
                "ibge" => 2410108
            ]),
            "2410207" => new Map([
                "name" => "Portalegre",
                "cep" => [ 59810000, 59814999 ],
                "ibge" => 2410207
            ]),
            "2410256" => new Map([
                "name" => "Porto do Mangue",
                "cep" => [ 59668000, 59669999 ],
                "ibge" => 2410256
            ]),
            "2410405" => new Map([
                "name" => "Pureza",
                "cep" => [ 59582000, 59583999 ],
                "ibge" => 2410405
            ]),
            "2410504" => new Map([
                "name" => "Rafael Fernandes",
                "cep" => [ 59990000, 59994999 ],
                "ibge" => 2410504
            ]),
            "2410603" => new Map([
                "name" => "Rafael Godeiro",
                "cep" => [ 59740000, 59759999 ],
                "ibge" => 2410603
            ]),
            "2410702" => new Map([
                "name" => "Riacho da Cruz",
                "cep" => [ 59820000, 59829999 ],
                "ibge" => 2410702
            ]),
            "2410801" => new Map([
                "name" => "Riacho de Santana",
                "cep" => [ 59987000, 59989999 ],
                "ibge" => 2410801
            ]),
            "2410900" => new Map([
                "name" => "Riachuelo",
                "cep" => [ 59470000, 59479999 ],
                "ibge" => 2410900
            ]),
            "2408953" => new Map([
                "name" => "Rio do Fogo",
                "cep" => [ 59578000, 59579999 ],
                "ibge" => 2408953
            ]),
            "2411007" => new Map([
                "name" => "Rodolfo Fernandes",
                "cep" => [ 59830000, 59839999 ],
                "ibge" => 2411007
            ]),
            "2411106" => new Map([
                "name" => "Ruy Barbosa",
                "cep" => [ 59420000, 59429999 ],
                "ibge" => 2411106
            ]),
            "2411205" => new Map([
                "name" => "Santa Cruz",
                "cep" => [ 59200000, 59209999 ],
                "ibge" => 2411205
            ]),
            "2409332" => new Map([
                "name" => "Santa Maria",
                "cep" => [ 59464000, 59469999 ],
                "ibge" => 2409332
            ]),
            "2411403" => new Map([
                "name" => "Santana do Matos",
                "cep" => [ 59520000, 59527999 ],
                "ibge" => 2411403
            ]),
            "2411429" => new Map([
                "name" => "Santana do Seridó",
                "cep" => [ 59350000, 59354999 ],
                "ibge" => 2411429
            ]),
            "2411502" => new Map([
                "name" => "Santo Antônio",
                "cep" => [ 59255000, 59257999 ],
                "ibge" => 2411502
            ]),
            "2411601" => new Map([
                "name" => "São Bento do Norte",
                "cep" => [ 59590000, 59591999 ],
                "ibge" => 2411601
            ]),
            "2411700" => new Map([
                "name" => "São Bento do Trairi",
                "cep" => [ 59210000, 59212999 ],
                "ibge" => 2411700
            ]),
            "2411809" => new Map([
                "name" => "São Fernando",
                "cep" => [ 59327000, 59329999 ],
                "ibge" => 2411809
            ]),
            "2411908" => new Map([
                "name" => "São Francisco do Oeste",
                "cep" => [ 59908000, 59909999 ],
                "ibge" => 2411908
            ]),
            "2412005" => new Map([
                "name" => "São Gonçalo do Amarante",
                "cep" => [ 59290001, 59299999 ],
                "ibge" => 2412005
            ]),
            "2412104" => new Map([
                "name" => "São João do Sabugi",
                "cep" => [ 59310000, 59314999 ],
                "ibge" => 2412104
            ]),
            "2412203" => new Map([
                "name" => "São José de Mipibu",
                "cep" => [ 59162000, 59163999 ],
                "ibge" => 2412203
            ]),
            "2412302" => new Map([
                "name" => "São José do Campestre",
                "cep" => [ 59275000, 59279999 ],
                "ibge" => 2412302
            ]),
            "2412401" => new Map([
                "name" => "São José do Seridó",
                "cep" => [ 59378000, 59379999 ],
                "ibge" => 2412401
            ]),
            "2412500" => new Map([
                "name" => "São Miguel",
                "cep" => [ 59920000, 59924999 ],
                "ibge" => 2412500
            ]),
            "2412559" => new Map([
                "name" => "São Miguel do Gostoso",
                "cep" => [ 59585000, 59585999 ],
                "ibge" => 2412559
            ]),
            "2412609" => new Map([
                "name" => "São Paulo do Potengi",
                "cep" => [ 59460000, 59463999 ],
                "ibge" => 2412609
            ]),
            "2412708" => new Map([
                "name" => "São Pedro",
                "cep" => [ 59480000, 59489999 ],
                "ibge" => 2412708
            ]),
            "2412807" => new Map([
                "name" => "São Rafael",
                "cep" => [ 59518000, 59519999 ],
                "ibge" => 2412807
            ]),
            "2412906" => new Map([
                "name" => "São Tomé",
                "cep" => [ 59400000, 59409999 ],
                "ibge" => 2412906
            ]),
            "2413003" => new Map([
                "name" => "São Vicente",
                "cep" => [ 59340000, 59342999 ],
                "ibge" => 2413003
            ]),
            "2413102" => new Map([
                "name" => "Senador Elói de Souza",
                "cep" => [ 59250000, 59254999 ],
                "ibge" => 2413102
            ]),
            "2413201" => new Map([
                "name" => "Senador Georgino Avelino",
                "cep" => [ 59168000, 59169999 ],
                "ibge" => 2413201
            ]),
            "2410306" => new Map([
                "name" => "Serra Caiada",
                "cep" => [ 59245000, 59246999 ],
                "ibge" => 2410306
            ]),
            "2413300" => new Map([
                "name" => "Serra de São Bento",
                "cep" => [ 59214000, 59214999 ],
                "ibge" => 2413300
            ]),
            "2413359" => new Map([
                "name" => "Serra do Mel",
                "cep" => [ 59663000, 59664999 ],
                "ibge" => 2413359
            ]),
            "2413409" => new Map([
                "name" => "Serra Negra do Norte",
                "cep" => [ 59318000, 59319999 ],
                "ibge" => 2413409
            ]),
            "2413508" => new Map([
                "name" => "Serrinha",
                "cep" => [ 59258000, 59258999 ],
                "ibge" => 2413508
            ]),
            "2413557" => new Map([
                "name" => "Serrinha dos Pintos",
                "cep" => [ 59808000, 59809999 ],
                "ibge" => 2413557
            ]),
            "2413607" => new Map([
                "name" => "Severiano Melo",
                "cep" => [ 59856000, 59864999 ],
                "ibge" => 2413607
            ]),
            "2413706" => new Map([
                "name" => "Sítio Novo",
                "cep" => [ 59440000, 59459999 ],
                "ibge" => 2413706
            ]),
            "2413805" => new Map([
                "name" => "Taboleiro Grande",
                "cep" => [ 59840000, 59854999 ],
                "ibge" => 2413805
            ]),
            "2413904" => new Map([
                "name" => "Taipu",
                "cep" => [ 59565000, 59569999 ],
                "ibge" => 2413904
            ]),
            "2414001" => new Map([
                "name" => "Tangará",
                "cep" => [ 59240000, 59243999 ],
                "ibge" => 2414001
            ]),
            "2414100" => new Map([
                "name" => "Tenente Ananias",
                "cep" => [ 59955000, 59959999 ],
                "ibge" => 2414100
            ]),
            "2414159" => new Map([
                "name" => "Tenente Laurentino Cruz",
                "cep" => [ 59338000, 59339999 ],
                "ibge" => 2414159
            ]),
            "2411056" => new Map([
                "name" => "Tibau",
                "cep" => [ 59678000, 59679999 ],
                "ibge" => 2411056
            ]),
            "2414209" => new Map([
                "name" => "Tibau do Sul",
                "cep" => [ 59178000, 59179999 ],
                "ibge" => 2414209
            ]),
            "2414308" => new Map([
                "name" => "Timbaúba dos Batistas",
                "cep" => [ 59320000, 59323999 ],
                "ibge" => 2414308
            ]),
            "2414407" => new Map([
                "name" => "Touros",
                "cep" => [ 59584000, 59584999 ],
                "ibge" => 2414407
            ]),
            "2414456" => new Map([
                "name" => "Triunfo Potiguar",
                "cep" => [ 59685000, 59689999 ],
                "ibge" => 2414456
            ]),
            "2414506" => new Map([
                "name" => "Umarizal",
                "cep" => [ 59865000, 59869999 ],
                "ibge" => 2414506
            ]),
            "2414605" => new Map([
                "name" => "Upanema",
                "cep" => [ 59670000, 59674999 ],
                "ibge" => 2414605
            ]),
            "2414704" => new Map([
                "name" => "Várzea",
                "cep" => [ 59185000, 59186999 ],
                "ibge" => 2414704
            ]),
            "2414753" => new Map([
                "name" => "Venha-Ver",
                "cep" => [ 59925000, 59929999 ],
                "ibge" => 2414753
            ]),
            "2414803" => new Map([
                "name" => "Vera Cruz",
                "cep" => [ 59184000, 59184999 ],
                "ibge" => 2414803
            ]),
            "2414902" => new Map([
                "name" => "Viçosa",
                "cep" => [ 59815000, 59819999 ],
                "ibge" => 2414902
            ]),
            "2415008" => new Map([
                "name" => "Vila Flor",
                "cep" => [ 59192000, 59193999 ],
                "ibge" => 2415008
            ])
        ]);

        return $map;
    }
}