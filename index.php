<?php

use Bahge\ZipCodeSearch\Domain\ListCities;
use Bahge\ZipCodeSearch\Domain\ListState;

require './vendor/autoload.php';

//var_dump(GetCityByCep::create()->getName(96170170));

//var_dump(GetIBGEByUFAndCep::create()->getIBGEByUFAndCep("RS", $cep));

//var_dump(States::statesRanges()->get("numberOfCities"));

$cep = 54220250;
$state = ListState::create();
$city = ListCities::create();
if($state->hasState($cep))
    var_dump( $city->getState($state->getAcronymState())->getName($cep) );
    // var_dump($state->getState());die;

echo number_format((memory_get_usage() / 1024 / 1024 ), 2, ',', ' ') . " Mb" . PHP_EOL;