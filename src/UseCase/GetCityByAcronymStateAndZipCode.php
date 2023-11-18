<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\UseCase;


use Exception;
use Bahge\ZipCodeSearch\Domain\ListCities;
use Bahge\ZipCodeSearch\Constants\AppError;

final class GetCityByAcronymStateAndZipCode
{
    private ListCities $listCity;

    public function __construct()
    {
        $this->listCity = ListCities::create();
    }

    public static function create(): GetCityByAcronymStateAndZipCode
    {
        return new self();
    }

    public function getCityInfo(string $acronymState, int $zipCode) : string 
    { 
        try {
            $this->searchCity($acronymState, $zipCode);
            return $this->listCity->getCityInfo($zipCode);

        } catch (Exception $e) {
            return $e->getMessage();
        }
    
    }

    public function getName(string $acronymState, int $zipCode) : string 
    { 
        try {
            $this->searchCity($acronymState, $zipCode);
            return $this->listCity->getName($zipCode);

        } catch (Exception $e) {
            return $e->getMessage();
        }
    
    }

    public function getIBGE(string $acronymState, int $zipCode) : int | string 
    { 
        try {
            $this->searchCity($acronymState, $zipCode);
            return $this->listCity->getIBGE($zipCode);

        } catch (Exception $e) {
            return $e->getMessage();
        }
    
    }
    
    protected function getCity(string $acronymState, int $zipCode) : ListCities
    {
        try {
            
            $this->listCity->getState($acronymState);
            if ( !$this->listCity->hasCity($zipCode) ) throw new Exception(AppError::$CITY_NOT_FOUND_IN_ACRONYM_STATE);
            return $this->listCity;

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    protected function searchCity(string $acronymState, int $zipCode) : void
    {
        if ( $this->listCity->getCities()->isEmpty() ) $this->getCity($acronymState, $zipCode);

    }
    
}