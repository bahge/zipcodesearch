<?php
namespace Bahge\ZipCodeSearch\Tests\Unit\Domain;

use DS\Map;
use Bahge\ZipCodeSearch\Domain\ListState;
use Bahge\ZipCodeSearch\Domain\ListCities;

describe('ListCities', function () {

    beforeEach(function () {
      
        $this->mockZipCodeValid = 96400150;
        $this->mockZipCodeInvalid = 90000000;
        
        $this->mockCity = new Map();
        $this->mockCity->allocate(2);
        $this->mockCity->putAll([
            "name" => "Bagé",
            "zipCode" => [ 96400001, 96444999 ],
            "ibge" => 4301602
        ]);

        $this->state = ListState::create();
        $this->city = ListCities::create();
    });
    
    it('should not find the city by zip code', function() {
        expect($this->state->hasState($this->mockZipCodeInvalid))
            ->toBeTrue();

        expect($this->city->getState($this->state->getAcronymState())
            ->getName($this->mockZipCodeInvalid))
            ->toBeNull();

        expect($this->city->getState($this->state->getAcronymState())
            ->getIBGE($this->mockZipCodeInvalid))
            ->toBeNull();
            
        expect($this->city->getState($this->state->getAcronymState())
            ->getCityInfo($this->mockZipCodeInvalid))
            ->toBeNull();
    });

    it('should find the city by zip code', function () {
        expect($this->state->hasState($this->mockZipCodeValid))
            ->toBeTrue();
        
        expect($this->state->getStates()->toArray())
            ->toHaveCount(27);
        
        expect($this->city->getState($this->state->getAcronymState())
            ->getName($this->mockZipCodeValid))
            ->toBe($this->mockCity->get('name'));

        expect($this->city->getState($this->state->getAcronymState())
            ->getIBGE($this->mockZipCodeValid))
            ->toBe($this->mockCity->get('ibge'));

        expect($this->city->getState($this->state->getAcronymState())
            ->getCityInfo($this->mockZipCodeValid))
            ->toBe(json_encode($this->mockCity, JSON_UNESCAPED_UNICODE));
        
    });

    it('must contain all cities by the number declared by state', function () {
        $listStates = $this->state->getStates()->toArray();
        
        foreach ($listStates as $acronymState => $value) {
            
            $numCities = $value->get('numberOfCities');
            $cities = $this->city->getState($acronymState)->getCities();

            expect($cities->toArray())
                ->toHaveCount($numCities);

        }
    });

});