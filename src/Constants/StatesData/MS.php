<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class MS implements ICitiesInfo
{
    public static int $numberCities = 79;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(MS::$numberCities);
        $map->putAll([
            "5000203" => new Map([
                "name" => "Água Clara",
                "zipCode" => [ 79680000, 79689999 ],
                "ibge" => 5000203
            ]),
            "5000252" => new Map([
                "name" => "Alcinópolis",
                "zipCode" => [ 79530000, 79539999 ],
                "ibge" => 5000252
            ]),
            "5000609" => new Map([
                "name" => "Amambai",
                "zipCode" => [ 79990000, 79994999 ],
                "ibge" => 5000609
            ]),
            "5000708" => new Map([
                "name" => "Anastácio",
                "zipCode" => [ 79210000, 79214999 ],
                "ibge" => 5000708
            ]),
            "5000807" => new Map([
                "name" => "Anaurilândia",
                "zipCode" => [ 79770000, 79779999 ],
                "ibge" => 5000807
            ]),
            "5000856" => new Map([
                "name" => "Angélica",
                "zipCode" => [ 79785000, 79789999 ],
                "ibge" => 5000856
            ]),
            "5000906" => new Map([
                "name" => "Antônio João",
                "zipCode" => [ 79910000, 79919999 ],
                "ibge" => 5000906
            ]),
            "5001003" => new Map([
                "name" => "Aparecida do Taboado",
                "zipCode" => [ 79570000, 79579999 ],
                "ibge" => 5001003
            ]),
            "5001102" => new Map([
                "name" => "Aquidauana",
                "zipCode" => [ 79200000, 79209999 ],
                "ibge" => 5001102
            ]),
            "5001243" => new Map([
                "name" => "Aral Moreira",
                "zipCode" => [ 79930000, 79934999 ],
                "ibge" => 5001243
            ]),
            "5001508" => new Map([
                "name" => "Bandeirantes",
                "zipCode" => [ 79430000, 79439999 ],
                "ibge" => 5001508
            ]),
            "5001904" => new Map([
                "name" => "Bataguassu",
                "zipCode" => [ 79780000, 79784999 ],
                "ibge" => 5001904
            ]),
            "5002001" => new Map([
                "name" => "Batayporã",
                "zipCode" => [ 79760000, 79764999 ],
                "ibge" => 5002001
            ]),
            "5002100" => new Map([
                "name" => "Bela Vista",
                "zipCode" => [ 79260000, 79269999 ],
                "ibge" => 5002100
            ]),
            "5002159" => new Map([
                "name" => "Bodoquena",
                "zipCode" => [ 79390000, 79399999 ],
                "ibge" => 5002159
            ]),
            "5002209" => new Map([
                "name" => "Bonito",
                "zipCode" => [ 79290000, 79299999 ],
                "ibge" => 5002209
            ]),
            "5002308" => new Map([
                "name" => "Brasilândia",
                "zipCode" => [ 79670000, 79679999 ],
                "ibge" => 5002308
            ]),
            "5002407" => new Map([
                "name" => "Caarapó",
                "zipCode" => [ 79940000, 79949999 ],
                "ibge" => 5002407
            ]),
            "5002605" => new Map([
                "name" => "Camapuã",
                "zipCode" => [ 79420000, 79427999 ],
                "ibge" => 5002605
            ]),
            "5002704" => new Map([
                "name" => "Campo Grande",
                "zipCode" => [ 79000001, 79129999 ],
                "ibge" => 5002704
            ]),
            "5002803" => new Map([
                "name" => "Caracol",
                "zipCode" => [ 79270000, 79279999 ],
                "ibge" => 5002803
            ]),
            "5002902" => new Map([
                "name" => "Cassilândia",
                "zipCode" => [ 79540000, 79549999 ],
                "ibge" => 5002902
            ]),
            "5002951" => new Map([
                "name" => "Chapadão do Sul",
                "zipCode" => [ 79560000, 79569999 ],
                "ibge" => 5002951
            ]),
            "5003108" => new Map([
                "name" => "Corguinho",
                "zipCode" => [ 79460000, 79469999 ],
                "ibge" => 5003108
            ]),
            "5003157" => new Map([
                "name" => "Coronel Sapucaia",
                "zipCode" => [ 79995000, 79999999 ],
                "ibge" => 5003157
            ]),
            "5003207" => new Map([
                "name" => "Corumbá",
                "zipCode" => [ 79300001, 79369999 ],
                "ibge" => 5003207
            ]),
            "5003256" => new Map([
                "name" => "Costa Rica",
                "zipCode" => [ 79550000, 79555999 ],
                "ibge" => 5003256
            ]),
            "5003306" => new Map([
                "name" => "Coxim",
                "zipCode" => [ 79400000, 79409999 ],
                "ibge" => 5003306
            ]),
            "5003454" => new Map([
                "name" => "Deodápolis",
                "zipCode" => [ 79790000, 79799999 ],
                "ibge" => 5003454
            ]),
            "5003488" => new Map([
                "name" => "Dois Irmãos do Buriti",
                "zipCode" => [ 79215000, 79219999 ],
                "ibge" => 5003488
            ]),
            "5003504" => new Map([
                "name" => "Douradina",
                "zipCode" => [ 79880000, 79889999 ],
                "ibge" => 5003504
            ]),
            "5003702" => new Map([
                "name" => "Dourados",
                "zipCode" => [ 79800001, 79879999 ],
                "ibge" => 5003702
            ]),
            "5003751" => new Map([
                "name" => "Eldorado",
                "zipCode" => [ 79970000, 79974999 ],
                "ibge" => 5003751
            ]),
            "5003801" => new Map([
                "name" => "Fátima do Sul",
                "zipCode" => [ 79700000, 79709999 ],
                "ibge" => 5003801
            ]),
            "5003900" => new Map([
                "name" => "Figueirão",
                "zipCode" => [ 79428000, 79429999 ],
                "ibge" => 5003900
            ]),
            "5004007" => new Map([
                "name" => "Glória de Dourados",
                "zipCode" => [ 79730000, 79739999 ],
                "ibge" => 5004007
            ]),
            "5004106" => new Map([
                "name" => "Guia Lopes da Laguna",
                "zipCode" => [ 79230000, 79239999 ],
                "ibge" => 5004106
            ]),
            "5004304" => new Map([
                "name" => "Iguatemi",
                "zipCode" => [ 79960000, 79964999 ],
                "ibge" => 5004304
            ]),
            "5004403" => new Map([
                "name" => "Inocência",
                "zipCode" => [ 79580000, 79589999 ],
                "ibge" => 5004403
            ]),
            "5004502" => new Map([
                "name" => "Itaporã",
                "zipCode" => [ 79890000, 79899999 ],
                "ibge" => 5004502
            ]),
            "5004601" => new Map([
                "name" => "Itaquiraí",
                "zipCode" => [ 79965000, 79969999 ],
                "ibge" => 5004601
            ]),
            "5004700" => new Map([
                "name" => "Ivinhema",
                "zipCode" => [ 79740000, 79744999 ],
                "ibge" => 5004700
            ]),
            "5004809" => new Map([
                "name" => "Japorã",
                "zipCode" => [ 79985000, 79989999 ],
                "ibge" => 5004809
            ]),
            "5004908" => new Map([
                "name" => "Jaraguari",
                "zipCode" => [ 79440000, 79449999 ],
                "ibge" => 5004908
            ]),
            "5005004" => new Map([
                "name" => "Jardim",
                "zipCode" => [ 79240000, 79259999 ],
                "ibge" => 5005004
            ]),
            "5005103" => new Map([
                "name" => "Jateí",
                "zipCode" => [ 79720000, 79729999 ],
                "ibge" => 5005103
            ]),
            "5005152" => new Map([
                "name" => "Jutí",
                "zipCode" => [ 79955000, 79959999 ],
                "ibge" => 5005152
            ]),
            "5005202" => new Map([
                "name" => "Ladário",
                "zipCode" => [ 79370000, 79379999 ],
                "ibge" => 5005202
            ]),
            "5005251" => new Map([
                "name" => "Laguna Carapã",
                "zipCode" => [ 79920000, 79924999 ],
                "ibge" => 5005251
            ]),
            "5005400" => new Map([
                "name" => "Maracaju",
                "zipCode" => [ 79150000, 79169999 ],
                "ibge" => 5005400
            ]),
            "5005608" => new Map([
                "name" => "Miranda",
                "zipCode" => [ 79380000, 79389999 ],
                "ibge" => 5005608
            ]),
            "5005681" => new Map([
                "name" => "Mundo Novo",
                "zipCode" => [ 79980000, 79984999 ],
                "ibge" => 5005681
            ]),
            "5005707" => new Map([
                "name" => "Naviraí",
                "zipCode" => [ 79950000, 79954999 ],
                "ibge" => 5005707
            ]),
            "5005806" => new Map([
                "name" => "Nioaque",
                "zipCode" => [ 79220000, 79229999 ],
                "ibge" => 5005806
            ]),
            "5006002" => new Map([
                "name" => "Nova Alvorada do Sul",
                "zipCode" => [ 79140000, 79149999 ],
                "ibge" => 5006002
            ]),
            "5006200" => new Map([
                "name" => "Nova Andradina",
                "zipCode" => [ 79750000, 79759999 ],
                "ibge" => 5006200
            ]),
            "5006259" => new Map([
                "name" => "Novo Horizonte do Sul",
                "zipCode" => [ 79745000, 79749999 ],
                "ibge" => 5006259
            ]),
            "5006275" => new Map([
                "name" => "Paraíso das Águas",
                "zipCode" => [ 79556000, 79559999 ],
                "ibge" => 5006275
            ]),
            "5006309" => new Map([
                "name" => "Paranaíba",
                "zipCode" => [ 79500000, 79529999 ],
                "ibge" => 5006309
            ]),
            "5006358" => new Map([
                "name" => "Paranhos",
                "zipCode" => [ 79925000, 79929999 ],
                "ibge" => 5006358
            ]),
            "5006408" => new Map([
                "name" => "Pedro Gomes",
                "zipCode" => [ 79410000, 79414999 ],
                "ibge" => 5006408
            ]),
            "5006606" => new Map([
                "name" => "Ponta Porã",
                "zipCode" => [ 79900001, 79909999 ],
                "ibge" => 5006606
            ]),
            "5006903" => new Map([
                "name" => "Porto Murtinho",
                "zipCode" => [ 79280000, 79289999 ],
                "ibge" => 5006903
            ]),
            "5007109" => new Map([
                "name" => "Ribas do Rio Pardo",
                "zipCode" => [ 79180000, 79189999 ],
                "ibge" => 5007109
            ]),
            "5007208" => new Map([
                "name" => "Rio Brilhante",
                "zipCode" => [ 79130000, 79139999 ],
                "ibge" => 5007208
            ]),
            "5007307" => new Map([
                "name" => "Rio Negro",
                "zipCode" => [ 79470000, 79479999 ],
                "ibge" => 5007307
            ]),
            "5007406" => new Map([
                "name" => "Rio Verde de Mato Grosso",
                "zipCode" => [ 79480000, 79489999 ],
                "ibge" => 5007406
            ]),
            "5007505" => new Map([
                "name" => "Rochedo",
                "zipCode" => [ 79450000, 79459999 ],
                "ibge" => 5007505
            ]),
            "5007554" => new Map([
                "name" => "Santa Rita do Pardo",
                "zipCode" => [ 79690000, 79699999 ],
                "ibge" => 5007554
            ]),
            "5007695" => new Map([
                "name" => "São Gabriel do Oeste",
                "zipCode" => [ 79490000, 79499999 ],
                "ibge" => 5007695
            ]),
            "5007802" => new Map([
                "name" => "Selvíria",
                "zipCode" => [ 79590000, 79599999 ],
                "ibge" => 5007802
            ]),
            "5007703" => new Map([
                "name" => "Sete Quedas",
                "zipCode" => [ 79935000, 79939999 ],
                "ibge" => 5007703
            ]),
            "5007901" => new Map([
                "name" => "Sidrolândia",
                "zipCode" => [ 79170000, 79179999 ],
                "ibge" => 5007901
            ]),
            "5007935" => new Map([
                "name" => "Sonora",
                "zipCode" => [ 79415000, 79419999 ],
                "ibge" => 5007935
            ]),
            "5007950" => new Map([
                "name" => "Tacuru",
                "zipCode" => [ 79975000, 79979999 ],
                "ibge" => 5007950
            ]),
            "5007976" => new Map([
                "name" => "Taquarussu",
                "zipCode" => [ 79765000, 79769999 ],
                "ibge" => 5007976
            ]),
            "5008008" => new Map([
                "name" => "Terenos",
                "zipCode" => [ 79190000, 79199999 ],
                "ibge" => 5008008
            ]),
            "5008305" => new Map([
                "name" => "Três Lagoas",
                "zipCode" => [ 79600001, 79669999 ],
                "ibge" => 5008305
            ]),
            "5008404" => new Map([
                "name" => "Vicentina",
                "zipCode" => [ 79710000, 79719999 ],
                "ibge" => 5008404
            ])
        ]);

        return $map;
    }
}