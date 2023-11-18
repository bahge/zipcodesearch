<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\UseCase;


use Exception;
use Bahge\ZipCodeSearch\Domain\ListCities;
use Bahge\ZipCodeSearch\Constants\AppError;
use Bahge\ZipCodeSearch\UseCase\GetAcronymStateByZipCode;

final class GetCityByZipCode
{
    private ListCities $listCity;

    public function __construct()
    {
        $this->listCity = ListCities::create();
    }

    public static function create(): GetCityByZipCode
    {
        return new self();
    }

    public function getCityInfo(int $zipCode) : string 
    { 
        try {
            $this->searchCity($zipCode);
            return $this->listCity->getCityInfo($zipCode);

        } catch (Exception $e) {
            return $e->getMessage();
        }
    
    }

    public function getName(int $zipCode) : string 
    { 
        try {
            $this->searchCity($zipCode);
            return $this->listCity->getName($zipCode);

        } catch (Exception $e) {
            return $e->getMessage();
        }
    
    }

    public function getIBGE(int $zipCode) : int | string 
    { 
        try {
            $this->searchCity($zipCode);
            return $this->listCity->getIBGE($zipCode);

        } catch (Exception $e) {
            return $e->getMessage();
        }
    
    }
    
    protected function getCity(int $zipCode) : ListCities
    {
        try {
            
            $this->listCity->getState(GetAcronymStateByZipCode::create()->getAcronymStateByZipCode($zipCode));
            if ( !$this->listCity->hasCity($zipCode) ) throw new Exception(AppError::$CITY_NOT_FOUND);
            return $this->listCity;

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    protected function searchCity(int $zipCode) : void
    {
        if ( $this->listCity->getCities()->isEmpty() ) $this->getCity($zipCode);

    }
    
}