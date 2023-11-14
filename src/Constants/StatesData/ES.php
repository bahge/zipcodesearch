<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class ES implements ICitiesInfo
{
    public static int $numberCities = 78;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(ES::$numberCities);
        $map->putAll([
            "3200102" => new Map([
                "name" => "Afonso Cláudio",
                "cep" => [ 29600000, 29614999 ],
                "ibge" => 3200102
            ]),
            "3200169" => new Map([
                "name" => "Água Doce do Norte",
                "cep" => [ 29820000, 29829999 ],
                "ibge" => 3200169
            ]),
            "3200136" => new Map([
                "name" => "Águia Branca",
                "cep" => [ 29795000, 29799999 ],
                "ibge" => 3200136
            ]),
            "3200201" => new Map([
                "name" => "Alegre",
                "cep" => [ 29500000, 29539999 ],
                "ibge" => 3200201
            ]),
            "3200300" => new Map([
                "name" => "Alfredo Chaves",
                "cep" => [ 29240000, 29254999 ],
                "ibge" => 3200300
            ]),
            "3200359" => new Map([
                "name" => "Alto Rio Novo",
                "cep" => [ 29760000, 29769999 ],
                "ibge" => 3200359
            ]),
            "3200409" => new Map([
                "name" => "Anchieta",
                "cep" => [ 29230000, 29239999 ],
                "ibge" => 3200409
            ]),
            "3200508" => new Map([
                "name" => "Apiacá",
                "cep" => [ 29450000, 29459999 ],
                "ibge" => 3200508
            ]),
            "3200607" => new Map([
                "name" => "Aracruz",
                "cep" => [ 29190001, 29199999 ],
                "ibge" => 3200607
            ]),
            "3200706" => new Map([
                "name" => "Atílio Vivácqua",
                "cep" => [ 29490000, 29499999 ],
                "ibge" => 3200706
            ]),
            "3200805" => new Map([
                "name" => "Baixo Guandu",
                "cep" => [ 29730000, 29744999 ],
                "ibge" => 3200805
            ]),
            "3200904" => new Map([
                "name" => "Barra de São Francisco",
                "cep" => [ 29800000, 29819999 ],
                "ibge" => 3200904
            ]),
            "3201001" => new Map([
                "name" => "Boa Esperança",
                "cep" => [ 29845000, 29849999 ],
                "ibge" => 3201001
            ]),
            "3201100" => new Map([
                "name" => "Bom Jesus do Norte",
                "cep" => [ 29460000, 29469999 ],
                "ibge" => 3201100
            ]),
            "3201159" => new Map([
                "name" => "Brejetuba",
                "cep" => [ 29630000, 29639999 ],
                "ibge" => 3201159
            ]),
            "3201209" => new Map([
                "name" => "Cachoeiro de Itapemirim",
                "cep" => [ 29300001, 29329999 ],
                "ibge" => 3201209
            ]),
            "3201308" => new Map([
                "name" => "Cariacica",
                "cep" => [ 29140001, 29159999 ],
                "ibge" => 3201308
            ]),
            "3201407" => new Map([
                "name" => "Castelo",
                "cep" => [ 29360000, 29369999 ],
                "ibge" => 3201407
            ]),
            "3201506" => new Map([
                "name" => "Colatina",
                "cep" => [ 29700001, 29719999 ],
                "ibge" => 3201506
            ]),
            "3201605" => new Map([
                "name" => "Conceição da Barra",
                "cep" => [ 29960000, 29969999 ],
                "ibge" => 3201605
            ]),
            "3201704" => new Map([
                "name" => "Conceição do Castelo",
                "cep" => [ 29370000, 29374999 ],
                "ibge" => 3201704
            ]),
            "3201803" => new Map([
                "name" => "Divino de São Lourenço",
                "cep" => [ 29590000, 29599999 ],
                "ibge" => 3201803
            ]),
            "3201902" => new Map([
                "name" => "Domingos Martins",
                "cep" => [ 29260000, 29279999 ],
                "ibge" => 3201902
            ]),
            "3202009" => new Map([
                "name" => "Dores do Rio Preto",
                "cep" => [ 29580000, 29589999 ],
                "ibge" => 3202009
            ]),
            "3202108" => new Map([
                "name" => "Ecoporanga",
                "cep" => [ 29850000, 29879999 ],
                "ibge" => 3202108
            ]),
            "3202207" => new Map([
                "name" => "Fundão",
                "cep" => [ 29185000, 29189999 ],
                "ibge" => 3202207
            ]),
            "3202256" => new Map([
                "name" => "Governador Lindenberg",
                "cep" => [ 29720000, 29724999 ],
                "ibge" => 3202256
            ]),
            "3202306" => new Map([
                "name" => "Guaçuí",
                "cep" => [ 29560000, 29579999 ],
                "ibge" => 3202306
            ]),
            "3202405" => new Map([
                "name" => "Guarapari",
                "cep" => [ 29200001, 29229999 ],
                "ibge" => 3202405
            ]),
            "3202454" => new Map([
                "name" => "Ibatiba",
                "cep" => [ 29395000, 29397999 ],
                "ibge" => 3202454
            ]),
            "3202504" => new Map([
                "name" => "Ibiraçu",
                "cep" => [ 29670000, 29679999 ],
                "ibge" => 3202504
            ]),
            "3202553" => new Map([
                "name" => "Ibitirama",
                "cep" => [ 29540000, 29549999 ],
                "ibge" => 3202553
            ]),
            "3202603" => new Map([
                "name" => "Iconha",
                "cep" => [ 29280000, 29284999 ],
                "ibge" => 3202603
            ]),
            "3202652" => new Map([
                "name" => "Irupi",
                "cep" => [ 29398000, 29399999 ],
                "ibge" => 3202652
            ]),
            "3202702" => new Map([
                "name" => "Itaguaçu",
                "cep" => [ 29690000, 29699999 ],
                "ibge" => 3202702
            ]),
            "3202801" => new Map([
                "name" => "Itapemirim",
                "cep" => [ 29330000, 29344999 ],
                "ibge" => 3202801
            ]),
            "3202900" => new Map([
                "name" => "Itarana",
                "cep" => [ 29620000, 29629999 ],
                "ibge" => 3202900
            ]),
            "3203007" => new Map([
                "name" => "Iúna",
                "cep" => [ 29390000, 29394999 ],
                "ibge" => 3203007
            ]),
            "3203056" => new Map([
                "name" => "Jaguaré",
                "cep" => [ 29950000, 29959999 ],
                "ibge" => 3203056
            ]),
            "3203106" => new Map([
                "name" => "Jerônimo Monteiro",
                "cep" => [ 29550000, 29559999 ],
                "ibge" => 3203106
            ]),
            "3203130" => new Map([
                "name" => "João Neiva",
                "cep" => [ 29680000, 29689999 ],
                "ibge" => 3203130
            ]),
            "3203163" => new Map([
                "name" => "Laranja da Terra",
                "cep" => [ 29615000, 29619999 ],
                "ibge" => 3203163
            ]),
            "3203205" => new Map([
                "name" => "Linhares",
                "cep" => [ 29900001, 29919999 ],
                "ibge" => 3203205
            ]),
            "3203304" => new Map([
                "name" => "Mantenópolis",
                "cep" => [ 29770000, 29779999 ],
                "ibge" => 3203304
            ]),
            "3203320" => new Map([
                "name" => "Marataízes",
                "cep" => [ 29345000, 29349999 ],
                "ibge" => 3203320
            ]),
            "3203346" => new Map([
                "name" => "Marechal Floriano",
                "cep" => [ 29255000, 29259999 ],
                "ibge" => 3203346
            ]),
            "3203353" => new Map([
                "name" => "Marilândia",
                "cep" => [ 29725000, 29729999 ],
                "ibge" => 3203353
            ]),
            "3203403" => new Map([
                "name" => "Mimoso do Sul",
                "cep" => [ 29400000, 29449999 ],
                "ibge" => 3203403
            ]),
            "3203502" => new Map([
                "name" => "Montanha",
                "cep" => [ 29890000, 29899999 ],
                "ibge" => 3203502
            ]),
            "3203601" => new Map([
                "name" => "Mucurici",
                "cep" => [ 29880000, 29884999 ],
                "ibge" => 3203601
            ]),
            "3203700" => new Map([
                "name" => "Muniz Freire",
                "cep" => [ 29380000, 29389999 ],
                "ibge" => 3203700
            ]),
            "3203809" => new Map([
                "name" => "Muqui",
                "cep" => [ 29480000, 29489999 ],
                "ibge" => 3203809
            ]),
            "3203908" => new Map([
                "name" => "Nova Venécia",
                "cep" => [ 29830000, 29842999 ],
                "ibge" => 3203908
            ]),
            "3204005" => new Map([
                "name" => "Pancas",
                "cep" => [ 29750000, 29759999 ],
                "ibge" => 3204005
            ]),
            "3204054" => new Map([
                "name" => "Pedro Canário",
                "cep" => [ 29970000, 29979999 ],
                "ibge" => 3204054
            ]),
            "3204104" => new Map([
                "name" => "Pinheiros",
                "cep" => [ 29980000, 29999999 ],
                "ibge" => 3204104
            ]),
            "3204203" => new Map([
                "name" => "Piúma",
                "cep" => [ 29285000, 29289999 ],
                "ibge" => 3204203
            ]),
            "3204252" => new Map([
                "name" => "Ponto Belo",
                "cep" => [ 29885000, 29889999 ],
                "ibge" => 3204252
            ]),
            "3204302" => new Map([
                "name" => "Presidente Kennedy",
                "cep" => [ 29350000, 29359999 ],
                "ibge" => 3204302
            ]),
            "3204351" => new Map([
                "name" => "Rio Bananal",
                "cep" => [ 29920000, 29926999 ],
                "ibge" => 3204351
            ]),
            "3204401" => new Map([
                "name" => "Rio Novo do Sul",
                "cep" => [ 29290000, 29294999 ],
                "ibge" => 3204401
            ]),
            "3204500" => new Map([
                "name" => "Santa Leopoldina",
                "cep" => [ 29640000, 29644999 ],
                "ibge" => 3204500
            ]),
            "3204559" => new Map([
                "name" => "Santa Maria de Jetibá",
                "cep" => [ 29645000, 29649999 ],
                "ibge" => 3204559
            ]),
            "3204609" => new Map([
                "name" => "Santa Teresa",
                "cep" => [ 29650000, 29664999 ],
                "ibge" => 3204609
            ]),
            "3204658" => new Map([
                "name" => "São Domingos do Norte",
                "cep" => [ 29745000, 29749999 ],
                "ibge" => 3204658
            ]),
            "3204708" => new Map([
                "name" => "São Gabriel da Palha",
                "cep" => [ 29780000, 29784999 ],
                "ibge" => 3204708
            ]),
            "3204807" => new Map([
                "name" => "São José do Calçado",
                "cep" => [ 29470000, 29479999 ],
                "ibge" => 3204807
            ]),
            "3204906" => new Map([
                "name" => "São Mateus",
                "cep" => [ 29930001, 29949999 ],
                "ibge" => 3204906
            ]),
            "3204955" => new Map([
                "name" => "São Roque do Canaã",
                "cep" => [ 29665000, 29669999 ],
                "ibge" => 3204955
            ]),
            "3205002" => new Map([
                "name" => "Serra",
                "cep" => [ 29160001, 29184999 ],
                "ibge" => 3205002
            ]),
            "3205010" => new Map([
                "name" => "Sooretama",
                "cep" => [ 29927000, 29929999 ],
                "ibge" => 3205010
            ]),
            "3205036" => new Map([
                "name" => "Vargem Alta",
                "cep" => [ 29295000, 29299999 ],
                "ibge" => 3205036
            ]),
            "3205069" => new Map([
                "name" => "Venda Nova do Imigrante",
                "cep" => [ 29375000, 29379999 ],
                "ibge" => 3205069
            ]),
            "3205101" => new Map([
                "name" => "Viana",
                "cep" => [ 29130001, 29139999 ],
                "ibge" => 3205101
            ]),
            "3205150" => new Map([
                "name" => "Vila Pavão",
                "cep" => [ 29843000, 29844999 ],
                "ibge" => 3205150
            ]),
            "3205176" => new Map([
                "name" => "Vila Valério",
                "cep" => [ 29785000, 29794999 ],
                "ibge" => 3205176
            ]),
            "3205200" => new Map([
                "name" => "Vila Velha",
                "cep" => [ 29100001, 29129999 ],
                "ibge" => 3205200
            ]),
            "3205309" => new Map([
                "name" => "Vitória",
                "cep" => [ 29000001, 29099999 ],
                "ibge" => 3205309
            ])
        ]);

        return $map;
    }
}