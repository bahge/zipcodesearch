<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\UseCase;

use DS\Map;
use Exception;
use Bahge\ZipCodeSearch\Domain\ListState;
use Bahge\ZipCodeSearch\Domain\ListCities;

final class GetCityByCep
{

    private ListState $listState;
    private ListCities $listCity;

    public function __construct()
    {
        $this->listState = ListState::create();
        $this->listCity = ListCities::create();
    }

    public static function create(): GetCityByCep
    {
        return new self();
    }

    public function getInfoByCep(int $cep) : string 
    { 
        try {
            $this->searchCity($cep);
            return $this->listCity->getCityInfo();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    
    }

    public function getName(int $cep) : string 
    { 
        try {
            $this->searchCity($cep);
            return $this->listCity->getName();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    
    }

    public function getIBGE(int $cep) : int | string 
    { 
        try {
            $this->searchCity($cep);
            return $this->listCity->getIBGE();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    
    }
    
    protected function getCity(int $cep) : ListCities
    {
        if ( $this->listState->hasState($cep) ) {
            $this->listCity->getState($this->listState->getAcronymState());
            
            if ( !$this->listCity->hasCity($cep) ) return throw new Exception("Nenhuma cidade encontrada com esse CEP.");
            return $this->listCity;
        }
        return throw new Exception("Nenhum estado encontrado com esse CEP.");
    }

    protected function searchCity(int $cep) : void
    {
        if ( $this->listCity->getCities()->isEmpty() ) $this->getCity($cep);

    }
    
}