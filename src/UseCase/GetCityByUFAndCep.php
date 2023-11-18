<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\UseCase;

use Exception;
use Bahge\ZipCodeSearch\Domain\ListCities;

final class GetIBGEByUFAndCep
{
    private ListCities $listCity;
    public function __construct()
    {
        $this->listCity = ListCities::create();
    }

    public static function create(): GetIBGEByUFAndCep
    {
        return new self();
    }

    function getIBGEByUFAndCep(string $acronymState, int $cep) : int { 
        try {
            $city =  $this->listCity->getState($acronymState);
            if ( $city->hasCity($cep) ) return $city->getIBGE();
            return throw new Exception("Nenhuma cidade encontrada com esse CEP.");
        } catch (Exception $e) {
            return throw new Exception($e->getMessage());
        }
    
    }
}