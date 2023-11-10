<?php

use Bahge\CepSearch\UseCase\GetCityByCep;

require './vendor/autoload.php';

var_dump(GetCityByCep::create()->getName(96015000));

//var_dump(GetIBGEByUFAndCep::create()->getIBGEByUFAndCep("RS", $cep));


echo number_format((memory_get_usage() / 1024 / 1024 ), 2, ',', ' ') . " Mb" . PHP_EOL;