<?php

namespace Classes;

class Pessoa
{
    public String $nome;
    public String $sobrenome;
    public $nascimento;


    public function nomeCompleto()
    {
        return "$this->nome $this->sobrenome";
    }

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
                $this->sobrenome = $values[1];
                break;
            default:
                echo "Erro";
        }
    }

    public function getNascimento()
    {
        return $this->nascimento;
    }
}