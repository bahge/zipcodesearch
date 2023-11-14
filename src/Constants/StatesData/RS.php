<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

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
                "cep" => [ 96445000, 96449999 ],
                "ibge" => 4300034
            ]),
            "4300059" => new Map([
                "name" => "Água Santa",
                "cep" => [ 99965000, 99969999 ],
                "ibge" => 4300059
            ]),
            "4300109" => new Map([
                "name" => "Agudo",
                "cep" => [ 96540000, 96544999 ],
                "ibge" => 4300109
            ]),
            "4300208" => new Map([
                "name" => "Ajuricaba",
                "cep" => [ 98750000, 98757999 ],
                "ibge" => 4300208
            ]),
            "4300307" => new Map([
                "name" => "Alecrim",
                "cep" => [ 98950000, 98954999 ],
                "ibge" => 4300307
            ]),
            "4300406" => new Map([
                "name" => "Alegrete",
                "cep" => [ 97540001, 97559999 ],
                "ibge" => 4300406
            ]),
            "4300455" => new Map([
                "name" => "Alegria",
                "cep" => [ 98905000, 98909999 ],
                "ibge" => 4300455
            ]),
            "4300471" => new Map([
                "name" => "Almirante Tamandaré do Sul",
                "cep" => [ 99523000, 99524999 ],
                "ibge" => 4300471
            ]),
            "4300505" => new Map([
                "name" => "Alpestre",
                "cep" => [ 98480000, 98499999 ],
                "ibge" => 4300505
            ]),
            "4300554" => new Map([
                "name" => "Alto Alegre",
                "cep" => [ 99430000, 99434999 ],
                "ibge" => 4300554
            ]),
            "4300570" => new Map([
                "name" => "Alto Feliz",
                "cep" => [ 95773000, 95774999 ],
                "ibge" => 4300570
            ]),
            "4300604" => new Map([
                "name" => "Alvorada",
                "cep" => [ 94800001, 94899999 ],
                "ibge" => 4300604
            ]),
            "4300638" => new Map([
                "name" => "Amaral Ferrador",
                "cep" => [ 96635000, 96639999 ],
                "ibge" => 4300638
            ]),
            "4300646" => new Map([
                "name" => "Ametista do Sul",
                "cep" => [ 98465000, 98469999 ],
                "ibge" => 4300646
            ]),
            "4300661" => new Map([
                "name" => "André da Rocha",
                "cep" => [ 95310000, 95314999 ],
                "ibge" => 4300661
            ]),
            "4300703" => new Map([
                "name" => "Anta Gorda",
                "cep" => [ 95980000, 95984999 ],
                "ibge" => 4300703
            ]),
            "4300802" => new Map([
                "name" => "Antônio Prado",
                "cep" => [ 95250000, 95254999 ],
                "ibge" => 4300802
            ]),
            "4300851" => new Map([
                "name" => "Arambaré",
                "cep" => [ 96178000, 96179999 ],
                "ibge" => 4300851
            ]),
            "4300877" => new Map([
                "name" => "Araricá",
                "cep" => [ 93880000, 93889999 ],
                "ibge" => 4300877
            ]),
            "4300901" => new Map([
                "name" => "Aratiba",
                "cep" => [ 99770000, 99789999 ],
                "ibge" => 4300901
            ]),
            "4301008" => new Map([
                "name" => "Arroio do Meio",
                "cep" => [ 95940000, 95944999 ],
                "ibge" => 4301008
            ]),
            "4301073" => new Map([
                "name" => "Arroio do Padre",
                "cep" => [ 96155000, 96159999 ],
                "ibge" => 4301073
            ]),
            "4301057" => new Map([
                "name" => "Arroio do Sal",
                "cep" => [ 95585000, 95587999 ],
                "ibge" => 4301057
            ]),
            "4301206" => new Map([
                "name" => "Arroio do Tigre",
                "cep" => [ 96950000, 96989999 ],
                "ibge" => 4301206
            ]),
            "4301107" => new Map([
                "name" => "Arroio dos Ratos",
                "cep" => [ 96740000, 96744999 ],
                "ibge" => 4301107
            ]),
            "4301305" => new Map([
                "name" => "Arroio Grande",
                "cep" => [ 96330000, 96359999 ],
                "ibge" => 4301305
            ]),
            "4301404" => new Map([
                "name" => "Arvorezinha",
                "cep" => [ 95995000, 95996999 ],
                "ibge" => 4301404
            ]),
            "4301503" => new Map([
                "name" => "Augusto Pestana",
                "cep" => [ 98740000, 98749999 ],
                "ibge" => 4301503
            ]),
            "4301552" => new Map([
                "name" => "Áurea",
                "cep" => [ 99835000, 99837999 ],
                "ibge" => 4301552
            ]),
            "4301602" => new Map([
                "name" => "Bagé",
                "cep" => [ 96400001, 96444999 ],
                "ibge" => 4301602
            ]),
            "4301636" => new Map([
                "name" => "Balneário Pinhal",
                "cep" => [ 95599000, 95599999 ],
                "ibge" => 4301636
            ]),
            "4301651" => new Map([
                "name" => "Barão",
                "cep" => [ 95730000, 95734999 ],
                "ibge" => 4301651
            ]),
            "4301701" => new Map([
                "name" => "Barão de Cotegipe",
                "cep" => [ 99740000, 99749999 ],
                "ibge" => 4301701
            ]),
            "4301750" => new Map([
                "name" => "Barão do Triunfo",
                "cep" => [ 96735000, 96739999 ],
                "ibge" => 4301750
            ]),
            "4301859" => new Map([
                "name" => "Barra do Guarita",
                "cep" => [ 98530000, 98534999 ],
                "ibge" => 4301859
            ]),
            "4301875" => new Map([
                "name" => "Barra do Quaraí",
                "cep" => [ 97538000, 97539999 ],
                "ibge" => 4301875
            ]),
            "4301909" => new Map([
                "name" => "Barra do Ribeiro",
                "cep" => [ 92870000, 92899999 ],
                "ibge" => 4301909
            ]),
            "4301925" => new Map([
                "name" => "Barra do Rio Azul",
                "cep" => [ 99795000, 99799999 ],
                "ibge" => 4301925
            ]),
            "4301958" => new Map([
                "name" => "Barra Funda",
                "cep" => [ 99585000, 99589999 ],
                "ibge" => 4301958
            ]),
            "4301800" => new Map([
                "name" => "Barracão",
                "cep" => [ 95370000, 95379999 ],
                "ibge" => 4301800
            ]),
            "4302006" => new Map([
                "name" => "Barros Cassal",
                "cep" => [ 99360000, 99369999 ],
                "ibge" => 4302006
            ]),
            "4302055" => new Map([
                "name" => "Benjamin Constant do Sul",
                "cep" => [ 99650000, 99654999 ],
                "ibge" => 4302055
            ]),
            "4302105" => new Map([
                "name" => "Bento Gonçalves",
                "cep" => [ 95700001, 95714999 ],
                "ibge" => 4302105
            ]),
            "4302154" => new Map([
                "name" => "Boa Vista das Missões",
                "cep" => [ 98335000, 98337999 ],
                "ibge" => 4302154
            ]),
            "4302204" => new Map([
                "name" => "Boa Vista do Buricá",
                "cep" => [ 98918000, 98918999 ],
                "ibge" => 4302204
            ]),
            "4302220" => new Map([
                "name" => "Boa Vista do Cadeado",
                "cep" => [ 98118000, 98119999 ],
                "ibge" => 4302220
            ]),
            "4302238" => new Map([
                "name" => "Boa Vista do Incra",
                "cep" => [ 98120000, 98124999 ],
                "ibge" => 4302238
            ]),
            "4302253" => new Map([
                "name" => "Boa Vista do Sul",
                "cep" => [ 95727000, 95729999 ],
                "ibge" => 4302253
            ]),
            "4302303" => new Map([
                "name" => "Bom Jesus",
                "cep" => [ 95290000, 95299999 ],
                "ibge" => 4302303
            ]),
            "4302352" => new Map([
                "name" => "Bom Princípio",
                "cep" => [ 95765000, 95767999 ],
                "ibge" => 4302352
            ]),
            "4302378" => new Map([
                "name" => "Bom Progresso",
                "cep" => [ 98575000, 98579999 ],
                "ibge" => 4302378
            ]),
            "4302402" => new Map([
                "name" => "Bom Retiro do Sul",
                "cep" => [ 95870000, 95874999 ],
                "ibge" => 4302402
            ]),
            "4302451" => new Map([
                "name" => "Boqueirão do Leão",
                "cep" => [ 95920000, 95922999 ],
                "ibge" => 4302451
            ]),
            "4302501" => new Map([
                "name" => "Bossoroca",
                "cep" => [ 97850000, 97869999 ],
                "ibge" => 4302501
            ]),
            "4302584" => new Map([
                "name" => "Bozano",
                "cep" => [ 98733000, 98734999 ],
                "ibge" => 4302584
            ]),
            "4302600" => new Map([
                "name" => "Braga",
                "cep" => [ 98560000, 98569999 ],
                "ibge" => 4302600
            ]),
            "4302659" => new Map([
                "name" => "Brochier",
                "cep" => [ 95790000, 95792999 ],
                "ibge" => 4302659
            ]),
            "4302709" => new Map([
                "name" => "Butiá",
                "cep" => [ 96750000, 96754999 ],
                "ibge" => 4302709
            ]),
            "4302808" => new Map([
                "name" => "Caçapava do Sul",
                "cep" => [ 96570000, 96589999 ],
                "ibge" => 4302808
            ]),
            "4302907" => new Map([
                "name" => "Cacequi",
                "cep" => [ 97450000, 97499999 ],
                "ibge" => 4302907
            ]),
            "4303004" => new Map([
                "name" => "Cachoeira do Sul",
                "cep" => [ 96500001, 96529999 ],
                "ibge" => 4303004
            ]),
            "4303103" => new Map([
                "name" => "Cachoeirinha",
                "cep" => [ 94900001, 94999999 ],
                "ibge" => 4303103
            ]),
            "4303202" => new Map([
                "name" => "Cacique Doble",
                "cep" => [ 99860000, 99869999 ],
                "ibge" => 4303202
            ]),
            "4303301" => new Map([
                "name" => "Caibaté",
                "cep" => [ 97930000, 97934999 ],
                "ibge" => 4303301
            ]),
            "4303400" => new Map([
                "name" => "Caiçara",
                "cep" => [ 98440000, 98449999 ],
                "ibge" => 4303400
            ]),
            "4303509" => new Map([
                "name" => "Camaquã",
                "cep" => [ 96780001, 96799999 ],
                "ibge" => 4303509
            ]),
            "4303558" => new Map([
                "name" => "Camargo",
                "cep" => [ 99165000, 99169999 ],
                "ibge" => 4303558
            ]),
            "4303608" => new Map([
                "name" => "Cambará do Sul",
                "cep" => [ 95480000, 95499999 ],
                "ibge" => 4303608
            ]),
            "4303673" => new Map([
                "name" => "Campestre da Serra",
                "cep" => [ 95255000, 95259999 ],
                "ibge" => 4303673
            ]),
            "4303707" => new Map([
                "name" => "Campina das Missões",
                "cep" => [ 98975000, 98979999 ],
                "ibge" => 4303707
            ]),
            "4303806" => new Map([
                "name" => "Campinas do Sul",
                "cep" => [ 99660000, 99664999 ],
                "ibge" => 4303806
            ]),
            "4303905" => new Map([
                "name" => "Campo Bom",
                "cep" => [ 93700000, 93799999 ],
                "ibge" => 4303905
            ]),
            "4304002" => new Map([
                "name" => "Campo Novo",
                "cep" => [ 98570000, 98574999 ],
                "ibge" => 4304002
            ]),
            "4304101" => new Map([
                "name" => "Campos Borges",
                "cep" => [ 99435000, 99439999 ],
                "ibge" => 4304101
            ]),
            "4304200" => new Map([
                "name" => "Candelária",
                "cep" => [ 96930000, 96949999 ],
                "ibge" => 4304200
            ]),
            "4304309" => new Map([
                "name" => "Cândido Godói",
                "cep" => [ 98970000, 98974999 ],
                "ibge" => 4304309
            ]),
            "4304358" => new Map([
                "name" => "Candiota",
                "cep" => [ 96495000, 96499999 ],
                "ibge" => 4304358
            ]),
            "4304408" => new Map([
                "name" => "Canela",
                "cep" => [ 95680001, 95689999 ],
                "ibge" => 4304408
            ]),
            "4304507" => new Map([
                "name" => "Canguçu",
                "cep" => [ 96600000, 96609999 ],
                "ibge" => 4304507
            ]),
            "4304606" => new Map([
                "name" => "Canoas",
                "cep" => [ 92000001, 92479999 ],
                "ibge" => 4304606
            ]),
            "4304614" => new Map([
                "name" => "Canudos do Vale",
                "cep" => [ 95933000, 95934999 ],
                "ibge" => 4304614
            ]),
            "4304622" => new Map([
                "name" => "Capão Bonito do Sul",
                "cep" => [ 95308000, 95309999 ],
                "ibge" => 4304622
            ]),
            "4304630" => new Map([
                "name" => "Capão da Canoa",
                "cep" => [ 95555000, 95559999 ],
                "ibge" => 4304630
            ]),
            "4304655" => new Map([
                "name" => "Capão do Cipó",
                "cep" => [ 97753000, 97754999 ],
                "ibge" => 4304655
            ]),
            "4304663" => new Map([
                "name" => "Capão do Leão",
                "cep" => [ 96160000, 96169999 ],
                "ibge" => 4304663
            ]),
            "4304689" => new Map([
                "name" => "Capela de Santana",
                "cep" => [ 95745000, 95747999 ],
                "ibge" => 4304689
            ]),
            "4304697" => new Map([
                "name" => "Capitão",
                "cep" => [ 95935000, 95936999 ],
                "ibge" => 4304697
            ]),
            "4304671" => new Map([
                "name" => "Capivari do Sul",
                "cep" => [ 95552000, 95554999 ],
                "ibge" => 4304671
            ]),
            "4304713" => new Map([
                "name" => "Caraá",
                "cep" => [ 95515000, 95519999 ],
                "ibge" => 4304713
            ]),
            "4304705" => new Map([
                "name" => "Carazinho",
                "cep" => [ 99500000, 99522999 ],
                "ibge" => 4304705
            ]),
            "4304804" => new Map([
                "name" => "Carlos Barbosa",
                "cep" => [ 95185000, 95189999 ],
                "ibge" => 4304804
            ]),
            "4304853" => new Map([
                "name" => "Carlos Gomes",
                "cep" => [ 99825000, 99829999 ],
                "ibge" => 4304853
            ]),
            "4304903" => new Map([
                "name" => "Casca",
                "cep" => [ 99260000, 99264999 ],
                "ibge" => 4304903
            ]),
            "4304952" => new Map([
                "name" => "Caseiros",
                "cep" => [ 95315000, 95319999 ],
                "ibge" => 4304952
            ]),
            "4305009" => new Map([
                "name" => "Catuípe",
                "cep" => [ 98770000, 98779999 ],
                "ibge" => 4305009
            ]),
            "4305108" => new Map([
                "name" => "Caxias do Sul",
                "cep" => [ 95000001, 95149999 ],
                "ibge" => 4305108
            ]),
            "4305116" => new Map([
                "name" => "Centenário",
                "cep" => [ 99838000, 99839999 ],
                "ibge" => 4305116
            ]),
            "4305124" => new Map([
                "name" => "Cerrito",
                "cep" => [ 96395000, 96399999 ],
                "ibge" => 4305124
            ]),
            "4305132" => new Map([
                "name" => "Cerro Branco",
                "cep" => [ 96535000, 96539999 ],
                "ibge" => 4305132
            ]),
            "4305157" => new Map([
                "name" => "Cerro Grande",
                "cep" => [ 98340000, 98344999 ],
                "ibge" => 4305157
            ]),
            "4305173" => new Map([
                "name" => "Cerro Grande do Sul",
                "cep" => [ 96770000, 96779999 ],
                "ibge" => 4305173
            ]),
            "4305207" => new Map([
                "name" => "Cerro Largo",
                "cep" => [ 97900000, 97919999 ],
                "ibge" => 4305207
            ]),
            "4305306" => new Map([
                "name" => "Chapada",
                "cep" => [ 99530000, 99559999 ],
                "ibge" => 4305306
            ]),
            "4305355" => new Map([
                "name" => "Charqueadas",
                "cep" => [ 96745000, 96749999 ],
                "ibge" => 4305355
            ]),
            "4305371" => new Map([
                "name" => "Charrua",
                "cep" => [ 99960000, 99964999 ],
                "ibge" => 4305371
            ]),
            "4305405" => new Map([
                "name" => "Chiapetta",
                "cep" => [ 98760000, 98764999 ],
                "ibge" => 4305405
            ]),
            "4305439" => new Map([
                "name" => "Chuí",
                "cep" => [ 96255000, 96269999 ],
                "ibge" => 4305439
            ]),
            "4305447" => new Map([
                "name" => "Chuvisca",
                "cep" => [ 96193000, 96194999 ],
                "ibge" => 4305447
            ]),
            "4305454" => new Map([
                "name" => "Cidreira",
                "cep" => [ 95595000, 95598999 ],
                "ibge" => 4305454
            ]),
            "4305504" => new Map([
                "name" => "Ciríaco",
                "cep" => [ 99970000, 99979999 ],
                "ibge" => 4305504
            ]),
            "4305587" => new Map([
                "name" => "Colinas",
                "cep" => [ 95895000, 95899999 ],
                "ibge" => 4305587
            ]),
            "4305603" => new Map([
                "name" => "Colorado",
                "cep" => [ 99460000, 99469999 ],
                "ibge" => 4305603
            ]),
            "4305702" => new Map([
                "name" => "Condor",
                "cep" => [ 98290000, 98299999 ],
                "ibge" => 4305702
            ]),
            "4305801" => new Map([
                "name" => "Constantina",
                "cep" => [ 99680000, 99686999 ],
                "ibge" => 4305801
            ]),
            "4305835" => new Map([
                "name" => "Coqueiro Baixo",
                "cep" => [ 95955000, 95959999 ],
                "ibge" => 4305835
            ]),
            "4305850" => new Map([
                "name" => "Coqueiros do Sul",
                "cep" => [ 99528000, 99529999 ],
                "ibge" => 4305850
            ]),
            "4305871" => new Map([
                "name" => "Coronel Barros",
                "cep" => [ 98735000, 98739999 ],
                "ibge" => 4305871
            ]),
            "4305900" => new Map([
                "name" => "Coronel Bicaco",
                "cep" => [ 98580000, 98589999 ],
                "ibge" => 4305900
            ]),
            "4305934" => new Map([
                "name" => "Coronel Pilar",
                "cep" => [ 95726000, 95726999 ],
                "ibge" => 4305934
            ]),
            "4305959" => new Map([
                "name" => "Cotiporã",
                "cep" => [ 95335000, 95339999 ],
                "ibge" => 4305959
            ]),
            "4305975" => new Map([
                "name" => "Coxilha",
                "cep" => [ 99145000, 99149999 ],
                "ibge" => 4305975
            ]),
            "4306007" => new Map([
                "name" => "Crissiumal",
                "cep" => [ 98640000, 98669999 ],
                "ibge" => 4306007
            ]),
            "4306056" => new Map([
                "name" => "Cristal",
                "cep" => [ 96195000, 96199999 ],
                "ibge" => 4306056
            ]),
            "4306072" => new Map([
                "name" => "Cristal do Sul",
                "cep" => [ 98368000, 98369999 ],
                "ibge" => 4306072
            ]),
            "4306106" => new Map([
                "name" => "Cruz Alta",
                "cep" => [ 98000001, 98059999 ],
                "ibge" => 4306106
            ]),
            "4306130" => new Map([
                "name" => "Cruzaltense",
                "cep" => [ 99665000, 99669999 ],
                "ibge" => 4306130
            ]),
            "4306205" => new Map([
                "name" => "Cruzeiro do Sul",
                "cep" => [ 95930000, 95932999 ],
                "ibge" => 4306205
            ]),
            "4306304" => new Map([
                "name" => "David Canabarro",
                "cep" => [ 99980000, 99989999 ],
                "ibge" => 4306304
            ]),
            "4306320" => new Map([
                "name" => "Derrubadas",
                "cep" => [ 98528000, 98529999 ],
                "ibge" => 4306320
            ]),
            "4306353" => new Map([
                "name" => "Dezesseis de Novembro",
                "cep" => [ 97845000, 97849999 ],
                "ibge" => 4306353
            ]),
            "4306379" => new Map([
                "name" => "Dilermando de Aguiar",
                "cep" => [ 97180000, 97184999 ],
                "ibge" => 4306379
            ]),
            "4306403" => new Map([
                "name" => "Dois Irmãos",
                "cep" => [ 93950000, 93989999 ],
                "ibge" => 4306403
            ]),
            "4306429" => new Map([
                "name" => "Dois Irmãos das Missões",
                "cep" => [ 98385000, 98389999 ],
                "ibge" => 4306429
            ]),
            "4306452" => new Map([
                "name" => "Dois Lajeados",
                "cep" => [ 99220000, 99239999 ],
                "ibge" => 4306452
            ]),
            "4306502" => new Map([
                "name" => "Dom Feliciano",
                "cep" => [ 96190000, 96192999 ],
                "ibge" => 4306502
            ]),
            "4306601" => new Map([
                "name" => "Dom Pedrito",
                "cep" => [ 96450000, 96459999 ],
                "ibge" => 4306601
            ]),
            "4306551" => new Map([
                "name" => "Dom Pedro de Alcântara",
                "cep" => [ 95568000, 95571999 ],
                "ibge" => 4306551
            ]),
            "4306700" => new Map([
                "name" => "Dona Francisca",
                "cep" => [ 97280000, 97299999 ],
                "ibge" => 4306700
            ]),
            "4306734" => new Map([
                "name" => "Doutor Maurício Cardoso",
                "cep" => [ 98925000, 98929999 ],
                "ibge" => 4306734
            ]),
            "4306759" => new Map([
                "name" => "Doutor Ricardo",
                "cep" => [ 95967000, 95969999 ],
                "ibge" => 4306759
            ]),
            "4306767" => new Map([
                "name" => "Eldorado do Sul",
                "cep" => [ 92990000, 92999999 ],
                "ibge" => 4306767
            ]),
            "4306809" => new Map([
                "name" => "Encantado",
                "cep" => [ 95960000, 95964999 ],
                "ibge" => 4306809
            ]),
            "4306908" => new Map([
                "name" => "Encruzilhada do Sul",
                "cep" => [ 96610000, 96634999 ],
                "ibge" => 4306908
            ]),
            "4306924" => new Map([
                "name" => "Engenho Velho",
                "cep" => [ 99698000, 99699999 ],
                "ibge" => 4306924
            ]),
            "4306957" => new Map([
                "name" => "Entre Rios do Sul",
                "cep" => [ 99645000, 99649999 ],
                "ibge" => 4306957
            ]),
            "4306932" => new Map([
                "name" => "Entre-Ijuís",
                "cep" => [ 98855000, 98859999 ],
                "ibge" => 4306932
            ]),
            "4306973" => new Map([
                "name" => "Erebango",
                "cep" => [ 99920000, 99924999 ],
                "ibge" => 4306973
            ]),
            "4307005" => new Map([
                "name" => "Erechim",
                "cep" => [ 99700001, 99717999 ],
                "ibge" => 4307005
            ]),
            "4307054" => new Map([
                "name" => "Ernestina",
                "cep" => [ 99140000, 99144999 ],
                "ibge" => 4307054
            ]),
            "4307203" => new Map([
                "name" => "Erval Grande",
                "cep" => [ 99750000, 99759999 ],
                "ibge" => 4307203
            ]),
            "4307302" => new Map([
                "name" => "Erval Seco",
                "cep" => [ 98390000, 98399999 ],
                "ibge" => 4307302
            ]),
            "4307401" => new Map([
                "name" => "Esmeralda",
                "cep" => [ 95380000, 95389999 ],
                "ibge" => 4307401
            ]),
            "4307450" => new Map([
                "name" => "Esperança do Sul",
                "cep" => [ 98635000, 98639999 ],
                "ibge" => 4307450
            ]),
            "4307500" => new Map([
                "name" => "Espumoso",
                "cep" => [ 99400000, 99429999 ],
                "ibge" => 4307500
            ]),
            "4307559" => new Map([
                "name" => "Estação",
                "cep" => [ 99930000, 99939999 ],
                "ibge" => 4307559
            ]),
            "4307609" => new Map([
                "name" => "Estância Velha",
                "cep" => [ 93600001, 93699999 ],
                "ibge" => 4307609
            ]),
            "4307708" => new Map([
                "name" => "Esteio",
                "cep" => [ 93250001, 93299999 ],
                "ibge" => 4307708
            ]),
            "4307807" => new Map([
                "name" => "Estrela",
                "cep" => [ 95880000, 95884999 ],
                "ibge" => 4307807
            ]),
            "4307815" => new Map([
                "name" => "Estrela Velha",
                "cep" => [ 96990000, 96999999 ],
                "ibge" => 4307815
            ]),
            "4307831" => new Map([
                "name" => "Eugênio de Castro",
                "cep" => [ 98860000, 98864999 ],
                "ibge" => 4307831
            ]),
            "4307864" => new Map([
                "name" => "Fagundes Varela",
                "cep" => [ 95333000, 95333999 ],
                "ibge" => 4307864
            ]),
            "4307906" => new Map([
                "name" => "Farroupilha",
                "cep" => [ 95170001, 95184999 ],
                "ibge" => 4307906
            ]),
            "4308003" => new Map([
                "name" => "Faxinal do Soturno",
                "cep" => [ 97220000, 97229999 ],
                "ibge" => 4308003
            ]),
            "4308052" => new Map([
                "name" => "Faxinalzinho",
                "cep" => [ 99655000, 99659999 ],
                "ibge" => 4308052
            ]),
            "4308078" => new Map([
                "name" => "Fazenda Vilanova",
                "cep" => [ 95875000, 95879999 ],
                "ibge" => 4308078
            ]),
            "4308102" => new Map([
                "name" => "Feliz",
                "cep" => [ 95770000, 95772999 ],
                "ibge" => 4308102
            ]),
            "4308201" => new Map([
                "name" => "Flores da Cunha",
                "cep" => [ 95270000, 95274999 ],
                "ibge" => 4308201
            ]),
            "4308250" => new Map([
                "name" => "Floriano Peixoto",
                "cep" => [ 99910000, 99919999 ],
                "ibge" => 4308250
            ]),
            "4308300" => new Map([
                "name" => "Fontoura Xavier",
                "cep" => [ 99370000, 99379999 ],
                "ibge" => 4308300
            ]),
            "4308409" => new Map([
                "name" => "Formigueiro",
                "cep" => [ 97210000, 97219999 ],
                "ibge" => 4308409
            ]),
            "4308433" => new Map([
                "name" => "Forquetinha",
                "cep" => [ 95937000, 95939999 ],
                "ibge" => 4308433
            ]),
            "4308458" => new Map([
                "name" => "Fortaleza dos Valos",
                "cep" => [ 98125000, 98129999 ],
                "ibge" => 4308458
            ]),
            "4308508" => new Map([
                "name" => "Frederico Westphalen",
                "cep" => [ 98400000, 98409999 ],
                "ibge" => 4308508
            ]),
            "4308607" => new Map([
                "name" => "Garibaldi",
                "cep" => [ 95720000, 95725999 ],
                "ibge" => 4308607
            ]),
            "4308656" => new Map([
                "name" => "Garruchos",
                "cep" => [ 97690000, 97699999 ],
                "ibge" => 4308656
            ]),
            "4308706" => new Map([
                "name" => "Gaurama",
                "cep" => [ 99830000, 99834999 ],
                "ibge" => 4308706
            ]),
            "4308805" => new Map([
                "name" => "General Câmara",
                "cep" => [ 95820000, 95832999 ],
                "ibge" => 4308805
            ]),
            "4308854" => new Map([
                "name" => "Gentil",
                "cep" => [ 99160000, 99164999 ],
                "ibge" => 4308854
            ]),
            "4308904" => new Map([
                "name" => "Getúlio Vargas",
                "cep" => [ 99900000, 99909999 ],
                "ibge" => 4308904
            ]),
            "4309001" => new Map([
                "name" => "Giruá",
                "cep" => [ 98870000, 98894999 ],
                "ibge" => 4309001
            ]),
            "4309050" => new Map([
                "name" => "Glorinha",
                "cep" => [ 94380000, 94399999 ],
                "ibge" => 4309050
            ]),
            "4309100" => new Map([
                "name" => "Gramado",
                "cep" => [ 95670001, 95679999 ],
                "ibge" => 4309100
            ]),
            "4309126" => new Map([
                "name" => "Gramado dos Loureiros",
                "cep" => [ 99605000, 99609999 ],
                "ibge" => 4309126
            ]),
            "4309159" => new Map([
                "name" => "Gramado Xavier",
                "cep" => [ 96875000, 96877999 ],
                "ibge" => 4309159
            ]),
            "4309209" => new Map([
                "name" => "Gravataí",
                "cep" => [ 94000001, 94379999 ],
                "ibge" => 4309209
            ]),
            "4309258" => new Map([
                "name" => "Guabiju",
                "cep" => [ 95355000, 95359999 ],
                "ibge" => 4309258
            ]),
            "4309308" => new Map([
                "name" => "Guaíba",
                "cep" => [ 92700001, 92849999 ],
                "ibge" => 4309308
            ]),
            "4309407" => new Map([
                "name" => "Guaporé",
                "cep" => [ 99200000, 99214999 ],
                "ibge" => 4309407
            ]),
            "4309506" => new Map([
                "name" => "Guarani das Missões",
                "cep" => [ 97950000, 97959999 ],
                "ibge" => 4309506
            ]),
            "4309555" => new Map([
                "name" => "Harmonia",
                "cep" => [ 95785000, 95789999 ],
                "ibge" => 4309555
            ]),
            "4307104" => new Map([
                "name" => "Herval",
                "cep" => [ 96310000, 96329999 ],
                "ibge" => 4307104
            ]),
            "4309571" => new Map([
                "name" => "Herveiras",
                "cep" => [ 96888000, 96889999 ],
                "ibge" => 4309571
            ]),
            "4309605" => new Map([
                "name" => "Horizontina",
                "cep" => [ 98920000, 98924999 ],
                "ibge" => 4309605
            ]),
            "4309654" => new Map([
                "name" => "Hulha Negra",
                "cep" => [ 96460000, 96469999 ],
                "ibge" => 4309654
            ]),
            "4309704" => new Map([
                "name" => "Humaitá",
                "cep" => [ 98670000, 98674999 ],
                "ibge" => 4309704
            ]),
            "4309753" => new Map([
                "name" => "Ibarama",
                "cep" => [ 96925000, 96929999 ],
                "ibge" => 4309753
            ]),
            "4309803" => new Map([
                "name" => "Ibiaçá",
                "cep" => [ 99940000, 99949999 ],
                "ibge" => 4309803
            ]),
            "4309902" => new Map([
                "name" => "Ibiraiaras",
                "cep" => [ 95305000, 95307999 ],
                "ibge" => 4309902
            ]),
            "4309951" => new Map([
                "name" => "Ibirapuitã",
                "cep" => [ 99320000, 99329999 ],
                "ibge" => 4309951
            ]),
            "4310009" => new Map([
                "name" => "Ibirubá",
                "cep" => [ 98200000, 98229999 ],
                "ibge" => 4310009
            ]),
            "4310108" => new Map([
                "name" => "Igrejinha",
                "cep" => [ 95650000, 95659999 ],
                "ibge" => 4310108
            ]),
            "4310207" => new Map([
                "name" => "Ijuí",
                "cep" => [ 98700000, 98732999 ],
                "ibge" => 4310207
            ]),
            "4310306" => new Map([
                "name" => "Ilópolis",
                "cep" => [ 95990000, 95994999 ],
                "ibge" => 4310306
            ]),
            "4310330" => new Map([
                "name" => "Imbé",
                "cep" => [ 95625000, 95629999 ],
                "ibge" => 4310330
            ]),
            "4310363" => new Map([
                "name" => "Imigrante",
                "cep" => [ 95885000, 95889999 ],
                "ibge" => 4310363
            ]),
            "4310405" => new Map([
                "name" => "Independência",
                "cep" => [ 98915000, 98917999 ],
                "ibge" => 4310405
            ]),
            "4310413" => new Map([
                "name" => "Inhacorá",
                "cep" => [ 98765000, 98769999 ],
                "ibge" => 4310413
            ]),
            "4310439" => new Map([
                "name" => "Ipê",
                "cep" => [ 95240000, 95249999 ],
                "ibge" => 4310439
            ]),
            "4310462" => new Map([
                "name" => "Ipiranga do Sul",
                "cep" => [ 99925000, 99929999 ],
                "ibge" => 4310462
            ]),
            "4310504" => new Map([
                "name" => "Iraí",
                "cep" => [ 98460000, 98464999 ],
                "ibge" => 4310504
            ]),
            "4310538" => new Map([
                "name" => "Itaara",
                "cep" => [ 97185000, 97189999 ],
                "ibge" => 4310538
            ]),
            "4310553" => new Map([
                "name" => "Itacurubi",
                "cep" => [ 97685000, 97689999 ],
                "ibge" => 4310553
            ]),
            "4310579" => new Map([
                "name" => "Itapuca",
                "cep" => [ 95997000, 95999999 ],
                "ibge" => 4310579
            ]),
            "4310603" => new Map([
                "name" => "Itaqui",
                "cep" => [ 97650000, 97669999 ],
                "ibge" => 4310603
            ]),
            "4310652" => new Map([
                "name" => "Itati",
                "cep" => [ 95538000, 95539999 ],
                "ibge" => 4310652
            ]),
            "4310702" => new Map([
                "name" => "Itatiba do Sul",
                "cep" => [ 99760000, 99769999 ],
                "ibge" => 4310702
            ]),
            "4310751" => new Map([
                "name" => "Ivorá",
                "cep" => [ 98160000, 98169999 ],
                "ibge" => 4310751
            ]),
            "4310801" => new Map([
                "name" => "Ivoti",
                "cep" => [ 93900000, 93939999 ],
                "ibge" => 4310801
            ]),
            "4310850" => new Map([
                "name" => "Jaboticaba",
                "cep" => [ 98350000, 98359999 ],
                "ibge" => 4310850
            ]),
            "4310876" => new Map([
                "name" => "Jacuizinho",
                "cep" => [ 99457000, 99459999 ],
                "ibge" => 4310876
            ]),
            "4310900" => new Map([
                "name" => "Jacutinga",
                "cep" => [ 99730000, 99734999 ],
                "ibge" => 4310900
            ]),
            "4311007" => new Map([
                "name" => "Jaguarão",
                "cep" => [ 96300000, 96309999 ],
                "ibge" => 4311007
            ]),
            "4311106" => new Map([
                "name" => "Jaguari",
                "cep" => [ 97760000, 97769999 ],
                "ibge" => 4311106
            ]),
            "4311122" => new Map([
                "name" => "Jaquirana",
                "cep" => [ 95420000, 95479999 ],
                "ibge" => 4311122
            ]),
            "4311130" => new Map([
                "name" => "Jari",
                "cep" => [ 98175000, 98179999 ],
                "ibge" => 4311130
            ]),
            "4311155" => new Map([
                "name" => "Jóia",
                "cep" => [ 98180000, 98199999 ],
                "ibge" => 4311155
            ]),
            "4311205" => new Map([
                "name" => "Júlio de Castilhos",
                "cep" => [ 98130000, 98139999 ],
                "ibge" => 4311205
            ]),
            "4311239" => new Map([
                "name" => "Lagoa Bonita do Sul",
                "cep" => [ 96920000, 96924999 ],
                "ibge" => 4311239
            ]),
            "4311270" => new Map([
                "name" => "Lagoa dos Três Cantos",
                "cep" => [ 99495000, 99499999 ],
                "ibge" => 4311270
            ]),
            "4311304" => new Map([
                "name" => "Lagoa Vermelha",
                "cep" => [ 95300000, 95304999 ],
                "ibge" => 4311304
            ]),
            "4311254" => new Map([
                "name" => "Lagoão",
                "cep" => [ 99340000, 99344999 ],
                "ibge" => 4311254
            ]),
            "4311403" => new Map([
                "name" => "Lajeado",
                "cep" => [ 95900001, 95914999 ],
                "ibge" => 4311403
            ]),
            "4311429" => new Map([
                "name" => "Lajeado do Bugre",
                "cep" => [ 98320000, 98322999 ],
                "ibge" => 4311429
            ]),
            "4311502" => new Map([
                "name" => "Lavras do Sul",
                "cep" => [ 97390000, 97399999 ],
                "ibge" => 4311502
            ]),
            "4311601" => new Map([
                "name" => "Liberato Salzano",
                "cep" => [ 99690000, 99697999 ],
                "ibge" => 4311601
            ]),
            "4311627" => new Map([
                "name" => "Lindolfo Collor",
                "cep" => [ 93940000, 93944999 ],
                "ibge" => 4311627
            ]),
            "4311643" => new Map([
                "name" => "Linha Nova",
                "cep" => [ 95768000, 95769999 ],
                "ibge" => 4311643
            ]),
            "4311718" => new Map([
                "name" => "Maçambará",
                "cep" => [ 97645000, 97649999 ],
                "ibge" => 4311718
            ]),
            "4311700" => new Map([
                "name" => "Machadinho",
                "cep" => [ 99880000, 99889999 ],
                "ibge" => 4311700
            ]),
            "4311734" => new Map([
                "name" => "Mampituba",
                "cep" => [ 95572000, 95574999 ],
                "ibge" => 4311734
            ]),
            "4311759" => new Map([
                "name" => "Manoel Viana",
                "cep" => [ 97640000, 97644999 ],
                "ibge" => 4311759
            ]),
            "4311775" => new Map([
                "name" => "Maquiné",
                "cep" => [ 95530000, 95534999 ],
                "ibge" => 4311775
            ]),
            "4311791" => new Map([
                "name" => "Maratá",
                "cep" => [ 95793000, 95794999 ],
                "ibge" => 4311791
            ]),
            "4311809" => new Map([
                "name" => "Marau",
                "cep" => [ 99150000, 99154999 ],
                "ibge" => 4311809
            ]),
            "4311908" => new Map([
                "name" => "Marcelino Ramos",
                "cep" => [ 99800000, 99809999 ],
                "ibge" => 4311908
            ]),
            "4311981" => new Map([
                "name" => "Mariana Pimentel",
                "cep" => [ 92900000, 92989999 ],
                "ibge" => 4311981
            ]),
            "4312005" => new Map([
                "name" => "Mariano Moro",
                "cep" => [ 99790000, 99794999 ],
                "ibge" => 4312005
            ]),
            "4312054" => new Map([
                "name" => "Marques de Souza",
                "cep" => [ 95923000, 95924999 ],
                "ibge" => 4312054
            ]),
            "4312104" => new Map([
                "name" => "Mata",
                "cep" => [ 97410000, 97417999 ],
                "ibge" => 4312104
            ]),
            "4312138" => new Map([
                "name" => "Mato Castelhano",
                "cep" => [ 99180000, 99189999 ],
                "ibge" => 4312138
            ]),
            "4312153" => new Map([
                "name" => "Mato Leitão",
                "cep" => [ 95835000, 95839999 ],
                "ibge" => 4312153
            ]),
            "4312179" => new Map([
                "name" => "Mato Queimado",
                "cep" => [ 97935000, 97939999 ],
                "ibge" => 4312179
            ]),
            "4312203" => new Map([
                "name" => "Maximiliano de Almeida",
                "cep" => [ 99890000, 99894999 ],
                "ibge" => 4312203
            ]),
            "4312252" => new Map([
                "name" => "Minas do Leão",
                "cep" => [ 96755000, 96759999 ],
                "ibge" => 4312252
            ]),
            "4312302" => new Map([
                "name" => "Miraguaí",
                "cep" => [ 98540000, 98549999 ],
                "ibge" => 4312302
            ]),
            "4312351" => new Map([
                "name" => "Montauri",
                "cep" => [ 99255000, 99259999 ],
                "ibge" => 4312351
            ]),
            "4312377" => new Map([
                "name" => "Monte Alegre dos Campos",
                "cep" => [ 95236000, 95239999 ],
                "ibge" => 4312377
            ]),
            "4312385" => new Map([
                "name" => "Monte Belo do Sul",
                "cep" => [ 95718000, 95719999 ],
                "ibge" => 4312385
            ]),
            "4312401" => new Map([
                "name" => "Montenegro",
                "cep" => [ 92510001, 92539999 ],
                "ibge" => 4312401
            ]),
            "4312427" => new Map([
                "name" => "Mormaço",
                "cep" => [ 99315000, 99319999 ],
                "ibge" => 4312427
            ]),
            "4312443" => new Map([
                "name" => "Morrinhos do Sul",
                "cep" => [ 95577000, 95579999 ],
                "ibge" => 4312443
            ]),
            "4312450" => new Map([
                "name" => "Morro Redondo",
                "cep" => [ 96150000, 96154999 ],
                "ibge" => 4312450
            ]),
            "4312476" => new Map([
                "name" => "Morro Reuter",
                "cep" => [ 93990000, 93994999 ],
                "ibge" => 4312476
            ]),
            "4312500" => new Map([
                "name" => "Mostardas",
                "cep" => [ 96270000, 96289999 ],
                "ibge" => 4312500
            ]),
            "4312609" => new Map([
                "name" => "Muçum",
                "cep" => [ 95970000, 95971999 ],
                "ibge" => 4312609
            ]),
            "4312617" => new Map([
                "name" => "Muitos Capões",
                "cep" => [ 95230000, 95235999 ],
                "ibge" => 4312617
            ]),
            "4312625" => new Map([
                "name" => "Muliterno",
                "cep" => [ 99990000, 99999999 ],
                "ibge" => 4312625
            ]),
            "4312658" => new Map([
                "name" => "Não-Me-Toque",
                "cep" => [ 99470000, 99489999 ],
                "ibge" => 4312658
            ]),
            "4312674" => new Map([
                "name" => "Nicolau Vergueiro",
                "cep" => [ 99175000, 99179999 ],
                "ibge" => 4312674
            ]),
            "4312708" => new Map([
                "name" => "Nonoai",
                "cep" => [ 99600000, 99604999 ],
                "ibge" => 4312708
            ]),
            "4312757" => new Map([
                "name" => "Nova Alvorada",
                "cep" => [ 95985000, 95989999 ],
                "ibge" => 4312757
            ]),
            "4312807" => new Map([
                "name" => "Nova Araçá",
                "cep" => [ 95350000, 95354999 ],
                "ibge" => 4312807
            ]),
            "4312906" => new Map([
                "name" => "Nova Bassano",
                "cep" => [ 95340000, 95344999 ],
                "ibge" => 4312906
            ]),
            "4312955" => new Map([
                "name" => "Nova Boa Vista",
                "cep" => [ 99580000, 99584999 ],
                "ibge" => 4312955
            ]),
            "4313003" => new Map([
                "name" => "Nova Bréscia",
                "cep" => [ 95950000, 95954999 ],
                "ibge" => 4313003
            ]),
            "4313011" => new Map([
                "name" => "Nova Candelária",
                "cep" => [ 98919000, 98919999 ],
                "ibge" => 4313011
            ]),
            "4313037" => new Map([
                "name" => "Nova Esperança do Sul",
                "cep" => [ 97770000, 97799999 ],
                "ibge" => 4313037
            ]),
            "4313060" => new Map([
                "name" => "Nova Hartz",
                "cep" => [ 93890000, 93899999 ],
                "ibge" => 4313060
            ]),
            "4313086" => new Map([
                "name" => "Nova Pádua",
                "cep" => [ 95275000, 95279999 ],
                "ibge" => 4313086
            ]),
            "4313102" => new Map([
                "name" => "Nova Palma",
                "cep" => [ 97250000, 97279999 ],
                "ibge" => 4313102
            ]),
            "4313201" => new Map([
                "name" => "Nova Petrópolis",
                "cep" => [ 95150000, 95165999 ],
                "ibge" => 4313201
            ]),
            "4313300" => new Map([
                "name" => "Nova Prata",
                "cep" => [ 95320000, 95324999 ],
                "ibge" => 4313300
            ]),
            "4313334" => new Map([
                "name" => "Nova Ramada",
                "cep" => [ 98758000, 98759999 ],
                "ibge" => 4313334
            ]),
            "4313359" => new Map([
                "name" => "Nova Roma do Sul",
                "cep" => [ 95260000, 95269999 ],
                "ibge" => 4313359
            ]),
            "4313375" => new Map([
                "name" => "Nova Santa Rita",
                "cep" => [ 92480000, 92499999 ],
                "ibge" => 4313375
            ]),
            "4313490" => new Map([
                "name" => "Novo Barreiro",
                "cep" => [ 98338000, 98339999 ],
                "ibge" => 4313490
            ]),
            "4313391" => new Map([
                "name" => "Novo Cabrais",
                "cep" => [ 96545000, 96569999 ],
                "ibge" => 4313391
            ]),
            "4313409" => new Map([
                "name" => "Novo Hamburgo",
                "cep" => [ 93300001, 93599999 ],
                "ibge" => 4313409
            ]),
            "4313425" => new Map([
                "name" => "Novo Machado",
                "cep" => [ 98955000, 98957999 ],
                "ibge" => 4313425
            ]),
            "4313441" => new Map([
                "name" => "Novo Tiradentes",
                "cep" => [ 98370000, 98379999 ],
                "ibge" => 4313441
            ]),
            "4313466" => new Map([
                "name" => "Novo Xingu",
                "cep" => [ 99687000, 99689999 ],
                "ibge" => 4313466
            ]),
            "4313508" => new Map([
                "name" => "Osório",
                "cep" => [ 95520000, 95529999 ],
                "ibge" => 4313508
            ]),
            "4313607" => new Map([
                "name" => "Paim Filho",
                "cep" => [ 99850000, 99854999 ],
                "ibge" => 4313607
            ]),
            "4313656" => new Map([
                "name" => "Palmares do Sul",
                "cep" => [ 95540000, 95551999 ],
                "ibge" => 4313656
            ]),
            "4313706" => new Map([
                "name" => "Palmeira das Missões",
                "cep" => [ 98300000, 98319999 ],
                "ibge" => 4313706
            ]),
            "4313805" => new Map([
                "name" => "Palmitinho",
                "cep" => [ 98430000, 98434999 ],
                "ibge" => 4313805
            ]),
            "4313904" => new Map([
                "name" => "Panambi",
                "cep" => [ 98280000, 98289999 ],
                "ibge" => 4313904
            ]),
            "4313953" => new Map([
                "name" => "Pantano Grande",
                "cep" => [ 96690000, 96699999 ],
                "ibge" => 4313953
            ]),
            "4314001" => new Map([
                "name" => "Paraí",
                "cep" => [ 95360000, 95364999 ],
                "ibge" => 4314001
            ]),
            "4314027" => new Map([
                "name" => "Paraíso do Sul",
                "cep" => [ 96530000, 96534999 ],
                "ibge" => 4314027
            ]),
            "4314035" => new Map([
                "name" => "Pareci Novo",
                "cep" => [ 95783000, 95784999 ],
                "ibge" => 4314035
            ]),
            "4314050" => new Map([
                "name" => "Parobé",
                "cep" => [ 95630000, 95649999 ],
                "ibge" => 4314050
            ]),
            "4314068" => new Map([
                "name" => "Passa Sete",
                "cep" => [ 96908000, 96909999 ],
                "ibge" => 4314068
            ]),
            "4314076" => new Map([
                "name" => "Passo do Sobrado",
                "cep" => [ 96685000, 96689999 ],
                "ibge" => 4314076
            ]),
            "4314100" => new Map([
                "name" => "Passo Fundo",
                "cep" => [ 99000001, 99139999 ],
                "ibge" => 4314100
            ]),
            "4314134" => new Map([
                "name" => "Paulo Bento",
                "cep" => [ 99718000, 99719999 ],
                "ibge" => 4314134
            ]),
            "4314159" => new Map([
                "name" => "Paverama",
                "cep" => [ 95865000, 95869999 ],
                "ibge" => 4314159
            ]),
            "4314175" => new Map([
                "name" => "Pedras Altas",
                "cep" => [ 96487000, 96489999 ],
                "ibge" => 4314175
            ]),
            "4314209" => new Map([
                "name" => "Pedro Osório",
                "cep" => [ 96360000, 96394999 ],
                "ibge" => 4314209
            ]),
            "4314308" => new Map([
                "name" => "Pejuçara",
                "cep" => [ 98270000, 98279999 ],
                "ibge" => 4314308
            ]),
            "4314407" => new Map([
                "name" => "Pelotas",
                "cep" => [ 96000001, 96147999 ],
                "ibge" => 4314407
            ]),
            "4314423" => new Map([
                "name" => "Picada Café",
                "cep" => [ 95166000, 95169999 ],
                "ibge" => 4314423
            ]),
            "4314456" => new Map([
                "name" => "Pinhal",
                "cep" => [ 98345000, 98349999 ],
                "ibge" => 4314456
            ]),
            "4314464" => new Map([
                "name" => "Pinhal da Serra",
                "cep" => [ 95390000, 95399999 ],
                "ibge" => 4314464
            ]),
            "4314472" => new Map([
                "name" => "Pinhal Grande",
                "cep" => [ 98150000, 98159999 ],
                "ibge" => 4314472
            ]),
            "4314498" => new Map([
                "name" => "Pinheirinho do Vale",
                "cep" => [ 98435000, 98439999 ],
                "ibge" => 4314498
            ]),
            "4314506" => new Map([
                "name" => "Pinheiro Machado",
                "cep" => [ 96470000, 96486999 ],
                "ibge" => 4314506
            ]),
            "4314548" => new Map([
                "name" => "Pinto Bandeira",
                "cep" => [ 95717000, 95717999 ],
                "ibge" => 4314548
            ]),
            "4314555" => new Map([
                "name" => "Pirapó",
                "cep" => [ 97885000, 97899999 ],
                "ibge" => 4314555
            ]),
            "4314605" => new Map([
                "name" => "Piratini",
                "cep" => [ 96490000, 96494999 ],
                "ibge" => 4314605
            ]),
            "4314704" => new Map([
                "name" => "Planalto",
                "cep" => [ 98470000, 98479999 ],
                "ibge" => 4314704
            ]),
            "4314753" => new Map([
                "name" => "Poço das Antas",
                "cep" => [ 95740000, 95744999 ],
                "ibge" => 4314753
            ]),
            "4314779" => new Map([
                "name" => "Pontão",
                "cep" => [ 99190000, 99199999 ],
                "ibge" => 4314779
            ]),
            "4314787" => new Map([
                "name" => "Ponte Preta",
                "cep" => [ 99735000, 99739999 ],
                "ibge" => 4314787
            ]),
            "4314803" => new Map([
                "name" => "Portão",
                "cep" => [ 93180000, 93199999 ],
                "ibge" => 4314803
            ]),
            "4314902" => new Map([
                "name" => "Porto Alegre",
                "cep" => [ 90000001, 91999999 ],
                "ibge" => 4314902
            ]),
            "4315008" => new Map([
                "name" => "Porto Lucena",
                "cep" => [ 98980000, 98984999 ],
                "ibge" => 4315008
            ]),
            "4315057" => new Map([
                "name" => "Porto Mauá",
                "cep" => [ 98947000, 98949999 ],
                "ibge" => 4315057
            ]),
            "4315073" => new Map([
                "name" => "Porto Vera Cruz",
                "cep" => [ 98985000, 98994999 ],
                "ibge" => 4315073
            ]),
            "4315107" => new Map([
                "name" => "Porto Xavier",
                "cep" => [ 98995000, 98999999 ],
                "ibge" => 4315107
            ]),
            "4315131" => new Map([
                "name" => "Pouso Novo",
                "cep" => [ 95945000, 95947999 ],
                "ibge" => 4315131
            ]),
            "4315149" => new Map([
                "name" => "Presidente Lucena",
                "cep" => [ 93945000, 93949999 ],
                "ibge" => 4315149
            ]),
            "4315156" => new Map([
                "name" => "Progresso",
                "cep" => [ 95925000, 95929999 ],
                "ibge" => 4315156
            ]),
            "4315172" => new Map([
                "name" => "Protásio Alves",
                "cep" => [ 95345000, 95349999 ],
                "ibge" => 4315172
            ]),
            "4315206" => new Map([
                "name" => "Putinga",
                "cep" => [ 95975000, 95979999 ],
                "ibge" => 4315206
            ]),
            "4315305" => new Map([
                "name" => "Quaraí",
                "cep" => [ 97560000, 97569999 ],
                "ibge" => 4315305
            ]),
            "4315313" => new Map([
                "name" => "Quatro Irmãos",
                "cep" => [ 99720000, 99724999 ],
                "ibge" => 4315313
            ]),
            "4315321" => new Map([
                "name" => "Quevedos",
                "cep" => [ 98140000, 98149999 ],
                "ibge" => 4315321
            ]),
            "4315354" => new Map([
                "name" => "Quinze de Novembro",
                "cep" => [ 98230000, 98239999 ],
                "ibge" => 4315354
            ]),
            "4315404" => new Map([
                "name" => "Redentora",
                "cep" => [ 98550000, 98559999 ],
                "ibge" => 4315404
            ]),
            "4315453" => new Map([
                "name" => "Relvado",
                "cep" => [ 95965000, 95966999 ],
                "ibge" => 4315453
            ]),
            "4315503" => new Map([
                "name" => "Restinga Seca",
                "cep" => [ 97200000, 97209999 ],
                "ibge" => 4315503
            ]),
            "4315552" => new Map([
                "name" => "Rio dos Índios",
                "cep" => [ 99610000, 99614999 ],
                "ibge" => 4315552
            ]),
            "4315602" => new Map([
                "name" => "Rio Grande",
                "cep" => [ 96200001, 96224999 ],
                "ibge" => 4315602
            ]),
            "4315701" => new Map([
                "name" => "Rio Pardo",
                "cep" => [ 96640000, 96684999 ],
                "ibge" => 4315701
            ]),
            "4315750" => new Map([
                "name" => "Riozinho",
                "cep" => [ 95695000, 95699999 ],
                "ibge" => 4315750
            ]),
            "4315800" => new Map([
                "name" => "Roca Sales",
                "cep" => [ 95735000, 95739999 ],
                "ibge" => 4315800
            ]),
            "4315909" => new Map([
                "name" => "Rodeio Bonito",
                "cep" => [ 98360000, 98367999 ],
                "ibge" => 4315909
            ]),
            "4315958" => new Map([
                "name" => "Rolador",
                "cep" => [ 97843000, 97844999 ],
                "ibge" => 4315958
            ]),
            "4316006" => new Map([
                "name" => "Rolante",
                "cep" => [ 95690000, 95694999 ],
                "ibge" => 4316006
            ]),
            "4316105" => new Map([
                "name" => "Ronda Alta",
                "cep" => [ 99670000, 99674999 ],
                "ibge" => 4316105
            ]),
            "4316204" => new Map([
                "name" => "Rondinha",
                "cep" => [ 99590000, 99599999 ],
                "ibge" => 4316204
            ]),
            "4316303" => new Map([
                "name" => "Roque Gonzales",
                "cep" => [ 97970000, 97979999 ],
                "ibge" => 4316303
            ]),
            "4316402" => new Map([
                "name" => "Rosário do Sul",
                "cep" => [ 97590000, 97609999 ],
                "ibge" => 4316402
            ]),
            "4316428" => new Map([
                "name" => "Sagrada Família",
                "cep" => [ 98330000, 98334999 ],
                "ibge" => 4316428
            ]),
            "4316436" => new Map([
                "name" => "Saldanha Marinho",
                "cep" => [ 98250000, 98269999 ],
                "ibge" => 4316436
            ]),
            "4316451" => new Map([
                "name" => "Salto do Jacuí",
                "cep" => [ 99440000, 99449999 ],
                "ibge" => 4316451
            ]),
            "4316477" => new Map([
                "name" => "Salvador das Missões",
                "cep" => [ 97940000, 97949999 ],
                "ibge" => 4316477
            ]),
            "4316501" => new Map([
                "name" => "Salvador do Sul",
                "cep" => [ 95750000, 95754999 ],
                "ibge" => 4316501
            ]),
            "4316600" => new Map([
                "name" => "Sananduva",
                "cep" => [ 99840000, 99849999 ],
                "ibge" => 4316600
            ]),
            "4316709" => new Map([
                "name" => "Santa Bárbara do Sul",
                "cep" => [ 98240000, 98249999 ],
                "ibge" => 4316709
            ]),
            "4316733" => new Map([
                "name" => "Santa Cecília do Sul",
                "cep" => [ 99952000, 99954999 ],
                "ibge" => 4316733
            ]),
            "4316758" => new Map([
                "name" => "Santa Clara do Sul",
                "cep" => [ 95915000, 95917999 ],
                "ibge" => 4316758
            ]),
            "4316808" => new Map([
                "name" => "Santa Cruz do Sul",
                "cep" => [ 96800001, 96874999 ],
                "ibge" => 4316808
            ]),
            "4316972" => new Map([
                "name" => "Santa Margarida do Sul",
                "cep" => [ 97335000, 97339999 ],
                "ibge" => 4316972
            ]),
            "4316907" => new Map([
                "name" => "Santa Maria",
                "cep" => [ 97000001, 97179999 ],
                "ibge" => 4316907
            ]),
            "4316956" => new Map([
                "name" => "Santa Maria do Herval",
                "cep" => [ 93995000, 93999999 ],
                "ibge" => 4316956
            ]),
            "4317202" => new Map([
                "name" => "Santa Rosa",
                "cep" => [ 98780001, 98799999 ],
                "ibge" => 4317202
            ]),
            "4317251" => new Map([
                "name" => "Santa Tereza",
                "cep" => [ 95715000, 95716999 ],
                "ibge" => 4317251
            ]),
            "4317301" => new Map([
                "name" => "Santa Vitória do Palmar",
                "cep" => [ 96230000, 96254999 ],
                "ibge" => 4317301
            ]),
            "4317004" => new Map([
                "name" => "Santana da Boa Vista",
                "cep" => [ 96590000, 96599999 ],
                "ibge" => 4317004
            ]),
            "4317103" => new Map([
                "name" => "Sant'Ana do Livramento",
                "cep" => [ 97570001, 97589999 ],
                "ibge" => 4317103
            ]),
            "4317400" => new Map([
                "name" => "Santiago",
                "cep" => [ 97700001, 97752999 ],
                "ibge" => 4317400
            ]),
            "4317509" => new Map([
                "name" => "Santo Ângelo",
                "cep" => [ 98800001, 98849999 ],
                "ibge" => 4317509
            ]),
            "4317608" => new Map([
                "name" => "Santo Antônio da Patrulha",
                "cep" => [ 95500000, 95514999 ],
                "ibge" => 4317608
            ]),
            "4317707" => new Map([
                "name" => "Santo Antônio das Missões",
                "cep" => [ 97870000, 97879999 ],
                "ibge" => 4317707
            ]),
            "4317558" => new Map([
                "name" => "Santo Antônio do Palma",
                "cep" => [ 99265000, 99269999 ],
                "ibge" => 4317558
            ]),
            "4317756" => new Map([
                "name" => "Santo Antônio do Planalto",
                "cep" => [ 99525000, 99527999 ],
                "ibge" => 4317756
            ]),
            "4317806" => new Map([
                "name" => "Santo Augusto",
                "cep" => [ 98590000, 98594999 ],
                "ibge" => 4317806
            ]),
            "4317905" => new Map([
                "name" => "Santo Cristo",
                "cep" => [ 98960000, 98969999 ],
                "ibge" => 4317905
            ]),
            "4317954" => new Map([
                "name" => "Santo Expedito do Sul",
                "cep" => [ 99895000, 99899999 ],
                "ibge" => 4317954
            ]),
            "4318002" => new Map([
                "name" => "São Borja",
                "cep" => [ 97670000, 97684999 ],
                "ibge" => 4318002
            ]),
            "4318051" => new Map([
                "name" => "São Domingos do Sul",
                "cep" => [ 99270000, 99289999 ],
                "ibge" => 4318051
            ]),
            "4318101" => new Map([
                "name" => "São Francisco de Assis",
                "cep" => [ 97610000, 97639999 ],
                "ibge" => 4318101
            ]),
            "4318200" => new Map([
                "name" => "São Francisco de Paula",
                "cep" => [ 95400000, 95419999 ],
                "ibge" => 4318200
            ]),
            "4318309" => new Map([
                "name" => "São Gabriel",
                "cep" => [ 97300001, 97334999 ],
                "ibge" => 4318309
            ]),
            "4318408" => new Map([
                "name" => "São Jerônimo",
                "cep" => [ 96700000, 96734999 ],
                "ibge" => 4318408
            ]),
            "4318424" => new Map([
                "name" => "São João da Urtiga",
                "cep" => [ 99855000, 99859999 ],
                "ibge" => 4318424
            ]),
            "4318432" => new Map([
                "name" => "São João do Polêsine",
                "cep" => [ 97230000, 97249999 ],
                "ibge" => 4318432
            ]),
            "4318440" => new Map([
                "name" => "São Jorge",
                "cep" => [ 95365000, 95369999 ],
                "ibge" => 4318440
            ]),
            "4318457" => new Map([
                "name" => "São José das Missões",
                "cep" => [ 98325000, 98329999 ],
                "ibge" => 4318457
            ]),
            "4318465" => new Map([
                "name" => "São José do Herval",
                "cep" => [ 99380000, 99399999 ],
                "ibge" => 4318465
            ]),
            "4318481" => new Map([
                "name" => "São José do Hortêncio",
                "cep" => [ 95755000, 95757999 ],
                "ibge" => 4318481
            ]),
            "4318499" => new Map([
                "name" => "São José do Inhacorá",
                "cep" => [ 98958000, 98959999 ],
                "ibge" => 4318499
            ]),
            "4318507" => new Map([
                "name" => "São José do Norte",
                "cep" => [ 96225000, 96229999 ],
                "ibge" => 4318507
            ]),
            "4318606" => new Map([
                "name" => "São José do Ouro",
                "cep" => [ 99870000, 99877999 ],
                "ibge" => 4318606
            ]),
            "4318614" => new Map([
                "name" => "São José do Sul",
                "cep" => [ 95748000, 95749999 ],
                "ibge" => 4318614
            ]),
            "4318622" => new Map([
                "name" => "São José dos Ausentes",
                "cep" => [ 95280000, 95289999 ],
                "ibge" => 4318622
            ]),
            "4318705" => new Map([
                "name" => "São Leopoldo",
                "cep" => [ 93000001, 93179999 ],
                "ibge" => 4318705
            ]),
            "4318804" => new Map([
                "name" => "São Lourenço do Sul",
                "cep" => [ 96170000, 96177999 ],
                "ibge" => 4318804
            ]),
            "4318903" => new Map([
                "name" => "São Luiz Gonzaga",
                "cep" => [ 97800000, 97842999 ],
                "ibge" => 4318903
            ]),
            "4319000" => new Map([
                "name" => "São Marcos",
                "cep" => [ 95190000, 95199999 ],
                "ibge" => 4319000
            ]),
            "4319109" => new Map([
                "name" => "São Martinho",
                "cep" => [ 98690000, 98699999 ],
                "ibge" => 4319109
            ]),
            "4319125" => new Map([
                "name" => "São Martinho da Serra",
                "cep" => [ 97190000, 97194999 ],
                "ibge" => 4319125
            ]),
            "4319158" => new Map([
                "name" => "São Miguel das Missões",
                "cep" => [ 98865000, 98869999 ],
                "ibge" => 4319158
            ]),
            "4319208" => new Map([
                "name" => "São Nicolau",
                "cep" => [ 97880000, 97884999 ],
                "ibge" => 4319208
            ]),
            "4319307" => new Map([
                "name" => "São Paulo das Missões",
                "cep" => [ 97980000, 97999999 ],
                "ibge" => 4319307
            ]),
            "4319356" => new Map([
                "name" => "São Pedro da Serra",
                "cep" => [ 95758000, 95759999 ],
                "ibge" => 4319356
            ]),
            "4319364" => new Map([
                "name" => "São Pedro das Missões",
                "cep" => [ 98323000, 98324999 ],
                "ibge" => 4319364
            ]),
            "4319372" => new Map([
                "name" => "São Pedro do Butiá",
                "cep" => [ 97920000, 97929999 ],
                "ibge" => 4319372
            ]),
            "4319406" => new Map([
                "name" => "São Pedro do Sul",
                "cep" => [ 97400000, 97409999 ],
                "ibge" => 4319406
            ]),
            "4319505" => new Map([
                "name" => "São Sebastião do Caí",
                "cep" => [ 95760000, 95764999 ],
                "ibge" => 4319505
            ]),
            "4319604" => new Map([
                "name" => "São Sepé",
                "cep" => [ 97340000, 97384999 ],
                "ibge" => 4319604
            ]),
            "4319703" => new Map([
                "name" => "São Valentim",
                "cep" => [ 99640000, 99644999 ],
                "ibge" => 4319703
            ]),
            "4319711" => new Map([
                "name" => "São Valentim do Sul",
                "cep" => [ 99240000, 99249999 ],
                "ibge" => 4319711
            ]),
            "4319737" => new Map([
                "name" => "São Valério do Sul",
                "cep" => [ 98595000, 98599999 ],
                "ibge" => 4319737
            ]),
            "4319752" => new Map([
                "name" => "São Vendelino",
                "cep" => [ 95795000, 95799999 ],
                "ibge" => 4319752
            ]),
            "4319802" => new Map([
                "name" => "São Vicente do Sul",
                "cep" => [ 97420000, 97449999 ],
                "ibge" => 4319802
            ]),
            "4319901" => new Map([
                "name" => "Sapiranga",
                "cep" => [ 93800001, 93879999 ],
                "ibge" => 4319901
            ]),
            "4320008" => new Map([
                "name" => "Sapucaia do Sul",
                "cep" => [ 93200001, 93249999 ],
                "ibge" => 4320008
            ]),
            "4320107" => new Map([
                "name" => "Sarandi",
                "cep" => [ 99560000, 99579999 ],
                "ibge" => 4320107
            ]),
            "4320206" => new Map([
                "name" => "Seberi",
                "cep" => [ 98380000, 98384999 ],
                "ibge" => 4320206
            ]),
            "4320230" => new Map([
                "name" => "Sede Nova",
                "cep" => [ 98675000, 98679999 ],
                "ibge" => 4320230
            ]),
            "4320263" => new Map([
                "name" => "Segredo",
                "cep" => [ 96910000, 96919999 ],
                "ibge" => 4320263
            ]),
            "4320305" => new Map([
                "name" => "Selbach",
                "cep" => [ 99450000, 99456999 ],
                "ibge" => 4320305
            ]),
            "4320321" => new Map([
                "name" => "Senador Salgado Filho",
                "cep" => [ 98895000, 98897999 ],
                "ibge" => 4320321
            ]),
            "4320354" => new Map([
                "name" => "Sentinela do Sul",
                "cep" => [ 96765000, 96769999 ],
                "ibge" => 4320354
            ]),
            "4320404" => new Map([
                "name" => "Serafina Corrêa",
                "cep" => [ 99250000, 99254999 ],
                "ibge" => 4320404
            ]),
            "4320453" => new Map([
                "name" => "Sério",
                "cep" => [ 95918000, 95919999 ],
                "ibge" => 4320453
            ]),
            "4320503" => new Map([
                "name" => "Sertão",
                "cep" => [ 99170000, 99174999 ],
                "ibge" => 4320503
            ]),
            "4320552" => new Map([
                "name" => "Sertão Santana",
                "cep" => [ 92850000, 92869999 ],
                "ibge" => 4320552
            ]),
            "4320578" => new Map([
                "name" => "Sete de Setembro",
                "cep" => [ 97960000, 97969999 ],
                "ibge" => 4320578
            ]),
            "4320602" => new Map([
                "name" => "Severiano de Almeida",
                "cep" => [ 99810000, 99819999 ],
                "ibge" => 4320602
            ]),
            "4320651" => new Map([
                "name" => "Silveira Martins",
                "cep" => [ 97195000, 97199999 ],
                "ibge" => 4320651
            ]),
            "4320677" => new Map([
                "name" => "Sinimbu",
                "cep" => [ 96890000, 96899999 ],
                "ibge" => 4320677
            ]),
            "4320701" => new Map([
                "name" => "Sobradinho",
                "cep" => [ 96900000, 96907999 ],
                "ibge" => 4320701
            ]),
            "4320800" => new Map([
                "name" => "Soledade",
                "cep" => [ 99300000, 99314999 ],
                "ibge" => 4320800
            ]),
            "4320859" => new Map([
                "name" => "Tabaí",
                "cep" => [ 95863000, 95864999 ],
                "ibge" => 4320859
            ]),
            "4320909" => new Map([
                "name" => "Tapejara",
                "cep" => [ 99950000, 99951999 ],
                "ibge" => 4320909
            ]),
            "4321006" => new Map([
                "name" => "Tapera",
                "cep" => [ 99490000, 99494999 ],
                "ibge" => 4321006
            ]),
            "4321105" => new Map([
                "name" => "Tapes",
                "cep" => [ 96760000, 96764999 ],
                "ibge" => 4321105
            ]),
            "4321204" => new Map([
                "name" => "Taquara",
                "cep" => [ 95600001, 95624999 ],
                "ibge" => 4321204
            ]),
            "4321303" => new Map([
                "name" => "Taquari",
                "cep" => [ 95860000, 95862999 ],
                "ibge" => 4321303
            ]),
            "4321329" => new Map([
                "name" => "Taquaruçu do Sul",
                "cep" => [ 98410000, 98414999 ],
                "ibge" => 4321329
            ]),
            "4321352" => new Map([
                "name" => "Tavares",
                "cep" => [ 96290000, 96299999 ],
                "ibge" => 4321352
            ]),
            "4321402" => new Map([
                "name" => "Tenente Portela",
                "cep" => [ 98500000, 98527999 ],
                "ibge" => 4321402
            ]),
            "4321436" => new Map([
                "name" => "Terra de Areia",
                "cep" => [ 95535000, 95537999 ],
                "ibge" => 4321436
            ]),
            "4321451" => new Map([
                "name" => "Teutônia",
                "cep" => [ 95890000, 95892999 ],
                "ibge" => 4321451
            ]),
            "4321469" => new Map([
                "name" => "Tio Hugo",
                "cep" => [ 99345000, 99349999 ],
                "ibge" => 4321469
            ]),
            "4321477" => new Map([
                "name" => "Tiradentes do Sul",
                "cep" => [ 98680000, 98689999 ],
                "ibge" => 4321477
            ]),
            "4321493" => new Map([
                "name" => "Toropi",
                "cep" => [ 97418000, 97419999 ],
                "ibge" => 4321493
            ]),
            "4321501" => new Map([
                "name" => "Torres",
                "cep" => [ 95560000, 95567999 ],
                "ibge" => 4321501
            ]),
            "4321600" => new Map([
                "name" => "Tramandaí",
                "cep" => [ 95590000, 95594999 ],
                "ibge" => 4321600
            ]),
            "4321626" => new Map([
                "name" => "Travesseiro",
                "cep" => [ 95948000, 95949999 ],
                "ibge" => 4321626
            ]),
            "4321634" => new Map([
                "name" => "Três Arroios",
                "cep" => [ 99725000, 99729999 ],
                "ibge" => 4321634
            ]),
            "4321667" => new Map([
                "name" => "Três Cachoeiras",
                "cep" => [ 95580000, 95584999 ],
                "ibge" => 4321667
            ]),
            "4321709" => new Map([
                "name" => "Três Coroas",
                "cep" => [ 95660000, 95669999 ],
                "ibge" => 4321709
            ]),
            "4321808" => new Map([
                "name" => "Três de Maio",
                "cep" => [ 98910000, 98914999 ],
                "ibge" => 4321808
            ]),
            "4321832" => new Map([
                "name" => "Três Forquilhas",
                "cep" => [ 95575000, 95576999 ],
                "ibge" => 4321832
            ]),
            "4321857" => new Map([
                "name" => "Três Palmeiras",
                "cep" => [ 99675000, 99679999 ],
                "ibge" => 4321857
            ]),
            "4321907" => new Map([
                "name" => "Três Passos",
                "cep" => [ 98600000, 98634999 ],
                "ibge" => 4321907
            ]),
            "4321956" => new Map([
                "name" => "Trindade do Sul",
                "cep" => [ 99615000, 99639999 ],
                "ibge" => 4321956
            ]),
            "4322004" => new Map([
                "name" => "Triunfo",
                "cep" => [ 95840000, 95859999 ],
                "ibge" => 4322004
            ]),
            "4322103" => new Map([
                "name" => "Tucunduva",
                "cep" => [ 98930000, 98939999 ],
                "ibge" => 4322103
            ]),
            "4322152" => new Map([
                "name" => "Tunas",
                "cep" => [ 99330000, 99339999 ],
                "ibge" => 4322152
            ]),
            "4322186" => new Map([
                "name" => "Tupanci do Sul",
                "cep" => [ 99878000, 99879999 ],
                "ibge" => 4322186
            ]),
            "4322202" => new Map([
                "name" => "Tupanciretã",
                "cep" => [ 98170000, 98174999 ],
                "ibge" => 4322202
            ]),
            "4322251" => new Map([
                "name" => "Tupandi",
                "cep" => [ 95775000, 95777999 ],
                "ibge" => 4322251
            ]),
            "4322301" => new Map([
                "name" => "Tuparendi",
                "cep" => [ 98940000, 98946999 ],
                "ibge" => 4322301
            ]),
            "4322327" => new Map([
                "name" => "Turuçu",
                "cep" => [ 96148000, 96149999 ],
                "ibge" => 4322327
            ]),
            "4322343" => new Map([
                "name" => "Ubiretama",
                "cep" => [ 98898000, 98899999 ],
                "ibge" => 4322343
            ]),
            "4322350" => new Map([
                "name" => "União da Serra",
                "cep" => [ 99215000, 99219999 ],
                "ibge" => 4322350
            ]),
            "4322376" => new Map([
                "name" => "Unistalda",
                "cep" => [ 97755000, 97759999 ],
                "ibge" => 4322376
            ]),
            "4322400" => new Map([
                "name" => "Uruguaiana",
                "cep" => [ 97500001, 97537999 ],
                "ibge" => 4322400
            ]),
            "4322509" => new Map([
                "name" => "Vacaria",
                "cep" => [ 95200001, 95229999 ],
                "ibge" => 4322509
            ]),
            "4322533" => new Map([
                "name" => "Vale do Sol",
                "cep" => [ 96878000, 96879999 ],
                "ibge" => 4322533
            ]),
            "4322541" => new Map([
                "name" => "Vale Real",
                "cep" => [ 95778000, 95779999 ],
                "ibge" => 4322541
            ]),
            "4322525" => new Map([
                "name" => "Vale Verde",
                "cep" => [ 95833000, 95834999 ],
                "ibge" => 4322525
            ]),
            "4322558" => new Map([
                "name" => "Vanini",
                "cep" => [ 99290000, 99299999 ],
                "ibge" => 4322558
            ]),
            "4322608" => new Map([
                "name" => "Venâncio Aires",
                "cep" => [ 95800000, 95819999 ],
                "ibge" => 4322608
            ]),
            "4322707" => new Map([
                "name" => "Vera Cruz",
                "cep" => [ 96880000, 96887999 ],
                "ibge" => 4322707
            ]),
            "4322806" => new Map([
                "name" => "Veranópolis",
                "cep" => [ 95330000, 95332999 ],
                "ibge" => 4322806
            ]),
            "4322855" => new Map([
                "name" => "Vespasiano Correa",
                "cep" => [ 95972000, 95974999 ],
                "ibge" => 4322855
            ]),
            "4322905" => new Map([
                "name" => "Viadutos",
                "cep" => [ 99820000, 99824999 ],
                "ibge" => 4322905
            ]),
            "4323002" => new Map([
                "name" => "Viamão",
                "cep" => [ 94400001, 94799999 ],
                "ibge" => 4323002
            ]),
            "4323101" => new Map([
                "name" => "Vicente Dutra",
                "cep" => [ 98450000, 98459999 ],
                "ibge" => 4323101
            ]),
            "4323200" => new Map([
                "name" => "Victor Graeff",
                "cep" => [ 99350000, 99359999 ],
                "ibge" => 4323200
            ]),
            "4323309" => new Map([
                "name" => "Vila Flores",
                "cep" => [ 95334000, 95334999 ],
                "ibge" => 4323309
            ]),
            "4323358" => new Map([
                "name" => "Vila Lângaro",
                "cep" => [ 99955000, 99959999 ],
                "ibge" => 4323358
            ]),
            "4323408" => new Map([
                "name" => "Vila Maria",
                "cep" => [ 99155000, 99159999 ],
                "ibge" => 4323408
            ]),
            "4323457" => new Map([
                "name" => "Vila Nova do Sul",
                "cep" => [ 97385000, 97389999 ],
                "ibge" => 4323457
            ]),
            "4323507" => new Map([
                "name" => "Vista Alegre",
                "cep" => [ 98415000, 98429999 ],
                "ibge" => 4323507
            ]),
            "4323606" => new Map([
                "name" => "Vista Alegre do Prata",
                "cep" => [ 95325000, 95329999 ],
                "ibge" => 4323606
            ]),
            "4323705" => new Map([
                "name" => "Vista Gaúcha",
                "cep" => [ 98535000, 98539999 ],
                "ibge" => 4323705
            ]),
            "4323754" => new Map([
                "name" => "Vitória das Missões",
                "cep" => [ 98850000, 98854999 ],
                "ibge" => 4323754
            ]),
            "4323770" => new Map([
                "name" => "Westfalia",
                "cep" => [ 95893000, 95894999 ],
                "ibge" => 4323770
            ]),
            "4323804" => new Map([
                "name" => "Xangri-Lá",
                "cep" => [ 95588000, 95589999 ],
                "ibge" => 4323804
            ])
        ]);

        return $map;
    }
}