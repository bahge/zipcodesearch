<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants;

use Bahge\CepSearch\Constants\StatesData\States;
use DS\Map;

final class ListState
{
    private Map $states;
    
    private Map $state;

    public function __construct()
    {
        $this->state = new Map();
        $this->state->allocate(1);

        $this->states = new Map();
        $this->states->allocate(27);
        $this->states->putAll(States::statesInfo());
    }

    public static function create(): self
    {
        return new self();
    }

    public function hasState(int $cep): bool
    {
        $state = $this->states->filter(function($stateKey, $statesValue) use ($cep) {
            foreach ($this->getCepRanges($statesValue) as $key => $value) {
                if ( (count($value) == 2) && ( $cep >= $value[0] ) && ( $cep <= $value[1] ) ) return true;
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

    /** @return  array<string, array<int, array<int, int>>|int|string> */
    public function getStateInfo() : array | null 
    { 
        if (!$this->state->isEmpty() && is_array($this->state->values()->get(0))) return $this->state->values()->get(0);
        return null;
    }

    /** @param mixed $statesValue
     *  @return array<int, array<int, int>> */
    protected function getCepRanges(mixed $statesValue): array 
    {
        if ( is_array($statesValue) && array_key_exists('cepRanges', $statesValue) )  return $statesValue['cepRanges'];
        return [];
    }

}