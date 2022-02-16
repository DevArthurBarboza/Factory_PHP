<?php

namespace Classes;

class Cachorro
{
    public $nome;
    public $raca;
    public $nascimento;

    public function __construct(mixed $values)
    {
        switch (count($values)) {
            case 1:
                echo "Erro";
                break;
            case 3:
                $this->nascimento = $values[2];
            case 2:
                $this->nome = $values[0];
                $this->raca = $values[1];
                break;
            default:
                echo "Erro";
        }
    }

    public function latir()
    {
        echo "Au Au meu nome é $this->nome";
    }
}