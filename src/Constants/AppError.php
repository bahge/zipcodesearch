<?php
declare(strict_types=1);
namespace Bahge\ZipCodeSearch\Constants;

final class AppError
{
    public static string $STATE_NOT_FOUND = "O Cep não é valido para os estados Brasileiros.";
    public static string $CITY_NOT_FOUND = "Nenhuma cidade encontrada com esse CEP.";
    public static string $CITY_NOT_FOUND_IN_ACRONYM_STATE = "Nenhuma cidade encontrada no estado referenciado.";
}
