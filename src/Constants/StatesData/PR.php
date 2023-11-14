<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

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
                "cep" => [ 86460000, 86464999 ],
                "ibge" => 4100103
            ]),
            "4100202" => new Map([
                "name" => "Adrianópolis",
                "cep" => [ 83490000, 83499999 ],
                "ibge" => 4100202
            ]),
            "4100301" => new Map([
                "name" => "Agudos do Sul",
                "cep" => [ 83850000, 83859999 ],
                "ibge" => 4100301
            ]),
            "4100400" => new Map([
                "name" => "Almirante Tamandaré",
                "cep" => [ 83500001, 83534999 ],
                "ibge" => 4100400
            ]),
            "4100459" => new Map([
                "name" => "Altamira do Paraná",
                "cep" => [ 85280000, 85299999 ],
                "ibge" => 4100459
            ]),
            "4128625" => new Map([
                "name" => "Alto Paraíso",
                "cep" => [ 87528000, 87529999 ],
                "ibge" => 4128625
            ]),
            "4100608" => new Map([
                "name" => "Alto Paraná",
                "cep" => [ 87750000, 87759999 ],
                "ibge" => 4100608
            ]),
            "4100707" => new Map([
                "name" => "Alto Piquiri",
                "cep" => [ 87580000, 87594999 ],
                "ibge" => 4100707
            ]),
            "4100509" => new Map([
                "name" => "Altônia",
                "cep" => [ 87550000, 87554999 ],
                "ibge" => 4100509
            ]),
            "4100806" => new Map([
                "name" => "Alvorada do Sul",
                "cep" => [ 86150000, 86159999 ],
                "ibge" => 4100806
            ]),
            "4100905" => new Map([
                "name" => "Amaporã",
                "cep" => [ 87850000, 87859999 ],
                "ibge" => 4100905
            ]),
            "4101002" => new Map([
                "name" => "Ampére",
                "cep" => [ 85640000, 85649999 ],
                "ibge" => 4101002
            ]),
            "4101051" => new Map([
                "name" => "Anahy",
                "cep" => [ 85425000, 85429999 ],
                "ibge" => 4101051
            ]),
            "4101101" => new Map([
                "name" => "Andirá",
                "cep" => [ 86380000, 86384999 ],
                "ibge" => 4101101
            ]),
            "4101150" => new Map([
                "name" => "Ângulo",
                "cep" => [ 86755000, 86759999 ],
                "ibge" => 4101150
            ]),
            "4101200" => new Map([
                "name" => "Antonina",
                "cep" => [ 83370000, 83389999 ],
                "ibge" => 4101200
            ]),
            "4101309" => new Map([
                "name" => "Antônio Olinto",
                "cep" => [ 83980000, 83999999 ],
                "ibge" => 4101309
            ]),
            "4101408" => new Map([
                "name" => "Apucarana",
                "cep" => [ 86800001, 86819999 ],
                "ibge" => 4101408
            ]),
            "4101507" => new Map([
                "name" => "Arapongas",
                "cep" => [ 86700001, 86719999 ],
                "ibge" => 4101507
            ]),
            "4101606" => new Map([
                "name" => "Arapoti",
                "cep" => [ 84990000, 84999999 ],
                "ibge" => 4101606
            ]),
            "4101655" => new Map([
                "name" => "Arapuã",
                "cep" => [ 86884000, 86889999 ],
                "ibge" => 4101655
            ]),
            "4101705" => new Map([
                "name" => "Araruna",
                "cep" => [ 87260000, 87264999 ],
                "ibge" => 4101705
            ]),
            "4101804" => new Map([
                "name" => "Araucária",
                "cep" => [ 83700001, 83729999 ],
                "ibge" => 4101804
            ]),
            "4101853" => new Map([
                "name" => "Ariranha do Ivaí",
                "cep" => [ 86880000, 86883999 ],
                "ibge" => 4101853
            ]),
            "4101903" => new Map([
                "name" => "Assaí",
                "cep" => [ 86220000, 86224999 ],
                "ibge" => 4101903
            ]),
            "4102000" => new Map([
                "name" => "Assis Chateaubriand",
                "cep" => [ 85935000, 85939999 ],
                "ibge" => 4102000
            ]),
            "4102109" => new Map([
                "name" => "Astorga",
                "cep" => [ 86730000, 86749999 ],
                "ibge" => 4102109
            ]),
            "4102208" => new Map([
                "name" => "Atalaia",
                "cep" => [ 87630000, 87639999 ],
                "ibge" => 4102208
            ]),
            "4102307" => new Map([
                "name" => "Balsa Nova",
                "cep" => [ 83650000, 83699999 ],
                "ibge" => 4102307
            ]),
            "4102406" => new Map([
                "name" => "Bandeirantes",
                "cep" => [ 86360000, 86369999 ],
                "ibge" => 4102406
            ]),
            "4102505" => new Map([
                "name" => "Barbosa Ferraz",
                "cep" => [ 86960000, 86969999 ],
                "ibge" => 4102505
            ]),
            "4102703" => new Map([
                "name" => "Barra do Jacaré",
                "cep" => [ 86385000, 86389999 ],
                "ibge" => 4102703
            ]),
            "4102604" => new Map([
                "name" => "Barracão",
                "cep" => [ 85700000, 85707999 ],
                "ibge" => 4102604
            ]),
            "4102752" => new Map([
                "name" => "Bela Vista da Caroba",
                "cep" => [ 85745000, 85749999 ],
                "ibge" => 4102752
            ]),
            "4102802" => new Map([
                "name" => "Bela Vista do Paraíso",
                "cep" => [ 86130000, 86139999 ],
                "ibge" => 4102802
            ]),
            "4102901" => new Map([
                "name" => "Bituruna",
                "cep" => [ 84640000, 84659999 ],
                "ibge" => 4102901
            ]),
            "4103008" => new Map([
                "name" => "Boa Esperança",
                "cep" => [ 87390000, 87394999 ],
                "ibge" => 4103008
            ]),
            "4103024" => new Map([
                "name" => "Boa Esperança do Iguaçu",
                "cep" => [ 85680000, 85684999 ],
                "ibge" => 4103024
            ]),
            "4103040" => new Map([
                "name" => "Boa Ventura de São Roque",
                "cep" => [ 85225000, 85229999 ],
                "ibge" => 4103040
            ]),
            "4103057" => new Map([
                "name" => "Boa Vista da Aparecida",
                "cep" => [ 85780000, 85789999 ],
                "ibge" => 4103057
            ]),
            "4103107" => new Map([
                "name" => "Bocaiúva do Sul",
                "cep" => [ 83450000, 83479999 ],
                "ibge" => 4103107
            ]),
            "4103156" => new Map([
                "name" => "Bom Jesus do Sul",
                "cep" => [ 85708000, 85709999 ],
                "ibge" => 4103156
            ]),
            "4103206" => new Map([
                "name" => "Bom Sucesso",
                "cep" => [ 86940000, 86944999 ],
                "ibge" => 4103206
            ]),
            "4103222" => new Map([
                "name" => "Bom Sucesso do Sul",
                "cep" => [ 85515000, 85519999 ],
                "ibge" => 4103222
            ]),
            "4103305" => new Map([
                "name" => "Borrazópolis",
                "cep" => [ 86925000, 86929999 ],
                "ibge" => 4103305
            ]),
            "4103354" => new Map([
                "name" => "Braganey",
                "cep" => [ 85430000, 85439999 ],
                "ibge" => 4103354
            ]),
            "4103370" => new Map([
                "name" => "Brasilândia do Sul",
                "cep" => [ 87595000, 87599999 ],
                "ibge" => 4103370
            ]),
            "4103404" => new Map([
                "name" => "Cafeara",
                "cep" => [ 86640000, 86649999 ],
                "ibge" => 4103404
            ]),
            "4103453" => new Map([
                "name" => "Cafelândia",
                "cep" => [ 85415000, 85419999 ],
                "ibge" => 4103453
            ]),
            "4103479" => new Map([
                "name" => "Cafezal do Sul",
                "cep" => [ 87565000, 87569999 ],
                "ibge" => 4103479
            ]),
            "4103503" => new Map([
                "name" => "Califórnia",
                "cep" => [ 86820000, 86824999 ],
                "ibge" => 4103503
            ]),
            "4103602" => new Map([
                "name" => "Cambará",
                "cep" => [ 86390000, 86399999 ],
                "ibge" => 4103602
            ]),
            "4103701" => new Map([
                "name" => "Cambé",
                "cep" => [ 86180001, 86199999 ],
                "ibge" => 4103701
            ]),
            "4103800" => new Map([
                "name" => "Cambira",
                "cep" => [ 86890000, 86894999 ],
                "ibge" => 4103800
            ]),
            "4103909" => new Map([
                "name" => "Campina da Lagoa",
                "cep" => [ 87345000, 87354999 ],
                "ibge" => 4103909
            ]),
            "4103958" => new Map([
                "name" => "Campina do Simão",
                "cep" => [ 85148000, 85149999 ],
                "ibge" => 4103958
            ]),
            "4104006" => new Map([
                "name" => "Campina Grande do Sul",
                "cep" => [ 83430000, 83449999 ],
                "ibge" => 4104006
            ]),
            "4104055" => new Map([
                "name" => "Campo Bonito",
                "cep" => [ 85450000, 85459999 ],
                "ibge" => 4104055
            ]),
            "4104105" => new Map([
                "name" => "Campo do Tenente",
                "cep" => [ 83870000, 83879999 ],
                "ibge" => 4104105
            ]),
            "4104204" => new Map([
                "name" => "Campo Largo",
                "cep" => [ 83600001, 83649999 ],
                "ibge" => 4104204
            ]),
            "4104253" => new Map([
                "name" => "Campo Magro",
                "cep" => [ 83535000, 83539999 ],
                "ibge" => 4104253
            ]),
            "4104303" => new Map([
                "name" => "Campo Mourão",
                "cep" => [ 87300001, 87319999 ],
                "ibge" => 4104303
            ]),
            "4104402" => new Map([
                "name" => "Cândido de Abreu",
                "cep" => [ 84470000, 84499999 ],
                "ibge" => 4104402
            ]),
            "4104428" => new Map([
                "name" => "Candói",
                "cep" => [ 85140000, 85144999 ],
                "ibge" => 4104428
            ]),
            "4104451" => new Map([
                "name" => "Cantagalo",
                "cep" => [ 85160000, 85161999 ],
                "ibge" => 4104451
            ]),
            "4104501" => new Map([
                "name" => "Capanema",
                "cep" => [ 85760000, 85769999 ],
                "ibge" => 4104501
            ]),
            "4104600" => new Map([
                "name" => "Capitão Leônidas Marques",
                "cep" => [ 85790000, 85794999 ],
                "ibge" => 4104600
            ]),
            "4104659" => new Map([
                "name" => "Carambeí",
                "cep" => [ 84145000, 84149999 ],
                "ibge" => 4104659
            ]),
            "4104709" => new Map([
                "name" => "Carlópolis",
                "cep" => [ 86420000, 86429999 ],
                "ibge" => 4104709
            ]),
            "4104808" => new Map([
                "name" => "Cascavel",
                "cep" => [ 85800001, 85824999 ],
                "ibge" => 4104808
            ]),
            "4104907" => new Map([
                "name" => "Castro",
                "cep" => [ 84160001, 84199999 ],
                "ibge" => 4104907
            ]),
            "4105003" => new Map([
                "name" => "Catanduvas",
                "cep" => [ 85470000, 85477999 ],
                "ibge" => 4105003
            ]),
            "4105102" => new Map([
                "name" => "Centenário do Sul",
                "cep" => [ 86630000, 86634999 ],
                "ibge" => 4105102
            ]),
            "4105201" => new Map([
                "name" => "Cerro Azul",
                "cep" => [ 83570000, 83589999 ],
                "ibge" => 4105201
            ]),
            "4105300" => new Map([
                "name" => "Céu Azul",
                "cep" => [ 85840000, 85844999 ],
                "ibge" => 4105300
            ]),
            "4105409" => new Map([
                "name" => "Chopinzinho",
                "cep" => [ 85560000, 85564999 ],
                "ibge" => 4105409
            ]),
            "4105508" => new Map([
                "name" => "Cianorte",
                "cep" => [ 87200001, 87214999 ],
                "ibge" => 4105508
            ]),
            "4105607" => new Map([
                "name" => "Cidade Gaúcha",
                "cep" => [ 87820000, 87829999 ],
                "ibge" => 4105607
            ]),
            "4105706" => new Map([
                "name" => "Clevelândia",
                "cep" => [ 85530000, 85539999 ],
                "ibge" => 4105706
            ]),
            "4105805" => new Map([
                "name" => "Colombo",
                "cep" => [ 83400001, 83419999 ],
                "ibge" => 4105805
            ]),
            "4105904" => new Map([
                "name" => "Colorado",
                "cep" => [ 86690000, 86699999 ],
                "ibge" => 4105904
            ]),
            "4106001" => new Map([
                "name" => "Congonhinhas",
                "cep" => [ 86320000, 86329999 ],
                "ibge" => 4106001
            ]),
            "4106100" => new Map([
                "name" => "Conselheiro Mairinck",
                "cep" => [ 86480000, 86489999 ],
                "ibge" => 4106100
            ]),
            "4106209" => new Map([
                "name" => "Contenda",
                "cep" => [ 83730000, 83749999 ],
                "ibge" => 4106209
            ]),
            "4106308" => new Map([
                "name" => "Corbélia",
                "cep" => [ 85420000, 85422999 ],
                "ibge" => 4106308
            ]),
            "4106407" => new Map([
                "name" => "Cornélio Procópio",
                "cep" => [ 86300000, 86309999 ],
                "ibge" => 4106407
            ]),
            "4106456" => new Map([
                "name" => "Coronel Domingos Soares",
                "cep" => [ 85557000, 85559999 ],
                "ibge" => 4106456
            ]),
            "4106506" => new Map([
                "name" => "Coronel Vivida",
                "cep" => [ 85550000, 85554999 ],
                "ibge" => 4106506
            ]),
            "4106555" => new Map([
                "name" => "Corumbataí do Sul",
                "cep" => [ 86970000, 86974999 ],
                "ibge" => 4106555
            ]),
            "4106803" => new Map([
                "name" => "Cruz Machado",
                "cep" => [ 84620000, 84629999 ],
                "ibge" => 4106803
            ]),
            "4106571" => new Map([
                "name" => "Cruzeiro do Iguaçu",
                "cep" => [ 85598000, 85599999 ],
                "ibge" => 4106571
            ]),
            "4106605" => new Map([
                "name" => "Cruzeiro do Oeste",
                "cep" => [ 87400000, 87429999 ],
                "ibge" => 4106605
            ]),
            "4106704" => new Map([
                "name" => "Cruzeiro do Sul",
                "cep" => [ 87650000, 87659999 ],
                "ibge" => 4106704
            ]),
            "4106852" => new Map([
                "name" => "Cruzmaltina",
                "cep" => [ 86855000, 86859999 ],
                "ibge" => 4106852
            ]),
            "4106902" => new Map([
                "name" => "Curitiba",
                "cep" => [ 80000001, 82999999 ],
                "ibge" => 4106902
            ]),
            "4107009" => new Map([
                "name" => "Curiúva",
                "cep" => [ 84280000, 84284999 ],
                "ibge" => 4107009
            ]),
            "4107108" => new Map([
                "name" => "Diamante do Norte",
                "cep" => [ 87990000, 87999999 ],
                "ibge" => 4107108
            ]),
            "4107124" => new Map([
                "name" => "Diamante do Sul",
                "cep" => [ 85408000, 85409999 ],
                "ibge" => 4107124
            ]),
            "4107157" => new Map([
                "name" => "Diamante D'Oeste",
                "cep" => [ 85896000, 85897999 ],
                "ibge" => 4107157
            ]),
            "4107207" => new Map([
                "name" => "Dois Vizinhos",
                "cep" => [ 85660000, 85669999 ],
                "ibge" => 4107207
            ]),
            "4107256" => new Map([
                "name" => "Douradina",
                "cep" => [ 87485000, 87489999 ],
                "ibge" => 4107256
            ]),
            "4107306" => new Map([
                "name" => "Doutor Camargo",
                "cep" => [ 87155000, 87159999 ],
                "ibge" => 4107306
            ]),
            "4128633" => new Map([
                "name" => "Doutor Ulysses",
                "cep" => [ 83590000, 83599999 ],
                "ibge" => 4128633
            ]),
            "4107405" => new Map([
                "name" => "Enéas Marques",
                "cep" => [ 85630000, 85634999 ],
                "ibge" => 4107405
            ]),
            "4107504" => new Map([
                "name" => "Engenheiro Beltrão",
                "cep" => [ 87270000, 87279999 ],
                "ibge" => 4107504
            ]),
            "4107538" => new Map([
                "name" => "Entre Rios do Oeste",
                "cep" => [ 85988000, 85989999 ],
                "ibge" => 4107538
            ]),
            "4107520" => new Map([
                "name" => "Esperança Nova",
                "cep" => [ 87545000, 87549999 ],
                "ibge" => 4107520
            ]),
            "4107546" => new Map([
                "name" => "Espigão Alto do Iguaçu",
                "cep" => [ 85465000, 85469999 ],
                "ibge" => 4107546
            ]),
            "4107553" => new Map([
                "name" => "Farol",
                "cep" => [ 87325000, 87329999 ],
                "ibge" => 4107553
            ]),
            "4107603" => new Map([
                "name" => "Faxinal",
                "cep" => [ 86840000, 86844999 ],
                "ibge" => 4107603
            ]),
            "4107652" => new Map([
                "name" => "Fazenda Rio Grande",
                "cep" => [ 83820001, 83839999 ],
                "ibge" => 4107652
            ]),
            "4107702" => new Map([
                "name" => "Fênix",
                "cep" => [ 86950000, 86959999 ],
                "ibge" => 4107702
            ]),
            "4107736" => new Map([
                "name" => "Fernandes Pinheiro",
                "cep" => [ 84535000, 84549999 ],
                "ibge" => 4107736
            ]),
            "4107751" => new Map([
                "name" => "Figueira",
                "cep" => [ 84285000, 84289999 ],
                "ibge" => 4107751
            ]),
            "4107850" => new Map([
                "name" => "Flor da Serra do Sul",
                "cep" => [ 85618000, 85619999 ],
                "ibge" => 4107850
            ]),
            "4107801" => new Map([
                "name" => "Floraí",
                "cep" => [ 87185000, 87189999 ],
                "ibge" => 4107801
            ]),
            "4107900" => new Map([
                "name" => "Floresta",
                "cep" => [ 87120000, 87129999 ],
                "ibge" => 4107900
            ]),
            "4108007" => new Map([
                "name" => "Florestópolis",
                "cep" => [ 86165000, 86169999 ],
                "ibge" => 4108007
            ]),
            "4108106" => new Map([
                "name" => "Flórida",
                "cep" => [ 86780000, 86789999 ],
                "ibge" => 4108106
            ]),
            "4108205" => new Map([
                "name" => "Formosa do Oeste",
                "cep" => [ 85830000, 85832999 ],
                "ibge" => 4108205
            ]),
            "4108304" => new Map([
                "name" => "Foz do Iguaçu",
                "cep" => [ 85850001, 85874999 ],
                "ibge" => 4108304
            ]),
            "4108452" => new Map([
                "name" => "Foz do Jordão",
                "cep" => [ 85145000, 85147999 ],
                "ibge" => 4108452
            ]),
            "4108320" => new Map([
                "name" => "Francisco Alves",
                "cep" => [ 87570000, 87579999 ],
                "ibge" => 4108320
            ]),
            "4108403" => new Map([
                "name" => "Francisco Beltrão",
                "cep" => [ 85600001, 85609999 ],
                "ibge" => 4108403
            ]),
            "4108502" => new Map([
                "name" => "General Carneiro",
                "cep" => [ 84660000, 84899999 ],
                "ibge" => 4108502
            ]),
            "4108551" => new Map([
                "name" => "Godoy Moreira",
                "cep" => [ 86938000, 86939999 ],
                "ibge" => 4108551
            ]),
            "4108601" => new Map([
                "name" => "Goioerê",
                "cep" => [ 87360000, 87364999 ],
                "ibge" => 4108601
            ]),
            "4108650" => new Map([
                "name" => "Goioxim",
                "cep" => [ 85162000, 85167999 ],
                "ibge" => 4108650
            ]),
            "4108700" => new Map([
                "name" => "Grandes Rios",
                "cep" => [ 86845000, 86847999 ],
                "ibge" => 4108700
            ]),
            "4108809" => new Map([
                "name" => "Guaíra",
                "cep" => [ 85980000, 85987999 ],
                "ibge" => 4108809
            ]),
            "4108908" => new Map([
                "name" => "Guairaçá",
                "cep" => [ 87880000, 87889999 ],
                "ibge" => 4108908
            ]),
            "4108957" => new Map([
                "name" => "Guamiranga",
                "cep" => [ 84435000, 84449999 ],
                "ibge" => 4108957
            ]),
            "4109005" => new Map([
                "name" => "Guapirama",
                "cep" => [ 86465000, 86469999 ],
                "ibge" => 4109005
            ]),
            "4109104" => new Map([
                "name" => "Guaporema",
                "cep" => [ 87810000, 87819999 ],
                "ibge" => 4109104
            ]),
            "4109203" => new Map([
                "name" => "Guaraci",
                "cep" => [ 86620000, 86629999 ],
                "ibge" => 4109203
            ]),
            "4109302" => new Map([
                "name" => "Guaraniaçu",
                "cep" => [ 85400000, 85407999 ],
                "ibge" => 4109302
            ]),
            "4109401" => new Map([
                "name" => "Guarapuava",
                "cep" => [ 85000001, 85139999 ],
                "ibge" => 4109401
            ]),
            "4109500" => new Map([
                "name" => "Guaraqueçaba",
                "cep" => [ 83390000, 83399999 ],
                "ibge" => 4109500
            ]),
            "4109609" => new Map([
                "name" => "Guaratuba",
                "cep" => [ 83280000, 83299999 ],
                "ibge" => 4109609
            ]),
            "4109658" => new Map([
                "name" => "Honório Serpa",
                "cep" => [ 85548000, 85549999 ],
                "ibge" => 4109658
            ]),
            "4109708" => new Map([
                "name" => "Ibaiti",
                "cep" => [ 84900000, 84919999 ],
                "ibge" => 4109708
            ]),
            "4109757" => new Map([
                "name" => "Ibema",
                "cep" => [ 85478000, 85484999 ],
                "ibge" => 4109757
            ]),
            "4109807" => new Map([
                "name" => "Ibiporã",
                "cep" => [ 86200000, 86209999 ],
                "ibge" => 4109807
            ]),
            "4109906" => new Map([
                "name" => "Icaraíma",
                "cep" => [ 87530000, 87534999 ],
                "ibge" => 4109906
            ]),
            "4110003" => new Map([
                "name" => "Iguaraçu",
                "cep" => [ 86750000, 86754999 ],
                "ibge" => 4110003
            ]),
            "4110052" => new Map([
                "name" => "Iguatu",
                "cep" => [ 85423000, 85424999 ],
                "ibge" => 4110052
            ]),
            "4110078" => new Map([
                "name" => "Imbaú",
                "cep" => [ 84250000, 84259999 ],
                "ibge" => 4110078
            ]),
            "4110102" => new Map([
                "name" => "Imbituva",
                "cep" => [ 84430000, 84434999 ],
                "ibge" => 4110102
            ]),
            "4110201" => new Map([
                "name" => "Inácio Martins",
                "cep" => [ 85155000, 85159999 ],
                "ibge" => 4110201
            ]),
            "4110300" => new Map([
                "name" => "Inajá",
                "cep" => [ 87670000, 87679999 ],
                "ibge" => 4110300
            ]),
            "4110409" => new Map([
                "name" => "Indianópolis",
                "cep" => [ 87235000, 87239999 ],
                "ibge" => 4110409
            ]),
            "4110508" => new Map([
                "name" => "Ipiranga",
                "cep" => [ 84450000, 84459999 ],
                "ibge" => 4110508
            ]),
            "4110607" => new Map([
                "name" => "Iporã",
                "cep" => [ 87560000, 87564999 ],
                "ibge" => 4110607
            ]),
            "4110656" => new Map([
                "name" => "Iracema do Oeste",
                "cep" => [ 85833000, 85834999 ],
                "ibge" => 4110656
            ]),
            "4110706" => new Map([
                "name" => "Irati",
                "cep" => [ 84500001, 84509999 ],
                "ibge" => 4110706
            ]),
            "4110805" => new Map([
                "name" => "Iretama",
                "cep" => [ 87280000, 87289999 ],
                "ibge" => 4110805
            ]),
            "4110904" => new Map([
                "name" => "Itaguajé",
                "cep" => [ 86670000, 86679999 ],
                "ibge" => 4110904
            ]),
            "4110953" => new Map([
                "name" => "Itaipulândia",
                "cep" => [ 85880000, 85883999 ],
                "ibge" => 4110953
            ]),
            "4111001" => new Map([
                "name" => "Itambaracá",
                "cep" => [ 86375000, 86379999 ],
                "ibge" => 4111001
            ]),
            "4111100" => new Map([
                "name" => "Itambé",
                "cep" => [ 87175000, 87179999 ],
                "ibge" => 4111100
            ]),
            "4111209" => new Map([
                "name" => "Itapejara D'Oeste",
                "cep" => [ 85580000, 85584999 ],
                "ibge" => 4111209
            ]),
            "4111258" => new Map([
                "name" => "Itaperuçu",
                "cep" => [ 83560000, 83569999 ],
                "ibge" => 4111258
            ]),
            "4111308" => new Map([
                "name" => "Itaúna do Sul",
                "cep" => [ 87980000, 87989999 ],
                "ibge" => 4111308
            ]),
            "4111407" => new Map([
                "name" => "Ivaí",
                "cep" => [ 84460000, 84469999 ],
                "ibge" => 4111407
            ]),
            "4111506" => new Map([
                "name" => "Ivaiporã",
                "cep" => [ 86870000, 86879999 ],
                "ibge" => 4111506
            ]),
            "4111555" => new Map([
                "name" => "Ivaté",
                "cep" => [ 87525000, 87527999 ],
                "ibge" => 4111555
            ]),
            "4111605" => new Map([
                "name" => "Ivatuba",
                "cep" => [ 87130000, 87139999 ],
                "ibge" => 4111605
            ]),
            "4111704" => new Map([
                "name" => "Jaboti",
                "cep" => [ 84930000, 84934999 ],
                "ibge" => 4111704
            ]),
            "4111803" => new Map([
                "name" => "Jacarezinho",
                "cep" => [ 86400000, 86409999 ],
                "ibge" => 4111803
            ]),
            "4111902" => new Map([
                "name" => "Jaguapitã",
                "cep" => [ 86610000, 86612999 ],
                "ibge" => 4111902
            ]),
            "4112009" => new Map([
                "name" => "Jaguariaíva",
                "cep" => [ 84200000, 84219999 ],
                "ibge" => 4112009
            ]),
            "4112108" => new Map([
                "name" => "Jandaia do Sul",
                "cep" => [ 86900000, 86909999 ],
                "ibge" => 4112108
            ]),
            "4112207" => new Map([
                "name" => "Janiópolis",
                "cep" => [ 87380000, 87389999 ],
                "ibge" => 4112207
            ]),
            "4112306" => new Map([
                "name" => "Japira",
                "cep" => [ 84920000, 84924999 ],
                "ibge" => 4112306
            ]),
            "4112405" => new Map([
                "name" => "Japurá",
                "cep" => [ 87225000, 87229999 ],
                "ibge" => 4112405
            ]),
            "4112504" => new Map([
                "name" => "Jardim Alegre",
                "cep" => [ 86860000, 86864999 ],
                "ibge" => 4112504
            ]),
            "4112603" => new Map([
                "name" => "Jardim Olinda",
                "cep" => [ 87690000, 87699999 ],
                "ibge" => 4112603
            ]),
            "4112702" => new Map([
                "name" => "Jataizinho",
                "cep" => [ 86210000, 86219999 ],
                "ibge" => 4112702
            ]),
            "4112751" => new Map([
                "name" => "Jesuítas",
                "cep" => [ 85835000, 85839999 ],
                "ibge" => 4112751
            ]),
            "4112801" => new Map([
                "name" => "Joaquim Távora",
                "cep" => [ 86455000, 86459999 ],
                "ibge" => 4112801
            ]),
            "4112900" => new Map([
                "name" => "Jundiaí do Sul",
                "cep" => [ 86470000, 86479999 ],
                "ibge" => 4112900
            ]),
            "4112959" => new Map([
                "name" => "Juranda",
                "cep" => [ 87355000, 87359999 ],
                "ibge" => 4112959
            ]),
            "4113007" => new Map([
                "name" => "Jussara",
                "cep" => [ 87230000, 87234999 ],
                "ibge" => 4113007
            ]),
            "4113106" => new Map([
                "name" => "Kaloré",
                "cep" => [ 86920000, 86924999 ],
                "ibge" => 4113106
            ]),
            "4113205" => new Map([
                "name" => "Lapa",
                "cep" => [ 83750000, 83799999 ],
                "ibge" => 4113205
            ]),
            "4113254" => new Map([
                "name" => "Laranjal",
                "cep" => [ 85275000, 85279999 ],
                "ibge" => 4113254
            ]),
            "4113304" => new Map([
                "name" => "Laranjeiras do Sul",
                "cep" => [ 85300001, 85339999 ],
                "ibge" => 4113304
            ]),
            "4113403" => new Map([
                "name" => "Leópolis",
                "cep" => [ 86330000, 86339999 ],
                "ibge" => 4113403
            ]),
            "4113429" => new Map([
                "name" => "Lidianópolis",
                "cep" => [ 86865000, 86869999 ],
                "ibge" => 4113429
            ]),
            "4113452" => new Map([
                "name" => "Lindoeste",
                "cep" => [ 85826000, 85829999 ],
                "ibge" => 4113452
            ]),
            "4113502" => new Map([
                "name" => "Loanda",
                "cep" => [ 87900000, 87909999 ],
                "ibge" => 4113502
            ]),
            "4113601" => new Map([
                "name" => "Lobato",
                "cep" => [ 86790000, 86799999 ],
                "ibge" => 4113601
            ]),
            "4113700" => new Map([
                "name" => "Londrina",
                "cep" => [ 86000001, 86124999 ],
                "ibge" => 4113700
            ]),
            "4113734" => new Map([
                "name" => "Luiziana",
                "cep" => [ 87290000, 87299999 ],
                "ibge" => 4113734
            ]),
            "4113759" => new Map([
                "name" => "Lunardelli",
                "cep" => [ 86935000, 86937999 ],
                "ibge" => 4113759
            ]),
            "4113809" => new Map([
                "name" => "Lupionópolis",
                "cep" => [ 86635000, 86639999 ],
                "ibge" => 4113809
            ]),
            "4113908" => new Map([
                "name" => "Mallet",
                "cep" => [ 84570000, 84599999 ],
                "ibge" => 4113908
            ]),
            "4114005" => new Map([
                "name" => "Mamborê",
                "cep" => [ 87340000, 87344999 ],
                "ibge" => 4114005
            ]),
            "4114104" => new Map([
                "name" => "Mandaguaçu",
                "cep" => [ 87160000, 87169999 ],
                "ibge" => 4114104
            ]),
            "4114203" => new Map([
                "name" => "Mandaguari",
                "cep" => [ 86975000, 86989999 ],
                "ibge" => 4114203
            ]),
            "4114302" => new Map([
                "name" => "Mandirituba",
                "cep" => [ 83800000, 83819999 ],
                "ibge" => 4114302
            ]),
            "4114351" => new Map([
                "name" => "Manfrinópolis",
                "cep" => [ 85628000, 85629999 ],
                "ibge" => 4114351
            ]),
            "4114401" => new Map([
                "name" => "Mangueirinha",
                "cep" => [ 85540000, 85547999 ],
                "ibge" => 4114401
            ]),
            "4114500" => new Map([
                "name" => "Manoel Ribas",
                "cep" => [ 85260000, 85269999 ],
                "ibge" => 4114500
            ]),
            "4114609" => new Map([
                "name" => "Marechal Cândido Rondon",
                "cep" => [ 85960000, 85979999 ],
                "ibge" => 4114609
            ]),
            "4114708" => new Map([
                "name" => "Maria Helena",
                "cep" => [ 87480000, 87484999 ],
                "ibge" => 4114708
            ]),
            "4114807" => new Map([
                "name" => "Marialva",
                "cep" => [ 86990000, 86999999 ],
                "ibge" => 4114807
            ]),
            "4114906" => new Map([
                "name" => "Marilândia do Sul",
                "cep" => [ 86825000, 86827999 ],
                "ibge" => 4114906
            ]),
            "4115002" => new Map([
                "name" => "Marilena",
                "cep" => [ 87960000, 87969999 ],
                "ibge" => 4115002
            ]),
            "4115101" => new Map([
                "name" => "Mariluz",
                "cep" => [ 87470000, 87479999 ],
                "ibge" => 4115101
            ]),
            "4115200" => new Map([
                "name" => "Maringá",
                "cep" => [ 87000001, 87109999 ],
                "ibge" => 4115200
            ]),
            "4115309" => new Map([
                "name" => "Mariópolis",
                "cep" => [ 85525000, 85529999 ],
                "ibge" => 4115309
            ]),
            "4115358" => new Map([
                "name" => "Maripá",
                "cep" => [ 85955000, 85959999 ],
                "ibge" => 4115358
            ]),
            "4115408" => new Map([
                "name" => "Marmeleiro",
                "cep" => [ 85615000, 85617999 ],
                "ibge" => 4115408
            ]),
            "4115457" => new Map([
                "name" => "Marquinho",
                "cep" => [ 85168000, 85169999 ],
                "ibge" => 4115457
            ]),
            "4115507" => new Map([
                "name" => "Marumbi",
                "cep" => [ 86910000, 86919999 ],
                "ibge" => 4115507
            ]),
            "4115606" => new Map([
                "name" => "Matelândia",
                "cep" => [ 85887000, 85887999 ],
                "ibge" => 4115606
            ]),
            "4115705" => new Map([
                "name" => "Matinhos",
                "cep" => [ 83260000, 83279999 ],
                "ibge" => 4115705
            ]),
            "4115739" => new Map([
                "name" => "Mato Rico",
                "cep" => [ 85240000, 85249999 ],
                "ibge" => 4115739
            ]),
            "4115754" => new Map([
                "name" => "Mauá da Serra",
                "cep" => [ 86828000, 86829999 ],
                "ibge" => 4115754
            ]),
            "4115804" => new Map([
                "name" => "Medianeira",
                "cep" => [ 85884000, 85884999 ],
                "ibge" => 4115804
            ]),
            "4115853" => new Map([
                "name" => "Mercedes",
                "cep" => [ 85998000, 85999999 ],
                "ibge" => 4115853
            ]),
            "4115903" => new Map([
                "name" => "Mirador",
                "cep" => [ 87840000, 87849999 ],
                "ibge" => 4115903
            ]),
            "4116000" => new Map([
                "name" => "Miraselva",
                "cep" => [ 86615000, 86617999 ],
                "ibge" => 4116000
            ]),
            "4116059" => new Map([
                "name" => "Missal",
                "cep" => [ 85890000, 85891999 ],
                "ibge" => 4116059
            ]),
            "4116109" => new Map([
                "name" => "Moreira Sales",
                "cep" => [ 87370000, 87379999 ],
                "ibge" => 4116109
            ]),
            "4116208" => new Map([
                "name" => "Morretes",
                "cep" => [ 83350000, 83369999 ],
                "ibge" => 4116208
            ]),
            "4116307" => new Map([
                "name" => "Munhoz de Melo",
                "cep" => [ 86760000, 86769999 ],
                "ibge" => 4116307
            ]),
            "4116406" => new Map([
                "name" => "Nossa Senhora das Graças",
                "cep" => [ 86680000, 86689999 ],
                "ibge" => 4116406
            ]),
            "4116505" => new Map([
                "name" => "Nova Aliança do Ivaí",
                "cep" => [ 87790000, 87799999 ],
                "ibge" => 4116505
            ]),
            "4116604" => new Map([
                "name" => "Nova América da Colina",
                "cep" => [ 86230000, 86239999 ],
                "ibge" => 4116604
            ]),
            "4116703" => new Map([
                "name" => "Nova Aurora",
                "cep" => [ 85410000, 85414999 ],
                "ibge" => 4116703
            ]),
            "4116802" => new Map([
                "name" => "Nova Cantu",
                "cep" => [ 87330000, 87339999 ],
                "ibge" => 4116802
            ]),
            "4116901" => new Map([
                "name" => "Nova Esperança",
                "cep" => [ 87600000, 87629999 ],
                "ibge" => 4116901
            ]),
            "4116950" => new Map([
                "name" => "Nova Esperança do Sudoeste",
                "cep" => [ 85635000, 85639999 ],
                "ibge" => 4116950
            ]),
            "4117008" => new Map([
                "name" => "Nova Fátima",
                "cep" => [ 86310000, 86314999 ],
                "ibge" => 4117008
            ]),
            "4117057" => new Map([
                "name" => "Nova Laranjeiras",
                "cep" => [ 85350000, 85389999 ],
                "ibge" => 4117057
            ]),
            "4117107" => new Map([
                "name" => "Nova Londrina",
                "cep" => [ 87970000, 87979999 ],
                "ibge" => 4117107
            ]),
            "4117206" => new Map([
                "name" => "Nova Olímpia",
                "cep" => [ 87490000, 87499999 ],
                "ibge" => 4117206
            ]),
            "4117255" => new Map([
                "name" => "Nova Prata do Iguaçu",
                "cep" => [ 85685000, 85699999 ],
                "ibge" => 4117255
            ]),
            "4117214" => new Map([
                "name" => "Nova Santa Bárbara",
                "cep" => [ 86250000, 86269999 ],
                "ibge" => 4117214
            ]),
            "4117222" => new Map([
                "name" => "Nova Santa Rosa",
                "cep" => [ 85930000, 85932999 ],
                "ibge" => 4117222
            ]),
            "4117271" => new Map([
                "name" => "Nova Tebas",
                "cep" => [ 85250000, 85259999 ],
                "ibge" => 4117271
            ]),
            "4117297" => new Map([
                "name" => "Novo Itacolomi",
                "cep" => [ 86895000, 86899999 ],
                "ibge" => 4117297
            ]),
            "4117305" => new Map([
                "name" => "Ortigueira",
                "cep" => [ 84350000, 84399999 ],
                "ibge" => 4117305
            ]),
            "4117404" => new Map([
                "name" => "Ourizona",
                "cep" => [ 87170000, 87174999 ],
                "ibge" => 4117404
            ]),
            "4117453" => new Map([
                "name" => "Ouro Verde do Oeste",
                "cep" => [ 85933000, 85934999 ],
                "ibge" => 4117453
            ]),
            "4117503" => new Map([
                "name" => "Paiçandu",
                "cep" => [ 87140000, 87154999 ],
                "ibge" => 4117503
            ]),
            "4117602" => new Map([
                "name" => "Palmas",
                "cep" => [ 85555000, 85556999 ],
                "ibge" => 4117602
            ]),
            "4117701" => new Map([
                "name" => "Palmeira",
                "cep" => [ 84130000, 84139999 ],
                "ibge" => 4117701
            ]),
            "4117800" => new Map([
                "name" => "Palmital",
                "cep" => [ 85270000, 85274999 ],
                "ibge" => 4117800
            ]),
            "4117909" => new Map([
                "name" => "Palotina",
                "cep" => [ 85950000, 85954999 ],
                "ibge" => 4117909
            ]),
            "4118006" => new Map([
                "name" => "Paraíso do Norte",
                "cep" => [ 87780000, 87789999 ],
                "ibge" => 4118006
            ]),
            "4118105" => new Map([
                "name" => "Paranacity",
                "cep" => [ 87660000, 87669999 ],
                "ibge" => 4118105
            ]),
            "4118204" => new Map([
                "name" => "Paranaguá",
                "cep" => [ 83200001, 83254999 ],
                "ibge" => 4118204
            ]),
            "4118303" => new Map([
                "name" => "Paranapoema",
                "cep" => [ 87680000, 87689999 ],
                "ibge" => 4118303
            ]),
            "4118402" => new Map([
                "name" => "Paranavaí",
                "cep" => [ 87700001, 87729999 ],
                "ibge" => 4118402
            ]),
            "4118451" => new Map([
                "name" => "Pato Bragado",
                "cep" => [ 85948000, 85949999 ],
                "ibge" => 4118451
            ]),
            "4118501" => new Map([
                "name" => "Pato Branco",
                "cep" => [ 85500001, 85514999 ],
                "ibge" => 4118501
            ]),
            "4118600" => new Map([
                "name" => "Paula Freitas",
                "cep" => [ 84630000, 84634999 ],
                "ibge" => 4118600
            ]),
            "4118709" => new Map([
                "name" => "Paulo Frontin",
                "cep" => [ 84635000, 84639999 ],
                "ibge" => 4118709
            ]),
            "4118808" => new Map([
                "name" => "Peabiru",
                "cep" => [ 87250000, 87259999 ],
                "ibge" => 4118808
            ]),
            "4118857" => new Map([
                "name" => "Perobal",
                "cep" => [ 87538000, 87539999 ],
                "ibge" => 4118857
            ]),
            "4118907" => new Map([
                "name" => "Pérola",
                "cep" => [ 87540000, 87544999 ],
                "ibge" => 4118907
            ]),
            "4119004" => new Map([
                "name" => "Pérola D'Oeste",
                "cep" => [ 85740000, 85744999 ],
                "ibge" => 4119004
            ]),
            "4119103" => new Map([
                "name" => "Piên",
                "cep" => [ 83860000, 83869999 ],
                "ibge" => 4119103
            ]),
            "4119152" => new Map([
                "name" => "Pinhais",
                "cep" => [ 83320001, 83349999 ],
                "ibge" => 4119152
            ]),
            "4119251" => new Map([
                "name" => "Pinhal de São Bento",
                "cep" => [ 85727000, 85729999 ],
                "ibge" => 4119251
            ]),
            "4119202" => new Map([
                "name" => "Pinhalão",
                "cep" => [ 84925000, 84929999 ],
                "ibge" => 4119202
            ]),
            "4119301" => new Map([
                "name" => "Pinhão",
                "cep" => [ 85170000, 85194999 ],
                "ibge" => 4119301
            ]),
            "4119400" => new Map([
                "name" => "Piraí do Sul",
                "cep" => [ 84240000, 84249999 ],
                "ibge" => 4119400
            ]),
            "4119509" => new Map([
                "name" => "Piraquara",
                "cep" => [ 83300001, 83319999 ],
                "ibge" => 4119509
            ]),
            "4119608" => new Map([
                "name" => "Pitanga",
                "cep" => [ 85200000, 85224999 ],
                "ibge" => 4119608
            ]),
            "4119657" => new Map([
                "name" => "Pitangueiras",
                "cep" => [ 86613000, 86614999 ],
                "ibge" => 4119657
            ]),
            "4119707" => new Map([
                "name" => "Planaltina do Paraná",
                "cep" => [ 87860000, 87879999 ],
                "ibge" => 4119707
            ]),
            "4119806" => new Map([
                "name" => "Planalto",
                "cep" => [ 85750000, 85759999 ],
                "ibge" => 4119806
            ]),
            "4119905" => new Map([
                "name" => "Ponta Grossa",
                "cep" => [ 84000001, 84129999 ],
                "ibge" => 4119905
            ]),
            "4119954" => new Map([
                "name" => "Pontal do Paraná",
                "cep" => [ 83255000, 83259999 ],
                "ibge" => 4119954
            ]),
            "4120002" => new Map([
                "name" => "Porecatu",
                "cep" => [ 86160000, 86164999 ],
                "ibge" => 4120002
            ]),
            "4120101" => new Map([
                "name" => "Porto Amazonas",
                "cep" => [ 84140000, 84144999 ],
                "ibge" => 4120101
            ]),
            "4120150" => new Map([
                "name" => "Porto Barreiro",
                "cep" => [ 85345000, 85349999 ],
                "ibge" => 4120150
            ]),
            "4120200" => new Map([
                "name" => "Porto Rico",
                "cep" => [ 87950000, 87954999 ],
                "ibge" => 4120200
            ]),
            "4120309" => new Map([
                "name" => "Porto Vitória",
                "cep" => [ 84615000, 84619999 ],
                "ibge" => 4120309
            ]),
            "4120333" => new Map([
                "name" => "Prado Ferreira",
                "cep" => [ 86618000, 86619999 ],
                "ibge" => 4120333
            ]),
            "4120358" => new Map([
                "name" => "Pranchita",
                "cep" => [ 85730000, 85739999 ],
                "ibge" => 4120358
            ]),
            "4120408" => new Map([
                "name" => "Presidente Castelo Branco",
                "cep" => [ 87180000, 87184999 ],
                "ibge" => 4120408
            ]),
            "4120507" => new Map([
                "name" => "Primeiro de Maio",
                "cep" => [ 86140000, 86149999 ],
                "ibge" => 4120507
            ]),
            "4120606" => new Map([
                "name" => "Prudentópolis",
                "cep" => [ 84400000, 84429999 ],
                "ibge" => 4120606
            ]),
            "4120655" => new Map([
                "name" => "Quarto Centenário",
                "cep" => [ 87365000, 87369999 ],
                "ibge" => 4120655
            ]),
            "4120705" => new Map([
                "name" => "Quatiguá",
                "cep" => [ 86450000, 86454999 ],
                "ibge" => 4120705
            ]),
            "4120804" => new Map([
                "name" => "Quatro Barras",
                "cep" => [ 83420000, 83429999 ],
                "ibge" => 4120804
            ]),
            "4120853" => new Map([
                "name" => "Quatro Pontes",
                "cep" => [ 85940000, 85944999 ],
                "ibge" => 4120853
            ]),
            "4120903" => new Map([
                "name" => "Quedas do Iguaçu",
                "cep" => [ 85460000, 85464999 ],
                "ibge" => 4120903
            ]),
            "4121000" => new Map([
                "name" => "Querência do Norte",
                "cep" => [ 87930000, 87949999 ],
                "ibge" => 4121000
            ]),
            "4121109" => new Map([
                "name" => "Quinta do Sol",
                "cep" => [ 87265000, 87269999 ],
                "ibge" => 4121109
            ]),
            "4121208" => new Map([
                "name" => "Quitandinha",
                "cep" => [ 83840000, 83849999 ],
                "ibge" => 4121208
            ]),
            "4121257" => new Map([
                "name" => "Ramilândia",
                "cep" => [ 85888000, 85889999 ],
                "ibge" => 4121257
            ]),
            "4121307" => new Map([
                "name" => "Rancho Alegre",
                "cep" => [ 86290000, 86299999 ],
                "ibge" => 4121307
            ]),
            "4121356" => new Map([
                "name" => "Rancho Alegre D'Oeste",
                "cep" => [ 87395000, 87399999 ],
                "ibge" => 4121356
            ]),
            "4121406" => new Map([
                "name" => "Realeza",
                "cep" => [ 85770000, 85779999 ],
                "ibge" => 4121406
            ]),
            "4121505" => new Map([
                "name" => "Rebouças",
                "cep" => [ 84550000, 84559999 ],
                "ibge" => 4121505
            ]),
            "4121604" => new Map([
                "name" => "Renascença",
                "cep" => [ 85610000, 85614999 ],
                "ibge" => 4121604
            ]),
            "4121703" => new Map([
                "name" => "Reserva",
                "cep" => [ 84320000, 84344999 ],
                "ibge" => 4121703
            ]),
            "4121752" => new Map([
                "name" => "Reserva do Iguaçu",
                "cep" => [ 85195000, 85199999 ],
                "ibge" => 4121752
            ]),
            "4121802" => new Map([
                "name" => "Ribeirão Claro",
                "cep" => [ 86410000, 86419999 ],
                "ibge" => 4121802
            ]),
            "4121901" => new Map([
                "name" => "Ribeirão do Pinhal",
                "cep" => [ 86490000, 86599999 ],
                "ibge" => 4121901
            ]),
            "4122008" => new Map([
                "name" => "Rio Azul",
                "cep" => [ 84560000, 84569999 ],
                "ibge" => 4122008
            ]),
            "4122107" => new Map([
                "name" => "Rio Bom",
                "cep" => [ 86830000, 86839999 ],
                "ibge" => 4122107
            ]),
            "4122156" => new Map([
                "name" => "Rio Bonito do Iguaçu",
                "cep" => [ 85340000, 85344999 ],
                "ibge" => 4122156
            ]),
            "4122172" => new Map([
                "name" => "Rio Branco do Ivaí",
                "cep" => [ 86848000, 86849999 ],
                "ibge" => 4122172
            ]),
            "4122206" => new Map([
                "name" => "Rio Branco do Sul",
                "cep" => [ 83540000, 83559999 ],
                "ibge" => 4122206
            ]),
            "4122305" => new Map([
                "name" => "Rio Negro",
                "cep" => [ 83880000, 83899999 ],
                "ibge" => 4122305
            ]),
            "4122404" => new Map([
                "name" => "Rolândia",
                "cep" => [ 86600001, 86609999 ],
                "ibge" => 4122404
            ]),
            "4122503" => new Map([
                "name" => "Roncador",
                "cep" => [ 87320000, 87324999 ],
                "ibge" => 4122503
            ]),
            "4122602" => new Map([
                "name" => "Rondon",
                "cep" => [ 87800000, 87809999 ],
                "ibge" => 4122602
            ]),
            "4122651" => new Map([
                "name" => "Rosário do Ivaí",
                "cep" => [ 86850000, 86854999 ],
                "ibge" => 4122651
            ]),
            "4122701" => new Map([
                "name" => "Sabáudia",
                "cep" => [ 86720000, 86729999 ],
                "ibge" => 4122701
            ]),
            "4122800" => new Map([
                "name" => "Salgado Filho",
                "cep" => [ 85620000, 85627999 ],
                "ibge" => 4122800
            ]),
            "4122909" => new Map([
                "name" => "Salto do Itararé",
                "cep" => [ 84945000, 84949999 ],
                "ibge" => 4122909
            ]),
            "4123006" => new Map([
                "name" => "Salto do Lontra",
                "cep" => [ 85670000, 85679999 ],
                "ibge" => 4123006
            ]),
            "4123105" => new Map([
                "name" => "Santa Amélia",
                "cep" => [ 86370000, 86374999 ],
                "ibge" => 4123105
            ]),
            "4123204" => new Map([
                "name" => "Santa Cecília do Pavão",
                "cep" => [ 86225000, 86229999 ],
                "ibge" => 4123204
            ]),
            "4123303" => new Map([
                "name" => "Santa Cruz de Monte Castelo",
                "cep" => [ 87920000, 87929999 ],
                "ibge" => 4123303
            ]),
            "4123402" => new Map([
                "name" => "Santa Fé",
                "cep" => [ 86770000, 86779999 ],
                "ibge" => 4123402
            ]),
            "4123501" => new Map([
                "name" => "Santa Helena",
                "cep" => [ 85892000, 85895999 ],
                "ibge" => 4123501
            ]),
            "4123600" => new Map([
                "name" => "Santa Inês",
                "cep" => [ 86660000, 86669999 ],
                "ibge" => 4123600
            ]),
            "4123709" => new Map([
                "name" => "Santa Isabel do Ivaí",
                "cep" => [ 87910000, 87914999 ],
                "ibge" => 4123709
            ]),
            "4123808" => new Map([
                "name" => "Santa Izabel do Oeste",
                "cep" => [ 85650000, 85659999 ],
                "ibge" => 4123808
            ]),
            "4123824" => new Map([
                "name" => "Santa Lúcia",
                "cep" => [ 85795000, 85799999 ],
                "ibge" => 4123824
            ]),
            "4123857" => new Map([
                "name" => "Santa Maria do Oeste",
                "cep" => [ 85230000, 85239999 ],
                "ibge" => 4123857
            ]),
            "4123907" => new Map([
                "name" => "Santa Mariana",
                "cep" => [ 86350000, 86359999 ],
                "ibge" => 4123907
            ]),
            "4123956" => new Map([
                "name" => "Santa Mônica",
                "cep" => [ 87915000, 87919999 ],
                "ibge" => 4123956
            ]),
            "4124020" => new Map([
                "name" => "Santa Tereza do Oeste",
                "cep" => [ 85825000, 85825999 ],
                "ibge" => 4124020
            ]),
            "4124053" => new Map([
                "name" => "Santa Terezinha de Itaipu",
                "cep" => [ 85875000, 85876999 ],
                "ibge" => 4124053
            ]),
            "4124004" => new Map([
                "name" => "Santana do Itararé",
                "cep" => [ 84970000, 84979999 ],
                "ibge" => 4124004
            ]),
            "4124103" => new Map([
                "name" => "Santo Antônio da Platina",
                "cep" => [ 86430000, 86449999 ],
                "ibge" => 4124103
            ]),
            "4124202" => new Map([
                "name" => "Santo Antônio do Caiuá",
                "cep" => [ 87730000, 87739999 ],
                "ibge" => 4124202
            ]),
            "4124301" => new Map([
                "name" => "Santo Antônio do Paraíso",
                "cep" => [ 86315000, 86319999 ],
                "ibge" => 4124301
            ]),
            "4124400" => new Map([
                "name" => "Santo Antônio do Sudoeste",
                "cep" => [ 85710000, 85726999 ],
                "ibge" => 4124400
            ]),
            "4124509" => new Map([
                "name" => "Santo Inácio",
                "cep" => [ 86650000, 86659999 ],
                "ibge" => 4124509
            ]),
            "4124608" => new Map([
                "name" => "São Carlos do Ivaí",
                "cep" => [ 87770000, 87779999 ],
                "ibge" => 4124608
            ]),
            "4124707" => new Map([
                "name" => "São Jerônimo da Serra",
                "cep" => [ 86270000, 86279999 ],
                "ibge" => 4124707
            ]),
            "4124806" => new Map([
                "name" => "São João",
                "cep" => [ 85570000, 85574999 ],
                "ibge" => 4124806
            ]),
            "4124905" => new Map([
                "name" => "São João do Caiuá",
                "cep" => [ 87740000, 87749999 ],
                "ibge" => 4124905
            ]),
            "4125001" => new Map([
                "name" => "São João do Ivaí",
                "cep" => [ 86930000, 86934999 ],
                "ibge" => 4125001
            ]),
            "4125100" => new Map([
                "name" => "São João do Triunfo",
                "cep" => [ 84150000, 84159999 ],
                "ibge" => 4125100
            ]),
            "4125308" => new Map([
                "name" => "São Jorge do Ivaí",
                "cep" => [ 87190000, 87199999 ],
                "ibge" => 4125308
            ]),
            "4125357" => new Map([
                "name" => "São Jorge do Patrocínio",
                "cep" => [ 87555000, 87559999 ],
                "ibge" => 4125357
            ]),
            "4125209" => new Map([
                "name" => "São Jorge D'Oeste",
                "cep" => [ 85575000, 85579999 ],
                "ibge" => 4125209
            ]),
            "4125407" => new Map([
                "name" => "São José da Boa Vista",
                "cep" => [ 84980000, 84989999 ],
                "ibge" => 4125407
            ]),
            "4125456" => new Map([
                "name" => "São José das Palmeiras",
                "cep" => [ 85898000, 85899999 ],
                "ibge" => 4125456
            ]),
            "4125506" => new Map([
                "name" => "São José dos Pinhais",
                "cep" => [ 83000001, 83189999 ],
                "ibge" => 4125506
            ]),
            "4125555" => new Map([
                "name" => "São Manoel do Paraná",
                "cep" => [ 87215000, 87219999 ],
                "ibge" => 4125555
            ]),
            "4125605" => new Map([
                "name" => "São Mateus do Sul",
                "cep" => [ 83900000, 83979999 ],
                "ibge" => 4125605
            ]),
            "4125704" => new Map([
                "name" => "São Miguel do Iguaçu",
                "cep" => [ 85877000, 85879999 ],
                "ibge" => 4125704
            ]),
            "4125753" => new Map([
                "name" => "São Pedro do Iguaçu",
                "cep" => [ 85929000, 85929999 ],
                "ibge" => 4125753
            ]),
            "4125803" => new Map([
                "name" => "São Pedro do Ivaí",
                "cep" => [ 86945000, 86949999 ],
                "ibge" => 4125803
            ]),
            "4125902" => new Map([
                "name" => "São Pedro do Paraná",
                "cep" => [ 87955000, 87959999 ],
                "ibge" => 4125902
            ]),
            "4126009" => new Map([
                "name" => "São Sebastião da Amoreira",
                "cep" => [ 86240000, 86249999 ],
                "ibge" => 4126009
            ]),
            "4126108" => new Map([
                "name" => "São Tomé",
                "cep" => [ 87220000, 87224999 ],
                "ibge" => 4126108
            ]),
            "4126207" => new Map([
                "name" => "Sapopema",
                "cep" => [ 84290000, 84299999 ],
                "ibge" => 4126207
            ]),
            "4126256" => new Map([
                "name" => "Sarandi",
                "cep" => [ 87110001, 87119999 ],
                "ibge" => 4126256
            ]),
            "4126272" => new Map([
                "name" => "Saudade do Iguaçu",
                "cep" => [ 85568000, 85569999 ],
                "ibge" => 4126272
            ]),
            "4126306" => new Map([
                "name" => "Sengés",
                "cep" => [ 84220000, 84239999 ],
                "ibge" => 4126306
            ]),
            "4126355" => new Map([
                "name" => "Serranópolis do Iguaçu",
                "cep" => [ 85885000, 85886999 ],
                "ibge" => 4126355
            ]),
            "4126405" => new Map([
                "name" => "Sertaneja",
                "cep" => [ 86340000, 86349999 ],
                "ibge" => 4126405
            ]),
            "4126504" => new Map([
                "name" => "Sertanópolis",
                "cep" => [ 86170000, 86179999 ],
                "ibge" => 4126504
            ]),
            "4126603" => new Map([
                "name" => "Siqueira Campos",
                "cep" => [ 84940000, 84944999 ],
                "ibge" => 4126603
            ]),
            "4126652" => new Map([
                "name" => "Sulina",
                "cep" => [ 85565000, 85567999 ],
                "ibge" => 4126652
            ]),
            "4126678" => new Map([
                "name" => "Tamarana",
                "cep" => [ 86125000, 86129999 ],
                "ibge" => 4126678
            ]),
            "4126702" => new Map([
                "name" => "Tamboara",
                "cep" => [ 87760000, 87769999 ],
                "ibge" => 4126702
            ]),
            "4126801" => new Map([
                "name" => "Tapejara",
                "cep" => [ 87430000, 87449999 ],
                "ibge" => 4126801
            ]),
            "4126900" => new Map([
                "name" => "Tapira",
                "cep" => [ 87830000, 87839999 ],
                "ibge" => 4126900
            ]),
            "4127007" => new Map([
                "name" => "Teixeira Soares",
                "cep" => [ 84530000, 84534999 ],
                "ibge" => 4127007
            ]),
            "4127106" => new Map([
                "name" => "Telêmaco Borba",
                "cep" => [ 84260001, 84279999 ],
                "ibge" => 4127106
            ]),
            "4127205" => new Map([
                "name" => "Terra Boa",
                "cep" => [ 87240000, 87249999 ],
                "ibge" => 4127205
            ]),
            "4127304" => new Map([
                "name" => "Terra Rica",
                "cep" => [ 87890000, 87899999 ],
                "ibge" => 4127304
            ]),
            "4127403" => new Map([
                "name" => "Terra Roxa",
                "cep" => [ 85990000, 85997999 ],
                "ibge" => 4127403
            ]),
            "4127502" => new Map([
                "name" => "Tibagi",
                "cep" => [ 84300000, 84319999 ],
                "ibge" => 4127502
            ]),
            "4127601" => new Map([
                "name" => "Tijucas do Sul",
                "cep" => [ 83190000, 83199999 ],
                "ibge" => 4127601
            ]),
            "4127700" => new Map([
                "name" => "Toledo",
                "cep" => [ 85900001, 85928999 ],
                "ibge" => 4127700
            ]),
            "4127809" => new Map([
                "name" => "Tomazina",
                "cep" => [ 84935000, 84939999 ],
                "ibge" => 4127809
            ]),
            "4127858" => new Map([
                "name" => "Três Barras do Paraná",
                "cep" => [ 85485000, 85499999 ],
                "ibge" => 4127858
            ]),
            "4127882" => new Map([
                "name" => "Tunas do Paraná",
                "cep" => [ 83480000, 83489999 ],
                "ibge" => 4127882
            ]),
            "4127908" => new Map([
                "name" => "Tuneiras do Oeste",
                "cep" => [ 87450000, 87469999 ],
                "ibge" => 4127908
            ]),
            "4127957" => new Map([
                "name" => "Tupãssi",
                "cep" => [ 85945000, 85947999 ],
                "ibge" => 4127957
            ]),
            "4127965" => new Map([
                "name" => "Turvo",
                "cep" => [ 85150000, 85154999 ],
                "ibge" => 4127965
            ]),
            "4128005" => new Map([
                "name" => "Ubiratã",
                "cep" => [ 85440000, 85449999 ],
                "ibge" => 4128005
            ]),
            "4128104" => new Map([
                "name" => "Umuarama",
                "cep" => [ 87500001, 87524999 ],
                "ibge" => 4128104
            ]),
            "4128203" => new Map([
                "name" => "União da Vitória",
                "cep" => [ 84600001, 84614999 ],
                "ibge" => 4128203
            ]),
            "4128302" => new Map([
                "name" => "Uniflor",
                "cep" => [ 87640000, 87649999 ],
                "ibge" => 4128302
            ]),
            "4128401" => new Map([
                "name" => "Uraí",
                "cep" => [ 86280000, 86289999 ],
                "ibge" => 4128401
            ]),
            "4128534" => new Map([
                "name" => "Ventania",
                "cep" => [ 84345000, 84349999 ],
                "ibge" => 4128534
            ]),
            "4128559" => new Map([
                "name" => "Vera Cruz do Oeste",
                "cep" => [ 85845000, 85849999 ],
                "ibge" => 4128559
            ]),
            "4128609" => new Map([
                "name" => "Verê",
                "cep" => [ 85585000, 85597999 ],
                "ibge" => 4128609
            ]),
            "4128658" => new Map([
                "name" => "Virmond",
                "cep" => [ 85390000, 85399999 ],
                "ibge" => 4128658
            ]),
            "4128708" => new Map([
                "name" => "Vitorino",
                "cep" => [ 85520000, 85524999 ],
                "ibge" => 4128708
            ]),
            "4128500" => new Map([
                "name" => "Wenceslau Braz",
                "cep" => [ 84950000, 84969999 ],
                "ibge" => 4128500
            ]),
            "4128807" => new Map([
                "name" => "Xambrê",
                "cep" => [ 87535000, 87537999 ],
                "ibge" => 4128807
            ])
        ]);

        return $map;
    }
}