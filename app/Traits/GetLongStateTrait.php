<?php

namespace App\Traits;

trait GetLongStateTrait
{
    public function get($shortState)
    {
        $stateMapping = [
            "AC" => "Acre",
            "AL" => "Alagoas",
            "AP" => "Amapá",
            "AM" => "Amazonas",
            "BA" => "Bahia",
            "CE" => "Ceará",
            "DF" => "Distrito",
            "ES" => "Espírito",
            "GO" => "Goiás",
            "MA" => "Maranhão",
            "MT" => "Mato",
            "MS" => "Mato",
            "MG" => "Minas",
            "PA" => "Pará",
            "PB" => "Paraíba",
            "PR" => "Paraná",
            "PE" => "Pernambuco",
            "PI" => "Piauí",
            "RJ" => "Rio",
            "RN" => "Rio",
            "RS" => "Rio",
            "RO" => "Rondônia",
            "RR" => "Roraima",
            "SC" => "Santa",
            "SP" => "São",
            "SE" => "Sergipe",
            "TO" => "Tocantins",
        ];

        return $stateMapping[$shortState] ?? "Desconhecido";
    }
}
