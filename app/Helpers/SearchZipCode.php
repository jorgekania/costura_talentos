<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class SearchZipCode
{
    public string $searchUrl;
    public int $zipCode;

    public function __construct(int $zipCode)
    {
        $this->zipCode = $zipCode;
        $this->baseUrl = "https://viacep.com.br/ws/$zipCode/json";
    }

    public function search()
    {
        $res = Http::get($this->baseUrl)->json();

        if (array_key_exists('erro', $res)){
            return false;
        }

        return $res;

    }
}
