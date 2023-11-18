<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class RS implements ICitiesInfo
{
    public static int $numberCities = 497;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(RS::$numberCities);
        $map->putAll([
            "4300034" => new Map([
                "name" => "Aceguá",
                "zipCode" => [ 96445000, 96449999 ],
                "ibge" => 4300034
            ]),
            "4300059" => new Map([
                "name" => "Água Santa",
                "zipCode" => [ 99965000, 99969999 ],
                "ibge" => 4300059
            ]),
            "4300109" => new Map([
                "name" => "Agudo",
                "zipCode" => [ 96540000, 96544999 ],
                "ibge" => 4300109
            ]),
            "4300208" => new Map([
                "name" => "Ajuricaba",
                "zipCode" => [ 98750000, 98757999 ],
                "ibge" => 4300208
            ]),
            "4300307" => new Map([
                "name" => "Alecrim",
                "zipCode" => [ 98950000, 98954999 ],
                "ibge" => 4300307
            ]),
            "4300406" => new Map([
                "name" => "Alegrete",
                "zipCode" => [ 97540001, 97559999 ],
                "ibge" => 4300406
            ]),
            "4300455" => new Map([
                "name" => "Alegria",
                "zipCode" => [ 98905000, 98909999 ],
                "ibge" => 4300455
            ]),
            "4300471" => new Map([
                "name" => "Almirante Tamandaré do Sul",
                "zipCode" => [ 99523000, 99524999 ],
                "ibge" => 4300471
            ]),
            "4300505" => new Map([
                "name" => "Alpestre",
                "zipCode" => [ 98480000, 98499999 ],
                "ibge" => 4300505
            ]),
            "4300554" => new Map([
                "name" => "Alto Alegre",
                "zipCode" => [ 99430000, 99434999 ],
                "ibge" => 4300554
            ]),
            "4300570" => new Map([
                "name" => "Alto Feliz",
                "zipCode" => [ 95773000, 95774999 ],
                "ibge" => 4300570
            ]),
            "4300604" => new Map([
                "name" => "Alvorada",
                "zipCode" => [ 94800001, 94899999 ],
                "ibge" => 4300604
            ]),
            "4300638" => new Map([
                "name" => "Amaral Ferrador",
                "zipCode" => [ 96635000, 96639999 ],
                "ibge" => 4300638
            ]),
            "4300646" => new Map([
                "name" => "Ametista do Sul",
                "zipCode" => [ 98465000, 98469999 ],
                "ibge" => 4300646
            ]),
            "4300661" => new Map([
                "name" => "André da Rocha",
                "zipCode" => [ 95310000, 95314999 ],
                "ibge" => 4300661
            ]),
            "4300703" => new Map([
                "name" => "Anta Gorda",
                "zipCode" => [ 95980000, 95984999 ],
                "ibge" => 4300703
            ]),
            "4300802" => new Map([
                "name" => "Antônio Prado",
                "zipCode" => [ 95250000, 95254999 ],
                "ibge" => 4300802
            ]),
            "4300851" => new Map([
                "name" => "Arambaré",
                "zipCode" => [ 96178000, 96179999 ],
                "ibge" => 4300851
            ]),
            "4300877" => new Map([
                "name" => "Araricá",
                "zipCode" => [ 93880000, 93889999 ],
                "ibge" => 4300877
            ]),
            "4300901" => new Map([
                "name" => "Aratiba",
                "zipCode" => [ 99770000, 99789999 ],
                "ibge" => 4300901
            ]),
            "4301008" => new Map([
                "name" => "Arroio do Meio",
                "zipCode" => [ 95940000, 95944999 ],
                "ibge" => 4301008
            ]),
            "4301073" => new Map([
                "name" => "Arroio do Padre",
                "zipCode" => [ 96155000, 96159999 ],
                "ibge" => 4301073
            ]),
            "4301057" => new Map([
                "name" => "Arroio do Sal",
                "zipCode" => [ 95585000, 95587999 ],
                "ibge" => 4301057
            ]),
            "4301206" => new Map([
                "name" => "Arroio do Tigre",
                "zipCode" => [ 96950000, 96989999 ],
                "ibge" => 4301206
            ]),
            "4301107" => new Map([
                "name" => "Arroio dos Ratos",
                "zipCode" => [ 96740000, 96744999 ],
                "ibge" => 4301107
            ]),
            "4301305" => new Map([
                "name" => "Arroio Grande",
                "zipCode" => [ 96330000, 96359999 ],
                "ibge" => 4301305
            ]),
            "4301404" => new Map([
                "name" => "Arvorezinha",
                "zipCode" => [ 95995000, 95996999 ],
                "ibge" => 4301404
            ]),
            "4301503" => new Map([
                "name" => "Augusto Pestana",
                "zipCode" => [ 98740000, 98749999 ],
                "ibge" => 4301503
            ]),
            "4301552" => new Map([
                "name" => "Áurea",
                "zipCode" => [ 99835000, 99837999 ],
                "ibge" => 4301552
            ]),
            "4301602" => new Map([
                "name" => "Bagé",
                "zipCode" => [ 96400001, 96444999 ],
                "ibge" => 4301602
            ]),
            "4301636" => new Map([
                "name" => "Balneário Pinhal",
                "zipCode" => [ 95599000, 95599999 ],
                "ibge" => 4301636
            ]),
            "4301651" => new Map([
                "name" => "Barão",
                "zipCode" => [ 95730000, 95734999 ],
                "ibge" => 4301651
            ]),
            "4301701" => new Map([
                "name" => "Barão de Cotegipe",
                "zipCode" => [ 99740000, 99749999 ],
                "ibge" => 4301701
            ]),
            "4301750" => new Map([
                "name" => "Barão do Triunfo",
                "zipCode" => [ 96735000, 96739999 ],
                "ibge" => 4301750
            ]),
            "4301859" => new Map([
                "name" => "Barra do Guarita",
                "zipCode" => [ 98530000, 98534999 ],
                "ibge" => 4301859
            ]),
            "4301875" => new Map([
                "name" => "Barra do Quaraí",
                "zipCode" => [ 97538000, 97539999 ],
                "ibge" => 4301875
            ]),
            "4301909" => new Map([
                "name" => "Barra do Ribeiro",
                "zipCode" => [ 92870000, 92899999 ],
                "ibge" => 4301909
            ]),
            "4301925" => new Map([
                "name" => "Barra do Rio Azul",
                "zipCode" => [ 99795000, 99799999 ],
                "ibge" => 4301925
            ]),
            "4301958" => new Map([
                "name" => "Barra Funda",
                "zipCode" => [ 99585000, 99589999 ],
                "ibge" => 4301958
            ]),
            "4301800" => new Map([
                "name" => "Barracão",
                "zipCode" => [ 95370000, 95379999 ],
                "ibge" => 4301800
            ]),
            "4302006" => new Map([
                "name" => "Barros Cassal",
                "zipCode" => [ 99360000, 99369999 ],
                "ibge" => 4302006
            ]),
            "4302055" => new Map([
                "name" => "Benjamin Constant do Sul",
                "zipCode" => [ 99650000, 99654999 ],
                "ibge" => 4302055
            ]),
            "4302105" => new Map([
                "name" => "Bento Gonçalves",
                "zipCode" => [ 95700001, 95714999 ],
                "ibge" => 4302105
            ]),
            "4302154" => new Map([
                "name" => "Boa Vista das Missões",
                "zipCode" => [ 98335000, 98337999 ],
                "ibge" => 4302154
            ]),
            "4302204" => new Map([
                "name" => "Boa Vista do Buricá",
                "zipCode" => [ 98918000, 98918999 ],
                "ibge" => 4302204
            ]),
            "4302220" => new Map([
                "name" => "Boa Vista do Cadeado",
                "zipCode" => [ 98118000, 98119999 ],
                "ibge" => 4302220
            ]),
            "4302238" => new Map([
                "name" => "Boa Vista do Incra",
                "zipCode" => [ 98120000, 98124999 ],
                "ibge" => 4302238
            ]),
            "4302253" => new Map([
                "name" => "Boa Vista do Sul",
                "zipCode" => [ 95727000, 95729999 ],
                "ibge" => 4302253
            ]),
            "4302303" => new Map([
                "name" => "Bom Jesus",
                "zipCode" => [ 95290000, 95299999 ],
                "ibge" => 4302303
            ]),
            "4302352" => new Map([
                "name" => "Bom Princípio",
                "zipCode" => [ 95765000, 95767999 ],
                "ibge" => 4302352
            ]),
            "4302378" => new Map([
                "name" => "Bom Progresso",
                "zipCode" => [ 98575000, 98579999 ],
                "ibge" => 4302378
            ]),
            "4302402" => new Map([
                "name" => "Bom Retiro do Sul",
                "zipCode" => [ 95870000, 95874999 ],
                "ibge" => 4302402
            ]),
            "4302451" => new Map([
                "name" => "Boqueirão do Leão",
                "zipCode" => [ 95920000, 95922999 ],
                "ibge" => 4302451
            ]),
            "4302501" => new Map([
                "name" => "Bossoroca",
                "zipCode" => [ 97850000, 97869999 ],
                "ibge" => 4302501
            ]),
            "4302584" => new Map([
                "name" => "Bozano",
                "zipCode" => [ 98733000, 98734999 ],
                "ibge" => 4302584
            ]),
            "4302600" => new Map([
                "name" => "Braga",
                "zipCode" => [ 98560000, 98569999 ],
                "ibge" => 4302600
            ]),
            "4302659" => new Map([
                "name" => "Brochier",
                "zipCode" => [ 95790000, 95792999 ],
                "ibge" => 4302659
            ]),
            "4302709" => new Map([
                "name" => "Butiá",
                "zipCode" => [ 96750000, 96754999 ],
                "ibge" => 4302709
            ]),
            "4302808" => new Map([
                "name" => "Caçapava do Sul",
                "zipCode" => [ 96570000, 96589999 ],
                "ibge" => 4302808
            ]),
            "4302907" => new Map([
                "name" => "Cacequi",
                "zipCode" => [ 97450000, 97499999 ],
                "ibge" => 4302907
            ]),
            "4303004" => new Map([
                "name" => "Cachoeira do Sul",
                "zipCode" => [ 96500001, 96529999 ],
                "ibge" => 4303004
            ]),
            "4303103" => new Map([
                "name" => "Cachoeirinha",
                "zipCode" => [ 94900001, 94999999 ],
                "ibge" => 4303103
            ]),
            "4303202" => new Map([
                "name" => "Cacique Doble",
                "zipCode" => [ 99860000, 99869999 ],
                "ibge" => 4303202
            ]),
            "4303301" => new Map([
                "name" => "Caibaté",
                "zipCode" => [ 97930000, 97934999 ],
                "ibge" => 4303301
            ]),
            "4303400" => new Map([
                "name" => "Caiçara",
                "zipCode" => [ 98440000, 98449999 ],
                "ibge" => 4303400
            ]),
            "4303509" => new Map([
                "name" => "Camaquã",
                "zipCode" => [ 96780001, 96799999 ],
                "ibge" => 4303509
            ]),
            "4303558" => new Map([
                "name" => "Camargo",
                "zipCode" => [ 99165000, 99169999 ],
                "ibge" => 4303558
            ]),
            "4303608" => new Map([
                "name" => "Cambará do Sul",
                "zipCode" => [ 95480000, 95499999 ],
                "ibge" => 4303608
            ]),
            "4303673" => new Map([
                "name" => "Campestre da Serra",
                "zipCode" => [ 95255000, 95259999 ],
                "ibge" => 4303673
            ]),
            "4303707" => new Map([
                "name" => "Campina das Missões",
                "zipCode" => [ 98975000, 98979999 ],
                "ibge" => 4303707
            ]),
            "4303806" => new Map([
                "name" => "Campinas do Sul",
                "zipCode" => [ 99660000, 99664999 ],
                "ibge" => 4303806
            ]),
            "4303905" => new Map([
                "name" => "Campo Bom",
                "zipCode" => [ 93700000, 93799999 ],
                "ibge" => 4303905
            ]),
            "4304002" => new Map([
                "name" => "Campo Novo",
                "zipCode" => [ 98570000, 98574999 ],
                "ibge" => 4304002
            ]),
            "4304101" => new Map([
                "name" => "Campos Borges",
                "zipCode" => [ 99435000, 99439999 ],
                "ibge" => 4304101
            ]),
            "4304200" => new Map([
                "name" => "Candelária",
                "zipCode" => [ 96930000, 96949999 ],
                "ibge" => 4304200
            ]),
            "4304309" => new Map([
                "name" => "Cândido Godói",
                "zipCode" => [ 98970000, 98974999 ],
                "ibge" => 4304309
            ]),
            "4304358" => new Map([
                "name" => "Candiota",
                "zipCode" => [ 96495000, 96499999 ],
                "ibge" => 4304358
            ]),
            "4304408" => new Map([
                "name" => "Canela",
                "zipCode" => [ 95680001, 95689999 ],
                "ibge" => 4304408
            ]),
            "4304507" => new Map([
                "name" => "Canguçu",
                "zipCode" => [ 96600000, 96609999 ],
                "ibge" => 4304507
            ]),
            "4304606" => new Map([
                "name" => "Canoas",
                "zipCode" => [ 92000001, 92479999 ],
                "ibge" => 4304606
            ]),
            "4304614" => new Map([
                "name" => "Canudos do Vale",
                "zipCode" => [ 95933000, 95934999 ],
                "ibge" => 4304614
            ]),
            "4304622" => new Map([
                "name" => "Capão Bonito do Sul",
                "zipCode" => [ 95308000, 95309999 ],
                "ibge" => 4304622
            ]),
            "4304630" => new Map([
                "name" => "Capão da Canoa",
                "zipCode" => [ 95555000, 95559999 ],
                "ibge" => 4304630
            ]),
            "4304655" => new Map([
                "name" => "Capão do Cipó",
                "zipCode" => [ 97753000, 97754999 ],
                "ibge" => 4304655
            ]),
            "4304663" => new Map([
                "name" => "Capão do Leão",
                "zipCode" => [ 96160000, 96169999 ],
                "ibge" => 4304663
            ]),
            "4304689" => new Map([
                "name" => "Capela de Santana",
                "zipCode" => [ 95745000, 95747999 ],
                "ibge" => 4304689
            ]),
            "4304697" => new Map([
                "name" => "Capitão",
                "zipCode" => [ 95935000, 95936999 ],
                "ibge" => 4304697
            ]),
            "4304671" => new Map([
                "name" => "Capivari do Sul",
                "zipCode" => [ 95552000, 95554999 ],
                "ibge" => 4304671
            ]),
            "4304713" => new Map([
                "name" => "Caraá",
                "zipCode" => [ 95515000, 95519999 ],
                "ibge" => 4304713
            ]),
            "4304705" => new Map([
                "name" => "Carazinho",
                "zipCode" => [ 99500000, 99522999 ],
                "ibge" => 4304705
            ]),
            "4304804" => new Map([
                "name" => "Carlos Barbosa",
                "zipCode" => [ 95185000, 95189999 ],
                "ibge" => 4304804
            ]),
            "4304853" => new Map([
                "name" => "Carlos Gomes",
                "zipCode" => [ 99825000, 99829999 ],
                "ibge" => 4304853
            ]),
            "4304903" => new Map([
                "name" => "Casca",
                "zipCode" => [ 99260000, 99264999 ],
                "ibge" => 4304903
            ]),
            "4304952" => new Map([
                "name" => "Caseiros",
                "zipCode" => [ 95315000, 95319999 ],
                "ibge" => 4304952
            ]),
            "4305009" => new Map([
                "name" => "Catuípe",
                "zipCode" => [ 98770000, 98779999 ],
                "ibge" => 4305009
            ]),
            "4305108" => new Map([
                "name" => "Caxias do Sul",
                "zipCode" => [ 95000001, 95149999 ],
                "ibge" => 4305108
            ]),
            "4305116" => new Map([
                "name" => "Centenário",
                "zipCode" => [ 99838000, 99839999 ],
                "ibge" => 4305116
            ]),
            "4305124" => new Map([
                "name" => "Cerrito",
                "zipCode" => [ 96395000, 96399999 ],
                "ibge" => 4305124
            ]),
            "4305132" => new Map([
                "name" => "Cerro Branco",
                "zipCode" => [ 96535000, 96539999 ],
                "ibge" => 4305132
            ]),
            "4305157" => new Map([
                "name" => "Cerro Grande",
                "zipCode" => [ 98340000, 98344999 ],
                "ibge" => 4305157
            ]),
            "4305173" => new Map([
                "name" => "Cerro Grande do Sul",
                "zipCode" => [ 96770000, 96779999 ],
                "ibge" => 4305173
            ]),
            "4305207" => new Map([
                "name" => "Cerro Largo",
                "zipCode" => [ 97900000, 97919999 ],
                "ibge" => 4305207
            ]),
            "4305306" => new Map([
                "name" => "Chapada",
                "zipCode" => [ 99530000, 99559999 ],
                "ibge" => 4305306
            ]),
            "4305355" => new Map([
                "name" => "Charqueadas",
                "zipCode" => [ 96745000, 96749999 ],
                "ibge" => 4305355
            ]),
            "4305371" => new Map([
                "name" => "Charrua",
                "zipCode" => [ 99960000, 99964999 ],
                "ibge" => 4305371
            ]),
            "4305405" => new Map([
                "name" => "Chiapetta",
                "zipCode" => [ 98760000, 98764999 ],
                "ibge" => 4305405
            ]),
            "4305439" => new Map([
                "name" => "Chuí",
                "zipCode" => [ 96255000, 96269999 ],
                "ibge" => 4305439
            ]),
            "4305447" => new Map([
                "name" => "Chuvisca",
                "zipCode" => [ 96193000, 96194999 ],
                "ibge" => 4305447
            ]),
            "4305454" => new Map([
                "name" => "Cidreira",
                "zipCode" => [ 95595000, 95598999 ],
                "ibge" => 4305454
            ]),
            "4305504" => new Map([
                "name" => "Ciríaco",
                "zipCode" => [ 99970000, 99979999 ],
                "ibge" => 4305504
            ]),
            "4305587" => new Map([
                "name" => "Colinas",
                "zipCode" => [ 95895000, 95899999 ],
                "ibge" => 4305587
            ]),
            "4305603" => new Map([
                "name" => "Colorado",
                "zipCode" => [ 99460000, 99469999 ],
                "ibge" => 4305603
            ]),
            "4305702" => new Map([
                "name" => "Condor",
                "zipCode" => [ 98290000, 98299999 ],
                "ibge" => 4305702
            ]),
            "4305801" => new Map([
                "name" => "Constantina",
                "zipCode" => [ 99680000, 99686999 ],
                "ibge" => 4305801
            ]),
            "4305835" => new Map([
                "name" => "Coqueiro Baixo",
                "zipCode" => [ 95955000, 95959999 ],
                "ibge" => 4305835
            ]),
            "4305850" => new Map([
                "name" => "Coqueiros do Sul",
                "zipCode" => [ 99528000, 99529999 ],
                "ibge" => 4305850
            ]),
            "4305871" => new Map([
                "name" => "Coronel Barros",
                "zipCode" => [ 98735000, 98739999 ],
                "ibge" => 4305871
            ]),
            "4305900" => new Map([
                "name" => "Coronel Bicaco",
                "zipCode" => [ 98580000, 98589999 ],
                "ibge" => 4305900
            ]),
            "4305934" => new Map([
                "name" => "Coronel Pilar",
                "zipCode" => [ 95726000, 95726999 ],
                "ibge" => 4305934
            ]),
            "4305959" => new Map([
                "name" => "Cotiporã",
                "zipCode" => [ 95335000, 95339999 ],
                "ibge" => 4305959
            ]),
            "4305975" => new Map([
                "name" => "Coxilha",
                "zipCode" => [ 99145000, 99149999 ],
                "ibge" => 4305975
            ]),
            "4306007" => new Map([
                "name" => "Crissiumal",
                "zipCode" => [ 98640000, 98669999 ],
                "ibge" => 4306007
            ]),
            "4306056" => new Map([
                "name" => "Cristal",
                "zipCode" => [ 96195000, 96199999 ],
                "ibge" => 4306056
            ]),
            "4306072" => new Map([
                "name" => "Cristal do Sul",
                "zipCode" => [ 98368000, 98369999 ],
                "ibge" => 4306072
            ]),
            "4306106" => new Map([
                "name" => "Cruz Alta",
                "zipCode" => [ 98000001, 98059999 ],
                "ibge" => 4306106
            ]),
            "4306130" => new Map([
                "name" => "Cruzaltense",
                "zipCode" => [ 99665000, 99669999 ],
                "ibge" => 4306130
            ]),
            "4306205" => new Map([
                "name" => "Cruzeiro do Sul",
                "zipCode" => [ 95930000, 95932999 ],
                "ibge" => 4306205
            ]),
            "4306304" => new Map([
                "name" => "David Canabarro",
                "zipCode" => [ 99980000, 99989999 ],
                "ibge" => 4306304
            ]),
            "4306320" => new Map([
                "name" => "Derrubadas",
                "zipCode" => [ 98528000, 98529999 ],
                "ibge" => 4306320
            ]),
            "4306353" => new Map([
                "name" => "Dezesseis de Novembro",
                "zipCode" => [ 97845000, 97849999 ],
                "ibge" => 4306353
            ]),
            "4306379" => new Map([
                "name" => "Dilermando de Aguiar",
                "zipCode" => [ 97180000, 97184999 ],
                "ibge" => 4306379
            ]),
            "4306403" => new Map([
                "name" => "Dois Irmãos",
                "zipCode" => [ 93950000, 93989999 ],
                "ibge" => 4306403
            ]),
            "4306429" => new Map([
                "name" => "Dois Irmãos das Missões",
                "zipCode" => [ 98385000, 98389999 ],
                "ibge" => 4306429
            ]),
            "4306452" => new Map([
                "name" => "Dois Lajeados",
                "zipCode" => [ 99220000, 99239999 ],
                "ibge" => 4306452
            ]),
            "4306502" => new Map([
                "name" => "Dom Feliciano",
                "zipCode" => [ 96190000, 96192999 ],
                "ibge" => 4306502
            ]),
            "4306601" => new Map([
                "name" => "Dom Pedrito",
                "zipCode" => [ 96450000, 96459999 ],
                "ibge" => 4306601
            ]),
            "4306551" => new Map([
                "name" => "Dom Pedro de Alcântara",
                "zipCode" => [ 95568000, 95571999 ],
                "ibge" => 4306551
            ]),
            "4306700" => new Map([
                "name" => "Dona Francisca",
                "zipCode" => [ 97280000, 97299999 ],
                "ibge" => 4306700
            ]),
            "4306734" => new Map([
                "name" => "Doutor Maurício Cardoso",
                "zipCode" => [ 98925000, 98929999 ],
                "ibge" => 4306734
            ]),
            "4306759" => new Map([
                "name" => "Doutor Ricardo",
                "zipCode" => [ 95967000, 95969999 ],
                "ibge" => 4306759
            ]),
            "4306767" => new Map([
                "name" => "Eldorado do Sul",
                "zipCode" => [ 92990000, 92999999 ],
                "ibge" => 4306767
            ]),
            "4306809" => new Map([
                "name" => "Encantado",
                "zipCode" => [ 95960000, 95964999 ],
                "ibge" => 4306809
            ]),
            "4306908" => new Map([
                "name" => "Encruzilhada do Sul",
                "zipCode" => [ 96610000, 96634999 ],
                "ibge" => 4306908
            ]),
            "4306924" => new Map([
                "name" => "Engenho Velho",
                "zipCode" => [ 99698000, 99699999 ],
                "ibge" => 4306924
            ]),
            "4306957" => new Map([
                "name" => "Entre Rios do Sul",
                "zipCode" => [ 99645000, 99649999 ],
                "ibge" => 4306957
            ]),
            "4306932" => new Map([
                "name" => "Entre-Ijuís",
                "zipCode" => [ 98855000, 98859999 ],
                "ibge" => 4306932
            ]),
            "4306973" => new Map([
                "name" => "Erebango",
                "zipCode" => [ 99920000, 99924999 ],
                "ibge" => 4306973
            ]),
            "4307005" => new Map([
                "name" => "Erechim",
                "zipCode" => [ 99700001, 99717999 ],
                "ibge" => 4307005
            ]),
            "4307054" => new Map([
                "name" => "Ernestina",
                "zipCode" => [ 99140000, 99144999 ],
                "ibge" => 4307054
            ]),
            "4307203" => new Map([
                "name" => "Erval Grande",
                "zipCode" => [ 99750000, 99759999 ],
                "ibge" => 4307203
            ]),
            "4307302" => new Map([
                "name" => "Erval Seco",
                "zipCode" => [ 98390000, 98399999 ],
                "ibge" => 4307302
            ]),
            "4307401" => new Map([
                "name" => "Esmeralda",
                "zipCode" => [ 95380000, 95389999 ],
                "ibge" => 4307401
            ]),
            "4307450" => new Map([
                "name" => "Esperança do Sul",
                "zipCode" => [ 98635000, 98639999 ],
                "ibge" => 4307450
            ]),
            "4307500" => new Map([
                "name" => "Espumoso",
                "zipCode" => [ 99400000, 99429999 ],
                "ibge" => 4307500
            ]),
            "4307559" => new Map([
                "name" => "Estação",
                "zipCode" => [ 99930000, 99939999 ],
                "ibge" => 4307559
            ]),
            "4307609" => new Map([
                "name" => "Estância Velha",
                "zipCode" => [ 93600001, 93699999 ],
                "ibge" => 4307609
            ]),
            "4307708" => new Map([
                "name" => "Esteio",
                "zipCode" => [ 93250001, 93299999 ],
                "ibge" => 4307708
            ]),
            "4307807" => new Map([
                "name" => "Estrela",
                "zipCode" => [ 95880000, 95884999 ],
                "ibge" => 4307807
            ]),
            "4307815" => new Map([
                "name" => "Estrela Velha",
                "zipCode" => [ 96990000, 96999999 ],
                "ibge" => 4307815
            ]),
            "4307831" => new Map([
                "name" => "Eugênio de Castro",
                "zipCode" => [ 98860000, 98864999 ],
                "ibge" => 4307831
            ]),
            "4307864" => new Map([
                "name" => "Fagundes Varela",
                "zipCode" => [ 95333000, 95333999 ],
                "ibge" => 4307864
            ]),
            "4307906" => new Map([
                "name" => "Farroupilha",
                "zipCode" => [ 95170001, 95184999 ],
                "ibge" => 4307906
            ]),
            "4308003" => new Map([
                "name" => "Faxinal do Soturno",
                "zipCode" => [ 97220000, 97229999 ],
                "ibge" => 4308003
            ]),
            "4308052" => new Map([
                "name" => "Faxinalzinho",
                "zipCode" => [ 99655000, 99659999 ],
                "ibge" => 4308052
            ]),
            "4308078" => new Map([
                "name" => "Fazenda Vilanova",
                "zipCode" => [ 95875000, 95879999 ],
                "ibge" => 4308078
            ]),
            "4308102" => new Map([
                "name" => "Feliz",
                "zipCode" => [ 95770000, 95772999 ],
                "ibge" => 4308102
            ]),
            "4308201" => new Map([
                "name" => "Flores da Cunha",
                "zipCode" => [ 95270000, 95274999 ],
                "ibge" => 4308201
            ]),
            "4308250" => new Map([
                "name" => "Floriano Peixoto",
                "zipCode" => [ 99910000, 99919999 ],
                "ibge" => 4308250
            ]),
            "4308300" => new Map([
                "name" => "Fontoura Xavier",
                "zipCode" => [ 99370000, 99379999 ],
                "ibge" => 4308300
            ]),
            "4308409" => new Map([
                "name" => "Formigueiro",
                "zipCode" => [ 97210000, 97219999 ],
                "ibge" => 4308409
            ]),
            "4308433" => new Map([
                "name" => "Forquetinha",
                "zipCode" => [ 95937000, 95939999 ],
                "ibge" => 4308433
            ]),
            "4308458" => new Map([
                "name" => "Fortaleza dos Valos",
                "zipCode" => [ 98125000, 98129999 ],
                "ibge" => 4308458
            ]),
            "4308508" => new Map([
                "name" => "Frederico Westphalen",
                "zipCode" => [ 98400000, 98409999 ],
                "ibge" => 4308508
            ]),
            "4308607" => new Map([
                "name" => "Garibaldi",
                "zipCode" => [ 95720000, 95725999 ],
                "ibge" => 4308607
            ]),
            "4308656" => new Map([
                "name" => "Garruchos",
                "zipCode" => [ 97690000, 97699999 ],
                "ibge" => 4308656
            ]),
            "4308706" => new Map([
                "name" => "Gaurama",
                "zipCode" => [ 99830000, 99834999 ],
                "ibge" => 4308706
            ]),
            "4308805" => new Map([
                "name" => "General Câmara",
                "zipCode" => [ 95820000, 95832999 ],
                "ibge" => 4308805
            ]),
            "4308854" => new Map([
                "name" => "Gentil",
                "zipCode" => [ 99160000, 99164999 ],
                "ibge" => 4308854
            ]),
            "4308904" => new Map([
                "name" => "Getúlio Vargas",
                "zipCode" => [ 99900000, 99909999 ],
                "ibge" => 4308904
            ]),
            "4309001" => new Map([
                "name" => "Giruá",
                "zipCode" => [ 98870000, 98894999 ],
                "ibge" => 4309001
            ]),
            "4309050" => new Map([
                "name" => "Glorinha",
                "zipCode" => [ 94380000, 94399999 ],
                "ibge" => 4309050
            ]),
            "4309100" => new Map([
                "name" => "Gramado",
                "zipCode" => [ 95670001, 95679999 ],
                "ibge" => 4309100
            ]),
            "4309126" => new Map([
                "name" => "Gramado dos Loureiros",
                "zipCode" => [ 99605000, 99609999 ],
                "ibge" => 4309126
            ]),
            "4309159" => new Map([
                "name" => "Gramado Xavier",
                "zipCode" => [ 96875000, 96877999 ],
                "ibge" => 4309159
            ]),
            "4309209" => new Map([
                "name" => "Gravataí",
                "zipCode" => [ 94000001, 94379999 ],
                "ibge" => 4309209
            ]),
            "4309258" => new Map([
                "name" => "Guabiju",
                "zipCode" => [ 95355000, 95359999 ],
                "ibge" => 4309258
            ]),
            "4309308" => new Map([
                "name" => "Guaíba",
                "zipCode" => [ 92700001, 92849999 ],
                "ibge" => 4309308
            ]),
            "4309407" => new Map([
                "name" => "Guaporé",
                "zipCode" => [ 99200000, 99214999 ],
                "ibge" => 4309407
            ]),
            "4309506" => new Map([
                "name" => "Guarani das Missões",
                "zipCode" => [ 97950000, 97959999 ],
                "ibge" => 4309506
            ]),
            "4309555" => new Map([
                "name" => "Harmonia",
                "zipCode" => [ 95785000, 95789999 ],
                "ibge" => 4309555
            ]),
            "4307104" => new Map([
                "name" => "Herval",
                "zipCode" => [ 96310000, 96329999 ],
                "ibge" => 4307104
            ]),
            "4309571" => new Map([
                "name" => "Herveiras",
                "zipCode" => [ 96888000, 96889999 ],
                "ibge" => 4309571
            ]),
            "4309605" => new Map([
                "name" => "Horizontina",
                "zipCode" => [ 98920000, 98924999 ],
                "ibge" => 4309605
            ]),
            "4309654" => new Map([
                "name" => "Hulha Negra",
                "zipCode" => [ 96460000, 96469999 ],
                "ibge" => 4309654
            ]),
            "4309704" => new Map([
                "name" => "Humaitá",
                "zipCode" => [ 98670000, 98674999 ],
                "ibge" => 4309704
            ]),
            "4309753" => new Map([
                "name" => "Ibarama",
                "zipCode" => [ 96925000, 96929999 ],
                "ibge" => 4309753
            ]),
            "4309803" => new Map([
                "name" => "Ibiaçá",
                "zipCode" => [ 99940000, 99949999 ],
                "ibge" => 4309803
            ]),
            "4309902" => new Map([
                "name" => "Ibiraiaras",
                "zipCode" => [ 95305000, 95307999 ],
                "ibge" => 4309902
            ]),
            "4309951" => new Map([
                "name" => "Ibirapuitã",
                "zipCode" => [ 99320000, 99329999 ],
                "ibge" => 4309951
            ]),
            "4310009" => new Map([
                "name" => "Ibirubá",
                "zipCode" => [ 98200000, 98229999 ],
                "ibge" => 4310009
            ]),
            "4310108" => new Map([
                "name" => "Igrejinha",
                "zipCode" => [ 95650000, 95659999 ],
                "ibge" => 4310108
            ]),
            "4310207" => new Map([
                "name" => "Ijuí",
                "zipCode" => [ 98700000, 98732999 ],
                "ibge" => 4310207
            ]),
            "4310306" => new Map([
                "name" => "Ilópolis",
                "zipCode" => [ 95990000, 95994999 ],
                "ibge" => 4310306
            ]),
            "4310330" => new Map([
                "name" => "Imbé",
                "zipCode" => [ 95625000, 95629999 ],
                "ibge" => 4310330
            ]),
            "4310363" => new Map([
                "name" => "Imigrante",
                "zipCode" => [ 95885000, 95889999 ],
                "ibge" => 4310363
            ]),
            "4310405" => new Map([
                "name" => "Independência",
                "zipCode" => [ 98915000, 98917999 ],
                "ibge" => 4310405
            ]),
            "4310413" => new Map([
                "name" => "Inhacorá",
                "zipCode" => [ 98765000, 98769999 ],
                "ibge" => 4310413
            ]),
            "4310439" => new Map([
                "name" => "Ipê",
                "zipCode" => [ 95240000, 95249999 ],
                "ibge" => 4310439
            ]),
            "4310462" => new Map([
                "name" => "Ipiranga do Sul",
                "zipCode" => [ 99925000, 99929999 ],
                "ibge" => 4310462
            ]),
            "4310504" => new Map([
                "name" => "Iraí",
                "zipCode" => [ 98460000, 98464999 ],
                "ibge" => 4310504
            ]),
            "4310538" => new Map([
                "name" => "Itaara",
                "zipCode" => [ 97185000, 97189999 ],
                "ibge" => 4310538
            ]),
            "4310553" => new Map([
                "name" => "Itacurubi",
                "zipCode" => [ 97685000, 97689999 ],
                "ibge" => 4310553
            ]),
            "4310579" => new Map([
                "name" => "Itapuca",
                "zipCode" => [ 95997000, 95999999 ],
                "ibge" => 4310579
            ]),
            "4310603" => new Map([
                "name" => "Itaqui",
                "zipCode" => [ 97650000, 97669999 ],
                "ibge" => 4310603
            ]),
            "4310652" => new Map([
                "name" => "Itati",
                "zipCode" => [ 95538000, 95539999 ],
                "ibge" => 4310652
            ]),
            "4310702" => new Map([
                "name" => "Itatiba do Sul",
                "zipCode" => [ 99760000, 99769999 ],
                "ibge" => 4310702
            ]),
            "4310751" => new Map([
                "name" => "Ivorá",
                "zipCode" => [ 98160000, 98169999 ],
                "ibge" => 4310751
            ]),
            "4310801" => new Map([
                "name" => "Ivoti",
                "zipCode" => [ 93900000, 93939999 ],
                "ibge" => 4310801
            ]),
            "4310850" => new Map([
                "name" => "Jaboticaba",
                "zipCode" => [ 98350000, 98359999 ],
                "ibge" => 4310850
            ]),
            "4310876" => new Map([
                "name" => "Jacuizinho",
                "zipCode" => [ 99457000, 99459999 ],
                "ibge" => 4310876
            ]),
            "4310900" => new Map([
                "name" => "Jacutinga",
                "zipCode" => [ 99730000, 99734999 ],
                "ibge" => 4310900
            ]),
            "4311007" => new Map([
                "name" => "Jaguarão",
                "zipCode" => [ 96300000, 96309999 ],
                "ibge" => 4311007
            ]),
            "4311106" => new Map([
                "name" => "Jaguari",
                "zipCode" => [ 97760000, 97769999 ],
                "ibge" => 4311106
            ]),
            "4311122" => new Map([
                "name" => "Jaquirana",
                "zipCode" => [ 95420000, 95479999 ],
                "ibge" => 4311122
            ]),
            "4311130" => new Map([
                "name" => "Jari",
                "zipCode" => [ 98175000, 98179999 ],
                "ibge" => 4311130
            ]),
            "4311155" => new Map([
                "name" => "Jóia",
                "zipCode" => [ 98180000, 98199999 ],
                "ibge" => 4311155
            ]),
            "4311205" => new Map([
                "name" => "Júlio de Castilhos",
                "zipCode" => [ 98130000, 98139999 ],
                "ibge" => 4311205
            ]),
            "4311239" => new Map([
                "name" => "Lagoa Bonita do Sul",
                "zipCode" => [ 96920000, 96924999 ],
                "ibge" => 4311239
            ]),
            "4311270" => new Map([
                "name" => "Lagoa dos Três Cantos",
                "zipCode" => [ 99495000, 99499999 ],
                "ibge" => 4311270
            ]),
            "4311304" => new Map([
                "name" => "Lagoa Vermelha",
                "zipCode" => [ 95300000, 95304999 ],
                "ibge" => 4311304
            ]),
            "4311254" => new Map([
                "name" => "Lagoão",
                "zipCode" => [ 99340000, 99344999 ],
                "ibge" => 4311254
            ]),
            "4311403" => new Map([
                "name" => "Lajeado",
                "zipCode" => [ 95900001, 95914999 ],
                "ibge" => 4311403
            ]),
            "4311429" => new Map([
                "name" => "Lajeado do Bugre",
                "zipCode" => [ 98320000, 98322999 ],
                "ibge" => 4311429
            ]),
            "4311502" => new Map([
                "name" => "Lavras do Sul",
                "zipCode" => [ 97390000, 97399999 ],
                "ibge" => 4311502
            ]),
            "4311601" => new Map([
                "name" => "Liberato Salzano",
                "zipCode" => [ 99690000, 99697999 ],
                "ibge" => 4311601
            ]),
            "4311627" => new Map([
                "name" => "Lindolfo Collor",
                "zipCode" => [ 93940000, 93944999 ],
                "ibge" => 4311627
            ]),
            "4311643" => new Map([
                "name" => "Linha Nova",
                "zipCode" => [ 95768000, 95769999 ],
                "ibge" => 4311643
            ]),
            "4311718" => new Map([
                "name" => "Maçambará",
                "zipCode" => [ 97645000, 97649999 ],
                "ibge" => 4311718
            ]),
            "4311700" => new Map([
                "name" => "Machadinho",
                "zipCode" => [ 99880000, 99889999 ],
                "ibge" => 4311700
            ]),
            "4311734" => new Map([
                "name" => "Mampituba",
                "zipCode" => [ 95572000, 95574999 ],
                "ibge" => 4311734
            ]),
            "4311759" => new Map([
                "name" => "Manoel Viana",
                "zipCode" => [ 97640000, 97644999 ],
                "ibge" => 4311759
            ]),
            "4311775" => new Map([
                "name" => "Maquiné",
                "zipCode" => [ 95530000, 95534999 ],
                "ibge" => 4311775
            ]),
            "4311791" => new Map([
                "name" => "Maratá",
                "zipCode" => [ 95793000, 95794999 ],
                "ibge" => 4311791
            ]),
            "4311809" => new Map([
                "name" => "Marau",
                "zipCode" => [ 99150000, 99154999 ],
                "ibge" => 4311809
            ]),
            "4311908" => new Map([
                "name" => "Marcelino Ramos",
                "zipCode" => [ 99800000, 99809999 ],
                "ibge" => 4311908
            ]),
            "4311981" => new Map([
                "name" => "Mariana Pimentel",
                "zipCode" => [ 92900000, 92989999 ],
                "ibge" => 4311981
            ]),
            "4312005" => new Map([
                "name" => "Mariano Moro",
                "zipCode" => [ 99790000, 99794999 ],
                "ibge" => 4312005
            ]),
            "4312054" => new Map([
                "name" => "Marques de Souza",
                "zipCode" => [ 95923000, 95924999 ],
                "ibge" => 4312054
            ]),
            "4312104" => new Map([
                "name" => "Mata",
                "zipCode" => [ 97410000, 97417999 ],
                "ibge" => 4312104
            ]),
            "4312138" => new Map([
                "name" => "Mato Castelhano",
                "zipCode" => [ 99180000, 99189999 ],
                "ibge" => 4312138
            ]),
            "4312153" => new Map([
                "name" => "Mato Leitão",
                "zipCode" => [ 95835000, 95839999 ],
                "ibge" => 4312153
            ]),
            "4312179" => new Map([
                "name" => "Mato Queimado",
                "zipCode" => [ 97935000, 97939999 ],
                "ibge" => 4312179
            ]),
            "4312203" => new Map([
                "name" => "Maximiliano de Almeida",
                "zipCode" => [ 99890000, 99894999 ],
                "ibge" => 4312203
            ]),
            "4312252" => new Map([
                "name" => "Minas do Leão",
                "zipCode" => [ 96755000, 96759999 ],
                "ibge" => 4312252
            ]),
            "4312302" => new Map([
                "name" => "Miraguaí",
                "zipCode" => [ 98540000, 98549999 ],
                "ibge" => 4312302
            ]),
            "4312351" => new Map([
                "name" => "Montauri",
                "zipCode" => [ 99255000, 99259999 ],
                "ibge" => 4312351
            ]),
            "4312377" => new Map([
                "name" => "Monte Alegre dos Campos",
                "zipCode" => [ 95236000, 95239999 ],
                "ibge" => 4312377
            ]),
            "4312385" => new Map([
                "name" => "Monte Belo do Sul",
                "zipCode" => [ 95718000, 95719999 ],
                "ibge" => 4312385
            ]),
            "4312401" => new Map([
                "name" => "Montenegro",
                "zipCode" => [ 92510001, 92539999 ],
                "ibge" => 4312401
            ]),
            "4312427" => new Map([
                "name" => "Mormaço",
                "zipCode" => [ 99315000, 99319999 ],
                "ibge" => 4312427
            ]),
            "4312443" => new Map([
                "name" => "Morrinhos do Sul",
                "zipCode" => [ 95577000, 95579999 ],
                "ibge" => 4312443
            ]),
            "4312450" => new Map([
                "name" => "Morro Redondo",
                "zipCode" => [ 96150000, 96154999 ],
                "ibge" => 4312450
            ]),
            "4312476" => new Map([
                "name" => "Morro Reuter",
                "zipCode" => [ 93990000, 93994999 ],
                "ibge" => 4312476
            ]),
            "4312500" => new Map([
                "name" => "Mostardas",
                "zipCode" => [ 96270000, 96289999 ],
                "ibge" => 4312500
            ]),
            "4312609" => new Map([
                "name" => "Muçum",
                "zipCode" => [ 95970000, 95971999 ],
                "ibge" => 4312609
            ]),
            "4312617" => new Map([
                "name" => "Muitos Capões",
                "zipCode" => [ 95230000, 95235999 ],
                "ibge" => 4312617
            ]),
            "4312625" => new Map([
                "name" => "Muliterno",
                "zipCode" => [ 99990000, 99999999 ],
                "ibge" => 4312625
            ]),
            "4312658" => new Map([
                "name" => "Não-Me-Toque",
                "zipCode" => [ 99470000, 99489999 ],
                "ibge" => 4312658
            ]),
            "4312674" => new Map([
                "name" => "Nicolau Vergueiro",
                "zipCode" => [ 99175000, 99179999 ],
                "ibge" => 4312674
            ]),
            "4312708" => new Map([
                "name" => "Nonoai",
                "zipCode" => [ 99600000, 99604999 ],
                "ibge" => 4312708
            ]),
            "4312757" => new Map([
                "name" => "Nova Alvorada",
                "zipCode" => [ 95985000, 95989999 ],
                "ibge" => 4312757
            ]),
            "4312807" => new Map([
                "name" => "Nova Araçá",
                "zipCode" => [ 95350000, 95354999 ],
                "ibge" => 4312807
            ]),
            "4312906" => new Map([
                "name" => "Nova Bassano",
                "zipCode" => [ 95340000, 95344999 ],
                "ibge" => 4312906
            ]),
            "4312955" => new Map([
                "name" => "Nova Boa Vista",
                "zipCode" => [ 99580000, 99584999 ],
                "ibge" => 4312955
            ]),
            "4313003" => new Map([
                "name" => "Nova Bréscia",
                "zipCode" => [ 95950000, 95954999 ],
                "ibge" => 4313003
            ]),
            "4313011" => new Map([
                "name" => "Nova Candelária",
                "zipCode" => [ 98919000, 98919999 ],
                "ibge" => 4313011
            ]),
            "4313037" => new Map([
                "name" => "Nova Esperança do Sul",
                "zipCode" => [ 97770000, 97799999 ],
                "ibge" => 4313037
            ]),
            "4313060" => new Map([
                "name" => "Nova Hartz",
                "zipCode" => [ 93890000, 93899999 ],
                "ibge" => 4313060
            ]),
            "4313086" => new Map([
                "name" => "Nova Pádua",
                "zipCode" => [ 95275000, 95279999 ],
                "ibge" => 4313086
            ]),
            "4313102" => new Map([
                "name" => "Nova Palma",
                "zipCode" => [ 97250000, 97279999 ],
                "ibge" => 4313102
            ]),
            "4313201" => new Map([
                "name" => "Nova Petrópolis",
                "zipCode" => [ 95150000, 95165999 ],
                "ibge" => 4313201
            ]),
            "4313300" => new Map([
                "name" => "Nova Prata",
                "zipCode" => [ 95320000, 95324999 ],
                "ibge" => 4313300
            ]),
            "4313334" => new Map([
                "name" => "Nova Ramada",
                "zipCode" => [ 98758000, 98759999 ],
                "ibge" => 4313334
            ]),
            "4313359" => new Map([
                "name" => "Nova Roma do Sul",
                "zipCode" => [ 95260000, 95269999 ],
                "ibge" => 4313359
            ]),
            "4313375" => new Map([
                "name" => "Nova Santa Rita",
                "zipCode" => [ 92480000, 92499999 ],
                "ibge" => 4313375
            ]),
            "4313490" => new Map([
                "name" => "Novo Barreiro",
                "zipCode" => [ 98338000, 98339999 ],
                "ibge" => 4313490
            ]),
            "4313391" => new Map([
                "name" => "Novo Cabrais",
                "zipCode" => [ 96545000, 96569999 ],
                "ibge" => 4313391
            ]),
            "4313409" => new Map([
                "name" => "Novo Hamburgo",
                "zipCode" => [ 93300001, 93599999 ],
                "ibge" => 4313409
            ]),
            "4313425" => new Map([
                "name" => "Novo Machado",
                "zipCode" => [ 98955000, 98957999 ],
                "ibge" => 4313425
            ]),
            "4313441" => new Map([
                "name" => "Novo Tiradentes",
                "zipCode" => [ 98370000, 98379999 ],
                "ibge" => 4313441
            ]),
            "4313466" => new Map([
                "name" => "Novo Xingu",
                "zipCode" => [ 99687000, 99689999 ],
                "ibge" => 4313466
            ]),
            "4313508" => new Map([
                "name" => "Osório",
                "zipCode" => [ 95520000, 95529999 ],
                "ibge" => 4313508
            ]),
            "4313607" => new Map([
                "name" => "Paim Filho",
                "zipCode" => [ 99850000, 99854999 ],
                "ibge" => 4313607
            ]),
            "4313656" => new Map([
                "name" => "Palmares do Sul",
                "zipCode" => [ 95540000, 95551999 ],
                "ibge" => 4313656
            ]),
            "4313706" => new Map([
                "name" => "Palmeira das Missões",
                "zipCode" => [ 98300000, 98319999 ],
                "ibge" => 4313706
            ]),
            "4313805" => new Map([
                "name" => "Palmitinho",
                "zipCode" => [ 98430000, 98434999 ],
                "ibge" => 4313805
            ]),
            "4313904" => new Map([
                "name" => "Panambi",
                "zipCode" => [ 98280000, 98289999 ],
                "ibge" => 4313904
            ]),
            "4313953" => new Map([
                "name" => "Pantano Grande",
                "zipCode" => [ 96690000, 96699999 ],
                "ibge" => 4313953
            ]),
            "4314001" => new Map([
                "name" => "Paraí",
                "zipCode" => [ 95360000, 95364999 ],
                "ibge" => 4314001
            ]),
            "4314027" => new Map([
                "name" => "Paraíso do Sul",
                "zipCode" => [ 96530000, 96534999 ],
                "ibge" => 4314027
            ]),
            "4314035" => new Map([
                "name" => "Pareci Novo",
                "zipCode" => [ 95783000, 95784999 ],
                "ibge" => 4314035
            ]),
            "4314050" => new Map([
                "name" => "Parobé",
                "zipCode" => [ 95630000, 95649999 ],
                "ibge" => 4314050
            ]),
            "4314068" => new Map([
                "name" => "Passa Sete",
                "zipCode" => [ 96908000, 96909999 ],
                "ibge" => 4314068
            ]),
            "4314076" => new Map([
                "name" => "Passo do Sobrado",
                "zipCode" => [ 96685000, 96689999 ],
                "ibge" => 4314076
            ]),
            "4314100" => new Map([
                "name" => "Passo Fundo",
                "zipCode" => [ 99000001, 99139999 ],
                "ibge" => 4314100
            ]),
            "4314134" => new Map([
                "name" => "Paulo Bento",
                "zipCode" => [ 99718000, 99719999 ],
                "ibge" => 4314134
            ]),
            "4314159" => new Map([
                "name" => "Paverama",
                "zipCode" => [ 95865000, 95869999 ],
                "ibge" => 4314159
            ]),
            "4314175" => new Map([
                "name" => "Pedras Altas",
                "zipCode" => [ 96487000, 96489999 ],
                "ibge" => 4314175
            ]),
            "4314209" => new Map([
                "name" => "Pedro Osório",
                "zipCode" => [ 96360000, 96394999 ],
                "ibge" => 4314209
            ]),
            "4314308" => new Map([
                "name" => "Pejuçara",
                "zipCode" => [ 98270000, 98279999 ],
                "ibge" => 4314308
            ]),
            "4314407" => new Map([
                "name" => "Pelotas",
                "zipCode" => [ 96000001, 96147999 ],
                "ibge" => 4314407
            ]),
            "4314423" => new Map([
                "name" => "Picada Café",
                "zipCode" => [ 95166000, 95169999 ],
                "ibge" => 4314423
            ]),
            "4314456" => new Map([
                "name" => "Pinhal",
                "zipCode" => [ 98345000, 98349999 ],
                "ibge" => 4314456
            ]),
            "4314464" => new Map([
                "name" => "Pinhal da Serra",
                "zipCode" => [ 95390000, 95399999 ],
                "ibge" => 4314464
            ]),
            "4314472" => new Map([
                "name" => "Pinhal Grande",
                "zipCode" => [ 98150000, 98159999 ],
                "ibge" => 4314472
            ]),
            "4314498" => new Map([
                "name" => "Pinheirinho do Vale",
                "zipCode" => [ 98435000, 98439999 ],
                "ibge" => 4314498
            ]),
            "4314506" => new Map([
                "name" => "Pinheiro Machado",
                "zipCode" => [ 96470000, 96486999 ],
                "ibge" => 4314506
            ]),
            "4314548" => new Map([
                "name" => "Pinto Bandeira",
                "zipCode" => [ 95717000, 95717999 ],
                "ibge" => 4314548
            ]),
            "4314555" => new Map([
                "name" => "Pirapó",
                "zipCode" => [ 97885000, 97899999 ],
                "ibge" => 4314555
            ]),
            "4314605" => new Map([
                "name" => "Piratini",
                "zipCode" => [ 96490000, 96494999 ],
                "ibge" => 4314605
            ]),
            "4314704" => new Map([
                "name" => "Planalto",
                "zipCode" => [ 98470000, 98479999 ],
                "ibge" => 4314704
            ]),
            "4314753" => new Map([
                "name" => "Poço das Antas",
                "zipCode" => [ 95740000, 95744999 ],
                "ibge" => 4314753
            ]),
            "4314779" => new Map([
                "name" => "Pontão",
                "zipCode" => [ 99190000, 99199999 ],
                "ibge" => 4314779
            ]),
            "4314787" => new Map([
                "name" => "Ponte Preta",
                "zipCode" => [ 99735000, 99739999 ],
                "ibge" => 4314787
            ]),
            "4314803" => new Map([
                "name" => "Portão",
                "zipCode" => [ 93180000, 93199999 ],
                "ibge" => 4314803
            ]),
            "4314902" => new Map([
                "name" => "Porto Alegre",
                "zipCode" => [ 90000001, 91999999 ],
                "ibge" => 4314902
            ]),
            "4315008" => new Map([
                "name" => "Porto Lucena",
                "zipCode" => [ 98980000, 98984999 ],
                "ibge" => 4315008
            ]),
            "4315057" => new Map([
                "name" => "Porto Mauá",
                "zipCode" => [ 98947000, 98949999 ],
                "ibge" => 4315057
            ]),
            "4315073" => new Map([
                "name" => "Porto Vera Cruz",
                "zipCode" => [ 98985000, 98994999 ],
                "ibge" => 4315073
            ]),
            "4315107" => new Map([
                "name" => "Porto Xavier",
                "zipCode" => [ 98995000, 98999999 ],
                "ibge" => 4315107
            ]),
            "4315131" => new Map([
                "name" => "Pouso Novo",
                "zipCode" => [ 95945000, 95947999 ],
                "ibge" => 4315131
            ]),
            "4315149" => new Map([
                "name" => "Presidente Lucena",
                "zipCode" => [ 93945000, 93949999 ],
                "ibge" => 4315149
            ]),
            "4315156" => new Map([
                "name" => "Progresso",
                "zipCode" => [ 95925000, 95929999 ],
                "ibge" => 4315156
            ]),
            "4315172" => new Map([
                "name" => "Protásio Alves",
                "zipCode" => [ 95345000, 95349999 ],
                "ibge" => 4315172
            ]),
            "4315206" => new Map([
                "name" => "Putinga",
                "zipCode" => [ 95975000, 95979999 ],
                "ibge" => 4315206
            ]),
            "4315305" => new Map([
                "name" => "Quaraí",
                "zipCode" => [ 97560000, 97569999 ],
                "ibge" => 4315305
            ]),
            "4315313" => new Map([
                "name" => "Quatro Irmãos",
                "zipCode" => [ 99720000, 99724999 ],
                "ibge" => 4315313
            ]),
            "4315321" => new Map([
                "name" => "Quevedos",
                "zipCode" => [ 98140000, 98149999 ],
                "ibge" => 4315321
            ]),
            "4315354" => new Map([
                "name" => "Quinze de Novembro",
                "zipCode" => [ 98230000, 98239999 ],
                "ibge" => 4315354
            ]),
            "4315404" => new Map([
                "name" => "Redentora",
                "zipCode" => [ 98550000, 98559999 ],
                "ibge" => 4315404
            ]),
            "4315453" => new Map([
                "name" => "Relvado",
                "zipCode" => [ 95965000, 95966999 ],
                "ibge" => 4315453
            ]),
            "4315503" => new Map([
                "name" => "Restinga Seca",
                "zipCode" => [ 97200000, 97209999 ],
                "ibge" => 4315503
            ]),
            "4315552" => new Map([
                "name" => "Rio dos Índios",
                "zipCode" => [ 99610000, 99614999 ],
                "ibge" => 4315552
            ]),
            "4315602" => new Map([
                "name" => "Rio Grande",
                "zipCode" => [ 96200001, 96224999 ],
                "ibge" => 4315602
            ]),
            "4315701" => new Map([
                "name" => "Rio Pardo",
                "zipCode" => [ 96640000, 96684999 ],
                "ibge" => 4315701
            ]),
            "4315750" => new Map([
                "name" => "Riozinho",
                "zipCode" => [ 95695000, 95699999 ],
                "ibge" => 4315750
            ]),
            "4315800" => new Map([
                "name" => "Roca Sales",
                "zipCode" => [ 95735000, 95739999 ],
                "ibge" => 4315800
            ]),
            "4315909" => new Map([
                "name" => "Rodeio Bonito",
                "zipCode" => [ 98360000, 98367999 ],
                "ibge" => 4315909
            ]),
            "4315958" => new Map([
                "name" => "Rolador",
                "zipCode" => [ 97843000, 97844999 ],
                "ibge" => 4315958
            ]),
            "4316006" => new Map([
                "name" => "Rolante",
                "zipCode" => [ 95690000, 95694999 ],
                "ibge" => 4316006
            ]),
            "4316105" => new Map([
                "name" => "Ronda Alta",
                "zipCode" => [ 99670000, 99674999 ],
                "ibge" => 4316105
            ]),
            "4316204" => new Map([
                "name" => "Rondinha",
                "zipCode" => [ 99590000, 99599999 ],
                "ibge" => 4316204
            ]),
            "4316303" => new Map([
                "name" => "Roque Gonzales",
                "zipCode" => [ 97970000, 97979999 ],
                "ibge" => 4316303
            ]),
            "4316402" => new Map([
                "name" => "Rosário do Sul",
                "zipCode" => [ 97590000, 97609999 ],
                "ibge" => 4316402
            ]),
            "4316428" => new Map([
                "name" => "Sagrada Família",
                "zipCode" => [ 98330000, 98334999 ],
                "ibge" => 4316428
            ]),
            "4316436" => new Map([
                "name" => "Saldanha Marinho",
                "zipCode" => [ 98250000, 98269999 ],
                "ibge" => 4316436
            ]),
            "4316451" => new Map([
                "name" => "Salto do Jacuí",
                "zipCode" => [ 99440000, 99449999 ],
                "ibge" => 4316451
            ]),
            "4316477" => new Map([
                "name" => "Salvador das Missões",
                "zipCode" => [ 97940000, 97949999 ],
                "ibge" => 4316477
            ]),
            "4316501" => new Map([
                "name" => "Salvador do Sul",
                "zipCode" => [ 95750000, 95754999 ],
                "ibge" => 4316501
            ]),
            "4316600" => new Map([
                "name" => "Sananduva",
                "zipCode" => [ 99840000, 99849999 ],
                "ibge" => 4316600
            ]),
            "4316709" => new Map([
                "name" => "Santa Bárbara do Sul",
                "zipCode" => [ 98240000, 98249999 ],
                "ibge" => 4316709
            ]),
            "4316733" => new Map([
                "name" => "Santa Cecília do Sul",
                "zipCode" => [ 99952000, 99954999 ],
                "ibge" => 4316733
            ]),
            "4316758" => new Map([
                "name" => "Santa Clara do Sul",
                "zipCode" => [ 95915000, 95917999 ],
                "ibge" => 4316758
            ]),
            "4316808" => new Map([
                "name" => "Santa Cruz do Sul",
                "zipCode" => [ 96800001, 96874999 ],
                "ibge" => 4316808
            ]),
            "4316972" => new Map([
                "name" => "Santa Margarida do Sul",
                "zipCode" => [ 97335000, 97339999 ],
                "ibge" => 4316972
            ]),
            "4316907" => new Map([
                "name" => "Santa Maria",
                "zipCode" => [ 97000001, 97179999 ],
                "ibge" => 4316907
            ]),
            "4316956" => new Map([
                "name" => "Santa Maria do Herval",
                "zipCode" => [ 93995000, 93999999 ],
                "ibge" => 4316956
            ]),
            "4317202" => new Map([
                "name" => "Santa Rosa",
                "zipCode" => [ 98780001, 98799999 ],
                "ibge" => 4317202
            ]),
            "4317251" => new Map([
                "name" => "Santa Tereza",
                "zipCode" => [ 95715000, 95716999 ],
                "ibge" => 4317251
            ]),
            "4317301" => new Map([
                "name" => "Santa Vitória do Palmar",
                "zipCode" => [ 96230000, 96254999 ],
                "ibge" => 4317301
            ]),
            "4317004" => new Map([
                "name" => "Santana da Boa Vista",
                "zipCode" => [ 96590000, 96599999 ],
                "ibge" => 4317004
            ]),
            "4317103" => new Map([
                "name" => "Sant'Ana do Livramento",
                "zipCode" => [ 97570001, 97589999 ],
                "ibge" => 4317103
            ]),
            "4317400" => new Map([
                "name" => "Santiago",
                "zipCode" => [ 97700001, 97752999 ],
                "ibge" => 4317400
            ]),
            "4317509" => new Map([
                "name" => "Santo Ângelo",
                "zipCode" => [ 98800001, 98849999 ],
                "ibge" => 4317509
            ]),
            "4317608" => new Map([
                "name" => "Santo Antônio da Patrulha",
                "zipCode" => [ 95500000, 95514999 ],
                "ibge" => 4317608
            ]),
            "4317707" => new Map([
                "name" => "Santo Antônio das Missões",
                "zipCode" => [ 97870000, 97879999 ],
                "ibge" => 4317707
            ]),
            "4317558" => new Map([
                "name" => "Santo Antônio do Palma",
                "zipCode" => [ 99265000, 99269999 ],
                "ibge" => 4317558
            ]),
            "4317756" => new Map([
                "name" => "Santo Antônio do Planalto",
                "zipCode" => [ 99525000, 99527999 ],
                "ibge" => 4317756
            ]),
            "4317806" => new Map([
                "name" => "Santo Augusto",
                "zipCode" => [ 98590000, 98594999 ],
                "ibge" => 4317806
            ]),
            "4317905" => new Map([
                "name" => "Santo Cristo",
                "zipCode" => [ 98960000, 98969999 ],
                "ibge" => 4317905
            ]),
            "4317954" => new Map([
                "name" => "Santo Expedito do Sul",
                "zipCode" => [ 99895000, 99899999 ],
                "ibge" => 4317954
            ]),
            "4318002" => new Map([
                "name" => "São Borja",
                "zipCode" => [ 97670000, 97684999 ],
                "ibge" => 4318002
            ]),
            "4318051" => new Map([
                "name" => "São Domingos do Sul",
                "zipCode" => [ 99270000, 99289999 ],
                "ibge" => 4318051
            ]),
            "4318101" => new Map([
                "name" => "São Francisco de Assis",
                "zipCode" => [ 97610000, 97639999 ],
                "ibge" => 4318101
            ]),
            "4318200" => new Map([
                "name" => "São Francisco de Paula",
                "zipCode" => [ 95400000, 95419999 ],
                "ibge" => 4318200
            ]),
            "4318309" => new Map([
                "name" => "São Gabriel",
                "zipCode" => [ 97300001, 97334999 ],
                "ibge" => 4318309
            ]),
            "4318408" => new Map([
                "name" => "São Jerônimo",
                "zipCode" => [ 96700000, 96734999 ],
                "ibge" => 4318408
            ]),
            "4318424" => new Map([
                "name" => "São João da Urtiga",
                "zipCode" => [ 99855000, 99859999 ],
                "ibge" => 4318424
            ]),
            "4318432" => new Map([
                "name" => "São João do Polêsine",
                "zipCode" => [ 97230000, 97249999 ],
                "ibge" => 4318432
            ]),
            "4318440" => new Map([
                "name" => "São Jorge",
                "zipCode" => [ 95365000, 95369999 ],
                "ibge" => 4318440
            ]),
            "4318457" => new Map([
                "name" => "São José das Missões",
                "zipCode" => [ 98325000, 98329999 ],
                "ibge" => 4318457
            ]),
            "4318465" => new Map([
                "name" => "São José do Herval",
                "zipCode" => [ 99380000, 99399999 ],
                "ibge" => 4318465
            ]),
            "4318481" => new Map([
                "name" => "São José do Hortêncio",
                "zipCode" => [ 95755000, 95757999 ],
                "ibge" => 4318481
            ]),
            "4318499" => new Map([
                "name" => "São José do Inhacorá",
                "zipCode" => [ 98958000, 98959999 ],
                "ibge" => 4318499
            ]),
            "4318507" => new Map([
                "name" => "São José do Norte",
                "zipCode" => [ 96225000, 96229999 ],
                "ibge" => 4318507
            ]),
            "4318606" => new Map([
                "name" => "São José do Ouro",
                "zipCode" => [ 99870000, 99877999 ],
                "ibge" => 4318606
            ]),
            "4318614" => new Map([
                "name" => "São José do Sul",
                "zipCode" => [ 95748000, 95749999 ],
                "ibge" => 4318614
            ]),
            "4318622" => new Map([
                "name" => "São José dos Ausentes",
                "zipCode" => [ 95280000, 95289999 ],
                "ibge" => 4318622
            ]),
            "4318705" => new Map([
                "name" => "São Leopoldo",
                "zipCode" => [ 93000001, 93179999 ],
                "ibge" => 4318705
            ]),
            "4318804" => new Map([
                "name" => "São Lourenço do Sul",
                "zipCode" => [ 96170000, 96177999 ],
                "ibge" => 4318804
            ]),
            "4318903" => new Map([
                "name" => "São Luiz Gonzaga",
                "zipCode" => [ 97800000, 97842999 ],
                "ibge" => 4318903
            ]),
            "4319000" => new Map([
                "name" => "São Marcos",
                "zipCode" => [ 95190000, 95199999 ],
                "ibge" => 4319000
            ]),
            "4319109" => new Map([
                "name" => "São Martinho",
                "zipCode" => [ 98690000, 98699999 ],
                "ibge" => 4319109
            ]),
            "4319125" => new Map([
                "name" => "São Martinho da Serra",
                "zipCode" => [ 97190000, 97194999 ],
                "ibge" => 4319125
            ]),
            "4319158" => new Map([
                "name" => "São Miguel das Missões",
                "zipCode" => [ 98865000, 98869999 ],
                "ibge" => 4319158
            ]),
            "4319208" => new Map([
                "name" => "São Nicolau",
                "zipCode" => [ 97880000, 97884999 ],
                "ibge" => 4319208
            ]),
            "4319307" => new Map([
                "name" => "São Paulo das Missões",
                "zipCode" => [ 97980000, 97999999 ],
                "ibge" => 4319307
            ]),
            "4319356" => new Map([
                "name" => "São Pedro da Serra",
                "zipCode" => [ 95758000, 95759999 ],
                "ibge" => 4319356
            ]),
            "4319364" => new Map([
                "name" => "São Pedro das Missões",
                "zipCode" => [ 98323000, 98324999 ],
                "ibge" => 4319364
            ]),
            "4319372" => new Map([
                "name" => "São Pedro do Butiá",
                "zipCode" => [ 97920000, 97929999 ],
                "ibge" => 4319372
            ]),
            "4319406" => new Map([
                "name" => "São Pedro do Sul",
                "zipCode" => [ 97400000, 97409999 ],
                "ibge" => 4319406
            ]),
            "4319505" => new Map([
                "name" => "São Sebastião do Caí",
                "zipCode" => [ 95760000, 95764999 ],
                "ibge" => 4319505
            ]),
            "4319604" => new Map([
                "name" => "São Sepé",
                "zipCode" => [ 97340000, 97384999 ],
                "ibge" => 4319604
            ]),
            "4319703" => new Map([
                "name" => "São Valentim",
                "zipCode" => [ 99640000, 99644999 ],
                "ibge" => 4319703
            ]),
            "4319711" => new Map([
                "name" => "São Valentim do Sul",
                "zipCode" => [ 99240000, 99249999 ],
                "ibge" => 4319711
            ]),
            "4319737" => new Map([
                "name" => "São Valério do Sul",
                "zipCode" => [ 98595000, 98599999 ],
                "ibge" => 4319737
            ]),
            "4319752" => new Map([
                "name" => "São Vendelino",
                "zipCode" => [ 95795000, 95799999 ],
                "ibge" => 4319752
            ]),
            "4319802" => new Map([
                "name" => "São Vicente do Sul",
                "zipCode" => [ 97420000, 97449999 ],
                "ibge" => 4319802
            ]),
            "4319901" => new Map([
                "name" => "Sapiranga",
                "zipCode" => [ 93800001, 93879999 ],
                "ibge" => 4319901
            ]),
            "4320008" => new Map([
                "name" => "Sapucaia do Sul",
                "zipCode" => [ 93200001, 93249999 ],
                "ibge" => 4320008
            ]),
            "4320107" => new Map([
                "name" => "Sarandi",
                "zipCode" => [ 99560000, 99579999 ],
                "ibge" => 4320107
            ]),
            "4320206" => new Map([
                "name" => "Seberi",
                "zipCode" => [ 98380000, 98384999 ],
                "ibge" => 4320206
            ]),
            "4320230" => new Map([
                "name" => "Sede Nova",
                "zipCode" => [ 98675000, 98679999 ],
                "ibge" => 4320230
            ]),
            "4320263" => new Map([
                "name" => "Segredo",
                "zipCode" => [ 96910000, 96919999 ],
                "ibge" => 4320263
            ]),
            "4320305" => new Map([
                "name" => "Selbach",
                "zipCode" => [ 99450000, 99456999 ],
                "ibge" => 4320305
            ]),
            "4320321" => new Map([
                "name" => "Senador Salgado Filho",
                "zipCode" => [ 98895000, 98897999 ],
                "ibge" => 4320321
            ]),
            "4320354" => new Map([
                "name" => "Sentinela do Sul",
                "zipCode" => [ 96765000, 96769999 ],
                "ibge" => 4320354
            ]),
            "4320404" => new Map([
                "name" => "Serafina Corrêa",
                "zipCode" => [ 99250000, 99254999 ],
                "ibge" => 4320404
            ]),
            "4320453" => new Map([
                "name" => "Sério",
                "zipCode" => [ 95918000, 95919999 ],
                "ibge" => 4320453
            ]),
            "4320503" => new Map([
                "name" => "Sertão",
                "zipCode" => [ 99170000, 99174999 ],
                "ibge" => 4320503
            ]),
            "4320552" => new Map([
                "name" => "Sertão Santana",
                "zipCode" => [ 92850000, 92869999 ],
                "ibge" => 4320552
            ]),
            "4320578" => new Map([
                "name" => "Sete de Setembro",
                "zipCode" => [ 97960000, 97969999 ],
                "ibge" => 4320578
            ]),
            "4320602" => new Map([
                "name" => "Severiano de Almeida",
                "zipCode" => [ 99810000, 99819999 ],
                "ibge" => 4320602
            ]),
            "4320651" => new Map([
                "name" => "Silveira Martins",
                "zipCode" => [ 97195000, 97199999 ],
                "ibge" => 4320651
            ]),
            "4320677" => new Map([
                "name" => "Sinimbu",
                "zipCode" => [ 96890000, 96899999 ],
                "ibge" => 4320677
            ]),
            "4320701" => new Map([
                "name" => "Sobradinho",
                "zipCode" => [ 96900000, 96907999 ],
                "ibge" => 4320701
            ]),
            "4320800" => new Map([
                "name" => "Soledade",
                "zipCode" => [ 99300000, 99314999 ],
                "ibge" => 4320800
            ]),
            "4320859" => new Map([
                "name" => "Tabaí",
                "zipCode" => [ 95863000, 95864999 ],
                "ibge" => 4320859
            ]),
            "4320909" => new Map([
                "name" => "Tapejara",
                "zipCode" => [ 99950000, 99951999 ],
                "ibge" => 4320909
            ]),
            "4321006" => new Map([
                "name" => "Tapera",
                "zipCode" => [ 99490000, 99494999 ],
                "ibge" => 4321006
            ]),
            "4321105" => new Map([
                "name" => "Tapes",
                "zipCode" => [ 96760000, 96764999 ],
                "ibge" => 4321105
            ]),
            "4321204" => new Map([
                "name" => "Taquara",
                "zipCode" => [ 95600001, 95624999 ],
                "ibge" => 4321204
            ]),
            "4321303" => new Map([
                "name" => "Taquari",
                "zipCode" => [ 95860000, 95862999 ],
                "ibge" => 4321303
            ]),
            "4321329" => new Map([
                "name" => "Taquaruçu do Sul",
                "zipCode" => [ 98410000, 98414999 ],
                "ibge" => 4321329
            ]),
            "4321352" => new Map([
                "name" => "Tavares",
                "zipCode" => [ 96290000, 96299999 ],
                "ibge" => 4321352
            ]),
            "4321402" => new Map([
                "name" => "Tenente Portela",
                "zipCode" => [ 98500000, 98527999 ],
                "ibge" => 4321402
            ]),
            "4321436" => new Map([
                "name" => "Terra de Areia",
                "zipCode" => [ 95535000, 95537999 ],
                "ibge" => 4321436
            ]),
            "4321451" => new Map([
                "name" => "Teutônia",
                "zipCode" => [ 95890000, 95892999 ],
                "ibge" => 4321451
            ]),
            "4321469" => new Map([
                "name" => "Tio Hugo",
                "zipCode" => [ 99345000, 99349999 ],
                "ibge" => 4321469
            ]),
            "4321477" => new Map([
                "name" => "Tiradentes do Sul",
                "zipCode" => [ 98680000, 98689999 ],
                "ibge" => 4321477
            ]),
            "4321493" => new Map([
                "name" => "Toropi",
                "zipCode" => [ 97418000, 97419999 ],
                "ibge" => 4321493
            ]),
            "4321501" => new Map([
                "name" => "Torres",
                "zipCode" => [ 95560000, 95567999 ],
                "ibge" => 4321501
            ]),
            "4321600" => new Map([
                "name" => "Tramandaí",
                "zipCode" => [ 95590000, 95594999 ],
                "ibge" => 4321600
            ]),
            "4321626" => new Map([
                "name" => "Travesseiro",
                "zipCode" => [ 95948000, 95949999 ],
                "ibge" => 4321626
            ]),
            "4321634" => new Map([
                "name" => "Três Arroios",
                "zipCode" => [ 99725000, 99729999 ],
                "ibge" => 4321634
            ]),
            "4321667" => new Map([
                "name" => "Três Cachoeiras",
                "zipCode" => [ 95580000, 95584999 ],
                "ibge" => 4321667
            ]),
            "4321709" => new Map([
                "name" => "Três Coroas",
                "zipCode" => [ 95660000, 95669999 ],
                "ibge" => 4321709
            ]),
            "4321808" => new Map([
                "name" => "Três de Maio",
                "zipCode" => [ 98910000, 98914999 ],
                "ibge" => 4321808
            ]),
            "4321832" => new Map([
                "name" => "Três Forquilhas",
                "zipCode" => [ 95575000, 95576999 ],
                "ibge" => 4321832
            ]),
            "4321857" => new Map([
                "name" => "Três Palmeiras",
                "zipCode" => [ 99675000, 99679999 ],
                "ibge" => 4321857
            ]),
            "4321907" => new Map([
                "name" => "Três Passos",
                "zipCode" => [ 98600000, 98634999 ],
                "ibge" => 4321907
            ]),
            "4321956" => new Map([
                "name" => "Trindade do Sul",
                "zipCode" => [ 99615000, 99639999 ],
                "ibge" => 4321956
            ]),
            "4322004" => new Map([
                "name" => "Triunfo",
                "zipCode" => [ 95840000, 95859999 ],
                "ibge" => 4322004
            ]),
            "4322103" => new Map([
                "name" => "Tucunduva",
                "zipCode" => [ 98930000, 98939999 ],
                "ibge" => 4322103
            ]),
            "4322152" => new Map([
                "name" => "Tunas",
                "zipCode" => [ 99330000, 99339999 ],
                "ibge" => 4322152
            ]),
            "4322186" => new Map([
                "name" => "Tupanci do Sul",
                "zipCode" => [ 99878000, 99879999 ],
                "ibge" => 4322186
            ]),
            "4322202" => new Map([
                "name" => "Tupanciretã",
                "zipCode" => [ 98170000, 98174999 ],
                "ibge" => 4322202
            ]),
            "4322251" => new Map([
                "name" => "Tupandi",
                "zipCode" => [ 95775000, 95777999 ],
                "ibge" => 4322251
            ]),
            "4322301" => new Map([
                "name" => "Tuparendi",
                "zipCode" => [ 98940000, 98946999 ],
                "ibge" => 4322301
            ]),
            "4322327" => new Map([
                "name" => "Turuçu",
                "zipCode" => [ 96148000, 96149999 ],
                "ibge" => 4322327
            ]),
            "4322343" => new Map([
                "name" => "Ubiretama",
                "zipCode" => [ 98898000, 98899999 ],
                "ibge" => 4322343
            ]),
            "4322350" => new Map([
                "name" => "União da Serra",
                "zipCode" => [ 99215000, 99219999 ],
                "ibge" => 4322350
            ]),
            "4322376" => new Map([
                "name" => "Unistalda",
                "zipCode" => [ 97755000, 97759999 ],
                "ibge" => 4322376
            ]),
            "4322400" => new Map([
                "name" => "Uruguaiana",
                "zipCode" => [ 97500001, 97537999 ],
                "ibge" => 4322400
            ]),
            "4322509" => new Map([
                "name" => "Vacaria",
                "zipCode" => [ 95200001, 95229999 ],
                "ibge" => 4322509
            ]),
            "4322533" => new Map([
                "name" => "Vale do Sol",
                "zipCode" => [ 96878000, 96879999 ],
                "ibge" => 4322533
            ]),
            "4322541" => new Map([
                "name" => "Vale Real",
                "zipCode" => [ 95778000, 95779999 ],
                "ibge" => 4322541
            ]),
            "4322525" => new Map([
                "name" => "Vale Verde",
                "zipCode" => [ 95833000, 95834999 ],
                "ibge" => 4322525
            ]),
            "4322558" => new Map([
                "name" => "Vanini",
                "zipCode" => [ 99290000, 99299999 ],
                "ibge" => 4322558
            ]),
            "4322608" => new Map([
                "name" => "Venâncio Aires",
                "zipCode" => [ 95800000, 95819999 ],
                "ibge" => 4322608
            ]),
            "4322707" => new Map([
                "name" => "Vera Cruz",
                "zipCode" => [ 96880000, 96887999 ],
                "ibge" => 4322707
            ]),
            "4322806" => new Map([
                "name" => "Veranópolis",
                "zipCode" => [ 95330000, 95332999 ],
                "ibge" => 4322806
            ]),
            "4322855" => new Map([
                "name" => "Vespasiano Correa",
                "zipCode" => [ 95972000, 95974999 ],
                "ibge" => 4322855
            ]),
            "4322905" => new Map([
                "name" => "Viadutos",
                "zipCode" => [ 99820000, 99824999 ],
                "ibge" => 4322905
            ]),
            "4323002" => new Map([
                "name" => "Viamão",
                "zipCode" => [ 94400001, 94799999 ],
                "ibge" => 4323002
            ]),
            "4323101" => new Map([
                "name" => "Vicente Dutra",
                "zipCode" => [ 98450000, 98459999 ],
                "ibge" => 4323101
            ]),
            "4323200" => new Map([
                "name" => "Victor Graeff",
                "zipCode" => [ 99350000, 99359999 ],
                "ibge" => 4323200
            ]),
            "4323309" => new Map([
                "name" => "Vila Flores",
                "zipCode" => [ 95334000, 95334999 ],
                "ibge" => 4323309
            ]),
            "4323358" => new Map([
                "name" => "Vila Lângaro",
                "zipCode" => [ 99955000, 99959999 ],
                "ibge" => 4323358
            ]),
            "4323408" => new Map([
                "name" => "Vila Maria",
                "zipCode" => [ 99155000, 99159999 ],
                "ibge" => 4323408
            ]),
            "4323457" => new Map([
                "name" => "Vila Nova do Sul",
                "zipCode" => [ 97385000, 97389999 ],
                "ibge" => 4323457
            ]),
            "4323507" => new Map([
                "name" => "Vista Alegre",
                "zipCode" => [ 98415000, 98429999 ],
                "ibge" => 4323507
            ]),
            "4323606" => new Map([
                "name" => "Vista Alegre do Prata",
                "zipCode" => [ 95325000, 95329999 ],
                "ibge" => 4323606
            ]),
            "4323705" => new Map([
                "name" => "Vista Gaúcha",
                "zipCode" => [ 98535000, 98539999 ],
                "ibge" => 4323705
            ]),
            "4323754" => new Map([
                "name" => "Vitória das Missões",
                "zipCode" => [ 98850000, 98854999 ],
                "ibge" => 4323754
            ]),
            "4323770" => new Map([
                "name" => "Westfalia",
                "zipCode" => [ 95893000, 95894999 ],
                "ibge" => 4323770
            ]),
            "4323804" => new Map([
                "name" => "Xangri-Lá",
                "zipCode" => [ 95588000, 95589999 ],
                "ibge" => 4323804
            ])
        ]);

        return $map;
    }
}