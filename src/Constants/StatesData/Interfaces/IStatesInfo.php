<?php
declare(strict_types=1);
namespace Bahge\CepSearch\Constants\StatesData\Interfaces;

interface IStatesInfo
{
    /** @return array<string, array<string, array<int, array<int, int>>|int|string>> */
    public static function statesInfo(): array;
}