<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants\StatesData;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class PI implements ICitiesInfo
{
    public static int $numberCities = 224;

    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(PI::$numberCities);
        $map->putAll([
            "2200053" => new Map([
                "name" => "Acauã",
                "zipCode" => [ 64748000, 64749999 ],
                "ibge" => 2200053
            ]),
            "2200103" => new Map([
                "name" => "Agricolândia",
                "zipCode" => [ 64440000, 64444999 ],
                "ibge" => 2200103
            ]),
            "2200202" => new Map([
                "name" => "Água Branca",
                "zipCode" => [ 64460000, 64464999 ],
                "ibge" => 2200202
            ]),
            "2200251" => new Map([
                "name" => "Alagoinha do Piauí",
                "zipCode" => [ 64655000, 64659999 ],
                "ibge" => 2200251
            ]),
            "2200277" => new Map([
                "name" => "Alegrete do Piauí",
                "zipCode" => [ 64675000, 64677999 ],
                "ibge" => 2200277
            ]),
            "2200301" => new Map([
                "name" => "Alto Longá",
                "zipCode" => [ 64360000, 64364999 ],
                "ibge" => 2200301
            ]),
            "2200400" => new Map([
                "name" => "Altos",
                "zipCode" => [ 64290000, 64294999 ],
                "ibge" => 2200400
            ]),
            "2200459" => new Map([
                "name" => "Alvorada do Gurguéia",
                "zipCode" => [ 64923000, 64924999 ],
                "ibge" => 2200459
            ]),
            "2200509" => new Map([
                "name" => "Amarante",
                "zipCode" => [ 64400000, 64409999 ],
                "ibge" => 2200509
            ]),
            "2200608" => new Map([
                "name" => "Angical do Piauí",
                "zipCode" => [ 64410000, 64414999 ],
                "ibge" => 2200608
            ]),
            "2200707" => new Map([
                "name" => "Anísio de Abreu",
                "zipCode" => [ 64780000, 64781999 ],
                "ibge" => 2200707
            ]),
            "2200806" => new Map([
                "name" => "Antônio Almeida",
                "zipCode" => [ 64855000, 64857999 ],
                "ibge" => 2200806
            ]),
            "2200905" => new Map([
                "name" => "Aroazes",
                "zipCode" => [ 64310000, 64314999 ],
                "ibge" => 2200905
            ]),
            "2200954" => new Map([
                "name" => "Aroeiras do Itaim",
                "zipCode" => [ 64612000, 64612999 ],
                "ibge" => 2200954
            ]),
            "2201002" => new Map([
                "name" => "Arraial",
                "zipCode" => [ 64480000, 64489999 ],
                "ibge" => 2201002
            ]),
            "2201051" => new Map([
                "name" => "Assunção do Piauí",
                "zipCode" => [ 64333000, 64334999 ],
                "ibge" => 2201051
            ]),
            "2201101" => new Map([
                "name" => "Avelino Lopes",
                "zipCode" => [ 64965000, 64967999 ],
                "ibge" => 2201101
            ]),
            "2201150" => new Map([
                "name" => "Baixa Grande do Ribeiro",
                "zipCode" => [ 64868000, 64869999 ],
                "ibge" => 2201150
            ]),
            "2201176" => new Map([
                "name" => "Barra D'Alcântara",
                "zipCode" => [ 64528000, 64529999 ],
                "ibge" => 2201176
            ]),
            "2201200" => new Map([
                "name" => "Barras",
                "zipCode" => [ 64100000, 64104999 ],
                "ibge" => 2201200
            ]),
            "2201309" => new Map([
                "name" => "Barreiras do Piauí",
                "zipCode" => [ 64990000, 64992999 ],
                "ibge" => 2201309
            ]),
            "2201408" => new Map([
                "name" => "Barro Duro",
                "zipCode" => [ 64455000, 64459999 ],
                "ibge" => 2201408
            ]),
            "2201507" => new Map([
                "name" => "Batalha",
                "zipCode" => [ 64190000, 64199999 ],
                "ibge" => 2201507
            ]),
            "2201556" => new Map([
                "name" => "Bela Vista do Piauí",
                "zipCode" => [ 64705000, 64709999 ],
                "ibge" => 2201556
            ]),
            "2201572" => new Map([
                "name" => "Belém do Piauí",
                "zipCode" => [ 64678000, 64679999 ],
                "ibge" => 2201572
            ]),
            "2201606" => new Map([
                "name" => "Beneditinos",
                "zipCode" => [ 64380000, 64387999 ],
                "ibge" => 2201606
            ]),
            "2201705" => new Map([
                "name" => "Bertolínia",
                "zipCode" => [ 64870000, 64872999 ],
                "ibge" => 2201705
            ]),
            "2201739" => new Map([
                "name" => "Betânia do Piauí",
                "zipCode" => [ 64753000, 64754999 ],
                "ibge" => 2201739
            ]),
            "2201770" => new Map([
                "name" => "Boa Hora",
                "zipCode" => [ 64108000, 64109999 ],
                "ibge" => 2201770
            ]),
            "2201804" => new Map([
                "name" => "Bocaina",
                "zipCode" => [ 64630000, 64634999 ],
                "ibge" => 2201804
            ]),
            "2201903" => new Map([
                "name" => "Bom Jesus",
                "zipCode" => [ 64900000, 64904999 ],
                "ibge" => 2201903
            ]),
            "2201919" => new Map([
                "name" => "Bom Princípio do Piauí",
                "zipCode" => [ 64225000, 64227999 ],
                "ibge" => 2201919
            ]),
            "2201929" => new Map([
                "name" => "Bonfim do Piauí",
                "zipCode" => [ 64775000, 64777999 ],
                "ibge" => 2201929
            ]),
            "2201945" => new Map([
                "name" => "Boqueirão do Piauí",
                "zipCode" => [ 64283000, 64284999 ],
                "ibge" => 2201945
            ]),
            "2201960" => new Map([
                "name" => "Brasileira",
                "zipCode" => [ 64265000, 64269999 ],
                "ibge" => 2201960
            ]),
            "2201988" => new Map([
                "name" => "Brejo do Piauí",
                "zipCode" => [ 64895000, 64897999 ],
                "ibge" => 2201988
            ]),
            "2202000" => new Map([
                "name" => "Buriti dos Lopes",
                "zipCode" => [ 64230000, 64232999 ],
                "ibge" => 2202000
            ]),
            "2202026" => new Map([
                "name" => "Buriti dos Montes",
                "zipCode" => [ 64345000, 64349999 ],
                "ibge" => 2202026
            ]),
            "2202059" => new Map([
                "name" => "Cabeceiras do Piauí",
                "zipCode" => [ 64105000, 64107999 ],
                "ibge" => 2202059
            ]),
            "2202075" => new Map([
                "name" => "Cajazeiras do Piauí",
                "zipCode" => [ 64514000, 64515999 ],
                "ibge" => 2202075
            ]),
            "2202083" => new Map([
                "name" => "Cajueiro da Praia",
                "zipCode" => [ 64222000, 64223999 ],
                "ibge" => 2202083
            ]),
            "2202091" => new Map([
                "name" => "Caldeirão Grande do Piauí",
                "zipCode" => [ 64695000, 64699999 ],
                "ibge" => 2202091
            ]),
            "2202109" => new Map([
                "name" => "Campinas do Piauí",
                "zipCode" => [ 64730000, 64739999 ],
                "ibge" => 2202109
            ]),
            "2202117" => new Map([
                "name" => "Campo Alegre do Fidalgo",
                "zipCode" => [ 64767000, 64767999 ],
                "ibge" => 2202117
            ]),
            "2202133" => new Map([
                "name" => "Campo Grande do Piauí",
                "zipCode" => [ 64578000, 64579999 ],
                "ibge" => 2202133
            ]),
            "2202174" => new Map([
                "name" => "Campo Largo do Piauí",
                "zipCode" => [ 64148000, 64149999 ],
                "ibge" => 2202174
            ]),
            "2202208" => new Map([
                "name" => "Campo Maior",
                "zipCode" => [ 64280000, 64282999 ],
                "ibge" => 2202208
            ]),
            "2202251" => new Map([
                "name" => "Canavieira",
                "zipCode" => [ 64833000, 64834999 ],
                "ibge" => 2202251
            ]),
            "2202307" => new Map([
                "name" => "Canto do Buriti",
                "zipCode" => [ 64890000, 64892999 ],
                "ibge" => 2202307
            ]),
            "2202406" => new Map([
                "name" => "Capitão de Campos",
                "zipCode" => [ 64270000, 64274999 ],
                "ibge" => 2202406
            ]),
            "2202455" => new Map([
                "name" => "Capitão Gervásio Oliveira",
                "zipCode" => [ 64763000, 64763999 ],
                "ibge" => 2202455
            ]),
            "2202505" => new Map([
                "name" => "Caracol",
                "zipCode" => [ 64795000, 64797999 ],
                "ibge" => 2202505
            ]),
            "2202539" => new Map([
                "name" => "Caraúbas do Piauí",
                "zipCode" => [ 64233000, 64234999 ],
                "ibge" => 2202539
            ]),
            "2202554" => new Map([
                "name" => "Caridade do Piauí",
                "zipCode" => [ 64590000, 64594999 ],
                "ibge" => 2202554
            ]),
            "2202604" => new Map([
                "name" => "Castelo do Piauí",
                "zipCode" => [ 64340000, 64342999 ],
                "ibge" => 2202604
            ]),
            "2202653" => new Map([
                "name" => "Caxingó",
                "zipCode" => [ 64228000, 64229999 ],
                "ibge" => 2202653
            ]),
            "2202703" => new Map([
                "name" => "Cocal",
                "zipCode" => [ 64235000, 64237999 ],
                "ibge" => 2202703
            ]),
            "2202711" => new Map([
                "name" => "Cocal de Telha",
                "zipCode" => [ 64278000, 64279999 ],
                "ibge" => 2202711
            ]),
            "2202729" => new Map([
                "name" => "Cocal dos Alves",
                "zipCode" => [ 64238000, 64239999 ],
                "ibge" => 2202729
            ]),
            "2202737" => new Map([
                "name" => "Coivaras",
                "zipCode" => [ 64335000, 64339999 ],
                "ibge" => 2202737
            ]),
            "2202752" => new Map([
                "name" => "Colônia do Gurguéia",
                "zipCode" => [ 64885000, 64889999 ],
                "ibge" => 2202752
            ]),
            "2202778" => new Map([
                "name" => "Colônia do Piauí",
                "zipCode" => [ 64516000, 64517999 ],
                "ibge" => 2202778
            ]),
            "2202802" => new Map([
                "name" => "Conceição do Canindé",
                "zipCode" => [ 64740000, 64744999 ],
                "ibge" => 2202802
            ]),
            "2202851" => new Map([
                "name" => "Coronel José Dias",
                "zipCode" => [ 64793000, 64794999 ],
                "ibge" => 2202851
            ]),
            "2202901" => new Map([
                "name" => "Corrente",
                "zipCode" => [ 64980000, 64984999 ],
                "ibge" => 2202901
            ]),
            "2203008" => new Map([
                "name" => "Cristalândia do Piauí",
                "zipCode" => [ 64995000, 64999999 ],
                "ibge" => 2203008
            ]),
            "2203107" => new Map([
                "name" => "Cristino Castro",
                "zipCode" => [ 64920000, 64922999 ],
                "ibge" => 2203107
            ]),
            "2203206" => new Map([
                "name" => "Curimatá",
                "zipCode" => [ 64960000, 64962999 ],
                "ibge" => 2203206
            ]),
            "2203230" => new Map([
                "name" => "Currais",
                "zipCode" => [ 64905000, 64909999 ],
                "ibge" => 2203230
            ]),
            "2203271" => new Map([
                "name" => "Curral Novo do Piauí",
                "zipCode" => [ 64595000, 64599999 ],
                "ibge" => 2203271
            ]),
            "2203255" => new Map([
                "name" => "Curralinhos",
                "zipCode" => [ 64453000, 64454999 ],
                "ibge" => 2203255
            ]),
            "2203305" => new Map([
                "name" => "Demerval Lobão",
                "zipCode" => [ 64390000, 64394999 ],
                "ibge" => 2203305
            ]),
            "2203354" => new Map([
                "name" => "Dirceu Arcoverde",
                "zipCode" => [ 64785000, 64787999 ],
                "ibge" => 2203354
            ]),
            "2203404" => new Map([
                "name" => "Dom Expedito Lopes",
                "zipCode" => [ 64620000, 64624999 ],
                "ibge" => 2203404
            ]),
            "2203453" => new Map([
                "name" => "Dom Inocêncio",
                "zipCode" => [ 64790000, 64792999 ],
                "ibge" => 2203453
            ]),
            "2203420" => new Map([
                "name" => "Domingos Mourão",
                "zipCode" => [ 64250000, 64252999 ],
                "ibge" => 2203420
            ]),
            "2203503" => new Map([
                "name" => "Elesbão Veloso",
                "zipCode" => [ 64325000, 64329999 ],
                "ibge" => 2203503
            ]),
            "2203602" => new Map([
                "name" => "Eliseu Martins",
                "zipCode" => [ 64880000, 64884999 ],
                "ibge" => 2203602
            ]),
            "2203701" => new Map([
                "name" => "Esperantina",
                "zipCode" => [ 64180000, 64189999 ],
                "ibge" => 2203701
            ]),
            "2203750" => new Map([
                "name" => "Fartura do Piauí",
                "zipCode" => [ 64788000, 64789999 ],
                "ibge" => 2203750
            ]),
            "2203800" => new Map([
                "name" => "Flores do Piauí",
                "zipCode" => [ 64815000, 64819999 ],
                "ibge" => 2203800
            ]),
            "2203859" => new Map([
                "name" => "Floresta do Piauí",
                "zipCode" => [ 64563000, 64564999 ],
                "ibge" => 2203859
            ]),
            "2203909" => new Map([
                "name" => "Floriano",
                "zipCode" => [ 64800001, 64814999 ],
                "ibge" => 2203909
            ]),
            "2204006" => new Map([
                "name" => "Francinópolis",
                "zipCode" => [ 64520000, 64524999 ],
                "ibge" => 2204006
            ]),
            "2204105" => new Map([
                "name" => "Francisco Ayres",
                "zipCode" => [ 64475000, 64479999 ],
                "ibge" => 2204105
            ]),
            "2204154" => new Map([
                "name" => "Francisco Macedo",
                "zipCode" => [ 64683000, 64684999 ],
                "ibge" => 2204154
            ]),
            "2204204" => new Map([
                "name" => "Francisco Santos",
                "zipCode" => [ 64645000, 64649999 ],
                "ibge" => 2204204
            ]),
            "2204303" => new Map([
                "name" => "Fronteiras",
                "zipCode" => [ 64690000, 64694999 ],
                "ibge" => 2204303
            ]),
            "2204352" => new Map([
                "name" => "Geminiano",
                "zipCode" => [ 64613000, 64614999 ],
                "ibge" => 2204352
            ]),
            "2204402" => new Map([
                "name" => "Gilbués",
                "zipCode" => [ 64930000, 64939999 ],
                "ibge" => 2204402
            ]),
            "2204501" => new Map([
                "name" => "Guadalupe",
                "zipCode" => [ 64840000, 64844999 ],
                "ibge" => 2204501
            ]),
            "2204550" => new Map([
                "name" => "Guaribas",
                "zipCode" => [ 64798000, 64799999 ],
                "ibge" => 2204550
            ]),
            "2204600" => new Map([
                "name" => "Hugo Napoleão",
                "zipCode" => [ 64470000, 64474999 ],
                "ibge" => 2204600
            ]),
            "2204659" => new Map([
                "name" => "Ilha Grande",
                "zipCode" => [ 64224000, 64224999 ],
                "ibge" => 2204659
            ]),
            "2204709" => new Map([
                "name" => "Inhuma",
                "zipCode" => [ 64535000, 64539999 ],
                "ibge" => 2204709
            ]),
            "2204808" => new Map([
                "name" => "Ipiranga do Piauí",
                "zipCode" => [ 64540000, 64544999 ],
                "ibge" => 2204808
            ]),
            "2204907" => new Map([
                "name" => "Isaías Coelho",
                "zipCode" => [ 64570000, 64572999 ],
                "ibge" => 2204907
            ]),
            "2205003" => new Map([
                "name" => "Itainópolis",
                "zipCode" => [ 64565000, 64567999 ],
                "ibge" => 2205003
            ]),
            "2205102" => new Map([
                "name" => "Itaueira",
                "zipCode" => [ 64820000, 64824999 ],
                "ibge" => 2205102
            ]),
            "2205151" => new Map([
                "name" => "Jacobina do Piauí",
                "zipCode" => [ 64755000, 64757999 ],
                "ibge" => 2205151
            ]),
            "2205201" => new Map([
                "name" => "Jaicós",
                "zipCode" => [ 64575000, 64577999 ],
                "ibge" => 2205201
            ]),
            "2205250" => new Map([
                "name" => "Jardim do Mulato",
                "zipCode" => [ 64495000, 64499999 ],
                "ibge" => 2205250
            ]),
            "2205276" => new Map([
                "name" => "Jatobá do Piauí",
                "zipCode" => [ 64275000, 64277999 ],
                "ibge" => 2205276
            ]),
            "2205300" => new Map([
                "name" => "Jerumenha",
                "zipCode" => [ 64830000, 64832999 ],
                "ibge" => 2205300
            ]),
            "2205359" => new Map([
                "name" => "João Costa",
                "zipCode" => [ 64765000, 64766999 ],
                "ibge" => 2205359
            ]),
            "2205409" => new Map([
                "name" => "Joaquim Pires",
                "zipCode" => [ 64170000, 64174999 ],
                "ibge" => 2205409
            ]),
            "2205458" => new Map([
                "name" => "Joca Marques",
                "zipCode" => [ 64165000, 64167999 ],
                "ibge" => 2205458
            ]),
            "2205508" => new Map([
                "name" => "José de Freitas",
                "zipCode" => [ 64110000, 64119999 ],
                "ibge" => 2205508
            ]),
            "2205516" => new Map([
                "name" => "Juazeiro do Piauí",
                "zipCode" => [ 64343000, 64344999 ],
                "ibge" => 2205516
            ]),
            "2205524" => new Map([
                "name" => "Júlio Borges",
                "zipCode" => [ 64963000, 64964999 ],
                "ibge" => 2205524
            ]),
            "2205532" => new Map([
                "name" => "Jurema",
                "zipCode" => [ 64782000, 64782999 ],
                "ibge" => 2205532
            ]),
            "2205557" => new Map([
                "name" => "Lagoa Alegre",
                "zipCode" => [ 64138000, 64139999 ],
                "ibge" => 2205557
            ]),
            "2205573" => new Map([
                "name" => "Lagoa de São Francisco",
                "zipCode" => [ 64258000, 64259999 ],
                "ibge" => 2205573
            ]),
            "2205565" => new Map([
                "name" => "Lagoa do Barro do Piauí",
                "zipCode" => [ 64768000, 64769999 ],
                "ibge" => 2205565
            ]),
            "2205581" => new Map([
                "name" => "Lagoa do Piauí",
                "zipCode" => [ 64388000, 64389999 ],
                "ibge" => 2205581
            ]),
            "2205599" => new Map([
                "name" => "Lagoa do Sítio",
                "zipCode" => [ 64308000, 64309999 ],
                "ibge" => 2205599
            ]),
            "2205540" => new Map([
                "name" => "Lagoinha do Piauí",
                "zipCode" => [ 64465000, 64467999 ],
                "ibge" => 2205540
            ]),
            "2205607" => new Map([
                "name" => "Landri Sales",
                "zipCode" => [ 64850000, 64854999 ],
                "ibge" => 2205607
            ]),
            "2205706" => new Map([
                "name" => "Luís Correia",
                "zipCode" => [ 64220000, 64221999 ],
                "ibge" => 2205706
            ]),
            "2205805" => new Map([
                "name" => "Luzilândia",
                "zipCode" => [ 64160000, 64164999 ],
                "ibge" => 2205805
            ]),
            "2205854" => new Map([
                "name" => "Madeiro",
                "zipCode" => [ 64168000, 64169999 ],
                "ibge" => 2205854
            ]),
            "2205904" => new Map([
                "name" => "Manoel Emídio",
                "zipCode" => [ 64875000, 64879999 ],
                "ibge" => 2205904
            ]),
            "2205953" => new Map([
                "name" => "Marcolândia",
                "zipCode" => [ 64685000, 64687999 ],
                "ibge" => 2205953
            ]),
            "2206001" => new Map([
                "name" => "Marcos Parente",
                "zipCode" => [ 64845000, 64849999 ],
                "ibge" => 2206001
            ]),
            "2206050" => new Map([
                "name" => "Massapê do Piauí",
                "zipCode" => [ 64573000, 64574999 ],
                "ibge" => 2206050
            ]),
            "2206100" => new Map([
                "name" => "Matias Olímpio",
                "zipCode" => [ 64150000, 64154999 ],
                "ibge" => 2206100
            ]),
            "2206209" => new Map([
                "name" => "Miguel Alves",
                "zipCode" => [ 64130000, 64137999 ],
                "ibge" => 2206209
            ]),
            "2206308" => new Map([
                "name" => "Miguel Leão",
                "zipCode" => [ 64445000, 64449999 ],
                "ibge" => 2206308
            ]),
            "2206357" => new Map([
                "name" => "Milton Brandão",
                "zipCode" => [ 64253000, 64254999 ],
                "ibge" => 2206357
            ]),
            "2206407" => new Map([
                "name" => "Monsenhor Gil",
                "zipCode" => [ 64450000, 64452999 ],
                "ibge" => 2206407
            ]),
            "2206506" => new Map([
                "name" => "Monsenhor Hipólito",
                "zipCode" => [ 64650000, 64654999 ],
                "ibge" => 2206506
            ]),
            "2206605" => new Map([
                "name" => "Monte Alegre do Piauí",
                "zipCode" => [ 64940000, 64944999 ],
                "ibge" => 2206605
            ]),
            "2206654" => new Map([
                "name" => "Morro Cabeça no Tempo",
                "zipCode" => [ 64968000, 64969999 ],
                "ibge" => 2206654
            ]),
            "2206670" => new Map([
                "name" => "Morro do Chapéu do Piauí",
                "zipCode" => [ 64178000, 64179999 ],
                "ibge" => 2206670
            ]),
            "2206696" => new Map([
                "name" => "Murici dos Portelas",
                "zipCode" => [ 64175000, 64177999 ],
                "ibge" => 2206696
            ]),
            "2206704" => new Map([
                "name" => "Nazaré do Piauí",
                "zipCode" => [ 64825000, 64829999 ],
                "ibge" => 2206704
            ]),
            "2206720" => new Map([
                "name" => "Nazária",
                "zipCode" => [ 64415000, 64419999 ],
                "ibge" => 2206720
            ]),
            "2206753" => new Map([
                "name" => "Nossa Senhora de Nazaré",
                "zipCode" => [ 64288000, 64289999 ],
                "ibge" => 2206753
            ]),
            "2206803" => new Map([
                "name" => "Nossa Senhora dos Remédios",
                "zipCode" => [ 64140000, 64144999 ],
                "ibge" => 2206803
            ]),
            "2207959" => new Map([
                "name" => "Nova Santa Rita",
                "zipCode" => [ 64764000, 64764999 ],
                "ibge" => 2207959
            ]),
            "2206902" => new Map([
                "name" => "Novo Oriente do Piauí",
                "zipCode" => [ 64530000, 64534999 ],
                "ibge" => 2206902
            ]),
            "2206951" => new Map([
                "name" => "Novo Santo Antônio",
                "zipCode" => [ 64365000, 64369999 ],
                "ibge" => 2206951
            ]),
            "2207009" => new Map([
                "name" => "Oeiras",
                "zipCode" => [ 64500000, 64509999 ],
                "ibge" => 2207009
            ]),
            "2207108" => new Map([
                "name" => "Olho D'Água do Piauí",
                "zipCode" => [ 64468000, 64469999 ],
                "ibge" => 2207108
            ]),
            "2207207" => new Map([
                "name" => "Padre Marcos",
                "zipCode" => [ 64680000, 64682999 ],
                "ibge" => 2207207
            ]),
            "2207306" => new Map([
                "name" => "Paes Landim",
                "zipCode" => [ 64710000, 64719999 ],
                "ibge" => 2207306
            ]),
            "2207355" => new Map([
                "name" => "Pajeú do Piauí",
                "zipCode" => [ 64898000, 64899999 ],
                "ibge" => 2207355
            ]),
            "2207405" => new Map([
                "name" => "Palmeira do Piauí",
                "zipCode" => [ 64925000, 64929999 ],
                "ibge" => 2207405
            ]),
            "2207504" => new Map([
                "name" => "Palmeirais",
                "zipCode" => [ 64420000, 64429999 ],
                "ibge" => 2207504
            ]),
            "2207553" => new Map([
                "name" => "Paquetá",
                "zipCode" => [ 64618000, 64619999 ],
                "ibge" => 2207553
            ]),
            "2207603" => new Map([
                "name" => "Parnaguá",
                "zipCode" => [ 64970000, 64974999 ],
                "ibge" => 2207603
            ]),
            "2207702" => new Map([
                "name" => "Parnaíba",
                "zipCode" => [ 64200001, 64219999 ],
                "ibge" => 2207702
            ]),
            "2207751" => new Map([
                "name" => "Passagem Franca do Piauí",
                "zipCode" => [ 64395000, 64399999 ],
                "ibge" => 2207751
            ]),
            "2207777" => new Map([
                "name" => "Patos do Piauí",
                "zipCode" => [ 64580000, 64584999 ],
                "ibge" => 2207777
            ]),
            "2207793" => new Map([
                "name" => "Pau D'Arco do Piauí",
                "zipCode" => [ 64295000, 64299999 ],
                "ibge" => 2207793
            ]),
            "2207801" => new Map([
                "name" => "Paulistana",
                "zipCode" => [ 64750000, 64752999 ],
                "ibge" => 2207801
            ]),
            "2207850" => new Map([
                "name" => "Pavussu",
                "zipCode" => [ 64838000, 64839999 ],
                "ibge" => 2207850
            ]),
            "2207900" => new Map([
                "name" => "Pedro II",
                "zipCode" => [ 64255000, 64257999 ],
                "ibge" => 2207900
            ]),
            "2207934" => new Map([
                "name" => "Pedro Laurentino",
                "zipCode" => [ 64728000, 64729999 ],
                "ibge" => 2207934
            ]),
            "2208007" => new Map([
                "name" => "Picos",
                "zipCode" => [ 64600001, 64609999 ],
                "ibge" => 2208007
            ]),
            "2208106" => new Map([
                "name" => "Pimenteiras",
                "zipCode" => [ 64320000, 64324999 ],
                "ibge" => 2208106
            ]),
            "2208205" => new Map([
                "name" => "Pio IX",
                "zipCode" => [ 64660000, 64669999 ],
                "ibge" => 2208205
            ]),
            "2208304" => new Map([
                "name" => "Piracuruca",
                "zipCode" => [ 64240000, 64242999 ],
                "ibge" => 2208304
            ]),
            "2208403" => new Map([
                "name" => "Piripiri",
                "zipCode" => [ 64260000, 64264999 ],
                "ibge" => 2208403
            ]),
            "2208502" => new Map([
                "name" => "Porto",
                "zipCode" => [ 64145000, 64147999 ],
                "ibge" => 2208502
            ]),
            "2208551" => new Map([
                "name" => "Porto Alegre do Piauí",
                "zipCode" => [ 64858000, 64859999 ],
                "ibge" => 2208551
            ]),
            "2208601" => new Map([
                "name" => "Prata do Piauí",
                "zipCode" => [ 64370000, 64374999 ],
                "ibge" => 2208601
            ]),
            "2208650" => new Map([
                "name" => "Queimada Nova",
                "zipCode" => [ 64758000, 64759999 ],
                "ibge" => 2208650
            ]),
            "2208700" => new Map([
                "name" => "Redenção do Gurguéia",
                "zipCode" => [ 64915000, 64919999 ],
                "ibge" => 2208700
            ]),
            "2208809" => new Map([
                "name" => "Regeneração",
                "zipCode" => [ 64490000, 64494999 ],
                "ibge" => 2208809
            ]),
            "2208858" => new Map([
                "name" => "Riacho Frio",
                "zipCode" => [ 64975000, 64979999 ],
                "ibge" => 2208858
            ]),
            "2208874" => new Map([
                "name" => "Ribeira do Piauí",
                "zipCode" => [ 64725000, 64727999 ],
                "ibge" => 2208874
            ]),
            "2208908" => new Map([
                "name" => "Ribeiro Gonçalves",
                "zipCode" => [ 64865000, 64867999 ],
                "ibge" => 2208908
            ]),
            "2209005" => new Map([
                "name" => "Rio Grande do Piauí",
                "zipCode" => [ 64835000, 64837999 ],
                "ibge" => 2209005
            ]),
            "2209104" => new Map([
                "name" => "Santa Cruz do Piauí",
                "zipCode" => [ 64545000, 64547999 ],
                "ibge" => 2209104
            ]),
            "2209153" => new Map([
                "name" => "Santa Cruz dos Milagres",
                "zipCode" => [ 64315000, 64319999 ],
                "ibge" => 2209153
            ]),
            "2209203" => new Map([
                "name" => "Santa Filomena",
                "zipCode" => [ 64945000, 64959999 ],
                "ibge" => 2209203
            ]),
            "2209302" => new Map([
                "name" => "Santa Luz",
                "zipCode" => [ 64910000, 64914999 ],
                "ibge" => 2209302
            ]),
            "2209377" => new Map([
                "name" => "Santa Rosa do Piauí",
                "zipCode" => [ 64518000, 64519999 ],
                "ibge" => 2209377
            ]),
            "2209351" => new Map([
                "name" => "Santana do Piauí",
                "zipCode" => [ 64615000, 64617999 ],
                "ibge" => 2209351
            ]),
            "2209401" => new Map([
                "name" => "Santo Antônio de Lisboa",
                "zipCode" => [ 64640000, 64644999 ],
                "ibge" => 2209401
            ]),
            "2209450" => new Map([
                "name" => "Santo Antônio dos Milagres",
                "zipCode" => [ 64438000, 64439999 ],
                "ibge" => 2209450
            ]),
            "2209500" => new Map([
                "name" => "Santo Inácio do Piauí",
                "zipCode" => [ 64560000, 64562999 ],
                "ibge" => 2209500
            ]),
            "2209559" => new Map([
                "name" => "São Braz do Piauí",
                "zipCode" => [ 64783000, 64784999 ],
                "ibge" => 2209559
            ]),
            "2209609" => new Map([
                "name" => "São Félix do Piauí",
                "zipCode" => [ 64375000, 64377999 ],
                "ibge" => 2209609
            ]),
            "2209658" => new Map([
                "name" => "São Francisco de Assis do Piauí",
                "zipCode" => [ 64745000, 64747999 ],
                "ibge" => 2209658
            ]),
            "2209708" => new Map([
                "name" => "São Francisco do Piauí",
                "zipCode" => [ 64550000, 64554999 ],
                "ibge" => 2209708
            ]),
            "2209757" => new Map([
                "name" => "São Gonçalo do Gurguéia",
                "zipCode" => [ 64993000, 64994999 ],
                "ibge" => 2209757
            ]),
            "2209807" => new Map([
                "name" => "São Gonçalo do Piauí",
                "zipCode" => [ 64435000, 64437999 ],
                "ibge" => 2209807
            ]),
            "2209856" => new Map([
                "name" => "São João da Canabrava",
                "zipCode" => [ 64635000, 64637999 ],
                "ibge" => 2209856
            ]),
            "2209872" => new Map([
                "name" => "São João da Fronteira",
                "zipCode" => [ 64243000, 64244999 ],
                "ibge" => 2209872
            ]),
            "2209906" => new Map([
                "name" => "São João da Serra",
                "zipCode" => [ 64350000, 64359999 ],
                "ibge" => 2209906
            ]),
            "2209955" => new Map([
                "name" => "São João da Varjota",
                "zipCode" => [ 64510000, 64511999 ],
                "ibge" => 2209955
            ]),
            "2209971" => new Map([
                "name" => "São João do Arraial",
                "zipCode" => [ 64155000, 64159999 ],
                "ibge" => 2209971
            ]),
            "2210003" => new Map([
                "name" => "São João do Piauí",
                "zipCode" => [ 64760000, 64762999 ],
                "ibge" => 2210003
            ]),
            "2210052" => new Map([
                "name" => "São José do Divino",
                "zipCode" => [ 64245000, 64249999 ],
                "ibge" => 2210052
            ]),
            "2210102" => new Map([
                "name" => "São José do Peixe",
                "zipCode" => [ 64555000, 64557999 ],
                "ibge" => 2210102
            ]),
            "2210201" => new Map([
                "name" => "São José do Piauí",
                "zipCode" => [ 64625000, 64629999 ],
                "ibge" => 2210201
            ]),
            "2210300" => new Map([
                "name" => "São Julião",
                "zipCode" => [ 64670000, 64674999 ],
                "ibge" => 2210300
            ]),
            "2210359" => new Map([
                "name" => "São Lourenço do Piauí",
                "zipCode" => [ 64778000, 64779999 ],
                "ibge" => 2210359
            ]),
            "2210375" => new Map([
                "name" => "São Luís do Piauí",
                "zipCode" => [ 64638000, 64639999 ],
                "ibge" => 2210375
            ]),
            "2210383" => new Map([
                "name" => "São Miguel da Baixa Grande",
                "zipCode" => [ 64378000, 64379999 ],
                "ibge" => 2210383
            ]),
            "2210391" => new Map([
                "name" => "São Miguel do Fidalgo",
                "zipCode" => [ 64558000, 64559999 ],
                "ibge" => 2210391
            ]),
            "2210409" => new Map([
                "name" => "São Miguel do Tapuio",
                "zipCode" => [ 64330000, 64332999 ],
                "ibge" => 2210409
            ]),
            "2210508" => new Map([
                "name" => "São Pedro do Piauí",
                "zipCode" => [ 64430000, 64434999 ],
                "ibge" => 2210508
            ]),
            "2210607" => new Map([
                "name" => "São Raimundo Nonato",
                "zipCode" => [ 64770000, 64772999 ],
                "ibge" => 2210607
            ]),
            "2210623" => new Map([
                "name" => "Sebastião Barros",
                "zipCode" => [ 64985000, 64989999 ],
                "ibge" => 2210623
            ]),
            "2210631" => new Map([
                "name" => "Sebastião Leal",
                "zipCode" => [ 64873000, 64874999 ],
                "ibge" => 2210631
            ]),
            "2210656" => new Map([
                "name" => "Sigefredo Pacheco",
                "zipCode" => [ 64285000, 64287999 ],
                "ibge" => 2210656
            ]),
            "2210706" => new Map([
                "name" => "Simões",
                "zipCode" => [ 64585000, 64589999 ],
                "ibge" => 2210706
            ]),
            "2210805" => new Map([
                "name" => "Simplício Mendes",
                "zipCode" => [ 64700000, 64704999 ],
                "ibge" => 2210805
            ]),
            "2210904" => new Map([
                "name" => "Socorro do Piauí",
                "zipCode" => [ 64720000, 64724999 ],
                "ibge" => 2210904
            ]),
            "2210938" => new Map([
                "name" => "Sussuapara",
                "zipCode" => [ 64610000, 64611999 ],
                "ibge" => 2210938
            ]),
            "2210953" => new Map([
                "name" => "Tamboril do Piauí",
                "zipCode" => [ 64893000, 64894999 ],
                "ibge" => 2210953
            ]),
            "2210979" => new Map([
                "name" => "Tanque do Piauí",
                "zipCode" => [ 64512000, 64513999 ],
                "ibge" => 2210979
            ]),
            "2211001" => new Map([
                "name" => "Teresina",
                "zipCode" => [ 64000001, 64099999 ],
                "ibge" => 2211001
            ]),
            "2211100" => new Map([
                "name" => "União",
                "zipCode" => [ 64120000, 64125999 ],
                "ibge" => 2211100
            ]),
            "2211209" => new Map([
                "name" => "Uruçuí",
                "zipCode" => [ 64860000, 64864999 ],
                "ibge" => 2211209
            ]),
            "2211308" => new Map([
                "name" => "Valença do Piauí",
                "zipCode" => [ 64300000, 64307999 ],
                "ibge" => 2211308
            ]),
            "2211357" => new Map([
                "name" => "Várzea Branca",
                "zipCode" => [ 64773000, 64774999 ],
                "ibge" => 2211357
            ]),
            "2211407" => new Map([
                "name" => "Várzea Grande",
                "zipCode" => [ 64525000, 64527999 ],
                "ibge" => 2211407
            ]),
            "2211506" => new Map([
                "name" => "Vera Mendes",
                "zipCode" => [ 64568000, 64569999 ],
                "ibge" => 2211506
            ]),
            "2211605" => new Map([
                "name" => "Vila Nova do Piauí",
                "zipCode" => [ 64688000, 64689999 ],
                "ibge" => 2211605
            ]),
            "2211704" => new Map([
                "name" => "Wall Ferraz",
                "zipCode" => [ 64548000, 64549999 ],
                "ibge" => 2211704
            ])
        ]);

        return $map;
    }
}