<?php

include "vendor/autoload.php";

use Classes\Fabrica\FabricaPessoa as Pessoa;
use Classes\Fabrica\FabricaCachorro as FabricaCachorro;

try {

    $pessoa = Pessoa::getPessoa('Arthur', 'Gonçalves');
    $cachorro = FabricaCachorro::getCachorro('Dora', 'Pitbull');

    echo $pessoa->nomeCompleto() . "\n";
    echo $cachorro->latir();
} catch (Exception $e) {
    echo $e;
}