<?php

namespace Classes\Fabrica;

use Classes\Pessoa;

class FabricaPessoa
{
    public static function getPessoa(mixed $values)
    {
        $pessoa = new Pessoa($values);
        return $pessoa;
    }
}