<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\Interfaces\ICitiesInfo;

final class MA implements ICitiesInfo
{
    public static int $numberCities = 217;
    public static function citiesInfo(): Map
    {
        $map = new Map();
        $map->allocate(MA::$numberCities);
        $map->putAll([
            "2100055" => new Map([
                "name" => "Açailândia",
                "cep" => [ 65930000, 65934999 ],
                "ibge" => 2100055
            ]),
            "2100105" => new Map([
                "name" => "Afonso Cunha",
                "cep" => [ 65505000, 65509999 ],
                "ibge" => 2100105
            ]),
            "2100154" => new Map([
                "name" => "Água Doce do Maranhão",
                "cep" => [ 65578000, 65579999 ],
                "ibge" => 2100154
            ]),
            "2100204" => new Map([
                "name" => "Alcântara",
                "cep" => [ 65250000, 65254999 ],
                "ibge" => 2100204
            ]),
            "2100303" => new Map([
                "name" => "Aldeias Altas",
                "cep" => [ 65610000, 65614999 ],
                "ibge" => 2100303
            ]),
            "2100402" => new Map([
                "name" => "Altamira do Maranhão",
                "cep" => [ 65310000, 65314999 ],
                "ibge" => 2100402
            ]),
            "2100436" => new Map([
                "name" => "Alto Alegre do Maranhão",
                "cep" => [ 65413000, 65414999 ],
                "ibge" => 2100436
            ]),
            "2100477" => new Map([
                "name" => "Alto Alegre do Pindaré",
                "cep" => [ 65398000, 65399999 ],
                "ibge" => 2100477
            ]),
            "2100501" => new Map([
                "name" => "Alto Parnaíba",
                "cep" => [ 65810000, 65819999 ],
                "ibge" => 2100501
            ]),
            "2100550" => new Map([
                "name" => "Amapá do Maranhão",
                "cep" => [ 65293000, 65293999 ],
                "ibge" => 2100550
            ]),
            "2100600" => new Map([
                "name" => "Amarante do Maranhão",
                "cep" => [ 65923000, 65923999 ],
                "ibge" => 2100600
            ]),
            "2100709" => new Map([
                "name" => "Anajatuba",
                "cep" => [ 65490000, 65494999 ],
                "ibge" => 2100709
            ]),
            "2100808" => new Map([
                "name" => "Anapurus",
                "cep" => [ 65525000, 65529999 ],
                "ibge" => 2100808
            ]),
            "2100832" => new Map([
                "name" => "Apicum-Açu",
                "cep" => [ 65275000, 65275999 ],
                "ibge" => 2100832
            ]),
            "2100873" => new Map([
                "name" => "Araguanã",
                "cep" => [ 65368000, 65369999 ],
                "ibge" => 2100873
            ]),
            "2100907" => new Map([
                "name" => "Araioses",
                "cep" => [ 65570000, 65577999 ],
                "ibge" => 2100907
            ]),
            "2100956" => new Map([
                "name" => "Arame",
                "cep" => [ 65945000, 65947999 ],
                "ibge" => 2100956
            ]),
            "2101004" => new Map([
                "name" => "Arari",
                "cep" => [ 65480000, 65484999 ],
                "ibge" => 2101004
            ]),
            "2101103" => new Map([
                "name" => "Axixá",
                "cep" => [ 65148000, 65149999 ],
                "ibge" => 2101103
            ]),
            "2101202" => new Map([
                "name" => "Bacabal",
                "cep" => [ 65700000, 65703999 ],
                "ibge" => 2101202
            ]),
            "2101251" => new Map([
                "name" => "Bacabeira",
                "cep" => [ 65143000, 65144999 ],
                "ibge" => 2101251
            ]),
            "2101301" => new Map([
                "name" => "Bacuri",
                "cep" => [ 65270000, 65271999 ],
                "ibge" => 2101301
            ]),
            "2101350" => new Map([
                "name" => "Bacurituba",
                "cep" => [ 65233000, 65234999 ],
                "ibge" => 2101350
            ]),
            "2101400" => new Map([
                "name" => "Balsas",
                "cep" => [ 65800000, 65804999 ],
                "ibge" => 2101400
            ]),
            "2101509" => new Map([
                "name" => "Barão de Grajaú",
                "cep" => [ 65660000, 65664999 ],
                "ibge" => 2101509
            ]),
            "2101608" => new Map([
                "name" => "Barra do Corda",
                "cep" => [ 65950000, 65961999 ],
                "ibge" => 2101608
            ]),
            "2101707" => new Map([
                "name" => "Barreirinhas",
                "cep" => [ 65590000, 65599999 ],
                "ibge" => 2101707
            ]),
            "2101772" => new Map([
                "name" => "Bela Vista do Maranhão",
                "cep" => [ 65335000, 65339999 ],
                "ibge" => 2101772
            ]),
            "2101731" => new Map([
                "name" => "Belágua",
                "cep" => [ 65535000, 65539999 ],
                "ibge" => 2101731
            ]),
            "2101806" => new Map([
                "name" => "Benedito Leite",
                "cep" => [ 65885000, 65887999 ],
                "ibge" => 2101806
            ]),
            "2101905" => new Map([
                "name" => "Bequimão",
                "cep" => [ 65248000, 65249999 ],
                "ibge" => 2101905
            ]),
            "2101939" => new Map([
                "name" => "Bernardo do Mearim",
                "cep" => [ 65723000, 65724999 ],
                "ibge" => 2101939
            ]),
            "2101970" => new Map([
                "name" => "Boa Vista do Gurupi",
                "cep" => [ 65292000, 65292999 ],
                "ibge" => 2101970
            ]),
            "2102002" => new Map([
                "name" => "Bom Jardim",
                "cep" => [ 65380000, 65384999 ],
                "ibge" => 2102002
            ]),
            "2102036" => new Map([
                "name" => "Bom Jesus das Selvas",
                "cep" => [ 65395000, 65397999 ],
                "ibge" => 2102036
            ]),
            "2102077" => new Map([
                "name" => "Bom Lugar",
                "cep" => [ 65704000, 65704999 ],
                "ibge" => 2102077
            ]),
            "2102101" => new Map([
                "name" => "Brejo",
                "cep" => [ 65520000, 65524999 ],
                "ibge" => 2102101
            ]),
            "2102150" => new Map([
                "name" => "Brejo de Areia",
                "cep" => [ 65315000, 65319999 ],
                "ibge" => 2102150
            ]),
            "2102200" => new Map([
                "name" => "Buriti",
                "cep" => [ 65515000, 65519999 ],
                "ibge" => 2102200
            ]),
            "2102309" => new Map([
                "name" => "Buriti Bravo",
                "cep" => [ 65685000, 65689999 ],
                "ibge" => 2102309
            ]),
            "2102325" => new Map([
                "name" => "Buriticupu",
                "cep" => [ 65393000, 65394999 ],
                "ibge" => 2102325
            ]),
            "2102358" => new Map([
                "name" => "Buritirana",
                "cep" => [ [ 65935500, 65935899 ], [ 65935959, 65935959 ] ],
                "ibge" => 2102358
            ]),
            "2102374" => new Map([
                "name" => "Cachoeira Grande",
                "cep" => [ 65165000, 65169999 ],
                "ibge" => 2102374
            ]),
            "2102408" => new Map([
                "name" => "Cajapió",
                "cep" => [ 65230000, 65232999 ],
                "ibge" => 2102408
            ]),
            "2102507" => new Map([
                "name" => "Cajari",
                "cep" => [ 65210000, 65212999 ],
                "ibge" => 2102507
            ]),
            "2102556" => new Map([
                "name" => "Campestre do Maranhão",
                "cep" => [ 65968000, 65969999 ],
                "ibge" => 2102556
            ]),
            "2102606" => new Map([
                "name" => "Cândido Mendes",
                "cep" => [ 65280000, 65282999 ],
                "ibge" => 2102606
            ]),
            "2102705" => new Map([
                "name" => "Cantanhede",
                "cep" => [ 65465000, 65467999 ],
                "ibge" => 2102705
            ]),
            "2102754" => new Map([
                "name" => "Capinzal do Norte",
                "cep" => [ 65735000, 65739999 ],
                "ibge" => 2102754
            ]),
            "2102804" => new Map([
                "name" => "Carolina",
                "cep" => [ 65980000, 65989999 ],
                "ibge" => 2102804
            ]),
            "2102903" => new Map([
                "name" => "Carutapera",
                "cep" => [ 65295000, 65298999 ],
                "ibge" => 2102903
            ]),
            "2103000" => new Map([
                "name" => "Caxias",
                "cep" => [ 65600001, 65609999 ],
                "ibge" => 2103000
            ]),
            "2103109" => new Map([
                "name" => "Cedral",
                "cep" => [ 65260000, 65262999 ],
                "ibge" => 2103109
            ]),
            "2103125" => new Map([
                "name" => "Central do Maranhão",
                "cep" => [ 65267000, 65267999 ],
                "ibge" => 2103125
            ]),
            "2103158" => new Map([
                "name" => "Centro do Guilherme",
                "cep" => [ 65288000, 65288999 ],
                "ibge" => 2103158
            ]),
            "2103174" => new Map([
                "name" => "Centro Novo do Maranhão",
                "cep" => [ 65299000, 65299999 ],
                "ibge" => 2103174
            ]),
            "2103208" => new Map([
                "name" => "Chapadinha",
                "cep" => [ 65500000, 65504999 ],
                "ibge" => 2103208
            ]),
            "2103257" => new Map([
                "name" => "Cidelândia",
                "cep" => [ 65921000, 65921999 ],
                "ibge" => 2103257
            ]),
            "2103307" => new Map([
                "name" => "Codó",
                "cep" => [ 65400000, 65412999 ],
                "ibge" => 2103307
            ]),
            "2103406" => new Map([
                "name" => "Coelho Neto",
                "cep" => [ 65620000, 65624999 ],
                "ibge" => 2103406
            ]),
            "2103505" => new Map([
                "name" => "Colinas",
                "cep" => [ 65690000, 65692999 ],
                "ibge" => 2103505
            ]),
            "2103554" => new Map([
                "name" => "Conceição do Lago-Açu",
                "cep" => [ 65340000, 65344999 ],
                "ibge" => 2103554
            ]),
            "2103604" => new Map([
                "name" => "Coroatá",
                "cep" => [ 65415000, 65417999 ],
                "ibge" => 2103604
            ]),
            "2103703" => new Map([
                "name" => "Cururupu",
                "cep" => [ 65268000, 65268999 ],
                "ibge" => 2103703
            ]),
            "2103752" => new Map([
                "name" => "Davinópolis",
                "cep" => [ 65927000, 65927999 ],
                "ibge" => 2103752
            ]),
            "2103802" => new Map([
                "name" => "Dom Pedro",
                "cep" => [ 65765000, 65767999 ],
                "ibge" => 2103802
            ]),
            "2103901" => new Map([
                "name" => "Duque Bacelar",
                "cep" => [ 65625000, 65629999 ],
                "ibge" => 2103901
            ]),
            "2104008" => new Map([
                "name" => "Esperantinópolis",
                "cep" => [ 65750000, 65752999 ],
                "ibge" => 2104008
            ]),
            "2104057" => new Map([
                "name" => "Estreito",
                "cep" => [ 65975000, 65977999 ],
                "ibge" => 2104057
            ]),
            "2104073" => new Map([
                "name" => "Feira Nova do Maranhão",
                "cep" => [ 65995000, 65999999 ],
                "ibge" => 2104073
            ]),
            "2104081" => new Map([
                "name" => "Fernando Falcão",
                "cep" => [ 65964000, 65967999 ],
                "ibge" => 2104081
            ]),
            "2104099" => new Map([
                "name" => "Formosa da Serra Negra",
                "cep" => [ 65943000, 65944999 ],
                "ibge" => 2104099
            ]),
            "2104107" => new Map([
                "name" => "Fortaleza dos Nogueiras",
                "cep" => [ 65805000, 65807999 ],
                "ibge" => 2104107
            ]),
            "2104206" => new Map([
                "name" => "Fortuna",
                "cep" => [ 65695000, 65699999 ],
                "ibge" => 2104206
            ]),
            "2104305" => new Map([
                "name" => "Godofredo Viana",
                "cep" => [ 65285000, 65287999 ],
                "ibge" => 2104305
            ]),
            "2104404" => new Map([
                "name" => "Gonçalves Dias",
                "cep" => [ 65775000, 65779999 ],
                "ibge" => 2104404
            ]),
            "2104503" => new Map([
                "name" => "Governador Archer",
                "cep" => [ 65770000, 65774999 ],
                "ibge" => 2104503
            ]),
            "2104552" => new Map([
                "name" => "Governador Edison Lobão",
                "cep" => [ 65928000, 65928999 ],
                "ibge" => 2104552
            ]),
            "2104602" => new Map([
                "name" => "Governador Eugênio Barros",
                "cep" => [ 65780000, 65782999 ],
                "ibge" => 2104602
            ]),
            "2104628" => new Map([
                "name" => "Governador Luiz Rocha",
                "cep" => [ 65795000, 65799999 ],
                "ibge" => 2104628
            ]),
            "2104651" => new Map([
                "name" => "Governador Newton Bello",
                "cep" => [ 65363000, 65364999 ],
                "ibge" => 2104651
            ]),
            "2104677" => new Map([
                "name" => "Governador Nunes Freire",
                "cep" => [ 65284000, 65284999 ],
                "ibge" => 2104677
            ]),
            "2104701" => new Map([
                "name" => "Graça Aranha",
                "cep" => [ 65785000, 65789999 ],
                "ibge" => 2104701
            ]),
            "2104800" => new Map([
                "name" => "Grajaú",
                "cep" => [ 65940000, 65942999 ],
                "ibge" => 2104800
            ]),
            "2104909" => new Map([
                "name" => "Guimarães",
                "cep" => [ 65255000, 65259999 ],
                "ibge" => 2104909
            ]),
            "2105005" => new Map([
                "name" => "Humberto de Campos",
                "cep" => [ 65180000, 65189999 ],
                "ibge" => 2105005
            ]),
            "2105104" => new Map([
                "name" => "Icatu",
                "cep" => [ 65170000, 65179999 ],
                "ibge" => 2105104
            ]),
            "2105153" => new Map([
                "name" => "Igarapé do Meio",
                "cep" => [ 65345000, 65349999 ],
                "ibge" => 2105153
            ]),
            "2105203" => new Map([
                "name" => "Igarapé Grande",
                "cep" => [ 65720000, 65722999 ],
                "ibge" => 2105203
            ]),
            "2105302" => new Map([
                "name" => "Imperatriz",
                "cep" => [ 65900001, 65919999 ],
                "ibge" => 2105302
            ]),
            "2105351" => new Map([
                "name" => "Itaipava do Grajaú",
                "cep" => [ 65948000, 65949999 ],
                "ibge" => 2105351
            ]),
            "2105401" => new Map([
                "name" => "Itapecuru Mirim",
                "cep" => [ 65485000, 65489999 ],
                "ibge" => 2105401
            ]),
            "2105427" => new Map([
                "name" => "Itinga do Maranhão",
                "cep" => [ 65939000, 65939999 ],
                "ibge" => 2105427
            ]),
            "2105450" => new Map([
                "name" => "Jatobá",
                "cep" => [ 65693000, 65694999 ],
                "ibge" => 2105450
            ]),
            "2105476" => new Map([
                "name" => "Jenipapo dos Vieiras",
                "cep" => [ 65962000, 65963999 ],
                "ibge" => 2105476
            ]),
            "2105500" => new Map([
                "name" => "João Lisboa",
                "cep" => [ 65922000, 65922999 ],
                "ibge" => 2105500
            ]),
            "2105609" => new Map([
                "name" => "Joselândia",
                "cep" => [ 65755000, 65757999 ],
                "ibge" => 2105609
            ]),
            "2105658" => new Map([
                "name" => "Junco do Maranhão",
                "cep" => [ 65294000, 65294999 ],
                "ibge" => 2105658
            ]),
            "2105708" => new Map([
                "name" => "Lago da Pedra",
                "cep" => [ 65715000, 65715999 ],
                "ibge" => 2105708
            ]),
            "2105807" => new Map([
                "name" => "Lago do Junco",
                "cep" => [ 65710000, 65711999 ],
                "ibge" => 2105807
            ]),
            "2105948" => new Map([
                "name" => "Lago dos Rodrigues",
                "cep" => [ 65712000, 65713999 ],
                "ibge" => 2105948
            ]),
            "2105906" => new Map([
                "name" => "Lago Verde",
                "cep" => [ 65705000, 65705999 ],
                "ibge" => 2105906
            ]),
            "2105922" => new Map([
                "name" => "Lagoa do Mato",
                "cep" => [ 65683000, 65684999 ],
                "ibge" => 2105922
            ]),
            "2105963" => new Map([
                "name" => "Lagoa Grande do Maranhão",
                "cep" => [ 65718000, 65719999 ],
                "ibge" => 2105963
            ]),
            "2105989" => new Map([
                "name" => "Lajeado Novo",
                "cep" => [ 65937000, 65937999 ],
                "ibge" => 2105989
            ]),
            "2106003" => new Map([
                "name" => "Lima Campos",
                "cep" => [ 65728000, 65729999 ],
                "ibge" => 2106003
            ]),
            "2106102" => new Map([
                "name" => "Loreto",
                "cep" => [ 65895000, 65899999 ],
                "ibge" => 2106102
            ]),
            "2106201" => new Map([
                "name" => "Luís Domingues",
                "cep" => [ 65290000, 65291999 ],
                "ibge" => 2106201
            ]),
            "2106300" => new Map([
                "name" => "Magalhães de Almeida",
                "cep" => [ 65560000, 65569999 ],
                "ibge" => 2106300
            ]),
            "2106326" => new Map([
                "name" => "Maracaçumé",
                "cep" => [ 65289000, 65289999 ],
                "ibge" => 2106326
            ]),
            "2106359" => new Map([
                "name" => "Marajá do Sena",
                "cep" => [ 65714000, 65714999 ],
                "ibge" => 2106359
            ]),
            "2106375" => new Map([
                "name" => "Maranhãozinho",
                "cep" => [ 65283000, 65283999 ],
                "ibge" => 2106375
            ]),
            "2106409" => new Map([
                "name" => "Mata Roma",
                "cep" => [ 65510000, 65514999 ],
                "ibge" => 2106409
            ]),
            "2106508" => new Map([
                "name" => "Matinha",
                "cep" => [ 65218000, 65219999 ],
                "ibge" => 2106508
            ]),
            "2106607" => new Map([
                "name" => "Matões",
                "cep" => [ 65645000, 65649999 ],
                "ibge" => 2106607
            ]),
            "2106631" => new Map([
                "name" => "Matões do Norte",
                "cep" => [ 65468000, 65469999 ],
                "ibge" => 2106631
            ]),
            "2106672" => new Map([
                "name" => "Milagres do Maranhão",
                "cep" => [ 65545000, 65549999 ],
                "ibge" => 2106672
            ]),
            "2106706" => new Map([
                "name" => "Mirador",
                "cep" => [ 65850000, 65859999 ],
                "ibge" => 2106706
            ]),
            "2106755" => new Map([
                "name" => "Miranda do Norte",
                "cep" => [ 65495000, 65499999 ],
                "ibge" => 2106755
            ]),
            "2106805" => new Map([
                "name" => "Mirinzal",
                "cep" => [ 65265000, 65266999 ],
                "ibge" => 2106805
            ]),
            "2106904" => new Map([
                "name" => "Monção",
                "cep" => [ 65360000, 65362999 ],
                "ibge" => 2106904
            ]),
            "2107001" => new Map([
                "name" => "Montes Altos",
                "cep" => [ 65936000, 65936999 ],
                "ibge" => 2107001
            ]),
            "2107100" => new Map([
                "name" => "Morros",
                "cep" => [ 65160000, 65164999 ],
                "ibge" => 2107100
            ]),
            "2107209" => new Map([
                "name" => "Nina Rodrigues",
                "cep" => [ 65450000, 65454999 ],
                "ibge" => 2107209
            ]),
            "2107258" => new Map([
                "name" => "Nova Colinas",
                "cep" => [ 65808000, 65809999 ],
                "ibge" => 2107258
            ]),
            "2107308" => new Map([
                "name" => "Nova Iorque",
                "cep" => [ 65880000, 65884999 ],
                "ibge" => 2107308
            ]),
            "2107357" => new Map([
                "name" => "Nova Olinda do Maranhão",
                "cep" => [ 65274000, 65274999 ],
                "ibge" => 2107357
            ]),
            "2107407" => new Map([
                "name" => "Olho D'Água das Cunhãs",
                "cep" => [ 65706000, 65706999 ],
                "ibge" => 2107407
            ]),
            "2107456" => new Map([
                "name" => "Olinda Nova do Maranhão",
                "cep" => [ 65223000, 65224999 ],
                "ibge" => 2107456
            ]),
            "2107506" => new Map([
                "name" => "Paço do Lumiar",
                "cep" => [ 65130000, 65137999 ],
                "ibge" => 2107506
            ]),
            "2107605" => new Map([
                "name" => "Palmeirândia",
                "cep" => [ 65238000, 65244999 ],
                "ibge" => 2107605
            ]),
            "2107704" => new Map([
                "name" => "Paraibano",
                "cep" => [ 65670000, 65679999 ],
                "ibge" => 2107704
            ]),
            "2107803" => new Map([
                "name" => "Parnarama",
                "cep" => [ 65640000, 65644999 ],
                "ibge" => 2107803
            ]),
            "2107902" => new Map([
                "name" => "Passagem Franca",
                "cep" => [ 65680000, 65682999 ],
                "ibge" => 2107902
            ]),
            "2108009" => new Map([
                "name" => "Pastos Bons",
                "cep" => [ 65870000, 65879999 ],
                "ibge" => 2108009
            ]),
            "2108058" => new Map([
                "name" => "Paulino Neves",
                "cep" => [ 65585000, 65589999 ],
                "ibge" => 2108058
            ]),
            "2108108" => new Map([
                "name" => "Paulo Ramos",
                "cep" => [ 65716000, 65717999 ],
                "ibge" => 2108108
            ]),
            "2108207" => new Map([
                "name" => "Pedreiras",
                "cep" => [ 65725000, 65726999 ],
                "ibge" => 2108207
            ]),
            "2108256" => new Map([
                "name" => "Pedro do Rosário",
                "cep" => [ 65206000, 65207999 ],
                "ibge" => 2108256
            ]),
            "2108306" => new Map([
                "name" => "Penalva",
                "cep" => [ 65213000, 65214999 ],
                "ibge" => 2108306
            ]),
            "2108405" => new Map([
                "name" => "Peri Mirim",
                "cep" => [ 65245000, 65247999 ],
                "ibge" => 2108405
            ]),
            "2108454" => new Map([
                "name" => "Peritoró",
                "cep" => [ 65418000, 65419999 ],
                "ibge" => 2108454
            ]),
            "2108504" => new Map([
                "name" => "Pindaré Mirim",
                "cep" => [ 65370000, 65377999 ],
                "ibge" => 2108504
            ]),
            "2108603" => new Map([
                "name" => "Pinheiro",
                "cep" => [ 65200000, 65203999 ],
                "ibge" => 2108603
            ]),
            "2108702" => new Map([
                "name" => "Pio XII",
                "cep" => [ 65707000, 65707999 ],
                "ibge" => 2108702
            ]),
            "2108801" => new Map([
                "name" => "Pirapemas",
                "cep" => [ 65460000, 65464999 ],
                "ibge" => 2108801
            ]),
            "2108900" => new Map([
                "name" => "Poção de Pedras",
                "cep" => [ 65740000, 65749999 ],
                "ibge" => 2108900
            ]),
            "2109007" => new Map([
                "name" => "Porto Franco",
                "cep" => [ 65970000, 65972999 ],
                "ibge" => 2109007
            ]),
            "2109056" => new Map([
                "name" => "Porto Rico do Maranhão",
                "cep" => [ 65263000, 65264999 ],
                "ibge" => 2109056
            ]),
            "2109106" => new Map([
                "name" => "Presidente Dutra",
                "cep" => [ 65760000, 65761999 ],
                "ibge" => 2109106
            ]),
            "2109205" => new Map([
                "name" => "Presidente Juscelino",
                "cep" => [ 65140000, 65142999 ],
                "ibge" => 2109205
            ]),
            "2109239" => new Map([
                "name" => "Presidente Médici",
                "cep" => [ 65279000, 65279999 ],
                "ibge" => 2109239
            ]),
            "2109270" => new Map([
                "name" => "Presidente Sarney",
                "cep" => [ 65204000, 65205999 ],
                "ibge" => 2109270
            ]),
            "2109304" => new Map([
                "name" => "Presidente Vargas",
                "cep" => [ 65455000, 65459999 ],
                "ibge" => 2109304
            ]),
            "2109403" => new Map([
                "name" => "Primeira Cruz",
                "cep" => [ 65190000, 65194999 ],
                "ibge" => 2109403
            ]),
            "2109452" => new Map([
                "name" => "Raposa",
                "cep" => [ 65138000, 65139999 ],
                "ibge" => 2109452
            ]),
            "2109502" => new Map([
                "name" => "Riachão",
                "cep" => [ 65990000, 65994999 ],
                "ibge" => 2109502
            ]),
            "2109551" => new Map([
                "name" => "Ribamar Fiquene",
                "cep" => [ 65938000, 65938999 ],
                "ibge" => 2109551
            ]),
            "2109601" => new Map([
                "name" => "Rosário",
                "cep" => [ 65150000, 65152999 ],
                "ibge" => 2109601
            ]),
            "2109700" => new Map([
                "name" => "Sambaíba",
                "cep" => [ 65830000, 65839999 ],
                "ibge" => 2109700
            ]),
            "2109759" => new Map([
                "name" => "Santa Filomena do Maranhão",
                "cep" => [ 65768000, 65769999 ],
                "ibge" => 2109759
            ]),
            "2109809" => new Map([
                "name" => "Santa Helena",
                "cep" => [ 65208000, 65209999 ],
                "ibge" => 2109809
            ]),
            "2109908" => new Map([
                "name" => "Santa Inês",
                "cep" => [ 65300001, 65309999 ],
                "ibge" => 2109908
            ]),
            "2110005" => new Map([
                "name" => "Santa Luzia",
                "cep" => [ 65390000, 65392999 ],
                "ibge" => 2110005
            ]),
            "2110039" => new Map([
                "name" => "Santa Luzia do Paruá",
                "cep" => [ 65272000, 65273999 ],
                "ibge" => 2110039
            ]),
            "2110104" => new Map([
                "name" => "Santa Quitéria do Maranhão",
                "cep" => [ 65540000, 65544999 ],
                "ibge" => 2110104
            ]),
            "2110203" => new Map([
                "name" => "Santa Rita",
                "cep" => [ 65145000, 65147999 ],
                "ibge" => 2110203
            ]),
            "2110237" => new Map([
                "name" => "Santana do Maranhão",
                "cep" => [ 65555000, 65559999 ],
                "ibge" => 2110237
            ]),
            "2110278" => new Map([
                "name" => "Santo Amaro do Maranhão",
                "cep" => [ 65195000, 65199999 ],
                "ibge" => 2110278
            ]),
            "2110302" => new Map([
                "name" => "Santo Antônio dos Lopes",
                "cep" => [ 65730000, 65734999 ],
                "ibge" => 2110302
            ]),
            "2110401" => new Map([
                "name" => "São Benedito do Rio Preto",
                "cep" => [ 65440000, 65449999 ],
                "ibge" => 2110401
            ]),
            "2110500" => new Map([
                "name" => "São Bento",
                "cep" => [ 65235000, 65237999 ],
                "ibge" => 2110500
            ]),
            "2110609" => new Map([
                "name" => "São Bernardo",
                "cep" => [ 65550000, 65554999 ],
                "ibge" => 2110609
            ]),
            "2110658" => new Map([
                "name" => "São Domingos do Azeitão",
                "cep" => [ 65888000, 65889999 ],
                "ibge" => 2110658
            ]),
            "2110708" => new Map([
                "name" => "São Domingos do Maranhão",
                "cep" => [ 65790000, 65794999 ],
                "ibge" => 2110708
            ]),
            "2110807" => new Map([
                "name" => "São Félix de Balsas",
                "cep" => [ 65890000, 65894999 ],
                "ibge" => 2110807
            ]),
            "2110856" => new Map([
                "name" => "São Francisco do Brejão",
                "cep" => [ 65929000, 65929999 ],
                "ibge" => 2110856
            ]),
            "2110906" => new Map([
                "name" => "São Francisco do Maranhão",
                "cep" => [ 65650000, 65659999 ],
                "ibge" => 2110906
            ]),
            "2111003" => new Map([
                "name" => "São João Batista",
                "cep" => [ 65225000, 65229999 ],
                "ibge" => 2111003
            ]),
            "2111029" => new Map([
                "name" => "São João do Carú",
                "cep" => [ 65385000, 65389999 ],
                "ibge" => 2111029
            ]),
            "2111052" => new Map([
                "name" => "São João do Paraíso",
                "cep" => [ 65973000, 65974999 ],
                "ibge" => 2111052
            ]),
            "2111078" => new Map([
                "name" => "São João do Soter",
                "cep" => [ 65615000, 65619999 ],
                "ibge" => 2111078
            ]),
            "2111102" => new Map([
                "name" => "São João dos Patos",
                "cep" => [ 65665000, 65667999 ],
                "ibge" => 2111102
            ]),
            "2111201" => new Map([
                "name" => "São José de Ribamar",
                "cep" => [ 65110000, 65129999 ],
                "ibge" => 2111201
            ]),
            "2111250" => new Map([
                "name" => "São José dos Basílios",
                "cep" => [ 65762000, 65762999 ],
                "ibge" => 2111250
            ]),
            "2111300" => new Map([
                "name" => "São Luís",
                "cep" => [ 65000001, 65109999 ],
                "ibge" => 2111300
            ]),
            "2111409" => new Map([
                "name" => "São Luís Gonzaga do Maranhão",
                "cep" => [ 65708000, 65708999 ],
                "ibge" => 2111409
            ]),
            "2111508" => new Map([
                "name" => "São Mateus do Maranhão",
                "cep" => [ 65470000, 65479999 ],
                "ibge" => 2111508
            ]),
            "2111532" => new Map([
                "name" => "São Pedro da Água Branca",
                "cep" => [ 65920000, 65920999 ],
                "ibge" => 2111532
            ]),
            "2111573" => new Map([
                "name" => "São Pedro dos Crentes",
                "cep" => [ 65978000, 65979999 ],
                "ibge" => 2111573
            ]),
            "2111607" => new Map([
                "name" => "São Raimundo das Mangabeiras",
                "cep" => [ 65840000, 65849999 ],
                "ibge" => 2111607
            ]),
            "2111631" => new Map([
                "name" => "São Raimundo do Doca Bezerra",
                "cep" => [ 65753000, 65754999 ],
                "ibge" => 2111631
            ]),
            "2111672" => new Map([
                "name" => "São Roberto",
                "cep" => [ 65758000, 65759999 ],
                "ibge" => 2111672
            ]),
            "2111706" => new Map([
                "name" => "São Vicente Ferrer",
                "cep" => [ 65220000, 65222999 ],
                "ibge" => 2111706
            ]),
            "2111722" => new Map([
                "name" => "Satubinha",
                "cep" => [ 65709000, 65709999 ],
                "ibge" => 2111722
            ]),
            "2111748" => new Map([
                "name" => "Senador Alexandre Costa",
                "cep" => [ 65783000, 65784999 ],
                "ibge" => 2111748
            ]),
            "2111763" => new Map([
                "name" => "Senador La Rocque",
                "cep" => [ [ 65935000, 65935499 ], [ 65935958, 65935958 ], [ 65935970, 65935970 ] ],
                "ibge" => 2111763
            ]),
            "2111789" => new Map([
                "name" => "Serrano do Maranhão",
                "cep" => [ 65269000, 65269999 ],
                "ibge" => 2111789
            ]),
            "2111805" => new Map([
                "name" => "Sítio Novo",
                "cep" => [ 65925000, 65926999 ],
                "ibge" => 2111805
            ]),
            "2111904" => new Map([
                "name" => "Sucupira do Norte",
                "cep" => [ 65860000, 65869999 ],
                "ibge" => 2111904
            ]),
            "2111953" => new Map([
                "name" => "Sucupira do Riachão",
                "cep" => [ 65668000, 65669999 ],
                "ibge" => 2111953
            ]),
            "2112001" => new Map([
                "name" => "Tasso Fragoso",
                "cep" => [ 65820000, 65829999 ],
                "ibge" => 2112001
            ]),
            "2112100" => new Map([
                "name" => "Timbiras",
                "cep" => [ 65420000, 65429999 ],
                "ibge" => 2112100
            ]),
            "2112209" => new Map([
                "name" => "Timon",
                "cep" => [ 65630001, 65639999 ],
                "ibge" => 2112209
            ]),
            "2112233" => new Map([
                "name" => "Trizidela do Vale",
                "cep" => [ 65727000, 65727999 ],
                "ibge" => 2112233
            ]),
            "2112274" => new Map([
                "name" => "Tufilândia",
                "cep" => [ 65378000, 65379999 ],
                "ibge" => 2112274
            ]),
            "2112308" => new Map([
                "name" => "Tuntum",
                "cep" => [ 65763000, 65764999 ],
                "ibge" => 2112308
            ]),
            "2112407" => new Map([
                "name" => "Turiaçu",
                "cep" => [ 65278000, 65278999 ],
                "ibge" => 2112407
            ]),
            "2112456" => new Map([
                "name" => "Turilândia",
                "cep" => [ 65276000, 65277999 ],
                "ibge" => 2112456
            ]),
            "2112506" => new Map([
                "name" => "Tutóia",
                "cep" => [ 65580000, 65584999 ],
                "ibge" => 2112506
            ]),
            "2112605" => new Map([
                "name" => "Urbano Santos",
                "cep" => [ 65530000, 65534999 ],
                "ibge" => 2112605
            ]),
            "2112704" => new Map([
                "name" => "Vargem Grande",
                "cep" => [ 65430000, 65439999 ],
                "ibge" => 2112704
            ]),
            "2112803" => new Map([
                "name" => "Viana",
                "cep" => [ 65215000, 65217999 ],
                "ibge" => 2112803
            ]),
            "2112852" => new Map([
                "name" => "Vila Nova dos Martírios",
                "cep" => [ 65924000, 65924999 ],
                "ibge" => 2112852
            ]),
            "2112902" => new Map([
                "name" => "Vitória do Mearim",
                "cep" => [ 65350000, 65359999 ],
                "ibge" => 2112902
            ]),
            "2113009" => new Map([
                "name" => "Vitorino Freire",
                "cep" => [ 65320000, 65334999 ],
                "ibge" => 2113009
            ]),
            "2114007" => new Map([
                "name" => "Zé Doca",
                "cep" => [ 65365000, 65367999 ],
                "ibge" => 2114007
            ])
        ]);

        return $map;
    }
}