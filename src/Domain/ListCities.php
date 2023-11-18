<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Domain;

use DS\Map;
use ReflectionMethod;

final class ListCities
{
    private Map $cities;
    private Map $cityMap;
    private ?int $zipCode;

    public function __construct()
    {
        $this->zipCode = null;
        $this->cities = new Map();
        $this->cityMap = new Map();
    }

    public static function create(): self
    {
        return new self();
    }

    public function getState(string $state): self
    {
        $state = 'Bahge\ZipCodeSearch\Constants\StatesData\\' . $state;
        $class = new ReflectionMethod($state, 'citiesInfo');
        $this->cities = $class->invoke(new $state);
        return $this;
    }

    public function hasCity(int $zipCode) : bool
    {
        if ( is_null($this->zipCode) ) $this->zipCode = $zipCode;

        $city = $this->cities->filter(function($cityKey, $cityValue) {
            $zipCodeRefs = $cityValue->get('zipCode');
            if(in_array(true, array_map('is_array', $cityValue->get('zipCode')), true))
            {
                foreach($zipCodeRefs as $k => $zipCodeRef) {
                    if ( $this->zipCodeInRange($zipCodeRef) == true ) {
                        return true;
                    }
                }
            }

            if ( $this->zipCodeInRange($zipCodeRefs) == true ) {
                return true;           
            }

            return false;
        });

        if ( !$city->isEmpty() ) {
            $this->cityMap = $city->values()->get(0);
            return true;
        }
        return false;
    }

    /** @param array<int, int> $zipCodeRef
     *  @return bool */
    private function zipCodeInRange(array $zipCodeRef): bool
    {
        if( ( $this->zipCode >= $zipCodeRef[0] ) &&  ( $this->zipCode <= $zipCodeRef[1] ) ) return true;
        return false;
    }

    /** @param int $zipCode
     *  @param string $field 
     *  @return int | string | null | array<string, string | array<int, int> | array<array<int, int>> | int> */
    private function getValueByField(int $zipCode, string $field = null) : int | string | array | null
    {
        if($this->hasCity($zipCode) == true) 
            switch ($field) {
                case 'ibge':
                    return (int) $this->cityMap->get('ibge');
                case 'name':
                    return (string) $this->cityMap->get('name');
                default:
                    return $this->cityMap->toArray();
            }
        
        return null;
    }

    /** @return string | null */
    public function getCityInfo(int $zipCode): string | null 
    { 
        if ($this->getValueByField($zipCode) != null) return json_encode($this->getValueByField($zipCode), JSON_UNESCAPED_UNICODE); 
        return null;
    }

    /** @return string | null */
    public function getName(int $zipCode): string | null 
    { 
        if ($this->getValueByField($zipCode) != null) return $this->getValueByField($zipCode, 'name'); 
        return null;
    }

    /** @return int | null */
    public function getIBGE(int $zipCode): int | null 
    { 
        if ($this->getValueByField($zipCode) != null) return $this->getValueByField($zipCode, 'ibge'); 
        return null;
    }

    public function getCities() : Map { return $this->cities; }
    
    public function getCityMap() : Map  { return $this->cityMap; }
}