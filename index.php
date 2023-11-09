<?php
use Bahge\CepSearch\Constants\ListCities;
use Bahge\CepSearch\Constants\ListState;

require './vendor/autoload.php';

$cep = 0;
var_dump(getIBGEByCep($cep));
echo number_format((memory_get_usage() / 1024 / 1024 ), 2, ',', ' ') . " Mb" . PHP_EOL;

function getIBGEByCep(int $cep) : int { 
    try {
        $city = getCity($cep);
        if ( $city->hasCity($cep) ) return $city->getIBGE();
        return throw new Exception("Nenhuma cidade encontrada com esse CEP.");
    } catch (Exception $e) {
        return throw new Exception($e->getMessage());
    }

}

function getCity(int $cep) : ListCities
{
    $listState = ListState::create();
    $listCity = ListCities::create();
    if ( $listState->hasState($cep) ) return $listCity->getState($listState->getAcronymState());
    return throw new Exception("Nenhum estado encontrado com esse CEP.");
}


