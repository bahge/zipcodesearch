<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants;

use DS\Map;
use DS\Vector;
use ReflectionMethod;

final class ListCities
{
    private Map $cities;
    private Vector $cityMap;

    public function __construct()
    {
        $this->cities = new Map();
        $this->cityMap = new Vector();
    }

    public static function create(): self
    {
        return new self();
    }

    public function getState(string $state): self
    {
        $state = 'Bahge\CepSearch\Constants\StatesData\\' . $state;
        $class = new ReflectionMethod($state, 'citiesInfo');
        $data = (array) $class->invoke(new $state);
        $this->cities->putAll($data);
        return $this;
    }

    public function hasCity(int $cep) : bool
    {
        
        $city = $this->cities->filter(function($cityKey, $cityValue) use ($cep) {
            if ( ( is_array($cityValue) ) && ( $cep >= $cityValue['cep'][0] ) && ( $cep <= $cityValue['cep'][1] ) ) return true;
            return false;
        });

        if ( !$city->isEmpty() ) {
            $this->cityMap->push($city->values()->toArray());
            return true;
        }
        return false;
    }

    private function getValueByField(string $field) : int | string | null
    {
        $cityData = (array) $this->cityMap->get(0);
        if ( isset($cityData[0]) ) $cityData = (array) $cityData[0];

        switch ($field) {
            case 'ibge':
                return ( is_int($cityData[$field])) ? $cityData[$field] : 0 ;           
            case 'name':
                return ( is_string($cityData[$field])) ? $cityData[$field] : "" ;
            default:
                return null;
        }
    }

    /** @return string */
    public function getName(): string { return $this->getValueByField('name'); }

    /** @return int */
    public function getIBGE(): int { return $this->getValueByField('ibge'); }

    public function getCities() : Map { return $this->cities; }
    
}