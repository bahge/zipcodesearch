<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class AL implements ICitiesInfo
{
    public static int $numberCities = 102;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(AL::$numberCities);
        $map->putAll([
            "2700102" => new Map([
                "name" => "Água Branca",
                "cep" => [ 57490000, 57499999 ],
                "ibge" => 2700102
            ]),
            "2700201" => new Map([
                "name" => "Anadia",
                "cep" => [ 57660000, 57669999 ],
                "ibge" => 2700201
            ]),
            "2700300" => new Map([
                "name" => "Arapiraca",
                "cep" => [ 57300001, 57319999 ],
                "ibge" => 2700300
            ]),
            "2700409" => new Map([
                "name" => "Atalaia",
                "cep" => [ 57690000, 57699999 ],
                "ibge" => 2700409
            ]),
            "2700508" => new Map([
                "name" => "Barra de Santo Antônio",
                "cep" => [ 57925000, 57929999 ],
                "ibge" => 2700508
            ]),
            "2700607" => new Map([
                "name" => "Barra de São Miguel",
                "cep" => [ 57180000, 57199999 ],
                "ibge" => 2700607
            ]),
            "2700706" => new Map([
                "name" => "Batalha",
                "cep" => [ 57420000, 57424999 ],
                "ibge" => 2700706
            ]),
            "2700805" => new Map([
                "name" => "Belém",
                "cep" => [ 57630000, 57634999 ],
                "ibge" => 2700805
            ]),
            "2700904" => new Map([
                "name" => "Belo Monte",
                "cep" => [ 57435000, 57439999 ],
                "ibge" => 2700904
            ]),
            "2701001" => new Map([
                "name" => "Boca da Mata",
                "cep" => [ 57680000, 57689999 ],
                "ibge" => 2701001
            ]),
            "2701100" => new Map([
                "name" => "Branquinha",
                "cep" => [ 57830000, 57839999 ],
                "ibge" => 2701100
            ]),
            "2701209" => new Map([
                "name" => "Cacimbinhas",
                "cep" => [ 57570000, 57579999 ],
                "ibge" => 2701209
            ]),
            "2701308" => new Map([
                "name" => "Cajueiro",
                "cep" => [ 57770000, 57779999 ],
                "ibge" => 2701308
            ]),
            "2701357" => new Map([
                "name" => "Campestre",
                "cep" => [ 57968000, 57969999 ],
                "ibge" => 2701357
            ]),
            "2701407" => new Map([
                "name" => "Campo Alegre",
                "cep" => [ 57250000, 57254999 ],
                "ibge" => 2701407
            ]),
            "2701506" => new Map([
                "name" => "Campo Grande",
                "cep" => [ 57350000, 57359999 ],
                "ibge" => 2701506
            ]),
            "2701605" => new Map([
                "name" => "Canapi",
                "cep" => [ 57530000, 57534999 ],
                "ibge" => 2701605
            ]),
            "2701704" => new Map([
                "name" => "Capela",
                "cep" => [ 57780000, 57799999 ],
                "ibge" => 2701704
            ]),
            "2701803" => new Map([
                "name" => "Carneiros",
                "cep" => [ 57535000, 57539999 ],
                "ibge" => 2701803
            ]),
            "2701902" => new Map([
                "name" => "Chã Preta",
                "cep" => [ 57760000, 57769999 ],
                "ibge" => 2701902
            ]),
            "2702009" => new Map([
                "name" => "Coité do Nóia",
                "cep" => [ 57325000, 57329999 ],
                "ibge" => 2702009
            ]),
            "2702108" => new Map([
                "name" => "Colônia Leopoldina",
                "cep" => [ 57975000, 57979999 ],
                "ibge" => 2702108
            ]),
            "2702207" => new Map([
                "name" => "Coqueiro Seco",
                "cep" => [ 57140000, 57149999 ],
                "ibge" => 2702207
            ]),
            "2702306" => new Map([
                "name" => "Coruripe",
                "cep" => [ 57230000, 57239999 ],
                "ibge" => 2702306
            ]),
            "2702355" => new Map([
                "name" => "Craíbas",
                "cep" => [ 57320000, 57324999 ],
                "ibge" => 2702355
            ]),
            "2702405" => new Map([
                "name" => "Delmiro Gouveia",
                "cep" => [ 57480000, 57489999 ],
                "ibge" => 2702405
            ]),
            "2702504" => new Map([
                "name" => "Dois Riachos",
                "cep" => [ 57560000, 57569999 ],
                "ibge" => 2702504
            ]),
            "2702553" => new Map([
                "name" => "Estrela de Alagoas",
                "cep" => [ 57625000, 57629999 ],
                "ibge" => 2702553
            ]),
            "2702603" => new Map([
                "name" => "Feira Grande",
                "cep" => [ 57340000, 57349999 ],
                "ibge" => 2702603
            ]),
            "2702702" => new Map([
                "name" => "Feliz Deserto",
                "cep" => [ 57220000, 57229999 ],
                "ibge" => 2702702
            ]),
            "2702801" => new Map([
                "name" => "Flexeiras",
                "cep" => [ 57995000, 57999999 ],
                "ibge" => 2702801
            ]),
            "2702900" => new Map([
                "name" => "Girau do Ponciano",
                "cep" => [ 57360000, 57369999 ],
                "ibge" => 2702900
            ]),
            "2703007" => new Map([
                "name" => "Ibateguara",
                "cep" => [ 57890000, 57899999 ],
                "ibge" => 2703007
            ]),
            "2703106" => new Map([
                "name" => "Igaci",
                "cep" => [ 57620000, 57624999 ],
                "ibge" => 2703106
            ]),
            "2703205" => new Map([
                "name" => "Igreja Nova",
                "cep" => [ 57280000, 57289999 ],
                "ibge" => 2703205
            ]),
            "2703304" => new Map([
                "name" => "Inhapi",
                "cep" => [ 57545000, 57549999 ],
                "ibge" => 2703304
            ]),
            "2703403" => new Map([
                "name" => "Jacaré dos Homens",
                "cep" => [ 57430000, 57434999 ],
                "ibge" => 2703403
            ]),
            "2703502" => new Map([
                "name" => "Jacuípe",
                "cep" => [ 57960000, 57964999 ],
                "ibge" => 2703502
            ]),
            "2703601" => new Map([
                "name" => "Japaratinga",
                "cep" => [ 57950000, 57954999 ],
                "ibge" => 2703601
            ]),
            "2703700" => new Map([
                "name" => "Jaramataia",
                "cep" => [ 57425000, 57429999 ],
                "ibge" => 2703700
            ]),
            "2703759" => new Map([
                "name" => "Jequiá da Praia",
                "cep" => [ 57255000, 57256999 ],
                "ibge" => 2703759
            ]),
            "2703809" => new Map([
                "name" => "Joaquim Gomes",
                "cep" => [ 57980000, 57989999 ],
                "ibge" => 2703809
            ]),
            "2703908" => new Map([
                "name" => "Jundiá",
                "cep" => [ 57965000, 57967999 ],
                "ibge" => 2703908
            ]),
            "2704005" => new Map([
                "name" => "Junqueiro",
                "cep" => [ 57270000, 57274999 ],
                "ibge" => 2704005
            ]),
            "2704104" => new Map([
                "name" => "Lagoa da Canoa",
                "cep" => [ 57330000, 57339999 ],
                "ibge" => 2704104
            ]),
            "2704203" => new Map([
                "name" => "Limoeiro de Anadia",
                "cep" => [ 57260000, 57264999 ],
                "ibge" => 2704203
            ]),
            "2704302" => new Map([
                "name" => "Maceió",
                "cep" => [ 57000001, 57099999 ],
                "ibge" => 2704302
            ]),
            "2704401" => new Map([
                "name" => "Major Isidoro",
                "cep" => [ 57580000, 57599999 ],
                "ibge" => 2704401
            ]),
            "2704906" => new Map([
                "name" => "Mar Vermelho",
                "cep" => [ 57730000, 57739999 ],
                "ibge" => 2704906
            ]),
            "2704500" => new Map([
                "name" => "Maragogi",
                "cep" => [ 57955000, 57959999 ],
                "ibge" => 2704500
            ]),
            "2704609" => new Map([
                "name" => "Maravilha",
                "cep" => [ 57520000, 57524999 ],
                "ibge" => 2704609
            ]),
            "2704708" => new Map([
                "name" => "Marechal Deodoro",
                "cep" => [ 57160000, 57179999 ],
                "ibge" => 2704708
            ]),
            "2704807" => new Map([
                "name" => "Maribondo",
                "cep" => [ 57670000, 57679999 ],
                "ibge" => 2704807
            ]),
            "2705002" => new Map([
                "name" => "Mata Grande",
                "cep" => [ 57540000, 57544999 ],
                "ibge" => 2705002
            ]),
            "2705101" => new Map([
                "name" => "Matriz de Camaragibe",
                "cep" => [ 57910000, 57919999 ],
                "ibge" => 2705101
            ]),
            "2705200" => new Map([
                "name" => "Messias",
                "cep" => [ 57990000, 57994999 ],
                "ibge" => 2705200
            ]),
            "2705309" => new Map([
                "name" => "Minador do Negrão",
                "cep" => [ 57615000, 57619999 ],
                "ibge" => 2705309
            ]),
            "2705408" => new Map([
                "name" => "Monteirópolis",
                "cep" => [ 57440000, 57441999 ],
                "ibge" => 2705408
            ]),
            "2705507" => new Map([
                "name" => "Murici",
                "cep" => [ 57820000, 57829999 ],
                "ibge" => 2705507
            ]),
            "2705606" => new Map([
                "name" => "Novo Lino",
                "cep" => [ 57970000, 57974999 ],
                "ibge" => 2705606
            ]),
            "2705705" => new Map([
                "name" => "Olho D'Água das Flores",
                "cep" => [ 57442000, 57444999 ],
                "ibge" => 2705705
            ]),
            "2705804" => new Map([
                "name" => "Olho D'Água do Casado",
                "cep" => [ 57470000, 57474999 ],
                "ibge" => 2705804
            ]),
            "2705903" => new Map([
                "name" => "Olho D'Água Grande",
                "cep" => [ 57390000, 57399999 ],
                "ibge" => 2705903
            ]),
            "2706000" => new Map([
                "name" => "Olivença",
                "cep" => [ 57550000, 57559999 ],
                "ibge" => 2706000
            ]),
            "2706109" => new Map([
                "name" => "Ouro Branco",
                "cep" => [ 57525000, 57529999 ],
                "ibge" => 2706109
            ]),
            "2706208" => new Map([
                "name" => "Palestina",
                "cep" => [ 57410000, 57419999 ],
                "ibge" => 2706208
            ]),
            "2706307" => new Map([
                "name" => "Palmeira dos Índios",
                "cep" => [ 57600001, 57614999 ],
                "ibge" => 2706307
            ]),
            "2706406" => new Map([
                "name" => "Pão de Açúcar",
                "cep" => [ 57400000, 57409999 ],
                "ibge" => 2706406
            ]),
            "2706422" => new Map([
                "name" => "Pariconha",
                "cep" => [ 57475000, 57479999 ],
                "ibge" => 2706422
            ]),
            "2706448" => new Map([
                "name" => "Paripueira",
                "cep" => [ 57935000, 57939999 ],
                "ibge" => 2706448
            ]),
            "2706505" => new Map([
                "name" => "Passo de Camaragibe",
                "cep" => [ 57930000, 57934999 ],
                "ibge" => 2706505
            ]),
            "2706604" => new Map([
                "name" => "Paulo Jacinto",
                "cep" => [ 57740000, 57749999 ],
                "ibge" => 2706604
            ]),
            "2706703" => new Map([
                "name" => "Penedo",
                "cep" => [ 57200000, 57209999 ],
                "ibge" => 2706703
            ]),
            "2706802" => new Map([
                "name" => "Piaçabuçu",
                "cep" => [ 57210000, 57219999 ],
                "ibge" => 2706802
            ]),
            "2706901" => new Map([
                "name" => "Pilar",
                "cep" => [ 57150000, 57159999 ],
                "ibge" => 2706901
            ]),
            "2707008" => new Map([
                "name" => "Pindoba",
                "cep" => [ 57720000, 57729999 ],
                "ibge" => 2707008
            ]),
            "2707107" => new Map([
                "name" => "Piranhas",
                "cep" => [ 57460000, 57469999 ],
                "ibge" => 2707107
            ]),
            "2707206" => new Map([
                "name" => "Poço das Trincheiras",
                "cep" => [ 57510000, 57514999 ],
                "ibge" => 2707206
            ]),
            "2707305" => new Map([
                "name" => "Porto Calvo",
                "cep" => [ 57900000, 57909999 ],
                "ibge" => 2707305
            ]),
            "2707404" => new Map([
                "name" => "Porto de Pedras",
                "cep" => [ 57945000, 57949999 ],
                "ibge" => 2707404
            ]),
            "2707503" => new Map([
                "name" => "Porto Real do Colégio",
                "cep" => [ 57290000, 57299999 ],
                "ibge" => 2707503
            ]),
            "2707602" => new Map([
                "name" => "Quebrangulo",
                "cep" => [ 57750000, 57759999 ],
                "ibge" => 2707602
            ]),
            "2707701" => new Map([
                "name" => "Rio Largo",
                "cep" => [ 57100000, 57119999 ],
                "ibge" => 2707701
            ]),
            "2707800" => new Map([
                "name" => "Roteiro",
                "cep" => [ 57257000, 57259999 ],
                "ibge" => 2707800
            ]),
            "2707909" => new Map([
                "name" => "Santa Luzia do Norte",
                "cep" => [ 57130000, 57139999 ],
                "ibge" => 2707909
            ]),
            "2708006" => new Map([
                "name" => "Santana do Ipanema",
                "cep" => [ 57500000, 57509999 ],
                "ibge" => 2708006
            ]),
            "2708105" => new Map([
                "name" => "Santana do Mundaú",
                "cep" => [ 57840000, 57859999 ],
                "ibge" => 2708105
            ]),
            "2708204" => new Map([
                "name" => "São Brás",
                "cep" => [ 57380000, 57389999 ],
                "ibge" => 2708204
            ]),
            "2708303" => new Map([
                "name" => "São José da Laje",
                "cep" => [ 57860000, 57889999 ],
                "ibge" => 2708303
            ]),
            "2708402" => new Map([
                "name" => "São José da Tapera",
                "cep" => [ 57445000, 57459999 ],
                "ibge" => 2708402
            ]),
            "2708501" => new Map([
                "name" => "São Luís do Quitunde",
                "cep" => [ 57920000, 57924999 ],
                "ibge" => 2708501
            ]),
            "2708600" => new Map([
                "name" => "São Miguel dos Campos",
                "cep" => [ 57240001, 57249999 ],
                "ibge" => 2708600
            ]),
            "2708709" => new Map([
                "name" => "São Miguel dos Milagres",
                "cep" => [ 57940000, 57944999 ],
                "ibge" => 2708709
            ]),
            "2708808" => new Map([
                "name" => "São Sebastião",
                "cep" => [ 57275000, 57279999 ],
                "ibge" => 2708808
            ]),
            "2708907" => new Map([
                "name" => "Satuba",
                "cep" => [ 57120000, 57129999 ],
                "ibge" => 2708907
            ]),
            "2708956" => new Map([
                "name" => "Senador Rui Palmeira",
                "cep" => [ 57515000, 57519999 ],
                "ibge" => 2708956
            ]),
            "2709004" => new Map([
                "name" => "Tanque D'Arca",
                "cep" => [ 57635000, 57639999 ],
                "ibge" => 2709004
            ]),
            "2709103" => new Map([
                "name" => "Taquarana",
                "cep" => [ 57640000, 57659999 ],
                "ibge" => 2709103
            ]),
            "2709152" => new Map([
                "name" => "Teotônio Vilela",
                "cep" => [ 57265001, 57269999 ],
                "ibge" => 2709152
            ]),
            "2709202" => new Map([
                "name" => "Traipu",
                "cep" => [ 57370000, 57379999 ],
                "ibge" => 2709202
            ]),
            "2709301" => new Map([
                "name" => "União dos Palmares",
                "cep" => [ 57800000, 57819999 ],
                "ibge" => 2709301
            ]),
            "2709400" => new Map([
                "name" => "Viçosa",
                "cep" => [ 57700000, 57719999 ],
                "ibge" => 2709400
            ])
        ]);

        return $map;
    }
}