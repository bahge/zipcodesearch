<?php

namespace Bahge\ZipCodeSearch\Tests\Unit\Domain;

use DS\Map;
use Bahge\ZipCodeSearch\Domain\ListState;

describe('ListState', function () {

    beforeEach(function () {
      
        $this->mockZipCodeValid = 96400150;
        $this->mockZipCodeInvalid = 900000;

        $this->mockState = new Map();
        $this->mockState->allocate(1);
        $this->mockState->put(
            "RS",
            new Map([
                "numberOfCities" => 497,
                "zipCodeRanges" => [ [ 90000000, 99999999 ] ]
            ])
        );

        $this->state = ListState::create();
    });
    
    it('should not find the zip code', function() {
        expect($this->state->hasState($this->mockZipCodeInvalid))
            ->toBeFalse();
        
        expect($this->state->getState())
            ->toBeNull();
        
        expect($this->state->getAcronymState())
            ->toBeNull();
    });

    it('should find the state by zip code', function() {
        expect($this->state->hasState($this->mockZipCodeValid))
            ->toBeTrue();
        
        expect($this->state->getState()->toArray())
            ->toHaveCount(1);

        expect($this->state->getState())
            ->toMatchObject($this->mockState->get('RS'));
        
        expect($this->state->getAcronymState())
            ->toBe($this->mockState->first()->toArray()['key']);
    });

    it('must contain all states from Brazil', function () {
        expect($this->state->getStates()->toArray())
            ->toHaveCount(27);
    });


});