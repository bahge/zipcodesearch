# Casos de Uso

## Buscando a sigla do estado pelas faixas de CEP
O caso de uso ```GetAcronymStateByZipCod```, através do método ```getAcronymStateByZipCode```, retorna a sigla do estado ou lança uma excessão de falha ao encontrar o CEP em algum estado.  

### Cep existe para uma das faixas válidas por estado
```php
use Bahge\ZipCodeSearch\UseCase\GetAcronymStateByZipCode;

try {

    $uf = GetAcronymStateByZipCode::create()->getAcronymStateByZipCode(96015000);
    echo $uf . PHP_EOL;

} catch (Exception $exception) {

    echo $exception->getMessage() . PHP_EOL;

}
```

```bash
RS
```

### Cep não existe para uma das faixas válidas por estado
```php
use Bahge\ZipCodeSearch\UseCase\GetAcronymStateByZipCode;

try {

    $uf = GetAcronymStateByZipCode::create()->getAcronymStateByZipCode(960150);
    echo $uf . PHP_EOL;

} catch (Exception $exception) {

    echo $exception->getMessage() . PHP_EOL;

}
```

```bash
O Cep não é valido para os estados Brasileiros.
```

## Buscando informações da cidade pelo CEP
O caso de uso ```GetCityByZipCode```, tem três métodos.  
  
1. ```getName```: retorna o nome da cidade;  
2. ```getIBGE```: retorna o código completo do IBGE, formado por estado dois primeiros caracteres e o código da cidade.
3. ```getCityInfo```: retorna um json com o objeto da cidade, retornado: nome da cidade, faixas de cep e código do IBGE completo.

Assim como o método anterior caso o CEP, não esteja numa das faixas do estado, se comportará como o caso de uso ```GetAcronymStateByZipCod```.  
  
  
### Cep válido para uma faixa de cidade
```php
use Bahge\ZipCodeSearch\UseCase\GetCityByZipCode;

try {

    $cityName = GetCityByZipCode::create()->getName(96400100);
    echo $cityName . PHP_EOL;

    $IBGE = GetCityByZipCode::create()->getIBGE(96400100);
    echo $IBGE . PHP_EOL;

    $cityInfo = GetCityByZipCode::create()->getCityInfo(96400100);
    echo $cityInfo . PHP_EOL;

} catch (Exception $exception) {

    echo $exception->getMessage() . PHP_EOL;
    
}
```

```bash
Bagé
4301602
{"name":"Bagé","zipCode":[96400001,96444999],"ibge":4301602}
```

### Cep válido porém não está em uma faixa de cidade declarada
```php
use Bahge\ZipCodeSearch\UseCase\GetCityByZipCode;

try {

    $cityName = GetCityByZipCode::create()->getName(96400100);
    echo $cityName . PHP_EOL;

    $IBGE = GetCityByZipCode::create()->getIBGE(96015000);
    echo $IBGE . PHP_EOL;

    $cityInfo = GetCityByZipCode::create()->getCityInfo(90000000);
    echo $cityInfo . PHP_EOL;

} catch (Exception $exception) {

    echo $exception->getMessage() . PHP_EOL;
    
}
```

```bash
Bagé
4314407
Nenhuma cidade encontrada com esse CEP.
```
Embora os dois primeiros métodos tenham encontrado uma referência, o último método ```getCityInfo```, retornou **Nenhuma cidade encontrada com esse CEP.**, esse faixa de CEP 90000000 é valida para o estado do Rio Grande do Sul, segundo a fonte dos correios, porém não há relacionamento a uma cidade específica.  


## Buscando informações da cidade pela sigla do estado e o CEP
O caso de uso ```GetCityByAcronymStateAndZipCode```, tem três métodos.  
  
1. ```getName```: retorna o nome da cidade;  
2. ```getIBGE```: retorna o código completo do IBGE, formado por estado dois primeiros caracteres e o código da cidade.
3. ```getCityInfo```: retorna um json com o objeto da cidade, retornado: nome da cidade, faixas de cep e código do IBGE completo.

Assim como os métodos anteriores caso o CEP, não esteja numa das faixas do estado, se comportará como o caso de uso ```GetAcronymStateByZipCod```.  Além disso o comportamento quando a faixa que se encontra no estado mas não há cidade declara é idêntico ao ```GetCityByZipCode```, porém ele apresenta uma leve diferença no instancimento levando a uma dimínuição de 3% de memória requerido, dependendo do estado referenciado.
  
  
### Sigla e Cep válidos para uma faixa de cidade
```php
use Bahge\ZipCodeSearch\UseCase\GetCityByAcronymStateAndZipCode;

try {

    $cityName = GetCityByAcronymStateAndZipCode::create()->getName("RS", 96400100);
    echo $cityName . PHP_EOL;

    $IBGE = GetCityByAcronymStateAndZipCode::create()->getIBGE("RS", 96015000);
    echo $IBGE . PHP_EOL;

    $cityInfo = GetCityByAcronymStateAndZipCode::create()->getCityInfo("RS", 96400100);
    echo $cityInfo . PHP_EOL;

} catch (Exception $exception) {

    echo $exception->getMessage() . PHP_EOL;
    
}
```

```bash
Bagé
4314407
{"name":"Bagé","zipCode":[96400001,96444999],"ibge":4301602}
```

### Cep inválido para sigla requerida
```php
use Bahge\ZipCodeSearch\UseCase\GetCityByAcronymStateAndZipCode;

try {

    $cityName = GetCityByAcronymStateAndZipCode::create()->getName("RS", 90000000);
    echo $cityName . PHP_EOL;

    $IBGE = GetCityByAcronymStateAndZipCode::create()->getIBGE("SP", 96015000);
    echo $IBGE . PHP_EOL;

    $cityInfo = GetCityByAcronymStateAndZipCode::create()->getCityInfo("PE", 54220250);
    echo $cityInfo . PHP_EOL;

} catch (Exception $exception) {

    echo $exception->getMessage() . PHP_EOL;
    
}
```

```bash
Nenhuma cidade encontrada no estado referenciado.
Nenhuma cidade encontrada no estado referenciado.
{"name":"Jaboatão dos Guararapes","zipCode":[54000001,54499999],"ibge":2607901}
```
Diferente do caso de uso anterior aqui o erro apresentado referência a sigla requerida, embora o range da cidade esteja dentro do intervalo aceitado para o estado, no primeiro caso a mensagem é a mesma.