<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Domain;

use DS\Map;
use Bahge\CepSearch\Constants\StatesData\States;
use Bahge\CepSearch\Constants\StatesData\StatesMap;

final class ListState
{
    private Map $states;
    private Map $statesLimit;
    private Map $state;

    public function __construct()
    {
        $this->state = new Map();
        $this->state->allocate(1);

        $this->states = StatesMap::statesInfo();

        $this->statesLimit = StatesMap::statesRanges();
    }

    public static function create(): self
    {
        return new self();
    }

    public function hasState(int $cep): bool
    {
        if ( ( $cep < $this->statesLimit->get("InferiorLimit") ) && ( $cep > $this->statesLimit->get("SuperiorLimit") ) ) return false;
        
        $state = $this->states->filter(function($stateKey, $statesValue) use ($cep) {
            foreach ($statesValue->get('cepRanges') as $k => $cepRange) {
                if ( (count($cepRange) == 2) && ( $cep >= $cepRange[0] ) && ( $cep <= $cepRange[1] ) ) return true;
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
        if (!$this->state->isEmpty()) return $this->state;
        return null;
    }
    public function getAcronymState() : string | null 
    { 
        if (!$this->state->isEmpty() && (is_string($this->state->keys()->get(0)))) return $this->state->keys()->get(0);
        return null;
    }

}