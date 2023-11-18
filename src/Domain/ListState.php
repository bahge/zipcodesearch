<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Domain;

use DS\Map;
use Bahge\ZipCodeSearch\Constants\StatesData\States;

final class ListState
{
    private Map $states;
    private Map $statesLimit;
    private Map $state;

    public function __construct()
    {
        $this->state = new Map();
        $this->state->allocate(1);

        $this->states = States::statesInfo();

        $this->statesLimit = States::statesRanges();
    }

    public static function create(): self
    {
        return new self();
    }

    public function hasState(int $zipCode): bool
    {
        if ( ( $zipCode < $this->statesLimit->get("InferiorLimit") ) && ( $zipCode > $this->statesLimit->get("SuperiorLimit") ) ) return false;
        
        $state = $this->states->filter(function($stateKey, $statesValue) use ($zipCode) {
            if (!$statesValue->hasKey('zipCodeRanges')) return false;
            foreach ($statesValue->get('zipCodeRanges') as $k => $zipCodeRange) {
                if ( (count($zipCodeRange) == 2) && ( $zipCode >= $zipCodeRange[0] ) && ( $zipCode <= $zipCodeRange[1] ) ) return true;
            }
            return false;
        });

        if ( !$state->isEmpty() ) {
            $this->state = $state;
            return true;
        }
        return false;
    }
    public function getStates() : Map { return $this->states; }

    public function getState() : Map | null 
    { 
        if ($this->state->isEmpty()) return null;
        return $this->state;
    }
    public function getAcronymState() : string | null 
    { 
        if (!$this->state->isEmpty() && (is_string($this->state->keys()->get(0)))) return $this->state->keys()->get(0);
        return null;
    }

}