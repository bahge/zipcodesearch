<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\UseCase;

use Exception;
use Bahge\ZipCodeSearch\Domain\ListState;
use Bahge\ZipCodeSearch\Constants\AppError;


final class GetAcronymStateByZipCode
{

    private ListState $listState;

    public function __construct()
    {
        $this->listState = ListState::create();
    }

    public static function create(): self
    {
        return new self();
    }

    public function getAcronymStateByZipCode(int $zipCode) : string 
    { 
        if ( $this->listState->hasState($zipCode) == false ) throw new Exception(AppError::$STATE_NOT_FOUND);
        return $this->listState->getAcronymState();
    }
    

    public function getListState() { return $this->listState; }
}