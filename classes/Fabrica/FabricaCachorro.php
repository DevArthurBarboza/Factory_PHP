<?php

namespace Classes\Fabrica;

use Classes\Cachorro;

class FabricaCachorro
{
    public static function getCachorro(mixed $values)
    {
        $cachorro = new Cachorro($values);
        return $cachorro;
    }
}