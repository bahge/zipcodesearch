<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class PR implements ICitiesInfo
{
    public static int $numberCities = 399;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(PR::$numberCities);
        $map->putAll([
            "4100103" => new Map([
                "name" => "Abatiá",
                "zipCode" => [ 86460000, 86464999 ],
                "ibge" => 4100103
            ]),
            "4100202" => new Map([
                "name" => "Adrianópolis",
                "zipCode" => [ 83490000, 83499999 ],
                "ibge" => 4100202
            ]),
            "4100301" => new Map([
                "name" => "Agudos do Sul",
                "zipCode" => [ 83850000, 83859999 ],
                "ibge" => 4100301
            ]),
            "4100400" => new Map([
                "name" => "Almirante Tamandaré",
                "zipCode" => [ 83500001, 83534999 ],
                "ibge" => 4100400
            ]),
            "4100459" => new Map([
                "name" => "Altamira do Paraná",
                "zipCode" => [ 85280000, 85299999 ],
                "ibge" => 4100459
            ]),
            "4128625" => new Map([
                "name" => "Alto Paraíso",
                "zipCode" => [ 87528000, 87529999 ],
                "ibge" => 4128625
            ]),
            "4100608" => new Map([
                "name" => "Alto Paraná",
                "zipCode" => [ 87750000, 87759999 ],
                "ibge" => 4100608
            ]),
            "4100707" => new Map([
                "name" => "Alto Piquiri",
                "zipCode" => [ 87580000, 87594999 ],
                "ibge" => 4100707
            ]),
            "4100509" => new Map([
                "name" => "Altônia",
                "zipCode" => [ 87550000, 87554999 ],
                "ibge" => 4100509
            ]),
            "4100806" => new Map([
                "name" => "Alvorada do Sul",
                "zipCode" => [ 86150000, 86159999 ],
                "ibge" => 4100806
            ]),
            "4100905" => new Map([
                "name" => "Amaporã",
                "zipCode" => [ 87850000, 87859999 ],
                "ibge" => 4100905
            ]),
            "4101002" => new Map([
                "name" => "Ampére",
                "zipCode" => [ 85640000, 85649999 ],
                "ibge" => 4101002
            ]),
            "4101051" => new Map([
                "name" => "Anahy",
                "zipCode" => [ 85425000, 85429999 ],
                "ibge" => 4101051
            ]),
            "4101101" => new Map([
                "name" => "Andirá",
                "zipCode" => [ 86380000, 86384999 ],
                "ibge" => 4101101
            ]),
            "4101150" => new Map([
                "name" => "Ângulo",
                "zipCode" => [ 86755000, 86759999 ],
                "ibge" => 4101150
            ]),
            "4101200" => new Map([
                "name" => "Antonina",
                "zipCode" => [ 83370000, 83389999 ],
                "ibge" => 4101200
            ]),
            "4101309" => new Map([
                "name" => "Antônio Olinto",
                "zipCode" => [ 83980000, 83999999 ],
                "ibge" => 4101309
            ]),
            "4101408" => new Map([
                "name" => "Apucarana",
                "zipCode" => [ 86800001, 86819999 ],
                "ibge" => 4101408
            ]),
            "4101507" => new Map([
                "name" => "Arapongas",
                "zipCode" => [ 86700001, 86719999 ],
                "ibge" => 4101507
            ]),
            "4101606" => new Map([
                "name" => "Arapoti",
                "zipCode" => [ 84990000, 84999999 ],
                "ibge" => 4101606
            ]),
            "4101655" => new Map([
                "name" => "Arapuã",
                "zipCode" => [ 86884000, 86889999 ],
                "ibge" => 4101655
            ]),
            "4101705" => new Map([
                "name" => "Araruna",
                "zipCode" => [ 87260000, 87264999 ],
                "ibge" => 4101705
            ]),
            "4101804" => new Map([
                "name" => "Araucária",
                "zipCode" => [ 83700001, 83729999 ],
                "ibge" => 4101804
            ]),
            "4101853" => new Map([
                "name" => "Ariranha do Ivaí",
                "zipCode" => [ 86880000, 86883999 ],
                "ibge" => 4101853
            ]),
            "4101903" => new Map([
                "name" => "Assaí",
                "zipCode" => [ 86220000, 86224999 ],
                "ibge" => 4101903
            ]),
            "4102000" => new Map([
                "name" => "Assis Chateaubriand",
                "zipCode" => [ 85935000, 85939999 ],
                "ibge" => 4102000
            ]),
            "4102109" => new Map([
                "name" => "Astorga",
                "zipCode" => [ 86730000, 86749999 ],
                "ibge" => 4102109
            ]),
            "4102208" => new Map([
                "name" => "Atalaia",
                "zipCode" => [ 87630000, 87639999 ],
                "ibge" => 4102208
            ]),
            "4102307" => new Map([
                "name" => "Balsa Nova",
                "zipCode" => [ 83650000, 83699999 ],
                "ibge" => 4102307
            ]),
            "4102406" => new Map([
                "name" => "Bandeirantes",
                "zipCode" => [ 86360000, 86369999 ],
                "ibge" => 4102406
            ]),
            "4102505" => new Map([
                "name" => "Barbosa Ferraz",
                "zipCode" => [ 86960000, 86969999 ],
                "ibge" => 4102505
            ]),
            "4102703" => new Map([
                "name" => "Barra do Jacaré",
                "zipCode" => [ 86385000, 86389999 ],
                "ibge" => 4102703
            ]),
            "4102604" => new Map([
                "name" => "Barracão",
                "zipCode" => [ 85700000, 85707999 ],
                "ibge" => 4102604
            ]),
            "4102752" => new Map([
                "name" => "Bela Vista da Caroba",
                "zipCode" => [ 85745000, 85749999 ],
                "ibge" => 4102752
            ]),
            "4102802" => new Map([
                "name" => "Bela Vista do Paraíso",
                "zipCode" => [ 86130000, 86139999 ],
                "ibge" => 4102802
            ]),
            "4102901" => new Map([
                "name" => "Bituruna",
                "zipCode" => [ 84640000, 84659999 ],
                "ibge" => 4102901
            ]),
            "4103008" => new Map([
                "name" => "Boa Esperança",
                "zipCode" => [ 87390000, 87394999 ],
                "ibge" => 4103008
            ]),
            "4103024" => new Map([
                "name" => "Boa Esperança do Iguaçu",
                "zipCode" => [ 85680000, 85684999 ],
                "ibge" => 4103024
            ]),
            "4103040" => new Map([
                "name" => "Boa Ventura de São Roque",
                "zipCode" => [ 85225000, 85229999 ],
                "ibge" => 4103040
            ]),
            "4103057" => new Map([
                "name" => "Boa Vista da Aparecida",
                "zipCode" => [ 85780000, 85789999 ],
                "ibge" => 4103057
            ]),
            "4103107" => new Map([
                "name" => "Bocaiúva do Sul",
                "zipCode" => [ 83450000, 83479999 ],
                "ibge" => 4103107
            ]),
            "4103156" => new Map([
                "name" => "Bom Jesus do Sul",
                "zipCode" => [ 85708000, 85709999 ],
                "ibge" => 4103156
            ]),
            "4103206" => new Map([
                "name" => "Bom Sucesso",
                "zipCode" => [ 86940000, 86944999 ],
                "ibge" => 4103206
            ]),
            "4103222" => new Map([
                "name" => "Bom Sucesso do Sul",
                "zipCode" => [ 85515000, 85519999 ],
                "ibge" => 4103222
            ]),
            "4103305" => new Map([
                "name" => "Borrazópolis",
                "zipCode" => [ 86925000, 86929999 ],
                "ibge" => 4103305
            ]),
            "4103354" => new Map([
                "name" => "Braganey",
                "zipCode" => [ 85430000, 85439999 ],
                "ibge" => 4103354
            ]),
            "4103370" => new Map([
                "name" => "Brasilândia do Sul",
                "zipCode" => [ 87595000, 87599999 ],
                "ibge" => 4103370
            ]),
            "4103404" => new Map([
                "name" => "Cafeara",
                "zipCode" => [ 86640000, 86649999 ],
                "ibge" => 4103404
            ]),
            "4103453" => new Map([
                "name" => "Cafelândia",
                "zipCode" => [ 85415000, 85419999 ],
                "ibge" => 4103453
            ]),
            "4103479" => new Map([
                "name" => "Cafezal do Sul",
                "zipCode" => [ 87565000, 87569999 ],
                "ibge" => 4103479
            ]),
            "4103503" => new Map([
                "name" => "Califórnia",
                "zipCode" => [ 86820000, 86824999 ],
                "ibge" => 4103503
            ]),
            "4103602" => new Map([
                "name" => "Cambará",
                "zipCode" => [ 86390000, 86399999 ],
                "ibge" => 4103602
            ]),
            "4103701" => new Map([
                "name" => "Cambé",
                "zipCode" => [ 86180001, 86199999 ],
                "ibge" => 4103701
            ]),
            "4103800" => new Map([
                "name" => "Cambira",
                "zipCode" => [ 86890000, 86894999 ],
                "ibge" => 4103800
            ]),
            "4103909" => new Map([
                "name" => "Campina da Lagoa",
                "zipCode" => [ 87345000, 87354999 ],
                "ibge" => 4103909
            ]),
            "4103958" => new Map([
                "name" => "Campina do Simão",
                "zipCode" => [ 85148000, 85149999 ],
                "ibge" => 4103958
            ]),
            "4104006" => new Map([
                "name" => "Campina Grande do Sul",
                "zipCode" => [ 83430000, 83449999 ],
                "ibge" => 4104006
            ]),
            "4104055" => new Map([
                "name" => "Campo Bonito",
                "zipCode" => [ 85450000, 85459999 ],
                "ibge" => 4104055
            ]),
            "4104105" => new Map([
                "name" => "Campo do Tenente",
                "zipCode" => [ 83870000, 83879999 ],
                "ibge" => 4104105
            ]),
            "4104204" => new Map([
                "name" => "Campo Largo",
                "zipCode" => [ 83600001, 83649999 ],
                "ibge" => 4104204
            ]),
            "4104253" => new Map([
                "name" => "Campo Magro",
                "zipCode" => [ 83535000, 83539999 ],
                "ibge" => 4104253
            ]),
            "4104303" => new Map([
                "name" => "Campo Mourão",
                "zipCode" => [ 87300001, 87319999 ],
                "ibge" => 4104303
            ]),
            "4104402" => new Map([
                "name" => "Cândido de Abreu",
                "zipCode" => [ 84470000, 84499999 ],
                "ibge" => 4104402
            ]),
            "4104428" => new Map([
                "name" => "Candói",
                "zipCode" => [ 85140000, 85144999 ],
                "ibge" => 4104428
            ]),
            "4104451" => new Map([
                "name" => "Cantagalo",
                "zipCode" => [ 85160000, 85161999 ],
                "ibge" => 4104451
            ]),
            "4104501" => new Map([
                "name" => "Capanema",
                "zipCode" => [ 85760000, 85769999 ],
                "ibge" => 4104501
            ]),
            "4104600" => new Map([
                "name" => "Capitão Leônidas Marques",
                "zipCode" => [ 85790000, 85794999 ],
                "ibge" => 4104600
            ]),
            "4104659" => new Map([
                "name" => "Carambeí",
                "zipCode" => [ 84145000, 84149999 ],
                "ibge" => 4104659
            ]),
            "4104709" => new Map([
                "name" => "Carlópolis",
                "zipCode" => [ 86420000, 86429999 ],
                "ibge" => 4104709
            ]),
            "4104808" => new Map([
                "name" => "Cascavel",
                "zipCode" => [ 85800001, 85824999 ],
                "ibge" => 4104808
            ]),
            "4104907" => new Map([
                "name" => "Castro",
                "zipCode" => [ 84160001, 84199999 ],
                "ibge" => 4104907
            ]),
            "4105003" => new Map([
                "name" => "Catanduvas",
                "zipCode" => [ 85470000, 85477999 ],
                "ibge" => 4105003
            ]),
            "4105102" => new Map([
                "name" => "Centenário do Sul",
                "zipCode" => [ 86630000, 86634999 ],
                "ibge" => 4105102
            ]),
            "4105201" => new Map([
                "name" => "Cerro Azul",
                "zipCode" => [ 83570000, 83589999 ],
                "ibge" => 4105201
            ]),
            "4105300" => new Map([
                "name" => "Céu Azul",
                "zipCode" => [ 85840000, 85844999 ],
                "ibge" => 4105300
            ]),
            "4105409" => new Map([
                "name" => "Chopinzinho",
                "zipCode" => [ 85560000, 85564999 ],
                "ibge" => 4105409
            ]),
            "4105508" => new Map([
                "name" => "Cianorte",
                "zipCode" => [ 87200001, 87214999 ],
                "ibge" => 4105508
            ]),
            "4105607" => new Map([
                "name" => "Cidade Gaúcha",
                "zipCode" => [ 87820000, 87829999 ],
                "ibge" => 4105607
            ]),
            "4105706" => new Map([
                "name" => "Clevelândia",
                "zipCode" => [ 85530000, 85539999 ],
                "ibge" => 4105706
            ]),
            "4105805" => new Map([
                "name" => "Colombo",
                "zipCode" => [ 83400001, 83419999 ],
                "ibge" => 4105805
            ]),
            "4105904" => new Map([
                "name" => "Colorado",
                "zipCode" => [ 86690000, 86699999 ],
                "ibge" => 4105904
            ]),
            "4106001" => new Map([
                "name" => "Congonhinhas",
                "zipCode" => [ 86320000, 86329999 ],
                "ibge" => 4106001
            ]),
            "4106100" => new Map([
                "name" => "Conselheiro Mairinck",
                "zipCode" => [ 86480000, 86489999 ],
                "ibge" => 4106100
            ]),
            "4106209" => new Map([
                "name" => "Contenda",
                "zipCode" => [ 83730000, 83749999 ],
                "ibge" => 4106209
            ]),
            "4106308" => new Map([
                "name" => "Corbélia",
                "zipCode" => [ 85420000, 85422999 ],
                "ibge" => 4106308
            ]),
            "4106407" => new Map([
                "name" => "Cornélio Procópio",
                "zipCode" => [ 86300000, 86309999 ],
                "ibge" => 4106407
            ]),
            "4106456" => new Map([
                "name" => "Coronel Domingos Soares",
                "zipCode" => [ 85557000, 85559999 ],
                "ibge" => 4106456
            ]),
            "4106506" => new Map([
                "name" => "Coronel Vivida",
                "zipCode" => [ 85550000, 85554999 ],
                "ibge" => 4106506
            ]),
            "4106555" => new Map([
                "name" => "Corumbataí do Sul",
                "zipCode" => [ 86970000, 86974999 ],
                "ibge" => 4106555
            ]),
            "4106803" => new Map([
                "name" => "Cruz Machado",
                "zipCode" => [ 84620000, 84629999 ],
                "ibge" => 4106803
            ]),
            "4106571" => new Map([
                "name" => "Cruzeiro do Iguaçu",
                "zipCode" => [ 85598000, 85599999 ],
                "ibge" => 4106571
            ]),
            "4106605" => new Map([
                "name" => "Cruzeiro do Oeste",
                "zipCode" => [ 87400000, 87429999 ],
                "ibge" => 4106605
            ]),
            "4106704" => new Map([
                "name" => "Cruzeiro do Sul",
                "zipCode" => [ 87650000, 87659999 ],
                "ibge" => 4106704
            ]),
            "4106852" => new Map([
                "name" => "Cruzmaltina",
                "zipCode" => [ 86855000, 86859999 ],
                "ibge" => 4106852
            ]),
            "4106902" => new Map([
                "name" => "Curitiba",
                "zipCode" => [ 80000001, 82999999 ],
                "ibge" => 4106902
            ]),
            "4107009" => new Map([
                "name" => "Curiúva",
                "zipCode" => [ 84280000, 84284999 ],
                "ibge" => 4107009
            ]),
            "4107108" => new Map([
                "name" => "Diamante do Norte",
                "zipCode" => [ 87990000, 87999999 ],
                "ibge" => 4107108
            ]),
            "4107124" => new Map([
                "name" => "Diamante do Sul",
                "zipCode" => [ 85408000, 85409999 ],
                "ibge" => 4107124
            ]),
            "4107157" => new Map([
                "name" => "Diamante D'Oeste",
                "zipCode" => [ 85896000, 85897999 ],
                "ibge" => 4107157
            ]),
            "4107207" => new Map([
                "name" => "Dois Vizinhos",
                "zipCode" => [ 85660000, 85669999 ],
                "ibge" => 4107207
            ]),
            "4107256" => new Map([
                "name" => "Douradina",
                "zipCode" => [ 87485000, 87489999 ],
                "ibge" => 4107256
            ]),
            "4107306" => new Map([
                "name" => "Doutor Camargo",
                "zipCode" => [ 87155000, 87159999 ],
                "ibge" => 4107306
            ]),
            "4128633" => new Map([
                "name" => "Doutor Ulysses",
                "zipCode" => [ 83590000, 83599999 ],
                "ibge" => 4128633
            ]),
            "4107405" => new Map([
                "name" => "Enéas Marques",
                "zipCode" => [ 85630000, 85634999 ],
                "ibge" => 4107405
            ]),
            "4107504" => new Map([
                "name" => "Engenheiro Beltrão",
                "zipCode" => [ 87270000, 87279999 ],
                "ibge" => 4107504
            ]),
            "4107538" => new Map([
                "name" => "Entre Rios do Oeste",
                "zipCode" => [ 85988000, 85989999 ],
                "ibge" => 4107538
            ]),
            "4107520" => new Map([
                "name" => "Esperança Nova",
                "zipCode" => [ 87545000, 87549999 ],
                "ibge" => 4107520
            ]),
            "4107546" => new Map([
                "name" => "Espigão Alto do Iguaçu",
                "zipCode" => [ 85465000, 85469999 ],
                "ibge" => 4107546
            ]),
            "4107553" => new Map([
                "name" => "Farol",
                "zipCode" => [ 87325000, 87329999 ],
                "ibge" => 4107553
            ]),
            "4107603" => new Map([
                "name" => "Faxinal",
                "zipCode" => [ 86840000, 86844999 ],
                "ibge" => 4107603
            ]),
            "4107652" => new Map([
                "name" => "Fazenda Rio Grande",
                "zipCode" => [ 83820001, 83839999 ],
                "ibge" => 4107652
            ]),
            "4107702" => new Map([
                "name" => "Fênix",
                "zipCode" => [ 86950000, 86959999 ],
                "ibge" => 4107702
            ]),
            "4107736" => new Map([
                "name" => "Fernandes Pinheiro",
                "zipCode" => [ 84535000, 84549999 ],
                "ibge" => 4107736
            ]),
            "4107751" => new Map([
                "name" => "Figueira",
                "zipCode" => [ 84285000, 84289999 ],
                "ibge" => 4107751
            ]),
            "4107850" => new Map([
                "name" => "Flor da Serra do Sul",
                "zipCode" => [ 85618000, 85619999 ],
                "ibge" => 4107850
            ]),
            "4107801" => new Map([
                "name" => "Floraí",
                "zipCode" => [ 87185000, 87189999 ],
                "ibge" => 4107801
            ]),
            "4107900" => new Map([
                "name" => "Floresta",
                "zipCode" => [ 87120000, 87129999 ],
                "ibge" => 4107900
            ]),
            "4108007" => new Map([
                "name" => "Florestópolis",
                "zipCode" => [ 86165000, 86169999 ],
                "ibge" => 4108007
            ]),
            "4108106" => new Map([
                "name" => "Flórida",
                "zipCode" => [ 86780000, 86789999 ],
                "ibge" => 4108106
            ]),
            "4108205" => new Map([
                "name" => "Formosa do Oeste",
                "zipCode" => [ 85830000, 85832999 ],
                "ibge" => 4108205
            ]),
            "4108304" => new Map([
                "name" => "Foz do Iguaçu",
                "zipCode" => [ 85850001, 85874999 ],
                "ibge" => 4108304
            ]),
            "4108452" => new Map([
                "name" => "Foz do Jordão",
                "zipCode" => [ 85145000, 85147999 ],
                "ibge" => 4108452
            ]),
            "4108320" => new Map([
                "name" => "Francisco Alves",
                "zipCode" => [ 87570000, 87579999 ],
                "ibge" => 4108320
            ]),
            "4108403" => new Map([
                "name" => "Francisco Beltrão",
                "zipCode" => [ 85600001, 85609999 ],
                "ibge" => 4108403
            ]),
            "4108502" => new Map([
                "name" => "General Carneiro",
                "zipCode" => [ 84660000, 84899999 ],
                "ibge" => 4108502
            ]),
            "4108551" => new Map([
                "name" => "Godoy Moreira",
                "zipCode" => [ 86938000, 86939999 ],
                "ibge" => 4108551
            ]),
            "4108601" => new Map([
                "name" => "Goioerê",
                "zipCode" => [ 87360000, 87364999 ],
                "ibge" => 4108601
            ]),
            "4108650" => new Map([
                "name" => "Goioxim",
                "zipCode" => [ 85162000, 85167999 ],
                "ibge" => 4108650
            ]),
            "4108700" => new Map([
                "name" => "Grandes Rios",
                "zipCode" => [ 86845000, 86847999 ],
                "ibge" => 4108700
            ]),
            "4108809" => new Map([
                "name" => "Guaíra",
                "zipCode" => [ 85980000, 85987999 ],
                "ibge" => 4108809
            ]),
            "4108908" => new Map([
                "name" => "Guairaçá",
                "zipCode" => [ 87880000, 87889999 ],
                "ibge" => 4108908
            ]),
            "4108957" => new Map([
                "name" => "Guamiranga",
                "zipCode" => [ 84435000, 84449999 ],
                "ibge" => 4108957
            ]),
            "4109005" => new Map([
                "name" => "Guapirama",
                "zipCode" => [ 86465000, 86469999 ],
                "ibge" => 4109005
            ]),
            "4109104" => new Map([
                "name" => "Guaporema",
                "zipCode" => [ 87810000, 87819999 ],
                "ibge" => 4109104
            ]),
            "4109203" => new Map([
                "name" => "Guaraci",
                "zipCode" => [ 86620000, 86629999 ],
                "ibge" => 4109203
            ]),
            "4109302" => new Map([
                "name" => "Guaraniaçu",
                "zipCode" => [ 85400000, 85407999 ],
                "ibge" => 4109302
            ]),
            "4109401" => new Map([
                "name" => "Guarapuava",
                "zipCode" => [ 85000001, 85139999 ],
                "ibge" => 4109401
            ]),
            "4109500" => new Map([
                "name" => "Guaraqueçaba",
                "zipCode" => [ 83390000, 83399999 ],
                "ibge" => 4109500
            ]),
            "4109609" => new Map([
                "name" => "Guaratuba",
                "zipCode" => [ 83280000, 83299999 ],
                "ibge" => 4109609
            ]),
            "4109658" => new Map([
                "name" => "Honório Serpa",
                "zipCode" => [ 85548000, 85549999 ],
                "ibge" => 4109658
            ]),
            "4109708" => new Map([
                "name" => "Ibaiti",
                "zipCode" => [ 84900000, 84919999 ],
                "ibge" => 4109708
            ]),
            "4109757" => new Map([
                "name" => "Ibema",
                "zipCode" => [ 85478000, 85484999 ],
                "ibge" => 4109757
            ]),
            "4109807" => new Map([
                "name" => "Ibiporã",
                "zipCode" => [ 86200000, 86209999 ],
                "ibge" => 4109807
            ]),
            "4109906" => new Map([
                "name" => "Icaraíma",
                "zipCode" => [ 87530000, 87534999 ],
                "ibge" => 4109906
            ]),
            "4110003" => new Map([
                "name" => "Iguaraçu",
                "zipCode" => [ 86750000, 86754999 ],
                "ibge" => 4110003
            ]),
            "4110052" => new Map([
                "name" => "Iguatu",
                "zipCode" => [ 85423000, 85424999 ],
                "ibge" => 4110052
            ]),
            "4110078" => new Map([
                "name" => "Imbaú",
                "zipCode" => [ 84250000, 84259999 ],
                "ibge" => 4110078
            ]),
            "4110102" => new Map([
                "name" => "Imbituva",
                "zipCode" => [ 84430000, 84434999 ],
                "ibge" => 4110102
            ]),
            "4110201" => new Map([
                "name" => "Inácio Martins",
                "zipCode" => [ 85155000, 85159999 ],
                "ibge" => 4110201
            ]),
            "4110300" => new Map([
                "name" => "Inajá",
                "zipCode" => [ 87670000, 87679999 ],
                "ibge" => 4110300
            ]),
            "4110409" => new Map([
                "name" => "Indianópolis",
                "zipCode" => [ 87235000, 87239999 ],
                "ibge" => 4110409
            ]),
            "4110508" => new Map([
                "name" => "Ipiranga",
                "zipCode" => [ 84450000, 84459999 ],
                "ibge" => 4110508
            ]),
            "4110607" => new Map([
                "name" => "Iporã",
                "zipCode" => [ 87560000, 87564999 ],
                "ibge" => 4110607
            ]),
            "4110656" => new Map([
                "name" => "Iracema do Oeste",
                "zipCode" => [ 85833000, 85834999 ],
                "ibge" => 4110656
            ]),
            "4110706" => new Map([
                "name" => "Irati",
                "zipCode" => [ 84500001, 84509999 ],
                "ibge" => 4110706
            ]),
            "4110805" => new Map([
                "name" => "Iretama",
                "zipCode" => [ 87280000, 87289999 ],
                "ibge" => 4110805
            ]),
            "4110904" => new Map([
                "name" => "Itaguajé",
                "zipCode" => [ 86670000, 86679999 ],
                "ibge" => 4110904
            ]),
            "4110953" => new Map([
                "name" => "Itaipulândia",
                "zipCode" => [ 85880000, 85883999 ],
                "ibge" => 4110953
            ]),
            "4111001" => new Map([
                "name" => "Itambaracá",
                "zipCode" => [ 86375000, 86379999 ],
                "ibge" => 4111001
            ]),
            "4111100" => new Map([
                "name" => "Itambé",
                "zipCode" => [ 87175000, 87179999 ],
                "ibge" => 4111100
            ]),
            "4111209" => new Map([
                "name" => "Itapejara D'Oeste",
                "zipCode" => [ 85580000, 85584999 ],
                "ibge" => 4111209
            ]),
            "4111258" => new Map([
                "name" => "Itaperuçu",
                "zipCode" => [ 83560000, 83569999 ],
                "ibge" => 4111258
            ]),
            "4111308" => new Map([
                "name" => "Itaúna do Sul",
                "zipCode" => [ 87980000, 87989999 ],
                "ibge" => 4111308
            ]),
            "4111407" => new Map([
                "name" => "Ivaí",
                "zipCode" => [ 84460000, 84469999 ],
                "ibge" => 4111407
            ]),
            "4111506" => new Map([
                "name" => "Ivaiporã",
                "zipCode" => [ 86870000, 86879999 ],
                "ibge" => 4111506
            ]),
            "4111555" => new Map([
                "name" => "Ivaté",
                "zipCode" => [ 87525000, 87527999 ],
                "ibge" => 4111555
            ]),
            "4111605" => new Map([
                "name" => "Ivatuba",
                "zipCode" => [ 87130000, 87139999 ],
                "ibge" => 4111605
            ]),
            "4111704" => new Map([
                "name" => "Jaboti",
                "zipCode" => [ 84930000, 84934999 ],
                "ibge" => 4111704
            ]),
            "4111803" => new Map([
                "name" => "Jacarezinho",
                "zipCode" => [ 86400000, 86409999 ],
                "ibge" => 4111803
            ]),
            "4111902" => new Map([
                "name" => "Jaguapitã",
                "zipCode" => [ 86610000, 86612999 ],
                "ibge" => 4111902
            ]),
            "4112009" => new Map([
                "name" => "Jaguariaíva",
                "zipCode" => [ 84200000, 84219999 ],
                "ibge" => 4112009
            ]),
            "4112108" => new Map([
                "name" => "Jandaia do Sul",
                "zipCode" => [ 86900000, 86909999 ],
                "ibge" => 4112108
            ]),
            "4112207" => new Map([
                "name" => "Janiópolis",
                "zipCode" => [ 87380000, 87389999 ],
                "ibge" => 4112207
            ]),
            "4112306" => new Map([
                "name" => "Japira",
                "zipCode" => [ 84920000, 84924999 ],
                "ibge" => 4112306
            ]),
            "4112405" => new Map([
                "name" => "Japurá",
                "zipCode" => [ 87225000, 87229999 ],
                "ibge" => 4112405
            ]),
            "4112504" => new Map([
                "name" => "Jardim Alegre",
                "zipCode" => [ 86860000, 86864999 ],
                "ibge" => 4112504
            ]),
            "4112603" => new Map([
                "name" => "Jardim Olinda",
                "zipCode" => [ 87690000, 87699999 ],
                "ibge" => 4112603
            ]),
            "4112702" => new Map([
                "name" => "Jataizinho",
                "zipCode" => [ 86210000, 86219999 ],
                "ibge" => 4112702
            ]),
            "4112751" => new Map([
                "name" => "Jesuítas",
                "zipCode" => [ 85835000, 85839999 ],
                "ibge" => 4112751
            ]),
            "4112801" => new Map([
                "name" => "Joaquim Távora",
                "zipCode" => [ 86455000, 86459999 ],
                "ibge" => 4112801
            ]),
            "4112900" => new Map([
                "name" => "Jundiaí do Sul",
                "zipCode" => [ 86470000, 86479999 ],
                "ibge" => 4112900
            ]),
            "4112959" => new Map([
                "name" => "Juranda",
                "zipCode" => [ 87355000, 87359999 ],
                "ibge" => 4112959
            ]),
            "4113007" => new Map([
                "name" => "Jussara",
                "zipCode" => [ 87230000, 87234999 ],
                "ibge" => 4113007
            ]),
            "4113106" => new Map([
                "name" => "Kaloré",
                "zipCode" => [ 86920000, 86924999 ],
                "ibge" => 4113106
            ]),
            "4113205" => new Map([
                "name" => "Lapa",
                "zipCode" => [ 83750000, 83799999 ],
                "ibge" => 4113205
            ]),
            "4113254" => new Map([
                "name" => "Laranjal",
                "zipCode" => [ 85275000, 85279999 ],
                "ibge" => 4113254
            ]),
            "4113304" => new Map([
                "name" => "Laranjeiras do Sul",
                "zipCode" => [ 85300001, 85339999 ],
                "ibge" => 4113304
            ]),
            "4113403" => new Map([
                "name" => "Leópolis",
                "zipCode" => [ 86330000, 86339999 ],
                "ibge" => 4113403
            ]),
            "4113429" => new Map([
                "name" => "Lidianópolis",
                "zipCode" => [ 86865000, 86869999 ],
                "ibge" => 4113429
            ]),
            "4113452" => new Map([
                "name" => "Lindoeste",
                "zipCode" => [ 85826000, 85829999 ],
                "ibge" => 4113452
            ]),
            "4113502" => new Map([
                "name" => "Loanda",
                "zipCode" => [ 87900000, 87909999 ],
                "ibge" => 4113502
            ]),
            "4113601" => new Map([
                "name" => "Lobato",
                "zipCode" => [ 86790000, 86799999 ],
                "ibge" => 4113601
            ]),
            "4113700" => new Map([
                "name" => "Londrina",
                "zipCode" => [ 86000001, 86124999 ],
                "ibge" => 4113700
            ]),
            "4113734" => new Map([
                "name" => "Luiziana",
                "zipCode" => [ 87290000, 87299999 ],
                "ibge" => 4113734
            ]),
            "4113759" => new Map([
                "name" => "Lunardelli",
                "zipCode" => [ 86935000, 86937999 ],
                "ibge" => 4113759
            ]),
            "4113809" => new Map([
                "name" => "Lupionópolis",
                "zipCode" => [ 86635000, 86639999 ],
                "ibge" => 4113809
            ]),
            "4113908" => new Map([
                "name" => "Mallet",
                "zipCode" => [ 84570000, 84599999 ],
                "ibge" => 4113908
            ]),
            "4114005" => new Map([
                "name" => "Mamborê",
                "zipCode" => [ 87340000, 87344999 ],
                "ibge" => 4114005
            ]),
            "4114104" => new Map([
                "name" => "Mandaguaçu",
                "zipCode" => [ 87160000, 87169999 ],
                "ibge" => 4114104
            ]),
            "4114203" => new Map([
                "name" => "Mandaguari",
                "zipCode" => [ 86975000, 86989999 ],
                "ibge" => 4114203
            ]),
            "4114302" => new Map([
                "name" => "Mandirituba",
                "zipCode" => [ 83800000, 83819999 ],
                "ibge" => 4114302
            ]),
            "4114351" => new Map([
                "name" => "Manfrinópolis",
                "zipCode" => [ 85628000, 85629999 ],
                "ibge" => 4114351
            ]),
            "4114401" => new Map([
                "name" => "Mangueirinha",
                "zipCode" => [ 85540000, 85547999 ],
                "ibge" => 4114401
            ]),
            "4114500" => new Map([
                "name" => "Manoel Ribas",
                "zipCode" => [ 85260000, 85269999 ],
                "ibge" => 4114500
            ]),
            "4114609" => new Map([
                "name" => "Marechal Cândido Rondon",
                "zipCode" => [ 85960000, 85979999 ],
                "ibge" => 4114609
            ]),
            "4114708" => new Map([
                "name" => "Maria Helena",
                "zipCode" => [ 87480000, 87484999 ],
                "ibge" => 4114708
            ]),
            "4114807" => new Map([
                "name" => "Marialva",
                "zipCode" => [ 86990000, 86999999 ],
                "ibge" => 4114807
            ]),
            "4114906" => new Map([
                "name" => "Marilândia do Sul",
                "zipCode" => [ 86825000, 86827999 ],
                "ibge" => 4114906
            ]),
            "4115002" => new Map([
                "name" => "Marilena",
                "zipCode" => [ 87960000, 87969999 ],
                "ibge" => 4115002
            ]),
            "4115101" => new Map([
                "name" => "Mariluz",
                "zipCode" => [ 87470000, 87479999 ],
                "ibge" => 4115101
            ]),
            "4115200" => new Map([
                "name" => "Maringá",
                "zipCode" => [ 87000001, 87109999 ],
                "ibge" => 4115200
            ]),
            "4115309" => new Map([
                "name" => "Mariópolis",
                "zipCode" => [ 85525000, 85529999 ],
                "ibge" => 4115309
            ]),
            "4115358" => new Map([
                "name" => "Maripá",
                "zipCode" => [ 85955000, 85959999 ],
                "ibge" => 4115358
            ]),
            "4115408" => new Map([
                "name" => "Marmeleiro",
                "zipCode" => [ 85615000, 85617999 ],
                "ibge" => 4115408
            ]),
            "4115457" => new Map([
                "name" => "Marquinho",
                "zipCode" => [ 85168000, 85169999 ],
                "ibge" => 4115457
            ]),
            "4115507" => new Map([
                "name" => "Marumbi",
                "zipCode" => [ 86910000, 86919999 ],
                "ibge" => 4115507
            ]),
            "4115606" => new Map([
                "name" => "Matelândia",
                "zipCode" => [ 85887000, 85887999 ],
                "ibge" => 4115606
            ]),
            "4115705" => new Map([
                "name" => "Matinhos",
                "zipCode" => [ 83260000, 83279999 ],
                "ibge" => 4115705
            ]),
            "4115739" => new Map([
                "name" => "Mato Rico",
                "zipCode" => [ 85240000, 85249999 ],
                "ibge" => 4115739
            ]),
            "4115754" => new Map([
                "name" => "Mauá da Serra",
                "zipCode" => [ 86828000, 86829999 ],
                "ibge" => 4115754
            ]),
            "4115804" => new Map([
                "name" => "Medianeira",
                "zipCode" => [ 85884000, 85884999 ],
                "ibge" => 4115804
            ]),
            "4115853" => new Map([
                "name" => "Mercedes",
                "zipCode" => [ 85998000, 85999999 ],
                "ibge" => 4115853
            ]),
            "4115903" => new Map([
                "name" => "Mirador",
                "zipCode" => [ 87840000, 87849999 ],
                "ibge" => 4115903
            ]),
            "4116000" => new Map([
                "name" => "Miraselva",
                "zipCode" => [ 86615000, 86617999 ],
                "ibge" => 4116000
            ]),
            "4116059" => new Map([
                "name" => "Missal",
                "zipCode" => [ 85890000, 85891999 ],
                "ibge" => 4116059
            ]),
            "4116109" => new Map([
                "name" => "Moreira Sales",
                "zipCode" => [ 87370000, 87379999 ],
                "ibge" => 4116109
            ]),
            "4116208" => new Map([
                "name" => "Morretes",
                "zipCode" => [ 83350000, 83369999 ],
                "ibge" => 4116208
            ]),
            "4116307" => new Map([
                "name" => "Munhoz de Melo",
                "zipCode" => [ 86760000, 86769999 ],
                "ibge" => 4116307
            ]),
            "4116406" => new Map([
                "name" => "Nossa Senhora das Graças",
                "zipCode" => [ 86680000, 86689999 ],
                "ibge" => 4116406
            ]),
            "4116505" => new Map([
                "name" => "Nova Aliança do Ivaí",
                "zipCode" => [ 87790000, 87799999 ],
                "ibge" => 4116505
            ]),
            "4116604" => new Map([
                "name" => "Nova América da Colina",
                "zipCode" => [ 86230000, 86239999 ],
                "ibge" => 4116604
            ]),
            "4116703" => new Map([
                "name" => "Nova Aurora",
                "zipCode" => [ 85410000, 85414999 ],
                "ibge" => 4116703
            ]),
            "4116802" => new Map([
                "name" => "Nova Cantu",
                "zipCode" => [ 87330000, 87339999 ],
                "ibge" => 4116802
            ]),
            "4116901" => new Map([
                "name" => "Nova Esperança",
                "zipCode" => [ 87600000, 87629999 ],
                "ibge" => 4116901
            ]),
            "4116950" => new Map([
                "name" => "Nova Esperança do Sudoeste",
                "zipCode" => [ 85635000, 85639999 ],
                "ibge" => 4116950
            ]),
            "4117008" => new Map([
                "name" => "Nova Fátima",
                "zipCode" => [ 86310000, 86314999 ],
                "ibge" => 4117008
            ]),
            "4117057" => new Map([
                "name" => "Nova Laranjeiras",
                "zipCode" => [ 85350000, 85389999 ],
                "ibge" => 4117057
            ]),
            "4117107" => new Map([
                "name" => "Nova Londrina",
                "zipCode" => [ 87970000, 87979999 ],
                "ibge" => 4117107
            ]),
            "4117206" => new Map([
                "name" => "Nova Olímpia",
                "zipCode" => [ 87490000, 87499999 ],
                "ibge" => 4117206
            ]),
            "4117255" => new Map([
                "name" => "Nova Prata do Iguaçu",
                "zipCode" => [ 85685000, 85699999 ],
                "ibge" => 4117255
            ]),
            "4117214" => new Map([
                "name" => "Nova Santa Bárbara",
                "zipCode" => [ 86250000, 86269999 ],
                "ibge" => 4117214
            ]),
            "4117222" => new Map([
                "name" => "Nova Santa Rosa",
                "zipCode" => [ 85930000, 85932999 ],
                "ibge" => 4117222
            ]),
            "4117271" => new Map([
                "name" => "Nova Tebas",
                "zipCode" => [ 85250000, 85259999 ],
                "ibge" => 4117271
            ]),
            "4117297" => new Map([
                "name" => "Novo Itacolomi",
                "zipCode" => [ 86895000, 86899999 ],
                "ibge" => 4117297
            ]),
            "4117305" => new Map([
                "name" => "Ortigueira",
                "zipCode" => [ 84350000, 84399999 ],
                "ibge" => 4117305
            ]),
            "4117404" => new Map([
                "name" => "Ourizona",
                "zipCode" => [ 87170000, 87174999 ],
                "ibge" => 4117404
            ]),
            "4117453" => new Map([
                "name" => "Ouro Verde do Oeste",
                "zipCode" => [ 85933000, 85934999 ],
                "ibge" => 4117453
            ]),
            "4117503" => new Map([
                "name" => "Paiçandu",
                "zipCode" => [ 87140000, 87154999 ],
                "ibge" => 4117503
            ]),
            "4117602" => new Map([
                "name" => "Palmas",
                "zipCode" => [ 85555000, 85556999 ],
                "ibge" => 4117602
            ]),
            "4117701" => new Map([
                "name" => "Palmeira",
                "zipCode" => [ 84130000, 84139999 ],
                "ibge" => 4117701
            ]),
            "4117800" => new Map([
                "name" => "Palmital",
                "zipCode" => [ 85270000, 85274999 ],
                "ibge" => 4117800
            ]),
            "4117909" => new Map([
                "name" => "Palotina",
                "zipCode" => [ 85950000, 85954999 ],
                "ibge" => 4117909
            ]),
            "4118006" => new Map([
                "name" => "Paraíso do Norte",
                "zipCode" => [ 87780000, 87789999 ],
                "ibge" => 4118006
            ]),
            "4118105" => new Map([
                "name" => "Paranacity",
                "zipCode" => [ 87660000, 87669999 ],
                "ibge" => 4118105
            ]),
            "4118204" => new Map([
                "name" => "Paranaguá",
                "zipCode" => [ 83200001, 83254999 ],
                "ibge" => 4118204
            ]),
            "4118303" => new Map([
                "name" => "Paranapoema",
                "zipCode" => [ 87680000, 87689999 ],
                "ibge" => 4118303
            ]),
            "4118402" => new Map([
                "name" => "Paranavaí",
                "zipCode" => [ 87700001, 87729999 ],
                "ibge" => 4118402
            ]),
            "4118451" => new Map([
                "name" => "Pato Bragado",
                "zipCode" => [ 85948000, 85949999 ],
                "ibge" => 4118451
            ]),
            "4118501" => new Map([
                "name" => "Pato Branco",
                "zipCode" => [ 85500001, 85514999 ],
                "ibge" => 4118501
            ]),
            "4118600" => new Map([
                "name" => "Paula Freitas",
                "zipCode" => [ 84630000, 84634999 ],
                "ibge" => 4118600
            ]),
            "4118709" => new Map([
                "name" => "Paulo Frontin",
                "zipCode" => [ 84635000, 84639999 ],
                "ibge" => 4118709
            ]),
            "4118808" => new Map([
                "name" => "Peabiru",
                "zipCode" => [ 87250000, 87259999 ],
                "ibge" => 4118808
            ]),
            "4118857" => new Map([
                "name" => "Perobal",
                "zipCode" => [ 87538000, 87539999 ],
                "ibge" => 4118857
            ]),
            "4118907" => new Map([
                "name" => "Pérola",
                "zipCode" => [ 87540000, 87544999 ],
                "ibge" => 4118907
            ]),
            "4119004" => new Map([
                "name" => "Pérola D'Oeste",
                "zipCode" => [ 85740000, 85744999 ],
                "ibge" => 4119004
            ]),
            "4119103" => new Map([
                "name" => "Piên",
                "zipCode" => [ 83860000, 83869999 ],
                "ibge" => 4119103
            ]),
            "4119152" => new Map([
                "name" => "Pinhais",
                "zipCode" => [ 83320001, 83349999 ],
                "ibge" => 4119152
            ]),
            "4119251" => new Map([
                "name" => "Pinhal de São Bento",
                "zipCode" => [ 85727000, 85729999 ],
                "ibge" => 4119251
            ]),
            "4119202" => new Map([
                "name" => "Pinhalão",
                "zipCode" => [ 84925000, 84929999 ],
                "ibge" => 4119202
            ]),
            "4119301" => new Map([
                "name" => "Pinhão",
                "zipCode" => [ 85170000, 85194999 ],
                "ibge" => 4119301
            ]),
            "4119400" => new Map([
                "name" => "Piraí do Sul",
                "zipCode" => [ 84240000, 84249999 ],
                "ibge" => 4119400
            ]),
            "4119509" => new Map([
                "name" => "Piraquara",
                "zipCode" => [ 83300001, 83319999 ],
                "ibge" => 4119509
            ]),
            "4119608" => new Map([
                "name" => "Pitanga",
                "zipCode" => [ 85200000, 85224999 ],
                "ibge" => 4119608
            ]),
            "4119657" => new Map([
                "name" => "Pitangueiras",
                "zipCode" => [ 86613000, 86614999 ],
                "ibge" => 4119657
            ]),
            "4119707" => new Map([
                "name" => "Planaltina do Paraná",
                "zipCode" => [ 87860000, 87879999 ],
                "ibge" => 4119707
            ]),
            "4119806" => new Map([
                "name" => "Planalto",
                "zipCode" => [ 85750000, 85759999 ],
                "ibge" => 4119806
            ]),
            "4119905" => new Map([
                "name" => "Ponta Grossa",
                "zipCode" => [ 84000001, 84129999 ],
                "ibge" => 4119905
            ]),
            "4119954" => new Map([
                "name" => "Pontal do Paraná",
                "zipCode" => [ 83255000, 83259999 ],
                "ibge" => 4119954
            ]),
            "4120002" => new Map([
                "name" => "Porecatu",
                "zipCode" => [ 86160000, 86164999 ],
                "ibge" => 4120002
            ]),
            "4120101" => new Map([
                "name" => "Porto Amazonas",
                "zipCode" => [ 84140000, 84144999 ],
                "ibge" => 4120101
            ]),
            "4120150" => new Map([
                "name" => "Porto Barreiro",
                "zipCode" => [ 85345000, 85349999 ],
                "ibge" => 4120150
            ]),
            "4120200" => new Map([
                "name" => "Porto Rico",
                "zipCode" => [ 87950000, 87954999 ],
                "ibge" => 4120200
            ]),
            "4120309" => new Map([
                "name" => "Porto Vitória",
                "zipCode" => [ 84615000, 84619999 ],
                "ibge" => 4120309
            ]),
            "4120333" => new Map([
                "name" => "Prado Ferreira",
                "zipCode" => [ 86618000, 86619999 ],
                "ibge" => 4120333
            ]),
            "4120358" => new Map([
                "name" => "Pranchita",
                "zipCode" => [ 85730000, 85739999 ],
                "ibge" => 4120358
            ]),
            "4120408" => new Map([
                "name" => "Presidente Castelo Branco",
                "zipCode" => [ 87180000, 87184999 ],
                "ibge" => 4120408
            ]),
            "4120507" => new Map([
                "name" => "Primeiro de Maio",
                "zipCode" => [ 86140000, 86149999 ],
                "ibge" => 4120507
            ]),
            "4120606" => new Map([
                "name" => "Prudentópolis",
                "zipCode" => [ 84400000, 84429999 ],
                "ibge" => 4120606
            ]),
            "4120655" => new Map([
                "name" => "Quarto Centenário",
                "zipCode" => [ 87365000, 87369999 ],
                "ibge" => 4120655
            ]),
            "4120705" => new Map([
                "name" => "Quatiguá",
                "zipCode" => [ 86450000, 86454999 ],
                "ibge" => 4120705
            ]),
            "4120804" => new Map([
                "name" => "Quatro Barras",
                "zipCode" => [ 83420000, 83429999 ],
                "ibge" => 4120804
            ]),
            "4120853" => new Map([
                "name" => "Quatro Pontes",
                "zipCode" => [ 85940000, 85944999 ],
                "ibge" => 4120853
            ]),
            "4120903" => new Map([
                "name" => "Quedas do Iguaçu",
                "zipCode" => [ 85460000, 85464999 ],
                "ibge" => 4120903
            ]),
            "4121000" => new Map([
                "name" => "Querência do Norte",
                "zipCode" => [ 87930000, 87949999 ],
                "ibge" => 4121000
            ]),
            "4121109" => new Map([
                "name" => "Quinta do Sol",
                "zipCode" => [ 87265000, 87269999 ],
                "ibge" => 4121109
            ]),
            "4121208" => new Map([
                "name" => "Quitandinha",
                "zipCode" => [ 83840000, 83849999 ],
                "ibge" => 4121208
            ]),
            "4121257" => new Map([
                "name" => "Ramilândia",
                "zipCode" => [ 85888000, 85889999 ],
                "ibge" => 4121257
            ]),
            "4121307" => new Map([
                "name" => "Rancho Alegre",
                "zipCode" => [ 86290000, 86299999 ],
                "ibge" => 4121307
            ]),
            "4121356" => new Map([
                "name" => "Rancho Alegre D'Oeste",
                "zipCode" => [ 87395000, 87399999 ],
                "ibge" => 4121356
            ]),
            "4121406" => new Map([
                "name" => "Realeza",
                "zipCode" => [ 85770000, 85779999 ],
                "ibge" => 4121406
            ]),
            "4121505" => new Map([
                "name" => "Rebouças",
                "zipCode" => [ 84550000, 84559999 ],
                "ibge" => 4121505
            ]),
            "4121604" => new Map([
                "name" => "Renascença",
                "zipCode" => [ 85610000, 85614999 ],
                "ibge" => 4121604
            ]),
            "4121703" => new Map([
                "name" => "Reserva",
                "zipCode" => [ 84320000, 84344999 ],
                "ibge" => 4121703
            ]),
            "4121752" => new Map([
                "name" => "Reserva do Iguaçu",
                "zipCode" => [ 85195000, 85199999 ],
                "ibge" => 4121752
            ]),
            "4121802" => new Map([
                "name" => "Ribeirão Claro",
                "zipCode" => [ 86410000, 86419999 ],
                "ibge" => 4121802
            ]),
            "4121901" => new Map([
                "name" => "Ribeirão do Pinhal",
                "zipCode" => [ 86490000, 86599999 ],
                "ibge" => 4121901
            ]),
            "4122008" => new Map([
                "name" => "Rio Azul",
                "zipCode" => [ 84560000, 84569999 ],
                "ibge" => 4122008
            ]),
            "4122107" => new Map([
                "name" => "Rio Bom",
                "zipCode" => [ 86830000, 86839999 ],
                "ibge" => 4122107
            ]),
            "4122156" => new Map([
                "name" => "Rio Bonito do Iguaçu",
                "zipCode" => [ 85340000, 85344999 ],
                "ibge" => 4122156
            ]),
            "4122172" => new Map([
                "name" => "Rio Branco do Ivaí",
                "zipCode" => [ 86848000, 86849999 ],
                "ibge" => 4122172
            ]),
            "4122206" => new Map([
                "name" => "Rio Branco do Sul",
                "zipCode" => [ 83540000, 83559999 ],
                "ibge" => 4122206
            ]),
            "4122305" => new Map([
                "name" => "Rio Negro",
                "zipCode" => [ 83880000, 83899999 ],
                "ibge" => 4122305
            ]),
            "4122404" => new Map([
                "name" => "Rolândia",
                "zipCode" => [ 86600001, 86609999 ],
                "ibge" => 4122404
            ]),
            "4122503" => new Map([
                "name" => "Roncador",
                "zipCode" => [ 87320000, 87324999 ],
                "ibge" => 4122503
            ]),
            "4122602" => new Map([
                "name" => "Rondon",
                "zipCode" => [ 87800000, 87809999 ],
                "ibge" => 4122602
            ]),
            "4122651" => new Map([
                "name" => "Rosário do Ivaí",
                "zipCode" => [ 86850000, 86854999 ],
                "ibge" => 4122651
            ]),
            "4122701" => new Map([
                "name" => "Sabáudia",
                "zipCode" => [ 86720000, 86729999 ],
                "ibge" => 4122701
            ]),
            "4122800" => new Map([
                "name" => "Salgado Filho",
                "zipCode" => [ 85620000, 85627999 ],
                "ibge" => 4122800
            ]),
            "4122909" => new Map([
                "name" => "Salto do Itararé",
                "zipCode" => [ 84945000, 84949999 ],
                "ibge" => 4122909
            ]),
            "4123006" => new Map([
                "name" => "Salto do Lontra",
                "zipCode" => [ 85670000, 85679999 ],
                "ibge" => 4123006
            ]),
            "4123105" => new Map([
                "name" => "Santa Amélia",
                "zipCode" => [ 86370000, 86374999 ],
                "ibge" => 4123105
            ]),
            "4123204" => new Map([
                "name" => "Santa Cecília do Pavão",
                "zipCode" => [ 86225000, 86229999 ],
                "ibge" => 4123204
            ]),
            "4123303" => new Map([
                "name" => "Santa Cruz de Monte Castelo",
                "zipCode" => [ 87920000, 87929999 ],
                "ibge" => 4123303
            ]),
            "4123402" => new Map([
                "name" => "Santa Fé",
                "zipCode" => [ 86770000, 86779999 ],
                "ibge" => 4123402
            ]),
            "4123501" => new Map([
                "name" => "Santa Helena",
                "zipCode" => [ 85892000, 85895999 ],
                "ibge" => 4123501
            ]),
            "4123600" => new Map([
                "name" => "Santa Inês",
                "zipCode" => [ 86660000, 86669999 ],
                "ibge" => 4123600
            ]),
            "4123709" => new Map([
                "name" => "Santa Isabel do Ivaí",
                "zipCode" => [ 87910000, 87914999 ],
                "ibge" => 4123709
            ]),
            "4123808" => new Map([
                "name" => "Santa Izabel do Oeste",
                "zipCode" => [ 85650000, 85659999 ],
                "ibge" => 4123808
            ]),
            "4123824" => new Map([
                "name" => "Santa Lúcia",
                "zipCode" => [ 85795000, 85799999 ],
                "ibge" => 4123824
            ]),
            "4123857" => new Map([
                "name" => "Santa Maria do Oeste",
                "zipCode" => [ 85230000, 85239999 ],
                "ibge" => 4123857
            ]),
            "4123907" => new Map([
                "name" => "Santa Mariana",
                "zipCode" => [ 86350000, 86359999 ],
                "ibge" => 4123907
            ]),
            "4123956" => new Map([
                "name" => "Santa Mônica",
                "zipCode" => [ 87915000, 87919999 ],
                "ibge" => 4123956
            ]),
            "4124020" => new Map([
                "name" => "Santa Tereza do Oeste",
                "zipCode" => [ 85825000, 85825999 ],
                "ibge" => 4124020
            ]),
            "4124053" => new Map([
                "name" => "Santa Terezinha de Itaipu",
                "zipCode" => [ 85875000, 85876999 ],
                "ibge" => 4124053
            ]),
            "4124004" => new Map([
                "name" => "Santana do Itararé",
                "zipCode" => [ 84970000, 84979999 ],
                "ibge" => 4124004
            ]),
            "4124103" => new Map([
                "name" => "Santo Antônio da Platina",
                "zipCode" => [ 86430000, 86449999 ],
                "ibge" => 4124103
            ]),
            "4124202" => new Map([
                "name" => "Santo Antônio do Caiuá",
                "zipCode" => [ 87730000, 87739999 ],
                "ibge" => 4124202
            ]),
            "4124301" => new Map([
                "name" => "Santo Antônio do Paraíso",
                "zipCode" => [ 86315000, 86319999 ],
                "ibge" => 4124301
            ]),
            "4124400" => new Map([
                "name" => "Santo Antônio do Sudoeste",
                "zipCode" => [ 85710000, 85726999 ],
                "ibge" => 4124400
            ]),
            "4124509" => new Map([
                "name" => "Santo Inácio",
                "zipCode" => [ 86650000, 86659999 ],
                "ibge" => 4124509
            ]),
            "4124608" => new Map([
                "name" => "São Carlos do Ivaí",
                "zipCode" => [ 87770000, 87779999 ],
                "ibge" => 4124608
            ]),
            "4124707" => new Map([
                "name" => "São Jerônimo da Serra",
                "zipCode" => [ 86270000, 86279999 ],
                "ibge" => 4124707
            ]),
            "4124806" => new Map([
                "name" => "São João",
                "zipCode" => [ 85570000, 85574999 ],
                "ibge" => 4124806
            ]),
            "4124905" => new Map([
                "name" => "São João do Caiuá",
                "zipCode" => [ 87740000, 87749999 ],
                "ibge" => 4124905
            ]),
            "4125001" => new Map([
                "name" => "São João do Ivaí",
                "zipCode" => [ 86930000, 86934999 ],
                "ibge" => 4125001
            ]),
            "4125100" => new Map([
                "name" => "São João do Triunfo",
                "zipCode" => [ 84150000, 84159999 ],
                "ibge" => 4125100
            ]),
            "4125308" => new Map([
                "name" => "São Jorge do Ivaí",
                "zipCode" => [ 87190000, 87199999 ],
                "ibge" => 4125308
            ]),
            "4125357" => new Map([
                "name" => "São Jorge do Patrocínio",
                "zipCode" => [ 87555000, 87559999 ],
                "ibge" => 4125357
            ]),
            "4125209" => new Map([
                "name" => "São Jorge D'Oeste",
                "zipCode" => [ 85575000, 85579999 ],
                "ibge" => 4125209
            ]),
            "4125407" => new Map([
                "name" => "São José da Boa Vista",
                "zipCode" => [ 84980000, 84989999 ],
                "ibge" => 4125407
            ]),
            "4125456" => new Map([
                "name" => "São José das Palmeiras",
                "zipCode" => [ 85898000, 85899999 ],
                "ibge" => 4125456
            ]),
            "4125506" => new Map([
                "name" => "São José dos Pinhais",
                "zipCode" => [ 83000001, 83189999 ],
                "ibge" => 4125506
            ]),
            "4125555" => new Map([
                "name" => "São Manoel do Paraná",
                "zipCode" => [ 87215000, 87219999 ],
                "ibge" => 4125555
            ]),
            "4125605" => new Map([
                "name" => "São Mateus do Sul",
                "zipCode" => [ 83900000, 83979999 ],
                "ibge" => 4125605
            ]),
            "4125704" => new Map([
                "name" => "São Miguel do Iguaçu",
                "zipCode" => [ 85877000, 85879999 ],
                "ibge" => 4125704
            ]),
            "4125753" => new Map([
                "name" => "São Pedro do Iguaçu",
                "zipCode" => [ 85929000, 85929999 ],
                "ibge" => 4125753
            ]),
            "4125803" => new Map([
                "name" => "São Pedro do Ivaí",
                "zipCode" => [ 86945000, 86949999 ],
                "ibge" => 4125803
            ]),
            "4125902" => new Map([
                "name" => "São Pedro do Paraná",
                "zipCode" => [ 87955000, 87959999 ],
                "ibge" => 4125902
            ]),
            "4126009" => new Map([
                "name" => "São Sebastião da Amoreira",
                "zipCode" => [ 86240000, 86249999 ],
                "ibge" => 4126009
            ]),
            "4126108" => new Map([
                "name" => "São Tomé",
                "zipCode" => [ 87220000, 87224999 ],
                "ibge" => 4126108
            ]),
            "4126207" => new Map([
                "name" => "Sapopema",
                "zipCode" => [ 84290000, 84299999 ],
                "ibge" => 4126207
            ]),
            "4126256" => new Map([
                "name" => "Sarandi",
                "zipCode" => [ 87110001, 87119999 ],
                "ibge" => 4126256
            ]),
            "4126272" => new Map([
                "name" => "Saudade do Iguaçu",
                "zipCode" => [ 85568000, 85569999 ],
                "ibge" => 4126272
            ]),
            "4126306" => new Map([
                "name" => "Sengés",
                "zipCode" => [ 84220000, 84239999 ],
                "ibge" => 4126306
            ]),
            "4126355" => new Map([
                "name" => "Serranópolis do Iguaçu",
                "zipCode" => [ 85885000, 85886999 ],
                "ibge" => 4126355
            ]),
            "4126405" => new Map([
                "name" => "Sertaneja",
                "zipCode" => [ 86340000, 86349999 ],
                "ibge" => 4126405
            ]),
            "4126504" => new Map([
                "name" => "Sertanópolis",
                "zipCode" => [ 86170000, 86179999 ],
                "ibge" => 4126504
            ]),
            "4126603" => new Map([
                "name" => "Siqueira Campos",
                "zipCode" => [ 84940000, 84944999 ],
                "ibge" => 4126603
            ]),
            "4126652" => new Map([
                "name" => "Sulina",
                "zipCode" => [ 85565000, 85567999 ],
                "ibge" => 4126652
            ]),
            "4126678" => new Map([
                "name" => "Tamarana",
                "zipCode" => [ 86125000, 86129999 ],
                "ibge" => 4126678
            ]),
            "4126702" => new Map([
                "name" => "Tamboara",
                "zipCode" => [ 87760000, 87769999 ],
                "ibge" => 4126702
            ]),
            "4126801" => new Map([
                "name" => "Tapejara",
                "zipCode" => [ 87430000, 87449999 ],
                "ibge" => 4126801
            ]),
            "4126900" => new Map([
                "name" => "Tapira",
                "zipCode" => [ 87830000, 87839999 ],
                "ibge" => 4126900
            ]),
            "4127007" => new Map([
                "name" => "Teixeira Soares",
                "zipCode" => [ 84530000, 84534999 ],
                "ibge" => 4127007
            ]),
            "4127106" => new Map([
                "name" => "Telêmaco Borba",
                "zipCode" => [ 84260001, 84279999 ],
                "ibge" => 4127106
            ]),
            "4127205" => new Map([
                "name" => "Terra Boa",
                "zipCode" => [ 87240000, 87249999 ],
                "ibge" => 4127205
            ]),
            "4127304" => new Map([
                "name" => "Terra Rica",
                "zipCode" => [ 87890000, 87899999 ],
                "ibge" => 4127304
            ]),
            "4127403" => new Map([
                "name" => "Terra Roxa",
                "zipCode" => [ 85990000, 85997999 ],
                "ibge" => 4127403
            ]),
            "4127502" => new Map([
                "name" => "Tibagi",
                "zipCode" => [ 84300000, 84319999 ],
                "ibge" => 4127502
            ]),
            "4127601" => new Map([
                "name" => "Tijucas do Sul",
                "zipCode" => [ 83190000, 83199999 ],
                "ibge" => 4127601
            ]),
            "4127700" => new Map([
                "name" => "Toledo",
                "zipCode" => [ 85900001, 85928999 ],
                "ibge" => 4127700
            ]),
            "4127809" => new Map([
                "name" => "Tomazina",
                "zipCode" => [ 84935000, 84939999 ],
                "ibge" => 4127809
            ]),
            "4127858" => new Map([
                "name" => "Três Barras do Paraná",
                "zipCode" => [ 85485000, 85499999 ],
                "ibge" => 4127858
            ]),
            "4127882" => new Map([
                "name" => "Tunas do Paraná",
                "zipCode" => [ 83480000, 83489999 ],
                "ibge" => 4127882
            ]),
            "4127908" => new Map([
                "name" => "Tuneiras do Oeste",
                "zipCode" => [ 87450000, 87469999 ],
                "ibge" => 4127908
            ]),
            "4127957" => new Map([
                "name" => "Tupãssi",
                "zipCode" => [ 85945000, 85947999 ],
                "ibge" => 4127957
            ]),
            "4127965" => new Map([
                "name" => "Turvo",
                "zipCode" => [ 85150000, 85154999 ],
                "ibge" => 4127965
            ]),
            "4128005" => new Map([
                "name" => "Ubiratã",
                "zipCode" => [ 85440000, 85449999 ],
                "ibge" => 4128005
            ]),
            "4128104" => new Map([
                "name" => "Umuarama",
                "zipCode" => [ 87500001, 87524999 ],
                "ibge" => 4128104
            ]),
            "4128203" => new Map([
                "name" => "União da Vitória",
                "zipCode" => [ 84600001, 84614999 ],
                "ibge" => 4128203
            ]),
            "4128302" => new Map([
                "name" => "Uniflor",
                "zipCode" => [ 87640000, 87649999 ],
                "ibge" => 4128302
            ]),
            "4128401" => new Map([
                "name" => "Uraí",
                "zipCode" => [ 86280000, 86289999 ],
                "ibge" => 4128401
            ]),
            "4128534" => new Map([
                "name" => "Ventania",
                "zipCode" => [ 84345000, 84349999 ],
                "ibge" => 4128534
            ]),
            "4128559" => new Map([
                "name" => "Vera Cruz do Oeste",
                "zipCode" => [ 85845000, 85849999 ],
                "ibge" => 4128559
            ]),
            "4128609" => new Map([
                "name" => "Verê",
                "zipCode" => [ 85585000, 85597999 ],
                "ibge" => 4128609
            ]),
            "4128658" => new Map([
                "name" => "Virmond",
                "zipCode" => [ 85390000, 85399999 ],
                "ibge" => 4128658
            ]),
            "4128708" => new Map([
                "name" => "Vitorino",
                "zipCode" => [ 85520000, 85524999 ],
                "ibge" => 4128708
            ]),
            "4128500" => new Map([
                "name" => "Wenceslau Braz",
                "zipCode" => [ 84950000, 84969999 ],
                "ibge" => 4128500
            ]),
            "4128807" => new Map([
                "name" => "Xambrê",
                "zipCode" => [ 87535000, 87537999 ],
                "ibge" => 4128807
            ])
        ]);

        return $map;
    }
}